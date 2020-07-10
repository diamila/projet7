<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

         
        <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/4.0.2/bootstrap-material-design.css"> <!--bibliothéque-->
      
</head>
<body>


<nav class="navbar navbar-expand-md navbar-light bg-light">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a href="<?= route('premierP')?>" class="btn btn-raised btn-sm btn-primary">PERSONNE </a> 
    </li>
    <li class="nav-item">
     <a href="<?= route('accueilParcelle')?>" class="btn btn-raised btn-sm btn-primary">PARCELLE </a> 

    </li>
    <li class="nav-item">
     <a href="<?= route('retour')?>" class="btn btn-raised btn-sm btn-primary">DECONNEXION</a> 

    </li>
  </ul>
</nav>






   <div class="container">
       <h1 class="btn btn-primary" ></h1>
         @if(Session::has('success'))
           <span class="alert">{{ Session::get('success')}}</span>
          @endif
     <div class="row"> 
        @yield('content')
     </div>  

   </div> 



</body>
</html>






