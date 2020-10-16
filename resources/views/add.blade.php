@extends('layouts.base')

@section('title', 'home')

@section('style', '/css/add.css')

@section('content')
<h1>Ajout d'une statue</h1>
<form action="/add" method="POST">
    @csrf
    <div>
        <label for="name">Name :</label>
        <input type="text" id="name" name="name" value="Le poids de soi-même">
    </div>
    <div>
        <label for="date">Date de création :</label>
        <input type="date" id="date" name="date" value="2013">
    </div>
    <div>
        <label for="origin">Origine :</label>
        <input type="text" id="origin" name="origin" value="Berlin">
    </div>
    <div>
        <label for="price">Estimation du prix (en euros):</label>
        <input type="text" id="price" name="price" value="1800">
    </div>
    <div>
        <label for="artistName">Nom de l'artiste :</label>
        <input type="text" id="artistName" name="artistName" value="Elmgreen & Dragset">
    </div>
    <button type="submit" class="btn">Envoyer</button>
</form>

@endsection