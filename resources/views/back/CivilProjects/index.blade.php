@include('back.Include.header')
@include('back.Include.navbar')
@include('back.Include.sidenavbar')
<div class = "container mt-5">

{{Form::open(['method'=>'post', 'route'=>'civilproject.store'])}}
<div class = "form-group">
    <label>Name</label>   
    <input type="string"  name='name' required><br>
</div>
<div class = "form-group">
    <label>Description</label>
    <textarea class = "form-control" name = "description"></textarea>
</div>
<div class = "form-group">
    <label>Image</label>
    <input type="file"  name='image' required><br>

</div>
<button class="btn btn-primary btn-sm" type="submit">Submit</button>
{{Form::close()}}
<h3 class="text-center">List of CivilProjects</h3>


    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">S.N.</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @php($i = 1)
          @foreach($civilprojects as $civilproject)
          <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$civilproject->name}}</td>
            <td>{{$civilproject->description}}</td>
            <td>{{$civilproject->image}}</td>
            <td>
              <a href = "{{route('civilproject.edit', $civilproject->id)}}" class = "btn btn-success btn-sm">Edit</a>
              <a href = "{{route('civilproject.delete', $civilproject->id)}}" class = "btn btn-danger btn-sm">Delete</a>

            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>

</div>
</div>

@include('back.Include.footer')