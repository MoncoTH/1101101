var newPhoto = "";
function selectPhoto(img) {
    if (img == 1) {
        newPhoto = "ChristmasTree";
    } else if (img == 2) {
        newPhoto = "Apple";
    } else if (img == 3) {
        newPhoto = "Noodle";
    } else if (img == 4) {
        newPhoto = "HamBurgur";
    } else
        newPhoto = "bg";

    document.getElementById("photo").innerHTML = newPhoto;
}
function changePhoto(row, column) {

    id = row + "" + column; // id is string
    str = "<img src='img/" + newPhoto + ".png'  width='80' height='80' onclick='changePhoto(" + row + "," + column + ")' />";

    document.getElementById(id).innerHTML = str;
}