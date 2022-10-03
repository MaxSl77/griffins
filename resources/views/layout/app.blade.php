<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/index.css">
    <link rel="stylesheet" href="/styles/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <script src="/styles/index.js" defer></script>
    <title>@yield('title')</title>
</head>

<body>
{{--<!-- Yandex.Metrika counter -->--}}
{{--<script type="text/javascript" >--}}
{{--    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};--}}
{{--        m[i].l=1*new Date();--}}
{{--        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}--}}
{{--        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})--}}
{{--    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");--}}

{{--    ym(90601779, "init", {--}}
{{--        clickmap:true,--}}
{{--        trackLinks:true,--}}
{{--        accurateTrackBounce:true,--}}
{{--        webvisor:true--}}
{{--    });--}}
{{--</script>--}}
{{--<noscript><div><img src="https://mc.yandex.ru/watch/90601779" style="position:absolute; left:-9999px;" alt="" /></div></noscript>--}}
{{--<!-- /Yandex.Metrika counter -->--}}
@yield('content')
</body>

</html>
