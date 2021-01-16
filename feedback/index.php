<html>
<head>
    <title>SERENE-Feedback</title>
    <link href="hotel-white.png" rel="icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<a href="http://localhost/home.html" class="logo"><img src="SENERE.png" alt="" class="img-fluid"></a>
<body style="background-color: #5c5b5a;">
    <div class="container"><br><br>
        <h3 style="color: #ffffff;">Feedback Form</h3>
        <form action="form-process.php" method="POST">
            <div class="form-group">
                <label for="firstname" style="color: #ffffff;">Firstname</label>
                <input type="text" name="firstname" id="firstname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lastname" style="color: #ffffff;">Lastname</label>
                <input type="text" name="lastname" id="lastname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone" style="color: #ffffff;">Phone</label>
                <input type="tel" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email" style="color: #ffffff;">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message" style="color: #ffffff;">Message</label>
                <input type="text" name="message" id="message" class="form-control" required>
            </div>
            <div class="form-group">
        <button class="btn btn-success" type="submit">Submit</button>
        <button class="btn btn-danger" type="reset">Reset</button>
    </div>
        </form>
    </div>
</body>

</html>