@extends('layouts.base')

@section('title', 'home')

@section('style', '/css/show.css')

@section('content')
<h1>Voici les statues de notre collection</h1>
<table>
    <tr>
        <th>Nom</th>
        <th>Date de création</th>
        <th>Origine</th>
        <th>Estimation du prix (en euros)</th>
        <th>Nom de l'artiste</th>
        <th>Suprr</th>
        <th>Modifier</th>
    </tr>
    @foreach ($statues as $statue)
    <tr>
        <td><?= $statue->name ?></td> 
        <td><?= $statue->date ?></td>
        <td><?= $statue->origin ?></td>
        <td><?= $statue->price?></td>
        <td><?= $statue->artist_name?></td>
        <form action="/del" method="POST">
            @csrf
            <td> 
                <input type="submit" value="X">
                <input type="hidden" name="id" value="{{$statue->id}}">
            </td>
        </form>
        <form action="/modify" method="POST">
            @csrf
            <td> 
                <input type="submit" value="M">
                <input type="hidden" name="id" value="{{$statue->id}}">
            </td>
        </form>
        </tr>
    @endforeach
</table>


@endsection