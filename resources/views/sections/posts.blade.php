

@unless(count($posts) == 0)
<!--Posts-->
<section class="container-fluid ">
    <div class="row pb-3" style="align-items: end"  >
@foreach($posts as $post)
        <div class=" col-lg-4 col-md-6 col-sm-12 p-1 pt-3  " >
                <div class="card">
                    <a href="/posts/{{$post['id']}}"><img class="card-img-top" src="{{$post->getFirstMediaUrl('posts')}}" alt="..." /></a>
                    <div class="card-body">
                                
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <a class="card-title text-decoration-none"  href="/posts/{{$post['id']}}" >{{$post['title']}}</a>
                                </div>
                                <div>
                                <small class="text-muted">Category:</small>
                                <a href="/posts/{{$post['id']}}" class="text-decoration-none card-subtitle">{{$post->category->name}}</a>
                                </div>
                            </div>

                            <p class="card-text pt-3">{{ Str::limit($post->description, 120)}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                  @foreach($post->tags as $tag)
                                    <span class="badge bg-primary">{{$tag->name}}</span>
                                @endforeach
                                </div>


                                <small class="text-muted">{{ $post->value('created_at') }}</small>   
                            </div>
                                
                            
                            </div>
                            
                </div>
        </div>
@endforeach  
    </div>
<div class="d-flex justify-content-center">
    {{ $posts->links('pagination::bootstrap-4') }}
</div>
</section>

@else
<p>No post found</p>
@endunless



