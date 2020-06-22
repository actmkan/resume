<?php
namespace ManKiAhn;

class Resume extends Career
{
    const BIRTH = '1991-01-10';
    const NICKNAME = 'Marc';
    const REALNAME = '안만기';

    /**
     * Resume constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * show
     */
    public function show(){
        $this->printSelfIntroduction();
        $this->printWhyDeveloper();
        $this->printWhatDeveloper();
        $this->printSchoolList();
        $this->printCompanyList();
        $this->printProjectList();
    }

    /**
     * 자기소개
     */
    private function printSelfIntroduction(){
        echo "----------------------------\n";
        echo "이름 : " . self::REALNAME . "\n";
        echo "생년월일 : " . self::BIRTH . "\n";
        echo "영어닉네임 : " . self::NICKNAME . "\n\n";
    }

    /**
     * 왜 개발자가 되었나요?
     */
    public function printWhyDeveloper(){
        echo "----------------------------\n";
        echo "왜 개발자가 되었나요? \n";
        echo "중학생부터 WEB에 관심이 생겨 html, js, css를 배우기 시작했고,\n" .
             "Server Side에 눈을뜨며 php, mysql을 배우기 시작했고,\n" .
             "코딩에 본격적으로 관심이 생겨 c, java, python을 배우기 시작했고,\n" .
             "고등학생때 홈페이지 개발 창업동아리로 다수의 상업 홈페이지 외주를 진행했고,\n" .
             "그 경험으로 2010년 초반 2년간 인터넷 쇼핑몰 붐에 편승해 각종 외주작업을 하며 코딩을 했고,\n" .
             "군 전역후 본격적인 직업 개발자의 길을 걸어왔습니다.\n\n";
    }

    /**
     * 어떤 개발자인가요?
     */
    public function printWhatDeveloper(){
        echo "----------------------------\n";
        echo "어떤 개발자인가요?\n";
        echo "'꿈속에서 코딩하다 버그 해결법 찾기', '세미콜론과 숨바꼭질',\n" .
             "'테스트하려고 실행했는데 버그가 발생안해 당황하기', '네이밍 몇번 바꾸기' 등등\n" .
             "개발자들이라면 흔히 겪는 상황을 역시 겪는 평범한 개발자입니다.\n" .
             "다만 디버깅과 코드 가독성에 초점을 두는 코딩스타일을 지향합니다.\n\n";
    }
}

