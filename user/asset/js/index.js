$(document).ready(function(){
	//Sidebar toggle menu
	$("#btn_close").click(function(){
		$(".sidebar").toggleClass("toggle")
		$(".main_content").toggleClass("classList")
	})
	//---background colour switcher----//
	$("#transparent_black").click(function(){
		$("*").css("background-color","#030301");
		$("*").css("color","white");
		$(".cart").css("background-color","deeppink");
		$(".logout").css("border","1px solid pink");
		$("#btn_close").css("color","deeppink");
		$("#back-to-top").css("color","black");
		$(".fixed-submenu").css("color","white");
		$(".card-body").css("box-shadow","0px 0px 5px white");
		$(".card-header").css("box-shadow","0px 0px 5px white");
	})
	$("#transparent_purple").click(function(){
		$("*").css("background-color","#241120");
		$("*").css("color","white");
		$(".cart").css("background-color","deeppink");
		$(".logout").css("border","1px solid pink");
		$("#btn_close").css("color","white");
		$("#back-to-top").css("color","black");
		$(".fixed-submenu").css("color","white");
		$(".card-body").css("box-shadow","0px 0px 5px white");
		$(".card-header").css("box-shadow","0px 0px 5px white");
	})
	$("#transparent_blue").click(function(){
		$("*").css("background-color","#190340");
		$("*").css("color","white");
		$(".cart").css("background-color","deeppink");
		$(".logout").css("border","1px solid pink");
		$("#btn_close").css("color","white");
		$("#back-to-top").css("color","black");
		$(".fixed-submenu").css("color","white");
		$(".card-body").css("box-shadow","0px 0px 5px white");
		$(".card-header").css("box-shadow","0px 0px 5px white");
	})
	
	$("#transparent_orange").click(function(){
		$("*").css("background-color","#6f3506");
		$("*").css("color","white");
		$(".logout").css("border","1px solid pink");
		$(".cart").css("background-color","deeppink");
		$("#btn_close").css("color","white");
		$("#back-to-top").css("color","black");
		$("a").css("color","white");
		$(".card-body").css("box-shadow","0px 0px 5px white");
		$(".card-header").css("box-shadow","0px 0px 5px white");
	})

	/*========admin category section========*/
	//category Ajax livesearch
	$("#text_livesearch").keyup(function(){
		let search=$(this).val();
		$.ajax({
			url:"http://localhost/printing_job/admin/categories-livesearch",
			method:"post",
			data:{query:search},
			success:function(response){
				$("#table-data").html(response);
			}
		})
	})
	/*==========admin product sectionn========*/
	//product Ajax livesearch
	$("#product_livesearch").keyup(function(){
		let search= $(this).val();
		$.ajax({
			url:"http://localhost/printing_job/admin/product-livesearch",
			method:"post",
			data:{query:search},
			success:function(response){
				$("#table-data").html(response);
			}
		})
	})
})