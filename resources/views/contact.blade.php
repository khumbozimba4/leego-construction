@extends('layouts.frontend')
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
                                <p class=" mt-2.5">{{$data['address']}}</p>
                            </li>

                            @php
                              $phoneNumber = str_replace('(0)', '', $data['primary_phone_number']);

                            @endphp
                            <li class=" block mb-5">
                                <strong class=" capitalize text-[18px]"><span class=" text-[#ffab00] inline-block text-[18px] leading-[30px] text-center transition-all duration-[0.3s] mr-2.5"><i class="fa fa-phone"></i></span> call us</strong>
                                <p class=" mt-2.5">
                                    <a href="tel:{{$phoneNumber}}">{{$data['primary_phone_number']}}</a>
                                    </p>
                            </li>
                            <li class=" block mb-5">
                                <strong class=" capitalize text-[18px]"><span class=" text-[#ffab00] inline-block text-[18px] leading-[30px] text-center transition-all duration-[0.3s] mr-2.5"><i class="fa fa-envelope"></i></span> email</strong>
                                <p class=" mt-2.5"> <a href="mailto:{{$data['primary_email_address']}}">{{$data['primary_email_address']}}</a> </p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">

                <div class="contact-info">
                    <h2 class=" font-semibold leading-[30px] capitalize text-[30px]">Get In Touch</h2>
                    <p class=" mx-0 my-5">We’d love to hear from you! Whether you have a question, need assistance, or want to discuss your project, feel free to reach out. Our team is here to help and ensure your needs are met. Let's connect today!</p>
                    <form class="contact-form" id="ajax-contact" action="{{ route('contact.submit') }}" method="post">
                        @csrf
                        <div class="flex flex-wrap mx-[-12px]">
                            <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                                <input class="form-control shadow-none text-[#777777] h-[50px] mb-5 rounded-none border-0 bg-[#f4f4f4] block w-full text-[1rem] font-normal leading-normal px-3 py-1.5" type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                                <input class="form-control shadow-none text-[#777777] h-[50px] mb-5 rounded-none border-0 bg-[#f4f4f4] block w-full text-[1rem] font-normal leading-normal px-3 py-1.5" type="email" name="email" placeholder="E-mail" required>
                            </div>
                        </div>
                        <div class="flex flex-wrap mx-[-12px]">
                            <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                                <input class="form-control shadow-none text-[#777777] h-[50px] mb-5 rounded-none border-0 bg-[#f4f4f4] block w-full text-[1rem] font-normal leading-normal px-3 py-1.5" type="tel" name="phone" placeholder="Phone">
                            </div>
                            <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                                <input class="form-control shadow-none text-[#777777] h-[50px] mb-5 rounded-none border-0 bg-[#f4f4f4] block w-full text-[1rem] font-normal leading-normal px-3 py-1.5" type="text" name="subject" placeholder="Subject" required>
                            </div>
                        </div>
                        <textarea class="form-control shadow-none text-[#777777] h-[133px] mb-5 rounded-none border-0 bg-[#f4f4f4] min-h-[calc(1.5em_+_0.75rem_+_2px)] block w-full text-[16px] font-normal leading-normal px-3 py-1.5" name="message" placeholder="Request" required></textarea>
                        <button type="submit" class="btn btn-type-3">Submit Request</button>
                    </form>

                    <div id="form-feedback" class="mt-4 text-center"></div>

                    <p class="form-message"></p>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts')
    <script>
        document.getElementById('ajax-contact').addEventListener('submit', function (e) {
    e.preventDefault(); // Prevent default form submission

    const form = this;
    const formData = new FormData(form);
    const feedbackDiv = document.getElementById('form-feedback');

    feedbackDiv.textContent = ''; // Clear feedback messages

    fetch(form.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
        },
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                feedbackDiv.innerHTML = `<p style="color:green">${data.message}</p>`;
                form.reset(); // Clear form fields
            } else {
                feedbackDiv.innerHTML = `<p style="color:red">Error: Something went wrong!</p>`;
            }
        })
        .catch(error => {
            feedbackDiv.innerHTML = `<p style="color:red">An error occurred: ${error.message}</p>`;
        });
});

    </script>
@endsection
