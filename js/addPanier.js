var elem_panier = document.getElementsByClassName("t_check");
function addPanier(){
    var button_add = document.getElementsById("button_add");
    if (document.getElementsByClassName("t_check").clicked == true) {
        document.getElementById("button_add").style.display = "flex";
    }
}
