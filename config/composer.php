<?php

$event = isset($argv[1]) ? $argv[1] : null;

if ($event == 'post-update-cmd') {
    // composer update
    update_assets();
}

if ($event == 'post-install-cmd') {
    // composer install
    update_assets();
}

if ($event == 'update-assets') {
    update_assets();
}

function update_assets() {
    $vendor_dir = realpath(__DIR__ . '/../vendor');

    echo "Update jQuery\n";
    file_put_contents(__DIR__ . '/../public/js/jquery.min.js', file_get_contents($vendor_dir . '/components/jquery/jquery.min.js'));

    echo "Update Bootstrap\n";
    file_put_contents(__DIR__ . '/../public/css/bootstrap.min.css', file_get_contents($vendor_dir . '/components/bootstrap/css/bootstrap.min.css'));
    file_put_contents(__DIR__ . '/../public/css/bootstrap.min.css.map', file_get_contents($vendor_dir . '/components/bootstrap/css/bootstrap.min.css.map'));
    file_put_contents(__DIR__ . '/../public/js/bootstrap.min.js', file_get_contents($vendor_dir . '/components/bootstrap/js/bootstrap.min.js'));
    file_put_contents(__DIR__ . '/../public/fonts/glyphicons-halflings-regular.woff', file_get_contents($vendor_dir . '/components/bootstrap/fonts/glyphicons-halflings-regular.woff'));
    file_put_contents(__DIR__ . '/../public/fonts/glyphicons-halflings-regular.woff2', file_get_contents($vendor_dir . '/components/bootstrap/fonts/glyphicons-halflings-regular.woff2'));

    echo "Update MetisMenu\n";
    file_put_contents(__DIR__ . '/../public/css/metisMenu.min.css', file_get_contents($vendor_dir . '/onokumus/metismenu/dist/metisMenu.min.css'));
    file_put_contents(__DIR__ . '/../public/css/metisMenu.min.css.map', file_get_contents($vendor_dir . '/onokumus/metismenu/dist/metisMenu.min.css.map'));
    file_put_contents(__DIR__ . '/../public/js/metisMenu.min.js', file_get_contents($vendor_dir . '/onokumus/metismenu/dist/metisMenu.min.js'));
    file_put_contents(__DIR__ . '/../public/js/metisMenu.min.js.map', file_get_contents($vendor_dir . '/onokumus/metismenu/dist/metisMenu.min.js.map'));

    echo "Update MorrisJS\n";
    file_put_contents(__DIR__ . '/../public/css/morris.min.css', file_get_contents('https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css'));
    file_put_contents(__DIR__ . '/../public/js/raphael.min.js', file_get_contents('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js'));
    file_put_contents(__DIR__ . '/../public/js/morris.min.js', file_get_contents('https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js'));

    echo "Update SB Admin 2\n";
    file_put_contents(__DIR__ . '/../public/css/sb-admin-2.css', file_get_contents($vendor_dir . '/benit/startbootstrap-sb-admin-2/dist/css/sb-admin-2.css'));
    file_put_contents(__DIR__ . '/../public/js/sb-admin-2.js', file_get_contents($vendor_dir . '/benit/startbootstrap-sb-admin-2/dist/js/sb-admin-2.js'));

    echo "Update Data Tables\n";
    file_put_contents(__DIR__ . '/../public/css/jquery.datatables.min.css', file_get_contents($vendor_dir . '/datatables/datatables/media/css/jquery.dataTables.min.css'));
    file_put_contents(__DIR__ . '/../public/js/jquery.datatables.min.js', file_get_contents($vendor_dir . '/datatables/datatables/media/js/jquery.dataTables.min.js'));
    file_put_contents(__DIR__ . '/../public/css/datatables.bootstrap.min.css', file_get_contents($vendor_dir . '/datatables/datatables/media/css/dataTables.bootstrap.min.css'));
    file_put_contents(__DIR__ . '/../public/js/datatables.bootstrap.min.js', file_get_contents($vendor_dir . '/datatables/datatables/media/js/dataTables.bootstrap.min.js'));
    file_put_contents(__DIR__ . '/../public/images/sort_both.png', file_get_contents($vendor_dir . '/datatables/datatables/media/images/sort_both.png'));
    file_put_contents(__DIR__ . '/../public/images/sort_asc.png', file_get_contents($vendor_dir . '/datatables/datatables/media/images/sort_asc.png'));
    file_put_contents(__DIR__ . '/../public/images/sort_asc_disabled.png', file_get_contents($vendor_dir . '/datatables/datatables/media/images/sort_asc_disabled.png'));
    file_put_contents(__DIR__ . '/../public/images/sort_desc.png', file_get_contents($vendor_dir . '/datatables/datatables/media/images/sort_desc.png'));
    file_put_contents(__DIR__ . '/../public/images/sort_desc_disabled.png', file_get_contents($vendor_dir . '/datatables/datatables/media/images/sort_desc_disabled.png'));

}
