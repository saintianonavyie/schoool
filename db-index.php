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


    <?php 
    include 'db-model.php';
    $model = new Model();
    $insert = $model->insert();
   
  ?>

       
    <div class="container">
      <div class="row">

      <?php if($msg != ''): ?><div class="col-md-12 mt-5 alert text-center <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
      <?php endif; ?>
      
        <div class="col-md-12 mt-5">
          <h1 class="text-center">LOGIN FORM</h1>
          <hr style="height: 1px; color: #333; background-color: black">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">
   <form action="" method="post">
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control capital">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Mobile No.</label>
            <input type="text" name="mobile" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Address</label>
            <textarea name="address" cols="" rows="3" class="form-control capital"></textarea> 
          </div>
          <div class="form-group">
           <button type="submit" name="submit" class="btn btn-primary"> Submit</button>
          </div>
          </form>
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