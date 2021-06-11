!function(e){var t={};function o(r){if(t[r])return t[r].exports;var n=t[r]={i:r,l:!1,exports:{}};return e[r].call(n.exports,n,n.exports,o),n.l=!0,n.exports}o.m=e,o.c=t,o.d=function(e,t,r){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(e,t){if(1&t&&(e=o(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(o.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)o.d(r,n,function(t){return e[t]}.bind(null,n));return r},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="",o(o.s=7)}([function(e,t){e.exports=function(e,t){(null==t||t>e.length)&&(t=e.length);for(var o=0,r=new Array(t);o<t;o++)r[o]=e[o];return r},e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t,o){var r=o(2),n=o(3),c=o(4),i=o(5);e.exports=function(e){return r(e)||n(e)||c(e)||i()},e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t,o){var r=o(0);e.exports=function(e){if(Array.isArray(e))return r(e)},e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t){e.exports=function(e){if("undefined"!=typeof Symbol&&null!=e[Symbol.iterator]||null!=e["@@iterator"])return Array.from(e)},e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t,o){var r=o(0);e.exports=function(e,t){if(e){if("string"==typeof e)return r(e,t);var o=Object.prototype.toString.call(e).slice(8,-1);return"Object"===o&&e.constructor&&(o=e.constructor.name),"Map"===o||"Set"===o?Array.from(e):"Arguments"===o||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(o)?r(e,t):void 0}},e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t){e.exports=function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")},e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t){var o=document.querySelector(".menu");if(o&&window.matchMedia("(max-width: 767px)").matches){var r=o.querySelector(".menu__button"),n=o.querySelector(".menu__list"),c=o.querySelectorAll(".menu__link"),i=function(){var e="true"===r.getAttribute("aria-expanded");r.setAttribute("aria-expanded",!e),r.classList.toggle("menu__button--open"),n.classList.toggle("menu__list--open"),document.documentElement.classList.toggle("stop-scrolling"),document.body.classList.toggle("stop-scrolling")};r.addEventListener("click",(function(e){return i()})),c.forEach((function(e){return e.addEventListener("click",(function(){return i()}))}))}var l=document.querySelector(".promo");l&&l.querySelectorAll(".promo__layer").forEach((function(e,t){var o=l.getBoundingClientRect(),r=e.getBoundingClientRect(),n=r.top-o.top;window.addEventListener("scroll",(function(){var o=window.scrollY;if(r.height<o/2)e.style.display="none";else switch(e.style.display="block",t){case 0:e.style.top="".concat(n-.2*o,"px");break;case 1:e.style.top="".concat(n-1.9*o,"px");break;case 2:e.style.top="".concat(n-.1*o,"px");break;case 3:e.style.top="".concat(n-.2*o,"px");break;case 4:case 5:e.style.top="".concat(n-.05*o,"px")}}))}));var a=document.querySelector(".reviews");if(a){var s=a.querySelector(".reviews__items"),u=a.querySelector(".reviews__button--prev"),d=a.querySelector(".reviews__button--next"),f=tns({container:s,items:1,nav:!1,controls:!1,preventScrollOnTouch:"force"});u.addEventListener("click",(function(){return f.goTo("prev")})),d.addEventListener("click",(function(){return f.goTo("next")}))}var p=document.querySelector(".portfolio");if(p){var y=p.querySelectorAll(".portfolio__slider"),v=p.querySelectorAll(".portfolio__nav-item");y.forEach((function(e){var t=e.querySelector(".portfolio__slider-items"),o=e.querySelector(".portfolio__slider-button--prev"),r=e.querySelector(".portfolio__slider-button--next"),n=e.querySelector(".portfolio__slider-close"),c=e.querySelector(".portfolio__slider-count-current"),i=e.querySelector(".portfolio__slider-count-total"),l=tns({container:t,mode:"gallery",items:1,nav:!1,controlsContainer:!1,controls:!1,preventScrollOnTouch:"force"});o.addEventListener("click",(function(){return l.goTo("prev")})),r.addEventListener("click",(function(){return l.goTo("next")})),i.textContent=l.getInfo().slideCount,l.events.on("transitionEnd",(function(e,t){c.textContent=l.getInfo().displayIndex})),n.addEventListener("click",(function(){return e.style.display="none"})),e.addEventListener("click",(function(t){t.target.closest(".portfolio__slider-wrapper")||(e.style.display="none")}))})),v.forEach((function(e,t){e.addEventListener("click",(function(e){y.forEach((function(e){return e.style.display="none"})),y[t]&&(y[t].style.display="block")}))}))}var m=document.querySelectorAll(".package__item"),_=document.querySelectorAll(".package__nav-item");if(m.length&&_.length&&window.matchMedia("(min-width: 992px)").matches){m.forEach((function(e,t){0!==t&&(e.style.display="none")})),_.forEach((function(e,t){e.addEventListener("click",(function(o){o.preventDefault(),m.forEach((function(e){return e.style.display="none"})),_.forEach((function(e){return e.classList.remove("package__nav-item--active")})),e.classList.add("package__nav-item--active"),m[t].style.display="block"}))}))}var g=document.querySelector(".share-button"),h=document.querySelector(".share-dialog"),x=document.querySelector(".share-dialog__close"),b=document.querySelector(".share-dialog__copy"),S=document.querySelector(".share-dialog__url");g&&h&&(g.addEventListener("click",(function(){navigator.share?navigator.share({title:"Oxygen",text:"Поделиться ссылкой",url:"https://developer.mozilla.org"}).then((function(){console.log("Thanks for sharing!")})).catch(console.error):h.classList.add("share-dialog--open")})),b.addEventListener("click",(function(e){var t=S.textContent;navigator.clipboard.writeText(t).catch((function(e){console.log("Что-то пошло не так",e)}))})),x.addEventListener("click",(function(){return h.classList.remove("share-dialog--open")})))},function(e,t,o){"use strict";o.r(t);var r,n,c,i,l,a,s=o(1),u=o.n(s);n="boolean"!=typeof(r={once:!1,rootMargin:"",threshold:.1}).once||r.once,c=r.rootMargin||"0px",i=r.threshold>=.1&&r.threshold<=1?r.threshold:1,l=new IntersectionObserver((function(e){e.forEach((function(e){var t=e.target,o=t.dataset.san||"",r=parseInt(t.dataset.sanDelay)/1e3;e.isIntersecting&&!t.classList.contains(o)?(o&&(t.classList.add("san-animated",o),t.classList.remove("san-hide")),Number.isFinite(r)&&r>.099&&t.setAttribute("style","animation-delay: ".concat(r,"s")),n&&l.unobserve(t)):(t.classList.add("san-hide"),!n&&t.classList.remove(o))}))}),{root:null,rootMargin:c,threshold:i}),(a=u()(document.querySelectorAll("[data-san]"))).length&&a.forEach((function(e){return l.observe(e)}));o(6);var d=.01*window.innerHeight;document.documentElement.style.setProperty("--vh","".concat(d,"px"))}]);


/**
 * Handler of forms
 */

 class PostForm {
  constructor(option) {
    this.form = option.form;
    this.url = option.url;
    this.method = option.method;
    this.form.forEach((item) => {
      item.addEventListener("submit", (e) => {
        this.sendRequest(e);
      });
    });
  }

  createRequest(form) {
    const data = new FormData(form);
    fetch(form.action, {
      method: "POST",
      body: data,
    })
      .then((resp) => {
        if (resp.status === 200) {
          this.resetFormElement(form);
        }
      })
      .catch((error) => console.error(error));
  }

  sendRequest(e) {
    e.preventDefault();
    this.createRequest(e.currentTarget);
  }

  resetFormElement(form) {
    form.reset();
  }
}

document.addEventListener("DOMContentLoaded", () => {
  const form = document.querySelectorAll(".form--post");
  if (form) {
    (() =>
      new PostForm({
        form: form,
        url: "",
        method: "POST",
      }))();
  }
});
