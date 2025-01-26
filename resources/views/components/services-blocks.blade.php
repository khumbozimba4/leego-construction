<div class="container">

<div class="owl-carousel-services owl-carousel text-center mb-[100px] mt-[-100px] wow fadeInUp z-[9] relative">
    @foreach($services as $service)
    <div class="single-blocks-services group sm:mb-5">
        <div class="single-blocks-img relative before:content-[''] before:absolute before:rounded-[5px]  before:inset-2.5">
            <img src="{{ $service['image'] }}" alt="" class="img-fluid w-full rounded-[5px]" />
        </div>
        <h3>
            <a class="text-lg font-semibold capitalize block mt-[15px] font-Montserrat" href="{{ $service['url'] }}">
                {{ $service['title'] }}
            </a>
        </h3>
    </div>
    @endforeach
</div>
</div>
