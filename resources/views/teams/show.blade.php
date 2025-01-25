<x-app-layout>
    <div class="page-header">
        <h3 class="page-title"> Team Details </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('teams.index') }}">Teams</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $team->name }}</li>
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
                    <form method="POST" action="{{ route('teams.destroy', [$team->id]) }}">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger dltBtn" data-id={{ $team->id }}
                            data-text="Are you sure you want to delete this team? This is irreversible.">
                            <i class="fa fa-remove"></i> Delete Team
                        </button>
                    </form>
                    <p></p>
                    <a href="{{ route('teams.edit', $team->id) }}">
                        <button class="btn btn-primary" type="button"><i class="fa fa-edit"></i> Edit Team</button>
                    </a>
                </div>
                <hr>

                <div class="row">
                    {{-- Team Photo Section --}}
                    <div class="col-md-2 col-lg-2 text-center">
                        <div class="nav-profile-img">
                            <img src="{{ asset('storage/'.$team->photo ?? 'assets/img/team-placeholder.png') }}" class="img-round" alt="Team Image"
                                width="100%">
                        </div>

                        <div class="nav-profile-text">
                            <h4 class="card-title">{{ $team->name }}</h4>
                            <span class="badge badge-info">{{ $team->role }}</span>
                        </div>
                    </div>

                    {{-- Team Details Section --}}
                    <div class="col-md-10 col-lg-10">
                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                <label>Description:</label>
                                <p><b>{{ $team->description }}</b></p>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                <label>Experience:</label>
                                <p><b>{{ $team->experience }} years</b></p>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                <label>Created:</label>
                                <b>{{ $team->created_at }}</b> <br>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                <label>Updated:</label>
                                <b>{{ $team->updated_at->diffForHumans() }}</b>
                            </div>

                            @if ($team->user)
                                <div class="col-md-4 col-lg-4">
                                    <label>Managed by:</label>
                                    <p><b>{{ $team->user->name }} ({{ $team->user->email }})</b></p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('scripts')
        {{-- Additional scripts if needed --}}
    @endsection
</x-app-layout>
