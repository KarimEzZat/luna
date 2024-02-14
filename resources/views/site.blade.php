@extends('layouts.front')

@section('content')
    <section class="about-area section-gap" id="about">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 col-md-12 about-right mb-lg-0 mb-4">
                    <!-- Section Title -->
                    <div class="section-title mb-50">
                        <h2>عن الشركة</h2>
                    </div>
                    <div>
                        {!! $companies->first()->description !!}
                    </div>
                </div>

                <div class="col-lg-6 about-left">
                    <img class="img-fluid" src="{{ asset('assets/Images/'.$companies->first()->photo) }}"
                         alt="شركة لونا - شركة دهانات وديكورات بالرياض">
                </div>
            </div>
        </div>
    </section>



    <section class="blog-area section-gap">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-12 mb-50">
                    <div class="section-title">
                        <h2>المقالات</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @if(isset($articles))
                    @foreach($articles as $article)
                        <div class="col-lg-12 mb-3">
                            <!-- Start Single Blog -->
                            <div class="single-blog">
                                <!-- blog image -->
                                <div class="blog-img">

                                    <img src="{{ asset('assets/Articles/img/'. $article->image) }}" class="img-fluid"
                                         alt="شركة لونا - شركة دهانات وديكورات بالرياض">

                                    <!-- blog info date & writter -->
                                    <div class="blog-info d-flex justify-content-between">
                                        <div class="text-white"><i
                                                class="fa fa-calendar"></i>{{ $article->created_at }}</div>
                                        <div class="text-white"><i
                                                class="fa fa-user"></i>بواسطة شركة لونا
                                        </div>
                                    </div></div>

                                <!-- blog header -->
                                <div class="blog-content">
                                    <h2 class="mb-3">
                                        {{ $article->title }}
                                    </h2>
                                    <div>{!! $article->description  !!}</div>
                                </div>
                            </div>
                            <!-- End Single Blog -->
                        </div>
                    @endforeach
                    <div class="col-md-12 mt-4">
                        <!-- start blog pagination-->
                        <nav class="blog-pagination justify-content-center d-flex">
                            {{ $articles->links() }}
                        </nav>
                        <!-- end blog pagination --></div>

                @endif
            </div>
        </div>
    </section>


    <section class="faqs-area section-gap" id="faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul>
                        @if(isset($faqs))
                            @foreach($faqs as $faq)
                                <li>
                                    <h2 class="mb-2">{{ $faq->tag }}</h2>
                                </li>

                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>


@endsection
