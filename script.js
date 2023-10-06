// GET ELEMENT BY ID (RETURN - ELEMENT)
_ = (ele) => {
  return document.getElementById(ele);
};
// EMAIL VALIDATION (CORRECT - TRUE & WRONG-FALSE)
ValidateEmail = (email) => {
  const regex =
    /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
  return regex.test(email);
};
// USER SIGNUP FUNCTION
signUp = () => {
  if (_("fname").value == "") {
    alert("First Name is required");
  } else if (_("lname").value == "") {
    alert("Last Name is required");
  } else if (_("email").value == "") {
    alert("Email is Required");
  } else if (!ValidateEmail(_("email").value)) {
    alert("Invalid Email address");
  } else if (_("password").value == "") {
    alert("Password is NULL");
  } else if (_("password").value != _("password2").value) {
    alert("password are not matching");
  } else if (_("profession").value == 0) {
    alert("Please select your Profession");
  } else {
    var form = new FormData();
    form.append(
      "json",
      JSON.stringify({
        email: _("email").value,
        fname: _("fname").value,
        lname: _("lname").value,
        password: _("password").value,
        gender: _("gender").value,
        profession_id: _("profession").value,
      })
    );

    fetch("server/signUpProcess.php", {
      method: "POST",
      body: form,
    })
      .then((res) => res.json())
      .then((obj) => {
        if (obj.code == 100) {
          window.location = "signIn.php";
        } else {
          alert(showError(obj.code));
        }
      })
      .catch((error) => alert(error));
  }
};
// USER SIGNIN FUNCTION
signIn = () => {
  if (_("email").value == "") {
    alert("Email is required");
  } else if (_("password").value == "") {
    alert("Password is Required");
  } else {
    var form = new FormData();
    form.append(
      "json",
      JSON.stringify({
        email: _("email").value,
        password: _("password").value,
        rememberme: _("rememberme").value,
      })
    );

    fetch("server/signInProcess.php", {
      method: "POST",
      body: form,
    })
      .then((res) => res.json())
      .then((obj) => {
        if (obj.code == 100) {
          window.location = "index.php";
        } else if (obj.code == 200) {
          window.location = "adminpanel.php";
        } else {
          alert(showError(obj.code));
        }
      })
      .catch((error) => alert(error));
  }
};
// VARIABLES ARE USING PASSWORD RESET PROCESS
var bm;
var email;
// GET VERIFICATION CODE VIA EMAIL
forgotPassword = () => {
  email = _("email");
  fetch("server/forgotPasswordProcess.php", {
    method: "POST",
    body: JSON.stringify({ email: _("email").value }),
    headers: {
      "Content-Type": "application/json",
    },
  })
    .then((res) => res.json())
    .then((obj) => {
      if (obj.code == 100) {
        alert(
          "Verification code has sent to your email. Please check your inbox"
        );
        var m = _("forgotPasswordModal");
        bm = new bootstrap.Modal(m);
        bm.show();
      } else {
        alert(showError(obj.code));
      }
    })
    .catch((error) => console.log(error));
};
// RESET PASSWORD USIGN VERIFICATION CODE
resetPassword = () => {
  if (email.value == "") {
    bm.hide();
    alert("Please enter your email and try again");
  } else {
    var form = new FormData();
    form.append(
      "json",
      JSON.stringify({
        email: email.value,
        password: _("p1").value,
        password2: _("p2").value,
        vcode: _("c").value,
      })
    );
    fetch("server/resetpassword.php", {
      method: "POST",
      body: form,
    })
      .then((res) => res.json())
      .then((obj) => {
        console.log(obj.code);
        if (obj.code == 100) {
          window.location.reload();
        } else {
          alert(showError(obj.code));
        }
      })
      .catch((error) => console.log(error));
  }
};

// FUNCTION FOR LOAD PROJECT DETAILS IN PROJECT PHP
loadProject = (id) => {
  let projectObject;
  fetch('server/loadProjectById.php?pid=' + id, { method: 'GET' })
    .then(res => res.json())
    .then(obj => {
      console.log(obj);
      projectObject = obj.data;
      fillData();
    })
    .catch(err => alert(showError(err)))

  fillData = () => {
    _('project-title').innerHTML = projectObject.title;
    _('project-description').innerHTML = projectObject.description;
    _('project-start_date').innerHTML = projectObject.start_date;
    _('project-end-date').innerHTML = projectObject.end_date;
    //STATUS COLOR
    const taskStatus = projectObject.project_status_id;
    if (taskStatus == 1) {
      _('project-status-button').classList.add('text-danger')
    } else if (taskStatus == 2) {
      _('project-status-button').classList.add('text-warning')
    } else if (taskStatus == 3) {
      _('project-status-button').classList.add('text-success')
    }

    _('project-edit-button').setAttribute('target', projectObject.id);

    const taskArr = projectObject.tasks;
    let output = '';
    taskArr.forEach(task => {
      output += `
      <li class="event fs-3" data-date="${task.startDate}">
      <h4 class="mb-3">${task.title}</h4>
       <p>${task.description}</p>
      </li>`
    })
    _('project-content').innerHTML = output;
  }
}

editProject = (id) => {
  window.location = "manageProject.php?pid=" + _(id).getAttribute('target');
}

const mainTasks = [];

function addProjectTask() {
  var taskTitle = document.getElementById("tt").value;
  var taskDescription = document.getElementById("td").value;
  var taskStartDate = document.getElementById("tsd").value;
  var taskEndDate = document.getElementById("ted").value;

  if (taskTitle == "") {
    alert("Please enter task title");
  } else if (taskDescription == "") {
    alert("Please enter task description");
  } else if (taskStartDate == "") {
    alert("Please enter task start date");
  } else if (taskEndDate == "") {
    alert("Please enter task ending date");
  } else {
    const data = {
      title: taskTitle,
      description: taskDescription,
      startDate: taskStartDate,
      endDate: taskEndDate,
      status: 1,
    };
    mainTasks.push(data);
    console.log(mainTasks);
    updateTaskList();
  }
}

function updateTaskList() {
  const taskListElement = document.getElementById("taskList");

  // Clear the existing content of the task list
  taskListElement.innerHTML = "";

  mainTasks.forEach((task) => {
    const listItem = document.createElement("li");

    // Create a button element
    const button = document.createElement("button");
    button.textContent = "Button Text"; // You can set your desired button text here

    // Add a click event listener to the button if needed
    button.addEventListener("click", () => {
      // Handle button click event here
    });

    // Append the button to the list item
    listItem.appendChild(button);

    // Append the task title to the list item
    listItem.textContent += ` ${task.title}`;
    listItem.classList.add("btn", "btn-outline-primary", "col-12", "my-1");

    // Append the list item to the task list
    taskListElement.appendChild(listItem);
  });
}

function addNewProject() {
  var projectTitle = document.getElementById("pt").value;
  var projectDescription = document.getElementById("pd").value;
  var projectStartDate = document.getElementById("psd").value;
  var projectEndDate = document.getElementById("ped").value;

  const project = {
    title: projectTitle,
    description: projectDescription,
    startDate: projectStartDate,
    endDate: projectEndDate,
    status: 1,
  };

  var data = {
    project: JSON.stringify(project),
    mainTasks: JSON.stringify(mainTasks),
  };

  console.log(data);
  // Uncomment the XMLHttpRequest section
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4) {
      var response = xhr.responseText;
      console.log(response);
    }
  };

  xhr.open("POST", "server/addNewProjectProcess.php", true);
  xhr.setRequestHeader("Content-Type", "application/json");
  xhr.send(JSON.stringify(data));
}





showError = (code) => {
  switch (code) {
    case 99:
      return ('REQUEST JSON ERROR')
    case 1:
      return ('First Name is null ')
    case 2:
      return ('Last Name is null')
    case 3:
      return ('first name must be less that 45 characters ')
    case 4:
      return ('last name must be less that 45 characters ')
    case 5:
      return ('email is null')
    case 6:
      return ('email must be less that 100 characters ')
    case 7:
      return ('invalid email')
    case 8:
      return ('password is null')
    case 9:
      return ('password must be more that 5 and less that 20 characters')
    case 10:
      return ('profession not selected')
    case 11:
      return ('this email alredy used');
    case 12:
      return ('user not found');
    case 13:
      return ('Invalid password, try again!');
    case 14:
      return ('re enter your password!');
    case 15:
      return ('password dosent match!');
    case 16:
      return ('verification code empty!');
    case 17:
      return ('invalid email or verifiacation code!');
    case 18:
      return ('Verification Code sending Failed');
    default:
      return (code)
  }
}

document.querySelectorAll('.password-show-button').forEach(btn=>{
  btn.addEventListener('click',()=>{
    const target = btn.getAttribute('target');
    if(_(target).type=="password"){
      _(target).type = "text";
    }else{
      _(target).type = "password";
    }
  })
})






var profession_id;


  var mdl;
  function model(id){
    profession_id=id;
    var m = document.getElementById("verificationModal");
  mdl = new bootstrap.Modal(m);
  mdl.show();
  }
  

 function addProjectTask(){
  var title = document.getElementById("t").value;
  var description = document.getElementById("d").value;
  var startDate = document.getElementById("sd").value;
  var endDate = document.getElementById("ed").value;


  if(title==""){
    alert("please add title");
  }
  else if(description==""){
    alert("please add description");
  }
  else if(startDate==""){
    alert("please add start date");
  }
  else if(endDate==""){
    alert("please add end date");
  }else{

    var f = new FormData();
  f.append("t", title);
  f.append("d", description);
  f.append("sd",startDate);
  f.append("ed",endDate);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "success") {
        window.location = "home.php";
      } else {
        document.getElementById("msg2").innerHTML = t;
      }
    }
  };

  r.open("POST", "server/addtasksprocess.php", true);
  r.send(f);
    
  }



 }