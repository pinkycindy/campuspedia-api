<?php

namespace App\Http\Controllers\Api;

use App\Event;
use App\Http\Controllers\Controller;
use App\Http\Resources\Event as EventResource;
use App\Http\Resources\EventCollection;

class EventController extends Controller
{
    /**
     * Show all event
     * @return Response JSON
     */
    public function index()
    {
        return new EventCollection(Event::orderBy('event_date', 'asc')->paginate());
    }

    /**
     * Show event per id
     * @return Response JSON
     */
    public function show($id)
    {
        if (Event::find($id)) {
            return new EventResource(Event::find($id));
        } else {
            return response()->json([
                'data' => [
                    'message' => 'Event not found!'
                ],
                'meta' => [
                    'status_code' => 0,
                ]
            ]);
        }
    }
}
