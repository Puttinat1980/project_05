<!-- Header section -->
<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a class="site-golo" href="index.php">
				<img src="{{ asset('images/golo.png') }}"alt="">
			</a>
			<div class="user-panel">
			@if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/admin/home') }}" >Admin</a></li>
          @else

                      <a href="{{ route('login') }}" >Login</a>/

              @if (Route::has('register'))

                       <a href="{{ route('register') }}" >Register</a>

              @endif

                    @endauth
            @endif
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
			<nav class="main-menu">
				<ul>
					<li><a href="{{ url('/')}}">หน้าแรก</a></li>
					<li><a href="{{ url('/product')}}">คลังสินค้า</a></li>
					<li><a href="work.php">ผลงาน</a></li>
					<li><a href="calendar.php">ปฏิทิน</a></li>
					<li><a href="about.php">เกี่ยวกับ</a></li>
					<li><a href="contact.php">ที่อยู่-ติดต่อ</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->