@extends('layouts.layout')  <!--dans edit.blade.php nous avon le contenu du layout-->
 
@section('content')

       <div class="col-md-8 col-md-offset-2">
        <form action="{{ route('routeDiami.update', ['id' =>$donneAmodifier->id])}}" method='POST' class="form-horizental">
            {{csrf_field() }}
            <div class="form-group">
               <label for="name" class="control-label col-md-2" >Name</label>
               <input type="text" class="control-label col-md-10" id="name" name="name" value="{{ $donneAmodifier->name }}">
            </div>
            <button type="submit" class="btn btn-raised btn-success">update</button>

        </form>
      </div>
       



@endsection