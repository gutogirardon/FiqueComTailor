<?php
session_start();
?>
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
            <center> <img src="./images/tailorLogo.png"/></center>
            <br>
<?php

            $n1 = rand(1, 10);
            $n2 = rand(1, 10);
            $soma = $n1 + $n2;
            $_SESSION['captcha'] = $n1 + $n2;
            ?>
            <script type="text/javascript">
                function Validar() {
                    var soma = "<?php echo $soma; ?>";
                    var campo = document.getElementById("captcha").value;
                    if (campo == soma) {
                        
                    } else {
                        alert("Porra, conta errada noob");
                    }

                }
            </script>
            <div  class="form">
                <form id="contato" action="./controller/cadastra.php" method="post"> 
                    <p class="contato"><label for="nome">Nome</label></p> 
                    <input id="nome" name="nome" tabindex="1" placeholder="Escreva seu nomezinho" required="" tabindex="1" type="text"> 

                    <p class="contato"><label for="email">Email</label></p> 
                    <input id="email" name="email" tabindex="2" placeholder="exemplo@fiquecomtailor.com" required="" type="email"> 

                    <p class="contato"><label for="sexo">Informe seu sexo</label></p>
                    <select class="select-style gender" tabindex="3" name="sexo">
                        <option value="m">Mulher</option>
                        <option value="h">Homem</option>
                    </select><br><br>

                    <p class="contato"><label for="telefone">Contato</label></p> 
                    <input id="telefone" name="telefone" tabindex="4" placeholder="dd+telefone" required="" type="text" maxlength="10"> <br>
                    
                    <p class="contato"><label for="email">Quanto é <?php echo "$n1 + $n2 = "; ?></label></p> 
                    <input id="captcha" name="captcha" tabindex="5" maxlength="2" required="required" type="text" size="2"> 
                    
                    <input class="buttom" name="enviar" id="submit" onclick="Validar();" tabindex="5" value="Candidatar-me" type="submit"> 	 
                </form> 
            </div>    
            <header>
                <h1><span>FiqueComTailor.com</span> Abrace esta causa, ajude o menino</h1>
                <!--/ include dos dados totais do banco -->

            </header>
        </div>

    </body>

</html>

