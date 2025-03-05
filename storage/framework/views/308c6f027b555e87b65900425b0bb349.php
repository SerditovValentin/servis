<header class="py-3 border-bottom">
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
        <div class="container text-center">
            <a class="navbar-brand" href="<?php echo e(route('stkeeper')); ?>"><img src="/img/Logo.png" width="50" height="50" alt="Logo"></a>

            <ul class="navbar-nav me-auto mb-s mb-mb-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Route::is('stkeeper.zakaz') ? 'active' : ''); ?>" aria-current="page"
                        href="<?php echo e(route('stkeeper.zakaz')); ?>">Заключение договора с поставщиками</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto list-group-horizontal">
                <li class="nav-item">

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                    </form>

                    <button type="button" class="btn btn-light" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Выход
                    </button>
                </li>
            </ul>

        </div>
    </nav>
</header><?php /**PATH C:\OSPanel\home\servis\public\resources\views/stkeeper/header.blade.php ENDPATH**/ ?>