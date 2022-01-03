<?php
$XS =  array('img' => 'AS004397_01.gif', 'content' => 'You are genius !!!');
$G =  array('img' => 'AS004397_02.gif', 'content' => 'Well done !!!');
$K =  array('img' => 'AS004397_03.gif', 'content' => 'Keep on trying !!!');
$TB =  array('img' => 'AS004397_04.gif', 'content' => 'Much better !!!');
$Y =  array('img' => 'AS004397_05.gif', 'content' => 'Don’t give up !!!');
$arr = [$Y, $Y, $Y, $Y, $TB, $TB, $K, $K, $G, $XS, $XS];
$mark = $_SESSION['user']['mark'];
?>

<!-- Modal -->
	<div class="modal fade" id="modalResult" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title fw-bold text-primary">KẾT QUẢ CỦA BẠN</h4>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	       <div class="row">
	       		<div class="col-12 d-flex justify-content-center fw-bold text-secondary">Bạn đã trả lời đúng <?= ($mark*$total/10).'/'.$total ?> câu</div>
	       		<div class="col-12 d-flex justify-content-center fw-bold text-danger" style="font-size: 30px">Điểm: <?= round($mark,2) ?></div>
	       		<div class="col-12 d-flex justify-content-center"><img src="../img/gif/<?= $arr[floor($mark)]['img'] ?>" width="200px"></div>
	       		<div class="col-12 d-flex justify-content-center fw-bold text-success" style="font-style: italic; font-size: 40px"><?= $arr[floor($mark)]['content'] ?></div>
	       </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-sm btn-danger fw-bold" data-bs-dismiss="modal">Đóng</button>
	        <a href="more_details.php" class="btn btn-sm btn-primary fw-bold">Xem chi tiết</a>
	      </div>
	    </div>
	  </div>
	</div>