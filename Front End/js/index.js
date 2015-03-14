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
	})	
};)
