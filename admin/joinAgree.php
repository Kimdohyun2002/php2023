<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자 회원가입 페이지</title>

    <style>
        .join_agree {
            margin-top: 50px;
        }
        .agree1 .agree_box {
            background-color: #D9D9D9;
            width: 830px;
            height: 270px;
            margin: 50px auto 0 auto;
            padding: 20px 30px;
            font-size: 16px;
            overflow: auto;
        }
        .agree1 .agree_box::-webkit-scrollbar {
            width: 10px;
            background-color: #C1C1C1;
        }
        .agree1 .agree_box::-webkit-scrollbar-thumb {
            height: 10%;
            background-color: #8C8C8C;
            border-radius: 20px;
        }
        .agree1 .checkBox {
            display: flex;
            margin: 20px 0 0 215px;
        }
        .agree1 .checkBox input {
            display: flex;
            width: 20px;
            margin-right: 10px;
        }
        .agree2 .agree_box {
            background-color: #D9D9D9;
            width: 830px;
            height: 270px;
            margin: 70px auto 0 auto;
            padding: 20px 30px;
            font-size: 16px;
            overflow: auto;
        }
        .agree2 .agree_box::-webkit-scrollbar {
            width: 10px;
            background-color: #C1C1C1;
        }
        .agree2 .agree_box::-webkit-scrollbar-thumb {
            height: 10%;
            background-color: #8C8C8C;
            border-radius: 20px;
        }
        .agree2 .checkBox {
            display: flex;
            margin: 20px 0 0 215px;
        }
        .agree2 .checkBox input {
            display: flex;
            width: 20px;
            margin-right: 10px;
        }
    </style>
    <?php include "../include/head.php" ?>
</head>
<body class="gray">
    
    <?php include "../inclu
    de/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
        <div class="intro__inner center bmStyle">
            <picture class="intro__images">
                <source srcset="../assets/img/join01.png, ../assets/img/join02@2x.png 2x, ../assets/img/join02@3x.png 3x" />
                <img src="../assets/img/join01.png" alt="회원가입 이미지">
            </picture>
            <p class="intro__text">
                회원가입을 해주시면 다양한 정보를 자유롭게 볼 수 있습니다.
            </p>
        </div>
        <!-- intro__inner -->

        <div class="join__inner">
            <h2>회원가입</h2>
            <div class="index">
                <ul>
                    <li class="active">1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div>
            <div class="join__agree">
                <div class="agree1">
                    <div class="agree_box">
                        제1조 (목적) 본 약관은 [서비스 제공자 이름] (이하 "회사"라 함)가 제공하는 서비스의 이용 조건 및 절차, 회원과 회사 간의 권리와 의무, 책임사항 등 기본적인 사항을 규정함을 목적으로 합니다.
                        제2조 (용어의 정의) 본 약관에서 사용하는 용어의 정의는 다음과 같습니다.
                        "서비스"라 함은 회사가 제공하는 인터넷 상의 모든 서비스를 의미합니다.
                        "회원"이라 함은 회사와 이용 계약을 체결하고 회사가 제공하는 서비스를 이용하는 자를 말합니다.
                        "아이디(ID)"라 함은 회원 식별과 회원의 서비스 이용을 위하여 회원이 선정하고 회사가 승인한 문자와 숫자의 조합을 의미합니다.
                        "비밀번호"라 함은 회원이 부여 받은 아이디와 일치된 회원임을 확인하고 회원 자신의 비밀보호를 위해 회원이 설정한 문자와 숫자의 조합을 의미합니다.
                        제1조 (목적) 본 약관은 [서비스 제공자 이름] (이하 "회사"라 함)가 제공하는 서비스의 이용 조건 및 절차, 회원과 회사 간의 권리와 의무, 책임사항 등 기본적인 사항을 규정함을 목적으로 합니다.
                        제2조 (용어의 정의) 본 약관에서 사용하는 용어의 정의는 다음과 같습니다.
                        "서비스"라 함은 회사가 제공하는 인터넷 상의 모든 서비스를 의미합니다.
                        "회원"이라 함은 회사와 이용 계약을 체결하고 회사가 제공하는 서비스를 이용하는 자를 말합니다.
                        "아이디(ID)"라 함은 회원 식별과 회원의 서비스 이용을 위하여 회원이 선정하고 회사가 승인한 문자와 숫자의 조합을 의미합니다.
                        "비밀번호"라 함은 회원이 부여 받은 아이디와 일치된 회원임을 확인하고 회원 자신의 비밀보호를 위해 회원이 설정한 문자와 숫자의 조합을 의미합니다.
                    </div>
                    <div class="checkBox">
                        <input type="checkbox" name="check1" class="checkbox1">
                        <div>블로그 이용 약관 동의</div>
                    </div>
                </div>
                <div class="agree2">
                    <div class="agree_box">
                        본인은 영양많닭이 제공하는 [서비스/상품명]의 이용을 위해 다음과 같이 개인정보를 제공합니다.
                        개인정보 수집 항목
                        개인정보의 수집 및 이용 목적
                        개인정보 보유 및 이용기간
                        개인정보의 제3자 제공
                        성명: [이름]
                        주민등록번호(또는 외국인등록번호): [주민등록번호 또는 외국인등록번호]
                        전화번호: [전화번호]
                        이메일 주소: [이메일 주소]
                        본인은 영양많닭이 제공하는 [서비스/상품명]의 이용을 위해 다음과 같이 개인정보를 제공합니다.
                        개인정보 수집 항목
                        개인정보의 수집 및 이용 목적
                        개인정보 보유 및 이용기간
                        개인정보의 제3자 제공
                        성명: [이름]
                        주민등록번호(또는 외국인등록번호): [주민등록번호 또는 외국인등록번호]
                        전화번호: [전화번호]
                        이메일 주소: [이메일 주소]
                        본인은 영양많닭이 제공하는 [서비스/상품명]의 이용을 위해 다음과 같이 개인정보를 제공합니다.
                        개인정보 수집 항목
                        개인정보의 수집 및 이용 목적
                        개인정보 보유 및 이용기간
                        개인정보의 제3자 제공
                        성명: [이름]
                        주민등록번호(또는 외국인등록번호): [주민등록번호 또는 외국인등록번호]
                        전화번호: [전화번호]
                        이메일 주소: [이메일 주소]
                        본인은 영양많닭이 제공하는 [서비스/상품명]의 이용을 위해 다음과 같이 개인정보를 제공합니다.
                        개인정보 수집 항목
                        개인정보의 수집 및 이용 목적
                        개인정보 보유 및 이용기간
                        개인정보의 제3자 제공
                        성명: [이름]
                        주민등록번호(또는 외국인등록번호): [주민등록번호 또는 외국인등록번호]
                        전화번호: [전화번호]
                        이메일 주소: [이메일 주소]
                    </div>
                    <div class="checkBox">
                        <input type="checkbox" name="check1" class="checkbox1">
                        <div>개인정보 수집 및 이용 동의</div>
                    </div>
                </div>
                <p class="agreemsg"></p>
                <a href="joinSave.php"><button class="btnStyle agreeBtn">동의</button></a>
            </div>
        </div>
    </main>
    <!-- //main -->
    
    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <script>
        // 체크 표시 검사
        const agreeBtn = document.querySelector(".agreeBtn");
        const agreeCheck = document.querySelectorAll(".checkbox1");
        const agreeMsg = document.querySelector(".agreemsg");

        agreeBtn.addEventListener("click", (e) => {
            
            agreeCheck.forEach((check) => {
                if(check.checked == false){
                    agreeMsg.innerText = "체크박스를 다시 한번 확인해주세요!"

                    e.preventDefault();
                }
            })
        });
    </script>
</body>
</html>