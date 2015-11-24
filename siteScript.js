$.fn.clickToggle = function(a, b) {
    return this.each(function() {
        var clicked = false;
        $(this).click(function() {
            if (clicked) {
                clicked = false;
                return b.apply(this, arguments);
            }
            clicked = true;
            return a.apply(this, arguments);
        });
    });
};

$(document).ready(function (){
	
	$("#moveForward").mousedown(function(e) {
    	e.preventDefault();
		$.get("curl.php?command=moveForward");
	});
	$("#moveForward").mouseup(function(e) {
    	e.preventDefault();
		$.get("curl.php?command=stop");
	});
	
	$("#stop").click(function(e) {
    	e.preventDefault();
		$.get("curl.php?command=stop");
	});
	
	$("#turnLeft").mousedown(function(e) {
    	e.preventDefault();
		$.get("curl.php?command=turnLeft");
	});
	$("#turnLeft").mouseup(function(e) {
    	e.preventDefault();
		$.get("curl.php?command=stop");
	});
	
	$("#turnRight").mousedown(function(e) {
    	e.preventDefault();
		$.get("curl.php?command=turnRight");
	});
	$("#turnRight").mouseup(function(e) {
    	e.preventDefault();
		$.get("curl.php?command=stop");
	});
	
	$("#moveBackwards").mousedown(function(e) {
    	e.preventDefault();
		$.get("curl.php?command=moveBackwards");
	});
	$("#moveBackwards").mouseup(function(e) {
    	e.preventDefault();
		$.get("curl.php?command=stop");
	});
	
	$("#turn180").mousedown(function(e) {
    	e.preventDefault();
		$.get("curl.php?command=turn180");
	});
	$("#turn180").mouseup(function(e) {
    	e.preventDefault();
		$.get("curl.php?command=stop");
	});
	$("#muteButton").clickToggle(function(e) {
		e.preventDefault();
		webrtc.mute();
		},function(e) {
		e.preventDefault();
		webrtc.unmute();
		});
	$("#stopButton").clickToggle(function(e) {
		e.preventDefault();
		webrtc.pauseVideo();;
		},function(e) {
		e.preventDefault();
		webrtc.resumeVideo();;
		});
});