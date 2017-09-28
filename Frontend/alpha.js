$(document).ready(function(){
$("button").click(function(){

$.ajax({
type: 'POST',
url: 'alpha.php',
success: function(data) {
alert(data);
$("p").text(data);


}
});
});
});