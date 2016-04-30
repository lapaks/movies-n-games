//add_admin//

$(document).ready(function(){
$("#click_add_admin").click(function(){
$("#add_admin_content,#add_icon").fadeIn("slow");
$("#view_admin_content, #add_movie_content, #add_movie, #view_icon, #add_game, #add_game_content").fadeOut("slow");

});
});

//add_movie//

$(document).ready(function(){
$("#click_add_movie").click(function(){
$("#add_movie_content,#add_movie").fadeIn("slow");
$("#view_admin_content, #add_admin_content, #add_icon, #view_icon,  #add_game, #add_game_content").fadeOut("slow");

});
});

//add_games//

$(document).ready(function(){
$("#click_add_game").click(function(){
$("#add_game_content,#add_game").fadeIn("slow");
$("#view_admin_content, #add_admin_content, #add_movie, #add_movie_content, #add_icon, #view_icon").fadeOut("slow");

});
});


//view_admin//

$(document).ready(function(){
$("#click_view_admin").click(function(){
$("#view_admin_content, #view_icon").fadeIn("slow");
$("#add_icon, #add_movie, #add_movie_content, #add_admin_content,  #add_game, #add_game_content").fadeOut("slow");

});
});

//year

var start = 1900;
var end = new Date().getFullYear();
var options = "";
for(var year = start ; year <=end; year++){
  options += "<option>"+ year +"</option>";
}
document.getElementById("year").innerHTML = options;

//

