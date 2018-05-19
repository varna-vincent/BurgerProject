


function computeTotal(index) {
   
    var quantity = document.getElementById("quantity_"+index).value;
	var price_value=document.getElementById("price_"+index).innerHTML;
	var total_price_value =document.getElementById('total_price').innerHTML;
	var quantity_pattern = /^[0-9]+$/;
	if(quantity == ""){
		$('#errdiv_quantity').addClass('alert alert-danger');
		document.getElementById('errdiv_quantity').innerHTML = 'Quantity cannot be blank';
	}else if(!quantity.match(quantity_pattern)){
		$('#errdiv_quantity').addClass('alert alert-danger');
		document.getElementById('errdiv_quantity').innerHTML = 'Quantity should be a number';
	}else{
		$('#errdiv_quantity').removeClass('alert alert-danger');
		document.getElementById('errdiv_quantity').innerHTML = "";
	}


	var price = price_value.substr(2);
	var total_price = total_price_value.substr(1);

	var each_product_total = parseFloat(quantity) * parseFloat(price);
	
	var total = parseFloat(total_price) + parseFloat(each_product_total);
	document.getElementById('each_product_total_price_'+index).innerHTML = "$"+each_product_total.toFixed(2);
	document.getElementById('total_price').innerHTML = "$"+total.toFixed(2);

}

function deleteProduct(id){
	if(confirm("Are you sure you want to delete?")){
		alert(id);
		axios.delete('/orderproducts/' + id)
		  .then(function (response) {
		    console.log(response);
		  })
		  .catch(function (error) {
		    console.log(error);
		  });
	}

}
function updateBasket(products) {
	console.log(products);
	products = products.map((product, index) => {
		product.quantity = document.getElementById('quantity_' + index).value;
		return product; 
	});
	console.log(products);
}