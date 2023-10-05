

function signUp() {

    var f = document.getElementById("fname");
    var l = document.getElementById("lname");
    var e = document.getElementById("email");
    var p = document.getElementById("password");
    var p2 = document.getElementById("password2");
    var m = document.getElementById("mobile");
    var g = document.getElementById("gender").value;
    var l1 = document.getElementById("line1");
    var l2 = document.getElementById("line2");

    // console.log(g.value);

    var form = new FormData;
    form.append("fname", f.value);
    form.append("lname", l.value);
    form.append("email", e.value);
    form.append("password", p.value);
    form.append("password2", p2.value);
    form.append("mobile", m.value);
    form.append("gender", g);
    form.append("addressLine1", l1.value);
    form.append("addressLine2", l2.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4) {
            var text = request.responseText;
            if (text == "1") {
                // alert("Done!");
                window.location = "signIn.php";
            } else if(text == "2") {
                alert("User with same email already exist!");
            }else{
                alert(text);
            }
        }
    }

    request.open("POST", "signUpProcess.php", true);
    request.send(form);

}

function signIn() {

    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var rememberme = document.getElementById("rememberme");

    var f = new FormData();
    f.append("email", email.value);
    f.append("password", password.value);
    f.append("remember", rememberme.checked);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);
            if (t == "1") {
                window.location = "home.php";
            } else if(t == "2") {
                alert("Invalid Deatails!");
            }else{
                alert(t);
            }

        }
    };

    r.open("POST", "signInProcess.php", true);
    r.send(f);

}

var bm;
var email;
function forgotPassword() {

    email = document.getElementById("email");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "Success") {
                alert("Verification code has sent to your email. Please check your inbox");
                var m = document.getElementById("forgotPasswordModal");
                bm = new bootstrap.Modal(m);
                bm.show();
            }else{
                alert(t);
            }
            
        }
    }

    r.open("GET", "forgotPasswordProcess.php?e=" + email.value, true);
    r.send();

}



function resetPassword() {
    // var email = document.getElementById("e");
    var np = document.getElementById("p1");
    var rnp = document.getElementById("p2");
    var vcode = document.getElementById("c");
  
    var f = new FormData();
    f.append("e", email.value);
    f.append("p1", np.value);
    f.append("p1", rnp.value);
    f.append("c", vcode.value);
  
    var r = new XMLHttpRequest();
  
    r.onreadystatechange = function () {
      if (r.readyState == 4) {
        var t = r.responseText;
        if (t == "Success") {
          bm.hide();
          alert("Now you can Log In using new password");
        } else {
          alert(t);
        }
      }
    };
  
    r.open("POST", "resetpassword.php", true);
    r.send(f);
  }
  