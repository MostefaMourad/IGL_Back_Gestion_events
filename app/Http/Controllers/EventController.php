<?php

namespace App\Http\Controllers;

use App\Event;
use App\Helpers\APIHelpers;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        $response = APIHelpers::createAPIResponse(false, 200, '', $events);
        return response()->json($response, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_event = new Event();
        
        $new_event->nom = $request->nom;
        $new_event->description = $request->description;
        $new_event->nom = $request->nom;
        $new_event->nbr_interesse = $request->nbr_interesse;
        $new_event->nbr_participe = $request->nbr_participe;
        $new_event->organisateur = $request->organisateur;
        $new_event->adresse = $request->adresse;
        $new_event->date_debut = $request->spedate_debut;
        $new_event->duree = $request->duree;

        $event_save = $new_event->save();
        if ($event_save) {
            $response = APIHelpers::createAPIResponse(false, 201, 'Ajout avec succes', null);
            return response()->json($response, 201);
        } else {
            $response = APIHelpers::createAPIResponse(true, 400, 'echec', null);
            return response()->json($response, 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $events = Event::all();
        $response = APIHelpers::createAPIResponse(false, 200, '', $events);
        return response()->json($response, 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
