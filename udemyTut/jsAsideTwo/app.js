var person = function(firstname, lastname){

	this.firstname = firstname;
	this.lastname = lastname;


}

function logPerson(){

	var john = new person('john', 'doe');
	console.log(john);

}

logPerson();