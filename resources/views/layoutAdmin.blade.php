<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('temp/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('temp/main.css') }}">
    <title>@yield('title','garden api admin')</title>
</head>
<body>
<div>
    <ul class="navigation">
        <li class="navigation__item {{ request()->routeIs('admin.home') ? 'navigation__item--active' : '' }}">
            <a href="{{ route('admin.home') }}">admin home</a>
        </li>
        <li class="navigation__item {{ request()->routeIs('public.home') ? 'navigation__item--active'  : ''  }}">
            <a href="{{ route('public.home')  }}">public home</a>
        </li>
        <li class="navigation__item {{ request()->routeIs('public.about') ?  'navigation__item--active' : '' }}">
            <a href="{{ route('public.about') }}">about</a>
        </li>
    </ul>
</div>
<div class="content">
    @yield('content')
</div>
</body>
</html>
