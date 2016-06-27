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
    self.reviewPurchasedId = '#myModal';
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
            var categorySelected = this.get("value").toLowerCase()
                                    .replace(/ /g, '')
                                    .replace(/\\/g, '')
                                    .replace('/', '');
            
            ShopItems.initAjaxCall(categorySelected, [ShopItems.initRenderItemList]);
        });
        
        $$(self.addButtonId).removeEvents();
        $$(self.addButtonId).addEvent('click', function()
        {
            var itemId = (this).get('id').split('_')[1],
                itemQuantity = $("#item-quantity_" + itemId).text().toInt();
            
            itemQuantity++;
            if(itemQuantity > 999) {
                itemQuantity = 999;
            } else {
                $("#item-quantity_"+itemId).html(' '+itemQuantity);
                self.computeTotalAmount(self.lookUpData[itemId], 'ADD');
            }
        });
        
        $$(self.minusButtonId).removeEvents();
        $$(self.minusButtonId).addEvent('click', function()
        {
            var itemId = (this).get('id').split('_')[1],
                itemQuantity = $("#item-quantity_" + itemId).text().toInt();
                
            if(itemQuantity <= 0) {
                itemQuantity = 0;
                $$('#renderPurchased').set("html", "");
            } else {
                itemQuantity--;
                self.computeTotalAmount(self.lookUpData[itemId], 'MINUS');
            }
            
            $("#item-quantity_"+itemId).html(' '+itemQuantity);      
        });
        
        $$(self.reviewPurchasedId).removeEvents();
        $$(self.reviewPurchasedId).addEvent('click', function()
        {
            var totalAmt = $(self.showTotalAmtId).text().toInt();
            
            if(totalAmt === 0)
                $$('#renderPurchased').set("html", "");
        });
    };
    
    self.computeTotalAmount = function(itemData, btnAction)
    {
        var subTotal = $(self.showTotalAmtId).text().toFloat(),
            itemPrice = itemData.item_price.toFloat(),
            isAvailableStock = self.lookUpData[itemData.item_id].remaining_stock,
            totalItems = (subTotal).toFixed(2);
            
            if(self.lookUpData[itemData.item_id].quantity === undefined)
                Object.append(self.lookUpData[itemData.item_id], self.itemToPurchase);
            
            if(btnAction === 'ADD')
            {
                totalItems = (itemPrice + subTotal).toFixed(2);
                //self.lookUpData[itemData.item_id].remaining_stock--;
                self.lookUpData[itemData.item_id].quantity++;
            }
            else if(btnAction === 'MINUS')
            {
                if(subTotal !== 0)
                {
                    totalItems = (subTotal - itemPrice).toFixed(2);
                    if(parseInt(totalItems) <= 0 )
                    {
                        totalItems = '0.00';
                        //$(self.minusButtonId).attr('disabled', true);
                    }
                    
                    if(self.lookUpData[itemData.item_id].quantity > 0)
                        self.lookUpData[itemData.item_id].quantity--;
                    
                    //self.lookUpData[itemData.item_id].remaining_stock++;
                }
            }
            
            /**DISPLAY the TOTAL AMOUNT */
            $(self.showTotalAmtId).html(totalItems);
            
            /**Set the total amount on the MODAL part
             * before the modal display then render the MODAL
             */
            $("#totalAmtPurchase").html(totalItems);
            
            if(totalItems) {
                var itemToRender = [{
                    "item_id" : self.lookUpData[itemData.item_id].item_id,
                    "item_name" : self.lookUpData[itemData.item_id].item_name,
                    "item_quantity" : self.lookUpData[itemData.item_id].quantity,
                    "item_price" : self.lookUpData[itemData.item_id].item_price
                }];
                self.reviewRenderPurchased(itemToRender);
            }
    };
    
    self.reviewRenderPurchased = function(data)
    {
        if(Object.getLength(data)) {
            Array.each(data, function(val) {
                if(val.item_quantity > 0) {
                    var contentHTML = '<td style="width: 130px;">'
                                    +   '<div class="input-group" style="width: 125px;">'
                                    +       '<span class="input-group-btn">'
                                    +           '<button type="button" id="btn-minus-item_' + val.item_id
                                    +               '" class="btn btn-danger btn-number">'
                                    +               '<span class="glyphicon glyphicon-minus"></span>'
                                    +           '</button>'
                                    +       '</span>'
                                    +       '<input disabled type="text" '
                                    +           'class="form-control input-number" '
                                    +           'value="'+val.item_quantity+'">'
                                    +       '<span class="input-group-btn">'
                                    +           '<button type="button" id="btn-add-item_' + val.item_id
                                    +               '" class="btn btn-success btn-number">'
                                    +               '<span class="glyphicon glyphicon-plus"></span>'
                                    +           '</button>'
                                    +       '</span>'
                                    +   '</div>'
                                    + '</td>'
                                    + '<td>'+val.item_name+'</td>'
                                    + '<td>'+val.item_price+'</td>';
                    
                    contentListElem = new Element('<tr />',
                    {
                        'id' : 'purchased_' + val.item_id,
                        'class' : 'purchased-item',
                        'html' : contentHTML
                    });
                    $$('#purchased_' +val.item_id).dispose();
                    $$('#renderPurchased').grab(contentListElem);
            });
        }
        self.addEvents();
    };
};

var ShopItems =
{
    selectedItemObj : null,
    responseItemData : [],
    
    init : function()
    {
        var itemSelected = location.pathname.split('/')[2].toLowerCase();
        
        ShopItems.initAjaxCall(itemSelected,[ShopItems.initRenderItemList]);
    },
    
    initAjaxCall : function(itemSelected, callbacks)
    {
        var self = this;
        
        var lookUpData = [],
            URL = location.origin;
        
        if(itemSelected === 'cannedgoodsinstantfood')
            itemSelected = 'instantfood';
        
        /**Clear the drop down select category */
        $$('#item-category').set("html", "");
        
        
        /**NOTE:
         * What if the customer click the ctrl+F5 or clear cached
         * or refresh? all the details or items were back to Zero.
         * We need to store it on the localStorage or cahed it.
         */
        
        if (!self._request || !self._request.isRunning())
        {
            self._request = new Request.JSON(
            {
                'url' : URL + '/shop/selectedCategory/'+itemSelected,
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
                        
                        if(itemSelected === 'cannedgoodsinstantfood' 
                            || itemSelected === 'instantfood') {
                            itemSelected = 'CANNED GOODS/INSTANT FOOD';
                        }
                        else if(itemSelected === 'meatfish') {
                            itemSelected = 'MEAT/FISH';
                        }
                        
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
    },
    
    initSelectedItem : function(response, dataLookUp, selectedCategory)
    {
        var self = this;
        
        self.selectedItemObj = new SelectedItem(response, dataLookUp, selectedCategory);
        self.selectedItemObj.init();
    },
    
     initRenderItemList : function(response)
    {
        $$('#item-data-list').set("html", "");
        Array.each(response.data, function(val, idx)
        {
            //TODO : update the img src once the images are ready
            var contentHTML = '<div class="panel panel-default text-center">'
                            +   '<div class="panel-heading">' 
                            +       '<span class="fa-stack fa-5x">'
                            +           '<img src="../img/items/Onion-PNG.png" alt="Onion" '
                            +               'style="height:130;width:155px;"></img>'
                            +       '</span>'
                            +   '</div>'
                            +   '<div class="panel-body">'
                            +       '<h4 style="text-align:left;">'+ val.item_name
                            +           '&nbsp;&nbsp; / &nbsp;&nbsp; &#x20B1;' 
                            +           '<small> '+ val.item_price + '</small>' + '</h4>'
                            +       '<p>'+ val.item_desc +'</p>'
                            +       '<button style="margin-left:-69px;" id="btn-add-item_' + val.item_id + '" type="button">'
                            +           '<img src="../img/btn/add.png" alt="Add item"></img></button>'
                            +       '<button id="btn-minus-item_' + val.item_id + '" type="button">'
                            +           '<img src="../img/btn/minus.png" alt="Remove item"></img></button>'
                            +           '&nbsp;&nbsp;&nbsp;&nbsp; '
                            +           '<label>Quantity:</label><span id="item-quantity_'+ val.item_id +'"> 0</span>'
                            +   '</div>'
                            + '</div>';
                           
                           
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