
function validate()
{

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username=="admin" && password=="admin1234"){

        alert("Login Successfull ...");
        return false;
    }
    else{

        alert ("Login Fail . please enter valid username & password");
    }
}