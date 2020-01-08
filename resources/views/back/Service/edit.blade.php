@include('back.Include.header')
@include('back.Include.navbar')
@include('back.Include.sidenavbar')
<div class = "container mt-5">
{{Form::open(['method'=>'patch', 'route'=>['service.update', $service->id]])}}
<div class = "form-group">
    <label>Name</label>
    <input class = "form-control" type = "string" name = "name" required value = "{{$service->name}}">
</div>
<div class = "form-group">
    <label>Description</label>
    <textarea class = "form-control" name = "description">{{$service->description}}</textarea>
</div>
<div class = "form-group">
    <label>UploadImage</label>
    <input class = "form-control" type = "file" name = "image" required value = "{{$service->image}}">
</div>

<button class="btn btn-primary btn-sm" type="submit">Submit</button>
{{Form::close()}}


    
</div>
</div>

@include('back.Include.footer')