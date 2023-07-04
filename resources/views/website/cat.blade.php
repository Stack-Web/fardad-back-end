@extends('website.layout.layout')
@section('title')
    {{$cat->name}} -
@endsection
@section('content')


    <!--breadcrumb-->
    <div class="breadcrumb-bg mt-3">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item">
                        <a href="{{url('/')}}">
                            {{config('app.name')}}
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="{{route('products')}}">
                            محصولات
                        </a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        {{$title??'فهرست همه'}}
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!--breadcrumb-->

    <!--product-cat-show-->
    <div id="product-cat-show" class="mt-3 mb-3 p-1">
        <div class="container text-center">
            <div class="cat-box row m-0 align-items-center">
                @foreach(\App\Helpers\getMainCats() as $scat)
                    <div class="col">
                        <a href="{{route('cat', $scat->slug)}}">
                            <div>
                                <img src="{{$scat->thumbUrl()}}" alt="">
                                <h6>
                                    {{$scat->name}}
                                </h6>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--product-cat-show-->

    <!--products-->
    <div id="products" class="mt-5">
        <div class="row m-0 g-5">
            <div id="sticky-bar" class="col-md-3 col-sm-12 col-lg-3">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-tertiary rounded">
                        <aside class="mb-5">
                            <input type="hidden" id="catId" value="{{$cat->id}}"
                                   data-url="{{route('props.list',$cat->id)}}">

                            <meta-search id="jdata" ref="metaEl" cls="side-box"
                                         :searchable="true" :defz="def" :jdata='jdata'
                                         @if($cat->products()->min('price') != null)
                                         :minm="{{$cat->products()->min('price')}}"
                                         @else
                                         :minm="0"
                                         @endif
                                         @if($cat->products()->max('price') != null)
                                         :maxm="{{$cat->products()->max('price')}}"
                                         @else
                                         :maxm="5000000"
                                @endif
                            >
                                @include('website.layout.sidebar')
                            </meta-search>
                        </aside>
                    </div>

                    <div class="p-4 mb-3 bg-tertiary rounded">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, numquam, ut? Ad culpa
                        dolor excepturi harum, impedit, inventore, non officiis pariatur placeat qui quo repellendus
                        rerum sed sint tenetur totam!
                    </div>

                    <div class="p-4 mb-3 bg-tertiary rounded">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem est fugit harum,
                        incidunt magni necessitatibus odit omnis ratione voluptate. Eos illum itaque libero officia
                        omnis quis sed sunt veritatis?
                    </div>
                </div>
            </div>


            <div class="col-sm-12 col-md-9 col-lg-9">
                <!--                <div class="pro-box col-sm-12 col-md-12 col-lg-4">-->
                <!--                    <div class="box text-center">-->
                <!--                        <img class="pro-img" src="assets/img/products/items/AKG-K-271-MK2-1-220x220.jpg" alt="">-->
                <!--                        <h6>تیتر محصول</h6>-->
                <!--                        <h4>Model X-336z19</h4>-->
                <!--                        <p>افراد گروه سوم از اهمیت به پایان رساندن آگاه هستند. آنها با تفکر منطقی، طرحی روشن ارائه-->
                <!--                            می‌کنند. آنها نه تنها رساندن را می‌دانند.-->
                <!--                        </p>-->
                <!--                        <i class="fa fa-star-half-alt"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i-->
                <!--                            class="fa fa-star"></i><i class="fa fa-star"></i>-->

                <!--                        <div class="offer">-->
                <!--                            <img src="assets/img/products/sale.svg" width="55" height="55" alt="">-->
                <!--                            <span>8%</span>-->
                <!--                        </div>-->
                <!--                        <div class="row">-->

                <!--                            <div class="col-3">-->
                <!--                                <a href="#">-->
                <!--                                    <div class="add-to">-->
                <!--                                        <i class="fa fa-basket-shopping"></i>-->
                <!--                                    </div>-->
                <!--                                </a>-->
                <!--                            </div>-->
                <!--                            <div class="col-9">-->
                <!--                                <div class="price">-->
                <!--                                    <h6>-->
                <!--                                        <del>2.760.000</del>-->
                <!--                                    </h6>-->
                <!--                                    <h4>2.600.000</h4>-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->

                <div class="product-cards row m-0 row-cols-1 row-cols-md-3 g-4">
                    @foreach($products as $pro)
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 col-12 p-4">
                            @include('website.component.product-box',['p' => $pro])
                        </div>
                    @endforeach
                </div>

                <!--        pagination      -->
                <div class="col-12">
                    <div class="pagination-pos">
                        <div class="pt-4 text-center">
                            <div aria-label="..." class="display-block m-auto">
                                {{$products->withQueryString()->links()}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--        pagination      -->
                <hr>

                <!--            paragraph-->
                @if(isset($cat))
                    <div class="pro-paragraph">
                        <h5>
                            {{$cat->name}}
                        </h5>
                        <p>
                            {{$cat->description}}
                        </p>
                    @endif
                    <!--            paragraph-->

                    </div>
            </div>
        </div>
        <!--products-->


        {{--    <div class="parallax" style="background-image: url('{{$cat->backUrl()}}')">--}}

        {{--    </div>--}}
        <section id="list">
            <h1 style="display: none">
                {{$title??'محصولات'}}
            </h1>
            <div class="container pt-5">
                <div class="row">
                    @if (count($products) > 0)
                        <div class="col-12">
                            <div>
                                <img class=" mt-1 me-3 float-start icon-size" style="position: relative;top: -25px"
                                     src="{{asset('images/track.svg')}}" alt="ارسال آنی">
                                <h6 class="mt-1 text-muted">
                                    ارسال آنی در تهران
                                </h6>
                                <hr>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4">
                            <aside class="mb-5">
                                <input type="hidden" id="catId" value="{{$cat->id}}"
                                       data-url="{{route('props.list',$cat->id)}}">

                                <meta-search id="jdata" ref="metaEl" cls="side-box"
                                             :searchable="true" :defz="def" :jdata='jdata'
                                             @if($cat->products()->min('price') != null)
                                             :minm="{{$cat->products()->min('price')}}"
                                             @else
                                             :minm="0"
                                             @endif
                                             @if($cat->products()->max('price') != null)
                                             :maxm="{{$cat->products()->max('price')}}"
                                             @else
                                             :maxm="1000000000"
                                    @endif
                                >
                                    @include('website.layout.sidebar')
                                </meta-search>
                            </aside>
                        </div>
                        <div class="col-xl-9 col-md-8">
                            <div class="list-grid">
                                @foreach($products as $pro)
                                    <div class="item">
                                        @include('website.component.product-box',['p' => $pro])
                                    </div>
                                @endforeach
                            </div>
                            <div class="pt-4 text-center">
                                <div aria-label="..." class="display-block m-auto">
                                    {{$products->withQueryString()->links()}}
                                </div>
                            </div>
                        </div>
                    @else
                        <h1 class="col-md-12">
                            محصولی مطابق با درخواست شما پیدا نشد
                        </h1>
                    @endif
                </div>
            </div>
        </section>
        <!--products-->
@endsection
