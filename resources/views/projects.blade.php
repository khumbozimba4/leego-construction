@extends('layouts.frontend')
@section('breadcrumb')
           <!-- breadcroumb area start -->
           <x-breadcrumb :title="'Projects'" :links="['Home' => url('/'), 'Projects' => '#']" />

        <!-- breadcroumb area end -->
@endsection

@section('content')
        <!-- projects area start -->

        <div class="blog-area sm:px-0 sm:py-[50px] ">
            <div class="container">
                <div class="flex flex-wrap mx-[-12px]">
                    <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px] mx-auto">
                        <div class="section-title text-center mb-[70px]">
                            <h2 class=" text-[32px] uppercase font-semibold leading-8"></h2>
                            <span
                                class=" relative block before:content-[''] before:h-0.5 before:w-[44%] before:absolute before:top-2/4 before:inset-x-0 after:content-[''] after:h-0.5 after:w-[44%] after:absolute after:right-0 after:top-2/4 before:bg-[#222222] after:bg-[#222222]">
                                <img src="{{asset('assets/img/separ-logo.png')}}" alt="separetor" class="m-[13px_auto]">
                            </span>
                            <h2 class="capitalize font-Montserrat text-[15px] text-[#363636] font-semibold">Projects  as of {{date('Y')}}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="flex flex-wrap mx-[-12px]">
                    @foreach($projects as $project)
                        <div class="w-4/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                            <div class="single-blog">
                                <div class="img-date-wrape relative">
                                    <img src="{{ asset('storage/'.$project->file)  }}" alt="{{ $project->title }}"
                                        class="img-fluid w-full rounded-[4px_4px_0_0]" />
                                    <div class="blog-date inline-block text-white text-[14px] font-normal capitalize leading-[14px] absolute p-[15px] right-0 bottom-[30px] bg-[#ffab00] font-OpenSans">
                                        {{ $project->start_date }}
                                    </div>
                                </div>
                                <div class="blog-content pt-[15px] pb-[30px] px-[15px]">
                                    <h3>
                                        <a class="text-[20px] leading-[30px] font-semibold text-[#222222] capitalize font-Montserrat"
                                            href="{{ route('projects.show', $project->id) }}">
                                            {{ $project->title }}
                                        </a>
                                    </h3>
                                    <span class="w-[100px] h-[5px] block mx-0 my-3 bg-[#ffab00]"></span>
                                    <p class="text-[15px] text-[#363636]">
                                        {{ Str::limit($project->description, 120) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="spacer-15 h-[15px] sm:h-0"></div>
            </div>

        </div>
        {{-- projects area ends --}}


@endsection
