<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome-ie7.css">
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>

<title>questions</title>
 <style>
   .header{
    background-color: #285b91;
     color: white;
        padding: 0;
        margin: 0;
        width:auto;
        height:250px;
        margin-bottom:30px;
     
   }
   
   .nav-title  , .submit{
       margin-top:30px;
   }
   .submit{
        padding: 10px;
        font-size: 20px;
        border-radius: 10px;
        margin-bottom:10px;
   }
   .nav-text{
       margin-top:50px;
   }
   .section{
       border:1px solid #ccc;
       border-radius:10px;
       width:50%;
       height:50%;
       margin:0 auto;
       margin-top:40px;
    
   }
   .option{
       text-align:center;
   }
   select {
  text-align: center;
  text-align-last: center;
  /* webkit*/
  }
 .question{
     margin-top:30px;
 }
 /* .wrapper{
     background-image:url('/images/breastcancer.png');
     background-repeat: no-repeat;
     background-size:contain;
     background-position: center;
     width:100%;
 } */
 .footer{
     background-color: #285b91;
     color: white;
 }
 .social li{
     float:left;
      list-style-type: none;
     
 }
 .test{
     font-size:24px;
 }
.warning{
    margin-left:320px;
}
 </style>
</head>
<body>
   
    <form action="{{url('/questions')}}" method="post">
           {{csrf_field()}}  
            <div class="">
                <img src="{{url('images/lung.jpg')}}" height="200px" alt="picture" class="img-responsive" />
            </div>
          
            <div class="container wrapper" style="font-family:verdana;">
                    <h5 style="margin-top:30px" class="test"  Align="center">Please take test</h5>
                <div class="container section" style="text-align:center;">
                        @foreach($questions as $question)
                        <div class="question">
                        <p> {{ucfirst($question->question_text)}}
                            <select name="answer[]" class="form-control select-section" Align="center" required>
                                <option value="">select option</option>
                                 @foreach($question->option as $options)
                                <option value ="{{$options->option_point_value}}"style="text-align:center" >{{ucfirst($options->option_text)}}</option>
                                @endforeach
                            <!-- {{$options->option_text}} <input type="radio" name="{{$options->option_text}}" value="{{$options->option_point_value}}"  /> -->
                            </select> </p>
                        </div>    
                        @endforeach
                        <button type="submit" class="btn btn-primary submit">Submit</button>
                </div>    
            </div>
            <div class="container-fluid footer" style="margin-top:40px">
                <div class="container foot">
                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="concept">Cancer Predictive<span class="foot">System</span></h2>
                                <p>Concept Nova is an operating subsidiary of the Concept Group.<br>We
                                    are one of  Nigeria's fastest-growing Information Technology<br> Service
                                    and Software Development companies<br>
                                    Copyright &ampcopy 2018 group 
                                </p>
                           </div>
                           <div class="col-md-3 col-md-offset-1">
                                 <h2><span class="foot">ADDRESS</span></h2>
                                <p><i class="fas fa-map-marker-alt"></i> PMB 4003, ILISHAN REMO,<br>
                                OGUN STATE,<br>
                                Nigeria.<br></p>          
                                <p><i class="glyphicon glyphicon-earphone"></i> +234 8150 8800 54</p>
                                <p>admissions@babcock.edu.ng<br>
                                info@babcock.edu.ng</p>
                           </div>
                            <div class="col-md-4">
                                <h2><span class="foot">CONNECT WITH US</span></h2>
                                <ul class="social">
                                    <li><a style="margin-right:20px" href="#"><i class="fab fa-facebook-square fa-3x" style="color:white"></i></a></li>
                                    <li><a style="margin-right:20px" href="#"><i class="fab fa-twitter-square fa-3x"style="color:white"></i></a></li>
                                    <li><a style="margin-right:20px" href="#"><i class="fab fa-linkedin-in fa-3x"style="color:white"></i></a></li>
                                    <li><a style="margin-right:20px" href="#"><i class="fab fa-google-plus-g fa-3x"style="color:white"></i></a></li>
                                    <li><a style="margin-right:20px" href="#"><i class="fab fa-youtube fa-3x" style="color:white"></i></a></li>
                                </ul>
                            </div>  
                      </div>  
                 </div>
         </div>
        
   </form>
</body>
</html>