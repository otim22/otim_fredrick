@extends('layouts.default')

@section('titile')

<h1>Hello Posts</h1>

@endsection

@section('content')

<section class="section-articles">

    <div class="resources-header">
        <div class="row resources-header__row">
            <!-- breadcrumb-area -->
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="resources-header__par">
                            From Tools, Html5, Css3, JavaScript, and
                            more through to Testing, Optimization and Deployment
                            Resources all put in one place. And it's Here!!
                        </p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-end -->
        </div>
    </div>

    <div class="row">
        <div class="col-2-of-3">
            <div class="blog-wrapper">
                <div class="blog-thumb">
                    <img src="img/blog/01.jpg" alt="">
                </div>
                <div class="post-meta">
                    <ul>
                        <li>By OTF</li>
                        <li>22 Jan 2019</li>
                        <li>Comments (3)</li>
                    </ul>
                </div>
                <div class="blog-content">
                    <h2><a href="{{ route('post_detail') }}">Monthly Web Development Update 10/2018 The Hurricane Web-To-End-Integrity And RAIL</a></h2>
                    <p>Forem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam quis nostrue</p>
                    <a href="{{ route('post_detail') }}" class="btn">Read more</a>
                </div>
            </div>
            <div class="blog-wrapper">
                <div class="blog-thumb">
                    <img src="img/blog/01.jpg" alt="">
                </div>
                <div class="post-meta">
                    <ul>
                        <li>By OTF</li>
                        <li>22 Jan 2019</li>
                        <li>Comments (3)</li>
                    </ul>
                </div>
                <div class="blog-content">
                    <h2><a href="{{ route('post_detail') }}">Monthly Web Development Update 10/2018 The Hurricane Web-To-End-Integrity And RAIL</a></h2>
                    <p>Forem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam quis nostrue</p>
                    <a href="{{ route('post_detail') }}" class="btn">Read more</a>
                </div>
            </div>
            <div class="blog-wrapper">
                <div class="blog-thumb">
                    <img src="img/blog/01.jpg" alt="">
                </div>
                <div class="post-meta">
                    <ul>
                        <li>By OTF</li>
                        <li>22 Jan 2019</li>
                        <li>Comments (3)</li>
                    </ul>
                </div>
                <div class="blog-content">
                    <h2><a href="{{ route('post_detail') }}">Monthly Web Development Update 10/2018 The Hurricane Web-To-End-Integrity And RAIL</a></h2>
                    <p>Forem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam quis nostrue</p>
                    <a href="{{ route('post_detail') }}" class="btn">Read more</a>
                </div>
            </div>
            <div class="blog-wrapper">
                <div class="blog-thumb">
                    <img src="img/blog/01.jpg" alt="">
                </div>
                <div class="post-meta">
                    <ul>
                        <li>By OTF</li>
                        <li>22 Jan 2019</li>
                        <li>Comments (3)</li>
                    </ul>
                </div>
                <div class="blog-content">
                    <h2><a href="{{ route('post_detail') }}">Monthly Web Development Update 10/2018 The Hurricane Web-To-End-Integrity And RAIL</a></h2>
                    <p>Forem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam quis nostrue</p>
                    <a href="{{ route('post_detail') }}" class="btn">Read more</a>
                </div>
            </div>
            <div class="pagination">
                <ul>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="col-1-of-3">
            @include('pages.partials.aside')
        </div>
    </div>

    <div class="subcription section-resources">
        @include('pages.partials.subscription')
    </div>
</section>

@endsection
