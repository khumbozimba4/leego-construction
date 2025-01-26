<x-app-layout>

    <div class="page-header">
        <h3 class="page-title"> Add Service </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('services.index') }}">Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Service</li>
            </ol>
        </nav>
    </div>

    {{-- Success Feedback --}}
    @if (session('feedback'))
        <div class="alert alert-success">
            {{ session('feedback') }}
        </div>
    @endif

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('services.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <!-- Image -->
                        <div class="form-group col-md-6">
                            <label for="image">Service Image</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*"
                                   style="@error('image')border:1px red solid;@enderror" value="{{ old('image') }}">
                            @error('image')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Title -->
                        <div class="form-group col-md-6">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Service Title"
                                   style="@error('title')border:1px red solid;@enderror" value="{{ old('title') }}">
                            @error('title')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="form-group col-md-12">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="5" placeholder="Enter Description"
                                      style="@error('description')border:1px red solid;@enderror">{{ old('description') }}</textarea>
                            @error('description')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary mt-3">Add Service</button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
