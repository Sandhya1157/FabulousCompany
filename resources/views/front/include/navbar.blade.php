<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-success navbar-fixed-top sticky-top" id='nav'style="background-color: #730510 !important;">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}" style="color:white;">Home<span class="sr-only">(current)</span></a>
      </li>
     
       <li class="nav-item">
        <a class="nav-link" href="{{route('services')}}" style="color:white;">Services</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{route('career')}}" style="color:white;">Career</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{route('gallery')}}" style="color:white;">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:white;">Project</a>
      </li>
      @foreach($errors as $category)
        <li class="nav-item dropdown dmenu ">
          <a class="nav-link " href="{{route('front.pages', $category->url)}}" id="navbarDropdown"     style="color: red; ">
            {{$category->name}}
          </a>
          <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown" style="background: transparent !important;border:none">
            @foreach($category->categories as $subcat)
              <a class="dropdown-item" href="{{route('front.pages',$subcat->url)}}" style="background-color: red">{{$subcat->name}}</a>
            @endforeach
          </div>
        </li>
      @endforeach
      <li class="nav-item">
        <a class="nav-link" href="{{route('blog')}}" style="color:white;">Blog</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('contact')}}" style="color:white;">Contact</a>
      </li>
     
    
    </ul>
  
  </div>
 </nav>
