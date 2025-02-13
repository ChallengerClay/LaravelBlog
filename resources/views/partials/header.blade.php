<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('posts.public')}}">Posts</a>
          </li>
          <li>
            <a class="nav-link" href="{{route('categories.public')}}">Categories</a>
          </li>
          @guest
          <li>
            <a class="nav-link" href="{{route('login.get')}}">Login</a>
          </li>

          <li>
            <a class="nav-link" href="{{route('signup.get')}}">Signup</a>
          </li>
          @endguest
          @auth
          <li>
            <a class="nav-link" href="{{route('logout')}}">Logout</a>
          </li>
          <li>
            <a class="nav-link d-flex flex-end" href="{{route('logout')}}">{{Auth::user()->email}}</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>