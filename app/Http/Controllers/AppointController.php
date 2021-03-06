<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Task를 하면 모델인 Task 클래스를 상속받는다.
use App\Appoint; // 테이블명 지정

class AppointController extends Controller
{
    // use Illuminate\Http\Request 클래스의 변수
    public function index(Request $request) // Request 클래스의 변수 매개변수로 사용
    {
        if (!isset($cellh)){
            $cellh = 70; // date cell height
        }
        if (!isset($tablew)){
            $tablew = 650; //table width
        }    
        $cellw = 130; // date cell width
        //---- 오늘 날짜
        $thisyear = date('Y'); // 4자리 연도
        $thismonth = date('n'); // 0을 포함하지 않는 월
        $today = date('j'); // 0을 포함하지 않는 일

        // $year, $month 값이 없으면 현재 날짜
        $year = isset($_GET['year']) ? $_GET['year'] : $thisyear;
        $month = isset($_GET['month']) ? $_GET['month'] : $thismonth;
        $day = isset($_GET['day']) ? $_GET['day'] : $today;
        //------ 날짜의 범위 체크
        if (($year > 2041) or ($year < 2021))
            ErrorMsg("연도는 2021 ~ 2038년만 가능합니다.");

        // 년,월 이동 기능
        $prev_month = $month - 1;
        $next_month = $month + 1;
        $prev_year = $next_year = $year;
        if ($month == 1) {
            $prev_month = 12;
            $prev_year = $year - 1;
        } else if ($month == 12) {
            $next_month = 1;
            $next_year = $year + 1;
        }
        $prevyear = $year - 1;
        $nextyear = $year + 1;


        // comments 를 선언하고 변수 안에 쿼리빌더의 결과를 넣는다.
        // 테이블은 Task 테이블이고 grp와 sort를 정렬한다.
        $appoints = Appoint::get();

        // mktime 함수는 연도, 월, 일, 시, 분, 초를 받아서 타임스탬프값을 만들어 리턴하는 역활을 합니다.
        // mktime([시간], [분], [초], [월], [일], [연도]); 
        // 't'는 주어진 월의 일수를 구하는 형식 문자
        // 1. 총일수 구하기
        $last_day = date('t', mktime(0, 0, 0, $month, 1, $year));
        // 2. 시작요일 구하기
        $start_week = date("w", mktime(0, 0, 0, $month, 1, $year)); // 일요일 0, 토요일 6

        // 3. 총 몇 주인지 구하기
        $total_week = ceil(($last_day + $start_week) / 7);

        // 4. 마지막 요일 구하기
        $last_week = date('w', mktime(0, 0, 0, $month, $last_day, $year));

        return view('appoint.index', [
            'cellh'=>$cellh,
            'tablew'=>$tablew,
            'cellw'=>$cellw,
            'thisyear'=>$thisyear,
            'thismonth'=>$thismonth,
            'today'=>$today,
            'year'=>$year,
            'month'=>$month,
            'day'=>$day,
            'prev_month'=>$prev_month,
            'prevyear'=>$prevyear,
            'prev_year'=>$prev_year,
            'next_month'=>$next_month,
            'nextyear'=>$nextyear,
            'next_year'=>$next_year,
            'appoints'=>$appoints,
            'last_day'=>$last_day,
            'start_week'=>$start_week,
            'total_week'=>$total_week,
            'last_week'=>$last_week
            ]);
            // 요청된 정보 처리 후 결과 되돌려줌

    }
    public function create() //생성페이지 메소드
    {
        return view('appoint.create');
    }

    public function store() //저장 메소드
    {
        return redirect("/appoint");
    }
}
