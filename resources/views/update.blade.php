@extends('layouts.base')

@section('title', 'home')

@section('style', '/css/add.css')

@section('content')
<h1>Ceci est le formulaire</h1>
<form action="/update" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$statue->id}}">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" value="{{$statue->name}}">
    </div>
    <div>
        <label for="date">Date de création :</label>
        <input type="date" id="date" name="date" value="{{$statue->date}}">
    </div>
    <div>
        <label for="origin">Origine :</label>
        <input type="text" id="origin" name="origin" value="{{$statue->origin}}">
    </div>
    <div>
        <label for="price">Estimation du prix (en euros):</label>
        <input type="text" id="price" name="price" value="{{$statue->price}}">
    </div>
    <div>
        <label for="artistName">Nom de l'artiste</label>
        <input type="text" id="artistName" name="artistName" value="{{$statue->artist_name}}">
    </div>
    <button type="submit" class="btn">Modifier</button>
</form>

@endsection