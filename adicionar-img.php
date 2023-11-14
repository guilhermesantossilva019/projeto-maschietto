<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .box-title .title {
        position: relative;
        text-align: center;
        color: #222;
        font-size: 35px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 5px;
        color: #fcfcfc;
    }

    .box-formulario {

        width: 100%;
        height: 100vh;
        align-items: center;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        background-color: #232323;
        padding: 60px 0;

    }

    .formulario {

        width: 700px;
        background: #232323;
        padding: 60px 5%;
        text-align: center;

    }


    .formulario span {
        position: relative;
        display: flex;
        margin: 45px 10px;

    }

    #file {
        padding: 19px 12px 10px;
    }

    /*Botão*/
    .btn-submit {

        color: #fff;
        background: #909090;
        cursor: pointer;
        border: none;
        border-radius: 3px;
        transition: 0.2s;
        width: 100%;
        padding: 0.5em 1em;
        font-size: 1.3em;
        font-weight: bold;
        float: left;

    }

    .btn-submit:hover {
        background-color: #bfddf3;
        color: #222;
    }

    main {
        padding: 2rem;
    }

    .card {
        background-color: #fcfcfc;
        height: 60vh;
        background-size: cover;
        padding: 0.5rem;
        border-radius: 5px;
    }

    .card-img-top {
        width: 100%;
        height: 60%;
        object-fit: cover;
        border-radius: 5px;
    }

    .butao {
        position: absolute;
        right: 20px;
        top: 20px;
    }

    #consulta {
        right: 80px;
    }

    .butao a {
        text-decoration: none;
        color: #fff;
    }
    </style>
</head>

<body>
    <button type="button" class="btn btn-danger butao"><a href="index.php">Voltar</a></button>

    <form method="POST" action="archives/inserir-produto.php" enctype="multipart/form-data">

        <div class="box-formulario">

            <div class="formulario">

                <div class="box-title">
                    <h2 class="title">Adicionar produto
                    </h2>
                </div>
                <form action="#" method="post">

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="id" placeholder="ID">
                        <label for="floatingInput">ID do Produto</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nome" placeholder="Password">
                        <label for="floatingPassword">Nome da Imagem</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="preco" placeholder="Password">
                        <label for="floatingPassword">Preço</label>
                    </div>
                    <div class="form-floating mb-3" id="file-box">
                        <input type="file" class="form-control" id="file" name="imagem" accept="image/*">
                    </div>

                    <input type="submit" class="form-control btn-submit" value="Enviar">

                </form>
            </div>
        </div>

    </form>

    <main>

    </main>

</body>

</html>