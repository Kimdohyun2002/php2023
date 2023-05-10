<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">
    
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
        <div class="intro__inner center">
            <picture class="intro__images small">
                <source srcset="../assets/img/join01.png, ../assets/img/join01@2x.png 2x, ../assets/img/join01@3x.png 3x" />
                <img src="../assets/img/join01.png" alt="회원가입 이미지">
            </picture>
            <h2>게시판</h2>
            <p class="intro__text">
                웹디자이너, 웹 퍼블리셔, 프론트엔드 개발자를 위한 게시판입니다.<br>
                관련된 문의사항은 여기서 확인하세요!
            </p>
        </div>
        <!-- intro__inner -->

        <div class="board__inner">
            <div class="board__view">
                <table>
                    <colgroup>
                        <col style="width: 20%">
                        <col style="width: 80%">
                    </colgroup>
                    <tbody>
                        <!-- <tr>
                            <th>제목</th>
                            <td>게시판 제목입니다.</td>
                        </tr>
                        <tr>
                            <th>등록자</th>
                            <td>김도현</td>
                        </tr>
                        <tr>
                            <th>등록일</th>
                            <td>2023-03-03</td>
                        </tr>
                        <tr>
                            <th>조회수</th>
                            <td>99</td>
                        </tr>
                        <tr>
                            <th>내용</th>
                            <td>프론트 앤드 개발자 취업 노하우

                                기본 지식 습득: HTML, CSS, JavaScript는 프론트 엔드 개발에 필수적인 기초 지식입니다. 이들 언어의 기본 문법과 개념을 숙지하고, 브라우저의 동작 방식과 웹 개발에 대한 기본 개념을 이해하는 것이 중요합니다.
                                프레임워크 및 라이브러리 학습: Angular, React, Vue.js 등의 프레임워크와 jQuery, Bootstrap 등의 라이브러리를 학습하는 것이 좋습니다. 이들은 프론트 엔드 개발을 보다 쉽게, 효율적으로 하기 위해 만들어진 도구들입니다.
                                프로젝트 경험 쌓기: 개인적으로 프로젝트를 만들어 보는 것이 중요합니다. 이를 통해 실제 개발 과정을 경험하고, 자신의 능력을 증명할 수 있습니다. Github 등의 온라인 저장소를 이용하여 개발한 프로젝트를 공유하는 것도 좋습니다.
                                영어 학습: 프로그래밍에서 사용되는 언어는 대부분 영어로 되어 있습니다. 따라서 영어로 작성된 문서나 자료를 읽고 이해하는 것이 중요합니다. Stack Overflow, MDN Web Docs 등의 웹사이트들은 영어로 되어 있으며, 개발자들 사이에서 많이 사용되는 언어이기도 합니다.
                                커뮤니티 활동: 개발자들 사이에서 정보 교류를 하며, 서로 도움을 주고 받는 것은 중요합니다. Stack Overflow, Reddit, Github 등의 커뮤니티에 참여하여 다른 개발자들과 교류하는 것이 좋습니다.
                                이력서와 포트폴리오 작성: 취업을 위해서는 이력서와 포트폴리오를 작성하는 것이 필수입니다. 이력서는 간결하게 작성하고, 포트폴리오는 자신의 개발 능력과 프로젝트 경험을 잘 보여주는 것이 좋습니다. 또한, 이력서와 포트폴리오를 지속적으로 업데이트하여 최신 정보를 반영하는 것이 중요합니다.
                            </td>
                        </tr> -->
                        
<?php
    if(isset($_GET['boardID'])){
        $boardID = $_GET['boardID'];

        // 보드 뷰 + 1
        $sql = "UPDATE board SET boardView = boardView + 1 WHERE boardID = {$boardID}";
        $connect -> query($sql);

        // echo $boardID;
        $sql = "SELECT b.boardContents, b.boardTitle, m.youName, b.regTime, b.boardView FROM board b JOIN members m ON(m.memberID = b.memberID) WHERE b.boardID = {$boardID}";
        $result = $connect -> query($sql);

        if($result){
            $info = $result -> fetch_array(MYSQLI_ASSOC);
            echo "<tr><th>제목</th><td>".$info['boardTitle']."</td></tr>";
            echo "<tr><th>등록자</th><td>".$info['youName']."</td></tr>";
            echo "<tr><th>등록일</th><td>".date('Y-m-d', $info['regTime'])."</td></tr>";
            echo "<tr><th>조회수</th><td>".$info['boardView']."</td></tr>";
            echo "<tr><th>내용</th><td>".$info['boardContents']."</td></tr>";
        }
    } else {    
    echo "<tr><td colspan='4'>게시글이 없습니다.</td></tr>";
    }
    ?>
                    </tbody>
                </table>
            </div>
            <div class="board__btn mb100">
                <?php if(isset($_GET['boardID'])): ?>
                    <a href="boardModify.php?boardID=<?=$_GET['boardID']?>" class="btnStyle3">수정하기</a>
                    <a href="boardRemove.php?boardID=<?=$_GET['boardID'] ?>" class="btnStyle3" onclick="return confirm('정말 삭제하시겠습니까?', '')">삭제하기</a>
                <?php endif; ?>
                <a href="board.php" class="btnStyle3">목록보기</a>
            </div>
        </div>
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>
</html>