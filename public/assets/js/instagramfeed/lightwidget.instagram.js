! function(e) {
    var t = {};

    function n(i) {
        if (t[i]) return t[i].exports;
        var r = t[i] = {
            i: i,
            l: !1,
            exports: {}
        };
        return e[i].call(r.exports, r, r.exports, n), r.l = !0, r.exports
    }
    n.m = e, n.c = t, n.d = function(e, t, i) {
        n.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: i
        })
    }, n.r = function(e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }, n.t = function(e, t) {
        if (1 & t && (e = n(e)), 8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var i = Object.create(null);
        if (n.r(i), Object.defineProperty(i, "default", {
            enumerable: !0,
            value: e
        }), 2 & t && "string" != typeof e)
            for (var r in e) n.d(i, r, function(t) {
                return e[t]
            }.bind(null, r));
        return i
    }, n.n = function(e) {
        var t = e && e.__esModule ? function() {
            return e.default
        } : function() {
            return e
        };
        return n.d(t, "a", t), t
    }, n.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, n.p = "", n(n.s = 0)
}([function(e, t, n) {
    var i = new(n(1))({
        "username": "jeweleryshoppe",
        "breakpoints": [{
            "base": true,
            "breakpointType": "max",
            "breakpointWidth": 4000,
            "type": "grid",
            "columns": 3,
            "rows": 2,
            "numberOfPhotos": 6,
            "hoverEffect": "show_instagram_icon",
            "captions": {
                "show": false,
                "length": 30,
                "fontSize": 0.9
            },
            "padding": 10,
            "imageFormat": "square"
        }],
        "usePreloader": true,
        "widgetId": "ffd1f5637e125542b95bdc39b7d98b91",
        "mode": "iframe",
        "clickEvent": "post"
    });
    i.registerModule(n(3)), i.registerModule(n(5)), i.registerModule(n(6)), i.registerModule(n(8)), i.registerModule(n(9)), i.registerModule(n(11)), i.registerModule(n(13)), i.registerModule(n(14)), i.registerModule(n(15)), i.init(document.querySelector(".lightwidget"))
}, function(e, t, n) {
    function i(e, t) {
        for (var n = 0; n < t.length; n++) {
            var i = t[n];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
        }
    }
    n(2);
    var r = function() {
        function e(t) {
            ! function(e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }(this, e), this.options = t, this.modules = [], this.dynamicModules = [], this.breakpoints = [], this.activeBreakpoint = null
        }
        var t, n, r;
        return t = e, (n = [{
            key: "registerModule",
            value: function(e) {
                this.modules.push(e)
            }
        }, {
            key: "registerDynamicModule",
            value: function(e) {
                this.dynamicModules.push(e)
            }
        }, {
            key: "init",
            value: function(e) {
                if (!(e instanceof Element)) throw new TypeError("Value passed as domElement is not DOM element");
                this.el = e;
                var t = this.options.breakpoints.filter(function(e) {
                    return !0 === e.base
                }).pop();
                this._initBaseModules(t), this._initDynamicModules()
            }
        }, {
            key: "getWidgetId",
            value: function() {
                return this.options.widgetId
            }
        }, {
            key: "_initBaseModules",
            value: function(e) {
                var t = this;
                this.modules = this.modules.map(function(e) {
                    return new e(t.el)
                }), this.modules.forEach(function(t) {
                    return t.run(e)
                })
            }
        }, {
            key: "_initDynamicModules",
            value: function() {
                var e = this;
                this.dynamicModules = this.dynamicModules.map(function(t) {
                    return new t(e.el)
                }), this.options.breakpoints.forEach(function(t) {
                    var n = window.matchMedia("(max-width:".concat(t.breakpointWidth, "px)"));
                    n.addListener(e._matchMediaListener.bind(e)), e.breakpoints.push(n)
                }), this._matchMediaListener()
            }
        }, {
            key: "_matchMediaListener",
            value: function() {
                var e, t = this,
                    n = this.breakpoints.filter(function(e) {
                        return e.matches
                    }).pop();
                if (void 0 === n) e = this.options.breakpoints.filter(function(e) {
                    return !0 === e.base
                }).pop();
                else {
                    var i = parseInt(n.media.replace(/[^0-9]/g, ""));
                    e = this.options.breakpoints.filter(function(e) {
                        return e.breakpointWidth === i
                    }).pop()
                }
                if (this.activeBreakpoint === e) return !1;
                this.activeBreakpoint = e, this.dynamicModules.forEach(function(e) {
                    e.disable()
                }), this.dynamicModules.forEach(function(e) {
                    e.enable(t.activeBreakpoint)
                })
            }
        }]) && i(t.prototype, n), r && i(t, r), e
    }();
    e.exports = r
}, function(e, t, n) {}, function(e, t, n) {
    function i(e, t) {
        for (var n = 0; n < t.length; n++) {
            var i = t[n];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
        }
    }
    n(4);
    var r = function() {
        function e(t) {
            ! function(e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }(this, e), this.el = t, this.widgetId = this.el.getAttribute("data-id"), this.el.dataset.mode = "iframe"
        }
        var t, n, r;
        return t = e, (n = [{
            key: "_sendPostMessage",
            value: function() {
                var e = {
                    type: "lightwidget_widget_size",
                    widgetId: this.widgetId,
                    size: this.el.offsetHeight
                };
                window.parent.postMessage(JSON.stringify(e), "*")
            }
        }, {
            key: "run",
            value: function() {
                var e = this;
                window.addEventListener("resize", function() {
                    return e._sendPostMessage()
                }, !1), "https" === window.location.protocol && window.addEventListener("deviceorientation", function() {
                    return e._sendPostMessage()
                }, !1), setInterval(function() {
                    return e._sendPostMessage()
                }, 500)
            }
        }]) && i(t.prototype, n), r && i(t, r), e
    }();
    e.exports = r
}, function(e, t, n) {}, function(e, t) {
    function n(e, t) {
        for (var n = 0; n < t.length; n++) {
            var i = t[n];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
        }
    }
    var i = function() {
        function e(t) {
            ! function(e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }(this, e), this.el = t, this.widgetId = this.el.getAttribute("data-id")
        }
        var t, i, r;
        return t = e, (i = [{
            key: "_sendRequest",
            value: function(e) {
                var t = new XMLHttpRequest,
                    n = {
                        a: (new Date).getTime(),
                        b: this.widgetId,
                        c: e.getAttribute("href").replace("www.", "").replace("//instagram.com/", ""),
                        d: "c"
                    },
                    i = Object.keys(n).map(function(e) {
                        return "".concat(encodeURIComponent(e), "=").concat(encodeURIComponent(n[e]))
                    }).join("&");
                t.open("GET", "//lightwidget.com/widgets/_.gif?".concat(i), !0), t.send(null)
            }
        }, {
            key: "run",
            value: function() {
                var e = this;
                !0 !== this.el.classList.contains("lightwidget--click-event-none") && this.el.addEventListener("click", function(t) {
                    for (var n = t.target; n !== document; n = n.parentNode)
                        if (n.classList.contains("lightwidget__link")) {
                            e._sendRequest(n);
                            break
                        }
                })
            }
        }]) && n(t.prototype, i), r && n(t, r), e
    }();
    e.exports = i
}, function(e, t, n) {
    function i(e, t) {
        for (var n = 0; n < t.length; n++) {
            var i = t[n];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
        }
    }
    n(7);
    var r = function() {
        function e(t) {
            ! function(e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }(this, e), this.el = t
        }
        var t, n, r;
        return t = e, (n = [{
            key: "run",
            value: function() {}
        }]) && i(t.prototype, n), r && i(t, r), e
    }();
    e.exports = r
}, function(e, t, n) {}, function(e, t) {
    function n(e, t) {
        for (var n = 0; n < t.length; n++) {
            var i = t[n];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
        }
    }
    var i = function() {
        function e(t) {
            ! function(e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }(this, e), this.el = t
        }
        var t, i, r;
        return t = e, (i = [{
            key: "run",
            value: function() {
                this._addListener("mouseover", this._addHover), this._addListener("focus", this._addHover), this._addListener("mouseout", this._removeHover), this._addListener("blur", this._removeHover)
            }
        }, {
            key: "_addListener",
            value: function(e, t) {
                this.el.addEventListener(e, function(e) {
                    for (var n = e.target; n !== document; n = n.parentNode)
                        if (n.classList.contains("lightwidget__link")) {
                            t(n);
                            break
                        }
                })
            }
        }, {
            key: "_addHover",
            value: function(e) {
                e.classList.add("lightwidget__link--hover")
            }
        }, {
            key: "_removeHover",
            value: function(e) {
                e.classList.remove("lightwidget__link--hover")
            }
        }]) && n(t.prototype, i), r && n(t, r), e
    }();
    e.exports = i
}, function(e, t, n) {
    function i(e, t) {
        for (var n = 0; n < t.length; n++) {
            var i = t[n];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
        }
    }
    n(10);
    var r = function() {
        function e() {
            ! function(e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }(this, e)
        }
        var t, n, r;
        return t = e, (n = [{
            key: "run",
            value: function() {}
        }]) && i(t.prototype, n), r && i(t, r), e
    }();
    e.exports = r
}, function(e, t, n) {}, function(e, t, n) {
    function i(e, t) {
        for (var n = 0; n < t.length; n++) {
            var i = t[n];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
        }
    }
    n(12);
    var r = function() {
        function e(t) {
            ! function(e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }(this, e), this.el = t;
            var n = new Image;
            this.isObjectFitSupported = "object-fit" in n.style, this.interval = null, this.wrappers = []
        }
        var t, n, r;
        return t = e, (n = [{
            key: "run",
            value: function() {
                if (!0 === this.isObjectFitSupported) return !1;
                this._wrapElements(), this.interval = setInterval(this._setImageSrc.bind(this), 500), this.el.classList.add("lightwidget--object-fit-fallback")
            }
        }, {
            key: "_wrapElements",
            value: function() {
                var e = this;
                [].forEach.call(this.el.querySelectorAll(".lightwidget__image-wrapper"), function(t) {
                    var n = document.createElement("div");
                    n.className = "lightwidget__object-fit-wrapper";
                    var i = t.querySelector(".lightwidget__image"),
                        r = i.cloneNode(!0);
                    n.appendChild(r), t.replaceChild(n, i), e.wrappers.push(n)
                })
            }
        }, {
            key: "_setImageSrc",
            value: function() {
                this.wrappers.forEach(function(e) {
                    return e.style.backgroundImage = "url('".concat(e.firstChild.getAttribute("src"), "')")
                })
            }
        }]) && i(t.prototype, n), r && i(t, r), e
    }();
    e.exports = r
}, function(e, t, n) {}, function(e, t) {
    function n(e, t) {
        for (var n = 0; n < t.length; n++) {
            var i = t[n];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
        }
    }
    var i = function() {
        function e(t) {
            ! function(e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }(this, e), this.el = t, this.widgetId = this.el.getAttribute("data-id"), this.style = null
        }
        var t, i, r;
        return t = e, (i = [{
            key: "run",
            value: function(e) {
                this.style = document.createElement("style"), this.style.appendChild(document.createTextNode("")), this.el.parentNode.insertBefore(this.style, this.el.nextSibling), this.style.sheet.insertRule('.lightwidget[data-id="'.concat(this.widgetId, '"] .lightwidget__tile{padding:').concat(e.padding, "px}"), 0), this.style.sheet.insertRule('.lightwidget[data-id="'.concat(this.widgetId, '"] .lightwidget__column{padding-right:').concat(e.padding, "px}"), 1)
            }
        }]) && n(t.prototype, i), r && n(t, r), e
    }();
    e.exports = i
}, function(e, t) {
    function n(e, t) {
        for (var n = 0; n < t.length; n++) {
            var i = t[n];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
        }
    }
    var i = function() {
        function e(t) {
            ! function(e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }(this, e), this.el = t, this.widgetId = this.el.getAttribute("data-id"), this.style = null
        }
        var t, i, r;
        return t = e, (i = [{
            key: "run",
            value: function(e) {
                this.style = document.createElement("style"), this.style.appendChild(document.createTextNode("")), this.el.parentNode.insertBefore(this.style, this.el.nextSibling), this.style.sheet.insertRule('.lightwidget[data-id="'.concat(this.widgetId, '"] .lightwidget__caption{font-size:').concat(e.captions.fontSize, "rem}"), 0), this.style.sheet.insertRule('.lightwidget[data-id="'.concat(this.widgetId, '"] .lightwidget__reactions{font-size:').concat(e.captions.fontSize, "rem}"), 1)
            }
        }]) && n(t.prototype, i), r && n(t, r), e
    }();
    e.exports = i
}, function(e, t, n) {
    function i(e, t) {
        for (var n = 0; n < t.length; n++) {
            var i = t[n];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
        }
    }
    n(16);
    var r = n(17),
        o = n(18),
        a = function() {
            function e(t) {
                ! function(e, t) {
                    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                }(this, e), this.el = t, this.observer = null
            }
            var t, n, a;
            return t = e, (n = [{
                key: "run",
                value: function() {
                    var e = this,
                        t = this.el.querySelectorAll(".lightwidget__photo--loader .lightwidget__image");
                    "IntersectionObserver" in window ? this.observer = new IntersectionObserver(this._observerAction.bind(this), {
                        rootMargin: "50px 0px",
                        threshold: .01
                    }) : "iframe" === this.el.dataset.mode ? this.observer = new o(this._observerAction.bind(this)) : this.observer = new r(this._observerAction.bind(this)), [].forEach.call(t, function(t) {
                        t.addEventListener("load", e._imageLoadEvent), e.observer.observe(t)
                    })
                }
            }, {
                key: "_observerAction",
                value: function(e) {
                    var t = this;
                    e.forEach(function(e) {
                        e.intersectionRatio > 0 && (t.observer.unobserve(e.target), t._updateImgAttributes(e.target))
                    })
                }
            }, {
                key: "_updateImgAttributes",
                value: function(e) {
                    e.srcset = e.dataset.srcset, e.src = e.dataset.src, e.removeAttribute("data-srcset"), e.removeAttribute("data-src")
                }
            }, {
                key: "_imageLoadEvent",
                value: function(e) {
                    var t = e.target;
                    do {
                        t = t.parentElement
                    } while (!1 === t.classList.contains("lightwidget__photo"));
                    t.classList.remove("lightwidget__photo--loader")
                }
            }]) && i(t.prototype, n), a && i(t, a), e
        }();
    e.exports = a
}, function(e, t, n) {}, function(e, t) {
    function n(e, t) {
        for (var n = 0; n < t.length; n++) {
            var i = t[n];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
        }
    }
    var i = function() {
        function e(t) {
            ! function(e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }(this, e), this.observedElements = [], this.ticking = !1, this.viewportHeight = window.innerHeight, this.callback = t, this.triggerCallback = this._debounceTrigger.bind(this), this.updateHeightCallback = this._updateViewportHeight.bind(this), this.interval = null
        }
        var t, i, r;
        return t = e, (i = [{
            key: "observe",
            value: function(e) {
                0 === this.observedElements.length && (window.addEventListener("scroll", this.triggerCallback), window.addEventListener("resize", this.updateHeightCallback), this.interval = setInterval(this.triggerCallback, 100)), this.observedElements.push(e), this._trigger()
            }
        }, {
            key: "unobserve",
            value: function(e) {
                var t = this.observedElements.indexOf(e); - 1 !== t && this.observedElements.splice(t, 1), 0 === this.observedElements.length && (window.removeEventListener("scroll", this.triggerCallback), window.removeEventListener("resize", this.updateHeightCallback), clearInterval(this.interval), this.interval = null)
            }
        }, {
            key: "_updateViewportHeight",
            value: function() {
                this.viewportHeight = window.innerHeight
            }
        }, {
            key: "_debounceTrigger",
            value: function() {
                !1 === this.ticking && window.requestAnimationFrame(this._trigger.bind(this)), this.ticking = !0
            }
        }, {
            key: "_trigger",
            value: function() {
                var e = this,
                    t = [];
                this.observedElements.forEach(function(n) {
                    var i = n.getBoundingClientRect();
                    i.top < e.viewportHeight && i.top >= -i.height && t.push({
                        boundingClientRect: i,
                        target: n,
                        time: Date.now(),
                        intersectionRatio: .5
                    })
                }), this.callback.apply(this, [t, this]), this.ticking = !1
            }
        }]) && n(t.prototype, i), r && n(t, r), e
    }();
    e.exports = i
}, function(e, t) {
    function n(e, t) {
        for (var n = 0; n < t.length; n++) {
            var i = t[n];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
        }
    }
    var i = function() {
        function e(t) {
            ! function(e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }(this, e), this.observedElements = [], this.callback = t
        }
        var t, i, r;
        return t = e, (i = [{
            key: "observe",
            value: function(e) {
                this.observedElements.push(e), this._trigger()
            }
        }, {
            key: "unobserve",
            value: function(e) {
                var t = this.observedElements.indexOf(e); - 1 !== t && this.observedElements.splice(t, 1)
            }
        }, {
            key: "_trigger",
            value: function() {
                var e = [];
                this.observedElements.forEach(function(t) {
                    return e.push({
                        boundingClientRect: {},
                        target: t,
                        time: Date.now(),
                        intersectionRatio: .5
                    })
                }), this.callback.apply(this, [e, this])
            }
        }]) && n(t.prototype, i), r && n(t, r), e
    }();
    e.exports = i
}]);
