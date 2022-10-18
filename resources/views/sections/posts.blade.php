

@unless(count($posts) == 0)
<!--Posts-->
<section id="jobs" class="container-fluid p-0">
    <div class="row g-0" id="portfolio_id">
@foreach($posts as $post)
        <div class="col-lg-4 col-sm-6" >
                        <a class="portfolio-box" href="/posts/{{$post['id']}}" title="Project Name">
                            <img class="img-fluid" src="{{$post->getFirstMediaUrl('posts')}}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-name">
                                    <h4 href="/posts/{{$post['id']}}" class="text-decoration-none">{{$post['title']}}</h4>
                                </div>
                                <div class="project-category text-dark-50">
                                    <a href="/posts/{{$post['id']}}" class="text-decoration-none">{{$post->category->name}}</a>
                                </div>
                                <div class="project-category text-dark-50">
                                    <a href="/posts/{{$post['id']}}" class="text-decoration-none">{{ \Illuminate\Support\Str::limit($post['description'], )}}</a>
                                </div>
                            </div>
                        </a>
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


