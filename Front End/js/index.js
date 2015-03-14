$(document).ready(function() 
{
	"use strict";

	var resultList = $("#resultList");
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

	var gitHubSearch = "https://api.github.com/search/repositories?q=jquery+language:javascript";
	$.get(gitHubSearch)
		.success
		(
			function (r) 
			{
				displayItems(r.items);
			}
		)
		.fail
		(
			function (err) 
			{
				console.log("The following error occured: "+err);
			}
		)
		.done
		(
			function() 
			{
				//finally
			}
		);
		
	function displayItems(results) {
		resultList.empty();
		$.each(results, function (i, item) {
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
	}
})