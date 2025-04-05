<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Worldcompany;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\IDUController;
use App\Http\Controllers\UserContruller;

Route::post("/addEmployeLayer1",[Worldcompany::class,"AddEmployeL1"]);

