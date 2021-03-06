@extends('layouts.add')
@section('title-block')Страница контактов@endsection
@section('content')
<h1>Страница контактов</h1>
<form action="{{route('contact-form')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="Name">Имя</label>
    <input type="text" name="Name" placeholder="Введите имя" id="Name" class="form-control">
  </div>

  <div class="form-group">
    <label for="Surname">Фамилия</label>
    <input type="text" name="Surname" placeholder="Введите фамилию" id="Surname" class="form-control">
  </div>

  <div class="form-group">
    <label for="MiddleName">Отчество</label>
    <input type="text" name="MiddleName" placeholder="Введите отчество" id="MiddleName" class="form-control">
  </div>

  <div class="form-group">
    <label for="PhoneNumber">Телефон</label>
    <input type="text" name="PhoneNumber" placeholder="Введите телефон" id="PhoneNumber" class="form-control">
  </div>

  <div class="form-group">
    <label for="Email">Email</label>
    <input type="text" name="Email" placeholder="Введите email" id="Email" class="form-control">
  </div>

  <div class="form-group">
    <label for="City">Город</label>
    <input type="text" name="City" placeholder="Введите город" id="City" class="form-control">
  </div>

  <div class="form-group">
    <label for="Street">Улица</label>
    <input type="text" name="Street" placeholder="Введите улицу" id="Street" class="form-control">
  </div>

  <div class="form-group">
    <label for="HouseNumber">Дом</label>
    <input type="text" name="HouseNumber" placeholder="Введите номер дома" id="HouseNumber" class="form-control">
  </div>

  <div class="form-group">
    <label for="Flat">Квартира</label>
    <input type="text" name="Flat" placeholder="Введите номер квартиры" id="Flat" class="form-control">
  </div>

  <div class="form-group">
    <label for="NumberRooms">Количество комнат</label>
    <input type="text" name="NumberRooms" placeholder="Введите количество комнат" id="NumberRooms" class="form-control">
  </div>

  <div class="form-group">
    <label for="NumberTenats">Число жильцов</label>
    <input type="text" name="NumberTenats" placeholder="Введите число жильцов" id="NumberTenats" class="form-control">
  </div>

  <div class="form-group">
    <label for="Login">Индивидуальный номер счета</label>
    <input type="text" name="Login" placeholder="Введите индивидуальный номер счета" id="Login" class="form-control">
  </div>
<button type="submit" class="btn btn-success">Отправить</button>
</form>

@endsection
