<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<script src="{{asset('js/jquery.min.js')}}"></script>
  	<script src="{{asset('js/bootstrap.min.js')}}"></script>

	<style>
		#feature{
			padding: 50px 0px;
			
		}
		.bulat{
			  border: 3px solid #ffffff;
			  border-radius: 50%;
			  display: inline-block;
			  font-size: 56px;
			  width: 140px;
			  height: 140px;
			  line-height: 136px;
			  vertical-align: middle; 
			  text-align: center;
			  
		}
		.putih{
			color:#ffffff;
		}
		#nav.affix {
		    position: fixed;
		    top: 0;

		    width: 100%;
		    z-index:10; 
		}
		.affix + .container-fluid {
	   	    padding-top: 70px;
	  	}
		.container-edit{
			padding:70px 50px;

		}
		.carousel-control.right, .carousel-control.left {
		    background-image: none;
		    color: #f4511e;
		}
		.carousel-indicators li {
		    border-color: #f4511e;
		}
		.carousel-indicators li.active {
		    background-color: #f4511e;
		}
		h4 {
	      font-size: 19px;
	      line-height: 1.375em;
	      color: #303030;
	      font-weight: 400;
	      margin-bottom: 50px;
	  	}  
	  	
	</style>
	<title>home</title>
	
</head>
<body>
	

	<div class="container">
		<div class="jumbotron text-center" style="background-color:lightgreen">
			<h1>BPRS Amanah Insani</h1>
			<p class="text-center">menu 1</p>
			
			
		</div>
		
	</div>
	<!-- navbar -->
	

	@include('navbar')



	
	<div class="container-fluid text-center">
		<div class="row-fluid">
			<div class="col-md-4" > 
				<div class="well" style="background-color:lavender">
				<h3>ini konten 1</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
	      		<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
	      		</div>
			</div>
	 
			<div class="col-md-4" > 
				<div class="well" style="background-color:pink">
				<h3>ini konten 2</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
	      		<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
	      		</div>
			</div>

			<div class="col-md-4" > 
				<div class="well" style="background-color:cyan">
				<h3>ini konten 3</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
	      		<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
	      		</div>
			</div>
		</div>
	</div>

	<div class="container-fluid text-center">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 ">
				<hr>
				<p>Bank Perkreditan Rakyat Syariah</p>
			</div>
		</div>
	</div>

	<div class="container-fluid" style="background-color:#545455">
		<div class="row text-center" id="feature">
			<div class="col-lg-12" >
				<div><h2 style="color:white">Amazing Features</h2></div>
			</div>
		</div>

		<div class="putih">
			<div class="row text-center">
				<div class="col-md-2 col-md-offset-2">
					<div class="bulat"></div>
					<h3>bulat 1</h3>
					<p>contoh dari bulat 1</p>
				</div>
				<div class="col-md-2 ">
					<div class="bulat"></div>
					<h3>bulat 2</h3>
					<p>contoh dari bulat 2</p>
				</div>
				<div class="col-md-2 ">
					<div class="bulat"></div>
					<h3>bulat 3</h3>
					<p>contoh dari bulat 3</p>
				</div>
				<div class="col-md-2 ">
					<div class="bulat"></div>
					<h3>bulat 4</h3>
					<p>contoh dari bulat 4</p>
				</div>
			</div>
		</div>

	</div>

	<div class="container">
		<div class="jumbotron" style="background-color:white;">
			  <h2>Dynamic Tabs</h2>
			  <ul class="nav nav-tabs">
			    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
			    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
			    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
			    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
			  </ul>

				<div class="tab-content">
				    <div id="home" class="tab-pane fade in active">
				      <h3>HOME</h3>
				      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				    </div>
				    <div id="menu1" class="tab-pane fade">
				      <h3>Menu 1</h3>
				      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				    </div>
				    <div id="menu2" class="tab-pane fade">
				      <h3>Menu 2</h3>
				      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
				    </div>
				    <div id="menu3" class="tab-pane fade">
				      <h3>Menu 3</h3>
				      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				    </div>
				</div>	
			</div>
	</div>

	<div class="jumbotron">
		<h2 class="text-center">What our customers say</h2>
		  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner" role="listbox">
		      <div class="item active">
		        <h4>"This company is the best. I am so happy with the result!"<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span></h4>
		      </div>
		      <div class="item">
		        <h4>"One word... WOW!!"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
		      </div>
		      <div class="item">
		        <h4>"Could I... BE any more happy with this company?"<br><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span></h4>
		      </div>
		    </div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		      <span class="sr-only">Next</span>
		    </a>
		  </div>
		</div>
	</div>


	
</body>
</html>