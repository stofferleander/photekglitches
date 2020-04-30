<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<ul>
    <br>
    <br>
    <br>
    <li><a  href="index.html">Home</a></li>
    <li><a href="#news">News</a></li>
    <li><a class="active" href="contactform.php">Contact</a></li>
    <li><a href="#about">About</a></li>
  </ul>
    <nav class="navbar navbar-dark bg-primary">
        <a href="#" class="navbar-brand">Contact Us</a>
    </nav>
    <div class="container mt-3 card card-body p-4">
        <h4 class="text-center">Contact Us</h4>
        <div class="form-group">
            <label for="Name">Full Name</label>
            <input type="text" name="Full Name" id="userFullName" class="form-control">
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="Email" name="Email" id="userEmail" class="form-control">
        </div>
        <div class="form-group">
            <label for="Message">Message</label>
            <textarea name="Message" id="userMessage" class="form-control"></textarea>
        </div>

        <button id="submit" class="btn btn-primary">Submit</button>

    </div>
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-firestore.js"></script>
    <script src="firebaseapp.js"></script>
</body>

</html>