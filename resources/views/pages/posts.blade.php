@extends('layouts.default')

@section('titile')

<h1>Hello Posts</h1>

@endsection

@section('content')

<section class="section-articles">

    <div class="resources-header">
        <div class="row resources-header__row">
            <p class="resources-header__par">
                From Tools, Html5, Css3, JavaScript, and
                more through to Testing, Optimization and Deployment
                Resources all put in one place. And it's Here!!
            </p>
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
                    <h2><a href="#">Monthly Web Development Update 10/2018 The Hurricane Web-To-End-Integrity And RAIL</a></h2>
                    <p>Forem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam quis nostrue</p>
                    <button href="#" class="btn">Read more</button>
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
                    <h2><a href="#">Monthly Web Development Update 10/2018 The Hurricane Web-To-End-Integrity And RAIL</a></h2>
                    <p>Forem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam quis nostrue</p>
                    <button href="#" class="btn">Read more</button>
                </div>
            </div>
        </div>
        <div class="col-1-of-3">
            <div class="blog-wrapper">
                <p class="heading-3">
                    Side bar.
                </p>
            </div>
        </div>

    </div>
</section>

@endsection
