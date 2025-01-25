<x-app-layout>
    <div class="page-header">
        <h3 class="page-title"> Edit Equipment </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('equipments.index') }}">Equipments</a></li>
                <li class="breadcrumb-item"><a href="{{ route('equipments.show', $equipment->id) }}">{{ $equipment->name }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
    </div>

    {{-- Feedback Messages --}}
    @if(session('feedback'))
        <div class="alert alert-success">
            {{ session('feedback') }}
        </div>
    @endif

    {{-- Edit Form --}}
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" action="{{ route('equipments.update', $equipment->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        {{-- Name --}}
                        <div class="form-group col-md-6 col-lg-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Equipment Name"
                                   value="{{ old('name', $equipment->name) }}" style="@error('name')border:1px solid red;@enderror">
                            @error('name')
                                <div style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Serial Number --}}
                        <div class="form-group col-md-6 col-lg-6">
                            <label for="serial_number">Serial Number</label>
                            <input type="text" class="form-control" id="serial_number" name="serial_number" placeholder="Serial Number"
                                   value="{{ old('serial_number', $equipment->serial_number) }}" style="@error('serial_number')border:1px solid red;@enderror">
                            @error('serial_number')
                                <div style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        {{-- Description --}}
                        <div class="form-group col-md-12 col-lg-12">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Equipment Description"
                                      style="@error('description')border:1px solid red;@enderror">{{ old('description', $equipment->description) }}</textarea>
                            @error('description')
                                <div style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        {{-- Rental Price --}}
                        <div class="form-group col-md-6 col-lg-6">
                            <label for="rental_price">Rental Price</label>
                            <input type="text" class="form-control" id="rental_price" name="rental_price" placeholder="Rental Price"
                                   value="{{ old('rental_price', $equipment->rental_price) }}" style="@error('rental_price')border:1px solid red;@enderror">
                            @error('rental_price')
                                <div style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Availability --}}
                        <div class="form-group col-md-6 col-lg-6">
                            <label for="is_available">Available</label>
                            <select class="form-control" id="is_available" name="is_available">
                                <option value="1" {{ old('is_available', $equipment->is_available) == 1 ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ old('is_available', $equipment->is_available) == 0 ? 'selected' : '' }}>No</option>
                            </select>
                            @error('is_available')
                                <div style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        {{-- Photo --}}
                        <div class="form-group col-md-6 col-lg-6">
                            <label for="photo">Photo</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @error('image')
                                <div style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror

                            @if ($equipment->photo)
                            <small>Current Image: </small>
                            <img src="{{ asset('storage/' . $equipment->photo) }}" alt="slider-photo" style="max-width: 100px; display: block;">
                            @endif
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Update Equipment</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
