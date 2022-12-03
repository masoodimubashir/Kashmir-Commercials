var myEmail = document.getElementById("textEmail");
var myNewpassword = document.getElementById("pas");
var confirmPassword = document.getElementById("cPass");
var btnSubmit = document.getElementById("btnSubmit");
var reset = document.getElementById("btnReset");
btnSubmit.addEventListener("click", function (e) {
    var email = myEmail.value;
    var password = myNewpassword.value;
    var localEmail = localStorage.getItem("email");
    var localPasword = localStorage.getItem("password");
    if (localPasword == password && localEmail == email) {
        alert("You have Logged In Sucessfulyy");
    }
    else {
        alert("Your email or passsword Is wrong! \n Please Retype Your Password");
        console.error("");
    }
});
reset.addEventListener("click", function (e) {
    myEmail.value = "";
    myNewpassword.value = "";
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