@extends('layouts.frontend')
@section('title', 'Dashboard Page') <!-- Set a custom title -->

@section('slider')

    <x-slider :slides="[
        [
            'image' => 'assets/img/leego/bomag-horizontal.webp',
            'title' => 'Leego Construction',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'buttons' => [
                ['url' => url('/services'), 'label' => 'Our Services', 'type' => 'btn-type-1'],
                ['url' => '#', 'label' => 'Purchase Now', 'type' => 'btn-type-2'],
            ],
        ],
    ]" />
@endsection


@section('services')
<x-services-blocks  />

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
                                <p class=" text-[15px] text-[#363636]">We take pride in delivering exceptional civil construction and infrastructure projects. From roadworks to bridge construction, each project showcases our commitment to quality, precision, and innovation.</p>
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
                                        class="blog-date inline-block text-white text-[14px] font-normal capitalize leading-[14px] absolute p-[15px] right-0 bottom-[30px] bg-[#ffab00] font-OpenSans">
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
                                        class="blog-date inline-block text-white text-[14px] font-normal capitalize leading-[14px] absolute p-[15px] right-0 bottom-[30px] bg-[#ffab00] font-OpenSans">
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
                                        class="blog-date inline-block text-white text-[14px] font-normal capitalize leading-[14px] absolute p-[15px] right-0 bottom-[30px] bg-[#ffab00] font-OpenSans">
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
                        <p>{{ $data['about_our_company_on_home_page'] }}</p>
                        <a href="{{route('about')}}"
                            class=" text-[#222222] text-[15px] font-semibold tracking-[1px] leading-[21px] uppercase px-5 py-2.5 border-0 font-OpenSans inline-block btn-type-5 mt-[30px]">about
                            more</a>
                    </div>
                    <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                        <div class="about-slider-wraper owl-carousel owl-theme sm:mt-5">
                            <div
                                class="about-single-item relative before:content-[''] before:absolute before:transition-[0.3s] before:duration-[all] before:inset-0 before:bg-[linear-gradient(to_bottom,rgba(0,0,0,0)0%,rgba(2,2,0,0)1%,#222_100%)]">
                                <img src="{{asset('assets/img/leego/bolamag.jpeg')}}"  alt="about-img" class="img-fluid" />
                                <h4 class=" text-black absolute text-lg capitalize left-5 bottom-5">industrial proven
                                    equipments</h4>
                            </div>

                            <div
                            class="about-single-item relative before:content-[''] before:absolute before:transition-[0.3s] before:duration-[all] before:inset-0 before:bg-[linear-gradient(to_bottom,rgba(0,0,0,0)0%,rgba(2,2,0,0)1%,#222_100%)]">
                            <img src="{{asset('assets/img/leego/ncic.png')}}"  alt="about-img" class="img-fluid" />
                            <h4 class=" text-black absolute text-lg capitalize left-5 bottom-1">Certified by the best</h4>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about us area end -->
        <!-- counter area start -->

        <div
    class="counter-area p-[100px_0] counter-bg text-center bg-[center_center] bg-cover bg-fixed relative h-full bg-[url(assets/img/counter/construction-bg.jpg)] before:content-[''] before:absolute before:w-full before:h-full before:opacity-90 before:left-0 before:top-0 before:!bg-black z-[1] before:z-[-1]">
    <div class="container relative">
        <div class="flex flex-wrap mx-[-12px]">
            <div class="w-3/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                <div
                    class="single-counter text-white px-0 py-10 border-2 border-solid border-[#ffab00] sm:mx-0 sm:my-[15px] sm:px-0 sm:py-[30px]">
                    <i class="fa fa-building text-[50px] block text-[#ffab00]"></i>
                    <div class="counter font-bold text-[52px] leading-[52px] mx-0 my-[15px] font-Montserrat">350</div>
                    <div class="count-name font-normal text-[17px] leading-6 capitalize font-OpenSans">construction projects completed</div>
                </div>
            </div>
            <div class="w-3/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                <div
                    class="single-counter text-white px-0 py-10 border-2 border-solid border-[#ffab00] sm:mx-0 sm:my-[15px] sm:px-0 sm:py-[30px]">
                    <i class="fa fa-truck text-[50px] block text-[#ffab00]"></i>
                    <div class="counter font-bold text-[52px] leading-[52px] mx-0 my-[15px] font-Montserrat">150</div>
                    <div class="count-name font-normal text-[17px] leading-6 capitalize font-OpenSans">equipment rentals provided</div>
                </div>
            </div>
            <div class="w-3/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                <div
                    class="single-counter text-white px-0 py-10 border-2 border-solid border-[#ffab00] sm:mx-0 sm:my-[15px] sm:px-0 sm:py-[30px]">
                    <i class="fa fa-users text-[50px] block text-[#ffab00]"></i>
                    <div class="counter font-bold text-[52px] leading-[52px] mx-0 my-[15px] font-Montserrat">200</div>
                    <div class="count-name font-normal text-[17px] leading-6 capitalize font-OpenSans">skilled professionals on team</div>
                </div>
            </div>
            <div class="w-3/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                <div
                    class="single-counter text-white px-0 py-10 border-2 border-solid border-[#ffab00] sm:mx-0 sm:my-[15px] sm:px-0 sm:py-[30px]">
                    <i class="fa fa-smile-o text-[50px] block text-[#ffab00]"></i>
                    <div class="counter font-bold text-[52px] leading-[52px] mx-0 my-[15px] font-Montserrat">500</div>
                    <div class="count-name font-normal text-[17px] leading-6 capitalize font-OpenSans">happy clients served</div>
                </div>
            </div>
        </div>
    </div>
</div>





        <!-- quote sologan area start -->
        <div class="quote-sologan-area p-[100px_0] text-center  !bg-[#fbfbfb] ">
            <div class="container">
                <div class="flex flex-wrap mx-[-12px]">
                    <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                        <h2 class=" text-[40px] font-bold capitalize leading-[50px] font-Montserrat">Building Infrastructure, Empowering Growth..</h2>
                        <p class="text-[18px] w-[70%] text-[#363636] mt-[25px] mb-0 mx-auto md:w-3/5 sm:w-full">We specialize in road construction, pothole repairs, culvert installations, bridge construction, and road reshaping using both labor-based and machinery-driven methods. Additionally, we provide equipment rental services, including machines like BOMAG rollers, to support your construction needs</p>
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
                    <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px] mx-auto">
                        <div class="section-title text-center mb-[70px]">
                            <h2 class=" text-[32px] uppercase font-semibold leading-8">Skill Level</h2>
                            <span
                                class=" relative block before:content-[''] before:h-0.5 before:w-[44%] before:absolute before:top-2/4 before:inset-x-0 after:content-[''] after:h-0.5 after:w-[44%] after:absolute after:right-0 after:top-2/4 before:bg-[#222222] after:bg-[#222222]">
                                <img src="assets/img/separ-logo.png" alt="separetor" class="m-[13px_auto]">
                            </span>
                            <p class=" text-[15px] text-[#363636]">Our road construction expertise is unmatched, with a 100% commitment to quality and precision. From paving to equipment rentals, we deliver excellence in everything we do.

                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="flex flex-wrap mx-[-12px]">
                    <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                        <div class="progress-bar-wrape">
                            <!--progress Box-->
                            <div class="progress-box -mb-3">
                                <h4 class=" text-[18px] capitalize font-semibold mb-2.5">Road Construction</h4>
                                <div id="bar1" class="barfiller">
                                    <span class="tip"></span>
                                    <span class="fill" data-percentage="100"></span>
                                </div>
                            </div>
                            <!--progress Box-->
                            <div class="progress-box -mb-3">
                                <h4 class=" text-[18px] capitalize font-semibold mb-2.5">Bridge Construction</h4>
                                <div id="bar2" class="barfiller">
                                    <span class="tip"></span>
                                    <span class="fill" data-percentage="100"></span>
                                </div>
                            </div>
                            <!--progress Box-->
                            <div class="progress-box -mb-3">
                                <h4 class=" text-[18px] capitalize font-semibold mb-2.5">Pothole Repairing</h4>
                                <div id="bar3" class="barfiller">
                                    <span class="tip"></span>
                                    <span class="fill" data-percentage="100"></span>
                                </div>
                            </div>

                            </div>
                        </div>
                        <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">

                            <div class="progress-bar-wrape">

                                <!--progress Box-->
                                <div class="progress-box -mb-3">
                                    <h4 class=" text-[18px] capitalize font-semibold mb-2.5">Culvert Installation</h4>
                                    <div id="bar4" class="barfiller">
                                        <span class="tip"></span>
                                        <span class="fill" data-percentage="100"></span>
                                    </div>
                                </div>

                                <div class="progress-box -mb-3">
                                    <h4 class=" text-[18px] capitalize font-semibold mb-2.5">Road Reshaping</h4>
                                    <div id="bar5" class="barfiller">
                                        <span class="tip"></span>
                                        <span class="fill" data-percentage="100"></span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- progress and tab area end -->
          <!-- call to action area start -->
          <div
          class="callto-action-area p-[100px_0] cta-bg bg-[center_center] bg-cover bg-fixed relative h-full bg-[url(assets/img/cta/cta-bg.jpg)] before:content-[''] before:absolute before:w-full before:h-full before:opacity-90 before:left-0 before:top-0 before:!bg-black z-[1] before:z-[-1]">
          <div class="container relative">
              <div class="flex flex-wrap mx-[-12px]">
                <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                    <div class="callto-action-content float-left">
                        <h3 class="text-[36px] text-white font-semibold md:text-[25px]">
                            Building Your Vision, Strengthening Your Future
                        </h3>
                        <p class="text-[16px] uppercase text-white mt-5 md:mt-2.5">
                            Partner with us for dependable civil construction and equipment rental solutions
                        </p>
                    </div>
                    <a href="{{route('contact')}}"
                        class="text-[#222222] text-[15px] font-semibold tracking-[1px] leading-[21px] uppercase px-5 py-2.5 border-0 font-OpenSans inline-block btn-type-4 float-right mx-0 my-5 sm:float-none">
                        contact us
                    </a>
                </div>

              </div>
          </div>
      </div>
      <!-- call to action area end -->

        <!-- client slider area start -->

        <div class="industry-slider-area p-[100px_0] bg-[#fbfbfb]">
            <div class="container">
                <div class="flex flex-wrap mx-[-12px]">
                    <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                        <div class="all-client-slider owl-carousel owl-theme">
                            <!-- Single Industry Start -->
                            <div class="single-industry p-[20px] bg-white shadow-md rounded-lg text-center">
                                <h4 class="text-[20px] font-bold text-orange-500 mb-3">Road Construction</h4>

                            </div>
                            <!-- Single Industry End -->

                            <!-- Single Industry Start -->
                            <div class="single-industry p-[20px] bg-white shadow-md rounded-lg text-center">
                                <h4 class="text-[20px] font-bold text-orange-500 mb-3">Bridge Construction</h4>

                            </div>
                            <!-- Single Industry End -->

                            <!-- Single Industry Start -->
                            <div class="single-industry p-[20px] bg-white shadow-md rounded-lg text-center">
                                <h4 class="text-[20px] font-bold text-orange-500 mb-3">Culvert Installation</h4>

                            </div>
                            <!-- Single Industry End -->

                            <!-- Single Industry Start -->
                            <div class="single-industry p-[20px] bg-white shadow-md rounded-lg text-center">
                                <h4 class="text-[20px] font-bold text-orange-500 mb-3">Pothole Repairs</h4>

                            </div>
                            <!-- Single Industry End -->

                            <!-- Single Industry Start -->
                            <div class="single-industry p-[20px] bg-white shadow-md rounded-lg text-center">
                                <h4 class="text-[20px] font-bold text-orange-500 mb-3">Equipment Rental</h4>

                            </div>
                            <!-- Single Industry End -->

                            <!-- Single Industry Start -->
                            <div class="single-industry p-[20px] bg-white shadow-md rounded-lg text-center">
                                <h4 class="text-[20px] font-bold text-orange-500 mb-3">Infrastructure Development</h4>

                            </div>
                            <!-- Single Industry End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

