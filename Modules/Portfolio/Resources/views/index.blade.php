@extends('layouts.master')
@section('meta') @include('ui::meta') @endsection
@section('content')
<section id="portfolio" class="portfolio-area bg-gray overflow-hidden ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($portfolios as $portfolio)    
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-case-studies">
                    <a href="{{$portfolio->singleLink()}}">
                        <img src="{{ $portfolio->image }}" alt="{{$portfolio->title}}">
                    </a>
                    <a href="{{$portfolio->singleLink()}}" class="case-studies-overlay">
                        <span class="overlay-text text-center p-3">
                            <h3 class="text-white mb-3">{{$portfolio->title}}</h3>
                            <p class="text-white">{{ $portfolio->excerpt }}</p>
                        </span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row justify-content-center">
            {{$portfolios->links('vendor.pagination.default')}}
        </div>
    </div>
</section>
@endsection
