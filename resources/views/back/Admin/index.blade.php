@include(back.Include.header)
@include(back.Include.navbar)
@include(back.Include.sidenavbar)

<div class="container mt-5">
        <a class="btn btn-primary btn-sm" href="">Add Admin</a>
        <hr>
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12">

                @if(!$admins->isEmpty())
                <table id="myTable" class="display table table-responsive-sm">
                    <thead class="thead-dark" >
                    <tr>
                        <th>S.N.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Image</th>
                        <th>Address</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach($admins as $admin)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$admin->name}}</td>
                        <td>{{$admin->email}}</td>
                        <td>{{$admin->phone}}</td>
                        <td><img src="{{asset('images/admin/admin.png')}}" height="30"></td>
                        <td>{{$admin->address}}</td>
                        <td>{{$admin->created_at}}</td>
                        <td>{{$admin->updated_at}}</td>
                        <td>
                            {{Form::open(['method'=>'','route'=>''])}}
                          <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                            {{Form::close()}}
                        </td>

                    </tr>
                    @endforeach

                    </tbody>
                </table>
                    @else
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <h5>No record added</h5>
                        </div>
                    </div>
                    @endif

            </div>
        </div>
    </div>
@include(back.Include.footer)