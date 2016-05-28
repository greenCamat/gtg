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
        // console.log("Successful!");
        // console.log("json Data: ", self.responseData.data);
        // console.log("lookUpData: ", self.lookUpData);
        // console.log("selected: ", self.selectedCategory.toUpperCase());
        // console.log($$(self.itemCategoryId));
        
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
            
            $(this).attr('disabled', false);
            if(self.lookUpData[itemId].remaining_stock)
            {
                $("#btn-minus-item_"+itemId).attr('disabled', false);
                self.computeTotalAmount(self.lookUpData[itemId], 'ADD');
            }
            else if(self.lookUpData[itemId].remaining_stock === 0)
            {
                alert('No more available stocks.');
                $(this).attr('disabled', true);
            }
            else
            {
                alert("No Item Selected.");
            }
        });
        
        $$(self.minusButtonId).removeEvents();
        $$(self.minusButtonId).addEvent('click', function()
        {
            var itemId = (this).get('id').split('_')[1],
                totalAmt = $(self.showTotalAmtId).text();
  
            $(this).attr('disabled', false);
            if(totalAmt === '0.00')
            {
                $(this).attr('disabled', true);
                $("#btn-add-item_"+itemId).attr('disabled', false);
            }
            else {
               self.computeTotalAmount(self.lookUpData[itemId], 'MINUS');
            }
        });
    };
    
    self.computeTotalAmount = function(itemData, btnAction)
    {
        var subTotal = $(self.showTotalAmtId).text().toFloat(),
            itemPrice = itemData.item_price.toFloat(),
            isAvailableStock = self.lookUpData[itemData.item_id].remaining_stock,
            totalItems = (subTotal).toFixed(2);
            
            if(btnAction === 'ADD')
            {
                if(isAvailableStock)
                {
                    totalItems = (itemPrice + subTotal).toFixed(2);
                    self.lookUpData[itemData.item_id].remaining_stock--;
                }
                else if(isAvailableStock === 0)
                {
                    alert('No more stocks.');
                }
            }
            else if(btnAction === 'MINUS')
            {
                if(subTotal !== 0)
                {
                    totalItems = (subTotal - itemPrice).toFixed(2);
                    if(parseInt(totalItems) <= 0 )
                    {
                        totalItems = '0.00';
                        $(self.minusButtonId).attr('disabled', true);
                    }    
                    self.lookUpData[itemData.item_id].remaining_stock++;
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
    responseItemData : [],
    
    init : function()
    {
        var itemSelected = location.pathname.split('/')[2].toLowerCase();
        
        ShopItems.initAjaxCall(itemSelected,[ShopItems.initRenderItemList]);
        console.log("Init ShopItems");
    },
    
    initAjaxCall : function(itemSelected, callbacks)
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
                            ShopItems.responseItemData = response;
                            Array.each(response.data, function(val)
                            {
                                lookUpData[val.item_id] = val;
                            });
                            
                            //render the itemColumn
                            Object.each(response.itemColumn, function(val)  
                            {
                                var itemColumnElem = new Element('<option />',
                                {
                                   'value' : val,
                                   'text' : val,
                                   'selected' : (itemSelected ? true : false)
                                });
                                $$('#item-category').grab(itemColumnElem);
                            });
                            
                            //render the content item list
                            if(callbacks)
                            {
                                Array.each(callbacks, function(callback)
                                {
                                    callback(response);
                                });
                            }
                            
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
    },
    
    initRenderItemList : function(response)
    {   
        Array.each(response.data, function(val, idx)
        {
            //TODO : update the img src once the images are ready
            var contentHTML = '<div class="veges-item-img">'
                            +   '<img src="../images/veges/Onion-PNG.png" alt="Onion" style="height:130;width:200px;"></img>'
                            + '</div>'
                            + '<div class="item-name">'
                            +   '<label class="item-title">' + val.item_name + '</label>'
                            +   '<label class="item-price">&#8369; ' + val.item_price + '</label>'
                            + '</div>'
                            + '<div class="veges-add-btn">'
                            +   '<button id="btn-add-item_' + val.item_id + '" type="button"><img src="../images/btn/add.png" alt="Add item"></img></button>'
                            +   '<button id="btn-minus-item_' + val.item_id + '" type="button" disabled><img src="../images/btn/minus.png" alt="Remove item"></img></button>'
                            + '</div>';
            contentListElem = new Element('<div />',
            {
                'id' : 'veges-item_' + val.item_id,
                'class' : 'veges-item',
                'html' : contentHTML
            });
            $$('#veges-item_' +val.item_id).dispose();
            $$('#item-data-list').grab(contentListElem);
        });
    }
};

window.addEvent('domready', function(){    
  // do stuff when the document has loaded but images have not
  ShopItems.init();
});