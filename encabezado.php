<?php
//echo 'hola desde encabezado.php';
function makeHeader(){
    $header='<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top bg-gradient"> 
    <div class="container-fluid">
        <!--brand-->
        <a class="navbar-brand" href="armonitWeb.php"><img src="armonit_logo.jpg" alt="" width="30px" class="d-inline-block align-text-top"> Armonit</a>
        <!--toggle collapser button-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <!--links-->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="armonitWeb.php">Home</a>
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
</nav>';
    echo $header;
}
?>