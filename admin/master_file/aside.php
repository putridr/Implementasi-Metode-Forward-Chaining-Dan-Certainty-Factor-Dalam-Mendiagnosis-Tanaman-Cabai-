<?php
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
// echo $uri_segments[4];
// var_dump($uri_segments);
?>

<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a <?php if ($uri_segments[3] == '/sispak/index.php') {
                echo "href='/sispak/index.php'";
            } else {
                echo "href='../index.php'";
            } ?>>OUR SISPAK</a>
        <hr style="margin-top: -5%;">
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a <?php if ($uri_segments[3] == 'index.php') {
                echo "href='index.php'";
            } else {
                echo "href='../index.php'";
            } ?>>SISPAK</a>
        <hr style="margin-top: -5%;">
    </div>
    <ul class="sidebar-menu">
        <li class="<?php if ($page == 'beranda') {
                        echo 'active';
                    } ?>">
            <a href="/sispak/admin/index.php" class="nav-link"><i class="fas fa-fire"></i><span>Beranda</span></a>
        </li>
        <li class="<?php if ($page == 'anggota') {
                        echo 'active';
                    } ?>">
            <a href="/sispak/admin/anggota/show.php" class="nav-link"><i class="fas fa-user"></i><span>Anggota</span></a>
        </li>
        <li class="<?php if ($page == 'stadium') {
                        echo 'active';
                    } ?>">
            <a href="/sispak/admin/jenis_penyakit/show.php" class="nav-link"><i class="fas fa-flask"></i><span>Jenis Hama/Penyakit</span></a>
        </li>
        <li class="<?php if ($page == 'gejala') {
                        echo 'active';
                    } ?>">
            <a href="/sispak/admin/gejala/show.php" class="nav-link"><i class="fas fa-thermometer-full"></i><span>Gejala</span></a>
        </li>
        <li class="<?php if ($page == 'basis_pengetahuan') {
                        echo 'active';
                    } ?>">
            <a href="/sispak/admin/basis_pengetahuan/show.php" class="nav-link"><i class="fas fa-microchip"></i><span>Basis Pengetahuan</span></a>
        </li>
    </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a>
        </a>
    </div>
</aside>