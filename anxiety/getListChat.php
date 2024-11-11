<?php
include('session.php');
$today = date('Y-m-d');
$cekChate = mysqli_query($conn, "SELECT * FROM `tb_chat` WHERE status != 2") or die(mysqli_error($conn));
$ccc = mysqli_num_rows($cekChate);
if ($ccc == 0) {
  echo '
    <li class="chat-contact-list-item chat-list-item-0">
      <h6 class="text-muted mb-0">No Chats Found</h6>
    </li>
  ';
} else {
  $cekChat = mysqli_query($conn, "SELECT * FROM `tb_chat_respon` WHERE status != 2 AND userid != 'master' AND jenis = 0 GROUP BY sessionid ORDER BY cuid DESC") or die(mysqli_error($conn));
  while ($cc = mysqli_fetch_array($cekChat)) {
    $sessionid = $cc['sessionid'];
    $getChat = mysqli_query($conn, "SELECT * FROM `tb_chat_respon` WHERE sessionid = '$sessionid' ORDER BY cuid DESC LIMIT 1") or die(mysqli_error($conn));
    $gc = mysqli_fetch_array($getChat);
?>
    <li class="chat-contact-list-item">
      <a class="d-flex align-items-center" href="<?= $urladmin; ?>/chat/?sessionid=<?= $sessionid; ?>">
        <div class="flex-shrink-0 avatar avatar-online">
          <img src="<?= $urldomain; ?>/upload/avatar/avatar.webp" alt="Avatar" class="rounded-circle" />
        </div>
        <div class="chat-contact-info flex-grow-1 ms-2">
          <h6 class="chat-contact-name text-truncate m-0"><?= $cc['userid']; ?></h6>
          <p class="chat-contact-status text-muted text-truncate mb-0">
            <?= substr($gc['content'], 0, 20); ?> ...
          </p>
        </div>
        <small class="text-muted mb-auto"><?= date('H:i', strtotime($gc['created_date'])); ?></small>
      </a>
    </li>
<?php }
} ?>