<?php require('dbConn.php') ?>
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
      
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h1>Students
              <a href="create-student.php" class="btn btn-warning float-end">Create</a>
            </h1>
            
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Course</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

              <?php 
              
              $query = "SELECT * FROM students";
              $query_run = mysqli_query($con, $query);

              if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $student){
                  //echo $student['name'];
                  ?>
                    <tr>
                      <td><?= $student['id']; ?></td>
                      <td><?= $student['name']; ?></td>
                      <td><?= $student['email']; ?></td>
                      <td><?= $student['phone']; ?></td>
                      <td><?= $student['course']; ?></td>
                      <td>
                        <a href="student-edit.php?id=<?= $student['id']; ?>" class="btn btn-success">Edit</a>
                        <form action="api.php" method="post" class="d-inline">
                          <button type="submit" name="delete_student" value="<?= $student['id'];?>" class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                  <?php
                }
              }
              
              
              ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      

    </div>
  </div>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
<?php mysqli_close($con); ?>