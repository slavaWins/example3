<?php

    namespace App\Http\Controllers\Example3;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;

    class Example3Controller extends Controller
    {


        public function index() {


            return view('example3.example');

        }
    }
