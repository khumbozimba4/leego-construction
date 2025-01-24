<x-app-layout>

    <div class="page-header">
            <a href="{{ route('projects.create') }}"><button class="btn btn-primary" type="button"><i class="fa fa-plus"></i>
                    New project</button></a>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Projects</li>
            </ol>
        </nav>
    </div>
    {{-- Customers TABLE --}}
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

                        <h4 class="card-title">All Projects</h4>
                    </div>
                    <div class="col-md-8">
                        <form method="POST" action="{{route('searchProject')}}" class="row g-3 float-end">

                            @csrf
                            <div class="col-auto">
                                <input type="text" style="height: 40px" name="searchValue" required class="form-control" id="inputPassword2" placeholder="Search by project name">

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
                            <th> Project Name </th>
                            <th> Project Description </th>
                            <th> File </th>
                            <th> Created </th>
                            <th> Edit </th>
                            <th> More </th>
                        </tr>
                    </thead>
                    <tbody>

                        @if ($projects->count())
                            @foreach ($projects as $project)
                                <tr>
                                    <td> {{ $project->name }} </td>
                                    <td> {{ $project->email }} </td>
                                    <td> {{ $project->phone_number }} </td>
                                    <td> {{ $project->created_at->diffForHumans() }} </td>
                                    <td> <a class="btn btn-warning"
                                            href="{{ route('project.admin.edit', $project->id) }}"><i
                                            class="fa fa-edit"></i> Edit </a>
                                    </td>
                                    <td> <a class="btn btn-primary" href="{{ route('project.admin.view', $project->id) }}">More
                                            <i class="mdi mdi-arrow-right"></i> </a> </td>
                                </tr>
                            @endforeach
                        @else
                            <div class="alert alert-danger">No records found</div>
                        @endif


                    </tbody>
                </table>

                @if (!empty($projects->links()))
                <div class="d-flex justify-content-center">
                    {!! $projects->links('vendor.pagination.bootstrap-5') !!}
                </div>
               @endif



            </>
        </div>
    </div>
    {{-- END OF Customers TABLE --}}
</x-app-layout>
