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
    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">READ FORM</h1>
          <hr style="height: 1px; color: #333; background-color: black">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">
            <?php 
                include 'db-model.php';
                $model = new Model();
                $id = $_REQUEST['id'];
                $row = $model->fetch_single($id);

                if (!empty($row)) {
                    # code...
              
            ?>



            <div class="card">
                <div class="card-header text-center">
                   SINGLE RECORD
                </div>
                <div class="card-body">
                <p>Name:: <?php echo $row['name']; ?></p>
                <p>Email:: <?php echo $row['email']; ?></p>
                <p>Mobile No.:: <?php echo $row['mobile']; ?></p>
                <p>Address:: <?php echo $row['address']; ?></p>
                </div>
            </div>
                <?php
                 }else {
                     echo "No data";
                 }
                ?>

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