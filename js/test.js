
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

	//Student
	if (selectValue==="Student") 
	{
		document.getElementById("class").style.display = "block";
		document.getElementById("gender").style.display = "block";
	}
	else
	{
		document.getElementById("class").style.display = "none";
		document.getElementById("gender").style.display = "none";
	}

	//Parent
	if (selectValue==="Parent") 
	{
		document.getElementById("occupation").style.display = "block";

	}
	else
	{
		document.getElementById("occupation").style.display = "none";

	}

	//Teacher
	if (selectValue==="Teacher") 
	{
		document.getElementById("class").style.display = "block";
		document.getElementById("maritalstatus").style.display = "block";

	}
	else
	{
		//document.getElementById("class").style.display = "none";
		document.getElementById("maritalstatus").style.display = "none";
	}

}