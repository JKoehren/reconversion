console.log("coucou");


document.addEventListener("DOMContentLoaded", function() { 

    if (document.getElementById("reconbundle_user_save") !== undefined) {
        var a = document.getElementById("reconbundle_user_save");
        var p = a.parentNode;
        var div = document.createElement("div");
        div.className = "connect";
        div.appendChild(a);
        p.appendChild(div);    

    }
});