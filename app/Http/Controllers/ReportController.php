<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    //Invest
    public function investreport(){
        return view('admin.reports.investreport');
    }
    //Expense Reports
    public function expensereport(){
        return view('admin.reports.expensereport');
    }

    //Income Reports
    public function incomereport(){
        return view('admin.reports.incomereport');
    }

    

}    

