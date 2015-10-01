(function (n) {
    var t = {}, r = {
        mode: "horizontal",
        slideSelector: "",
        infiniteLoop: !0,
        hideControlOnEnd: !1,
        speed: 500,
        easing: null,
        slideMargin: 0,
        startSlide: 0,
        randomStart: !1,
        captions: !1,
        ticker: !1,
        tickerHover: !1,
        adaptiveHeight: !1,
        adaptiveHeightSpeed: 500,
        video: !1,
        useCSS: !0,
        preloadImages: "visible",
        responsive: !0,
        slideZIndex: 50,
        wrapperClass: "bx-wrapper",
        touchEnabled: !0,
        swipeThreshold: 50,
        oneToOneTouch: !0,
        preventDefaultSwipeX: !0,
        preventDefaultSwipeY: !1,
        pager: !0,
        pagerType: "full",
        pagerShortSeparator: " / ",
        pagerSelector: null,
        buildPager: null,
        pagerCustom: null,
        controls: !0,
        nextText: "Next",
        prevText: "Prev",
        nextSelector: null,
        prevSelector: null,
        autoControls: !1,
        startText: "Start",
        stopText: "Stop",
        autoControlsCombine: !1,
        autoControlsSelector: null,
        auto: !1,
        pause: 4e3,
        autoStart: !0,
        autoDirection: "next",
        autoHover: !1,
        autoDelay: 0,
        autoSlideForOnePage: !1,
        minSlides: 1,
        maxSlides: 1,
        moveSlides: 0,
        slideWidth: 0,
        onSliderLoad: function () {
        },
        onSlideBefore: function () {
        },
        onSlideAfter: function () {
        },
        onSlideNext: function () {
        },
        onSlidePrev: function () {
        },
        onSliderResize: function () {
        }
    };
    n.fn.bxSlider2 = function (u) {
        var f, e;
        if (this.length == 0)return this;
        if (this.length > 1)return this.each(function () {
            n(this).bxSlider(u)
        }), this;
        f = {};
        e = this;
        t.el = this;
        var w = n(window).width(), b = n(window).height(), k = function () {
            f.settings = n.extend({}, r, u);
            f.settings.slideWidth = parseInt(f.settings.slideWidth);
            f.children = e.children(f.settings.slideSelector);
            f.children.length < f.settings.minSlides && (f.settings.minSlides = f.children.length);
            f.children.length < f.settings.maxSlides && (f.settings.maxSlides = f.children.length);
            f.settings.randomStart && (f.settings.startSlide = Math.floor(Math.random() * f.children.length));
            f.active = {index: f.settings.startSlide};
            f.carousel = f.settings.minSlides > 1 || f.settings.maxSlides > 1;
            f.carousel && (f.settings.preloadImages = "all");
            f.minThreshold = f.settings.minSlides * f.settings.slideWidth + (f.settings.minSlides - 1) * f.settings.slideMargin;
            f.maxThreshold = f.settings.maxSlides * f.settings.slideWidth + (f.settings.maxSlides - 1) * f.settings.slideMargin;
            f.working = !1;
            f.controls = {};
            f.interval = null;
            f.animProp = f.settings.mode == "vertical" ? "top" : "left";
            f.usingCSS = f.settings.useCSS && f.settings.mode != "fade" && function () {
                    var i = document.createElement("div"), n = ["WebkitPerspective", "MozPerspective", "OPerspective", "msPerspective"];
                    for (var t in n)if (i.style[n[t]] !== undefined)return f.cssPrefix = n[t].replace("Perspective", "").toLowerCase(), f.animProp = "-" + f.cssPrefix + "-transform", !0;
                    return !1
                }();
            f.settings.mode == "vertical" && (f.settings.maxSlides = f.settings.minSlides);
            e.data("origStyle", e.attr("style"));
            e.children(f.settings.slideSelector).each(function () {
                n(this).data("origStyle", n(this).attr("style"))
            });
            ft()
        }, ft = function () {
            var i, t;
            e.wrap('<div class="' + f.settings.wrapperClass + '"><div class="bx-viewport" ><\/div><\/div>');
            f.viewport = e.parent();
            f.loader = n('<div class="bx-loading" />');
            f.viewport.prepend(f.loader);
            e.css({
                width: f.settings.mode == "horizontal" ? f.children.length * 100 + 215 + "%" : "auto",
                position: "relative"
            });
            f.usingCSS && f.settings.easing ? e.css("-" + f.cssPrefix + "-transition-timing-function", f.settings.easing) : f.settings.easing || (f.settings.easing = "swing");
            i = h();
            f.viewport.css({width: "120%", overflow: "hidden", position: "relative"});
            f.viewport.parent().css({maxWidth: st()});
            f.settings.pager || f.viewport.parent().css({margin: "0 auto 0px"});
            f.children.css({
                float: f.settings.mode == "horizontal" ? "left" : "none",
                listStyle: "none",
                position: "relative"
            });
            f.children.css("width", d());
            f.settings.mode == "horizontal" && f.settings.slideMargin > 0 && f.children.css("marginRight", f.settings.slideMargin);
            f.settings.mode == "vertical" && f.settings.slideMargin > 0 && f.children.css("marginBottom", f.settings.slideMargin);
            f.settings.mode == "fade" && (f.children.css({
                position: "absolute",
                zIndex: 0,
                display: "none"
            }), f.children.eq(f.settings.startSlide).css({zIndex: f.settings.slideZIndex, display: "block"}));
            f.controls.el = n('<div class="bx-controls" />');
            f.settings.captions && at();
            f.active.last = f.settings.startSlide == o() - 1;
            f.settings.video && e.fitVids();
            t = f.children.eq(f.settings.startSlide);
            f.settings.preloadImages == "all" && (t = f.children);
            f.settings.ticker ? f.settings.pager = !1 : (f.settings.pager && ht(), f.settings.controls && ct(), f.settings.auto && f.settings.autoControls && lt(), (f.settings.controls || f.settings.autoControls || f.settings.pager) && f.viewport.after(f.controls.el));
            et(t, ot)
        }, et = function (t, i) {
            var r = t.find("img, iframe").length, u;
            if (r == 0) {
                i();
                return
            }
            u = 0;
            t.find("img, iframe").each(function () {
                n(this).one("load", function () {
                    ++u == r && i()
                }).each(function () {
                    this.complete && n(this).load()
                })
            });
            setTimeout(function () {
                u != r && i()
            }, 5e3)
        }, ot = function () {
            if (f.settings.infiniteLoop && f.settings.mode != "fade" && !f.settings.ticker) {
                var t = f.settings.mode == "vertical" ? f.settings.minSlides : f.settings.maxSlides, i = f.children.slice(0, t).clone().addClass("bx-clone"), r = f.children.slice(-t).clone().addClass("bx-clone");
                e.append(i).prepend(r)
            }
            f.loader.remove();
            g();
            f.settings.mode == "vertical" && (f.settings.adaptiveHeight = !0);
            f.viewport.height(l());
            e.redrawSlider();
            f.settings.onSliderLoad(f.active.index);
            f.initialized = !0;
            f.settings.responsive && n(window).bind("resize", ut);
            f.settings.auto && f.settings.autoStart && (o() > 1 || f.settings.autoSlideForOnePage) && kt();
            f.settings.ticker && dt();
            f.settings.pager && v(f.settings.startSlide);
            f.settings.controls && tt();
            f.settings.touchEnabled && !f.settings.ticker && gt()
        }, l = function () {
            var r = 0, t = n(), u;
            if (f.settings.mode == "vertical" || f.settings.adaptiveHeight)if (f.carousel)for (u = f.settings.moveSlides == 1 ? f.active.index : f.active.index * c(), t = f.children.eq(u), i = 1; i <= f.settings.maxSlides - 1; i++)t = u + i >= f.children.length ? t.add(f.children.eq(i - 1)) : t.add(f.children.eq(u + i)); else t = f.children.eq(f.active.index); else t = f.children;
            return f.settings.mode == "vertical" ? (t.each(function () {
                r += n(this).outerHeight()
            }), f.settings.slideMargin > 0 && (r += f.settings.slideMargin * (f.settings.minSlides - 1))) : r = Math.max.apply(Math, t.map(function () {
                return n(this).outerHeight(!1)
            }).get()), f.viewport.css("box-sizing") == "border-box" ? r += parseFloat(f.viewport.css("padding-top")) + parseFloat(f.viewport.css("padding-bottom")) + parseFloat(f.viewport.css("border-top-width")) + parseFloat(f.viewport.css("border-bottom-width")) : f.viewport.css("box-sizing") == "padding-box" && (r += parseFloat(f.viewport.css("padding-top")) + parseFloat(f.viewport.css("padding-bottom"))), r
        }, st = function () {
            var n = "100%";
            return f.settings.slideWidth > 0 && (n = f.settings.mode == "horizontal" ? f.settings.maxSlides * f.settings.slideWidth + (f.settings.maxSlides - 1) * f.settings.slideMargin : f.settings.slideWidth), n
        }, d = function () {
            var t = f.settings.slideWidth, n = f.viewport.width();
            return f.settings.slideWidth == 0 || f.settings.slideWidth > n && !f.carousel || f.settings.mode == "vertical" ? t = n : f.settings.maxSlides > 1 && f.settings.mode == "horizontal" && (n > f.maxThreshold || n < f.minThreshold && (t = (n - f.settings.slideMargin * (f.settings.minSlides - 1)) / f.settings.minSlides)), t
        }, h = function () {
            var n = 1, t;
            return f.settings.mode == "horizontal" && f.settings.slideWidth > 0 ? f.viewport.width() < f.minThreshold ? n = f.settings.minSlides : f.viewport.width() > f.maxThreshold ? n = f.settings.maxSlides : (t = f.children.first().width() + f.settings.slideMargin, n = Math.floor((f.viewport.width() + f.settings.slideMargin) / t)) : f.settings.mode == "vertical" && (n = f.settings.minSlides), n
        }, o = function () {
            var n = 0, t, i;
            if (f.settings.moveSlides > 0)if (f.settings.infiniteLoop)n = Math.ceil(f.children.length / c()); else for (t = 0, i = 0; t < f.children.length;)++n, t = i + h(), i += f.settings.moveSlides <= h() ? f.settings.moveSlides : h(); else n = Math.ceil(f.children.length / h());
            return n
        }, c = function () {
            return f.settings.moveSlides > 0 && f.settings.moveSlides <= h() ? f.settings.moveSlides : h()
        }, g = function () {
            var t, i, n;
            f.children.length > f.settings.maxSlides && f.active.last && !f.settings.infiniteLoop ? f.settings.mode == "horizontal" ? (t = f.children.last(), n = t.position(), s(-(n.left - (f.viewport.width() - t.outerWidth())), "reset", 0)) : f.settings.mode == "vertical" && (i = f.children.length - f.settings.minSlides, n = f.children.eq(i).position(), s(-n.top, "reset", 0)) : (n = f.children.eq(f.active.index * c()).position(), f.active.index == o() - 1 && (f.active.last = !0), n != undefined && (f.settings.mode == "horizontal" ? s(-n.left, "reset", 0) : f.settings.mode == "vertical" && s(-n.top, "reset", 0)))
        }, s = function (n, t, i, r) {
            var u, o;
            f.usingCSS ? (u = f.settings.mode == "vertical" ? "translate3d(0, " + n + "px, 0)" : "translate3d(" + n + "px, 0, 0)", e.css("-" + f.cssPrefix + "-transition-duration", i / 1e3 + "s"), t == "slide" ? (e.css(f.animProp, u), e.bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function () {
                e.unbind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd");
                y()
            })) : t == "reset" ? e.css(f.animProp, u) : t == "ticker" && (e.css("-" + f.cssPrefix + "-transition-timing-function", "linear"), e.css(f.animProp, u), e.bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function () {
                e.unbind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd");
                s(r.resetValue, "reset", 0);
                a()
            }))) : (o = {}, o[f.animProp] = n, t == "slide" ? e.animate(o, i, f.settings.easing, function () {
                y()
            }) : t == "reset" ? e.css(f.animProp, n) : t == "ticker" && e.animate(o, speed, "linear", function () {
                s(r.resetValue, "reset", 0);
                a()
            }))
        }, nt = function () {
            for (var i, r = "", u = o(), t = 0; t < u; t++)i = "", f.settings.buildPager && n.isFunction(f.settings.buildPager) ? (i = f.settings.buildPager(t), f.pagerEl.addClass("bx-custom-pager")) : (i = t + 1, f.pagerEl.addClass("bx-default-pager")), r += '<div class="bx-pager-item"><a href="" data-slide-index="' + t + '" class="bx-pager-link">' + i + "<\/a><\/div>";
            f.pagerEl.html(r)
        }, ht = function () {
            f.settings.pagerCustom ? f.pagerEl = n(f.settings.pagerCustom) : (f.pagerEl = n('<div class="bx-pager" />'), f.settings.pagerSelector ? n(f.settings.pagerSelector).html(f.pagerEl) : f.controls.el.addClass("bx-has-pager").append(f.pagerEl), nt());
            f.pagerEl.on("click", "a", bt)
        }, ct = function () {
            f.controls.next = n('<a class="bx-next" href="">' + f.settings.nextText + "<\/a>");
            f.controls.prev = n('<a class="bx-prev" href="">' + f.settings.prevText + "<\/a>");
            f.controls.next.bind("click", vt);
            f.controls.prev.bind("click", yt);
            f.settings.nextSelector && n(f.settings.nextSelector).append(f.controls.next);
            f.settings.prevSelector && n(f.settings.prevSelector).append(f.controls.prev);
            f.settings.nextSelector || f.settings.prevSelector || (f.controls.directionEl = n('<div class="bx-controls-direction" />'), f.controls.directionEl.append(f.controls.prev).append(f.controls.next), f.controls.el.addClass("bx-has-controls-direction").append(f.controls.directionEl))
        }, lt = function () {
            f.controls.start = n('<div class="bx-controls-auto-item"><a class="bx-start" href="">' + f.settings.startText + "<\/a><\/div>");
            f.controls.stop = n('<div class="bx-controls-auto-item"><a class="bx-stop" href="">' + f.settings.stopText + "<\/a><\/div>");
            f.controls.autoEl = n('<div class="bx-controls-auto" />');
            f.controls.autoEl.on("click", ".bx-start", pt);
            f.controls.autoEl.on("click", ".bx-stop", wt);
            f.settings.autoControlsCombine ? f.controls.autoEl.append(f.controls.start) : f.controls.autoEl.append(f.controls.start).append(f.controls.stop);
            f.settings.autoControlsSelector ? n(f.settings.autoControlsSelector).html(f.controls.autoEl) : f.controls.el.addClass("bx-has-controls-auto").append(f.controls.autoEl);
            p(f.settings.autoStart ? "stop" : "start")
        }, at = function () {
            f.children.each(function () {
                var t = n(this).find("img:first").attr("title");
                t != undefined && ("" + t).length && n(this).append('<div class="bx-caption"><span>' + t + "<\/span><\/div>")
            })
        }, vt = function (n) {
            f.settings.auto;
            e.goToNextSlide();
            n.preventDefault()
        }, yt = function (n) {
            f.settings.auto;
            e.goToPrevSlide();
            n.preventDefault()
        }, pt = function (n) {
            e.startAuto();
            n.preventDefault()
        }, wt = function (n) {
            e.stopAuto();
            n.preventDefault()
        }, bt = function (t) {
            var i, r;
            f.settings.auto && e.stopAuto();
            i = n(t.currentTarget);
            i.attr("data-slide-index") !== undefined && (r = parseInt(i.attr("data-slide-index")), r != f.active.index && e.goToSlide(r), t.preventDefault())
        }, v = function (t) {
            var i = f.children.length;
            if (f.settings.pagerType == "short") {
                f.settings.maxSlides > 1 && (i = Math.ceil(f.children.length / f.settings.maxSlides));
                f.pagerEl.html(t + 1 + f.settings.pagerShortSeparator + i);
                return
            }
            f.pagerEl.find("a").removeClass("active");
            f.pagerEl.each(function (i, r) {
                n(r).find("a").eq(t).addClass("active")
            })
        }, y = function () {
            if (f.settings.infiniteLoop) {
                var n = "";
                f.active.index == 0 ? n = f.children.eq(0).position() : f.active.index == o() - 1 && f.carousel ? n = f.children.eq((o() - 1) * c()).position() : f.active.index == f.children.length - 1 && (n = f.children.eq(f.children.length - 1).position());
                n && (f.settings.mode == "horizontal" ? s(-n.left, "reset", 0) : f.settings.mode == "vertical" && s(-n.top, "reset", 0))
            }
            f.working = !1;
            f.settings.onSlideAfter(f.children.eq(f.active.index), f.oldIndex, f.active.index)
        }, p = function (n) {
            f.settings.autoControlsCombine ? f.controls.autoEl.html(f.controls[n]) : (f.controls.autoEl.find("a").removeClass("active"), f.controls.autoEl.find("a:not(.bx-" + n + ")").addClass("active"))
        }, tt = function () {
            o() == 1 ? (f.controls.prev.addClass("disabled"), f.controls.next.addClass("disabled")) : !f.settings.infiniteLoop && f.settings.hideControlOnEnd && (f.active.index == 0 ? (f.controls.prev.addClass("disabled"), f.controls.next.removeClass("disabled")) : f.active.index == o() - 1 ? (f.controls.next.addClass("disabled"), f.controls.prev.removeClass("disabled")) : (f.controls.prev.removeClass("disabled"), f.controls.next.removeClass("disabled")))
        }, kt = function () {
            if (f.settings.autoDelay > 0)var n = setTimeout(e.startAuto, f.settings.autoDelay); else e.startAuto();
            f.settings.autoHover && e.hover(function () {
                f.interval && (e.stopAuto(!0), f.autoPaused = !0)
            }, function () {
                f.autoPaused && (e.startAuto(!0), f.autoPaused = null)
            })
        }, dt = function () {
            var i = 0, t;
            f.settings.autoDirection == "next" ? e.append(f.children.clone().addClass("bx-clone")) : (e.prepend(f.children.clone().addClass("bx-clone")), t = f.children.first().position(), i = f.settings.mode == "horizontal" ? -t.left : -t.top);
            s(i, "reset", 0);
            f.settings.pager = !1;
            f.settings.controls = !1;
            f.settings.autoControls = !1;
            f.settings.tickerHover && !f.usingCSS && f.viewport.hover(function () {
                e.stop()
            }, function () {
                var t = 0;
                f.children.each(function () {
                    t += f.settings.mode == "horizontal" ? n(this).outerWidth(!0) : n(this).outerHeight(!0)
                });
                var i = f.settings.speed / t, r = f.settings.mode == "horizontal" ? "left" : "top", u = i * (t - Math.abs(parseInt(e.css(r))));
                a(u)
            });
            a()
        }, a = function (n) {
            var t, i;
            speed = n ? n : f.settings.speed;
            t = {left: 0, top: 0};
            i = {left: 0, top: 0};
            f.settings.autoDirection == "next" ? t = e.find(".bx-clone").first().position() : i = f.children.first().position();
            var r = f.settings.mode == "horizontal" ? -t.left : -t.top, u = f.settings.mode == "horizontal" ? -i.left : -i.top, o = {resetValue: u};
            s(r, "ticker", speed, o)
        }, gt = function () {
            f.touch = {start: {x: 0, y: 0}, end: {x: 0, y: 0}};
            f.viewport.bind("touchstart", ni)
        }, ni = function (n) {
            if (e.stopAuto(), f.working)n.preventDefault(); else {
                f.touch.originalPos = e.position();
                var t = n.originalEvent;
                f.touch.start.x = t.changedTouches[0].pageX;
                f.touch.start.y = t.changedTouches[0].pageY;
                f.viewport.bind("touchmove", it);
                f.viewport.bind("touchend", rt)
            }
        }, it = function (n) {
            var t = n.originalEvent, u = Math.abs(t.changedTouches[0].pageX - f.touch.start.x), e = Math.abs(t.changedTouches[0].pageY - f.touch.start.y), i, r;
            u * 3 > e && f.settings.preventDefaultSwipeX ? n.preventDefault() : e * 3 > u && f.settings.preventDefaultSwipeY && n.preventDefault();
            f.settings.mode != "fade" && f.settings.oneToOneTouch && (i = 0, f.settings.mode == "horizontal" ? (r = t.changedTouches[0].pageX - f.touch.start.x, i = f.touch.originalPos.left + r) : (r = t.changedTouches[0].pageY - f.touch.start.y, i = f.touch.originalPos.top + r), s(i, "reset", 0))
        }, rt = function (n) {
            var r, i, t;
            f.viewport.unbind("touchmove", it);
            r = n.originalEvent;
            i = 0;
            f.touch.end.x = r.changedTouches[0].pageX;
            f.touch.end.y = r.changedTouches[0].pageY;
            f.settings.mode == "fade" ? (t = Math.abs(f.touch.start.x - f.touch.end.x), t >= f.settings.swipeThreshold && (f.touch.start.x > f.touch.end.x ? e.goToNextSlide() : e.goToPrevSlide())) : (t = 0, f.settings.mode == "horizontal" ? (t = f.touch.end.x - f.touch.start.x, i = f.touch.originalPos.left) : (t = f.touch.end.y - f.touch.start.y, i = f.touch.originalPos.top), !f.settings.infiniteLoop && (f.active.index == 0 && t > 0 || f.active.last && t < 0) ? s(i, "reset", 200) : Math.abs(t) >= f.settings.swipeThreshold ? t < 0 ? e.goToNextSlide() : e.goToPrevSlide() : s(i, "reset", 200));
            e.startAuto();
            f.viewport.unbind("touchend", rt)
        }, ut = function () {
            if (f.initialized) {
                var t = n(window).width(), i = n(window).height();
                (w != t || b != i) && (w = t, b = i, e.redrawSlider(), f.settings.onSliderResize.call(e, f.active.index))
            }
        };
        return e.goToSlide = function (t, i) {
            var h, r, a, p, u, w, b;
            if (!f.working && f.active.index != t) {
                f.working = !0;
                f.oldIndex = f.active.index;
                f.active.index = t < 0 ? o() - 1 : t >= o() ? 0 : t;
                f.settings.onSlideBefore(f.children.eq(f.active.index), f.oldIndex, f.active.index);
                if (i == "next")f.settings.onSlideNext(f.children.eq(f.active.index), f.oldIndex, f.active.index); else if (i == "prev")f.settings.onSlidePrev(f.children.eq(f.active.index), f.oldIndex, f.active.index);
                f.active.last = f.active.index >= o() - 1;
                f.settings.pager && v(f.active.index);
                f.settings.controls && tt();
                f.settings.mode == "fade" ? (f.settings.adaptiveHeight && f.viewport.height() != l() && f.viewport.animate({height: l()}, f.settings.adaptiveHeightSpeed), f.children.filter(":visible").fadeOut(f.settings.speed).css({zIndex: 0}), f.children.eq(f.active.index).css("zIndex", f.settings.slideZIndex + 1).fadeIn(f.settings.speed, function () {
                    n(this).css("zIndex", f.settings.slideZIndex);
                    y()
                })) : (f.settings.adaptiveHeight && f.viewport.height() != l() && f.viewport.animate({height: l()}, f.settings.adaptiveHeightSpeed), h = 0, r = {
                    left: 0,
                    top: 0
                }, !f.settings.infiniteLoop && f.carousel && f.active.last ? f.settings.mode == "horizontal" ? (u = f.children.eq(f.children.length - 1), r = u.position(), h = f.viewport.width() - u.outerWidth()) : (a = f.children.length - f.settings.minSlides, r = f.children.eq(a).position()) : f.carousel && f.active.last && i == "prev" ? (p = f.settings.moveSlides == 1 ? f.settings.maxSlides - c() : (o() - 1) * c() - (f.children.length - f.settings.maxSlides), u = e.children(".bx-clone").eq(p), r = u.position()) : i == "next" && f.active.index == 0 ? (r = e.find("> .bx-clone").eq(f.settings.maxSlides).position(), f.active.last = !1) : t >= 0 && (w = t * c(), r = f.children.eq(w).position()), "undefined" != typeof r && (b = f.settings.mode == "horizontal" ? -(r.left - h) : -r.top, s(b, "slide", f.settings.speed)))
            }
        }, e.goToNextSlide = function () {
            if (f.settings.infiniteLoop || !f.active.last) {
                var n = parseInt(f.active.index) + 1;
                e.goToSlide(n, "next")
            }
        }, e.goToPrevSlide = function () {
            if (f.settings.infiniteLoop || f.active.index != 0) {
                var n = parseInt(f.active.index) - 1;
                e.goToSlide(n, "prev")
            }
        }, e.startAuto = function (n) {
            f.interval || (f.interval = setInterval(function () {
                f.working || (f.settings.autoDirection == "next" ? e.goToNextSlide() : e.goToPrevSlide())
            }, f.settings.pause), f.settings.autoControls && n != !0 && p("stop"))
        }, e.stopAuto = function (n) {
            f.interval && (clearInterval(f.interval), f.interval = null, f.settings.autoControls && n != !0 && p("start"))
        }, e.getCurrentSlide = function () {
            return f.active.index
        }, e.getCurrentSlideElement = function () {
            return f.children.eq(f.active.index)
        }, e.getSlideCount = function () {
            return f.children.length
        }, e.redrawSlider = function () {
            f.children.add(e.find(".bx-clone")).width(d());
            f.viewport.css("height", l());
            f.settings.ticker || g();
            f.active.last && (f.active.index = o() - 1);
            f.active.index >= o() && (f.active.last = !0);
            f.settings.pager && !f.settings.pagerCustom && (nt(), v(f.active.index))
        }, e.destroySlider = function () {
            f.initialized && (f.initialized = !1, n(".bx-clone", this).remove(), f.children.each(function () {
                n(this).data("origStyle") != undefined ? n(this).attr("style", n(this).data("origStyle")) : n(this).removeAttr("style")
            }), n(this).data("origStyle") != undefined ? this.attr("style", n(this).data("origStyle")) : n(this).removeAttr("style"), n(this).unwrap().unwrap(), f.controls.el && f.controls.el.remove(), f.controls.next && f.controls.next.remove(), f.controls.prev && f.controls.prev.remove(), f.pagerEl && f.settings.controls && f.pagerEl.remove(), n(".bx-caption", this).remove(), f.controls.autoEl && f.controls.autoEl.remove(), clearInterval(f.interval), f.settings.responsive && n(window).unbind("resize", ut))
        }, e.reloadSlider = function (n) {
            n != undefined && (u = n);
            e.destroySlider();
            k()
        }, k(), this
    }
})(jQuery);
var homePage = function () {
    function u(u) {
        !n && t <= u && u <= i ? (r.addClass("H_cate_fixed"), n = !0) : n && (u < t || i < u) && (r.removeClass("H_cate_fixed"), n = !1)
    }

    var t, i, r = $("#floorjumping"), n = !1;
    return {
        Init: function () {
            $(".listdeal_voucher").bxSlider2({
                minSlides: 7,
                maxSlides: 7,
                moveSlides: 3,
                infiniteLoop: !0,
                slideWidth: 300,
                pager: !1,
                controls: !0
            });
            var n = $("#bannerSlideTop");
            n.bxSlider({
                pager: !0, controls: !0, auto: !0, autoHover: !0, onSliderLoad: function () {
                    n.css("visibility", "visible")
                }
            });
            $("ul.listdeal_four li:last-child").addClass("end");
            $("div#voucherBestSeller ul.listdeal_four li:nth-last-child(2)").addClass("end")
        }, LoadVoucherData: function (n) {
            shellService.ExecuteGetAction("Home/GetVoucherFloor", {voucherCityId: n}).then(function (n) {
                $("#dataVoucher").html(n.html);
                $(".listdeal_voucher").bxSlider2({
                    minSlides: 7,
                    maxSlides: 7,
                    moveSlides: 3,
                    infiniteLoop: !0,
                    slideWidth: 300,
                    pager: !1,
                    controls: !0
                });
                $("div#voucherBestSeller ul.listdeal_four li:last-child").addClass("end");
                $("div#voucherBestSeller ul.listdeal_four li:nth-last-child(2)").addClass("end");
                homePage.InitFloorJumping()
            }).fail(function () {
                common.Alert("Có lỗi xảy ra, vui lòng thử lại.")
            })
        }, InitFloorJumping: function () {
            t = $("#floorjumping").offset().top - 140;
            i = $(".bar_premium2").offset().top - 100
        }, UpdateLayoutHomePage: function (n) {
            u(n)
        }, UpdateFloorJumpingDiv: function () {
            r = $("#floorjumping")
        }
    }
}(), flashsale = function () {
    var t = 1, n = 0, i = 0;
    return {
        Init: function (r, u, f) {
            t = r;
            n = u;
            i = f
        }, GetProductList: function () {
            return shellService.ExecuteGetAction("Home/LoadMoreFlashSale", {pageIndex: ++t, pageSize: n, sortType: i})
        }, SortFlashSale: function (t, i) {
            flashsale.Init(0, n, t);
            flashsale.GetProductList().then(function (n) {
                if (n.ResultCode !== 0) {
                    common.Alert(n.Message);
                    return
                }
                $("#data-flashsale").html(n.Data.Html);
                $.fnCMCountDown_update();
                n.Data.Remain > 0 && $("#remainDeal").text(n.Data.Remain);
                $("ul#order-flashsale>li>a").removeClass("actived");
                $(i).addClass("actived")
            })
        }
    }
}()