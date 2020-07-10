@extends('layouts.layout')  <!--dans blog.blade.php nous avon le contenu du layout-->

@section('content')

       <div class="col-md-8 col-md-offset-2">
        <form action="<?= route('routeParcelle.save')?>" method='POST' class="form-horizental">
            {{csrf_field() }}

          <div class="form-group">
            <label for="superficie">SUPERFICIE:</label>
            <input type="text" class="form-control" name="superficie">
          </div>

          <div class="form-group">
            <label for="adresse">ADRESSE:</label>
            <input type="text" class="form-control" name="adresse">
          </div>

          <div class="form-group">
            <label for="ilot">ILOT:</label>
            <input type="text" class="form-control" name="ilot">
          </div>

           
          
    <div class="form-group" >    
    <label for="">Persone</label>
     <select name="pays" id="">
      <option>Choisir une Personne</option> 
              
            @foreach($donnee as $donneeVu)                  
                <option value="<?= $donneeVu->id?>"><?= $donneeVu->prenom.' '.$donneeVu->nom.' - '.$donneeVu->tel ?> </option>
            @endforeach

      
     </select>
    </div>
            


            <button type="submit" class="btn btn-raised btn-success">Ajouter</button>



        </form>
      </div>





@endsection