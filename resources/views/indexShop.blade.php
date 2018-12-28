<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shi</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Styles -->
        <link href="{{ asset('css/font-awesome.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/verticalmenu.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/verticalmenu.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/flexslider.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/tmcategorylist.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/custom.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/api.css')  }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


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
                        <ul id="top-menu" class="tm_sf-menu top-menu" style="display: none;" data-depth="0">
                            <li id="tmcategory-3" class="category ">
                                <a class="dropdown-item" href="www.google.com" data-depth="0">
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
                            <li  class="category">
                                  <a href="#" class="dropdown-item"> Categoria 2 </a>
                            </li>
                            <li  class="category">
                                  <a href="#" class="dropdown-item"> Categoria 3 </a>
                            </li>
                             <li  class="category">
                                  <a href="#" class="dropdown-item"> Categoria 4 </a>
                            </li>
                             <li  class="category">
                                  <a href="#" class="dropdown-item"> Categoria 5 </a>
                            </li>
                             <li  class="category">
                                  <a href="#" class="dropdown-item"> Categoria 6 </a>
                            </li>
                             <li  class="category">
                                  <a href="#" class="dropdown-item"> Categoria 7 </a>
                            </li>
                             <li  class="category">
                                  <a href="#" class="dropdown-item"> Categoria 7 </a>
                            </li>
                             <li  class="category">
                                  <a href="#" class="dropdown-item"> Categoria 7 </a>
                            </li>
                            <li>
                                <div class="more-wrap">
                                    <span class="more-view">More Categories<i class="material-icons"></i>
                                    </span>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>   
                <div id="_desktop_cart">
                    <div class="blockcart cart-preview inactive" data-refresh-url="//prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?fc=module&amp;module=ps_shoppingcart&amp;controller=ajax&amp;id_lang=3">
                        <div class="header blockcart-header dropdown js-dropdown">
                    
                            <a rel="nofollow" href="//prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?controller=cart&amp;action=show"> 
                                <div class="cart-image">
                        
                                    <i class="shopping-cart bgcart"></i>
                            
                                </div>
                                <div class="cart-price">
                                <!-- <span class="hidden-md-down cart">items</span> -->
                                    <span class="cart-products-count">0</span>
                                
                                <i class="hidden-md-down material-icons expand-more"></i>
                            <!--        <span class="hidden-md-down value">(0,00 $)</span> -->
                                    </div>
                            </a>
                        </div>
                  </div>
                </div>

                <div id="_desktop_user_info">
                    <div class="tm_userinfotitle"><i class="user-infoimg"></i>
                    </div>
                    <ul class="user-info" style="">
                        <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?controller=my-account" title="Log in to your customer account" rel="nofollow">
                            <i class="material-icons"></i>
                            <span class="hidden-md-down">Iniciar sesión</span>
                        </a>
                    </ul>
                </div>


                <div id="search_widget" class="col-lg-12 col-md-12 col-sm-12 search-widget" data-search-controller-url="//prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?controller=search">
                    <span class="search_button"></span>
                    <div class="searchtoggle">
                        <form method="get" action="//prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?controller=search">
                            <input type="hidden" name="controller" value="search">
                            <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input type="text" name="s" value="" placeholder="Serach Products..." aria-label="Buscar" class="ui-autocomplete-input" autocomplete="off">
                            <button type="submit">
                                <div class="submit-text">Search</div>
                                <!--<i class="material-icons search">&#xE8B6;</i>-->
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section id="wrapper">
    
        <div class="topdiv">

            <div class="flexslider" data-interval="3000" data-pause="true">
                <div class="loadingdiv spinner"></div>
                    <ul class="slides">
                        <li class="slide">
                            
                            <a href="#" title="sample-3">
                    <img src="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/modules/tm_imageslider/views/img/sample-3.jpg" alt="sample-3" title="Sample 3" draggable="false">
                    </a>

                        </li>
                        <li class="slide">
                            
                            <a href="#" title="sample-3">
                    <img src="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/modules/tm_imageslider/views/img/sample-3.jpg" alt="sample-3" title="Sample 3" draggable="false">
                    </a>

                        </li>
                        <li class="slide">
                            
                            <a href="#" title="sample-3">
                    <img src="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/modules/tm_imageslider/views/img/sample-3.jpg" alt="sample-3" title="Sample 3" draggable="false">
                    </a>

                        </li>
                    </ul>
            </div>

            <div class="tmcategorylist">
                <div class="container">
                    <h2 class="h1 products-section-title text-uppercase">
                        Shop by Category
                    </h2>
                    <div id="spe_res">
                        <div class="tmcategory-container">
                            <div class="customNavigation">
                                <a class="btn prev cat_prev">&nbsp;</a>
                                <a class="btn next cat_next">&nbsp;</a>
                            </div>
                            <ul id="tmcategorylist-carousel" class="tm-carousel product_list product_slider_grid">
                                <li>
                                    <div class="categoryblock0 categoryblock item">
                                        <div class="block_content">
                                            <div class="categoryimage">
                                                <img src="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/modules/tm_categorylist/views/img/3-tm_categorylist.jpg" alt="" class="img-responsive">
                                            </div>    
                                            <div class="categorylist">
                                                <div class="cate-heading">
                                                    <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=3&amp;controller=category&amp;id_lang=3">Lamps of light</a>
                                                </div>
                                                <ul class="subcategory">
                                                    <li>
                                                        <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=4&amp;controller=category&amp;id_lang=3">carcel lamp</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=5&amp;controller=category&amp;id_lang=3">LED lamp</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=16&amp;controller=category&amp;id_lang=3">stack light</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=3&amp;controller=category&amp;id_lang=3" class="view">View all</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="categoryblock0 categoryblock item">
                                        <div class="block_content">
                                            <div class="categoryimage">
                                                <img src="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/modules/tm_categorylist/views/img/3-tm_categorylist.jpg" alt="" class="img-responsive">
                                            </div>    
                                            <div class="categorylist">
                                                <div class="cate-heading">
                                                    <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=3&amp;controller=category&amp;id_lang=3">Lamps of light</a>
                                                </div>
                                                <ul class="subcategory">
                                                    <li>
                                                        <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=4&amp;controller=category&amp;id_lang=3">carcel lamp</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=5&amp;controller=category&amp;id_lang=3">LED lamp</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=16&amp;controller=category&amp;id_lang=3">stack light</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=3&amp;controller=category&amp;id_lang=3" class="view">View all</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="categoryblock0 categoryblock item">
                                        <div class="block_content">
                                            <div class="categoryimage">
                                                <img src="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/modules/tm_categorylist/views/img/3-tm_categorylist.jpg" alt="" class="img-responsive">
                                            </div>    
                                            <div class="categorylist">
                                                <div class="cate-heading">
                                                    <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=3&amp;controller=category&amp;id_lang=3">Lamps of light</a>
                                                </div>
                                                <ul class="subcategory">
                                                    <li>
                                                        <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=4&amp;controller=category&amp;id_lang=3">carcel lamp</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=5&amp;controller=category&amp;id_lang=3">LED lamp</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=16&amp;controller=category&amp;id_lang=3">stack light</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=3&amp;controller=category&amp;id_lang=3" class="view">View all</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="categoryblock0 categoryblock item">
                                        <div class="block_content">
                                            <div class="categoryimage">
                                                <img src="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/modules/tm_categorylist/views/img/3-tm_categorylist.jpg" alt="" class="img-responsive">
                                            </div>    
                                            <div class="categorylist">
                                                <div class="cate-heading">
                                                    <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=3&amp;controller=category&amp;id_lang=3">Lamps of light</a>
                                                </div>
                                                <ul class="subcategory">
                                                    <li>
                                                        <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=4&amp;controller=category&amp;id_lang=3">carcel lamp</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=5&amp;controller=category&amp;id_lang=3">LED lamp</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=16&amp;controller=category&amp;id_lang=3">stack light</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=3&amp;controller=category&amp;id_lang=3" class="view">View all</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="categoryblock0 categoryblock item">
                                        <div class="block_content">
                                            <div class="categoryimage">
                                                <img src="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/modules/tm_categorylist/views/img/3-tm_categorylist.jpg" alt="" class="img-responsive">
                                            </div>    
                                            <div class="categorylist">
                                                <div class="cate-heading">
                                                    <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=3&amp;controller=category&amp;id_lang=3">Lamps of light</a>
                                                </div>
                                                <ul class="subcategory">
                                                    <li>
                                                        <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=4&amp;controller=category&amp;id_lang=3">carcel lamp</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=5&amp;controller=category&amp;id_lang=3">LED lamp</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=16&amp;controller=category&amp;id_lang=3">stack light</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/index.php?id_category=3&amp;controller=category&amp;id_lang=3" class="view">View all</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tmcmsbannerblock">
                <div class="container">
                    <div class="cms1block">
                        <div class="innercms1block">
                            <div class="first_banner first_banner1 col-lg-6 col-md-6 col-sm-12 col-xs-12"><a class="imgcms1 imgcms" href="#"> <img alt="top-banner-1.jpg" src="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/img/cms/Sub-banner-01.jpg"></a>
                                <div class="innercms1text innercms1text1"><span class="smalltext smalltext1"> smart watches </span>
                                    <h1 class="headingcms1 headingcms11">27% flate</h1>
                                </div>
                            </div>
                            <div class="first_banner first_banner2 col-lg-6 col-md-6 col-sm-12 col-xs-12"><a class="imgcms2 imgcms" href="#"> <img alt="top-banner-1.jpg" src="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/img/cms/Sub-banner-02.jpg"></a>
                                <div class="innercms1text innercms1text2"><span class="smalltext smalltext2"> apple moniters </span>
                                    <h1 class="headingcms1 headingcms12">15% flate</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tmcmsblock">
                <div class="cms-banner-inner">
                    <div class="cms-banner-img"><a class="image-link" target="_blank" title="Home"><img src="https://prestashop.templatemela.com/PRS08/PRS080190/PRS01/img/cms/Cms.jpg" alt="Cms.jpg"></a><span class="static-wrapper"><span class="static-inner"><span class="text1 static-text">Best Discount</span><span class="text2 static-text">On Game Console</span><span class="text-button"><a target="_blank" class="link-text">Grab Offer</a></span></span></span></div>
                </div>
            </div>

            <div id="tmcmsserviceblock">
                <div class="container">
                    <div class="service-cms-banner-list service-1">
                        <div class="service-content">
                            <div class="icon-image"></div>
                            <div class="service-details">
                                <div class="title">next day delivery</div>
                                <span class="service-title">UK Orders Only</span></div>
                        </div>
                    </div>
                    <div class="service-cms-banner-list service-2">
                        <div class="service-content">
                            <div class="icon-image"></div>
                            <div class="service-details">
                                <div class="title">best online support</div>
                                <span class="service-title">hours: 8AM - 11PM</span></div>
                        </div>
                    </div>
                    <div class="service-cms-banner-list service-3">
                        <div class="service-content">
                            <div class="icon-image"></div>
                            <div class="service-details">
                                <div class="title">worldwide delivery</div>
                                <span class="service-title">for order over $100</span></div>
                        </div>
                    </div>
                    <div class="service-cms-banner-list service-4">
                        <div class="service-content">
                            <div class="icon-image"></div>
                            <div class="service-details">
                                <div class="title">special weekly gift</div>
                                <span class="service-title">enter numbers</span></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


    </section>


</div>

<!-- Scripts -->
<script src="{{ asset('js/jquery-3.3.1.min.js')  }}"></script>
<script src="{{ asset('js/jquery.flexslider-min.js')  }}"></script>
<script src="{{ asset('js/owl.carousel.js')  }}"></script>
<script src="{{ asset('js/api.js')  }}"></script>

</body>
</html>
