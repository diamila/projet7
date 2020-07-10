@extends('layouts.layout')  <!--dans blog.blade.php nous avon le contenu du layout-->

@section('content')

       <div class="col-md-8 col-md-offset-2">
        <form action="<?= route('routeProduit.save')?>" method='POST' class="form-horizental">
            {{csrf_field() }}

          <div class="form-group">
            <label for="cni">DESIGNATION:</label>
            <input type="text" class="form-control" name="designation">
          </div>

          <div class="form-group">
            <label for="prenom">PRIX_UNITAIRE:</label>
            <input type="text" class="form-control" name="prix_unitaire">
          </div>

          
            <button type="submit" class="btn btn-raised btn-success">Ajouter</button>



        </form>
      </div>



@endsection




