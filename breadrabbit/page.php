<?php 

$total_page=ceil($total_article/$view_article);
// echo $total_page."<br>";
$page_group=5;
if(($page-1)%$page_group==0){
	$start_page=$page;
}else{
	$start_page=$page-$page%$page_group+1;
}

// echo $start_page."<br>";
$end_page=$start_page+$page_group;
// echo $end_page."<br>";

// echo "&nbsp;";
$paging='';
$next_group='';
$prev_group='';

$prev=$page-$page_group;
if($prev<1)$prev=1;

$next=$start_page+$page_group;
if($next>$total_page)$next=$total_page;

if($page!=1) $prev_group="<a href='store.php?page=$prev".$id."''><</a>&nbsp;&nbsp;";
if($page!=$total_page) $next_group="<a href='store.php?page=$next".$id."''>></a>&nbsp;&nbsp;";
for($i=$start_page; $i<$end_page; $i++){
	if($i>$total_page) break;
	$paging =$paging."<a href='store.php?page=$i".$id."''>$i</a>&nbsp;&nbsp;";
}
?>