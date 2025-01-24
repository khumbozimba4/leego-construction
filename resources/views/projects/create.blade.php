<x-app-layout>

    <div class="page-header">
        <h3 class="page-title"> New Project </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('projects.index')}}">Projects</a></li>
                <li class="breadcrumb-item active" aria-current="page">New Project</li>
            </ol>
        </nav>
    </div>
    {{-- NEW ADMIN FORM --}}
        @if(session('feedback'))
            <div class="alert alert-success">
            {{ session('feedback') }}
            </div>
        @endif
        <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <form class="forms-sample" enctype="multipart/form-data" action="{{ route('projects.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <!-- Project Name -->
                                <div class="form-group col-md-6 col-lg-6">
                                    <label for="projectName">Project Name</label>
                                    <input type="text" class="form-control" id="projectName" placeholder="Enter Project Name"
                                           name="name" style="@error('name')border:1px red solid;@enderror" value="{{ old('name') }}">
                                    @error('name')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Cover Photo -->
                                <div class="form-group col-md-6 col-lg-6">
                                    <label for="coverPhoto">Cover Photo</label>
                                    <input type="file" class="form-control" id="coverPhoto" name="projectFile"
                                           style="@error('projectFile')border:1px red solid;@enderror" value="{{ old('projectFile') }}">
                                    @error('projectFile')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Description -->
                                <div class="form-group col-md-12">
                                    <label for="description">Project Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="5"
                                              style="@error('description')border:1px red solid;@enderror">{{ old('description') }}</textarea>
                                    @error('description')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Start Date -->
                                <div class="form-group col-md-6 col-lg-6">
                                    <label for="startDate">Start Date</label>
                                    <input type="date" class="form-control" id="startDate" name="start_date"
                                           style="@error('start_date')border:1px red solid;@enderror" value="{{ old('start_date') }}">
                                    @error('start_date')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- End Date -->
                                <div class="form-group col-md-6 col-lg-6">
                                    <label for="endDate">End Date</label>
                                    <input type="date" class="form-control" id="endDate" name="end_date"
                                           style="@error('end_date')border:1px red solid;@enderror" value="{{ old('end_date') }}">
                                    @error('end_date')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Budget -->
                                <div class="form-group col-md-6 col-lg-6">
                                    <label for="budget">Budget</label>
                                    <input type="number" step="0.01" class="form-control" id="budget" name="budget"
                                           placeholder="Enter Budget" style="@error('budget')border:1px red solid;@enderror" value="{{ old('budget') }}">
                                    @error('budget')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Status -->
                                <div class="form-group col-md-6 col-lg-6">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status"
                                            style="@error('status')border:1px red solid;@enderror">
                                        <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="ongoing" {{ old('status') == 'ongoing' ? 'selected' : '' }}>Ongoing</option>
                                        <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                                    </select>
                                    @error('status')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary mt-3">Create Project</button>
                        </form>


                      </div>
                    </div>
                  </div>
    {{-- END OF NEW ADMIN FORM --}}
    </x-app-layout>
