<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success!</title>
    <?php 
$title ='success';
require_once 'includes/header.php'; ?>
</head>
<body>
    
        <h2 class="text-center text-success">
        Congratulations!
        <?php 
        echo $_POST['firstname'] . " ". $_POST['lastname'];
        ?>
        Your registration is complete!
        <h3 class="text-center">A confirmation email will be sent to 
</br>
            <?php 
            echo $_POST['email']?>
        </h3>

 
        </h2>
<div class="container">
        <div class="card" style="width: 18rem;">
  <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.c5nqp29wmz-xHXP2AkLlnAHaEK%26pid%3DApi&f=1" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">
      
</br>
 <?php echo $_POST['firstname'].' '.$_POST['lastname'];?>
</br>
<h6>
 <?php echo $_POST['specialty'];?>
 </h6>
    <p class="card-text"><h6>
        <?php echo $_POST['bio']; ?>
    </h6></p>
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
  </div>
</div>
</br>
</br>
</br>
<?php require_once 'includes/footer.php'; ?>
</body>
</html>