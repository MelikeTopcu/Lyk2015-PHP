<?php
session_start();
if(!isset($_SESSION['finishTime'])){
    header("Location: quiz.php");
}
$totalTime = ($_SESSION['finishTime']- $_SESSION['startTime']);
if($_SESSION['totalQuestionCount']!=0) {
    $aQuestionPoint = 100 / $_SESSION['totalQuestionCount'];

    $usersPoint = $aQuestionPoint * $_SESSION['correctAnswerCount'];
}else $usersPoint=0;
?>
<?php include('inc/header.php') ?>
    <div class="well text-center">
        <h1>Sonuç</h1>
        <ul class="list-group list-unstyled">
            <li>Toplam Soru: <strong><?=$_SESSION['totalQuestionCount'];?></strong></li>
            <li>Doğru Cevap: <strong><?=$_SESSION['correctAnswerCount'];?></strong></li>
            <li>Süre: <strong><?=$totalTime;?> sn</strong></li>
            <li>Puan: <strong><?=number_format($usersPoint, 1, ',', '.');?></strong></li>
        </ul>
        <a href="destroy.php" class="btn btn-primary">Testi Yeniden Başlat</a>
        <a href="admin/add-question.php" class="btn btn-primary">Soru Ekle</a>
    </div>
<?php include('inc/footer.php'); ?>