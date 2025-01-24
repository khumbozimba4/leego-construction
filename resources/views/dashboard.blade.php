<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="content-body">
                <div class="container-fluid">

                        <div class="row">

                            <div class="col-xl-4 col-xxl-4 col-sm-6">
                                <div class="widget-stat card">
                                    <div class="card-body">
                                        <h4 class="card-title">Total Messages</h4>
                                        <h3>MWK {{ number_format(20,2) }}</h3>
                                        <div class="progress mb-2">
                                            <div class="progress-bar progress-animated bg-primary"
                                                style="width: {{ 20 }}%"></div>
                                        </div>
                                        <small>MWK {{ number_format(20,2) }} </small>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-xxl-4 col-sm-6">
                                <div class="widget-stat card">
                                    <div class="card-body">
                                        <h4 class="card-title">Total Quatations</h4>
                                        <h3>MWK {{ number_format(10, 2) }}</h3>
                                        <div class="progress mb-2">
                                            <div class="progress-bar progress-animated @if (100 >= 90) bg-success
                                                @else
                                                bg-warning @endif"
                                                style="width: {{ 10 }}%"></div>
                                        </div>
                                        <small>MWK {{ number_format(10,2) }} </small>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-xxl-4 col-sm-6">
                                <div class="widget-stat card">
                                    <div class="card-body">
                                        <h4 class="card-title">Total Projects</h4>
                                        <h3>MWK {{ number_format(9, 2) }}</h3>
                                        <div class="progress mb-2">
                                            <div class="progress-bar progress-animated"
                                                style="background-color:red;width: {{ 9 }}%"></div>
                                        </div>
                                        <small>MWK {{ number_format(9, 2) }} </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">

                            <div class="col-xl-4 col-xxl-4 col-sm-6">
                                <div class="widget-stat card">
                                    <div class="card-body">
                                        <h4 class="card-title">Total Feedbacks</h4>
                                        <h3>{{ 6 }}</h3>
                                        <div class="progress mb-2">
                                            <div class="progress-bar progress-animated bg-red"
                                                style="width: {{ 6 }}%"></div>
                                        </div>
                                        <small>{{ 6 }}</small>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-4 col-xxl-4 col-sm-6">
                                <div class="widget-stat card">
                                    <div class="card-body">
                                        <h4 class="card-title">Total Invoice</h4>
                                        <h3>MWK {{ number_format(100,2) }}</h3>
                                        <div class="progress mb-2">
                                            <div class="progress-bar progress-animated bg-primary"
                                                style="width: {{ 100 }}%"></div>
                                        </div>
                                        <small>MWK {{ number_format(100,2) }} </small>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="mt-4">
                                    <canvas id="stacked"></canvas>
                                </div>
                            </div>

                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="mt-4">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    {{-- @if (!auth()->user()->hasRole('Head')) --}}

        @section('scripts')
            <script>
                const ctx = document.getElementById('myChart');

                const data = {
                    labels: [
                        'Target',
                        'Collected',
                        'Remaining'
                    ],
                    datasets: [{
                        label: 'Collected vs Remaining vs Target',
                        data: [
                            {{ number_format((float)20, 2, '.', '') }},
                            {{ number_format((float)10, 2, '.', '') }},
                            {{ number_format((float)9, 2, '.', '') }}

                        ],
                        backgroundColor: [
                            'rgb(255, 205, 86)',
                            'rgb(54, 162, 235)',
                            'rgb(255, 99, 132)'
                        ],
                        hoverOffset: 4
                    }]
                };

                new Chart(ctx, {
                    type: 'doughnut',
                    data: data,
                });





                // groupedData.datasets.forEach(dataset => {
                //     let collectedAmount = dataset.data[0];
                //     let remainingAmount = dataset.data[1];
                //     let target = collectedAmount + remainingAmount;
                //     let percentCollected = (collectedAmount / target) * 100;

                //     // Set colors based on target achievement
                //     if (percentCollected >= 90) {
                //         dataset.backgroundColor = ['rgba(0, 251, 30, 0.97)', 'rgba(rgba(0, 251, 30, 0.97)']; // Green
                //     } else if (percentCollected >= 70) {
                //         dataset.backgroundColor = ['rgba(255, 206, 86, 0.5)', 'rgba(255, 206, 86, 0.5)']; // Yellow amber
                //     } else {
                //         dataset.backgroundColor = ['rgba(255, 99, 132, 0.5)', 'rgba(255, 99, 132, 0.5)']; // Red
                //     }
                // });
                // var currentDate = new Date();

                // var monthNames = [
                //     "January", "February", "March", "April", "May", "June", "July",
                //     "August", "September", "October", "November", "December"
                // ];

                // var currentMonthIndex = currentDate.getMonth();

                // var currentMonthName = monthNames[currentMonthIndex];
                // var currentYear = currentDate.getFullYear();
                // const config = {
                //     type: 'bar',
                //     data: {
                //         labels: groupedData.labels,
                //         datasets: [{
                //                 label: 'Total Collected',
                //                 data: groupedData.datasets.map(data => data.data[0]),
                //                 backgroundColor: groupedData.datasets.map(dataset => dataset.backgroundColor[0])
                //             },
                //             {
                //                 label: 'Total Remaining',
                //                 data: groupedData.datasets.map(data => data.data[1]),
                //                 backgroundColor: 'rgba(54, 162, 235, 0.5)'
                //             }
                //         ]
                //     },
                //     options: {
                //         responsive: true,
                //         interaction: {
                //             intersect: false,
                //         },
                //         scales: {
                //             x: {
                //                 stacked: false,
                //             },
                //             y: {
                //                 stacked: false,
                //                 beginAtZero: true,
                //                 ticks: {
                //                     callback: function(value, index, values) {
                //                         return 'MWK ' + value;
                //                     }
                //                 }
                //             }
                //         },
                //         plugins: {
                //             title: {
                //                 display: true,
                //                 text: 'Account Manager Vs Amount Collected Vs Amount Remaining for the month of ' +
                //                     currentMonthName + " " + currentYear
                //             },
                //             legend: {
                //                 display: true,
                //                 position: 'bottom'
                //             }
                //         }
                //     }
                // };
                // const groupedChart = new Chart(document.getElementById('grouped'), config);

                // const stacked = document.getElementById('stacked');
                // new Chart(stacked, config);
            </script>
        @endsection
    {{-- @endif --}}

</x-app-layout>
