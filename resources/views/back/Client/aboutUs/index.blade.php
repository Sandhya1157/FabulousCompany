@include('back.Include.header')
@include('back.Include.navbar')
@include('back.Include.sidenavbar')
<div class = "container mt-5">

{{Form::open(['method'=>'post', 'route'=>'client.aboutus.store'])}}
<div class = "form-group">
    <label>About Us</label>
    <textarea class = "form-control" name = "description"></textarea>
</div>
<button class="btn btn-primary btn-sm" type="submit">Submit</button>
{{Form::close()}}
<h3 class="text-center">List of About Us</h3>


    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">SN</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @php($i = 1)
          @foreach($abouts as $about)
          <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$about->description}}</td>
            <td>
              <a href = "{{route('client.aboutus.edit',$about->id)}}" class = "btn btn-success btn-sm">Edit</a>
              <a href = "{{route('client.aboutus.delete',$about->id)}}" class = "btn btn-danger btn-sm">Delete</a>

            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>

</div>
</div>

@include('back.Include.footer')