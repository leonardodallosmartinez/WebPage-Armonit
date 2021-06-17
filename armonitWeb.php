<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--compatibilidad Internet explorer-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--responsive para mobiles-->
    <title>Armonit diseño</title>
    <!--CSS bootstrap5-->    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--bootstrap5 con poppoer.js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!--CSS propios-->
    <link rel="stylesheet" href="armonitWeb.css">
    <!--JQuery 3.6.0-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>    
</head>
<body>
    <!--alerta Verificacion de datos asignados-->
    <?php
    if(isset($_GET["datos"])=="si"){
        echo '<script>
        $(function(){
           alert("Los datos han sido subidos correctamente."); 
        });
    </script>';
    }
    ?>
    <header><!--encabezado basico-->
        <!--Espacio previo (texto o imagen)-->
        <!--<div class="container-fluid">
            <br>
            <h3 id="titulo1">Armonit Diseño</h3>
            <p>Diseño de espacios interiores para negocios</p>
            <p>Diseño de muebles para el hogar</p>
        </div>-->        
        <!--baner-->
        <div class="banner">
            <img src="armonit_titulo.jpg" alt="banner de bienvenida">
        </div>    
        </div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top bg-gradient"> 
            <div class="container-fluid">
                <!--brand-->
                <a class="navbar-brand" href="#"><img src="armonit_logo.jpg" alt="" width="30px" class="d-inline-block align-text-top"> Armonit</a>
                <!--toggle collapser button-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <!--links-->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Urbanismo</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Interiores</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Item 1</a></li>
                                <li><a class="dropdown-item" href="#">Item 2</a></li>
                                <li><a class="dropdown-item" href="#">Item 3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hogar</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Item 1</a></li>
                                <li><a class="dropdown-item" href="#">Item 2</a></li>
                                <li><a class="dropdown-item" href="#">Item 3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Contacto</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Consultar contacto empresa</a></li>
                                <li><a class="dropdown-item" href="inscribir_cliente.php">Inscribir cliente</a></li>
                                <li><a class="dropdown-item" href="consultar_cliente.php">Consultar cliente</a></li>
                            </ul>
                        </li>                       
                    </ul>
                    <!--form search-->
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>                        
                </div>
            </div>
        </nav>        
        <main>
            <!--Carousel de imagenes con tiempo de transición-->
            <div id="carousel_princ" class="carousel slide" data-bs-ride="carousel">
                <!--Indicadores-->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel_princ" data-bs-slide-to="0" class="active" aria-current="true" aria-label="slide 1"></button>
                    <button type="button" data-bs-target="#carousel_princ" data-bs-slide-to="1" aria-current="true" aria-label="slide 2"></button>
                    <button type="button" data-bs-target="#carousel_princ" data-bs-slide-to="2" aria-current="true" aria-label="slide 3"></button>
                    <button type="button" data-bs-target="#carousel_princ" data-bs-slide-to="3" aria-current="true" aria-label="slide 4"></button>                
                </div>
                <!--Slides-->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="armonit_slide_2.jpg" class="d-block" style="margin:0 auto;" width="95%" height="" alt="Armonit diseño 1">
                        <!--caption-->
                        <div class="carousel-caption d-none d-sm-block text-start">
                            <h5>Descripción imagen #1</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, excepturi.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="armonit_slide_1.jpg" class="d-block" style="margin-left: auto; margin-right: auto;" width="95%" alt="Armonit diseño 2">
                        <div class="carousel-caption d-none d-sm-block">
                            <h5>Descripcion imagen #2</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, vero!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="armonit_slide_3.jpg" class="d-block" style="margin-left: auto; margin-right: auto;" width="95%" alt="Armonit diseño 3">
                        <div class="carousel-caption d-none d-sm-block">
                            <h5>Descripcion imagen #3</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, similique.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="armonit_slide_4.jpg" class="d-block" style="margin-left: auto; margin-right: auto;" width="95%" alt="Armonit diseño 4">
                        <div class="carousel-caption d-none d-sm-block text-end">
                            <h5>Descripcion imagen #4</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut, autem?</p>
                        </div>
                    </div>
                </div>
                <!--Controles-->
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel_princ" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel_princ" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Prev</span>
                </button>
            </div>
            <!--Oferta de servicios secundarios-->
            <div class="container marketing">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="secundarios _1.jpg" alt="secundarios 1"">
                        <h2>Diseños de Interiores</h2>
                        <p>Realizamos trabajos acorde a estilos modernos y armonicos</p>
                        <p><a class="btn btn-outline-secondary" href="#">Ver detalles &raquo;</a></p>
                    </div>
                    <div class="col-lg-4">
                        <img src="secundarios _2.jpg" alt="">
                        <h2>Muebleria</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, consequuntur.</p>
                        <p><a class="btn btn-outline-secondary" href="#">Ver detalles &raquo;</a></p>
                    </div>
                    <div class="col-lg-4">
                        <img src="secundarios _3.jpg" alt="">
                        <h2>Diseños establecimientos</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, blanditiis.</p>
                        <p><a class="btn btn-outline-secondary" href="">Ver detalles &raquo;</a></p>
                    </div>
                </div>
                <!--Caraceriticas ofertas-->
                <!--1 caracteristica-->
            <hr class="carac-divisor">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="carac-titulo">Titulo primer diseño a describir. <span class="text-muted">Agradables sensacion de tranquilidad</span></h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio dignissimos rem eum veniam rerum minus, dolores reiciendis enim accusantium eius!</p>
                </div>
                <div class="col-md-8">
                    <div class="car_imagen">
                        <img src="carac_1.jpg" alt="Imagen carac_1">
                    </div>
                </div>
            </div>
            <!--2 caracteristica-->
            <hr class="carac-divisor">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="carac-titulo">Titulo segundo diseño a describir. <span class="text-muted">Subtitulo descriptivo</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium molestias officia distinctio mollitia dolor perferendis?!</p>
                </div>
                <div class="col-md-8">
                    <div class="car_imagen">
                        <img src="carac_2.jpg" alt="Imagen carac_2">
                    </div>
                </div>
            </div>
            <!--3 caracteristica-->
            <hr class="carac-divisor">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="carac-titulo">Titulo tercer diseño a describir. <span class="text-muted">Subtitulo descriptivo</span></h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis cupiditate, consequuntur voluptatem neque libero velit.</p>
                </div>
                <div class="col-md-8">
                    <div class="car_imagen">
                        <img src="carac_3.jpg" alt="Imagen carac_3">
                    </div>
                </div>
            </div>
            <!--4 caracteristica-->
            <hr class="carac-divisor">
            <div class="row">
                <div class="col-md-4 carac">
                    <h2 class="carac-titulo">Titulo cuarto diseño a describir. <span class="text-muted">Agradables sensacion de paz</span></h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime, enim modi? Laboriosam nesciunt doloremque cum officia nobis? Culpa qui possimus inventore officiis sit aperiam ullam rem minus quam, natus voluptatum.</p>
                </div>
                <div class="col-md-8">
                    <div class="car_imagen">
                        <img src="carac_4.jpg" alt="Imagen carac_4">
                    </div>
                </div>
            </div>
            <hr class="carac-divisor">
            </div>
            
        </main>           
    </header>

    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy Armonit Diseño-Colombia. &middot;<a href="#"> Privacy</a> &middot;<a href="#"> Terms</a></p>        
    </footer>
    
    
</body>
</html>

<!--JS propios-->
<script src="armonitWeb.js"></script>