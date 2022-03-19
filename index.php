<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance - <?php echo $title?></title>
  
</head>
<body>

<div class="container">


<?php 
$title ='index';
require_once 'includes/header.php'; 
require_once 'db/conn.php'; // creates blank page

?>

    <h1 class="text-center">Conference Registration</h1>

    <form  method="post" action="success.php">
  <div class="mb-3">
  <div class="form-group">
    <label for="firstname" class="form-label" > First Name</label> 
    <input type="text" class="form-control" id="firstname" name="firstname">    
    </div>     

    <div class="form-group">
    <label for="lastname" class="form-label" id="lastname" >
     Last Name</label>
    <input type="text" class="form-control" id="lastname" name="lastname"> 
    </div>

   


    <div class="form-group">
   
    <label class="expertise" for="autoSizingSelect">Specialty</label>
    <select class="form-control" id="specialty" name="specialty">
      <option selected>Select....</option>
      <option>Database admin</option>
      <option>AWS</option>
      <option>Security</option>
      <option>Cisco</option>
      <option>Linux Master</option>
      <option>Python</option>
    </select>

    
  </div>

  <div class="form-group">
    <label for="email" class="form-label" id="email"
     aria-describedby="emailHelp">
    Email</label>
    <input type="text" class="form-control"  id="email" name="email" placeholder="Your email already belongs to: 高级持续性威胁 40">
    <small id="emailhelp" class ="form-text text-muted">
    </small>
    </div>

    <div class="form-group">
    <label for="phone" class="form-label" id="phone"  helvetica-describedby="phoneHelp">
    Contact Number</label>
    <input type="text" class="form-control"  id="email" placeholder="Enjoy the late night phishing!">
    <small id="phonehelp" class ="form-text text-muted">
    </small>
    </div>

    <div class="form-group">
    <label for="floatingTextarea">Short BIO</label>
  <textarea class="form-control" id="bio" name="bio"  placeholder="Tell us about yourself!"></textarea>
  
</div>
</br>
    <button class="btn btn-primary" type="submit">Register</button>
  
  </div>

 

</form>
</br>
</br>
</br>
<?php require_once 'includes/footer.php'; ?>
</div>
</body>
</html>