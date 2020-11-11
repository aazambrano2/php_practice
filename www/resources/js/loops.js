var i = 1;
/* 
    <br> - Line break in HTML
    <br/> or <br></br> - Line break in XHTML
    <br/> - For XHTML documents to render on existing HTML user agents
*/
while(i <= 10){
    document.write(i + "<br/>");
    i++;
}
document.write("<hr></hr>");
 var j = 11;
do{
    document.write(j + "<br>");
    i++;
}while(i<= 10);
//Note: 11 is printed out
document.write("<hr></hr>")
for(let i = 12; i < 20 ; i++){
    document.write(i + "<br>");
}

document.write("<hr></hr>");
var friends = ["Jim,","Satnley","Kevin"];
for(let i = 0; i < friends.length ; i++){
    document.write(friends[i] + "<br>");
}