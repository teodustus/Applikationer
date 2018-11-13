<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">{{config('app.name')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link " href="/about">About</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link " href="/posts">Posts</a>
            </li>
          </ul>
          <!-- <div class="jumbotron"> -->
          <a class="btn btn-secondary " style="margin-right: 5px;" href="/login" role="button">Login</a>
          
          <a class="btn btn-secondary " href="/register" role="button">Register</a>
          </div>
        </div>
      </nav>
      