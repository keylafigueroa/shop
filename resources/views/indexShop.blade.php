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
        <link href="{{ asset('css/verticalmenu.css')  }}" rel="stylesheet" type="text/css">


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
                            <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php" title="home">INICIO </a>
                        </li>
                        <li>
                            <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php" title="home">COLECCION </a>
                        </li>
                        <li>
                            <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php" title="home">OFERTA ESPECIAL </a>
                        </li>
                        <li>
                            <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php" title="home">CONTACTANOS </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
         <div class="headernavfull">
                <div class="container">
                    <div id="tm_vertical_menu_top" class="tmvm-contener clearfix col-lg-12">
                        <div class="block-title">
                            <div class="menu-title">all Categories</div>
                            <i class="fa fa-angle-down menu-open" aria-hidden="true"></i>
                        </div>
                        <div id="_desktop_top_menu" class="menu vertical-menu js-top-menu position-static hidden-sm-down">
                            <ul id="top-menu" class="tm_sf-menu top-menu" style="display: none;">
                                <li id="tmcategory-3" class="category ">
                                    <a class="dropdown-item" href="www.google.com">
                                        <span class="pull-xs-right  hidden-sm-down">
                                            <i class="material-icons left"></i>
                                            <i class="material-icons right"></i>
                                        </span>
                                        <span class="pull-xs-right hidden-lg-up">
                                            <span data-target="#top_sub_menu_78279" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add"></i>
                                                <i class="material-icons remove"></i>
                                            </span>
                                        </span>
                                        CATEGORIA
                                    </a>
                                    <div class="popover sub-menu js-sub-menu collapse threecolumn" style="display: none; top: 54px;">
                                        <ul class="tm_sf-menu top-menu">
                                            <li id="tmcategory-4" class="category">
                                                <a href="#" class="dropdown-item dropdown-submenu">
                                                    <span class="pull-xs-right  hidden-sm-down">
                                                        <i class="material-icons left"></i>
                                                        <i class="material-icons right"></i>
                                                    </span>
                                                    <span class="pull-xs-right hidden-lg-up">
                                                        <span data-target="#top_sub_menu_55155" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add"></i>
                                                            <i class="material-icons remove"></i>
                                                        </span>
                                                    </span>SUB CATEGORIA 
                                                </a>
                                                <div class="popover sub-menu js-sub-menu second_depth collapse" style="display: none; top: 54px;">
                                                    <ul class="tm_sf-menu top-menu">
                                                        
                                                        <l1 class="category">
                                                            <a href="" class="dropdown-item">SUB SUB 1</a>
                                                        </l1>
                                                        <l1 class="category">
                                                            <a href="" class="dropdown-item">SUB SUB 2</a>
                                                        </l1>
                                                        <l1 class="category">
                                                            <a href="" class="dropdown-item">SUB SUB 3</a>
                                                        </l1>  
                                                        <div class="menu-images-container"></div>          
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>   
                </div>
            </div>
    </header>


</div>

<!-- Scripts -->
<script src="{{ asset('js/jquery-3.3.1.min.js')  }}"></script>
<script src="{{ asset('js/api.js')  }}"></script>

</body>
</html>
