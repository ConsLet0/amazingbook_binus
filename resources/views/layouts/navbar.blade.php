<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/navbarstyle.css">
<nav>
    <i id="iconMenu" class="fas fa-bars iconMenu"></i>
    <img class="logo" src="images/logonew.png" alt="">
    <form action="/logout" method="POST">
      @csrf
      <ul id='navbarList' class="navbarList">
      @auth
      <li><a href="/home">Home</a></li>
      <li><a href="/about">About</a></li>
      <li><a href="/collection">Collection</a></li>
      <li><a href="/cart">Cart</a></li>
      <li><a class="logout-button" href="/dashboard">Profile</a></li>
      @auth
        @if(Auth::user()->role_id == '1')
        <li><a class="logout-button" href="/adminhomepage">txAdmin</a></li>
        @endif
      @endauth
      <button type="submit" class="button-logout btn btn-outline-danger">Logout</button>
      @else 
      <li><a class="button" href="/login">Log In</a></li> 
      <li><a class="button" href="/register">Register</a></li>
      @endauth
    </ul>
  </form>
  </nav
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>