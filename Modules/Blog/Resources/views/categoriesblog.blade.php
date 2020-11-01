@extends('blog::layouts.master')
@section('meta')
@include('ui::meta' , [
    'title' => 'Category | '. $categorywithblogs->title,
    'description' => $categorywithblogs->excerpt,
    'simg' => $categorywithblogs->image
])
@endsection
@section('content') 
<article class="single-blog-details">
    {{-- {{dd($categorywithblogs)}} --}}
    <!-- Blog Thumb -->
    <div class="blog-thumb">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('blogs-categories-index' , $categorywithblogs->slug)}}">
                    <img src="{{$categorywithblogs->image}}" alt="{{ $categorywithblogs->title }}">
                </a>
            </div>
            <div class="col-md-8">
                <div class="blog-details">
                   <div class="d-flex justify-content-between">
                    <h3 class="blog-title py-3"><a href="{{ route('blogs-categories-index' , $categorywithblogs->title)}}">{{$categorywithblogs->title}}</a></h3>
                    @include('ui::socialshare' , [
                        'fblink' =>route('blogs-categories-index' , $categorywithblogs->slug),
                        'twlink' =>route('blogs-categories-index' , $categorywithblogs->slug)
                    ])
                   </div>
                    <p class="">{{$categorywithblogs->excerpt}}</p>
                    <div class="blog-share ml-auto d-none d-sm-block">
                        <!-- Social Icons -->
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
<div class="row mt-5">
    @foreach ($categorywithblogs->blogs as $blog)
    <div class="col-12 col-md-6">
        <!-- Single Blog -->
        <div class="single-blog res-margin">
            <!-- Blog Thumb -->
            <div class="blog-thumb">
                <a href="{{route('blog-show-single' , $blog->slug)}}"><img src="{{$blog->ft_img}}" alt="{{$blog->title}}"></a>
            </div>
            <!-- Blog Content -->
            <div class="blog-content">
                <!-- Meta Info -->
                <ul class="meta-info d-flex justify-content-between">
                    <li>By <a href="#">Anna Sword</a></li>
                    <li><a href="#">{{$blog->created_at->diffForHumans()}}</a></li>
                </ul>
                <!-- Blog Title -->
                <h3 class="blog-title my-3"><a href="{{route('blog-show-single' , $blog->slug)}}">{{ $blog->title }}</a></h3>
                <p>{{$blog->excerpt}}</p>
                <a href="{{route('blog-show-single' , $blog->slug)}}" class="blog-btn mt-3">Read More</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection