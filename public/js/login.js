function validate() {
    let $valid = true;
    document.getElementById("username").innerHTML = "";
    document.getElementById("password").innerHTML = "";
    
    let userName = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    if(userName == "") 
    {
        document.getElementById("user_info").innerHTML = "required";
      $valid = false;
    }
    if(password == "") 
    {
      document.getElementById("password_info").innerHTML = "required";
        $valid = false;
    }
    return $valid;
}
