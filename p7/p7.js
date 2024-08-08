window.onload=function(){
    document.getElementById("num1").value="";
    document.getElementById("num2").value="";
}


function sum(){
    var a1=parseFloat(document.getElementById("num1").value);
    var a2=parseFloat(document.getElementById("num2").value);
    var res=a1+a2;
    console.log(res);
    document.getElementById("res").innerHTML="Result is "+res;
}

function sub(){
    var a1=parseFloat(document.getElementById("num1").value);
    var a2=parseFloat(document.getElementById("num2").value);
    var res=a1-a2;
    console.log(res);
    document.getElementById("res").innerHTML="Result is "+res;
}

function mul(){
    var a1=parseFloat(document.getElementById("num1").value);
    var a2=parseFloat(document.getElementById("num2").value);
    var res=a1*a2;
    console.log(res);
    document.getElementById("res").innerHTML="Result is "+res;
}

function div(){
    var a1=parseFloat(document.getElementById("num1").value);
    var a2=parseFloat(document.getElementById("num2").value);
    var res=a1+a2;
    console.log(res);
    document.getElementById("res").innerHTML="Result is "+res;
}
