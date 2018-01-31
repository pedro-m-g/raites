<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    
    protected $days = [
      'Lunes',
      'Martes',
      'Miércoles',
      'Jueves',
      'Viernes',
      'Sábado',
      'Domingo'
    ];

    public function entries()
    {
      return $this->hasMany(ScheduleEntry::class);
    }

    public function daysLeft()
    {
      $allDays = collect($this->days)->keys();
      $busy = $this->entries->pluck('day');
      $diff = $allDays->diff($busy); 
      $days = $this->days;
      return $diff->map(function ($day) use ($days) {
        return $days[$day];
      })->keyBy(function($entry) use ($days) {
        return array_search($entry, $days);
      });
    }

}
