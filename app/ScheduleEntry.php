<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScheduleEntry extends Model
{
    
    protected $fillable = [
      'day', 'start', 'end'
    ];

    protected $days = [
      'Lunes',
      'Martes',
      'Miércoles',
      'Jueves',
      'Viernes',
      'Sábado',
      'Domingo'
    ];

    public function day()
    {
      return $this->days[$this->day];
    }

}
