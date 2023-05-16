<?php
    include "../connect/connect.php";
    include "../connect/session.php";
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
        <div class="blog__search bmStyle">
            <h2>개발자 블로그 입니다.</h2>
            <p>개발과 관련된 글입니다.</p>
            <div class="search">
                <form action="#" name="#" method="POST">
                    <legend class="blind">블로그 검색</legend>
                    <input type="search" class="inputStyle2" name="searchKeyword" aria-label="검색" placeholder="검색어를 입력하세요!">
                    <button type="submit" class="btnStyle4 ml20">검색하기</button>
                    <?php if(isset($_SESSION['memberID'])){ ?>
                        <div class="mt20"><a href="blogWrite.php" class="btnStyle4 white">글쓰기</a></div>
                    <?php } ?>
                        
                </form>
            </div>
        </div>
        <div class="blog__inner">
            <div class="left">
                <div class="blog__wrap">
                    <h2>All Posts</h2>
                    <div class="cards__inner col3 line3">
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog01.jpg, ../assets/img/blog01@2x.jpg 2x, ../assets/img/blog01@3x.jpg 3x" />
                                <img src="../assets/img/blog01.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 기초</h3>
                                <p>이것은 코딩을 처음 접하는 사람들을 위한 기본적인 코딩 주제에 대한 기사일 수 있습니다. 여기에는 변수, 조건문, 반복문과 같은 주제가 포함될 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="more" class="more">더보기</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog02.jpg, ../assets/img/blog02@2x.jpg 2x, ../assets/img/blog02@3x.jpg 3x" />
                                <img src="../assets/img/blog02.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>특정 프로그래밍 언어에 대한 기사</h3>
                                <p>이것은 특정 프로그래밍 언어에 대한 기사일 수 있습니다. 여기에는 언어의 문법, 기능 및 프레임워크에 대한 정보가 포함될 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="more">더보기</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog03.jpg, ../assets/img/blog03@2x.jpg 2x, ../assets/img/blog03@3x.jpg 3x" />
                                <img src="../assets/img/blog03.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 프로젝트</h3>
                                <p>이것은 코딩에 대한 지식을 적용하는 코딩 프로젝트에 대한 기사일 수 있습니다. 여기에는 게임, 웹사이트 또는 앱 구축과 같은 프로젝트가 포함될 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="more">더보기</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog04.jpg, ../assets/img/blog04@2x.jpg 2x, ../assets/img/blog04@3x.jpg 3x" />
                                <img src="../assets/img/blog04.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 팁과 요령</h3>
                                <p>이것은 코딩을 더 잘하는 데 도움이 되는 팁과 요령에 대한 기사일 수 있습니다. 여기에는 프로그래밍에서 시간을 절약하는 방법, 버그를 디버깅하는 방법 또는 코드를 더 효율적으로 작성하는 방법에 대한 정보가 포함될 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="more">더보기</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog01.jpg, ../assets/img/blog01@2x.jpg 2x, ../assets/img/blog01@3x.jpg 3x" />
                                <img src="../assets/img/blog01.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 기초</h3>
                                <p>이것은 코딩을 처음 접하는 사람들을 위한 기본적인 코딩 주제에 대한 기사일 수 있습니다. 여기에는 변수, 조건문, 반복문과 같은 주제가 포함될 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="more" class="more">더보기</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog02.jpg, ../assets/img/blog02@2x.jpg 2x, ../assets/img/blog02@3x.jpg 3x" />
                                <img src="../assets/img/blog02.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>특정 프로그래밍 언어에 대한 기사</h3>
                                <p>이것은 특정 프로그래밍 언어에 대한 기사일 수 있습니다. 여기에는 언어의 문법, 기능 및 프레임워크에 대한 정보가 포함될 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="more">더보기</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog03.jpg, ../assets/img/blog03@2x.jpg 2x, ../assets/img/blog03@3x.jpg 3x" />
                                <img src="../assets/img/blog03.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 프로젝트</h3>
                                <p>이것은 코딩에 대한 지식을 적용하는 코딩 프로젝트에 대한 기사일 수 있습니다. 여기에는 게임, 웹사이트 또는 앱 구축과 같은 프로젝트가 포함될 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="more">더보기</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog04.jpg, ../assets/img/blog04@2x.jpg 2x, ../assets/img/blog04@3x.jpg 3x" />
                                <img src="../assets/img/blog04.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 팁과 요령</h3>
                                <p>이것은 코딩을 더 잘하는 데 도움이 되는 팁과 요령에 대한 기사일 수 있습니다. 여기에는 프로그래밍에서 시간을 절약하는 방법, 버그를 디버깅하는 방법 또는 코드를 더 효율적으로 작성하는 방법에 대한 정보가 포함될 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="more">더보기</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog04.jpg, ../assets/img/blog04@2x.jpg 2x, ../assets/img/blog04@3x.jpg 3x" />
                                <img src="../assets/img/blog04.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 팁과 요령</h3>
                                <p>이것은 코딩을 더 잘하는 데 도움이 되는 팁과 요령에 대한 기사일 수 있습니다. 여기에는 프로그래밍에서 시간을 절약하는 방법, 버그를 디버깅하는 방법 또는 코드를 더 효율적으로 작성하는 방법에 대한 정보가 포함될 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="more">더보기</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="blog__aside">
                    <div class="intro">
                        <picture class="img">
                            <source srcset="../assets/img/join02.png, ../assets/img/join02@2x.png 2x, ../assets/img/join02@3x.png 3x" />
                            <img src="../assets/img/join02.png" alt="소개이미지">
                        </picture> 
                        <p class="text">
                            어떤 일이라도 노력하고 즐기면 그 결과는 빛을 바란다고 생각합니다.
                        </p>
                    </div>
                    <div class="cate">
                        <h4>카테고리</h4>
                    </div>
                    <div class="cate">
                        <h4>최신 글</h4>
                    </div>
                    <div class="cate">
                        <h4>인기 글</h4>
                    </div>
                    <div class="cate">
                        <h4>최신 댓글</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog__inner -->
    </main>
    <!-- //main -->
        
    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>
</html>