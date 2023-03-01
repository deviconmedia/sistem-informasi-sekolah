<header class="header-section">
    <div class="container">
        <!-- logo -->
        <a href="{{ url('/') }}" class="site-logo"><img src="{{ asset('Assets/Frontend/img/iconmedia-logo.png') }}" alt="main-logo" height="90px"></a>
        <div class="nav-switch">
            <i class="fa fa-bars"></i>
        </div>
        <div class="header-info">
            <div class="hf-item">
                <i class="fa fa-clock-o"></i>
                <p><span>Working time:</span>Monday - Friday: 08 AM - 06 PM</p>
            </div>
            <div class="hf-item">
                <i class="fa fa-map-marker"></i>
                <p><span>Find us:</span>40 Baria Street 133/2, New York City, US</p>
            </div>
        </div>
    </div>
</header>

<!-- Header section  -->
<nav class="nav-section">
    <div class="container">
        <div class="nav-right">
            <a href=""><i class="fa fa-search"></i></a>
            <a href="{{ url('/login') }}"><i class="fa fa-user"></i></a>
        </div>
        <ul class="main-menu">
            <li class="active"><a href="index.html">Home</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Profile
                </a>
                <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Sejarah Singkat</a></li>
                  <li><a class="dropdown-item" href="#">Sejarah Pengembangan</a></li>
                  <li><a class="dropdown-item" href="#">Visi Misi</a></li>
                  <li><a class="dropdown-item" href="#">Program Keahlian</a></li>
                </ul>
            </li>
            <li><a href="course.html">COURSES</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="#">Berita</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  e-School
                </a>
                <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="http://ppdbonline.ifibernet.xyz" target="_blank">e-PPDB</a></li>
                  <li><a class="dropdown-item" href="#">e-Perpus</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<!-- Header section end -->