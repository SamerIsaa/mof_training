<html>
@include('landing.layout.head')
<body>
<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->

    @include('landing.layout.header')

    @yield('content')

    <!-- Main Footer -->
    @include('landing.layout.footer')
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

@include('landing.layout.scripts')
</body>
</html>
