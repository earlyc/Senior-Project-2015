$(document).ready(function (){
	$("#moveForward").click(function(e) {
    	e.preventDefault();
		$.get("curl.php?command=moveForward");
	});
	$("#stop").click(function(e) {
    	e.preventDefault();
		$.get("curl.php?command=stop");
	});
	$("#turnLeft").click(function(e) {
    	e.preventDefault();
		$.get("curl.php?command=turnLeft");
	});
	$("#turnRight").click(function(e) {
    	e.preventDefault();
		$.get("curl.php?command=turnRight");
	});
	$("#moveBackwards").click(function(e) {
    	e.preventDefault();
		$.get("curl.php?command=moveBackwards");
	});
	$("#turn180").click(function(e) {
    	e.preventDefault();
		$.get("curl.php?command=turn180");
	});
});