<?
$start = ($start) ? $start : 0; //페이지의 시작 값으로 처음에는 0으로 시작
$scale = 10; //한 화면에 10개씩 표시, 10개 이상 지정하여 사용 가능
$page_scale = 10; //10개씩 페이지를 나누어 이동, 모바일의 경우 작게 사용
$link = "&start=$start"; //페이지가 이동될 때 포함될 검색 파라미터

page( $start , $total ,$scale , $page_scale ,"처음", "이전", "다음", "맨끝", $link );
function page($start,$total,$scale,$page_scale,$first,$pre,$next,$last,$link){
  print"<a href='?start=0$link'>$first</a>";

  $page = floor ($start / ($scale * $page_scale));
  if ($total > $scale) {
    if($start+1 > $scale*$page_scale) {
      $pre_start = $page * $scale * $page_scale - $scale;
      print"<a href='?start=$pre_start$link'>$pre</a>";
    }
    else print"$pre";
  }
  else print"$pre";

 if($total > 0) print"| ";

 for ($vj=0 ; $vj<$page_scale ; $vj++) {
    $ln = ($page * $page_scale + $vj) * $scale;
    $page_num = $page * $page_scale+$vj + 1;
    if ($ln < $total) {
      if($ln != $start) print"<a href='?start=$ln$link'><b>$page_num</b></a> | ";
      else print"[<b>$page_num</b>] | ";
    }
  }

  if($total > (($page+1) * $scale * $page_scale)){
    $n_start = ($page+1) * $scale * $page_scale;
    print "<a href='?start=$n_start$link'>$next</a>";
  }
  else print $next;

  $end_start = floor($total/$scale)*$scale;

  print"<a href='?start=$end_start$link'>$last</a>";
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <a href="<?=$_SERVER["PHP_SELF"]?>?start=0">바로가기</a>
  <a href="?start=0">바로가기</a>
</body>
</html>