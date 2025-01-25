<x-app-layout>
    <div class="page-header">
        <h3 class="page-title"> Message Details </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('messages.index') }}">Messages</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $message->subject }}</li>
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
                    {{-- Delete Form --}}
                    <form method="POST" action="{{ route('messages.destroy', [$message->id]) }}">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger dltBtn" data-id="{{ $message->id }}"
                            data-text="Are you sure you want to delete this message? This action cannot be undone.">
                            <i class="fa fa-remove"></i> Delete Message
                        </button>
                    </form>
                    <p></p>
                    {{-- Reply Button --}}
                    <a href="mailto:{{ $message->email }}">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-reply"></i> Reply
                        </button>
                    </a>
                </div>
                <hr>

                {{-- Message Details Section --}}
                <div class="row">
                    {{-- Sender Information --}}
                    <div class="col-md-4 col-lg-4">
                        <label>Phone Number:</label>
                        <p><b>{{ $message->phoneNumber }}</b></p>
                    </div>

                    <div class="col-md-4 col-lg-4">
                        <label>Email:</label>
                        <p><b>{{ $message->email }}</b></p>
                    </div>

                    {{-- Subject --}}
                    <div class="col-md-4 col-lg-4">
                        <label>Subject:</label>
                        <p><b>{{ $message->subject }}</b></p>
                    </div>

                    {{-- Message Body --}}
                    <div class="col-md-12 col-lg-12">
                        <label>Message:</label>
                        <p>{{ $message->message }}</p>
                    </div>

                    {{-- Created At --}}
                    <div class="col-md-4 col-lg-4">
                        <label>Received At:</label>
                        <p><b>{{ $message->created_at->format('d M Y H:i') }}</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('scripts')
        {{-- Additional scripts if needed --}}
    @endsection
</x-app-layout>
