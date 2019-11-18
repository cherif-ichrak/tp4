<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=".\bootstrap-4.3.1-dist\css\bootstrap.css">
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
                    include 'etudiants.class.php';
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
                      </tr>
                      <?php
                    }
            
                    ?>  
            </table>
    </div>
</body>
</html>