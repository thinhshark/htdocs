!function n(o,i,s){function l(e,t){if(!i[e]){if(!o[e]){var r="function"==typeof require&&require;if(!t&&r)return r(e,!0);if(u)return u(e,!0);throw(t=new Error("Cannot find module '"+e+"'")).code="MODULE_NOT_FOUND",t}r=i[e]={exports:{}},o[e][0].call(r.exports,function(t){return l(o[e][1][t]||t)},r,r.exports,n,o,i,s)}return i[e].exports}for(var u="function"==typeof require&&require,t=0;t<s.length;t++)l(s[t]);return l}({1:[function(t,e,r){"use strict";var n=window.wp.i18n.__,o=window.wp.blocks.registerBlockType,i=window.wp.components.SelectControl,s=window.html_forms;o("html-forms/form",{title:n("HTML Forms: Form"),description:n("Block showing a HTML Forms form"),category:"widgets",attributes:{slug:{type:"string"}},supports:{html:!1},icon:React.createElement("svg",{version:"1.0",xmlns:"http://www.w3.org/2000/svg",width:"256.000000pt",height:"256.000000pt",viewBox:"0 0 256.000000 256.000000",preserveAspectRatio:"xMidYMid meet"},React.createElement("g",{transform:"translate(0.000000,256.000000) scale(0.100000,-0.100000)",fill:"#000000",stroke:"none"},React.createElement("path",{d:"M0 1280 l0 -1280 1280 0 1280 0 0 1280 0 1280 -1280 0 -1280 0 0 -1280z m2031 593 c8 -8 9 -34 4 -78 -6 -56 -9 -65 -23 -60 -43 16 -98 15 -132 -2 -50 -26 -72 -72 -78 -159 l-5 -74 92 0 91 0 0 -70 0 -70 -90 0 -90 0 0 -345 0 -345 -90 0 -90 0 0 345 0 345 -55 0 -55 0 0 70 0 70 55 0 55 0 0 38 c0 63 20 153 45 202 54 105 141 152 273 147 45 -2 87 -8 93 -14z m-1291 -288 l0 -235 230 0 230 0 0 235 0 235 90 0 90 0 0 -575 0 -575 -90 0 -90 0 0 260 0 260 -230 0 -230 0 0 -260 0 -260 -90 0 -90 0 0 575 0 575 90 0 90 0 0 -235z"}))),edit:function(e){var t=s.map(function(t){return{label:t.title,value:t.slug}});return!e.attributes.slug&&0<t.length&&e.setAttributes({slug:t[0].value}),React.createElement("div",{style:{backgroundColor:"#f8f9f9",padding:"14px"}},React.createElement(i,{label:n("HTML Forms form"),value:e.attributes.slug,options:t,onChange:function(t){e.setAttributes({slug:t})}}))},save:function(t){return null}})},{}]},{},[1]);