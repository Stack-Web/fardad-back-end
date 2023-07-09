@extends('website.layout.layout')
@section('title')
    {{$title}} -
@endsection
@section('content')


    <!--hero banners-->
    <section id="hero-banners" class="mt-3">
        <div class="container">
            <div class="row m-0">
                @foreach(\Xmen\StarterKit\Models\Post::where('is_breaking',1)->limit(2)->get() as $tp)
                    <div class="ban-box col-sm-12 col-md-6 col-lg-6">
                        <a href="{{route('n.show',$tp->slug)}}">
                            <img src="{{$tp->imgurl()}}" alt="{{$tp->title}}" title="{{$tp->title}}">
                            <span>
                            {{$tp->categories()->first()->name}}
                        </span>
                            <h4 class="ban-title container text-center">
                                {{$tp->title}}
                            </h4>
                            <h6>
                                {{$tp->created_at->diffForHumans()}}
                            </h6>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="row m-0">
                @foreach(\Xmen\StarterKit\Models\Post::where('is_breaking',1)->skip(2)->limit(3)->get() as $tp)
                    <div class="ban-box col-sm-12 col-md-4 col-lg-4">
                        <a href="{{route('n.show',$tp->slug)}}">
                            <img src="{{$tp->imgurl()}}" alt="">
                            <span>
                           {{$tp->categories()->first()->name}}
                        </span>
                            <h4 class="ban-title container text-center">
                                {{$tp->title}}
                            </h4>
                            <h6>
                                {{$tp->updated_at->diffForHumans()}}
                            </h6>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--hero banners-->

    <!--blogs-->
    <hr>
    <section id="blogs" class="mt-3">
        <div class="container">
            <div id="blog-start">
                <div class="row g-5">
                    <div class="col-md-8">
                        <!--            col-8       -->
                        <h3>{{$title}}</h3>
                        <hr>
                        @foreach($posts as $p)
                            <div class="blogs-box">
                                <div class="row m-0">
                                    <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                                        <div class="blogs-img-title">
                                            {{$p->categories()->first()->name}}
                                        </div>
                                        <img src="{{$p->imgurl()}}" class="img-fluid" alt="{{$p->title}}"
                                             title="{{$p->title}}">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-7 col-lg-7 mt-sm-3 mt-md-0">
                                        <div class="blogs-text">
                                            <h3 class="blogs-title">
                                                {{$p->title}}
                                            </h3>
                                            <span class="blogs-date text-info">
                                                {{$p->updated_at->diffForHumans()}}
                                            </span>
                                            <p class="blogs-paragraph">
                                                {{$p->subtitle}}
                                            </p>
                                            <a href="{{route('n.show',$p->slug)}}"
                                               class="text-dark text-decoration-none">
                                                <button class="blog-card-btn">ادامه مطالب</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                    @endforeach

                    <!--            col-8       -->


                        <!--        pagination      -->
                        <div class="col-12">
                            <div class="pagination-pos">
                                {{$posts->links()}}
                            </div>
                        </div>
                        <!--        pagination      -->
                    </div>

                    <div id="sticky-bar" class="col-md-4">
                        @include('website.layout.sidebar')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blogs-->
@endsection
