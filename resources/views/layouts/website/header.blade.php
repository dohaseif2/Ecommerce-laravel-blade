<div class="top-header-area" id="sticker">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 text-center">
				<div class="main-menu-wrap">
					<!-- logo -->
					<div class="site-logo">
						<a href="{{ route('homePage') }}">
							<img src="{{ asset('assets/img/logo.png') }}" alt="">
						</a>
					</div>
					<!-- logo -->

					<!-- menu start -->
					<nav class="main-menu">
						<ul>
							<li class="current-list-item"><a href="{{ route('homePage') }}">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="#">Shop</a>
								<ul class="sub-menu">
									<li><a href="{{ route('homePage') }}">Shop</a></li>
									<li><a href="{{ route('cart') }}">Cart</a></li>
								</ul>
							</li>
							<li>
								<div class="header-icons">
									<a class="shopping-cart" href="{{ route('cart') }}"><i class="fas fa-shopping-cart">{{ count((array) session('cart')) }}</i></a>
									<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									@if (Auth::check())
										<a class="" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									@else
										<a class="" href="{{ route('login') }}">Login</a>
									@endif
								</div>
							</li>
						</ul>
					</nav>
					<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
					<div class="mobile-menu"></div>
					<!-- menu end -->
				</div>
			</div>
		</div>
	</div>
</div>

<!-- search area -->
<div class="search-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<span class="close-btn"><i class="fas fa-window-close"></i></span>
				<div class="search-bar">
					<div class="search-bar-tablecell">
						<h3>Search For:</h3>
						<input type="text" placeholder="Keywords">
						<button type="submit">Search <i class="fas fa-search"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end search area -->

