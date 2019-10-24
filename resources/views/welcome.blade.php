@extends('pages.master')

@section("title","page d'acceuil")
@section('content')



@if($voitures)
@foreach($voitures as $voiture)

<td>{{$voiture->puissance}}</td>
<td>{{$voiture->couleur}}</td>
@if(count($voiture->photos)>0)
<img src="{{asset('image/'.$voiture->photos->first()->photo)}}">

@else
<p>nulll</p>
@endif



@endforeach
@endif

{{$voitures->links()}}
@endsection



@section('footer')
 <p>&copy; Company 2017-2019</p>
@endsection
