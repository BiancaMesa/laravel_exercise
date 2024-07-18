<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>


    <!-- ///Blade helper///
    We open php and then we echo the variable called slot. This is telling laravel where it should put the h1 tag we included between the layout component tags in the layout component -->
    <?php echo $slot?>
</body>
</html>