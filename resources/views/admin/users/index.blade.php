<x-admin-master>
    @section('content')
        <h1>Users</h1>
        @if(session('user-deleted'))
            <div class="alert alert-danger">{{session('user-deleted')}}</div>
            @elseif(session('created-message'))
            <div class="alert alert-success">{{session('created-message')}}</div>
            @elseif(session('updated-message'))
            <div class="alert alert-success">{{session('updated-message')}}</div>
        
            @endif
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Username</th>
                      <th>Avatar</th>
                      <th>Name</th>
                      <th>Registered Date</th>
                      <th>Updated Profile Date</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Username</th>
                      <th>Avatar</th>
                      <th>Name</th>
                      <th>Registered Date</th>
                      <th>Updated Profile Date</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                 <tbody>
                    @foreach($users as $user)
                     <tr>
                         <td>{{$user->id}}</td>
                         <td>{{$user->username}}</td>
                         <td>
                             <img height="50px" src="{{$user->avatar}}" alt="">
                         </td>
                         <td>{{$user->name}}</td>
                         <td>{{$user->created_at->diffForHumans()}}</td>
                         <td>{{$user->updated_at->diffForHumans()}}</td>
                         <td>
                            
                            <form action="{{route('users.destroy', $user->id)}}" method="post">
                               @csrf
                               @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                           </form>
                           
                       </td>
                     </tr>
                     @endforeach
                 </tbody>
                </table>
              </div>
              <div class="d-flex">
                  <div class="mx-auto">
                      {{$users->links()}}
                  </div>
              </div>
            </div>
          </div>
     
    @endsection

    @section('scripts') 
          <!-- Page level plugins -->
    <script src="{{asset('../vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('../vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <!-- <script src="{{asset('js/demo/datatables-demo.js')}}"></script> -->
    @endsection
</x-admin-master>