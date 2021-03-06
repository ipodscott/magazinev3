$(document).ready(function() {
    $('.open-overlay').delay(1000).fadeOut(500, function() {});
    $('.all').delay(500).fadeTo(500, 1);
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return !1
            }
        }
    });
    var $container = jQuery('.acc-body'),
        $acc_head = jQuery('.acc-head');
    $acc_head.last().addClass('last');
    $acc_head.on('click', function(e) {
        if (jQuery(this).next().is(':hidden')) {
            $acc_head.removeClass('active').next().slideUp(500);
            jQuery(this).toggleClass('active').next().slideToggle(300)
        } else {
            jQuery(this).toggleClass('active').next().slideToggle(300)
        }
        e.preventDefault()
    });
    
   $(".modal-open").click(function() {
        $('.modal-box').fadeIn();
    });
    
    $(".close-modal").click(function() {
        $('.modal-box').fadeOut();
    });
    
    $(".menu-btn").click(function() {
        $(".menu").addClass('show-menu');
        $(".menu-layer").fadeIn(500)
    });
    $(".menu ul li, .menu ul li a, .close-menu, .menu-layer").click(function() {
        $(".menu").removeClass('show-menu');
        $(".menu-layer").delay(250).fadeOut(500)
    });
    $(".play-audio, .juke-play-audio").click(function() {
        $('.audio-box').fadeIn();
        $('.myAudio').attr("src", $(this).attr("audioUrl"));
        $(".footer-audio").addClass('show-audio');
        document.getElementById('myAudio').play();
        $('.audioplayer').addClass("audioplayer-playing");
        $(".side-buttons").removeClass('show-side');
        $('.btt-footer').fadeOut(500);
        $('.play-audio, .juke-play-audio').removeClass('active');
        $('.play-active').fadeOut();
        $(this).addClass('active').siblings().removeClass('active');
        $(this).children('.play-active').fadeIn();
    });
    $(".audio-box .hide-audio").click(function() {
        $(".footer-audio").removeClass('show-audio');
        $(".side-buttons").addClass('show-side');
        $('.btt-footer').fadeIn(500);
        $('.audio-box').fadeOut()
    });
    $(".show-right").click(function() {
        $('.audio-box').fadeIn();
        $(".footer-audio").addClass('show-audio');
        $(".side-buttons").removeClass('show-side');
        $('.btt-footer').fadeIn(500)
    });
    $(".close-audio, .vid-link").click(function() {
        $(".footer-audio").removeClass('show-audio');
        $(".side-buttons").removeClass('show-side');
        document.getElementById('myAudio').pause();
        $('.btt-footer').fadeIn(500);
        $('.play-audio, .juke-play-audio').removeClass('active');
        $('.audio-box').fadeOut();
        $('.play-active').fadeOut();
    });
    $(function() {
        $('.myAudio').audioPlayer()
    });

    function closeAudio() {
        $(".footer-audio").removeClass('show-audio');
        $(".side-buttons").removeClass('show-side');
        document.getElementById('myAudio').pause();
        $('.btt-footer').fadeIn(500);
        $('.audio-box').fadeOut();
        $('.play-audio, .juke-play-audio').removeClass('active');
        $('.play-active').fadeOut();
    }
    $(".movie-btn").click(function() {
        $('.myVideo').attr("src", $(this).attr("vidUrl"));
        document.getElementById('myVideo').play();
        $('.myVideo').removeClass("hide");
        $('.myVideo').addClass("show");
        $('.youTube').addClass("hide");
        $('.youTube').removeClass("show");
        closeAudio()
    });
    $(".tube-link").click(function() {
        $('.youTube').removeClass("hide");
        $('.youTube').addClass("show");
        $('.myVideo').addClass("hide");
        $('.myVideo').removeClass("show");
        $('.youTube').attr("src", $(this).attr("vidUrl"));
        closeAudio()
    });
    $(".widscreen-btn").click(function() {
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".widescreen-img").addClass("show")
    });
    $(".standard-btn").click(function() {
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".standard-img").addClass("show")
    });
    $(".sixteen-nine-btn").click(function() {
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".sixteen-nine").addClass("show")
    });
    $(".pal-btn").click(function() {
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".pal").addClass("show")
    });
    $(".close").click(function() {
        $(".modal-vid").fadeOut(500);
        $('.youTube, .myVideo').attr('src', '')
    });
    $(".pop-image").click(function() {
        $('.myImage').attr("src", $(this).attr("imgUrl"));
        $('.media-overlay, .close-media, .img-pop-box').fadeIn(500, function() {
            $('.img-holder img').fadeIn(500)
        })
    });
    $(".close-media, .img-holder img").click(function() {
        $('.youTube').attr("src", $(this).attr("vidUrl"));
        $('.media-overlay, .tube-frame, .close-media, .video-box, .img-holder img').fadeOut(500, function() {
            $('.img-pop-box').fadeOut(500);
            $('.myImage').attr("src", 'images/place_holder.jpg')
        });
        document.getElementById('myVideo').pause()
    });
    
    (function($) {
        $.fn.parallax = function(options) {
            var windowHeight = $(window).height();
            var settings = $.extend({
                speed: 0.15
            }, options);
            return this.each(function() {
                var $this = $(this);
                $(document).scroll(function() {
                    var scrollTop = $(window).scrollTop();
                    var offset = $this.offset().top;
                    var height = $this.outerHeight();
                    if (offset + height <= scrollTop || offset >= scrollTop + windowHeight) {
                        return
                    }
                    var yBgPosition = Math.round((offset - scrollTop) * settings.speed);
                    $this.css('background-position', 'center ' + yBgPosition + 'px')
                })
            })
        }
    })(jQuery);
    $('.parallax').parallax({
        speed: -0.125
    });
    
    $('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})
    
});




window.document.onkeydown = function(e) {
    if (!e) e = event;
    if (e.keyCode == 27) {
        $('.img-pop-box, .close-media').fadeOut(500, function() {
            $('.media-overlay').fadeOut(500);
            $('.myImage').attr("src", 'images/place_holder.jpg')
        });
        $('.youTube, .myVideo').attr('src', '');
        $('.modal-vid').fadeOut(500);
        $('.modal-box').fadeOut(500);
        document.getElementById('myVideo').pause();
        $(".menu").removeClass('show-menu');
        $('body').removeClass('fade');
        $('.all').removeClass('fade');
        $(".menu-layer").delay(250).fadeOut(500);
        $('.btt-footer').fadeIn(500)
    }
    if (!e) e = event;
    if (e.keyCode == 39) {
        $(".menu").addClass('show-menu');
        $(".menu-layer").fadeIn(500)
    }
    if (!e) e = event;
    if (e.keyCode == 37) {
        $(".menu").removeClass('show-menu');
        $(".menu-layer").delay(250).fadeOut(500)
    }
};
$(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 40) {
        $('.btt-footer').fadeIn(500)
    } else {
        $('.btt-footer').fadeOut(500)
    }
})