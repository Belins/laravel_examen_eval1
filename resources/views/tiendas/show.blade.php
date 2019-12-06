@extends('layouts.app')

@section('title', 'Tienda')

@section('content')

  <h2>Has introducido la siguiente tienda</h2>

  <h3>Id: {{$t->id}}</h3>
  <h3>Nombre: {{$t->name}}</h3>
  <h3>Descripcion: {{$t->description}}</h3>
  <h3>Password: {{$t->password}}</h3>
  <h3>Email: {{$t->email}}</h3>
  <h3>Likes: {{$t->likes}}</h3>

@endsection