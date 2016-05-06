var elixir = require('laravel-elixir');
             require('laravel-elixir-jade');


elixir.config.sourcemaps = true;

elixir(function(mix) {
    mix.jade({
        baseDir: './resources',
        src: '/assets/jade/',
        search: '/**/*.jade',
        dest: '/views/',
        pretty: true,
        blade: true
    });

    //icons
    mix.copy('resources/assets/bower/font-awesome/fonts', 'public/fonts');
    mix.copy('resources/assets/bower/bootstrap/fonts', 'public/fonts');

    //javascript
    mix.scripts([
        "./resources/assets/bower/hydrogen-theme/hydrogen.setup.min.js",
        "./resources/assets/bower/hydrogen-theme/hydrogen.scripts.min.js",
        "./resources/assets/bower/hydrogen-theme/hydrogen.plugins.js"
    ], "resources/assets/js/components/hydrogen.min.js");


    mix.less(["resources/assets/less/pages/home.less"], "public/css/home.css");//delete less


    mix.scripts([
        "./resources/assets/bower/html5shiv/dist/html5shiv.min.js",
        "components/layout.js",
        "pages/home.js",
        "./resources/assets/bower/jquery/dist/jquery.min.js",
        "./resources/assets/bower/royalslider/jquery.royalslider.min.js",
        "./resources/assets/bower/mfp/jquery.mfp-0.9.9.min.js",
        "./resources/assets/bower/mediaelement/build/mediaelement-and-player.min.js",
        "./resources/assets/bower/gmap3/dist/gmap3.min.js",
        "./resources/assets/bower/owlcarousel/owl-carousel/owl.carousel.min.js",
        "./resources/assets/bower/isotope/dist/isotope.pkgd.min.js",
        "./resources/assets/bower/jquery-form/jquery.form.js",
        "./resources/assets/bower/jquery-validation/dist/jquery.validate.min.js",
        "components/hydrogen.min.js"
    ], "public/js/home.min.js");


    /*
    mix.browserSync({
        proxy: 'http://atemporale_completo.dev/'
    });*/
});

