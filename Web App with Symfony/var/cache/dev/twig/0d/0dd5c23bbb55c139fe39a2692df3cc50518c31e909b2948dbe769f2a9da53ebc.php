<?php

/* base.html.twig */
class __TwigTemplate_25b67dacb3d3d8febb5d1b8ca0a40d48e81b714295500cf4ccb4ebb531c0c27b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'barremenu' => [$this, 'block_barremenu'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"description\" content=\"\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    ";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 24
        echo "    <!-- Preloader -->
    <!--<div class=\"preloader d-flex align-items-center justify-content-center\">
        <div class=\"preloader-content\">
            <h3>Cooking in progress..</h3>
            <div id=\"cooking\">
                <div class=\"bubble\"></div>
                <div class=\"bubble\"></div>
                <div class=\"bubble\"></div>
                <div class=\"bubble\"></div>
                <div class=\"bubble\"></div>
                <div id=\"area\">
                    <div id=\"sides\">
                        <div id=\"pan\"></div>
                        <div id=\"handle\"></div>
                    </div>
                    <div id=\"pancake\">
                        <div id=\"pastry\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

    <!-- ##### Header Area Start ##### -->
    <header class=\"header-area\">

        <!-- Top Header Area -->
        <div class=\"top-header-area bg-img bg-overlay\" style=\"background-image: url(";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/header.jpg"), "html", null, true);
        echo ");\">
            <div class=\"container h-100\">
                <div class=\"row h-100 align-items-center justify-content-between\">
                    <div class=\"col-12 col-sm-6\">
                        <!-- Top Social Info -->
                        <div class=\"top-social-info\">
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Pinterest\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Dribbble\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Behance\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Linkedin\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-12 col-sm-6 col-lg-5 col-xl-4\">
                        <!-- Top Search Area -->
                        <div class=\"top-search-area\">
                            <form action=\"#\" method=\"post\">
                                <input type=\"search\" name=\"top-search\" id=\"topSearch\" placeholder=\"Search\">
                                <button type=\"submit\" class=\"btn\"><i class=\"fa fa-search\"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo Area -->
        <div class=\"logo-area\">
            <a href=\"index.html\"><img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/core-img/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
        </div>

        <!-- Navbar Area -->
        <div class=\"bueno-main-menu\" id=\"sticker\">
            <div class=\"classy-nav-container breakpoint-off\">
                <div class=\"container\">
                    <!-- Menu -->
                    <nav class=\"classy-navbar justify-content-between\" id=\"buenoNav\">

                        <!-- Toggler -->
                        <div id=\"toggler\"><img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/core-img/toggler.png"), "html", null, true);
        echo "\" alt=\"\"></div>

                        <!-- Navbar Toggler -->
                        <div class=\"classy-navbar-toggler\">
                            <span class=\"navbarToggler\"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class=\"classy-menu\">

                            <!-- Close Button -->
                            <div class=\"classycloseIcon\">
                                <div class=\"cross-wrap\"><span class=\"top\"></span><span class=\"bottom\"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class=\"classynav\">
                                ";
        // line 108
        $this->displayBlock('barremenu', $context, $blocks);
        // line 167
        echo "
                                <!-- Login/Register -->

                                    ";
        // line 170
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 171
            echo "                                        <div class=\"login-area\">
                                                <a href=\"";
            // line 172
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cite_user_homepage");
            echo "\">Bienvenue, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
            echo "</a>
                                        </div>
                                        <div class=\"login-area\">
                                            <a href=\"";
            // line 175
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Logout</a>
                                        </div>
                                    ";
        } else {
            // line 178
            echo "                                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login / Register</a>
                                    ";
        }
        // line 180
        echo "
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    ";
        // line 192
        $this->displayBlock('body', $context, $blocks);
        // line 193
        echo "
    <!-- ##### Footer Area Start ##### -->
    <footer class=\"footer-area\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-12 col-sm-7\">
                    <!-- Footer Nav -->
                    <div class=\"footer-nav\">
                        <ul>
                            <li class=\"active\"><a href=\"#\">Home</a></li>
                            <li><a href=\"#\">Recipes</a></li>
                            <li><a href=\"#\">About Us</a></li>
                            <li><a href=\"#\">Blog</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Popper js -->
    <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap/popper.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap js -->
    <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- All Plugins js -->
    <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/plugins.js"), "html", null, true);
        echo "\"></script>
    <!-- Active js -->
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/active.js"), "html", null, true);
        echo "\"></script>


        ";
        // line 229
        $this->displayBlock('footer', $context, $blocks);
        // line 230
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 231
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
            <link  href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
            <link  href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/classy-nav.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
            <link  href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
            <link  href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popu^p.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
            <link  href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
            <link  href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
            <link rel=\"icon\" href=";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/core-img/favicon.ico"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_barremenu($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barremenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barremenu"));

        // line 109
        echo "                                    <ul>
                                        <li><a href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cite_homepage");
        echo "\">Home</a></li>
                                        <li><a href=\"#\">About Us</a></li>
                                        <li><a href=\"#\">Pages</a>
                                            <ul class=\"dropdown\">
                                                <li><a href=\"index.html\">Home</a></li>
                                                <li><a href=\"catagory.html\">Catagory</a></li>
                                                <li><a href=\"catagory-post.html\">Catagory Post</a></li>
                                                <li><a href=\"single-post.html\">Single Post</a></li>
                                                <li><a href=\"receipe.html\">Recipe</a></li>
                                                <li><a href=\"contact.html\">Contact</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"#\">Recipes</a>
                                            <div class=\"megamenu\">
                                                <ul class=\"single-mega cn-col-4\">
                                                    <li><a href=\"#\">- Recipe</a></li>
                                                    <li><a href=\"#\">- Bread</a></li>
                                                    <li><a href=\"#\">- Breakfast</a></li>
                                                    <li><a href=\"#\">- Meat</a></li>
                                                    <li><a href=\"#\">- Fastfood</a></li>
                                                    <li><a href=\"#\">- Salad</a></li>
                                                    <li><a href=\"#\">- Soup</a></li>
                                                </ul>
                                                <ul class=\"single-mega cn-col-4\">
                                                    <li><a href=\"#\">- Recipe</a></li>
                                                    <li><a href=\"#\">- Bread</a></li>
                                                    <li><a href=\"#\">- Breakfast</a></li>
                                                    <li><a href=\"#\">- Meat</a></li>
                                                    <li><a href=\"#\">- Fastfood</a></li>
                                                    <li><a href=\"#\">- Salad</a></li>
                                                    <li><a href=\"#\">- Soup</a></li>
                                                </ul>
                                                <ul class=\"single-mega cn-col-4\">
                                                    <li><a href=\"#\">- Recipe</a></li>
                                                    <li><a href=\"#\">- Bread</a></li>
                                                    <li><a href=\"#\">- Breakfast</a></li>
                                                    <li><a href=\"#\">- Meat</a></li>
                                                    <li><a href=\"#\">- Fastfood</a></li>
                                                    <li><a href=\"#\">- Salad</a></li>
                                                    <li><a href=\"#\">- Soup</a></li>
                                                </ul>
                                                <ul class=\"single-mega cn-col-4\">
                                                    <li><a href=\"#\">- Recipe</a></li>
                                                    <li><a href=\"#\">- Bread</a></li>
                                                    <li><a href=\"#\">- Breakfast</a></li>
                                                    <li><a href=\"#\">- Meat</a></li>
                                                    <li><a href=\"#\">- Fastfood</a></li>
                                                    <li><a href=\"#\">- Salad</a></li>
                                                    <li><a href=\"#\">- Soup</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href=\"single-post.html\">Blog</a></li>
                                        <li><a href=\"";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cite_forum_homepage");
        echo "\">Forum</a></li>
                                        <li><a href=\"contact.html\">Contact</a></li>
                                    </ul>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 192
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 229
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 230
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
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 230,  457 => 229,  440 => 192,  426 => 163,  370 => 110,  367 => 109,  358 => 108,  341 => 23,  329 => 18,  325 => 17,  321 => 16,  317 => 15,  313 => 14,  309 => 13,  305 => 12,  301 => 11,  296 => 10,  287 => 9,  269 => 8,  257 => 231,  254 => 230,  252 => 229,  246 => 226,  241 => 224,  236 => 222,  231 => 220,  226 => 218,  199 => 193,  197 => 192,  183 => 180,  177 => 178,  171 => 175,  163 => 172,  160 => 171,  158 => 170,  153 => 167,  151 => 108,  131 => 91,  117 => 80,  85 => 51,  56 => 24,  54 => 23,  47 => 20,  45 => 9,  41 => 8,  32 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"description\" content=\"\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link  href=\"{{ asset('css/animate.css') }}\" rel=\"stylesheet\"  />
            <link  href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\"  />
            <link  href=\"{{ asset('css/classy-nav.css') }}\" rel=\"stylesheet\"  />
            <link  href=\"{{ asset('css/font-awesome.css') }}\" rel=\"stylesheet\"  />
            <link  href=\"{{ asset('css/magnific-popu^p.css') }}\" rel=\"stylesheet\"  />
            <link  href=\"{{ asset('css/nice-select.css') }}\" rel=\"stylesheet\"  />
            <link  href=\"{{ asset('css/owl.carousel.css') }}\" rel=\"stylesheet\"  />
            <link rel=\"icon\" href={{ asset('img/core-img/favicon.ico') }}>
            <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
    {% block header %}{% endblock %}
    <!-- Preloader -->
    <!--<div class=\"preloader d-flex align-items-center justify-content-center\">
        <div class=\"preloader-content\">
            <h3>Cooking in progress..</h3>
            <div id=\"cooking\">
                <div class=\"bubble\"></div>
                <div class=\"bubble\"></div>
                <div class=\"bubble\"></div>
                <div class=\"bubble\"></div>
                <div class=\"bubble\"></div>
                <div id=\"area\">
                    <div id=\"sides\">
                        <div id=\"pan\"></div>
                        <div id=\"handle\"></div>
                    </div>
                    <div id=\"pancake\">
                        <div id=\"pastry\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

    <!-- ##### Header Area Start ##### -->
    <header class=\"header-area\">

        <!-- Top Header Area -->
        <div class=\"top-header-area bg-img bg-overlay\" style=\"background-image: url({{ asset('img/bg-img/header.jpg') }});\">
            <div class=\"container h-100\">
                <div class=\"row h-100 align-items-center justify-content-between\">
                    <div class=\"col-12 col-sm-6\">
                        <!-- Top Social Info -->
                        <div class=\"top-social-info\">
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Pinterest\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Dribbble\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Behance\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Linkedin\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-12 col-sm-6 col-lg-5 col-xl-4\">
                        <!-- Top Search Area -->
                        <div class=\"top-search-area\">
                            <form action=\"#\" method=\"post\">
                                <input type=\"search\" name=\"top-search\" id=\"topSearch\" placeholder=\"Search\">
                                <button type=\"submit\" class=\"btn\"><i class=\"fa fa-search\"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo Area -->
        <div class=\"logo-area\">
            <a href=\"index.html\"><img src=\"{{ asset('img/core-img/logo.png') }}\" alt=\"\"></a>
        </div>

        <!-- Navbar Area -->
        <div class=\"bueno-main-menu\" id=\"sticker\">
            <div class=\"classy-nav-container breakpoint-off\">
                <div class=\"container\">
                    <!-- Menu -->
                    <nav class=\"classy-navbar justify-content-between\" id=\"buenoNav\">

                        <!-- Toggler -->
                        <div id=\"toggler\"><img src=\"{{ asset('img/core-img/toggler.png') }}\" alt=\"\"></div>

                        <!-- Navbar Toggler -->
                        <div class=\"classy-navbar-toggler\">
                            <span class=\"navbarToggler\"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class=\"classy-menu\">

                            <!-- Close Button -->
                            <div class=\"classycloseIcon\">
                                <div class=\"cross-wrap\"><span class=\"top\"></span><span class=\"bottom\"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class=\"classynav\">
                                {% block barremenu %}
                                    <ul>
                                        <li><a href=\"{{ path('cite_homepage') }}\">Home</a></li>
                                        <li><a href=\"#\">About Us</a></li>
                                        <li><a href=\"#\">Pages</a>
                                            <ul class=\"dropdown\">
                                                <li><a href=\"index.html\">Home</a></li>
                                                <li><a href=\"catagory.html\">Catagory</a></li>
                                                <li><a href=\"catagory-post.html\">Catagory Post</a></li>
                                                <li><a href=\"single-post.html\">Single Post</a></li>
                                                <li><a href=\"receipe.html\">Recipe</a></li>
                                                <li><a href=\"contact.html\">Contact</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"#\">Recipes</a>
                                            <div class=\"megamenu\">
                                                <ul class=\"single-mega cn-col-4\">
                                                    <li><a href=\"#\">- Recipe</a></li>
                                                    <li><a href=\"#\">- Bread</a></li>
                                                    <li><a href=\"#\">- Breakfast</a></li>
                                                    <li><a href=\"#\">- Meat</a></li>
                                                    <li><a href=\"#\">- Fastfood</a></li>
                                                    <li><a href=\"#\">- Salad</a></li>
                                                    <li><a href=\"#\">- Soup</a></li>
                                                </ul>
                                                <ul class=\"single-mega cn-col-4\">
                                                    <li><a href=\"#\">- Recipe</a></li>
                                                    <li><a href=\"#\">- Bread</a></li>
                                                    <li><a href=\"#\">- Breakfast</a></li>
                                                    <li><a href=\"#\">- Meat</a></li>
                                                    <li><a href=\"#\">- Fastfood</a></li>
                                                    <li><a href=\"#\">- Salad</a></li>
                                                    <li><a href=\"#\">- Soup</a></li>
                                                </ul>
                                                <ul class=\"single-mega cn-col-4\">
                                                    <li><a href=\"#\">- Recipe</a></li>
                                                    <li><a href=\"#\">- Bread</a></li>
                                                    <li><a href=\"#\">- Breakfast</a></li>
                                                    <li><a href=\"#\">- Meat</a></li>
                                                    <li><a href=\"#\">- Fastfood</a></li>
                                                    <li><a href=\"#\">- Salad</a></li>
                                                    <li><a href=\"#\">- Soup</a></li>
                                                </ul>
                                                <ul class=\"single-mega cn-col-4\">
                                                    <li><a href=\"#\">- Recipe</a></li>
                                                    <li><a href=\"#\">- Bread</a></li>
                                                    <li><a href=\"#\">- Breakfast</a></li>
                                                    <li><a href=\"#\">- Meat</a></li>
                                                    <li><a href=\"#\">- Fastfood</a></li>
                                                    <li><a href=\"#\">- Salad</a></li>
                                                    <li><a href=\"#\">- Soup</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href=\"single-post.html\">Blog</a></li>
                                        <li><a href=\"{{ path('cite_forum_homepage') }}\">Forum</a></li>
                                        <li><a href=\"contact.html\">Contact</a></li>
                                    </ul>
                                {% endblock %}

                                <!-- Login/Register -->

                                    {% if is_granted('ROLE_USER') %}
                                        <div class=\"login-area\">
                                                <a href=\"{{ path('cite_user_homepage') }}\">Bienvenue, {{ app.user.username }}</a>
                                        </div>
                                        <div class=\"login-area\">
                                            <a href=\"{{ path('fos_user_security_logout') }}\">Logout</a>
                                        </div>
                                    {% else %}
                                        <a href=\"{{ path('fos_user_security_login') }}\">Login / Register</a>
                                    {% endif %}

                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    {% block body %}{% endblock %}

    <!-- ##### Footer Area Start ##### -->
    <footer class=\"footer-area\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-12 col-sm-7\">
                    <!-- Footer Nav -->
                    <div class=\"footer-nav\">
                        <ul>
                            <li class=\"active\"><a href=\"#\">Home</a></li>
                            <li><a href=\"#\">Recipes</a></li>
                            <li><a href=\"#\">About Us</a></li>
                            <li><a href=\"#\">Blog</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src=\"{{ asset('js/jquery/jquery-2.2.4.min.js') }}\"></script>
    <!-- Popper js -->
    <script src=\"{{ asset('js/bootstrap/popper.min.js') }}\"></script>
    <!-- Bootstrap js -->
    <script src=\"{{ asset('js/bootstrap/bootstrap.min.js') }}\"></script>
    <!-- All Plugins js -->
    <script src=\"{{ asset('js/plugins/plugins.js') }}\"></script>
    <!-- Active js -->
    <script src=\"{{ asset('js/active.js') }}\"></script>


        {% block footer %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\webculture\\app\\Resources\\views\\base.html.twig");
    }
}
