console.log("coucou");
if (document.getElementsByClassName('inscription')[0]) {
    
    var a = document.getElementById("reconbundle_user_save");
    var p = a.parentNode;
    var div = document.createElement("div");
    div.className = "connect";
    div.appendChild(a);
    p.appendChild(div);    
    
}