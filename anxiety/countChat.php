<?php
include('session.php');
$today = date('Y-m-d');

$sql_chat1 = mysqli_query($conn, "SELECT * FROM `tb_chat_respon` WHERE created_date LIKE '$today%' AND status = 0") or die(mysqli_error($conn));
$scc = mysqli_num_rows($sql_chat1);
if ($scc > 0) {
    echo '<script>play_sound();</script>';
    echo $scc;
} else {
    echo $scc;
}
?>
<script>
    function play_sound() {
        var audioElement = document.createElement('audio');
        audioElement.setAttribute('src', '<?= $urldomain; ?>/assets/audio/notifikasi.mp3');
        audioElement.setAttribute('allow', 'autoplay');
        audioElement.setAttribute('autoplay', 'autoplay');
        audioElement.load();
        audioElement.play();
    }
</script>