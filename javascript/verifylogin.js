function verify() {

    var uname = document.getElementById('name').value.trim();
    var pwd = document.getElementById('pass').value.trim(); 
   
    var regx = /^([a-z 0-9\._-]+)@([a-z0-9-]+).([a-z.]{2,8})$/;
    if (!regx.test(uname)) {
        document.getElementById('Username').innerHTML = "*Enter Valid ID";
        return false;

    }
    if (pwd === "") {
        document.getElementById('Password').innerHTML = "*Enter the Password!";
        return false;
    }
    return true;
}