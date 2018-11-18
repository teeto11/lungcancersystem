<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome-ie7.css">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <script src="{{url('js/jquery.js')}}"></script>
    <script src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>
        <title> result </title>
        <style>
    
         .section{
                border:1px solid #ccc;
                border-radius:10px;
                width:50%;
                height:50%;
                margin:0 auto; 
                margin-top:20px;

         }
         .footer{
            background-color: #285b91;
            color: white;
            }
            .social li{
                float:left;
                list-style-type: none;   
            }
            body{
                font-family: verdana;
                font-size: 13px;
            }
        </style>
    </head>
<body>
            <div class="">
                <img src="{{url('images/result.jpg')}}" alt="picture" height="200px" class="img-responsive" />
            </div>
   
      <h1 Align="center"> Our Review is as follow:</h1>
        <div class="container section" style="text-align:center;padding:30px;">
            <p>Risk Score: {{{$score}}} </p>
            <p>Cancer Risk Level Status : {{$status}} </p>
            <p>Risk Category: {{{$category}}} </p>
            <p>Reccomendation: {{{$recommendation}}} </p>    
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
                            <p><i class="fas fa-map-marker-alt"></i> 32,Montgomery road,<br>
                            Sabo Yaba,<br>
                            Lagos,Nigeria.<br></p>          
                            <p><i class="glyphicon glyphicon-earphone"></i> +234 8150 8800 54</p>
                            <p>enquiries@concept-nova.com<br>
                            info@concept-nova.com</p>
                        </div>
                        <div class="col-md-4">
                            <h2><span class="foot">CONNECT WITH US</span></h2>
                            <ul class="social">
                                <li><a style="margin-right:20px" href="https://www.facebook.com/conceptnova?_rdr=p"><i class="fab fa-facebook-square fa-3x" style="color:white"></i></a></li>
                                <li><a style="margin-right:20px" href="https://twitter.com/concept_nova"><i class="fab fa-twitter-square fa-3x"style="color:white"></i></a></li>
                                <li><a style="margin-right:20px" href="https://www.linkedin.com/company/concept-nova?trk=biz-companies-cym"><i class="fab fa-linkedin-in fa-3x"style="color:white"></i></a></li>
                                <li><a style="margin-right:20px" href="https://plus.google.com/+Concept-nova"><i class="fab fa-google-plus-g fa-3x"style="color:white"></i></a></li>
                                <li><a style="margin-right:20px" href="https://www.youtube.com/watch?v=mWio8Wo6zoo"><i class="fab fa-youtube fa-3x" style="color:white"></i></a></li>
                            </ul>
                        </div>  
                    </div>  
            </div>
        </div>
</body>
</html>