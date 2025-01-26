@extends('layouts.frontend')
@section('breadcrumb')
           <!-- breadcroumb area start -->
           <x-breadcrumb :title="'About Us'" :links="['Home' => url('/'), 'About Us' => url('/about')]" />

        <!-- breadcroumb area end -->
@endsection

@section('content')



<div class="about-area p-[100px_0]">
    <div class="container">
        <!-- About Text Content -->
        <div class="flex flex-wrap mx-[-12px]">
            <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                <h2 class="text-[32px] text-center font-bold capitalize mb-5 text-orange-500">About Our Company</h2>
                <p class="mb-5 text-[18px]">
                    {{$aboutOurCompany}}
                </p>
            </div>
        </div>

        <!-- Values, Mission, and Certifications Section -->

        <!-- Values, Mission, and Certifications Section -->
        <div class="flex flex-wrap mx-[-12px]">
            <!-- Core Values -->
            <div class="w-4/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                <h3 class="text-[24px] capitalize font-bold color-[#f97316] mb-4">Core Values</h3>
                <ul class="list-disc list-inside text-left text-[18px] space-y-3">
                    <li>Integrity and Transparency</li>
                    <li>Innovation and Excellence</li>
                    <li>Commitment to Sustainability</li>
                    <li>Customer-Centric Approach</li>
                </ul>
            </div>

            <!-- Mission -->
            <div class="w-4/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                <h3 class="text-[24px] font-bold text-orange-500 mb-4">Our Mission</h3>
                <p class="text-[18px]">
                    {{$missionStatement}}
                </p>
            </div>

            <!-- Certifications -->
            <div class="w-4/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                <h3 class="text-[24px] font-bold text-orange-500 mb-4">Certifications</h3>
                <ul class="list-disc list-inside text-left text-[18px] space-y-3">
                    <li>ISO 9001:2015 – Quality Management</li>
                    <li>ISO 45001 – Occupational Safety</li>
                    <li>National Safety Award Recipient</li>
                    <li>Construction Association Member</li>
                </ul>
            </div>
        </div>
    </div>
</div>


  <!-- team area start -->
  <div class="team-area p-[100px_0] text-center">
    <div class="container">
        <div class="flex flex-wrap mx-[-12px]">
            <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px] mx-auto">
                <div class="section-title text-center mb-[70px]">
                    <h2 class=" text-[32px] uppercase font-semibold leading-8">meet our team</h2>
                    <span
                        class=" relative block before:content-[''] before:h-0.5 before:w-[44%] before:absolute before:top-2/4 before:inset-x-0 after:content-[''] after:h-0.5 after:w-[44%] after:absolute after:right-0 after:top-2/4 before:bg-[#222222] after:bg-[#222222]">
                        <img src="{{asset('assets/img/separ-logo.png')}}" alt="separetor" class="m-[13px_auto]">
                    </span>
                    <p class=" text-[15px] text-[#363636]">Our team consists of passionate and experienced professionals dedicated to delivering excellence. Together, we work hard to bring your vision to life.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="flex flex-wrap mx-[-12px]">

            @foreach ($teams as $item)

                <div class="w-4/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                    <div class="single-team-wraper sm:mb-[15px]">
                        <div class="team-img-wrape relative">
                            <img class="img-fluid w-full" src="{{asset('storage/'.$item->photo)}}" alt="team-img" />
                            <div
                                class="member-desig absolute transition-all duration-[0.3s] px-0 py-5 scale-y-0 bottom-0 inset-x-0 bg-black">
                                <h4 class=" text-[20px] text-white font-semibold uppercase font-OpenSans">{{$item->role}}</h4>
                            </div>
                        </div>
                        <div class="single-team-content">
                            <div
                                class="member-title py-2.5 border transition-all duration-[0.3s] border-solid border-[#efefef]">
                                <h3>
                                    <a class=" capitalize text-[20px] font-semibold text-[#222] font-OpenSansserif"
                                        href="#">{{$item->name}}</a>
                                </h3>
                                <a class=" text-[15px] text-[#777777] font-normal font-OpenSans"
                                    href="mailto:info@rob.com">Experience: {{$item->experience}} Years</a>
                            </div>
                            <div
                                class="team-social-hvr opacity-0 invisible border h-0 transition-all duration-[0.3s] border-solid border-[#efefef] bg-white">
                                <div class="member-title2 py-2.5">
                                    <h3>
                                        <a class=" capitalize text-[20px] font-semibold text-[#222] font-OpenSansserif"
                                            href="index.html#">{{$item->name}}</a>
                                    </h3>
                                    <a class=" text-[15px] text-[#777777] font-normal font-OpenSans"
                                        href="mailto:info@rob.com">Experience: {{$item->experience}} Years</a>
                                </div>
                                <div
                                    class="team-social-text transition-all duration-[0.3s] ease-linear p-[0_15px_15px]">
                                    <p>{{$item->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- team area end -->

@endsection
@section('styles')
    <style>
         @media (max-width: 768px) {
            .flex-columns {
                flex-direction: column;
                align-items: center;
            }

            .column-content {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                width: 100%;
                max-width: 500px;
            }

            .column-content ul {
                align-self: center;
                text-align: left;
                width: 100%;
                max-width: 300px;
            }
        }
    </style>
@endsection
