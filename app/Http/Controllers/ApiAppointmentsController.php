<?php

namespace App\Http\Controllers;

use function foo\func;
use Illuminate\Http\Request;
use App\Appointment;

class ApiAppointmentsController extends Controller
{

    public function index() {
        $appointments = Appointment::get();
        return $appointments;
    }

}

//$artists = Artist::with(['songs' => function($q) {
//    $q->where('user_id', \Auth::user()->id)->orderBy('title')->with(['album']);
//}])->orderBy('name')->get();
//

//select * from appointments inner join groomers ON groomer_id
