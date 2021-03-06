<html>
<head>
	<title>Document</title>
	<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
</head>
<body>
		<!-- navigator -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#">Navbar</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Profile</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Galery</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">News</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">About Us</a>
		      </li>
		    </ul>
		  </div>
		</nav>

		
		<div class="container">
			@yield('content')
		</div>

	<script src="{{ url('js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ url('js/bootstrap.min.js') }}"></script>
	<script src="{{ url('js/fontawesome-all.min.js') }}"></script>
</body>
</html>