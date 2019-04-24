<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">{{ config('app.name', 'Erycoking') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts">Blog</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/posts/create">Create Post</a>
                </li>
          </ul>
        </div>
      </nav>
