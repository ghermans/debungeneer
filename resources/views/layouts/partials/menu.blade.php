<header class="header header-two">
  <div class="header-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-xs-6 col-md-2 col-lg-3 logo-box">
          <div class="logo">
            <a href="{{ url('/')}}">
              <img src="https://tbncdn.freelogodesign.org/b17c1d18-94f4-4dd7-8bc5-124b30d68987.png" alt="C De Bungeneer" class="logo-img">
            </a>
          </div>
        </div><!-- .logo-box -->

        <div class="col-xs-6 col-md-10 col-lg-9 right-box">
          <div class="right-box-wrapper">
            <div class="header-icons">
              <button type="button" class="btn btn-success"><i class="fa fa-thumbs-up"></i>&nbsp; Reserveren</button>
            </div><!-- .header-icons -->

            <div class="primary">
              <div class="navbar navbar-default" role="navigation">
                <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".primary .navbar-collapse">
                  <span class="text">Menu</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

                <nav class="collapse collapsing navbar-collapse">
                  <ul class="nav navbar-nav navbar-center">
                    <li>
                      <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="parent item-primary item-bg">
                      <a href="#">Informatie</a>
                      <ul class="sub">
                        <li><a href="#">Huurreglement</a></li>
                        <li><a href="#">Prijslijst dranken</a></li>
                      </ul>
                    </li>
                    <li><a href="{{ url('/kalender') }}">Reserveren</a></li>
                    <li><a href="{{ url('/media') }}">Tarieven</a></li>
                    <li><a href="{{ url('/media') }}">Media</a></li>
                    <li>
                      <a href="{{url('contact')}}">Contact</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div><!-- .primary -->
          </div>
        </div>

      </div>
    </div>
  </div><!-- .header-wrapper -->
</header><!-- .header -->
