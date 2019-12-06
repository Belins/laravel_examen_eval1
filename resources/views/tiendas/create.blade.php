@extends('layouts.app')

@section('title', 'Examen')

@section('content')

  <h3>Nueva tienda</h3>
  <form action="{{route('tiendas.store')}}" method="POST">
    @csrf
    Nombre:<br>
    <input type="text" name="name">
    <br>Descripcion:<br>
    <input type="text" name="description">
    <br>Password:<br>
    <input type="password" name="password">
    <br>Email:<br>
    <input type="email" name="email">
    <br>Likes:<br>
    <input type="number" name="likes">
    <button class="buttonform" type="submit" name="submit">Crear</button>
  </form>
  <br>

@endsection
