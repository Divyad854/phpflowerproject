
    (function() {
      var baseURL = "https://cdn.shopify.com/shopifycloud/checkout-web/assets/";
      var scripts = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/runtime.baseline.en.f6960260fba66d5aa69d.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/2028.baseline.en.c348f34d6af0514b96fd.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/4082.baseline.en.82b456b059329b106278.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/4085.baseline.en.4a76a447edee315e82bd.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.baseline.en.9d124d9aaee7498ca5ec.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/2542.baseline.en.7ec3164fc01d10bbabc6.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/7331.baseline.en.852f7e68ca66d161b271.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/5019.baseline.en.723e311f4a05eaa581cf.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/2080.baseline.en.4108502d9f2c1ca7f6c3.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/8831.baseline.en.c2a2d51502a3db13e6ad.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/236.baseline.en.6813db59ba8017cea27a.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/5718.baseline.en.588a34ea29b4637ad24d.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/2714.baseline.en.639f5707d30824769a61.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/4619.baseline.en.8c229e9c8cf15b3067bb.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/OnePage.baseline.en.0df0050d38ed29eda6e6.js"];
      var styles = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/2028.baseline.en.1a149d5614f3234b8d41.css","https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.baseline.en.62f35530daa6584ddf1c.css","https://cdn.shopify.com/shopifycloud/checkout-web/assets/6268.baseline.en.3fd1456ad92cea34102a.css"];
      var fontPreconnectUrls = [];
      var fontPrefetchUrls = [];
      var imgPrefetchUrls = ["https://cdn.shopify.com/s/files/1/0021/5570/8489/files/logo_x320.png?v=1613739932"];

      function preconnect(url, callback) {
        var link = document.createElement('link');
        link.rel = 'dns-prefetch preconnect';
        link.href = url;
        link.crossOrigin = '';
        link.onload = link.onerror = callback;
        document.head.appendChild(link);
      }

      function preconnectAssets() {
        var resources = [baseURL].concat(fontPreconnectUrls);
        var index = 0;
        (function next() {
          var res = resources[index++];
          if (res) preconnect(res, next);
        })();
      }

      function prefetch(url, as, callback) {
        var link = document.createElement('link');
        if (link.relList.supports('prefetch')) {
          link.rel = 'prefetch';
          link.fetchPriority = 'low';
          link.as = as;
          if (as === 'font') link.type = 'font/woff2';
          link.href = url;
          link.crossOrigin = '';
          link.onload = link.onerror = callback;
          document.head.appendChild(link);
        } else {
          var xhr = new XMLHttpRequest();
          xhr.open('GET', url, true);
          xhr.onloadend = callback;
          xhr.send();
        }
      }

      function prefetchAssets() {
        var resources = [].concat(
          scripts.map(function(url) { return [url, 'script']; }),
          styles.map(function(url) { return [url, 'style']; }),
          fontPrefetchUrls.map(function(url) { return [url, 'font']; }),
          imgPrefetchUrls.map(function(url) { return [url, 'image']; })
        );
        var index = 0;
        (function next() {
          var res = resources[index++];
          if (res) prefetch(res[0], res[1], next);
        })();
      }

      function onLoaded() {
        preconnectAssets();
        prefetchAssets();
      }

      if (document.readyState === 'complete') {
        onLoaded();
      } else {
        addEventListener('load', onLoaded);
      }
    })();
  