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
/******/ 	return __webpack_require__(__webpack_require__.s = 39);
/******/ })
/************************************************************************/
/******/ ({

/***/ 39:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(40);


/***/ }),

/***/ 40:
/***/ (function(module, exports) {



window.validateFormAddProduct = function () {
	event.preventDefault();
	var product_name = document.getElementById('name').value;
	var product_type = document.getElementById('type').value;
	var product_price = document.getElementById('price').value;
	var product_description = document.getElementById('description').value;
	var product_image = document.getElementById('image').value;

	var product_name_pattern = /^[a-zA-Z\s]*$/;
	var product_type_pattern = /^[a-zA-Z\s]*$/;
	var product_price_pattern = /^[1-9]\d*(\.\d+)?$/;
	var product_description_pattern = /^[a-zA-Z,\s]*$/;

	if (product_name == "" || product_type == "" || product_description == "" || product_image == "" || product_price == "") {
		$('#error_div_add_product').addClass('alert alert-danger');
		document.getElementById('error_div_add_product').innerHTML = 'Enter all the fields';
	} else if (!product_name.match(product_name_pattern)) {
		$('#error_div_add_product').addClass('alert alert-danger');
		document.getElementById('error_div_add_product').innerHTML = 'Product name should contain only alphabets';
	} else if (!product_type.match(product_type_pattern)) {
		$('#error_div_add_product').addClass('alert alert-danger');
		document.getElementById('error_div_add_product').innerHTML = 'Product Type should contain only alphabets';
	} else if (!product_price.match(product_price_pattern)) {
		$('#error_div_add_product').addClass('alert alert-danger');
		document.getElementById('error_div_add_product').innerHTML = 'Enter correct price';
	} else if (!product_description.match(product_description_pattern)) {
		$('#error_div_add_product').addClass('alert alert-danger');
		document.getElementById('error_div_add_product').innerHTML = 'Description should contain only alphabets';
	} else {
		$('#error_div_add_product').removeClass('alert alert-danger');
		document.getElementById('error_div_add_product').innerHTML = " ";
		document.getElementById("addProductForm").submit();
	}
};
window.addToCart = function (product) {

	axios.post('/orders', product).then(function (response) {}).catch(function (error) {
		console.log(error);
	});
};

/***/ })

/******/ });