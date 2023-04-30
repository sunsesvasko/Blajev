// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-app.js";
import { getAuth, signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-auth.js";
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
let email = document.getElementById('email');
let password = document.getElementById('password');

// Login
window.login = function(e) {
    e.preventDefault();
    const user = auth.currentUser;

    let obj = {
        email: email.value,
        password: password.value,
    };
    signInWithEmailAndPassword(auth, obj.email, obj.password).then(function(success) {
        localStorage.setItem('user', user.uid);
        alert("Logged In Successfully!");
        location.href = "indexAdmin.html";
    }).catch(function(err) {
        alert(err);
    });
    console.log(obj);
};

/*
if(isLoggedIn && currentPage === 'index') {
    document.getElementById('sign-up').remove();
} else if(!isLoggedIn && currentPage === 'index'){
    const icons = document.getElementById('icons');
    const signUp = '<svg id="sign-up" class="w-[30px] text-black transition duration-100 ease-in-out delay-150 rounded-lg cursor-pointer hover:-translate-y-1 hover:scale-100" width="46" height="46" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path> <path d="M8.5 3a4 4 0 1 0 0 8 4 4 0 1 0 0-8z"></path> <path d="M20 8v6"></path> <path d="M23 11h-6"></path></svg>';  
    icons.insertAdjacentHTML('afterbegin', signUp);
    document.getElementById('sign-up').addEventListener('click', () => { location.href = 'signUp.html'});
} */