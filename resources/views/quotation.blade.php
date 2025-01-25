@extends('layouts.frontend')
@section('breadcrumb')
           <!-- breadcroumb area start -->
           <x-breadcrumb :title="'Available Equipment'" :links="['Home' => url('/'), 'Equipment' => url('/services'), $equip->name => '#']" />

        <!-- breadcroumb area end -->
@endsection

@section('content')
     <!-- quote sologan area start -->
     <div class="contactus-area p-[100px_0]">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px]">
                <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                    <div id="tractour-map" class=" w-full h-[442px]">
                        <div class="contact-info-detail sm:mt-[30px]">
                            <h2 class=" font-semibold leading-[30px] capitalize text-[30px]">{{$equip->name}}</h2>

                            <ul class="contact-text-info text-center">
                                <li class=" block mb-5">
                                    <img class="img-fluid w-full" src="{{asset('storage/'.$equip->photo)}}" alt="team-img" />

                                    <a class=" text-[20px] text-[#777777] font-bold font-OpenSans"
                                    href="#">Age: New</a> <br/>
                                    <a class=" text-[20px] text-[#777777] font-bold font-OpenSans"
                                    href="#">Type: {{$equip->type}}</a> <br/>
                                    <a class=" text-[20px] text-[#777777] font-bold font-OpenSans"
                                    href="#">Availability: Available</a> <br/>
                                    <a class=" text-[20px] text-[#777777] font-bold font-OpenSans"
                                    href="#">Rental Per day: MWK{{number_format($equip->rental_price,2)}}</a> <br/>
                                    <p class=" mx-0 my-5">
                                        {{$equip->description}}
                                    </p>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>
                <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">

                    <div class="contact-info">
                        <h2 class="font-semibold leading-[30px] capitalize text-[30px]">Hire Our Equipment</h2>
                        <p class="mx-0 my-5">
                            Need reliable equipment for your project? Fill out the form below to request a rental. Let us know your requirements, and we’ll get back to you promptly.
                        </p>
                        <form class="hire-form" id="ajax-hire" action="{{ route('quatation') }}" method="post">
                            @csrf
                            <div class="flex flex-wrap mx-[-12px]">
                                <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                                    <input
                                        class="form-control shadow-none text-[#777777] h-[50px] mb-5 rounded-none border-0 bg-[#f4f4f4] block w-full text-[1rem] font-normal leading-normal px-3 py-1.5"
                                        type="text"
                                        name="name"
                                        placeholder="Your Name"
                                        required>
                                </div>
                                <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                                    <input
                                        class="form-control shadow-none text-[#777777] h-[50px] mb-5 rounded-none border-0 bg-[#f4f4f4] block w-full text-[1rem] font-normal leading-normal px-3 py-1.5"
                                        type="email"
                                        name="email"
                                        placeholder="Your Email"
                                        required>
                                </div>
                            </div>
                            <div class="flex flex-wrap mx-[-12px]">
                                <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                                    <input
                                        class="form-control shadow-none text-[#777777] h-[50px] mb-5 rounded-none border-0 bg-[#f4f4f4] block w-full text-[1rem] font-normal leading-normal px-3 py-1.5"
                                        type="tel"
                                        name="phone"
                                        placeholder="Phone Number"
                                        required>
                                </div>
                                <input type="hidden" value="{{$equip->id}}" required id="equipmentId">
                                <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                                    <input value="{{$equip->name}}"
                                        class="form-control shadow-none text-[#777777] h-[50px] mb-5 rounded-none border-0 bg-[#f4f4f4] block w-full text-[1rem] font-normal leading-normal px-3 py-1.5"
                                        name="equipment"
                                        readonly
                                        disabled
                                        required>

                                    </input>
                                </div>
                            </div>
                            <div class="flex flex-wrap mx-[-12px]">
                                <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                                    <input
                                        class="form-control shadow-none text-[#777777] h-[50px] mb-5 rounded-none border-0 bg-[#f4f4f4] block w-full text-[1rem] font-normal leading-normal px-3 py-1.5"
                                        type="date"
                                        name="rental_start_date"
                                        placeholder="Start Date"
                                        required>
                                </div>
                                <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                                    <input
                                        class="form-control shadow-none text-[#777777] h-[50px] mb-5 rounded-none border-0 bg-[#f4f4f4] block w-full text-[1rem] font-normal leading-normal px-3 py-1.5"
                                        type="date"
                                        name="rental_end_date"
                                        placeholder="End Date"
                                        required>
                                </div>
                            </div>
                            <textarea
                                class="form-control shadow-none text-[#777777] h-[133px] mb-5 rounded-none border-0 bg-[#f4f4f4] min-h-[calc(1.5em_+_0.75rem_+_2px)] block w-full text-[16px] font-normal leading-normal px-3 py-1.5"
                                name="additional_notes"
                                placeholder="Additional Notes (optional)"></textarea>
                            <button type="submit" class="btn btn-type-3">Submit Rental Request</button>
                        </form>
                        <div id="form-feedback" class="mt-4 text-center"></div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- quote sologan area end -->
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    document.addEventListener('DOMContentLoaded', () => {
        const startDateInput = document.querySelector('[name="rental_start_date"]');
        const endDateInput = document.querySelector('[name="rental_end_date"]');
        const rentalPrice = {{ $equip->rental_price }}; // Replace with your dynamic PHP variable
        const totalAmountDisplay = document.createElement('p');
        totalAmountDisplay.style.marginTop = '10px';
        totalAmountDisplay.style.fontWeight = 'bold';
        totalAmountDisplay.style.color = 'green';
        endDateInput.parentNode.appendChild(totalAmountDisplay); // Show the calculation below the end date field

        const validateDatesAndCalculateAmount = () => {
            const startDate = new Date(startDateInput.value);
            const endDate = new Date(endDateInput.value);

            if (!startDate || !endDate || isNaN(startDate) || isNaN(endDate)) {
                totalAmountDisplay.textContent = "Please select valid dates.";
                return;
            }

            if (endDate <= startDate) {
                totalAmountDisplay.textContent = "End date must be greater than start date.";
                return;
            }

            const totalDays = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24));
            const totalAmount = totalDays * rentalPrice;
            totalAmountDisplay.textContent = `Possible Total Amount: MWK${totalAmount}`;
        };

        startDateInput.addEventListener('change', validateDatesAndCalculateAmount);
        endDateInput.addEventListener('change', validateDatesAndCalculateAmount);
    });


    $(document).ready(function () {
        $('#ajax-hire').on('submit', function (e) {
            e.preventDefault(); // Prevent default form submission

            let formData = {
                _token: $('input[name="_token"]').val(),
                customer_name: $('input[name="name"]').val(),
                customer_contact: $('input[name="email"]').val(),
                phone: $('input[name="phone"]').val(),
                equipment_details: $('#equipmentId').val(),
                rental_start_date: $('input[name="rental_start_date"]').val(),
                rental_end_date: $('input[name="rental_end_date"]').val(),
                additional_notes: $('textarea[name="additional_notes"]').val(),
            };

            $.ajax({
                url: "{{ route('quatation') }}", // Route to handle form submission
                type: "POST",
                data: formData,
                dataType: "json",
                success: function (response) {
                    if (response.isSuccessful) {
                        $('#form-feedback').html(
                            `<p style='color:green'>${response.message}</p>`
                        );
                        $('#ajax-hire')[0].reset(); // Clear the form
                    } else {
                        $('#form-feedback').html(
                            `<p style='color:red'>${response.message}</p>`
                        );
                    }
                },
                error: function (xhr, status, error) {
                    let errors = xhr.responseJSON?.errors || {
                        general: "An error occurred. Please try again.",
                    };
                    let errorMessage = Object.values(errors)
                        .flat()
                        .join("<br>");
                    $('#form-feedback').html(
                        `<p style='color:red'>${errorMessage}</p>`
                    );
                },
            });
        });
    });
</script>

@endsection
