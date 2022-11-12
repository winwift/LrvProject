

@unless(count($posts) == 0)
<!--Posts-->
<section class="container-fluid p-0">
    <div class="row" style="align-items: end"  >
@foreach($posts as $post)
        <div class="col-4 " >
                <div class="card ">
                    <img class="card-img-top" src="{{$post->getFirstMediaUrl('posts')}}" alt="..." />
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



