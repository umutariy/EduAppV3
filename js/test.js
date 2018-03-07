
var question = document.getElementById("questions");
var butns= document.getElementById("btns");
var forRadio = document.getElementById("choice");
var forText = document.getElementById("text_input")
var option = document.getElementById("option");
var text = document.getElementById("text");

function createQuestion() 
{
	forRadio.style.display="none";
	forText.style.display="none";
	question.style.display="block";
}

function choice()
{
	forRadio.style.display="block";
	question.appendChild(butns);
}

function text_Input(text)
{
	forText.style.display="block";
}


