<!DOCTYPE html>
 <html lang="en">
     <head>
           <meta charset="UTF-8">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <meta http-equiv="X-UA-Compatible" content="ie=edge">
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
          <title>Document</title>
     </head>
   <body>
       <div class="container">
       <h1>Nouvel étudiant</h1>
          <form action="store.php" method="post">
               <div class="form-group row">
                   <div class="col-xs-4">
                <label for="firstname">Firstname</label>
                <input type="text" name="firstname" id="fn" class="form-control" placeholder="firstname goes here">
                   </div>&nbsp;&nbsp;
                   <div class="col-xs-4">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="ln" class="form-control" placeholder="lasttname goes here">
                  </div>
              </div>
               <div class="form-group row">
                  <div class="col-xs-4">
               <label for="email">Email</label>
               <input type="email" name="email" id="em" class="form-control" placeholder="name@example.com">
                   </div>&nbsp;&nbsp;
                   <div class="col-xs-4">
               <label for="phone">Phone</label>
               <input type="tel" name="phone" id="ph" class="form-control" placeholder="ex:55245639">
                    </div>
               </div>
              <input type="submit" value="Enregitrer" class="btn btn-primary">
              <input type="reset" value="Annuler" class="btn btn-secondary">
     </form>
   </div>
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>