<?php

namespace Tests\Unit;

use App\Event;
use App\Helpers \APIHelpers;
use Tests\TestCase;

class EventTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_can_create_event() {
        $data = [
            'nom' => $this->faker->catchPhrase,  
            'description' => $this->faker->text,
            'nbr_interesse' => $this->faker->numberBetween($min = 1000, $max = 9000),  
            'nbr_participe' => $this->faker->numberBetween($min = 100, $max = 1000),
            'organisateur' => $this->faker->company,
            'adresse' => $this->faker->address,
            'date_debut' => null,
            'duree' => $this->faker->numerify('# jours')
          ];
          $response = APIHelpers::createAPIResponse(false, 201, 'Ajout avec succes',$data);
          $this->post(route('events.store'), $data)
            ->assertStatus(201);
      } 

    public function test_can_update_event() {
        $event = factory(Event::class)->create();
        $data = [
            'id' => $event->id ,
            'nom' => $this->faker->catchPhrase,  
            'description' => $this->faker->text,
            'nbr_interesse' => $this->faker->numberBetween($min = 1000, $max = 9000),  
            'nbr_participe' => $this->faker->numberBetween($min = 100, $max = 1000),
            'organisateur' => $this->faker->company,
            'adresse' => $this->faker->address,
            'date_debut' => null,
            'duree' => $this->faker->numerify('# jours') ,
            'created_at' => $event->created_at ,
            'updated_at' => $event->updated_at 
        ];
        $response = APIHelpers::createAPIResponse(false, 200, 'Modification avec succes', $data); 
        $this->patch(route('events.update', $event->id), $data)
            ->assertStatus(200)
            ->assertJson($response);
    } 
    public function test_can_show_event() {
        $event = factory(Event::class)->create();
        $this->get(route('events.show', $event->id))
            ->assertStatus(200);
    }
    
    public function test_can_delete_event() {
        $event = factory(Event::class)->create();
        $this->delete(route('events.delete', $event->id))
            ->assertStatus(200);
    } 
    public function test_can_list_event() {
        $events = factory(event::class, 2)->create()->map(function ($event) {
            return $event->only(['id', 'nom', 'description','nbr_interesse','nbr_participe','organisateur','adresse','date_debut','duree','created_at','updated_at']);
        });
        $response = APIHelpers::createAPIResponse(false, 200, '', $events->toArray());
        $this->get(route('events'))
            ->assertStatus(200)
            ->assertJson($response);
    }

}
