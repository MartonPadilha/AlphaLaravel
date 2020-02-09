const mix = require('laravel-mix');

mix
    .styles('resources/views/css/bootstrap.css', 'public/site/css/bootstrap.css')
    .styles('resources/views/css/flexslider.css', 'public/site/css/flexslider.css')
    .styles('resources/views/css/font-awesome.min.css', 'public/site/css/font-awesome.min.css')
    .styles('resources/views/css/simpleLighbox.css', 'public/site/css/simpleLighbox.css')
    .styles('resources/views/css/style.css', 'public/site/css/style.css')
    .styles('resources/views/css/myStyle.css', 'public/site/css/myStyle.css')
    .styles('resources/views/scss/_theme.default.scss', 'public/site/scss/_theme.default.scss')
    .styles('resources/views/scss/_theme.green.scss', 'public/site/scss/_theme.green.scss')
    .styles('resources/views/scss/_theme.scss', 'public/site/scss/_theme.scss')
    .styles('resources/views/scss/_video.scss', 'public/site/scss/_video.scss')
    .scripts('resources/views/js/bootstrap.js', 'public/site/js/bootstrap.js')
    .scripts('resources/views/js/classie.js', 'public/site/js/classie.js')
    .scripts('resources/views/js/jarallax.js', 'public/site/js/jarallax.js')
    .scripts('resources/views/js/jquery.countup.js', 'public/site/js/jquery.countup.js')
    .scripts('resources/views/js/jquery.flexslider.js', 'public/site/js/jquery.flexslider.js')
    .scripts('resources/views/js/jquery.waypoints.min.js', 'public/site/js/jquery.waypoints.min.js')
    .scripts('resources/views/js/jquery-2.1.4.min.js', 'public/site/js/jquery-2.1.4.min.js')
    .scripts('resources/views/js/main.js', 'public/site/js/main.js')
    .scripts('resources/views/js/simpleLightbox.js', 'public/site/js/simpleLightbox.js')
    .scripts('resources/views/js/SmoothScroll.min.js', 'public/site/js/SmoothScroll.min.js')
    ;