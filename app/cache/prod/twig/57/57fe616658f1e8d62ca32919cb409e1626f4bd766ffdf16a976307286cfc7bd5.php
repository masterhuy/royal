<?php

/* __string_template__8fb266f483492274b9c6ca3742d4f8a7e297093e4521fd04b336716c1c20a18f */
class __TwigTemplate_cf0f84f42cd79e2bd919b39eaadad74e20a8f2305dccfbd491ba53f7a6c62112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/jms_royal/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/jms_royal/img/app_icon.png\" />

<title>Module notifications • JMS Royal</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModules';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'US';
    var _PS_VERSION_ = '1.7.3.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = '1deda317265cc186fdc80d77501b528a';
    var token_admin_orders = '8efc712900dd591c6fe916caa94e3468';
    var token_admin_customers = '86cbceb460b41825b050906c0beb27cb';
    var token_admin_customer_threads = '855a60f060d54e15b8a5c29197724ffc';
    var currentIndex = 'index.php?controller=AdminModules';
    var employee_token = '36bd63c5e49c694743795d6f09206711';
    var choose_language_translate = 'Choose language';
    var default_language = '1';
    var admin_modules_link = '/jms_royal/admin217tuwokq/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=PNwxr7eCrc1ZnpD6ZcWgGNz0shDSCDzqcytwS15sY1A';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Search for a product';
  </script>

      <link href=\"/jms_royal/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/jms_royal/admin217tuwokq/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/jms_royal/modules/gamification/views/css/advice-1.7.3.0_590.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/jms_royal/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/jms_royal/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/jms_royal/admin217tuwokq/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/jms_royal\\/admin217tuwokq\\/\";
var baseDir = \"\\/jms_royal\\/\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"US Dollar\",\"format\":\"\\u00a4#,##0.00\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/jms_royal/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/jms_royal/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/jms_royal/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/jms_royal/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/jms_royal/admin217tuwokq/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/jms_royal/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/jms_royal/js/admin.js?v=1.7.3.0\"></script>
<script type=\"text/javascript\" src=\"/jms_royal/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/jms_royal/js/tools.js?v=1.7.3.0\"></script>
<script type=\"text/javascript\" src=\"/jms_royal/admin217tuwokq/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/jms_royal/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/jms_royal/admin217tuwokq/themes/default/js/vendor/nv.d3.min.js\"></script>


  <script>
\t\t\t\tvar ids_ps_advice = new Array(\"590\");
\t\t\t\tvar admin_gamification_ajax_url = 'http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminGamification&token=ec592b0690c0b5bf5f185c9da86e6659';
\t\t\t\tvar current_id_tab = 45;
\t\t\t</script>

";
        // line 84
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-en adminmodules\">



<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

    
    

    
    <i class=\"material-icons float-left px-1 js-mobile-menu d-md-none\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminDashboard&amp;token=d9265d7bc1dfd26cfca9d0dbe578bc72\"></a>

    <div class=\"component d-none d-md-flex\" id=\"quick-access-container\"><div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=185c114e478c4744df8ce569ded6f32e\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/jms_royal/admin217tuwokq/index.php/module/manage?token=c117c100a6800613534fa19567f7be4f\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminCategories&amp;addcategory&amp;token=f2b007173084e86df1bbe618aa514921\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/jms_royal/admin217tuwokq/index.php/product/new?token=c117c100a6800613534fa19567f7be4f\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=caaa24c360ff8cd2f608025d0e84f35b\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminOrders&amp;token=8efc712900dd591c6fe916caa94e3468\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"168\"
        data-icon=\"icon-AdminParentModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/module/notifications\"
        data-post-link=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminQuickAccesses&token=bdafee3996e40b2557376918f3c0cb99\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\" - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to QuickAccess
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminQuickAccesses&token=bdafee3996e40b2557376918f3c0cb99\">
      <i class=\"material-icons\">settings</i>
      Manage quick accesses
    </a>
  </div>
</div>
</div>
    <div class=\"component d-none d-md-inline-block col-md-4\" id=\"header-search-container\">
<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/jms_royal/admin217tuwokq/index.php?controller=AdminSearch&amp;token=d080c9c5133c9543c94025d5383f1c18\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\">
    <div class=\"input-group-btn\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, SKU, reference...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, name...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice Number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i></i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
</div>

            <div class=\"component d-none d-md-inline-block\">  <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/jms_royal/\" target= \"_blank\">JMS Royal</a>
  </div>
</div>
          <div class=\"component\"><div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <div class=\"notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Did you check your conversion rate lately?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              That's more time for something else!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
</div>
        <div class=\"component -norightmargin d-none d-md-inline-block\"><div class=\"employee-dropdown dropdown\">
      <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/admin%40admin.com.jpg\" /><br>
      <span>Mr Huy</span>
    </div>
    <div>
      <a class=\"employee-link profile-link\" href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminEmployees&amp;token=36bd63c5e49c694743795d6f09206711&amp;id_employee=1&amp;updateemployee\">
        <i class=\"material-icons\">settings_applications</i> Your profile
      </a>
    </div>
    <div>
      <a class=\"employee-link\" id=\"header_logout\" href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminLogin&amp;token=7aeeec3e6dfd1c6530a51636b01dd477&amp;logout\">
        <i class=\"material-icons\">power_settings_new</i> Sign out
      </a>
    </div>
  </div>
</div>
</div>

    
  </nav>
  </header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminDashboard&amp;token=d9265d7bc1dfd26cfca9d0dbe578bc72\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Sell</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminOrders&amp;token=8efc712900dd591c6fe916caa94e3468\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Orders
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminOrders&amp;token=8efc712900dd591c6fe916caa94e3468\" class=\"link\"> Orders
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminInvoices&amp;token=1a848a08618a6f97e3da8ae8be3be85a\" class=\"link\"> Invoices
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminSlip&amp;token=9a7eb93daea26bde3b87682a626e6098\" class=\"link\"> Credit Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminDeliverySlip&amp;token=d503f400d52f2a09196af1f72e3c5149\" class=\"link\"> Delivery Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminCarts&amp;token=36ce14af70c65b433306e6da9e1fdbe9\" class=\"link\"> Shopping Carts
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/jms_royal/admin217tuwokq/index.php/product/catalog?_token=PNwxr7eCrc1ZnpD6ZcWgGNz0shDSCDzqcytwS15sY1A\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Catalog
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/jms_royal/admin217tuwokq/index.php/product/catalog?_token=PNwxr7eCrc1ZnpD6ZcWgGNz0shDSCDzqcytwS15sY1A\" class=\"link\"> Products
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminCategories&amp;token=f2b007173084e86df1bbe618aa514921\" class=\"link\"> Categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminTracking&amp;token=a6b6e4dc6c754e8cb724fa7e45f9f5c8\" class=\"link\"> Monitoring
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminAttributesGroups&amp;token=28975d47ee2b3d29e6438bfee6ba980c\" class=\"link\"> Attributes &amp; Features
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminManufacturers&amp;token=08aeb7f7a1460e29b613fcbbd88ba35f\" class=\"link\"> Brands &amp; Suppliers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminAttachments&amp;token=5e1f0c0378cbffff608d4bc35bb5c860\" class=\"link\"> Files
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminCartRules&amp;token=caaa24c360ff8cd2f608025d0e84f35b\" class=\"link\"> Discounts
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/jms_royal/admin217tuwokq/index.php/stock/?_token=PNwxr7eCrc1ZnpD6ZcWgGNz0shDSCDzqcytwS15sY1A\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminCustomers&amp;token=86cbceb460b41825b050906c0beb27cb\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Customers
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminCustomers&amp;token=86cbceb460b41825b050906c0beb27cb\" class=\"link\"> Customers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminAddresses&amp;token=5f5b73c98c1bfc2e9ddbb071fd85bc77\" class=\"link\"> Addresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminCustomerThreads&amp;token=855a60f060d54e15b8a5c29197724ffc\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Customer Service
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminCustomerThreads&amp;token=855a60f060d54e15b8a5c29197724ffc\" class=\"link\"> Customer Service
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminOrderMessage&amp;token=e589fd5503cffc29af27967da1824449\" class=\"link\"> Order Messages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminReturn&amp;token=d2df130824c1ac3298498ed324b5aff8\" class=\"link\"> Merchandise Returns
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminStats&amp;token=185c114e478c4744df8ce569ded6f32e\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Stats
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Improve</span>
          </li>

                          
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/jms_royal/admin217tuwokq/index.php/module/catalog?_token=PNwxr7eCrc1ZnpD6ZcWgGNz0shDSCDzqcytwS15sY1A\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Modules
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/jms_royal/admin217tuwokq/index.php/module/catalog?_token=PNwxr7eCrc1ZnpD6ZcWgGNz0shDSCDzqcytwS15sY1A\" class=\"link\"> Modules &amp; Services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\" id=\"subtab-AdminAddonsCatalog\">
                              <a href=\"/jms_royal/admin217tuwokq/index.php/module/addons-store?_token=PNwxr7eCrc1ZnpD6ZcWgGNz0shDSCDzqcytwS15sY1A\" class=\"link\"> Modules Catalog
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminThemes&amp;token=34717523e52d8594306545dc681a63f5\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Design
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminThemes\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminThemes&amp;token=34717523e52d8594306545dc681a63f5\" class=\"link\"> Theme &amp; Logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\" id=\"subtab-AdminThemesCatalog\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminThemesCatalog&amp;token=f72dda5f1197a95593473a71efa0f4e0\" class=\"link\"> Theme Catalog
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminCmsContent&amp;token=0c4a6da567099f8f5e09abc16477cf4b\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminModulesPositions&amp;token=906aee5a6424955ffb5d5d85bab7aa57\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminImages&amp;token=6fbfee3c1896c382a5127b41486e3b23\" class=\"link\"> Image Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminLinkWidget&amp;token=3fbf26d5d10ee6e1dc882555d705b896\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminCarriers&amp;token=dfe47dd40ed2f460c91d1a7e46cedc92\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Shipping
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminCarriers&amp;token=dfe47dd40ed2f460c91d1a7e46cedc92\" class=\"link\"> Carriers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminShipping\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminShipping&amp;token=a1db2ea190aa2e54c21c66623cc49df0\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\" id=\"subtab-AdminParentPayment\">
                  <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminPayment&amp;token=a018ecd36351376d07271697963a616f\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Payment
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminPayment\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminPayment&amp;token=a018ecd36351376d07271697963a616f\" class=\"link\"> Payment Methods
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminPaymentPreferences&amp;token=563d11447c5ff8a377260d12fd058da6\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\" id=\"subtab-AdminInternational\">
                  <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminLocalization&amp;token=9c8f54fb40379208f7aae88c59a2f1e6\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    International
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminLocalization&amp;token=9c8f54fb40379208f7aae88c59a2f1e6\" class=\"link\"> Localization
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminZones&amp;token=6ceca7c60912f913d17f9390ecdb5a1a\" class=\"link\"> Locations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminTaxes&amp;token=da1298e6d3f85f186674e6124d213bd6\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminTranslations\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminTranslations&amp;token=9be082368d62d6bf1ab1eb145d03a116\" class=\"link\"> Translations
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block \" data-submenu=\"73\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configure</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\" id=\"subtab-ShopParameters\">
                  <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminPreferences&amp;token=a5b1fdce6ec8aa0940cb48c80079c57c\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Shop Parameters
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminPreferences&amp;token=a5b1fdce6ec8aa0940cb48c80079c57c\" class=\"link\"> General
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminOrderPreferences&amp;token=7117a8b4fdd6da257058f24d42b73332\" class=\"link\"> Order Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\" id=\"subtab-AdminPPreferences\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminPPreferences&amp;token=bda894ac8ce32b5ebce3499412a3bd97\" class=\"link\"> Product Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminCustomerPreferences&amp;token=1a5a94d5ec649c80e7321005c8523674\" class=\"link\"> Customer Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminContacts&amp;token=0c6f6eeacac970659ff422d09398d79f\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentMeta\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminMeta&amp;token=00414da6befe2d490a201847b549a55d\" class=\"link\"> Traffic &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminSearchConf&amp;token=20746a092b1fc10e31f3b2c7ea86ae8a\" class=\"link\"> Search
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminGamification&amp;token=ec592b0690c0b5bf5f185c9da86e6659\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/jms_royal/admin217tuwokq/index.php/configure/advanced/system_information?_token=PNwxr7eCrc1ZnpD6ZcWgGNz0shDSCDzqcytwS15sY1A\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Advanced Parameters
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\" id=\"subtab-AdminInformation\">
                              <a href=\"/jms_royal/admin217tuwokq/index.php/configure/advanced/system_information?_token=PNwxr7eCrc1ZnpD6ZcWgGNz0shDSCDzqcytwS15sY1A\" class=\"link\"> Information
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminPerformance\">
                              <a href=\"/jms_royal/admin217tuwokq/index.php/configure/advanced/performance?_token=PNwxr7eCrc1ZnpD6ZcWgGNz0shDSCDzqcytwS15sY1A\" class=\"link\"> Performance
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminAdminPreferences&amp;token=0f1341f7d9c536820356013134320721\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminEmails\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminEmails&amp;token=acd056f58b71ed72e8e9c750b64f6798\" class=\"link\"> E-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\" id=\"subtab-AdminImport\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminImport&amp;token=fc84bd8bef616cff908ba54a665f1c7a\" class=\"link\"> Import
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminEmployees&amp;token=36bd63c5e49c694743795d6f09206711\" class=\"link\"> Team
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminRequestSql&amp;token=c3348885efb5f08a1a5f96fdb44b7c4f\" class=\"link\"> Database
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminLogs\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminLogs&amp;token=11a07884a1fe73875571926dd6233bcc\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminWebservice&amp;token=ba70e369ce6b83b826ac8368eef314c1\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block \" data-submenu=\"121\" id=\"tab-JMS-MODULES\">
              <span class=\"title\">Jms Modules</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"122\" id=\"subtab-AdminJmsmegamenuDashboard\">
                  <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminJmsmegamenuManager&amp;token=b3b5c6d13d3c7585c6b3a8ca7d276180\" class=\"link\">
                    <i class=\"material-icons\"></i>
                    <span>
                    Jms MegaMenu
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-122\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"123\" id=\"subtab-AdminJmsmegamenuManager\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminJmsmegamenuManager&amp;token=b3b5c6d13d3c7585c6b3a8ca7d276180\" class=\"link\"> Menu Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"124\" id=\"subtab-AdminJmsmegamenuStyle\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminJmsmegamenuStyle&amp;token=81cc3bdf42bbad3b6902d9223ce6ae00\" class=\"link\"> Menu Style
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"125\" id=\"subtab-AdminJmsblogDashboard\">
                  <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminJmsblogCategories&amp;token=5cdf125534e04dd11b5e6ae49c450172\" class=\"link\">
                    <i class=\"material-icons\"></i>
                    <span>
                    Jms Blog
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-125\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminJmsblogCategories\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminJmsblogCategories&amp;token=5cdf125534e04dd11b5e6ae49c450172\" class=\"link\"> Categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\" id=\"subtab-AdminJmsblogPost\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminJmsblogPost&amp;token=8a968c2e5ce5d42f286e1c24f0a8463d\" class=\"link\"> Post
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"128\" id=\"subtab-AdminJmsblogComment\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminJmsblogComment&amp;token=5c1bd977e60d19604681a7549b57a509\" class=\"link\"> Comments
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"129\" id=\"subtab-AdminJmsblogSetting\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminJmsblogSetting&amp;token=bf8a9f89337d5ef9bf49126beab7ee29\" class=\"link\"> Setting
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"130\" id=\"subtab-AdminJmspagebuilderDashboard\">
                  <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminJmspagebuilderHomepages&amp;token=d6cca13a775246c550097a76ad5a7b13\" class=\"link\">
                    <i class=\"material-icons\"></i>
                    <span>
                    Jms Page Builder
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-130\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"131\" id=\"subtab-AdminJmspagebuilderHomepages\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminJmspagebuilderHomepages&amp;token=d6cca13a775246c550097a76ad5a7b13\" class=\"link\"> Home Pages
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"133\" id=\"subtab-AdminJmspagebuilderSetting\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminJmspagebuilderSetting&amp;token=776523d150dabe15d334fa7c324c9480\" class=\"link\"> Setting
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"134\" id=\"subtab-AdminJmsvermegamenuDashboard\">
                  <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminJmsvermegamenuManager&amp;token=5f34c12406df3ff9e551363ca508bb21\" class=\"link\">
                    <i class=\"material-icons\">menu</i>
                    <span>
                    Jms Vertical MegaMenu
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-134\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"135\" id=\"subtab-AdminJmsvermegamenuManager\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminJmsvermegamenuManager&amp;token=5f34c12406df3ff9e551363ca508bb21\" class=\"link\"> Menu Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"136\" id=\"subtab-AdminJmsvermegamenuStyle\">
                              <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminJmsvermegamenuStyle&amp;token=b3a4cabe25cb6bb752cb4c16d3966c45\" class=\"link\"> Menu Style
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse d-none d-md-block\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <nav class=\"breadcrumb\">

                        <a class=\"breadcrumb-item\" href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminParentModulesSf&amp;token=4c5836ae4335301fda80d99229e9bf87\">Modules</a>
              
      
    </nav>
  

  
    <h2 class=\"title\">
      Module notifications    </h2>
  

  
    <div class=\"toolbar-icons\">
      
                        
          <a
            class=\"mx-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add_module\"
            href=\"#\"            title=\"Upload a module\"            data-toggle=\"pstooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">cloud_upload</i>
            <span class=\"title\">Upload a module</span>
          </a>
                                
          <a
            class=\"mx-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-addons_connect\"
            href=\"#\"            title=\"Connect to Addons marketplace\"            data-toggle=\"pstooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">vpn_key</i>
            <span class=\"title\">Connect to Addons marketplace</span>
          </a>
                          
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Help\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/jms_royal/admin217tuwokq/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminModules%253Fversion%253D1.7.3.0%2526country%253Den/Help?_token=PNwxr7eCrc1ZnpD6ZcWgGNz0shDSCDzqcytwS15sY1A\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Help</span>
          </a>
                  </div>
  
        <div class=\"page-head-tabs\" id=\"head_tabs\">
                <a class=\"tab\"
   href=\"/jms_royal/admin217tuwokq/index.php/module/catalog?_token=PNwxr7eCrc1ZnpD6ZcWgGNz0shDSCDzqcytwS15sY1A\">Selection</a>

                <a class=\"tab\"
   href=\"/jms_royal/admin217tuwokq/index.php/module/manage?_token=PNwxr7eCrc1ZnpD6ZcWgGNz0shDSCDzqcytwS15sY1A\">Installed modules</a>

                <a class=\"tab current\"
   href=\"/jms_royal/admin217tuwokq/index.php/module/notifications?_token=PNwxr7eCrc1ZnpD6ZcWgGNz0shDSCDzqcytwS15sY1A\">Notifications  <div class=\"notification-container\">
    <span class=\"notification-counter\">5</span>
  </div>
  </a>

            </div>
      
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=admin%40admin.com&amp;firstname=Mr&amp;lastname=Huy&amp;website=http%3A%2F%2Flocalhost%2Fjms_royal%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/jms_royal/admin217tuwokq/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=admin%40admin.com&amp;firstname=Mr&amp;lastname=Huy&amp;website=http%3A%2F%2Flocalhost%2Fjms_royal%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    <div class=\"content-div \">

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1265
        $this->displayBlock('content_header', $context, $blocks);
        // line 1266
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1267
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1268
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1269
        echo "
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://localhost/jms_royal/admin217tuwokq/index.php?controller=AdminDashboard&amp;token=d9265d7bc1dfd26cfca9d0dbe578bc72\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Back
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap\">
    
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=admin%40admin.com&amp;firstname=Mr&amp;lastname=Huy&amp;website=http%3A%2F%2Flocalhost%2Fjms_royal%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/jms_royal/admin217tuwokq/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=admin%40admin.com&amp;firstname=Mr&amp;lastname=Huy&amp;website=http%3A%2F%2Flocalhost%2Fjms_royal%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1377
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 84
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1265
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1266
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1267
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1268
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1377
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__8fb266f483492274b9c6ca3742d4f8a7e297093e4521fd04b336716c1c20a18f";
    }

    public function getDebugInfo()
    {
        return array (  1456 => 1377,  1451 => 1268,  1446 => 1267,  1441 => 1266,  1436 => 1265,  1427 => 84,  1419 => 1377,  1309 => 1269,  1306 => 1268,  1303 => 1267,  1300 => 1266,  1298 => 1265,  113 => 84,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__8fb266f483492274b9c6ca3742d4f8a7e297093e4521fd04b336716c1c20a18f", "");
    }
}
