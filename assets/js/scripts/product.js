function Qty (optionText, optionValue) {
	this.optionText = optionText;
	this.optionValue = optionValue;
}

function Stands (data) {
	this.optionText = data.StandName + ' ($' + data.StandPrice + ')';
	this.optionValue = data.StandId;
	this.optionDataPrice = data.StandPrice;
}


function CartModel () {
	var self = this;

	self.unitPrice = ko.observable();
	self.stands = ko.observableArray([]);
	
	$.getJSON("api/index.php/price/18", function (data) {		
		self.unitPrice(data.ProdPricePrice);
	});			

	$.getJSON("api/index.php/stands/all", function (data) {		

		$.each(data.TblStandss, function(key, val) {
			self.stands.push(new Stands(data.TblStandss[key]));				
		});
	});				
	
	self.selectedStand = ko.observable();				
	
	self.qty = ko.observableArray([
			new Qty ("1", "1"),
			new Qty ("2", "2"),
			new Qty ("3", "3"),
		]);

	self.selectedQty = ko.observable("1");		


	self.totalPrice = ko.pureComputed( function () {		
		var totalPrice = 0; 
		var productPrice = self.unitPrice();		

		if (self.selectedQty() > 1) {
			computedPrice = self.selectedQty() * productPrice;
		} else computedPrice = productPrice;

		console.log(self.selectedStand);

		return parseFloat(computedPrice).toFixed(2);
	}, self);

};

ko.applyBindings(new CartModel());
