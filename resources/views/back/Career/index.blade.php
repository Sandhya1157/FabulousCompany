@include('back.Include.header')
@include('back.Include.navbar')
@include('back.Include.sidenavbar')
<div class = "container mt-5">

{{Form::open(['method'=>'post', 'route'=>'footer.store'])}}
<div class = "form-group">
    <label>Name</label>   
    <input type="string"  name='name' required><br>
</div>
<div class = "form-group">
    <label>Description</label>   
    <input type="text"  name='description' required><br>
</div>
<div class="form-group">
    <label>Name</label>
    <input type="string" name="name" class="form-control" required  >
</div>
<div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" required  >
</div>
<div class="form-group">
    <label>Address</label>
    <input type="string" name="address" class="form-control" required  >
</div>
<div class="form-group">
    <label>Phone</label>
    <input type="text" name="phone" class="form-control" required  >
</div>
<div class="form-group">
    <label>Browse</label>
    <input type="file" name="image" class="form-control" required  >
</div>

<button class="btn btn-primary btn-sm" type="submit">Submit</button>
{{Form::close()}}
<h3 class="text-center">List of </h3>


    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">S.N.</th>
            <th scope="col">Name</th>
            <th scope="col">Url</th>
            <th scope="col">FbLink</th>
            <th scope="col">TweeterLink</th>
            <th scope="col">InstaLink</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @php($i = 1)
          @foreach($footers as $footer)
          <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$footer->name}}</td>
            <td>{{$footer->url}}</td>
            <td>{{$footer->fblink}}</td>
            <td>{{$footer->tweeter}}</td>
            <td>{{$footer->instagram}}</td>

            <td>
              <a href = "{{route('footer.edit', $footer->id)}}" class = "btn btn-success btn-sm">Edit</a>
              <a href = "{{route('footer.delete', $footer->id)}}" class = "btn btn-danger btn-sm">Delete</a>

            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>

</div>
</div>

@include('back.Include.footer')