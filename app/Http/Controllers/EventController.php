<?php

namespace App\Http\Controllers;

use App\Event;
use App\Helpers\APIHelpers;
use Illuminate\Http\Request;
use App\Http\Requests\AjoutEventRequest;
use App\Http\Requests\UpdateEventRequest;

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
    public function store(AjoutEventRequest $request)
    {
        $new_event = new Event();
        $new_event->nom = $request->nom;
        $new_event->description = $request->description;
        $new_event->nbr_interesse = $request->nbr_interesse;
        $new_event->nbr_participe = $request->nbr_participe;
        $new_event->organisateur = $request->organisateur;
        $new_event->adresse = $request->adresse;
        $new_event->date_debut = $request->spedate_debut;
        $new_event->duree = $request->duree;

        $event_save = $new_event->save();
        if ($event_save) {
            $response = APIHelpers::createAPIResponse(false, 201, 'Ajout avec succes', $new_event);
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
        $event = Event::find($id);
        if($event==null){
            $response = APIHelpers::createAPIResponse(true, 204,'Evenement introuvable', null);
        }
        else{
            $response = APIHelpers::createAPIResponse(false, 200, 'Evenement trouvee', $event);
        }       
        return response()->json($response, 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, $id)
    {
        $event = event::find($id);
        if ($event == null) {
            $response = APIHelpers::createAPIResponse(true, 400, 'echec:evenement introuvable', null);
            return response()->json($response, 400);
        } else {
            $event->nom = $request->nom;   
            $event->description = $request->description;
            $event->nbr_interesse = $request->nbr_interesse;
            $event->nbr_participe = $request->nbr_participe;
            $event->organisateur = $request->organisateur;
            $event->adresse = $request->adresse;
            $event->date_debut = $request->spedate_debut;
            $event->duree = $request->duree;
            $event_save = $event->save();
            if ($event_save) {
                $response = APIHelpers::createAPIResponse(false, 200, 'Modification avec succes', $event);
                return response()->json($response, 200);
            } else {
                $response = APIHelpers::createAPIResponse(true, 400, 'echec', null);
                return response()->json($response, 400);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        if ($event == null) {
            $response = APIHelpers::createAPIResponse(true, 400, 'echec:evenement introuvable', null);
            return response()->json($response, 400);
        } else {
            $event_delete = $event->delete();
            if ($event_delete) {
                $response = APIHelpers::createAPIResponse(false, 200, 'Suppression avec succes', $event);
                return response()->json($response, 200);
            } else {
                $response = APIHelpers::createAPIResponse(true, 400, 'echec', null);
                return response()->json($response, 400);
            }
        }
    }
}
