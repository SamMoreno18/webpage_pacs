/*=============================================
Grid & List
=============================================*/

$(document).on("click",".btnView", function(){

	var type = $(this).attr("attr-type");
	var btnType = $("[attr-type]");
	var index = $(this).attr("attr-index");
	
	if(type == "list"){

		$(".grid-"+index).hide();
		$(".list-"+index).show();
	}

	if(type == "grid"){

		$(".grid-"+index).show();
		$(".list-"+index).hide();
	}

	btnType.each(function(i){

		if($(btnType[i]).attr("attr-index") == index){

			$(btnType[i]).removeClass("bg-white");

		}

	})
	
	$(this).addClass("bg-white");

})