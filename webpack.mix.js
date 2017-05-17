const { mix } = require('laravel-mix');

// Default APP
mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css').sourceMaps().version();

// Fonts
mix.copy('resources/assets/vendor/bootstrap/fonts', 'public/fonts/bootstrap');
mix.copy('resources/assets/vendor/font-awesome/fonts', 'public/fonts');

// Vendor.css
mix.combine([
    'resources/assets/vendor/font-awesome/css/font-awesome.css',
    // inspinia
    'resources/assets/vendor/css/plugins/dataTables/datatables.min.css',
    'resources/assets/vendor/css/animate.css',
    'resources/assets/vendor/css/style.css',
    // quickadmin
    'resources/assets/vendor/quickadmin/css/textext.core.css',
    'resources/assets/vendor/quickadmin/css/textext.plugin.tags.css',
], 'public/css/vendor.css').version();

// vendor.js
mix.js([
    // inspinia
    'resources/assets/js/plugins/dataTables/datatables.min.js',
    // quickadmin
    'resources/assets/vendor/quickadmin/js/textext.core.js',
    'resources/assets/vendor/quickadmin/js/textext.plugin.tags.js',
    'resources/assets/vendor/quickadmin/js/vfs_fonts.js',
    // 'resources/assets/vendor/quickadmin/js/timepicker.js',
    // script
    'resources/assets/js/main.js',
], 'public/js/vendor.js').sourceMaps().version();

// Go JS
mix.js([
    'resources/assets/vendor/gojs/release/go-debug.js',
    // 'resources/assets/js/demo/go-diagram.js'
], 'public/js/go.js').sourceMaps().version();