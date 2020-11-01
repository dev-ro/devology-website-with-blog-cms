@extends('blog::layouts.master')
@section('meta')
@include('ui::meta' , [
    'title' => $blog->title,
    'description' => $blog->excerpt,
    'simg' => $blog->ft_img
])
@endsection
@section('content')
<article class="single-blog-details">
    <!-- Blog Thumb -->
    <div class="blog-thumb">
        <a href="{{ route('blog-show-single' , $blog->title)}}"><img src="{{$blog->ft_img}}" alt="{{ $blog->title }}"></a>
    </div>
    <!-- Blog Content -->
    <div class="blog-content wd-blog p-3">
        <!-- Meta Info -->
        <div class="meta-info d-flex flex-wrap align-items-center py-2">
            <ul>
                <li class="d-inline-block p-2">By <a href="#">{{ $company_settings->company_name }}</a></li>
                <li class="d-none d-md-inline-block p-2"><a href="#">{{$blog->created_at->diffForHumans()}}</a></li>
                <li class="d-inline-block p-2"><a href="#">2 Comments</a></li>
            </ul>
            <!-- Blog Share -->
            @include('ui::socialshare' , [
                'fblink' =>route('blog-show-single' , $blog->slug),
                'twlink' =>route('blog-show-single' , $blog->slug)
            ])
        </div>
        <!-- Blog Details -->
        <div class="blog-details">
            <h3 class="blog-title py-3"><a href="{{ route('blog-show-single' , $blog->title)}}">{{$blog->title}}</a></h3>
            <p>{{$blog->description}}</p>
          
        </div>
    </div>
    @include('ui::comments')
    <div class="blog-contact p-3">
        <!-- Contact Title -->
        <h3 class="comments-title text-uppercase text-left text-lg-right mb-3">Post your Comments</h3>
        <!-- Comment Box -->
        <div class="contact-box comment-box">
            <form method="POST" action="#">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-bordered mt-3" type="submit">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</article>
@endsection