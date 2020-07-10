@extends('layouts.layout')  <!--dans blog.blade.php nous avon le contenu du layout-->

@section('content')

<p>
<a href="<?= route('routeClient.create')?>" class="btn btn-raised btn-sm btn-primary">Ajouter une personne</a> 
</p>
  
<table class="table" cellpadding="5px" cellspacing="10px" border="2">
  <thead class="thead-dark" style="background: #000;color: #fff; align-content: center;" style="text-align: center;">
    <tr>
     <th scope="col">ID</th>
      <th scope="col">CNI</th>
      <th scope="col">Prenom</th>
       <th scope="col">NOM</th>
       <th scope="col">Date_naiss</th>
      <th scope="col">LIEU_NAISSANCE</th> 
       <th scope="col">TelEPHONE</th>
     
    </tr>
  </thead>
  <tbody>
             @foreach($donnee as $donneeVu)                  
    <tr>
      <td scope="col"><?= $donneeVu->id?> &nbsp; </td> 
      <td scope="col"><?= $donneeVu->cni?> &nbsp; </td> 
      <td scope="col"><?= $donneeVu->prenom?> &nbsp; </td> 
      <td scope="col"><?= $donneeVu->nom?> &nbsp; </td> 
      <td scope="col"><?=$donneeVu->date_naiss?></td>
      <td scope="col"><?=$donneeVu->lieu_naissance?></td>
      <td scope="col"><?=$donneeVu->tel?></td>
            
      <td>
          <a href="#" class="btn btn-raised btn-sm btn-danger"  onclick="delete_stud(<?=$donneeVu['Id']?>)">supprimer</a> 
      </td>

      

    </tr>


      

            
<script>
    function delete_stud(Id){
      if(window.confirm("Voulez-vous supprimer <?=$donneeVu->prenom ?> ?")){
        location.href="<?= route('routeClient.delete', ['id' =>$donneeVu->id]) ?>" ;
        // location.replace("tp13.php?id="+id);
      }
    }
  </script>

          @endforeach

  </tbody>
</table>










@endsection






