
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	var a = "<br><span class='label label-danger han-size1'>ՈՒՇԱԴՐՈՒԹՅՈՒՆ</span> Դու օգտագործում ես մոբայլ սարք, որը հավանաբար չունի ֆիզիկական ստեղնաշար։ <br> Այս ինքնուսույցը անիմաստ է ֆիզիկական ստեղնաշարի բացակայության դեպքում:<br>";
	a+="Մոբայլ սարքից կարող ես դիտել <a href='additional.php'>հավելյալ նյութերի</a> ցանկը կամ վերադառնալ այստեղ ֆիզիկական ստեղնաշար ունեցող համակարգչով։<br><br>";
	$("#zoomInfo").before(a).fadeOut().fadeIn(3000);
	$(".col-md-8").html(a).hide().fadeIn(3000);
}


/* zoomooz https://github.com/jaukia/zoomooz/blob/master/jquery.zoomooz.min.js */
/*
function Matrix(){}var Sylvester={version:"0.1.3",precision:1e-6};Matrix.prototype={dup:function(){return Matrix.create(this.elements)},canMultiplyFromLeft:function(e){var t=e.elements||e;return t[0][0]===void 0&&(t=Matrix.create(t).elements),this.elements[0].length==t.length},multiply:function(e){var t=e.modulus?!0:!1,n=e.elements||e;if(n[0][0]===void 0&&(n=Matrix.create(n).elements),!this.canMultiplyFromLeft(n))return null;var r,o,a,i,s,l,u=this.elements.length,c=u,f=n[0].length,m=this.elements[0].length,d=[];do{r=c-u,d[r]=[],o=f;do{a=f-o,i=0,s=m;do l=m-s,i+=this.elements[r][l]*n[l][a];while(--s);d[r][a]=i}while(--o)}while(--u);return n=Matrix.create(d),t?n.col(1):n},isSquare:function(){return this.elements.length==this.elements[0].length},toRightTriangular:function(){var e,t,n,r,o=this.dup(),a=this.elements.length,i=a,s=this.elements[0].length;do{if(t=i-a,0===o.elements[t][t])for(j=t+1;i>j;j++)if(0!==o.elements[j][t]){e=[],n=s;do r=s-n,e.push(o.elements[t][r]+o.elements[j][r]);while(--n);o.elements[t]=e;break}if(0!==o.elements[t][t])for(j=t+1;i>j;j++){var l=o.elements[j][t]/o.elements[t][t];e=[],n=s;do r=s-n,e.push(t>=r?0:o.elements[j][r]-o.elements[t][r]*l);while(--n);o.elements[j]=e}}while(--a);return o},determinant:function(){if(!this.isSquare())return null;var e,t=this.toRightTriangular(),n=t.elements[0][0],r=t.elements.length-1,o=r;do e=o-r+1,n*=t.elements[e][e];while(--r);return n},isSingular:function(){return this.isSquare()&&0===this.determinant()},augment:function(e){var t=e.elements||e;t[0][0]===void 0&&(t=Matrix.create(t).elements);var n,r,o,a=this.dup(),i=a.elements[0].length,s=a.elements.length,l=s,u=t[0].length;if(s!=t.length)return null;do{n=l-s,r=u;do o=u-r,a.elements[n][i+o]=t[n][o];while(--r)}while(--s);return a},inverse:function(){if(!this.isSquare()||this.isSingular())return null;var e,t,n,r,o,a,i,s=this.elements.length,l=s,u=this.augment(Matrix.I(s)).toRightTriangular(),c=u.elements[0].length,f=[];do{e=s-1,o=[],n=c,f[e]=[],a=u.elements[e][e];do r=c-n,i=u.elements[e][r]/a,o.push(i),r>=l&&f[e].push(i);while(--n);for(u.elements[e]=o,t=0;e>t;t++){o=[],n=c;do r=c-n,o.push(u.elements[t][r]-u.elements[e][r]*u.elements[t][e]);while(--n);u.elements[t]=o}}while(--s);return Matrix.create(f)},setElements:function(e){var t,n=e.elements||e;if(n[0][0]!==void 0){var r,o,a,i=n.length,s=i;this.elements=[];do{t=s-i,r=n[t].length,o=r,this.elements[t]=[];do a=o-r,this.elements[t][a]=n[t][a];while(--r)}while(--i);return this}var l=n.length,u=l;this.elements=[];do t=u-l,this.elements.push([n[t]]);while(--l);return this}},Matrix.create=function(e){var t=new Matrix;return t.setElements(e)},Matrix.I=function(e){var t,n,r,o=[],a=e;do{t=a-e,o[t]=[],n=a;do r=a-n,o[t][r]=t==r?1:0;while(--n)}while(--e);return Matrix.create(o)},PureCSSMatrix=function(){"use strict";function e(e){e&&null!==e&&"none"!=e?e instanceof Matrix?this.setMatrix(e):this.setMatrixValue(e):this.m=Matrix.I(3)}function t(e){var t=parseFloat(n(e));return e.match(o)&&(t=2*Math.PI*t/360),t}function n(e){return e.match(a)}function r(e){return Number(e).toFixed(6)}var o=/deg$/,a=/([0-9.\-e]+)/g,i=/([a-zA-Z]+)\(([^\)]+)\)/g;return e.prototype.setMatrix=function(e){this.m=e},e.prototype.setMatrixValue=function(e){for(var r,o=Matrix.I(3);null!==(r=i.exec(e));){var a,s=r[1].toLowerCase(),l=r[2].split(",");if("matrix"==s)a=Matrix.create([[parseFloat(l[0]),parseFloat(l[2]),parseFloat(n(l[4]))],[parseFloat(l[1]),parseFloat(l[3]),parseFloat(n(l[5]))],[0,0,1]]);else if("translate"==s)a=Matrix.I(3),a.elements[0][2]=parseFloat(n(l[0])),a.elements[1][2]=parseFloat(n(l[1]));else if("scale"==s){var u,c=parseFloat(l[0]);u=l.length>1?parseFloat(l[1]):c,a=Matrix.create([[c,0,0],[0,u,0],[0,0,1]])}else"rotate"==s?a=Matrix.RotationZ(t(l[0])):"skew"==s||"skewx"==s?(a=Matrix.I(3),a.elements[0][1]=Math.tan(t(l[0]))):"skewy"==s?(a=Matrix.I(3),a.elements[1][0]=Math.tan(t(l[0]))):console.log("Problem with setMatrixValue",s,l);o=o.multiply(a)}this.m=o},e.prototype.multiply=function(t){return new e(this.m.multiply(t.m))},e.prototype.inverse=function(){return 1e-6>Math.abs(this.m.elements[0][0])&&(this.m.elements[0][0]=0),new e(this.m.inverse())},e.prototype.translate=function(t,n){var r=Matrix.I(3);return r.elements[0][2]=t,r.elements[1][2]=n,new e(this.m.multiply(r))},e.prototype.scale=function(t,n){var r=Matrix.create([[t,0,0],[0,n,0],[0,0,1]]);return new e(this.m.multiply(r))},e.prototype.rotate=function(t){var n=Matrix.RotationZ(t);return new e(this.m.multiply(n))},e.prototype.toString=function(){var e=this.m.elements,t="";return($.browser.mozilla||$.browser.opera)&&(t="px"),"matrix("+r(e[0][0])+", "+r(e[1][0])+", "+r(e[0][1])+", "+r(e[1][1])+", "+r(e[0][2])+t+", "+r(e[1][2])+t+")"},e.prototype.elements=function(){var e=this.m.elements;return{a:e[0][0],b:e[1][0],c:e[0][1],d:e[1][1],e:e[0][2],f:e[1][2]}},e}(),$.zoomooz||($.zoomooz={}),$.zoomooz.helpers=function(e,t){"use strict";var n=["-moz-","-webkit-","-o-","-ms-"];return t.forEachPrefix=function(e,t){for(var r=0;n.length>r;r++)e(n[r]);t&&e("")},t.getElementTransform=function(n){var r;return t.forEachPrefix(function(t){r=r||e(n).css(t+"transform")},!0),r},t}(jQuery,{}),function(e){"use strict";function t(e,t,n){var r={};if(b.forEachPrefix(function(t){r[t+"transform"]=e},!0),t){var o=d(t/1e3,6)+"s";r["-webkit-transition-duration"]=o,r["-o-transition-duration"]=o,r["-moz-transition-duration"]=o}if(n){var a=i(n);r["-webkit-transition-timing-function"]=a,r["-o-transition-timing-function"]=a,r["-moz-transition-timing-function"]=a}return r}function n(e,t,n,a,i,l){t||(t=o(new PureCSSMatrix)),p=(new Date).getTime(),v&&(clearInterval(v),v=null),a.easing&&(a.easingfunction=s(a.easing,a.duration)),r(e,t,n,a,i),l&&l(),v=setInterval(function(){r(e,t,n,a,i)},1)}function r(e,n,r,o,i){var s,l=(new Date).getTime()-p;s=o.easingfunction?o.easingfunction(l/o.duration):l/o.duration,e.css(t(a(m(n,r,s)))),l>o.duration&&(clearInterval(v),v=null,s=1,i&&i())}function o(e){var t=e.elements(),n=t.a,r=t.b,o=t.c,a=t.d,i=t.e,s=t.f;if(.01>Math.abs(n*a-r*o))return console.log("fail!"),void 0;var l=i,u=s,c=Math.sqrt(n*n+r*r);n/=c,r/=c;var f=n*o+r*a;o-=n*f,a-=r*f;var m=Math.sqrt(o*o+a*a);o/=m,a/=m,f/=m,0>n*a-r*o&&(n=-n,r=-r,o=-o,a=-a,c=-c,m=-m);var d=Math.atan2(r,n);return{tx:l,ty:u,r:d,k:Math.atan(f),sx:c,sy:m}}function a(e){var t="";return t+="translate("+d(e.tx,6)+"px,"+d(e.ty,6)+"px) ",t+="rotate("+d(e.r,6)+"rad) skewX("+d(e.k,6)+"rad) ",t+="scale("+d(e.sx,6)+","+d(e.sy,6)+")"}function i(e){return e instanceof Array?"cubic-bezier("+d(e[0],6)+","+d(e[1],6)+","+d(e[2],6)+","+d(e[3],6)+")":e}function s(e,t){var n=[];if(e instanceof Array)n=e;else switch(e){case"linear":n=[0,0,1,1];break;case"ease":n=[.25,.1,.25,1];break;case"ease-in":n=[.42,0,1,1];break;case"ease-out":n=[0,0,.58,1];break;case"ease-in-out":n=[.42,0,.58,1]}var r=function(e){return l(e,n[0],n[1],n[2],n[3],t)};return r}function l(e,t,n,r,o,a){function i(e){return((m*e+d)*e+h)*e}function s(e){return((p*e+v)*e+g)*e}function l(e){return(3*m*e+2*d)*e+h}function u(e){return 1/(200*e)}function c(e,t){return s(f(e,t))}function f(e,t){function n(e){return e>=0?e:0-e}var r,o,a,s,u,c;for(a=e,c=0;8>c;c++){if(s=i(a)-e,t>n(s))return a;if(u=l(a),1e-6>n(u))break;a-=s/u}if(r=0,o=1,a=e,r>a)return r;if(a>o)return o;for(;o>r;){if(s=i(a),t>n(s-e))return a;e>s?r=a:o=a,a=.5*(o-r)+r}return a}var m=0,d=0,h=0,p=0,v=0,g=0;return h=3*t,d=3*(r-t)-h,m=1-h-d,g=3*n,v=3*(o-n)-g,p=1-g-v,c(e,u(a))}function u(e,t){var n,r=b.getElementTransform(e);n=r?new PureCSSMatrix(r):new PureCSSMatrix,t&&(n=n.translate(t.x,t.y));var a=o(n);return a.r=c(r),a}function c(e){for(var t,n=0;null!==(t=y.exec(e));){var r=t[1].toLowerCase(),a=t[2].split(",");if("matrix"==r){var i=r+"("+t[2]+")";n+=o(new PureCSSMatrix(i)).r}else if("rotate"==r){var s=a[0],l=parseFloat(h(s));s.match(z)&&(l=2*Math.PI*l/360),n+=l}}return n}function f(e,t){if(Math.abs(e.r-t.r)>Math.PI)if(t.r<e.r)for(;Math.abs(e.r-t.r)>Math.PI;)t.r+=2*Math.PI;else for(;Math.abs(e.r-t.r)>Math.PI;)t.r-=2*Math.PI;return t}function m(e,t,n){var r={};for(var o in e)e.hasOwnProperty(o)&&(r[o]=e[o]+(t[o]-e[o])*n);return r}function d(e,t){t=Math.abs(parseInt(t,10))||0;var n=Math.pow(10,t);return Math.round(e*n)/n}function h(e){return e.match(x)}var p,v,g,x=/([0-9.\-e]+)/g,y=/([a-z]+)\(([^\)]+)\)/g,z=/deg$/,b=e.zoomooz.helpers,w={duration:450,easing:"ease",nativeanimation:!1};jQuery.cssHooks.MsTransform={set:function(e,t){e.style.msTransform=t}},jQuery.cssHooks.MsTransformOrigin={set:function(e,t){e.style.msTransformOrigin=t}},e.fn.animateTransformation=function(r,i,s,l,c){i=jQuery.extend({},w,i),g&&(clearTimeout(g),g=null),i.nativeanimation&&l&&(g=setTimeout(l,i.duration)),this.each(function(){var m=e(this);r||(r=new PureCSSMatrix);var d=u(m,s),h=f(d,o(r));i.nativeanimation?(m.css(t(a(h),i.duration,i.easing)),c&&c()):n(m,d,h,i,l,c)})},e.fn.setTransformation=function(n){this.each(function(){var r=e(this),i=u(r),s=f(i,o(n));r.css(t(a(s)))})}}(jQuery),function(e){"use strict";function t(t,n){var r=jQuery.extend({},n);e.zoomooz.defaultSettings||e.zoomooz.setup();var o,a=e.zoomooz.defaultSettings,i=jQuery.extend({},r);for(o in a)a.hasOwnProperty(o)&&!i[o]&&(i[o]=t.data(o));for(var s=0;v.length>s;s++)o=v[s],i[o]||(i[o]=t.data(o));return jQuery.extend({},a,i)}function n(){var t=document.createElement("style");t.type="text/css";var n="";p.forEachPrefix(function(e){n+=e+"transform-origin: 0 0;"},!0),t.innerHTML="html {height:100%;}.noScroll{overflow:hidden !important;}* {"+n+"}",document.getElementsByTagName("head")[0].appendChild(t),e(document).ready(function(){var n=window.innerWidth-e("body").width();t.innerHTML+="body.noScroll,html.noScroll body{margin-right:"+n+"px;}"})}function r(){var t={targetsize:.9,scalemode:"both",root:e(document.body),debug:!1,animationendcallback:null,closeclick:!1},n=void 0!==window.mozInnerScreenX;return t.scrollresetbeforezoom=n,t}function o(t,n){var r,o=n.scrollresetbeforezoom,u=null;(function(){var e=n.root,s=e.parent();t[0]===e[0]?u=a(e,s):e.data("original-scroll")?o||(u=a(e,s)):(r=!0,u=i(e,s,o))})();var c,f=null;s(n.root);var d=null;if(t[0]!==n.root[0]){var h=m(t,n.root).inverse();o||(d=u),c=l(t,h,d,n),n.animationendcallback&&(f=function(){n.animationendcallback.call(t[0])})}else o&&(c=(new PureCSSMatrix).translate(-u.x,-u.y)),f=function(){var r=e(n.root),a=u.elem;a.removeClass("noScroll"),r.setTransformation(new PureCSSMatrix),r.data("original-scroll",null),e(document).off("touchmove"),o&&(a[0]==document.body||a[0]==window?window.scrollTo(u.x,u.y):(a.scrollLeft(u.x),a.scrollTop(u.y))),n.animationendcallback&&n.animationendcallback.call(t[0])};var p=null;o&&u&&u.animationstartedcallback&&(p=u.animationstartedcallback),r||(d=!1),e(n.root).animateTransformation(c,n,d,f,p)}function a(e,t){var n=e.data("original-scroll");return n||(n={elem:t,x:0,"y:":0}),n}function i(t,n,r){var o=t.scrollTop(),a=t.scrollLeft(),i=t;o||(o=n.scrollTop(),a=n.scrollLeft(),i=n);var s={elem:i,x:a,y:o};t.data("original-scroll",s),e(document).on("touchmove",function(e){e.preventDefault()});var l="translate(-"+a+"px,-"+o+"px)";return p.forEachPrefix(function(e){t.css(e+"transform",l)}),i.addClass("noScroll"),r&&(s.animationstartedcallback=function(){i[0]==document.body||i[0]==document?window.scrollTo(0,0):(i.scrollLeft(0),i.scrollTop(0))}),s}function s(t){var n=e(t).parent(),r=n.width(),o=n.height(),a=r/2,i=o/2,s=d(a)+"px "+d(i)+"px";p.forEachPrefix(function(e){t.css(e+"transform-origin",s)})}function l(t,n,r,o){var a,i=o.targetsize,s=o.scalemode,l=o.root,u=e(l).parent(),c=u.width(),f=u.height(),m=c/t.outerWidth(),d=f/t.outerHeight();if("width"==s)a=i*m;else if("height"==s)a=i*d;else if("both"==s)a=i*Math.min(m,d);else{if("scale"!=s)return console.log("wrong zoommode"),void 0;a=i}var h=(c-t.outerWidth()*a)/2,p=(f-t.outerHeight()*a)/2,v=c/2,g=f/2,x=-parseFloat(l.css("margin-left"))||0,y=-parseFloat(l.css("margin-top"))||0,z=new PureCSSMatrix;r&&(z=z.translate(r.x,r.y));var b=z.translate(x,y).translate(-v,-g).translate(h,p).scale(a,a).multiply(n).translate(v,g);return b}function u(e,t,n){return[e.a*t+e.c*n+e.e,e.b*t+e.d*n+e.f]}function c(e,t){var n=m(e,t.root).elements();f(u(n,0,0)),f(u(n,0,e.outerHeight())),f(u(n,e.outerWidth(),e.outerHeight())),f(u(n,e.outerWidth(),0))}function f(t){var n="width:4px;height:4px;background-color:red;position:absolute;margin-left:-2px;margin-top:-2px;";n+="left:"+t[0]+"px;top:"+t[1]+"px;";var r='<div class="debuglabel" style="'+n+'"></div>';e("#debug").append(r)}function m(t,n){var r=t[0];if(!r||!r.ownerDocument)return null;var o,a=new PureCSSMatrix;if(r===r.ownerDocument.body){var i=jQuery.offset.bodyOffset(r);return o=new PureCSSMatrix,o=o.translate(i.left,i.top),a=a.multiply(o)}var s;jQuery.offset.initialize?(jQuery.offset.initialize(),s={fixedPosition:jQuery.offset.supportsFixedPosition,doesNotAddBorder:jQuery.offset.doesNotAddBorder,doesAddBorderForTableAndCells:jQuery.support.doesAddBorderForTableAndCells,subtractsBorderForOverflowNotVisible:jQuery.offset.subtractsBorderForOverflowNotVisible}):s=jQuery.support;var l,u,c=r.offsetParent,f=r.ownerDocument,m=f.documentElement,d=f.body,p=n[0],v=f.defaultView;u=v?v.getComputedStyle(r,null):r.currentStyle;var g=r.offsetTop,x=r.offsetLeft,y=h().translate(x,g);for(y=y.multiply(h(r)),a=y.multiply(a);(r=r.parentNode)&&r!==p&&(g=0,x=0,!s.fixedPosition||"fixed"!==u.position);)l=v?v.getComputedStyle(r,null):r.currentStyle,g-=r.scrollTop,x-=r.scrollLeft,r===c&&(g+=r.offsetTop,x+=r.offsetLeft,!s.doesNotAddBorder||s.doesAddBorderForTableAndCells&&/^t(able|d|h)$/i.test(r.nodeName)||(g+=parseFloat(l.borderTopWidth)||0,x+=parseFloat(l.borderLeftWidth)||0),c=r.offsetParent),s.subtractsBorderForOverflowNotVisible&&"visible"!==l.overflow&&(g+=parseFloat(l.borderTopWidth)||0,x+=parseFloat(l.borderLeftWidth)||0),u=l,r.offsetParent==p&&(g-=parseFloat(e(r.offsetParent).css("margin-top"))||0,x-=parseFloat(e(r.offsetParent).css("margin-left"))||0),y=h().translate(x,g),y=y.multiply(h(r)),a=y.multiply(a);g=0,x=0,("relative"===u.position||"static"===u.position)&&(g+=d.offsetTop,x+=d.offsetLeft),s.fixedPosition&&"fixed"===u.position&&(g+=Math.max(m.scrollTop,d.scrollTop),x+=Math.max(m.scrollLeft,d.scrollLeft));var z=(new PureCSSMatrix).translate(x,g);return a=a.multiply(z)}function d(e){return Number(e).toFixed(6)}function h(e){var t=p.getElementTransform(e);return t?new PureCSSMatrix(t):new PureCSSMatrix}var p=e.zoomooz.helpers,v=["duration","easing","nativeanimation"];n(),e.zoomooz||(e.zoomooz={}),e.zoomooz.setup=function(t){e.zoomooz.defaultSettings=jQuery.extend(r(),t)},e.fn.zoomSettings=function(n){var r;return this.each(function(){var o=e(this);r=t(o,n)}),r},e.fn.zoomTo=function(t,n){return this.each(function(){var r=e(this);n||(t=r.zoomSettings(t)),o(r,t),t.debug?(0===e("#debug").length?e(t.root).append('<div id="debug"><div>'):e("#debug").html(""),c(r,t)):0!==e("#debug").length&&e("#debug").html("")}),this}}(jQuery),function(e){"use strict";function t(n,r,o){n.addClass("zoomTarget"),o.animationendcallback||(o.animationendcallback=o.closeclick?function(){e(".selectedZoomTarget").removeClass("selectedZoomTarget zoomNotClickable"),n.addClass("selectedZoomTarget")}:function(){e(".selectedZoomTarget").removeClass("selectedZoomTarget zoomNotClickable"),n.addClass("selectedZoomTarget zoomNotClickable")});var a=r.closest(".zoomContainer");0!==a.length&&(o.root=a);var i=o.root;if(!i.hasClass("zoomTarget")){var s=i.zoomSettings({});s.animationendcallback=function(){var t=e(this);e(".selectedZoomTarget").removeClass("selectedZoomTarget zoomNotClickable"),t.addClass("selectedZoomTarget zoomNotClickable"),t.parent().addClass("selectedZoomTarget zoomNotClickable")},t(i,i,s),t(i.parent(),i,s),i.click()}n.on("click",function(e){o.closeclick&&r.hasClass("selectedZoomTarget")?o.root.click():r.zoomTo(o),e.stopPropagation()})}function n(){function e(e){var t="-webkit-touch-callout: "+(e?"default":"none")+";";return r.forEachPrefix(function(n){t+=n+"user-select:"+(e?"text":"none")+";"},!0),t}var t=document.createElement("style");t.type="text/css",t.innerHTML=".zoomTarget{"+e(!1)+"}"+".zoomTarget:hover{cursor:pointer!important;}"+".zoomNotClickable{"+e(!0)+"}"+".zoomNotClickable:hover{cursor:auto!important;}"+".zoomContainer{position:relative;padding:1px;margin:-1px;}",document.getElementsByTagName("head")[0].appendChild(t)}e.zoomooz||(e.zoomooz={});var r=e.zoomooz.helpers;e.fn.zoomTarget=function(n){this.each(function(){var r=e(this).zoomSettings(n);t(e(this),e(this),r)})},n(),e(document).ready(function(){e(".zoomTarget").zoomTarget()})}(jQuery),function(e){"use strict";e.zoomooz||(e.zoomooz={}),e.fn.zoomContainer=function(){},e(document).ready(function(){e(".zoomContainer").zoomContainer()})}(jQuery),function(e){function t(t,r){var o=n(),a=jQuery.extend({},r);for(var i in o)o.hasOwnProperty(i)&&!a[i]&&(a[i]=o[i]instanceof jQuery?e(t.data(i)):t.data(i));return jQuery.extend({},o,a)}function n(){return{type:"next",root:e(document.body),wrap:"true"}}function r(e,t){e.addClass("zoomButton");var n;n=t.root.hasClass("zoomContainer")?t.root:t.root.find(".zoomContainer");var r=function(){function e(e){return i.indexOf(e)}function t(t){var n=e(t)+1;return i.length>n&&0!==n?i[n]:null}function r(t){var n=e(t)-1;return 0>n?null:i[n]}function o(){return i[0]}function a(){return i[i.length-1]}var i=jQuery.makeArray(n.find(".zoomTarget"));return{next:t,prev:r,last:a,first:o}}();e.on("click",function(e){var o,a=!0,i=n.find(".selectedZoomTarget");0===i.length&&(i=r.first()),0===t.type.indexOf("prev")?(o=r.prev(i[0]),null===o&&(t.wrap?o=r.last():a=!1)):(o=r.next(i[0]),null===o&&(t.wrap?o=r.first():a=!1)),a&&o.click(),e.stopPropagation()})}e.zoomooz||(e.zoomooz={}),e.zoomooz.helpers,e.fn.zoomButton=function(n){this.each(function(){var o=t(e(this),n);r(e(this),o)})},e(document).ready(function(){e(".zoomButton").zoomButton()})}(jQuery);


$(document).ready(function() {
    
	var timeoutID;
	var timeoutID2;
	var pressCount=0;


	var progress = $("<div>");
	progress.addClass('progress');
	progress.addClass('progress-bar-sidebar');
	var p = $("<div>");
		p.addClass('progress-bar');
		p.addClass('progress-bar-success');
		p.attr('role', 'progressbar');
		p.attr("id","han-progress")
		p.attr('aria-valuemin', '0');
		p.attr('aria-valuemax', '150');
		p.width("0");
	var timerId = 0;	
	progress.append(p);

	$("#sidebar .panel-success").append(progress);
	$("#sidebar .panel-success").zoomTo();

	moveStatusBar("#han-progress",9000,function(){ 
										$(".progress-bar-sidebar").remove();
										$("#sidebar .panel-danger").zoomTo(); 
										pressCount=1;		
										$("#sidebar .panel-danger").append(progress);
										moveStatusBar("#han-progress",9000,function()
																			{
																				$("body").zoomTo();
																				//$("body").attr("style","");
																				$(".progress-bar-sidebar").remove();
																			});
									});

	function moveStatusBar(selector, time, performAfter)
	{
			//var timerId = 0;
			clearInterval(timerId);
			$("#han-progress").width("0");
			var ctr=0;
			var max=time/1000;
			var sec = 1;
			var step = parseInt(100/max); 
			timerId = setInterval(function () {
		    // interval function
		    
		    sec++;
		    ctr+=step;
		    console.log(sec,ctr);
		    $(selector).attr("style","width:" + ctr + "%");
		    
		    // max reached?
		    if (sec>max+3){
		      $(selector).attr("style","width:100%");	
		      clearInterval(timerId);
			  performAfter();		      
		      
		    }
		    
		  }, 1000);

		  	
	}



	$(document).keydown(function(e) {
		if(e.keyCode == 27)
		{
			if(pressCount==0)
			{
				clearInterval(timerId);
				$(".progress-bar-sidebar").remove();
				$("#sidebar .panel-danger").zoomTo(); 
				$("#sidebar .panel-danger").append(progress);
				$("#han-progress").width("0");
				$("#sidebar .panel-danger").zoomTo();
				pressCount++;
				moveStatusBar("#han-progress",13000,function()
															{
																$("body").zoomTo();
																$("body").attr("style","");
															});

			}
			else if(pressCount==1)
			{
				$(".progress-bar-sidebar").remove();
				clearInterval(timerId);
				$("body").zoomTo();
				//$("body").attr("style","");
				setTimeout(function(){$("body").attr("style","")},1000);

			}

		}
	});



});
*/
/* https://github.com/bigspotteddog/ScrollToFixed */
(function(a){a.isScrollToFixed=function(b){return !!a(b).data("ScrollToFixed")};a.ScrollToFixed=function(d,i){var m=this;m.$el=a(d);m.el=d;m.$el.data("ScrollToFixed",m);var c=false;var H=m.$el;var I;var F;var k;var e;var z;var E=0;var r=0;var j=-1;var f=-1;var u=null;var A;var g;function v(){H.trigger("preUnfixed.ScrollToFixed");l();H.trigger("unfixed.ScrollToFixed");f=-1;E=H.offset().top;r=H.offset().left;if(m.options.offsets){r+=(H.offset().left-H.position().left)}if(j==-1){j=r}I=H.css("position");c=true;if(m.options.bottom!=-1){H.trigger("preFixed.ScrollToFixed");x();H.trigger("fixed.ScrollToFixed")}}function o(){var J=m.options.limit;if(!J){return 0}if(typeof(J)==="function"){return J.apply(H)}return J}function q(){return I==="fixed"}function y(){return I==="absolute"}function h(){return !(q()||y())}function x(){if(!q()){var J=H[0].getBoundingClientRect();u.css({display:H.css("display"),width:J.width,height:J.height,"float":H.css("float")});cssOptions={"z-index":m.options.zIndex,position:"fixed",top:m.options.bottom==-1?t():"",bottom:m.options.bottom==-1?"":m.options.bottom,"margin-left":"0px"};if(!m.options.dontSetWidth){cssOptions.width=H.css("width")}H.css(cssOptions);H.addClass(m.options.baseClassName);if(m.options.className){H.addClass(m.options.className)}I="fixed"}}function b(){var K=o();var J=r;if(m.options.removeOffsets){J="";K=K-E}cssOptions={position:"absolute",top:K,left:J,"margin-left":"0px",bottom:""};if(!m.options.dontSetWidth){cssOptions.width=H.css("width")}H.css(cssOptions);I="absolute"}function l(){if(!h()){f=-1;u.css("display","none");H.css({"z-index":z,width:"",position:F,left:"",top:e,"margin-left":""});H.removeClass("scroll-to-fixed-fixed");if(m.options.className){H.removeClass(m.options.className)}I=null}}function w(J){if(J!=f){H.css("left",r-J);f=J}}function t(){var J=m.options.marginTop;if(!J){return 0}if(typeof(J)==="function"){return J.apply(H)}return J}function B(){if(!a.isScrollToFixed(H)||H.is(":hidden")){return}var M=c;var L=h();if(!c){v()}else{if(h()){E=H.offset().top;r=H.offset().left}}var J=a(window).scrollLeft();var N=a(window).scrollTop();var K=o();if(m.options.minWidth&&a(window).width()<m.options.minWidth){if(!h()||!M){p();H.trigger("preUnfixed.ScrollToFixed");l();H.trigger("unfixed.ScrollToFixed")}}else{if(m.options.maxWidth&&a(window).width()>m.options.maxWidth){if(!h()||!M){p();H.trigger("preUnfixed.ScrollToFixed");l();H.trigger("unfixed.ScrollToFixed")}}else{if(m.options.bottom==-1){if(K>0&&N>=K-t()){if(!L&&(!y()||!M)){p();H.trigger("preAbsolute.ScrollToFixed");b();H.trigger("unfixed.ScrollToFixed")}}else{if(N>=E-t()){if(!q()||!M){p();H.trigger("preFixed.ScrollToFixed");x();f=-1;H.trigger("fixed.ScrollToFixed")}w(J)}else{if(!h()||!M){p();H.trigger("preUnfixed.ScrollToFixed");l();H.trigger("unfixed.ScrollToFixed")}}}}else{if(K>0){if(N+a(window).height()-H.outerHeight(true)>=K-(t()||-n())){if(q()){p();H.trigger("preUnfixed.ScrollToFixed");if(F==="absolute"){b()}else{l()}H.trigger("unfixed.ScrollToFixed")}}else{if(!q()){p();H.trigger("preFixed.ScrollToFixed");x()}w(J);H.trigger("fixed.ScrollToFixed")}}else{w(J)}}}}}function n(){if(!m.options.bottom){return 0}return m.options.bottom}function p(){var J=H.css("position");if(J=="absolute"){H.trigger("postAbsolute.ScrollToFixed")}else{if(J=="fixed"){H.trigger("postFixed.ScrollToFixed")}else{H.trigger("postUnfixed.ScrollToFixed")}}}var D=function(J){if(H.is(":visible")){c=false;B()}};var G=function(J){(!!window.requestAnimationFrame)?requestAnimationFrame(B):B()};var C=function(){var K=document.body;if(document.createElement&&K&&K.appendChild&&K.removeChild){var M=document.createElement("div");if(!M.getBoundingClientRect){return null}M.innerHTML="x";M.style.cssText="position:fixed;top:100px;";K.appendChild(M);var N=K.style.height,O=K.scrollTop;K.style.height="3000px";K.scrollTop=500;var J=M.getBoundingClientRect().top;K.style.height=N;var L=(J===100);K.removeChild(M);K.scrollTop=O;return L}return null};var s=function(J){J=J||window.event;if(J.preventDefault){J.preventDefault()}J.returnValue=false};m.init=function(){m.options=a.extend({},a.ScrollToFixed.defaultOptions,i);z=H.css("z-index");m.$el.css("z-index",m.options.zIndex);u=a("<div />");I=H.css("position");F=H.css("position");k=H.css("float");e=H.css("top");if(h()){m.$el.after(u)}a(window).bind("resize.ScrollToFixed",D);a(window).bind("scroll.ScrollToFixed",G);if("ontouchmove" in window){a(window).bind("touchmove.ScrollToFixed",B)}if(m.options.preFixed){H.bind("preFixed.ScrollToFixed",m.options.preFixed)}if(m.options.postFixed){H.bind("postFixed.ScrollToFixed",m.options.postFixed)}if(m.options.preUnfixed){H.bind("preUnfixed.ScrollToFixed",m.options.preUnfixed)}if(m.options.postUnfixed){H.bind("postUnfixed.ScrollToFixed",m.options.postUnfixed)}if(m.options.preAbsolute){H.bind("preAbsolute.ScrollToFixed",m.options.preAbsolute)}if(m.options.postAbsolute){H.bind("postAbsolute.ScrollToFixed",m.options.postAbsolute)}if(m.options.fixed){H.bind("fixed.ScrollToFixed",m.options.fixed)}if(m.options.unfixed){H.bind("unfixed.ScrollToFixed",m.options.unfixed)}if(m.options.spacerClass){u.addClass(m.options.spacerClass)}H.bind("resize.ScrollToFixed",function(){u.height(H.height())});H.bind("scroll.ScrollToFixed",function(){H.trigger("preUnfixed.ScrollToFixed");l();H.trigger("unfixed.ScrollToFixed");B()});H.bind("detach.ScrollToFixed",function(J){s(J);H.trigger("preUnfixed.ScrollToFixed");l();H.trigger("unfixed.ScrollToFixed");a(window).unbind("resize.ScrollToFixed",D);a(window).unbind("scroll.ScrollToFixed",G);H.unbind(".ScrollToFixed");u.remove();m.$el.removeData("ScrollToFixed")});D()};m.init()};a.ScrollToFixed.defaultOptions={marginTop:0,limit:0,bottom:-1,zIndex:1000,baseClassName:"scroll-to-fixed-fixed"};a.fn.scrollToFixed=function(b){return this.each(function(){(new a.ScrollToFixed(this,b))})}})(jQuery);


$(document).ready(function() {
	$('#sidebar').scrollToFixed();
});




/* */
document.captureEvents(Event.MOUSEDOWN | Event.MOUSEUP);
document.onmousedown = clickIE4;
document.onmouseup = clickIE4;

function clickIE4()
{
    //alert("ահա՜, բռնվեցի՞ր , ստեղաշարով արա")
    //return false; 
}



/* toggle buttom */
function toogleButton(condition,selector) //true or false
{
	if(condition)
	{
	  
	  $(selector).attr("disabled",false);
	  $(selector).unbind('click');
	}
	else
	{
	  $(selector).attr("disabled",true);
	  $(selector).bind('click', function(e) { e.preventDefault(); });

	}
}


//Statusbar script
var cnt = 17;
var loc = window.location;
var fiNm = parseInt((loc.pathname.split("/")[2]).split("_")[0]);
if(!isNaN(fiNm))
{
	var crntNum = fiNm+1;
	var prcnt = (crntNum/17)*100;
	var pr = $("<div/>").attr("class","progress");
	pr.html('<div class="progress-bar">'+crntNum+'-ը '+cnt+'֊ից</div>');	
	$(".page-header.row").after(pr);

	$(".progress-bar").animate({
    	width: prcnt+"%"
	}, 100);

}

//Panels script
//$(".panel.panel-danger").hide();
$("#sidebar").hide().slideDown(1500,function(){$(".panel.panel-danger").fadeOut(1000).fadeIn(1000)});

/*
<div class="progress">
	<div class="progress-bar" style="width: 12.5%;">
	    
	</div>
</div>
*/