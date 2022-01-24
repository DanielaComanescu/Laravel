<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/CSS/base.css">
        <link rel="stylesheet" href="/CSS/@yield('css').css">

        <title>@yield('title')</title>
    </head>

    <body>
        <header>
            <nav class="parent">
                <div class="anonymous">
                        <a href="/">Home</a>
                        <a href="/price">Prices & Open Hours </a>
                        <a href="/lessons">Swim Lessons</a>
                </div>

                <div class="connexion">
                    @if (Auth::check()) 
                    <div class="connectedUser"><h2 class="monCompte">My account</h2><div id="menu-button" class="close"></div></div>
                    
                    <nav id="two" class="show-menu">
                        <ul>
                            <li><a href="/connectedRoute"> My profile </a></li>
                            <li><a href="/logout"> Log out </a></li>
                        </ul>
                    </nav>
                    @else
                        <a href="/connexion">Log in </a>
                    @endif
                </div>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <script>
            var menuButton = document.querySelector('#menu-button');
            var menu = document.querySelector('#two');
            // show or hide
            menuButton.addEventListener('click',function(){
                menu.classList.toggle('show-menu');
                menuButton.classList.toggle('close');
            });
        </script>

        <footer>
            <nav class="parentFoot">
                <div class="allUsers">
                    <a href="/contactUs"><img id="contactUs" src="https://media.istockphoto.com/vectors/contact-us-blue-round-button-vector-id1070719146?k=20&m=1070719146&s=612x612&w=0&h=5S7XEKn--e7Xg_4Tt5vsghfNEGIseCzBlK3OLpp7-SI="> <span></span>Contact us</a>
                    <a href="https://www.facebook.com/"><img id="facebook" src="https://www.meilleure-innovation.com/wp-content/uploads/2021/11/1200px-facebook-logo-2019-1024x1024.png"></a>
                    <a href="https://www.instagram.com/?hl=fr"><img id="instagram" src="https://cdn.pixabay.com/photo/2016/08/09/17/52/instagram-1581266_1280.jpg"></a>
                </div>
            </nav>
        </footer>

    </body>
</html>
