@extends('layout.master')
@section('title','Aboutus')
@section('about')
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .topnav a:hover {
                border-bottom: 3px solid red;
            }

            body {
    background-color: #f1f1f1;
}
.ourTeam-hedding p{
    color: #979797;
}
.ourTeam-hedding strong{
    color: black;
}
.ourTeam-hedding{
    margin-bottom: 50px;
}
.ourTeam-hedding h1{
    font-size: 25px;
    font-weight: bold;
    color: #145889;
}
.ourTeam-box{
    border-radius: 2px;
    border-top: 6px solid #5DDDD3;
    margin: 0px;
    background-color: #FFFFFF;
    margin-bottom: 30px;
}
.section1{
    padding: 30px 0px 30px 0px;
}
.section1 img{
    border-radius: 50%;
    height: 130px;
    width: 130px;
}
.section2 p{
    font-weight: bold;
    color: #5DDDD3;
    letter-spacing: 1px;
}
.section2 span{
    color: #979597;
}
.section3{
    background-color: #5DDDD3;
}
.section3 i{
    color: #ffffff !important;
    padding: 15px;
    font-size: 15px;
}
.section-info{
    border-top: 6px solid #90DFAA;
}
.section-info p{
    color: #90DFAA;
}
.section-info .section3{
    background-color: #90DFAA;
}
.section-danger{
    border-top: 6px solid #FD8469;
}
.section-danger p{
    color: #FD8469;
}
.section-danger .section3{
    background-color: #FD8469;
}
 </style>


 
       
    </head>
    <body>
    <div class="container">
  <div class="row">
    <div class="col-md-12 pt-5 pb-2 ourTeam-hedding text-center">
      <h1>Our Team</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<strong> sed do eiusmod
      tempor incididunt </strong>ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
      </p>
    </div>
  </div>  
  <ul type='none'>
  <div class="row">
     @foreach ($team as $t)
     <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://icons-for-free.com/download-icon-man+person+profile+user+worker+icon-1320190557331309792_512.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0"><li>{{ $t }}</li></h5><span class="small text-uppercase text-muted">CEO - Founder</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
@endforeach
</ul>
@endsection



        </div>
        <?php
   #foreach ($Team as $T) {

   #print_r($T["Name"]);
     
   #print_r($T["Age"]);
      
  #echo "<br>";
 
  //  }
?> 
    </body>
</html>
