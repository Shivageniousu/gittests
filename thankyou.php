<?php
date_default_timezone_set('Asia/Singapore');

$sfid = '';
if(isset($_REQUEST['sfid']))
{
 $sfid = $_REQUEST['sfid'];
}

?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scale Up Entrepreneurs Masterclass</title>
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/iceberg.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <link rel="shortcut icon" type="image/png" href="img/favicon.png" />

  <link rel="stylesheet" href="css/TimeCircles.css" />


  <meta property="og:url" content="https://solutions.geniusu.com/scaleup/digital/webinar/asia/thankyou.php" />
  <meta property="og:image" content="https://solutions.geniusu.com/scaleup/digital/webinar/asia/img/share_a.png" />
  <meta property="og:type" content="Website" />
<meta property="og:title"
    content="Scale Up Entrepreneurs Masterclass" />
  <meta property="og:description"
    content="  3 Steps to Build a Million Dollar Customer Pathway." />



  <script>
    (function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o), m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-5220882-1', 'auto', {
      name: 'resultsFoundation'
    });
    ga('create', 'UA-5220882-34', 'auto', {
      name: 'geniusU'
    });
    ga('resultsFoundation.send', 'pageview');
    ga('geniusU.send', 'pageview');
  </script>

  <!-- Facebook Pixel Code -->
  <script>
    ! function (f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function () {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '179193282683816');

    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=179193282683816&ev=PageView&noscript=1" />

  </noscript>
  <!-- End Facebook Pixel Code -->


  <script type="text/javascript">
    /*! iFrame Resizer (iframeSizer.contentWindow.min.js) - v3.6.1 - 2018-04-29
     *  Desc: Include this file in any page being loaded into an iframe
     *        to force the iframe to resize to the content size.
     *  Requires: iframeResizer.min.js on host page.
     *  Copyright: (c) 2018 David J. Bradshaw - dave@bradshaw.net
     *  License: MIT
     */

    ! function (a) {
      "use strict";

      function b(a, b, c) {
        "addEventListener" in window ? a.addEventListener(b, c, !1) : "attachEvent" in window && a.attachEvent("on" + b,
          c)
      }

      function c(a, b, c) {
        "removeEventListener" in window ? a.removeEventListener(b, c, !1) : "detachEvent" in window && a.detachEvent(
          "on" + b, c)
      }

      function d(a) {
        return a.charAt(0).toUpperCase() + a.slice(1)
      }

      function e(a) {
        var b, c, d, e = null,
          f = 0,
          g = function () {
            f = Ha(), e = null, d = a.apply(b, c), e || (b = c = null)
          };
        return function () {
          var h = Ha();
          f || (f = h);
          var i = xa - (h - f);
          return b = this, c = arguments, i <= 0 || i > xa ? (e && (clearTimeout(e), e = null), f = h, d = a.apply(b,
            c), e || (b = c = null)) : e || (e = setTimeout(g, i)), d
        }
      }

      function f(a) {
        return ma + "[" + oa + "] " + a
      }

      function g(a) {
        la && "object" == typeof window.console && console.log(f(a))
      }

      function h(a) {
        "object" == typeof window.console && console.warn(f(a))
      }

      function i() {
        j(), g("Initialising iFrame (" + location.href + ")"), k(), n(), m("background", W), m("padding", $), A(), s(),
          t(), o(), C(), u(), ia = B(), N("init", "Init message from host page"), Da()
      }

      function j() {
        function b(a) {
          return "true" === a
        }
        var c = ha.substr(na).split(":");
        oa = c[0], X = a !== c[1] ? Number(c[1]) : X, _ = a !== c[2] ? b(c[2]) : _, la = a !== c[3] ? b(c[3]) : la, ja =
          a !== c[4] ? Number(c[4]) : ja, U = a !== c[6] ? b(c[6]) : U, Y = c[7], fa = a !== c[8] ? c[8] : fa, W = c[9],
          $ = c[10], ua = a !== c[11] ? Number(c[11]) : ua, ia.enable = a !== c[12] && b(c[12]), qa = a !== c[13] ? c[
            13] : qa, Aa = a !== c[14] ? c[14] : Aa
      }

      function k() {
        function a() {
          var a = window.iFrameResizer;
          g("Reading data from page: " + JSON.stringify(a)), Ca = "messageCallback" in a ? a.messageCallback : Ca, Da =
            "readyCallback" in a ? a.readyCallback : Da, ta = "targetOrigin" in a ? a.targetOrigin : ta, fa =
            "heightCalculationMethod" in a ? a.heightCalculationMethod : fa, Aa = "widthCalculationMethod" in a ? a
            .widthCalculationMethod : Aa
        }

        function b(a, b) {
          return "function" == typeof a && (g("Setup custom " + b + "CalcMethod"), Fa[b] = a, a = "custom"), a
        }
        "iFrameResizer" in window && Object === window.iFrameResizer.constructor && (a(), fa = b(fa, "height"), Aa = b(
          Aa, "width")), g("TargetOrigin for parent set to: " + ta)
      }

      function l(a, b) {
        return -1 !== b.indexOf("-") && (h("Negative CSS value ignored for " + a), b = ""), b
      }

      function m(b, c) {
        a !== c && "" !== c && "null" !== c && (document.body.style[b] = c, g("Body " + b + ' set to "' + c + '"'))
      }

      function n() {
        a === Y && (Y = X + "px"), m("margin", l("margin", Y))
      }

      function o() {
        document.documentElement.style.height = "", document.body.style.height = "", g(
          'HTML & body height set to "auto"')
      }

      function p(a) {
        var e = {
          add: function (c) {
            function d() {
              N(a.eventName, a.eventType)
            }
            Ga[c] = d, b(window, c, d)
          },
          remove: function (a) {
            var b = Ga[a];
            delete Ga[a], c(window, a, b)
          }
        };
        a.eventNames && Array.prototype.map ? (a.eventName = a.eventNames[0], a.eventNames.map(e[a.method])) : e[a
          .method](a.eventName), g(d(a.method) + " event listener: " + a.eventType)
      }

      function q(a) {
        p({
          method: a,
          eventType: "Animation Start",
          eventNames: ["animationstart", "webkitAnimationStart"]
        }), p({
          method: a,
          eventType: "Animation Iteration",
          eventNames: ["animationiteration", "webkitAnimationIteration"]
        }), p({
          method: a,
          eventType: "Animation End",
          eventNames: ["animationend", "webkitAnimationEnd"]
        }), p({
          method: a,
          eventType: "Input",
          eventName: "input"
        }), p({
          method: a,
          eventType: "Mouse Up",
          eventName: "mouseup"
        }), p({
          method: a,
          eventType: "Mouse Down",
          eventName: "mousedown"
        }), p({
          method: a,
          eventType: "Orientation Change",
          eventName: "orientationchange"
        }), p({
          method: a,
          eventType: "Print",
          eventName: ["afterprint", "beforeprint"]
        }), p({
          method: a,
          eventType: "Ready State Change",
          eventName: "readystatechange"
        }), p({
          method: a,
          eventType: "Touch Start",
          eventName: "touchstart"
        }), p({
          method: a,
          eventType: "Touch End",
          eventName: "touchend"
        }), p({
          method: a,
          eventType: "Touch Cancel",
          eventName: "touchcancel"
        }), p({
          method: a,
          eventType: "Transition Start",
          eventNames: ["transitionstart", "webkitTransitionStart", "MSTransitionStart", "oTransitionStart",
            "otransitionstart"
          ]
        }), p({
          method: a,
          eventType: "Transition Iteration",
          eventNames: ["transitioniteration", "webkitTransitionIteration", "MSTransitionIteration",
            "oTransitionIteration", "otransitioniteration"
          ]
        }), p({
          method: a,
          eventType: "Transition End",
          eventNames: ["transitionend", "webkitTransitionEnd", "MSTransitionEnd", "oTransitionEnd",
            "otransitionend"
          ]
        }), "child" === qa && p({
          method: a,
          eventType: "IFrame Resized",
          eventName: "resize"
        })
      }

      function r(a, b, c, d) {
        return b !== a && (a in c || (h(a + " is not a valid option for " + d + "CalculationMethod."), a = b), g(d +
          ' calculation method set to "' + a + '"')), a
      }

      function s() {
        fa = r(fa, ea, Ia, "height")
      }

      function t() {
        Aa = r(Aa, za, Ja, "width")
      }

      function u() {
        !0 === U ? (q("add"), F()) : g("Auto Resize disabled")
      }

      function v() {
        g("Disable outgoing messages"), ra = !1
      }

      function w() {
        g("Remove event listener: Message"), c(window, "message", S)
      }

      function x() {
        null !== Z && Z.disconnect()
      }

      function y() {
        q("remove"), x(), clearInterval(ka)
      }

      function z() {
        v(), w(), !0 === U && y()
      }

      function A() {
        var a = document.createElement("div");
        a.style.clear = "both", a.style.display = "block", document.body.appendChild(a)
      }

      function B() {
        function c() {
          return {
            x: window.pageXOffset !== a ? window.pageXOffset : document.documentElement.scrollLeft,
            y: window.pageYOffset !== a ? window.pageYOffset : document.documentElement.scrollTop
          }
        }

        function d(a) {
          var b = a.getBoundingClientRect(),
            d = c();
          return {
            x: parseInt(b.left, 10) + parseInt(d.x, 10),
            y: parseInt(b.top, 10) + parseInt(d.y, 10)
          }
        }

        function e(b) {
          function c(a) {
            var b = d(a);
            g("Moving to in page link (#" + e + ") at x: " + b.x + " y: " + b.y), R(b.y, b.x, "scrollToOffset")
          }
          var e = b.split("#")[1] || b,
            f = decodeURIComponent(e),
            h = document.getElementById(f) || document.getElementsByName(f)[0];
          a !== h ? c(h) : (g("In page link (#" + e + ") not found in iFrame, so sending to parent"), R(0, 0,
            "inPageLink", "#" + e))
        }

        function f() {
          "" !== location.hash && "#" !== location.hash && e(location.href)
        }

        function i() {
          function a(a) {
            function c(a) {
              a.preventDefault(), e(this.getAttribute("href"))
            }
            "#" !== a.getAttribute("href") && b(a, "click", c)
          }
          Array.prototype.forEach.call(document.querySelectorAll('a[href^="#"]'), a)
        }

        function j() {
          b(window, "hashchange", f)
        }

        function k() {
          setTimeout(f, ba)
        }

        function l() {
          Array.prototype.forEach && document.querySelectorAll ? (g("Setting up location.hash handlers"), i(), j(),
            k()) : h("In page linking not fully supported in this browser! (See README.md for IE8 workaround)")
        }
        return ia.enable ? l() : g("In page linking not enabled"), {
          findTarget: e
        }
      }

      function C() {
        g("Enable public methods"), Ba.parentIFrame = {
          autoResize: function (a) {
            return !0 === a && !1 === U ? (U = !0, u()) : !1 === a && !0 === U && (U = !1, y()), U
          },
          close: function () {
            R(0, 0, "close"), z()
          },
          getId: function () {
            return oa
          },
          getPageInfo: function (a) {
            "function" == typeof a ? (Ea = a, R(0, 0, "pageInfo")) : (Ea = function () {}, R(0, 0, "pageInfoStop"))
          },
          moveToAnchor: function (a) {
            ia.findTarget(a)
          },
          reset: function () {
            Q("parentIFrame.reset")
          },
          scrollTo: function (a, b) {
            R(b, a, "scrollTo")
          },
          scrollToOffset: function (a, b) {
            R(b, a, "scrollToOffset")
          },
          sendMessage: function (a, b) {
            R(0, 0, "message", JSON.stringify(a), b)
          },
          setHeightCalculationMethod: function (a) {
            fa = a, s()
          },
          setWidthCalculationMethod: function (a) {
            Aa = a, t()
          },
          setTargetOrigin: function (a) {
            g("Set targetOrigin: " + a), ta = a
          },
          size: function (a, b) {
            N("size", "parentIFrame.size(" + (a || "") + (b ? "," + b : "") + ")", a, b)
          }
        }
      }

      function D() {
        0 !== ja && (g("setInterval: " + ja + "ms"), ka = setInterval(function () {
          N("interval", "setInterval: " + ja)
        }, Math.abs(ja)))
      }

      function E() {
        function b(a) {
          function b(a) {
            !1 === a.complete && (g("Attach listeners to " + a.src), a.addEventListener("load", f, !1), a
              .addEventListener("error", h, !1), k.push(a))
          }
          "attributes" === a.type && "src" === a.attributeName ? b(a.target) : "childList" === a.type && Array.prototype
            .forEach.call(a.target.querySelectorAll("img"), b)
        }

        function c(a) {
          k.splice(k.indexOf(a), 1)
        }

        function d(a) {
          g("Remove listeners from " + a.src), a.removeEventListener("load", f, !1), a.removeEventListener("error", h, !
            1), c(a)
        }

        function e(b, c, e) {
          d(b.target), N(c, e + ": " + b.target.src, a, a)
        }

        function f(a) {
          e(a, "imageLoad", "Image loaded")
        }

        function h(a) {
          e(a, "imageLoadFailed", "Image load failed")
        }

        function i(a) {
          N("mutationObserver", "mutationObserver: " + a[0].target + " " + a[0].type), a.forEach(b)
        }

        function j() {
          var a = document.querySelector("body"),
            b = {
              attributes: !0,
              attributeOldValue: !1,
              characterData: !0,
              characterDataOldValue: !1,
              childList: !0,
              subtree: !0
            };
          return m = new l(i), g("Create body MutationObserver"), m.observe(a, b), m
        }
        var k = [],
          l = window.MutationObserver || window.WebKitMutationObserver,
          m = j();
        return {
          disconnect: function () {
            "disconnect" in m && (g("Disconnect body MutationObserver"), m.disconnect(), k.forEach(d))
          }
        }
      }

      function F() {
        var a = 0 > ja;
        window.MutationObserver || window.WebKitMutationObserver ? a ? D() : Z = E() : (g(
          "MutationObserver not supported in this browser!"), D())
      }

      function G(a, b) {
        function c(a) {
          if (/^\d+(px)?$/i.test(a)) return parseInt(a, V);
          var c = b.style.left,
            d = b.runtimeStyle.left;
          return b.runtimeStyle.left = b.currentStyle.left, b.style.left = a || 0, a = b.style.pixelLeft, b.style.left =
            c, b.runtimeStyle.left = d, a
        }
        var d = 0;
        return b = b || document.body, "defaultView" in document && "getComputedStyle" in document.defaultView ? (d =
            document.defaultView.getComputedStyle(b, null), d = null !== d ? d[a] : 0) : d = c(b.currentStyle[a]),
          parseInt(d, V)
      }

      function H(a) {
        a > xa / 2 && (xa = 2 * a, g("Event throttle increased to " + xa + "ms"))
      }

      function I(a, b) {
        for (var c = b.length, e = 0, f = 0, h = d(a), i = Ha(), j = 0; j < c; j++)(e = b[j].getBoundingClientRect()[
          a] + G("margin" + h, b[j])) > f && (f = e);
        return i = Ha() - i, g("Parsed " + c + " HTML elements"), g("Element position calculated in " + i + "ms"), H(i),
          f
      }

      function J(a) {
        return [a.bodyOffset(), a.bodyScroll(), a.documentElementOffset(), a.documentElementScroll()]
      }

      function K(a, b) {
        function c() {
          return h("No tagged elements (" + b + ") found on page"), document.querySelectorAll("body *")
        }
        var d = document.querySelectorAll("[" + b + "]");
        return 0 === d.length && c(), I(a, d)
      }

      function L() {
        return document.querySelectorAll("body *")
      }

      function M(b, c, d, e) {
        function f() {
          da = m, ya = n, R(da, ya, b)
        }

        function h() {
          function b(a, b) {
            return !(Math.abs(a - b) <= ua)
          }
          return m = a !== d ? d : Ia[fa](), n = a !== e ? e : Ja[Aa](), b(da, m) || _ && b(ya, n)
        }

        function i() {
          return !(b in {
            init: 1,
            interval: 1,
            size: 1
          })
        }

        function j() {
          return fa in pa || _ && Aa in pa
        }

        function k() {
          g("No change in size detected")
        }

        function l() {
          i() && j() ? Q(c) : b in {
            interval: 1
          } || k()
        }
        var m, n;
        h() || "init" === b ? (O(), f()) : l()
      }

      function N(a, b, c, d) {
        function e() {
          a in {
            reset: 1,
            resetPage: 1,
            init: 1
          } || g("Trigger event: " + b)
        }

        function f() {
          return va && a in aa
        }
        f() ? g("Trigger event cancelled: " + a) : (e(), "init" === a ? M(a, b, c, d) : Ka(a, b, c, d))
      }

      function O() {
        va || (va = !0, g("Trigger event lock on")), clearTimeout(wa), wa = setTimeout(function () {
          va = !1, g("Trigger event lock off"), g("--")
        }, ba)
      }

      function P(a) {
        da = Ia[fa](), ya = Ja[Aa](), R(da, ya, a)
      }

      function Q(a) {
        var b = fa;
        fa = ea, g("Reset trigger event: " + a), O(), P("reset"), fa = b
      }

      function R(b, c, d, e, f) {
        function h() {
          a === f ? f = ta : g("Message targetOrigin: " + f)
        }

        function i() {
          var h = b + ":" + c,
            i = oa + ":" + h + ":" + d + (a !== e ? ":" + e : "");
          g("Sending message to host page (" + i + ")"), sa.postMessage(ma + i, f)
        }!0 === ra && (h(), i())
      }

      function S(a) {
        function c() {
          return ma === ("" + a.data).substr(0, na)
        }

        function d() {
          return a.data.split("]")[1].split(":")[0]
        }

        function e() {
          return a.data.substr(a.data.indexOf(":") + 1)
        }

        function f() {
          return !("undefined" != typeof module && module.exports) && "iFrameResize" in window
        }

        function j() {
          return a.data.split(":")[2] in {
            true: 1,
            false: 1
          }
        }

        function k() {
          var b = d();
          b in m ? m[b]() : f() || j() || h("Unexpected message (" + a.data + ")")
        }

        function l() {
          !1 === ca ? k() : j() ? m.init() : g('Ignored message of type "' + d() + '". Received before initialization.')
        }
        var m = {
          init: function () {
            function c() {
              ha = a.data, sa = a.source, i(), ca = !1, setTimeout(function () {
                ga = !1
              }, ba)
            }
            "interactive" === document.readyState || "complete" === document.readyState ? c() : (g(
              "Waiting for page ready"), b(window, "readystatechange", m.initFromParent))
          },
          reset: function () {
            ga ? g("Page reset ignored by init") : (g("Page size reset by host page"), P("resetPage"))
          },
          resize: function () {
            N("resizeParent", "Parent window requested size check")
          },
          moveToAnchor: function () {
            ia.findTarget(e())
          },
          inPageLink: function () {
            this.moveToAnchor()
          },
          pageInfo: function () {
            var a = e();
            g("PageInfoFromParent called from parent: " + a), Ea(JSON.parse(a)), g(" --")
          },
          message: function () {
            var a = e();
            g("MessageCallback called from parent: " + a), Ca(JSON.parse(a)), g(" --")
          }
        };
        c() && l()
      }

      function T() {
        "loading" !== document.readyState && window.parent.postMessage("[iFrameResizerChild]Ready", "*")
      }
      if ("undefined" != typeof window) {
        var U = !0,
          V = 10,
          W = "",
          X = 0,
          Y = "",
          Z = null,
          $ = "",
          _ = !1,
          aa = {
            resize: 1,
            click: 1
          },
          ba = 128,
          ca = !0,
          da = 1,
          ea = "bodyOffset",
          fa = ea,
          ga = !0,
          ha = "",
          ia = {},
          ja = 32,
          ka = null,
          la = !1,
          ma = "[iFrameSizer]",
          na = ma.length,
          oa = "",
          pa = {
            max: 1,
            min: 1,
            bodyScroll: 1,
            documentElementScroll: 1
          },
          qa = "child",
          ra = !0,
          sa = window.parent,
          ta = "*",
          ua = 0,
          va = !1,
          wa = null,
          xa = 16,
          ya = 1,
          za = "scroll",
          Aa = za,
          Ba = window,
          Ca = function () {
            h("MessageCallback function not defined")
          },
          Da = function () {},
          Ea = function () {},
          Fa = {
            height: function () {
              return h("Custom height calculation function not defined"), document.documentElement.offsetHeight
            },
            width: function () {
              return h("Custom width calculation function not defined"), document.body.scrollWidth
            }
          },
          Ga = {},
          Ha = Date.now || function () {
            return (new Date).getTime()
          },
          Ia = {
            bodyOffset: function () {
              return document.body.offsetHeight + G("marginTop") + G("marginBottom")
            },
            offset: function () {
              return Ia.bodyOffset()
            },
            bodyScroll: function () {
              return document.body.scrollHeight
            },
            custom: function () {
              return Fa.height()
            },
            documentElementOffset: function () {
              return document.documentElement.offsetHeight
            },
            documentElementScroll: function () {
              return document.documentElement.scrollHeight
            },
            max: function () {
              return Math.max.apply(null, J(Ia))
            },
            min: function () {
              return Math.min.apply(null, J(Ia))
            },
            grow: function () {
              return Ia.max()
            },
            lowestElement: function () {
              return Math.max(Ia.bodyOffset() || Ia.documentElementOffset(), I("bottom", L()))
            },
            taggedElement: function () {
              return K("bottom", "data-iframe-height")
            }
          },
          Ja = {
            bodyScroll: function () {
              return document.body.scrollWidth
            },
            bodyOffset: function () {
              return document.body.offsetWidth
            },
            custom: function () {
              return Fa.width()
            },
            documentElementScroll: function () {
              return document.documentElement.scrollWidth
            },
            documentElementOffset: function () {
              return document.documentElement.offsetWidth
            },
            scroll: function () {
              return Math.max(Ja.bodyScroll(), Ja.documentElementScroll())
            },
            max: function () {
              return Math.max.apply(null, J(Ja))
            },
            min: function () {
              return Math.min.apply(null, J(Ja))
            },
            rightMostElement: function () {
              return I("right", L())
            },
            taggedElement: function () {
              return K("right", "data-iframe-width")
            }
          },
          Ka = e(M);
        b(window, "message", S), T()
      }
    }();
    //# sourceMappingURL=iframeResizer.contentWindow.map
  </script>

  <!-- ManyChat -->
  <script src="//widget.manychat.com/352241224948686.js" async="async"></script>



</head>

<body>






  <div class="backnew">
    <div class="row  rown" data-equalizer>


      <div class="medium-10 medium-centered  large-6 large-push-3 rown columns text-center" data-equalizer-watch>

        <center>
          <div class="pan5">
            <div
              style="background-color: rgb(0, 193, 36);border-top-left-radius: 10px;border-top-right-radius: 10px;padding: 10px 10px 2px 10px; ">

              <p class="white">Congratulations... You've been registered!</p>
            </div>
            <div style="padding: 3vw">
              <h5><b>
                  Scale Up Entrepreneurs Masterclass
                  </br></h5>

              <p class="large-11 large-centered columns">3 Steps to Build a </br> Million Dollar Customer Pathway</p>
              <p>Hosted by: <b>Suraj Naik</b></p>
              <p>Thursday, July 29, 2021 at<br> 9am UK / 4pm SGT / 6pm AEST</p>
                <a href=<?php echo "https://calendar.google.com/calendar/r/eventedit?text=Scale+Up+Entrepreneurs+Masterclass&dates=20210729T080000Z/20210729T093000Z&details=For+details,+link+here:+https://solutions.geniusu.com/scaleup/digital/webinar/asia/live/?sfid=".$sfid."&location=https://https://solutions.geniusu.com/scaleup/digital/webinar/asia/live/?sfid=".$sfid; ?>
                  target="_blank" class="orgbutton button"
                  style="border-radius: 5px;max-width: 200px;padding: 5px 10px;font-size: 16px;width: 100%;"><img
                    src="img/cal.svg">
                  Add to Calendar</a>


              <div style="border-radius: 10px; border: 1px solid #f1f1f1;padding: 10px 10px 5px 10px;">
                <p class="bluetxt2" style="margin-bottom: 0px;">Your masterclass link <Br />
                  <a href="https://solutions.geniusu.com/scaleup/digital/webinar/asia/live/?sfid=<?php echo($sfid);?>" target="_blank"
                    class="button"
                    style="margin-top:10px;width: 90%;padding: 5px 10px;background: #f2f2f2;word-wrap: break-word;padding-left: 1vw;padding-right: 1vw;color: #333">https://solutions.geniusu.com/scaleup/digital/webinar/asia/live/?sfid=<?php echo($sfid);?></a>
                </p>
              </div>
            </div>

          </div>
        </center>
      </div>

    </div>
  </div>

  <div class="row rown">
    <div class="small-12 large-10 large-centered columns">
      <h4 class="rowl">We recommend you to also:</h4>

      <div class="row ">
        <div class="small-1 center columns" style="padding: 0px;">
          <img src="img/tickb.png" style="width:100%;max-width:15px;float: right;padding-top: 5px;">
        </div>
        <div class="small-11 columns text-left">
          <div>
            <div>
              <p>STEP 1: Join the our facebook group and connect with other like-minded entrepreneurs from around the
                world. </p>
              <p><a href="https://www.facebook.com/groups/2537965309797345/" target="_blank" rel="noopener"><img
                    src="img/facebook-group-join.jpg" width="150"></a></p>
              <hr>
            </div>
          </div>
          <div>
            <div></div>
          </div>
        </div>
      </div>

      <div class="row ">
        <div class="small-1 center columns" style="padding: 0px;">
          <img src="img/tickb.png" style="width:100%;max-width:15px;float: right;padding-top: 5px;">
        </div>
        <div class="small-11 columns text-left">
          <div>
            <div>
              <p>STEP 2 (Optional): Get VIP access by joining our exclusive messenger community. </p>
            </div>
          </div>
          <div class="text-left">
            <div class="mcwidget-embed" data-widget-id="12725068" style="text-align:left !important;max-width: 250px;">
            </div>
          </div>

          <hr>

          <div>
            <div></div>
          </div>
        </div>
      </div>

      <div class="row ">
        <div class="small-1 center columns" style="padding: 0px;">
          <img src="img/tickb.png" style="width:100%;max-width:15px;float: right;padding-top: 5px;">
        </div>
        <div class="small-11 columns">
          <div>
            <div>
              <p class="text-left">Please share with your friends if they are positive, like-minded
                entrepreneurs.</p>
            </div>
          </div>
          <div class="row rowl" style="padding-top:0px;">
            <div class="small-12 medium-12 large-12 columns">
              <a style="margin-right:10px;"
                href="https://www.facebook.com/sharer/sharer.php?u=https://solutions.geniusu.com/scaleup/digital/webinar/asia/"
                target="_blank"><img src="img/facebook.png" style="max-width: 40px;" alt=""></a>
              <a style="margin-right:10px;"
                href="https://www.linkedin.com/sharing/share-offsite/?url=https://solutions.geniusu.com/scaleup/digital/webinar/asia/"
                target="_blank"><img src="img/linkedin.png" style="max-width: 40px;" alt=""></a>
              <a style="margin-right:10px;"
                href="https://twitter.com/intent/tweet?url=https://solutions.geniusu.com/scaleup/digital/webinar/asia/&text=VIP+Masterclass+Series+#3+:Digital+Marketing+Trends+during+crisis+and+beyond"
                target="_blank"><img src="img/twitter.png" style="max-width: 40px;" alt=""></a>
                <a class="show-for-small-only" href="https://api.whatsapp.com/send?text=VIP+Masterclass+Series+#3+:Digital+Marketing+Trends+during+crisis+and+beyond.%20%20https://solutions.geniusu.com/scaleup/digital/webinar/asia/" data-action="share/whatsapp/share" target="_blank"><img src="img/whatsapp.png" style="max-width: 40px;" alt=""></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div style="background: rgb(20, 57, 89);">

    <div class="row rowl">
      <div class="small-12 center columns">

        <a href="http://geniusu.com/privacy">
          <font color="white">Privacy Policy</font>
        </a>
      </div>
    </div>
  </div>


  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.js"></script>
  <script src="js/app.js"></script>
  <script src="js/timer.js"></script>


  <script type="text/javascript" src="js/TimeCircles.js"></script>

  <script>
    jQuery(document).ready(function ($) {
      $(".DateCountdown").TimeCircles({
        direction: "Counter-clockwise",
      });
      //$(".navbar").addClass("navbar-default--with-white-bg");

    });
  </script>
  <style>
    .cook_pol {
      background: rgba(0, 56, 168, 0.7);
      display: none;
    }

    .cook_pol p {
      color: #fff;
      margin-bottom: 0px;
      font-size: 16px;

    }

    #close-cook {
      padding: 5px 10px;
      border: 1px solid #fff;
      font-weight: bold;
      border-radius: 20px;
      background: rgba(255, 255, 255, 1);
      color: #333333;
    }
  </style>
  <script>
    function getCookie(c_name) {
      var i, x, y, ARRcookies = document.cookie.split(";");
      for (i = 0; i < ARRcookies.length; i++) {
        x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
        y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x == c_name) {
          console.log(unescape(y));
          return unescape(y);
        }
      }
    }

    function setCookie(c_name, value, exdays) {
      var exdate = new Date();
      exdate.setDate(exdate.getDate() + exdays);
      var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
      document.cookie = c_name + "=" + c_value;
    }

    window.addEventListener('load', function () {
      $(document).ready(function () {
        if (!getCookie('visited')) {
          document.getElementById('gdpr_banner').style.display = "block";
        }
        $("#close-cook").click(function () {
          setCookie('visited', 1, 365);
          document.getElementById('gdpr_banner').style.display = "none";
        });
      });
    });
  </script>



</body>

</html>
