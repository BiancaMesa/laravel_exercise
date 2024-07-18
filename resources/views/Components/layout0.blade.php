<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <nav>
        <x-nav_link href="/">Home</x-nav_link>
        <x-nav_link href="/about" style="color: green">About</x-nav_link>
        <x-nav_link href="/contact">Contact</x-nav_link>
    </nav>


    <!-- ///Blade helper///
    We open php and then we echo the variable called slot. This is telling laravel where it should put the h1 tag we included between the layout component tags in the layout component -->
    <!-- With this shortcut, behind the scenes, this blade code is being compiled to vanilla php -->
    {{ $slot }}
</body>
</html>