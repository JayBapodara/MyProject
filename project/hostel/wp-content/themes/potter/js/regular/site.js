! function(a) {
  function b() {
    a(".potter-menu-item-search").hasClass("active") && (a(".potter-menu-search").stop().animate({
      opacity: "0",
      width: "0px"
    }, 250, function() {
      a(this).css({
        display: "none"
      })
    }), setTimeout(function() {
      a(".potter-menu-item-search").removeClass("active").attr("aria-expanded", "false")
    }, 400))
  }

  function c() {
    a("body").hasClass("using-mouse") || a("#navigation > ul").hasClass("potter-sub-menu") && (a(".menu-item-has-children").removeClass("potter-sub-menu-focus"), a(this).parents(".menu-item-has-children").addClass("potter-sub-menu-focus"))
  }
  if (a(".menu-item-has-children").each(function() {
      a(this).attr("aria-haspopup", "true")
    }), a(".scrolltop").length) {
    var g = a(".scrolltop").attr("data-scrolltop-value");
    a(window).scroll(function() {
      a(this).scrollTop() > g ? a(".scrolltop").fadeIn() : a(".scrolltop").fadeOut()
    });
    a(".scrolltop").click(function() {
      a("body").attr("tabindex", "-1").focus();
      a(this).blur();
      a("body, html").animate({
        scrollTop: 0
      }, 500)
    })
  }
  a(".potter-menu-item-search").click(function(c) {
    c.stopPropagation();
    a(".potter-navigation .potter-menu > li").slice(-3).addClass("calculate-width");
    var b = 0;
    if (a(".calculate-width").each(function() {
        b += a(this).outerWidth()
      }), 200 > b) b = 250;
    a(this).hasClass("active") || (a(this).addClass("active").attr("aria-expanded", "true"), a(".potter-menu-search", this).stop().css({
      display: "block"
    }).animate({
      width: b,
      opacity: "1"
    }, 200), a("input[type=search]", this).val("").focus())
  });
  a(window).click(function() {
    b()
  });
  a(document).keyup(function(a) {
    27 === a.keyCode && b()
  });
  a(".wpcf7-form-control-wrap").hover(function() {
    a(".wpcf7-not-valid-tip", this).fadeOut()
  });
  var d = a(".potter-navigation").data("sub-menu-animation-duration");
  a(".potter-sub-menu-animation-fade > .menu-item-has-children").hover(function() {
    a(".sub-menu", this).first().stop().fadeIn(d)
  }, function() {
    a(".sub-menu", this).first().stop().fadeOut(d)
  });
  a(".potter-sub-menu > .menu-item-has-children:not(.potter-mega-menu) .menu-item-has-children").hover(function() {
    a(".sub-menu", this).first().stop().css({
      display: "block"
    }).animate({
      opacity: "1"
    }, d)
  }, function() {
    a(".sub-menu", this).first().stop().animate({
      opacity: "0"
    }, d, function() {
      a(this).css({
        display: "none"
      })
    })
  });
  a(window).load(function() {
    a(".opacity").delay(200).animate({
        opacity: "1"
      },
      200);
    a(".display-none").show();
    a(window).trigger("resize");
    a(window).trigger("scroll")
  });
  var f = a(".potter-page").css("margin-top");
  if (a(window).resize(function() {
      a(".potter-page").width() >= a(window).width() ? a(".potter-page").css({
        "margin-top": "0",
        "margin-bottom": "0"
      }) : a(".potter-page").css({
        "margin-top": f,
        "margin-bottom": f
      })
    }), a(".potter-menu-centered").length) {
    var e = a(".potter-navigation .potter-menu > li > a").length / 2,
      e = (e = Math.floor(e)) - 1;
    a(".potter-menu-centered .logo-container").insertAfter(".potter-navigation .potter-menu >li:eq(" +
      e + ")").css({
      display: "block"
    })
  }
  a("body").mousedown(function() {
    a(this).addClass("using-mouse");
    a(".menu-item-has-children").removeClass("potter-sub-menu-focus")
  });
  a("body").keydown(function() {
    a(this).removeClass("using-mouse")
  });
  a(".potter-menu-container #navigation a").on("focus", c);
  a(".potter-menu-container #navigation a").on("blur", c)
}(jQuery);
jQuery(document).ready(function() {
  var a = jQuery("#main-navbar");
  if (a.length) var b = a.offset().top;
  var c = function() {
    jQuery(window).scrollTop() > b ? (jQuery("#main-navbar").addClass("stickynav"), jQuery(".site-logo").addClass("hide-on-sticky")) : (jQuery("#main-navbar").removeClass("stickynav"), jQuery(".site-logo").removeClass("hide-on-sticky"))
  };
  c();
  jQuery(window).scroll(function() {
    c()
  })
});
jQuery("#potter-menu-toggle").click(function() {
  jQuery(".potter-menu-off-canvas").toggleClass("canvas-visible");
  jQuery(this).toggleClass("canvas-close-nav");
  jQuery(".potter-menu-overlay").toggleClass("menu-overlay-visible")
});
jQuery(".potter-menu-off-canvas .potter-close").click(function() {
  jQuery(".potter-menu-off-canvas").toggleClass("canvas-visible");
  jQuery("#potter-menu-toggle").toggleClass("canvas-close-nav");
  jQuery(".potter-menu-overlay").toggleClass("menu-overlay-visible")
});
