<?php
    session_start();
    if(isset($_SESSION['logado'])){
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
                    echo "SESSÃO EM PHP<br><br>";
                    echo "USUÁRIO LOGADO!!!!";
                    echo "ACESSO PERMITIDO!!!!";
                    echo "<br><a href='javascript:window.history.go(-1);'>
                        VOLTA PARA PÁGINA ANTERIOR</a>";
                    echo "<br><br>";
                    echo "<a href='logout.php'>LOGOUT DO SISTEMA</a>";
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
                <?php
                    echo "SESSÃO EM PHP<br><br>";
                    echo "USUÁRIO NÃO ESTÁ LOGADO!!!!";
                    echo "<br>ACESSO NÃO PERMITIDO!!!!";
                    echo "<br><br>";
                    echo "<a href='index.php'>LOGIN NO SISTEMA</a>";

                ?>
            </div>
        </body>
    </html>
<?php
    }
?>