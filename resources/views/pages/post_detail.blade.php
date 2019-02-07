@extends('layouts.default')

@section('content')

<section class="section-articles">
    <div class="resources-header">
        <div class="row resources-header__row">
            <!-- breadcrumb-area -->
            <div class="container">
                <div class="row">
                    <p class="resources-header__par">
                        From Tools, Html5, Css3, JavaScript, and
                        more through to Testing, Optimization and Deployment
                        Resources all put in one place. And it's Here!!
                    </p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Post</li>
                        </ol>
                    </nav>
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
                        <li>02 Jan 2019</li>
                    </ul>
                </div>
                <div class="blog-content blog-d-content">
                    <h2><a href="{{ route('post_detail') }}">Monthly Web Development Update 10/2018 The Hurricane Web-To-End-Integrity And RAIL</a></h2>
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give
                    you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the
                    master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but
                    because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor
                    again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because
                    occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example,
                    which of us ever undertakes laborious physical exe rcise, except to obtain some advantage from it? But who has any right
                    to find fault with a man who chooses too enjoy a pleasure that has no annoying consequences, or one who avoids a pain.</p>
                    <blockquote>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam
                        eaque ipsa quae.
                        <footer>Alexzender Alex</footer>
                    </blockquote>
                    <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to
                    pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or
                    pursues or desires to obtain pain of itself, because.</p>
                    <div class="row tag-and-share">
                        <div class="col-1-of-2">
                            <div class="blog-post-tag">
                                <span>Tag :</span>
                                <ul>
                                    <li><a href="#">App Landing,</a></li>
                                    <li><a href="#">Apps,</a></li>
                                    <li><a href="#">Corporate</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-1-of-2">
                            <div class="blog-share">
                                <span>Share :</span>
                                <ul>
                                    <li><a href="#">Facebook,</a></li>
                                    <li><a href="#">Twitter,</a></li>
                                    <li><a href="#">Google</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="related-post-wrapper">
                <div class="recent-post">
                    <h5>Recent Post</h5>
                </div>
                <div class="row">
                    <div class="col-1-of-2">
                        <div class="widget">
                            <div class="sidebar-rc-post">
                                <div class="rc-post-thumb">
                                    <img src="img/blog/04.jpg" alt="">
                                </div>
                                <div class="rc-post-content">
                                    <h5><a href="{{ route('post_detail') }}">Using Visual Composer Website Builder To Create WordPress Websites</a></h5>
                                    <div class="post-meta">
                                        <ul>
                                            <li>By OTF</li>
                                            <li>02 Feb 2019</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-of-2">
                        <div class="widget">
                            <div class="sidebar-rc-post">
                                <div class="rc-post-thumb">
                                    <img src="img/blog/04.jpg" alt="">
                                </div>
                                <div class="rc-post-content">
                                <h5><a href="{{ route('post_detail') }}">Using Visual Composer Website Builder To Create WordPress Websites</a></h5>
                                <div class="post-meta">
                                    <ul>
                                        <li>By OTF</li>
                                        <li>02 Feb 2019</li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
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
