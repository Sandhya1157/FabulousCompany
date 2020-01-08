@include('back.Include.header')
@include('back.Include.navbar')
@include('back.Include.sidenavbar')
<div class = "container mt-5">
{{Form::open(['method'=>'patch', 'route'=>['client.aboutus.update', $about->id]])}}
<div class = "form-group">
    <label>About Us</label>
    <textarea class = "form-control" name = "description">{{$about->description}}</textarea>
</div>
<button class="btn btn-primary btn-sm" type="submit">Submit</button>
{{Form::close()}}


    
</div>
</div>

@include('back.Include.footer')