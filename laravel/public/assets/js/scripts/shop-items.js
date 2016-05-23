var SelectedItem = function(response, lookUpData, selectedCategory)
{
    var self = this;
    
    self.responseData = response; //consist of the rawData and the itemColumn(ENUM category)
    self.lookUpData = lookUpData;
    self.itemCategoryId = '#item-category';
    self.addButtonId = 'button[id^=btn-add-item_]';
    self.minusButtonId = 'button[id^=btn-minus-item_]';
    self.showTotalAmtId = '#total-amt';
    self.selectedCategory = selectedCategory;
    
    self.init = function()
    {
        console.log("Successful!");
        console.log("json Data: ", self.responseData);
        console.log("lookUpData: ", self.lookUpData[2]);
        console.log("selected: ", self.selectedCategory.toUpperCase());
        console.log($$(self.itemCategoryId));
        
        $(self.itemCategoryId).val(self.selectedCategory.toUpperCase());
        self.addEvents();
    };
    
    self.addEvents = function()
    {
        $$(self.itemCategoryId).removeEvents();
        $$(self.itemCategoryId).addEvent('change', function()
        {
            /** this.getSelected().get("value") -> display as ARRAY
            ** this.get("value") -> display as STRING
            ** ENUM DATA: 'CANNED GOODS/INSTANT FOOD','CONDIMENTS','DAIRY','FRUITS','MEAT/FISH','RICE','VEGETABLES','CHIPS','BEVERAGES','TOILETRIES','SUPPLIES','OTHERS'
            ** make the ENUM DATA 
            **/
            var categorySelected = this.get("value").toLowerCase().replace(/ /g,'');
            
            ShopItems.initAjaxCall(categorySelected);
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
            isAvailableStock = self.lookUpData[itemData.id].remaining_stocks,
            totalItems = (subTotal).toFixed(2);
            
            if(btnAction === 'ADD')
            {
                $(self.minusButtonId).attr('disabled', false);
                if(isAvailableStock)
                {
                    totalItems = (itemPrice + subTotal).toFixed(2);
                    self.lookUpData[itemData.id].remaining_stocks--;
                }
                else if(isAvailableStock === 0)
                {
                    alert('No more stocks.');
                    $(self.addButtonId).attr('disabled', true);
                }
            }
            else if(btnAction === 'MINUS')
            {
                $(self.addButtonId).attr('disabled', false);
                if(subTotal !== 0)
                {
                    totalItems = (subTotal - itemPrice).toFixed(2);
                    self.lookUpData[itemData.id].remaining_stocks++;
                    if(totalItems === 0)
                        $(self.minusButtonId).attr('disabled', true);
                }
            }
            
            $(self.showTotalAmtId).html(totalItems);        
    };
    
};

var ShopItems =
{
    selectedItemObj : null,
    
    //make a UTIL or CONFIG for this part
    categoryItemObj : {
        'vegetables'    : 'getVegetablesItem',
        'fruits'    : 'getFruitsitem',
        'meatfish'  : 'getMeatfishitem',
        'condiments' : 'getCondimentsitem',
        'dairy'         : 'getDairyitem',
        'chipsnacks'    : 'getChipnsnacksitem',
        'instantfood'   : 'getInstantfooditem',
        'rice'  : 'getRiceitem',
        'supplies' : 'getSuppliesitem',
        'beverages' : 'getBeveragesitem',
        'toiletries' : 'getToiletriesitem',
        'otherservices' : 'getOtherservicesitem'
    },
    
    init : function()
    {
        var itemSelected = location.pathname.split('/')[2].toLowerCase();
        
        ShopItems.initAjaxCall(itemSelected);
        console.log("Init ShopItems");
    },
    
    initAjaxCall : function(itemSelected)
    {
        var self = this;
        
        var lookUpData = [],
            URL = location.origin,
            categoryObjKeys = Object.keys(ShopItems.categoryItemObj);
        
        if(Object.contains(categoryObjKeys, itemSelected))
        {
            if (!self._request || !self._request.isRunning())
            {
                /**
                ** NOTE: use a middleware to return the JSON DATA
                ** then the CONTROLLER will still be the one to display the VIEW.
                **/
                self._request = new Request.JSON(
                {
                    'url' : URL + '/'+itemSelected+'/' + ShopItems.categoryItemObj[itemSelected],
                    'method' : 'GET',
                    'data' : '',
                    'onSuccess' : function(response)
                    {
                        if(Object.getLength(response))
                        {
                            Array.each(response.data, function(val)
                            {
                                lookUpData[val.item_id] = val;
                            });
                            self.initSelectedItem(response, lookUpData, itemSelected);
                        }
                    },
                    'onError' : function()
                    {
                        console.log('Something went wrong...');
                        self._request.stop;
                    }
                }).send();
            }
        }
    },
    
    initSelectedItem : function(response, dataLookUp, selectedCategory)
    {
        var self = this;
        
        self.selectedItemObj = new SelectedItem(response, dataLookUp, selectedCategory);
        self.selectedItemObj.init();
    }
};

window.addEvent('domready', function(){    
  // do stuff when the document has loaded but images have not
  ShopItems.init();
});