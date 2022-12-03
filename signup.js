var Name = document.getElementById("textName");
var address = document.getElementById("textAddress");
var email = document.getElementById("textEmail");
var password = document.getElementById("pas");
var confirmPassword = document.getElementById("cPass");
var btnSubmit = document.getElementById("btnSubmit");
var reset = document.getElementById("btnReset");
btnSubmit.addEventListener("click", function (e) {
    localStorage.setItem("Name", Name.value);
    localStorage.setItem("address", address.value);
    localStorage.setItem("email", email.value);
    localStorage.setItem("password", password.value);
    localStorage.setItem("confirmPassword", confirmPassword.value);
    var localName = localStorage.getItem("Name");
    var localAddress = localStorage.getItem("address");
    var localEmail = localStorage.getItem("email");
    console.log(localName);
    console.log(localAddress);
    console.log(localEmail);
    if (password.value == confirmPassword.value) {
        var localPasword = localStorage.getItem("password");
        var localCPasword = localStorage.getItem("confirmPassword");
        console.log(localPasword);
        console.log(localCPasword);
    }
    else {
        alert("Your Password is wrong");
        console.error("You typed a wrong Password");
    }
});
reset.addEventListener("click", function (e) {
    localStorage.clear();
    Name.value = "";
    address.value = "";
    email.value = "";
    password.value = "";
    confirmPassword.value = "";
});
function showpassword() {
    var x = document.getElementById("pas");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  function showpassword1() {
    var x = document.getElementById("pas1");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }