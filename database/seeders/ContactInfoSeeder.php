<?php

namespace Database\Seeders;

use App\Models\ContactInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactInfo::create([
            "city"=>"Buttonwood, California.",
            "adress"=>"Rosemead, CA 91770",
            "phone"=>"00 (440) 9865 562",
            "open_closeTime"=>"Mon to Fri 9am to 6pm",
            "email"=>"support@colorlib.com"
        ]);
    }
}
