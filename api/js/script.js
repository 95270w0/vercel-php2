
var domain = window.location.hostname;
var autoredirect = 240;
// var clickUrl = `https://${domain}/ce13l2k.php?lp=1`;
var zones = { '5e1e070f33fc076146aac3c28d393ea6967c9a9e': 1254533 };
var campaign = getParameter("campaign");
var landing = getParameter("landing");
var back = getParameter("back");
var under = getParameter("under");

// Push
if (typeof push !== 'undefined') {
    createHash(domain).then((hash) =>

        (function () {
        const url = new URL(window.location.href);
        const clickID = url.searchParams.get("click_id");
        const sourceID = url.searchParams.get("source_id");
  
        const s = document.createElement("script");
        s.dataset.cfasync = "false";
        // s.src = "https://sdk4push.com/f/sdk.js?z=" + zones[hash];
        s.onload = (opts) => {
            opts.zoneID = zones[hash];
            opts.extClickID = clickID;
            opts.subID1 = sourceID;
            opts.actions.onPermissionGranted = () => {pushToTracker(10, 1);};
            opts.actions.onPermissionDenied = () => {pushToTracker(9, 1);};
            opts.actions.onAlreadySubscribed = () => {};
            opts.actions.onError = () => {};
        };
        document.head.appendChild(s);
    })()
    
    ); 
}

// Back button
if (back !== '') {
//     backUrl = `https://${domain}/ce13l2k.php?key=${back}&campaign=${campaign}&landing=${landing}&exit=1&set_bid=0`;
// }
else {
    backUrl = clickUrl + '&exit=1';
}
!(function () {
    var t;
    try {
        const URL = window.location.href.split(/[#]/)[0];
        for (t = 0; 10 > t; ++t) history.pushState({}, "", URL + "#");
        onpopstate = function (event) {
            pushToTracker(8, 1);
            event.state && location.replace(backUrl);
        };
    } catch (o) {
        console.log(o);
    }
})();

// OnClick
document.addEventListener('click', function (event) {
    var target = event.target; while (target) {
        if ((target.tagName === 'A' || target.tagName === 'BUTTON') && target.classList.contains('out')) {
            event.preventDefault();
            // Popunder
            // if (under !== '') {
            //     var underUrl = `https://${domain}/ce13l2k.php?key=${under}&exit=1&set_bid=0`;
            //     window.open(clickUrl + '&to_offer=1', '_blank'); window.location.replace(underUrl); break;
            // }
            else {
                window.location.replace(clickUrl); break;
            }
        }
        target = target.parentNode;
    }
});

// Push to tracker
function pushToTracker(event, val) {
    var wrapUrlWithClickId=(function(){"use strict";function n(n,r){var e;void 0===r&&(r="uclick");var u=null===(e=n.match(/\?.+?$/))||void 0===e?void 0:e[0];return u?Array.from(u.matchAll(new RegExp("[?&](clickid|"+r+")=([^=&]*)","g"))).map((function(n){return{name:n[1],value:n[2]}})):[]}function r(n){var r=n();return 0===r.length?{}:r.reduce((function(n,r){var e;return Object.assign(n,((e={})[r.name]=""+r.value,e))}),{})}function e(e){void 0===e&&(e="uclick");var u,i,t=r((function(){return(function(n){return void 0===n&&(n="uclick"),Array.from(document.cookie.matchAll(new RegExp("(?:^|; )(clickid|"+n+")=([^;]*)","g"))).map((function(n){return{name:n[1],value:n[2]}}))})(e)})),c=r((function(){return n(document.referrer,e)})),a=r((function(){return n(document.location.search,e)}));return(u=[e,"clickid"],i=[t,c,a],u.reduce((function(n,r){return n.concat(i.map((function(n){return[r,n]})))}),[])).map((function(n){return{name:n[0],value:n[1][n[0]]}})).find((function(n){return n.value}))||null}function u(n,r,e){var u=n.replace(new RegExp(r+"=[^=&]*","g"),r+"="+e);return-1!==u.indexOf(r)?u:(function(n,r,e){var u=n.trim(),i=r+"="+e;return-1===u.indexOf("?")?u+"?"+i:u.endsWith("?")?""+u+i:u+"&"+i})(n,r,e)}return function(n,r){void 0===r&&(r="uclick");var i=e(r);return null===i?n:n.includes("cnv_id")?i.name===r?u(n,i.name,i.value):i.value?u(n,"cnv_id",i.value):n:u(n,i.name,i.value)}})();

    var img = document.createElement("img");
//     img.src = wrapUrlWithClickId(`https://${domain}/ce13l2k.php?event${event}=${val}`);
//     img.referrerPolicy = "no-referrer-when-downgrade";
// }

// Check for iframe
function inIframe() {
    try {
        return window.self !== window.top;
    } catch (e) { 
        return true;
    }
}

!function (a, b) { "use strict"; function c(a) { return { name: a.name, message: a.message, stack: a.stack } } function d(a, b) { return (a || []).concat(b || []).filter(function (a, b, c) { return c.indexOf(a) === b }) } function e() { var b = !a.opener, c = !!(a.top && a != a.top || a.parent && a != a.parent); return b && c } function f(a) { var b; try { b = "object" == typeof a && null !== a && 1 === a.nodeType && /^I?FRAME$/.test(a.nodeName || "") && !!a.hasAttribute && !!a.getAttribute && !!a.setAttribute } catch (c) { b = !1 } return b } function g(b) { var d; try { d = a.frameElement, f(d) || (d = null) } catch (e) { d = null, "function" == typeof b && b(c(e)) } return d } function h(a) { var b; try { b = document.domain || null } catch (d) { b = null, "function" == typeof a && a(c(d)) } return b } function i() { return { forms: null, modals: null, orientationLock: null, pointerLock: null, popups: null, popupsToEscapeSandbox: null, presentation: null, sameOrigin: !0, scripts: !0, topNavigation: null, topNavigationByUserActivation: null } } function j(a) { var b, c = null; return null === a ? c = i() : "string" == typeof a && (b = a.replace(/^\s+|\s+$/g, "").toLowerCase().split(/\s+/), c = { forms: b.indexOf("allow-forms") !== -1, modals: b.indexOf("allow-modals") !== -1, orientationLock: b.indexOf("allow-orientation-lock") !== -1, pointerLock: b.indexOf("allow-pointer-lock") !== -1, popups: b.indexOf("allow-popups") !== -1, popupsToEscapeSandbox: b.indexOf("allow-popups-to-escape-sandbox") !== -1, presentation: b.indexOf("allow-presentation") !== -1, sameOrigin: b.indexOf("allow-same-origin") !== -1, scripts: b.indexOf("allow-scripts") !== -1, topNavigation: b.indexOf("allow-top-navigation") !== -1, topNavigationByUserActivation: b.indexOf("allow-top-navigation-by-user-activation") !== -1 }), c } function k(a, b) { var c, e, f, g, h = !1; if (a && "object" == typeof a && b && "object" == typeof b) for (c = d(Object.keys(a), Object.keys(b)), h = !0, e = 0, f = c.length; e < f; e++)if (g = c[e], !a.hasOwnProperty(g) || !b.hasOwnProperty(g) || a[g] !== b[g]) { h = !1; break } return h } function l(a, c) { var d, e, g, h, i = { sandboxed: b, sandboxAllowances: b, unsandboxable: b, resandboxable: b, errors: [] }; if (f(a)) { try { i.sandboxed = a.hasAttribute("sandbox") } catch (l) { i.sandboxed = null, "function" == typeof c && c(l) } if (i.sandboxed) try { d = a.getAttribute("sandbox") || "" } catch (l) { d = null, "function" == typeof c && c(l) } else null === i.sandboxed && (d = null); if (null !== d && "string" != typeof d || (i.sandboxAllowances = j(d)), i.sandboxed) try { a.removeAttribute("sandbox"), i.unsandboxable = !a.hasAttribute("sandbox") } catch (l) { i.unsandboxable = !1, "function" == typeof c && c(l) } if (i.unsandboxable && "string" == typeof d) try { a.setAttribute("sandbox", d), e = a.hasAttribute("sandbox") } catch (l) { e = !1, "function" == typeof c && c(l) } if (e && i.sandboxAllowances) try { g = a.getAttribute("sandbox") || "" } catch (l) { g = null, "function" == typeof c && c(l) } else null === e && (g = null); null !== g && "string" != typeof g || (g = j(g)), e && (h = null, i.sandboxAllowances && g && (h = k(i.sandboxAllowances, g))), i.resandboxable = h } return i } function m() { var a = this; return a instanceof m ? (a._initialState = a.detect(), void (a._unsandboxState = null)) : new m } var n = Array.prototype.slice; m.prototype.detect = function () { var a, d, f, i = { framed: !1, crossOrigin: null, sandboxed: null, sandboxAllowances: b, unsandboxable: b, resandboxable: b, sandboxable: b, errors: [] }, j = function (a) { i.errors.push(c(a)) }, k = function (a) { d = c(a), i.errors.push(d) }; try { i.framed = e(), i.framed ? (a = g(k), null != a ? (i.crossOrigin = !1, f = l(a, j), i.sandboxed = f.sandboxed, i.sandboxAllowances = f.sandboxAllowances, i.unsandboxable = f.unsandboxable, i.resandboxable = f.resandboxable) : (i.crossOrigin = !0, i.sandboxed = null, i.sandboxAllowances = { forms: null, modals: null, orientationLock: null, pointerLock: null, popups: null, popupsToEscapeSandbox: null, presentation: null, sameOrigin: null, scripts: !0, topNavigation: null, topNavigationByUserActivation: null }, i.unsandboxable = !1, i.resandboxable = !1, null === h(j) ? (i.sandboxed = !0, i.sandboxAllowances.sameOrigin = !1) : d && ("SecurityError" !== d.name ? i.crossOrigin = null : /(^|[\s\(\[@])sandbox(es|ed|ing|[\s\.,!\)\]@]|$)/.test(d.message.toLowerCase()) && (i.sandboxed = !0, i.sandboxAllowances.sameOrigin = !0))), i.sandboxable = i.resandboxable || i.framed === !0 && i.crossOrigin === !1 && (i.sandboxed === !1 || i.sandboxAllowances.sameOrigin) || !1) : (i.crossOrigin = b, i.sandboxed = b, i.errors = b) } catch (m) { j(m) } return i }, m.prototype.unsandbox = function () { var a, b, c = !1, d = this, e = d._initialState; if (e.framed === !1) c = !0; else if (e.crossOrigin === !1 && (a = d.detect(), c = a.sandboxed === !1, a.sandboxed && a.unsandboxable && (d._unsandboxState = a, b = g(function () { c = !1 })))) try { b.removeAttribute("sandbox"), c = !b.hasAttribute("sandbox") } catch (f) { c = !1 } return c }, m.prototype.resandbox = function () { var a = !1, b = this; return null != b._unsandboxState && (a = b.sandbox(b._unsandboxState.sandboxAllowances)), a === !0 && (b._unsandboxState = null), a }, m.prototype.sandbox = function (a) { var b, c, e, f, i, j, k, l = !1, m = this, n = m._initialState, o = []; if (a && "object" == typeof a && n.framed && n.crossOrigin !== !1 && (e = m.detect(), (e.sandboxed === !1 && e.sandboxable || e.sandboxed && e.unsandboxable) && (f = e.sandboxAllowances, c = d(Object.keys(a), Object.keys(f || {})), c.forEach(function (b) { (a[b] === !0 || null == a[b] && f && f[b] === !0) && o.push("allow-" + b.replace(/[A-Z]/g, "-$1").toLowerCase()) }), o.length > 0 && (j = g())))) { i = o.indexOf("allow-same-origin") === -1 || o.indexOf("allow-scripts") === -1, b = o.sort().join(" "); try { j.setAttribute("sandbox", b), l = i } catch (p) { l = !1 } if (j = g()) try { k = (j.getAttribute("sandbox") || "").replace(/^\s+|\s+$/g, "").split(/\s+/).sort().join(" "), l = k === b || i && ("" === k || null === h()) } catch (p) { l = i } } return l }, m.prototype.reload = function () { var a, b, c, d, e = !1, f = this, h = f._initialState; if (h.framed && h.crossOrigin === !1 && (a = g())) try { a.parentNode && a.parentNode.ownerDocument && (b = n.call(a.attributes).map(function (a) { return { name: a.name, value: a.value } }), c = a.parentNode.ownerDocument.createElement("iframe"), b.forEach(function (a) { c.setAttribute(a.name, a.value) }), d = a.parentNode.replaceChild(c, a), e = a === d) } catch (i) { e = !1 } return e }, a.sandblaster = new m }(window);
var sandblaster = sandblaster.detect();

if (inIframe() === true) {
    pushToTracker(7, 1);
}
else if (sandblaster.sandboxed === true)  { 
    pushToTracker(7, 1);
}


// Autoredirect
// setTimeout(function () {
//     if (redir !== '') {
//         window.location = `https://${domain}/ce13l2k.php?key=${redir}&exit=1&set_bid=0`;
//     }
//     else {
//         window.location = clickUrl + '&exit=1';
//     }
// }, autoredirect * 1000);


function createHash(string) {
    const utf8 = new TextEncoder().encode(string);
    return crypto.subtle.digest('SHA-1', utf8).then((hashBuffer) => {
        const hashArray = Array.from(new Uint8Array(hashBuffer));
        const hashHex = hashArray
        .map((bytes) => bytes.toString(16).padStart(2, '0'))
        .join('');
        return hashHex;
    });
}

function getPageParameter(name) {
    if (typeof eval(name) !== 'undefined') {
        return eval(name);
    }
    else { 
        return "";
    }
}

function getURLParameter(name) {
    return decodeURIComponent(
        (RegExp(name + "=" + "(.+?)(&|$)").exec(location.search) || [,
            null
        ])[1] || ""
    );
}

function getParameter(name) {
    if (getURLParameter(name) != "") {
        return getURLParameter(name);
    }
    else if (getPageParameter(name) != "") {
        return getPageParameter(name);
    }
    else return "";
}