(function (e) {
    e.fn.extend({
        easyPie: function (t) {
            var n = {
                icon: "+",
                navClass: "applePie",
                collapseClass: "pieCollapse",
                slideTop: true
            };
            var t = e.extend(n, t);
            return this.each(function () {
                function r(t) {
                    e("html,body").delay(500).animate({
                        scrollTop: e(t).offset().top - 48
                    }, "fast")
                }
                var n = t;
                if (e(window).width() > 2048) {
                    e("." + n.navClass).superfish({
                        delay: 0,
                        speed: "fast"
                    })
                }
                if (e(window).width() < 2048) {
                    e("li").find("ul").addClass(n.collapseClass);
                    //e("span").remove();
                    e("ul." + n.collapseClass).before("<span>" + n.icon + "</span>")
                }
                e(window).on("resize", function () {
                    if (e(window).width() < 2048) {
                        e("." + n.navClass + " li span").unbind("click").click(function (t) {
                            t.preventDefault();
                            e(this).next().slideToggle(function () {
                                e(this).parent().toggleClass("menuOpen")
                            });
                            if (n.slideTop == true) {
                                r(e(this));
                                return false
                            } else {
                                return false
                            }
                        });
                        e("." + n.navClass).superfish("destroy");
                        if (e("." + n.navClass + " li span").length < 1) {
                            e("." + n.navClass + " li > ul").before("<span>" + n.icon + "</span>")
                        }
                        if (e("." + n.navClass + " ul").is(":visible")) {
                            e("." + n.navClass + " ul:first").hide()
                        }
                        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                            e("." + n.navClass + " ul:first").show()
                        }
                    }
                    if (e(window).width() > 2048) {
                        e("." + n.navClass + " ul:first").show();
                        e("." + n.navClass).superfish({
                            delay: 0,
                            speed: "fast"
                        })
                    }
                });
                e("." + n.navClass + " li span, .menubtn").click(function (t) {
                    t.preventDefault();
                    e(this).next("ul").slideToggle(function (t) {
                        e(this).parent().toggleClass("menuOpen")
                    });
                    if (e("." + n.navClass + "ul:first").is(":visible")) {
                        e(".menubtn").addClass("menuOpen")
                    }
                    if (e("." + n.navClass + "ul:first").is(":hidden")) {
                        e(".menubtn").removeClass("menuOpen")
                    }
                    if (n.slideTop == true) {
                        r(e(this));
                        return false
                    } else {
                        return false
                    }
                })
            })
        }
    })
})(jQuery)