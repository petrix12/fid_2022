<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FID</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/stylesapp.css') }}" rel="stylesheet" type="text/css" >

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/js.js') }}"></script>
</head>
<body>
    @if (Route::has('login'))
        <div id="loginbuttons">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <button class="loginbtns" id="login" name="login">Login</button>
                @if (Route::has('register'))
                    <button class="loginbtns" id="register" name="register">Register</button>
                @endif
            @endauth
        </div>
    @endif
    <div id="banner">
        <center>
            <table style="margin-top:20px;">
                <tr>
                    <td>
                        <img src="img/logos/logo-fid-llave.png" style="margin-right: 10px; width: 5rem;">
                    </td>
                    <td>
                        <h1 style="font-weight:bold; padding-left: 10px; color:#606060; font-size: 5rem; border-left: 1px #606060 solid;">FID</h1>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <ul class="nav justify-content-center">
      <li class="nav-item">
        
      </li>
    </ul>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin: auto;">
            <li class="nav-item right-border">
              <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item right-border">
              <a class="nav-link {{ request()->routeIs('formation_window') ? 'active' : '' }}" href="{{route('formation_window')}}">Formation</a>
            </li>
            <li class="nav-item right-border">
              <a class="nav-link {{ request()->routeIs('investigation_window') ? 'active' : '' }}" href="{{route('investigation_window')}}">Investigation</a>
            </li>
            <li class="nav-item right-border">
              <a class="nav-link {{ request()->routeIs('documentation_window') ? 'active' : '' }}" href="{{route('documentation_window')}}">Documentation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('difussion_window') ? 'active' : '' }}" href="{{route('difussion_window')}}">Diffusion</a>
            </li>
        </div>
      </div>
    </nav>

    <div id="containermain">
        @yield('content')
    </div>

    <footer class="text-lg-start">
      <div class="container p-4">
        <div class="row">

          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <table id="footerlogo">
                <tr>
                    <td>
                        <img class="footer_img" src="img/logos/logo-fid-llave.png">
                    </td>
                    <td>
                        <h1 class="footer_key">FID</h1>
                    </td>
                </tr>
            </table>
            <p style="font-weight: bold; color: white; font-size: 1.2rem;">
              Phone Numbers:<br>
              🇪🇸 (+34 911980993)<br>
              🇻🇪 (+58 2127201170)<br>
              🇨🇴 (+57 0353195843)<br>
              <br>
              Email:<br>
              FID@sefaruniversal.com<br>
              <br>
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="brand fab fa-twitter fa-stack-1x"></i>
              </span>
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="brand fab fa-instagram fa-stack-1x"></i>
              </span>
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="brand fab fa-facebook fa-stack-1x"></i>
              </span>
              <a href="#" style="margin-top: 10rem; color: #CCA766 !important; text-decoration: underline;">Meet FID</a>
            </p>
          </div>

          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <p style="font-weight: bold; color: #CCA766 !important; font-size: 1.2rem;">
              Contact Form:
            </p>
              <form>
                <p class="labelcontact">
                  Name
                </p>
                <input class="inputs" type="text" name="fullname" id="fullname"/>
                <br>
                <p class="labelcontact">
                  Mail
                </p>
                <input class="inputs" type="mail" name="mail" id="mail"/>
                <br>
                <p class="labelcontact">
                  Phone number
                </p>
                <input class="inputs" type="text" name="phone" id="phone"/>
                <br>
                <p class="labelcontact">
                  Wich country are you contacting us?
                </p>
                <input class="inputs" type="text" name="country" id="country"/>
                <br>
                <p class="labelcontact">
                  Subject
                </p>
                <input class="inputs" type="text" name="suject" id="subject"/>
                <p class="labelcontact">
                  Message
                </p>
                <textarea class="inputs" type="text" name="message" id="message"> </textarea>
                <br>
                <button id="send" name="send">Submit</button>
              </form>
          </div>

        </div>
      </div>
    </footer>

<div id="ajax_div" style="width: 100vw; height: 100vh; top:0; left:0; position:fixed; overflow: hidden; background-color:rgba(0,0,0,0.4); z-index:2000; display:none;">
</div>

</body>
</html>