
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/bootstrap.min.js"></script>

                <!-- pagine -->
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    
      
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?= route('accueilCLient')?>"  ">CLIENT</a></li>
      <li><a href="<?= route('accueilCommande')?>" >COMMANDE</a></li>
      <li><a href="<?= route('accueilConcerner')?>" >CONCERNER</a></li>
      <li><a href="<?= route('accueilProduit')?>"  >PRODUIT</a></li>
    </ul>
  </div>
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
