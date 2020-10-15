<?php

/* default/indexBack.html.twig */
class __TwigTemplate_1b3be2f0d446de1672c10fee8f0372a0f8b8e03e3834c2bd1ac45db60c44768d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'titrePage' => [$this, 'block_titrePage'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/indexBack.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/indexBack.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"fixed\">
<head>
    <!-- Basic -->
    <meta charset=\"UTF-8\">

    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"keywords\" content=\"HTML5 Admin Template\" />
    <meta name=\"description\" content=\"JSOFT Admin - Responsive HTML5 Template\">
    <meta name=\"author\" content=\"JSOFT.net\">

    <!-- Mobile Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />

    <!-- Web Fonts  -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Vendor CSS -->
    {<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" />}
    {<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" />}
    {<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/magnific-popup/magnific-popup.css"), "html", null, true);
        echo "\" />}
    {<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap-datepicker/css/datepicker3.css"), "html", null, true);
        echo "\" />}


    <!-- Specific Page Vendor CSS -->
    {<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css"), "html", null, true);
        echo "\" />}
    {<link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap-multiselect/bootstrap-multiselect.css"), "html", null, true);
        echo "\" />}
    {<link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/morris/morris.css"), "html", null, true);
        echo "\" />}


    <!-- Theme CSS -->
    {<link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/theme.css"), "html", null, true);
        echo "\" />}


    <!-- Skin CSS -->
    {<link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/skins/default.css"), "html", null, true);
        echo "\" />}


    <!-- Theme Custom CSS -->
    {<link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/theme-custom.css"), "html", null, true);
        echo "\" />}


    <!-- Head Libs -->
    {<link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/modernizr/modernizr.js"), "html", null, true);
        echo "\" />}


</head>

<body>
<section class=\"body\">

    <!-- start: header -->
    <header class=\"header\">
        <div class=\"logo-container\">
            <a href=\"../\" class=\"logo\">
                ";
        // line 57
        echo "                <img height=\"35\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"/>

            </a>
            <div class=\"visible-xs toggle-sidebar-left\" data-toggle-class=\"sidebar-left-opened\" data-target=\"html\" data-fire-event=\"sidebar-left-opened\">
                <i class=\"fa fa-bars\" aria-label=\"Toggle sidebar\"></i>
            </div>
        </div>

        <!-- start: search & user box -->
        <div class=\"header-right\">

            <form action=\"pages-search-results.html\" class=\"search nav-form\">
                <div class=\"input-group input-search\">
                    <input type=\"text\" class=\"form-control\" name=\"q\" id=\"q\" placeholder=\"Search...\">
                    <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t</span>
                </div>
            </form>

            <span class=\"separator\"></span>

            <ul class=\"notifications\">
                <li>
                    <a href=\"#\" class=\"dropdown-toggle notification-icon\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-tasks\"></i>
                        <span class=\"badge\">3</span>
                    </a>

                    <div class=\"dropdown-menu notification-menu large\">
                        <div class=\"notification-title\">
                            <span class=\"pull-right label label-default\">3</span>
                            Tasks
                        </div>

                        <div class=\"content\">
                            <ul>
                                <li>
                                    <p class=\"clearfix mb-xs\">
                                        <span class=\"message pull-left\">Generating Sales Report</span>
                                        <span class=\"message pull-right text-dark\">60%</span>
                                    </p>
                                    <div class=\"progress progress-xs light\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\"></div>
                                    </div>
                                </li>

                                <li>
                                    <p class=\"clearfix mb-xs\">
                                        <span class=\"message pull-left\">Importing Contacts</span>
                                        <span class=\"message pull-right text-dark\">98%</span>
                                    </p>
                                    <div class=\"progress progress-xs light\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"98\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 98%;\"></div>
                                    </div>
                                </li>

                                <li>
                                    <p class=\"clearfix mb-xs\">
                                        <span class=\"message pull-left\">Uploading something big</span>
                                        <span class=\"message pull-right text-dark\">33%</span>
                                    </p>
                                    <div class=\"progress progress-xs light mb-xs\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"33\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 33%;\"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href=\"#\" class=\"dropdown-toggle notification-icon\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-envelope\"></i>
                        <span class=\"badge\">4</span>
                    </a>

                    <div class=\"dropdown-menu notification-menu\">
                        <div class=\"notification-title\">
                            <span class=\"pull-right label label-default\">230</span>
                            Messages
                        </div>

                        <div class=\"content\">
                            <ul>
                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <figure class=\"image\">
                                            <img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Doe Junior\" class=\"img-circle\" />
                                        </figure>
                                        <span class=\"title\">Joseph Doe</span>
                                        <span class=\"message\">Lorem ipsum dolor sit.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <figure class=\"image\">
                                            <img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Junior\" class=\"img-circle\" />
                                        </figure>
                                        <span class=\"title\">Joseph Junior</span>
                                        <span class=\"message truncate\">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <figure class=\"image\">
                                            <img src=\"assets/images/!sample-user.jpg\" alt=\"Joe Junior\" class=\"img-circle\" />
                                        </figure>
                                        <span class=\"title\">Joe Junior</span>
                                        <span class=\"message\">Lorem ipsum dolor sit.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <figure class=\"image\">
                                            <img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Junior\" class=\"img-circle\" />
                                        </figure>
                                        <span class=\"title\">Joseph Junior</span>
                                        <span class=\"message\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
                                    </a>
                                </li>
                            </ul>

                            <hr />

                            <div class=\"text-right\">
                                <a href=\"#\" class=\"view-more\">View All</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href=\"#\" class=\"dropdown-toggle notification-icon\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-bell\"></i>
                        <span class=\"badge\">3</span>
                    </a>

                    <div class=\"dropdown-menu notification-menu\">
                        <div class=\"notification-title\">
                            <span class=\"pull-right label label-default\">3</span>
                            Alerts
                        </div>

                        <div class=\"content\">
                            <ul>
                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <div class=\"image\">
                                            <i class=\"fa fa-thumbs-down bg-danger\"></i>
                                        </div>
                                        <span class=\"title\">Server is Down!</span>
                                        <span class=\"message\">Just now</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <div class=\"image\">
                                            <i class=\"fa fa-lock bg-warning\"></i>
                                        </div>
                                        <span class=\"title\">User Locked</span>
                                        <span class=\"message\">15 minutes ago</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <div class=\"image\">
                                            <i class=\"fa fa-signal bg-success\"></i>
                                        </div>
                                        <span class=\"title\">Connection Restaured</span>
                                        <span class=\"message\">10/10/2014</span>
                                    </a>
                                </li>
                            </ul>

                            <hr />

                            <div class=\"text-right\">
                                <a href=\"#\" class=\"view-more\">View All</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <span class=\"separator\"></span>

            <div id=\"userbox\" class=\"userbox\">
                <a href=\"#\" data-toggle=\"dropdown\">
                    <figure class=\"profile-picture\">
                        <img src=\"assets/images/!logged-user.jpg\" alt=\"Joseph Doe\" class=\"img-circle\" data-lock-picture=\"assets/images/!logged-user.jpg\" />
                    </figure>
                    <div class=\"profile-info\" data-lock-name=\"John Doe\" data-lock-email=\"johndoe@okler.com\">
                        <span class=\"name\">John Doe Junior</span>
                        <span class=\"role\">administrator</span>
                    </div>

                    <i class=\"fa custom-caret\"></i>
                </a>

                <div class=\"dropdown-menu\">
                    <ul class=\"list-unstyled\">
                        <li class=\"divider\"></li>
                        <li>
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"pages-user-profile.html\"><i class=\"fa fa-user\"></i> My Profile</a>
                        </li>
                        <li>
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\" data-lock-screen=\"true\"><i class=\"fa fa-lock\"></i> Lock Screen</a>
                        </li>
                        <li>
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"pages-signin.html\"><i class=\"fa fa-power-off\"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: search & user box -->
    </header>
    <!-- end: header -->

    <div class=\"inner-wrapper\">
        <!-- start: sidebar -->
        <aside id=\"sidebar-left\" class=\"sidebar-left\">

            <div class=\"sidebar-header\">
                <div class=\"sidebar-title\">
                    Navigation
                </div>
                <div class=\"sidebar-toggle hidden-xs\" data-toggle-class=\"sidebar-left-collapsed\" data-target=\"html\" data-fire-event=\"sidebar-left-toggle\">
                    <i class=\"fa fa-bars\" aria-label=\"Toggle sidebar\"></i>
                </div>
            </div>

            <div class=\"nano\">
                <div class=\"nano-content\">
                    <nav id=\"menu\" class=\"nav-main\" role=\"navigation\">
                        <ul class=\"nav nav-main\">
                            <li>
                                <a href=\"index.html\">
                                    <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"mailbox-folder.html\">
                                    <span class=\"pull-right label label-primary\">182</span>
                                    <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                                    <span>Mailbox</span>
                                </a>
                            </li>
                            <li class=\"nav-parent\">
                                <a>
                                    <i class=\"fa fa-copy\" aria-hidden=\"true\"></i>
                                    <span>Pages</span>
                                </a>
                                <ul class=\"nav nav-children\">
                                    <li>
                                        <a href=\"pages-signup.html\">
                                            Sign Up
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-signin.html\">
                                            Sign In
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-recover-password.html\">
                                            Recover Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-lock-screen.html\">
                                            Locked Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-user-profile.html\">
                                            User Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-session-timeout.html\">
                                            Session Timeout
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-calendar.html\">
                                            Calendar
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-timeline.html\">
                                            Timeline
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-media-gallery.html\">
                                            Media Gallery
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-invoice.html\">
                                            Invoice
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-blank.html\">
                                            Blank Page
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-404.html\">
                                            404
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-500.html\">
                                            500
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-log-viewer.html\">
                                            Log Viewer
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-search-results.html\">
                                            Search Results
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-parent\">
                                <a>
                                    <i class=\"fa fa-tasks\" aria-hidden=\"true\"></i>
                                    <span>UI Elements</span>
                                </a>
                                <ul class=\"nav nav-children\">
                                    <li>
                                        <a href=\"ui-elements-typography.html\">
                                            Typography
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-icons.html\">
                                            Icons
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-tabs.html\">
                                            Tabs
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-panels.html\">
                                            Panels
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-widgets.html\">
                                            Widgets
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-portlets.html\">
                                            Portlets
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-buttons.html\">
                                            Buttons
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-alerts.html\">
                                            Alerts
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-notifications.html\">
                                            Notifications
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-modals.html\">
                                            Modals
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-lightbox.html\">
                                            Lightbox
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-progressbars.html\">
                                            Progress Bars
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-sliders.html\">
                                            Sliders
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-carousels.html\">
                                            Carousels
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-accordions.html\">
                                            Accordions
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-nestable.html\">
                                            Nestable
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-tree-view.html\">
                                            Tree View
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-grid-system.html\">
                                            Grid System
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-charts.html\">
                                            Charts
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-animations.html\">
                                            Animations
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-extra.html\">
                                            Extra
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-parent nav-expanded nav-active\">
                                <a>
                                    <i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i>
                                    <span>Dashboard</span>
                                </a>
                                <ul class=\"nav nav-children\">
                                    <li>
                                        <a href=\"";
        // line 508
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_sujet_lister");
        echo "\">
                                            Liste des Sujets
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 513
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_sujet_Bannissement");
        echo "\">
                                            Gestion des Bannissement
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 518
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_sujets_Signales");
        echo "\">
                                            Gestion des Sujets Signalés
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 523
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_messages_Signales");
        echo "\">
                                            Gestion des Messages Signalés
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            Statistiques
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-parent\">
                                <a>
                                    <i class=\"fa fa-table\" aria-hidden=\"true\"></i>
                                    <span>Gestion des évènements</span>
                                </a>
                                <ul class=\"nav nav-children\">
                                    <li>
                                        <a href=\"#\">
                                            Ajouter un évènement
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            Afficher les événements
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"tables-advanced.html\">
                                            Associer des participants <br/>a un évènement
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"tables-responsive.html\">
                                            Informer les participants
                                        </a>
                                    </li>
                                    <li >
                                        ";
        // line 562
        echo "                                        <a href=\"tables-editable.html\">
                                            Gérer les demandes
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"tables-ajax.html\">
                                            Ajax
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"tables-pricing.html\">
                                            Pricing
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-parent\">
                                <a>
                                    <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                                    <span>Maps</span>
                                </a>
                                <ul class=\"nav nav-children\">
                                    <li>
                                        <a href=\"maps-google-maps.html\">
                                            Basic
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"maps-google-maps-builder.html\">
                                            Map Builder
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"maps-vector.html\">
                                            Vector
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-parent\">
                                <a>
                                    <i class=\"fa fa-columns\" aria-hidden=\"true\"></i>
                                    <span>Layouts</span>
                                </a>
                                <ul class=\"nav nav-children\">
                                    <li>
                                        <a href=\"layouts-default.html\">
                                            Default
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"layouts-boxed.html\">
                                            Boxed
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"layouts-menu-collapsed.html\">
                                            Menu Collapsed
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"layouts-scroll.html\">
                                            Scroll
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-parent\">
                                <a>
                                    <i class=\"fa fa-align-left\" aria-hidden=\"true\"></i>
                                    <span>Menu Levels</span>
                                </a>
                                <ul class=\"nav nav-children\">
                                    <li>
                                        <a>First Level</a>
                                    </li>
                                    <li class=\"nav-parent\">
                                        <a>Second Level</a>
                                        <ul class=\"nav nav-children\">
                                            <li class=\"nav-parent\">
                                                <a>Third Level</a>
                                                <ul class=\"nav nav-children\">
                                                    <li>
                                                        <a>Third Level Link #1</a>
                                                    </li>
                                                    <li>
                                                        <a>Third Level Link #2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a>Second Level Link #1</a>
                                            </li>
                                            <li>
                                                <a>Second Level Link #2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"http://themeforest.net/item/porto-responsive-html5-template/4106987?ref=Okler\" target=\"_blank\">
                                    <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
                                    <span>Front-End <em class=\"not-included\">(Not Included)</em></span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <hr class=\"separator\" />

                    <div class=\"sidebar-widget widget-tasks\">
                        <div class=\"widget-header\">
                            <h6>Projects</h6>
                            <div class=\"widget-toggle\">+</div>
                        </div>
                        <div class=\"widget-content\">
                            <ul class=\"list-unstyled m-none\">
                                <li><a href=\"#\">Porto HTML5 Template</a></li>
                                <li><a href=\"#\">Tucson Template</a></li>
                                <li><a href=\"#\">Porto Admin</a></li>
                            </ul>
                        </div>
                    </div>

                    <hr class=\"separator\" />

                    <div class=\"sidebar-widget widget-stats\">
                        <div class=\"widget-header\">
                            <h6>Company Stats</h6>
                            <div class=\"widget-toggle\">+</div>
                        </div>
                        <div class=\"widget-content\">
                            <ul>
                                <li>
                                    <span class=\"stats-title\">Stat 1</span>
                                    <span class=\"stats-complete\">85%</span>
                                    <div class=\"progress\">
                                        <div class=\"progress-bar progress-bar-primary progress-without-number\" role=\"progressbar\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 85%;\">
                                            <span class=\"sr-only\">85% Complete</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class=\"stats-title\">Stat 2</span>
                                    <span class=\"stats-complete\">70%</span>
                                    <div class=\"progress\">
                                        <div class=\"progress-bar progress-bar-primary progress-without-number\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 70%;\">
                                            <span class=\"sr-only\">70% Complete</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class=\"stats-title\">Stat 3</span>
                                    <span class=\"stats-complete\">2%</span>
                                    <div class=\"progress\">
                                        <div class=\"progress-bar progress-bar-primary progress-without-number\" role=\"progressbar\" aria-valuenow=\"2\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 2%;\">
                                            <span class=\"sr-only\">2% Complete</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </aside>
        <!-- end: sidebar -->

        <section role=\"main\" class=\"content-body\">
            <header class=\"page-header\">
                <h2>Editable Tables</h2>

                <div class=\"right-wrapper pull-right\">
                    <ol class=\"breadcrumbs\">
                        <li>
                            <a href=\"index.html\">
                                <i class=\"fa fa-home\"></i>
                            </a>
                        </li>
                        <li><span>Tables</span></li>
                        <li><span>Editable</span></li>
                    </ol>

                    <a class=\"sidebar-right-toggle\" data-open=\"sidebar-right\"><i class=\"fa fa-chevron-left\"></i></a>
                </div>
            </header>

            <!-- start: page -->



                        <section class=\"panel\">
                            <header class=\"panel-heading\">
                                <div class=\"panel-actions\">
                                    <a href=\"#\" class=\"fa fa-caret-down\"></a>
                                    <a href=\"#\" class=\"fa fa-times\"></a>
                                </div>

                                <h2 class=\"panel-title\">";
        // line 763
        $this->displayBlock('titrePage', $context, $blocks);
        echo "</h2>
                            </header>
                            <div class=\"panel-body\">
                                ";
        // line 766
        $this->displayBlock('body', $context, $blocks);
        // line 767
        echo "                            </div>
                        </section>


            <!-- end: page -->
        </section>
    </div>

    <aside id=\"sidebar-right\" class=\"sidebar-right\">
        <div class=\"nano\">
            <div class=\"nano-content\">
                <a href=\"#\" class=\"mobile-close visible-xs\">
                    Collapse <i class=\"fa fa-chevron-right\"></i>
                </a>

                <div class=\"sidebar-right-wrapper\">

                    <div class=\"sidebar-widget widget-calendar\">
                        <h6>Upcoming Tasks</h6>
                        <div data-plugin-datepicker data-plugin-skin=\"dark\" ></div>

                        <ul>
                            <li>
                                <time datetime=\"2014-04-19T00:00+00:00\">04/19/2014</time>
                                <span>Company Meeting</span>
                            </li>
                        </ul>
                    </div>

                    <div class=\"sidebar-widget widget-friends\">
                        <h6>Friends</h6>
                        <ul>
                            <li class=\"status-online\">
                                <figure class=\"profile-picture\">
                                    <img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Doe\" class=\"img-circle\">
                                </figure>
                                <div class=\"profile-info\">
                                    <span class=\"name\">Joseph Doe Junior</span>
                                    <span class=\"title\">Hey, how are you?</span>
                                </div>
                            </li>
                            <li class=\"status-online\">
                                <figure class=\"profile-picture\">
                                    <img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Doe\" class=\"img-circle\">
                                </figure>
                                <div class=\"profile-info\">
                                    <span class=\"name\">Joseph Doe Junior</span>
                                    <span class=\"title\">Hey, how are you?</span>
                                </div>
                            </li>
                            <li class=\"status-offline\">
                                <figure class=\"profile-picture\">
                                    <img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Doe\" class=\"img-circle\">
                                </figure>
                                <div class=\"profile-info\">
                                    <span class=\"name\">Joseph Doe Junior</span>
                                    <span class=\"title\">Hey, how are you?</span>
                                </div>
                            </li>
                            <li class=\"status-offline\">
                                <figure class=\"profile-picture\">
                                    <img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Doe\" class=\"img-circle\">
                                </figure>
                                <div class=\"profile-info\">
                                    <span class=\"name\">Joseph Doe Junior</span>
                                    <span class=\"title\">Hey, how are you?</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </aside>
</section>

<div id=\"dialog\" class=\"modal-block mfp-hide\">
    <section class=\"panel\">
        <header class=\"panel-heading\">
            <h2 class=\"panel-title\">Are you sure?</h2>
        </header>
        <div class=\"panel-body\">
            <div class=\"modal-wrapper\">
                <div class=\"modal-text\">
                    <p>Are you sure that you want to delete this row?</p>
                </div>
            </div>
        </div>
        <footer class=\"panel-footer\">
            <div class=\"row\">
                <div class=\"col-md-12 text-right\">
                    <button id=\"dialogConfirm\" class=\"btn btn-primary\">Confirm</button>
                    <button id=\"dialogCancel\" class=\"btn btn-default\">Cancel</button>
                </div>
            </div>
        </footer>
    </section>
</div>

<!-- Vendor -->
<script src=\"";
        // line 868
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
";
        // line 870
        echo "
";
        // line 872
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery-browser-mobile/jquery.browser.mobile.js"), "html", null, true);
        echo "\"></script>

";
        // line 875
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

";
        // line 878
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/nanoscroller/nanoscroller.js"), "html", null, true);
        echo "\"></script>

";
        // line 881
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>

";
        // line 884
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/magnific-popup/magnific-popup.js"), "html", null, true);
        echo "\"></script>

";
        // line 887
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery-placeholder/jquery.placeholder.js"), "html", null, true);
        echo "\"></script>

<!-- Specific Page Vendor -->
";
        // line 891
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/select2/select2.js"), "html", null, true);
        echo "\"></script>

";
        // line 894
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery-datatables/media/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
";
        // line 896
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery-datatables-bs3/assets/js/datatables.js"), "html", null, true);
        echo "\"></script>


<!-- Theme Base, Components and Settings -->
";
        // line 901
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/theme.js"), "html", null, true);
        echo "\"></script>



<!-- Theme Custom -->
";
        // line 907
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/theme.custom.js"), "html", null, true);
        echo "\"></script>


<!-- Theme Initialization Files -->
";
        // line 912
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/theme.init.js"), "html", null, true);
        echo "\"></script>



<!-- Examples -->
";
        // line 918
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/tables/examples.datatables.editable.js"), "html", null, true);
        echo "\"></script>

</body>

";
        // line 922
        $this->displayBlock('javascripts', $context, $blocks);
        // line 923
        echo "
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard Cité de la Culture";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 763
    public function block_titrePage($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Gestion des évènements";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 766
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 922
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/indexBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1120 => 922,  1102 => 766,  1084 => 763,  1066 => 7,  1055 => 923,  1053 => 922,  1045 => 918,  1036 => 912,  1028 => 907,  1019 => 901,  1011 => 896,  1006 => 894,  1000 => 891,  993 => 887,  987 => 884,  981 => 881,  975 => 878,  969 => 875,  963 => 872,  960 => 870,  956 => 868,  853 => 767,  851 => 766,  845 => 763,  642 => 562,  601 => 523,  593 => 518,  585 => 513,  577 => 508,  122 => 57,  107 => 44,  100 => 40,  93 => 36,  86 => 32,  79 => 28,  75 => 27,  71 => 26,  64 => 22,  60 => 21,  56 => 20,  52 => 19,  37 => 7,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html class=\"fixed\">
<head>
    <!-- Basic -->
    <meta charset=\"UTF-8\">

    <title>{% block title %}Dashboard Cité de la Culture{% endblock %}</title>
    <meta name=\"keywords\" content=\"HTML5 Admin Template\" />
    <meta name=\"description\" content=\"JSOFT Admin - Responsive HTML5 Template\">
    <meta name=\"author\" content=\"JSOFT.net\">

    <!-- Mobile Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />

    <!-- Web Fonts  -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Vendor CSS -->
    {<link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.css') }}\" />}
    {<link rel=\"stylesheet\" href=\"{{ asset('vendor/font-awesome/css/font-awesome.css') }}\" />}
    {<link rel=\"stylesheet\" href=\"{{ asset('vendor/magnific-popup/magnific-popup.css') }}\" />}
    {<link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap-datepicker/css/datepicker3.css') }}\" />}


    <!-- Specific Page Vendor CSS -->
    {<link rel=\"stylesheet\" href=\"{{ asset('vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css') }}\" />}
    {<link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}\" />}
    {<link rel=\"stylesheet\" href=\"{{ asset('vendor/morris/morris.css') }}\" />}


    <!-- Theme CSS -->
    {<link rel=\"stylesheet\" href=\"{{ asset('stylesheets/theme.css') }}\" />}


    <!-- Skin CSS -->
    {<link rel=\"stylesheet\" href=\"{{ asset('stylesheets/skins/default.css') }}\" />}


    <!-- Theme Custom CSS -->
    {<link rel=\"stylesheet\" href=\"{{ asset('stylesheets/theme-custom.css') }}\" />}


    <!-- Head Libs -->
    {<link rel=\"stylesheet\" href=\"{{ asset('vendor/modernizr/modernizr.js') }}\" />}


</head>

<body>
<section class=\"body\">

    <!-- start: header -->
    <header class=\"header\">
        <div class=\"logo-container\">
            <a href=\"../\" class=\"logo\">
                {#<img src=\"images/logo.png\" height=\"35\" alt=\"Porto Admin\" />#}
                <img height=\"35\" src=\"{{ asset('images/logo.png') }}\"/>

            </a>
            <div class=\"visible-xs toggle-sidebar-left\" data-toggle-class=\"sidebar-left-opened\" data-target=\"html\" data-fire-event=\"sidebar-left-opened\">
                <i class=\"fa fa-bars\" aria-label=\"Toggle sidebar\"></i>
            </div>
        </div>

        <!-- start: search & user box -->
        <div class=\"header-right\">

            <form action=\"pages-search-results.html\" class=\"search nav-form\">
                <div class=\"input-group input-search\">
                    <input type=\"text\" class=\"form-control\" name=\"q\" id=\"q\" placeholder=\"Search...\">
                    <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t</span>
                </div>
            </form>

            <span class=\"separator\"></span>

            <ul class=\"notifications\">
                <li>
                    <a href=\"#\" class=\"dropdown-toggle notification-icon\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-tasks\"></i>
                        <span class=\"badge\">3</span>
                    </a>

                    <div class=\"dropdown-menu notification-menu large\">
                        <div class=\"notification-title\">
                            <span class=\"pull-right label label-default\">3</span>
                            Tasks
                        </div>

                        <div class=\"content\">
                            <ul>
                                <li>
                                    <p class=\"clearfix mb-xs\">
                                        <span class=\"message pull-left\">Generating Sales Report</span>
                                        <span class=\"message pull-right text-dark\">60%</span>
                                    </p>
                                    <div class=\"progress progress-xs light\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\"></div>
                                    </div>
                                </li>

                                <li>
                                    <p class=\"clearfix mb-xs\">
                                        <span class=\"message pull-left\">Importing Contacts</span>
                                        <span class=\"message pull-right text-dark\">98%</span>
                                    </p>
                                    <div class=\"progress progress-xs light\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"98\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 98%;\"></div>
                                    </div>
                                </li>

                                <li>
                                    <p class=\"clearfix mb-xs\">
                                        <span class=\"message pull-left\">Uploading something big</span>
                                        <span class=\"message pull-right text-dark\">33%</span>
                                    </p>
                                    <div class=\"progress progress-xs light mb-xs\">
                                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"33\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 33%;\"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href=\"#\" class=\"dropdown-toggle notification-icon\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-envelope\"></i>
                        <span class=\"badge\">4</span>
                    </a>

                    <div class=\"dropdown-menu notification-menu\">
                        <div class=\"notification-title\">
                            <span class=\"pull-right label label-default\">230</span>
                            Messages
                        </div>

                        <div class=\"content\">
                            <ul>
                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <figure class=\"image\">
                                            <img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Doe Junior\" class=\"img-circle\" />
                                        </figure>
                                        <span class=\"title\">Joseph Doe</span>
                                        <span class=\"message\">Lorem ipsum dolor sit.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <figure class=\"image\">
                                            <img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Junior\" class=\"img-circle\" />
                                        </figure>
                                        <span class=\"title\">Joseph Junior</span>
                                        <span class=\"message truncate\">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <figure class=\"image\">
                                            <img src=\"assets/images/!sample-user.jpg\" alt=\"Joe Junior\" class=\"img-circle\" />
                                        </figure>
                                        <span class=\"title\">Joe Junior</span>
                                        <span class=\"message\">Lorem ipsum dolor sit.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <figure class=\"image\">
                                            <img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Junior\" class=\"img-circle\" />
                                        </figure>
                                        <span class=\"title\">Joseph Junior</span>
                                        <span class=\"message\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
                                    </a>
                                </li>
                            </ul>

                            <hr />

                            <div class=\"text-right\">
                                <a href=\"#\" class=\"view-more\">View All</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href=\"#\" class=\"dropdown-toggle notification-icon\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-bell\"></i>
                        <span class=\"badge\">3</span>
                    </a>

                    <div class=\"dropdown-menu notification-menu\">
                        <div class=\"notification-title\">
                            <span class=\"pull-right label label-default\">3</span>
                            Alerts
                        </div>

                        <div class=\"content\">
                            <ul>
                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <div class=\"image\">
                                            <i class=\"fa fa-thumbs-down bg-danger\"></i>
                                        </div>
                                        <span class=\"title\">Server is Down!</span>
                                        <span class=\"message\">Just now</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <div class=\"image\">
                                            <i class=\"fa fa-lock bg-warning\"></i>
                                        </div>
                                        <span class=\"title\">User Locked</span>
                                        <span class=\"message\">15 minutes ago</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <div class=\"image\">
                                            <i class=\"fa fa-signal bg-success\"></i>
                                        </div>
                                        <span class=\"title\">Connection Restaured</span>
                                        <span class=\"message\">10/10/2014</span>
                                    </a>
                                </li>
                            </ul>

                            <hr />

                            <div class=\"text-right\">
                                <a href=\"#\" class=\"view-more\">View All</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <span class=\"separator\"></span>

            <div id=\"userbox\" class=\"userbox\">
                <a href=\"#\" data-toggle=\"dropdown\">
                    <figure class=\"profile-picture\">
                        <img src=\"assets/images/!logged-user.jpg\" alt=\"Joseph Doe\" class=\"img-circle\" data-lock-picture=\"assets/images/!logged-user.jpg\" />
                    </figure>
                    <div class=\"profile-info\" data-lock-name=\"John Doe\" data-lock-email=\"johndoe@okler.com\">
                        <span class=\"name\">John Doe Junior</span>
                        <span class=\"role\">administrator</span>
                    </div>

                    <i class=\"fa custom-caret\"></i>
                </a>

                <div class=\"dropdown-menu\">
                    <ul class=\"list-unstyled\">
                        <li class=\"divider\"></li>
                        <li>
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"pages-user-profile.html\"><i class=\"fa fa-user\"></i> My Profile</a>
                        </li>
                        <li>
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\" data-lock-screen=\"true\"><i class=\"fa fa-lock\"></i> Lock Screen</a>
                        </li>
                        <li>
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"pages-signin.html\"><i class=\"fa fa-power-off\"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: search & user box -->
    </header>
    <!-- end: header -->

    <div class=\"inner-wrapper\">
        <!-- start: sidebar -->
        <aside id=\"sidebar-left\" class=\"sidebar-left\">

            <div class=\"sidebar-header\">
                <div class=\"sidebar-title\">
                    Navigation
                </div>
                <div class=\"sidebar-toggle hidden-xs\" data-toggle-class=\"sidebar-left-collapsed\" data-target=\"html\" data-fire-event=\"sidebar-left-toggle\">
                    <i class=\"fa fa-bars\" aria-label=\"Toggle sidebar\"></i>
                </div>
            </div>

            <div class=\"nano\">
                <div class=\"nano-content\">
                    <nav id=\"menu\" class=\"nav-main\" role=\"navigation\">
                        <ul class=\"nav nav-main\">
                            <li>
                                <a href=\"index.html\">
                                    <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"mailbox-folder.html\">
                                    <span class=\"pull-right label label-primary\">182</span>
                                    <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                                    <span>Mailbox</span>
                                </a>
                            </li>
                            <li class=\"nav-parent\">
                                <a>
                                    <i class=\"fa fa-copy\" aria-hidden=\"true\"></i>
                                    <span>Pages</span>
                                </a>
                                <ul class=\"nav nav-children\">
                                    <li>
                                        <a href=\"pages-signup.html\">
                                            Sign Up
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-signin.html\">
                                            Sign In
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-recover-password.html\">
                                            Recover Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-lock-screen.html\">
                                            Locked Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-user-profile.html\">
                                            User Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-session-timeout.html\">
                                            Session Timeout
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-calendar.html\">
                                            Calendar
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-timeline.html\">
                                            Timeline
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-media-gallery.html\">
                                            Media Gallery
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-invoice.html\">
                                            Invoice
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-blank.html\">
                                            Blank Page
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-404.html\">
                                            404
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-500.html\">
                                            500
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-log-viewer.html\">
                                            Log Viewer
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"pages-search-results.html\">
                                            Search Results
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-parent\">
                                <a>
                                    <i class=\"fa fa-tasks\" aria-hidden=\"true\"></i>
                                    <span>UI Elements</span>
                                </a>
                                <ul class=\"nav nav-children\">
                                    <li>
                                        <a href=\"ui-elements-typography.html\">
                                            Typography
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-icons.html\">
                                            Icons
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-tabs.html\">
                                            Tabs
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-panels.html\">
                                            Panels
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-widgets.html\">
                                            Widgets
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-portlets.html\">
                                            Portlets
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-buttons.html\">
                                            Buttons
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-alerts.html\">
                                            Alerts
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-notifications.html\">
                                            Notifications
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-modals.html\">
                                            Modals
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-lightbox.html\">
                                            Lightbox
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-progressbars.html\">
                                            Progress Bars
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-sliders.html\">
                                            Sliders
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-carousels.html\">
                                            Carousels
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-accordions.html\">
                                            Accordions
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-nestable.html\">
                                            Nestable
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-tree-view.html\">
                                            Tree View
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-grid-system.html\">
                                            Grid System
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-charts.html\">
                                            Charts
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-animations.html\">
                                            Animations
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"ui-elements-extra.html\">
                                            Extra
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-parent nav-expanded nav-active\">
                                <a>
                                    <i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i>
                                    <span>Dashboard</span>
                                </a>
                                <ul class=\"nav nav-children\">
                                    <li>
                                        <a href=\"{{ path('back_sujet_lister') }}\">
                                            Liste des Sujets
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('back_sujet_Bannissement') }}\">
                                            Gestion des Bannissement
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('back_sujets_Signales') }}\">
                                            Gestion des Sujets Signalés
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('back_messages_Signales') }}\">
                                            Gestion des Messages Signalés
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            Statistiques
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-parent\">
                                <a>
                                    <i class=\"fa fa-table\" aria-hidden=\"true\"></i>
                                    <span>Gestion des évènements</span>
                                </a>
                                <ul class=\"nav nav-children\">
                                    <li>
                                        <a href=\"#\">
                                            Ajouter un évènement
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            Afficher les événements
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"tables-advanced.html\">
                                            Associer des participants <br/>a un évènement
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"tables-responsive.html\">
                                            Informer les participants
                                        </a>
                                    </li>
                                    <li >
                                        {#class=\"nav-active\"#}
                                        <a href=\"tables-editable.html\">
                                            Gérer les demandes
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"tables-ajax.html\">
                                            Ajax
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"tables-pricing.html\">
                                            Pricing
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-parent\">
                                <a>
                                    <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                                    <span>Maps</span>
                                </a>
                                <ul class=\"nav nav-children\">
                                    <li>
                                        <a href=\"maps-google-maps.html\">
                                            Basic
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"maps-google-maps-builder.html\">
                                            Map Builder
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"maps-vector.html\">
                                            Vector
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-parent\">
                                <a>
                                    <i class=\"fa fa-columns\" aria-hidden=\"true\"></i>
                                    <span>Layouts</span>
                                </a>
                                <ul class=\"nav nav-children\">
                                    <li>
                                        <a href=\"layouts-default.html\">
                                            Default
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"layouts-boxed.html\">
                                            Boxed
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"layouts-menu-collapsed.html\">
                                            Menu Collapsed
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"layouts-scroll.html\">
                                            Scroll
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-parent\">
                                <a>
                                    <i class=\"fa fa-align-left\" aria-hidden=\"true\"></i>
                                    <span>Menu Levels</span>
                                </a>
                                <ul class=\"nav nav-children\">
                                    <li>
                                        <a>First Level</a>
                                    </li>
                                    <li class=\"nav-parent\">
                                        <a>Second Level</a>
                                        <ul class=\"nav nav-children\">
                                            <li class=\"nav-parent\">
                                                <a>Third Level</a>
                                                <ul class=\"nav nav-children\">
                                                    <li>
                                                        <a>Third Level Link #1</a>
                                                    </li>
                                                    <li>
                                                        <a>Third Level Link #2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a>Second Level Link #1</a>
                                            </li>
                                            <li>
                                                <a>Second Level Link #2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"http://themeforest.net/item/porto-responsive-html5-template/4106987?ref=Okler\" target=\"_blank\">
                                    <i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
                                    <span>Front-End <em class=\"not-included\">(Not Included)</em></span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <hr class=\"separator\" />

                    <div class=\"sidebar-widget widget-tasks\">
                        <div class=\"widget-header\">
                            <h6>Projects</h6>
                            <div class=\"widget-toggle\">+</div>
                        </div>
                        <div class=\"widget-content\">
                            <ul class=\"list-unstyled m-none\">
                                <li><a href=\"#\">Porto HTML5 Template</a></li>
                                <li><a href=\"#\">Tucson Template</a></li>
                                <li><a href=\"#\">Porto Admin</a></li>
                            </ul>
                        </div>
                    </div>

                    <hr class=\"separator\" />

                    <div class=\"sidebar-widget widget-stats\">
                        <div class=\"widget-header\">
                            <h6>Company Stats</h6>
                            <div class=\"widget-toggle\">+</div>
                        </div>
                        <div class=\"widget-content\">
                            <ul>
                                <li>
                                    <span class=\"stats-title\">Stat 1</span>
                                    <span class=\"stats-complete\">85%</span>
                                    <div class=\"progress\">
                                        <div class=\"progress-bar progress-bar-primary progress-without-number\" role=\"progressbar\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 85%;\">
                                            <span class=\"sr-only\">85% Complete</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class=\"stats-title\">Stat 2</span>
                                    <span class=\"stats-complete\">70%</span>
                                    <div class=\"progress\">
                                        <div class=\"progress-bar progress-bar-primary progress-without-number\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 70%;\">
                                            <span class=\"sr-only\">70% Complete</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class=\"stats-title\">Stat 3</span>
                                    <span class=\"stats-complete\">2%</span>
                                    <div class=\"progress\">
                                        <div class=\"progress-bar progress-bar-primary progress-without-number\" role=\"progressbar\" aria-valuenow=\"2\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 2%;\">
                                            <span class=\"sr-only\">2% Complete</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </aside>
        <!-- end: sidebar -->

        <section role=\"main\" class=\"content-body\">
            <header class=\"page-header\">
                <h2>Editable Tables</h2>

                <div class=\"right-wrapper pull-right\">
                    <ol class=\"breadcrumbs\">
                        <li>
                            <a href=\"index.html\">
                                <i class=\"fa fa-home\"></i>
                            </a>
                        </li>
                        <li><span>Tables</span></li>
                        <li><span>Editable</span></li>
                    </ol>

                    <a class=\"sidebar-right-toggle\" data-open=\"sidebar-right\"><i class=\"fa fa-chevron-left\"></i></a>
                </div>
            </header>

            <!-- start: page -->



                        <section class=\"panel\">
                            <header class=\"panel-heading\">
                                <div class=\"panel-actions\">
                                    <a href=\"#\" class=\"fa fa-caret-down\"></a>
                                    <a href=\"#\" class=\"fa fa-times\"></a>
                                </div>

                                <h2 class=\"panel-title\">{% block titrePage %}Gestion des évènements{% endblock %}</h2>
                            </header>
                            <div class=\"panel-body\">
                                {% block body %} {% endblock %}
                            </div>
                        </section>


            <!-- end: page -->
        </section>
    </div>

    <aside id=\"sidebar-right\" class=\"sidebar-right\">
        <div class=\"nano\">
            <div class=\"nano-content\">
                <a href=\"#\" class=\"mobile-close visible-xs\">
                    Collapse <i class=\"fa fa-chevron-right\"></i>
                </a>

                <div class=\"sidebar-right-wrapper\">

                    <div class=\"sidebar-widget widget-calendar\">
                        <h6>Upcoming Tasks</h6>
                        <div data-plugin-datepicker data-plugin-skin=\"dark\" ></div>

                        <ul>
                            <li>
                                <time datetime=\"2014-04-19T00:00+00:00\">04/19/2014</time>
                                <span>Company Meeting</span>
                            </li>
                        </ul>
                    </div>

                    <div class=\"sidebar-widget widget-friends\">
                        <h6>Friends</h6>
                        <ul>
                            <li class=\"status-online\">
                                <figure class=\"profile-picture\">
                                    <img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Doe\" class=\"img-circle\">
                                </figure>
                                <div class=\"profile-info\">
                                    <span class=\"name\">Joseph Doe Junior</span>
                                    <span class=\"title\">Hey, how are you?</span>
                                </div>
                            </li>
                            <li class=\"status-online\">
                                <figure class=\"profile-picture\">
                                    <img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Doe\" class=\"img-circle\">
                                </figure>
                                <div class=\"profile-info\">
                                    <span class=\"name\">Joseph Doe Junior</span>
                                    <span class=\"title\">Hey, how are you?</span>
                                </div>
                            </li>
                            <li class=\"status-offline\">
                                <figure class=\"profile-picture\">
                                    <img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Doe\" class=\"img-circle\">
                                </figure>
                                <div class=\"profile-info\">
                                    <span class=\"name\">Joseph Doe Junior</span>
                                    <span class=\"title\">Hey, how are you?</span>
                                </div>
                            </li>
                            <li class=\"status-offline\">
                                <figure class=\"profile-picture\">
                                    <img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Doe\" class=\"img-circle\">
                                </figure>
                                <div class=\"profile-info\">
                                    <span class=\"name\">Joseph Doe Junior</span>
                                    <span class=\"title\">Hey, how are you?</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </aside>
</section>

<div id=\"dialog\" class=\"modal-block mfp-hide\">
    <section class=\"panel\">
        <header class=\"panel-heading\">
            <h2 class=\"panel-title\">Are you sure?</h2>
        </header>
        <div class=\"panel-body\">
            <div class=\"modal-wrapper\">
                <div class=\"modal-text\">
                    <p>Are you sure that you want to delete this row?</p>
                </div>
            </div>
        </div>
        <footer class=\"panel-footer\">
            <div class=\"row\">
                <div class=\"col-md-12 text-right\">
                    <button id=\"dialogConfirm\" class=\"btn btn-primary\">Confirm</button>
                    <button id=\"dialogCancel\" class=\"btn btn-default\">Cancel</button>
                </div>
            </div>
        </footer>
    </section>
</div>

<!-- Vendor -->
<script src=\"{{ asset('vendor/jquery/jquery.js') }}\"></script>
{#{<link rel=\"stylesheet\" href=\"{{ asset('vendor/jquery/jquery.js') }}\" />}#}

{#<script src=\"assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js\"></script>#}
<script src=\"{{ asset('vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}\"></script>

{#<script src=\"assets/vendor/bootstrap/js/bootstrap.js\"></script>#}
<script src=\"{{ asset('vendor/bootstrap/js/bootstrap.js') }}\"></script>

{#<script src=\"assets/vendor/nanoscroller/nanoscroller.js\"></script>#}
<script src=\"{{ asset('vendor/nanoscroller/nanoscroller.js') }}\"></script>

{#<script src=\"assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js\"></script>#}
<script src=\"{{ asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}\"></script>

{#<script src=\"assets/vendor/magnific-popup/magnific-popup.js\"></script>#}
<script src=\"{{ asset('vendor/magnific-popup/magnific-popup.js') }}\"></script>

{#<script src=\"assets/vendor/jquery-placeholder/jquery.placeholder.js\"></script>#}
<script src=\"{{ asset('vendor/jquery-placeholder/jquery.placeholder.js') }}\"></script>

<!-- Specific Page Vendor -->
{#<script src=\"assets/vendor/select2/select2.js\"></script>#}
<script src=\"{{ asset('vendor/select2/select2.js') }}\"></script>

{#<script src=\"assets/vendor/jquery-datatables/media/js/jquery.dataTables.js\"></script>#}
<script src=\"{{ asset('vendor/jquery-datatables/media/js/jquery.dataTables.js') }}\"></script>
{#<script src=\"assets/vendor/jquery-datatables-bs3/assets/js/datatables.js\"></script>#}
<script src=\"{{ asset('vendor/jquery-datatables-bs3/assets/js/datatables.js') }}\"></script>


<!-- Theme Base, Components and Settings -->
{#<script src=\"assets/javascripts/theme.js\"></script>#}
<script src=\"{{ asset('javascripts/theme.js') }}\"></script>



<!-- Theme Custom -->
{#<script src=\"assets/javascripts/theme.custom.js\"></script>#}
<script src=\"{{ asset('javascripts/theme.custom.js') }}\"></script>


<!-- Theme Initialization Files -->
{#<script src=\"assets/javascripts/theme.init.js\"></script>#}
<script src=\"{{ asset('javascripts/theme.init.js') }}\"></script>



<!-- Examples -->
{#<script src=\"assets/javascripts/tables/examples.datatables.editable.js\"></script>#}
<script src=\"{{ asset('javascripts/tables/examples.datatables.editable.js') }}\"></script>

</body>

{% block javascripts %}{% endblock %}

</html>", "default/indexBack.html.twig", "C:\\wamp64\\www\\webculture\\app\\Resources\\views\\default\\indexBack.html.twig");
    }
}
