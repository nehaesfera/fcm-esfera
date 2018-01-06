<!DOCTYPE html>
<html>
<head>
  <title></title>
  
<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase-messaging.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCyvGJbZuMhevqccUlIokjLZafjFFJ4Z4A",
    authDomain: "mrneeds-bc4b7.firebaseapp.com",
    databaseURL: "https://mrneeds-bc4b7.firebaseio.com",
    projectId: "mrneeds-bc4b7",
    storageBucket: "mrneeds-bc4b7.appspot.com",
    messagingSenderId: "654404571217"
  };
  firebase.initializeApp(config);
</script>

</head>
<body>

<!-- AAAAmF2NUFE:APA91bFDaVmuSl9lNLXeRuk1Rtu3ZdspTorc0JXFvxwtoQ6qB_FNtY2JMLYxSRKHY9mz1uxpLggfWdIno-n5x3HLKzTBzOBVAaIc77kS4NWvpOKA2REQqajvjDDVB3QhPzmPK6mzA1hW -->

<button onclick="sendMessageToUser()">Send Notification</button>

<script type="text/javascript">
  function sendMessageToUser()
  {
     $.ajax(
     {
         type : "POST",
         url : "https://fcm.googleapis.com/fcm/send",

         headers :
         {
             Authorization : "key=AAAAmF2NUFE:APA91bFDaVmuSl9lNLXeRuk1Rtu3ZdspTorc0JXFvxwtoQ6qB_FNtY2JMLYxSRKHY9mz1uxpLggfWdIno-n5x3HLKzTBzOBVAaIc77kS4NWvpOKA2REQqajvjDDVB3QhPzmPK6mzA1hW"
         },

         contentType : 'application/json',
         data : JSON.stringify(
         {
             "to" : "<FCM REGISTRATION TOKEN OF THE DEVICE>",
             "data":
             {
                 "action" : "set_message",
                 "message" : <YOUR MESSAGE>,
                 "user" : "some-user"
             }
         }),

         success : function(response)
         {
             console.log(response);
         },
         error : function(xhr, status, error)
         {
             console.log(xhr.error);
         }
     });
  }
</script>
</body>
</html>


<?php

echo "Testing FCM";

?>