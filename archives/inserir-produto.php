<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            width: 100vw;
            height: 100vh;

            background-color: #222;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-size: 16pt;
            font-weight: bold;
            color: #fcfcfc;
        }

        a {
            margin-top: 1rem;
            background-color: #fcfcfc;
            color: black;
            text-decoration: none;
            padding: 0.5rem;
            border-radius: 5px;
        }
    </style>

    <title>Produto cadastrado com sucesso!</title>
</head>
<body>
    
<?php
include('conexao.php');

if(isset($_FILES['imagem'])) {
    $ext = strtolower(substr($_FILES['imagem']['name'], -4)); //Pegando extensão do arquivo
	
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = '../img/'; //Diretório para uploads 
    move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $nome_arc = $new_name;
    $ext_arq = $ext;

    $dir2 = 'img/';
    $caminhodaimagem = $dir2.$new_name;
    -
    // Corrigir a consulta SQL e evitar SQL injection usando prepared statements
    $sql = "INSERT INTO produto (id, nome, preco, nome_arc, ext_arq, imagem) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $id);
    $stmt->bindParam(2, $nome);
    $stmt->bindParam(3, $preco);
    $stmt->bindParam(4, $nome_arc);
    $stmt->bindParam(5, $ext_arq);
    $stmt->bindParam(6, $caminhodaimagem);
    
    if ($stmt->execute()) {
        echo("
        Imagem enviada com sucesso!
        <a href='../index.php'>Voltar</a>
            ");
    } else {
        echo("
        Erro ao enviar a imagem.
        <a href='../index.php'>Voltar</a>
            ");
    }
    
    $stmt->closeCursor();
} 

?>


</body>
</html>