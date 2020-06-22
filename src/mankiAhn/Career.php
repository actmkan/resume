<?php
namespace ManKiAhn;

class Career{

    const SCHOOL_LIST = [
        [
            'name' => '충주상업고등학교',
            'major' => '사이버정보통신과',
            'degree' => '고등학교 졸업',
            'period' => '2006 - 2008',
        ],
        [
            'name' => '대원대학교',
            'major' => '컴퓨터정보계열 입학, 멀티미디어 디자인과 졸업',
            'degree' => '공학전문학사',
            'period' => '2009 - 2013',
        ],
    ];

    const COMPANY_LIST = [
        [
            'name' => '셀러허브',
            'periodOfWork' => "2017-09 ~ 2017-11",
            'myWork' => "자사 커머스 유지보수",
            'technologyStack' => [
                'php5.x', 'mysql', 'apache2', 'purePHP', 'AWS', 'javascript', 'jquery',
            ],
            'reasonForResignation' => "좋은 사람들과 일을 하였지만 잠시 자기계발 시간을 위해 퇴사.",
        ],
        [
            'name' => '명진홀딩스',
            'periodOfWork' => "2018-03 ~ 2018-05",
            'myWork' => "퍼블리싱 전반적 업무, 회사 홈페이지 구축",
            'technologyStack' => [
                'javascript', 'jquery', 'html5', 'css3',
            ],
            'reasonForResignation' => "채용과정에선 백엔드 개발자로 채용되었으나 채용 후 퍼블리싱 업무만 집중되어 백엔드 개발을 하고싶어 이직.",
        ],
        [
            'name' => '집꾸미기',
            'periodOfWork' => "2018-05 ~ 2019-10",
            'myWork' => "커머스 전반적 유지보수, 신규사업 개발",
            'technologyStack' => [
                'php5.x', 'php7.x', 'codeigniter3', 'mysql', 'redis', 'elasticsearch', 'memcache', 'apache2',
                'javascript', 'webpack', 'vue.js', 'jquery', 'html5', 'css3', 'sass',
                'EC2', 'S3', 'LoadBalancer', 'RDS', 'Route53',
                'google analytics', 'facebook pixel', 'amplitude', 'dable',
            ],
            'reasonForResignation' => "좋은 개발팀 동료들, 좋은 개발문화로 즐겁게 생활함. 개발팀장님의 퇴사, 리더의 부재로 인해 이직을 결심.",
        ],
        [
            'name' => '감탄연구소',
            'periodOfWork' => "2019-11 ~ 재직중",
            'myWork' => "서비스 기획/1인 풀스택 개발",
            'technologyStack' => [
                'php7.4', 'laravel', 'mysql', 'redis', 'elasticsearch', 'memcache', 'apache2',
                'javascript', 'webpack', 'vue.js', 'jquery', 'html5', 'css3', 'sass', 'less',
                'EC2', 'S3', 'LoadBalancer', 'RDS', 'Route53', 'lightsail', 'lambda', 'lambda@edge',
            ],
            'reasonForResignation' => "좋은 대표, 좋은 회사, 하지만 경영악화로 인해 자진퇴사 예정.",
        ],

    ];
    const PROJECT_LIST= [
        [
            'name' => "명진홀딩스 홈페이지",
            'url' => "http://mjhcorp.co.kr/",
            'myWork' => "디자인외 모든 개발",
            'technologyStack' => [
                'javascript', 'jquery', 'html5', 'css3', 'CIBoard', 'mysql', 'php', 'codeigniter',
            ],
            'description' => "codeigniter cms ciboard기반 웹페이지 입니다.\n" .
                "jquery와 기타라이브러리를 이용해 작업되었습니다.\n" .
                "작업기간 : 2주\n\n",
        ],
        [
            'name' => "타임특가",
            'url' => "https://www.ggumim.co.kr",
            'myWork' => "기획/디자인 외 모든 설계/개발",
            'technologyStack' => [
                'php', 'mysql', 'crontab', 'vue.js', 'javascript', 'codeigniter',
            ],
            'description' => "특정기간 상품 가격변경 예약 시스템입니다.\n" .
                "서비스영역과 백오피스 영역 프론트는 vue.js로 작업되었으며\n" .
                "cron으로 주기적으로 예약 테이블을 확인해 job이 실행되는 구조입니다.\n" .
                "작업기간 : 프론트 1주 + 백엔드 1주\n\n",
        ],
        [
            'name' => "스타일링 일정 예약시스템",
            'url' => "https://www.ggumim.co.kr",
            'myWork' => "기획/디자인 외 모든 설계/개발",
            'technologyStack' => [
                'php', 'mysql', 'crontab', 'vue.js', 'javascript', 'codeigniter', 'fcm', 'lunasoft 알림톡',
            ],
            'description' => "특정기간 상품 가격변경 예약 시스템입니다.\n" .
                "서비스영역과 백오피스 영역 프론트는 vue.js로 작업되었으며\n" .
                "유저가 일정을 선택해 예약을 하면 재고관리, 결제, 질문지작성, push, 알림톡 등\n" .
                "자동화 처리가 가능하도록 작업되었습니다.\n" .
                "작업기간 : 프론트 2주 + 백엔드 2주\n\n",
        ],
        [
            'name' => "프로모션 컨텐츠 페이지",
            'url' => "https://www.ggumim.co.kr",
            'myWork' => "기획/디자인 외 모든 설계/개발",
            'technologyStack' => [
                'php', 'mysql', 'crontab', 'jquery', 'javascript', 'codeigniter',
            ],
            'description' => "프로모션 진행시 3가지 타입으로 진행되는데,\n" .
                "타입에 맞는 프로모션템 페이지를 만드는 시스템입니다.\n" .
                "작성 타입에 맞게 상품연결, 컨텐츠 연결, 정렬, 할인률 적용등 기능이 추가되었습니다.\n" .
                "예약오픈 기능으로 자동화 처리가 가능하도록 작업되었습니다.\n" .
                "작업기간 : 2주\n\n",
        ],
        [
            'name' => "마케팅툴 작업",
            'url' => "https://www.ggumim.co.kr",
            'myWork' => "전담 고유업무",
            'technologyStack' => [
                'php', 'mysql', 'crontab', 'redis', 'javascript', 'codeigniter', 'google analytics', 'facebook pixel',
                'amplitude', 'dable',
            ],
            'description' => "google analytics, facebook pixel, amplitude, dable등 다양한 마케팅툴 도입 경험이있습니다.\n" .
                "단순 스크립트 삽입 뿐만 아니라 매출구좌, 상품레벨등 트래킹을 위해 커스텀 되어있는 부분이 있습니다.\n" .
                "퇴사 직전까지 전담 고유업무입니다.\n" .
                "작업기간 : 상시\n\n",
        ],
        [
            'name' => "고객사 어드민 개편",
            'url' => "https://www.ggumim.co.kr",
            'myWork' => "배송비 프리셋, 상품, 옵션 관리 영역 개편",
            'technologyStack' => [
                'php', 'mysql', 'redis', 'jquery', 'javascript', 'codeigniter', 'bootstrap',
            ],
            'description' => "개발팀 전원 이 고객사 어드민 개편에 투입되어 위 사항 개편에 참여했습니다.\n" .
                "해당 개편으로 오류율 대폭 하락.\n" .
                "작업기간 : 3주\n\n",
        ],
        [
            'name' => "커머스 유지보수",
            'url' => "https://www.ggumim.co.kr",
            'myWork' => "주문, 결제, 환불 등",
            'technologyStack' => [
                '상황에 따라 다른 스택적용',
            ],
            'description' => "커머스 특성상 운영이슈가 주기적으로 발생합니다.\n" .
                "실시간 이슈 발생시 해당 이슈 유지보수를 담당했습니다.\n" .
                "작업기간 : 상시\n\n",
        ],
        [
            'name' => "검색 서비스 개편",
            'url' => "https://www.ggumim.co.kr",
            'myWork' => "기존 단순 검색에서 상세검색으로 개편",
            'technologyStack' => [
                'php', 'mysql', 'redis', 'vue.js', 'javascript', 'codeigniter', 'elasticsearch',
            ],
            'description' => "카테고리, 브랜드, 가격 필터, 동의어 전처리, 매치스코어 처리등 검색 품질을 개선했습니다.\n" .
                "프론트 영역은 vue.js를 사용해 작업했습니다.\n" .
                "작업기간 : 2주\n\n",
        ],
        [
            'name' => "유저 개인화 추천 개발",
            'url' => "https://www.ggumim.co.kr",
            'myWork' => "기획/디자인 제외 개발",
            'technologyStack' => [
                'php', 'mysql', 'redis', 'jquery', 'mustache', 'javascript', 'codeigniter',
            ],
            'description' => "유저 행동로그에 따라 추천로직을 개발했습니다.\n" .
                "모든 데이터는 캐시화해 최적화 작업도 병행진행 했습니다.\n" .
                "집꾸미기 메인에서 나오는 컨텐츠입니다.\n" .
                "작업기간 : 4주\n\n",
        ],
        [
            'name' => "슬로우 쿼리 튜닝",
            'url' => "https://www.bestidol.co.kr",
            'myWork' => "쿼리튜닝",
            'technologyStack' => [
                'php', 'mysql', 'laravel',
            ],
            'description' => "기존 쿼리중 slow query(date, index 등) 대부분 튜닝을 했습니다.\n" .
                "기존대비 RDS 플랜을 한단계 낮췄습니다.\n" .
                "작업기간 : 1주\n\n",
        ],
        [
            'name' => "앱내 화폐, 투표개편",
            'url' => "https://www.bestidol.co.kr",
            'myWork' => "기획/개발",
            'technologyStack' => [
                'php', 'mysql', 'laravel', 'redis', 'vue.js', 'javascript',
            ],
            'description' => "기존 고질적인 화폐 인플레이션을 개선했습니다.\n" .
                "무한정 보유할 수 있던 기존 화폐를 자동 충전 시스템으로 개편하여\n" .
                "소비를 유도해 개편 첫주만에 80%를 회수했습니다.\n" .
                "모바일게임 애니팡 자동충전 시스템에서 착안해 기획/개발.\n" .
                "작업기간 : 4주\n\n",
        ],
        [
            'name' => "아이돌 메인페이지 재개발",
            'url' => "https://www.bestidol.co.kr/idol/103",
            'myWork' => "기획/UIUX/개발",
            'technologyStack' => [
                'php', 'mysql', 'laravel', 'redis', 'vue.js', 'javascript',
            ],
            'description' => "아이돌별 메인페이지 영역을 새로 기획/개발하였습니다.\n" .
                "비동기,캐시 처리로 로딩속도 개선.\n" .
                "모바일게임 애니팡 자동충전 시스템에서 착안해 기획/개발.\n" .
                "작업기간 : 3주\n\n",
        ],
        [
            'name' => "Feed 서비스 개발",
            'url' => "https://www.bestidol.co.kr/feed",
            'myWork' => "기획/UIUX/개발",
            'technologyStack' => [
                'php', 'mysql', 'laravel', 'redis', 'vue.js', 'javascript', 'elasticsearch',
            ],
            'description' => "기존 게시판형 커뮤니티를 피드형식으로 재개발 하였습니다.\n" .
                "500만건 이상 기존 데이터 마이그레이션 처리를 하였습니다.\n" .
                "검색에 elasticsearch 사용해 속도를 개선했습니다.\n" .
                "작업기간 : 8주\n\n",
        ],
        [
            'name' => "서버 인프라 개선",
            'url' => "https://www.bestidol.co.kr/",
            'myWork' => "전담",
            'technologyStack' => [
                'ec2', 'apache2', 'nginx', 'rds', 'lightsail', 'elasticsearch', 'redis'
            ],
            'description' => "기존 서비스대비 aws비용이 과도하게 나오는 부분은 인프라 개선으로 해결했습니다.\n" .
                "job server, cache server등 lightsail로 해결할 수 있는 서버를 lightsail로 옮기고.\n" .
                "기존코드와 쿼리최적화를 통해 aws비용을 기존대비 60% 절감하였습니다.\n" .
                "작업기간 : 2주\n\n",
        ],
        [
            'name' => "배지 시스템 개발",
            'url' => "https://www.bestidol.co.kr/idol/103",
            'myWork' => "기획/UIUX/개발",
            'technologyStack' => [
                'php', 'laravel', 'mysql', 'redis', 'lambda', 'lambda@edge', 'cloudfront'
            ],
            'description' => "아이돌별 앱내 목표 달성을 시각화 해주는 배지 시스템 개발.\n" .
                "1000만건이 넘는 투표데이터 기반 job으로 배지 캐시데이터를 기록하도록 작업했습니다.\n" .
                "작업기간 : 2주\n\n",
        ],
        [
            'name' => "적립금 시스템 개발",
            'url' => "https://www.bestidol.co.kr/idol/103",
            'myWork' => "기획/UIUX/개발",
            'technologyStack' => [
                'php', 'redis', 'mysql', 'laravel', 'vue.js', 'javascript',
            ],
            'description' => "결제 및 광고보기시 유저들에게 리워드를 주는 적립금 시스템 개발.\n" .
                "적립금으로 해당 아이돌 이름으로 기부처를 유저들이 선택하여 기부하는 시스템입니다.\n" .
                "해당 시스템은 경쟁사와 다른 베스트 아이돌만의 차별된 시스템입니다.\n" .
                "작업기간 : 5주\n\n",
        ],
        [
            'name' => "이미지 서버 이전",
            'url' => "url없음",
            'myWork' => "기획/인프라",
            'technologyStack' => [
                'php', 'imagemagick', 'mysql', 's3', 'lambda', 'lambda@edge', 'cloudfront', 'laravel'
            ],
            'description' => "기존 이미지 서버를 s3로 이전했습니다.\n" .
                "lambda@edge로 on-demand image resizing 구현해 작업했습니다.\n" .
                "기존 이미지 5TB에서 1.5TB로 스토리지 용량을 줄였습니다.\n" .
                "작업기간 : 2주\n\n",
        ],
    ];

    /**
     * Career constructor.
     */
    public function __construct()
    {
        echo "경력사항을 상속함\n\n";
    }

    /**
     * 직장 정보 리스트 출력
     */
    protected function printCompanyList(){

        echo "----------------------------\n";
        foreach (self::COMPANY_LIST as $company){
            echo "직장명 : {$company['name']} \n";
            echo "재직기간 : {$company['periodOfWork']} \n";
            echo "주요업무 : {$company['myWork']} \n";
            echo "주요개발스택 : " . implode(', ', $company['technologyStack']) . " \n";
            echo "퇴사사유 : {$company['reasonForResignation']} \n\n";
        }

    }

    /**
     * 프로젝트 정보 리스트 출력
     */
    protected function printProjectList(){

        echo "----------------------------\n";
        foreach (self::PROJECT_LIST as $project){
            echo "프로젝트명 : {$project['name']} \n";
            echo "url : {$project['url']} \n";
            echo "주요업무 : {$project['myWork']} \n";
            echo "주요개발스택 : " . implode(', ', $project['technologyStack']) . " \n";
            echo "상세사항 : {$project['description']} \n\n";
        }

    }

    /**
     * 학력 정보 리스트 출력
     */
    protected function printSchoolList(){

        echo "----------------------------\n";
        foreach (self::SCHOOL_LIST as $school){
            echo "학명 : {$school['name']} \n";
            echo "학과 : {$school['major']} \n";
            echo "학위 : {$school['degree']} \n";
            echo "재학기간 : {$school['period']} \n\n";
        }

    }

}