<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    @include('partials.header', ['page_name' => 'why do we need..?'])
</head>
<body>
<div class="container-fluid">
    <div class="row align-items-center" style="height: 100vh">
        <div class="col-md-4 col-md-offset-1">
            <div class="logo-frontpage">
                <span class="logo-span">duck.</span>
            </div>
        </div>
        <div class="col-md-7">
            <div class="container">
                <div class="row">
                    <div class="buttons">
                        <div id="link-pflio" class="fp-button">
                            <a href="//by.duck.me.uk" id="pflolink" data-toggle="tooltip" data-placement="top" title="Portfolio."><i class="fa fa-book"></i></a>
                        </div>
                        <div id="link-blog" class="fp-button">
                            <a href="//blog.duck.me.uk/" id="bloglink" data-toggle="tooltip" data-placement="top" title="Blog."><i class="fa fa-rss"></i></a>
                        </div>
                        <div id="link-blog" class="fp-button">
                            <a href="/contact" id="contactlink" data-toggle="tooltip" data-placement="top" title="Contact."><i class="fa fa-comments"></i></a>
                        </div>
                    </div>
                </div>
                {{--
                <div class="row">
                    <div class="alert alert-info">
                        <div id="alert-body" class="fp-alert-body">
                            <i class="fa fa-rss"></i> On the Blog:
                            <div id="alert-data" class="fp-alert-data">
                                <i class="fa fa-spinner fa-pulse"></i>
                                Loading...
                            </div>
                        </div>
                    </div>
                </div>
                --}}
        </div>
    </div>
</div>
<div class="footer text-muted">
    {{$_SERVER['HTTP_HOST']}}, among others  | 3.0</div>
</div>
    <script>
    $(document).ready(function () {
        window.doIndexPresent();
    });
    </script>

</body>
</html>
