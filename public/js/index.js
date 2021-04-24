/*********** Element IDs **************/
const Constants = {
    ID_BUTTON_ADD_TO_CART: "id_btn__add-to-cart",
    ID_BUTTON_REMOVE_CART : "id_btn__remove-cart"
}

/*********** URL Address **************/
const FileName = {
    PHP : {
        ADD_TO_CART : "../inc/modules/ajax_addToCart.php",
    }
}



//================================
/* Add Product to the cart */
/* Using AJAX technology */
//================================
function addProductToCart(product_id){
    var btn = document.querySelector("#" + Constants.ID_BUTTON_ADD_TO_CART);
    var xhr = new XMLHttpRequest();
    xhr.open("POST",FileName.PHP.ADD_TO_CART,true);
    xhr.setRequestHeader("X-Requested-With", 'XMLHttpRequest');
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = (event) => {
        event.preventDefault();
        if (xhr.readyState !== xhr.DONE) { return;}
        else {
            if (xhr.status == 200) {
                console.log(xhr.responseText);
            } else {
                console.log("WRONG");
            }
        }
    }
    xhr.send("product_id=" + product_id);
}





window.onload = () => {
  
}