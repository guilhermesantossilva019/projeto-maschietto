<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/5ab5fb0fcc.js" crossorigin="anonymous"></script>

    <title>Projetin</title>
</head>

<body>

    <!-- cabeçalho -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" id="navbar">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
                <div class="cart-icon">
                    <a href="adicionar-img.php" style="padding-right: 1rem;"><i class="fa-solid fa-plus"></i></a>
                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- carrosel -->
    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slide1.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slide2.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slide3.webp" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- beneficios -->
    <section id="benefits">

    </section>

    <!-- products -->
    <section id="products">
        <div class="products-box">
            <!-- new -->
                <?php
        //só vai funcionar se ele adicionou algo no carrinho
        if (isset($_GET['produto_adicionado']) && $_GET['produto_adicionado'] == 'true') {
            echo '<script>alert("Produto adicionado ao carrinho!");</script>';
        }

        include 'archives/conexao.php';
        //o Array será usado para adicionar os produtos do banco
        $produtos = array(); 
        
        $sql = "SELECT * FROM produto";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

            if ($stmt->rowCount() > 0) {
                
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $produto = array(
                        "id" => $row['id'],
                        "nome" => $row['nome'],
                        "preco" => $row['preco'],
                        "imagem" => $row['imagem']
                    );
                     // Adicione o produto ao array de produtos
                     $produtos[] = $produto;
                }
            } else {
                echo "Nenhum produto encontrado.";
            }

        // exibindo os produtos que estão no array
       
        foreach ($produtos as $produto) {
            echo '
                <div class="card" style="width: 18rem;">
                    <img src="'. $produto['imagem'].'" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">'. $produto['nome'] .'</h5>
                        <p class="card-text">' . $produto['preco']. '</p>
                        <a href="adicionar.php?id=' . $produto['id'] . '" class="btn btn-primary">Add ao carrinho</a>
                    </div>
            </div>
            ';
        }

        ?>

            <!-- new -->
            <div class="card" style="width: 18rem;">
                <img src="img/null.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </section>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>