<?php
namespace App\Service; //命名路徑(必打，為了要關聯)
use App\Leave;

class LeaveService//類別

{
    public function create($begin, $end, $reason)
    {
        // dd($begin);
        $Leave = Leave::create([
            'begin' => $begin,
            'end' => $end,
            'reason' => $reason,
        ]);

        return $Leave;
    }
}
