<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->


<html>
  <head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="style.css" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading">Cadastrar Usuário</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Cadastrar</h2>
   <p>insira seu e-mail e senha</p>
   </div>
    <form id="Login" method="POST" action="{{url('usuario')}}">
        @csrf
        <div class="form-group">
            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
        </div>

        <div class="form-group">
            <input type="password" class="form-control" id="inputPassword" placeholder="Senha" name="senha">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>
    </div>
<p class="botto-text"> Designed by Sunil Rajput</p>
</div></div></div>


</body>
</html>
