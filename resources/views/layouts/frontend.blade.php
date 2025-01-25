
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Leego Construction  </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;600;700&family=Oswald:wght@700&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/jquery.barfiller.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/nav-tabs.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/jquery.barfiller.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@yield('styles')
          </head>
  <body>

    <div class="tractour-loader h-full fixed w-full z-[9999] bg-white bg-no-repeat bg-scroll bg-[0_0]">
        <div class="main-preloader absolute -translate-x-2/4 -translate-y-2/4 left-2/4 top-2/4">
            <div class="spinner w-10 h-10 relative">
                <div
                    class="double-bounce1 w-full h-full bg-[#333] opacity-60 absolute animate-[sk-bounce_2.0s_infinite_ease-in-out] rounded-[50%] left-0 top-0">
                </div>
                <div
                    class="double-bounce2 w-full h-full bg-[#333] opacity-60 absolute animate-[sk-bounce_2.0s_infinite_ease-in-out] rounded-[50%] left-0 top-0">
                </div>
            </div>
        </div>
    </div>

    <x-header/>


       <!-- hero area start -->
       <div class="hero-area relative mt-[50px]">
        <!-- main menu area start -->
        <x-main-menu :menu-items="[
            ['label' => 'Home', 'url' => route('home'), 'active' => request()->routeIs('home')],
            ['label' => 'Project', 'url' => route('project.index'), 'active' => request()->routeIs('project.*')],
            ['label' => 'Our Services', 'url' => route('services.index'), 'active' => request()->routeIs('services.*')],
            ['label' => 'About Us', 'url' => route('about'), 'active' => request()->routeIs('about')],
            ['label' => 'Contact Us', 'url' => route('contact'), 'active' => request()->routeIs('contact')],
        ]" />

        <!-- main menu area end -->
        <!-- slider area start -->
        @yield('slider')
        <!-- slider area end -->
        <!-- blocks services area stat -->
        @yield('services')
        <!-- blocks services area end -->

        @yield('breadcrumb')

       </div>
    <!-- hero area end -->


    @yield("content")


    <!-- Footer starts -->
    <x-footer/>
    <!-- footer area end -->
    <div class="whatsapp-scrolltop block fixed w-[60px] h-[60px] cursor-pointer transition-all duration-[0.3s] ease-[cubic-bezier(0.25,0.25,0,1)] p-0 rounded-full border-[none] right-[23px] bottom-[23px] hover:bg-[#25D366] hover:shadow-[0_3px_10px_rgba(0,0,0,0.5),0_3px_15px_rgba(0,0,0,0.5)] bg-[#128C7E] z-10"
    onclick="window.open('https://api.whatsapp.com/send?phone=+265888368336&text=Hello! I would like to inquire...', '_blank')">
    <img height="50" width="50" src="{{ asset('assets/img/leego/whatsapp-icon.svg') }}" alt="WhatsApp Icon" class="w-[60%] h-[60%] m-auto">
    </div>



    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.barfiller.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrolltop.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @yield('scripts')
  </body>
</html>
