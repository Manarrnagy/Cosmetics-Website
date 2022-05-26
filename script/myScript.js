var counter = 1;
function next(){
	if(counter == 5){
		counter = 1;
	}
	else{
		counter ++;
	}
	document.getElementById("slideshow").src ="Images/"+counter+".jpg";
} 
function prev(){
	if(counter == 1){
		counter = 5;
	}
	else{
		counter --;
	}
	document.getElementById("slideshow").src ="Images/"+counter+".jpg";
} 
	setInterval(next,2000);
	
var total = 0;
function cart(val,btn){
	var number1 = parseInt(document.getElementById("1").innerHTML);
	var number2 = parseInt(document.getElementById("2").innerHTML);
	var number3 = parseInt(document.getElementById("3").innerHTML);
	var number4 = parseInt(document.getElementById("4").innerHTML);
	var number5 = parseInt(document.getElementById("5").innerHTML);
	var number6 = parseInt(document.getElementById("6").innerHTML);
	var number7 = parseInt(document.getElementById("7").innerHTML);
	var number8 = parseInt(document.getElementById("8").innerHTML);
	var number9 = parseInt(document.getElementById("9").innerHTML);
	var number10 = parseInt(document.getElementById("10").innerHTML);
	var number11 = parseInt(document.getElementById("11").innerHTML);
	var number12 = parseInt(document.getElementById("12").innerHTML);
	var number13 = parseInt(document.getElementById("13").innerHTML);
	var number14 = parseInt(document.getElementById("14").innerHTML);
	var number15 = parseInt(document.getElementById("15").innerHTML);
	var number16 = parseInt(document.getElementById("16").innerHTML);
	var number17 = parseInt(document.getElementById("17").innerHTML);
	var number18 = parseInt(document.getElementById("18").innerHTML);
	if(val == "+"){
		if(btn == "btn1")
		total += number1;
		else if(btn == "btn2")
		total += number2;
		else if(btn == "btn3")
		total += number3;
		else if(btn == "btn4")
		total += number4;
		else if(btn == "btn5")
		total += number5;
		else if(btn == "btn6")
		total += number6;
		else if(btn == "btn7")
		total += number7;
		else if(btn == "btn8")
		total += number8;
		else if(btn == "btn9")
		total += number9;
		else if(btn == "btn10")
		total += number10;
		else if(btn == "btn11")
		total += number11;
		else if(btn == "btn12")
		total += number12;
		else if(btn == "btn13")
		total += number13;
		else if(btn == "btn14")
		total += number14;
		else if(btn == "btn15")
		total += number15;
		else if(btn == "btn16")
		total += number16;
		else if(btn == "btn17")
		total += number17;
		else if(btn == "btn18")
		total += number18;
	}
	else if(val == "="){
		alert("Total is "+ total);
	}
}