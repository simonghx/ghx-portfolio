/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(3);


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');
__webpack_require__(2);

//window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });

/***/ }),
/* 2 */
/***/ (function(module, exports) {

var inputName = document.querySelector('#form-name');
var inputMail = document.querySelector('#form-email');
var inputSubject = document.querySelector('#form-subject');
var btnForm = document.querySelector('.btn-contact-submit');
var errorMessage = document.querySelector('.errorMessage');
var successMessage = document.querySelector('.successMessage');

var regexMail = /^[a-z0-9_\.\-]+@[a-z0-9]+\.[a-z]{2,10}(\.[a-z]{2,10})?/;
var regexName = /^(([A-ZÜ-ü]+[\-\']?)*([a-zA-ZÜ-ü]+)?\s)+([a-zA-ZÜ-ü]+[\-\']?)*([a-zA-ZÜ-ü]+)?$/;

console.log(inputName.value);

function sendMail(event) {
    var count = 0;

    if (regexName.test(inputName.value)) {
        inputName.classList.remove('border-danger');
        count++;
    } else {
        inputName.classList.add('border-danger');
    }

    if (regexMail.test(inputMail.value)) {
        inputName.classList.remove('border-danger');
        count++;
    } else {
        inputMail.classList.add('border-danger');
    }

    if (inputSubject.value != "") {
        inputSubject.classList.remove('border-danger');
        count++;
    } else {
        inputSubject.classList.add('border-danger');
    }

    if (count != 3) {
        event.preventDefault();
        errorMessage.classList.remove('d-none');
    } else {
        successMessage.classList.remove('d-none');
        errorMessage.classList.add('d-none');
    }
}

btnForm.addEventListener('click', sendMail);

/***/ }),
/* 3 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);