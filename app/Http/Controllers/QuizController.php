<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;
use App\Models\Sale;


class QuizController extends Controller
{
    public function index()
    {
        return view('question.quiz2');
    }


    public function show()
    {
        $quizzes = Quiz::get();
        return view('question.quiz3', compact('quizzes'));
    }

    public function quiz4_show()
    {
        $fruits = 'apple';
        return view('question.quiz4', compact('fruits'));
    }

    public function login(Request $request)
    {
        // セッションの削除
        $request->session()->flush();
        // ログインユーザーの設定
        $user_info = array(
            'email' => 'techis@test',
            'password' => '1234',
        );
        // ログインチェック
        if (Auth::attempt($user_info)) {
            // ログインに成功
            return view('question.quiz5');
        }
        // ログインに失敗
        return view('question.quiz5');
    }    

public function quiz6_show()
    {
        $quizzes = Quiz::get();
        return view('question.quiz6', compact('quizzes'));
    }
    
public function quiz7_show()
    {   
        $quiz = Quiz::find(1);
        return view('question.quiz7',compact('quiz'));
    }

public function quiz8_redirect()
    {
        return redirect('/quiz7');
    }
public function quiz9_show($id)
    {   
        $quiz = Quiz::find($id);
        return view('question.quiz9',compact('quiz'));
    }

public function quiz10_show()
    {
        $quizz = Quiz::get();
        return view('question.quiz10');
    }

public function quiz10_store(Request $request)
    {//1.バリデーション
        $request -> validate([
            'name' => 'required|max:30',
            'type' => 'required',
        ]);
        //2.登録
        Quiz::create([
            'name' => $request->name,
            'type' => $request->type,
        ]);
        return redirect('/quiz10');
    }    
public function quiz11_show()
    {
        $companies = Company::all();
        $sales = Sale::all();
        return view('question.quiz11', compact('companies', 'sales'));
    }

public function quiz11_show_get()
    {
        $companies = Company::where('founding_date', 'LIKE', '%-03-%')
        ->where('address', 'LIKE', 'テスト２%')
        ->get();
        $sales = Sale::where('company_id', 2)
        ->orwhere('sales', '>', '8000')
        ->orderBy('sales', 'desc')
        ->get();

        return view('question.quiz11', compact('companies', 'sales'));
    }   

public function quiz12_show($id)
    {
        $quiz = Quiz::findOrFail($id);
        return view('question.quiz12', compact('quiz'));
    }
    
public function quiz12_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:30',
            'type' => 'required',
        ]); 
        $quiz = Quiz::findOrFail($id);
        $quiz->update([
            'name' => $request->name,
            'type' => $request->type,
        ]);
        return redirect('/quiz3');
    }

public function quiz12_delete($id)
    {
        $quiz = Quiz::findOrFail($id);
        $quiz->delete();
        return redirect('/quiz3');
    }
}

