<?php

use App\Settings;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = new Settings();
        $settings->email       = 'admin@restoran-glush.ru';
        $settings->phone       = '+79123456789';
        $settings->description = '<p>Описание сайта</p>';
        $settings->video       = '<video id="example_video_1" class="video-js vjs-default-skin vjs-big-play-centered"
               controls preload="auto" width="1600" height="900"
               poster="/img/video.jpg"
               data-setup=\'{autoHeight: true, height: 300}\'>
            <source src="/video/etnomir.mp4" type="video/mp4" />
        </video>';
        $settings->save();
    }
}
