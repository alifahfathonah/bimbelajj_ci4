<div id="sidebar-menu">

    <ul class="metismenu" id="side-menu">
        <?php foreach ($sideMenu as $sm) : ?>
            <!--<li class="menu-title">Navigation</li>-->
            <li class="<?= ($sm['nama'] == $aktif) ? 'active' : ''; ?>">
                <a class="<?= ($sm['nama'] == $aktif) ? 'active' : ''; ?>" href="<?= base_url($sm['href']); ?>">
                    <i class="<?= $sm['icon']; ?>"></i> <span> <?= $sm['label']; ?> </span>
                </a>
            </li>
        <?php endforeach ?>

    </ul>

</div>