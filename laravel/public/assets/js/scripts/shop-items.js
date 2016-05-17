var ShopItems =
{
    init : function()
    {
        var self = this;
        
        //get all the link items
        self.selectedItem = "a[id^=item_]";
        
        //make a UTIL or CONFIG for this part
        self.categoryItems = {
            'VEGIES'    : 'getVegetablesItem',
            'FRUITS'    : 'getFruitsitem',
            'MEATFISH'  : 'getMeatfishitem',
            'CONDIMENTS' : 'getCondimentsitem',
            'DAIRY'         : 'getDairyitem',
            'CHIPSNACKS'    : 'getChipnsnacksitem',
            'INSTANTFOOD'   : 'getInstantfooditem',
            'RICE'  : 'getRiceitem',
            'SUPPLIES' : 'getSuppliesitem',
            'BEVERAGES' : 'getBeveragesitem',
            'TOILETRIES' : 'getToiletriesitem',
            'OTHERSERVICES' : 'getOtherservicesitem'
        };
        
        $$(self.selectedItem).removeEvents();
        $$(self.selectedItem).addEvent('click', function()
        {
            var itemSelected = (this).get('id').split('_')[1].toUpperCase(),
                categoryObjKeys = Object.keys(self.categoryItems);
            
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
                        'url' : './vegetables/' + self.categoryItems[itemSelected],
                        'method' : 'GET',
                        'data' : '',
                        'onSuccess' : function(data)
                        {
                           //console.log("API data:  ", data);
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
                               // Array.each(data, function(val)
                               // {
                                   // self.lookUpData[val.id] = val;
                               // });
                               
                               // if(callbacks)
                                // {
                                    // Array.each(callbacks, function(callback)
                                    // {
                                        // callback();
                                    // });
                                // }
                           }
                        },
                        'onError' : function()
                        {
                            console.log('ERROR?');
                            self._request.stop;
                        }
                    }).send();
                }
            }
        });
        
        console.log("Init ShopItems");
    }
};

window.addEvent('domready', function(){    
  // do stuff when the document has loaded but images have not
  ShopItems.init();
});