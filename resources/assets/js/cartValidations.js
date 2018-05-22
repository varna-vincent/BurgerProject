

window.computeTotal = function(index) {

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
	document.getElementById('each_product_total_price_'+index).innerHTML = "$"+each_product_total.toFixed(2);

	var table_length = document.getElementsByTagName("tr");
	var final_total =parseFloat(0);
	for(var i=0;i<(table_length.length-2);i++){
		var each_row_total = document.getElementById('each_product_total_price_'+i).innerHTML;		
		var each_row_total_final = each_row_total.substr(1);
		final_total = final_total+parseFloat(each_row_total_final);
	}

	var total_price = total_price_value.substr(1);
	document.getElementById('total_price').innerHTML = "$"+final_total.toFixed(2);

}

window.deleteProduct = function(orderproduct,index) {
	event.preventDefault();
	if (confirm("Are you sure you want to delete?")) {
		
		axios.delete('/orderproducts/' + orderproduct).then(function (response) {
			document.getElementById("row_" + index).remove();
			var table_length = document.getElementsByTagName("tr");
			var total_price_value = document.getElementById('total_price').innerHTML;

			total_price_value.trim();
			var final_total =parseFloat(0);
			for(var i=0;i<(table_length.length-2);i++){
				var each_row_total = document.getElementById('each_product_total_price_'+i).innerHTML;		
				var each_row_total_final = each_row_total.substr(1);
				final_total = final_total+parseFloat(each_row_total_final);
			}

			var total_price = total_price_value.substr(1);
			document.getElementById('total_price').innerHTML = "$"+final_total.toFixed(2);
			
		}).catch(function (error) {
			console.log(error);
		});
	}

}

window.validateQuantity = function(){

	var table = document.getElementsByTagName("tr");
	var table_len = table.length;

	var quantity_pattern = /^[0-9]+$/;

	for(var i=0; i < table_len-2;i++){
		var quantity_td = document.getElementById('quantity_'+i).value;    
		quantity_td = quantity_td.trim();

		if(quantity_td ==""){
			$('#errdiv_quantity').addClass('alert alert-danger');
			document.getElementById('errdiv_quantity').innerHTML = 'Quantity cannot be blank';
			return false;
		}else if(quantity_td  < 0){
			$('#errdiv_quantity').addClass('alert alert-danger');
			document.getElementById('errdiv_quantity').innerHTML = 'Quantity should be positive number';
			return false;
		}else if(!quantity_td.match(quantity_pattern)){
			$('#errdiv_quantity').addClass('alert alert-danger');
			document.getElementById('errdiv_quantity').innerHTML = 'Quantity should be positive number';
			return false;
		}else{
			$('#errdiv_quantity').removeClass('alert alert-danger');
			document.getElementById('errdiv_quantity').innerHTML = "";
		}
	}
	return true;
}


window.updateBasket = function(products) {
	console.log(products);
	products = products.map(function (product, index) {
		product.quantity = document.getElementById('quantity_' + index).value;
		axios.patch('//' + orderproduct).then(function (response) {
		});
		return product;
	});
	console.log(products);
}