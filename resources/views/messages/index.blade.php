<x-app-layout>
    <div class="page-header">
        <a href="{{ route('messages.new') }}">
            <button class="btn btn-primary" type="button">
                <i class="fa fa-plus"></i> New Message
            </button>
        </a>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Messages</li>
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
                        <h4 class="card-title">All Messages</h4>
                    </div>
                    <div class="col-md-8">
                        <form method="POST" action="{{ route('searchMessage') }}" class="row g-3 float-end">
                            @csrf
                            <div class="col-auto">
                                <input type="text" style="height: 40px" name="searchValue" required
                                    class="form-control" placeholder="Search by subject">
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
                            <th> Phone Number </th>
                            <th> Email </th>
                            <th> Subject </th>
                            <th> Message </th>
                            <th> Created </th>
                            <th> View </th>
                            <th> Delete </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($messages->count())
                            @foreach ($messages as $message)
                                <tr>
                                    <td> {{ $message->phoneNumber }} </td>
                                    <td> {{ $message->email }} </td>
                                    <td> {{ $message->subject }} </td>
                                    <td> {{ Str::limit($message->message, 50, '...') }} </td>
                                    <td> {{ $message->created_at->diffForHumans() }} </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('messages.view', $message->id) }}">
                                            View <i class="mdi mdi-arrow-right"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('messages.delete', $message->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <div class="alert alert-danger">No records</div>
                        @endif
                    </tbody>
                </table>
                @if ($messages->hasPages())
                    <div class="d-flex justify-content-center">
                        {!! $messages->links('vendor.pagination.bootstrap-5') !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
