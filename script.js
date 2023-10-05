showError = (err) => {
    alert(err)
}
function ValidateEmail(email) {
    const regex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    console.log(regex.test(email));
    return regex.test(email);
}
function signUp() {
    var f = document.getElementById("fname").value;
    var l = document.getElementById("lname").value;
    var e = document.getElementById("email").value;
    var p = document.getElementById("password").value;
    var p2 = document.getElementById("password2").value;
    var g = document.getElementById("gender").value;
    var pr = document.getElementById("profession").value;

    if (f == "") {
        showError('First Name is required');
    } else if (l == "") {
        showError('Last Name is required');
    } else if (e == "") {
        showError('Email is Required');
    } else if (!ValidateEmail(e)) {
        showError('Invalid Email address');
    } else if (p == "") {
        showError('Password is NULL');
    } else if (p != p2) {
        showError('password are not matching');
    } else if (pr == 0) {
        showError('Please select your Profession');
    } else {
        const arry =
        {
            email: e,
            fname: f,
            lname: l,
            password: p,
            gender: g,
            profession_id: pr,
        };

        var form = new FormData();
        form.append("json", JSON.stringify(arry));

        var request = new XMLHttpRequest();

        request.onreadystatechange = function () {
            if (request.readyState == 4) {
                var text = request.responseText;
                console.log(text);
                // if text === 100 redirect to signin page
            }
        };

        request.open("POST", "server/signUpProcess.php", true);
        request.send(form);
    }
}

function signIn() {
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var rememberme = document.getElementById("rememberme");

    if (email.value == '') {
        showError('Email is required');
    } else if (password.value == '') {
        showError('Password is Required');
    } else {

        var f = new FormData();
        f.append("json", JSON.stringify({
            email: email.value,
            password: password.value,
            rememberme: rememberme.checked,
        }));

        var r = new XMLHttpRequest();

        r.onreadystatechange = function () {
            if (r.readyState == 4) {
                var t = r.responseText;
                let res = JSON.parse(t);
                if (res.code == 100) {
                    alert('done');
                    window.location = 'index.php';
                } else {
                    console.log(res.code);
                }
            }
        };

        r.open("POST", "server/signInProcess.php", true);
        r.send(f);
    }
}

var bm;
var email;
function forgotPassword() {
    email = document.getElementById("email");

    fetch("server/forgotPasswordProcess.php", {
        method: 'POST',
        body: JSON.stringify({ email: document.getElementById("email").value }),
        headers: {
            "Content-Type": "application/json",
        }
    })
        .then(res => res.json())
        .then(obj => {
            if(obj.code==100){
                alert("Verification code has sent to your email. Please check your inbox"
                );
                var m = document.getElementById("forgotPasswordModal");
                bm = new bootstrap.Modal(m);
                bm.show();
            }else{
                alert(obj.code);
            }
        })
        .catch(error => alert(error))



    // var r = new XMLHttpRequest();

    // if (email.value == "") {
    //     alert("Please enter your email and try again");
    // } else {
    //     r.onreadystatechange = function () {
    //         if (r.readyState == 4) {
    //             var t = r.responseText;
    //             if (t == "Success") {
    //                 alert(
    //                     "Verification code has sent to your email. Please check your inbox"
    //                 );
    //                 var m = document.getElementById("forgotPasswordModal");
    //                 bm = new bootstrap.Modal(m);
    //                 bm.show();
    //             } else {
    //                 alert(t);
    //             }
    //         }
    //     };

    //     r.open("GET", "server/forgotPasswordProcess.php?e=" + email.value, true);
    //     r.send();
    // }


}

function resetPassword() {
    // var email = document.getElementById("e");
    var np = document.getElementById("p1").value;
    var rnp = document.getElementById("p2").value;
    var vcode = document.getElementById("c").value;

    if (email.value == "") {
        alert("Please enter your email and try again");
    } else {
        const arry =
        {
            email: email.value,
            password: np,
            password2: rnp,
            vcode: vcode,
        };

        var f = new FormData();

        f.append("json", JSON.stringify(arry));

        var r = new XMLHttpRequest();

        r.onreadystatechange = function () {
            if (r.readyState == 4) {
                var t = r.responseText;
                console.log(t);
            }
        };

        r.open("POST", "server/resetpassword.php", true);
        r.send(f);
    }
}
