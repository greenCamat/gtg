var Vegies = function ()
{
    var self = this;
    
    self._request = null;
    self.itemCategoryId = '#item-category';
    self.addButtonId = 'button[id^=btn-add-item_]';
    self.minusButtonId = 'button[id^=btn-minus-item_]';
    self.showTotalAmtId = '#total-amt';
    self.items = {};
    self.lookUpData = {};
    
    self.init = function()
    {
        if (!self._request || !self._request.isRunning())
        {
            self._request = new Request.JSON(
            {
                'url' : './vegetables/getVegetablesItem',
                'method' : 'GET',
                'data' : '',
                'onSuccess' : function(data)
                {
                   console.log("API data:  ", data);
                   if(data.length)
                   {
                       //mock data
                       data = [{
                            'category' : 'VEGETABLES',
                            'description': 'baguio petchay',
                            'id' : 2,
                            'name' : 'PETCHAY',
                            'price' : '20.75',
                            'remaining_stocks' : 10
                       }, {
                           'category' : 'VEGETABLES',
                           'description' : 'manila tondo',
                           'id' : 3,
                           'name' : 'Beans',
                           'price' : '10.35',
                           'remaining_stocks' : 5
                       }];
                       console.log("mock data: ", data);
                       Array.each(data, function(val)
                       {
                           self.lookUpData[val.id] = val;
                       });
                       
                       self.addEvents();
                   }
                },
                'onError' : function()
                {
                    console.log('ERROR?');
                    self._request.stop;
                }
            }).send();
        }
    };
    
    self.addEvents = function()
    {
        $$(self.itemCategoryId).removeEvents();
        $$(self.itemCategoryId).addEvent('change', function()
        {
            console.log("the value: ", this.get("value"));
            console.log("the selected and value: ", this.getSelected().get("value"));
        });
        
        $$(self.addButtonId).removeEvents();
        $$(self.addButtonId).addEvent('click', function()
        {
            var itemId = (this).get('id').split('_')[1];
            
            $(self.addButtonId).attr('disabled', false);
            if(self.lookUpData[itemId])
            {
                self.computeTotalAmount(self.lookUpData[itemId], 'ADD');
            }
            else
            {
                alert("No Item Selected.");
            }
        });
        
        $$(self.minusButtonId).removeEvents();
        $$(self.minusButtonId).addEvent('click', function()
        {
            var itemId = itemId = (this).get('id').split('_')[1];
            
            $(self.minusButtonId).attr('disabled', false);
            if(self.lookUpData[itemId])
                self.computeTotalAmount(self.lookUpData[itemId], 'MINUS');
        });
    };
    
    self.computeTotalAmount = function(itemData, btnAction)
    {
        var subTotal = $(self.showTotalAmtId).text().toFloat(),
            itemPrice = itemData.price.toFloat(),
            isAvailableStock = 0,
            totalItems = (subTotal).toFixed(2);
            //console.log("Available Stocks: ", self.lookUpData[itemData.id].remaining_stocks);
            
            if(btnAction === 'ADD')
            {
                $(self.minusButtonId).attr('disabled', false);
                isAvailableStock = self.lookUpData[itemData.id].remaining_stocks--;
                console.log("available: ", isAvailableStock);
                if(isAvailableStock)
                {
                    totalItems = (itemPrice + subTotal).toFixed(2);
                }
                else if(isAvailableStock == 0)
                {
                    alert('No more stocks.');
                    $(self.addButtonId).attr('disabled', true);
                }
            }
            else if(btnAction === 'MINUS')
            {
                $(self.addButtonId).attr('disabled', false);
                if(subTotal != 0)
                {
                    totalItems = (subTotal - itemPrice).toFixed(2);
                    self.lookUpData[itemData.id].remaining_stocks++;
                    if(totalItems == 0)
                        $(self.minusButtonId).attr('disabled', true);
                }
            }
            
            $(self.showTotalAmtId).html(totalItems);        
    };
};

var Vegetables = 
{
    vegiesObj : null,
    
    init : function()
    {
        var self = this;
        
        self.vegiesObj = new Vegies();
        self.vegiesObj.init();
    }
};

window.addEvent('domready', function(){    
  // do stuff when the document has loaded but images have not
  Vegetables.init();
});