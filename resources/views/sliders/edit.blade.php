<x-app-layout>

    <div class="page-header">
        <h3 class="page-title"> Edit Slider </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('sliders.index') }}">Sliders</a></li>
                <li class="breadcrumb-item"><a href="{{ route('sliders.show', $slider->id) }}">{{ $slider->title }}</a></li>
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
                <form class="forms-sample" action="{{ route('sliders.update', $slider->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        {{-- Title --}}
                        <div class="form-group col-md-6 col-lg-6">
                            <label for="sliderTitle">Title</label>
                            <input type="text" class="form-control" id="sliderTitle" placeholder="Title" name="title"
                                   style="@error('title')border:1px red solid;@enderror" value="{{ $slider->title }}">
                            @error('title')
                                <div style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Description --}}
                        <div class="form-group col-md-6 col-lg-6">
                            <label for="sliderDescription">Description</label>
                            <textarea class="form-control" id="sliderDescription" placeholder="Description" name="description"
                                      style="@error('description')border:1px red solid;@enderror">{{ $slider->description }}</textarea>
                            @error('description')
                                <div style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        {{-- Photo --}}
                        <div class="form-group col-md-6 col-lg-6">
                            <label for="sliderPhoto">Photo</label>
                            <input type="file" class="form-control" id="sliderPhoto" name="image"
                                   style="@error('image')border:1px red solid;@enderror">
                            @if ($slider->photo)
                                <small>Current Image: </small>
                                <img src="{{ asset('storage/' . $slider->photo) }}" alt="slider-photo" style="max-width: 100px; display: block;">
                            @endif
                            @error('photo')
                                <div style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Update Slider</button>
                </form>
            </div>
        </div>
    </div>

    </x-app-layout>
