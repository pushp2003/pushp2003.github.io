
  let id = 'abcd';
  let pass = 1234;
  function login() {
    let x = document.getElementById("mail").value;
    document.getElementById('mail').innerHTML = x;
    let y = document.getElementById("pass").value;
    document.getElementById('pass').innerHTML = y;
    if (x == id && y == pass) {
      location.href = "main.html";
    }
  }