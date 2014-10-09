<?php

if ($conexao = mysql_connect("localhost", "root", "")) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $telefone = $_POST['telefone'];
    
    mysql_select_db("fiquecomtailor", $conexao);
    mysql_query("INSERT INTO pessoa (nome, email, sexo, telefone) VALUES ('$nome', '$email', '$sexo', '$telefone')");

    mysql_close($conexao);
    
    echo "<script> ('Mensagem enviada com sucesso! Em breve Tailor irá ver sua ficha');
        window.location.href = '../obrigado.php';



</script>";
} else {

    echo "<script>alert('Não foi possível enviar o contato, tente mais tarde.');history.go(-1) </script>";
    die('Não foi possível conectar');
}
?>