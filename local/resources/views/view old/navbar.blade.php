

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="270" id="nav" >
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span> 
		      	</button>

				<a class="navbar-brand" href="#">BPRSAI Logo</a>
			</div>

			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li <?php echoActiveClassIfRequestMatches("home")?>><a href="home">Menu 1</a></li>
					<li <?php echoActiveClassIfRequestMatches("menu2h")?>><a href="menu2h">Menu 2</a></li>
					<li class="dropdown">
				          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 3<span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Page 3-1</a></li>
				            <li><a href="#">Page 3-2</a></li>
				            <li><a href="#">Page 3-3</a></li> 
				          </ul>
				    </li>		
				    <li <?php echoActiveClassIfRequestMatches("menu4h")?>><a href="menu4h">Menu 4</a></li>		
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li>						
						<form class="navbar-form" role="search">
        					<div class="input-group">
            					<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
            					<div class="input-group-btn">
                					<button class="btn btn-inverse" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            					</div>
        					</div>
        				</form>					      	
					</li>
					
					<li><a href="logout" ><span class="glyphicon glyphicon-log-out"></span> logout</a></li>
				</ul>
			</div>			
		</div>
	</nav>

<?php 

function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI']);

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}

?>