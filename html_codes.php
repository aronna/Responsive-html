<?php
include("connect.php");
function topRightLinks(){
	if( !isset($_SESSION['user_id']) ){
	    echo '<div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
       
                <button type="button" class="btn btn-success navbar-btn"><i class="glyphicon glyphicon-link"></i><a href="register.php" style="color:white;">Create account</a></button>
				<button id="loginbutton" type="button" class="btn btn-primary narbar-btn"><i class="glyphicon glyphicon-log-in"></i><a href="index.php" style="color:white;"> Login</a></button>
              </ul>
            </div>';
	}else{
		 $my_id=$_SESSION['user_id'];
		 $username=$_SESSION['username'];
		echo "<div class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav navbar-right\">
			     <span style=\"color:white;\">Hi $username</span>
                <button id=\"loginbutton\" type=\"button\" class=\"btn btn-primary narbar-btn\"><i class=\"glyphicon glyphicon-log-in\"></i><a href=\"logout.php\" style=\"color:white;\"> Log out</a></button>
              </ul>
            </div>";
	}
}

?>
