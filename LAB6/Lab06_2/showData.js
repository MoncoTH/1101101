var xmlHttp;
function createXMLHttpRequest()
{
 if (window.ActiveXObject) // Internet Explorer
 {
 xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
 }
 else // Firefox, Opera 8.0+, Safari
 {
 xmlHttp=new XMLHttpRequest();
 }
} //end function createXMLHttpRequest()
function stateChange()
{
 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 {
 //…………Add code here……..

 alert(this.responseText);
 myObj = JSON.parse(this.responseText);
 document.getElementById("pic").innerHTML= "<img src="+ myObj.Photo + ">";
 document.getElementById("v1").value= myObj.LastName ;
 document.getElementById("v2").value= myObj.Age ;
 document.getElementById("v3").value= myObj.Gender ;

 }
} // end function statechange()
function searchName(str)
{
 createXMLHttpRequest();
 xmlHttp.onreadystatechange = stateChange;
 var url = "data.php?name=" + str;
 xmlHttp.open("GET",url,true);
 xmlHttp.send(null);
} //end function showHint(str)