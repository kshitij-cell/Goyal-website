function verify() {

    var ins = document.getElementById('name').value.trim();
    var mbl = document.getElementById('pass').value.trim();
    var mail = document.getElementById('text').value.trim();
    var pwd = document.getElementById('confirm').value.trim();
    if (ins === "" || ins.length > 50) {
        document.getElementById('Username').innerHTML = "*Enter the name of Institute!";
        return false;
    }
    var phoneno = /^\d{10}$/;
    if (!(mbl.match(phoneno))) {
        document.getElementById('number').innerHTML = "*Enter Valid Number";
        return false;
    }


    var regx = /^([a-z 0-9\._-]+)@([a-z0-9-]+).([a-z.]{2,8})$/;
    if (!regx.test(mail)) {
        document.getElementById('email').innerHTML = "*Enter Valid ID";
        return false;

    }


    if (pwd === "" || pwd.length > 55) {
        document.getElementById('password').innerHTML = "*Enter the Password";
        return false;
    }

    return true;
}