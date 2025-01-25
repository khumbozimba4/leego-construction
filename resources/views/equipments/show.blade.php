<x-app-layout>
    <div class="page-header">
        <h3 class="page-title"> Equipment Details </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('equipments.index') }}">Equipments</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $equipment->name }}</li>
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
                    <form method="POST" action="{{ route('equipments.destroy', [$equipment->id]) }}">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger dltBtn" data-id="{{ $equipment->id }}"
                            data-text="Are you sure you want to delete this equipment? This action cannot be undone.">
                            <i class="fa fa-remove"></i> Delete Equipment
                        </button>
                    </form>
                    <p></p>
                    {{-- Edit Button --}}
                    <a href="{{ route('equipments.edit', $equipment->id) }}">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-edit"></i> Edit Equipment
                        </button>
                    </a>
                </div>
                <hr>

                {{-- Equipment Details Section --}}
                <div class="row">
                    {{-- Photo --}}
                    <div class="col-md-4 col-lg-4 text-center">
                        <label>Photo:</label>
                        @if ($equipment->photo)
                            <img src="{{ asset('storage/' . $equipment->photo) }}" alt="Equipment Photo" class="img-fluid rounded">
                        @else
                            <p>No photo available</p>
                        @endif
                    </div>

                    {{-- Name --}}
                    <div class="col-md-4 col-lg-4">
                        <label>Name:</label>
                        <p><b>{{ $equipment->name }}</b></p>
                    </div>

                    {{-- Serial Number --}}
                    <div class="col-md-4 col-lg-4">
                        <label>Serial Number:</label>
                        <p><b>{{ $equipment->serial_number ?? 'N/A' }}</b></p>
                    </div>

                    {{-- Description --}}
                    <div class="col-md-4 col-lg-4">
                        <label>Description:</label>
                        <p><b>{{ $equipment->description ?? 'N/A' }}</b></p>
                    </div>

                    {{-- Rental Price --}}
                    <div class="col-md-4 col-lg-4">
                        <label>Rental Price per day:</label>
                        <p><b>${{ number_format($equipment->rental_price, 2) }}</b></p>
                    </div>

                    {{-- Availability --}}
                    <div class="col-md-4 col-lg-4">
                        <label>Availability:</label>
                        <p>
                            <b>
                                @if ($equipment->is_available)
                                    <span class="badge badge-success">Available</span>
                                @else
                                    <span class="badge badge-danger">Not Available</span>
                                @endif
                            </b>
                        </p>
                    </div>

                    {{-- User --}}
                    @if ($equipment->user)
                        <div class="col-md-12 col-lg-12">
                            <label>Added By:</label>
                            <p><b>{{ $equipment->user->name }} ({{ $equipment->user->email }})</b></p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @section('scripts')
        {{-- Additional scripts if needed --}}
    @endsection
</x-app-layout>
