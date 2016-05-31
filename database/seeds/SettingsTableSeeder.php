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
        $settings->video       = '<div class="video-js-responsive-container vjs-hd">
    <video id="video_1" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto" poster="/img/video.jpg" data-setup=\'\'>
        <source src="/video/etnomir.mp4" type="video/mp4" />
    </video>
</div>';
        $settings->save();
    }
}
