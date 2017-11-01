// Initialize Firebase
  var config = {
    apiKey: "AIzaSyCzqhVRZsSpXohtXOg_AjswOz8TUoAeZmg",
    authDomain: "tollpay-4e7c3.firebaseapp.com",
    databaseURL: "https://tollpay-4e7c3.firebaseio.com",
    projectId: "tollpay-4e7c3",
    storageBucket: "tollpay-4e7c3.appspot.com",
    messagingSenderId: "814901607990"
  };
  firebase.initializeApp(config);

// Reference messages collection
var messagesRef = firebase.database().ref('Users');

// Listen for form submit
document.getElementById('contactForm').addEventListener('submit', submitForm);

// Submit form
function submitForm(e){
  e.preventDefault();

  // Get values
  var name = getInputVal('name');
  var vehicle = getInputVal('vehicle');
  var email = getInputVal('email');
  var phone = getInputVal('phone');
  var type = getInputVal('type');

  // Save message
  saveMessage(name, vehicle, email, phone, type);

  // Show alert
  document.querySelector('.alert').style.display = 'block';

  // Hide alert after 3 seconds
  setTimeout(function(){
    document.querySelector('.alert').style.display = 'none';
  },3000);

  // Clear form
  document.getElementById('contactForm').reset();
}

// Function to get get form values
function getInputVal(id){
  return document.getElementById(id).value;
}

// Save message to firebase
function saveMessage(name, vehicle, email, phone, type){
  var newMessageRef = messagesRef.push();
  newMessageRef.set({
    name: name,
    vehicle:vehicle,
    email:email,
    phone:phone,
    type:type
  });
}