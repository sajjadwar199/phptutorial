<!doctype html>
 <html lang="en">

 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="generator" content="Hugo 0.72.0">
   <title>server-side-datatable</title>

   <!-- datatable css  -->
   <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" />

   <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 </head>

 <body style="background-color:#fdfdfd;">
   <br>
   <h1 align="center" style="color:color(srgb 0.52 0.59 0.7);font-weight:bold;">Datatables server side processing  with PHP and MYSQL </h1>
   <br>
   <div class="container">
     <table id="example" class="display" style="width:100%">
       <thead>
         <tr>
           <th>First name</th>
           <th>Last name</th>
           <th>email</th>
           
         </tr>
       </thead>

     </table>
   </div>

   <!-- datatable js -->
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

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
 </body>

 </html>
