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

//Function

function show(mssg)
{
	console.log("show1 "+mssg);
}
function show (mssg, more) {
	console.log("show2 "+mssg+" "+more);
}
show("hello");
show("hello","world");

var showIt = function print (mssg) {
	console.log("printing "+ mssg);
}
showIt("hello");

function showItFinal (mssg, callback) {
	console.log(mssg);
	callback();
}
showItFinal("showItFinal called", function() {console.log("callback called");});

// Scope

var inGlobal = true;
function test () {
	console.log("inGlobal is "+inGlobal);
	var insideTest = true;
	console.log("insideTest is "+insideTest);
	showItFinal("called from test", function() {
		console.log("callback from test, local var insideTest is "+insideTest);
//Closure ( a function which has access to its parent function scope)
	})

}
test();
console.log("insideTest is "+insideTest);

// Objects

var r = 
{
	name:"jquery",
	language: "JS",
	score:4,
	show: function() {};
	owner:{ login:"hello"}
};
//add fields to object
r.phone = "4254357101";

var arr = [];
arr.push(r);
arr.length;
arr[0];

//loops

for (var i = arr.length - 1; i >= 0; i--) {
	arr[i];
}