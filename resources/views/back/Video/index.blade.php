@include('back.Include.header')
@include('back.Include.navbar')
@include('back.Include.sidenavbar')



<!--body-->
<div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <h3 class="text-center">Video Controller</h3>
                <hr>

            </div>
        </div>
        <div class="container">
                                </div>


        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 mt-5 mx-auto">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>Video</h4>
                    </div>

                    <div class="card-body">
                        {{Form::open(['method'=>'post', 'route'=>'video.store'])}}
                            <div class="form-group">
                                <label>Upload video</label>
                            </div>
                            <input type="file"  name='video' required><br>
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
                    <th scope="col">Video</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach($videos as $video)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$video->video}}</td>
                    <td>
                        <a href="{{route('video.edit', $video->id)}}" class="btn btn-success btn-sm">Edit</a>
                        <a href="{{route('video.delete', $video->id)}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

@include('back.Include.footer')


