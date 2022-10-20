@extends('layout.app')
@section('content')
 <!-- Masterhead-->
 <header style="background-image: url('{{url('/images/woodfloor.jpg')}} '); background-size: cover">
    <div class="back-button">
        <a class="btn btn-primary" href="http://127.0.0.1:8000/" role="button"><i class="bi bi-arrow-90deg-left"></i></a>
    </div>
    <div class="background-darken pt-4">
        <div class="container h-100 ">
            @include('posts.carusel')
                <div class="d-flex flex-column text-light mb-3 ">
                    <div class="pt-5 h3">
                        {{$post['title']}}
                    </div>
                    <div>
                        <hr class="divider-light">
                    </div>
                    <div class="p-2">
                        <a>Category:</a>
                        <a>{{$post->category->name}}</a>
                    </div>
                    <div>
                        <hr class="divider-light">
                    </div>
                    <div class="p-2 pb-7">
                        {{$post['description']}}
                    </div>
                </div>
            </div>
    </div>
</header>
@endsection