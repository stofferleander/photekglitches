var firebaseConfig = {
    apiKey: "AIzaSyBFSDj1DOV1MAUttWNUfUBixIT1HVBGZk4",
    authDomain: "contact-form-glitch.firebaseapp.com",
    databaseURL: "https://contact-form-glitch.firebaseio.com",
    projectId: "contact-form-glitch",
    storageBucket: "contact-form-glitch.appspot.com",
    messagingSenderId: "209441142194",
    appId: "1:209441142194:web:bdbd5bfec6fced1f1620ab"
  };
  firebase.initializeApp(firebaseConfig);
  var firestore = firebase.firestore();

  //start grabbing our DOM element
  const submitBtn = document.querySelector('#submit');

  let userName = document.querySelector('#userFullName');
  let userEmail = document.querySelector('#userEmail');
  let userMessage = document.querySelector('#userMessage');

  const db = firestore.collection("contactData");

  submitBtn.addEventListener('click', function() {
    let userNameInput = userName.value;
    let userEmailInput = userEmail.value;
    let userMessageInput = userMessage.value;

    db.doc().set({
      name: userNameInput,
      Email: userEmailInput,
      Message: userMessageInput
    }).then(function(){
      alert("submitted successfully")
    }).catch(function(error){
      console.log(error)
    });
  });