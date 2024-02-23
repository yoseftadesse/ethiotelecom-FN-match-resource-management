<?php
	include("conn.php");  
 session_start();
if(isset($_SESSION['accountid']))
 {
     //header("Location:login.php");
 } else {
	 header("Location:login.php");
 }
 
 ?>
    <body style="background: #33ff66;">
    <nav class="navbar navbar-inverse container-fluid navbar-fixed-top">

<table align="center" width="100% height="100%" border=0 >
<tr><td height=10%  colspan=3>
<img src="image/logo.jpg" width="8%" height="84px"> <img src="image/logo.jpg" width="80%" height="80px"><img src="image/logo.jpg" width="10%" height="80px">

</td>
</tr>
</table>
    <!--Header End-->

        <div>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
			
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
					
                </button>
				
                <a class="navbar-brand" href="login.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"> view feedbak<span class="caret"></span></a>
          <ul class="dropdown-menu">
				
								<li><a href="dis.php">view report from supervisor </a></li>
				<li><a href="sendrespons.php">send responses to supervisor </a></li>
            </ul>
            
        

        <li><a href="view.php">&nbsp;View site Information </a></li>
		<li><a href="searchforview.php" target="manager.php">&nbsp;Search site </a></li>      
             
	
			     <li><a href="viewsolddrug.php">&nbsp; View less than 10 free line  </a></li>
				 			     


          </ul>
		  
		  
                        
				
            </div><!-- /.navbar-collapse -->
			
        </div><!-- /.container-fluid -->
    </nav>
  </body>