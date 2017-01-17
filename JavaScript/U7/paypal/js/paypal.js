

//var json = JSON.parse(data);
//console.log(json);

//alert(json.users[0].name);

$(document).ready(function(){

  $.ajax({
    type: 'GET',
    url: 'paypal.json',
    datatype: 'json',
    crossDomain: 'true',
    success: function(data){
      var box = "";
      for (var i = 0; i < data.length; i++){
        box+='<img id="imagen"src="'+ data[i].payer.payment_method+'.png"></img><p>'+ data[i].create_time+'</p>';
        for (var j = 0; j <  data[i].transactions.length; j++) {
          for (var k = 0; k < data[i].transactions[j].item_list.items.length; k++) {
            box+='<p>'+data[i].transactions[j].item_list.items[k].name+' '+data[i].transactions[j].item_list.items[k].price+'</p>';
          }
          box+='<p>'+data[i].transactions[j].amount.total+' '+data[i].transactions[j].amount.currency+'</p>';
        }
     }
   $(".container").html(box);

      /*for (var i = 0; i < data.users.length; i++) {
        $("strong:eq("+i+")").html(data.users[i].name);
        $("span:eq("+i+")").html("@"+data.users[i].screen_name);
        $(".tweetContent:eq("+i+")").html(data.users[i].description);
        $(".profileimg:eq("+i+")").css("background-image", "url(" + data.users[i].profile_image_url + ")");
      }*/
    }
  });

});
