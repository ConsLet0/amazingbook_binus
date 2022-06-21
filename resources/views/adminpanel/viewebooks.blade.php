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
                          <h4 class="card-title">Ebook List</h4>
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                  <tr>
                                      <th>
                                    <div class="form-check form-check-muted m-0">
                                        <h4>Id</h4>
                                    </div>
                                </th>
                                <th> Title </th>
                                <th> Author </th>
                                <th> Update </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                                <tr>
                                  <td>
                                    <div class="form-check form-check-muted m-0">
                                        <h4>{{ $data->id }}</h4>
                                    </div>
                                  </td>
                                  <td>
                                    <span class="ps-2">{{ $data->title }}</span>
                                  </td>
                                  <td>{{ $data->author }}</td>
                                <td><a href="{{ url('/updateoldebooks', $data->id) }}"><button type="button" class="btn btn-outline-light btn-md">Update</button></a></td>
                                <td><a href="{{ url('/deleteebooks', $data->id) }}"><button type="button" class="btn btn-outline-danger btn-md">Delete</button></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                            </table>
                          </div>
                        </div>
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