<!-- Main Header Start -->
<div class="main-header-area">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="akameNav">

               <!-- Logo -->
                <a class="nav-brand" href="index.html"><img src="/img/core-img/logo.png" alt=""></a>

               <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

               <!-- Menu -->
                <div class="classy-menu">
                    <!-- Menu Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul id="nav">
                            <li class="active"><a href="/">Home</a></li>
                            <li class="active"><a href="/daftar_promo">Promo</a></li>
                            @if(Auth::check())
                                <li>Kelas  <i class="fa fa-caret-down"></i>
                                    <ul class="dropdown">
                                        @foreach($kelas as $row_kelas)
                                            @foreach($kelas_arr as $row_kelas_arr)
                                                @if($row_kelas->id == $row_kelas_arr)
                                                    <li><a href="#">- {{ $row_kelas->nama }}</a>
                                                        <ul class="dropdown">
                                                        @foreach($sub_kelas as $row_sub_kelas)
                                                            @if($row_sub_kelas->parent_id == $row_kelas->id)
                                                                @foreach($sub_kelas_get as $row_sub_kelas_get)
                                                                    @if($row_sub_kelas->id == $row_sub_kelas_get->get_sub_kelas->id)
                                                                        <li><a href="kelas/{{ $row_sub_kelas->id }}">- {{ $row_sub_kelas->nama }}</a></li>
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                        </ul>
                                                    </li>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </ul>
                                </li>
                                <li>{{ Auth::user()->username }}  <i class="fa fa-caret-down"></i>
                                    <ul class="dropdown">
                                        <li><a href="/pengaturan"><i class="fa fa-cog"></i> Pengaturan</a></li>
                                        <li><a href="/signout"><i class="fa fa-sign-out"></i> Sign Out</a></li>
                                    </ul>
                                </li>
                            @endif
                        </ul>

                        @if(!Auth::check())
                           <!-- Book Icon -->
                            <div class="book-now-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                <a href="/signin" class="btn akame-btn">Sign In</a>
                            </div>
                        @endif
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</div>   
  