<?php

namespace App\Http\Controllers;

use App\ScheduleEntry;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    
    public function addEntry(Request $request)
    {
      $entry = ScheduleEntry::make([
        'day' => $request->day,
        'start' => $request->start,
        'end' => $request->end
      ]);
      auth()->user()->schedule->entries()->save($entry);
      return redirect()->back();
    }

}
