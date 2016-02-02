//IMAGINE THIS IS A PIECE OF JS CODE WRITTEN BY SOMEONE ELSE
//THIS IS GOOD CODE THOUGH, BECAUSE THE FUNCTIONS ARE INSIDE AN OBJECT

//this is how to write the same code so that it is reusable
var stevesApp = {};
stevesApp.person = 'Steve';

stevesApp.logPerson = function(){
	console.log(stevesApp.person);
}