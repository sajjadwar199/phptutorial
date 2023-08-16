<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-info mb-3">
                    <div class="card-header" style="
     
    BACKGROUND-COLOR: #ffc107;
">
                        <?php
                        if (isset($_GET['id']) && $_GET['id'] != '') {


                            include 'crud.php';
                            $id = intval($_GET['id']);
                            $crud = new crud();
                            $row = $crud->SelectById($id);
                            if ($row != '') {
                        ?>
                                <a href="index.php" class="btn btn-light float-right ">Back <i class="fa fa-undo"></i> </a>
                                </a>
                                <h6 style="color:black;">Update User</h6>
                    </div>
                    <div class="card-body">
                        <?php
                                //  validation  message errors
                                if (isset($_SESSION['error_validation_messages']) && $_SESSION['error_validation_messages'] != '') {

                                    foreach ($_SESSION['error_validation_messages'] as $errors) {
                                        echo '  <div class="alert alert-dismissible alert-warning text-right direction-rtl" role="alert">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>' . $errors . '</strong>.
                              </div>';
                                    }
                                    $_SESSION['error_validation_messages'] = '';
                                };

                        ?>
                        <form action="crud.php?action=update&&id=<?php echo $row['id']; ?>" method="post">
                            <div class="form-group">
                                <label for="username">username:</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>" id="username">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" id="email">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-info">Update</button>
                        </form>
                <?php }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>