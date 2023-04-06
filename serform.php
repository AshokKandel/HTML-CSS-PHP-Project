
<!DOCTYPE html>
<html>
<head>
  <title>Contact Form with Background Photo</title>
  <style>
    /* Set background photo */
    body {
      background-image: url('aa.jpg');
      background-size: cover;
      background-position: center center;
      background-attachment: fixed;
    }
    
    /* Center form vertically */
    .form-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    
    /* Style form */
    form {
     /* background-color: #fff;*/
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      max-width: 500px;
      width: 100%;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    label {
      display: block;
      font-size: 18px;
      font-weight: 600;
      margin-bottom: 10px;
    }
    
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea,
    select {
      display: block;
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: none;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    
    input[type="submit"] {
      background-color: #4caf78;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }
  </style>
</head>
<?php 
    // if (isset($_POST)) {
      //   echo "yes";die;
     //}
?>
<body>
  <div class="form-container">
    
    <form action="ser.php" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required placeholder="Enter Name">
      </div>
  
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required placeholder="Enter E-mail">
      </div>
  
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required placeholder="Enter PhoneNo">
      </div>
  
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" required placeholder="Text Your Own Message"></textarea>
      </div>

      <div class="form-group">
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required placeholder="Enter Subject">
      </div>
  
      
   <?php
   
    /*
    if (isset($_FILES['attachment'])){
      echo "<pre>";
      print_r($_FILES);
      echo "</pre>";

      $file_name = $_FILE['attachment']['name'];
      $file_size = $_FILE['attachment']['size'];
      $file_tmp = $_FILE['attachment']['tmp_name'];
      $file_type = $_FILE['attachment']['type'];

    if(move_uploaded_file($file_tmp,"upload-attachment/".$file_name)){
      echo "Successfully uploaded";
    }else{
      echo "Could not upload";

    }

    }
 
    */
  ?>
  
      <div class="form-group">
        <label for="attachment">Attachment: Upload Attachment </label>
        <input type="file" id="attachment" name="attachment">
      </div>
  
      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>
