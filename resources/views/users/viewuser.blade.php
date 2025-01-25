<x-app-layout>

    <div class="page-header">
        <h3 class="page-title"> User Profile </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('users') }}">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $user->name }}</li>
            </ol>
        </nav>
    </div>
    {{-- INFO SECTION --}}

    @if (session('feedback'))
        <div class="alert alert-success">
            {{ session('feedback') }}
        </div>
        @endif @if (session('warning_feedback'))
            <div class="alert alert-warning">
                {{ session('warning_feedback') }}
            </div>
        @endif
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">


                            <form method="POST" action="{{ route('deleteUser', [$user->id]) }}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger dltBtn" data-id={{ $user->id }}
                                    data-text="Are you sure you want to delete this user and their associated customers and invoices? This is irreversible."><i
                                        class="fa fa-remove"></i> Delete User</button>
                            </form>

                            <p></p>
                            <a href="{{ route('users.resetpassword', $user->id) }}">
                                <button class="btn btn-primary" type="button"><i class="fa fa-key"></i> Reset
                                    Password</button>
                            </a>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-2 col-lg-2 text-center">
                                <div class="nav-profile-img">
                                    <img src="{{asset('assets/img/user-icon.png')}}" alt="image"
                                        width="100%">
                                </div>

                                <div class="nav-profile-text">
                                    <h4 class="card-title">{{ $user->name }}</h4>
                                    @if ($user->status === 'Active')
                                        <span class="badge badge-success"><i class="fa fa-check-circle"></i>
                                            {{ $user->status }}</span>
                                    @elseif($user->status === 'Blocked')
                                        <span class="badge badge-danger"><i class="fa fa-ban"></i>
                                            {{ $user->status }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-10 col-lg-10">
                                <div class="row">


                                    <div class="col-md-4 col-lg-4">
                                        <label>Email:</label>
                                        <p><b>{{ $user->email }}</b></p>
                                    </div>



                                    <div class="col-md-4 col-lg-4">
                                        <label>Phone Number:</label>
                                        <p><b>{{ $user->phone_number }}</b></p>
                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <label>Created:</label>
                                        <b>{{ $user->created_at }}</b> <br>
                                    </div>


                                    <div class="col-md-4 col-lg-4">

                                        <label>Updated:</label>
                                        <b>{{ $user->updated_at->diffForHumans() }}</b>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>


        @section('scripts')

        @endsection
</x-app-layout>
