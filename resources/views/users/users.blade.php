<x-app-layout>

    <div class="page-header">
        <a href="{{ route('users.new') }}"><button class="btn btn-primary" type="button"><i class="fa fa-plus"></i> New
                User</button></a>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Users</li>
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

                            <h4 class="card-title">All Users</h4>
                        </div>
                        <div class="col-md-8">
                            <form method="POST" action="{{ route('searchUser') }}" class="row g-3 float-end">

                                @csrf
                                <div class="col-auto">
                                    <input type="email" style="height: 40px" name="searchValue" required
                                        class="form-control" id="inputPassword2" placeholder="Search by user email">

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
                                <th> Email </th>
                                <th> Status </th>
                                <th> Created </th>
                                <th> Edit </th>
                                <th> More </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>

                            @if ($users->count())
                                @foreach ($users as $user)

                                            <tr>

                                                <td> {{ $user->name }} </td>
                                                <td> {{ $user->email }} </td>
                                                <td>
                                                    @if ($user->status === 'Active')
                                                        <span class="badge badge-success"><i
                                                                class="fa fa-check-circle"></i>
                                                            {{ $user->status }}</span>
                                                    @elseif($user->status === 'Blocked')
                                                        <span class="badge badge-danger"><i class="fa fa-ban"></i>
                                                            {{ $user->status }}</span>
                                                    @endif
                                                </td>
                                                <td> {{ $user->created_at->diffForHumans() }} </td>

                                                <td> <a class="btn btn-warning"
                                                        href="{{ route('users.edit', $user->id) }}"><i
                                                            class="fa fa-edit"></i> Edit </a> </td>

                                                <td> <a class="btn btn-primary"
                                                        href="{{ route('users.view', $user->id) }}">More <i
                                                            class="mdi mdi-arrow-right"></i> </a> </td>

                                                <td>
                                                    @if ($user->status === 'Active')
                                                        <a class="btn btn-danger"
                                                            href="{{ route('users.block', $user->id) }}"> <i
                                                                class="mdi mdi-block-helper"></i> Block </a>
                                                    @elseif($user->status === 'Blocked')
                                                        <a class="btn btn-success"
                                                            href="{{ route('users.activate', $user->id) }}">
                                                            <i class="mdi mdi-check-circle"></i> Activate </a>
                                                    @endif
                                                </td>

                                            </tr>
                                @endforeach
                            @else
                                <div class="alert alert-danger">No records</div>
                            @endif


                        </tbody>
                    </table>
                    @if ($users->hasPages())
                        <div class="d-flex justify-content-center">
                            {!! $users->links('vendor.pagination.bootstrap-5') !!}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    {{-- END OF USERS TABLE --}}
</x-app-layout>
