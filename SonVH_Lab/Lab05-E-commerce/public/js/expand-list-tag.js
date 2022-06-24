function markAttribute(id){
    window.alert(id);
    const attribute = document.getElementById(id);
    const visibility = window.getComputedStyle(attribute).visibility;
    attribute.onselect = "active";
    if (visibility == "visible"){
        // window.alert(id);
        document.getElementById(id).style.visibility = "hidden";
        document.getElementsByClassName(id).style.backgroundColor = "white";
    }
    else if (visibility == "hidden"){
        document.getElementById(id).style.visibility = "visibility";
        document.getElementsByClassName(id).style.backgroundColor = "#b6b6b6";
    }
}