<!DOCTYPE HTML>
<!--
    dashboard page
-->
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>App Pus</title>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
        <noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
    </head>
    <body class="is-preload">

        <!-- Wrapper -->
            <div id="wrapper">

                <!-- Header -->
                    <header id="header" class="alt">
                        <span class="logo"><img src="{{ asset('images/logo.svg') }}" alt="" /></span>
                        <h1>App Pus</h1>
                        <p>Manajemen Perpustakaan Berbasis Web<br />
                        built by <a href="https://wahdam-amar.github.io/portofolio/">Wahdam Amarulloh</a>.</p>
                    </header>

                <!-- Nav -->


                <!-- Main -->
                    <div id="main">

                        <!-- Introduction -->
<!--                             <section id="buku" class="main">
                                <div class="spotlight">
                                    <div class="content">
                                        <header class="major">
                                            <h2>Daftar Buku</h2>
                                            <strong>Daftar Buku Terbaru</strong>
                                        </header>
                                    </div>
                                </div>
                            </section> -->
                            <section class="main">
                                 @yield('content')    
                            </section>

                            

                        <!-- First Section -->

                    </div>

                <!-- Footer -->
                    <footer id="footer">
                        <section>
                            <h2>Aliquam sed mauris</h2>
                            <p>Sed lorem ipsum dolor sit amet et nullam consequat feugiat consequat magna adipiscing tempus etiam dolore veroeros. eget dapibus mauris. Cras aliquet, nisl ut viverra sollicitudin, ligula erat egestas velit, vitae tincidunt odio.</p>
                            <ul class="actions">
                                <li><a href="generic.html" class="button">Learn More</a></li>
                            </ul>
                        </section>
                        <section>
                            <h2>Etiam feugiat</h2>
                            <dl class="alt">
                                <dt>Address</dt>
                                <dd>1234 Somewhere Road &bull; Nashville, TN 00000 &bull; USA</dd>
                                <dt>Phone</dt>
                                <dd>(000) 000-0000 x 0000</dd>
                                <dt>Email</dt>
                                <dd><a href="#">information@untitled.tld</a></dd>
                            </dl>
                            <ul class="icons">
                                <li><a href="#" class="icon brands fa-twitter alt"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon brands fa-facebook-f alt"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon brands fa-instagram alt"><span class="label">Instagram</span></a></li>
                                <li><a href="#" class="icon brands fa-github alt"><span class="label">GitHub</span></a></li>
                                <li><a href="#" class="icon brands fa-dribbble alt"><span class="label">Dribbble</span></a></li>
                            </ul>
                        </section>
                        <p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
                    </footer>

            </div>

        <!-- Scripts -->
            <script src="{{ asset('js/jquery.min.js') }}"></script>
            <script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>
            <script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
            <script src="{{ asset('js/browser.min.js') }}"></script>
            <script src="{{ asset('js/breakpoints.min.js') }}"></script>
            <script src="{{ asset('js/util.js') }}"></script>
            <script src="{{ asset('js/main.js') }}"></script>

    </body>
</html>