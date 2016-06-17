var SelectedItem = function(response, lookUpData, selectedCategory)
{
    var self = this;
    
    self.responseData = response; //consist of the rawData and the itemColumn(ENUM category)
    self.lookUpData = lookUpData;
    self.selectedCategory = selectedCategory;
    self.itemCategoryId = '#item-category';
    self.addButtonId = 'button[id^=btn-add-item_]';
    self.minusButtonId = 'button[id^=btn-minus-item_]';
    self.showTotalAmtId = '#total-amt';
    self.reviewPurchasedId = '#review-purchased';
    self.itemToPurchase = {
        "quantity" : 0
    };
    
    self.init = function()
    {
        /**
         * REMOVE the modalDialog class to hide the modal
         *  */
        //$$("#reviewList").addClass("modalDialog");
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
            
            ShopItems.initAjaxCall(categorySelected, [ShopItems.initRenderItemList]);
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
            $("#btn-add-item_"+itemId).attr('disabled', false);
            if(totalAmt === '0.00')
            {
                $(this).attr('disabled', true);
            }
            else {
               self.computeTotalAmount(self.lookUpData[itemId], 'MINUS');
            }
        });
        
        $$(self.reviewPurchasedId).removeEvents();
        $$(self.reviewPurchasedId).addEvent('click', function()
        {
            console.log("click");
            //$$("#reviewList").addClass("modalDialog");
        });
    };
    
    self.computeTotalAmount = function(itemData, btnAction)
    {
        var subTotal = $(self.showTotalAmtId).text().toFloat(),
            itemPrice = itemData.item_price.toFloat(),
            isAvailableStock = self.lookUpData[itemData.item_id].remaining_stock,
            totalItems = (subTotal).toFixed(2),
            itemCount = 0;
            
            if(self.lookUpData[itemData.item_id].quantity === undefined)
                Object.append(self.lookUpData[itemData.item_id], self.itemToPurchase);
            
            if(btnAction === 'ADD')
            {
                if(isAvailableStock)
                {
                    totalItems = (itemPrice + subTotal).toFixed(2);
                    self.lookUpData[itemData.item_id].remaining_stock--;
                    self.lookUpData[itemData.item_id].quantity++;
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
                    
                    if(self.lookUpData[itemData.item_id].quantity > 0)
                        self.lookUpData[itemData.item_id].quantity--;
                    
                    self.lookUpData[itemData.item_id].remaining_stock++;
                }
            }
            var itemToRender = [{
                "item_id" : self.lookUpData[itemData.item_id].item_id,
                "item_name" : self.lookUpData[itemData.item_id].item_name,
                "item_quantity" : self.lookUpData[itemData.item_id].quantity,
                "item_price" : self.lookUpData[itemData.item_id].item_price
            }];
            $(self.showTotalAmtId).html(totalItems);
            
            $("#totalAmtPurchase").html(totalItems);
            self.reviewRenderPurchased(itemToRender);
    };
    
    self.reviewRenderPurchased = function(data)
    {
        Array.each(data, function(val){
            var contentHTML = '<td width="50" class="label-cell"><label>' + val.item_quantity + '</label></td>'
                            + '<td width="350"><label>' + val.item_name + '</label></td>'
                            + '<td width="50"><label>' + val.item_price + '</label></td>';
            
            
            contentListElem = new Element('<tr />',
            {
                'id' : 'purchased_' + val.item_id,
                'class' : 'purchased-item',
                'html' : contentHTML
            });
            $$('#purchased_' +val.item_id).dispose();
            $$('#renderPurchased').grab(contentListElem);
        });
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
                    'url' : URL + '/shop/selectedCategory/'+itemSelected,//+'/' + ShopItems.categoryItemObj[itemSelected],
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
            var contentHTML = '<div class="panel panel-default text-center">'
                            +'<div class="panel-heading">' 
                            +'<span class="fa-stack fa-5x">'
                            +   '<img src="../img/items/Onion-PNG.png" alt="Onion" style="height:130;width:155px;"></img>'
                            + '</span>'
                            + '</div>'
                            + '<div class="panel-body">'
                            +   '<h4 style="text-align:left;">'+ val.item_name+ '&nbsp;&nbsp; / &nbsp;&nbsp;' + '<small>'+ val.item_price + '</small>' + '</h4>'
                            + '<p>'+ val.item_desc +'</p>'
                            +   '<button style="margin-left:-69px;" id="btn-add-item_' + val.item_id + '" type="button"><img src="../img/btn/add.png" alt="Add item"></img></button>'
                            +   '<button id="btn-minus-item_' + val.item_id + '" type="button" disabled><img src="../img/btn/minus.png" alt="Remove item"></img></button>'
                            +   '&nbsp;&nbsp;&nbsp;&nbsp; <label>Qty: 130</label>'
                            + '</div>'
                            + '</div>'
                           
                           
            contentListElem = new Element('<div />',
            {
                'id' : 'col-md-3 col-sm-6_' + val.item_id,
                'class' : 'col-md-3 col-sm-6',
                'html' : contentHTML
            });
            $$('#panel panel-default text-center_' +val.item_id).dispose();
            $$('#item-data-list').grab(contentListElem);
        });
    }
};

window.addEvent('domready', function(){    
  // do stuff when the document has loaded but images have not
  ShopItems.init();
});