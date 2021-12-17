@extends('layouts.add')
@section('title-block'){{$data->Surname}}@endsection
@section('content')
<h1>{{$data->Surname}}/h1>
<div class="alert alert-info">
  <h3>{{$data->Surname}}</h3>
  <h3>{{$data->Name}}</h3>
  <h3>{{$data->MiddleName}}</h3>
  <p>{{$data->PhoneNumber}}</p>
  <p>{{$data->Email}}</p>
  <p>{{$data->City}}</p>
  <p>{{$data->Street}}</p>
  <p>{{$data->HouseNumber}}</p>
  <p>{{$data->Flat}}</p>
  <p>{{$data->NumberRooms}}</p>
  <p>{{$data->NumberTenats}}</p>
  <p>{{$data->Login}}</p>
  <p><small>{{$data->created_at}}</small></p>
  <a href="{{route('contact-data-one', $data->idClient)}}"> <button class="btn btn-warning">Подробнее</button> </a>
</div>
@endsection
