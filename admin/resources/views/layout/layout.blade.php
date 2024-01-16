<!doctype html>
<html lang="en">

@include('component.heads')

<body class="d-flex flex-column h-100 sidebar-pushcontent" data-sidebarstyle="sidebar-pushcontent" style="background: #0d6efd">
    <!-- sidebar-pushcontent, sidebar-overlay , sidebar-fullscreen  are classes to switch UI here-->

@include('component.pageloader')

@include('component.background')

@include('component.header')

@include('component.sidebar')

@yield('content')

@include('component.footer')

@include('component.rightbar')

@include('component.chatwindow')

@include('component.scripts')

@yield('script')
</body>


<!-- Mirrored from maxartkiller.com/website/getwindoors/html/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jan 2024 13:30:58 GMT -->
</html>