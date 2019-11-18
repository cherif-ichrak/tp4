<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<title>Document</title>
    <title>Document</title>
</head>
<body>
    <div class="container py-3">
        <div class="jumbotron">
            liste des etudiants
        </div>
            <table class="table table-primary">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>E-mail</th>
                    <th>Phone</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    include 'classes/etudiants.class.php';
                    $etudiant = new etudiants;
                    $listEtud =$etudiant->readAllEtudiants;
                    while($data = $listEtud->fetch())
                    {
               ?>    
                      <tr>
                                  <td><?=$data['id']?></td>
                                  <td><?=$data['First Name']?></td>
                                  <td><?=$data['Last Name']?></td>
                                  <td><?=$data['E-mail']?></td>
                                  <td><?=$data['Phone']?></td>
                                  <td><a href="edit.php ?id='.$data['id'].'"><i class="fas fa-user-edit">Editer</i></a>&nbsp;&nbsp;
                                  <a href="delete.php ?id='.$data['id'].'"><i class="fas fa-user-times">Supprimer</i></a></td>;
                      </tr>
                      <?php
                    }
            
                    ?>  
                     </tbody>
            </table>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>