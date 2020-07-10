@extends('layouts.layout')  <!--dans blog.blade.php nous avon le contenu du layout-->

@section('content')

       <div class="col-md-8 col-md-offset-2">
        <form action="<?= route('routeConcerner.save')?>" method='POST' class="form-horizental">
            {{csrf_field() }}

          <div class="form-group">
            <label for="superficie">QUANTITE_COMMANDE:</label>
            <input type="text" class="form-control" name="quantite_commande">
          </div>

          
           
          
    <div class="form-group" >    
    <label for="">COMMANDE</label>
     <select name="id_commande" id="">
      <option>Choisir commande</option> 
              
            @foreach($donnee as $donneeVu)                  
                <option value="<?= $donneeVu->id?>"><?= $donneeVu->date_commande?> </option>
            @endforeach

      
     </select>
    </div>
            

            
                    
    <div class="form-group" >    
    <label for="">PRODUIT</label>
     <select name="produit_id" id="">
      <option>Choisir produit</option> 
              
            @foreach($donneeP as $donneeVu)                  
                <option value="<?= $donneeVu->id?>"><?= $donneeVu->designation ?> </option>
            @endforeach

      
     </select>
    </div>
            
            


            <button type="submit" class="btn btn-raised btn-success">Ajouter</button>



        </form>
      </div>





@endsection