<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width" device="device-width" initial-scale="1.0">
    <title>Contact page</title>
</head>

<body>

<img src="https://www.top13.net/wp-content/uploads/2015/10/perfectly-timed-cat-photos-funny-cover.jpg" width="50%" height="50%"/>
<h3> Contact me</h3>
    <form action="processform.php" method="POST" enctype="multipart/form-data">
    <p>
        <label for="first_name">First Name </label> <br> 
        <input type="text" name="first_name" placeholder="Enter Your First Name" />  <br> <br>
        </p>
    <p>
    <label for=last_name>Last Name:</label> <br> 
    <input type="text" name="last_name" placeholder="Enter Your Last Name" /> <br> <br>
        </p>
    <p>
    <label for="gender"> Gender <br>
    <input type="radio" name="Gender"> Female  
    <input type="radio" name="Gender"> Male   <br>
        </p>
    <p>
    <label for="email">Email address</label> <br>
    <input type="email" name="email" placeholder="Enter Your Email" required/> <br> <br> 
        </p>
    <p> Your message <br>
        <textarea> </textarea> <br>
    </p>     
    <br><input type="radio"> By checking this box you agree to the terms and condition. <br>
    
    <br> <button type="submit">Send Message</button>
    </form>
</form>
</body>
</html>