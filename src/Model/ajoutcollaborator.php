<?php
require '../../vendor/autoload.php';
use \App\Classes\Database;

$databse = new Database();
$pdo = $databse->pdo;


if (!empty($_POST)){
    $query = $pdo->prepare("INSERT INTO collaborateur (id, nom, prenom, code_P, code_A, salaire, dateDebut, dateFin) 
                                VALUES (?,?,?,?,?,?,?,?)");
   
   $query->execute([(int)$_POST['id'],
                     $_POST['name'] ,
                     $_POST['prename'],
                     $_POST['codeP'],
                     $_POST['codeA'],
                     (int) $_POST['salaire'],
                     $_POST['dateD'],
                     $_POST['dateF']
]);
}

$requete = "SELECT * FROM collaborateur";
$condition = null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Form</h2>
        
        <form action="" method="post">
            <div class="form-group">
                <label for="id">id:</label>
                <input type="number" class="form-control" id="id" name="id" value="" required="">
            </div>
            <div class="form-group">
                <label for="name">Nom:</label>
                <input type="text" class="form-control" id="name" name="name" value="" required="">
            </div>
            <div class="form-group">
                <label for="prename">Prenom:</label>
                <input type="text" class="form-control" id="prename" name="prename" value="" required="">
            </div>
            <div class="form-group">
                <label for="codeP">Code Produit:</label>
                <input type="text" class="form-control" id="codeP" name="codeP" value="" required="">
            </div>
            <div class="form-group">
                <label for="codeA">Code Activite:</label>
                <input type="text" class="form-control" id="codeA" name="codeA" value="" required="">
            </div>
            <div class="form-group">
                <label for="salaire">Salaire:</label>
                <input type="number" class="form-control" id="salaire" name="salaire" value="" required="">
            </div>
            <div class="form-group">
                <label for="dateD">Date debut:</label>
                <input type="date" class="form-control" id="dateD" name="dateD" value="" min="<?php echo date('Y-m-d'); ?>" required="">
            </div>
            <div class="form-group">
                <label for="dateF">Date fin:</label>
                <input type="date" class="form-control" id="dateF" name="dateF" value="" min="<?php echo date('Y-m-d'); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

<script>
$(document).ready(function() {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();

    if(dd<10) {
        dd = '0'+dd
    }

    if(mm<10) {
        mm = '0'+mm
    }

    today = yyyy + '-' + mm + '-' + dd;
    document.getElementById("dateD").setAttribute("min", today);
    document.getElementById("dateF").setAttribute("min", today);

    $("#dateD").on("change", function() {
        var dateD = new Date(this.value);
        var dateF = new Date($("#dateF").val());
        if(dateD > dateF) {
            alert("Date debut must be before date fin.");
            this.value = "";
        }
    });

    $("#dateF").on("change", function() {
        var dateF = new Date(this.value);
        var dateD = new Date($("#dateD").val());
        if(dateF < dateD) {
            alert("Date fin must be after date debut.");
            this.value = "";
        }
    });
});
</script>