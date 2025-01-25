<x-app-layout>
    <div class="page-header">
        <a href="{{ route('teams.new') }}">
            <button class="btn btn-primary" type="button">
                <i class="fa fa-plus"></i> New Team Member
            </button>
        </a>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Teams</li>
            </ol>
        </nav>
    </div>

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
                        <h4 class="card-title">All Team Members</h4>
                    </div>
                    <div class="col-md-8">
                        <form method="POST" action="{{ route('searchTeam') }}" class="row g-3 float-end">
                            @csrf
                            <div class="col-auto">
                                <input type="text" style="height: 40px" name="searchValue" required
                                    class="form-control" placeholder="Search by team name">
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
                            <th> Name </th>
                            <th> Role </th>
                            <th> Image </th>
                            <th> Bio </th>
                            <th> Created </th>
                            <th> Edit </th>
                            <th> More </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($teams->count())
                            @foreach ($teams as $team)
                                <tr>
                                    <td> {{ $team->name }} </td>
                                    <td> {{ $team->role }} </td>
                                    <td>
                                        @if ($team->image)
                                            <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}"
                                                style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%;">
                                        @else
                                            <span class="text-muted">No image</span>
                                        @endif
                                    </td>
                                    <td> {{ $team->bio }} </td>
                                    <td> {{ $team->created_at->diffForHumans() }} </td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ route('teams.edit', $team->id) }}">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('teams.view', $team->id) }}">
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
                @if ($teams->hasPages())
                    <div class="d-flex justify-content-center">
                        {!! $teams->links('vendor.pagination.bootstrap-5') !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
