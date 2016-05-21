var SelectedItem = function(response, lookUpData)
{
    var self = this;
    
    self.responseData = response;
    self.lookUpData = lookUpData;
    
    self.init = function()
    {
        console.log("Successful!");
        console.log("json Data: ", self.responseData);
        console.log("lookUpData: ", self.lookUpData);
    };
}

var ShopItems =
{
    selectedItemObj : null,
    
    init : function()
    {
        var self = this;
        
        //get all the link items
        self.selectedItem = "a[id^=item_]";
        
        //make a UTIL or CONFIG for this part
        self.categoryItems = {
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
        };
        var categoryObjKeys = Object.keys(self.categoryItems),
            URL = location.origin,
            itemSelected = location.pathname.split('/')[2].toLowerCase(),
            lookUpData = [];
        
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
                    'url' : URL + '/'+itemSelected+'/' + self.categoryItems[itemSelected],
                    'method' : 'GET',
                    'data' : '',
                    'onSuccess' : function(data)
                    {
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
                                lookUpData[val.id] = val;
                            });
                            self.initSelectedItem(data, lookUpData);
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
        console.log("Init ShopItems");
    },
    
    initSelectedItem : function(response, dataLookUp)
    {
        var self = this;
        
        self.selectedItemObj = new SelectedItem(response, dataLookUp);
        self.selectedItemObj.init();
    }
};

window.addEvent('domready', function(){    
  // do stuff when the document has loaded but images have not
  ShopItems.init();
});