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
        background-image:url("{{asset('images/civilProject/civil_bg.jpg')}}");
        background-repeat: no-repeat;
        background-attachment: fixed;
        width: 100%;
        background-size: cover;
        height: 300px;
   }

   .bg{
      background-image: url("{{asset('images/civilProject/banner.jpg')}}");
   }
      
  </style>
  <body>
   

  @include('front.include.navbar')

  
<div class="blog pt-3 pt-3"><h1 style="color: black; padding-top: 100px" align="center">Civil Projects</h1></div>

<div class="container-fluid">
  <div class="container pt-5 pb-5">
    <div class="row">
      <div class="col-lg-4">

        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="{{asset('images/civilProject/c1.jpg')}}" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title">Civil Project</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">More...</a>
          </div>
        </div>

      </div>

      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="{{asset('images/civilProject/c2.jpg')}}" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title">Civil Project</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">More...</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="{{asset('images/civilProject/c3.jpg')}}" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title">Civil Project</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">More...</a>
          </div>
        </div>
      </div>
    </div><br>

    <div class="row">
      <div class="col-lg-4">

        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="{{asset('images/civilProject/c4.jpg')}}" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title">Civil Project</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">More...</a>
          </div>
        </div>

      </div>

      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="{{asset('images/civilProject/c5.jpg')}}" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title">Civil Project</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">More...</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="{{asset('images/civilProject/civil.jpg')}}" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title">Civil Project</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">More...</a>
          </div>
        </div>
      </div>

    </div>    

  </div>
</div>

<div class="container-fluid">
  <div class="container">
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center" class="text-xs-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
        </li>
      </ul>
    </nav>
  </div>
</div>
@include('front.include.footer')


@include('front.include.js1')


<script type="text/javascript">
    $(function () {
  $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
});
  </script>


@include('front.include.js2')

