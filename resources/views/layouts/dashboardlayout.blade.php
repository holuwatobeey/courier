<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--[endif]-->
@include('layouts.dashboard.head')
<body>
    @include('layouts.dashboard.sidenav')
    @include('layouts.dashboard.nav')
    <main class="content">
        <div class="container-fluid p-0">
    @yield('content')
        </div>
    </main>
    @include('layouts.dashboard.footer')
    @include('layouts.dashboard.footer-scripts')
</body>
</html>