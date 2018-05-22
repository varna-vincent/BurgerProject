window.addToCart = function(product) {

	axios.post('/orders', product)
	  .then(function (response) {
	
	  })
	  .catch(function (error) {
	    console.log(error);
	  });
}