
<?php
session_start();
if(isset($_SESSION['usernamese']))
{
//    echo '<script>alert("fvgbhjnmk,l")</script>';
    echo '<script>window.location.replace("profile.php")</script>';
    exit();
}
?>
<!doctype html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->

    <!-- Mirrored from phuler.myshopify.com/account/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2024 15:37:57 GMT -->
    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
   
    <head>
       
       
        
       
       
        <!-- Basic page needs ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


        <link rel="shortcut icon" href="../cdn/shop/t/24/assets/favicon8508.png?v=134056495275804780971702209807" type="image/png" />


        <!-- Title and description ================================================== -->
        <title>
            Account &ndash; Phuler - Flower Shop Shopify Theme
        </title>



        <!-- Helpers ================================================== -->
        <!-- /snippets/social-meta-tags.liquid -->


        <meta property="og:type" content="website">
        <meta property="og:title" content="Account">

        <meta property="og:image" content="../cdn/shop/t/24/assets/logo8466.php?5400">
        <meta property="og:image:secure_url" content="../cdn/shop/t/24/assets/logo8466.php?5400">


        <meta property="og:url" content="login.php">
        <meta property="og:site_name" content="Phuler - Flower Shop Shopify Theme">




        <meta name="twitter:card" content="summary">



        <link rel="canonical" href="login.php">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <meta name="theme-color" content="#747474">

        <!-- CSS ================================================== -->
        <link href="../cdn/shop/t/24/assets/timbere3cb.css?v=67457228001767066871702209845" rel="stylesheet" type="text/css" media="all" />
        <link href="../cdn/shop/t/24/assets/preloaderb176.css?v=91689511410486745351702209807" rel="stylesheet" type="text/css" media="all" />
        <link href="../cdn/shop/t/24/assets/bootstrap.min9f3a.css?v=19868337340211324411702209807" rel="stylesheet" type="text/css" media="all" />
        <link href="../cdn/shop/t/24/assets/animate14c0.css?v=107502980827701580791702209807" rel="stylesheet" type="text/css" media="all" />
        <link href="../cdn/shop/t/24/assets/owl.carousel.min7170.css?v=100847393044616809951702209807" rel="stylesheet" type="text/css" media="all" />
        <link href="../cdn/shop/t/24/assets/slickb452.css?v=146892651464325103971702209807" rel="stylesheet" type="text/css" media="all" />
        <link href="../cdn/shop/t/24/assets/chosen.minfad3.css?v=163785002911426509331702209807" rel="stylesheet" type="text/css" media="all" />
        <link href="../cdn/shop/t/24/assets/font-awesome.min18c1.css?v=100026142100495278741702209807" rel="stylesheet" type="text/css" media="all" />
        <link href="../cdn/shop/t/24/assets/simple-line-iconsbc96.css?v=95102901115982157641702209807" rel="stylesheet" type="text/css" media="all" />
        <link href="../cdn/shop/t/24/assets/ionicons.min3b04.css?v=184364306120675196201702209807" rel="stylesheet" type="text/css" media="all" />
        <link href="../cdn/shop/t/24/assets/meanmenu.min8f7b.css?v=153643882524970029501702209807" rel="stylesheet" type="text/css" media="all" />
        <link href="../cdn/shop/t/24/assets/style68f5.css?v=167355455109874141581702209807" rel="stylesheet" type="text/css" media="all" />
        <link href="../cdn/shop/t/24/assets/responsive58f4.css?v=158506512604919211511702209807" rel="stylesheet" type="text/css" media="all" />


        <link href="../cdn/shop/t/24/assets/customfdd7.css?v=10685352901751745051716894181" rel="stylesheet" type="text/css" media="all" />

        <link href="../cdn/shop/t/24/assets/custom-responsive285a.css?v=30685542570977267671702470638" rel="stylesheet" type="text/css" media="all" />

        <link href="../cdn/shop/t/24/assets/theme-color4a53.css?v=76972887816495691471702906413" rel="stylesheet" type="text/css" media="all" />
        <link href="../cdn/shop/t/24/assets/skin-themeb21f.css?v=107341752746923071301702209807" rel="stylesheet" type="text/css" media="all" />

        <!-- Header hook for plugins ================================================== -->
        <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/2155708489/digital_wallets/dialog">
        <script async="async" src="../checkouts/internal/preloadsd568.js?locale=en-IN"></script>
        <script async="async" src="../../shop.app/checkouts/internal/preloads6344.js?locale=en-IN&amp;shop_id=2155708489" crossorigin="anonymous"></script>
        <script id="shopify-features" type="application/json">{"accessToken":"adb0ba7c3bd0ccce210403247f86fe43","betas":["rich-media-storefront-analytics"],"domain":"phuler.myshopify.com","predictiveSearch":true,"shopId":2155708489,"smart_payment_buttons_url":"https:\/\/phuler.myshopify.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js","dynamic_checkout_cart_url":"https:\/\/phuler.myshopify.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js","locale":"en"}</script>
        <script>var Shopify = Shopify || {};
            Shopify.shop = "phuler.myshopify.com";
            Shopify.locale = "en";
            Shopify.currency = {"active": "USD", "rate": "1.0"};
            Shopify.country = "IN";
            Shopify.theme = {"name": "H1 Phuler-V3-0-9 (OS-2.0)", "id": 127300468809, "theme_store_id": null, "role": "main"};
            Shopify.theme.handle = "null";
            Shopify.theme.style = {"id": null, "handle": null};
            Shopify.cdnHost = "phuler.myshopify.com/cdn";
            Shopify.routes = Shopify.routes || {};
            Shopify.routes.root = "../index.php";</script>
        <script type="module">!function (o) {
                (o.Shopify = o.Shopify || {}).modules = !0}(window);</script>
        <script>!function (o) {
                function n() {
                    var o = [];
                    function n() {
                        o.push(Array.prototype.slice.apply(arguments))
                    }
                    return n.q = o, n
                }
                var t = o.Shopify = o.Shopify || {};
                t.loadFeatures = n(), t.autoloadFeatures = n()
            }(window);</script>
        <script id="shop-js-features" type="application/json">{"compact":true,"defer_modal_on_autofill":true}</script>
        <script id="shop-js-analytics" type="application/json">{"pageType":"customers/login"}</script>
        <script id="__st">var __st = {"a": 2155708489, "offset": -14400, "reqid": "7b33a0ad-8a67-44bf-9a47-951ef8fd5ea5-1721230502", "pageurl": "phuler.myshopify.com\/account\/login", "u": "b32b26fa786d"};</script>
        <script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
        <script id="captcha-bootstrap">!function () {
                'use strict';
                const t = 'contact', e = 'account', n = 'new_comment', o = t => t.map((([t, e]) => `form[action*='/${t}']:not([data-nocaptcha='true']) input[name='form_type'][value='${e}']`)).join(',');
                function c(t, e) {
                    try {
                        const n = window.sessionStorage;
                        for (const[o, c]of Object.entries(JSON.parse(n.getItem(e))))
                            t.elements[o] && (t.elements[o].value = c); n.removeItem(e)
                    } catch {
                    }
                }
                const r = 'form_type', s = 'cptcha';
                function a(t) {
                    t.dataset[s] = !0
                }
                ((i, m, f, u, d, p, l) => {
                    if (0)
                        return;
                    let E = !1;
                    const _ = (t, e, n) => {
                        const o = i[f][u], c = o.bindForm, r = '6LeHG2ApAAAAAO4rPaDW-qVpPKPOBfjbCpzJB9ey', s = {infoText: '', privacyText: '', termsText: ''};
                        if (c)
                            return c(t, r, e, s).then(n);
                        o.q.push([[t, r, e, s], n]), E || (m.body.append(Object.assign(m.createElement('script'), {id: 'captcha-provider', async: !0, src: 'https://cdn.shopify.com/shopifycloud/storefront-forms-hcaptcha/ce_storefront_forms_captcha_recaptcha.v1.3.0.iife.js'})), E = !0)
                    };
                    i[f] = i[f] || {}, i[f][u] = i[f][u] || {}, i[f][u].q = [], i[f][d] = i[f][d] || {}, i[f][d].protect = function (t, e) {
                        _(t, void 0, e), a(t)
                    }, Object.freeze(i[f][d]), function (i, m, f, u, d, p) {
                        const[l, E, _] = function (c, r, s) {
                            const a = r ? [[t, t], ['blogs', n], ['comments', n], [t, 'customer']] : [], i = c ? [[e, 'customer_login'], [e, 'guest_login'], [e, 'recover_customer_password'], [e, 'create_customer']] : [], m = [...a, ...i], f = o(m), u = o(a), d = s && o(m.filter((([t, e]) => s.includes(e)))), p = t => () => t ? [...document.querySelectorAll(t)].map((t => t.form)) : [];
                            return[p(f), p(u), p(d)]
                        }(!0, !0, ['guest_login']),
                        T = t => {
                            const e = t.target, n = e instanceof HTMLFormElement ? e : e && e.form;
                            return n && l().find((t => n === t))
                        };
                        i.addEventListener('submit', (t => {
                            T(t) && t.preventDefault()
                        }));
                        const h = (t, e) => {
                            t && !t.dataset[s] && (f(t, e.some((e => e === t))), a(t))
                        };
                        for (const t of['focusin', 'change'])
                            i.addEventListener(t, (t => h(T(t), E()))); const v = m.get('form_key'), g = m.get(r), y = v && g;
                        i.addEventListener('DOMContentLoaded', (() => {
                            const t = E();
                            if (y)
                                for (const e of t)
                                    e.elements[r].value === g && c(e, v); [...new Set([..._(), ...l().filter((t => 'true' === t.dataset.shopifyCaptcha))])].forEach((e => h(e, t)))
                        }))
                    }(m, new URLSearchParams(i.location.search), _)
                })(window, document, 'Shopify', 'ce_forms', 'captcha')
            }();</script>
        <script integrity="sha256-n5Uet9jVOXPHGd4hH4B9Y6+BxkTluaaucmYaxAjUcvY=" data-source-attribution="shopify.loadfeatures" defer="defer" src="../cdn/shopifycloud/shopify/assets/storefront/load_feature-9f951eb7d8d53973c719de211f807d63af81c644e5b9a6ae72661ac408d472f6.js" crossorigin="anonymous"></script>
        <script integrity="sha256-HAs5a9TQVLlKuuHrahvWuke+s1UlxXohfHeoYv8G2D8=" data-source-attribution="shopify.dynamic-checkout" defer="defer" src="../cdn/shopifycloud/shopify/assets/storefront/features-1c0b396bd4d054b94abae1eb6a1bd6ba47beb35525c57a217c77a862ff06d83f.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" media="screen" href="../cdn/shop/t/24/compiled_assets/styles8466.css?5400">
        <script id="sections-script" data-sections="header,footer" defer="defer" src="../cdn/shop/t/24/compiled_assets/scripts8466.js?5400"></script>

        <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>
        <!-- /snippets/oldIE-js.liquid -->


        <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js" type="text/javascript"></script>
        <script src="//phuler.myshopify.com/cdn/shop/t/24/assets/respond.min.js?v=52248677837542619231702209807" type="text/javascript"></script>
        <link href="//phuler.myshopify.com/cdn/shop/t/24/assets/respond-proxy.php" id="respond-proxy" rel="respond-proxy" />
        <link href="//phuler.myshopify.com/search?q=5dc902a5f7198009761cd0815639284a" id="respond-redirect" rel="respond-redirect" />
        <script src="//phuler.myshopify.com/search?q=5dc902a5f7198009761cd0815639284a" type="text/javascript"></script>
        <![endif]-->



        <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
        <script src="../cdn/shop/t/24/assets/modernizr-2.8.3.min5a5c.js?v=174727525422211915231702209807" type="text/javascript"></script>
        <script src="../cdn/shop/t/24/assets/jquery-1.12.0.min1141.js?v=180303338299147220221702209807" type="text/javascript"></script>
        <script src="../cdn/shop/t/24/assets/jquery-migrate-v1.4.1d133.js?v=74754078088640826101702209807" type="text/javascript"></script>
        <script src="../cdn/shop/t/24/assets/popper0e54.js?v=34695330375260839601702209807" type="text/javascript"></script>
        <script src="../cdn/shop/t/24/assets/bootstrap.min9cec.js?v=16883752084331194951702209807" type="text/javascript"></script>
        <script src="../cdn/shop/t/24/assets/imagesloaded.pkgd.mincc97.js?v=122082684965831503061702209807" type="text/javascript"></script>
        <script src="../cdn/shop/t/24/assets/isotope.pkgd.min2d99.js?v=1508399553395853191702209807" type="text/javascript"></script>
        <script src="../cdn/shop/t/24/assets/owl.carousel.min8709.js?v=75813715580695946121702209807" type="text/javascript"></script>
        <script src="../cdn/shop/t/24/assets/plugins9dd2.js?v=164799071795924659891702209807" type="text/javascript"></script>

        <script src="../cdn/shop/t/24/assets/jquery.matchHeight2953.js?v=2422420511068287131702209807" type="text/javascript"></script>
        <script src="../cdn/shop/t/24/assets/instafeed.minfc9c.js?v=113591108456926230921702209807" type="text/javascript"></script>

        <!-- Ajax Cart js -->
        <script src="../cdn/shopifycloud/shopify/assets/themes_support/option_selection-86cdd286ddf3be7e25d68b9fc5965d7798a3ff6228ff79af67b3f4e41d6a34be.js" type="text/javascript"></script>
        <script src="../cdn/shopifycloud/shopify/assets/themes_support/api.jquery-b0af070cfe3f5cf7c92f9e2a5da2665ee07ed2aad63bb408f8d6672f894a5996.js" type="text/javascript"></script>
        <script src="../cdn/shop/t/24/assets/cart.api91e8.js?v=7231891403980676631702209807" type="text/javascript"></script>

        <script src="../cdn/shop/t/24/assets/theme8da0.js?v=34492510139876353851702209807" type="text/javascript"></script>


        <script async>
            window.money_format = "<span class=money>${{amount}} USD</span>";
        </script>



        <script src="../cdn/shopifycloud/shopify/assets/themes_support/shopify_common-33bb9d312118840468a53f36b59c62c1e8f2b7d1a0a77250db9e300441827470.js" type="text/javascript"></script>


        <!-- "snippets/alireviews_core.liquid" was not rendered, the associated app was uninstalled --> 
        <link href="https://monorail-edge.shopifysvc.com/" rel="dns-prefetch">
        <script>(function () {
                if ("sendBeacon" in navigator && "performance" in window) {
                    var session_token = document.cookie.match(/_shopify_s=([^;]*)/);function handle_abandonment_event(e) {
                        var entries = performance.getEntries().filter(function (entry) {
                            return /monorail-edge.shopifysvc.com/.test(entry.name);});if (!window.abandonment_tracked && entries.length === 0) {
                            window.abandonment_tracked = true;var currentMs = Date.now();var navigation_start = performance.timing.navigationStart;
                            var payload = {shop_id: 2155708489, url: window.location.href, navigation_start, duration: currentMs - navigation_start, session_token: session_token && session_token.length === 2 ? session_token[1] : "", page_type: "customers/login"};
                            window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({schema_id: "online_store_buyer_site_abandonment/1.1", payload: payload, metadata: {event_created_at_ms: currentMs, event_sent_at_ms: currentMs}}));
                        }
                    }
                    window.addEventListener('pagehide', handle_abandonment_event);
                }
            }());</script>
        <script id="web-pixels-manager-setup">(function e(e, n, a, t, r) {
                var o = "function" == typeof BigInt && -1 !== BigInt.toString().indexOf("[native code]") ? "modern" : "legacy";
                window.Shopify = window.Shopify || {};
                var i = window.Shopify;
                i.analytics = i.analytics || {};
                var s = i.analytics;
                s.replayQueue = [], s.publish = function (e, n, a) {
                    return s.replayQueue.push([e, n, a]), !0
                };
                try {
                    self.performance.mark("wpm:start")
                } catch (e) {
                }
                var l = [a, "/wpm", "/b", r, o.substring(0, 1), ".js"].join("");
                !function (e) {
                    var n = e.src, a = e.async, t = void 0 === a || a, r = e.onload, o = e.onerror, i = document.createElement("script"), s = document.head, l = document.body;
                    i.async = t, i.src = n, r && i.addEventListener("load", r), o && i.addEventListener("error", o), s ? s.appendChild(i) : l ? l.appendChild(i) : console.error("Did not find a head or body element to append the script")
                }({src: l, async: !0, onload: function () {
                        var a = window.webPixelsManager.init(e);
                        n(a);
                        var t = window.Shopify.analytics;
                        t.replayQueue.forEach((function (e) {
                            var n = e[0], t = e[1], r = e[2];
                            a.publishCustomEvent(n, t, r)
                        })), t.replayQueue = [], t.publish = a.publishCustomEvent, t.visitor = a.visitor
                    }, onerror: function () {
                        var n = e.storefrontBaseUrl.replace(/\/$/, ""), a = "".concat(n, "/.well-known/shopify/monorail/unstable/produce_batch"), r = JSON.stringify({metadata: {event_sent_at_ms: (new Date).getTime()}, events: [{schema_id: "web_pixels_manager_load/3.1", payload: {version: t || "latest", bundle_target: o, page_url: self.location.href, status: "failed", surface: e.surface, error_msg: "".concat(l, " has failed to load")}, metadata: {event_created_at_ms: (new Date).getTime()}}]});
                        try {
                            if (self.navigator.sendBeacon.bind(self.navigator)(a, r))
                                return!0
                        } catch (e) {
                        }
                        var i = new XMLHttpRequest;
                        try {
                            return i.open("POST.php", a, !0), i.setRequestHeader("Content-Type", "text/plain"), i.send(r), !0
                        } catch (e) {
                            console && console.warn && console.warn("[Web Pixels Manager] Got an unhandled error while logging a load error.")
                        }
                        return!1
                    }})
            })({shopId: 2155708489, storefrontBaseUrl: "https://phuler.myshopify.com", extensionsBaseUrl: "https://extensions.shopifycdn.com/cdn/shopifycloud/web-pixels-manager", surface: "storefront-renderer", enabledBetaFlags: ["5de24938", "4735909c"], webPixelsConfigList: [{"id": "shopify-app-pixel", "configuration": "{}", "eventPayloadVersion": "v1", "runtimeContext": "STRICT", "scriptVersion": "0132", "apiClientId": "shopify-pixel", "type": "APP", "privacyPurposes": ["ANALYTICS", "MARKETING"]}, {"id": "shopify-custom-pixel", "eventPayloadVersion": "v1", "runtimeContext": "LAX", "scriptVersion": "0132", "apiClientId": "shopify-pixel", "type": "CUSTOM", "privacyPurposes": ["ANALYTICS", "MARKETING"]}], initData: {"shop": {"name": "Phuler - Flower Shop Shopify Theme", "paymentSettings": {"currencyCode": "USD"}, "myshopifyDomain": "phuler.myshopify.com", "countryCode": "BD", "storefrontUrl": "https:\/\/phuler.myshopify.com"}, "cart": null, "checkout": null, "customer": null, "productVariants": []}, }, function pageEvents(webPixelsManagerAPI) {
                webPixelsManagerAPI.publish("page_viewed");
            }, "../cdn.php", "f6cc849cf8c2f3c43894a5003b289dd597df2566", "53f7ad58w0d155a36p65c7aeb7mce9423a5", );</script>  <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
                window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
                window.ShopifyAnalytics.meta.currency = 'USD';
                var meta = {"page": {}};
                for (var attr in meta) {
                    window.ShopifyAnalytics.meta[attr] = meta[attr];
                }</script>
        <script>window.ShopifyAnalytics.merchantGoogleAnalytics = function () {

            };
        </script>
        <script class="analytics">(function () {
                var customDocumentWrite = function (content) {
                    var jquery = null;

                    if (window.jQuery) {
                        jquery = window.jQuery;
                    } else if (window.Checkout && window.Checkout.$) {
                        jquery = window.Checkout.$;
                    }

                    if (jquery) {
                        jquery('body').append(content);
                    }
                };

                var hasLoggedConversion = function (token) {
                    if (token) {
                        return document.cookie.indexOf('loggedConversion=' + token) !== -1;
                    }
                    return false;
                }

                var setCookieIfConversion = function (token) {
                    if (token) {
                        var twoMonthsFromNow = new Date(Date.now());
                        twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

                        document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
                    }
                }

                var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
                if (trekkie.integrations) {
                    return;
                }
                trekkie.methods = [
                    'identify',
                    'page',
                    'ready',
                    'track',
                    'trackForm',
                    'trackLink'
                ];
                trekkie.factory = function (method) {
                    return function () {
                        var args = Array.prototype.slice.call(arguments);
                        args.unshift(method);
                        trekkie.push(args);
                        return trekkie;
                    };
                };
                for (var i = 0; i < trekkie.methods.length; i++) {
                    var key = trekkie.methods[i];
                    trekkie[key] = trekkie.factory(key);
                }
                trekkie.load = function (config) {
                    trekkie.config = config || {};
                    trekkie.config.initialDocumentCookie = document.cookie;
                    var first = document.getElementsByTagName('script')[0];
                    var script = document.createElement('script');
                    script.type = 'text/javascript';
                    script.onerror = function (e) {
                        var scriptFallback = document.createElement('script');
                        scriptFallback.type = 'text/javascript';
                        scriptFallback.onerror = function (error) {
                            var Monorail = {
                                produce: function produce(monorailDomain, schemaId, payload) {
                                    var currentMs = new Date().getTime();
                                    var event = {
                                        schema_id: schemaId,
                                        payload: payload,
                                        metadata: {
                                            event_created_at_ms: currentMs,
                                            event_sent_at_ms: currentMs
                                        }
                                    };
                                    return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
                                },
                                sendRequest: function sendRequest(endpointUrl, payload) {
                                    // Try the sendBeacon API
                                    if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
                                        var blobData = new window.Blob([payload], {
                                            type: 'text/plain'
                                        });

                                        if (window.navigator.sendBeacon(endpointUrl, blobData)) {
                                            return true;
                                        } // sendBeacon was not successful

                                    } // XHR beacon

                                    var xhr = new XMLHttpRequest();

                                    try {
                                        xhr.open('POST.php', endpointUrl);
                                        xhr.setRequestHeader('Content-Type', 'text/plain');
                                        xhr.send(payload);
                                    } catch (e) {
                                        console.log(e);
                                    }

                                    return false;
                                },
                                isIos12: function isIos12() {
                                    return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
                                }
                            };
                            Monorail.produce('monorail-edge.shopifysvc.com',
                                    'trekkie_storefront_load_errors/1.1',
                                    {shop_id: 2155708489,
                                        theme_id: 127300468809,
                                        app_name: "storefront",
                                        context_url: window.location.href,
                                        source_url: "//phuler.myshopify.com/cdn/s/trekkie.storefront.a1ad2ab43a5932ff96084a0e2e69f51ba73ddbec.min.js"});

                        };
                        scriptFallback.async = true;
                        scriptFallback.src = '../cdn/s/trekkie.storefront.a1ad2ab43a5932ff96084a0e2e69f51ba73ddbec.min.js';
                        first.parentNode.insertBefore(scriptFallback, first);
                    };
                    script.async = true;
                    script.src = '../cdn/s/trekkie.storefront.a1ad2ab43a5932ff96084a0e2e69f51ba73ddbec.min.js';
                    first.parentNode.insertBefore(script, first);
                };
                trekkie.load(
                        {"Trekkie": {"appName": "storefront", "development": false, "defaultAttributes": {"shopId": 2155708489, "isMerchantRequest": null, "themeId": 127300468809, "themeCityHash": "17099957107024940738", "contentLanguage": "en", "currency": "USD"}, "isServerSideCookieWritingEnabled": true, "monorailRegion": "shop_domain", "enabledBetaFlags": ["bbcf04e6"]}, "Session Attribution": {}, "S2S": {"facebookCapiEnabled": false, "source": "trekkie-storefront-renderer"}}
                );

                var loaded = false;
                trekkie.ready(function () {
                    if (loaded)
                        return;
                    loaded = true;

                    window.ShopifyAnalytics.lib = window.trekkie;


                    var originalDocumentWrite = document.write;
                    document.write = customDocumentWrite;
                    try {
                        window.ShopifyAnalytics.merchantGoogleAnalytics.call(this);
                    } catch (error) {
                    }
                    ;
                    document.write = originalDocumentWrite;

                    window.ShopifyAnalytics.lib.page(null, {});

                    var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
                    var token = match ? match[1] : undefined;
                    if (!hasLoggedConversion(token)) {
                        setCookieIfConversion(token);

                    }
                });


                var eventsListenerScript = document.createElement('script');
                eventsListenerScript.async = true;
                eventsListenerScript.src = "../cdn/shopifycloud/shopify/assets/shop_events_listener-61fa9e0a912c675e178777d2b27f6cbd482f8912a6b0aa31fa3515985a8cd626.js";
                document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

            })();</script>
        <script class="boomerang">
            (function () {
                if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
                    return;
                }
                window.BOOMR = window.BOOMR || {};
                window.BOOMR.snippetStart = new Date().getTime();
                window.BOOMR.snippetExecuted = true;
                window.BOOMR.snippetVersion = 12;
                window.BOOMR.application = "storefront-renderer";
                window.BOOMR.themeName = "";
                window.BOOMR.themeVersion = "";
                window.BOOMR.shopId = 2155708489;
                window.BOOMR.themeId = 127300468809;
                window.BOOMR.renderRegion = "gcp-us-east1";
                window.BOOMR.url =
                        "../cdn/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
                var where = document.currentScript || document.getElementsByTagName("script")[0];
                var parentNode = where.parentNode;
                var promoted = false;
                var LOADER_TIMEOUT = 3000;
                function promote() {
                    if (promoted) {
                        return;
                    }
                    var script = document.createElement("script");
                    script.id = "boomr-scr-as";
                    script.src = window.BOOMR.url;
                    script.async = true;
                    parentNode.appendChild(script);
                    promoted = true;
                }
                function iframeLoader(wasFallback) {
                    promoted = true;
                    var dom, bootstrap, iframe, iframeStyle;
                    var doc = document;
                    var win = window;
                    window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
                    bootstrap = function (parent, scriptId) {
                        var script = doc.createElement("script");
                        script.id = scriptId || "boomr-if-as";
                        script.src = window.BOOMR.url;
                        BOOMR_lstart = new Date().getTime();
                        parent = parent || doc.body;
                        parent.appendChild(script);
                    };
                    if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
                        window.BOOMR.snippetMethod = "s";
                        bootstrap(parentNode, "boomr-async");
                        return;
                    }
                    iframe = document.createElement("IFRAME");
                    iframe.src = "about:blank";
                    iframe.title = "";
                    iframe.role = "presentation";
                    iframe.loading = "eager";
                    iframeStyle = (iframe.frameElement || iframe).style;
                    iframeStyle.width = 0;
                    iframeStyle.height = 0;
                    iframeStyle.border = 0;
                    iframeStyle.display = "none";
                    parentNode.appendChild(iframe);
                    try {
                        win = iframe.contentWindow;
                        doc = win.document.open();
                    } catch (e) {
                        dom = document.domain;
                        iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
                        win = iframe.contentWindow;
                        doc = win.document.open();
                    }
                    if (dom) {
                        doc._boomrl = function () {
                            this.domain = dom;
                            bootstrap();
                        };
                        doc.write("<body onload='document._boomrl();'>");
                    } else {
                        win._boomrl = function () {
                            bootstrap();
                        };
                        if (win.addEventListener) {
                            win.addEventListener("load", win._boomrl, false);
                        } else if (win.attachEvent) {
                            win.attachEvent("onload", win._boomrl);
                        }
                    }
                    doc.close();
                }
                var link = document.createElement("link");
                if (link.relList &&
                        typeof link.relList.supports === "function" &&
                        link.relList.supports("preload") &&
                        ("as" in link)) {
                    window.BOOMR.snippetMethod = "p";
                    link.href = window.BOOMR.url;
                    link.rel = "preload";
                    link.as = "script";
                    link.addEventListener("load", promote);
                    link.addEventListener("error", function () {
                        iframeLoader(true);
                    });
                    setTimeout(function () {
                        if (!promoted) {
                            iframeLoader(true);
                        }
                    }, LOADER_TIMEOUT);
                    BOOMR_lstart = new Date().getTime();
                    parentNode.appendChild(link);
                } else {
                    iframeLoader(false);
                }
                function boomerangSaveLoadTime(e) {
                    window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
                }
                if (window.addEventListener) {
                    window.addEventListener("load", boomerangSaveLoadTime, false);
                } else if (window.attachEvent) {
                    window.attachEvent("onload", boomerangSaveLoadTime);
                }
                if (document.addEventListener) {
                    document.addEventListener("onBoomerangLoaded", function (e) {
                        e.detail.BOOMR.init({
                            ResourceTiming: {
                                enabled: true,
                                trackedResourceTypes: ["script", "img", "css"]
                            },
                        });
                        e.detail.BOOMR.t_end = new Date().getTime();
                    });
                } else if (document.attachEvent) {
                    document.attachEvent("onpropertychange", function (e) {
                        if (!e)
                            e = event;
                        if (e.propertyName === "onBoomerangLoaded") {
                            e.detail.BOOMR.init({
                                ResourceTiming: {
                                    enabled: true,
                                    trackedResourceTypes: ["script", "img", "css"]
                                },
                            });
                            e.detail.BOOMR.t_end = new Date().getTime();
                        }
                    });
                }
            })();</script>
        <script
            defer
            src="../cdn/shopifycloud/perf-kit/shopify-perf-kit-unstable.min.js"
            data-application="storefront-renderer"
            data-shop-id="2155708489"
            data-render-region="gcp-us-east1"
            data-page-type="customers/login"
            data-theme-instance-id="127300468809"
            data-monorail-region="shop_domain"
            data-resource-timing-sampling-rate="10"
        ></script>
    </head>


    <body id="account" class="template-customers-login" >







        <div id="shopify-section-header" class="shopify-section"><!-- header start -->
            <header class="header-area  clearfix" id="section-header">


                <div class="header-top  d-none d-lg-block">
                    <div class="container">
                        <div class="border-bottom-1">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="welcome-area">

                                        <p>Welcome To our shop!</p>

                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-12">
                                    <div class="account-curr-lang-wrap f-right">
                                        <ul>

                                            <li class="top-hover header-search same-style">
                                                <button class="search-toggle">
                                                    <i class="ion-search s-open"></i>
                                                    <i class="ion-close s-close"></i>
                                                </button>
                                                <div class="search-content">
                                                    <form action="https://phuler.myshopify.com/search" method="get" role="search">
                                                        <input id="search" type="search" name="q" value="" placeholder="Search our store" class="input-group-field input-text" aria-label="Search our store">
                                                        <button type="submit">
                                                            <i class="ion-search"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </li>

                                            <script>

            /*--
             Header Search Toggle
             -----------------------------------*/
            var searchToggle = $('.search-toggle');
            searchToggle.on('click', function () {
                if ($(this).hasClass('open')) {
                    $(this).removeClass('open');
                    $(this).siblings('.search-content').removeClass('open');
                } else {
                    $(this).addClass('open');
                    $(this).siblings('.search-content').addClass('open');
                }
            })



                                            </script>
                                            <li class="top-hover"><a href="#">My Profile</a>
                                                
                                            </li>
                                            <li class="top-hover drodown-show common-currency-picker currency">
                                                <a href="#">
                                                    <span class="current-currency">Logout</span>
                                                </a>

<!--                                                <ul id="currencies">




                                                    <li data-currency="USD" class="currency__item"><a style="cursor: pointer">&#036; USD</a></li>




                                                    <li data-currency="EUR" class="currency__item"><a style="cursor: pointer">&#128; EUR</a></li>




                                                    <li data-currency="GBP" class="currency__item"><a style="cursor: pointer">&#163; GBP</a></li>




                                                    <li data-currency="INR" class="currency__item"><a style="cursor: pointer">&#x20B9; INR</a></li>




                                                    <li data-currency="JPY" class="currency__item"><a style="cursor: pointer">&#165; JPY</a></li>

                                                </ul>-->
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <style>



                    #section-header .header-top .border-bottom-1 {
                        border-bottom: 1px solid #ededed;
                    }

                    #section-header .header-top {
                        background: #ffffff;
                    }

                    #section-header .header-top {
                        padding-top:0px;
                    }

                    #section-header .header-top {
                        padding-bottom:0px;
                    }


                    @media (min-width: 768px) and (max-width: 991px){

                        #section-header  .header-top {
                            padding-top:0px;
                        }

                        #section-header .header-top {
                            padding-bottom:0px;
                        }

                    }
                    @media (max-width: 767px) {

                        #section-header .header-top {
                            padding-top:0px;
                        }

                        #section-header .header-top {
                            padding-bottom:0px;
                        }
                    }





                    #section-header .welcome-area > p {
                        color: #454545;
                    }


                    #section-header .same-style button i {
                        color: #545454;
                    }

                    #section-header .account-curr-lang-wrap ul li a {
                        color: #454545;
                    }


                    #section-header .account-curr-lang-wrap ul li:hover > a {
                        color: #ff3d2a;
                    }


                    #section-header .account-curr-lang-wrap ul li ul li a {
                        color: #454545;
                    }
                    #section-header .account-curr-lang-wrap ul li ul li:hover > a {
                        color: #ff3d2a;
                    }



                </style>


                <div class="header-bottom  sticky-header ">
                    <div class="container d-none d-lg-block ">
                        <div class="row  ">
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="logo">


                                    <a href="../index.php">
                                        <img src="../cdn/shop/files/0fc34013-64d2-4011-be96-996a701b5f5e.jpg" alt="Phuler - Flower Shop Shopify Theme">
                                    </a>

                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8 col-6"> 
                                <div class="header-bottom-right">
                                    <div class="main-menu">
                                        <nav>
                                            <ul>



                                                <li class="top-hover"><a href="../index.php">Home</a>
<!--                                                    <ul class="submenu">



                                                        <li><a href="../indexc8e8.php?preview_theme_id=127300468809">home version 1</a></li>




                                                        <li><a href="../index8264.php?preview_theme_id=127356436553">home version 2</a></li>




                                                        <li><a href="../index060f.php?preview_theme_id=127360860233">home version 3</a></li>




                                                        <li><a href="../index8345.php?preview_theme_id=127363842121">home version 4</a></li>




                                                        <li><a href="../indexcee1.php?preview_theme_id=127373082697">home Christmas</a></li>




                                                        <li><a href="../index2f1c.php?preview_theme_id=127373148233">home version  RTL</a></li>


                                                    </ul>-->
                                                </li>


<!--customer menu-->

                                                <li class="top-hover"><a href="../collections/all.php">customer</a>
                                                    <ul class="submenu">



                                                         <li><a href="../products/cras-neque-metus.php">search</a></li>

                                                        <li><a href="../products/aliquam-consequat-mattis.php">view</a></li>


                                                    </ul>
                                                </li>


<!--product menu-->

                                                <li class="top-hover"><a href="../products/accusantium-doloremque.php">Products </a>
                                                    <ul class="submenu">

                                                        <li><a href="../products/cras-neque-metus.php">Add Product</a></li>

                                                        <li><a href="../products/aliquam-consequat-mattis.php">Edit Product</a></li>

                                                        <li><a href="../products/affiliate-link-product.php">Delete product </a></li>

                                                        <li><a href="../products/fat-fermentum-metusid.php">Search Product</a></li>




                                                                                             </ul>
                                                </li>


<!--staff-->

                                                <li class="top-hover"><a href="../blogs/news.php">Staff</a>
                                                    <ul class="submenu">

                                                    <li class="menu-item-has-children">
                                                        <a href="#">Worker</a>
                                                        <ul class="sub-menu">

                                                            <li><a href="../products/affiliate-link-product.php">Add</a></li>

                                                            <li><a href="../products/aliquam-consequat-mattis.php">view</a></li>

                                                         </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="#">Delivery Boy</a>
                                                        <ul class="sub-menu">

                                                            <li><a href="../products/affiliate-link-product.php">Add</a></li>

                                                            <li><a href="../products/aliquam-consequat-mattis.php">view</a></li>

                                                         </ul>
                                                    </li>
                                                        
                                                    </ul>
                                                    <!--flower stock menu-->
                                                </li>

<li class="top-hover"><a href="../products/accusantium-doloremque.php">Flower stock </a>
                                                    <ul class="submenu">

                                                        <li><a href="../products/cras-neque-metus.php">Having</a></li>

                                                        <li><a href="../products/aliquam-consequat-mattis.php">Taken</a></li>
                               

                                                                                             </ul>
                                                </li>
<!--provider menu-->
<li class="top-hover"><a href="../products/accusantium-doloremque.php">Provider </a>
                                                    <ul class="submenu">

                                                        <li><a href="../products/cras-neque-metus.php">Add</a></li>

                                                        <li><a href="../products/aliquam-consequat-mattis.php">Edit</a></li>

                                                        <li><a href="../products/affiliate-link-product.php">View </a></li>

                                                        <li><a href="../products/fat-fermentum-metusid.php">Search</a></li>




                                                                                             </ul>
                                                </li>
                                                <!--order track-->
                                                <li class="top-hover"><a href="../products/accusantium-doloremque.php">Order track </a>
                                                    <ul class="submenu">

                                                        <li><a href="../products/cras-neque-metus.php">View</a></li>

                                                      
                                                                                             </ul>
                                                </li>
                                                <!--payment-->
                                                <li class="top-hover"><a href="../products/accusantium-doloremque.php">Payment </a>
                                                    <ul class="submenu">

                                                        <li><a href="../products/cras-neque-metus.php">Calculation</a></li>

                                                                                             </ul>
                                                </li>
                                                <li><a href="../pages/about.php">about</a></li>




                                                <li><a href="../pages/contact.php">contact</a></li>


                                            </ul>
                                        </nav>
                                    </div>


                                    <script>

                                        jQuery('.main-menu .mega-menu-tree').parent('ul').addClass('mega-menu');

                                        jQuery('.main-menu .mega-menu-tree').parents('.top-hover').addClass('mega-menu-position');

                                    </script>



                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area  d-lg-none d-md-block">
                        <!--====================  mobile header area ====================-->

                        <!--====================  End of mobile header area  ====================-->

                        <!--=======  offcanvas mobile menu  =======-->
                        <div class="offcanvas-mobile-menu" id="mobile-menu-overlay">
                            <a href="javascript:void(0)" class="offcanvas-menu-close" id="mobile-menu-close-trigger">
                                <i class="fa fa-times"></i>
                            </a>
                            <div class="offcanvas-wrapper">
                                <div class="offcanvas-inner-content"><div class="offcanvas-mobile-search-area">
                                        <form action="https://phuler.myshopify.com/search" method="get" role="search">
                                            <input type="hidden" name="type" value="product">
                                            <input type="search" name="q" value="" placeholder="Search our store" aria-label="Search our store">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </form>
<!--                                    </div><nav class="offcanvas-navigation mobile-offcanvas-navigation">
                                        <ul>



                                            <li class="menu-item-has-children">
                                                <a href="../index.php">Home</a>
                                                <ul class="sub-menu">

                                                    <li><a href="../indexc8e8.php?preview_theme_id=127300468809">home version 1</a></li>




                                                    <li><a href="../index8264.php?preview_theme_id=127356436553">home version 2</a></li>




                                                    <li><a href="../index060f.php?preview_theme_id=127360860233">home version 3</a></li>




                                                    <li><a href="../index8345.php?preview_theme_id=127363842121">home version 4</a></li>




                                                    <li><a href="../indexcee1.php?preview_theme_id=127373082697">home Christmas</a></li>




                                                    <li><a href="../index2f1c.php?preview_theme_id=127373148233">home version  RTL</a></li>


                                                </ul>
                                            </li>




                                            <li class="menu-item-has-children">
                                                <a href="../collections/all.php">shop</a>
                                                <ul class="sub-menu">



                                                    <li class="menu-item-has-children">
                                                        <a href="#">Categories 01</a>
                                                        <ul class="sub-menu">

                                                            <li><a href="../products/affiliate-link-product.php">Aconite</a></li>

                                                            <li><a href="../products/aliquam-consequat-mattis.php">Ageratum</a></li>

                                                            <li><a href="../products/consectetur-adipiscing-elit.php">Allium</a></li>

                                                            <li><a href="../products/carry-bag-of-leather.php">Anemone</a></li>

                                                            <li><a href="../products/dolore-magnam-aliquam.php">Angelica</a></li>

                                                            <li><a href="../products/donec-non-est-ullamcorper.php">Angelonia</a></li>

                                                        </ul>
                                                    </li>




                                                    <li class="menu-item-has-children">
                                                        <a href="#">Categories 02</a>
                                                        <ul class="sub-menu">

                                                            <li><a href="../products/demo-product-title-1.php">Balsam</a></li>

                                                            <li><a href="../products/dummy-product-name-8.php">Baneberry</a></li>

                                                            <li><a href="../products/dummy-product-name-8.php">Bee Balm</a></li>

                                                            <li><a href="../products/dolore-magnam-aliquam.php">Begonia</a></li>

                                                            <li><a href="../products/dummy-product-title-1.php">Bellflower</a></li>

                                                            <li><a href="../products/dummy-product-name-8.php">Bergenia</a></li>

                                                        </ul>
                                                    </li>




                                                    <li class="menu-item-has-children">
                                                        <a href="#">Categories 03</a>
                                                        <ul class="sub-menu">

                                                            <li><a href="../products/dummy-product-name-4.php">Caladium</a></li>

                                                            <li><a href="../products/fugiat-quo-voluptas.php">Calendula</a></li>

                                                            <li><a href="../products/nemo-enim-ipsam.php">Carnation</a></li>

                                                            <li><a href="../products/dummy-product-name-5.php">Catmint</a></li>

                                                            <li><a href="../products/dummy-product-name-8.php">Celosia</a></li>

                                                            <li><a href="../products/dummy-product-name-5.php">Chives</a></li>

                                                        </ul>
                                                    </li>




                                                    <li class="menu-item-has-children">
                                                        <a href="#">Categories 04</a>
                                                        <ul class="sub-menu">

                                                            <li><a href="../products/demo-product-title.php">Daffodil</a></li>

                                                            <li><a href="../products/accusantium-doloremque.php">Dahlia</a></li>

                                                            <li><a href="../products/dummy-product-name-8.php">Daisy</a></li>

                                                            <li><a href="../products/dummy-product-name-6.php">Diascia</a></li>

                                                            <li><a href="../products/dummy-product-name-9.php">Dusty Miller</a></li>

                                                            <li><a href="../products/dummy-product-name-9.php">Dame’s Rocket</a></li>

                                                        </ul>
                                                    </li>


                                                </ul>
                                            </li>




                                            <li class="menu-item-has-children">
                                                <a href="../products/accusantium-doloremque.php">Products </a>
                                                <ul class="sub-menu">

                                                    <li><a href="../products/cras-neque-metus.php">Simple Product</a></li>


                                                    <li><a href="../products/aliquam-consequat-mattis.php">Variable Product</a></li>


                                                    <li><a href="../products/affiliate-link-product.php">Affiliate Link product </a></li>




                                                    <li><a href="../products/fat-fermentum-metusid.php">Soldout Product</a></li>




                                                    <li><a href="../products/consequences-roin-lectus.php">Countdown Product</a></li>




                                                    <li><a href="../products/product-preorder.php">Product Preorder</a></li>


                                                </ul>
                                            </li>




                                           



                                            <li><a href="../pages/about.php">about</a></li>
                                            <li><a href="../pages/contact.php">contact</a></li>
                                        </ul>
                                    </nav>-->
<!--                                    <div class="offcanvas-settings">
                                        <nav class="offcanvas-navigation">
                                            <ul><li class="menu-item-has-children"><a href="#">My Account </a>
                                                    <ul class="sub-menu"><li><a href="../pages/wishlist.php">Wishlist  </a></li><li><a href="register.php">Register</a></li><li><a href="login4236.php">my account</a></li><li>
                                                            <a href="login.php">Login</a>
                                                        </li></ul>
                                                </li><li class="menu-item-has-children currency"><a href="#">Currency: <span class="current-currency">USD</span> </a>             

                                                    <ul class="sub-menu switcher-dropdown" id="currencies">

                                                        <li data-currency="USD" class="currency__item"><a style="cursor: pointer">&#036; USD</a></li>
                                                        <li data-currency="EUR" class="currency__item"><a style="cursor: pointer">&#128; EUR</a></li>
                                                        <li data-currency="GBP" class="currency__item"><a style="cursor: pointer">&#163; GBP</a></li>
                                                        <li data-currency="INR" class="currency__item"><a style="cursor: pointer">&#x20B9; INR</a></li>
                                                        <li data-currency="JPY" class="currency__item"><a style="cursor: pointer">&#165; JPY</a></li>

                                                    </ul>
                                                </li></ul>
                                        </nav>
                                    </div>-->
                                    <div class="offcanvas-widget-area"><div class="off-canvas-contact-widget">
                                            <div class="header-contact-info">
                                                <ul class="header-contact-info__list"><li><i class="fa fa-phone"></i> <a href="(1245)%202456%20012.php">(1245) 2456 012</a></li><li><i class="fa fa-envelope"></i> <a href="info%40yourdomain.php">info@yourdomain.com</a></li></ul>
                                            </div>
                                        </div><!--Off Canvas Widget Social Start--><div class="off-canvas-widget-social">
                                            <a title="Twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a><a title="Instagram" href="#" target="_blank"><i class="fa fa-instagram"></i></a><a title="Google-plus" href="#" target="_blank"><i class="fa fa-google-plus"></i></a><a title="Linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a><a title="Pinterest" href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                        </div><!--Off Canvas Widget Social End-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--=======  End of offcanvas mobile menu  =======-->



                        <script>
                            /*=============================================
                             =            mobile menu active            =
                             =============================================*/
                            $("#mobile-menu-trigger").on('click', function () {
                                $("#mobile-menu-overlay").addClass("active");
                                $body.addClass('no-overflow');
                            });

                            $("#mobile-menu-close-trigger").on('click', function () {
                                $("#mobile-menu-overlay").removeClass("active");
                                $body.removeClass('no-overflow');
                            });
                            /*=====  End of mobile menu active  ======*/



                            /*=============================================
                             =            offcanvas mobile menu            =
                             =============================================*/

                            var $offCanvasNav = $('.offcanvas-navigation'),
                                    $offCanvasNavSubMenu = $offCanvasNav.find('.sub-menu');

                            /*Add Toggle Button With Off Canvas Sub Menu*/
                            $offCanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i></i></span>');

                            /*Close Off Canvas Sub Menu*/
                            $offCanvasNavSubMenu.slideUp();

                            /*Category Sub Menu Toggle*/
                            $offCanvasNav.on('click', 'li a, li .menu-expand', function (e) {
                                var $this = $(this);
                                if (($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('menu-expand'))) {
                                    e.preventDefault();
                                    if ($this.siblings('ul:visible').length) {
                                        $this.parent('li').removeClass('active');
                                        $this.siblings('ul').slideUp();
                                    } else {
                                        $this.parent('li').addClass('active');
                                        $this.closest('li').siblings('li').removeClass('active').find('li').removeClass('active');
                                        $this.closest('li').siblings('li').find('ul:visible').slideUp();
                                        $this.siblings('ul').slideDown();
                                    }
                                }
                            });
                            /*=====  End of offcanvas mobile menu  ======*/
                        </script>



                    </div>
                </div>


                <style>



                    .theme-logo img{
                        max-width: 250px;
                    }


                    #section-header .header-bottom {
                        background: #ffffff;
                    }

                    #section-header .header-bottom.sticky-header.sticky {
                        background: #ffffff;
                    }

                    #section-header .header-bottom {
                        padding-top:0px;
                    }

                    #section-header .header-bottom{
                        padding-bottom:0px;
                    }


                    @media (min-width: 768px) and (max-width: 991px){

                        #section-header .header-bottom {
                            padding-top:10px;
                        }

                        #section-header .header-bottom {
                            padding-bottom:10px;
                        }

                    }
                    @media (max-width: 767px) {

                        #section-header .header-bottom {
                            padding-top:10px;
                        }

                        #section-header .header-bottom {
                            padding-bottom:10px;
                        }
                    }




                    #section-header .main-menu ul li a {
                        color:  #454545;
                    }

                    #section-header .main-menu ul li:hover > a {
                        color:  #ff3d2a;
                    }

                    #section-header .main-menu ul li ul li a {
                        color:  #454545;
                    }


                    #section-header .main-menu ul li ul li a:hover {
                        color: #ff3d2a;
                    }

                    #section-header .main-menu ul li ul li a {
                        color: #454545;
                    }

                    #section-header .main-menu ul li ul li a:hover  {
                        color: #ff3d2a;
                    }

                    #section-header .header-cart > a .cart-icon i {
                        color: #454545;
                    }
                    #section-header .header-cart > a .cart-icon span {
                        color: #ffffff;
                        background-color: #ff3d2a;
                    }

                    #section-header .cart-text > span {
                        color: #454545;
                    }

                    #section-header .mean-container .mean-nav ul li a {
                        background: #f8f8f8 none repeat scroll 0 0;
                        color:  #242424;
                    }

                    #section-header .mean-container .mean-nav ul li a:hover {
                        background: #f8f8f8 none repeat scroll 0 0;
                        color: #000000;
                    }
                    #section-header .mean-container .mean-nav ul li li a {
                        background: #f8f8f8 none repeat scroll 0 0;
                        color: #242424;
                    }


                    #section-header .mean-container .mean-nav ul li li a:hover {
                        background: #f8f8f8 none repeat scroll 0 0;
                        color: #000000;
                    }

                    #section-header .mean-container .mean-nav ul li li li a {
                        background:  #f8f8f8 none repeat scroll 0 0;
                        color: #242424;
                    }
                    #section-header .mean-container .mean-nav ul li li li a:hover {
                        background: #f8f8f8 none repeat scroll 0 0;
                        color: #000000;
                    }


                    #section-header  .mean-container a.meanmenu-reveal span {
                        background: #333333;
                    }

                    #section-header  .mean-container a.meanmenu-reveal {
                        border: 1px solid #333333;
                    }

                </style>

                <div style="display: none;">
<!--                    <li class="top-hover drodown-show common-currency-picker currency">
                        <a href="#">
                            <span class="current-currency">USD</span><i class="ion-chevron-down"></i>
                        </a>

                        <ul id="currencies">




                            <li data-currency="USD" class="currency__item"><a style="cursor: pointer">&#036; USD</a></li>




                            <li data-currency="EUR" class="currency__item"><a style="cursor: pointer">&#128; EUR</a></li>




                            <li data-currency="GBP" class="currency__item"><a style="cursor: pointer">&#163; GBP</a></li>




                            <li data-currency="INR" class="currency__item"><a style="cursor: pointer">&#x20B9; INR</a></li>




                            <li data-currency="JPY" class="currency__item"><a style="cursor: pointer">&#165; JPY</a></li>

                        </ul>
                    </li>-->
profile

                </div>
            </header><style data-shopify>#section-header{
                }
                @media (min-width: 768px) and (max-width: 991px) {
                    #section-header{
                    }
                }
                @media (max-width: 767px) {
                    #section-header{
                    }
                }</style><style>



            </style>







        </div>


        <!-- BREADCRUMBS SETCTION START -->

        <div class="breadcrumbs-section">
            <div class="breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumbs-inner ptb-20">

                                <nav class="" role="navigation" aria-label="breadcrumbs">
                                    <ul class="breadcrumb-list">

                                        <li>
                                            <a href="../index.php" title="Back to the home page">Home</a>
                                        </li>
                                        <li>



                                            <span>Account</span>


                                        </li>
                                    </ul>
                                </nav>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- BREADCRUMBS SETCTION END -->



    </body>

    <!-- Mirrored from phuler.myshopify.com/account/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2024 15:38:06 GMT -->
</html>
