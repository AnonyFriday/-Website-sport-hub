function buildHeader() {
    fetch("../html/header.html")
        .then(response => {
            return response.text();
        })
        .then(data => {
            document.getElementById("header").innerHTML = data
        })
}

window.onload = function () {
    buildHeader();
}