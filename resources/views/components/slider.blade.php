<div class="slider-area">
    <div class="tractor-main-slider">
        @foreach($slides as $slide)
            <div
                class="tractor-single-slider bg-[center_center] bg-cover text-white h-[700px] relative before:content-[''] before:w-full before:h-full before:absolute before:left-0 before:top-0 before:bg-[linear-gradient(to_right,rgba(0,0,0,0.87)0%,rgba(0,0,0,0.87)50%,rgba(0,0,0,0)100%)] z-[1] before:z-[-1]"
                style="
                  background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(255, 255, 255, 0.5)), url('{{ $slide['image'] }}');

                ">
                <div class="tractor-single-table table h-full w-full">
                    <div class="tractor-single-tablecell table-cell align-middle">
                        <div class="container relative">
                            <div class="flex flex-wrap mx-[-12px]">
                                <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                                    <h4 class="text-white text-[50px] font-bold uppercase leading-[80px]">
                                        {!! $slide['title'] !!}
                                    </h4>
                                    <p class="text-white text-lg mt-5 mb-[33px] mx-0">
                                        {{ $slide['description'] }}
                                    </p>
                                    @foreach($slide['buttons'] as $button)
                                        <a href="{{ $button['url'] }}"
                                           class="text-[#222222] text-[15px] font-semibold tracking-[1px] leading-[21px] uppercase px-5 py-2.5 border-0 font-OpenSans inline-block btnl {{ $button['type'] }} m-[0_7px]">
                                            {{ $button['label'] }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
