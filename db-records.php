<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>RECORD FORM</title>
  </head>
  <body>
  <div class="container-fluid">

    <?php
    include 'db-model.php';
  
    ?>

      <div class="row">
      
      <?php 
      
      if($msg != ''): ?><div class="col-md-12 mt-5 alert text-center <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
      <?php endif; ?>
      
        <div class="col-md-12 mt-5">
          <h1 class="text-center">RECORD FORM</h1>
          <hr style="height: 1px; color: #333; background-color: black">
        </div>
      </div>
      <div class="row">

        <div class="col-md-12 mx-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile No.</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        
                        $model = new Model();
                        $rows = $model->fetch();
                        $i = 1;
                        if (!empty($rows)) {
                            foreach($rows as $row) {
                    ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td class="text-success capital"><?php echo $row['name']; ?></td>
                        <td class="text-primary"><?php echo $row['email']; ?></td>
                        <td class="text-success"><?php echo $row['mobile']; ?></td>
                        <td class="text-primary capital"><?php echo $row['address']; ?></td>
                        <td> 
                            <a href="db-read.php?id=<?php echo $row['id']; ?>" class="badge badge-info">Read</a>
                            <a href="db-delete.php?id=<?php echo $row['id']; ?>" class="badge badge-danger">Delete</a>
                            <a href="db-edit.php?id=<?php echo $row['id']; ?>" class="badge badge-success">Edit</a>
                        </td>
                    </tr>


                    <?php
                      }
                    }

                    $conver = strtoupper('name');

                    if ($conver) {
                      $capit = strtolower($conver);
                      ucwords($capit);
                    }
                    ?>
                </tbody>
            </table>
        </div>
       </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>