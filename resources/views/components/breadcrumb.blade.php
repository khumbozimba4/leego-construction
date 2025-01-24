<div class="tractour-breadcroumb breadcroumb-bg text-center bg-[center_center] bg-cover relative h-[300px] bg-[url({{ asset('assets/img/breadcroumb/breadcroumb.jpg') }})] pt-[130px] pb-5 px-0 before:content-[''] before:absolute before:w-full before:h-full before:opacity-80 before:left-0 before:top-0 before:!bg-black">
    <div class="container relative">
        <div class="flex flex-wrap mx-[-12px]">
            <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                <h2 class="text-white text-[40px] font-semibold leading-[45px] capitalize mb-20 font-Montserrat sm:mb-[50px]">{{ $title }}</h2>
                <h4 class="text-white text-[17px] float-left font-OpenSans">
                    @foreach ($links as $label => $url)
                        <a href="{{ $url }}" class="text-[#ffab00] capitalize hover:text-[#ffab00]">{{ $label }}</a>
                        @if (!$loop->last)
                            /
                        @endif
                    @endforeach
                </h4>
            </div>
        </div>
    </div>
</div>
