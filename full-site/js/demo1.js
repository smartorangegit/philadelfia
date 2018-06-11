/*
anime.js
 2017 Julian Garnier
 Released under the MIT license
*/
var $jscomp$this=this;
(function(u,r){"function"===typeof define&&define.amd?define([],r):"object"===typeof module&&module.exports?module.exports=r():u.anime=r()})(this,function(){function u(a){if(!g.col(a))try{return document.querySelectorAll(a)}catch(b){}}function r(a){return a.reduce(function(a,c){return a.concat(g.arr(c)?r(c):c)},[])}function v(a){if(g.arr(a))return a;g.str(a)&&(a=u(a)||a);return a instanceof NodeList||a instanceof HTMLCollection?[].slice.call(a):[a]}function E(a,b){return a.some(function(a){return a===b})}
function z(a){var b={},c;for(c in a)b[c]=a[c];return b}function F(a,b){var c=z(a),d;for(d in a)c[d]=b.hasOwnProperty(d)?b[d]:a[d];return c}function A(a,b){var c=z(a),d;for(d in b)c[d]=g.und(a[d])?b[d]:a[d];return c}function R(a){a=a.replace(/^#?([a-f\d])([a-f\d])([a-f\d])$/i,function(a,b,c,h){return b+b+c+c+h+h});var b=/^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(a);a=parseInt(b[1],16);var c=parseInt(b[2],16),b=parseInt(b[3],16);return"rgb("+a+","+c+","+b+")"}function S(a){function b(a,b,c){0>
c&&(c+=1);1<c&&--c;return c<1/6?a+6*(b-a)*c:.5>c?b:c<2/3?a+(b-a)*(2/3-c)*6:a}var c=/hsl\((\d+),\s*([\d.]+)%,\s*([\d.]+)%\)/g.exec(a);a=parseInt(c[1])/360;var d=parseInt(c[2])/100,c=parseInt(c[3])/100;if(0==d)d=c=a=c;else{var e=.5>c?c*(1+d):c+d-c*d,k=2*c-e,d=b(k,e,a+1/3),c=b(k,e,a);a=b(k,e,a-1/3)}return"rgb("+255*d+","+255*c+","+255*a+")"}function w(a){if(a=/([\+\-]?[0-9#\.]+)(%|px|pt|em|rem|in|cm|mm|ex|pc|vw|vh|deg|rad|turn)?/.exec(a))return a[2]}function T(a){if(-1<a.indexOf("translate"))return"px";
if(-1<a.indexOf("rotate")||-1<a.indexOf("skew"))return"deg"}function G(a,b){return g.fnc(a)?a(b.target,b.id,b.total):a}function B(a,b){if(b in a.style)return getComputedStyle(a).getPropertyValue(b.replace(/([a-z])([A-Z])/g,"$1-$2").toLowerCase())||"0"}function H(a,b){if(g.dom(a)&&E(U,b))return"transform";if(g.dom(a)&&(a.getAttribute(b)||g.svg(a)&&a[b]))return"attribute";if(g.dom(a)&&"transform"!==b&&B(a,b))return"css";if(null!=a[b])return"object"}function V(a,b){var c=T(b),c=-1<b.indexOf("scale")?
1:0+c;a=a.style.transform;if(!a)return c;for(var d=[],e=[],k=[],h=/(\w+)\((.+?)\)/g;d=h.exec(a);)e.push(d[1]),k.push(d[2]);a=k.filter(function(a,c){return e[c]===b});return a.length?a[0]:c}function I(a,b){switch(H(a,b)){case "transform":return V(a,b);case "css":return B(a,b);case "attribute":return a.getAttribute(b)}return a[b]||0}function J(a,b){var c=/^(\*=|\+=|-=)/.exec(a);if(!c)return a;b=parseFloat(b);a=parseFloat(a.replace(c[0],""));switch(c[0][0]){case "+":return b+a;case "-":return b-a;case "*":return b*
a}}function C(a){return g.obj(a)&&a.hasOwnProperty("totalLength")}function W(a,b){function c(c){c=void 0===c?0:c;return a.el.getPointAtLength(1<=b+c?b+c:0)}var d=c(),e=c(-1),k=c(1);switch(a.property){case "x":return d.x;case "y":return d.y;case "angle":return 180*Math.atan2(k.y-e.y,k.x-e.x)/Math.PI}}function K(a,b){var c=/-?\d*\.?\d+/g;a=C(a)?a.totalLength:a;if(g.col(a))b=g.rgb(a)?a:g.hex(a)?R(a):g.hsl(a)?S(a):void 0;else{var d=w(a);a=d?a.substr(0,a.length-d.length):a;b=b?a+b:a}b+="";return{original:b,
numbers:b.match(c)?b.match(c).map(Number):[0],strings:b.split(c)}}function X(a,b){return b.reduce(function(b,d,e){return b+a[e-1]+d})}function L(a){return(a?r(g.arr(a)?a.map(v):v(a)):[]).filter(function(a,c,d){return d.indexOf(a)===c})}function Y(a){var b=L(a);return b.map(function(a,d){return{target:a,id:d,total:b.length}})}function Z(a,b){var c=z(b);if(g.arr(a)){var d=a.length;2!==d||g.obj(a[0])?g.fnc(b.duration)||(c.duration=b.duration/d):a={value:a}}return v(a).map(function(a,c){c=c?0:b.delay;
a=g.obj(a)&&!C(a)?a:{value:a};g.und(a.delay)&&(a.delay=c);return a}).map(function(a){return A(a,c)})}function aa(a,b){var c={},d;for(d in a){var e=G(a[d],b);g.arr(e)&&(e=e.map(function(a){return G(a,b)}),1===e.length&&(e=e[0]));c[d]=e}c.duration=parseFloat(c.duration);c.delay=parseFloat(c.delay);return c}function ba(a){return g.arr(a)?x.apply(this,a):M[a]}function ca(a,b){var c;return a.tweens.map(function(d){d=aa(d,b);var e=d.value,k=I(b.target,a.name),h=c?c.to.original:k,h=g.arr(e)?e[0]:h,n=J(g.arr(e)?
e[1]:e,h),k=w(n)||w(h)||w(k);d.isPath=C(e);d.from=K(h,k);d.to=K(n,k);d.start=c?c.end:a.offset;d.end=d.start+d.delay+d.duration;d.easing=ba(d.easing);d.elasticity=(1E3-Math.min(Math.max(d.elasticity,1),999))/1E3;g.col(d.from.original)&&(d.round=1);return c=d})}function da(a,b){return r(a.map(function(a){return b.map(function(b){var c=H(a.target,b.name);if(c){var d=ca(b,a);b={type:c,property:b.name,animatable:a,tweens:d,duration:d[d.length-1].end,delay:d[0].delay}}else b=void 0;return b})})).filter(function(a){return!g.und(a)})}
function N(a,b,c){var d="delay"===a?Math.min:Math.max;return b.length?d.apply(Math,b.map(function(b){return b[a]})):c[a]}function ea(a){var b=F(fa,a),c=F(ga,a),d=Y(a.targets),e=[],g=A(b,c),h;for(h in a)g.hasOwnProperty(h)||"targets"===h||e.push({name:h,offset:g.offset,tweens:Z(a[h],c)});a=da(d,e);return A(b,{animatables:d,animations:a,duration:N("duration",a,c),delay:N("delay",a,c)})}function m(a){function b(){return window.Promise&&new Promise(function(a){return P=a})}function c(a){return f.reversed?
f.duration-a:a}function d(a){for(var b=0,c={},d=f.animations,e={};b<d.length;){var g=d[b],h=g.animatable,n=g.tweens;e.tween=n.filter(function(b){return a<b.end})[0]||n[n.length-1];e.isPath$0=e.tween.isPath;e.round=e.tween.round;e.eased=e.tween.easing(Math.min(Math.max(a-e.tween.start-e.tween.delay,0),e.tween.duration)/e.tween.duration,e.tween.elasticity);n=X(e.tween.to.numbers.map(function(a){return function(b,c){c=a.isPath$0?0:a.tween.from.numbers[c];b=c+a.eased*(b-c);a.isPath$0&&(b=W(a.tween.value,
b));a.round&&(b=Math.round(b*a.round)/a.round);return b}}(e)),e.tween.to.strings);ha[g.type](h.target,g.property,n,c,h.id);g.currentValue=n;b++;e={isPath$0:e.isPath$0,tween:e.tween,eased:e.eased,round:e.round}}if(c)for(var k in c)D||(D=B(document.body,"transform")?"transform":"-webkit-transform"),f.animatables[k].target.style[D]=c[k].join(" ");f.currentTime=a;f.progress=a/f.duration*100}function e(a){if(f[a])f[a](f)}function g(){f.remaining&&!0!==f.remaining&&f.remaining--}function h(a){var h=f.duration,
k=f.offset,m=f.delay,O=f.currentTime,p=f.reversed,q=c(a),q=Math.min(Math.max(q,0),h);q>k&&q<h?(d(q),!f.began&&q>=m&&(f.began=!0,e("begin")),e("run")):(q<=k&&0!==O&&(d(0),p&&g()),q>=h&&O!==h&&(d(h),p||g()));a>=h&&(f.remaining?(t=n,"alternate"===f.direction&&(f.reversed=!f.reversed)):(f.pause(),P(),Q=b(),f.completed||(f.completed=!0,e("complete"))),l=0);if(f.children)for(a=f.children,h=0;h<a.length;h++)a[h].seek(q);e("update")}a=void 0===a?{}:a;var n,t,l=0,P=null,Q=b(),f=ea(a);f.reset=function(){var a=
f.direction,b=f.loop;f.currentTime=0;f.progress=0;f.paused=!0;f.began=!1;f.completed=!1;f.reversed="reverse"===a;f.remaining="alternate"===a&&1===b?2:b};f.tick=function(a){n=a;t||(t=n);h((l+n-t)*m.speed)};f.seek=function(a){h(c(a))};f.pause=function(){var a=p.indexOf(f);-1<a&&p.splice(a,1);f.paused=!0};f.play=function(){f.paused&&(f.paused=!1,t=0,l=f.completed?0:c(f.currentTime),p.push(f),y||ia())};f.reverse=function(){f.reversed=!f.reversed;t=0;l=c(f.currentTime)};f.restart=function(){f.pause();
f.reset();f.play()};f.finished=Q;f.reset();f.autoplay&&f.play();return f}var fa={update:void 0,begin:void 0,run:void 0,complete:void 0,loop:1,direction:"normal",autoplay:!0,offset:0},ga={duration:1E3,delay:0,easing:"easeOutElastic",elasticity:500,round:0},U="translateX translateY translateZ rotate rotateX rotateY rotateZ scale scaleX scaleY scaleZ skewX skewY".split(" "),D,g={arr:function(a){return Array.isArray(a)},obj:function(a){return-1<Object.prototype.toString.call(a).indexOf("Object")},svg:function(a){return a instanceof
SVGElement},dom:function(a){return a.nodeType||g.svg(a)},str:function(a){return"string"===typeof a},fnc:function(a){return"function"===typeof a},und:function(a){return"undefined"===typeof a},hex:function(a){return/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(a)},rgb:function(a){return/^rgb/.test(a)},hsl:function(a){return/^hsl/.test(a)},col:function(a){return g.hex(a)||g.rgb(a)||g.hsl(a)}},x=function(){function a(a,c,d){return(((1-3*d+3*c)*a+(3*d-6*c))*a+3*c)*a}return function(b,c,d,e){if(0<=b&&1>=b&&
0<=d&&1>=d){var g=new Float32Array(11);if(b!==c||d!==e)for(var h=0;11>h;++h)g[h]=a(.1*h,b,d);return function(h){if(b===c&&d===e)return h;if(0===h)return 0;if(1===h)return 1;for(var k=0,l=1;10!==l&&g[l]<=h;++l)k+=.1;--l;var l=k+(h-g[l])/(g[l+1]-g[l])*.1,n=3*(1-3*d+3*b)*l*l+2*(3*d-6*b)*l+3*b;if(.001<=n){for(k=0;4>k;++k){n=3*(1-3*d+3*b)*l*l+2*(3*d-6*b)*l+3*b;if(0===n)break;var m=a(l,b,d)-h,l=l-m/n}h=l}else if(0===n)h=l;else{var l=k,k=k+.1,f=0;do m=l+(k-l)/2,n=a(m,b,d)-h,0<n?k=m:l=m;while(1e-7<Math.abs(n)&&
10>++f);h=m}return a(h,c,e)}}}}(),M=function(){function a(a,b){return 0===a||1===a?a:-Math.pow(2,10*(a-1))*Math.sin(2*(a-1-b/(2*Math.PI)*Math.asin(1))*Math.PI/b)}var b="Quad Cubic Quart Quint Sine Expo Circ Back Elastic".split(" "),c={In:[[.55,.085,.68,.53],[.55,.055,.675,.19],[.895,.03,.685,.22],[.755,.05,.855,.06],[.47,0,.745,.715],[.95,.05,.795,.035],[.6,.04,.98,.335],[.6,-.28,.735,.045],a],Out:[[.25,.46,.45,.94],[.215,.61,.355,1],[.165,.84,.44,1],[.23,1,.32,1],[.39,.575,.565,1],[.19,1,.22,1],
[.075,.82,.165,1],[.175,.885,.32,1.275],function(b,c){return 1-a(1-b,c)}],InOut:[[.455,.03,.515,.955],[.645,.045,.355,1],[.77,0,.175,1],[.86,0,.07,1],[.445,.05,.55,.95],[1,0,0,1],[.785,.135,.15,.86],[.68,-.55,.265,1.55],function(b,c){return.5>b?a(2*b,c)/2:1-a(-2*b+2,c)/2}]},d={linear:x(.25,.25,.75,.75)},e={},k;for(k in c)e.type=k,c[e.type].forEach(function(a){return function(c,e){d["ease"+a.type+b[e]]=g.fnc(c)?c:x.apply($jscomp$this,c)}}(e)),e={type:e.type};return d}(),ha={css:function(a,b,c){return a.style[b]=
c},attribute:function(a,b,c){return a.setAttribute(b,c)},object:function(a,b,c){return a[b]=c},transform:function(a,b,c,d,e){d[e]||(d[e]=[]);d[e].push(b+"("+c+")")}},p=[],y=0,ia=function(){function a(){y=requestAnimationFrame(b)}function b(b){var c=p.length;if(c){for(var e=0;e<c;)p[e]&&p[e].tick(b),e++;a()}else cancelAnimationFrame(y),y=0}return a}();m.version="2.0.1";m.speed=1;m.running=p;m.remove=function(a){a=L(a);for(var b=p.length-1;0<=b;b--)for(var c=p[b],d=c.animations,e=d.length-1;0<=e;e--)E(a,
d[e].animatable.target)&&(d.splice(e,1),d.length||c.pause())};m.getValue=I;m.path=function(a,b){var c=g.str(a)?u(a)[0]:a,d=b||100;return function(a){return{el:c,property:a,totalLength:c.getTotalLength()*(d/100)}}};m.setDashoffset=function(a){var b=a.getTotalLength();a.setAttribute("stroke-dasharray",b);return b};m.bezier=x;m.easings=M;m.timeline=function(a){var b=m(a);b.duration=0;b.children=[];b.add=function(a){v(a).forEach(function(a){var c=a.offset,d=b.duration;a.autoplay=!1;a.offset=g.und(c)?
d:J(c,d);a=m(a);a.duration>d&&(b.duration=a.duration);b.children.push(a)});return b};return b};m.random=function(a,b){return Math.floor(Math.random()*(b-a+1))+a};return m});

////////////
/*!
 * enquire.js v2.1.6 - Awesome Media Queries in JavaScript
 * Copyright (c) 2017 Nick Williams - http://wicky.nillia.ms/enquire.js
 * License: MIT */

!function(a){if("object"==typeof exports&&"undefined"!=typeof module)module.exports=a();else if("function"==typeof define&&define.amd)define([],a);else{var b;b="undefined"!=typeof window?window:"undefined"!=typeof global?global:"undefined"!=typeof self?self:this,b.enquire=a()}}(function(){return function a(b,c,d){function e(g,h){if(!c[g]){if(!b[g]){var i="function"==typeof require&&require;if(!h&&i)return i(g,!0);if(f)return f(g,!0);var j=new Error("Cannot find module '"+g+"'");throw j.code="MODULE_NOT_FOUND",j}var k=c[g]={exports:{}};b[g][0].call(k.exports,function(a){var c=b[g][1][a];return e(c?c:a)},k,k.exports,a,b,c,d)}return c[g].exports}for(var f="function"==typeof require&&require,g=0;g<d.length;g++)e(d[g]);return e}({1:[function(a,b,c){function d(a,b){this.query=a,this.isUnconditional=b,this.handlers=[],this.mql=window.matchMedia(a);var c=this;this.listener=function(a){c.mql=a.currentTarget||a,c.assess()},this.mql.addListener(this.listener)}var e=a(3),f=a(4).each;d.prototype={constuctor:d,addHandler:function(a){var b=new e(a);this.handlers.push(b),this.matches()&&b.on()},removeHandler:function(a){var b=this.handlers;f(b,function(c,d){if(c.equals(a))return c.destroy(),!b.splice(d,1)})},matches:function(){return this.mql.matches||this.isUnconditional},clear:function(){f(this.handlers,function(a){a.destroy()}),this.mql.removeListener(this.listener),this.handlers.length=0},assess:function(){var a=this.matches()?"on":"off";f(this.handlers,function(b){b[a]()})}},b.exports=d},{3:3,4:4}],2:[function(a,b,c){function d(){if(!window.matchMedia)throw new Error("matchMedia not present, legacy browsers require a polyfill");this.queries={},this.browserIsIncapable=!window.matchMedia("only all").matches}var e=a(1),f=a(4),g=f.each,h=f.isFunction,i=f.isArray;d.prototype={constructor:d,register:function(a,b,c){var d=this.queries,f=c&&this.browserIsIncapable;return d[a]||(d[a]=new e(a,f)),h(b)&&(b={match:b}),i(b)||(b=[b]),g(b,function(b){h(b)&&(b={match:b}),d[a].addHandler(b)}),this},unregister:function(a,b){var c=this.queries[a];return c&&(b?c.removeHandler(b):(c.clear(),delete this.queries[a])),this}},b.exports=d},{1:1,4:4}],3:[function(a,b,c){function d(a){this.options=a,!a.deferSetup&&this.setup()}d.prototype={constructor:d,setup:function(){this.options.setup&&this.options.setup(),this.initialised=!0},on:function(){!this.initialised&&this.setup(),this.options.match&&this.options.match()},off:function(){this.options.unmatch&&this.options.unmatch()},destroy:function(){this.options.destroy?this.options.destroy():this.off()},equals:function(a){return this.options===a||this.options.match===a}},b.exports=d},{}],4:[function(a,b,c){function d(a,b){var c=0,d=a.length;for(c;c<d&&b(a[c],c)!==!1;c++);}function e(a){return"[object Array]"===Object.prototype.toString.apply(a)}function f(a){return"function"==typeof a}b.exports={isFunction:f,isArray:e,each:d}},{}],5:[function(a,b,c){var d=a(2);b.exports=new d},{2:2}]},{},[5])(5)});
////////////////tabsnav//////////
;(function(window) {

	'use strict';

	// Helper vars and functions.
	function extend( a, b ) {
		for( var key in b ) {
			if( b.hasOwnProperty( key ) ) {
				a[key] = b[key];
			}
		}
		return a;
	}

	// From https://davidwalsh.name/javascript-debounce-function.
	function debounce(func, wait, immediate) {
		var timeout;
		return function() {
			var context = this, args = arguments;
			var later = function() {
				timeout = null;
				if (!immediate) func.apply(context, args);
			};
			var callNow = immediate && !timeout;
			clearTimeout(timeout);
			timeout = setTimeout(later, wait);
			if (callNow) func.apply(context, args);
		};
	};

	var win = {width: window.innerWidth, height: window.innerHeight};

	/**
	 * TabsNav obj.
	 */
	function TabsNav(el, options) {
		this.DOM = {};
		this.DOM.el = el;
		this.options = extend({}, this.options);
		extend(this.options, options);
		this._init();
	}

	/**
	 * TabsNav default options.
	 */
	TabsNav.prototype.options = {
		movable: 'all', // 'all': all the tabs || 'single': only the clicked tab
		//extramovable: null,
		layout: 'vertical', // or 'horizontal'
		animeduration: 1300,
		animeeasing: 'easeOutExpo',
		animedelay: 0,
		onOpenTab: function(idx, tab) { return false; },
		onCloseTab: function(idx, tab) { return false; },
		onOpenBarsUpdate: function(anim, idx, tab) {return false; }
	};

	/**
	 * Init. Create layout and initialize/bind any events.
	 */
	TabsNav.prototype._init = function() {
		this.DOM.tabs = [].slice.call(this.DOM.el.querySelectorAll('.tabsnav__item'));
		this.DOM.bars = [].slice.call(this.DOM.el.querySelectorAll('.tabsnav__bar'));

		this.totalTabs = this.DOM.tabs.length;
		this.extraEl = document.querySelector(this.options.extramovable);

		this._initEvents();
	};

	/**
	 * Initialize/Bind any events.
	 */

	TabsNav.prototype._initEvents = function() {

		var self = this;

		// Clicking a tab.

		this._openTabFn = function(ev) {
			if( !self.isOpen ) {
				self._openTab(ev.target);
			}
			//console.log(ev);
			//var newurl='#'+ev.target.getAttribute('data-url');
			var str = location.pathname;
			var t=str.split('/');


			t[2]=ev.target.getAttribute('data-url');

			for (var i=0; i<t.length; i++) {

				if (t[i]) {t[i]=t[i]+'/';}
				//console.log(newurl);
			}

			var newurl=t.join('');
			newurl.replace('//', '');
			newurl='/'+newurl;
			//console.log(newurl);
			//var newurl='#'+ev.target.getAttribute('data-url');
			ga('send', { 'hitType': 'pageview', 'page':location.pathname});

				 if(newurl != window.location.pathname){

	parseData(newurl).then(function(response) {

		document.title =response.title;
	}, function(error) {
	   console.log('Failed!:');
	});

                    window.history.pushState(null, null, newurl);
                }

			//window.history.pushState(null, null, newurl);
			//console.log(location.pathname)
			//console.log(location.pathname+'home')
			//console.log(location)

		};

		this.DOM.tabs.forEach(function(tab) {
			// Clicking a tab...

			tab.addEventListener('click', self._openTabFn);
		});


		// Window resize.
		this.debounceResizeFn = debounce(function() {
			self._resize();
		}, 10);
		window.addEventListener('resize', this.debounceResizeFn);


		enquire.register('screen and (min-width:0) and (max-width:40em)', {
			match: function() {
				// hide if tabs are not open
				if(!self.isOpen && !self.isVisible) {
					self.DOM.el.classList.add('tabsnav--hidden');
				}
			}
		});
		enquire.register('screen and (min-width:40em)', {
			match: function() {
				// show
				if( !self.DOM.el.classList.contains('tabsnav--hidden-default') ) {
					self.DOM.el.classList.remove('tabsnav--hidden');
				}
			}
		});
	};

	/**
	 * Opens a tab/page.
	 */
	TabsNav.prototype._openTab = function(tab) {
		// If animating do nothing.
		if( this.isAnimating ) {
			return false;
		}
		this.isAnimating = true;

		// Update current value (index of the current tab).
		this.current = this.DOM.tabs.indexOf(tab);

		var bounds = tab.getBoundingClientRect(),
			currentDimensions = { left: bounds.left, top: bounds.top, width: bounds.width, height: bounds.height },
			self = this;

		// Choose the dimentions based on the layout mode.
		this.dim = {
			measure: this.options.layout === 'vertical' ? currentDimensions.width : currentDimensions.height,
			position: this.options.layout === 'vertical' ? currentDimensions.left : currentDimensions.top,
			win: this.options.layout === 'vertical' ? win.width : win.height
		};

		this.DOM.bars.forEach(function(bar) {
			// Set transform origin on the respective bar.
			bar.style.transformOrigin = self.options.layout === 'vertical' ? '0% 50%' : '50% 0%';
		});

		// Set z-indexes.
		this.DOM.tabs.forEach(function(tab, idx) { tab.style.zIndex = idx === self.current ? 100 : 1; });

		// Animate tabs and bars.
		var animeTabs = { targets: this.options.movable === 'all' ? this.DOM.tabs : this.DOM.tabs[this.current] },
			animeBars = { targets: this.options.movable === 'all' ? this.DOM.bars : this.DOM.bars[this.current] },
			animeTabsDelay = function(target, index, cnt) {
				if( cnt === 1 || self.options.animedelay === 0 ) {
					return 0;
				}
				else {
					var total = cnt+1, middle = Math.floor(total/2);
					if( self.current >= middle ) {
						return index <= self.current ? index * self.options.animedelay : (total - index - 1) * self.options.animedelay;
					}
					else {
						return index < self.current ? index * self.options.animedelay : (total - index - 1) * self.options.animedelay;
					}
				}
			},
			animeTabsTranslation = function(target, index, cnt) {
				if( index === self.current || cnt === 1 ) {
					return -1 * self.dim.position;
				}
				else {
					var pixels = 1; // adding an extra pixel for the translation due to the fuzzy rendering.
					return index > self.current ? self.dim.win - (self.dim.position + self.dim.measure) - pixels : -1 * self.dim.position + pixels;
				}
			},
			animeBarsScale = function(target, index, cnt) {
				return index === self.current || cnt === 1 ? self.dim.win/self.dim.measure : 1;
			}

		animeTabs.duration = animeBars.duration = this.options.animeduration;
		animeTabs.easing = animeBars.easing = this.options.animeeasing;
		animeTabs.delay = animeBars.delay = animeTabsDelay;
		animeTabs[this.options.layout === 'vertical' ? 'translateX' : 'translateY'] = animeTabsTranslation;
		animeBars[this.options.layout === 'vertical' ? 'scaleX' : 'scaleY'] = animeBarsScale;
		animeTabs.complete = function() {
			self.isAnimating = false;
			self.isOpen = true;
			// Callback
			self.options.onOpenTab(self.current, tab);
		};
		animeBars.update = function(anim) {
			self.options.onOpenBarsUpdate(anim, self.current, tab);
		}

		anime(animeTabs);
		anime(animeBars);

		// Animate extramovable elements.
		if( this.extraEl ) {
			var animeExtra = {
					targets: this.extraEl,
					duration: this.options.animeduration,
					easing: this.options.animeeasing,
					delay: 0
				},
				extraBounds = this.extraEl.getBoundingClientRect(),
				animeExtraTranslation = this.options.layout === 'vertical' ? this.dim.win - (this.dim.position + this.dim.measure) + Math.abs(extraBounds.left - this.dim.position) + this.dim.measure : -1 * this.dim.position;

			animeExtra[this.options.layout === 'vertical' ? 'translateX' : 'translateY'] = animeExtraTranslation;
			anime(animeExtra);
		}
	};

	/**
	 * Closes a tab/page.
	 */
	TabsNav.prototype._closeTab = function(tab) {
		// If animating do nothing.
		if( this.isAnimating ) {
			return false;
		}
		this.isAnimating = true;

		// Animate tabs and bars.
		var self = this,
			animeTabs = { targets: this.options.movable === 'all' ? this.DOM.tabs : this.DOM.tabs[this.current] },
			animeBars = { targets: this.options.movable === 'all' ? this.DOM.bars : this.DOM.bars[this.current] },
			animeTabsDelay = function(target, index, cnt) {
				return cnt === 1 || self.options.animedelay === 0 ? 0 : Math.abs(self.current - index) * self.options.animedelay;
			};

		animeTabs.duration = animeBars.duration = this.options.animeduration;
		animeTabs.easing = animeBars.easing = this.options.animeeasing;
		animeTabs.delay = animeBars.delay = animeTabsDelay;
		animeTabs[this.options.layout === 'vertical' ? 'translateX' : 'translateY'] = 0;
		animeBars[this.options.layout === 'vertical' ? 'scaleX' : 'scaleY'] = 1;
		animeTabs.complete = function() {
			// Reset z-indexes.
			tab.style.zIndex = 1;
			self.isAnimating = false;
			self.isOpen = false;
			// Callback
			self.options.onCloseTab(self.current, tab);
		};

		anime(animeTabs);
		anime(animeBars);

		// Animate extramovable elements.
		if( this.extraEl ) {
			var animeExtra = {
					targets: this.extraEl,
					duration: this.options.animeduration,
					easing: this.options.animeeasing,
					delay: Math.abs(this.current - this.totalTabs) * this.options.animedelay
				};

			animeExtra[this.options.layout === 'vertical' ? 'translateX' : 'translateY'] = 0;
			anime(animeExtra);
		}
	};

	/**
	 * Closes the tabs.
	 */
	TabsNav.prototype.close = function(tab) {
		this._closeTab(tab || this.DOM.tabs[this.current]);
	}

	/**
	 * Shows the TabsNav element.
	 */
	TabsNav.prototype.show = function(callback) {
		var self = this;

		this.isVisible = true;

		this.DOM.tabs.forEach(function(tab) {
			var bar = tab.querySelector('.tabsnav__bar'),
				title = tab.querySelector('.tabsnav__title');

			// Set transform origin.
			bar.style.transformOrigin = '50% 50%';
			bar.style.transform = self.options.layout === 'vertical' ? 'scaleX(0)' : 'scaleY(0)';

			title.style.opacity = 0;
			title.style.transform = self.options.layout === 'vertical' ? 'translateX(10) rotate(-90)' : 'translateY(10)';
		});

		this.DOM.el.classList.remove('tabsnav--hidden');

		// Animate bars.
		anime.remove(this.DOM.bars);
		var animeBars = {
			targets: this.DOM.bars,
			duration: 500,
			delay: function(t,i) {
				return i*50;
			},
			easing: 'easeOutExpo',
			complete: function() {
				if( typeof callback === 'function' ) {
					callback.call();
				}
			}
		};
		animeBars[this.options.layout === 'vertical' ? 'scaleX' : 'scaleY'] = [0,1];
		anime(animeBars);

		// Animate titles.
		var titles = this.DOM.el.querySelectorAll('.tabsnav__title');
		anime.remove(titles);
		var animeTitles = {
			targets: titles,
			duration: 500,
			delay: function(t,i) {
				return i*50;
			},
			easing: 'easeOutExpo',
			opacity: [0,1]
		};
		animeTitles[this.options.layout === 'vertical' ? 'translateX' : 'translateY'] = [10,0];
		animeTitles.rotate = self.options.layout === 'vertical' ? [-90,-90] : 0;
		anime(animeTitles);
	}
	/**
	 * Hides the TabsNav element.
	 */
	TabsNav.prototype.hide = function(callback) {
		var self = this;

		this.isVisible = false;

		this.DOM.bars.forEach(function(bar) {
			// Set transform origin.
			bar.style.transformOrigin = '50% 50%';
		});

		// Animate bars.
		anime.remove(this.DOM.bars);
		var animeBars = {
			targets: this.DOM.bars,
			duration: 500,
			easing: 'easeOutExpo',
			delay: function(t,i,c) {
				return (c-i-1)*50;
			},
			complete: function() {
				self.DOM.el.classList.add('tabsnav--hidden');
				// reset all values.
				self.DOM.tabs.forEach(function(tab) {
					var bar = tab.querySelector('.tabsnav__bar'),
						title = tab.querySelector('.tabsnav__title');

					bar.style.transform = self.options.layout === 'vertical' ? 'scaleX(1)' : 'scaleY(1)';

					title.style.opacity = 1;
					title.style.transform = self.options.layout === 'vertical' ? 'translateX(0) rotate(-90)' : 'translateY(0)';
				});

				if( typeof callback === 'function' ) {
					callback.call();
				}
			}
		};
		animeBars[this.options.layout === 'vertical' ? 'scaleX' : 'scaleY'] = [1,0];
		anime(animeBars);

		// Animate titles.
		var titles = this.DOM.el.querySelectorAll('.tabsnav__title');
		anime.remove(titles);
		var animeTitles = {
			targets: titles,
			duration: 100,
			delay: function(t,i,c) {
				return (c-i-1)*50;
			},
			easing: 'linear',
			opacity: [1,0]
		};
		anime(animeTitles);
	}

	/**
	 * Toggle visibility.
	 */
	TabsNav.prototype.toggleVisibility = function() {
		// If animating do nothing.
		if( this.isAnimating ) {
			return false;
		}
		this.isAnimating = true;

		var self = this, endAnimation = function() { self.isAnimating = false; };

		if( this.isVisible ) {
			this.hide(endAnimation);
			return 0;
		}
		else {
			this.show(endAnimation);
			return 1;
		}
	};

	/**
	 * Resizing the window.
	 */
	TabsNav.prototype._resize = function() {
		var self = this;
		win = {width: window.innerWidth, height: window.innerHeight};

		// If tabs are open then update translate & scale values taking in consideration the new window sizes.
		if( this.isOpen ) {
			// Update dim.win value.
			this.dim.win = this.options.layout === 'vertical' ? win.width : win.height;

			var currentTab = this.DOM.tabs[this.current],
				translateStr = this.options.layout === 'vertical' ? 'translateX' : 'translateY',
				scaleStr = this.options.layout === 'vertical' ? 'scaleX' : 'scaleY';

			// Reset tabs/bars translation and scale values.
			this.DOM.tabs.forEach(function(tab, idx) {
				if( self.options.movable === 'all' || self.options.movable === 'single' && idx === self.current ) {
					var bar = self.DOM.bars[idx], tVal, sVal;

					if( idx === self.current ) {
						tVal = -1 * self.dim.position;
						sVal = self.dim.win/self.dim.measure;
					}
					else {
						tVal = idx > self.current ? self.dim.win - (self.dim.position + self.dim.measure) : -1 * self.dim.position;
						sVal = 1;
					}

					tab.style.transform = translateStr + '(' + tVal + 'px)';
					bar.style.transform = scaleStr + '(' + sVal + ')';
				}
			});

			// Reset extramovable elements
			if( this.extraEl ) {
				this.extraEl.style.transform = translateStr + '(' + (this.options.layout === 'vertical' ? this.dim.win - (this.dim.position + this.dim.measure) : -1 * this.dim.position) + 'px)';
			}
		}
	};

	window.TabsNav = TabsNav;

})(window);



/////////////////////////demo.js///////////////

(function() {
	// Initialize the TabsNav.
	var tnav = new TabsNav(document.querySelector('nav.tabsnav'), {
			movable: 'all',
			extramovable: '.content',
			layout: 'vertical',
			animeduration: 700,
			animeeasing: 'easeInOutCubic',
			animedelay: 100,
			onOpenBarsUpdate: openTabCallback,
			onOpenTab: function() {
				// Show the back button after the tab is open.
				anime({
					targets: backCtrl,
					duration: 800,
					easing: 'easeOutExpo',
					scale: [0,1],
					opacity: {
						value: 1,
						duration: 300,
						easing: 'linear'
					}
				})
				anime({
					targets: batRet,
					duration: 800,
					easing: 'easeOutExpo',
					scale: [0,1],
					opacity: {
						value: 1,
						duration: 300,
						easing: 'linear'
					}
				});
			},

		}),

		// The content items and the back control.
		contentItems = [].slice.call(document.querySelectorAll('.tabscontent > .tabscontent__item')),
		backCtrl = document.querySelector('.tabscontent > button.btn--back'),
		batRet = document.querySelector('.tabscontent > .btn-return'), 
		// menu ctrl for smaller screens (the tabs are not initially shown and toggling this button will show/hide the tabs)
		menuCtrl = document.querySelector('button.btn--menu'),
		isContentShown = false, current;

	function openTabCallback(anim, idx, tab) {
		if( anim.progress > 60 && !isContentShown ) {
			isContentShown = true;
			current = idx;

			var contentItem = contentItems[idx],
				content = {
					img: contentItem.querySelector('img.poster__img'),
					title: contentItem.querySelector('.poster__title'),
					deco: contentItem.querySelector('.poster__deco'),
					box: contentItem.querySelector('.poster__box'),
					number: contentItem.querySelector('.poster__number')
				};

			// Hide the content elements.
			content.img.style.opacity = content.title.style.opacity = content.deco.style.opacity = content.box.style.opacity = content.number.style.opacity = 0;
			// Show content item.
			contentItem.style.opacity = 1;
			contentItem.classList.add('tabscontent__item--current');

			// Animate content elements in.
			anime.remove([content.img, content.title, content.box, content.number, content.deco]);
			anime({
				targets: [content.img, content.title, content.box, content.number, content.deco],
				easing: 'easeOutExpo',
				duration: function(t,i) {
					return 600 + i*100;
				},
				scaleX: function(t,i) {
					return i === 0 ? [0,1] : 1;
				},
				translateX: function(t,i) {
					return [-80-i*150,0];
				},
				rotate: function(t,i) {
					return i === 2 ? [-40,0] : 0;
				},
				opacity: {
					value: 1,
					duration: 300,
					easing: 'linear'
				}
			});
		}
	}

	backCtrl.addEventListener('click', closeTabs);
	// batRet.addEventListener('click', closeTabs);

	function closeTabs() {
		if( !tnav.isOpen ) return;

		var contentItem = contentItems[current],
			content = {
				img: contentItem.querySelector('img.poster__img'),
				title: contentItem.querySelector('.poster__title'),
				deco: contentItem.querySelector('.poster__deco'),
				box: contentItem.querySelector('.poster__box'),
				number: contentItem.querySelector('.poster__number')
			};
				///***

			var str = location.pathname;
			//var t=str.split('/');
			//var old='/'+t[1]+'/trehkimnatna/';
			var t=str.split('/');
			if (t[1]=='appartments')
			{
				var old='/'+t[1]+'/trehkimnatna/';
			}
			else{
				var old='/'+t[1]+'/';	
			}
					
		 if(old != window.location.pathname){
					//document.title = ;
				//	var b=parseData(t[1]);


	parseData(old).then(function(response) {

		 document.title =response.title;
	}, function(error) {
	   console.log('Failed!');
	});



                    window.history.pushState(null, null, old);
                }


	ga('send', { 'hitType': 'pageview', 'page': location.pathname});



		// Hide the content elements.
		anime.remove([content.img, content.title, content.box, content.number, content.deco]);
		// Animate content elements out.
		anime({
			targets: [content.deco, content.number, content.box, content.title, content.img],
			easing: 'easeInOutCubic',
			duration: function(t,i) {
				return 600 + i*100;
			},
			delay: function(t,i,c) {
				return (c-i-1)*35;
			},
			translateX: function(t,i) {
				return [0,-200-i*150];
			},
			rotate: function(t,i) {
				return i === 2 ? [0,-40] : 0;
			},
			opacity: {
				value: 0,
				duration: 450
			},
			update: function(anim) {
				if( anim.progress > 20 && isContentShown ) {
					isContentShown = false;
					// Close tab.
					tnav.close();
				}
			},
			complete: function() {
				// Hide content item.
				contentItem.style.opacity = 0;
				contentItem.classList.remove('tabscontent__item--current');
			}
		});

		// Hide back ctrl
		anime.remove(backCtrl);
		anime({
			targets: backCtrl,
			duration: 800,
			easing: 'easeOutExpo',
			scale: [1,0],
			opacity: {
				value: 0,
				duration: 200,
				easing: 'linear'
			}
		})
		anime({
			targets: batRet,
			duration: 800,
			easing: 'easeOutExpo',
			scale: [1,0],
			opacity: {
				value: 0,
				duration: 200,
				easing: 'linear'
			}
		});

	}

	menuCtrl.addEventListener('click', toggleTabs);

	function toggleTabs() {
		var state = tnav.toggleVisibility();
		if( state === 0 ) {
			menuCtrl.classList.remove('btn--menu-active');
		}
		else if( state === 1 ) {
			menuCtrl.classList.add('btn--menu-active');
		}
	}

})();


var tabss=$(".tabsnav__item");
//var url=location.hash;
var str = location.pathname;

var t=str.split('/');
var url=t[2];


$(document).ready(function() {

	for(var i=0; i<tabss.length; i++ ) {

			//if (url=='#'+tabss[i].getAttribute('data-url')) {
			if (url==tabss[i].getAttribute('data-url')) {
			tabss[i].click();



			}

		}
});
function rel(){

	location.reload(true);
}


var str = location.pathname;
var t=str.split('/');

var tabss=$(".tabsnav__item");
//var url=location.hash;


 $(window).bind("popstate", function() {
var str = location.pathname;

var t=str.split('/');
var url=t[2];

	for(var i=0; i<tabss.length; i++ ) {

			//if (url=='#'+tabss[i].getAttribute('data-url')) {
			if (url==tabss[i].getAttribute('data-url')) {
			tabss[i].click();
			}
	if (url=='') {
			$('.btn--back').click();


			}


	parseData(location.pathname).then(function(response) {
		document.title =response.title;
	}, function(error) {
	   console.log('Failed!:');
	});

		}
});

/*
function rels(url){ var url;


	if ($(".tabsnav__item").length) {

	var tabss=$(".tabsnav__item");
	for(var i=0; i<tabss.length; i++ ) {
		//console.log(url+'     '+tabss[i].getAttribute('data-url')   );
			if (url==tabss[i].getAttribute('data-url')) {
			tabss[i].click();
			}


		}
}
}
*/




function parseData(par){
    return new Promise(function(resolve, reject) {
        $.ajax({
            url: '/modules/ajax-data.php',
            type: 'POST',
            dataType: 'json',
            data: {data: par , lang:document.documentElement.lang},
            error: reject,
            success: resolve
        });
    });
}
