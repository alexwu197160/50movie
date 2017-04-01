$(document).ready(function() {

		//啟動 parallax 背景
		$('.parallax').parallax();
		//啟動 sideNav 效果
		$(".button-collapse").sideNav();

		$("ul li a").on("click", function(){
		var a_elm = $(this);
		var target_id = a_elm.attr("href");
		var topTo = 0;
		if(target_id != "#"){
			topTo = $(target_id).position().top;
		}

		$("html, body").animate({
			scrollTop: topTo
		}, 1000, function(){
			$("ul li[class='active']").removeClass('active');
			a_elm.parent().addClass('active');
		});
		return false;
		});

		//啟動輪播
		$('.slider').slider({
			full_width: true,
			height: 300
		});

		//點擊聲音開關，啟動聲音或靜音
		$("a.chageVolume").on("click", function(){
			var status = $(this).attr("rel");
			if(status == "靜音")
			{
			//若狀態為0就讓他打開聲音
			$("video")[0].muted = false;
			//將狀態改為已經有聲音
			$(this).attr("rel", "有聲音");
			//變更icon
			$(this).find("i.material-icons").text("volume_up");
			}
		else
			{
			//反之就是讓他靜音
			$("video")[0].muted = true;
			//將狀態改為已經靜音
			$(this).attr("rel","靜音");
			//變更icon
			$(this).find("i.material-icons").text("volume_off");
			}

		});

		$("#go").click(function(event) {
            event.preventDefault();
            $('body,html').animate({
                scrollTop: 0
            }, 800, 'easeInOutExpo');
            return false;
        });

});