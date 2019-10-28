<?php

namespace App\Http\Controllers;

use App\Announcements;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('list', ['announcements' => Announcements::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fieldsToSave = $this->setCustomValues($this->validateAnnouncements());
        Announcements::create($fieldsToSave);

        session(['success' => true]);

        return redirect(route('announcements.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function show(Announcements $announcements)
    {
        return $announcements;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcements $announcements)
    {
        return view('edit', ['announcement' => $announcements]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announcements $announcements)
    {
        $fieldsToSave = $this->setCustomValues($this->validateAnnouncements());
        $announcements->update($fieldsToSave);

        session(['success' => true]);

        return redirect(route('announcements.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcements $announcements)
    {
        $announcements->update(['active' => false]);
        return redirect(route('announcements.index'));
    }

    private function validateAnnouncements()
    {
        return request()->validate([
            'title' => ['required', 'min:3', 'max:100'],
            'comments' => ['required', 'min:2'],
            'start_date' => 'required',
            'expiration_date' => 'required',
        ]);
    }

    public function setCustomValues(array $fieldsToSave)
    {
        $fieldsToSave['user_id'] = Auth::id();
        $fieldsToSave['start_date'] = Announcements::dateBrToDatabase($fieldsToSave['start_date']);
        $fieldsToSave['expiration_date'] = Announcements::dateBrToDatabase($fieldsToSave['expiration_date']);

        return $fieldsToSave;
    }
}
