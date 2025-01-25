<x-app-layout>

    <div class="page-header">
        <h3 class="page-title"> Add Setting </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('settings.index') }}">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Setting</li>
            </ol>
        </nav>
    </div>

    {{-- Success Feedback --}}
    @if (session('feedback'))
        <div class="alert alert-success">
            {{ session('feedback') }}
        </div>
    @endif

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" action="{{ route('settings.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <!-- Key -->
                        <div class="form-group col-md-6">
                            <label for="key">Key</label>
                            <input type="text" class="form-control" id="key" name="key" placeholder="Enter Key"
                                   style="@error('key')border:1px red solid;@enderror" value="{{ old('key') }}">
                            @error('key')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Value -->
                        <div class="form-group col-md-6">
                            <label for="value">Value</label>
                            <input type="text" class="form-control" id="value" name="value" placeholder="Enter Value"
                                   style="@error('value')border:1px red solid;@enderror" value="{{ old('value') }}">
                            @error('value')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary mt-3">Add Setting</button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
