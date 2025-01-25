<x-app-layout>

    <div class="page-header">
        <h3 class="page-title"> Add Equipment </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('equipments.index') }}">Equipments</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Equipment</li>
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
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('equipments.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <!-- Name -->
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Equipment Name"
                                   style="@error('name')border:1px red solid;@enderror" value="{{ old('name') }}">
                            @error('name')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Type -->
                        <div class="form-group col-md-6">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" id="type" name="type" placeholder="Enter Equipment Type"
                                   style="@error('type')border:1px red solid;@enderror" value="{{ old('type') }}">
                            @error('type')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="form-group col-md-12">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="5" placeholder="Enter Equipment Description"
                                      style="@error('description')border:1px red solid;@enderror">{{ old('description') }}</textarea>
                            @error('description')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Serial Number -->
                        <div class="form-group col-md-6">
                            <label for="serial_number">Serial Number</label>
                            <input type="text" class="form-control" id="serial_number" name="serial_number" placeholder="Enter Serial Number"
                                   style="@error('serial_number')border:1px red solid;@enderror" value="{{ old('serial_number') }}">
                            @error('serial_number')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Rental Price -->
                        <div class="form-group col-md-6">
                            <label for="rental_price">Rental Price</label>
                            <input type="number" step="0.01" class="form-control" id="rental_price" name="rental_price" placeholder="Enter Rental Price"
                                   style="@error('rental_price')border:1px red solid;@enderror" value="{{ old('rental_price') }}">
                            @error('rental_price')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Availability -->
                        <div class="form-group col-md-6">
                            <label for="is_available">Is Available?</label>
                            <select class="form-control" id="is_available" name="is_available"
                                    style="@error('is_available')border:1px red solid;@enderror">
                                <option value="1" {{ old('is_available') == 1 ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ old('is_available') == 0 ? 'selected' : '' }}>No</option>
                            </select>
                            @error('is_available')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Photo -->
                        <div class="form-group col-md-6">
                            <label for="photo">Equipment Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo" accept="image/*"
                                   style="@error('photo')border:1px red solid;@enderror" value="{{ old('photo') }}">
                            @error('photo')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary mt-3">Add Equipment</button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
