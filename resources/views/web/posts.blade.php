@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <h1>Lista de Artículos</h1>

                @foreach($posts as $post)
                <div class="row"> 
                    <div class="card">
                        @if($post->file)
                            <img src="{{ $post->file }}" alt="Imagen del post" class="card-img-top">
                        @endif
                        <div class="card-body">
                            <div class="card-title">
                                {{ $post->name }}
                            </div>            
                            {{ $post->excerpt }}
                            <a href="#" class="card-link">Leer más...</a>
                        </div>
                    </div>
                </div>
                <br>
                @endforeach
                {{ $posts->render() }}
            </div>
        </div>
    </div>
@endsection