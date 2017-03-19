<div class="blog-masthead">
  <div class="container">
    <nav class="nav blog-nav">
      <a class="nav-link active" href="#">Home</a>
      <a class="nav-link" href="#">New features</a>
      <a class="nav-link" href="#">Press</a>
      <a class="nav-link" href="#">New hires</a>
      <a class="nav-link" href="#">About</a>
      <div class="nav ml-auto">
	      @if (auth()->check())
	      	<a class="nav-link" href="/home">Dashboard</a>
	      	<a class="nav-link" href="/logout">Logout</a>
	      @else
	      	<a class="nav-link" href="/login">Login</a>
	      	<a class="nav-link" href="/register">Register</a>
	      @endif
      </div>
    </nav>
  </div>
</div>