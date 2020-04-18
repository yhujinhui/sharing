<!-- 빵굽기화면에서 입력한 정보를 mysql에 연동 -->
<?php 
    require_once('conn.php');
    
    // $conn=mysqli_connect('localhost','root','mirim2','breadrabbit','3307');

    $kinds = $_POST['Kinds'];
    $title = $_POST['breadName'];
    $description = $_POST['breadContents'];

    // echo "kinds :  {$kinds} <br>";
    // echo "title : {$title}<br>";
    // echo "description : {$description}<br>";
    
    $query = 'INSERT INTO content(title, description, created, kinds) values("'.$title.'", "'.$description.'", now(), "'.$kinds.'");';
    // echo $query;

    $result = mysqli_query($conn, $query);
    print_r(mysqli_error($conn));

    // $filtered=array(
    // 'title'=>mysqli_real_escape_string($conn,$_POST['title']),
    // 'description'=>mysqli_real_escape_string($conn,$_POST['description'])
    // );

    // $sql=
    // "insert into content(title,description,created)
    // values('{$filtered['title']}','{$filtered['description']}',now())";

    // $result=mysqli_query($conn,$sql);
    // print_r(mysqli_error($conn));

?>