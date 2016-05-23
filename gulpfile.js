var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    /* App files */
    mix.styles([
        '../../../bower_components/bootstrap/dist/css/bootstrap.min.css',
        '../../../bower_components/sweetalert/dist/sweetalert.css',
        '../../../bower_components/magnific-popup/dist/magnific-popup.css',
        '../../../bower_components/cropper/dist/cropper.min.css',
        '../../../bower_components/font-awesome/css/font-awesome.min.css',
        '../../../bower_components/animate.css/animate.min.css'
    ], 'public/css/app.bundle.css');
    mix.scripts([
        '../../../bower_components/jquery/dist/jquery.min.js',
        '../../../bower_components/bootstrap/dist/js/bootstrap.min.js',
        '../../../bower_components/sweetalert/dist/sweetalert.min.js',
        '../../../bower_components/jquery.scrollTo/jquery.scrollTo.min.js',
        '../../../bower_components/jquery.scrollfire/jquery.scrollfire.min.js',
        '../../../bower_components/noty/js/noty/packaged/jquery.noty.packaged.min.js',
        '../../../bower_components/magnific-popup/dist/jquery.magnific-popup.min.js',
        '../../../bower_components/cropper/dist/cropper.min.js',
    ], 'public/js/app.bundle.js');
    mix.copy([
        'bower_components/bootstrap/fonts',
        'bower_components/font-awesome/fonts/*.*',
    ], 'public/fonts');


    /* Admin files */
    mix.styles([
        '../../../bower_components/Materialize/dist/css/materialize.min.css',
        '../../../bower_components/animate.css/animate.min.css',
        '../../../bower_components/sweetalert/dist/sweetalert.css',
        '../../../bower_components/datetimepicker/jquery.datetimepicker.css',
        '../../../bower_components/dropzone/dist/min/dropzone.min.css',
        '../../../bower_components/selectize/dist/css/selectize.default.css'

    ], 'public/css/admin.bundle.css');
    mix.scripts([
        '../../../bower_components/jquery/dist/jquery.min.js',
        '../../../node_modules/vue/dist/vue.min.js',
        '../../../bower_components/Materialize/dist/js/materialize.min.js',
        '../../../bower_components/noty/js/noty/packaged/jquery.noty.packaged.min.js',
        '../../../bower_components/jquery.scrollTo/jquery.scrollTo.min.js',
        '../../../bower_components/sweetalert/dist/sweetalert.min.js',
        '../../../node_modules/tablesorter/dist/js/jquery.tablesorter.combined.min.js',
        '../../../node_modules/tablesorter/dist/js/extras/jquery.tablesorter.pager.min.js',
        '../../../bower_components/datetimepicker/build/jquery.datetimepicker.full.min.js',
        '../../../bower_components/dropzone/dist/min/dropzone.min.js',
        '../../../bower_components/selectize/dist/js/standalone/selectize.min.js',
        '../../../bower_components/jquery-ui/ui/minified/core.min.js',
        '../../../bower_components/jquery-ui/ui/minified/widget.min.js',
        '../../../bower_components/jquery-ui/ui/minified/mouse.min.js',
        '../../../bower_components/jquery-ui/ui/minified/sortable.min.js'
    ], 'public/js/admin.bundle.js');

    /* Jstree Files */
    mix.copy('bower_components/jstree/dist', 'public/library/jstree');

    /* Materialize-css Files */
    mix.copy('bower_components/Materialize/dist/fonts', 'public/fonts');

    /* CKEDITOR Files */
    mix.copy([
        'node_modules/ckeditor/ckeditor.js',
        'node_modules/ckeditor/contents.css',
        'node_modules/ckeditor/styles.js'
    ], 'public/library/ckeditor');
    mix.copy([
        'node_modules/ckeditor/lang/en.js',
        'node_modules/ckeditor/lang/ru.js'
    ], 'public/library/ckeditor/lang');
    mix.copy('node_modules/ckeditor/plugins/*.*', 'public/library/ckeditor/plugins');
    mix.copy('node_modules/ckeditor/plugins/div', 'public/library/ckeditor/plugins/div');
    mix.copy('node_modules/ckeditor/plugins/font', 'public/library/ckeditor/plugins/font');
    mix.copy('node_modules/ckeditor/plugins/image', 'public/library/ckeditor/plugins/image');
    mix.copy('node_modules/ckeditor/plugins/justify', 'public/library/ckeditor/plugins/justify');
    mix.copy('node_modules/ckeditor/plugins/link', 'public/library/ckeditor/plugins/link');
    mix.copy('node_modules/ckeditor/plugins/magicline', 'public/library/ckeditor/plugins/magicline');
    mix.copy('node_modules/ckeditor/plugins/stylesheetparser', 'public/library/ckeditor/plugins/stylesheetparser');
    mix.copy('node_modules/ckeditor/plugins/table', 'public/library/ckeditor/plugins/table');
    mix.copy('node_modules/ckeditor/skins/moono', 'public/library/ckeditor/skins/moono');
});
