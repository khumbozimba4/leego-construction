@extends('layouts.frontend')

@section('breadcrumb')
           <!-- breadcroumb area start -->
           <x-breadcrumb :title="'Available Equipments'" :links="['Home' => url('/'), 'Equipments' => '#']" />

        <!-- breadcroumb area end -->
@endsection

@section('content')
<div class="shop-area p-[100px_0]">
    <div class="container">
        <div class="flex flex-wrap mx-[-12px]">
            <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                <div class="sho-result float-left">
                    <p class=" mt-2.5">Available for hire</p>
                </div>
            </div>

        </div>

        @foreach ($equipments as $item)
        <div class="h-3 sm:h-0"></div>
        <div class="flex flex-wrap mx-[-12px]">
            <div class="w-3/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                <div class="single-product-wrap text-center group" style="background-color: gray">
                    <div class="product-img relative before:content-[''] before:absolute before:transition-[0.3s] before:duration-500 before:scale-0 before:inset-0 group-hover:before:scale-100 before:bg-[rgba(0,0,0,.80)]">
                        <a href="{{ route('product.show', $item->id) }}">
                            <img src="{{ asset('storage/' . $item->photo) }}" alt="product" class="img-fluid w-full" />
                        </a>

                        <ul class="product-action group-hover:opacity-100 group-hover:visible absolute -translate-x-2/4 -translate-y-2/4 transition-all duration-[0.3s] invisible opacity-0 left-2/4 top-2/4">
                            <li class="inline-block mx-0 my-2.5 group/second">
                                <a href="{{ route('product.addToCart', $item->id) }}" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]">
                                    <i class="fa fa-cart-plus rotate-45 -ml-1"></i>
                                </a>
                            </li>

                        </ul>

                            @if($item->is_available)
                                <div class="sale-tag absolute p-[15px] right-0 top-0">
                                    <span class="text-white uppercase font-semibold w-full h-10 leading-10 text-center text-[11px] relative z-[1] block mb-[7px] rounded-[50%] bg-[#ffab00]">Available</span>
                                </div>
                            @else
                                <div class="sale-tag absolute p-[15px] right-0 top-0">
                                    <span class="text-white uppercase font-semibold w-full h-10 leading-10 text-center text-[11px] relative z-[1] block mb-[7px] rounded-[100%] bg-[#ff3300]">Not Available</span>
                                </div>
                            @endif
                     </div>
                    <div class="product-content p-[20px_0]">
                        <h4><a href="{{ route('product.show', $item->id) }}" class="product-title text-[16px] leading-[26px] font-medium capitalize">{{ $item->name }}</a></h4>
                        <div class="product-price text-[16px] leading-[25px] font-normal mx-0 my-2.5 font-OpenSans">
                            @if($item->rental_price)
                                <del class=" text-[#7e7e7e] mr-2">MWK{{ number_format($item->rental_price+30000,0) }}</del>
                            @endif
                            MWK{{ number_format($item->rental_price,2) }}
                        </div>
                        <div class="product-rating">
                            @for ($i = 0; $i < 5; $i++)
                                <i class="fa fa-star {{ $i < $item->rating ? 'text-[#ffab00]' : 'text-[#ccc]' }}"></i>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-[30px] sm:h-0"></div>
    @endforeach


    </div>
</div>
@endsection
