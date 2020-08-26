<x-admin-master>
    @section('content')
        <h1>Profile for {{auth()->user()->name}}</h1>

        <div class="row">
            <div class="col-sm-6">
                <form action="{{route('user.profile.update', $user)}}" method="POST" enctype="multipart/form-data">
                    @csrf 
                    @method('PUT')
                    <div class="mb-4">
                    <img height="200px" class="img-profile rounded-circle" src="{{auth()->user()->avatar}}">
                    </div>

                    <div class="form-group">
                        <input type="file" name="avatar" id="">
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" 
                                name="username" 
                                id="username" 
                                class="form-control @error('username') is-invalid @enderror"
                                value="{{auth()->user()->username}}"
                                >
                                @error('username')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" 
                                name="name" 
                                id="name" 
                                class="form-control"
                                value="{{auth()->user()->name}}"
                                >
                                @error('name')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" 
                                name="email" 
                                id="email" 
                                class="form-control"
                                value="{{auth()->user()->email}}">

                                @error('email')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" 
                                name="password" 
                                id="password" 
                                class="form-control"
                                >
                                @error('password')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                    </div>

                    <div class="form-group">
                        <label for="password-confirmation">Confirm Password</label>
                        <input type="password" 
                                name="password_confirmation" 
                                id="password-confirmation" 
                                class="form-control"
                                >
                                @error('password_confirmation')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        @endsection
</x-admin-master>