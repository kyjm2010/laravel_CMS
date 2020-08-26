<x-admin-master>
    @section('content')
    <h1>Create</h1>
    <form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="file">Image</label>
            <input type="file" name="post_image" class="form-control-file" id="post_image">
        </div>
        <div class="form-group">
            <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    @endsection

</x-admin-master>