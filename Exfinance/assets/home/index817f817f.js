! function i(o, s, a) {
    function c(n, e) {
        if (!s[n]) {
            if (!o[n]) {
                var t = "function" == typeof require && require;
                if (!e && t) return t(n, !0);
                if (u) return u(n, !0);
                throw new Error("Cannot find module '" + n + "'")
            }
            var r = s[n] = {
                exports: {}
            };
            o[n][0].call(r.exports, function (e) {
                var t = o[n][1][e];
                return c(t || e)
            }, r, r.exports, i, o, s, a)
        }
        return s[n].exports
    }
    for (var u = "function" == typeof require && require, e = 0; e < a.length; e++) c(a[e]);
    return c
}({
    1: [function (e, t, n) {
        t.exports = e("./lib/axios")
    }, {
        "./lib/axios": 3
    }],
    2: [function (l, e, t) {
        "use strict";
        var d = l("./../utils"),
            f = l("./../core/settle"),
            p = l("./../helpers/buildURL"),
            m = l("./../helpers/parseHeaders"),
            v = l("./../helpers/isURLSameOrigin"),
            h = l("../core/createError");
        e.exports = function (u) {
            return new Promise(function (n, r) {
                var i = u.data,
                    o = u.headers;
                d.isFormData(i) && delete o["Content-Type"];
                var s = new XMLHttpRequest;
                if (u.auth) {
                    var e = u.auth.username || "",
                        t = u.auth.password || "";
                    o.Authorization = "Basic " + btoa(e + ":" + t)
                }
                if (s.open(u.method.toUpperCase(), p(u.url, u.params, u.paramsSerializer), !0), s.timeout = u.timeout, s.onreadystatechange = function () {
                        if (s && 4 === s.readyState && (0 !== s.status || s.responseURL && 0 === s.responseURL.indexOf("file:"))) {
                            var e = "getAllResponseHeaders" in s ? m(s.getAllResponseHeaders()) : null,
                                t = {
                                    data: u.responseType && "text" !== u.responseType ? s.response : s.responseText,
                                    status: s.status,
                                    statusText: s.statusText,
                                    headers: e,
                                    config: u,
                                    request: s
                                };
                            f(n, r, t), s = null
                        }
                    }, s.onabort = function () {
                        s && (r(h("Request aborted", u, "ECONNABORTED", s)), s = null)
                    }, s.onerror = function () {
                        r(h("Network Error", u, null, s)), s = null
                    }, s.ontimeout = function () {
                        r(h("timeout of " + u.timeout + "ms exceeded", u, "ECONNABORTED", s)), s = null
                    }, d.isStandardBrowserEnv()) {
                    var a = l("./../helpers/cookies"),
                        c = (u.withCredentials || v(u.url)) && u.xsrfCookieName ? a.read(u.xsrfCookieName) : void 0;
                    c && (o[u.xsrfHeaderName] = c)
                }
                if ("setRequestHeader" in s && d.forEach(o, function (e, t) {
                        void 0 === i && "content-type" === t.toLowerCase() ? delete o[t] : s.setRequestHeader(t, e)
                    }), u.withCredentials && (s.withCredentials = !0), u.responseType) try {
                    s.responseType = u.responseType
                } catch (e) {
                    if ("json" !== u.responseType) throw e
                }
                "function" == typeof u.onDownloadProgress && s.addEventListener("progress", u.onDownloadProgress), "function" == typeof u.onUploadProgress && s.upload && s.upload.addEventListener("progress", u.onUploadProgress), u.cancelToken && u.cancelToken.promise.then(function (e) {
                    s && (s.abort(), r(e), s = null)
                }), void 0 === i && (i = null), s.send(i)
            })
        }
    }, {
        "../core/createError": 9,
        "./../core/settle": 13,
        "./../helpers/buildURL": 17,
        "./../helpers/cookies": 19,
        "./../helpers/isURLSameOrigin": 21,
        "./../helpers/parseHeaders": 23,
        "./../utils": 25
    }],
    3: [function (e, t, n) {
        "use strict";
        var r = e("./utils"),
            i = e("./helpers/bind"),
            o = e("./core/Axios"),
            s = e("./core/mergeConfig");

        function a(e) {
            var t = new o(e),
                n = i(o.prototype.request, t);
            return r.extend(n, o.prototype, t), r.extend(n, t), n
        }
        var c = a(e("./defaults"));
        c.Axios = o, c.create = function (e) {
            return a(s(c.defaults, e))
        }, c.Cancel = e("./cancel/Cancel"), c.CancelToken = e("./cancel/CancelToken"), c.isCancel = e("./cancel/isCancel"), c.all = function (e) {
            return Promise.all(e)
        }, c.spread = e("./helpers/spread"), t.exports = c, t.exports.default = c
    }, {
        "./cancel/Cancel": 4,
        "./cancel/CancelToken": 5,
        "./cancel/isCancel": 6,
        "./core/Axios": 7,
        "./core/mergeConfig": 12,
        "./defaults": 15,
        "./helpers/bind": 16,
        "./helpers/spread": 24,
        "./utils": 25
    }],
    4: [function (e, t, n) {
        "use strict";

        function r(e) {
            this.message = e
        }
        r.prototype.toString = function () {
            return "Cancel" + (this.message ? ": " + this.message : "")
        }, r.prototype.__CANCEL__ = !0, t.exports = r
    }, {}],
    5: [function (e, t, n) {
        "use strict";
        var r = e("./Cancel");

        function i(e) {
            if ("function" != typeof e) throw new TypeError("executor must be a function.");
            var t;
            this.promise = new Promise(function (e) {
                t = e
            });
            var n = this;
            e(function (e) {
                n.reason || (n.reason = new r(e), t(n.reason))
            })
        }
        i.prototype.throwIfRequested = function () {
            if (this.reason) throw this.reason
        }, i.source = function () {
            var t;
            return {
                token: new i(function (e) {
                    t = e
                }),
                cancel: t
            }
        }, t.exports = i
    }, {
        "./Cancel": 4
    }],
    6: [function (e, t, n) {
        "use strict";
        t.exports = function (e) {
            return !(!e || !e.__CANCEL__)
        }
    }, {}],
    7: [function (e, t, n) {
        "use strict";
        var i = e("./../utils"),
            r = e("../helpers/buildURL"),
            o = e("./InterceptorManager"),
            s = e("./dispatchRequest"),
            a = e("./mergeConfig");

        function c(e) {
            this.defaults = e, this.interceptors = {
                request: new o,
                response: new o
            }
        }
        c.prototype.request = function (e) {
            "string" == typeof e ? (e = arguments[1] || {}).url = arguments[0] : e = e || {}, (e = a(this.defaults, e)).method = e.method ? e.method.toLowerCase() : "get";
            var t = [s, void 0],
                n = Promise.resolve(e);
            for (this.interceptors.request.forEach(function (e) {
                    t.unshift(e.fulfilled, e.rejected)
                }), this.interceptors.response.forEach(function (e) {
                    t.push(e.fulfilled, e.rejected)
                }); t.length;) n = n.then(t.shift(), t.shift());
            return n
        }, c.prototype.getUri = function (e) {
            return e = a(this.defaults, e), r(e.url, e.params, e.paramsSerializer).replace(/^\?/, "")
        }, i.forEach(["delete", "get", "head", "options"], function (n) {
            c.prototype[n] = function (e, t) {
                return this.request(i.merge(t || {}, {
                    method: n,
                    url: e
                }))
            }
        }), i.forEach(["post", "put", "patch"], function (r) {
            c.prototype[r] = function (e, t, n) {
                return this.request(i.merge(n || {}, {
                    method: r,
                    url: e,
                    data: t
                }))
            }
        }), t.exports = c
    }, {
        "../helpers/buildURL": 17,
        "./../utils": 25,
        "./InterceptorManager": 8,
        "./dispatchRequest": 10,
        "./mergeConfig": 12
    }],
    8: [function (e, t, n) {
        "use strict";
        var r = e("./../utils");

        function i() {
            this.handlers = []
        }
        i.prototype.use = function (e, t) {
            return this.handlers.push({
                fulfilled: e,
                rejected: t
            }), this.handlers.length - 1
        }, i.prototype.eject = function (e) {
            this.handlers[e] && (this.handlers[e] = null)
        }, i.prototype.forEach = function (t) {
            r.forEach(this.handlers, function (e) {
                null !== e && t(e)
            })
        }, t.exports = i
    }, {
        "./../utils": 25
    }],
    9: [function (e, t, n) {
        "use strict";
        var s = e("./enhanceError");
        t.exports = function (e, t, n, r, i) {
            var o = new Error(e);
            return s(o, t, n, r, i)
        }
    }, {
        "./enhanceError": 11
    }],
    10: [function (e, t, n) {
        "use strict";
        var r = e("./../utils"),
            i = e("./transformData"),
            o = e("../cancel/isCancel"),
            s = e("../defaults"),
            a = e("./../helpers/isAbsoluteURL"),
            c = e("./../helpers/combineURLs");

        function u(e) {
            e.cancelToken && e.cancelToken.throwIfRequested()
        }
        t.exports = function (t) {
            return u(t), t.baseURL && !a(t.url) && (t.url = c(t.baseURL, t.url)), t.headers = t.headers || {}, t.data = i(t.data, t.headers, t.transformRequest), t.headers = r.merge(t.headers.common || {}, t.headers[t.method] || {}, t.headers || {}), r.forEach(["delete", "get", "head", "post", "put", "patch", "common"], function (e) {
                delete t.headers[e]
            }), (t.adapter || s.adapter)(t).then(function (e) {
                return u(t), e.data = i(e.data, e.headers, t.transformResponse), e
            }, function (e) {
                return o(e) || (u(t), e && e.response && (e.response.data = i(e.response.data, e.response.headers, t.transformResponse))), Promise.reject(e)
            })
        }
    }, {
        "../cancel/isCancel": 6,
        "../defaults": 15,
        "./../helpers/combineURLs": 18,
        "./../helpers/isAbsoluteURL": 20,
        "./../utils": 25,
        "./transformData": 14
    }],
    11: [function (e, t, n) {
        "use strict";
        t.exports = function (e, t, n, r, i) {
            return e.config = t, n && (e.code = n), e.request = r, e.response = i, e.isAxiosError = !0, e.toJSON = function () {
                return {
                    message: this.message,
                    name: this.name,
                    description: this.description,
                    number: this.number,
                    fileName: this.fileName,
                    lineNumber: this.lineNumber,
                    columnNumber: this.columnNumber,
                    stack: this.stack,
                    config: this.config,
                    code: this.code
                }
            }, e
        }
    }, {}],
    12: [function (e, t, n) {
        "use strict";
        var i = e("../utils");
        t.exports = function (t, n) {
            n = n || {};
            var r = {};
            return i.forEach(["url", "method", "params", "data"], function (e) {
                void 0 !== n[e] && (r[e] = n[e])
            }), i.forEach(["headers", "auth", "proxy"], function (e) {
                i.isObject(n[e]) ? r[e] = i.deepMerge(t[e], n[e]) : void 0 !== n[e] ? r[e] = n[e] : i.isObject(t[e]) ? r[e] = i.deepMerge(t[e]) : void 0 !== t[e] && (r[e] = t[e])
            }), i.forEach(["baseURL", "transformRequest", "transformResponse", "paramsSerializer", "timeout", "withCredentials", "adapter", "responseType", "xsrfCookieName", "xsrfHeaderName", "onUploadProgress", "onDownloadProgress", "maxContentLength", "validateStatus", "maxRedirects", "httpAgent", "httpsAgent", "cancelToken", "socketPath"], function (e) {
                void 0 !== n[e] ? r[e] = n[e] : void 0 !== t[e] && (r[e] = t[e])
            }), r
        }
    }, {
        "../utils": 25
    }],
    13: [function (e, t, n) {
        "use strict";
        var i = e("./createError");
        t.exports = function (e, t, n) {
            var r = n.config.validateStatus;
            !r || r(n.status) ? e(n) : t(i("Request failed with status code " + n.status, n.config, null, n.request, n))
        }
    }, {
        "./createError": 9
    }],
    14: [function (e, t, n) {
        "use strict";
        var r = e("./../utils");
        t.exports = function (t, n, e) {
            return r.forEach(e, function (e) {
                t = e(t, n)
            }), t
        }
    }, {
        "./../utils": 25
    }],
    15: [function (a, c, e) {
        (function (e) {
            "use strict";
            var n = a("./utils"),
                r = a("./helpers/normalizeHeaderName"),
                t = {
                    "Content-Type": "application/x-www-form-urlencoded"
                };

            function i(e, t) {
                !n.isUndefined(e) && n.isUndefined(e["Content-Type"]) && (e["Content-Type"] = t)
            }
            var o, s = {
                adapter: (void 0 !== e && "[object process]" === Object.prototype.toString.call(e) ? o = a("./adapters/http") : "undefined" != typeof XMLHttpRequest && (o = a("./adapters/xhr")), o),
                transformRequest: [function (e, t) {
                    return r(t, "Accept"), r(t, "Content-Type"), n.isFormData(e) || n.isArrayBuffer(e) || n.isBuffer(e) || n.isStream(e) || n.isFile(e) || n.isBlob(e) ? e : n.isArrayBufferView(e) ? e.buffer : n.isURLSearchParams(e) ? (i(t, "application/x-www-form-urlencoded;charset=utf-8"), e.toString()) : n.isObject(e) ? (i(t, "application/json;charset=utf-8"), JSON.stringify(e)) : e
                }],
                transformResponse: [function (e) {
                    if ("string" == typeof e) try {
                        e = JSON.parse(e)
                    } catch (e) {}
                    return e
                }],
                timeout: 0,
                xsrfCookieName: "XSRF-TOKEN",
                xsrfHeaderName: "X-XSRF-TOKEN",
                maxContentLength: -1,
                validateStatus: function (e) {
                    return 200 <= e && e < 300
                }
            };
            s.headers = {
                common: {
                    Accept: "application/json, text/plain, */*"
                }
            }, n.forEach(["delete", "get", "head"], function (e) {
                s.headers[e] = {}
            }), n.forEach(["post", "put", "patch"], function (e) {
                s.headers[e] = n.merge(t)
            }), c.exports = s
        }).call(this, a("fsovz6"))
    }, {
        "./adapters/http": 2,
        "./adapters/xhr": 2,
        "./helpers/normalizeHeaderName": 22,
        "./utils": 25,
        fsovz6: 27
    }],
    16: [function (e, t, n) {
        "use strict";
        t.exports = function (n, r) {
            return function () {
                for (var e = new Array(arguments.length), t = 0; t < e.length; t++) e[t] = arguments[t];
                return n.apply(r, e)
            }
        }
    }, {}],
    17: [function (e, t, n) {
        "use strict";
        var s = e("./../utils");

        function a(e) {
            return encodeURIComponent(e).replace(/%40/gi, "@").replace(/%3A/gi, ":").replace(/%24/g, "$").replace(/%2C/gi, ",").replace(/%20/g, "+").replace(/%5B/gi, "[").replace(/%5D/gi, "]")
        }
        t.exports = function (e, t, n) {
            if (!t) return e;
            var r;
            if (n) r = n(t);
            else if (s.isURLSearchParams(t)) r = t.toString();
            else {
                var i = [];
                s.forEach(t, function (e, t) {
                    null != e && (s.isArray(e) ? t += "[]" : e = [e], s.forEach(e, function (e) {
                        s.isDate(e) ? e = e.toISOString() : s.isObject(e) && (e = JSON.stringify(e)), i.push(a(t) + "=" + a(e))
                    }))
                }), r = i.join("&")
            }
            if (r) {
                var o = e.indexOf("#"); - 1 !== o && (e = e.slice(0, o)), e += (-1 === e.indexOf("?") ? "?" : "&") + r
            }
            return e
        }
    }, {
        "./../utils": 25
    }],
    18: [function (e, t, n) {
        "use strict";
        t.exports = function (e, t) {
            return t ? e.replace(/\/+$/, "") + "/" + t.replace(/^\/+/, "") : e
        }
    }, {}],
    19: [function (e, t, n) {
        "use strict";
        var a = e("./../utils");
        t.exports = a.isStandardBrowserEnv() ? {
            write: function (e, t, n, r, i, o) {
                var s = [];
                s.push(e + "=" + encodeURIComponent(t)), a.isNumber(n) && s.push("expires=" + new Date(n).toGMTString()), a.isString(r) && s.push("path=" + r), a.isString(i) && s.push("domain=" + i), !0 === o && s.push("secure"), document.cookie = s.join("; ")
            },
            read: function (e) {
                var t = document.cookie.match(new RegExp("(^|;\\s*)(" + e + ")=([^;]*)"));
                return t ? decodeURIComponent(t[3]) : null
            },
            remove: function (e) {
                this.write(e, "", Date.now() - 864e5)
            }
        } : {
            write: function () {},
            read: function () {
                return null
            },
            remove: function () {}
        }
    }, {
        "./../utils": 25
    }],
    20: [function (e, t, n) {
        "use strict";
        t.exports = function (e) {
            return /^([a-z][a-z\d\+\-\.]*:)?\/\//i.test(e)
        }
    }, {}],
    21: [function (e, t, n) {
        "use strict";
        var s = e("./../utils");
        t.exports = s.isStandardBrowserEnv() ? function () {
            var n, r = /(msie|trident)/i.test(navigator.userAgent),
                i = document.createElement("a");

            function o(e) {
                var t = e;
                return r && (i.setAttribute("href", t), t = i.href), i.setAttribute("href", t), {
                    href: i.href,
                    protocol: i.protocol ? i.protocol.replace(/:$/, "") : "",
                    host: i.host,
                    search: i.search ? i.search.replace(/^\?/, "") : "",
                    hash: i.hash ? i.hash.replace(/^#/, "") : "",
                    hostname: i.hostname,
                    port: i.port,
                    pathname: "/" === i.pathname.charAt(0) ? i.pathname : "/" + i.pathname
                }
            }
            return n = o(window.location.href),
                function (e) {
                    var t = s.isString(e) ? o(e) : e;
                    return t.protocol === n.protocol && t.host === n.host
                }
        }() : function () {
            return !0
        }
    }, {
        "./../utils": 25
    }],
    22: [function (e, t, n) {
        "use strict";
        var i = e("../utils");
        t.exports = function (n, r) {
            i.forEach(n, function (e, t) {
                t !== r && t.toUpperCase() === r.toUpperCase() && (n[r] = e, delete n[t])
            })
        }
    }, {
        "../utils": 25
    }],
    23: [function (e, t, n) {
        "use strict";
        var o = e("./../utils"),
            s = ["age", "authorization", "content-length", "content-type", "etag", "expires", "from", "host", "if-modified-since", "if-unmodified-since", "last-modified", "location", "max-forwards", "proxy-authorization", "referer", "retry-after", "user-agent"];
        t.exports = function (e) {
            var t, n, r, i = {};
            return e && o.forEach(e.split("\n"), function (e) {
                if (r = e.indexOf(":"), t = o.trim(e.substr(0, r)).toLowerCase(), n = o.trim(e.substr(r + 1)), t) {
                    if (i[t] && 0 <= s.indexOf(t)) return;
                    i[t] = "set-cookie" === t ? (i[t] ? i[t] : []).concat([n]) : i[t] ? i[t] + ", " + n : n
                }
            }), i
        }
    }, {
        "./../utils": 25
    }],
    24: [function (e, t, n) {
        "use strict";
        t.exports = function (t) {
            return function (e) {
                return t.apply(null, e)
            }
        }
    }, {}],
    25: [function (e, t, n) {
        "use strict";
        var i = e("./helpers/bind"),
            r = e("is-buffer"),
            o = Object.prototype.toString;

        function s(e) {
            return "[object Array]" === o.call(e)
        }

        function a(e) {
            return null !== e && "object" == typeof e
        }

        function c(e) {
            return "[object Function]" === o.call(e)
        }

        function u(e, t) {
            if (null != e)
                if ("object" != typeof e && (e = [e]), s(e))
                    for (var n = 0, r = e.length; n < r; n++) t.call(null, e[n], n, e);
                else
                    for (var i in e) Object.prototype.hasOwnProperty.call(e, i) && t.call(null, e[i], i, e)
        }
        t.exports = {
            isArray: s,
            isArrayBuffer: function (e) {
                return "[object ArrayBuffer]" === o.call(e)
            },
            isBuffer: r,
            isFormData: function (e) {
                return "undefined" != typeof FormData && e instanceof FormData
            },
            isArrayBufferView: function (e) {
                return "undefined" != typeof ArrayBuffer && ArrayBuffer.isView ? ArrayBuffer.isView(e) : e && e.buffer && e.buffer instanceof ArrayBuffer
            },
            isString: function (e) {
                return "string" == typeof e
            },
            isNumber: function (e) {
                return "number" == typeof e
            },
            isObject: a,
            isUndefined: function (e) {
                return void 0 === e
            },
            isDate: function (e) {
                return "[object Date]" === o.call(e)
            },
            isFile: function (e) {
                return "[object File]" === o.call(e)
            },
            isBlob: function (e) {
                return "[object Blob]" === o.call(e)
            },
            isFunction: c,
            isStream: function (e) {
                return a(e) && c(e.pipe)
            },
            isURLSearchParams: function (e) {
                return "undefined" != typeof URLSearchParams && e instanceof URLSearchParams
            },
            isStandardBrowserEnv: function () {
                return ("undefined" == typeof navigator || "ReactNative" !== navigator.product && "NativeScript" !== navigator.product && "NS" !== navigator.product) && "undefined" != typeof window && "undefined" != typeof document
            },
            forEach: u,
            merge: function n() {
                var r = {};

                function e(e, t) {
                    "object" == typeof r[t] && "object" == typeof e ? r[t] = n(r[t], e) : r[t] = e
                }
                for (var t = 0, i = arguments.length; t < i; t++) u(arguments[t], e);
                return r
            },
            deepMerge: function n() {
                var r = {};

                function e(e, t) {
                    "object" == typeof r[t] && "object" == typeof e ? r[t] = n(r[t], e) : r[t] = "object" == typeof e ? n({}, e) : e
                }
                for (var t = 0, i = arguments.length; t < i; t++) u(arguments[t], e);
                return r
            },
            extend: function (n, e, r) {
                return u(e, function (e, t) {
                    n[t] = r && "function" == typeof e ? i(e, r) : e
                }), n
            },
            trim: function (e) {
                return e.replace(/^\s*/, "").replace(/\s*$/, "")
            }
        }
    }, {
        "./helpers/bind": 16,
        "is-buffer": 26
    }],
    26: [function (e, t, n) {
        t.exports = function (e) {
            return null != e && null != e.constructor && "function" == typeof e.constructor.isBuffer && e.constructor.isBuffer(e)
        }
    }, {}],
    27: [function (e, t, n) {
        var r = t.exports = {};

        function i() {}
        r.nextTick = function () {
            var e = "undefined" != typeof window && window.setImmediate,
                t = "undefined" != typeof window && window.postMessage && window.addEventListener;
            if (e) return function (e) {
                return window.setImmediate(e)
            };
            if (t) {
                var n = [];
                return window.addEventListener("message", function (e) {
                        var t = e.source;
                        t !== window && null !== t || "process-tick" !== e.data || (e.stopPropagation(), 0 < n.length && n.shift()())
                    }, !0),
                    function (e) {
                        n.push(e), window.postMessage("process-tick", "*")
                    }
            }
            return function (e) {
                setTimeout(e, 0)
            }
        }(), r.title = "browser", r.browser = !0, r.env = {}, r.argv = [], r.on = i, r.addListener = i, r.once = i, r.off = i, r.removeListener = i, r.removeAllListeners = i, r.emit = i, r.binding = function (e) {
            throw new Error("process.binding is not supported")
        }, r.cwd = function () {
            return "/"
        }, r.chdir = function (e) {
            throw new Error("process.chdir is not supported")
        }
    }, {}],
    28: [function (e, t, n) {
        "use strict";
        var r, f = e("../../scripts/tickers");

        function p(e) {
            return function (e) {
                if (Array.isArray(e)) {
                    for (var t = 0, n = new Array(e.length); t < e.length; t++) n[t] = e[t];
                    return n
                }
            }(e) || function (e) {
                if (Symbol.iterator in Object(e) || "[object Arguments]" === Object.prototype.toString.call(e)) return Array.from(e)
            }(e) || function () {
                throw new TypeError("Invalid attempt to spread non-iterable instance")
            }()
        }
        var m = ((r = e("axios")) && r.__esModule ? r : {
            default: r
        }).default.get("/config.json").then(function (e) {
            return e.data.demo
        }).catch(function () {
            return ""
        });
        document.addEventListener("DOMContentLoaded", function () {
            var t, n, e, r, i, o, s, a, c, u, l, d;
            ! function () {
                document.querySelector(".slider-section");
                var n = Array.from(document.querySelectorAll(".slider-element")),
                    r = Array.from(document.querySelectorAll(".thumbnail"));
                r.forEach(function (e, t) {
                    return e.addEventListener("click", function () {
                        e.classList.contains("thumbnail--active") || (r.forEach(function (e, t) {
                            e.classList.remove("thumbnail--active"), n[t].classList.remove("slider-element--visible")
                        }), e.classList.add("thumbnail--active"), n[t].classList.add("slider-element--visible"))
                    })
                }), setInterval(function () {
                    n.forEach(function (e, t) {
                        e.classList.contains("slider-element--visible") ? (e.classList.remove("slider-element--visible"), r[t].classList.remove("thumbnail--active")) : (e.classList.add("slider-element--visible"), r[t].classList.add("thumbnail--active"))
                    })
                }, 5e3)
            }(), t = document.querySelector(".slider-section"), n = Array.from(document.querySelectorAll(".slider-element")), e = Math.max.apply(Math, p(n.map(function (e) {
                    return parseFloat(window.getComputedStyle(e).height)
                }))) + 50 + (!t.classList.contains("slider-section--no-tickers") && 1200 < window.innerWidth ? 50 : 0), t.style.height = e + "px", n.forEach(function (e) {
                    return e.style.height = "100%"
                }), (0, f.tickers)().then(function () {
                    n.forEach(function (e) {
                        return e.style.height = "auto"
                    });
                    var e = Math.max.apply(Math, p(n.map(function (e) {
                        return parseFloat(window.getComputedStyle(e).height)
                    }))) + 50 + (!t.classList.contains("slider-section--no-tickers") && 1200 < window.innerWidth ? 50 : 0);
                    t.style.height = e + "px", n.forEach(function (e) {
                        return e.style.height = "100%"
                    })
                }), window.addEventListener("resize", function () {
                    n.forEach(function (e) {
                        return e.style.height = "auto"
                    });
                    var e = Math.max.apply(Math, p(n.map(function (e) {
                        return parseFloat(window.getComputedStyle(e).height)
                    }))) + 50 + (!t.classList.contains("slider-section--no-tickers") && 1200 < window.innerWidth ? 50 : 0);
                    t.style.height = e + "px", n.forEach(function (e) {
                        return e.style.height = "100%"
                    })
                }),
                function () {
                    var e = document.querySelectorAll(".header")[0];
                    if (!e) return;

                    function t() {
                        20 < window.scrollY ? e.classList.add("header--bg") : e.classList.remove("header--bg")
                    }
                    t(), window.addEventListener("scroll", t)
                }(), r = document.querySelectorAll(".header__burger")[0], i = document.querySelectorAll(".mobmenu")[0], r.addEventListener("click", function () {
                    i.classList.toggle("mobmenu--opened")
                }), document.querySelectorAll(".scroll-to-top").forEach(function (e) {
                    e.addEventListener("click", function () {
                        window.scrollTo({
                            top: 0,
                            behavior: "smooth"
                        })
                    })
                }), o = document.querySelectorAll(".main__view-btn"), Array.from(o).forEach(function (e) {
                    return e.addEventListener("click", function () {
                        ! function () {
                            var e = localStorage.getItem("prm-token");
                            if (!e) return !1;
                            var t = JSON.parse(atob(e.split(".")[1]));
                            return t && 0 < 1e3 * t.exp - Date.now()
                        }() ? m.then(function (e) {
                            window.location.href = e || "https://web.primexbt.com/"
                        }): window.location.href = "/my/trade"
                    })
                }), s = document.querySelector(".player-container"), a = document.querySelector(".player-wrapper"), Array.from(document.querySelectorAll(".presentation-button")).forEach(function (e) {
                    return e.addEventListener("click", function () {
                        var e = document.createElement("iframe");
                        e.src = "https://www.youtube.com/embed/xGiijTkGRiU?autoplay=1&loop=1&modestbranding=1&rel=0", e.setAttribute("frameborder", 0), e.classList.add("player"), a.appendChild(e), s.classList.add("player-container--active")
                    })
                }), s.addEventListener("click", function () {
                    s.classList.remove("player-container--active"), a.removeChild(a.querySelector(".player"))
                }), c = document.querySelectorAll(".media-section__message-wrapper"), u = document.querySelectorAll(".media-section__message-bullet"), l = 0, (d = new Glide(".glide", {
                    type: "carousel",
                    perView: 3,
                    breakpoints: {
                        1e3: {
                            perView: 1
                        }
                    },
                    focusAt: "center",
                    loop: !0,
                    draggable: !1
                })).on("move", function () {
                    c[l].classList.remove("media-section__message-wrapper_active"), u[l].classList.remove("media-section__message-bullet_active"), l = d.index, c[d.index].classList.add("media-section__message-wrapper_active"), u[d.index].classList.add("media-section__message-bullet_active")
                }), d.mount()
        })
    }, {
        "../../scripts/tickers": 29,
        axios: 1
    }],
    29: [function (e, t, n) {
        "use strict";
        Object.defineProperty(n, "__esModule", {
            value: !0
        }), n.fmt = u, n.tickers = function () {
            var t = s(".tickers__wrapper")[0];
            return i.default.get(o.PRIME_API + "/tickers").then(function (e) {
                var t, n = Math.round(e.data.data.reduce(function (e, t) {
                    return e + t.volume24h
                }, 0));
                if (n || (n = 8e7 + .013 * Math.round(Date.now() % 864e3 * 7 * 1e3)), l(n), e.data.length < 5) throw "Wrong tickers amount";
                t = e.data.data, document.querySelector(".tickers__items").innerHTML = t.map(d).join("")
            }).catch(function (e) {
                l(8e7 + .013 * Math.round(Date.now() % 864e3 * 7 * 1e3)), t.style.display = "none", console.warn("Fail render tickers", e), document.querySelector(".slider-section").classList.add("slider-section--no-tickers"), document.querySelector(".thumbnails").classList.add("thumbnails--no-tickers")
            })
        }, n.formatter = n.pctFormatter = void 0;
        var r, i = (r = e("axios")) && r.__esModule ? r : {
                default: r
            },
            o = e("./utils");
        var s = document.querySelectorAll.bind(document),
            a = new Intl.NumberFormat("en", {
                style: "decimal",
                maximumFractionDigits: 2,
                minimumFractionDigits: 2,
                useGrouping: !1
            });
        n.pctFormatter = a;
        var c = [new Intl.NumberFormat("en", {
            style: "decimal",
            maximumFractionDigits: 0,
            minimumFractionDigits: 0,
            useGrouping: !0
        }), new Intl.NumberFormat("en", {
            style: "decimal",
            maximumFractionDigits: 1,
            minimumFractionDigits: 1,
            useGrouping: !0
        }), new Intl.NumberFormat("en", {
            style: "decimal",
            maximumFractionDigits: 2,
            minimumFractionDigits: 2,
            useGrouping: !0
        }), new Intl.NumberFormat("en", {
            style: "decimal",
            maximumFractionDigits: 3,
            minimumFractionDigits: 3,
            useGrouping: !0
        }), new Intl.NumberFormat("en", {
            style: "decimal",
            maximumFractionDigits: 4,
            minimumFractionDigits: 4,
            useGrouping: !0
        }), new Intl.NumberFormat("en", {
            style: "decimal",
            maximumFractionDigits: 5,
            minimumFractionDigits: 5,
            useGrouping: !0
        }), new Intl.NumberFormat("en", {
            style: "decimal",
            maximumFractionDigits: 6,
            minimumFractionDigits: 6,
            useGrouping: !0
        }), new Intl.NumberFormat("en", {
            style: "decimal",
            maximumFractionDigits: 7,
            minimumFractionDigits: 7,
            useGrouping: !0
        }), new Intl.NumberFormat("en", {
            style: "decimal",
            maximumFractionDigits: 8,
            minimumFractionDigits: 8,
            useGrouping: !0
        })];

        function u(e, t) {
            return "number" == typeof e ? c[t].format(e) : "—"
        }

        function l(t) {
            var n = Intl.NumberFormat("en", {
                    currency: "USD"
                }),
                r = Math.round(t / 60),
                i = document.querySelectorAll(".main-banner__million"),
                o = 0;
            requestAnimationFrame(function e() {
                o = o < t ? o + r : t, i.forEach(function (e) {
                    return e.innerHTML = "$".concat(n.format(o))
                }), o !== t && requestAnimationFrame(e)
            })
        }

        function d(e) {
            return '\n    <div class="tickers__item">\n        <div class="tickers__header">\n            <div class="tickers__pair">'.concat(e.name, '</div>\n            <div class="\n                tickers__percent \n                ').concat(0 < e.change24h ? "tickers__percent--plus" : "", " \n                ").concat(e.change24h < 0 ? "tickers__percent--minus" : "", '\n            ">\n                ').concat(0 < e.change24h ? "+" : "").concat(a.format(e.change24h), '\n            </div>\n        </div>\n        <div class="tickers__price-usd">\n            <div class="tickers__price-value">').concat(u(e.price, e.quote_scale), '</div>\n            <div class="tickers__price-currency">').concat(e.quote, '</div>\n        </div>\n        <div class="tickers__volume">\n            <div class="tickers__volume-def">Vol:</div>\n            <div class="tickers__volume-value">').concat(u(e.volume24h, 0), '</div>\n            <div class="tickers__volume-currency">').concat(e.quote, '</div>\n        </div>\n        <div class="active-ticker">\n            <div class="active-ticker__head">\n                <div class="active-ticker__pair">').concat(e.description, '</div>\n                <div class="active-ticker__last-price">\n                    <div class="active-ticker__last-price-header"> LAST PRICE:</div>\n                    <div class="active-ticker__last-price-val">').concat(u(e.price, e.quote_scale), '</div>\n                </div>\n                <div class="active-ticker__24-change">\n                    <div class="active-ticker__24-change-header">24 hour change</div>\n                    <div class="\n                        active-ticker__24-change-val\n                        ').concat(0 < e.price - e.open24h ? "active-ticker__24-change-val--plus" : "", "\n                        ").concat(e.price - e.open24h < 0 ? "active-ticker__24-change-val--minus" : "", '\n                    ">\n                        $').concat(u(e.price - e.open24h, e.quote_scale), '\n                    </div>\n                </div>\n                <div class="active-ticker__24-range">\n                    <div class="active-ticker__24-range-header">24 hour range</div>\n                    <div class="active-ticker__24-range-val">$').concat(u(e.open24h, e.quote_scale), " – ").concat(u(e.price, e.quote_scale), ';</div>\n                </div>\n            </div>\n            <div class="active-ticker__book">\n                <div class="active-ticker__book-column">\n                    <div class="active-ticker__book-header">Price (USD)</div>\n                    <div class="active-ticker__book-items">\n                        <div class="active-ticker__book-item active-ticker__buy-1">\n                            ').concat(u(e.buys[0].price, e.quote_scale), '\n                        </div>\n                        <div class="active-ticker__book-item active-ticker__buy-2">\n                            ').concat(u(e.buys[1].price, e.quote_scale), '\n                        </div>\n                        <div class="active-ticker__book-item active-ticker__buy-3">\n                            ').concat(u(e.buys[2].price, e.quote_scale), '\n                        </div>\n                    </div>\n                </div>\n                <div class="active-ticker__book-column">\n                    <div class="active-ticker__book-header">Quantity</div>\n                    <div class="active-ticker__book-items">\n                        <div class="active-ticker__book-item active-ticker__buy-quantity-1">\n                            ').concat(u(e.buys[0].qty, e.base_scale), '\n                        </div>\n                        <div class="active-ticker__book-item active-ticker__buy-quantity-2">\n                            ').concat(u(e.buys[1].qty, e.base_scale), '\n                        </div>\n                        <div class="active-ticker__book-item active-ticker__buy-quantity-3">\n                            ').concat(u(e.buys[2].qty, e.base_scale), '\n                        </div>\n                    </div>\n                </div>\n            </div>\n            <div class="active-ticker__book">\n                <div class="active-ticker__book-column">\n                    <div class="active-ticker__book-header">\n                        Spread of <span class="active-ticker__spread">').concat(u(e.spread, e.quote_scale), '</span>\n                    </div>\n                    <div class="active-ticker__book-items">\n                        <div class="active-ticker__book-item active-ticker__sell-1">\n                            ').concat(u(e.sells[0].price, e.quote_scale), '\n                        </div>\n                        <div class="active-ticker__book-item active-ticker__sell-2">\n                            ').concat(u(e.sells[1].price, e.quote_scale), '\n                        </div>\n                        <div class="active-ticker__book-item active-ticker__sell-3">\n                            ').concat(u(e.sells[2].price, e.quote_scale), '\n                        </div>\n                    </div>\n                </div>\n                <div class="active-ticker__book-column">\n                    <div class="active-ticker__book-header">\n                        &nbsp;\n                    </div>\n                    <div class="active-ticker__book-items">\n                        <div class="active-ticker__book-item active-ticker__sell-quantity-1">\n                            ').concat(u(e.sells[0].qty, e.base_scale), '\n                        </div>\n                        <div class="active-ticker__book-item active-ticker__sell-quantity-2">\n                            ').concat(u(e.sells[1].qty, e.base_scale), '\n                        </div>\n                        <div class="active-ticker__book-item active-ticker__sell-quantity-3">\n                            ').concat(u(e.sells[2].qty, e.base_scale), "\n                        </div>\n                    </div>\n                </div>\n            </div>\n        </div>\n    </div>  \n  ")
        }
        n.formatter = c
    }, {
        "./utils": 30,
        axios: 1
    }],
    30: [function (e, t, n) {
        "use strict";
        Object.defineProperty(n, "__esModule", {
            value: !0
        }), n.disableScroll = function () {
            var e = document.documentElement;
            r = (window.pageYOffset || e.scrollTop) - (e.clientTop || 0), window.addEventListener("scroll", i)
        }, n.enableScroll = function () {
            window.removeEventListener("scroll", i)
        }, n.getUrlParam = function (e) {
            var t = window.location.href;
            return new URL(t).searchParams.get(e)
        }, n.removeParam = function (e) {
            var t = document.location.href,
                n = t.split("?");
            if (2 <= n.length) {
                for (var r = n.shift(), i = n.join("?"), o = encodeURIComponent(e) + "=", s = i.split(/[&;]/g), a = s.length; 0 < a--;) - 1 !== s[a].lastIndexOf(o, 0) && s.splice(a, 1);
                t = r + "?" + s.join("&"), window.history.pushState("", document.title, t)
            }
            return t
        }, n.setCookie = o, n.getCookie = function (e) {
            var t = document.cookie.match(new RegExp("(?:^|; )" + e.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, "\\$1") + "=([^;]*)"));
            return t ? decodeURIComponent(t[1]) : void 0
        }, n.deleteCookie = function (e) {
            o(e, "", {
                expires: -1
            })
        }, n.validateEmail = function (e) {
            return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(String(e).toLowerCase())
        }, n.sendAnalytic = function (e, t) {
            window.fbq && window.fbq("trackCustom", t);
            window.ga && window.ga("gtm1.send", "event", e, t)
        }, n.API_TOKEN = n.PRIME_API = n.API = void 0;
        var r = 0;

        function i() {
            window.scrollTo(0, r)
        }

        function o(e, t, n) {
            var r = (n = n || {}).expires;
            if ("number" == typeof r && r) {
                var i = new Date;
                i.setTime(i.getTime() + 1e3 * r), r = n.expires = i
            }
            r && r.toUTCString && (n.expires = r.toUTCString());
            var o = e + "=" + (t = encodeURIComponent(t));
            for (var s in n) {
                o += "; " + s;
                var a = n[s];
                !0 !== a && (o += "=" + a)
            }
            document.cookie = o
        }
        n.API = "https://app.viral-loops.com/api/v2";
        n.PRIME_API = "https://api.primexbt.com/v1";
        n.API_TOKEN = "RlnFOgDUuNs_mkW38dAZJLG3_Fc"
    }, {}]
}, {}, [28]);