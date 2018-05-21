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
/******/ 	return __webpack_require__(__webpack_require__.s = 41);
/******/ })
/************************************************************************/
/******/ ({

/***/ 41:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(42);


/***/ }),

/***/ 42:
/***/ (function(module, exports) {

window.computeTotal = function (index) {

	var quantity = document.getElementById("quantity_" + index).value;
	quantity = quantity.trim();
	var price_value = document.getElementById("price_" + index).innerHTML;
	price_value = price_value.trim();
	var total_price_value = document.getElementById('total_price').innerHTML;
	total_price_value.trim();

	var quantity_pattern = /^[0-9]+$/;

	if (quantity == "") {
		$('#errdiv_quantity').addClass('alert alert-danger');
		document.getElementById('errdiv_quantity').innerHTML = 'Quantity cannot be blank';
	} else if (!quantity.match(quantity_pattern)) {
		$('#errdiv_quantity').addClass('alert alert-danger');
		document.getElementById('errdiv_quantity').innerHTML = 'Quantity should be a number';
	} else {
		$('#errdiv_quantity').removeClass('alert alert-danger');
		document.getElementById('errdiv_quantity').innerHTML = "";
	}

	var price = price_value.substr(1);

	var each_product_total = parseFloat(quantity) * parseFloat(price);
	document.getElementById('each_product_total_price_' + index).innerHTML = "$" + each_product_total.toFixed(2);

	var table_length = document.getElementsByTagName("tr");
	var final_total = parseFloat(0);
	for (var i = 0; i < table_length.length - 2; i++) {
		var each_row_total = document.getElementById('each_product_total_price_' + i).innerHTML;
		var each_row_total_final = each_row_total.substr(1);
		final_total = final_total + parseFloat(each_row_total_final);
	}

	var total_price = total_price_value.substr(1);
	document.getElementById('total_price').innerHTML = "$" + final_total.toFixed(2);
};

window.deleteProduct = function (orderproduct, index) {
	event.preventDefault();
	if (confirm("Are you sure you want to delete?")) {

		axios.delete('/orderproducts/' + orderproduct).then(function (response) {
			document.getElementById("row_" + index).remove();
		}).catch(function (error) {
			console.log(error);
		});
	}
};
window.updateBasket = function (products) {
	console.log(products);
	products = products.map(function (product, index) {
		product.quantity = document.getElementById('quantity_' + index).value;
		return product;
	});
	console.log(products);
};

/***/ })

/******/ });