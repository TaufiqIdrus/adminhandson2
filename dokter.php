<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/tables-data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Feb 2020 04:44:46 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Manage Dokter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Choose between regular React Bootstrap tables or advanced dynamic ones.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="main.87c0748b313a1dda75f5.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                </div>
                <div class="app-header-right">


                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-info">
                                                    <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city3.jpg');">
                                                    </div>
                                                    <div class="menu-header-content text-left">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Admin Handson
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="scroll-area-xs" style="height: 150px;">
                                                <div class="scrollbar-container ps">
                                                    <ul class="nav flex-column">

                                                        <li class="nav-item-header nav-item">My Account
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Settings
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider mb-0 nav-item"></li>
                                            </ul>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider nav-item">
                                                </li>
                                                <li class="nav-item-btn text-center nav-item">
                                                    <button class="btn-wide btn btn-primary btn-sm">
                                                        Logout
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <?php include 'templates/sidebar.php' ?>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div>Tabel Dokter
                                    <div class="page-title-subheading">Pengajar Berprofesi Dokter pada Handson
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-info">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-business-time fa-w-20"></i>
                                    </span>
                                    Insert Dokter
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama dokter</th>
                                        <th>Spesialis</th>
                                        <th>Rating</th>
                                        <th>Insert date</th>
                                        <th>Last update</th>
                                        <th>Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'php/koneksi.php';
                                    $sql = "SELECT * FROM `doctor`";
                                    $hasil = $koneksi->query($sql);
                                    while ($dokter = $hasil->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?= $dokter['id_doctor'] ?></td>
                                            <td><?= $dokter['name_doctor'] ?></td>
                                            <td><?= $dokter['speciality'] ?></td>
                                            <td><?= $dokter['rating'] ?></td>
                                            <td><?= $dokter['insert_date'] ?></td>
                                            <td><?= $dokter['last_update'] ?></td>
                                            <td>
                                                <form action="php/dokter_delete.php" method="post">
                                                    <button type="submit" class="badge badge-danger" name="id_doctor" value="<?= $dokter['id_doctor'] ?>">Hapus</button>
                                                </form>
                                                <a href="" class="badge badge-success ">ubah</a>
                                                <a href="" class="badge badge-primary ">detail</a>
                                            </td>
                                        </tr>
                                    <?php
                                    } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama dokter</th>
                                        <th>Spesialis</th>
                                        <th>Rating</th>
                                        <th>Insert date</th>
                                        <th>Last update</th>
                                        <th>Menu</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="app-drawer-overlay d-none animated fadeIn"></div>
    <script type="text/javascript" src="assets/scripts/main.87c0748b313a1dda75f5.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/tables-data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Feb 2020 04:44:46 GMT -->

</html>