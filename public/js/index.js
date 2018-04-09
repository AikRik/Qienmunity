
backbone();

function backbone(){
    
    var Dier = Backbone.Model.extend({
        initialize:function(){
            console.log("Nieuw dier geamaakt")
        }
    });
    
    console.log("in backbone");
    
    var kip = new Dier();
    console.log(kip);
    
}