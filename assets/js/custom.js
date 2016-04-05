$(document).ready(function () {

	//product modal
	$("a[data-toggle=modal]").click(function() 
	{   
	    var id = $(this).attr('id');
	    console.log(id);

	    $.ajax({
	        cache: false,
	        type: 'GET',
	        url: 'api/index.php/product/'+id,
	        dataType: "json",
	        success: function(data) 
	        {
	           	$('.product-title').text(data.ProdName);
	           	$('.product-code').text(data.ProdCode);
	           	$('.product-starting-price').text(data.TblProdPricing.ProdPricePrice);
	           	$('.product-description').html(data.ProdWriteup).text();
	           	$('img.prod-solo-1').attr('src', 'http://modelbuffs.com/mpm/uploads/'+data.TblProdPhotos.ProdSolo1);
	           	$('img.prod-solo-1').attr('data-large', 'http://modelbuffs.com/mpm/uploads/'+data.TblProdPhotos.ProdSolo1);

	           	$('img.prod-solo-2').attr('src', 'http://modelbuffs.com/mpm/uploads/'+data.TblProdPhotos.ProdSolo2);
	           	$('img.prod-solo-2').attr('data-large', 'http://modelbuffs.com/mpm/uploads/'+data.TblProdPhotos.ProdSolo1);

	           	$('img.prod-solo-3').attr('src', 'http://modelbuffs.com/mpm/uploads/'+data.TblProdPhotos.ProdSolo3);
	           	$('img.prod-solo-3').attr('data-large', 'http://modelbuffs.com/mpm/uploads/'+data.TblProdPhotos.ProdSolo1);

	           	$('img.prod-solo-4').attr('src', 'http://modelbuffs.com/mpm/uploads/'+data.TblProdPhotos.ProdSolo4);
	           	$('img.prod-solo-4').attr('data-large', 'http://modelbuffs.com/mpm/uploads/'+data.TblProdPhotos.ProdSolo1);
	        }
	    });
	});	

	$('.back').click(function(){
		parent.history.back();
		return false;
	});


}); // end Ready