@extends('layouts.app')

@section('title', 'Examen')

@section('content')

  <h3>Nueva tienda</h3>
  <form action="" method="">
    @csrf
    Nombre:<br>
    <input type="text" name="nombre">
    <br><br>
    <input type="text" name="Descripcion">
    <br><br>
    <input type="text" name="Password">
    <br><br>
    <input type="text" name="Email">
    <br><br>
    <input type="number" name="likes">
    <button class="buttonform" type="submit" name="submit">Crear</button>
  </form>
  <br>

@endsection
