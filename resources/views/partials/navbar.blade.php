<div class="collapse navbar-collapse" id="navbarNaviMenu">
    <div class="bg-dark p-4 text-white">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            @include('partials.nav-data', ['active_page' => $active_page])
        </ul>
    </div>
</div>
<nav class="navbar navbar-expand-sm navbar-dark">
    <a class="navbar-brand logo logo-navbar" href="//{{($_SERVER['HTTP_HOST'] == 'by.duck.me.uk' ? 'duck.me.uk' : $_SERVER['HTTP_HOST'])}}">duck.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNaviMenu" aria-controls="navbarNaviMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            @include('partials.nav-data', ['active_page' => $active_page])
        </ul>
    </div>
</nav>