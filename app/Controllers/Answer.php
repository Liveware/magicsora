<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;

class Answer extends Controller
{
    use ResponseTrait;

    public function index()
    {
        $answer = [
            '안돼','안돼~','안될 것 같아','안되지','혼자서는 안돼','절대 안돼!','무조건 안돼!','왠지 그럼 안될 것 같아','좋은 생각이 아니야','전부 다 안돼',
            '조금 더 신중하게','한번 더 생각해봐','언젠가는','다시 한 번 물어봐','아무것도 하지마','응 아니야','조금 더 진지하게','도전','너무 뻔해',
            '가능성 있어!','그래','좋아','그럭저럭','바로 그거야','기다리지마','지금처럼 계속','다른일에 집중해','아마도','소신을 가져','한번 더 신중하게','용기를 가져','일생일대의 기회',
            '혼자가 아니라면','소신대로 행동해','기회라고 생각해','어떻게 하든 결과는 변하지 않아','다른 것을 포기해야만 할 지도..','직감을 믿어','일단 자고 내일 생각해','걱정하지마','기회다'
        ];

        // Respond with 201 status code
        return $this->respond(['answer' => $answer[rand(0,(count($answer)-1))]], 200);
    }
}