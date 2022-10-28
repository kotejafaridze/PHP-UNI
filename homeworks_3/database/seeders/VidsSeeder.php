<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vids;

class VidsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vids::create([
            "Youtube_link" => "https://www.youtube.com/watch?v=cExLQ1o2pDw",
            "Description" => "First To Rob Bank Wins $100,000",
            "Release Date" => "Sep 27, 2021", 
            "Channel name" => "MrBeast",
        ]);
        
        Vids::create([
            "Youtube_link" => "https://www.youtube.com/watch?v=7qrVQwjieac",
            "Description" => "Conor McGregor's 13-Second KO of Jose Aldo | UFC 194, 2015 | On This Day",
            "Release Date" => "Dec 12, 2021", 
            "Channel name" => "UFC",
        ]);
        Vids::create([
            "Youtube_link" => "https://www.youtube.com/watch?v=7UOryLeU86A",
            "Description" => "Ser Arthur Dayne, Sword of the Morning, vs young Ned Stark and Howland Reed",
            "Release Date" => "May 9, 2016 ", 
            "Channel name" => "Axhol3Rose",
        ]);
        Vids::create([
            "Youtube_link" => "https://www.youtube.com/watch?v=PSUnXft9RY4",
            "Description" => "The most darkest humour in family guy (not for snowflakes) #11",
            "Release Date" => "Sep 9, 2022", 
            "Channel name" => "FunnyTop Reaction",
        ]);
        Vids::create([
            "Youtube_link" => "https://www.youtube.com/watch?v=VuEIGBLtxzM",
            "Description" => "SHOUSE - Won't Forget You",
            "Release Date" => "Feb 4, 2022", 
            "Channel name" => "SHOUSE",
        ]);
        
    }
}
