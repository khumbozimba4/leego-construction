<x-app-layout>
    <div class="page-header">
        <h3 class="page-title"> Slider Details </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('sliders.index') }}">Sliders</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $slider->title ?? 'Slider' }}</li>
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
                    <form method="POST" action="{{ route('sliders.destroy', [$slider->id]) }}">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger dltBtn" data-id="{{ $slider->id }}"
                            data-text="Are you sure you want to delete this slider? This action cannot be undone.">
                            <i class="fa fa-remove"></i> Delete Slider
                        </button>
                    </form>
                    <p></p>
                    {{-- Edit Button --}}
                    <a href="{{ route('sliders.edit', $slider->id) }}">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-edit"></i> Edit Slider
                        </button>
                    </a>
                </div>
                <hr>

                {{-- Slider Details Section --}}
                <div class="row">
                    {{-- Photo --}}
                    <div class="col-md-4 col-lg-4 text-center">
                        <label>Photo:</label>
                        @if ($slider->photo)
                            <img src="{{ asset('storage/' . $slider->photo) }}" alt="Slider Photo" class="img-fluid rounded">
                        @else
                            <p>No photo available</p>
                        @endif
                    </div>

                    {{-- Title --}}
                    <div class="col-md-4 col-lg-4">
                        <label>Title:</label>
                        <p><b>{{ $slider->title ?? 'N/A' }}</b></p>
                    </div>

                    {{-- Description --}}
                    <div class="col-md-4 col-lg-4">
                        <label>Description:</label>
                        <p><b>{{ $slider->description ?? 'N/A' }}</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('scripts')
        {{-- Additional scripts if needed --}}
    @endsection
</x-app-layout>
