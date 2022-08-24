<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="/sispak/assets/admin/img/avatar-1.png" class="rounded-circle mr-1">
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="/sispak/admin/anggota/profil.php" class="dropdown-item has-icon">
                        <i class="far fa-user"></i> Lihat Profil
                    </a>
                    <a href="/sispak/logout.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')" 
                        class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i>Keluar
                    </a>
                </div>
        </li>
    </ul>
</nav>