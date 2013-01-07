
/**
 * WebINK's Fout-B-Gone is a single object that offers various methods for using and
 * managing custom Web Fonts added to webpages through the @font-face CSS rule.
 *
 * Note:  This is a work in progress and other useful font-related methods may be added in the future
 *
 * Current methods:
 *
 * 		fbg.hideFOUT -- automatically gets rid of undesirable flash-of-unstyled-text
 * 								that occurs with some browsers, such as FF 3.6 and IE9
 *
 * 		fbg.isFontFaceSupported -- returns true or false indicating if browser supports @font-face
 * 								This is the code written by Diego Perini as reported by Paul Irish on
 * 								2010.11.02 at http://paulirish.com/2009/font-face-feature-detection
 * 								We've included this check here in the form of a method for convenience;
 * 								it is not necessary for other fbg methods.
 *
 *
 * @author		Jay Vilhena <jvilhena@extensis.com>
 * @version		0.1

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

 */
/***************************************************************************************/


var fbg=new function(){var a=this;var b=20;var c=3e3;var d=100;this.rfu=null;var e=null;var f=null;this.hideFOUT=null;this.isFontFaceSupported=null;this.onFontFaceFailed=null;e=function(){};f=function(a){if(window.addEventListener)addEventListener("load",a,false);else attachEvent("onload",a)};this.hideFOUT=function(e,g){if(navigator.appName!="Microsoft Internet Explorer"&&!/Firefox\/3/.test(navigator.userAgent))return;g=g||d;var h=[];var i=[];var j=[];var k=true;for(var l=0;l<document.styleSheets.length;l++){var m=document.styleSheets[l];if(!m.cssRules){k=false;var n=m.cssText;n.replace(/@font-face\s*\{([^\}]+)\}/ig,function(a,b){var c=a.replace(/([\s\S]*)(font-family:\s*['"]?)([-_0-9a-zA-Z]+)([\s\S]*)/,"$3");h.push(c);return a})}var o=m.cssRules||m.rules;for(var p=0;p<o.length;p++){var q=o[p];if(k&&q instanceof CSSFontFaceRule){var r=q.cssText.replace(/([\s\S]*)(font-family:\s*['"]?)([-_0-9a-zA-Z]+)([\s\S]*)/,"$3");h.push(r)}else i.push(q)}}for(var l=0;l<h.length;l++){for(var p=0;p<i.length;p++){var s=k?i[p].cssText:i[p].style.cssText;if(s.indexOf(h[l])!=-1){j.push(i[p].selectorText)}}}var t=document.body||document.documentElement;var u=document.createElement("span");u.setAttribute("style","font:99px _,serif;position:absolute;visibility:hidden");u.style.visibility="hidden";u.innerHTML="-------";u.id="fonttest";t.appendChild(u);var v=document.createElement("style");document.getElementsByTagName("head")[0].appendChild(v);var w="";for(var l=0;l<j.length;l++)w+=j[l]+(l<j.length-1?", ":" ");w+="{visibility:hidden}";if(v.styleSheet)v.styleSheet.cssText=w;else v.textContent=w;u.style.font='99px "'+h[h.length-1]+'",_,serif';var x=u.offsetWidth;var y="";var z=b;var A=function(){var b=setInterval(function(){if(!x&&document.body){t.removeChild(u);document.body.appendChild(u);x=u.offsetWidth}var d=u.offsetWidth;y+=d+"   ";c-=z;if(x!=d||c<=0){clearInterval(b);setTimeout(function(){v.parentNode.removeChild(v)},g);if(c<=0&&a.onFontFaceFailed)a.onFontFaceFailed();u.parentNode.removeChild(u)}},z)};if(e=="asap")A();else if(e=="onload")f(A);else A();if(window.TESTCAPTURE){f(function(){document.getElementById("hf_monitor_div").innerHTML=y;setTimeout(function(){document.getElementById("hf_monitor_div").innerHTML+="<br>Final: "+u.offsetWidth},1e3)})}};this.isFontFaceSupported=function(){var a,b=document,c=b.head||b.getElementsByTagName("head")[0]||docElement,d=b.createElement("style"),e=b.implementation||{hasFeature:function(){return false}};d.type="text/css";c.insertBefore(d,c.firstChild);a=d.sheet||d.styleSheet;var f=e.hasFeature("CSS2","")?function(b){if(!(a&&b))return false;var c=false;try{a.insertRule(b,0);c=!/unknown/i.test(a.cssRules[0].cssText);a.deleteRule(a.cssRules.length-1)}catch(d){}return c}:function(b){if(!(a&&b))return false;a.cssText=b;return a.cssText.length!==0&&!/unknown/i.test(a.cssText)&&a.cssText.replace(/\r+|\n+/g,"").indexOf(b.split(" ")[0])===0};return f('@font-face { font-family: "font"; src: "font.ttf"; }')};e()}
