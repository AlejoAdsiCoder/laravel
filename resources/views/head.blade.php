<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')">
    <link rel="stylesheet" href="{{asset('css/crudEnt.css')">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Gesport</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample04">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="clubes" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clubes</a>
      
      <div class="dropdown-menu" aria-labelledby="clubes">
        <a class="dropdown-item" href="#">Administrar</a>
        <a class="dropdown-item" href="#">Registrar Clubes</a>
        <a class="dropdown-item" href="#">Añadir Deportistas</a>
      </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="Esd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Escenarios Deportivos</a>
      
      <div class="dropdown-menu" aria-labelledby="Esd">
        <a class="dropdown-item" href="#">Administrar</a>
        <a class="dropdown-item" href="#">Añadir</a>
      </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dep" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Deportistas</a>
      
      <div class="dropdown-menu" aria-labelledby="dep">
        <a class="dropdown-item" href="#">Administrar</a>
        <a class="dropdown-item" href="#">Añadir</a>
      </div>
      
    </ul>
    <form class="form-inline my-2 my-md-0">
      <input class="form-control" type="text" placeholder="Search">
    </form>
  </div>
</nav>
<h2>Entrenador</h2>