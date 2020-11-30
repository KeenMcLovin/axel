<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ALUAXVIN</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
  <!--Que onda mis perros-->
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{url('index')}}">"ALUAXVIN"</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
		<li class="nav-item">
            <a class="nav-link" href="{{url('about')}}">Acerca de nosotros</a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link" href="services.html">Servicios</a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="{{url('contact')}}">Contacto</a>
          </li>
          <li class="nav-item dropdown"> 
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Servicios
            </a> 
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
            <a class="dropdown-item" href="{{url('briefcase-1')}}">Ventanas Europeas</a>
              <a class="dropdown-item" href="{{url('briefcase-2')}}">Ventanas Tradicionales</a>
            </div> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Registrate</a>
          </li>
         <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Blog
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
              <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
              <a class="dropdown-item" href="blog-post.html">Blog Post</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Otras paginas
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">
              <a class="dropdown-item" href="full-width.html">Full Width Page</a>
              <a class="dropdown-item" href="sidebar.html">Sidebar Page</a>
              <a class="dropdown-item" href="faq.html">FAQ</a>
              <a class="dropdown-item" href="404.html">404</a>
              <a class="dropdown-item" href="pricing.html">Pricing Table</a>
            </div>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Formulario De Registro</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
	<div class="contenedor">
		<form action="#" class="formulario" id="formulario" name="formulario" method="POST">
			<div class="contenedor-inputs">
				<input type="text" name="nombre" placeholder="Nombre">
				<input type="text" name="correo" placeholder="Correo">

				<div class="sexo">
					<input type="radio" name="sexo" id="hombre" value="hombre">
					<label class="label-radio hombre" for="hombre">Hombre</label>

					<input type="radio" name="sexo" id="mujer" value="mujer">
					<label class="label-radio mujer" for="mujer">Mujer</label>
				</div>

				<div class="terminos">
					<input type="checkbox" name="terminos" id="terminos">
					<label for="terminos">Acepto Terminos y Condiciones</label>
				</div>

				<ul class="error" id="error"></ul>
			</div>

			<input type="submit" class="btn" name="registrarse" value="Registrate">
		</form>
		<!--<div class="tabla">
			<table>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Correo</th>
					<th>Sexo</th>
				</tr>
		
			</table>
		</div>-->
	</div>
	<script src="formulario.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>
</body>
</html>