<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventsTableSeeder extends Seeder
{
    public function run()
    {
        $json = File::get("database/data/events.json");
        $data = json_decode($json);
        foreach($data as $obj){
            Event::create(
                array(
                    'id' => $obj->FIELD1,
                    'name' => $obj->FIELD2,
                    'date' => $obj->FIELD3,
                    'description' => $obj->FIELD4,
                    'type' => $obj->FIELD5,

                )
            );
        }
    }
}