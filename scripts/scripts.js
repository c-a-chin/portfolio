$("#listView").on("click", function(){
	$("#listView").toggleClass("d-none");
	$("#blockView").toggleClass("d-none");
})

$("#blockView").on("click", function(){
	$("#listView").toggleClass("d-none");
	$("#blockView").toggleClass("d-none");
})