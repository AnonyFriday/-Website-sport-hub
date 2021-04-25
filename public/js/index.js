//================================
// Handy constant names
//================================
const Constants = {
    ID_BUTTON_ADD_TO_CART: "id_btn__add-to-cart",
    ID_BUTTON_REMOVE_CART: "id_btn__remove-cart",
    ID_CART_HOLDER: "id_cart-holder",
    ID_LOGIN_TITLE: "id_login-title",
    ID_LOGIN_BTN: "id_login-btn",
    ID_FORM_LOGIN: "id_form-login"
};

//================================
// Handy absolute url storage
//================================
const FileName = {
    PHP: {
        PROCESS_LOGIN: "../inc/modules/authentication/ajax_processLogin.php",
        ADD_TO_CART: "../inc/modules/cart/ajax_addToCart.php",
        DELETE_FROM_CART: "../inc/modules/cart/ajax_deleteFromCart.php",
        CART: "../inc/cart.php",
        COLLECTION: "../inc/collection.php",
        CONTACT_US: "../inc/contactus.php",
        PRODUCT: "../inc/product.php",
        HOME: "../index.php",
        REGISTER: "../inc/register.php",
        SIGNIN: "../inc/signin.php"
    }
};

//================================
// Add Product to the cart
// Using AJAX technology
//================================
function addProductToCart(product_id) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", FileName.PHP.ADD_TO_CART, true);
    xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = event => {
        event.preventDefault();
        if (xhr.readyState !== xhr.DONE) {
            return;
        } else {
            if (xhr.status == 200) {
                if (xhr.responseText) {
                    alert("Successfully add to the cart");
                } else {
                    if (
                        confirm(
                            "Already add to Cart. Do you want to have a look on shopping cart?"
                        )
                    ) {
                        window.location.href = FileName.PHP.CART;
                    }
                }
            }
        }
    };
    xhr.send("product_id=" + product_id);
}

// ================================
// Delete Product from to the cart
// Using AJAX technology
//! Wrong appoarch when using this technique
// ================================
function deleteProductFromCart(product_id) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", FileName.PHP.DELETE_FROM_CART, true);
    xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = event => {
        event.preventDefault();
        if (xhr.readyState !== xhr.DONE) {
            return;
        } else {
            if (xhr.status == 200) {
                if (xhr.responseText) {
                    window.location.reload();
                } else {
                    alert("Something wrong. Please try again!");
                }
            }
        }
    };
    xhr.send("product_id=" + product_id);
}

// ================================
// Login 
// Using AJAX technology
// Using FormData object
// ================================



function login() {
    var loginTitle = document.querySelector("#" + Constants.ID_LOGIN_TITLE);
    var loginForm = document.querySelector("#" + Constants.ID_FORM_LOGIN);

    // Attach onlick to signin button
    var formAction = loginForm.getAttribute("action");
    var formData = new FormData(loginForm);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", formAction, true);
    xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
    xhr.onreadystatechange = event => {

        if (xhr.readyState !== xhr.DONE) {
            return;
        } else {
            if (xhr.status == 200) {
                console.log(xhr.responseText);
                if (!xhr.responseText) {
                    alert("Password or Gmail is not match. Please try again!");
                    loginForm.reset();
                } else {
                    var userData = JSON.parse(xhr.responseText);
                    console.log(userData);
                    console.log(xhr.responseText);
                    alert("Login Successfully!.");
                    // window.location.replace(FileName.PHP.HOME);
                }

            }
        }
    };
    xhr.send(formData);

    // Using FormData object to get input's values

}

window.onload = () => {};