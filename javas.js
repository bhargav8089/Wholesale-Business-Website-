function clearAll() {
    document.getElementById("pname").value = "";
    document.getElementById("city").value = "";
    document.getElementById("minq").value = "";
    document.getElementById("maxq").value = "";
    document.getElementById("minp").value = "";
    document.getElementById("maxp").value = "";
    sessionStorage.setItem("pname","");
    sessionStorage.setItem("city", "");
    sessionStorage.setItem("minq", "");
    sessionStorage.setItem("maxq","");
    sessionStorage.setItem("minp","");
    sessionStorage.setItem("maxp", "");
}
function storedata() {
    sessionStorage.setItem("pname", document.getElementById("pname").value);
    sessionStorage.setItem("city", document.getElementById("city").value);
    sessionStorage.setItem("minq", document.getElementById("minq").value);
    sessionStorage.setItem("maxq", document.getElementById("maxq").value);
    sessionStorage.setItem("minp", document.getElementById("minp").value);
    sessionStorage.setItem("maxp", document.getElementById("maxp").value);
}

function loaddata() {
    document.getElementById("pname").value = sessionStorage.getItem("pname") || "";
    document.getElementById("city").value = sessionStorage.getItem("city") || "";
    document.getElementById("minq").value = sessionStorage.getItem("minq") || "";
    document.getElementById("maxq").value = sessionStorage.getItem("maxq") || "";
    document.getElementById("minp").value = sessionStorage.getItem("minp") || "";
    document.getElementById("maxp").value = sessionStorage.getItem("maxp") || "";
}
