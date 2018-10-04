<?php

namespace App\Http\Controllers;

use App\Repository\StudentRepository;
use Illuminate\Http\Request;
use Validator;

class StudentController extends Controller
{
    //
    private $studentRepository;

    public function __construct(StudentRepository $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:students',
            'password' => 'required|string|min:6',
            'mobile' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $response = $this->studentRepository->create($request->all());
        return response()->json(['data' => $response]);
    }

    public function get($id)
    {
        $studentData = $this->studentRepository->show($id);

        return response()->json(['data' => $studentData]);
    }

    public function lists()
    {
        $data = $this->studentRepository->all();

        return response()->json(['data' => $data]);
    }

}
