@if (app()->environment('production'))
    <!-- Yandex.Metrika counter -->
    <script src="https://mc.yandex.ru/metrika/watch.js" type="text/javascript"></script>
    <script type="text/javascript">
        try {
            var yaCounter37722990 = new Ya.Metrika({
                id:37722990,
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true,
                trackHash:true
            });
        } catch(e) { }
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/37722990" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
@endif