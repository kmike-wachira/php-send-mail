/*--var name= "Mike";
var age= 24;
console.log(name +"   "+age);
//alert(name +"  " +age);
//prompt("how have been");
var promptVar ;

function fu(){
    

    var newAge=37
    alert( name +"  " +age+" "+newAge );
    
};-->*/
$(Document).ready(function(){
    $("button").click(function(){
        $("img").hide();
    });
  
   
});

$(Document).ready(function(){
    $("button").dblclick(function(){
        $("img").show();
    });
   
});
