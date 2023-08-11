<html lang="en">
 

 <head>

   <meta charset="utf-8">

   <meta name="viewport" content="width=device-width, initial-scale=1">

   <meta name="description" content="">

   <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

   <meta name="generator" content="Hugo 0.72.0">

   <title>php flashmessage</title>

   <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">

   <!-- Bootstrap core CSS -->

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

   <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

   <style>

     .msg-btn {

       margin-left: 5px;

     }

   </style>

 </head>

 <body style="padding:30px; background-color:#f2f4f6 !important;">
   <?php
   include 'setFlashmessage.php';
   ?>
   <h2 align="center " class="alert alert-success"> php flash message using sweetalert with bootstrap in oop by skmcoder </h2>

   <div class="row" style="padding:60px;  ">

     <div class="col-md-1"></div>

     <div class="col-md-10 text-center">

       <form action="index.php" method="post">

         <button type="submit" name="success" class=" btn btn-success msg-btn">success message</button>

         <button type="submit" name="error" class="  msg-btn  btn btn-danger">error message</button>

         <button type="submit" name="warning" class=" msg-btn btn btn-warning">warning message</button>

         <button type="submit" name="question" class="  msg-btn  btn btn-primary">question message</button>

         <button type="submit" name="info" class=" msg-btn btn btn-info">info message</button>
       </form>
     </div>
     <div class="col-md-1"></div>
   </div>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script>
     <?php
     //print flashmessage
     $flashMessage->printMessage();
     ?>
   </script>
 </body>
 </html>

