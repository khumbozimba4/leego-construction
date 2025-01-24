@extends('layouts.app')
@section('title', 'Home Page') <!-- Set a custom title -->

@section('slider')




    <x-slider :slides="[
        [
            'image' => 'assets/img/slider/slider-1.jpg',
            'title' => 'malume',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'buttons' => [
                ['url' => '#', 'label' => 'Our Services', 'type' => 'btn-type-1'],
                ['url' => '#', 'label' => 'Purchase Now', 'type' => 'btn-type-2'],
            ],
        ],
        [
            'image' => 'assets/img/slider/slider-2.jpg',
            'title' => 'malume',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'buttons' => [
                ['url' => '#', 'label' => 'Our Services', 'type' => 'btn-type-1'],
                ['url' => '#', 'label' => 'Purchase Now', 'type' => 'btn-type-2'],
            ],
        ],
    ]" />
@endsection


@section('services')

<x-services-blocks :services="[
    [
        'image' => 'assets/img/blocks/blocks-1.jpg',
        'title' => 'Welding Machine Using',
        'description' => 'On the other hand, we denounce with righteous indignation...',
        'url' => '#',
    ],
    [
        'image' => 'assets/img/blocks/blocks-2.jpg',
        'title' => 'New Compost Technology',
        'description' => 'On the other hand, we denounce with righteous indignation...',
        'url' => '#',
    ],
    [
        'image' => 'assets/img/blocks/blocks-3.jpg',
        'title' => 'New Welding Machine',
        'description' => 'On the other hand, we denounce with righteous indignation...',
        'url' => '#',
    ],
]" />

@endsection

@section('content')


               <!-- projects area start -->

               <div class="blog-area sm:px-0 sm:py-[50px] ">
                <div class="container">
                    <div class="flex flex-wrap mx-[-12px]">
                        <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px] mx-auto">
                            <div class="section-title text-center mb-[70px]">
                                <h2 class=" text-[32px] uppercase font-semibold leading-8">Projects</h2>
                                <span
                                    class=" relative block before:content-[''] before:h-0.5 before:w-[44%] before:absolute before:top-2/4 before:inset-x-0 after:content-[''] after:h-0.5 after:w-[44%] after:absolute after:right-0 after:top-2/4 before:bg-[#222222] after:bg-[#222222]">
                                    <img src="assets/img/separ-logo.png" alt="separetor" class="m-[13px_auto]">
                                </span>
                                <p class=" text-[15px] text-[#363636]">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor ncc msm lal uFlaboreLorem ipsum dolor sit amet,</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="flex flex-wrap mx-[-12px]">
                        <div class="w-4/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                            <div class="single-blog">
                                <div class="img-date-wrape relative">
                                    <img src="assets/img/blog/blog-1.jpg" alt=""
                                        class="img-fluid w-full rounded-[4px_4px_0_0]" />
                                    <div
                                        class="blog-date inline-block text-white text-[14px] font-normal capitalize leading-[14px] absolute p-[15px] left-0 bottom-[30px] bg-[#ffab00] font-OpenSans">
                                        january 01, 2019</div>
                                </div>
                                <div class="blog-content pt-[15px] pb-[30px] px-[15px]">
                                    <h3>
                                        <a class=" text-[20px] leading-[30px] font-semibold text-[#222222] capitalize font-Montserrat"
                                            href="index.html#">industrial revolution factory</a>
                                    </h3>
                                    <span class=" w-[100px] h-[5px] block mx-0 my-3 bg-[#ffab00]"></span>
                                    <p class=" text-[15px] text-[#363636]">industry. Lorem Ipsum has been the ever a industry
                                        standard dummy text ever since is the
                                        1500 an unknown printer took a text ever since is the 1500</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-4/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                            <div class="single-blog">
                                <div class="img-date-wrape relative">
                                    <img src="assets/img/blog/blog-2.jpg" alt=""
                                        class="img-fluid w-full rounded-[4px_4px_0_0]" />
                                    <div
                                        class="blog-date inline-block text-white text-[14px] font-normal capitalize leading-[14px] absolute p-[15px] left-0 bottom-[30px] bg-[#ffab00] font-OpenSans">
                                        march 11, 2018</div>
                                </div>
                                <div class="blog-content pt-[15px] pb-[30px] px-[15px]">
                                    <h3>
                                        <a class=" text-[20px] leading-[30px] font-semibold text-[#222222] capitalize font-Montserrat"
                                            href="index.html#">our genius engineer</a>
                                    </h3>
                                    <span class=" w-[100px] h-[5px] block mx-0 my-3 bg-[#ffab00]"></span>
                                    <p class=" text-[15px] text-[#363636]">industry. Lorem Ipsum has been the ever a industry
                                        standard dummy text ever since is the
                                        1500 an unknown printer took a text ever since is the 1500</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-4/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                            <div class="single-blog">
                                <div class="img-date-wrape relative">
                                    <img src="assets/img/blog/blog-3.jpg" alt=""
                                        class="img-fluid w-full rounded-[4px_4px_0_0]" />
                                    <div
                                        class="blog-date inline-block text-white text-[14px] font-normal capitalize leading-[14px] absolute p-[15px] left-0 bottom-[30px] bg-[#ffab00] font-OpenSans">
                                        December 10, 2011</div>
                                </div>
                                <div class="blog-content pt-[15px] pb-[30px] px-[15px]">
                                    <h3>
                                        <a class=" text-[20px] leading-[30px] font-semibold text-[#222222] capitalize font-Montserrat"
                                            href="index.html#">technical solution consultant</a>
                                    </h3>
                                    <span class="w-[100px] h-[5px] block mx-0 my-3 bg-[#ffab00]"></span>
                                    <p class=" text-[15px] text-[#363636]">industry. Lorem Ipsum has been the ever a industry
                                        standard dummy text ever since is the
                                        1500 an unknown printer took a text ever since is the 1500</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="spacer-15 h-[15px] sm:h-0"></div>

                    <a href="{{route(name: 'project.index')}}"
                class=" text-[#222222] text-[15px] font-semibold tracking-[1px] leading-[21px] uppercase px-5 py-2.5 border-0 font-OpenSans inline-block btn-type-3 mt-[30px]">see
                more <i class="fa fa-long-arrow-right"></i>
            </a>
                </div>
            </div>
            {{-- projects area ends --}}


        <!-- about us area start -->
        <div class="about-area p-[100px_0]">
            <div class="container">
                <div class="flex flex-wrap mx-[-12px]">
                    <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                        <h2 class=" text-[28px] font-bold capitalize mb-5">about our history</h2>
                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure praising pain was
                            born and I will give you a complete account of the system, expound the actual teachings of the
                            great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or
                            avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue
                            pleasure rationally encounter consequences are extremely painful. Nor again is there anyone who
                            loves or pursues or desires to obtain pain of itselfBut I must explain to</p>
                        <a href="{{route('about')}}"
                            class=" text-[#222222] text-[15px] font-semibold tracking-[1px] leading-[21px] uppercase px-5 py-2.5 border-0 font-OpenSans inline-block btn-type-5 mt-[30px]">about
                            more</a>
                    </div>
                    <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                        <div class="about-slider-wraper owl-carousel owl-theme sm:mt-5">
                            <div
                                class="about-single-item relative before:content-[''] before:absolute before:transition-[0.3s] before:duration-[all] before:inset-0 before:bg-[linear-gradient(to_bottom,rgba(0,0,0,0)0%,rgba(2,2,0,0)1%,#222_100%)]">
                                <img src="assets/img/about/about-1.jpg" alt="about-img" class="img-fluid" />
                                <h4 class=" text-white absolute text-lg capitalize left-5 bottom-5">industrial experimental
                                    technologies</h4>
                            </div>
                            <div
                                class="about-single-item relative before:content-[''] before:absolute before:transition-[0.3s] before:duration-[all] before:inset-0 before:bg-[linear-gradient(to_bottom,rgba(0,0,0,0)0%,rgba(2,2,0,0)1%,#222_100%)]">
                                <img src="assets/img/about/about-2.jpg" alt="about-img" class="img-fluid" />
                                <h4 class=" text-white absolute text-lg capitalize left-5 bottom-5">industrial experimental
                                    technologies</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about us area end -->
        <!-- counter area start -->
        <div
            class="counter-area p-[100px_0] counter-bg text-center bg-[center_center] bg-cover bg-fixed relative h-full bg-[url(assets/img/counter/counter-bg.jpg)] before:content-[''] before:absolute before:w-full before:h-full before:opacity-90 before:left-0 before:top-0 before:!bg-black z-[1] before:z-[-1]">
            <div class="container relative">
                <div class="flex flex-wrap mx-[-12px]">
                    <div class="w-3/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                        <div
                            class="single-counter text-white px-0 py-10 border-2 border-solid border-[#ffab00] sm:mx-0 sm:my-[15px] sm:px-0 sm:py-[30px]">
                            <i class="fa fa-thumbs-o-up text-[50px] block text-[#ffab00]"></i>
                            <div class="counter font-bold text-[52px] leading-[52px] mx-0 my-[15px] font-Montserrat">270
                            </div>
                            <div class="count-name font-normal text-[17px] leading-6 capitalize font-OpenSans">projects done
                            </div>
                        </div>
                    </div>
                    <div class="w-3/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                        <div
                            class="single-counter text-white px-0 py-10 border-2 border-solid border-[#ffab00] sm:mx-0 sm:my-[15px] sm:px-0 sm:py-[30px]">
                            <i class="fa fa-globe text-[50px] block text-[#ffab00]"></i>
                            <div class="counter font-bold text-[52px] leading-[52px] mx-0 my-[15px] font-Montserrat">400
                            </div>
                            <div class="count-name font-normal text-[17px] leading-6 capitalize font-OpenSans">across
                                worldwide</div>
                        </div>
                    </div>
                    <div class="w-3/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                        <div
                            class="single-counter text-white px-0 py-10 border-2 border-solid border-[#ffab00] sm:mx-0 sm:my-[15px] sm:px-0 sm:py-[30px]">
                            <i class="fa fa-trophy text-[50px] block text-[#ffab00]"></i>
                            <div class="counter font-bold text-[52px] leading-[52px] mx-0 my-[15px] font-Montserrat">690
                            </div>
                            <div class="count-name font-normal text-[17px] leading-6 capitalize font-OpenSans">awards
                                winning</div>
                        </div>
                    </div>
                    <div class="w-3/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                        <div
                            class="single-counter text-white px-0 py-10 border-2 border-solid border-[#ffab00] sm:mx-0 sm:my-[15px] sm:px-0 sm:py-[30px]">
                            <i class="fa fa-heart text-[50px] block text-[#ffab00]"></i>
                            <div class="counter font-bold text-[52px] leading-[52px] mx-0 my-[15px] font-Montserrat">100
                            </div>
                            <div class="count-name font-normal text-[17px] leading-6 capitalize font-OpenSans">satisfied
                                customers</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter area end -->
        <!-- services area start -->
        <div class="services-area p-[100px_0] text-center">
            <div class="container">
                <div class="flex flex-wrap mx-[-12px]">
                    <div class="w-4/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                        <div
                            class="single-services-wraper flex items-center justify-center cursor-pointer px-0 py-[15px] sm:border-0 group  border-b-[1px] border-solid border-[#dee2e6] ">
                            <div
                                class="services-icon -rotate-45 border transition-all duration-[0.3s] border-solid border-[#e6e6e6] group-hover:bg-[#222]">
                                <i
                                    class="flaticon-oil text-[28px] w-[50px] h-[50px] inline-block text-center leading-[50px] rotate-45 text-[#ffab00]"></i>
                            </div>
                            <div class="services-content text-left ml-[30px]">
                                <h4 class="text-[18px] font-semibold capitalize mb-[15px]">energy & utilities</h4>
                                <p class=" text-[#363636]">I must explain to you how this idea of denouncing pleasure and
                                    praising</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-4/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                        <div
                            class="single-services-wraper flex items-center justify-center cursor-pointer px-0 py-[15px] sm:border-0 group  border-b-[1px] border-solid border-[#dee2e6]">
                            <div
                                class="services-icon -rotate-45 border transition-all duration-[0.3s] border-solid border-[#e6e6e6] group-hover:bg-[#222]">
                                <i
                                    class="flaticon-internet text-[28px] w-[50px] h-[50px] inline-block text-center leading-[50px] rotate-45 text-[#ffab00]"></i>
                            </div>
                            <div class="services-content text-left ml-[30px]">
                                <h4 class="text-[18px] font-semibold capitalize mb-[15px]">internet of things</h4>
                                <p class=" text-[#363636]">I must explain to you how this idea of denouncing pleasure and
                                    praising</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-4/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                        <div
                            class="single-services-wraper flex items-center justify-center cursor-pointer px-0 py-[15px] sm:border-0 group  border-b-[1px] border-solid border-[#dee2e6]">
                            <div
                                class="services-icon -rotate-45 border transition-all duration-[0.3s] border-solid border-[#e6e6e6] group-hover:bg-[#222]">
                                <i
                                    class="flaticon-chip text-[28px] w-[50px] h-[50px] inline-block text-center leading-[50px] rotate-45 text-[#ffab00]"></i>
                            </div>
                            <div class="services-content text-left ml-[30px]">
                                <h4 class="text-[18px] font-semibold capitalize mb-[15px]">artificial intelligence</h4>
                                <p class=" text-[#363636]">I must explain to you how this idea of denouncing pleasure and
                                    praising</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap mx-[-12px]">
                    <div class="w-4/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                        <div
                            class="single-services-wraper flex items-center justify-center cursor-pointer px-0 py-[15px] sm:border-b-[none] group">
                            <div
                                class="services-icon -rotate-45 border transition-all duration-[0.3s] border-solid border-[#e6e6e6] group-hover:bg-[#222]">
                                <i
                                    class="flaticon-atom text-[28px] w-[50px] h-[50px] inline-block text-center leading-[50px] rotate-45 text-[#ffab00]"></i>
                            </div>
                            <div class="services-content text-left ml-[30px]">
                                <h4 class="text-[18px] font-semibold capitalize mb-[15px]">worldwide provider</h4>
                                <p class=" text-[#363636]">I must explain to you how this idea of denouncing pleasure and
                                    praising</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-4/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                        <div
                            class="single-services-wraper flex items-center justify-center cursor-pointer px-0 py-[15px] sm:border-b-[none] group">
                            <div
                                class="services-icon -rotate-45 border transition-all duration-[0.3s] border-solid border-[#e6e6e6] group-hover:bg-[#222]">
                                <i
                                    class="flaticon-medal text-[28px] w-[50px] h-[50px] inline-block text-center leading-[50px] rotate-45 text-[#ffab00]"></i>
                            </div>
                            <div class="services-content text-left ml-[30px]">
                                <h4 class="text-[18px] font-semibold capitalize mb-[15px]">25+ best company awards</h4>
                                <p class=" text-[#363636]">I must explain to you how this idea of denouncing pleasure and
                                    praising</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-4/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                        <div
                            class="single-services-wraper flex items-center justify-center cursor-pointer px-0 py-[15px] sm:border-b-[none] group">
                            <div
                                class="services-icon -rotate-45 border transition-all duration-[0.3s] border-solid border-[#e6e6e6] group-hover:bg-[#222]">
                                <i
                                    class="flaticon-idea text-[28px] w-[50px] h-[50px] inline-block text-center leading-[50px] rotate-45 text-[#ffab00]"></i>
                            </div>
                            <div class="services-content text-left ml-[30px]">
                                <h4 class="text-[18px] font-semibold capitalize mb-[15px]">best idea for evar</h4>
                                <p class=" text-[#363636]">I must explain to you how this idea of denouncing pleasure and
                                    praising</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="index.html#"
                class=" text-[#222222] text-[15px] font-semibold tracking-[1px] leading-[21px] uppercase px-5 py-2.5 border-0 font-OpenSans inline-block btn-type-3 mt-[30px]">see
                more <i class="fa fa-long-arrow-right"></i>
            </a>
        </div>
        <!-- services area end -->
        <!-- call to action area start -->
        <div
            class="callto-action-area p-[100px_0] cta-bg bg-[center_center] bg-cover bg-fixed relative h-full bg-[url(assets/img/cta/cta-bg.jpg)] before:content-[''] before:absolute before:w-full before:h-full before:opacity-90 before:left-0 before:top-0 before:!bg-black z-[1] before:z-[-1]">
            <div class="container relative">
                <div class="flex flex-wrap mx-[-12px]">
                    <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                        <div class="callto-action-content float-left">
                            <h3 class=" text-[36px] text-white font-semibold md:text-[25px] ">Looking for a reliable &
                                stable partner?</h3>
                            <p class=" text-[16px] uppercase text-white mt-5 md:mt-2.5 ">contact us & learn more about us
                            </p>
                        </div>
                        <a href="index.html#"
                            class=" text-[#222222] text-[15px] font-semibold tracking-[1px] leading-[21px] uppercase px-5 py-2.5 border-0 font-OpenSans inline-block btn-type-4 float-right mx-0 my-5 sm:float-none ">contact
                            us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- call to action area end -->

        <!-- quote sologan area start -->
        <div class="quote-sologan-area p-[100px_0] text-center  !bg-[#fbfbfb] ">
            <div class="container">
                <div class="flex flex-wrap mx-[-12px]">
                    <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                        <h2 class=" text-[40px] font-bold capitalize leading-[50px] font-Montserrat">delivering innovation
                            sustainability goals.</h2>
                        <p class="text-[18px] w-[70%] text-[#363636] mt-[25px] mb-0 mx-auto md:w-3/5 sm:w-full">On the other
                            hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized
                            by the charms of pleasure of the moment</p>
                        <a href="{{route('quatation')}}"
                            class=" text-[#222222] text-[15px] font-semibold tracking-[1px] leading-[21px] uppercase px-5 py-2.5 border-0 font-OpenSans inline-block btn-type-3 mt-[30px]">get
                            a quote</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- quote sologan area end -->
        <!-- progress and tab area start -->
        <div class="progress-tab-area p-[100px_0]">
            <div class="container">
                <div class="flex flex-wrap mx-[-12px]">
                    <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                        <div class="progress-bar-wrape">
                            <!--progress Box-->
                            <div class="progress-box -mb-3">
                                <h4 class=" text-[18px] capitalize font-semibold mb-2.5">constraction skill</h4>
                                <div id="bar1" class="barfiller">
                                    <span class="tip"></span>
                                    <span class="fill" data-percentage="90"></span>
                                </div>
                            </div>
                            <!--progress Box-->
                            <div class="progress-box -mb-3">
                                <h4 class=" text-[18px] capitalize font-semibold mb-2.5">oil engineering</h4>
                                <div id="bar2" class="barfiller">
                                    <span class="tip"></span>
                                    <span class="fill" data-percentage="70"></span>
                                </div>
                            </div>
                            <!--progress Box-->
                            <div class="progress-box -mb-3">
                                <h4 class=" text-[18px] capitalize font-semibold mb-2.5">soil test skill</h4>
                                <div id="bar3" class="barfiller">
                                    <span class="tip"></span>
                                    <span class="fill" data-percentage="95"></span>
                                </div>
                            </div>
                            <!--progress Box-->
                            <div class="progress-box -mb-3">
                                <h4 class=" text-[18px] capitalize font-semibold mb-2.5">gas engineering</h4>
                                <div id="bar4" class="barfiller">
                                    <span class="tip"></span>
                                    <span class="fill" data-percentage="80"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">

                        <div class="tractor-tabs-wraper">
                            <ul class="nav nav-tabs flex flex-wrap mb-0 pl-0 [list-style:none]" id="tractortab"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link text-[#777777] text-sm font-bold border px-[17px] py-2.5 border-solid border-[#e7eaea] font-OpenSans active"
                                        id="Service-tab" data-bs-toggle="tab" href="index.html#service1" role="tab"
                                        aria-controls="service1" aria-selected="true">Service 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-[#777777] text-sm font-bold border px-[17px] py-2.5 border-solid border-[#e7eaea] font-OpenSans"
                                        id="Service-tab2" data-bs-toggle="tab" href="index.html#service2" role="tab"
                                        aria-controls="service2" aria-selected="false">Service 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-[#777777] text-sm font-bold border px-[17px] py-2.5 border-solid border-[#e7eaea] font-OpenSans"
                                        id="Service-tab3" data-bs-toggle="tab" href="index.html#service3" role="tab"
                                        aria-controls="service3" aria-selected="false">Service 3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-[#777777] text-sm font-bold border px-[17px] py-2.5 border-solid border-[#e7eaea] font-OpenSans"
                                        id="Service-tab4" data-bs-toggle="tab" href="index.html#service4" role="tab"
                                        aria-controls="service4" aria-selected="false">Service 4</a>
                                </li>
                            </ul>
                            <div class="tab-content border px-3 py-5 border-t-white border-solid border-[#e7eaea]"
                                id="tractorcontent">
                                <div class="tab-pane fade show active" id="service1" role="tabpanel"
                                    aria-labelledby="Service-tab">
                                    <div class="tractor-tabs-content flex">
                                        <div class="tractor-tabs-img min-w-[100px] mr-2.5">
                                            <img src="assets/img/tab/tab-img.jpg" alt="tab-img" class="img-fluid" />
                                        </div>
                                        <div class="tractor-tabs-details">
                                            <p class="mb-5">simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has
                                                been the industry's standard dummy text ever since the 1500s, when an
                                                unknown printer</p>
                                            <p>took a galley of type and scrambled it to make a type specimensimply dummy
                                                text of the printing and typesetting industry. Lorem Ipsum has been the
                                                industry's standard dummy text ever since the</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="service2" role="tabpanel" aria-labelledby="Service-tab2">
                                    <div class="tractor-tabs-content flex">
                                        <div class="tractor-tabs-details">
                                            <p class="mb-5">simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has
                                                been the industry's standard dummy text ever since the 1500s, when an
                                                unknown printer</p>
                                            <p>took a galley of type and scrambled it to make a type specimensimply dummy
                                                text of the printing and typesetting industry. Lorem Ipsum has been the
                                                industry's standard dummy text ever since the</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="service3" role="tabpanel" aria-labelledby="Service-tab3">
                                    <div class="tractor-tabs-content flex">
                                        <div class="tractor-tabs-img min-w-[100px] mr-2.5">
                                            <img src="assets/img/tab/tab-img.jpg" alt="tab-img" class="img-fluid" />
                                        </div>
                                        <div class="tractor-tabs-details">
                                            <p class="mb-5">simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has
                                                been the industry's standard dummy text ever since the 1500s, when an
                                                unknown printer</p>
                                            <p>took a galley of type and scrambled it to make a type specimensimply dummy
                                                text of the printing and typesetting industry. Lorem Ipsum has been the
                                                industry's standard dummy text ever since the</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="service4" role="tabpanel" aria-labelledby="Service-tab4">
                                    <div class="tractor-tabs-content flex">
                                        <div class="tractor-tabs-img min-w-[100px] mr-2.5">
                                            <img src="assets/img/tab/tab-img.jpg" alt="tab-img" class="img-fluid" />
                                        </div>
                                        <div class="tractor-tabs-details">
                                            <p class="mb-5">simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has
                                                been the industry's standard dummy text ever since the 1500s, when an
                                                unknown printer</p>
                                            <p>took a galley of type and scrambled it to make a type specimensimply dummy
                                                text of the printing and typesetting industry. Lorem Ipsum has been the
                                                industry's standard dummy text ever since the</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- progress and tab area end -->
        <!-- testimonial area start -->
        <div
            class="testimonial-area p-[100px_0] text-center testimonial-bg bg-[center_center] bg-cover bg-fixed relative bg-[url(assets/img/testimonial/testimonial-bg.jpg)] before:content-[''] before:absolute before:w-full before:h-full before:opacity-[0.90] before:left-0 before:top-0 before:!bg-black">
            <div class="container">
                <div class="flex flex-wrap mx-[-12px]">
                    <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                        <div class="all-testimonial-wraper owl-carousel owl-theme">
                            <div class="single-testimonial">
                                <div
                                    class="client-message relative w-3/5 block mx-auto my-0 p-[30px] rounded-[10px] after:content-[''] after:w-0 after:h-0 after:absolute after:-ml-5 after:border-t-[20px] after:border-t-[white] after:border-x-[20px] after:border-x-transparent after:border-solid after:left-2/4 after:-bottom-5 bg-white">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod you a tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip</p>
                                </div>
                                <div class="client-img inline-block w-[114px] h-auto mt-10 mb-5 mx-0">
                                    <img src="assets/img/testimonial/test-thm-1.png" alt=""
                                        class="img-fluid rounded-[50%] border-[10px] border-solid border-white" />
                                </div>
                                <div class="client-title">
                                    <h3
                                        class=" text-[20px] leading-[22px] text-white capitalize font-semibold font-Montserrat">
                                        michael david</h3>
                                    <h5
                                        class=" text-[15px] leading-[25px] text-white font-normal tracking-[2px] font-OpenSansserif">
                                        engineer</h5>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div
                                    class="client-message relative w-3/5 block mx-auto my-0 p-[30px] rounded-[10px] after:content-[''] after:w-0 after:h-0 after:absolute after:-ml-5 after:border-t-[20px] after:border-t-[white] after:border-x-[20px] after:border-x-transparent after:border-solid after:left-2/4 after:-bottom-5 bg-white">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod you a tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip</p>
                                </div>
                                <div class="client-img inline-block w-[114px] h-auto mt-10 mb-5 mx-0">
                                    <img src="assets/img/testimonial/test-thm-2.jpg" alt=""
                                        class="img-fluid rounded-[50%] border-[10px] border-solid border-white" />
                                </div>
                                <div class="client-title">
                                    <h3
                                        class=" text-[20px] leading-[22px] text-white capitalize font-semibold font-Montserrat">
                                        david marth</h3>
                                    <h5
                                        class=" text-[15px] leading-[25px] text-white font-normal tracking-[2px] font-OpenSansserif">
                                        ceo</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial area end -->

        <!-- client slider area start -->

        <div class="industry-slider-area p-[100px_0] bg-[#fbfbfb]">
            <div class="container">
                <div class="flex flex-wrap mx-[-12px]">
                    <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                        <div class="all-client-slider owl-carousel owl-theme">
                            <!-- Single Industry Start -->
                            <div class="single-industry p-[20px] bg-white shadow-md rounded-lg text-center">
                                <h4 class="text-[20px] font-bold text-orange-500 mb-3">Road Construction</h4>
                                <p class="text-[16px] text-gray-700">
                                    Building durable roads, highways, and urban road networks for cities and towns.
                                </p>
                            </div>
                            <!-- Single Industry End -->

                            <!-- Single Industry Start -->
                            <div class="single-industry p-[20px] bg-white shadow-md rounded-lg text-center">
                                <h4 class="text-[20px] font-bold text-orange-500 mb-3">Bridge Construction</h4>
                                <p class="text-[16px] text-gray-700">
                                    Designing and constructing bridges for urban and rural connectivity.
                                </p>
                            </div>
                            <!-- Single Industry End -->

                            <!-- Single Industry Start -->
                            <div class="single-industry p-[20px] bg-white shadow-md rounded-lg text-center">
                                <h4 class="text-[20px] font-bold text-orange-500 mb-3">Culvert Installation</h4>
                                <p class="text-[16px] text-gray-700">
                                    Installing culverts for effective drainage and flood management systems.
                                </p>
                            </div>
                            <!-- Single Industry End -->

                            <!-- Single Industry Start -->
                            <div class="single-industry p-[20px] bg-white shadow-md rounded-lg text-center">
                                <h4 class="text-[20px] font-bold text-orange-500 mb-3">Pothole Repairs</h4>
                                <p class="text-[16px] text-gray-700">
                                    Maintaining and repairing roads to ensure safety and extend their lifespan.
                                </p>
                            </div>
                            <!-- Single Industry End -->

                            <!-- Single Industry Start -->
                            <div class="single-industry p-[20px] bg-white shadow-md rounded-lg text-center">
                                <h4 class="text-[20px] font-bold text-orange-500 mb-3">Equipment Rental</h4>
                                <p class="text-[16px] text-gray-700">
                                    Renting construction machinery like BOMAG compactors for various projects.
                                </p>
                            </div>
                            <!-- Single Industry End -->

                            <!-- Single Industry Start -->
                            <div class="single-industry p-[20px] bg-white shadow-md rounded-lg text-center">
                                <h4 class="text-[20px] font-bold text-orange-500 mb-3">Infrastructure Development</h4>
                                <p class="text-[16px] text-gray-700">
                                    Supporting public and private infrastructure projects, including urban redevelopment.
                                </p>
                            </div>
                            <!-- Single Industry End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
