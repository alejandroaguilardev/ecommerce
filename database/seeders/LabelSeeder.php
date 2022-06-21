<?php

namespace Database\Seeders;

use App\Models\Label;
use Illuminate\Database\Seeder;

class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $label = new Label;
        $label->label="direction";
        $label->description= "Jr camana 457";
        $label->save();

        $label2 = new Label;
        $label2->label="mobile";
        $label2->description="(01) 5123 354";
        $label2->save();

        $label3 = new Label;
        $label3->label="phone";
        $label3->description= "923 844 025";
        $label3->save();

        $label4 = new Label;
        $label4->label="whatsapp";
        $label4->description= "51923844025";
        $label4->save();

        $label5 = new Label;
        $label5->label="email";
        $label5->description= "alexaguilar281@gmail.com";
        $label5->save();
    }
}
