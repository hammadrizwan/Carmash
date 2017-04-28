<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
 <!--<link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.1.1.js"></script>
        <script src="js/jquery.expander.js"></script>
        <script src="js/custom.js"></script>
    
        
        <title>Carmash</title>

  <style>
     
      #cont{
          
    border-color: red;
          border-left-style:  solid ;
          border-right-style: solid;
      }
        </style>
    </head>
    <body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/ ">EpicCarPortal</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/ ">Home</a></li>
      <li><a href="/motorsports">Motorsports</a></li>
      <li><a href="/newmodels">New Models</a></li>
      <li><a href="/news">News</a></li>
      <li><a href="/memes">Memes</a></li>     
    </ul>
  </div>
</nav>
        <div class="row">
            <div class="col-md-2" id="right">
                
                @yield('sidebar1')
            </div>
            <div class="col-md-8" id="cont" >
     
                @yield('content')
               
            </div>
            <div class="col-md-2" id="right">
                
                @yield('sidebar2')
            </div>
        </div>
        
        
    </body>
</html>
