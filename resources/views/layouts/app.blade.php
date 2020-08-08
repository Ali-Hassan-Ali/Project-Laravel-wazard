<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/application.min.css')}}" rel="stylesheet">
    <!-- as of IE9 cannot parse css files with more that 4K classes separating in two files -->
    <!--[if IE 9]>
    <![endif]-->
    <link href="{{ asset('css/application-ie9-part2.css')}}" rel="stylesheet">
    <link href="{{ asset('css/application.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Wizard">
    <meta name="keywords" content="Wizard">
    <meta name="author" content="Wizard">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
        chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
        https://code.google.com/p/chromium/issues/detail?id=332189
        */
    </script>
</head>

<body class="">
<!--
  Main sidebar seen on the left. may be static or collapsing depending on selected state.

    * Collapsing - navigation automatically collapse when mouse leaves it and expand when enters.
    * Static - stays always open.
-->
@include('layouts.include._sidebar')

<!-- This is the white navigation bar seen on the top. A bit enhanced BS navbar. See .page-controls in _base.scss. -->
@include('layouts.include._navbar')

<div class="content-wrap">

<!-- main page content. the place to put widgets in. usually consists of .row > .col-lg-* > .widget.  -->
    <main id="content" class="content" role="main">

        @yield('content')

        @include('layouts.include._footer')

    </main>

</div>

@include('layouts.include._modelTrainingOrg')

<!-- common libraries. required for every page-->
<script src="{{ asset('../node_modules/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('../node_modules/jquery-pjax/jquery.pjax.js')}}"></script>
<script src="{{ asset('../node_modules/popper.js/dist/umd/popper.js')}}"></script>
<script src="{{ asset('../node_modules/bootstrap/dist/js/bootstrap.js')}}"></script>
<script src="{{ asset('../node_modules/bootstrap/js/dist/util.js')}}"></script>
<script src="{{ asset('../node_modules/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<script src="{{ asset('../node_modules/widgster/widgster.js')}}"></script>
<script src="{{ asset('../node_modules/pace.js/pace.js')}}"
        data-pace-options='{ "target": ".content-wrap", "ghostTime": 1000 }'></script>
<script src="{{ asset('../node_modules/hammerjs/hammer.js')}}"></script>
<script src="{{ asset('../node_modules/jquery-hammerjs/jquery.hammer.js')}}"></script>


<!-- common app js -->
<script src="{{ asset('js/settings.js')}}"></script>
<script src="{{ asset('js/app.js')}}"></script>
<script src="{{ asset('js/carousol.js')}}"></script>

<script src="{{ asset('../node_modules/flot.animator/jquery.flot.animator.min.js')}}"></script>
<script src="{{ asset('../node_modules/flot/jquery.flot.js')}}"></script>
<script src="{{ asset('../node_modules/flot-orderBars/js/jquery.flot.orderBars.')}}js"></script>
<script src="{{ asset("../node_modules/flot/jquery.flot.selection.js")}}"></script>
<script src="{{ asset('../node_modules/flot/jquery.flot.time.js')}}"></script>
<script src="{{ asset('../node_modules/flot/jquery.flot.pie.js')}}"></script>
<script src="{{ asset('../node_modules/flot/jquery.flot.stack.')}}js"></script>
<script src="{{ asset('../node_modules/flot/jquery.flot.crosshair.js')}}"></script>
<script src="{{ asset('../node_modules/flot/jquery.flot.symbol.js')}}"></script>
<script src="{{ asset('../node_modules/flot.dashes/jquery.flot.dashes.js')}}"></script>
<script src="{{ asset('../node_modules/jquery-sparkline/jquery.sparkline.js')}}"></script>
<script src="{{ asset('../node_modules/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js')}}"></script>

<script id="AnyMod-script">
    (function (m, o, d, u, l, a, r, i, z, e) {
        u[m] = {
            Project: o, rq: [], Opts: r, ready: function (j) {
                u[m].rq.push(j);
            }
        };

        function j(s) {
            return encodeURIComponent(btoa(s));
        }

        z = l.getElementById(m + "-" + a);
        r = u.location;
        e = [d + "/page/" + o + "/" + j(r.pathname) + "/" + j(r.host) + "?t=" + Date.now(), d];
        e.map(function (w) {
            i = l.createElement(a);
            i.defer = 1;
            i.src = w;
            z.parentNode.insertBefore(i, z);
        });
    })("AnyMod", "library", "https://cdn.anymod.com/v2", window, document, "script", {
        toolkit: false,
        tips: true,
        priority: 3
    });
</script>
<script>
    /* owl carousel cliant
    -------------------------------------------------------*/
    $('.owl-carousel').owlCarousel({

        items: 1,
        mouseDrag: true,
        autoplay: true,
        smartSpeed: 200,

    });
    $(document).ready(function(){
        $('.customer-logos').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });
</script>
<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        var uluru = {lat: 29.295981, lng: 30.834696};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 4, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
    }
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGYku5AZi5oPfH4ARTDoPrs0Tb0PhxxN4&callback=initMap"
        type="text/javascript"></script>

<script>
    //  $(document).ready(function() {
    $('.table tbody').on('click', '.fa', function () {
        $(this).closest().remove();
    });
    //  });
</script>

<!-- page specific js -->
<script src="{{ asset('js/index.js')}}"></script>
</body>
</html>
