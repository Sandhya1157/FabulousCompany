@include('back.Include.header')
@include('back.Include.navbar')
@include('back.Include.sidenavbar')



<!--body-->
<div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <h3 class="text-center">Image Controller</h3>
                <hr>

            </div>
        </div>
        <div class="container">
                                </div>


        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 mt-5 mx-auto">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>Image</h4>
                    </div>

                    <div class="card-body">
                        {{Form::open(['method'=>'post', 'route'=>'gallery.store'])}}
                            <div class="form-group">
                                <label>Upload Image</label>
                            </div>
                            <input type="file"  name='image' required><br>
                            <input type="submit" name="submit" value="upload file" class="btn btn-success">
                        {{Form::close()}}
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">S.N.</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach($galleries as $gallery)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$gallery->image}}</td>
                    <td>
                        <a href="{{route('gallery.edit', $gallery->id)}}" class="btn btn-success btn-sm">Edit</a>
                        <a href="{{route('gallery.delete', $gallery->id)}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

@include('back.Include.footer')


