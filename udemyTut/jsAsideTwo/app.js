var person = function(firstname, lastname){

	this.firstname = firstname;
	this.lastname = lastname;


}
//exmaple of dependency injection
function logPerson(person){
	
	console.log(person);

}
var john = new person('john', 'doe');
logPerson(john);