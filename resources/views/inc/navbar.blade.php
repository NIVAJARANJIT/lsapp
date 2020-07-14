<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="/">{{config('app.name','lsapp')}}</a>
        
    
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/posts">Blog Posts</a>
                </li>
            </ul>
            <ul class="navbar-nav nav navbar-right">
                <li><a href="/posts/create" class="nav-link">Create post</a></li>
            </ul>
        </div>
    </div>
  </nav>