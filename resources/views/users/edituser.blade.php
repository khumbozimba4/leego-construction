<x-app-layout>

<div class="page-header">
    <h3 class="page-title"> Edit User </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('users')}}">Users</a></li>
            <li class="breadcrumb-item"><a href="{{route('users.view', $user->id)}}">{{$user->name}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                    <form class="forms-sample" action="{{route('users.edit', $user->id)}}" method="post">
                    @csrf
                    <div class="row">
                      <div class="form-group col-md-6 col-lg-6">
                        <label for="exampleInputName1">Fullname</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Fullname" name="name" style="@error('name')border:1px red solid;@enderror" value="{{ $user->name }}">
                         @error('name')
                            <div style="color: red;">
                                {{ $message }}
                            </div>
                         @enderror
                      </div>

                      <div class="form-group col-md-6 col-lg-6">
                        <label for="exampleInputName1">Email</label>
                        <input type="email" class="form-control" id="exampleInputName1" placeholder="Email" name="email" style="@error('email')border:1px red solid;@enderror" value="{{ $user->email }}">
                        @error('email')
                            <div style="color: red;">
                                {{ $message }}
                            </div>
                         @enderror
                      </div>

                    </div>
                      <button type="submit" class="btn btn-primary me-2">Update User</button>
                    </form>
                  </div>
                </div>
              </div>
{{-- END OF NEW ADMIN FORM --}}
</x-app-layout>
