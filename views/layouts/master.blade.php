<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/public/styles/main.css">
        <link rel="stylesheet" href="/public/styles/core/bootstrap.css">
        <link rel="stylesheet" href="/public/styles/core/bootstrap-theme.css">
        <link rel="stylesheet" href="/public/styles/@yield('styleFile')">
        <script type="text/javascript" src="/public/scripts/core/jquery-2.1.1.js" ></script>
        <script type="text/javascript" src="/public/scripts/core/bootstrap.js" ></script>
    </head>
    <body>
    <div class="Menu">
        <div class="centerContent">
            <div class="MenuHeader" id="SiteLogo">
                <img alt="Web2Photo" src="data:image/png;base64,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" />
            </div>
            <div class="MenuHeader" id="SiteBasket">
                Корзина
            </div>
            <div class="MenuHeader" id="SiteLogin">
                Логин
            </div>
        </div>
    </div>
        <div class="container">
            <div class="centerContent" style="padding-top: 50px;">
                <div class="Content">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
    <script>
            var clientWidth = 0, clientHeight = 0;
            var int1=0;
            if( typeof( window.innerWidth ) == 'number' ) {
                //Non-IE
                clientWidth = window.innerWidth;
                clientHeight = window.innerHeight;
                int1=1;
            } else if( document.documentElement && ( document.documentElement.clientWidth ||

                document.documentElement.clientHeight ) ) {
                //IE 6+ in 'standards compliant mode'
                clientWidth = document.documentElement.clientWidth;
                clientHeight = document.documentElement.clientHeight;
                int1=2;
            } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
                //IE 4 compatible
                clientWidth = document.body.clientWidth;
                clientHeight = document.body.clientHeight;
                int1=3;
            }
            var container = $(".container");
            container.width(clientWidth);
            container.height(clientHeight);
    </script>
    <?php //echo Asset::scripts(); ?>
</html>