//================================
// Handy constant names
//================================
const Constants = {
    ID_BUTTON_ADD_TO_CART : "id_btn__add-to-cart",
    ID_BUTTON_REMOVE_CART : "id_btn__remove-cart",
    ID_CART_HOLDER        : "id_cart-holder",     
}

//================================
// Handy absolute url storage
//================================
const FileName = {
    PHP : {
        ADD_TO_CART     : "../inc/modules/cart/ajax_addToCart.php",
        DELETE_FROM_CART     : "../inc/modules/cart/ajax_deleteFromCart.php",
        DISPLAY_CART     : "../inc/modules/cart/ajax_displayCart.php",
        CART            : "../inc/cart.php",
        COLLECTION      : "../inc/collection.php",
        CONTACT_US      : "../inc/contactus.php",
        PRODUCT         : "../inc/product.php",
        REGISTER        : "../inc/register.php",
        SIGNIN          : "../inc/signin.php",
    }
}



//================================
// Add Product to the cart 
// Using AJAX technology 
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
                if(xhr.responseText) {
                    alert("Successfully add to the cart");
                } else {
                    if(confirm("Already add to Cart. Do you want to have a look on shopping cart?")){
                        window.location.href = FileName.PHP.CART;
                    }
                }
            } 
        }
    }
    xhr.send("product_id=" + product_id);
}


//================================
// List Shopping Cart
// Using AJAX technology 
//================================
// function displayShoppingCart(){
//     var cartHolder = document.querySelector("#" + Constants.ID_CART_HOLDER);
//     var xhr = new XMLHttpRequest();
//     xhr.open("GET",FileName.PHP.DISPLAY_CART,true);
//     xhr.setRequestHeader("X-Requested-With", 'XMLHttpRequest');
//     xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//     xhr.onreadystatechange = (event) => {
//         event.preventDefault();
//         if (xhr.readyState !== xhr.DONE) { return;}
//         else {
//             if (xhr.status == 200) {
//                 var cartItems = JSON.parse(xhr.responseText);
//                 console.log(cartItems);
//             } 
//         }
//     }
//     xhr.send();
// }



//================================
// Delete Product from to the cart 
// Using AJAX technology 
//================================
// function addProductToCart(product_id){
//     var btn = document.querySelector("#" + Constants.ID_BUTTON_ADD_TO_CART);
//     var xhr = new XMLHttpRequest();
//     xhr.open("POST",FileName.PHP.ADD_TO_CART,true);
//     xhr.setRequestHeader("X-Requested-With", 'XMLHttpRequest');
//     xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//     xhr.onreadystatechange = (event) => {
//         event.preventDefault();
//         if (xhr.readyState !== xhr.DONE) { return;}
//         else {
//             if (xhr.status == 200) {
//                 if(xhr.responseText) {
//                     alert("Successfully add to the cart");
//                 } else {
//                     if(confirm("Already add to Cart. Do you want to have a look on shopping cart?")){
//                         window.location.href = FileName.PHP.CART;
//                     }
//                 }
//             } 
//         }
//     }
//     xhr.send("product_id=" + product_id);
// }


window.onload = () => {
//   displayShoppingCart();
}