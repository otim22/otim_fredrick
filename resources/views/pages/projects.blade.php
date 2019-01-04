@extends('layouts.default')

@section('content')

<section class="section-projects">

    <div class="row">
        <h1 class="heading-3 mb-sm">My projects</h1>
        <h1 class="heading-5 mb-md">Some of my most recent works.</h1>
        <hr class="projects__divider mb-md">
        <!-- <div class="heading mb-md">
            <button class="btn btn__gallery category" href="" data-rel="all">All</button>
            <button class="btn btn__gallery category" data-rel="html-css">Html5/Css3</button>
            <button class="btn btn__gallery category" data-rel="react">React</button>
            <button class="btn btn__gallery category" data-rel="laravel">Laravel</button>
        </div> -->

        <div class="projects__gallery">

            <div class="projects__gallery-item projects__gallery-effect project__animation html-css all">

                <img src="{{ asset('img/projects/project_3.jpeg') }}" class="project__gallery-image" alt="Face recognition Brain">

                <div class="mask">
                    <h3 class="heading-4">Face recognition Brain</h3>
                    <p class="heading-5">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                    <a href="https://facerecognition-brain-app.herokuapp.com/" class="btn btn__gallery">Click Demo</a>
                </div>

            </div>

            <div class="projects__gallery-item projects__gallery-effect project__animation react all">

                <img src="{{ asset('img/projects/project_6.jpeg') }}" class="project__gallery-image" alt="Roboto friends">

                <div class="mask">
                    <h3 class="heading-4">Roboto Friends</h3>
                    <p class="heading-5">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                    <a href="https://github.com/otim22/robofriends" class="btn btn__gallery">Click Demo</a>
                </div>
            </div>

            <div class="projects__gallery-item projects__gallery-effect project__animation html-css all">

                <img src="{{ asset('img/projects/project_4.jpeg') }}"class="project__gallery-image" alt="Roboto-pwa">

                <div class="mask">
                    <h3 class="heading-4">Roboto PWA</h3>
                    <p class="heading-5">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                    <a href="https://github.com/otim22/roboto-pwa" class="btn btn__gallery">Click Demo</a>
                </div>
            </div>

            <div class="projects__gallery-item projects__gallery-effect project__animation html-css all">

                <img src="{{ asset('img/projects/project_1.png') }}" class="project__gallery-image" alt=" Face Recognition Api">

                <div class="mask">
                    <h3 class="heading-4">Face Recognition Api</h3>
                    <p class="heading-5">
                      Lorem ipsum dolor sit amet.
                    </p>
                    <a href="https://github.com/otim22/facerecognitionbrain-api" class="btn btn__gallery">Click Demo</a>
                </div>
            </div>

            <div class="projects__gallery-item projects__gallery-effect project__animation laravel all">

                <img src="{{ asset('img/projects/project_2.jpeg') }}" class="project__gallery-image" alt="Hex Color generator">

                <div class="mask">
                    <h3 class="heading-4">Hex Color generator</h3>
                    <p class="heading-5">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                    <a href="https://github.com/otim22/bg-color-generator" class="btn btn__gallery">Click Demo</a>
                </div>
            </div>

            <div class="projects__gallery-item projects__gallery-effect project__animation react all">

                <img src="{{ asset('img/projects/project_6.jpeg') }}" class="project__gallery-image" alt="Jangle">

                <div class="mask">
                    <h3 class="heading-4">Jangle</h3>
                    <p class="heading-5">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                    <a href="https://github.com/otim22/pic-gallery" class="btn btn__gallery">Click Demo</a>
                </div>
            </div>

        </div>

        <div style="clear:both;"></div>
    </div>
</section>

@stop
