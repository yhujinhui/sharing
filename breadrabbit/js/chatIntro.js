var now_img, next_img;
	function fade_change(){
		now_img = $(".fade_container img:eq(0)");
		next_img = $(".fade_container img:eq(1)");
		next_img.addClass("active").css("opacity",0).animate({"opacity":1},400, function(){
			$(".fade_container").append(now_img);			//콜백
			now_img.removeClass("active");
		});
	}


    // 순환 
var timer = setInterval("fade_change()",1100);
	
var timer = setInterval("fade_change()",1100);
	/*
	$("div.fade_container").hover(function(){		// mouse enter
		clearInterval(timer);
    }, function(){									// mouse leave
        timer = setInterval("fade_change()",4000);
	});
	*/