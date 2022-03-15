function requestCode(){
     const code = prompt('Introduce el código:', '');

     return alert( (code === '123'));
}

function initSession(){
     const user = {
          username: document.getElementById('username').value,
          password: document.getElementById('password').value,
     }

     console.log(user);

     const validUser = {
          username: 'pepe',
          password: '123',
     }

     alert(1);

     return false;
}