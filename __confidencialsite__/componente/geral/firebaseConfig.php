<?php
    require_once(__DIR__ . '/../../api/env.php');
?>
<script>
    var firebaseConfig = {
        apiKey: "<?php echo getenv('FIREBASE_API_KEY'); ?>",
        authDomain: "<?php echo getenv('FIREBASE_AUTH_DOMAIN'); ?>",
        databaseURL: "<?php echo getenv('FIREBASE_DATABASE_URL'); ?>",
        projectId: "<?php echo getenv('FIREBASE_PROJECT_ID'); ?>",
        storageBucket: "<?php echo getenv('FIREBASE_STORAGE_BUCKET'); ?>",
        messagingSenderId: "<?php echo getenv('FIREBASE_MESSAGING_SENDER_ID'); ?>",
        appId: "<?php echo getenv('FIREBASE_APP_ID'); ?>",
        measurementId: "<?php echo getenv('FIREBASE_MEASUREMENT_ID'); ?>"
    };
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
</script>
