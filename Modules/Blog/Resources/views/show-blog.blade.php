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
                <li class="d-inline-block p-2">By <a href="#">Junaid Hasan</a></li>
                <li class="d-none d-md-inline-block p-2"><a href="#">{{$blog->created_at->diffForHumans()}}</a></li>
                <li class="d-inline-block p-2"><a href="#">2 Comments</a></li>
            </ul>
            <!-- Blog Share -->
            <div class="blog-share ml-auto d-none d-sm-block">
                <!-- Social Icons -->
                <div class="social-icons d-flex justify-content-center">
                    <a class="bg-white facebook" href="#">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="bg-white twitter" href="#">
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="bg-white google-plus" href="#">
                        <i class="fab fa-google-plus-g"></i>
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Blog Details -->
        <div class="blog-details">
            <h3 class="blog-title py-3"><a href="{{ route('blog-show-single' , $blog->title)}}">{{$blog->title}}</a></h3>
            <p>{{$blog->description}}</p>
          
        </div>
    </div>
    <!-- Blog Comments -->
    <div class="blog-comments p-3">
        <!-- Admin -->
        <div class="admin media py-4">
            <!-- Admin Thumb -->
            <div class="admin-thumb avatar-lg">
                <img class="rounded-circle" src="/assets/img/avatar/avatar-1.png" alt="">
            </div>
            <!-- Admin Content -->
            <div class="admin-content media-body pl-3 pl-sm-4">
                <h4 class="admin-name mb-2"><a href="#">Junaid Hasan</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo eius nam facere enim, voluptas incidunt officiis molestiae, nostrum dolor? Fugit.</p>
            </div>
        </div>
        <!-- Comments -->
        <div class="comments mt-4 mb-3">
            <!-- Comments Title -->
            <h3 class="comments-title text-uppercase text-left text-lg-right mb-3">Recent Comments</h3>
            <!-- Single Comments -->
            <div class="single-comments media p-4">
                <!-- Comments Thumb -->
                <div class="comments-thumb avatar-lg">
                    <img class="rounded-circle" src="/assets/img/avatar/avatar-2.png" alt="">
                </div>
                <!-- Comments Content -->
                <div class="comments-content media-body pl-3">
                    <h5 class="d-flex mb-2">
                        <a href="#">Jassica William</a>
                        <a href="#" class="ml-auto">Reply</a>
                    </h5>
                    <p class="d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere optio ipsum maiores mollitia quisquam.</p>
                    <p class="d-block d-lg-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <!-- Single Comments -->
            <div class="single-comments media p-4">
                <!-- Comments Thumb -->
                <div class="comments-thumb avatar-lg">
                    <img class="rounded-circle" src="/assets/img/avatar/avatar-3.png" alt="">
                </div>
                <!-- Comments Content -->
                <div class="comments-content media-body pl-3">
                    <h5 class="d-flex mb-2">
                        <a href="#">Md. Arham</a>
                        <a href="#" class="ml-auto">Reply</a>
                    </h5>
                    <p class="d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere optio ipsum maiores mollitia quisquam.</p>
                    <p class="d-block d-lg-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Contact -->
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