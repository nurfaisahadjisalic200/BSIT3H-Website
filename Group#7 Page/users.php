<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
<title>Home</title>
<link rel="stylesheet" href="survey.css"> 
<link rel="stylesheet" href="group.css"> 
</head>

<body>

<?php include('header.php'); ?>

<h1 class="title">Join us!</h1>
<div class="form-container">
  <form id="inputFormData" method="POST" action="">
    <div>
      <input type="text" placeholder="Name" name="name" id="name" required>
      <input type="text" placeholder="User Name" name="username" id="username" required>
      <input type="password" placeholder="Password" name="password" id="password" required>
      <input type="tel" placeholder="Phone" name="phone" id="phone" pattern="[0-9]{10}" required>
      <label>
        <input type="checkbox" name="remember_me" id="remember_me"> Remember Me
      </label>
      <input type="submit" id="submit" value="Submit">
    </div>
  </form>
  <div id="ajax-data"></div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#inputFormData').on('submit', function(e) {
      e.preventDefault();

      $.ajax({
        url: 'process_form.php',
        type: 'POST',
        data: $(this).serialize(),
        success: function(response) {
          $('#ajax-data').html(response);
        },
        error: function() {
          alert('Error processing form');
        }
      });
    });
  });
</script>

<?php include('footer.php'); ?>

</body>
</html>