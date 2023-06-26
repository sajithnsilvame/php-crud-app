<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <div class="container mt-4 align-items-center">
    
    <div class="row">
      <div class="col-md-3"></div>
 
      <div class="col-md-6">
        <?php include_once('notification.php'); ?>
        <div class="card">
          <div class="card-header">
            <h1>Create Student
              <a href="index.php" class="btn btn-danger float-end">Back</a>
            </h1>
            
          </div>
          <div class="card-body">
            <form action="api.php" method="POST" id="createForm">

              <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="John Doe">
              </div>

              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="john@gmail.com">
              </div>

              <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" class="form-control" maxlength="10" name="phone" id="phone" placeholder="+94-xxx-xxx-xxx">
              </div>

              <div class="mb-3">
                <label class="form-label">Course</label>
                <input type="text" class="form-control" name="course" id="course" placeholder="HNDIT">
              </div>

              <button type="submit" class="btn btn-primary" name="save_student">Create</button>

            </form>
          </div>
        </div>
      </div>

      <div class="col-md-3"></div>

    </div>
  </div>

  <script>
    // Form validation using JavaScript
    document.getElementById('createForm').addEventListener('submit', function(event) {
      var nameInput = document.getElementById('name');
      var emailInput = document.getElementById('email');
      var phoneInput = document.getElementById('phone');
      var courseInput = document.getElementById('course');

      if (nameInput.value.trim() === '' || emailInput.value.trim() === '' || phoneInput.value.trim() === '' || courseInput.value.trim() === '') {
        event.preventDefault(); // Prevent form submission
        alert('Please fill in all fields.');
      }
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
  </script>
</body>

</html>