
<script type="text/javascript" src="firebase-messaging-sw.js"></script>

<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase-messaging.js"></script>
<script>
  // Initialize Firebase
  // var config = {
  //   apiKey: "AIzaSyCyvGJbZuMhevqccUlIokjLZafjFFJ4Z4A",
  //   authDomain: "mrneeds-bc4b7.firebaseapp.com",
  //   databaseURL: "https://mrneeds-bc4b7.firebaseio.com",
  //   projectId: "mrneeds-bc4b7",
  //   storageBucket: "",
  //   messagingSenderId: "654404571217"
  // };
  // firebase.initializeApp(config);

  // messaging.requestPermission()
  // .then(function() {
  //   console.log('Notification permission granted.');
  //   // TODO(developer): Retrieve an Instance ID token for use with FCM.
  //   // ...
  // })
  // .catch(function(err) {
  //   console.log('Unable to get permission to notify.', err);
  // });

  // messaging.getToken()
  // .then((currentToken) => {
  //   if (currentToken) {
  //     sendTokenToServer(currentToken)
  //   } else {
  //     // you don't have permission to show notifications
  //     // detect whether they are blocked or not, then show your custom UI  
  //   }
  // })
  // .catch((err) => {
  //   // retrieving token failed, analyze the error
  // })

</script>

<?php

echo "Testing FCM";

?>