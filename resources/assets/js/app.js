// bootstrap all requirements
window._ = require('lodash');
window.$ = window.jQuery = require('jquery');
import 'bootstrap';

// Analytics (sue me)
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16195489-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

var ListOfStuff = {
    'recent': [
        {'id': 1, 'name': 'Test Post 1!', 'link': 'https://blog.duck.me.uk/post/1'},
        {'id': 2, 'name': 'Test Post 2!', 'link': 'https://blog.duck.me.uk/post/2'}
    ]
};
var articles = parseResponse(ListOfStuff);
function doIndexUpdate() {
    var NewItem = articles.shift();
    articles.push(NewItem);
    changeContent(NewItem);
}
function parseResponse(dict) {
    // contentList is an ordered list of carousel items
    var contentList = [];

    // Iterate recent posts
    for (var item in dict.recent) {
        if (dict.recent.hasOwnProperty(item)) {
            contentList.push(dict.recent[item]);
        }
    }
    // Sort the posts out so the most recent one (the one with the highest ID) goes first
    contentList.sort(function(a, b) {
        return b.id - a.id;
    });
    return contentList
}
function changeContent(content) {
    var alert = $(".alert");
    var alert_body = $("#alert-body");
    var alert_data = $("#alert-data");

    var newbody = '<a href="'+content.link+'">'+content.name+'</a>';

    alert_data.animate({opacity: 0}, 500, function () {
        var oldWidth = alert_body.width();
        alert_data.html(newbody);
        var newWidth = alert_body.width();
        alert_body.width(oldWidth);
        alert_body.animate({width: newWidth}, 'fast', function() {
            alert_body.width('auto');
            alert_data.animate({opacity: 1}, 500);
        });
    });
}

function doIndexPresent() {
    $('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('show');

    //  $('.logo').textfill({ maxFontPixels: 1000 });
    $('span.logo-span').addClass("logo-expose");

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


    var hashVal = window.location.hash.split("#")[1];
    if (hashVal == '404') {
        var NFDo = { "background": "#B00000 fixed" }
        $("body").css(NFDo);
        $(".alert-body").html("Couldn't find what you were after. Try a link above!");
        $(".logo").html("404");
    }

    // Run the RSS feed runner
    // setInterval(doIndexUpdate, 5000);
}

// Kill me.
window.doIndexPresent = doIndexPresent;