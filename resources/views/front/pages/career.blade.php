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
        background-image:url("{{asset('images/career/services.jpg')}}");
        background-repeat: no-repeat;
        background-attachment: fixed;
        width: 100%;
        background-size: cover;
        height: 300px;
      }
    .btn{
      background-color: maroon;
      border: maroon;

    }   
  </style>
  <body>
   
  @include('front.include.navbar')


  
 <div class="blog"><h1 style="color: white; padding-top: 100px" class="text-center">Career</h1></div>

 <div class="container-fluid">
  <div class="container pt-5 pb-5">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12">
        <h3 style="color: maroon"><b>Job Specification</b></h3>
        <p style="text-align: justify; text-justify: inter-word;">Education Level:Bachelor.<br>
          Experience Required: Fresher's or minimum 1years experience.<br>
          Required:Rest Api Design Object Oriented PHP And Laravel ...<br>SQL Schema Design Program Solving Multitasking Solid<br> Principles Logical Thinking
        </p>

        <h3 style="color: maroon"><b>Other Specification</b></h3>
        <p>Education Level:Bachelor.<br>
          Experience Required: Fresher's or minimum 1years experience.<br>
          Required:Rest Api Design Object Oriented PHP And Laravel ...<br>SQL Schema Design Program Solving Multitasking Solid<br> Principles Logical Thinking
        </p>

        <h3 style="color: maroon"><b>Job Description</b></h3>
        <p>Education Level:Bachelor.<br>
          Experience Required: Fresher's or minimum 1years experience.<br>
          Required:Rest Api Design Object Oriented PHP And Laravel ...<br>SQL Schema Design Program Solving Multitasking Solid<br> Principles Logical Thinking
        </p>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12" style="border: 1px solid" >
        <h4 style="color: maroon" align = "center" class="pt-4"><b>Drop Your CV</b></h4>
        <form class="pt-3 pb-3">
          <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
          </div><br>
          <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your email">
          </div><br>

          <div class="form-group">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your address">
          </div><br>

          <div class="form-group">
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Phone">
          </div><br>
          
          <div class="form-group">
            <label for="exampleFormControlFile1">Browse</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div><br>
          <button type="submit" class="btn btn-success btn">Submit</button>
        </form>
      </div>

    </div>
  </div>
 </div>

 
 @include('front.include.footer')



 @include('front.include.js1')


<script type="text/javascript">
</script>

@include('front.include.js2')
