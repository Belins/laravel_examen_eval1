@extends('layouts.app')

@section('title', 'Examen')

@section('content')

  <h3>Nueva tienda</h3>
  <form action="{{route('tiendas.store')}}" method="POST">
    @csrf
    Nombre:<br>
    <input type="text" name="name">
      @error('name')
      <span class="invalid-feedback" role="alert">
          <strong>{{$errors->first('name')}}</strong>
      </span>
      @enderror
    <br>Descripcion:<br>
    <input type="text" name="description">
      @error('description')
      <span class="invalid-feedback" role="alert">
          <strong>{{$errors->first('description')}}</strong>
      </span>
      @enderror
    <br>Password:<br>
    <input type="password" name="password">
      @error('password')
      <span class="invalid-feedback" role="alert">
          <strong>{{$errors->first('password')}}</strong>
      </span>
      @enderror
    <br>Email:<br>
    <input type="email" name="email">
      @error('email')
      <span class="invalid-feedback" role="alert">
          <strong>{{$errors->first('email')}}</strong>
      </span>
      @enderror
    <br>Likes:<br>
    <input type="number" name="likes">
      @error('likes')
      <span class="invalid-feedback" role="alert">
          <strong>{{$errors->first('likes')}}</strong>
      </span>
      @enderror
    <button class="buttonform" type="submit" name="submit">Crear</button>
  </form>
  <br>

@endsection
