let id='pushp';
let pass=12345;
function login(){
let x = document.getElementById("mail").value;
document.getElementById('mail').innerHTML = x;
let y = document.getElementById("pass").value;
document.getElementById('pass').innerHTML = y;
    if(x==id && y==pass){
            location.href = "\page1.html";
    }
    else{
        var error = document.getElementById('error')
        error.innerHTML = 'Your mail or password is wrong.';
        console.log('Error:Your mail or password is wrong.')
    }
}