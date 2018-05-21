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



function validateFormAddProduct() {
	event.preventDefault();
	var product_name = document.getElementById('name').value;
	var product_type = document.getElementById('type').value;
	var product_price = document.getElementById('price').value;
	var product_description = document.getElementById('description').value;
	var product_image = document.getElementById('image').value;

	if (product_name == "" || product_type == "" || product_description == "" || product_image == "" || product_price == "") {
		//echo 'Please fill in all the details';
	} else if (!product_name.match('/^[a-zA-Z\s]*$/')) {
		//$('#errdiv').addClass('alert alert-danger');
		//document.getElementById('errdiv').innerHTML = 'Enter valid Name';
		//echo 'Enter a valid name';
	} else if (!product_type.match('/^[a-zA-Z\s]*$/')) {
		//$('#errdiv').addClass('alert alert-danger');
		//document.getElementById('errdiv').innerHTML = 'Enter valid phone number';
		//echo 'Enter a valid type';
	} else if (!product_price.match('^[1-9]\d*(\.\d+)?$')) {
		//$('#errdiv').addClass('alert alert-danger');
		//document.getElementById('errdiv').innerHTML = 'Enter valid email address';
		//echo 'Enter a valid price';
	} else if (!product_description.match('/^[a-z0-9]+$/i')) {
		//$('#errdiv').addClass('alert alert-danger');
		//document.getElementById('errdiv').innerHTML = 'Password should contain uppercase, lowerscase,number and special characters and should be 8 characters long';
		//echo 'Enter a valid description';
	} else {
		//$('#errdiv').removeClass('alert alert-danger');
		//document.getElementById('errdiv').innerHTML = "";
		document.getElementById("addProductForm").submit();
	}
}
window.addToCart = function (product) {

	console.log(product);
	axios.post('/orders', product).then(function (response) {
		console.log(response);
	}).catch(function (error) {
		console.log(error);
	});
};

/***/ })

/******/ });