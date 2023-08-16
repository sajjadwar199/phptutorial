<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">

  <title>PHP CRUD OOP using Datatables server side ,PDO and Bootstrap 5
  </title>

  <!-- datatables css -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

  <!-- Bootstrap core CSS -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="vsc-initialized">
  <br>
  <h3 align="center" style="font-weight: revert; margin-top:3px;color:color(prophoto-rgb 0.47 0.52 0.53);">PHP CRUD OOP using Datatables server side ,PDO and Bootstrap 5 </h3>

  <div id="gtx-trans" style="position: absolute; left: 847px; top: 35px;">
    <div class="gtx-trans-icon"></div>
  </div>

  <h4><a href="add.php" type="button" class="btn btn-info" style="
    margin-left: 31px;margin-bottom: 4px;
">
      Add User

    </a></h4>


  <div class="container">
    <?php
    //for show add message 
    session_start();
    if (isset($_SESSION['add_message'])) {

      echo  $_SESSION['add_message'];
      $_SESSION['add_message'] = '';
    };

    if (isset($_SESSION['delete_message'])) {

      echo  $_SESSION['delete_message'];
      $_SESSION['delete_message'] = '';
    };
    ?>

    <table id="example" class="table  " style="width:100%">
      <thead class="table-info">
        <tr>
          <th>username </th>
          <th>email</th>
          <th> </th>

        </tr>
      </thead>
      <tbody>

      <tfoot class="table-info">
        <tr>
          <th>username </th>
          <th>email</th>
          <th> </th>

        </tr>
      </tfoot>
      </tbody>

    </table>
  </div>

  <!--  datatables js  -->
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable({
        "searching": true,
        "processing": true,
        "serverSide": true,
        "ajax": "server_side.php"
      });
    });
  </script>
  <!-- sweetalert2 -->

</body>

</html>