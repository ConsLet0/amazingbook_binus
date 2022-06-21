@include("material.scriptlink")
<link rel="stylesheet" href="css/dashboardstyle.css">
@include("layouts.navbar")
<br><br>
<body class="bg-secondary">
    <div class="wrapper bg-white mt-sm-5">
        <h4 class="pb-4 border-bottom">Account settings</h4>
        <div class="d-flex align-items-start py-3 border-bottom"> 
            <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
            <div class="pl-sm-4 pl-2" id="img-section"> 
                <b>Profile Photo</b>
                <p>Use Your Best Picture</p> 
                <input type="file" id="image" name="image">
            </div>
        </div>
        <div class="py-2">
            <div class="row py-2">
                <div class="col-md-6"> 
                    <label for="first_name">First Name</label> 
                    <input type="text" id="first_name" name="first_name" class="bg-light form-control" placeholder="First Name"> 
                </div>
                <div class="col-md-6 pt-md-0 pt-3"> 
                    <label for="middle_name">Middle Name</label> 
                    <input type="text" id="middle_name" name="middle_name" class="bg-light form-control" placeholder="Middle Name"> 
                </div>
            </div>
            <div class="row py-2">
                <div class="col-md-6"> 
                    <label for="email">Email Address</label> 
                    <input type="text" id="email" name="email" class="bg-light form-control" placeholder="Email"> 
                </div>
                <div class="col-md-6 pt-md-0 pt-3"> 
                    <label for="last_name">Last Name</label> 
                    <input type="text" id="last_name" name="last_name" class="bg-light form-control" placeholder="Last Name"> 
                </div>
            </div>
            <div class="row py-2">
                <div class="col-md-6"> 
                    <label for="gender_id">Gender</label> 
                    <select name="gender_id" id="gender_id" class="bg-light">
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select> 
                </div>
                <div class="col-md-6 pt-md-0 pt-3" id="lang"> 
                    <label for="role_id">Roles</label>
                    <div class="arrow"> 
                        <select name="role_id" id="role_id" class="bg-light" disabled>
                            <option>Role</option>
                        </select> 
                    </div>
                </div>
            </div>
            <div class="py-3 pb-4 border-bottom"> <button class="btn btn-success mr-3">Save Changes</button> </div>
            <div class="d-sm-flex align-items-center pt-3" id="deactivate">
                <div> 
                    <b>Deactivate your account</b>
                </div>
                <div class="ml-auto"> <button class="btn danger border border-danger">Deactivate</button> </div>
            </div>
        </div>
    </div>    
</body>
<br><br>    
@include("layouts.footer")
@include("material.scriptjs")