<?php
session_start();
include("includes/html_codes.php");
$x=$_GET['x'];

?>
<html>
  <head>
    <title>weather</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="css/forms.css">
  </head>
  
  <body>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
             <a class="navbar-brand" href="index.php"></a>
            
             <?php topRightLinks();?>
          </div>
        </div>

       
      <div class="container-fluid">
         <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php"></a>
            </div>
             <?php topRightLinks();?>
          </div>
        </div>
	</div>
	   <div class="container-fluid">
             <div class="jumbotron">
                <h1>Weather and busses informaton website</h1>
                
			 </div>
        </div>
	
	  
	     <div class="col-md-12 col-ms-8">
           <div class="container">
             <div class="jumbotron">
                
                 <div class="input-group navbar-left">
			         <input type="submit" name="hide" id="hide" class="btn btn-default btn-large" value="Hide"/>
				</div>
				<div class="input-group navbar-right">
                       <input type="hidden" name="search_param" value="all" id="search_param"> 
                       <input type="text" class="form-control" name="x" placeholder="Search ...">
                    <span class="input-group-btn">
                       <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
               </div>
			</div>
       
          <div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-4">
					<img class="img-responsive" src="http://placehold.it/250x200"><br>	
				</div>
				<div class="col-md-8 col-sm-4">
					<img class="img-responsive" src="http://placehold.it/250x200">	
				</div>
				<div class="col-md-4 col-md-8">
				  hhhhhhhhhhhhhhhhhhhhhh
				</div>
			</div><!--/row-->
			
                    
            
			</div>
		 </div>
     </div>
	
    
   
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
