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

	var gitHubSearchForm = $("#gitHubSearchForm").on("submit", function () {
		var searchPhrase = $("#searchPhrase").val();
		var useStars = $("#useStars").val();
		var langChoice = $("#langChoice").val();

		if(searchPhrase)
		{
			resultList.text("Performing Search ...");
			var gitHubSearch = "https://api.github.com/search/repositories?q="+encodeURIComponent(searchPhrase);
			if(langChoice != "All")
				gitHubSearch = gitHubSearch+"+language:"+encodeURIComponent(langChoice);
			if(useStars)
				gitHubSearch = gitHubSearch+"&sort=stars";
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
		}
		return false;
	});

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