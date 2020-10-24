<li class="dropdown notification-list">
    <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
        <img src="<?= base_url('img/foto_profil') . '/' . $avatar ?>" alt="user" class="rounded-circle"> <span class="ml-1"><?= $nama; ?><i class="mdi mdi-chevron-down"></i> </span>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
        <!-- item-->
        <div class="dropdown-item noti-title">
            <h6 class="text-overflow m-0">Welcome !</h6>
        </div>

        <!-- item-->

        <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
            <i class="fi-head"></i> <span>My Account</span>
        </a> -->

        <a href="<?= base_url('admin/dashboard/akun_saya'); ?>" class="dropdown-item notify-item">
            <i class="fi-head"></i> <span>My Account</span>
        </a>

        <!-- item-->
        <a href="<?= base_url('registrasi/logout') ?>" class="dropdown-item notify-item">
            <i class="fi-power"></i> <span>Logout</span>
        </a>

    </div>
</li>