/*
Give the service worker access to Firebase Messaging.
Note that you can only use Firebase Messaging here, other Firebase libraries are not available in the service worker.
*/
// importScripts('https://www.gstatic.com/firebasejs/3.5.0/firebase-app.js')
// importScripts('https://www.gstatic.com/firebasejs/3.5.0/firebase-messaging.js')

/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
*/
firebase.initializeApp({
  'messagingSenderId': '654404571217'
})

/*
Retrieve an instance of Firebase Messaging so that it can handle background messages.
*/
const messaging = firebase.messaging()
messaging.setBackgroundMessageHandler(function(payload) {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here
  const notificationTitle = 'Background Message Title';
  const notificationOptions = {
    body: 'Background Message body.',
    icon: '/firebase-logo.png'
  };

  return self.registration.showNotification(notificationTitle,
      notificationOptions);
});

function showNotificationPermission () {
  messaging.requestPermission()
    .then(() => {
      console.log('Notification permission granted.')
    })
    .catch((err) => {
      console.log('Unable to get permission to notify. ', err)
    })
}