<!-- Header section -->
<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a class="site-golo" href="index.php">
				<img src="{{ asset('images/golo.png') }}"alt="">
			</a>
			<div class="user-panel">
				<a href="#">Login</a>  /  <a href="#">Register</a>
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