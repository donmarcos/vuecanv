<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- CSRF Token -->
          <meta name="csrf-token" content="{{ csrf_token() }}">
          <title>Admin - VueCanvassing</title>

           <!-- Styles -->
          <link href="{{ asset('css/app.css') }}" rel="stylesheet">
           <!-- Scripts -->
          <script src="{{ asset('js/app.js') }}" defer></script>


          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
          <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
          <!-- Bulma Version 0.6.0 -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css" integrity="sha256-HEtF7HLJZSC3Le1HcsWbz1hDYFPZCqDhZa9QsCgVUdw=" crossorigin="anonymous" />

          <link rel="stylesheet" type="text/css" href="../css/admin.css">

          <style type="text/css">
              .bm--card-equal-height {
                   display: flex;
                   flex-direction: column;
                   width: 100%;
                }
                .bm--card-equal-height .card-footer {
                   margin-top: auto;
                }

          </style>


    </head>
    <body>
        <!-- 
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

        </div>
         -->
         <!-- Bulma here -->
  <div id="app">
         <!-- START NAV -->
          <nav class="navbar is-white">
            <div class="container">
              <div class="navbar-brand">
                <a class="navbar-item brand-text" href="../">
                   Welcome Candidate -- {{ Auth::user()->name }}    
                </a>
                <div class="navbar-burger burger" data-target="navMenu">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
              <div id="navMenu" class="navbar-menu">
                <div class="navbar-start">
                  <a class="navbar-item" href="admin.html">
                    Home
                  </a>
                  <a class="navbar-item" href="admin.html">
                    Campaigns
                  </a>
                  <a class="navbar-item" href="admin.html">
                    Donations
                  </a>
                  <a class="navbar-item" href="admin.html">
                    Volunteers
                  </a>
                </div>

                <ul class="navbar-nav ml-auto">
                     
                     <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                     </li>
                 </ul>

              </div>
            </div>
          </nav>
          <!-- END NAV -->


        <div class="container">
            <div class="columns">
              <div class="column is-2">
                <aside class="menu">
                  <p class="menu-label">
                    General
                  </p>
                  <ul class="menu-list">
                    <li><a class="is-active">Dashboard</a></li>
                    <li><a>Campaigns</a></li>
                  </ul>
                  <p class="menu-label">
                    Administration
                  </p>
                  <ul class="menu-list">
                    <li><a>Team Settings</a></li>
                    <li>
                      <a>Manage Your Team</a>
                      <ul>
                        <li><a>Volunteers</a></li>
                        <li><a>Add a Volunteer</a></li>
                      </ul>
                    </li>
                  </ul>
                  <p class="menu-label">
                    Transactions
                  </p>
                  <ul class="menu-list">
                    <li><a>Donations</a></li>
                   
                  </ul>
                </aside>
              </div>


      <div class="column is-10">  
        <section class="info-tiles">
          <div class="tile is-ancestor has-text-centered">
            
            <div class="tile is-parent">
              <article class="tile is-child box">
                <p class="title">439k</p>
                <p class="subtitle">Voters</p>
              </article>
            </div>

            <div class="tile is-parent">
              <article class="tile is-child box">
                <p class="title">59k</p>
                <p class="subtitle">Yes</p>
              </article>
            </div>
            <div class="tile is-parent">
              <article class="tile is-child box">
                <p class="title">3.4k</p>
                <p class="subtitle">Outstanding</p>
              </article>
            </div>
            <div class="tile is-parent">
              <article class="tile is-child box">
                <p class="title">19</p>
                <p class="subtitle">Walkers</p>
              </article>
            </div>
          </div>
        </section>

        <div class="columns">
          <div class="column">
            
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  Voter Heat Map
                </p>
                <a href="#" class="card-header-icon" aria-label="more options">
                  <span class="icon">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </span>
                </a>
              </header>
              <div class="card-image">
                    <googlecomponent></googlecomponent>
              </div>

              <footer class="card-footer">
                <a href="#" class="card-footer-item">View All</a>
              </footer>
            </div>   

          </div>
        </div>

      </div> <!-- class="column is-9" -->
    </div>
  </div>


<!-- end of Vue -->
</div> 

    </body>
</html>
