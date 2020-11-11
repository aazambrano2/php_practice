var questions = [
    {
        prompt: "What color are apples\n(a) Red/Green\n(b) Purple\n(c) Orange",     
        answer: "a"
    },
    {
        prompt: "What color are Bananas?\n(a) Teal\n(b) Magenta\n(c) Yellow",
        answer: "c"
    },
    {
        prompt: "What color are strawberries?\n(a) Yellow\n(b) Red\n(c) Blue",
        answer: "b"
    }
];
var score = 0;
//q is a index of the question array
for(var q = 0; q < questions.length; q++){
    var response = window.prompt(questions[q].prompt);
    if(response == questions[q].answer){
        score++;
        alert("Correct!");
    } else{
        alert("Wrong!");
    }
}
alert("you got score " + score + "/" + questions.length);