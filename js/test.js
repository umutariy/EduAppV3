
var question = document.getElementById("questions");
var butns= document.getElementById("btns");
var forRadio = document.getElementById("choice");
var forText = document.getElementById("text_input")
var option = document.getElementById("option");
var text = document.getElementById("text");

//for div having buttons
function createQuestion() 
{
	forRadio.style.display="none";
	forText.style.display="none";
	question.style.display="block";
}

//for multiple choice
function choice()
{
	forRadio.style.display="block";
	question.appendChild(butns);
}

//for fill in blanks
function text_Input(text)
{
	forText.style.display="block";
}

//for displaying user
function displayClass() 
{
	var selectValue = document.getElementById("selectMode").value;
	if (selectValue==="Student" || selectValue==="Teacher") 
	{
		document.getElementById("22e").style.display = "block";

	}
	else
	{
		document.getElementById("22e").style.display = "none";
	}

}