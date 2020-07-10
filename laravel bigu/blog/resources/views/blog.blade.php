@extends('layouts.layout')  <!--dans blog.blade.php nous avon le contenu du layout-->

@section('content')

       <div class="col-md-8 col-md-offset-2">
        <form action="{{ route('routeDiami.save')}}" method='POST' class="form-horizental">
            {{csrf_field() }}
            <div class="form-group">
               <label for="name" class="control-label col-md-2" >Name</label>
               <input type="text" class="control-label col-md-10" id="name" name="name">
            </div>
            <button type="submit" class="btn btn-raised btn-success">Ajouter</button>

        </form>
      </div>
       

           <div class="col-md-6 col-md-offset-3">
              <div class="list-group">

               @foreach($donnee as $donneeVu)
               
                <li class="list-group-item">
                  {{ $donneeVu->name}} &nbsp; <!--lister les donné -->
                  
                           <!--si l'utilisateur cliq sur le button supprimer de mm que modifier y'a son id qui est envoyer au contoleur via la route blog.delete pour verification'-->
                  <a href="{{ route('routeDiami.delete', ['id' =>$donneeVu->id]) }}" class="btn btn-raised btn-sm btn-danger">supprimer</a> 
                   
                  <a href="{{ route('routeDiami.edit', ['id' =>$donneeVu->id]) }}" class="btn btn-raised btn-sm btn-info">modifier</a>
                    <!--btn btn-danger:c'est pour le font du button,btn-danger:couleur -->
                </li>
              @endforeach
           
                 
                {{ $donnee->links()}}
              </div>
           </div>  



@endsection