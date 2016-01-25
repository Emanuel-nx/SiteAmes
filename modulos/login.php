<!DOCTYPE html>
<html>
    <head>
        <title>Ames - login</title>
        <link rel="SHORTCUT ICON" href="favicon.ico">
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link rel="SHORTCUT ICON" href="favicon.ico">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
    </head>
    <body>
        <form method="post" class="" id="login" action="valida_login">
            <div class="">
                <div class="">
                    <img src="../img/123.jpg">
                </div>
                <div class="alert alert-success" role="alert" style="display:none;"></div>
                <div class="alert alert-danger" role="alert" style="display:none;"></div>
                <h2 class="">Bem-vindo ao Administrador</h2>
                <ul class="">
                    <li>
                        <label>Login:</label>
                        <input id="Matricula" name="Matricula" placeholder="Login:" type="text">
                    </li>
                    <li>
                        <label>Senha:</label>
                        <input id="Senha" name="Senha" placeholder="Senha:" value="" type="password">
                    </li>
                    <li class="clearfix">
                        <a href="esqueciSenha" class="">Esqueci a senha</a>
                        <button type="submit" value="entrar"class="btn pull-right">Entrar</button>
                    </li>
                </ul>
            </div>
        </form>
    </body>
</html>