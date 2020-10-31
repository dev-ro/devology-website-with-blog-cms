@extends('blog::layouts.master')

@section('content')
 <!-- ***** Blog Area Start ***** -->
 <div class="row">
    @foreach ($blogs as $blog)
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
<div class="row">
    <div class="col-12">
        <!-- Pagination -->
        {{$blogs->links('vendor.pagination.default')}}
    </div>
</div>
<!-- ***** Blog Area End ***** -->
@endsection
