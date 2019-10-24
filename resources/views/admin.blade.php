
@extends('pages.master')


@section('content')







<form action="{{route('add_voiture')}}" method="post" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label>puissance</label>
    <input type="text" class="form-control" name="puissance">
  </div>
  <div class="form-group">
    <label>couleur</label>
    <input type="text" class="form-control" name="couleur">
  </div>
 <div class="form-group">
    <label for="exampleFormControlFile1">image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image[]">
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image[]">
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image[]">
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image[]">
  </div>
  <button type="submit" class="btn btn-primary">valider</button>
</form>

















@endsection