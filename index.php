<?php
    //iniciando a sessão
    session_start();
    if(!empty($_POST["user"]) && !empty($_POST["password"])){
?>
        <!DOCTYPE html>
        <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <title>Introdução ao PHP</title>
                <link type="text/css" rel="stylesheet" href="estilo.css"/>
            </head>
            <body>
                <h1>CT Desenvolvimento de Sistemas - Back-End</h1>
                <div id="container">
                    <?php
                        $user  = $_POST['user'];
                        $senha = $_POST['password'];
                        if($user=='adm' && $senha=='1234'){
                            //definindo valor para "logado"
                            $_SESSION['logado']=TRUE;
                            echo "USUÁRIO LOGADO COM SUCESSO!!!<br>ACESSO PERMITIDO!!!<BR><BR>";
                            echo "<a href='paginarestrita.php'>ENTRAR NA PÁGINA RESTRITA</a>";
                            echo "<br><br>";
                            echo "<a href='homepage.php'>IR PARA HOMEPAGE</a>";
                        }else{
                            echo "<p class='falha'>FALHA AO LOGAR NO SISTEMA!!!<br>
                                  ACESSO NÃO PERMITIDO!!!</p><br><br>";
                            echo "<a href='index.php'>LOGIN DO SISTEMA</a>";
                        }

                    ?>
                </div>
            </body>
        </html>
<?php
    }else{
?>
    <!DOCTYPE html>
        <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <title>Introdução ao PHP</title>
                <link type="text/css" rel="stylesheet" href="estilo.css"/>
            </head>
            <body>
                <h1>CT Desenvolvimento de Sistemas - Back-End</h1>
                <div id="container">
                    <form method="POST" action="index.php">
                        <p>USUÁRIO: <input type="text" name="user"/></p>
                        <p>SENHA: <input type="password" name="password"/></p>
                        <p>
                            <input type="submit" value="LOGAR"/>
                        </p>
                    </form>
                </div>
            </body>
        </html>
<?php
    }
?>