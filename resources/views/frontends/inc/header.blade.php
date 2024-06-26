<div class="bg-dark clearfix">
	<div class="pre-nav-align">
		<ul class="display-table">
			<li class="nav-dark-li-two">
				<a href="#" class="text-white pre-nav-word-break">
				<i class="fa fa-envelope"></i><samp>{{ $config->author_mail }}</samp>
				</a>
			</li>
			<li class="nav-dark-ul nav-dark-li-one display-table-cell res-mail">
				<a href="#" class="text-white">
				<i class="fa fa-phone"></i><samp>{{ $config->author_phone }}</samp>
				</a>
			</li>
		</ul>
	</div>
	<div class="pre-nav-right-align">
		<ul class="display-table" style="padding-right: 15px">
			@foreach ($socials as $item)
			<li class="display-table-cell">
				<a href="{{ $item->link }}" class="text-white"><i class="{{ $item->icon }}" style="padding: 2px; border-redius: 50%; border: solid 1px #ffffff"></i></a>
			</li>
			@endforeach
		</ul>
	</div>
</div>
<nav class="navbar navbar-expand-lg navbar-light navbar-menu clearfix nav-color no-padding" id="menu_top">
	<div class="container">
		<div class="logo-style">
			<a href="#">
			   <img src="{{ asset($config->web_logo) }}" alt="170x60x1" class="img-fluid">
			</a>
		</div>
		<button class="navbar-toggler border" data-toggle="collapse" type="button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="safari-menu res-border-bottom"> <a href="#home" class="nav-link nav-style">Home</a>
				</li>
				<li class="safari-menu res-border-bottom"> <a href="#about" class="nav-link nav-style">About us</a>
				</li>
				<li class="safari-menu res-border-bottom"> <a href="#service" class="nav-link nav-style">Services</a>
				</li>
				<li class="safari-menu res-border-bottom"> <a href="#portfolio" class="nav-link nav-style">Portfolio</a>
				</li>
				<li class="safari-menu res-border-bottom"> <a href="#contactus" class="nav-link nav-style">Contact Us</a>
				</li>
				<li class="safari-menu nav-btn"> <a href="#" class="boxed-btn btn-rounded btn-right-space">Book Now</a>
				</li>
			</ul>
		</div>
	</div>
</nav>