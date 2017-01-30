<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<body class="fixed-header">
    <div id="app" class="bg-grey-200">
        @include('partials.menu')
        <div id="wrapper">
            <section @yield('section_style')>
                    @yield('content')
            </section>
        </div>
    </div>

@include('partials.footer')
@include('partials.scripts')
    @yield('widget_scripts')
    @yield('above_scripts')
</body>
</html>
