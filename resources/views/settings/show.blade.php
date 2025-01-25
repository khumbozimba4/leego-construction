<x-app-layout>
    <div class="page-header">
        <h3 class="page-title"> Setting Details </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('settings.index') }}">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $setting->key }}</li>
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
                    <form method="POST" action="{{ route('settings.destroy', [$setting->id]) }}">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger dltBtn" data-id={{ $setting->id }}
                            data-text="Are you sure you want to delete this setting? This is irreversible.">
                            <i class="fa fa-remove"></i> Delete Setting
                        </button>
                    </form>
                    <p></p>
                    <a href="{{ route('settings.edit', $setting->id) }}">
                        <button class="btn btn-primary" type="button"><i class="fa fa-edit"></i> Edit Setting</button>
                    </a>
                </div>
                <hr>

                {{-- Setting Details Section --}}
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <label>Key:</label>
                        <p><b>{{ $setting->key }}</b></p>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <label>Value:</label>
                        <p><b>{{ $setting->value }}</b></p>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <label>Type:</label>
                        <p><b>{{ ucfirst($setting->type) }}</b></p>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <label>Created:</label>
                        <p><b>{{ $setting->created_at }}</b></p>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <label>Updated:</label>
                        <p><b>{{ $setting->updated_at->diffForHumans() }}</b></p>
                    </div>

                    @if ($setting->user)
                        <div class="col-md-12 col-lg-12">
                            <label>Associated User:</label>
                            <p><b>{{ $setting->user->name }} ({{ $setting->user->email }})</b></p>
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
