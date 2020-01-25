<!DOCTYPE html>
<html lan="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="estilo.css">
<title>Hello, world!</title>
</head>
<body>
<div class="container">
    <!--Slider  de productos-->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
         <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
         <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
         <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
       </ol>
      <div class="carousel-inner ">
         <div class="carousel-item active">
            <img src="imagenes/nike.jpg" class="slider-img d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
               <h5>First slide label</h5>
               <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
         </div>
         <div class="carousel-item">
            <img src="imagenes/levis.jpg" class="slider-img d-block " alt="...">
            <div class="carousel-caption d-none d-md-block">
               <h5>Second slide label</h5>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
         </div>
         <div class="carousel-item">
              <img src="imagenes/tommy.jpg" class="slider-img d-block " alt="...">
              <div class="carousel-caption d-none d-md-block">
                 <h5>Third slide label</h5>
                 <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
             </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
     <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
     </a>
</div>
   
    <!--El buscador de la pagina-->
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <nav class="navbar navbar-light bg-light">
        <form class="form-inline formulario-buscar">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
     </nav>
    </div>
   
   
   <br>

    <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Inicio</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Masculino</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#"></a>
      <a class="dropdown-item" href="#">Zapatos</a>
      <a class="dropdown-item" href="#">Zapatillas</a>
      <a class="dropdown-item" href="#">Camisas</a>
      <a class="dropdown-item" href="#">Camisetas</a>
      <a class="dropdown-item" href="#">Polos</a>
      <a class="dropdown-item" href="#">Jeans</a>
      <a class="dropdown-item" href="#">Pantalones</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Femenino</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#"></a>
      <a class="dropdown-item" href="#">Tacones</a>
      <a class="dropdown-item" href="#">Zapatillas</a>
      <a class="dropdown-item" href="#">Botas</a>
      <a class="dropdown-item" href="#">Zandalia/Baletas</a>
      <a class="dropdown-item" href="#">Blusas</a>
      <a class="dropdown-item" href="#">Vestidos</a>
      <a class="dropdown-item" href="#">Jeans</a>
      <a class="dropdown-item" href="#">Pantalones</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>


</html>
