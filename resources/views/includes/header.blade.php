<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-danger fixed-top">
        <style>
            body {background-color: #b3e8ca ;}
        </style>
        <a class="navbar-brand" href="/">MiniProject2</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link " href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="{{route('contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>