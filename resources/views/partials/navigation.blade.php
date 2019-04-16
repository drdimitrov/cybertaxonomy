<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="/"><img src="/images/nmnhs.png" width="40"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item @if(request()->route()->getName() == 'main') active @endif">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item @if(request()->route()->getName() == 'team') active @endif">
                <a class="nav-link" href="/team">Team</a>
            </li>
            <li class="nav-item @if(request()->route()->getName() == 'news') active @endif">
                <a class="nav-link" href="/news">News</a>
            </li>
            <li class="nav-item @if(request()->route()->getName() == 'papers') active @endif">
                <a class="nav-link" href="/papers">Papers</a>
            </li>
            <li class="nav-item @if(request()->route()->getName() == 'gallery') active @endif">
                <a class="nav-link" href="/gallery">Gallery</a>
            </li>
            <li class="nav-item @if(request()->route()->getName() == 'contact') active @endif">
                <a class="nav-link" href="/contact-us">Contact us</a>
            </li>
        </ul>
    </div>
</nav>