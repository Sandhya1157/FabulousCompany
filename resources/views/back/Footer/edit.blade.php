@include('back.Include.header')
@include('back.Include.navbar')
@include('back.Include.sidenavbar')
<div class = "container mt-5">
{{Form::open(['method'=>'patch', 'route'=>['footer.update', $footer->id]])}}
<div class = "form-group">
    <label>Name</label>
    <input class = "form-control" type = "string" name = "name" required value = "{{$footer->name}}">
</div>
<div class = "form-group">
    <label>Url</label>
    <input class = "form-control" type = "string" name = "url" required value = "{{$footer->url}}">
</div>
<div class = "form-group">
    <label>Facebook Link</label>
    <input class = "form-control" type = "string" name = "fblink" required value = "{{$footer->fblink}}">
</div>
<div class = "form-group">
    <label>Tweeter</label>
    <input class = "form-control" type = "string" name = "tweeter" required value = "{{$footer->tweeterl}}">
</div>
<div class = "form-group">
    <label>Instagram</label>
    <input class = "form-control" type = "string" name = "instagram" required value = "{{$footer->instagram}}">
</div>


<button class="btn btn-primary btn-sm" type="submit">Submit</button>
{{Form::close()}}


    
</div>
</div>

@include('back.Include.footer')