<!DOCTYPE html>
<html lang="en">
    @include('Front-end.includes.head')
    <body>
        @include('Front-end.includes.top-bar')
        @include('Front-end.includes.header')
        <main id="main">
            @yield('content')
        </main>
        @include('Front-end.includes.footer')
        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        @include('Front-end.includes.scripts')

</body>
</html>