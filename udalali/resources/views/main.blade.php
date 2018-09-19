<!doctype html>
<html lang="en">

<head>
    @include('partials._head')

    @include('partials._styles')

</head>

<body>
<div id="main-wrapper" class="our-agents-content">


    <header id="header">
        <div class="header-top-bar">

            <div class="header-notification-bar">
                @include('partials._navigation')
            </div>

        </div>


    </header>

   @yield('innerlinks')

    <div id="page-content" class="candidate-profile client-bg-color">
        <div class="container">
           @yield('content')
        </div> <!-- end .container -->
    </div>

    <footer id="footer">
        @include('partials._footer')
    </footer>

</div>

@include('partials._scripts')

</body>

</html>
