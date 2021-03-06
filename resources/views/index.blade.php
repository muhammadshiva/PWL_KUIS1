@extends('layouts.app')

@section('jumbotron')
    <div class="tm-welcome-container text-center text-white">
        <div class="tm-welcome-container-inner">
            <p class="tm-welcome-text mb-1 text-white">Video Catalog is brought to you by TemplateMo.</p>
            <p class="tm-welcome-text mb-5 text-white">This is a full-width video banner.</p>
            <a href="#content" class="btn tm-btn-animate tm-btn-cta tm-icon-down">
                <span>Discover</span>
            </a>
        </div>
    </div>

    <div id="tm-video-container">
        <video autoplay muted loop id="tm-video">
            <!-- <source src="video/sunset-timelapse-video.mp4" type="video/mp4"> -->
                <source src="video/wheat-field.mp4" type="video/mp4">
        </video>    
    </div>
    <i id="tm-video-control-button" class="fas fa-pause"></i>
@endsection

@section('content')
    <main>
        <div class="row">
            <div class="col-12">
                <h2 class="tm-page-title mb-4">Our Video Catalog</h2>
                <div class="tm-categories-container mb-5">
                    <h3 class="tm-text-primary tm-categories-text">Categories:</h3>
                    <ul class="nav tm-category-list">
                        <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link active">All</a></li>
                        <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Drone Shots</a></li>
                        <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Nature</a></li>
                        <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Actions</a></li>
                        <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Featured</a></li>
                    </ul>
                </div>        
            </div>
        </div>
                    
        <div class="row tm-catalog-item-list">
            @foreach ($posts as $post)
                <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                    <div class="position-relative tm-thumbnail-container">
                        <img src="{{$post->video}}" alt="Image" class="img-fluid tm-catalog-item-img">  
                        <a href="{{url('/vidio')}}" class="position-absolute tm-img-overlay">
                            <i class="fas fa-play tm-overlay-icon"></i>
                        </a>
                    </div>
                    <div class="p-4 tm-bg-gray tm-catalog-item-description">
                        <h3 class="tm-text-primary mb-3 tm-catalog-item-title">{{$post->title}}</h3>
                        <p class="tm-catalog-item-text">{!! $post->content !!}</p>
                    </div>
                </div>     
            @endforeach
        </div>
        <!-- Catalog Paging Buttons -->
        <div>
            <ul class="nav tm-paging-links">
                <li class="nav-item active"><a href="#" class="nav-link tm-paging-link">1</a></li>
                <li class="nav-item"><a href="#" class="nav-link tm-paging-link">2</a></li>
                <li class="nav-item"><a href="#" class="nav-link tm-paging-link">3</a></li>
                <li class="nav-item"><a href="#" class="nav-link tm-paging-link">4</a></li>
                <li class="nav-item"><a href="#" class="nav-link tm-paging-link">></a></li>
            </ul>
        </div>
    </main>
@endsection