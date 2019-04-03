<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dashboard Event Management System">
    <meta name="author" content="Antonius Christiyanto Saputra">
    <meta name="keyword" content="Event, Management, System, AtmaEvent">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('img/atmaevent/favicon.ico') }}">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/elegant-icons-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fullcalendar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/widgets.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/xcharts.min.css') }}" rel=" stylesheet">
    <link href="{{ asset('css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">
</head>
<body>
<section id="container" class="">
    @include('layouts.panel.header')
    @include('layouts.panel.sidebar')
    <section id="main-content">

    </section>
</section>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery-ui-1.10.4.min.js') }}"></script>
    <script src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-ui-1.9.2.custom.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('assets/jquery-knob/js/jquery.knob.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.sparkline.js') }}"></script>
    <script src="{{ asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/fullcalendar/fullcalendar/fullcalendar.js') }}"></script>
    <script src="{{ asset('js/calendar-custom.js') }}"></script>
    <script src="{{ asset('js/jquery.rateit.min.js') }}"></script>
    <script src="{{ asset('js/jquery.customSelect.min.js') }}"></script>
    <script src="{{ asset('assets/chart-master/Chart.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/sparkline-chart.js') }}"></script>
    <script src="{{ asset('js/easy-pie-chart.js') }}"></script>
    <script src="{{ asset('js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('js/xcharts.min.js') }}"></script>
    <script src="{{ asset('js/jquery.autosize.min.js') }}"></script>
    <script src="{{ asset('js/jquery.placeholder.min.js') }}"></script>
    <script src="{{ asset('js/gdp-data.js') }}"></script>
    <script src="{{ asset('js/morris.min.js') }}"></script>
    <script src="{{ asset('js/sparklines.js') }}"></script>
    <script src="{{ asset('js/charts.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
    <script>
        //knob
        $(function() {
            $(".knob").knob({
                'draw': function() {
                    $(this.i).val(this.cv + '%')
                }
            })
        });

        //carousel
        $(document).ready(function() {
            $("#owl-slider").owlCarousel({
                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true

            });
        });

        //custom select box

        $(function() {
            $('select.styled').customSelect();
        });

        /* ---------- Map ---------- */
        $(function() {
            $('#map').vectorMap({
                map: 'world_mill_en',
                series: {
                    regions: [{
                        values: gdpData,
                        scale: ['#000', '#000'],
                        normalizeFunction: 'polynomial'
                    }]
                },
                backgroundColor: '#eef3f7',
                onLabelShow: function(e, el, code) {
                    el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
                }
            });
        });
    </script>
</body>
</html>