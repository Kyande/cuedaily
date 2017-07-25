<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div id="navbarLogo" class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/home">Cue Daily</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="/home">Home</a></li>
                @if(Auth::check())
                    <li><a href="/post/create">New Post</a></li>
                    <li><a href="/tags">Tags</a></li>
                @endif
            </ul>
            <!-- check if user is logged in -->
            @if(Auth::check())
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp {{ Auth::user()->username }}</a></li>
                <li><a href="/logout"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp Logout</a></li>
            </ul>
            @else
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/registration"><span class="glyphicon glyphicon-user"></span>&nbsp Register</a></li>
                <li><a href="/login"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp Login</a></li>
            </ul>
            @endif
            <ul class="nav navbar-nav navbar-left">
                <li><a href="/about">About</a></li>
            </ul>
            <form class="nav navbar-form navbar-right">
                <div class="input-group">
                    <input type="text" name="searchBox"class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</nav>