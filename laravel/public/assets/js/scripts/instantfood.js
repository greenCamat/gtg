var Instantfood = function ()
{
    var self = this;
    
    self._request = null;
    self.itemCategoryId = '#item-category';
    self.addButtonId = '#btn-add-item';
    self.minusButtonId = '#btn-minus-item';
    self.showTotalAmtId = '#total-amt';
    
    self.init = function()
    {
        if (!self._request || !self._request.isRunning())
        {
            self._request = new Request.JSON(
            {
                'url' : './instant-food/getInstantfooditem',
                'method' : 'GET',
                'data' : '',
                'onSuccess' : function(data)
                {
                   console.log("success! ", data);
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
        
    };
};

var Instant = 
{
    instantfoodsObj : null,
    
    init : function()
    {
        var self = this;
        
        self.instantfoodsObj = new Instantfood();
        self.instantfoodsObj.init();
    }
};

window.addEvent('domready', function(){    
  // do stuff when the document has loaded but images have not
  Instant.init();
});