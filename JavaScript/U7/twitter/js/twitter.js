

//var json = JSON.parse(data);
//console.log(json);

//alert(json.users[0].name);

$(document).ready(function(){

  $.ajax({
    type: 'GET',
    url: 'twitter.json',
    datatype: 'json',
    success: function(data){
      //$("#selectregion").html(data);
      for (var i = 0; i < data.users.length; i++) {
        $("strong:eq("+i+")").html(data.users[i].name);
        $("span:eq("+i+")").html("@"+data.users[i].screen_name);
        $(".tweetContent:eq("+i+")").html(data.users[i].description);
        $(".profileimg:eq("+i+")").css("background-image", "url(" + data.users[i].profile_image_url + ")");

        /*$("<div class='containerTweet col-xs-6 col-xs-offset-1'><div class='row'><div class='tweet'><div class='profileimgcol-xs-2'></div><div class='name col-xs-4 text-right'><strong>"+data.users[i].name+"</strong></div><div class='user col-xs-5'><span>@"+data.users[i].screen_name+"</span></div><div class='tweetContent col-xs-9'>"+data.users[i].description+"</div></div></div></div>");*/
      }
    }
  });

});
