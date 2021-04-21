<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\StudentDetailsModel;

class StudentDetailsController extends Controller{
    //Count
    function aggregatesCount(){
        $result = StudentDetailsModel::count();
        return $result;
    }
    //Maximum 
    function aggregatesMaximum(){
        $result = StudentDetailsModel::max('roll');
        return $result; 
    }
    //Manimum
    function aggregatesManimum(){
        $result = StudentDetailsModel::min('roll');
        return $result; 
    }
    //Average 
    function aggregatesAverage(){
        $result = StudentDetailsModel::avg('roll');
        return $result; 
    }
    //Summation 
    function aggregatesSum(){
        $result = StudentDetailsModel::sum('roll');
        return $result; 
    }
}
