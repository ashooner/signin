<?php

use Illuminate\Database\Seeder;
use App\Attendee;

class AttendeesTableSeeder extends Seeder
{
    public function run()
    {
        $json = File::get("database/data/attendees.json");
        $data = json_decode($json);
        foreach($data as $obj){
            Attendee::create(
                array(
                    'event_id' => $obj->FIELD1,
                    'name' => $obj->FIELD2,
                    'role' => $obj->FIELD3,
                    'county' => $obj->FIELD4,
                    'email' => $obj->FIELD5,

                )
            );
        }
    }
}