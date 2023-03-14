<?php 
/*$nom=htmlspecialchars($_POST['nom']);
$prenom=$_POST['prenom'];
$date=$_POST['date'];
$lieu=$_POST['lieu'];
$email=$_POST['email'];
$pass=sha1($_POST['password']);
$db=new PDO('mysql:host:localhost;dbname=garderie','');
$frd=$db->prepare("SELECT * FROM user");
$sol=$frd->execute();
var_dump($sol) ;*/
$servername="localhost";
$username="root";
$password="";
$dbname="garderie";
try{
    $conn=new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "la connexion a echoué:" . $e->getMessage();
}
if(isset($_POST['envoyer'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $date=$_POST['date'];
    $lieu=$_POST['lieu'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $user = ("INSERT INTO `user`(`Nom`, `Prenom`, `Date de naissance`, `Lieu de naissance`, `Email`, `Mot de passe`) VALUES (:nom, :prenom, :date, :lieu, :email, :password)");
    $stmt=$conn->prepare($user);

    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':lieu', $lieu);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
}
?>