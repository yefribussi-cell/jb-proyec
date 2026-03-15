function login(){

let usuario = document.getElementById("usuario").value;
let password = document.getElementById("password").value;

if(usuario === "admin" && password === "1234"){

localStorage.setItem("acceso","permitido");

window.location.href = "admin.html";

}else{

alert("Acceso denegado");

}

}



