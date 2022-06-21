<base href="/public">
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
                            <h4 class="card-title">Update Roles</h4>
                            <hr>
                            <form action="{{ url('/updatenewroles', $data->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div>

                                    <h5>Old Roles : 
                                        @if($data->role_id == "1")
                                        <div class="badge badge-outline-danger">Admin</div>
                                        @else
                                        <div class="badge badge-outline-success">User</div>
                                        @endif
                                    </h5> 
                                    <hr>
                                    <h1></h1>
                                    <br>
                                    <select id="role_id" name="role_id" class="form-select" aria-label="Default select example">
                                        <option value="1">Admin</option>
                                        <option value="2">User</option>
                                    </select>
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