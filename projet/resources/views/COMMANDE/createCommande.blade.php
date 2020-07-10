@extends('layouts.layout')  <!--dans blog.blade.php nous avon le contenu du layout-->

@section('content')

       <div class="col-md-8 col-md-offset-2">
        <form action="<?= route('routeCommande.save')?>" method='POST' class="form-horizental">
            {{csrf_field() }}

          <div class="form-group">
            <label for="superficie">DATE_COMMANDE:</label>
            <input type="date" class="form-control" name="date_commande">
          </div>

          
           
          
    <div class="form-group" >    
    <label for="">Client</label>
     <select name="client_id" id="">
      <option>Choisir un client</option> 
              
            @foreach($donnee as $donneeVu)                  
                <option value="<?= $donneeVu->client_id?>"><?= $donneeVu->prenom.' '.$donneeVu->nom.' - '.$donneeVu->tel ?> </option>
            @endforeach

      
     </select>
    </div>
            


            <button type="submit" class="btn btn-raised btn-success">Ajouter</button>



        </form>
      </div>





@endsection