@extends('layouts.base')

@section('title', 'home')

@section('style', '/css/welcome.css') 

@section('content')
    <section>
        <article id="img">
            <img src="https://images.unsplash.com/photo-1559672749-510941093805?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=675&q=80" alt="" width="100%">
        </article>
        <article id="infoImg">
            <h1>Bienvenu sur The Statues</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Sed, nesciunt rerum blanditiis ratione voluptates qui labore modi dolore adipisci corrupti libero eaque, alias itaque, 
                pariatur fugit eveniet dolores assumenda excepturi!</p>
        </article>
    </section> 
@endsection