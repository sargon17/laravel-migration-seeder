<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    public function fromDateTime($value)
    {
        return date("H:i d-m-Y", strtotime($value));
    }

    public function dateDifference()
    {
        $date1 = new \DateTime($this->depart_time);
        $date2 = new \DateTime($this->arrive_time);
        $diff = $date1->diff($date2);

        return $diff->format("%H:%I");
    }
}
