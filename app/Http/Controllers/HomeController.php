<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Konsultasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $konsultasiAll = Konsultasi::count();
        $konsultasiAnswered = Konsultasi::whereNotNull('jawaban_at')->count();
        $konsultasiUnanswered = Konsultasi::whereNull('jawaban_at')->count();
        $konsultasiUnansweredShow = Konsultasi::whereNull('jawaban_at')->get();
        $ustadz = User::where('is_admin', false)->count();

        $data = [
            'konsultasiAll' => $konsultasiAll,
            'konsultasiAnswered' => $konsultasiAnswered,
            'konsultasiUnanswered' => $konsultasiUnanswered,
            'konsultasiUnansweredShow' => $konsultasiUnansweredShow,
            'ustadz' => $ustadz
        ];
        return view('admin.dashboard', $data);
    }

    public function mail(Konsultasi $konsultasi)
    {
        return view('mail.konsultasi', compact('konsultasi'));
    }
}
