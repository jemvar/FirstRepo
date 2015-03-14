$(document).ready(function() 
{
	"use strict";

	var resultList = $("#resultList");
	resultList.text("This is from JQuery");
	var toggleButton = $("#toggleButton");
	toggleButton.on("click", function () {
		resultList.toggle(1000);
		if (toggleButton.text() == "Hide") 
		{
			toggleButton.text("Show");
		} 
		else
		{
			toggleButton.text("Hide");
		};
	});
	var fakeResults =
	[ 
	{
		name:"jquery",
		language: "JS",
		score:4,
		show: function() {},
		owner:{ login:"jemvar"}
	},
	{
		name:"Varun",
		language: "Java",
		score:4,
		show: function() {},
		owner:{ login:"repo"}
	}
	];
	resultList.empty();
	$.each(fakeResults, function (i, item) {
		var newResult = $("<div class='result'>"+
						"<div class='title'>"+item.name+"</div>"+
						"<div>Language: "+item.language+"</div>"+
						"<div>Owner: "+item.owner.login+"</div>"+
						"</div>");
		newResult.hover
		(
			function () 
			{
				$(this).css("background-color","lightgray");
			},
			function () 
			{
				$(this).css("background-color","transparent");
			}
		);
		resultList.append(newResult);
	});
})

// var listItems = $("header nav li");
// listItems.css("font-weight","bold");
// listItems.filter(":first").css("font-size","18px");