
<!DOCTYPE html>
<html  class="webkit safari chrome win">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"Vw4OVV9bGwEDUlVUAQQ="};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({QJf3ax:[function(t,e){function n(){}function r(t){function e(t){return t&&t instanceof n?t:t?a(t,i,o):o()}function u(n,r,o){t&&t(n,r,o);for(var i=e(o),a=l(n),s=a.length,f=0;s>f;f++)a[f].apply(i,r);var u=c[v[n]];return u&&u.push([w,n,r,i]),i}function d(t,e){m[t]=l(t).concat(e)}function l(t){return m[t]||[]}function p(t){return f[t]=f[t]||r(u)}function h(t,e){s(t,function(t,n){e=e||"feature",v[n]=e,e in c||(c[e]=[])})}var m={},v={},w={on:d,emit:u,get:p,listeners:l,context:e,buffer:h};return w}function o(){return new n}var i="nr@context",a=t("gos"),s=t(1),c={},f={},u=e.exports=r();u.backlog=c},{1:24,gos:"7eSDFh"}],ee:[function(t,e){e.exports=t("QJf3ax")},{}],3:[function(t){function e(t){try{i.console&&console.log(t)}catch(e){}}var n,r=t("ee"),o=t(1),i={};try{n=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(i.console=!0,-1!==n.indexOf("dev")&&(i.dev=!0),-1!==n.indexOf("nr_dev")&&(i.nrDev=!0))}catch(a){}i.nrDev&&r.on("internal-error",function(t){e(t.stack)}),i.dev&&r.on("fn-err",function(t,n,r){e(r.stack)}),i.dev&&(e("NR AGENT IN DEVELOPMENT MODE"),e("flags: "+o(i,function(t){return t}).join(", ")))},{1:24,ee:"QJf3ax"}],4:[function(t){function e(t,e,n,i,a){try{f?f-=1:r("err",[a||new UncaughtException(t,e,n)])}catch(c){try{r("ierr",[c,(new Date).getTime(),!0])}catch(u){}}return"function"==typeof s?s.apply(this,o(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function n(t){r("err",[t,(new Date).getTime()])}var r=t("handle"),o=t(6),i=t("ee"),a=t("loader"),s=window.onerror,c=!1,f=0;a.features.err=!0,t(5),window.onerror=e;try{throw new Error}catch(u){"stack"in u&&(t(1),t(2),"addEventListener"in window&&t(3),a.xhrWrappable&&t(4),c=!0)}i.on("fn-start",function(){c&&(f+=1)}),i.on("fn-err",function(t,e,r){c&&(this.thrown=!0,n(r))}),i.on("fn-end",function(){c&&!this.thrown&&f>0&&(f-=1)}),i.on("internal-error",function(t){r("ierr",[t,(new Date).getTime(),!0])})},{1:10,2:9,3:7,4:11,5:3,6:25,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],5:[function(t){t("loader").features.ins=!0},{loader:"G9z0Bl"}],6:[function(t){function e(){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var n=t("ee"),r=t("handle"),o=t(1),i=t(2);t("loader").features.stn=!0,t(3);var a=NREUM.o.EV;n.on("fn-start",function(t){var e=t[0];e instanceof a&&(this.bstStart=Date.now())}),n.on("fn-end",function(t,e){var n=t[0];n instanceof a&&r("bst",[n,e,this.bstStart,Date.now()])}),o.on("fn-start",function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),o.on("fn-end",function(t,e){r("bstTimer",[e,this.bstStart,Date.now(),this.bstType])}),i.on("fn-start",function(){this.bstStart=Date.now()}),i.on("fn-end",function(t,e){r("bstTimer",[e,this.bstStart,Date.now(),"requestAnimationFrame"])}),n.on("pushState-start",function(){this.time=Date.now(),this.startPath=location.pathname+location.hash}),n.on("pushState-end",function(){r("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),"addEventListener"in window.performance&&(window.performance.clearResourceTimings?window.performance.addEventListener("resourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.clearResourceTimings()},!1):window.performance.addEventListener("webkitresourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.webkitClearResourceTimings()},!1)),document.addEventListener("scroll",e,!1),document.addEventListener("keypress",e,!1),document.addEventListener("click",e,!1)}},{1:10,2:9,3:8,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],7:[function(t,e){function n(t){for(var e=t;e&&!e.hasOwnProperty("addEventListener");)e=Object.getPrototypeOf(e);e&&r(e)}function r(t){a.inPlace(t,["addEventListener","removeEventListener"],"-",o)}function o(t){return t[1]}var i=t("ee").get("events"),a=t(1)(i),s=t("gos");e.exports=i,r(window),"getPrototypeOf"in Object?(n(document),n(XMLHttpRequest.prototype)):XMLHttpRequest.prototype.hasOwnProperty("addEventListener")&&r(XMLHttpRequest.prototype),i.on("addEventListener-start",function(t){if(t[1]){var e=t[1];if("function"==typeof e){var n=s(e,"nr@wrapped",function(){return a(e,"fn-",null,e.name||"anonymous")});this.wrapped=t[1]=n}else"function"==typeof e.handleEvent&&a.inPlace(e,["handleEvent"],"fn-")}}),i.on("removeEventListener-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{1:26,ee:"QJf3ax",gos:"7eSDFh"}],8:[function(t,e){var n=t("ee").get("history"),r=t(1)(n);e.exports=n,r.inPlace(window.history,["pushState","replaceState"],"-")},{1:26,ee:"QJf3ax"}],9:[function(t,e){var n=t("ee").get("raf"),r=t(1)(n);e.exports=n,r.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),n.on("raf-start",function(t){t[0]=r(t[0],"fn-")})},{1:26,ee:"QJf3ax"}],10:[function(t,e){function n(t,e,n){t[0]=i(t[0],"fn-",null,n)}function r(t,e,n){this.method=n,this.timerDuration="number"==typeof t[1]?t[1]:0,t[0]=i(t[0],"fn-",this,n)}var o=t("ee").get("timer"),i=t(1)(o);e.exports=o,i.inPlace(window,["setTimeout","setImmediate"],"setTimer-"),i.inPlace(window,["setInterval"],"setInterval-"),i.inPlace(window,["clearTimeout","clearImmediate"],"clearTimeout-"),o.on("setInterval-start",n),o.on("setTimer-start",r)},{1:26,ee:"QJf3ax"}],11:[function(t,e){function n(t,e){e=e||this;var n=i.context(e);e.readyState>3&&!n.resolved&&(n.resolved=!0,i.emit("xhr-resolved",[],e));try{c.inPlace(e,l,"fn-",r)}catch(o){}}function r(t,e){return e}function o(t,e){for(var n in t)e[n]=t[n];return e}var i=t("ee").get("xhr"),a=t(1),s=t(2),c=s(i),f=s(a),u=NREUM.o,d=u.XHR,l=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout","onreadystatechange"];e.exports=i,window.XMLHttpRequest=function(t){var e=new d(t);try{i.emit("new-xhr",[e],e),e.hasOwnProperty("addEventListener")&&f.inPlace(e,["addEventListener","removeEventListener"],"-",r),e.addEventListener("readystatechange",n,!1)}catch(o){try{i.emit("internal-error",[o])}catch(a){}}return e},o(d,XMLHttpRequest),XMLHttpRequest.prototype=d.prototype,c.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",r),i.on("send-xhr-start",n),i.on("open-xhr-start",n)},{1:7,2:26,ee:"QJf3ax"}],12:[function(t){function e(t){var e=this.params,r=this.metrics;if(!this.ended){this.ended=!0;for(var o=0;u>o;o++)t.removeEventListener(f[o],this.listener,!1);if(!e.aborted){if(r.duration=(new Date).getTime()-this.startTime,4===t.readyState){e.status=t.status;var i=n(t,this.lastSize);if(i&&(r.rxSize=i),this.sameOrigin){var s=t.getResponseHeader("X-NewRelic-App-Data");s&&(e.cat=s.split(", ").pop())}}else e.status=0;r.cbTime=this.cbTime,c.emit("xhr-done",[t],t),a("xhr",[e,r,this.startTime])}}}function n(t,e){var n=t.responseType;if("json"===n&&null!==e)return e;var o="arraybuffer"===n||"blob"===n||"json"===n?t.response:t.responseText;return r(o)}function r(t){if("string"==typeof t&&t.length)return t.length;if("object"!=typeof t)return void 0;if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if("undefined"!=typeof FormData&&t instanceof FormData)return void 0;try{return JSON.stringify(t).length}catch(e){return void 0}}function o(t,e){var n=s(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}var i=t("loader");if(i.xhrWrappable){var a=t("handle"),s=t(2),c=t("ee"),f=["load","error","abort","timeout"],u=f.length,d=t(1),l=t(3),p=window.XMLHttpRequest;i.features.xhr=!0,t(5),t(4),c.on("new-xhr",function(t){var n=this;n.totalCbs=0,n.called=0,n.cbTime=0,n.end=e,n.ended=!1,n.xhrGuids={},n.lastSize=null,l&&(l>34||10>l)||window.opera||t.addEventListener("progress",function(t){n.lastSize=t.loaded},!1)}),c.on("open-xhr-start",function(t){this.params={method:t[0]},o(this,t[1]),this.metrics={}}),c.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),c.on("send-xhr-start",function(t,e){var n=this.metrics,o=t[0],i=this;if(n&&o){var a=r(o);a&&(n.txSize=a)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof e.onload))&&i.end(e)}catch(n){try{c.emit("internal-error",[n])}catch(r){}}};for(var s=0;u>s;s++)e.addEventListener(f[s],this.listener,!1)}),c.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),c.on("xhr-load-added",function(t,e){var n=""+d(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),c.on("xhr-load-removed",function(t,e){var n=""+d(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),c.on("addEventListener-end",function(t,e){e instanceof p&&"load"===t[0]&&c.emit("xhr-load-added",[t[1],t[2]],e)}),c.on("removeEventListener-end",function(t,e){e instanceof p&&"load"===t[0]&&c.emit("xhr-load-removed",[t[1],t[2]],e)}),c.on("fn-start",function(t,e,n){e instanceof p&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),c.on("fn-end",function(t,e){this.xhrCbStart&&c.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{1:"XL7HBI",2:13,3:15,4:11,5:7,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],13:[function(t,e){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!e.protocol||":"===e.protocol||e.protocol===n.protocol,a=e.hostname===document.domain&&e.port===n.port;return r.sameOrigin=i&&(!e.hostname||a),r}},{}],14:[function(t,e){function n(t,e){return function(){r(t,[(new Date).getTime()].concat(i(arguments)),null,e)}}var r=t("handle"),o=t(1),i=t(2);"undefined"==typeof window.newrelic&&(newrelic=NREUM);var a=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit"],s=["addPageAction"],c="api-";o(a,function(t,e){newrelic[e]=n(c+e,"api")}),o(s,function(t,e){newrelic[e]=n(c+e)}),e.exports=newrelic,newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),r("err",[t,(new Date).getTime()])}},{1:24,2:25,handle:"D5DuLP"}],15:[function(t,e){var n=0,r=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);r&&(n=+r[1]),e.exports=n},{}],gos:[function(t,e){e.exports=t("7eSDFh")},{}],"7eSDFh":[function(t,e){function n(t,e,n){if(r.call(t,e))return t[e];var o=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return t[e]=o,o}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],D5DuLP:[function(t,e){function n(t,e,n,o){r.buffer([t],o),r.emit(t,e,n)}var r=t("ee").get("handle");e.exports=n,n.ee=r},{ee:"QJf3ax"}],XL7HBI:[function(t,e){function n(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:i(t,o,function(){return r++})}var r=1,o="nr@id",i=t("gos");e.exports=n},{gos:"7eSDFh"}],id:[function(t,e){e.exports=t("XL7HBI")},{}],G9z0Bl:[function(t,e){function n(){if(!h++){var t=p.info=NREUM.info,e=f.getElementsByTagName("script")[0];if(t&&t.licenseKey&&t.applicationID&&e){s(d,function(e,n){t[e]||(t[e]=n)});var n="https"===u.split(":")[0]||t.sslForHttp;p.proto=n?"https://":"http://",a("mark",["onload",i()],null,"api");var r=f.createElement("script");r.src=p.proto+t.agent,e.parentNode.insertBefore(r,e)}}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()],null,"api")}function i(){return(new Date).getTime()}var a=t("handle"),s=t(1),c=window,f=c.document;NREUM.o={ST:setTimeout,XHR:c.XMLHttpRequest,REQ:c.Request,EV:c.Event,PR:c.Promise,MO:c.MutationObserver},t(2);var u=(""+location).split("?")[0],d={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-885.min.js"},l=window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent),p=e.exports={offset:i(),origin:u,features:{},xhrWrappable:l};f.addEventListener?(f.addEventListener("DOMContentLoaded",o,!1),c.addEventListener("load",n,!1)):(f.attachEvent("onreadystatechange",r),c.attachEvent("onload",n)),a("mark",["firstbyte",i()],null,"api");var h=0},{1:24,2:14,handle:"D5DuLP"}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],24:[function(t,e){function n(t,e){var n=[],o="",i=0;for(o in t)r.call(t,o)&&(n[i]=e(o,t[o]),i+=1);return n}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],25:[function(t,e){function n(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=n},{}],26:[function(t,e){function n(t){return!(t&&"function"==typeof t&&t.apply&&!t[i])}var r=t("ee"),o=t(1),i="nr@original",a=Object.prototype.hasOwnProperty,s=!1;e.exports=function(t){function e(t,e,r,a){function nrWrapper(){var n,i,s,c;try{i=this,n=o(arguments),s="function"==typeof r?r(n,i):r||{}}catch(u){d([u,"",[n,i,a],s])}f(e+"start",[n,i,a],s);try{return c=t.apply(i,n)}catch(l){throw f(e+"err",[n,i,l],s),l}finally{f(e+"end",[n,i,c],s)}}return n(t)?t:(e||(e=""),nrWrapper[i]=t,u(t,nrWrapper),nrWrapper)}function c(t,r,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<r.length;c++)s=r[c],a=t[s],n(a)||(t[s]=e(a,f?s+o:o,i,s))}function f(e,n,r){if(!s){s=!0;try{t.emit(e,n,r)}catch(o){d([o,e,n,r])}s=!1}}function u(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){d([r])}for(var o in t)a.call(t,o)&&(e[o]=t[o]);return e}function d(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=r),e.inPlace=c,e.flag=i,e}},{1:25,ee:"QJf3ax"}]},{},["G9z0Bl",4,12,6,5]);</script>
  <meta charset="utf-8">
  <meta name="verify-v1" content="ZwWAp70PgmKCLts2y4qNiJL9qXshM3jR7EmorduE3H0=">
  <meta name="verify-v1" content="QzLYf7htJLR4QxdPphORVw8ltI+uLCeauRiD/1RIqdc=">

      <title>Ashley Madison&reg; - Married Dating &amp; Discreet encounters - Have An Affair - Official Ashley Madison website</title>

    <meta name="description" content="Ashley Madison is the online personals &amp; dating destination for casual encounters, married dating, discreet encounters and extramarital affairs.">
<meta name="keywords" content="married dating, affairs, married women, cheating, escorts, dating, extramarital affairs, secret encounters, cheating wives, adult encounters, unfaithful">
<link rel="image_src" href="https://static-cdn.ashleymadison.com/v3/public/homepages/index2010/ashleymadison_thumbnail.jpg?8976453"> 
<meta property="og:title" content="Ashley Madison">
<meta property="og:description" content="Ashley Madison is the online personals &amp; dating destination for casual encounters, married dating, discreet encounters and extramarital affairs.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.ashleymadison.com">
<meta property="og:image" content="https://static-cdn.ashleymadison.com/v3/public/homepages/index2010/ashleymadison_thumbnail.jpg?8976453">
<meta name="copyright" content="Ashley Madison, Limited. 2001-2016">
<meta name="type" content="ashleymadison.com">
<meta name="robots" content="index,follow">
<meta name="distribution" content="global">
<link rel="canonical" href="https://www.ashleymadison.com/">
  <link rel="stylesheet" href="https://static-cdn.ashleymadison.com/v4/build/vendor/pure.min.ecb2a387.css">
  <link rel="stylesheet" href="https://static-cdn.ashleymadison.com/v4/build/css/main.c119fd3d.css">  
  <link rel="stylesheet" href="https://static-cdn.ashleymadison.com/v4/build/css/theme-landing.5aff87e0.css" media="screen">
<link rel="stylesheet" href="https://static-cdn.ashleymadison.com/v4/fonts/fontello-edb56131/css/cent-embedded.css">
<!--[if IE 7]>
<link rel="stylesheet" href="https://static-cdn.ashleymadison.com/v4/fonts/fontello-edb56131/css/cent-ie7.css">
<![endif]-->
    <link rel="stylesheet" href="https://static-cdn.ashleymadison.com/v4/build/css/theme-step2.f8d5a99d.css" media="screen">
  <link rel="stylesheet" href="https://static-cdn.ashleymadison.com/v3/public/homepages/index/jquery-ui-1.8.13.custom.css?8976453" media="screen">
  <link rel="stylesheet" href="https://static-cdn.ashleymadison.com/v3/public/homepages/index/jquery.ui.all.css?8976453" media="screen">
  <link rel="stylesheet" href="https://static-cdn.ashleymadison.com/v3/public/homepages/index/jquery.ui.selectmenu.css?8976453" media="screen">
</head>
<body class="lang-en_US country-GB date-03-09 ">
<div class="mini-header">
  <div class="content content-700">
    <img class="box-pad-lg" src="./index_files/global_logo_large_single_line.jpg" alt="Official Ashley Madison website" width="277px" height="39px">
        <div class="search-results pure-g box-vpad-lg" id="row0">
      <div class="pure-u-5-24 font-sm">
        <div class="box-center relative inline search-thumb-container text-center light-bg">
          <a href="#"><img alt="Click For Profile Details" src="./images/default_avatar.jpg" class="search-thumb middle"></a>
        </div>
        <div class="media-box box-marg-t">
          <div class="icon-mail pull-left"></div>
          <a class='media-content' href="#">Message Me</a>
        </div>
        <div class="media-box">
          <div class="icon-lock pull-left"></div>
          <a href="#" class="media-content">Private Showcase</a>
        </div>
        <div class="media-box">
          <div class="icon-gift pull-left"></div>
          <a class="media-content" href="#">Send A Gift</a>
        </div>
      </div>
      <div class="pure-u-19-24">
        <div class="pure-g">
          <div class="pure-u-1">
            
            <h2><a href="profile.php?u=riri81">riri81</a></h2>
            <em class="alt-color">"m"</em>
          </div>
          <ul class="pure-u-3-8 results-info">
            <li><span>Location:</span> <span class="searchResult_location">London, Greater London</span></li>
            <li><span>Age:</span> 32</li>
            <li><span>Height:</span> 5&#039;6&quot; (168cm)</li>
            <li><span>Weight:</span> 130 lbs (59kg)</li>
          </ul>
          <ul class="pure-u-5-8 results-info">
                          <li><span>Ethnicity:</span> African American (black)</li>
                        <li><span>Body Type:</span> Slim</li>
                        <li><span>My Limits are:</span> Undecided</li>
            <li><span>Status:</span> Single Female seeking Males</li>
                      </ul>
        </div> 
      </div>  
    </div>
        <div class="search-results pure-g box-vpad-lg" id="row1">
      
      <div class="pure-u-5-24 font-sm">
        <div class="box-center relative inline search-thumb-container text-center light-bg">
          <a href="#"><img alt="Click For Profile Details" src="./images/default_avatar.jpg" class="search-thumb middle"></a>
        </div>
        <div class="media-box box-marg-t">
          <div class="icon-mail pull-left"></div>
          <a class='media-content' href="#">Message Me</a>
        </div>
        <div class="media-box">
          <div class="icon-lock pull-left"></div>
          <a href="#" class="media-content">Private Showcase</a>
        </div>
        <div class="media-box">
          <div class="icon-gift pull-left"></div>
          <a class="media-content" href="#">Send A Gift</a>
        </div>
      </div>

      <div class="pure-u-19-24">
        <div class="pure-g">
          <div class="pure-u-1">
            
            <h2><a href="profile.php?u=adels14">adels14</a></h2>
            <em class="alt-color">"sexy blond looking for attraction"</em>
          </div>
          <ul class="pure-u-3-8 results-info">
            <li><span>Location:</span> <span class="searchResult_location">London, Greater London</span></li>
            <li><span>Age:</span> 41</li>
            <li><span>Height:</span> 5&#039;6&quot; (168cm)</li>
            <li><span>Weight:</span> 120 lbs (54kg)</li>
          </ul>
          <ul class="pure-u-5-8 results-info">
                          <li><span>Ethnicity:</span> Caucasian (white)</li>
                        <li><span>Body Type:</span> Shapely toned</li>
                        <li><span>My Limits are:</span> Undecided</li>
            <li><span>Status:</span> Attached Female seeking Males</li>
                      </ul>
        </div> 
      </div>  
    </div>
        <div class="search-results pure-g box-vpad-lg" id="row2">
      
      <div class="pure-u-5-24 font-sm">
        <div class="box-center relative inline search-thumb-container text-center light-bg">
          <a href="#"><img alt="Click For Profile Details" src="./images/default_avatar.jpg" class="search-thumb middle"></a>
        </div>
        <div class="media-box box-marg-t">
          <div class="icon-mail pull-left"></div>
          <a class='media-content' href="#">Message Me</a>
        </div>
        <div class="media-box">
          <div class="icon-lock pull-left"></div>
          <a href="#" class="media-content">Private Showcase</a>
        </div>
        <div class="media-box">
          <div class="icon-gift pull-left"></div>
          <a class="media-content" href="#">Send A Gift</a>
        </div>
      </div>

      <div class="pure-u-19-24">
        <div class="pure-g">
          <div class="pure-u-1">
            
            <h2><a href="profile.php?u=luvluvmybody">luvluvmybody</a></h2>
            <em class="alt-color">"Visiting London?"</em>
          </div>
          <ul class="pure-u-3-8 results-info">
            <li><span>Location:</span> <span class="searchResult_location">London, Greater London</span></li>
            <li><span>Age:</span> 39</li>
            <li><span>Height:</span> 5&#039;10&quot; (178cm)</li>
            <li><span>Weight:</span> 155 lbs (70kg)</li>
          </ul>
          <ul class="pure-u-5-8 results-info">
                          <li><span>Ethnicity:</span> Caucasian (white)</li>
                        <li><span>Body Type:</span> Fit</li>
                        <li><span>My Limits are:</span> Whatever Excites Me</li>
            <li><span>Status:</span> Attached Female seeking Males</li>
                      </ul>
        </div> 
      </div>  
    </div>
        <div class="search-results pure-g box-vpad-lg" id="row3">
      
      <div class="pure-u-5-24 font-sm">
        <div class="box-center relative inline search-thumb-container text-center light-bg">
          <a href="#"><img alt="Click For Profile Details" src="./images/default_avatar.jpg" class="search-thumb middle"></a>
        </div>
        <div class="media-box box-marg-t">
          <div class="icon-mail pull-left"></div>
          <a class='media-content' href="#">Message Me</a>
        </div>
        <div class="media-box">
          <div class="icon-lock pull-left"></div>
          <a href="#" class="media-content">Private Showcase</a>
        </div>
        <div class="media-box">
          <div class="icon-gift pull-left"></div>
          <a class="media-content" href="#">Send A Gift</a>
        </div>
      </div>

      <div class="pure-u-19-24">
        <div class="pure-g">
          <div class="pure-u-1">
            
            <h2><a href="profile.php?u=beverley9">beverley9</a></h2>
            <em class="alt-color">"married and pregnant , doesnt stop me haha xx"</em>
          </div>
          <ul class="pure-u-3-8 results-info">
            <li><span>Location:</span> <span class="searchResult_location">Lowton, Greater Manchester</span></li>
            <li><span>Age:</span> 40</li>
            <li><span>Height:</span> 5&#039;6&quot; (168cm)</li>
            <li><span>Weight:</span> 95 lbs (43kg)</li>
          </ul>
          <ul class="pure-u-5-8 results-info">
                          <li><span>Ethnicity:</span> Caucasian (white)</li>
                        <li><span>Body Type:</span> Average/medium</li>
                        <li><span>My Limits are:</span> Anything Goes</li>
            <li><span>Status:</span> Attached Female seeking Males</li>
                      </ul>
        </div> 
      </div>  
    </div>
        <div class="search-results pure-g box-vpad-lg" id="row4">
      
      <div class="pure-u-5-24 font-sm">
        <div class="box-center relative inline search-thumb-container text-center light-bg">
          <a href="#"><img alt="Click For Profile Details" src="./images/default_avatar.jpg" class="search-thumb middle"></a>
        </div>
        <div class="media-box box-marg-t">
          <div class="icon-mail pull-left"></div>
          <a class='media-content' href="#">Message Me</a>
        </div>
        <div class="media-box">
          <div class="icon-lock pull-left"></div>
          <a href="#" class="media-content">Private Showcase</a>
        </div>
        <div class="media-box">
          <div class="icon-gift pull-left"></div>
          <a class="media-content" href="#">Send A Gift</a>
        </div>
      </div>

      <div class="pure-u-19-24">
        <div class="pure-g">
          <div class="pure-u-1">
            
            <h2><a href="profile.php?u=Yass95">Yass95</a></h2>
            <em class="alt-color">"Hey ;)"</em>
          </div>
          <ul class="pure-u-3-8 results-info">
            <li><span>Location:</span> <span class="searchResult_location">Woodville, Derbyshire</span></li>
            <li><span>Age:</span> 20</li>
            <li><span>Height:</span> 5&#039;2&quot; (157cm)</li>
            <li><span>Weight:</span> 155 lbs (70kg)</li>
          </ul>
          <ul class="pure-u-5-8 results-info">
                          <li><span>Ethnicity:</span> Asian</li>
                        <li><span>Body Type:</span> Full sized</li>
                        <li><span>My Limits are:</span> Whatever Excites Me</li>
            <li><span>Status:</span> Single Female seeking Males</li>
                      </ul>
        </div> 
      </div>  
    </div>
        <div class="search-results pure-g box-vpad-lg" id="row5">
      
      <div class="pure-u-5-24 font-sm">
        <div class="box-center relative inline search-thumb-container text-center light-bg">
          <a href="#"><img alt="Click For Profile Details" src="./images/default_avatar.jpg" class="search-thumb middle"></a>
        </div>
        <div class="media-box box-marg-t">
          <div class="icon-mail pull-left"></div>
          <a class='media-content' href="#">Message Me</a>
        </div>
        <div class="media-box">
          <div class="icon-lock pull-left"></div>
          <a href="#" class="media-content">Private Showcase</a>
        </div>
        <div class="media-box">
          <div class="icon-gift pull-left"></div>
          <a class="media-content" href="#">Send A Gift</a>
        </div>
      </div>

      <div class="pure-u-19-24">
        <div class="pure-g">
          <div class="pure-u-1">
            
            <h2><a href="profile.php?u=zebbie69">zebbie69</a></h2>
            <em class="alt-color">"Hi"</em>
          </div>
          <ul class="pure-u-3-8 results-info">
            <li><span>Location:</span> <span class="searchResult_location">Penrith, Cumbria</span></li>
            <li><span>Age:</span> 38</li>
            <li><span>Height:</span> 5&#039;4&quot; (163cm)</li>
            <li><span>Weight:</span> 145 lbs (66kg)</li>
          </ul>
          <ul class="pure-u-5-8 results-info">
                          <li><span>Ethnicity:</span> Caucasian (white)</li>
                        <li><span>Body Type:</span> Full sized</li>
                        <li><span>My Limits are:</span> Anything Goes</li>
            <li><span>Status:</span> Attached Female seeking Males</li>
                      </ul>
        </div> 
      </div>  
    </div>
      </div>
</div>
</body>
</html>
