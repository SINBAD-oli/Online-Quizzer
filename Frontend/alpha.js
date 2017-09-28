

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
