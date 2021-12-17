@extends('layouts.add')
@section('title-block')Все сообщения@endsection
@section('content')
<h1>Все сообщения</h1>
@foreach($data as $element)
<div class="alert alert-info">
  <h3>{{$element->Surname}}</h3>
  <h3>{{$element->Name}}</h3>
  <h3>{{$element->MiddleName}}</h3>
  <p>{{$element->PhoneNumber}}</p>
  <p>{{$element->Email}}</p>
  <p>{{$element->City}}</p>
  <p>{{$element->Street}}</p>
  <p>{{$element->HouseNumber}}</p>
  <p>{{$element->Flat}}</p>
  <p>{{$element->NumberRooms}}</p>
  <p>{{$element->NumberTenats}}</p>
  <p>{{$element->Login}}</p>
  <p><small>{{$element->created_at}}</small></p>
  <a href="{{route('contact-data-one', $element->idClient)}}"> <button class="btn btn-warning">Подробнее</button> </a>
</div>
@endforeach
@endsection
