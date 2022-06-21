@include("material.adminscriptlink");
  <body>
    <div class="container-scroller">
    @include("layouts.navbaradmin")
    <div style="position: relative; top: 150px; right: -150px">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">Welcome To txAdmin Panel</h1>
              <h4 class="lead">Here the administrator can set about the book and some users. Please select the menu on the left to find out more. Made by Affan with Corona Template</h4>
            </div>
          </div>
    </div>  
      <div class="container-fluid page-body-wrapper">
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item nav-settings d-none d-lg-block">          
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profileDropdown">
                  <div class="navbar-profile">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Hello Administrator !</p>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </nav>
       </div>
@include("material.adminscriptjs")