<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = $request->filter;
        $konsultasi = Konsultasi::when($filter == "unanswered", function ($q) use ($filter) {
            return $q->whereNull('jawaban_at');
        })
            ->when($filter == "answered", function ($q) use ($filter) {
                return $q->whereNotNull('jawaban_at');
            })
            ->get();

        $data = [
            'konsultasi' => $konsultasi
        ];
        return view('admin.konsultasi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('konsultasi.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $form = $this->validate($request, [
            'nama' => 'required|string',
            'email' => 'required|string',
            'pertanyaan' => 'required|string',
            'jawaban' => '',
            'jawaban_by' => '',
            'jawaban_at' => '',
            'g-recaptcha-response' => 'recaptcha',
        ]);

        Konsultasi::create($form);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function show(Konsultasi $konsultasi)
    {
        $data = [
            'konsultasi' => $konsultasi
        ];
        return view('admin.konsultasi.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Konsultasi $konsultasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Konsultasi $konsultasi)
    {
        $konsultasi->update($request->only(['jawaban']));

        $data = [
            'konsultasi' => $konsultasi
        ];
        return view('admin.konsultasi.show', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Konsultasi $konsultasi)
    {
        //
    }
}
