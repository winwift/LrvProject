@extends('layout.app')
@include('sections.navigation')
@section('content')
 <!-- Masterhead-->
 <header class="masthead" style="background-image: url('{{url('/images/woodfloor.jpg')}}'); width:100%; height:auto;">
    <div class="container px-4 px-lg-5 h-100 ">
        <div class="row align-items-center text-light bg-dark " style="--bs-bg-opacity: .5;">
            <div class="h3 mb-1">
                {{$post['title']}}
            </div>
            <div class="mb-1">
                <a>Category-{{$post->category->name}}</a>
            </div>
            <div class="card-text">
                {{$post['description']}}
            </div>
        </div>
@include('posts.carusel')
    </div>
</header>
@include('layout.footer')
@endsection