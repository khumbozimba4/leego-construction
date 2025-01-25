<x-app-layout>

    <div class="page-header">
        <h3 class="page-title"> Add Team Member </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('teams.index') }}">Team</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Team Member</li>
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
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('teams.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <!-- Name -->
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"
                                   style="@error('name')border:1px red solid;@enderror" value="{{ old('name') }}">
                            @error('name')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Role -->
                        <div class="form-group col-md-6">
                            <label for="role">Role</label>
                            <input type="text" class="form-control" id="role" name="role" placeholder="Enter Role"
                                   style="@error('role')border:1px red solid;@enderror" value="{{ old('role') }}">
                            @error('role')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Image -->
                        <div class="form-group col-md-6">
                            <label for="image">Profile Image</label>
                            <input type="file" class="form-control" id="image" name="image"
                                   style="@error('image')border:1px red solid;@enderror">
                            @error('image')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="image">Experience in Years</label>
                            <input type="number" class="form-control" id="experience" min="1" name="experience"
                                   style="@error('experience')border:1px red solid;@enderror">
                            @error('experience')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Bio -->
                        <div class="form-group col-md-12">
                            <label for="bio">Bio</label>
                            <textarea class="form-control" id="bio" name="bio" rows="5" placeholder="Enter Bio"
                                      style="@error('bio')border:1px red solid;@enderror">{{ old('bio') }}</textarea>
                            @error('bio')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary mt-3">Add Team Member</button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
