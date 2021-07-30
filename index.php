<?php

if (isset($_REQUEST['a_aid'])) {
  # code...
  $pap_id = $_REQUEST['a_aid'];
}
if (isset($_REQUEST['utm_source'])) {
  # code...
  $utmsrc = $_REQUEST['utm_source'];
}

if (isset($_REQUEST['utm_medium'])) {
  # code...
  $utmmed = $_REQUEST['utm_medium'];
}

?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scale Up feature</title>
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/iceberg.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <link rel="shortcut icon" type="image/png" href="img/favicon.png" />

  <link rel="stylesheet" href="css/TimeCircles.css" />

  <meta property="fb:app_id" content="2616266035313513" />
  <meta property="og:url" content="https://solutions.geniusu.com/scaleup/digital/webinar/asia/" />
  <meta property="og:image" content="https://solutions.geniusu.com/scaleup/digital/webinar/asia/img/share_a.jpg" />
  <meta property="og:type" content="Website" />
  <meta property="og:title"
    content="Scale Up Entrepreneurs Masterclass" />
  <meta property="og:description"
    content="  3 Steps to Build a Million Dollar Customer Pathway." />


      <!-- event form registration -->
  <link rel="stylesheet" href="css/recaptcha.css">
  <script src="https://www.google.com/recaptcha/api.js?&render=explicit" async defer></script>
  <script src="js/gu_recaptcha.js" async defer></script>
  <script>
    function gurIntialize() {
      return {
        'geniusu_apiEndpoint' : 'https://app.geniusu.com/api/v3/users/create_temp_user',
        'recaptcha_verify_apiEndpoint' : 'https://solutions.geniusu.com/scaleup/digital/webinar/asia/verify_recaptcha.php',
        'client_geniusu_apiEndpoint' : 'https://solutions.geniusu.com/scaleup/digital/webinar/asia/gu_request.php',
        'event_name' : 'Solutions Webinar - 29th July - asia'
      }
    }
  </script>


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



  </script>

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

  <style type="text/css">
    .b2g p,
    .b2g h2 {
      text-shadow: 0 0 5px #000;
    }
  </style>
</head>

<body>

<!--
  <div class="reveal small" id="exampleModal1" data-reveal>
    <div class="row rown">
      <div class="small-12 medium-11 large-10  large-centered columns">


        <h3 class="center">REGISTER </h3>

        <form action="https://solutions.geniusu.com/masterclass/digital/webinar/asia/sf/sfsubscribe-inweb.php" method="POST"
          data-abide>

          <input type="hidden" name="returnurl" id="returnurl"
            value="https://solutions.geniusu.com/masterclass/digital/webinar/asia/thankyou.php">
          <input type="hidden" name="papaff" id="papaff" value="<?php echo($papa); ?>">

          <label>Date *</label>
          <select id="timesl" name="timesl" required>
            <option value="Tuesday, 29 September, 9:00 AM UK" selected>Tuesday, 29 September, 9:00 AM UK</option>
          </select>
          <label>
            First name *</label>

          <input type="text" placeholder="Enter first name..." maxlength="50" name="firstname" id="firstname"
            class="form-control" required>
          <label>
            Last name *</label>

          <input type="text" placeholder="Enter last name..." maxlength="50" name="lastname" id="lastname"
            class="form-control" required>

          <label>
            Email address *
          </label>
          <input type="email" name="email" placeholder="Enter email address..." class="form-control" name="email"
            id="email" required>
          <div class="center rowm">
            <input type="submit" name="submit" id="submit" value="Register Now" class="button btn3">
          </div>
        </form>
      </div>
    </div>
    <button class="close-button" data-close aria-label="Close modal" type="button">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>  -->

<div class="b2g">
    <div class=" ">
    <div class="row rown " data-equalizer="d23gct-equalizer" data-resize="8bxy3p-eq" data-mutate="e31w0a-eq" data-events="mutate">
       <div class="medium-5 large-6 columns out-vc  text-center" data-equalizer-watch="" style="height: 500px;">

        <div class="in-vc">
          <center>
       <h4 class="fontwide mobview"><b class="grntxt">Scale Up feature branch</b></h4>
          <img src="img/suraj_top.png" style="width:100%;max-width: 350px;"> <br>
       
        </center>
        </div>
      </div>

      <div class="medium-7 large-6  columns out-vc " data-equalizer-watch="" style="height: 500px;">

        <div class="in-vc">
          <div class=" text-center">

        
          

      <h4 class="fontwide deskview"><b class="grntxt">Scale Up Entrepreneurs Masterclass</b></h4>
        <h6 class="white"><b>3 Steps to Build a </br> Million Dollar Customer Pathway</b>
        </h6>
        <p class="grntxt"><b>Join us for this FREE masterclass <br class="hide-for-small-only">on Thursday, 29th July 2021 </b><br>
          <b class="white">9am UK / 4pm SGT / 6pm AEST</b></p>
        <div class="DateCountdown" data-date="2021/07/29 16:00:00 GMT+8"></div>
        <center>
          <div class="pan2">
            <div style="text-align:center;">
              <a href="#formf" class="button btn3"> Click here to register your place today </a>
            </div>
            <p class="shadows">100% FREE web event</p>
          </div>
        </center>


      </div>
      </div>
    </div>
    </div>
  </div>
</div>




  <div class="row rown medium-up-3 large-up-3 small-up-1 bgh">
    <div class="columns center">
      <img src="img/calender.png" style="width: 100%;max-width: 80px;padding-bottom: 10px;">
      <h5 class="bluetxt"><b>MARK YOUR CALENDAR</b></h5>
      <p class="">Clear up your schedule and give <span class="hide-for-medium-only"><Br /></span>
        yourself some me-time.</p>
    </div>
    <div class="columns center">
      <img src="img/timer.png" style="width: 100%;max-width: 80px;padding-bottom: 10px;">
      <h5><b>60 MINUTES</b></h5>
      <p class="">Schedule approximately 60 Minutes <span class="hide-for-medium-only"><Br />
        </span>
        of quiet time for this Masterclass.</p>
    </div>
    <div class="columns center">
      <img src="img/money.png" style="width: 100%;max-width: 80px;padding-bottom: 10px;">
      <h5><b>MAXIMISE YOUR INCOME</b></h5>
      <p class="">Learn the simple ways to have more <span class="hide-for-medium-only"><Br /></span>
        income than you ever imagined.</p>
    </div>

  </div>

  <div class="bg5">

    <div class="row rown" style="padding-bottom:0px;">
      <div class="small-12 medium-10 large-10   small-centered  columns text-center">
        <h2 class="grntxt center rowl"><b>This system can generate $100k a month
          of Super Warm Prospects from a Super Clear Customer Pathway</b></h2>
      </div>
    </div>
    <div class="row rown" style="padding-top:0px;">
      <div class="small-11 medium-10 large-7    small-centered  columns text-center">

        <p class="whitetxt text-left">Invest 60 minutes in this high-powered 
          information packed masterclass to generate quality high-value warm
           prospects who are action takers. </p>
 
    <p class="whitetxt text-left"> Understand how Scale Up 5.0 strategies will 
      be essential to your business growth in 2021 and the digital decade ahead.
    </p>
 
   <p class="whitetxt text-left"> 2020 has been very challenging for a lot of 
      businesses but also has been a year of opportunity for many to pivot and
      go digital by integrating 5.0 strategies. These specific A.I. led strategies 
      around A.I ads, customer pathway, integrated chatbots have already generated 
      over $6 million for our group during the crisis so they have been 
      invaluable to us.
   </p>

     <p class="whitetxt text-left"> These are steps that work for any scale up business, from new fast growth startups to large enterprises, allowing you to create digital streams of revenue during crisis times and beyond.
    </p>
      </div>
    </div>
  </div>

  <!-- <div style="background:#F1F1F1;">
    <div class="row">
      <div class="small-10 medium-12  small-centered center columns rown">

        <h2 class="bluetxt"><b>Meet your Genius Solutions Panelists</b></h2>

        <p class="large-10 large-centered">Our team of experts have been accountable for delivering millions of dollars
          of
          revenues and cost savings across our group and with several of our key partners too. Between them, they have
          over 70 years of experience, in achieving high performance results.</p>

        <div class="row small-up-2 medium-up-3 large-up-5 flex__row--center-flex-start facu">
          <div class="columns">
            <a data-open="fac1">
              <img src="img/roger_h.png" style="">
              <p class="hd1"><b>ROGER JAMES HAMILTON</b> <br> Digital Business Expert<br> Poland</p>
            </a>
          </div>
          <div class="columns">
            <a data-open="fac2">
              <img src="img/sandra.png" style="">
              <p class="hd1"><b>SANDRA MORRELL</b> <br> Finance Expert<br> Australia</p>
            </a>
          </div>
          <div class="columns">
            <a data-open="fac3">
              <img src="img/michelle.png" style="">
              <p class="hd1"><b>MICHELLE CLARKE</b> <br> Sales &amp; Partnerships Expert<br> United Kingdom</p>
            </a>
          </div>
          <div class="columns">
            <a data-open="fac4">
              <img src="img/suraj.png" style="">
              <p class="hd1"><b>SURAJ NAIK</b> <br> Digital Marketing Expert<br> Singapore</p>
            </a>
          </div>
          <div class="columns">
            <a data-open="fac5">
              <img src="img/donna.png" style="">
              <p class="hd1"><b>DONNA IZOBELLA</b> <br> Entrepreneur Mindset Expert<br> Australia</p>
            </a>
          </div>


        </div>

      </div>
    </div>
  </div> -->

  <div class="row rown">
    <div class="small-12 medium-12 large-12 small-centered center columns">
      <div class="row  rowl" data-equalizer="">
        <div class="medium-6 large-6  out-vc columns " data-equalizer-watch style="">
          <div class="in-vc">
            <center>
              <div class="row show-for-small-only" style="">
                <div class="small-11 medium-12  large-12 small-centered columns">
                  <img src="img/img_2.png" style="width: 100%;max-width: 100%;padding-bottom: 30px;">
                </div>
              </div>
            </center>
            <div class="rowl jusalign">
              <p class="textsizes">Join Genius Group’s CMO, Suraj Naik, as he goes through these 3 
                genius steps to create a million-dollar customer pathway.
              </p>
                  <p class="textsizes">Are you ready to 10x your business in 2021? Invest 1 hour in this 
                exclusive masterclass to 10x your business growth, 10x your team
                performance and 10x your quality of life.
              </p>
              <div class="midalign">
                <a href="#formf" class="button btn3 "> Register For
                This Free Masterclass Now </a>
              </div>
              <p class="text-center" style="margin-bottom: 0px;"><b>Free Masterclass</b></p>

            </div>
          </div>

        </div>
        <div class="hide-for-small-only">
          <div class="medium-6 large-6   out-vc columns " data-equalizer-watch style="">
            <div class="in-vc">
              <center>
                <img src="img/img_2.png" style="width: 100%;max-width: 100%;">
              </center>
            </div>

          </div>
        </div>
      </div>



    </div>
  </div>




  <div class="bg7">
    <div class="row rown">
      <div class="small-12 large-10  small-centered  columns">
        <h2 class="grntxt center rowl"><b>What Suraj will cover during <br class="hide-for-small-only"> the 60 minute
            free masterclass</b></h2>

        <p class="white ">
          Suraj is the Chief Marketing Officer at GeniusU. He has led the digital marketing and services division of GeniusU and grown it to over 1.4 million members in 200 countries. Through Genius Solutions he has been creating million dollar promotion plans for GeniusU’s partners and clients, using the very latest cutting edge strategies and marketing tools. </p>

        <div class="row  rowl" data-equalizer="e6kmtb-equalizer" data-resize="citte9-eq" data-mutate="9m4lnh-eq"
          data-events="mutate">


          <div class=" large-6   out-vc columns " data-equalizer-watch>
            <div class="in-vc">
              <center>
                <div class="row hide-for-large" style="">
                  <div class="small-11 medium-12  large-12 small-centered columns">
                    <img src="img/suraj_1.jpg" style="width: 100%;max-width: 100%;padding-top: 10px;padding-bottom: 40px;">
                  </div>
                </div>
              </center>

              <p class="white">On this Masterclass Suraj will be sharing:</p>

              <ol class="rowm">
                <li>
                  <p class="white">
                     Learn and know the Genius Group formula that attracts 1000+ new members joining daily.
                  </p>
                </li>
                <li>
                  <p class="white">
                    The top marketing trends for the digital decade.</p>
                </li>
                <li>
                  <p class="white">
                     Case studies of Genius Group businesses that are already doing this and how you can copy them easily .
                </p>
                </li>
                <!-- <li>
                  <p class="white">
                    The GeniusU model and key learnings you can apply to improve your leadership.
                  </p>
                </li>
                <li>
                  <p class="white">
                    Introducing the “10 Points of Leadership”, from developing a vision to celebration.      
                  </p>
                </li> -->
              </ol>




            </div>



          </div>

          

          <div class="show-for-large">
            <div class="large-6  out-vc columns " data-equalizer-watch="" style="height: 408px;">
              <div class="in-vc">
                <center>
                  <img src="img/suraj_1.jpg" style="width: 100%;max-width: 100%;">
                </center>
              </div>

            </div>
          </div>

        

        </div>

         <p class="white ">
      There is a growing group of our clients and partners around the world where the crisis has already ended for them and the shift to the new normal has begun. They have a new plan and revenue streams that are not recovery-dependent. Join Suraj and those clients, in understanding exactly what customer pathway strategies are working.
        </p>


      </div>
    </div>
  </div>


  <div class="row rown">
    <div class="small-12 klo medium-6 large-6 columns">

      <center> <img src="img/ico_4.png" style="width: 100%;max-width: 80px;padding-bottom: 10px;" alt="ico_1">
        <h3 class="bluetxt2">WHEN</h3>
        <p><b>Thursday, 29th July 2021</b><br>
          9am UK / 4pm SGT / 6pm AEST</p>
      </center>
    </div>
    <div class=" medium-6 large-6 columns" style="">
      <center> <img src="img/ico_5.png" style="width: 100%;max-width: 80px;padding-bottom: 10px;" alt="ico_1">
        <h3 class="bluetxt2">WHERE</h3>
        <p>The Masterclass will take place online, which <span class="show-for-large"><br></span>
          means you can watch from the <span class="show-for-large"><br></span>
          comfort of your home.</p>

      </center>
    </div>


  </div>

  <div class="b1g">
    <div class="row rown">
      <div class="small-11 medium-12 rowm large-11 small-centered columns" data-equalizer>
        <div class="small-12 medium-6   columns" data-equalizer-watch>
          <h3 class="grntxt"><b>This training is for <br class="hide-for-small-only">you if you are:</b></h3>
          <ol class="rowm">
            <li>
              <p class="white">
                For owners of companies from startup to $500,000 in revenues, who are focused at growing their customer
                base and their team.
              </p>
            </li>
            <li>
              <p class="white">
                For owners of companies from $500,000 to $2.5m in revenues, who are managing larger teams and
                seeking solutions that scale. </p>
            </li>
            <li>
              <p class="white">
                For company owners and investors managing portfolios generating between $2.5m
                and $250m, looking for fast growth.</p>
            </li>
          </ol>
        </div>
        <div class="small-12 medium-6 center  columns flex__row--center-center" data-equalizer-watch>
          <div>
            <p class="white">THE WEB EVENT STARTS IN</p>
            <div class="DateCountdown" data-date="2021/07/29 16:00:00 GMT+8"></div>
            <br />
            <div style="text-align:center;">
              <a class="button btn3" href="#formf" > Click here to register your place today </a>
            </div>
            <p class="white" style="margin-bottom: 0px;">100% FREE web event</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="green_bg">
    <div class="row expanded rown">
      <div class="small-11 medium-10 rowm large-8 small-centered columns text-center">
        <h2><b class="bluetxt">
            Genius Solutions VIP Masterclass Series 2020:<br> The third in a four part series
          </b></h2>
        <p style="margin:0;">This Masterclass is the third in a four part series with the Genius Groups Leadership team on proven sales and cash flow strategies held weekly on Tuesday. When you register for this episode, you will be automatically registered for the series. These four episodes will give you the examples, the steps and the future trends you need to ensure you turn this crisis into “the opportunity of the century”</p>
      </div>
    </div>
    <div class="row expanded rown" style="padding-top:0px;">
      <div class="small-11 medium-12 rowm large-10 small-centered columns text-center">
        <div class="columns large-up-4 medium-up-2 small-up-1">
          <div class="columns">
            <img src="img/michelle.jpg" alt="" style="margin-bottom:20px;">
            <h5><b>Masterclass 1 </b></h5>
            <p>Generate an additional $25,000 per month in Remote Sales</p>
            <div class="hide-for-large" style="height:20px;"></div>
          </div>
          <div class="columns">
            <img src="img/donna.jpg" alt="" style="margin-bottom:20px;">
            <h5><b>Masterclass 2 </b></h5>
            <p>Decisive leadership: how to shift you and your team from uncertainty to growth mode.</p>
            <div class="hide-for-large" style="height:20px;"></div>
          </div>
          <div class="columns">
            <img src="img/suraj.jpg" alt="" style="margin-bottom:20px;">
            <h5><b>Masterclass 3 </b></h5>
            <p>Digital Marketing trends during crisis & beyond</p>
            <div class="hide-for-large" style="height:20px;"></div>
          </div>
          <div class="columns text-center">
            <img src="img/sandra.jpg" alt="" style="margin-bottom:20px;">
            <h5><b>Masterclass 4 </b></h5>
            <p>Profit Plan for Success</p>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <div class="row">
    <div class="small-12 medium-12 large-12  columns rown">
      <h2 class="text-center rowl grntxt"><b>What people are saying:</b></h2>
      <div class="row" style="padding-top:30px;">
        <div class="medium-3 large-2 center columns">
          <img src="img/t1.png" style="width: 100%;max-width: 110px;">
        </div>
        <div class="columns medium-9 large-8">
          <p><i>"Suraj is one of the best when it comes to digital marketing and staying ahead of the latest trends to grow your community. I learn so much from him, both for myself and my business, but also things I can pass on to my clients, so can highly recommend tuning in whenever he organises a webinar on digital strategies and future trends in online promotion. Thanks Suraj, you are a gem!"</i></p>
          <p><b>- Sofie Marin Haag </b></p>
        </div>
        <div class="large-2 columns show-for-large">
          &nbsp;
        </div>
      </div>
    </div>
  </div>
  <div style="background: #F1F1F1">
    <div class="row  rown">
      <div class="small-12 medium-12 large-12 large-centered columns rown">
        <div class="row">
          <div class="medium-3 large-2 center columns">
            <img src="img/t2.png" style="width: 100%;max-width: 110px;">
          </div>
          <div class="columns medium-9 large-8">
            <p><i>"Can't believe how incredibly knowledgeable he is in his subject matter expertise. A no non-sense approach to digital marketing which get's me super excited!! If you need a digital expert drop Suraj a message or even better join him at his masterclass!! You won't regret it."</i></p>
            <p><b>- Paulina Roach</b></p>
          </div>
          <div class="large-2 columns show-for-large">
            &nbsp;
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div style="background: #F1F1F1"> -->
    <div class="row  rown">
      <div class="small-12 medium-12 large-12 large-centered columns rown">
        <div class="row">
          <div class="medium-3 large-2 center columns">
            <img src="img/t3.png" style="width: 100%;max-width: 110px;">
          </div>
          <div class="columns medium-9 large-8">
            <p><i>"I started working with the Digital Marketing team in Genius Group and after generating hundreds of new and qualified leads via my 5 day challenge, we urgently needed help with taking all of the sales calls. A nice problem for us to have!"</i></p>
            <p><b>- Ariella indigo</b></p>
          </div>
          <div class="large-2 columns show-for-large">
            &nbsp;
          </div>
        </div>
      </div>
    </div>
  </div>


 <!--  <div class="crystal_say">
    <div class="row rown">
      <div class="large-12 columns text-center">
        <h4 class="margin--0"><b>WHAT OUR CRYSTALS SAY ABOUT US</b></h4>
      </div>
    </div>
    <div class="row rown">
      <div class="large-up-3 medium-up-3 small-up-1 columns">
        <div class="columns">
          <div class="responsive-embed widescreen">
            <iframe src="https://www.youtube.com/embed/s2GKeWPkCRg" frameborder="0"></iframe>
          </div>
          <p><b>Anthony D'Souza</b></p>
          <div class="show-for-small-only" style="height:20px;"></div>
        </div>
        <div class="columns">
          <div class="responsive-embed widescreen">
            <iframe src="https://www.youtube.com/embed/cMsdiNyU_fo" frameborder="0"></iframe>
          </div>
          <p><b>Jo Formosa</b></p>
          <div class="show-for-small-only" style="height:20px;"></div>
        </div>
        <div class="columns">
          <div class="responsive-embed widescreen">
            <iframe src="https://www.youtube.com/embed/Ue--ZyxxtM4" frameborder="0"></iframe>
          </div>
          <p><b>Michael Dong</b></p>
          <div class="show-for-small-only" style="height:20px;"></div>
        </div>
      </div>
    </div>
  </div> -->

  <div class="b1g">
    <div class="row rown">
      <div class="small-12 medium-6 text-center small-centered  columns">
        <p class="white">THE WEB EVENT STARTS IN</p>
        <div class="DateCountdown" data-date="2021/07/29 16:00:00 GMT+8"></div>
        <br />
        <div style="text-align:center;">

          <a href="#formf" class="button btn3"> Click here to register your place today </a>
        </div>
        <p class="white" style="margin-bottom: 0px;">100% FREE web event</p>
      </div>
    </div>
  </div>

  <div>
    <div class="row  rown rowmargin " data-equalizer="">
      <div class="large-5   out-vc columns " data-equalizer-watch style="">
        <div class="in-vc">
          <center>
            <img src="img/suraj.png" class="rowl" style="width: 100%;max-width: 200px;">
          </center>
        </div>
      </div>
      <div class="large-7   out-vc columns " data-equalizer-watch style="">
        <div class="in-vc">
           <h3 class="large-text-left nameinn"><b style="color:#002B43;">About</b></h3>
          <h3 class="large-text-left text-center namein"><b style="color:#002B43;"> Suraj Naik</b></h3>
          <p>Suraj Naik is the Chief Marketing Officer at Genius Group. He also sits on its board. Genius Group is world’s largest entrepreneur education group with over 1.4 million students in over 200 cities.</p>
 
<p> After successfully launching Wealth Dynamics and Millionaire Master Plan, where he was responsible for executing a 4 month campaign to ensure placement of The Millionaire Master Plan book on the bestsellers list of New York Times, USA Today, Amazon and Barnes & Noble, Suraj led the launch of GeniusU (www.geniusu.com) </p>
 
<p> At 24 Suraj founded an online event ticketing and registration platform which he later sold to Idea Wave Labs. </p>

<p> Suraj’s areas of expertise range from setting up remote development and digital marketing teams, marketing automation, CRM, big data, consulting and entrepreneurship. He holds a Masters in Business Administration.</p>


        </div>
      </div>
    </div>
  </div>
  <a name="formf" id="formf"></a>
 <!-- <div class="b2g">
    <div class="row" data-equalizer>
      <div class="medium-9 medium-centered  large-6 large-push-4 rown columns  text-center" data-equalizer-watch>
        <h4><b class="white">VIP Masterclass Series #3 :</b><br><b class="grntxt">Digital Marketing Trends<br
              class="hide-for-small-only"> during crisis and beyond</b></h4>
        <h6 class="white"><b>Discover 3 Digital Strategies that have generated $3 Million+ for Genius Group this year and how you can replicate it for your business.</b>
        </h6>
        <p class="grntxt"><b>FREE 60 minute “How to” Masterclass <br class="hide-for-small-only">on Tuesday, 29th
            September 2020 </b><br>
          <b class="white">9am UK / 4pm SGT / 6pm AEST</b></p>
        <div class="DateCountdown" data-date="2020/09/29 09:00:00 GMT+1"></div>
        <center>
          <div class="pan2">
            <div style="text-align:center;">
              <a data-open="exampleModal1" class="button btn3"> Click here to register your place today </a>
            </div>
            <h4><b>100% FREE web event</b></h4>
          </div>
        </center>
      </div>
    </div>
  </div>

  
<div style="background: #f2f2f2">
  <div class="row rown">
    <div class="small-12 medium-10 medium-centered center columns">
      <h3 style="padding-bottom: 15px;">Interested to read more about Entrepreneur Dynamics while waiting for the Exclusive Partner Briefing to begin?  Visit our Partner Page at:</h3>

      <a href="https://entrepreneurdynamics.geniusu.com/faculty/pre_prelaunch/" class="button orgbutton" target="_blank"> Visit Now </a>
    </div>
  </div>
</div>
-->


<div style="background: #f2f2f2"  >
      <div class="row rown">
      <div class="small-11 medium-8 large-6  small-centered columns">


        <h3 class="center">REGISTER </h3>

        <form action="https://solutions.geniusu.com/scaleup/digital/webinar/asia/sf/sfsubscribe-web.php" method="POST" data-guform-validationMode="strict" data-guform-id="geniusuAutoregistration" data-abide>

         
      <input type="hidden" name="returnurl" id="returnurl" value="https://solutions.geniusu.com/scaleup/digital/webinar/asia/thankyou.php">
          <input type="hidden" name="papaa" id="papaa" value="<?php echo($pap_id);?>">
            <input type="hidden" name="utmsourc" id="utmsourc" value="<?php echo($utmsrc);?>">
            <input type="hidden" name="utmmediu" id="utmmediu" value="<?php echo($utmmed);?>">

           <label>Date *</label>
          <select id="timesl" name="times1" required>
            <option value="Thursday, 29th July,  4pm SGT " selected>Thursday, 29th July, 4pm SGT</option>
          </select> 
          <label>
            First name *</label>

          <input type="text" placeholder="Enter first name..." maxlength="50" name="firstname" id="firstname"
            class="form-control" required>
          <label>
            Last name *</label>

          <input type="text" placeholder="Enter last name..." maxlength="50" name="lastname" id="lastname"
            class="form-control" required>

          <label>
            Email address *
          </label>
          <input type="email" name="email" placeholder="Enter email address..." class="form-control" name="email"
            id="email" required>

          <label style="padding-bottom: 10px;"><input type="checkbox" name="smsenabler" id="smsenabler">SEND ME TEXT
            REMINDERS/UPDATES.</label>
          <div class="hdph">
            <div class="row rowk">
              <div class="small-4 medium-5 columns ">
                <select id="payment_mobile_country_code" name="payment_mobile_country_code">
                  <option value="93">Afghanistan (+93)</option>
                  <option value="355">Albania (+355)</option>
                  <option value="213">Algeria (+213)</option>
                  <option value="376">Andorra (+376)</option>
                  <option value="244">Angola (+244)</option>
                  <option value="264">Anguilla (+264)</option>
                  <option value="672">Antarctica (the territory South of 60 deg S) (+672)
                  </option>
                  <option value="1268">Antigua and Barbuda (+1268)</option>
                  <option value="54">Argentina (+54)</option>
                  <option value="374">Armenia (+374)</option>
                  <option value="297">Aruba (+297)</option>
                  <option value="61">Australia (+61)</option>
                  <option value="43">Austria (+43)</option>
                  <option value="994">Azerbaijan (+994)</option>
                  <option value="1242">Bahamas (+1242)</option>
                  <option value="973">Bahrain (+973)</option>
                  <option value="880">Bangladesh (+880)</option>
                  <option value="1246">Barbados (+1246)</option>
                  <option value="375">Belarus (+375)</option>
                  <option value="32">Belgium (+32)</option>
                  <option value="501">Belize (+501)</option>
                  <option value="229">Benin (was Dahomey), People's Republic of (+229)
                  </option>
                  <option value="1441">Bermuda (+1441)</option>
                  <option value="975">Bhutan (+975)</option>
                  <option value="591">Bolivia (+591)</option>
                  <option value="387">Bosnia and Herzegovina (+387)</option>
                  <option value="267">Botswana (+267)</option>
                  <option value="55">Brazil (+55)</option>
                  <option value="1284">British Virgin Islands (+1284)</option>
                  <option value="673">Brunei Darussalam (+673)</option>
                  <option value="359">Bulgaria (+359)</option>
                  <option value="226">Burkina Faso (was Upper Volta) (+226)</option>
                  <option value="257">Burundi (+257)</option>
                  <option value="855">Cambodia (+855)</option>
                  <option value="237">Cameroon (+237)</option>
                  <option value="1">Canada (+1)</option>
                  <option value="238">Cape Verde (+238)</option>
                  <option value="345">Cayman Islands (+345)</option>
                  <option value="236">Central African Republic (+236)</option>
                  <option value="235">Chad (+235)</option>
                  <option value="56">Chile, Republic of (+56)</option>
                  <option value="86">China (+86)</option>
                  <option value="57">Colombia, Republic of (+57)</option>
                  <option value="269">Comoros (+269)</option>
                  <option value="242">Congo (+242)</option>
                  <option value="243">Congo, (was Zaire) (+243)</option>
                  <option value="682">Cook Islands (+682)</option>
                  <option value="506">Costa Rica (+506)</option>
                  <option value="225">Cote D'Ivoire (+225)</option>
                  <option value="385">Croatia (+385)</option>
                  <option value="53">Cuba (+53)</option>
                  <option value="357">Cyprus (+357)</option>
                  <option value="420">Czech Republic (+420)</option>
                  <option value="850">Democratic People's Republic of Korea (+850)</option>
                  <option value="45">Denmark (+45)</option>
                  <option value="253">Djibouti (+253)</option>
                  <option value="1767">Dominica (+1767)</option>
                  <option value="1849">Dominican Republic (+1849)</option>
                  <option value="593">Ecuador (+593)</option>
                  <option value="20">Egypt (+20)</option>
                  <option value="503">El Salvador (+503)</option>
                  <option value="240">Equatorial Guinea (+240)</option>
                  <option value="291">Eritrea (+291)</option>
                  <option value="372">Estonia (+372)</option>
                  <option value="251">Ethiopia (+251)</option>
                  <option value="298">Faeroe Islands (+298)</option>
                  <option value="679">Fiji (+679)</option>
                  <option value="358">Finland (+358)</option>
                  <option value="33">France (+33)</option>
                  <option value="241">Gabon (+241)</option>
                  <option value="220">Gambia (+220)</option>
                  <option value="995">Georgia (+995)</option>
                  <option value="49">Germany (+49)</option>
                  <option value="233">Ghana (+233)</option>
                  <option value="350">Gibraltar (+350)</option>
                  <option value="30">Greece (+30)</option>
                  <option value="299">Greenland (+299)</option>
                  <option value="1473">Grenada (+1473)</option>
                  <option value="502">Guatemala (+502)</option>
                  <option value="224">Guinea (+224)</option>
                  <option value="245">Guinea-Bissau (+245)</option>
                  <option value="592">Guyana (+592)</option>
                  <option value="509">Haiti (+509)</option>
                  <option value="504">Honduras (+504)</option>
                  <option value="852">Hong Kong (+852)</option>
                  <option value="36">Hungary (+36)</option>
                  <option value="354">Iceland (+354)</option>
                  <option value="91">India (+91)</option>
                  <option value="62">Indonesia (+62)</option>
                  <option value="98">Iran (+98)</option>
                  <option value="964">Iraq (+964)</option>
                  <option value="353">Ireland (+353)</option>
                  <option value="972">Israel (+972)</option>
                  <option value="39">Italy (+39)</option>
                  <option value="1876">Jamaica (+1876)</option>
                  <option value="81">Japan (+81)</option>
                  <option value="962">Jordan (+962)</option>
                  <option value="7">Kazakhstan (+7)</option>
                  <option value="254">Kenya (+254)</option>
                  <option value="686">Kiribati (+686)</option>
                  <option value="383">Kosovo (+383)</option>
                  <option value="965">Kuwait (+965)</option>
                  <option value="996">Kyrgyz Republic (+996)</option>
                  <option value="856">Laos, People's Democratic Republic of (+856)</option>
                  <option value="371">Latvia (+371)</option>
                  <option value="961">Lebanon (+961)</option>
                  <option value="266">Lesotho (+266)</option>
                  <option value="231">Liberia (+231)</option>
                  <option value="218">Libya (+218)</option>
                  <option value="423">Liechtenstein (+423)</option>
                  <option value="370">Lithuania (+370)</option>
                  <option value="352">Luxembourg (+352)</option>
                  <option value="853">Macao (+853)</option>
                  <option value="389">Macedonia (+389)</option>
                  <option value="261">Madagascar (+261)</option>
                  <option value="265">Malawi (+265)</option>
                  <option value="60">Malaysia (+60)</option>
                  <option value="960">Maldives (+960)</option>
                  <option value="223">Mali (+223)</option>
                  <option value="356">Malta (+356)</option>
                  <option value="692">Marshall Islands (+692)</option>
                  <option value="596">Martinique (+596)</option>
                  <option value="222">Mauritania (+222)</option>
                  <option value="230">Mauritius (+230)</option>
                  <option value="269">Mayotte (+269)</option>
                  <option value="52">Mexico (+52)</option>
                  <option value="691">Micronesia (+691)</option>
                  <option value="373">Moldova, Republic of (+373)</option>
                  <option value="377">Monaco (+377)</option>
                  <option value="976">Mongolia (+976)</option>
                  <option value="382">Montenegro (+382)</option>
                  <option value="1664">Montserrat (+1664)</option>
                  <option value="212">Morocco (+212)</option>
                  <option value="258">Mozambique (+258)</option>
                  <option value="95">Myanmar (was Burma) (+95)</option>
                  <option value="264">Namibia (+264)</option>
                  <option value="674">Nauru (+674)</option>
                  <option value="977">Nepal (+977)</option>
                  <option value="31">Netherlands (+31)</option>
                  <option value="64">New Zealand (+64)</option>
                  <option value="505">Nicaragua (+505)</option>
                  <option value="227">Niger (+227)</option>
                  <option value="234">Nigeria (+234)</option>
                  <option value="683">Niue (+683)</option>
                  <option value="1670">Northern Mariana Islands (+1670)</option>
                  <option value="47">Norway (+47)</option>
                  <option value="968">Oman (+968)</option>
                  <option value="92">Pakistan (+92)</option>
                  <option value="680">Palau (+680)</option>
                  <option value="970">Palestinian Territory, Occupied (+970)</option>
                  <option value="507">Panama (+507)</option>
                  <option value="675">Papua New Guinea (+675)</option>
                  <option value="595">Paraguay (+595)</option>
                  <option value="51">Peru (+51)</option>
                  <option value="63">Philippines (+63)</option>
                  <option value="48">Poland (+48)</option>
                  <option value="351">Portugal (+351)</option>
                  <option value="1787">Puerto Rico (+1787)</option>
                  <option value="974">Qatar (+974)</option>
                  <option value="82">Republic of Korea (+82)</option>
                  <option value="40">Romania (+40)</option>
                  <option value="7">Russia (+7)</option>
                  <option value="250">Rwanda (+250)</option>
                  <option value="685">Samoa (+685)</option>
                  <option value="378">San Marino (+378)</option>
                  <option value="239">Sao Tome and Principe (+239)</option>
                  <option value="966">Saudi Arabia (+966)</option>
                  <option value="221">Senegal (+221)</option>
                  <option value="381">Serbia (+381)</option>
                  <option value="248">Seychelles (+248)</option>
                  <option value="232">Sierra Leone, Republic of (+232)</option>
                  <option value="65">Singapore (+65)</option>
                  <option value="421">Slovakia (+421)</option>
                  <option value="386">Slovenia (+386)</option>
                  <option value="677">Solomon Islands (+677)</option>
                  <option value="252">Somalia (+252)</option>
                  <option value="27">South Africa (+27)</option>
                  <option value="34">Spain (+34)</option>
                  <option value="94">Sri Lanka, Democratic Socialist Republic of (was Ceylon)
                    (+94)</option>
                  <option value="1869">St. Kitts and Nevis (+1869)</option>
                  <option value="1758">St. Lucia (+1758)</option>
                  <option value="1784">St. Vincent and the Grenadines (+1784)</option>
                  <option value="249">Sudan (+249)</option>
                  <option value="597">Suriname, Republic of (+597)</option>
                  <option value="268">Swaziland, Kingdom of (+268)</option>
                  <option value="46">Sweden (+46)</option>
                  <option value="41">Switzerland (+41)</option>
                  <option value="963">Syrian (+963)</option>
                  <option value="886">Taiwan (+886)</option>
                  <option value="992">Tajikistan (+992)</option>
                  <option value="255">Tanzania (+255)</option>
                  <option value="66">Thailand (+66)</option>
                  <option value="670">Timor-Leste, Democratic Republic of (+670)</option>
                  <option value="228">Togo (+228)</option>
                  <option value="676">Tonga (+676)</option>
                  <option value="1868">Trinidad and Tobago (+1868)</option>
                  <option value="216">Tunisia (+216)</option>
                  <option value="90">Turkey (+90)</option>
                  <option value="993">Turkmenistan (+993)</option>
                  <option value="1649">Turks and Caicos Islands (+1649)</option>
                  <option value="688">Tuvalu (was part of Gilbert and Ellice Islands) (+688)
                  </option>
                  <option value="1304">US Virgin Islands (+1304)</option>
                  <option value="256">Uganda (+256)</option>
                  <option value="380">Ukraine (+380)</option>
                  <option value="1">Undefined (Stateless/Refugee) (+-1)</option>
                  <option value="971">United Arab Emirates (+971)</option>
                  <option value="44">United Kingdom (+44)</option>
                  <option value="699">United States Minor Outlying Islands (+699)</option>
                  <option value="1">United States of America (+1)</option>
                  <option value="598">Uruguay (+598)</option>
                  <option value="998">Uzbekistan (+998)</option>
                  <option value="678">Vanuatu (was New Hebrides) (+678)</option>
                  <option value="58">Venezuela, Bolivarian Republic of (+58)</option>
                  <option value="84">Vietnam (+84)</option>
                  <option value="967">Yemen (+967)</option>
                  <option value="260">Zambia (+260)</option>
                  <option value="263">Zimbabwe (+263)</option>
                </select>
              </div>
              <div class="small-8 medium-7 columns " style="padding-left:0px;">
                <input id="phonec" name="phonec" type="text" placeholder="Mobile Number" style="margin-top: 0px;">
                <input id="mobile_no" name="mobile_no" type="hidden">
              </div>
            </div>

            <p style="font-size: 12px;" class="center">You will receive important updates, including up to one SMS
              message per day before and during the series, and up to one SMS message per week after that. Standard text
              message rates apply. You can unsubscribe at any time by replying to a text with the word STOP.</p>
          </div>

          <div class="center rowm">
            <input type="submit" name="submit" id="submit" value="Register Now" class="button btn3">
          </div>
        </form>
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
      $("#smsenabler").click(function () {
        if ($(this).is(":checked")) {
          $(".hdph").show(300);
          $("#payment_mobile_country_code").prop('required', true);
          $("#phonec").prop('required', true);
        } else {

          $("#payment_mobile_country_code").prop('required', false);
          $("#phonec").prop('required', false);
          $(".hdph").hide(200);
        }
      });

    });
  </script>

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

  <script>
    function send_data() {
      fname = document.getElementById('firstname').value;
      lname = document.getElementById('lastname').value;
      email = document.getElementById('email').value;
      var xhttp = new XMLHttpRequest();
      xhttp.open("POST", "add_to_entries.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("fname=" + fname + "&lname=" + lname + "&email=" + email);
    }
  </script>




</body>

</html>
