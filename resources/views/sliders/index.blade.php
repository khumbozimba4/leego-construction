<x-app-layout>
    <div class="page-header">
        <a href="{{ route('sliders.create') }}">
            <button class="btn btn-primary" type="button">
                <i class="fa fa-plus"></i> New Slider
            </button>
        </a>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Sliders</li>
            </ol>
        </nav>
    </div>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    @if (session('feedback'))
        <div class="alert alert-success">
            {{ session('feedback') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body" style="width: 100%; overflow-x: auto;">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="card-title">All Sliders</h4>
                    </div>
                    <div class="col-md-8">
                        <form method="POST" action="{{ route('searchSlider') }}" class="row g-3 float-end">
                            @csrf
                            <div class="col-auto">
                                <input type="text" style="height: 40px" name="searchValue" required
                                    class="form-control" placeholder="Search by slider title">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-3">Search</button>
                            </div>
                        </form>
                    </div>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> Image </th>
                            <th> Title </th>
                            <th> Description </th>
                            <th> Created </th>
                            <th> Edit </th>
                            <th> More </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($sliders->count())
                            @foreach ($sliders as $slider)
                                <tr>
                                    <td>
                                        @if ($slider->photo)
                                            <img src="{{ asset('storage/' . $slider->photo) }}" alt="{{ $slider->title }}"
                                                style="width: 100px; height: 50px;">
                                        @else
                                            <span class="text-muted">No image</span>
                                        @endif
                                    </td>
                                    <td> {{ $slider->title }} </td>
                                    <td> {{ $slider->description }} </td>
                                    <td> {{ $slider->created_at->diffForHumans() }} </td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ route('sliders.edit', $slider->id) }}">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('sliders.show', $slider->id) }}">
                                            More <i class="mdi mdi-arrow-right"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <div class="alert alert-danger">No records</div>
                        @endif
                    </tbody>
                </table>
                @if ($sliders->hasPages())
                    <div class="d-flex justify-content-center">
                        {!! $sliders->links('vendor.pagination.bootstrap-5') !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
