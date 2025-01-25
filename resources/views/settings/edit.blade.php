<x-app-layout>
    <div class="page-header">
        <h3 class="page-title"> Edit Setting </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('settings.index') }}">Settings</a></li>
                <li class="breadcrumb-item"><a href="{{ route('settings.show', $setting->id) }}">{{ $setting->key }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
    </div>

    {{-- Feedback Messages --}}
    @if(session('feedback'))
        <div class="alert alert-success">
            {{ session('feedback') }}
        </div>
    @endif

    {{-- Edit Form --}}
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" action="{{ route('settings.update', $setting->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        {{-- Key --}}
                        <div class="form-group col-md-6 col-lg-6">
                            <label for="key">Key</label>
                            <input type="text" class="form-control" id="key" name="key" placeholder="Setting Key"
                                   value="{{ old('key', $setting->key) }}" style="@error('key')border:1px solid red;@enderror">
                            @error('key')
                                <div style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Type --}}
                        <div class="form-group col-md-6 col-lg-6">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" id="type" name="type" placeholder="Setting Type"
                                   value="{{ old('type', $setting->type) }}" style="@error('type')border:1px solid red;@enderror">
                            @error('type')
                                <div style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        {{-- Value --}}
                        <div class="form-group col-md-12 col-lg-12">
                            <label for="value">Value</label>
                            <textarea class="form-control" id="value" name="value" rows="4" placeholder="Setting Value"
                                      style="@error('value')border:1px solid red;@enderror">{{ old('value', $setting->value) }}</textarea>
                            @error('value')
                                <div style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Update Setting</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
