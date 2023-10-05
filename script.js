// SHOW ERRORS
showError = (err) => {
    alert(err)
}
// GET ELEMENT BY ID (RETURN - ELEMENT)
_ = (ele) => {
    return document.getElementById(ele)
}
// EMAIL VALIDATION (CORRECT - TRUE & WRONG-FALSE)
ValidateEmail = (email) => {
    const regex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    return regex.test(email);
}
// USER SIGNUP FUNCTION
signUp = () => {
    if (_("fname").value == "") {
        showError('First Name is required');
    } else if (_("lname").value == "") {
        showError('Last Name is required');
    } else if (_("email").value == "") {
        showError('Email is Required');
    } else if (!ValidateEmail(_("email").value)) {
        showError('Invalid Email address');
    } else if (_("password").value == "") {
        showError('Password is NULL');
    } else if (_("password").value != _("password2").value) {
        showError('password are not matching');
    } else if (_("profession").value == 0) {
        showError('Please select your Profession');
    } else {
        var form = new FormData();
        form.append("json", JSON.stringify({
            email: _("email").value,
            fname: _("fname").value,
            lname: _("lname").value,
            password: _("password").value,
            gender: _("gender").value,
            profession_id: _("profession").value,
        }));

        fetch("server/signUpProcess.php", {
            method: 'POST',
            body: form,
        })
            .then(res => res.json())
            .then(obj => {
                if (obj.code == 100) {
                    window.location = 'signIn.php';
                } else {
                    showError(obj.code);
                }
            })
            .catch(error => alert(error))
    }
}
// USER SIGNIN FUNCTION
signIn = () => {
    if (_("email").value == '') {
        showError('Email is required');
    } else if (_("password").value == '') {
        showError('Password is Required');
    } else {
        var form = new FormData();
        form.append("json", JSON.stringify({
            email: _("email").value,
            password: _("password").value,
            rememberme: _("rememberme").value,
        }));

        fetch("server/signInProcess.php", {
            method: 'POST',
            body: form,
        })
            .then(res => res.json())
            .then(obj => {
                if (obj.code == 100) {
                    window.location = 'index.php';
                } else {
                    showError(obj.code);
                }
            })
            .catch(error => alert(error))
    }
}
// VARIABLES ARE USING PASSWORD RESET PROCESS
var bm;
var email;
// GET VERIFICATION CODE VIA EMAIL
forgotPassword = () => {
    email = _("email");
    fetch("server/forgotPasswordProcess.php", {
        method: 'POST',
        body: JSON.stringify({ email: _("email").value }),
        headers: {
            "Content-Type": "application/json",
        }
    })
        .then(res => res.json())
        .then(obj => {
            if (obj.code == 100) {
                alert("Verification code has sent to your email. Please check your inbox"
                );
                var m = _("forgotPasswordModal");
                bm = new bootstrap.Modal(m);
                bm.show();
            } else {
                alert(obj.code);
            }
        })
        .catch(error => console.log(error))
}
// RESET PASSWORD USIGN VERIFICATION CODE
resetPassword = () => {
    if (email.value == "") {
        bm.hide();
        alert("Please enter your email and try again");
    } else {
        var form = new FormData();
        form.append("json", JSON.stringify({
            email: email.value,
            password: _("p1").value,
            password2: _("p2").value,
            vcode: _("c").value,
        }));
        fetch("server/resetpassword.php", {
            method: 'POST',
            body: form,
        })
            .then(res => res.json())
            .then(obj => {
                console.log(obj.code);
                if (obj.code == 100) {
                    window.location.reload();
                } else {
                    showError(obj.code);
                }
            })
            .catch(error => console.log(error))
    }
}
// LOAD DASHBOARD
loadDashboard=()=>{
    
}