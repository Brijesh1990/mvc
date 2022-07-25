function clr()
{
    document.getElementById("display").value="";
}
function shw(val)
{
    document.getElementById("display").value+=val;
}
function res()
{
    var x=document.getElementById("display").value;

    //alert(x)
    var y=eval(x);
    document.getElementById("display").value=+y;
    
    //alert('hi',+y);
}