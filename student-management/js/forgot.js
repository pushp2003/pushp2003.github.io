
function login() {
    let z = document.getElementById("otp").value;
    document.getElementById('otp').innerHTML = z;
    if (z == 4321) {
        location.href = "\page1.html";
    }
    else {
        var error = document.getElementById('error')
        error.innerHTML = 'Your OTP is wrong.';
    }
}