<header class="navbar">
    <a href="{{ route('home') }}"
    ><img
            class="logo-fpt"
            src="{{ asset('assets/img/LogoEduZone.png') }}"
            alt="fpt education logo"
        /></a>

    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link" href="../studentsubject.html">Courses</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../blog/blog.html">Blog</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../studentprofile.html">Profile</a>
        </li>
        <li class="nav-item">
            <div class="dropdown">
                <a
                    class="dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    <i
                        class="fas fa-user fa-lg"
                        style="color: rgb(255, 254, 254)"
                    ></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Name: StuName</a>
                    <a class="dropdown-item" href="#">ID: StuID</a>
                    <a class="dropdown-item" href="#">Class: StuClass</a>
                    <a class="dropdown-item" href="../setting/settingstudent.html"
                    >Settings <i class="fas fa-cog"></i
                        ></a>
                    <a class="dropdown-item" href="../login.html"
                    >Log Out <i class="fas fa-sign-out-alt"></i
                        ></a>
                </div>
            </div>
        </li>
    </ul>
</header>
