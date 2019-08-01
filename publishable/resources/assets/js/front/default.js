/* jquery */
window.$ = window.jQuery = require('jquery');

/* bootstrap */
require('popper.js');
require('bootstrap');

// for supporting Object.keys not compatible in IE
require('@babel/polyfill');

/* sprintf (POedit) */
require('sprintf-js');

// Service Worker
// require('../sw/core/register-sw');

/* GSAP FOR ANIMATION */
import {TweenMax, Power2, TimelineLite, TimelineMax, CSSRulePlugin, Circ} from 'gsap/all';

window.TweenMax = TweenMax;
window.Power2 = Power2;
window.TimelineLite = TimelineLite;
window.TimelineMax = TimelineMax;
window.CSSRulePlugin = CSSRulePlugin;
window.Circ = Circ;

// import LazyLoad from 'vanilla-lazyload';

//sweetAlert
import Swal from 'sweetalert2'

// Support promise
import 'promise-polyfill/src/polyfill';


/* DATATABLES */
var DataTable = require('datatables.net');
$ = jQuery = DataTable.$;



// window.lazyLoadInstance = new LazyLoad({
//     elements_selector: "img"
//     // ... more custom settings?
// });

/* SCROLL REVEAL */
// window.ScrollReveal = require('scrollreveal').default;

//CLEAVE
// require('cleave.js/dist/cleave');

//LEAFLET
// require('leaflet');

/* OWL CAROUSEL FOR SLIDER */
// require('owl.carousel');


/* LAVALAMP FOR SWITCH */
// require('lavalamp');

/* magnify */
// require('magnify');







require('../utils/_helpers');

/* header */
