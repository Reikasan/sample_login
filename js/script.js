window.addEventListener('load', function() {
    localStorage.clear();
});




// TOGGLE PASSWORD VISIBLITY

// store login pass to variable
var toggleLoginPass = document.querySelector("#toggleLoginPass");
var loginPass = document.querySelector("#loginPass");

// password 1
var toggleSigninPass1 = document.getElementById("toggleSigninPass1");
var signinPass1 = document.getElementById("password1");

// password 2
var toggleSigninPass2 = document.getElementById("toggleSigninPass2");
var signinPass2 = document.getElementById("password2");


// fire the function by clicking Lock icon
toggleLoginPass.addEventListener('click', function () { togglePass(loginPass) });
toggleSigninPass1.addEventListener('click', function () { togglePass(signinPass1) });
toggleSigninPass2.addEventListener('click', function () { togglePass(signinPass2) });
         

function togglePass(pass) {
    // toggle the type attribute
    var type = pass.getAttribute('type') === 'password' ? 'text' : 'password'; 
    pass.setAttribute('type', type);
    
    // toggle the kyelock icon
    var icon = pass.nextElementSibling;
    icon.classList.toggle('fa-lock');
    icon.classList.toggle('fa-lock-open');
    
    var tooltipTitle = icon.getAttribute('title') === 'Show the password' ? 'Hide the password' : 'Show the password';
    icon.setAttribute('title', tooltipTitle);
}


// CHECK PASSWORDS ARE SAME 
// function to check the passwords                             
function checkPass() {
    var pass1 = signinPass1.value;
    var pass2 = signinPass2.value;
    
    var samePass = pass1 === pass2;
    
    
    if(!samePass) {
        var passError = document.getElementById('passError');
        passError.innerHTML = "Make sure the two passwords are same.";
        signinPass1.classList.add('warning');
        signinPass2.classList.add('warning');
    }
}

// fire the passCheck function 
signinPass2.addEventListener('blur', checkPass);

// clear pass error message
signinPass2.addEventListener('focus', function() {
    passError.innerHTML = "";
    signinPass1.classList.remove('warning');
    signinPass2.classList.remove('warning');
});




// FAKE LOGIN FUNCTION
const loginBtn = document.getElementById('loginBtn');
var loginLink = document.getElementById('loginLink');

loginBtn.addEventListener('mouseover', function() {
    
    var loginNameValue = document.getElementById('loginName').value;
    var loginPassValue = loginPass.value;

    if(loginNameValue.length > 0 && loginPassValue.length > 0) {
        loginLink.setAttribute('href', 'login/myPage.html'); 
        
        localStorage.setItem('userName', loginNameValue);
        
    } else {
        if(loginLink.hasAttribute('href')) {
            loginLink.removeAttribute('href');
        } 
    }
});


// FAKE SIGNUP FUNCTION
const signupBtn = document.getElementById('signup');
var signupLink = document.getElementById('signupLink');

signupBtn.addEventListener('mouseover', function() {
   var usernameValue = document.getElementById('username').value; 
   var emailValue = document.getElementById('email').value; 
    
    var pass1 = signinPass1.value;
    var pass2 = signinPass2.value;
    var samePass = pass1 === pass2;
    
    if(usernameValue.length > 0 && emailValue.length > 0 && samePass) {
        signupLink.setAttribute('href', 'login/myPage.html'); 
        
        localStorage.setItem('userName', usernameValue);
        
    } else {
        if(signupLink.hasAttribute('href')) {
            signupLink.removeAttribute('href');
        }
    }
});






