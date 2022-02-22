document.getElementById("sign up")
addEventListener("regester", function (e) {
    e.preventDefault();
    const password = document.getElementById
    ("password").value ;
    const confirmPassword = document.getElementById("confirmpassword").value;
    if (password == confirmPassword)
     {
        document.getElementById
        ("passworword-error").innerHTML = 
        "password does not match";
        return false;

     
    } else {
         document.getElementById
         ("password-error").innerHTML = "";
         document.getElementById
         ("form-sucess").innerHTML = I
         "Successfully registered";
         return true;
    }

});
