<html lang="en">
<!doctype html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
     <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
     <meta name="generator" content="Hugo 0.72.0">
     <title>validation php </title>
     <!-- Bootstrap core CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 </head>

 <body style="background-color:#f8f9fa;">
     <br>
     <h1 style="font-weight:bold;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif" align="center"> validation using php oop library with bootstrap by skmcoder </h1>

     <Div class="container   ">
         <form action="index.php" method="post">
             <?php
                //  start validation check 
                /*
        Library by skmcoder
     use more  validation options of Library
      1- max                for example    max:20
      2- min                for example    min:10
      3- require                
      4- url
      5- number
      6- email
      7- eng 
      8- date
      9- time24
     */
                include 'validator.class.php';
                if (isset($_POST['check'])) {
                    $validator = new validator(
                        [
                            "require" => ["require"],
                            "number" => ["number", "min:10"],
                            "english" => ["english", 'max:8' ],
                            "time24" => ["time24"],
                            "url" => ["url"],
                            "email" => ["email"]
                        ],
                    );


                    if ($validator->test_validate() == true) {
                        //if not find errors 
                        //write your code here /
                        echo  '<h1  style="color:green"> Input verified successfully, no errors
                        </h1> ';
                    } else {
                        //if find errors 
                        $validator->errors_validate();
                    }
                }

                ?>
             <div class="form-row">
                 <br>
                 <div class="form-group col-md- ">
                     <input type="text" class="form-control" autocomplete="off" name="require" placeholder="require    ">
                 </div>
                 <br>
             </div>
             <div class="form-group">
                 <input type="text" class="form-control" autocomplete="off" name="number" placeholder="number and min 10 char   check   ">
             </div>


             <br>
             <div class="form-group">
                 <input type="text" class="form-control" autocomplete="off" name="english" placeholder="english  and max 8 char   check  ">
             </div>
             <br>
             <div class="form-group">
                 <input type="text" class="form-control" autocomplete="off" name="time24" placeholder="time24 check  ">
             </div>
             <br>
             <div class="form-group">
                 <input type="text" class="form-control" autocomplete="off" name="url" placeholder="url  check  ">
             </div>
             <br>
             <div class="form-row">
                 <div class="form-group col-md- ">
                     <input type="text" class="form-control" autocomplete="off" name="email" placeholder="email check   ">
                 </div>
                 <br><br>
                 <h3 align="center"> <button type="submit" name="check" class="btn btn-info">check</button>
                 </h3>
         </form>
     </Div>
 </body>

 </html>