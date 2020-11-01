@extends('layouts.master')
@include('ui::meta' , [
    'title' => 'Portfolio '.$portfolio->title,
    'description' => $portfolio->excerpt,
    'simg' => $portfolio->image
])
@section('content')
<section id="blog" class="section blog-area ptb_100">
    <div class="container">
        <div class="row">
           <div class="col-md-10 m-auto">
            <article class="single-blog-details">
                <!-- Blog Thumb -->
                <div class="blog-thumb">
                    <a href="{{$portfolio->singleLink()}}"><img src="{{$portfolio->image}}" alt="{{ $portfolio->title }}"></a>
                </div>
                <!-- Blog Content -->
                <div class="blog-content wd-blog p-3">
                    <!-- Meta Info -->
                    <div class="meta-info d-flex flex-wrap align-items-center py-2">
                        <ul>
                            <li class="d-inline-block p-2">By <a href="#">{{ $company_settings->company_name }}</a></li>
                            <li class="d-none d-md-inline-block p-2"><a href="#">{{$portfolio->created_at->diffForHumans()}}</a></li>
                        </ul>
                        <!-- Blog Share -->
                        @include('ui::socialshare' , [
                            'fblink' =>route('blog-show-single' , $portfolio->slug),
                            'twlink' =>route('blog-show-single' , $portfolio->slug)
                        ])
                    </div>
                    <!-- Blog Details -->
                    <div class="blog-details">
                        <h3 class="blog-title py-3"><a href="{{$portfolio->singleLink()}}">{{$portfolio->title}}</a></h3>
                        <p>{{$portfolio->description}}</p>
                      
                    </div>
                </div>
            </article>
           </div>
        </div>
    </div>
</section>
@endsection