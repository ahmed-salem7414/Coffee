<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>">
    <link rel="stylesheet" href="<?php echo asset('css/pretty-checkbox.min.css')?>">
    <title>My Coffee</title>
</head>
<body>


<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="<?php echo asset ('img/mycoffee.png')?>" class="img-brand" alt="My Coffee">
        My Coffee
    </a>
<?php
 if(Auth::check())
{
echo  Auth::user()->name ;
}
else
{
    //Auth::logout();
echo "Guest" ;
}
?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">


            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown {{ Request::is('login','register') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Join us
                </a>
                <div class="dropdown-menu animate slideIn" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('login') }}">Login</a>
                    <a class="dropdown-item" href="{{ url('register') }}">Register</a>
                    <?php if(Auth::check()) { ?>
                        <a class="dropdown-item" href="{{ url('logout') }}">Log Out </a>
                        <?php } ?>
            </li>

            <li class="nav-item {{ Request::is('coffee') ? 'active' : '' }}" id="coffee-nav-item">
                <a class="nav-link" href="{{ url('coffee') }}">Coffee</a>
            </li>

            <li class="nav-item dropdown {{ Request::is('products','products{id}') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Products
                </a>
                <div class="dropdown-menu animate slideIn" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('product_detail/1') }}">Caffè Americano</a>
                    <a class="dropdown-item" href="{{ url('product_detail/3') }}">Caffè Mocha</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('product_detail/4') }}">Cappuccino</a>
                    <a class="dropdown-item" href="{{ url('product_detail/7') }}">Espresso</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('products') }}">All Products</a>
                </div>
            </li>

            <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('about') }}">About</a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0" method="post" action="{{url('search/')}}">
            {{csrf_field()}}
            <input class="form-control mr-sm-2 remove-outline" type="search" name="search" placeholder="Search" aria-label="Search">
            <div class="btn-group" role="group">
                <button class="btn btn-warning my-2 my-sm-0" type="submit">Search</button>
                <a href="{{ url('advanced_search') }}" class="btn btn-warning my-2 my-sm-0" type="submit">
    
                    <svg class="bi bi-gear" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 014.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 01-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 011.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 012.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 012.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 011.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 01-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 018.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 001.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 00.52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 00-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 00-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 00-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 00-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 00.52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 001.255-.52l.094-.319z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 100 4.492 2.246 2.246 0 000-4.492zM4.754 8a3.246 3.246 0 116.492 0 3.246 3.246 0 01-6.492 0z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>

        </form>
    </div>
</nav>

</body>