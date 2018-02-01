@php
    $target_home_host = ($_SERVER['HTTP_HOST'] == 'by.duck.me.uk' ? 'duck.me.uk' : $_SERVER['HTTP_HOST'])
@endphp
<li class="nav-item">
    <a class="nav-link" href="//{{$target_home_host}}">Home.</a>
</li>
<li class="nav-item {{$active_page == 'portfolio' ? 'active' : ''}}">
    <a class="nav-link" href="//by.duck.me.uk">Portfolio. @if($active_page == 'portfolio')<span class="sr-only">(current)</span>@endif</a>
</li>
<li class="nav-item {{$active_page == 'blog' ? 'active' : ''}}">
    <a class="nav-link" href="//blog.duck.me.uk">Blog. @if($active_page == 'blog')<span class="sr-only">(current)</span>@endif</a>
</li>
<li class="nav-item {{$active_page == 'contact' ? 'active' : ''}}">
    <a class="nav-link" href="//{{$target_home_host}}/contact">Contact. @if($active_page == 'contact')<span class="sr-only">(current)</span>@endif</a>
</li>