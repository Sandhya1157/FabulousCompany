@include('back.Include.header')
@include('back.Include.navbar')
@include('back.Include.sidenavbar')



<!--body-->
<div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <h3 class="text-center">Logo Controller</h3>
                <hr>

            </div>
        </div>
        <div class="container">
                                </div>


        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 mt-5 mx-auto">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>Logo</h4>
                    </div>

                    <div class="card-body">
                        {{Form::open(['method'=>'patch', 'route'=>['logo.update', $logo->id]])}}
                            <div class="form-group">
                                <label>Upload Logo</label>
                                <input type="file"  name='image' required>{{$logo->image}}<br>
                            </div>
                            <input type="submit" name="submit" value="upload file" class="btn btn-success">
                        {{Form::close()}}
                    </div>
                </div>
            </div>

        </div>
@include('back.Include.footer')

