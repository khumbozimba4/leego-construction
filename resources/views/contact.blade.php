@extends('layouts.app')
@section('breadcrumb')
           <!-- breadcroumb area start -->
           <x-breadcrumb :title="'Contact Us'" :links="['Home' => url('/'), 'Contact Us' => '#']" />

        <!-- breadcroumb area end -->
@endsection

@section('content')
<div class="contactus-area p-[100px_0]">
    <div class="container">
        <div class="flex flex-wrap mx-[-12px]">
            <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                <div id="tractour-map" class=" w-full h-[442px]">
                    <div class="contact-info-detail sm:mt-[30px]">
                        <h2 class=" font-semibold leading-[30px] capitalize text-[30px]">more information</h2>
                        <p class=" mx-0 my-5">
                            We are committed to providing top-notch civil construction services, including road construction, bridge building, pothole repairs, and equipment rentals. Contact us today to discuss your next project or to rent equipment for your construction needs
                        </p>
                        <ul class="contact-text-info">
                            <li class=" block mb-5">
                                <strong class=" capitalize text-[18px]"><span class=" text-[#ffab00] inline-block text-[18px] leading-[30px] text-center transition-all duration-[0.3s] mr-2.5"><i class="fa fa-map-marker"></i></span> location</strong>
                                <p class=" mt-2.5">Off Mpemba Road, Opposite Admarc Stage</p>
                            </li>

                            <li class=" block mb-5">
                                <strong class=" capitalize text-[18px]"><span class=" text-[#ffab00] inline-block text-[18px] leading-[30px] text-center transition-all duration-[0.3s] mr-2.5"><i class="fa fa-phone"></i></span> call us</strong>
                                <p class=" mt-2.5">
                                    <a href="tel:+265 888 36 83 36">+265 888 36 83 36</a>
                                    </p>
                            </li>
                            <li class=" block mb-5">
                                <strong class=" capitalize text-[18px]"><span class=" text-[#ffab00] inline-block text-[18px] leading-[30px] text-center transition-all duration-[0.3s] mr-2.5"><i class="fa fa-envelope"></i></span> email</strong>
                                <p class=" mt-2.5"> <a href="mailto:leonardgondwe@gmail.com">leonardgondwe@gmail.com</a> </p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">

                <div class="contact-info">
                    <h2 class=" font-semibold leading-[30px] capitalize text-[30px]">Get In Touch</h2>
                    <p class=" mx-0 my-5">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <form class="contact-form" id="ajax-contact" action="https://tailwind.workertm.com/tractour/mail.php" method="post">

                        <div class="flex flex-wrap mx-[-12px]">
                            <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                                <input class="form-control shadow-none text-[#777777] h-[50px] mb-5 rounded-none border-0  bg-[#f4f4f4] block w-full text-[1rem] font-normal leading-normal px-3 py-1.5" type="text" name="name" placeholder="Name">
                            </div>
                            <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                                <input class="form-control shadow-none text-[#777777] h-[50px] mb-5 rounded-none border-0  bg-[#f4f4f4] block w-full text-[1rem] font-normal leading-normal px-3 py-1.5" type="email" name="email" placeholder="E-mail">
                            </div>
                        </div>
                        <div class="flex flex-wrap mx-[-12px]">
                            <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                                <input class="form-control shadow-none text-[#777777] h-[50px] mb-5 rounded-none border-0  bg-[#f4f4f4] block w-full text-[1rem] font-normal leading-normal px-3 py-1.5" type="tel" name="phone" placeholder="Phone">
                            </div>
                            <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                                <input class="form-control shadow-none text-[#777777] h-[50px] mb-5 rounded-none border-0  bg-[#f4f4f4] block w-full text-[1rem] font-normal leading-normal px-3 py-1.5" type="text" name="subject" placeholder="Subject">
                            </div>
                        </div>


                        <textarea class="form-control shadow-none text-[#777777] h-[133px] mb-5 rounded-none border-0 bg-[#f4f4f4] min-h-[calc(1.5em_+_0.75rem_+_2px)] block w-full text-[16px] font-normal leading-normal px-3 py-1.5" name="message" cols="30" rows="8" placeholder="Request"></textarea>
                        <button type="submit" class="btn btn-type-3">submit request</button>
                    </form>
                    <p class="form-message"></p>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
