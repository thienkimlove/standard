<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks=0");

        Model::unguard();

        \App\Setting::truncate();
        
        $settings = [
            [
                'name' => 'META_INDEX_TITLE',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_INDEX_DESC',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_INDEX_KEYWORDS',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_CATEGORY_DESC',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_CATEGORY_KEYWORDS',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_POST_KEYWORDS',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_CONTACT_TITLE',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_CONTACT_DESC',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_CONTACT_KEYWORDS',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_VIDEO_TITLE',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_VIDEO_DESC',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_VIDEO_KEYWORDS',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_QUESTION_TITLE',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_QUESTION_DESC',
                'value' => 'VitaminC'
            ],
            [
                'name' => 'META_QUESTION_KEYWORDS',
                'value' => 'VitaminC'
            ],
        ];

        \App\Setting::insert($settings);

        Model::reguard();

        DB::statement("SET foreign_key_checks=1");

    }
}
