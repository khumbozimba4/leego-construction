<x-app-layout>
    <div class="page-header">
        <h3 class="page-title"> Quotation Details </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('quotations.index') }}">Quotations</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $quotation->customer_name }}</li>
            </ol>
        </nav>
    </div>

    {{-- Feedback Messages --}}
    @if (session('feedback'))
        <div class="alert alert-success">
            {{ session('feedback') }}
        </div>
    @endif
    @if (session('warning_feedback'))
        <div class="alert alert-warning">
            {{ session('warning_feedback') }}
        </div>
    @endif

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    {{-- Delete Form --}}
                    <form method="POST" action="{{ route('quotations.destroy', [$quotation->id]) }}">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger dltBtn" data-id="{{ $quotation->id }}"
                            data-text="Are you sure you want to delete this quotation? This action cannot be undone.">
                            <i class="fa fa-remove"></i> Delete Quotation
                        </button>
                    </form>
                    <p></p>
                    {{-- Edit Button --}}
                    <a href="{{ route('quotations.edit', $quotation->id) }}">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-edit"></i> Edit Quotation
                        </button>
                    </a>
                </div>
                <hr>

                {{-- Quotation Details Section --}}
                <div class="row">
                    {{-- Customer Details --}}
                    <div class="col-md-4 col-lg-4">
                        <label>Customer Name:</label>
                        <p><b>{{ $quotation->customer_name }}</b></p>
                    </div>

                    <div class="col-md-4 col-lg-4">
                        <label>Customer Contact:</label>
                        <p><b>{{ $quotation->customer_contact }}</b></p>
                    </div>

                    {{-- Equipment Details --}}
                    <div class="col-md-4 col-lg-4">
                        <label>Equipment Details:</label>
                        <p><b>{{ $quotation->equipment_details }}</b></p>
                    </div>

                    {{-- Pricing Information --}}
                    <div class="col-md-4 col-lg-4">
                        <label>Daily Rate:</label>
                        <p><b>${{ number_format($quotation->daily_rate, 2) }}</b></p>
                    </div>

                    <div class="col-md-4 col-lg-4">
                        <label>Rental Duration (days):</label>
                        <p><b>{{ $quotation->rental_duration }}</b></p>
                    </div>

                    <div class="col-md-4 col-lg-4">
                        <label>Total Price:</label>
                        <p><b>${{ number_format($quotation->total_price, 2) }}</b></p>
                    </div>

                    {{-- Status --}}
                    <div class="col-md-4 col-lg-4">
                        <label>Status:</label>
                        <p>
                            <b>
                                @if ($quotation->status === 'approved')
                                    <span class="badge badge-success">Approved</span>
                                @elseif ($quotation->status === 'pending')
                                    <span class="badge badge-warning">Pending</span>
                                @else
                                    <span class="badge badge-danger">Rejected</span>
                                @endif
                            </b>
                        </p>
                    </div>

                    {{-- Expiration Date --}}
                    <div class="col-md-4 col-lg-4">
                        <label>Expires At:</label>
                        <p><b>{{ $quotation->expires_at ? $quotation->expires_at->format('d M Y') : 'N/A' }}</b></p>
                    </div>

                    {{-- Created At --}}
                    <div class="col-md-4 col-lg-4">
                        <label>Created:</label>
                        <p><b>{{ $quotation->created_at->format('d M Y H:i') }}</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('scripts')
        {{-- Additional scripts if needed --}}
    @endsection
</x-app-layout>
