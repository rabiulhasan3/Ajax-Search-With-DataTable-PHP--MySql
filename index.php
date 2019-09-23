<?php
  include 'database_connection.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-6 offset-md-4">
          <form action="">
            <div class="row">
              <div class="col-md-9">
                <select name="student_name" id="student_name" class="form-control">
                  <option value="">Select Student</option>
                  <?php
                    $query = mysqli_query($conn,"SELECT * FROM result");
                    while($row = mysqli_fetch_array($query)){
                    ?>
                      <option value="<?php echo $row['id'] ?>"><?php echo $row['student_name']; ?></option>
                    <?php 
                    }
                  ?>
                </select>
              </div>
              <div class="col-md-3">
                <input type="button" value="click" id="show" class="btn btn-success">
              </div> 
            </div>
          </form>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
          <table class="table table-bordered" id="myTable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody class="student_info">
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>