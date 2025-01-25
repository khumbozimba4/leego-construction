<x-app-layout>
    <div class="page-header">
        <h3 class="page-title"> Edit Project </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Projects</a></li>
                <li class="breadcrumb-item"><a href="{{ route('projects.show', $project->id) }}">{{ $project->name }}</a></li>
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
                <form class="forms-sample" action="{{ route('projects.update', $project->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        {{-- Name --}}
                        <div class="form-group col-md-6 col-lg-6">
                            <label for="name">Project Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Project Name"
                                   value="{{ old('name', $project->name) }}" style="@error('name')border:1px solid red;@enderror">
                            @error('name')
                                <div style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Client --}}
                        <div class="form-group col-md-6 col-lg-6">
                            <label for="client">Client</label>
                            <input type="text" class="form-control" id="client" name="client" placeholder="Client Name"
                                   value="{{ old('client', $project->client) }}" style="@error('client')border:1px solid red;@enderror">
                            @error('client')
                                <div style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        {{-- Start Date --}}
                        <div class="form-group col-md-6 col-lg-6">
                            <label for="start_date">Start Date</label>
                            <input type="date" class="form-control" id="start_date" name="start_date"
                                   value="{{ old('start_date', $project->start_date) }}" style="@error('start_date')border:1px solid red;@enderror">
                            @error('start_date')
                                <div style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- End Date --}}
                        <div class="form-group col-md-6 col-lg-6">
                            <label for="end_date">End Date</label>
                            <input type="date" class="form-control" id="end_date" name="end_date"
                                   value="{{ old('end_date', $project->end_date) }}" style="@error('end_date')border:1px solid red;@enderror">
                            @error('end_date')
                                <div style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        {{-- Status --}}
                        <div class="form-group col-md-6 col-lg-6">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status" style="@error('status')border:1px solid red;@enderror">
                                <option value="Pending" {{ old('status', $project->status) == 'Pending' ? 'selected' : '' }}>Pending</option>
                                <option value="In Progress" {{ old('status', $project->status) == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                                <option value="Completed" {{ old('status', $project->status) == 'Completed' ? 'selected' : '' }}>Completed</option>
                            </select>
                            @error('status')
                                <div style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Budget --}}
                        <div class="form-group col-md-6 col-lg-6">
                            <label for="budget">Budget</label>
                            <input type="number" class="form-control" id="budget" name="budget" placeholder="Budget"
                                   value="{{ old('budget', $project->budget) }}" style="@error('budget')border:1px solid red;@enderror">
                            @error('budget')
                                <div style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    {{-- Description --}}
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Project Description"
                                  style="@error('description')border:1px solid red;@enderror">{{ old('description', $project->description) }}</textarea>
                        @error('description')
                            <div style="color: red;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- File Upload --}}
                    <div class="form-group">
                        <label for="file">Project File</label>
                        <input type="file" class="form-control" id="image" name="image" style="@error('image')border:1px solid red;@enderror">
                        @error('image')
                            <div style="color: red;">
                                {{ $message }}
                            </div>
                        @enderror
                        @if ($project->file)
                            <small>Current file: <a href="{{ asset('storage/' . $project->file) }}" target="_blank">View File</a></small>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Update Project</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
