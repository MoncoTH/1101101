var xmlHttp;
function createXMLHttpRequest() {
    if (window.ActiveXObject) // Internet Explorer 
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    else // Firefox, Opera 8.0+, Safari 
        xmlHttp = new XMLHttpRequest();
} //end function createXMLHttpRequest()
function stateChange() {
    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
        //…………Add code here……..
        text = xmlHttp.responseText;
        alert(text);
        document.getElementById("a").innerHTML = text;
        text = text.replace("Mr. ", "")
        text = text.replace("Mrs. ", "")
        alert(text);
        Photo = "<img src='./avatar/" + text + ".jpg'></img>";
        Pe2 = "./avatar/" + text + ".jpg";
        alert(Photo);
        document.getElementById("fix").innerHTML = Photo;
        document.getElementById("hid").value = Pe2;
    }
} // end function statechange()
function showAvatar(str) {
    createXMLHttpRequest();
    xmlHttp.onreadystatechange = stateChange;
    var url = "avatar.php";
    url = url + "?nickname=" + str; //url = "avatar.php?nickname=1"
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
} //end function showAvatar(str)