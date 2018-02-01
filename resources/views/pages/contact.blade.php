<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    @include('partials.header', ['page_name' => 'Contact.'])
</head>
<body>
<div class="container-fluid">
    <div class="fixed-top">
        @include('partials.navbar', ['active_page' => 'contact'])
    </div>

    <div class="site-wrapper-content h-100 container-fluid">
        <div class="row">
            <div class="col-md">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h1 class="display-1">Contact.</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <dl class="row">
                                <dt class="col-sm-3"><h3><span class="fa fa-envelope"></span> Email.</h3></dt>
                                <dd class="col-sm-9">
                                    <p><i>If it's sensitive or confidential, consider signing or encrypting with Keybase (see below)</i></p>
                                    <dl class="row">
                                        <dt class="col-sm-4">Business.</dt>
                                        <dd class="col-sm-8"><p><a href="mailto:andrew@duck.me.uk">andrew@duck.me.uk</a></p></dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-4">Project Flower.</dt>
                                        <dd class="col-sm-8">
                                            <p><a href="mailto:team@projectflower.eu">team@projectflower.eu</a></p>
                                            <p><i>If it's confidential, use <a href="mailto:duck@projectflower.eu">duck@projectflower.eu</a></i></p>
                                        </dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-4">Anything else.</dt>
                                        <dd class="col-sm-8"><p><a href="mailto:me@duck.moe">me@duck.moe</a></p></dd>
                                    </dl>
                                </dd>
                                <dt class="col-sm-3"><h3><span class="fa fa-key"></span> Keybase.</h3></dt>
                                <dd class="col-sm-9"><p><a href="https://keybase.io/luaduck">/luaduck</a></p></dd>
                                <dt class="col-sm-3"><h3><span class="fa fa-twitter"></span> Twitter.</h3></dt>
                                <dd class="col-sm-9"><p><a href="https://twitter.com/duckfullstop">@duckfullstop</a></p></dd>
                                <dt class="col-sm-3"><h3><span class="fa fa-comment-o"></span> Discord.</h3></dt>
                                <dd class="col-sm-9"><p>luaduck#0001</p></dd>
                                <dt class="col-sm-3"><h3><span class="fa fa-skype"></span> Skype.</h3></dt>
                                <dd class="col-sm-9">
                                    <p><a href="skype:leach139">leach139</a></p>
                                    <p><i>Please contact via another method before adding.</i></p>
                                </dd>
                                <dt class="col-sm-3"><h3><span class="fa fa-github"></span> Github.</h3></dt>
                                <dd class="col-sm-9"><p><a href="https://github.com/luaduck">/luaduck</a></p></dd>
                                <dt class="col-sm-3"><h3><span class="fa fa-lastfm"></span> Last.fm.</h3></dt>
                                <dd class="col-sm-9"><p><a href="https://last.fm/leach139">/leach139</a></p></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer text-muted">
        {{$_SERVER['HTTP_HOST']}}, among others  | 3.0</div>
    </div>

</body>
</html>
