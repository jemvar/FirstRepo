"use strict";
var mssg = "hello JS";
console.log(mssg);
var resultsDiv = document.getElementById("results");
resultsDiv.innerHTML = "<p> This is from JS</p>";
console.log(typeof(mssg));
console.log(typeof(resultsDiv));
var a;
var num = 10;
console.log(typeof(a));
// bavv = "new str";

// Conditionals

if(a == undefined)
{
	console.log("a is undefined");
}

if(!a)
{
	console.log("!a is true");
}

if(!mssg)
{
	console.log("!mssg is true");
}

if(num == "10")
{
	console.log("type checking with ==")
}

if(num === "10")
{
	console.log("exact checking with ===")
}