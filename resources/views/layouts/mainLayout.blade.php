<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--[endif]-->
@include('layouts.partials.head')
<body>
    @include('layouts.partials.nav')

    @yield('content')
    @yield('scripts')
    @include('layouts.partials.footer')
    @include('layouts.partials.footer-scripts')
</body>
</html>