@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <h1>{{$post->name}}</h1>

                <div class="row"> 
                    <div class="card">
                        @if($post->file)
                            <img src="{{ $post->file }}" alt="Imagen del post" class="card-img-top">
                        @endif
                        <div class="card-body">
                            <div class="card-title">
                                Categoría
                                <a href="#">{{$post->category->name}}</a>
                            </div>            
                            {{ $post->excerpt }}
                            <hr>
                            {!! $post->body !!}
                            <hr>
                            Etiquetas
                            @foreach($post->tags as $tag)
                                <a href="#">{{$tag->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection