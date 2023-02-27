// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-app.js";
import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-app.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries



// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyDbvOiJVM7JKy07BpmCWvpdIjHQZdSG87w",
  authDomain: "signup-form-70d37.firebaseapp.com",
  projectId: "signup-form-70d37",
  storageBucket: "signup-form-70d37.appspot.com",
  messagingSenderId: "385213027304",
  appId: "1:385213027304:web:60518f66737777e6dc8a5d"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const auth = getAuth();

// Getting All Objects in HTML
const firstName = document.getElementById('firstname');
const lastName = document.getElementById('lastname');
const email = document.getElementById('email');
const password = document.getElementById('password');


// Function That Stores Data
window.signup = function(e) {
    e.preventDefault();
    var obj = {
        firstName: firstName.value,
        lastName: lastName.value,
        email: email.value,
        password: password.value,
    }
    createUserWithEmailAndPassword(auth, obj.email, obj.password).then(function(success) {
        alert("Signed Up Successfully");
    }).catch(function(err) { 
        alert("Error: " + err)
    });
    console.log(obj);
};
