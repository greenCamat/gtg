var Vegies = function ()
{
    var self = this;
    
    self._request = null;
    self.itemCategoryId = '#item-category';
    self.addButtonId = '#btn-add-item';
    self.minusButtonId = '#btn-minus-item';
    self.showTotalAmtId = '#total-amt';
    
    self.init = function()
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
            var subTotal = $(self.showTotalAmtId).text().toInt();
            
            console.log(subTotal);
        });
        
        if (!self._request || !self._request.isRunning())
        {
            self._request = new Request.JSON(
            {
                'url' : './vegetables/create',
                'method' : 'GET',
                'data' : '',
                'onSuccess' : function(data)
                {
                   console.log("success! ", data);
                },
                'onError' : function()
                {
                    self._request.stop;
                }
            }).send();
        }
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