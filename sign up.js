
function matchPasword(){
    var pw1 = document.getElementById("pswd1");
    var pw2 = document.getElementById("pswd2");
    if(pw1!= pw2)
    {
        alert("passwords did not match");
    }else {
        alert("password created successfully");
    }
}
function submitForm() {
    let form = document.getElementById("form__register");
    form.submit();
}