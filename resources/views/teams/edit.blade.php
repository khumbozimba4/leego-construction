<x-app-layout>
    <div class="page-header">
        <h3 class="page-title"> Edit Team </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('teams.index') }}">Teams</a></li>
                <li class="breadcrumb-item"><a href="{{ route('teams.show', $team->id) }}">{{ $team->name }}</a></li>
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
                <form class="forms-sample" action="{{ route('teams.update', $team->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        {{-- Name --}}
                        <div class="form-group col-md-6 col-lg-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Team Name"
                                   value="{{ old('name', $team->name) }}" style="@error('name')border:1px solid red;@enderror">
                            @error('name')
                                <div style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Role --}}
                        <div class="form-group col-md-6 col-lg-6">
                            <label for="role">Role</label>
                            <input type="text" class="form-control" id="role" name="role" placeholder="Team Role"
                                   value="{{ old('role', $team->role) }}" style="@error('role')border:1px solid red;@enderror">
                            @error('role')
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
                            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Team Description"
                                      style="@error('description')border:1px solid red;@enderror">{{ old('description', $team->description) }}</textarea>
                            @error('description')
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
                            @if ($team->photo)
                            <small>Current Image: </small>
                            <img src="{{ asset('storage/' . $team->photo) }}" alt="slider-photo" style="max-width: 100px; display: block;">
                            @endif
                        @error('photo')
                            <div style="color: red;">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        {{-- Experience --}}
                        <div class="form-group col-md-6 col-lg-6">
                            <label for="experience">Experience</label>
                            <input type="text" class="form-control" id="experience" name="experience" placeholder="Team Experience"
                                   value="{{ old('experience', $team->experience) }}" style="@error('experience')border:1px solid red;@enderror">
                            @error('experience')
                                <div style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                    </div>

                    <button type="submit" class="btn btn-primary me-2">Update Team</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
