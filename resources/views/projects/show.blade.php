<x-app-layout>
    <div class="page-header">
        <h3 class="page-title"> Project Details </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Projects</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $project->name }}</li>
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
                    <form method="POST" action="{{ route('projects.destroy', [$project->id]) }}">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger dltBtn" data-id={{ $project->id }}
                            data-text="Are you sure you want to delete this project? This is irreversible.">
                            <i class="fa fa-remove"></i> Delete Project
                        </button>
                    </form>
                    <p></p>
                    <a href="{{ route('projects.edit', $project->id) }}">
                        <button class="btn btn-primary" type="button"><i class="fa fa-edit"></i> Edit Project</button>
                    </a>
                </div>
                <hr>

                {{-- Project Details Section --}}
                <div class="row">
                    {{-- Project Name and Status --}}
                    <div class="col-md-12 col-lg-12">
                        <h4 class="card-title">{{ $project->name }}</h4>
                        @if ($project->status === 'Completed')
                            <span class="badge badge-success"><i class="fa fa-check-circle"></i> {{ $project->status }}</span>
                        @elseif($project->status === 'In Progress')
                            <span class="badge badge-warning"><i class="fa fa-spinner"></i> {{ $project->status }}</span>
                        @else
                            <span class="badge badge-secondary"><i class="fa fa-clock"></i> {{ $project->status }}</span>
                        @endif
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <label>Description:</label>
                        <p><b>{{ $project->description }}</b></p>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <label>Client:</label>
                        <p><b>{{ $project->client }}</b></p>
                    </div>

                    <div class="col-md-4 col-lg-4">
                        <label>Start Date:</label>
                        <p><b>{{ $project->start_date }}</b></p>
                    </div>

                    <div class="col-md-4 col-lg-4">
                        <label>End Date:</label>
                        <p><b>{{ $project->end_date }}</b></p>
                    </div>

                    <div class="col-md-4 col-lg-4">
                        <label>Budget:</label>
                        <p><b>MWK{{ number_format($project->budget, 2) }}</b></p>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <label>Created:</label>
                        <p><b>{{ $project->created_at }}</b></p>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <label>Updated:</label>
                        <p><b>{{ $project->updated_at->diffForHumans() }}</b></p>
                    </div>

                    @if ($project->file)
                        <div class="col-md-12 col-lg-12">
                            <label>Attached File:</label>
                            <p><a href="{{ asset('storage/' . $project->file) }}" target="_blank" class="btn btn-link">
                                <i class="fa fa-file"></i> View File</a>
                            </p>
                        </div>
                    @endif

                    @if ($project->user)
                        <div class="col-md-12 col-lg-12">
                            <label>Managed by:</label>
                            <p><b>{{ $project->user->name }} ({{ $project->user->email }})</b></p>
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
