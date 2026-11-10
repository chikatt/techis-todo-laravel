<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Repositories\TaskRepository;


class TaskController extends Controller
{
    protected $tasks;

    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');
        $this->tasks = $tasks;
    }       
    /**
     * タスク一覧
     * 
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $tasks = $this->tasks->forUser($request->user());
        return view('tasks.index',[
            'tasks'=>$tasks
       ]);
    }


        /**
         * タスク登録
         * 
         * @param Request $request
         * @return Response
         */
        public function create(Request $request)
        {
            $this->validate($request, [
                'name' => 'required|max:255',
            ]);

            // タスク作成
            $tasks = $request->user()->tasks()->create([
                'name' => $request->name,
            ]);
            return redirect('/tasks');
        }

                /**
                 * タスク削除
                 *
                 * @param int $taskid
                 * @return Response
                 */

        public function delete ($taskid)
        {
            $task = Task::findOrFail($taskid);

            $this->authorize('delete', $task);
            $task->delete();
        return redirect('/tasks');
    }
}