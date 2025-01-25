<div class="blocks-services-area owl-carousel owl-theme text-center mb-[100px] mt-[-100px] wow fadeInUp z-[9] relative">
    <div class="container">
        <div class="flex flex-wrap mx-[-12px]">
            @foreach($services as $service)
                <div class="w-4/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                    <div class="single-blocks-services group sm:mb-5">
                        <div class="single-blocks-img relative before:content-[''] before:absolute before:rounded-[5px] before:border-2 before:border-solid before:border-white before:inset-2.5">
                            <img src="{{ $service['image'] }}" alt="" class="img-fluid w-full rounded-[5px]" />
                        </div>
                        <h3>
                            <a class="text-lg font-semibold capitalize block mt-[15px] font-Montserrat" href="{{ $service['url'] }}">
                                {{ $service['title'] }}
                            </a>
                        </h3>
                        <p class="text-[#363636] m-[15px_20px_20px]">
                            {{ $service['description'] }}
                        </p>
                        <a href="{{ $service['url'] }}" class="text-[#222222] text-[15px] font-semibold tracking-[1px] leading-[21px] uppercase px-5 py-2.5 border-0 font-OpenSans inline-block">
                            <i class="fa fa-angle-right text-[30px] leading-[48px] w-[50px] h-[50px] text-white transition-all duration-[0.3s] rounded-[50%] bg-[#484848] group-hover:bg-[#ffab00]"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
