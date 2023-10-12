<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 블로그 만들기</title>

    <!-- CSS -->
    <?php include "../include/head.php"?>
</head>
<body class="gray">
    <?php include "../include/skip.php"?>
    <!-- //skip -->

    <?php include "../include/header.php"?>
    <!-- //header -->

    <main id="main" role="main">
    <div class="intro__inner bmStyle container">
            <div class="intro__img small">
                <img srcset="../asset/img/intro03@1x.jpg 1x, ../asset/img/intro03@2x.jpg 2x, ../asset/img/intro03@3x.jpg 3x" alt="인트로 이미지">
            </div>
            <div class="intro__text">
                <h2>게시판</h2>
                <p>개발자를 위한 게시판 입니다.</p>
            </div>
        </div>
        <section class="board__inner container">
            <div class="board__write">
                <form action="boardWriteSave.php" name="boardWriteSave" method="post">
                    <fieldset>
                        <legend class="blind">게시글 작성하기</legend>
                        <div>
                            <label for="boardTitle">제목</label>
                            <input type="text" class="input__style" id="boardTitle" name="boardTitle">
                        </div>
                        <div>
                            <label for="boardContents">내용</label>
                            <textarea name="boardContents" class="input__style" id="boardContents" rows="20"></textarea>
                        </div>
                        <div class="board__btns">
                            <button type="submit" class="btn__style3">저장하기</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php"?>
    <!-- //footer -->
</body>
</html>