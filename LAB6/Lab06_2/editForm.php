<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="showData.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        function changeImg(imgID) {
            if (imgID == 1) {
                document.getElementById("pic").innerHTML = '<img src="./avatar/avatar1.jpg">';
                document.getElementById("hid").value = "./avatar/avatar1.jpg";
                document.body.style.background = 'green';
            } else if (imgID == 2) {
                document.getElementById("pic").innerHTML = '<img src="./avatar/avatar2.jpg">';
                document.getElementById("hid").value = "./avatar/avatar2.jpg";
            } else if (imgID == 3) {
                document.getElementById("pic").innerHTML = '<img src="./avatar/avatar3.jpg">';
                document.getElementById("hid").value = "./avatar/avatar3.jpg";
            } else if (imgID == 4) {
                document.getElementById("pic").innerHTML = '<img src="./avatar/avatar4.jpg">';
                document.getElementById("hid").value = "./avatar/avatar4.jpg";
            } else if (imgID == 5) {
                document.getElementById("pic").innerHTML = '<img src="./avatar/avatar5.jpg">';
                document.getElementById("hid").value = "./avatar/avatar5.jpg";
            } else if (imgID == 6) {
                document.getElementById("pic").innerHTML = '<img src="./avatar/avatar6.jpg">';
                document.getElementById("hid").value = "./avatar/avatar6.jpg";

            }
        }

        $(document).ready(function () {
            $("#1").click(function () {
                $("body").css("background-color", "green");
            });
            $("#2").dblclick(function () {
                $("body").css("background-color", "yellow");
            });
            $("#3").dblclick(function () {
                $("p").css("color", "red");
            });
            $("#4").dblclick(function () {
                $(":input").css("background-color", "blue");
            });
            $("#5").mouseenter(function () {
                var H = $(":input");
                H.hide();
            });
            $("#6").mouseleave(function () {
                var S = $(":input");
                S.show();
            });

        });

    </script>
</head>

<body>
    <Table align="center">
        <TR>
            <TD><img src="./avatar/avatar1.jpg" width="45" onclick="changeImg(1)" id="1" ></TD>
            <TD><img src="./avatar/avatar2.jpg" width="45" onclick="changeImg(2)" id="2" ></TD>
            <TD><img src="./avatar/avatar3.jpg" width="45" onclick="changeImg(3)" id="3" ></TD>
            <TD><img src="./avatar/avatar4.jpg" width="45" onclick="changeImg(4)" id="4" ></TD>
            <TD><img src="./avatar/avatar5.jpg" width="45" onclick="changeImg(5)" id="5" ></TD>
            <TD><img src="./avatar/avatar6.jpg" width="45" onclick="changeImg(6)" id="6" ></TD>
        </TR>
    </Table>
    <BR>
    <p id="note"></p>
    <BR>
    <Table align="center">
        <form name="myForm" action="insert.php" method="post" autocomplete="on" enctype="multipart/form-data">
            <TR>
                <TD id="pic"><img src="./avatar/avatar1.jpg"></TD>
                <TD><input type="hidden" id="hid" name="avatar" value="./avatar/avatar1.jpg"></TD>
            </TR>
            <TR>
                <TD>
                    <p> Firstname: </p>
                </TD>
                <TD><input type="text" name="firstname" maxlength"10" size="20" onchange="searchName(this.value)"></TD>
            </TR>
            <TR>
                <TD>
                    <p> Lastname: </p>
                </TD>
                <TD><input type="text" name="lastname" id="v1" maxlength="10" size="20"></TD>
            </TR>
            <TR>
                <TD>
                    <p> Age: </p>
                </TD>
                <TD><input type="number" name="age" id="v2" min="1" max="100"></TD>
            </TR>
            <TR>
                <TD>
                    <p> Gender: </p>
                </TD>
                <TD>
                    <select name="gender" id="v3">
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                    </select>
                </TD>
            </TR>
            <TR>
                <TD></TD>
                <TD><BR><input type="submit" name="Save" value="Save">
                    <input type="reset" name="Cancel" value="Cancel">
                </TD>
            </TR>
        </form>
    </Table>
</body>

</html>