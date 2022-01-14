<?php
    if(isset($_GET['submit'])){
        echo "the data have been send ";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styledsh.css">
    <title>Document</title>
</head>
<body>
    <div class="profil">
        <div class="head">
            <div class="pic-profil">
                <img src="./image/doc.png" alt="">
            </div>
            <h2>Rahbani Rafik</h2>
        </div>
        <div class="deconnection">
            <a href="#">Se deconnecter</a>
        </div>
    </div>
    <div class="dash">
        <div class="table-div">
            <table>
                <thead>
                    <tr>
                        <th>Nom et prenom</th>
                        <th>La date du rendez-vous </th>
                        <th>decription de la maladie</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody id="tableau">
                    <!-- <tr>
                        <td>Ali Latifi</td>
                        <td>08/11/2001</td>
                        <td>decription de la maladie</td>
                        <td class="edit-part">
                            <div class="supp"><p>-</p></div>
                            <div class="edit"><p>e</p></div>
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
        <form action="" method="">
            <div class="form">
                <div class="pers">
                    <label for="">
                        Nom: 
                    </label>
                    <input type="text" name="nom" id="persInfo" >
                    <label for="">
                        Prenom: 
                    </label>
                    <input type="text" name="prenom" id="persInfo">
                    <label for="">
                        Date de rendez-vouz: 
                    </label>
                    <input type="date" name="date" id="persInfo" >
                </div>
                <div class="descr">
                    <div class="message">
                        <label for="">Description:</label><br>
                        <textarea name="description" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <input type="submit" class="submit" value="Ajouter">
                </div>
            </div>
        </form>
    </div>
    
    <script src="dashbordJS.js"></script>
</body>
</html>