function signUp() {
  var f = document.getElementById("fname").value;
  var l = document.getElementById("lname").value;
  var e = document.getElementById("email").value;
  var p = document.getElementById("password").value;
  var p2 = document.getElementById("password2").value;
  var g = document.getElementById("gender").value;
  var pr = document.getElementById("proffeshion").value;

  if (p != p2) {
    alert("password are not matching");
  } else {
    const arry = 
      {
        email: e,
        fname: f,
        lname: l,
        password: p,
        gender: g,
        proffeshion_id: pr,
      };

    var form = new FormData();
    form.append("json", JSON.stringify(arry));

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
      if (request.readyState == 4) {
        var text = request.responseText;
        console.log(text);
        // if (text == "1") {
        //     // alert("Done!");
        //     window.location = "signIn.php";
        // } else if(text == "2") {
        //     alert("User with same email already exist!");
        // }else{
        //     alert(text);
        // }
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

  const arry = [
    {
      email: email,
      password: password,
      rememberme: rememberme,
    },
  ];

  var f = new FormData();
  f.append("json", JSON.parse(arry));

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      // alert(t);
      if (t == "1") {
        window.location = "home.php";
      } else if (t == "2") {
        alert("Invalid Deatails!");
      } else {
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
        alert(
          "Verification code has sent to your email. Please check your inbox"
        );
        var m = document.getElementById("forgotPasswordModal");
        bm = new bootstrap.Modal(m);
        bm.show();
      } else {
        alert(t);
      }
    }
  };

  r.open("GET", "forgotPasswordProcess.php?e=" + email.value, true);
  r.send();
}

function resetPassword() {
  // var email = document.getElementById("e");
  var np = document.getElementById("p1");
  var rnp = document.getElementById("p2");
  var vcode = document.getElementById("c");

  if (email == "") {
    alert("Please enter your email and try again");
  } else {
    const arry = [
      {
        email: email,
        password: np,
        password2: rnp,
        vcode: vcode,
      },
    ];

    var f = new FormData();

    f.append("json", JSON.parse(arry));

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
}
