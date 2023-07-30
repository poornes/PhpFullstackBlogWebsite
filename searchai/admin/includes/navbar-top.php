
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Search.ai</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <form action="code.php" method="POST">
                            <li><button class="btn" name="logout_btn" type="submit">Logout</button></li>
                        </form>
                    </ul>
                </li>
            </ul>
        </nav>

 <style>
  @import url('https://fonts.googleapis.com/css2?family=Pacifico&family=Source+Sans+3:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300;1,400&display=swap');

    .navbar-brand {
        font-family: 'Pacifico', cursive;
        font-size: 40px;
        color: #f2f2f4 !important;
    }
    .navbar {
        background-color: #20047a !important;
    }

 </style>