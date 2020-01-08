@include('back.Include.header')
@include('back.Include.navbar')
@include('back.Include.sidenavbar')
<div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <h3 class="text-center">Category Controller</h3>
                <hr>
            </div>
        </div>
        <div class="container">

        </div>


        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 mt-5">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>Add Categories</h4>
                    </div>

                    <div class="card-body">
                        {{Form::open(['method'=>'post','route'=>'category.store'])}}

                        <div class="form-group">
                          <labe>Category Name</labe>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" name="description" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Url</label>
                            <input type="string" class="form-control" id="password" name="url" required>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Add Category" class="btn btn-primary">
                        </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 mt-5">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>Add SubCategories</h4>
                    </div>
                    <div class="card-body">
                        {{Form::open(['method'=>'post','route'=>'category.store'])}}

                        <div class="form-group">
                            <label>Category Level</label>
                            <select name="parent_id" class="form-control" style="width: 200px; height: 40px">
                                <option value="0">Main Category</option>
                                <option value="1">Home</option>
                                <option value="2">Services</option>
                                <option value="3">Career</option>
                                <option value="4">Gallery</option>
                                <option value="5">Project</option>
                                <option value="6">Blog</option>
                                <option value="7">Contact</option>              
                            </select>
                       </div>

                        <div class="form-group">
                            <label>SubCategory</label>
                            <input type="text" class="form-control" id="text" name="name" required>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" name="desciption" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Url</label>
                            <input type="string" class="form-control" id="text" name="url" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Add SubCategory" class="btn btn-primary">
                        </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
       <hr>

</div>

@include('back.Include.footer')
