@include("material.adminscriptlink");
  <body>
    <div class="container-scroller">
    @include("layouts.navbaradmin")
    <div style="position: relative; top: 150px; right: -150px">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row ">
                    <div class="col-12 grid-margin">
                      <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Ebooks</h4>
                            <hr>
                            <form action="{{ url('/ebookpost') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <h5>Ebooks Title</h5>
                                    <input class="form-control" style="color: white" type="text" name="title">
                                </div>
                                <br>
                                <div>
                                    <h5>Ebooks Author</h5>
                                    <input class="form-control" style="color: white" type="text" name="author">
                                </div>
                                <div>
                                    <br><label>Ebooks Description</label><br/>
                                    <textarea style="color: black" rows = "5" cols = "50" name = "description"></textarea>
                                </div>
                                <br>
                                <td><button type="submit" class="btn btn-outline-warning btn-md" style="height: 40px; width: 120px" >Submit</button></td>
                            </form>
                        </div>
                    </div>
                </div>
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