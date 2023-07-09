@extends('website.layout.layout')
@section('title')
    {{$post->title}} -
@endsection
@section('content')

    <main class="container">
        <div id="blog-hero">
            <div class="bg-blog-head p-4 p-md-5 mb-4 text-bg-dark bg-gradient">
                <div class="row">
                    <div class="col-md-6">
                        <img src="assets/img/blogs/bl-3.jpg" alt="">
                    </div>
                    <div class="col-md-6 px-0">
                        <h1 class="display-4 fst-italic">عنوان مقاله انتخاب شده </h1>
                        <p class="lead my-3">افراد گروه سوم از اهمیت به پایان رساندن آگاه هستند. آنها با تفکر منطقی، طرحی
                            روشن ارائه می‌کنند. آنها نه تنها برای پایان دادن به پروژه‌ی خود در آینده برنامه ریزی می‌کنند،
                            بلکه به تمام نتایج و عواقب اجرای آن برنامه هم می‌اندیشند. این افراد کسانی هستند که هنر به پایان
                            رساندن را می‌دانند.
                        </p>
                        <p class="lead mb-0"><a href="#blog-start" class="text-white fw-bold">خواندن مقاله...</a></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <div class="blog-h-box row g-0 border overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">جدیدترین ها</strong>
                        <h3 class="mb-0">هدفون بی سیم</h3>
                        <div class="mb-1 text-body-secondary">12 خرداد 02</div>
                        <p class="card-text mb-auto">افراد گروه سوم از اهمیت به پایان رساندن آگاه هستند. آنها با تفکر منطقی،
                            طرحی روشن ارائه می‌کنند. آنها نه تنها برای پایان دادن به پرو
                        </p>
                        <a href="index.html">
                            <button class="blog-card-btn">ادامه مطالب</button>
                        </a>

                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="assets/img/blogs/bl-2.jpg" width="250" height="250" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="blog-h-box row g-0 border overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">به روز ترین ها</strong>
                        <h3 class="mb-0">هدفون بی سیم</h3>
                        <div class="mb-1 text-body-secondary">12 خرداد 02</div>
                        <p class="mb-auto">افراد گروه سوم از اهمیت به پایان رساندن آگاه هستند. آنها با تفکر منطقی، طرحی روشن
                            ارائه می‌کنند. آنها نه تنها برای پایان دادن به را می‌دانند.
                        </p>
                        <a href="index.html">
                            <button class="blog-card-btn">ادامه مطالب</button>
                        </a>

                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="assets/img/blogs/bl-1.png" width="250" height="250" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div id="blog-start">
            <div class="row g-5">
                <div class="col-md-8">
                    <img src="assets/img/blogs/bl-1.png"
                         class="w-100 h-auto" alt="">
                    <h3 class="pb-4 mb-4 fst-italic border-bottom mt-3">
                        عنوان مقاله اینجاست
                    </h3>

                    <article class="blog-post">
                        <h2 class="blog-post-title mb-1">تیتر اولیه پست </h2>
                        <p class="blog-post-meta"> 20 <a href="#">خرداد</a> 1400</p>

                        <p>گروه سوم، شامل افرادی می‌شود که قوانین اولیه قدرت و استراتژی را درک می‌کنند. پایان در هر زمینه‌ای
                            مانند یک پروژه، یک مبارزه‌ی انتخاباتی یا یک گفت و گو، اهمیت فوق العاده ای برای مردم دارد. این
                            اتفاق در ذهن ثبت می‌شود. یک جنگ می‌تواند با هیاهوی بسیار شروع شود و پیروزی‌های بسیاری را به
                            ارمغان بیاورد؛ اما اینکه چگونه به پایان می‌رسد، در یادها می‌ماند و کسی به شروع پرهیاهو اهمیتی
                            نمی‌دهد و تنها شاید این هیاهو برای لحظه‌ای ذهنشان را درگیر کند.
                        <hr>
                        <p>این ستاره ها مرا با فضاهای خالی شان به هراس نمی افکنند
                            ستاره هایی که نژاد انسان را به آنها راه نیست.
                            من این فضا را نزدیک تر، در درون خود دارم
                            صحرای متروکی که در خود دارم، مرا می هراساند.
                        <h2>تیتر دوم پست</h2>
                        <p>گروه بعد، افرادی هستند که هر کاری را انجام می‌دهند به نتیجه می‌رسانند، یا به این دلیل که آنها
                            مجبورند یا به این خاطر که توانایی انجامش را دارند، اما هنگام رسیدن به خط پایان، انرژی و قدرتی
                            کمتر از لحظه‌ی شروع دارند و از آنجا که مجبور به اتمام راه هستند، اغلب شتابزده و بی برنامه پروژه
                            را به انتها می‌رسانند و معمولا احساس نارضایتی می‌کنند.
                            در واقع هر پروژه را بدون درک دقیق از چگونگی پایان آن شروع می‌کند و هنگام پیشرفت و مواجهه با
                            رخدادهای غیرقابل انتظار برنامه‌ای خاص ندارند. </p>
                        <blockquote class="blockquote">
                            <p>یک عنوان کوچک وارد کنید</p>
                        </blockquote>
                        <p>انسان ها به سه گروه تقسیم می‌شوند. گروه اول، رویاپردازان و سخنگویان، که پروژه هایشان را با هیاهو
                            و شور و شوقی وصف ناپذیر آغاز می‌کنند؛ اما این انفجار انرژی و شور و هیجان به سرعت فروکش می‌کند،
                            زیرا در دنیای واقعی، برای پایان دادن به هر پروژه، تلاشی سخت و بی وقفه لازم است. این افراد
                            موجوداتی احساساتی هستند که اغلب در لحظه‌ی حال زندگی می‌کنند و به راحتی با ورود چیزهای جدید،
                            علاقه‌ی خود را از دست می‌دهند. پروژه های ناتمام بسیاری در زندگی‌شان وجود دارد و حتی برخی از آنان
                            به اندیشیدن و پروردن افکار پوچشان عادت دارند.
                        <h3>تیتر سوم</h3>
                        <p>لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) به متنی آزمایشی و بی‌معنی در صنعت چاپ،
                            صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای
                            پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر
                            گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. معمولا طراحان گرافیک برای صفحه‌آرایی،
                            نخست از متن‌های آزمایشی و بی‌معنی استفاده می‌کنند تا صرفا به مشتری یا صاحب کار خود نشان دهند که
                            صفحه طراحی یا صفحه بندی شده بعد از اینکه متن در آن قرار گیرد چگونه به نظر می‌رسد و قلم‌ها و
                            اندازه‌بندی‌ها چگونه در نظر گرفته شده‌است. از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه
                            رعایت حق تکثیر متون را ندارند و در همان حال کار آنها به نوعی وابسته به متن می‌باشد آنها با
                            استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را
                            به پایان برند.

                            <img src="assets/img/blogs/bl-2.jpg" class="mt-3 w-100 h-auto"
                                 alt="">

                        <h2>عنوان چهارک</h2>
                        <p>لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) به متنی آزمایشی و بی‌معنی در صنعت چاپ،
                            صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی
                            برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از
                            نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. معمولا طراحان گرافیک برای
                            صفحه‌آرایی، نخست از متن‌های آزمایشی و بوعی
                            وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی
                            می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند.
                        <h3>تیتر عنوان دلخواه</h3>
                        <p>گروه سوم، شامل افرادی می‌شود که قوانین اولیه قدرت و استراتژی را درک می‌کنند. پایان در هر زمینه‌ای
                            مانند یک پروژه، یک مبارزه‌ی انتخاباتی یا یک گفت و گو، اهمیت فوق العاده ای برای مردم دارد. این
                            اتفاق در ذهن ثبت می‌شود. یک جنگ می‌تواند با هیاهوی بسیار شروع شود و پیروزی‌های بسیاری را به
                            ارمغان بیاورد؛ اما اینکه چگونه به پایان می‌رسد، در یادها می‌ماند و کسی به شروع پرهیاهو اهمیتی
                            نمی‌دهد و تنها شاید این هیاهو برای لحظه‌ای ذهنشان را درگیر کند</p>
                        <p>جمع بندی پایانی
                            گروه سوم، شامل افرادی می‌شود که قوانین اولیه قدرت و استراتژی را درک می‌کنند. پایان در هر
                            زمینه‌ای مانند یک پروژه، یک مبارزه‌ی انتخاباتی یا یک گفت و گو، اهمیت فوق العاده ای برای مردم
                            دارد. این اتفاق در ذهن ثبت می‌شود. یک جنگ می‌تواند با هیاهوی بسیار شروع شود و پیروزی‌های بسیاری
                            را به ارمغان بیاورد؛ اما اینکه چگونه به پایان می‌رسد، در یادها می‌ماند و کسی به شروع پرهیاهو
                            اهمیتی نمی‌دهد و تنها شاید این هیاهو برای لحظه‌ای ذهنشان را درگیر کند.</p>
                    </article>
                    <hr>

                    <!-- author and hashtags -->
                    <div class="author">
                        <img src="assets/img/avatar.png" width="40" height="40" alt="">
                        <span>نام نویسنده مقاله</span>
                    </div>

                    <div class="hashtags mt-4">
                        <ul class="tags">
                            <li><a href="#" class="tag">#هشتگ</a></li>
                            <li><a href="#" class="tag">#هشتگ</a></li>
                            <li><a href="#" class="tag">#هشتگ</a></li>
                            <li><a href="#" class="tag">#هشتگ</a></li>
                            <li><a href="#" class="tag">#هشتگ</a></li>
                            <li><a href="#" class="tag">#هشتگ</a></li>
                        </ul>
                    </div>
                    <hr>
                    <!-- author and hashtags -->

                    <!--                contact -->
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">نام</label>
                            <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">فامیلی</label>
                            <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustomUsername" class="form-label">یوزرنیم</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="text" class="form-control" id="validationCustomUsername"
                                       aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    please enter valid username
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">ایمیل</label>
                            <input type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid email.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom05" class="form-label">شماره تلفن</label>
                            <input type="text" class="form-control" id="validationCustom05" required>
                            <div class="invalid-feedback">
                                Please provide a valid phone number.
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    قوانین را میپذیرم
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">ارسال نظر</button>
                        </div>
                    </form>
                    <!--                contact -->

                    <!--                comment blog-->
                    <div id="comment-blog">

                    </div>
                    <!--                comment blog-->

                </div>

                <div id="sticky-bar" class="col-md-4">
                    <div class="position-sticky" style="top: 2rem;">
                        <div class="p-4 mb-3 bg-body-tertiary rounded">
                            <img src="assets/img/blogs/envelope-5.png" class="d-block m-auto" alt="">
                            <h4 class="fst-italic text-center">عضویت در خبرنامه ما </h4>
                            <p class="mb-0">
                                عضو خبرنامه ما شوید و مطالب و پیشنهادات ویژه ما را در ایمیل خود دریافت کنید.
                            </p>
                            <input placeholder="ایمیل خود را وارد کنید!" class="input" name="text" type="text">
                            <button class="button" type="submit">عضویت</button>
                        </div>

                        <div class=" mb-3 bg-body-tertiary rounded">
                            <h4 class="fst-italic text-center mb-4">شبکه‌های اجتماعی ما </h4>
                            <div class="social-media ">
                                <ul class="wrapper">
                                    <li class="icon facebook">
                                        <span class="tooltip">Facebook</span>
                                        <span><i class="fab fa-facebook-f"></i></span>
                                    </li>
                                    <li class="icon twitter">
                                        <span class="tooltip">Twitter</span>
                                        <span><i class="fab fa-twitter"></i></span>
                                    </li>
                                    <li class="icon instagram">
                                        <span class="tooltip">Instagram</span>
                                        <span><i class="fab fa-instagram"></i></span>
                                    </li>
                                    <li class="icon github">
                                        <span class="tooltip">Github</span>
                                        <span><i class="fab fa-github"></i></span>
                                    </li>
                                    <li class="icon youtube">
                                        <span class="tooltip">Youtube</span>
                                        <span><i class="fab fa-youtube"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="p-4">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <section id="single">
        <div class="container">
            <div aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{route('welcome')}}">
                            {{config('app.name')}}
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('n.mag')}}">
                            {{__("Magazine")}}
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('n.category',$post->categories()->first()->slug)}}">
                            {{$post->categories()->first()->name}}
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {{$post->title}}
                    </li>
                </ol>
            </div>
            <h1>
                {{$post->title}}
            </h1>
            @if($post->subtitle != null)
                <div class="alert alert-info" style="text-align: center">
                    {{$post->subtitle}}
                </div>
            @endif
            <img src="{{$post->imgUrl()}}" class="img-fluid" alt="{{$post->title}}" title="{{$post->title}}">
            <div class="content">
                <p>
                    {!!$post->body!!}
                </p>
            </div>
            <hr>
            <div class="alert " id="comment-form">


                <!-- Contenedor Principal -->
                <div class="comments-container">
                    <ul id="comments-list" class="comments-list">
                        @foreach($comments as $c)
                            @include('starter-kit::component.comment',['c'=>$c])
                        @endforeach
                    </ul>
                    {{$comments->links()}}
                </div>
                <div class="comments-container non-print">
                    <div class="alert alert-secondary" id="comment-form">
                        @include('starter-kit::component.err')
                        <h5>
                            ارسال دیدگاه
                        </h5>
                        <form class="xsumbmiter non-print" method="post" id="comment-form-body" action="no-action">
                            <input type="hidden" id="smt"  value="{{route('n.comment.post',$post->slug)}}">
                            @csrf
                            <input type="hidden" id="reply" name="parent" value="">
                            <div class="row mb-3">
                                <div class="col-md-12 mt-3">
                                    <div class="form-group">
                                        <label for="comment-message">
                                        </label>

                                        <textarea required="" minlength="10" id="comment-message"
                                                  name="body" class="form-control " placeholder="پیام"
                                                  rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-group">

                                        <input name="name" required="" minlength="2" type="text"
                                               class="form-control " placeholder="نام" value=""
                                               id="name">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-group">

                                        <input required="" name="email" id="email" type="email"
                                               class="form-control " placeholder="ایمیل" value="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label> &nbsp;</label>
                                    <input name="" type="submit" class="btn btn-primary mt-2"
                                           value="ارسال دیدگاه">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
