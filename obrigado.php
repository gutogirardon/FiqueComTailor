<!DOCTYPE html>
<html>
    <head>

        <title>FiqueComTailor.Com - Yeah its me!</title>
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <link rel="stylesheet" type="text/css" href="./css/estilo.css" media="all" />
        <link rel="stylesheet" type="text/css" href="./css/lol.css" media="all" />

    </head>
    <body>
        <div class="container">
            <!-- tailor top bar -->
            <div class="tailor-top">
                <a href="#" target="_blank">Home</a>
                <span class="right">
                        <a href="https://www.youtube.com/watch?v=ijrbT9ebbcI">
                            <strong>Vai shora?</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ tailor top bar -->
            <header>
                <h1><span>Estatísticas até o momento</span></h1>
                <!--/ include dos dados totais do banco -->
                <h3>    <?php
                    include("./controller/dados.php");
                    ?>                    
                </h3>
            </header>   
           
            <br>
            <div  class="form" >
                <center>OBRIGADO POR AJUDAR <br>NESTA CAMPANHA</center>
                <br>
                <br> <center> <img src="./images/tailorLogo.png"/></center>
                <br>
                <br>
                <br>
                </form> 
            </div>    
            <header>
                <h1><span>FiqueComTailor.com</span> Abrace esta causa, ajude o menino</h1>
                <!--/ include dos dados totais do banco -->

            </header>
        </div>

    </body>

</html>

