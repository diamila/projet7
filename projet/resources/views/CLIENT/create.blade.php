@extends('layouts.layout')  <!--dans blog.blade.php nous avon le contenu du layout-->

@section('content')

       <div class="col-md-8 col-md-offset-2">
        <form action="<?= route('routeClient.save')?>" method='POST' class="form-horizental">
            {{csrf_field() }}

          <div class="form-group">
            <label for="cni">CNI:</label>
            <input type="text" class="form-control" name="cni">
          </div>

          <div class="form-group">
            <label for="prenom">Prenom:</label>
            <input type="text" class="form-control" name="prenom">
          </div>

          <div class="form-group">
            <label for="nom">NOM:</label>
            <input type="text" class="form-control" name="nom">
          </div>

         
          <div class="form-group">
            <label for="date_naiss">Date de naissance:</label>
            <input type="date" class="form-control" name="date_naiss">
          </div>

           <div class="form-group">
            <label for="lieu_naissance">lieu de naissance:</label>
            <input type="text" class="form-control" name="lieu_naissance">
          </div>

           <div class="form-group">
            <label for="tel">TELEPHONE:</label>
            <input type="tel" class="form-control" name="tel">
          </div>


            <button type="submit" class="btn btn-raised btn-success">Ajouter</button>



        </form>
      </div>



@endsection




