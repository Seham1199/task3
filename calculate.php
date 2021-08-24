<html>
 <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <title>Caculator</title>
 </head>

  <body>
   <div class="container mt-5">
       <div class="row">
           <div class="col-md-6 offset-md-3">
               <div class="card">
                   <div class="card-body">
                       <h5 class="card-title md-3 text-center">Caculator</h5>
                       <form method="GET" action="handle_calculate.php">
                           <div class="mb-3">
                               <label class="form-label">X</label>
                               <input type="number" class="form-control" name="x">
                           </div>
                           <div class="mb-3">
                               <label class="form-label">Y</label>
                               <input type="number" class="form-control" name="y">
                           </div>
                           <div class="mb-3">
                               <label class="form-label">Operation</label>
                               <select class="form-select" name="operation">
                                     <option value="add"selected>+</option>
                                     <option value="sub">-</option>
                                     <option value="mul">*</option>
                                     <option value="div">/</option>
                               </select>
                           </div>
                           <button type="submit" class="btn btn-primary mb-3" name="submit">Calculate</button>
                       </form>

                     <?php  if(isset($_GET['result'])){ ?>
                       <div class="alert alert-success">
                           <p class="mb-0">Result = <?php echo $_GET['result']; ?></p>
                       </div>
                      <?php } ?>
                   </div>
               </div>
           </div> 
       </div>
   </div>




<script src="js/bootstrap.min.js"></script>
  </body>
</html>