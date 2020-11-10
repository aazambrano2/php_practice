var isMale = false;
var isTall = true;
var s = "You are either tall male ";
//&& || <= >= != ! (not)
if(isMale && isTall){
    document.write(s, "<br>");
} else if(isMale && !isTall){
    document.write("You are a short male")
}else if(!isMale && isTall){
    document.write("You are not male, but you are tall")
}else{
    document.write("You are not male and not tall");
}

function max(num1, num2, num3){

    if(num1 >= num2 && num1 >= num3){
        return num1;
    }else if (num2 >= num3 && num2 >= num1){
        return num2;
    }else{
        return num3;
    }
}

function getDayName(dayNum){
    var day;
    //incomplete
    switch(dayNum){
        case 0:
            day = "Sunday";
            break;
        case 1:
            day = "Monday";
            break;
        case 2:
            day = "Tuesday";
            break;  
        default:
            document.write("<br> No day ID found. Invalid ID " + dayNum);  
            day = "-1";            
    }
    return day;
}

document.write("<br>",max(3, 4, 5));
document.write("<br>",getDayName(2));
document.write("<br>",getDayName(1000));
