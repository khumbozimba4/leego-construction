<x-app-layout>

    <div class="page-header">
        <h3 class="page-title"> Edit Service </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('services.index') }}">Services</a></li>
                <li class="breadcrumb-item"><a href="{{ route('services.show', $service->id) }}">{{ $service->title }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
    </div>

    {{-- FEEDBACK --}}
    @if(session('feedback'))
        <div class="alert alert-success">
            {{ session('feedback') }}
        </div>
    @endif

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" action="{{ route('services.update', $service->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        {{-- Title --}}
                        <div class="form-group col-md-6 col-lg-6">
                            <label for="ServiceTitle">Title</label>
                            <input type="text" class="form-control" id="ServiceTitle" placeholder="Title" name="title"
                                   style="@error('title')border:1px red solid;@enderror" value="{{ $service->title }}">
                            @error('title')
                                <div style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                              {{-- Photo --}}
                              <div class="form-group col-md-6 col-lg-6">
                                <label for="ServicePhoto">Photo</label>
                                <input type="file" class="form-control" id="ServicePhoto" name="image"
                                       style="@error('image')border:1px red solid;@enderror">
                                @if ($service->photo)
                                    <small>Current Image: </small>
                                    <img src="{{ asset('storage/' . $service->photo) }}" alt="Service-photo" style="max-width: 100px; display: block;">
                                @endif
                                @error('photo')
                                    <div style="color: red;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        <div class="row">

                            {{-- Description --}}
                            <div class="form-group col-md-12 col-lg-12">
                                <label for="ServiceDescription">Description</label>
                                <textarea class="form-control" id="ServiceDescription" rows="14" cols="7" placeholder="Description" name="description"
                                style="@error('description')border:1px red solid;@enderror">{{ $service->description }}</textarea>
                                @error('description')
                                <div style="color: red;">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>



                    <button type="submit" class="btn btn-primary me-2">Update Service</button>
                </form>
            </div>
        </div>
    </div>

    </x-app-layout>
