/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/block/forms sync recursive ^\\.\\/[^/]+\\/[^/.]+\\.(js%7Ccss%7Cscss%7Csass%7Cless)$":
/*!************************************************************************************!*\
  !*** ./src/block/forms/ sync ^\.\/[^/]+\/[^/.]+\.(js%7Ccss%7Cscss%7Csass%7Cless)$ ***!
  \************************************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var map = {
	"./forms-button/forms-button.scss": "./src/block/forms/forms-button/forms-button.scss",
	"./forms-checkbox/forms-checkbox.scss": "./src/block/forms/forms-checkbox/forms-checkbox.scss",
	"./forms-form/forms-form.js": "./src/block/forms/forms-form/forms-form.js",
	"./forms-form/forms-form.scss": "./src/block/forms/forms-form/forms-form.scss",
	"./forms-input/forms-input.scss": "./src/block/forms/forms-input/forms-input.scss",
	"./forms-select/forms-select.scss": "./src/block/forms/forms-select/forms-select.scss",
	"./forms-textarea/forms-textarea.scss": "./src/block/forms/forms-textarea/forms-textarea.scss"
};


function webpackContext(req) {
	var id = webpackContextResolve(req);
	return __webpack_require__(id);
}
function webpackContextResolve(req) {
	if(!__webpack_require__.o(map, req)) {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	}
	return map[req];
}
webpackContext.keys = function webpackContextKeys() {
	return Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = "./src/block/forms sync recursive ^\\.\\/[^/]+\\/[^/.]+\\.(js%7Ccss%7Cscss%7Csass%7Cless)$";

/***/ }),

/***/ "./src/block/forms/forms-button/forms-button.scss":
/*!********************************************************!*\
  !*** ./src/block/forms/forms-button/forms-button.scss ***!
  \********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
// extracted by mini-css-extract-plugin
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({});

/***/ }),

/***/ "./src/block/forms/forms-checkbox/forms-checkbox.scss":
/*!************************************************************!*\
  !*** ./src/block/forms/forms-checkbox/forms-checkbox.scss ***!
  \************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
// extracted by mini-css-extract-plugin
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({});

/***/ }),

/***/ "./src/block/forms/forms-form/forms-form.js":
/*!**************************************************!*\
  !*** ./src/block/forms/forms-form/forms-form.js ***!
  \**************************************************/
/***/ (() => {

document.querySelector('form').addEventListener('submit', function (form) {
  var requireds = document.getElementsByClassName('required');
  var messages = document.getElementsByClassName('b-forms-form__messages')[0];
  messages.innerHTML = '';
  for (const required of requireds) {
    switch (required.tagName.toLowerCase()) {
      case 'input':
        switch (required.type) {
          case 'text':
            if (required.value.trim().length <= 1) {
              messages.innerHTML += '<span class="b-forms-form__message">Поле "Ваше Имя" не заполнено!</span>';
            }
            break;
          case 'email':
            if (required.value.trim().length <= 1) {
              messages.innerHTML += '<span class="b-forms-form__message">Поле "Ваш E-mail" не заполнено!</span>';
            }
            break;
          case 'checkbox':
            if (!required.checked) {
              messages.innerHTML += '<span class="b-forms-form__message">Согласие с условиями обязательно!</span>';
            }
            break;
        }
        break;
      case 'textarea':
        if (required.value.trim().length <= 1) {
          messages.innerHTML += '<span class="b-forms-form__message">Поле "Сообщение" не заполнено!</span>';
        }
        break;
    }
  }
  if (!(messages.innerHTML.length === 0)) {
    form.preventDefault();
  } else {
    messages.innerHTML = '<span class="b-forms-form__message--true">Спасибо, Ваше сообщение принято!</span>';
  }
});

/***/ }),

/***/ "./src/block/forms/forms-form/forms-form.scss":
/*!****************************************************!*\
  !*** ./src/block/forms/forms-form/forms-form.scss ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
// extracted by mini-css-extract-plugin
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({});

/***/ }),

/***/ "./src/block/forms/forms-input/forms-input.scss":
/*!******************************************************!*\
  !*** ./src/block/forms/forms-input/forms-input.scss ***!
  \******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
// extracted by mini-css-extract-plugin
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({});

/***/ }),

/***/ "./src/block/forms/forms-select/forms-select.scss":
/*!********************************************************!*\
  !*** ./src/block/forms/forms-select/forms-select.scss ***!
  \********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
// extracted by mini-css-extract-plugin
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({});

/***/ }),

/***/ "./src/block/forms/forms-textarea/forms-textarea.scss":
/*!************************************************************!*\
  !*** ./src/block/forms/forms-textarea/forms-textarea.scss ***!
  \************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
// extracted by mini-css-extract-plugin
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({});

/***/ }),

/***/ "./src/block/forms/forms.js":
/*!**********************************!*\
  !*** ./src/block/forms/forms.js ***!
  \**********************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

function requireAll(r) {
  r.keys().map(r);
}
requireAll(__webpack_require__("./src/block/forms sync recursive ^\\.\\/[^/]+\\/[^/.]+\\.(js%7Ccss%7Cscss%7Csass%7Cless)$"));

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be in strict mode.
(() => {
"use strict";
/*!****************************!*\
  !*** ./src/entry/forms.js ***!
  \****************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var block_forms__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! block/forms */ "./src/block/forms/forms.js");
/* harmony import */ var block_forms__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(block_forms__WEBPACK_IMPORTED_MODULE_0__);

})();

/******/ })()
;
//# sourceMappingURL=forms.1758096043314.js.map