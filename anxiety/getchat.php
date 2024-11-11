<?php
include('session.php');
$ip = $_GET['ipaddress'];
$sid = $_GET['sid'];
$cekChat = mysqli_query($conn, "SELECT * FROM `tb_chat` WHERE ipaddress = '$ip' AND sessionid = '$sid'") or die(mysqli_error($conn));
$cc = mysqli_fetch_array($cekChat);
$adminid = $cc['adminid'];
$userid = $cc['userid'];
if ($cc['adminid'] == '') {
  $image = 'avatar.webp';
  $agenid = 'Support Agent';
} else {
  $getAgen = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE user = '$adminid'") or die(mysqli_error($conn));
  $ga = mysqli_fetch_array($getAgen);
  $image = $ga['image'];
  $agenid = $ga['full_name'];
}
$sql_chat1 = mysqli_query($conn, "SELECT * FROM `tb_chat_respon` WHERE ipaddress = '$ip' AND sessionid = '$sid' ORDER BY cuid ASC") or die(mysqli_error($conn));
while ($sc1 = mysqli_fetch_array($sql_chat1)) {
  $usersID = $sc1['userid'];
  $deskripsi = $sc1['content'];
  $excerpt_length = 20; // jumlah kata dalam excerpt
  $explode = explode(' ', strip_tags($deskripsi));
  $excerpt = implode(' ', array_slice($explode, 0, $excerpt_length));
  if ($userid == $usersID) {
?>
    <li class="chat-message">
      <div class="d-flex overflow-hidden">
        <div class="user-avatar flex-shrink-0 me-3">
          <div class="avatar avatar-sm">
            <img src="<?= $urldomain; ?>/upload/avatar/avatar.webp" alt="Avatar" class="rounded-circle" />
          </div>
        </div>
        <div class="chat-message-wrapper flex-grow-1">
          <div class="chat-message-text">
            <?php
            if ($sc1['jenis'] == 0) {
              echo '<p class="mb-0">' . $sc1['content'] . '</p>';
            } else {
              echo $sc1['content'];
            }
            ?>
          </div>
          <div class="text-muted mt-1">
            <small><?= date('H:i', strtotime($sc1['created_date'])); ?></small>
          </div>
        </div>
      </div>
    </li>
  <?php
  } else {
  ?>
    <li class="chat-message chat-message-right">
      <div class="d-flex overflow-hidden">
        <div class="chat-message-wrapper flex-grow-1">
          <div class="chat-message-text">
            <p class="mb-0"><?= $sc1['content']; ?></p>
          </div>
          <div class="text-end text-muted mt-1">
            <i class="ti ti-checks ti-xs me-1 text-success"></i>
            <small><?= date('H:i', strtotime($sc1['created_date'])); ?></small>
          </div>
        </div>
        <div class="user-avatar flex-shrink-0 ms-3">
          <div class="avatar avatar-sm">
            <img src="<?= $domainutama; ?>/upload/avatar/<?= $u['image']; ?>" alt="Avatar" class="rounded-circle" />
          </div>
        </div>
      </div>
    </li>
<?php }
} ?>