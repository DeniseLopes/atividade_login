<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Login;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function index()
    {

        return view('login.index');
    }


    public function create()
    {
       
        return view('usuario.index');
    }

    public function esqueciEmail()
    {
        $id = 1;
        $login = User::where('id', $id)->first();
 
        Mail::to($login->email)->send(new SendMailUser($login));
    }

    public function store(Request $request)
    {
         //dd($request->all());
        DB::beginTransaction();
        try {
            
            $usuario = Login::create([
                'name' => $request->nome,
                'email' => $request->email,
                'senha' => Hash::make($request->senha),
                'remember_token' => Str::random(60),
            
            ]);
         
            $usuario->save();
            DB::commit();
            return redirect('/')->with('success', 'Usuário cadastrado com sucesso!');
        } catch (Exception $e) {
            DB::rollback();
            return back()->with('error', 'erro ao tentar cadastrar usuário. cod: ' . $e);
        }
    }

}
