const arr = [0,0,0,0,0,0];
function expand(id){
    const block = document.getElementById("cate"+id);
    const display = window.getComputedStyle(block).display;

    // window.alert(display);
    if (display == "flex"){
        document.getElementById("cate"+id).style.display = "none";
        document.getElementById("title"+id).style.color = "black";
        document.getElementById("e"+id).style.transform = "rotate(180deg)";
    }
    else{
        document.getElementById("cate"+id).style.display = "flex";
        document.getElementById("title"+id).style.color = "#e68852";
        document.getElementById("e"+id).style.transform = "rotate(0deg)";
    }
        

} 
