<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shi</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/api.css')  }}" rel="stylesheet" type="text/css">

</head>
<body>
<div id="app">

    <header id="header">

        <div class="header-top">
            <div class="header-fix"></div>
            <div class="container header_sub">
                <div class="headerdiv">
                    <div class="header_logo hidden-md-down">
                        <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/">
                            <img class="logo img-responsive" src="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/img/demo-shop-logo-1540212226.jpg" alt="Demo Shop">
                        </a>
                    </div>
                </div>
                <div id="_desktop_contact_link">
                    <div class="contact-link">
                        call us
                        &nbsp;: <span>0123-456-789</span>
                    </div>
                </div>
                <div class="block links" id="links_block_top" >
                    <ul id="tm_toplink" class="block_content">
                        <li>
                            
                        </li>
                        <li></li>
                        <li></li>
                        <li></li>

                    </ul>
                </div>
            </div>
        </div>


    </header>


</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js')  }}"></script>
<script src="{{ asset('js/api.js')  }}"></script>

</body>
</html>
