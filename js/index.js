function buildHeader() {
    fetch("../html/header.html")
        .then(response => {
            return response.text();
        })
        .then(data => {
            document.querySelector("header").innerHTML = data
        })
}

function buildHomeBody() {
    fetch("../html/main_home.html")
        .then(response => {
            return response.text();
        })
        .then(data => [
            document.querySelector("main").innerHTML = data
        ])
}

function buildFooterBody() {
    fetch("../html/footer_home.html")
        .then(response => {
            return response.text();
        })
        .then(data => [
            document.querySelector("footer").innerHTML = data
        ])
}



window.onload = function () {
    buildHeader();
    buildHomeBody();
    buildFooterBody();
}