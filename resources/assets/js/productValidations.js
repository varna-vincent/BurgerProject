window.addToCart = function(product) {

	console.log(product);
	axios.post('/orders', product)
	  .then(function (response) {
	    console.log(response);
	  })
	  .catch(function (error) {
	    console.log(error);
	  });
}