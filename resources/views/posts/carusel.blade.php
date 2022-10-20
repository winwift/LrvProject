<!--Carusel Section+-->

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
@foreach( $post->getMedia('posts') as $media )
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="true" aria-label="Slide 1"></button>
@endforeach
    </div>
    <div class="carousel-inner">
@foreach( $post->getMedia('posts') as $media )
      <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
        <div class="d-flex justify-content-center">
          <img src="{{ $media->getUrl()}}" class=" d-block mw-100" style="max-height: 900px" alt="{{ $post->title }}">
        </div>
      </div>
@endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>