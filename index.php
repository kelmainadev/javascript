<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Functions</h1>

<p> Multiplication  of two integers in a function :</p>

<p id= "multi" ></p>


<h2> Closures<h2>
<p> counting with global variables</p>

<button type="button" onclick="myFunction()">Count!</button>

<p id="closure"></p>

<h2> Prototypes<h2>
<p id="demo"></p>
















<script>
//functions
function myFunction(p1, p2) {
    return p1 * p2;
}
document.getElementById("multi").innerHTML = myFunction(4, 3);
//closure
var counter = 0;

function add() {
    return counter += 1;
}
function myFunction(){
    document.getElementById("closure").innerHTML = add();
}
//prototype example code
function Person(first, last) {
    this.firstName = first;
    this.lastName = last;
    
}

var myFather = new Person("John", "Doe");
var myMother = new Person("Sally", "Rally");

document.getElementById("demo").innerHTML =
"My fathers  first name is " + myFather.firstName + ". My mother first name is " + myMother.firstName; 

</script>

</body>
</html>