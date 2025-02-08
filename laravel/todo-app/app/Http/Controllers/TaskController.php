<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        // データベースから全てのタスクを取得
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    // タスク作成フォームとタスクリストを表示
    public function create()
    {
        $tasks = Task::all(); // タスクを全件取得
        return view('tasks.index', compact('tasks'));
    }

    // タスクの保存
    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'name' => 'required|max:255',
        ]);

        // タスクの作成
        Task::create([
            'name' => $request->name,
            'completed' => false, // デフォルトは未完了
        ]);

        // タスク追加後、タスク一覧に戻る
        return redirect()->route('tasks.create');
    }
}
