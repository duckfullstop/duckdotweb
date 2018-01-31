<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    @include('partials.header', ['page_name' => 'Contact.'])
</head>
<body data-spy="scroll" data-target="#pflo-scrollspy" data-offset="100">
<div class="container-fluid">
    <div class="fixed-top">
        @include('partials.navbar', ['active_page' => 'portfolio'])
    </div>
    <div class="site-wrapper-content h-100 container-fluid">
        <div class="row">
            <div class="col-md">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h1 class="display-1">Portfolio.</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <ul class="nav nav-pills flex-column sticky-top" style="height: calc(100vh - 4rem); top: 4rem" id="pflo-scrollspy">
                              <li class="nav-item">
                                <a class="nav-link" href="#flower">Flower</a>
                                  <ul class="nav nav-pills flex-column">
                                      <a class="nav-link ml-3 my-1" href="#flower-kailua">Kailua</a>
                                      <a class="nav-link ml-3 my-1" href="#flower-vulkan">Vulkan</a>
                                  </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#tbg">theBIGGAME</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#rttd">Reddit OpenTTD</a>
                              </li>
                            </ul>
                        </div>
                        <div class="col-sm-8">
                            <div class="scrollspy"  style="position: relative;overflow: auto">
                                {{-- Flower --}}
                                <h3 class="display-3" id="flower"><img style="height: 10vh; max-height: 100px" src="http://vulkan.test/assets/img/brand/logo/logo_animated.png" alt="Flower."></h3>
                                <h5>Project Lead / Sysop / Lead Developer</h5>
                                <p class="lead"><i>The ultimate alternate arcade rhythm network. Since 2015.</i></p>
                                <p><span class="fa fa-link"></span> <a href="https://projectflower.eu/about">projectflower.eu/about</a></p>
                                <p><i>Flower</i> is a non-profit, independent, international Arcade Network with a focus on imported Asian Arcade games.
                                    We have grown from small roots with only one arcade, less than 20 players, and 3 co-founders, to having over 15 locations across Europe, over 650 players, and a worldwide development team of over 20 volunteers from a diverse set of backgrounds.
                                </p>
                                <hr>
                                <h3 id="flower-kailua"><img style="height: 5vh; max-height: 75px" src="http://vulkan.test/assets/img/brand/logo/kailua/logo-flength-h150.png" alt="Kailua"></h3>
                                <p>
                                    <i>Kailua</i> is the <b>definitive</b> arcade communication server and user management federation provider. Written in a Python 3 / Flask / SQLAlchemy (MariaDB) / Celery stack (with Bootstrap 4 for user-facing elements), it has been designed from the ground up to become the last word in its field for features, support, and stability.
                                </p>
                                <p>
                                    <i>Kailua</i> is designed around the concept of modules; a module can be anything from a protocol encoding handler, to a user management system, or even a full game support module.
                                    Each module has its own set of database migrations, ensuring that messy migration merges are simply not an issue.
                                </p>
                                <p>
                                    <i>Kailua</i> also features full Localisation and Internationalization support, an extensible REST API (with oauth2 authentication) for client developers (with an integrated web panel for end users to manage authorizations), automated CI build-test-deploy routines with a heavy emphasis on Dockerization, and a whole lot more.
                                    It's no wonder that <i>Kailua</i> powers numerous other alternative networks, providing services to over 2,000 users collectively worldwide (and growing!).
                                </p>
                                <dl class="row">
                                    <dt class="col-sm-3">License</dt>
                                    <dd class="col-sm-9">Closed-source, free licensing subject to application & vetting</dd>
                                    <dt class="col-sm-3">Lines of code</dt>
                                    <dd class="col-sm-9">70,000+</dd>
                                    <dt class="col-sm-3">Size</dt>
                                    <dd class="col-sm-9">~15MB</dd>
                                </dl>
                                <hr>
                                <h3 id="flower-vulkan"><img style="height: 5vh; max-height: 75px" src="http://vulkan.test/assets/img/brand/logo/vulkan/logo-flength-h150.png" alt="Kailua"></h3>
                                <p>
                                    <i>Vulkan</i> is Flower's Web Interface. It's written in PHP with the Laravel 5 framework. It's designed to be a simple, responsive interface for end users, arcade operators, and network operators, with a heavy emphasis on speedy feature implementation.
                                </p>
                                <p>
                                    <i>Vulkan</i> communicates with <i>Kailua</i> using a combination of direct database queries (through Laravel's Eloquent ORM), a Redis pub/sub connection (for real-time updates), and more recently, with authentication over the REST API.
                                    The frontend interface is written with Bootstrap 3 & JQuery, with stylesheets written in SASS and javascript packed down from ECMAScript 5.
                                </p>
                                <p>
                                    <i>Vulkan</i> lets users view detailed information about their own scores, monitor statistics over their career (we even suggest things like timing offset!), track their friends (and enemies!), add credit to their virtual wallets for coinless play, and way more.
                                    For Arcade Operators, it also houses the Arcade Management interface, which lets operators view statistics about their cabinets (including total credits played, estimated income, and popularity over time), self generate new virtual credit vouchers, and more.
                                </p>
                                <p>
                                    While <i>Vulkan</i> is an awesome interface, it's nearing the end of its life, as we look to transition away from direct database queries, moving towards our REST API.
                                </p>
                                <dl class="row">
                                    <dt class="col-sm-3">License</dt>
                                    <dd class="col-sm-9">Closed-source, transitioning to FOSS under GPL</dd>
                                    <dt class="col-sm-3">Lines of code</dt>
                                    <dd class="col-sm-9">10,000+</dd>
                                    <dt class="col-sm-3">Size</dt>
                                    <dd class="col-sm-9">~350MB (including raw, uncompressed graphical assets)</dd>
                                </dl>
                                <hr>
                                {{-- theBIGGAME --}}
                                <h3 class="display-3" id="tbg">theBIGGAME.</h3>
                                <h5>Head of Streaming & AV / Production Runner <small>Since TBG38 / Feburary 2015</small></h5>
                                <p class="lead"><i>IT'S BIG. The South's biggest LAN Party.</i></p>
                                <p><span class="fa fa-link"></span> <a href="https://thebiggame.org">thebiggame.org</a></p>
                                <hr>
                                {{-- OpenTTD --}}
                                <h3 class="display-3" id="rttd">The /r/openttd network.</h3>
                                <h5>Server Operator / Administrator / Moderator</h5>
                                <p class="lead"><i>Transport Tycoon for everyone.</i></p>
                                <p>
                                    <span class="fa fa-reddit-alien"></span> <a href="https://reddit.com/r/openttd">/r/openttd</a>
                                    <span class="fa fa-link"></span> <a href="https://ttdredd.it">ttdredd.it</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer text-muted">
        {{$_SERVER['HTTP_HOST']}}  | 3.0</div>
    </div>
    <script>

    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('show');

    //  $('.logo').textfill({ maxFontPixels: 1000 });

        $('.buttons #pflolink').mouseover(function () {

            $('.box #box').fadeOut('fast', function() {
                $(this).text('About Me').fadeIn('fast');
            });

        });

        $('.buttons #bloglink').mouseover(function () {

            $('.box #box').fadeOut('fast', function() {
                $(this).text('Blog / Ramblings').fadeIn('fast');
            });

        });

        $('.buttons #contactlink').mouseover(function () {

            $('.box #box').fadeOut('fast', function() {
                $(this).text('Contact').fadeIn('fast');
            });

        });

    }
	);
    </script>

</body>
</html>
