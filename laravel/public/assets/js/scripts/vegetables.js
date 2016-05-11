var Vegies = function ()
{
    var self = this;
    
    self._request = null;
    
    self.init = function()
    {
        // if (!self._request || !self._request.isRunning())
        // {
            // self._request = new Request.JSON(
            // {
                // 'url' : './vegetables-item',
                // 'method' : 'GET',
                // 'data' : '',
                // 'onSuccess' : function(data)
                // {
                   // console.log("success! ", data);
                // },
                // 'onError' : function()
                // {
                    // self._request.stop;
                // }
            // }).send();
        // }
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