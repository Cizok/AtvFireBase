<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO LIST</title>
    <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-app.js";
  import { getAuth, createUserWithEmailAndPassword } from "firebase/auth";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyB76YVoe6izE4nuAyo6Nuxr8p8B2j_9jYg",
    authDomain: "guaiafc-409e9.firebaseapp.com",
    projectId: "guaiafc-409e9",
    storageBucket: "guaiafc-409e9.appspot.com",
    messagingSenderId: "840289060774",
    appId: "1:840289060774:web:093d7df1e680938f51f167"
  };

  // Initialize Firebase
  window.fbApp = initializeApp(firebaseConfig);
  window.fbAuth = getAuth(window.fbApp);
  console.log(window.fbApp);

  const btnRegister = document.getElementById('btnRegister');
  btnRegister.addEventListener('click', ()=>{
        const email = document.getElementById('email').value;
        const senha = document.getElementById('senha').value;
        console.log(email);
        console.log(senha);
        try{
            const userCredential = await createUserWithEmailAndPassword(window.fbApp, email, senha);
                console.log(userCredential);
        }catch(error){
        console.error(error);
        }
  })
</script>
</head>
<body>
    <h1>TODO LIST</h1>
    <label for="email">Email</label><br>
    <input type="email" id="email" name="email">><br>
    <label for="senha">Senha</label><br>
    <input type="senha" id="senha" name="senha">><br>
    <button id="btnRegister">Registre-se</button>

    <?php
        include 'main.php' ?>
</body>
</html>