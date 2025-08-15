 <!-- header area start -->
 <header class="header-area">

    <!-- header middle area start -->
    <div class="header-middle-area p-[30px_0]">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px]">
                <div class="xl:w-5/12 lg:w-5/12 md:w-5/12 w-full flex-[0_0_auto] max-w-full px-[12px]">
                    <div class="header-middle-logo inline-block sm:block sm:text-center sm:mx-0 sm:my-[15px] ">
                        <a href="{{route('home')}}">
                            <img height="60" width="80" src="{{asset('assets/img/leego/LEEGO-OGO-png.png')}}" alt="logo" class="img-fluid sm:m-[0_auto]" />
                        </a>
                    </div>
                </div>
                <div class="xl:w-7/12 lg:w-7/12 md:w-7/12 w-full flex-[0_0_auto] max-w-full px-[12px]">
                    <ul
                        class="header-middle-short-info float-right owl-carousel owl-theme inline-block mx-0 my-[7px] sm:text-center">
                        <li class="inline-flex items-center justify-center ml-5 max-w-full">
                            <div class="icon-container flex items-center justify-center w-[30px] h-8 bg-[#ffab00] mr-2.5">
                                <i class="fa fa-phone text-white text-lg"></i>
                            </div>
                            <div class="short-info text-[14px] capitalize text-[#777777] font-normal font-OpenSans">
                                phone number:
                                <h4 class="text-[14px] font-bold leading-[18px]"> <a href="tel:{{$data['primary_phone_number']}}"> {{$data['primary_phone_number']}}</a></h4>
                            </div>
                        </li>

                            <!-- Email Address -->
                            <li class="inline-flex items-center justify-center ml-5 max-w-full">
                                <div class="icon-container flex items-center justify-center w-[30px] h-8 bg-[#ffab00] mr-2.5">
                                    <i class="fa fa-at text-white text-lg"></i>
                                </div>
                                <div class="short-info text-[14px]  text-[#777777] font-normal font-OpenSans">
                                    email address:
                                    <h4 class="text-[14px] font-bold leading-[18px]"> <a href="mailto:{{$data['primary_email_address']}}"> {{$data['primary_email_address']}} </a></h4>
                                </div>
                            </li>

                            <!-- Address Location -->
                            <li class="inline-flex items-center justify-center ml-5 max-w-full">
                                <div class="icon-container flex items-center justify-center w-[30px] h-8 bg-[#ffab00] mr-2.5">
                                    <i class="fa fa-map-marker text-white text-lg"></i>
                                </div>
                                <div class="short-info text-[14px] capitalize text-[#777777] font-normal font-OpenSans">
                                    address location:
                                    <h4 class="text-[14px] font-bold leading-[18px]">{{$data['address']}}</h4>
                                </div>
                            </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- header middle area end -->
</header>
