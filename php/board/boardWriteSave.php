<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $boardTitle = $_POST['boardTitle'];
    $boardContents = $_POST['boardContents'];
    $boardView = 1;
    $regTime = time();
    $memberID = $_SESSION['memberID'];

    // 세션을 통해 사용자가 로그인이되어 있는지 확인
    if(!isset($_SESSION['memberID'])){
        echo "<script>alert('로그인 후에 게시글을 작성할 수 있습니다.');</script>";
        echo "<script>window.history.back();</script>";     // 전 화면으로 돌아가기
    } elseif(empty($boardTitle) || empty($boardContents)){      // 데이터 내용이 없을시 등록 X
        echo "<script>alert('제목 또는 내용이 없습니다.');</script>";
        echo "<script>window.history.back();</script>";
    } else {
        $boardTitle = $connect -> real_escape_string($boardTitle);
        $boardContents = $connect -> real_escape_string($boardContents);
    
        $sql = "INSERT INTO board(memberID, boardTitle, boardContents, boardView, regTime) VALUES('$memberID', '$boardTitle', '$boardContents', '$boardView', '$regTime')";
    
        $connect -> query($sql);

        echo "<script>alert('게시글이 작성되었습니다.');</script>";
        echo '<script>window.location.href = "board.php";</script>';
    }

?>
</body>
</html>