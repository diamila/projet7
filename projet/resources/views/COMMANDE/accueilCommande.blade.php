@extends('layouts.layout')  <!--dans blog.blade.php nous avon le contenu du layout-->

@section('content')

<p>
<a href="<?= route('routeCommande.create')?>" class="btn btn-raised btn-sm btn-primary">Ajouter</a> 
</p>
  
<table class="table" cellpadding="5px" cellspacing="10px" border="2">
  <thead class="thead-dark" style="background: #000;color: #fff; align-content: center;" style="text-align: center;">
    <tr>
      <th scope="col">ID_COMMANDE</th>
     <th scope="col">DATE_COMMANDE</th>
     <th scope="col">ID_CLIENT</th>

      
     
    </tr>
  </thead>
  <tbody>
             @foreach($donnee as $donneeVu)                  
    <tr>
      <td scope="col"><?= $donneeVu->id?> &nbsp; </td> 
      <td scope="col"><?= $donneeVu->date_commande?> &nbsp; </td> 
      <td scope="col"><?=$donneeVu->client_id?></td>
      
      <td>
          <a href="#" class="btn btn-raised btn-sm btn-danger"  onclick="delete_stud(<?=$donneeVu['Id']?>)">supprimer</a> 
      </td>

      

    </tr>


      

            
<script>
    function delete_stud(Id){
      if(window.confirm("Voulez-vous supprimer ")){
        location.href="<?= route('routeCommande.delete', ['id' =>$donneeVu->id]) ?>" ;
        // location.replace("tp13.php?id="+id);
      }
    }
  </script>

          @endforeach

  </tbody>
</table>










@endsection






