<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO LIST</title>
    <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-app.js";
  import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-auth.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
   
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const auth = getAuth(app);

  const btnRegistar = document.getElementById('btnRegister');

    btnRegistar.addEventListener('click', ()=>{
        let email = document.getElementById('email').value;
        let senha = document.getElementById('senha').value;

        createUserWithEmailAndPassword(auth, email, senha)
        .then((userCredential) => {
        // Signed up 
        const user = userCredential.user;
        console.log("Usuario criado:", user);
        })
        .catch((error) => {
        const errorCode = error.code;
        const errorMessage = error.message;
        console.log(errorCode, errorMessage);
    });
  })

           
</script>
</head>
<body>
    <h1>TODO LIST</h1>
    <label for="email">Email</label><br>
    <input type="email" id="email" name="email">><br>
    <label for="senha">Senha</label><br>
    <input type="password" id="senha" name="senha">><br>
    <button id="btnRegister">Registre-se</button>

    <?php
        include 'main.php' ?>
</body>
</html>