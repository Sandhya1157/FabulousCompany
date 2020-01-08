@include('back.Include.header')
@include('back.Include.navbar')
@include('back.Include.sidenavbar')

<div class = "container mt-5">

  {{Form::open(['method'=>'post', 'route'=>'client.ourproject.store'])}}
  <div class = "form-group">
      <label>OurProject</label>
      <textarea class = "form-control" name = "description"></textarea>
  </div>
  <button class="btn btn-primary btn-sm" type="submit">Submit</button>
  {{Form::close()}}
  <h3 class="text-center">List of OurProject</h3>


      <table class="table mt-5">
          <thead>
            <tr>
              <th scope="col">S.N.</th>
              <th scope="col">Description</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @php($i = 1)
            @foreach($ourprojects as $ourproject)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$ourproject->description}}</td>
              <td>
                <a href = "{{route('client.ourproject.edit', $ourproject->id)}}" class="btn btn-success btn-sm">Edit</a>
                <a href = "{{route('client.ourproject.delete', $ourproject->id)}}" class="btn btn-danger btn-sm">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
</div>
</div>
@include('back.Include.footer')