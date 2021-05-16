<?php

namespace App\Http\Controllers;

use App\Models\Terminal;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TerminalRequest;

class TerminalController extends Controller
{
    public function admin() {
        return view('terminal.admin.index', ['model' => Terminal::all()]);
    }

    /**
     * @return Application|Factory|View
     */
    public function index() {
        return view('terminal.index', ['model' => Terminal::all()]);
    }

    /**
     * @param int $id
     * @return Application|Factory|View
     */
    public function update(int $id) {
        return view('terminal.admin.update', ['model' => Terminal::find($id)]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function createSubmit(TerminalRequest $request) {
        $terminal = new Terminal();
        $terminal->command = $request->input('command');
        $terminal->command_answer = $request->input('command_answer');
        $terminal->save();
        return redirect()->route('terminal-admin')->with('success', 'ОК! Терминал был успешно создан!');
    }

    /**
     * @param int $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function updateSubmit(int $id, TerminalRequest $request): RedirectResponse {
        $terminal = Terminal::find($id);
        $terminal->command = $request->input('command');
        $terminal->command_answer = $request->input('command_answer');
        $terminal->save();

        return redirect()->route('update', $id)->with('success', 'ОК! Терминал был успешно обновлен!');
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function deleteSubmit(int $id): RedirectResponse
    {
        Terminal::find($id)->delete();
        return redirect()->route('terminal-admin')->with('success', 'ОК! Терминал был успешно удален!');
    }
}
