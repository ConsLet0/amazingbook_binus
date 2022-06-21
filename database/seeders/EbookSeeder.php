<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ebooks')->insert([
            'title' => '1936 novel',
            'author' => 'William Faulkner',
            'description' => 'This quotation for Faulkner’s 1936 novel comes from the Books of Samuel – more specifically, 19:4 in 2 Samuel, 
            which is in the Old Testament and relates some of the history of Israel. Absalom, the third son of David, rebelled against his father and was killed in battle. 
            The full Biblical sentence is But the king covered his face, and the king cried with a loud voice, O my son Absalom, O Absalom, my son, my son! Faulkner was a big fan of borrowed titles: his 1939 If I Forget Thee, 
            Jerusalem is also from the Bible, Psalms 137:5. The line in question is If I forget thee, Jerusalem, let my right hand forget its skill.'
        ]);

        DB::table('ebooks')->insert([
            'title' => 'Old Testament',
            'author' => 'John Grisham',
            'description' => 'This one is from 3:3 in the Ecclesiastes, again part of the Old Testament. The anonymous author is a King of Jerusalem who relates and analyses 
            events in his own life. This has resonated strongly with a lot of people: Abraham Lincoln quoted Ecclesiastes when addressing Congress in 1862, and the novelist 
            Thomas Wolfe called it ‘the greatest single piece of writing I have ever known.’ Grisham’s 1989 title is taken from the line that [To every thing there is a season, 
            and a time to every purpose under the heaven:] A time to kill, and a time to heal; a time to break down, and a time to build up…'
        ]);

        DB::table('ebooks')->insert([
            'title' => 'Brilliant sentence',
            'author' => 'Edith Wharton',
            'description' => 'Another Ecclesiastes quotation, this time from line 7:4. A brilliant sentence: The heart of the wise is in the house of mourning; but the heart of 
            fools is in the house of mirth. One of Wharton’s best-known novels, it came out in 1905.'
        ]);

        DB::table('ebooks')->insert([
            'title' => 'Land of Nod',
            'author' => 'John Steinbeck',
            'description' => 'Steinbeck apparently considered this 1952 novel to be his magnum opus, the one which all other novels before it had merely been practice for. 
            The title is suitably grand. Taken from Genesis, the first book of the Old Testament, it refers to line 4:16, after Cain has slain his brother Abel. And Cain 
            went out from the presence of the Lord, and dwelt in the land of Nod, on the east of Eden.'
        ]);

        DB::table('ebooks')->insert([
            'title' => 'Hemingway’s modernist',
            'author' => 'Ernest Hemingway',
            'description' => 'More Ecclesiastes! This particular quotation is from 1:5, which states that The sun also ariseth, and the sun goeth down, and hasteth to his 
            place where he arose. Hemingway’s modernist novel came out in 1926.'
        ]);

        DB::table('ebooks')->insert([
            'title' => 'Evelyn Waugh',
            'author' => 'Philippians',
            'description' => 'Waugh took the title for his 1930 novel from Philippians, full name Epistle to the Philippians, which is part of the New Testament and generally 
            attributed to Paul the Apostle. Most scholars consider it to be a collection of letter fragments sent from Paul to the church of Philippi, a city on the Greek island 
            of Thasos. The line in question is 3:21 and refers to Jesus Christ, [w]ho shall change our vile body, that it may be fashioned like unto his glorious body, according 
            to the working whereby he is able even to subdue all things unto himself.'
        ]);
    }
}
