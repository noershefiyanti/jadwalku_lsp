@include('layouts.header')

<body>
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
    @include('layouts.sidebar')
</div>
</div>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>{{ $page_heading }}</h3>
        </div>

        <div class="page-content">
        @yield('contents')
        </div>
        @include('layouts.footer')
