<?php
	include "./dbconn.php";
	
	$idx = $_GET['chart_id'];
	$sql = mq("delete from chart where chart_id='$idx';");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=./chart_list.php" />