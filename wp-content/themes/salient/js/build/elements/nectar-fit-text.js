!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e="undefined"!=typeof globalThis?globalThis:e||self).fitty=t()}(this,function(){"use strict";return function(e){if(e){var t=function(e){return[].slice.call(e)},n=3,i=[],r=null,o="requestAnimationFrame"in e?function(){e.cancelAnimationFrame(r),r=e.requestAnimationFrame(function(){return a(i.filter(function(e){return e.dirty&&e.active}))})}:function(){},u=function(e){return function(){i.forEach(function(t){return t.dirty=e}),o()}},a=function(e){e.filter(function(e){return!e.styleComputed}).forEach(function(e){e.styleComputed=s(e)}),e.filter(d).forEach(p);var t=e.filter(f);t.forEach(c),t.forEach(function(e){p(e),l(e)}),t.forEach(y)},l=function(e){return e.dirty=0},c=function(e){e.availableWidth=e.element.parentNode.clientWidth,e.currentWidth=e.element.scrollWidth,e.previousFontSize=e.currentFontSize,e.currentFontSize=Math.min(Math.max(e.minSize,e.availableWidth/e.currentWidth*e.previousFontSize),e.maxSize),e.whiteSpace=e.multiLine&&e.currentFontSize===e.minSize?"normal":"nowrap"},f=function(e){return 2!==e.dirty||2===e.dirty&&e.element.parentNode.clientWidth!==e.availableWidth},s=function(t){var n=e.getComputedStyle(t.element,null);return t.currentFontSize=parseFloat(n.getPropertyValue("font-size")),t.display=n.getPropertyValue("display"),t.whiteSpace=n.getPropertyValue("white-space"),!0},d=function(e){var t=!1;return!e.preStyleTestCompleted&&(/inline-/.test(e.display)||(t=!0,e.display="inline-block"),"nowrap"!==e.whiteSpace&&(t=!0,e.whiteSpace="nowrap"),e.preStyleTestCompleted=!0,t)},p=function(e){e.element.style.whiteSpace=e.whiteSpace,e.element.style.display=e.display,e.element.style.fontSize=e.currentFontSize+"px"},y=function(e){e.element.dispatchEvent(new CustomEvent("fit",{detail:{oldValue:e.previousFontSize,newValue:e.currentFontSize,scaleFactor:e.currentFontSize/e.previousFontSize}}))},m=function(e,t){return function(){e.dirty=t,e.active&&o()}},v=function(e){return function(){i=i.filter(function(t){return t.element!==e.element}),e.observeMutations&&e.observer.disconnect(),e.element.style.whiteSpace=e.originalStyle.whiteSpace,e.element.style.display=e.originalStyle.display,e.element.style.fontSize=e.originalStyle.fontSize}},h=function(e){return function(){e.active||(e.active=!0,o())}},S=function(e){return function(){return e.active=!1}},w=function(e){e.observeMutations&&(e.observer=new MutationObserver(m(e,1)),e.observer.observe(e.element,e.observeMutations))},b={minSize:16,maxSize:512,multiLine:!0,observeMutations:"MutationObserver"in e&&{subtree:!0,childList:!0,characterData:!0}},z=null,F=function(){e.clearTimeout(z),z=e.setTimeout(u(2),W.observeWindowDelay)},g=["resize","orientationchange"];return Object.defineProperty(W,"observeWindow",{set:function(t){var n="".concat(t?"add":"remove","EventListener");g.forEach(function(t){e[n](t,F)})}}),W.observeWindow=!0,W.observeWindowDelay=100,W.fitAll=u(n),W}function E(e,t){var r=Object.assign({},b,t),u=e.map(function(e){var t=Object.assign({},r,{element:e,active:!0});return function(e){e.originalStyle={whiteSpace:e.element.style.whiteSpace,display:e.element.style.display,fontSize:e.element.style.fontSize},w(e),e.newbie=!0,e.dirty=!0,i.push(e)}(t),{element:e,fit:m(t,n),unfreeze:h(t),freeze:S(t),unsubscribe:v(t)}});return o(),u}function W(e){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};return"string"==typeof e?E(t(document.querySelectorAll(e)),n):E([e],n)[0]}}("undefined"==typeof window?null:window)}),jQuery(document).ready(function(e){let t=[];function n(){t=[],(t=fitty('[data-has-fit-text="true"]',{observeWindow:!1})).forEach(e=>{e.element.addEventListener("fit",function(t){e.element.classList.add("fitty-fit")})})}n(),e(window).on("vc_reload",()=>{n()}),e(window).on("resize",function(){t.forEach(e=>{e.fit()})})});