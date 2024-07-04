function validate() {
    var password = document.getElementById("exampleInputPassword1").value;
    var cpassword = document.getElementById("cpassword").value;

    if (password != cpassword) {
        alert("Passwords did not match");

    } else {

    }
}

function passwordVisible() {
    var x = document.getElementById("exampleInputPassword1");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}