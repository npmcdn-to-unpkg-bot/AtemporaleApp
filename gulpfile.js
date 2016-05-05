var elixir = require('laravel-elixir');
             require('laravel-elixir-jade');


elixir.config.sourcemaps = false;

elixir(function(mix) {
    mix.jade({
        baseDir: './resources',
        src: '/assets/jade/',
        search: '/**/*.jade',
        dest: '/views/',
        pretty: true,
        blade: true
    });




    mix.less(["resources/assets/less/pages/home.less"], "public/css/home.css");//delete less


    mix.scripts(["components/layout.js", "pages/home.js"], "public/js/home.min.js");


    //icons
    mix.copy('resources/assets/bower/font-awesome/fonts', 'public/fonts');
    mix.copy('resources/assets/bower/bootstrap/fonts', 'public/fonts');

    //javascript
    mix.copy('resources/assets/bower/font-awesome/fonts', 'public/fonts');
    mix.copy('resources/assets/bower/bootstrap/fonts', 'public/fonts');




    mix.browserSync({
        proxy: 'http://atemporale_completo.dev/'
    });
});

