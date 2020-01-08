@include('front.include.header')

  <style type="text/css">
     
     
        .footer{
        background-color:#730510;
        height: 250px;
        width: 100%;
        
      }
      hr{
        border-color: white;
      }
      .icon a i:hover{
           color:green;
      }
    
   .blog{
        background-image:url("{{asset('images/blog/services.jpg')}}");
        background-repeat: no-repeat;
        background-attachment: fixed;
        width: 100%;
        background-size: cover;
        height: 300px;
   }

       
      
     
      
  </style>
  <body>
   
  @include('front.include.navbar')

  
<div class="blog"><h1 style="color: white; padding-top: 100px" class="text-center">OUR BLOG</h1></div>
<div class="container-fluid">
  <div class="container ">
    <div class="row">

      <div class="col-lg-8">
        <div class="row">
          <div class="col-lg-12">
            <div class="card mt-5" style="width: 45rem;">
              <img class="card-img-top" src="{{asset('images/blog/t1.jpg')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Blogs</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 pt-5">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Update</a>
            
          </li>
          
          <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Popular</a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <img src="{{asset('images/blog/t3.jpg')}}" height="30px">Some quick example text to build<br>
            <img src="{{asset('images/blog/t1.jpg')}}" height="30px">Some quick example text to build
          </div>
          
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <img src="{{asset('images/blog/t3.jpg')}}" height="30px">Some quick example text to build<br>
            <img src="{{asset('images/blog/t1.jpg')}}" height="30px">Some quick example text to build
          </div>
        </div><br><br><br>

        <div>
          <img src="{{asset('images/blog/t1.jpg')}}" height="110px" width="120px">
          <img src="{{asset('images/blog/t2.jpg')}}" height="110px" width="120px">
        </div>
        <div>
          <img src="{{asset('images/blog/t3.jpg')}}" height="110px" width="120px">
          <img src="{{asset('images/blog/t5.jpg')}}" height="110px" width="120px">
        </div><br><br>

        <div class="col-lg-3">
          <img src="{{asset('images/blog/t5.jpg')}}" height="200px" width="200px">

        </div>
      </div>
    </div> 


    <div class="row mt-5">
      <div class="col-lg-3">
        <div class="card " style="width: 18rem;">
          <img class="card-img-top" src="{{asset('images/blog/t2.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Blogs</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    
      <div class="col-lg-3">
        <div class="card " style="width: 18rem;">
          <img class="card-img-top" src="{{asset('images/blog/t3.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Blogs</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="card " style="width: 18rem;">
          <img class="card-img-top" src="{{asset('images/blog/t4.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Blogs</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

      
    </div>

    <div class="row">
            <div class="col-lg-3">
        <div class="card " style="width: 18rem;">
          <img class="card-img-top" src="{{asset('images/blog/t2.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Blogs</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    
      <div class="col-lg-3">
        <div class="card " style="width: 18rem;">
          <img class="card-img-top" src="{{asset('images/blog/t3.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Blogs</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="card " style="width: 18rem;">
          <img class="card-img-top" src="{{asset('images/blog/t4.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Blogs</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>




 






@include('front.include.footer')




@include('front.include.js1')
@include('front.include.js2')

