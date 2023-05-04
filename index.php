<!-- contact.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- <h1>Contact Form</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <button><a href="login.html">Admin Login</a></button> -->


    <div class="content">
    
    <div class="container">

      
      <div class="row justify-content-center">
        <div class="col-md-10">
          
          <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">

              <h2 class="mb-5 display-3 font-weight-bold">Fill the form. <br> It's easy.</h2>

              <form class="border-right pr-5 mb-5" method="post" id="contactForm" name="contactForm" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <input type="submit" name= "submit" value="Submit" class="btn btn-primary rounded-0 py-2 px-4">
                  </div>
                </div>
              </form>

              <?php
        // Include the config.php file
        require_once 'config.php';

        // Handle contact form submission
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            // Perform a MySQL query to insert the contact details into the database
            $sql = "INSERT INTO contact_details (name, email, message) VALUES ('$name', '$email', '$message')";
            if ($conn->query($sql) === TRUE) {
                echo "Contact details submitted successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

    // Close the database connection
    $conn->close();
    ?>
              <div id="form-message-warning mt-4"></div> 
              <div id="form-message-success">
              </div>

            </div>
            <div class="col-lg-4 ml-auto">
              <h3 class="mb-4">Let's talk about everything.</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil deleniti itaque similique magni. Magni, laboriosam perferendis maxime!</p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
        </div>  
        </div>
      </div>
  </div>

    <div class="d-flex justify-content-center pt-5 "> <button><a  button style="color:black;" href="login.html"> <b>Admin Login </b>
        </a></button> 
    </div>

</body>

</html>