<?php

/* base.html.twig */
class __TwigTemplate_9b557e696a914e5c5c23d03541acaaf3b8b58279e92b429eee42be46bc81267c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
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
    <div class=\"preloader d-flex align-items-center justify-content-center\">
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
    </div>

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
                                <ul>
                                    <li><a href=\"index.html\">Home</a></li>
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
                                    <li><a href=\"contact.html\">Contact</a></li>
                                </ul>

                                <!-- Login/Register -->
                                <div class=\"login-area\">
                                    <a href=\"#\">Login / Register</a>
                                </div>
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Treading Post Area Start ##### -->
    <div class=\"treading-post-area\" id=\"treadingPost\">
        <div class=\"close-icon\">
            <i class=\"fa fa-times\"></i>
        </div>

        <h4>Treading Post</h4>

        <!-- Single Blog Post -->
        <div class=\"single-blog-post style-1 d-flex flex-wrap mb-30\">
            <!-- Blog Thumbnail -->
            <div class=\"blog-thumbnail\">
                <img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/9.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <!-- Blog Content -->
            <div class=\"blog-content\">
                <a href=\"#\" class=\"post-tag\">The Best</a>
                <a href=\"#\" class=\"post-title\">Friend eggs with ham</a>
                <div class=\"post-meta\">
                    <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                    <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class=\"single-blog-post style-1 d-flex flex-wrap mb-30\">
            <!-- Blog Thumbnail -->
            <div class=\"blog-thumbnail\">
                <img src=\"img/bg-img/10.jpg\" alt=\"\">
            </div>
            <!-- Blog Content -->
            <div class=\"blog-content\">
                <a href=\"#\" class=\"post-tag\">The Best</a>
                <a href=\"#\" class=\"post-title\">Mushrooms with pork chop</a>
                <div class=\"post-meta\">
                    <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                    <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class=\"single-blog-post style-1 d-flex flex-wrap mb-30\">
            <!-- Blog Thumbnail -->
            <div class=\"blog-thumbnail\">
                <img src=\"img/bg-img/11.jpg\" alt=\"\">
            </div>
            <!-- Blog Content -->
            <div class=\"blog-content\">
                <a href=\"#\" class=\"post-tag\">The Best</a>
                <a href=\"#\" class=\"post-title\">Birthday cake with chocolate</a>
                <div class=\"post-meta\">
                    <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                    <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class=\"single-blog-post style-1 d-flex flex-wrap mb-30\">
            <!-- Blog Thumbnail -->
            <div class=\"blog-thumbnail\">
                <img src=\"img/bg-img/9.jpg\" alt=\"\">
            </div>
            <!-- Blog Content -->
            <div class=\"blog-content\">
                <a href=\"#\" class=\"post-tag\">The Best</a>
                <a href=\"#\" class=\"post-title\">Friend eggs with ham</a>
                <div class=\"post-meta\">
                    <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                    <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class=\"single-blog-post style-1 d-flex flex-wrap mb-30\">
            <!-- Blog Thumbnail -->
            <div class=\"blog-thumbnail\">
                <img src=\"img/bg-img/10.jpg\" alt=\"\">
            </div>
            <!-- Blog Content -->
            <div class=\"blog-content\">
                <a href=\"#\" class=\"post-tag\">The Best</a>
                <a href=\"#\" class=\"post-title\">Mushrooms with pork chop</a>
                <div class=\"post-meta\">
                    <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                    <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class=\"single-blog-post style-1 d-flex flex-wrap mb-30\">
            <!-- Blog Thumbnail -->
            <div class=\"blog-thumbnail\">
                <img src=\"img/bg-img/11.jpg\" alt=\"\">
            </div>
            <!-- Blog Content -->
            <div class=\"blog-content\">
                <a href=\"#\" class=\"post-tag\">The Best</a>
                <a href=\"#\" class=\"post-title\">Birthday cake with chocolate</a>
                <div class=\"post-meta\">
                    <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                    <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Treading Post Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class=\"hero-area\">
        <!-- Hero Post Slides -->
        <div class=\"hero-post-slides owl-carousel\">
            <!-- Single Slide -->
            <div class=\"single-slide\">
                <!-- Blog Thumbnail -->
                <div class=\"blog-thumbnail\">
                    <a href=\"#\"><img src=\"img/bg-img/1.jpg\" alt=\"\"></a>
                </div>

                <!-- Blog Content -->
                <div class=\"blog-content-bg\">
                    <div class=\"blog-content\">
                        <a href=\"#\" class=\"post-tag\">Healthy Food</a>
                        <a href=\"#\" class=\"post-title\">Chicken Salad</a>
                        <div class=\"post-meta\">
                            <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                            <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class=\"single-slide\">
                <!-- Blog Thumbnail -->
                <div class=\"blog-thumbnail\">
                    <a href=\"#\"><img src=\"img/bg-img/2.jpg\" alt=\"\"></a>
                </div>

                <!-- Blog Content -->
                <div class=\"blog-content-bg\">
                    <div class=\"blog-content\">
                        <a href=\"#\" class=\"post-tag\">Healthy Food</a>
                        <a href=\"#\" class=\"post-title\">Chicken Salad</a>
                        <div class=\"post-meta\">
                            <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                            <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class=\"single-slide\">
                <!-- Blog Thumbnail -->
                <div class=\"blog-thumbnail\">
                    <a href=\"#\"><img src=\"img/bg-img/3.jpg\" alt=\"\"></a>
                </div>

                <!-- Blog Content -->
                <div class=\"blog-content-bg\">
                    <div class=\"blog-content\">
                        <a href=\"#\" class=\"post-tag\">Healthy Food</a>
                        <a href=\"#\" class=\"post-title\">Chicken Salad</a>
                        <div class=\"post-meta\">
                            <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                            <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class=\"single-slide\">
                <!-- Blog Thumbnail -->
                <div class=\"blog-thumbnail\">
                    <a href=\"#\"><img src=\"img/bg-img/3.jpg\" alt=\"\"></a>
                </div>

                <!-- Blog Content -->
                <div class=\"blog-content-bg\">
                    <div class=\"blog-content\">
                        <a href=\"#\" class=\"post-tag\">Healthy Food</a>
                        <a href=\"#\" class=\"post-title\">Chicken Salad</a>
                        <div class=\"post-meta\">
                            <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                            <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Catagory Area Start ##### -->
    <div class=\"post-catagory section-padding-100-0 mb-70\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <!-- Single Post Catagory -->
                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"single-post-catagory mb-30\">
                        <img src=\"img/bg-img/4.jpg\" alt=\"\">
                        <!-- Content -->
                        <div class=\"catagory-content-bg\">
                            <div class=\"catagory-content\">
                                <a href=\"#\" class=\"post-tag\">The Best</a>
                                <a href=\"#\" class=\"post-title\">Healthy Food</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Post Catagory -->
                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"single-post-catagory mb-30\">
                        <img src=\"img/bg-img/5.jpg\" alt=\"\">
                        <!-- Content -->
                        <div class=\"catagory-content-bg\">
                            <div class=\"catagory-content\">
                                <a href=\"#\" class=\"post-tag\">The Best</a>
                                <a href=\"#\" class=\"post-title\">Organic Cuisine</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Post Catagory -->
                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"single-post-catagory mb-30\">
                        <img src=\"img/bg-img/6.jpg\" alt=\"\">
                        <!-- Content -->
                        <div class=\"catagory-content-bg\">
                            <div class=\"catagory-content\">
                                <a href=\"#\" class=\"post-tag\">The Best</a>
                                <a href=\"#\" class=\"post-title\">Vegetarian Food</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Catagory Area End ##### -->

    <!-- ##### Big Posts Area Start ##### -->
    <div class=\"big-posts-area mb-50\">
        <div class=\"container\">
            <!-- Single Big Post Area -->
            <div class=\"row align-items-center\">
                <div class=\"col-12 col-md-6\">
                    <div class=\"big-post-thumbnail mb-50\">
                        <img src=\"img/bg-img/7.jpg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-12 col-md-6\">
                    <div class=\"big-post-content text-center mb-50\">
                        <a href=\"#\" class=\"post-tag\">Healthy</a>
                        <a href=\"#\" class=\"post-title\">Friend eggs with ham</a>
                        <div class=\"post-meta\">
                            <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                            <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo vitae odio. Sed auctor tellus quis arcu tempus, egestas tincidunt augue pellentesque. Suspendisse vestibulum sem in eros maximus, pretium commodo turpis convallis. Aenean scelerisque orci quis urna tempus, vitae interdum velit aliquet.</p>
                        <a href=\"#\" class=\"btn bueno-btn\">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Single Big Post Area -->
            <div class=\"row align-items-center\">
                <div class=\"col-12 col-md-6\">
                    <div class=\"big-post-content text-center mb-50\">
                        <a href=\"#\" class=\"post-tag\">The Best</a>
                        <a href=\"#\" class=\"post-title\">Steak with boiled vegetables</a>
                        <div class=\"post-meta\">
                            <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                            <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo vitae odio. Sed auctor tellus quis arcu tempus, egestas tincidunt augue pellentesque. Suspendisse vestibulum sem in eros maximus, pretium commodo turpis convallis. Aenean scelerisque orci quis urna tempus, vitae interdum velit aliquet.</p>
                        <a href=\"#\" class=\"btn bueno-btn\">Read More</a>
                    </div>
                </div>
                <div class=\"col-12 col-md-6\">
                    <div class=\"big-post-thumbnail mb-50\">
                        <img src=\"img/bg-img/8.jpg\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Big Posts Area End ##### -->

    <!-- ##### Posts Area End ##### -->
    <div class=\"bueno-post-area mb-70\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <!-- Post Area -->
                <div class=\"col-12 col-lg-8 col-xl-9\">
                    <!-- Single Blog Post -->
                    <div class=\"single-blog-post style-1 d-flex flex-wrap mb-30\">
                        <!-- Blog Thumbnail -->
                        <div class=\"blog-thumbnail\">
                            <img src=\"img/bg-img/9.jpg\" alt=\"\">
                        </div>
                        <!-- Blog Content -->
                        <div class=\"blog-content\">
                            <a href=\"#\" class=\"post-tag\">The Best</a>
                            <a href=\"#\" class=\"post-title\">Friend eggs with ham</a>
                            <div class=\"post-meta\">
                                <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                                <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo vitae odio. Sed auctor tellus quis arcu tempus.</p>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class=\"single-blog-post style-1 d-flex flex-wrap mb-30\">
                        <!-- Blog Thumbnail -->
                        <div class=\"blog-thumbnail\">
                            <img src=\"img/bg-img/10.jpg\" alt=\"\">
                        </div>
                        <!-- Blog Content -->
                        <div class=\"blog-content\">
                            <a href=\"#\" class=\"post-tag\">The Best</a>
                            <a href=\"#\" class=\"post-title\">Mushrooms with pork chop</a>
                            <div class=\"post-meta\">
                                <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                                <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo vitae odio. Sed auctor tellus quis arcu tempus.</p>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class=\"single-blog-post style-1 d-flex flex-wrap mb-30\">
                        <!-- Blog Thumbnail -->
                        <div class=\"blog-thumbnail\">
                            <img src=\"img/bg-img/11.jpg\" alt=\"\">
                        </div>
                        <!-- Blog Content -->
                        <div class=\"blog-content\">
                            <a href=\"#\" class=\"post-tag\">The Best</a>
                            <a href=\"#\" class=\"post-title\">Birthday cake with chocolate</a>
                            <div class=\"post-meta\">
                                <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                                <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo vitae odio. Sed auctor tellus quis arcu tempus.</p>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Area -->
                <div class=\"col-12 col-sm-9 col-md-6 col-lg-4 col-xl-3\">
                    <div class=\"sidebar-area\">

                        <!-- Single Widget Area -->
                        <div class=\"single-widget-area add-widget mb-30\">
                            <img src=\"img/bg-img/add.png\" alt=\"\">
                        </div>

                        <!-- Single Widget Area -->
                        <div class=\"single-widget-area post-widget\">

                            <!-- Single Post Area -->
                            <div class=\"single-post-area d-flex\">
                                <!-- Blog Thumbnail -->
                                <div class=\"blog-thumbnail\">
                                    <img src=\"img/bg-img/12.jpg\" alt=\"\">
                                </div>
                                <!-- Blog Content -->
                                <div class=\"blog-content\">
                                    <a href=\"#\" class=\"post-title\">Friend eggs with ham</a>
                                    <div class=\"post-meta\">
                                        <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                                        <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Post Area -->
                            <div class=\"single-post-area d-flex mb-30\">
                                <!-- Blog Thumbnail -->
                                <div class=\"blog-thumbnail\">
                                    <img src=\"img/bg-img/13.jpg\" alt=\"\">
                                </div>
                                <!-- Blog Content -->
                                <div class=\"blog-content\">
                                    <a href=\"#\" class=\"post-title\">Burger with fries</a>
                                    <div class=\"post-meta\">
                                        <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                                        <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Post Area -->
                            <div class=\"single-post-area d-flex\">
                                <!-- Blog Thumbnail -->
                                <div class=\"blog-thumbnail\">
                                    <img src=\"img/bg-img/14.jpg\" alt=\"\">
                                </div>
                                <!-- Blog Content -->
                                <div class=\"blog-content\">
                                    <a href=\"#\" class=\"post-title\">Avocado &amp; Oisters</a>
                                    <div class=\"post-meta\">
                                        <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                                        <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Post Area -->
                            <div class=\"single-post-area d-flex\">
                                <!-- Blog Thumbnail -->
                                <div class=\"blog-thumbnail\">
                                    <img src=\"img/bg-img/15.jpg\" alt=\"\">
                                </div>
                                <!-- Blog Content -->
                                <div class=\"blog-content\">
                                    <a href=\"#\" class=\"post-title\">Tortilla prawns</a>
                                    <div class=\"post-meta\">
                                        <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                                        <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Post Area -->
                            <div class=\"single-post-area d-flex\">
                                <!-- Blog Thumbnail -->
                                <div class=\"blog-thumbnail\">
                                    <img src=\"img/bg-img/16.jpg\" alt=\"\">
                                </div>
                                <!-- Blog Content -->
                                <div class=\"blog-content\">
                                    <a href=\"#\" class=\"post-title\">Burger with fries</a>
                                    <div class=\"post-meta\">
                                        <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                                        <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Posts Area End ##### -->

    <!-- ##### Instagram Area Start ##### -->
    <div class=\"instagram-feed-area d-flex flex-wrap\">
        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta1.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"";
        // line 644
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta1.jpg"), "html", null, true);
        echo "\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"";
        // line 649
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta2.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"";
        // line 651
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta2.jpg"), "html", null, true);
        echo "\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"";
        // line 656
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta3.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"";
        // line 658
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta3.jpg"), "html", null, true);
        echo "\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta4.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"";
        // line 665
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta4.jpg"), "html", null, true);
        echo "\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"";
        // line 670
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta5.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"";
        // line 672
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta5.jpg"), "html", null, true);
        echo "\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"";
        // line 677
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta6.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"";
        // line 679
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta6.jpg"), "html", null, true);
        echo "\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"";
        // line 684
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta7.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"";
        // line 686
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta7.jpg"), "html", null, true);
        echo "\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"";
        // line 691
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta8.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"";
        // line 693
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta8.jpg"), "html", null, true);
        echo "\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"";
        // line 698
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta9.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"";
        // line 700
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta9.jpg"), "html", null, true);
        echo "\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"";
        // line 705
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta10.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"";
        // line 707
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta10.jpg"), "html", null, true);
        echo "\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>
    </div>
    <!-- ##### Instagram Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class=\"footer-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-sm-5\">
                    <!-- Copywrite Text -->
                    <p class=\"copywrite-text\"> <a href=\"#\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
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
        // line 742
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Popper js -->
    <script src=\"";
        // line 744
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap/popper.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap js -->
    <script src=\"";
        // line 746
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- All Plugins js -->
    <script src=\"";
        // line 748
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/plugins.js"), "html", null, true);
        echo "\"></script>
    <!-- Active js -->
    <script src=\"";
        // line 750
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/active.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 752
        $this->displayBlock('content', $context, $blocks);
        // line 753
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 754
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 755
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

    // line 752
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 753
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 754
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
        return array (  1015 => 754,  998 => 753,  981 => 752,  964 => 23,  952 => 18,  948 => 17,  944 => 16,  940 => 15,  936 => 14,  932 => 13,  928 => 12,  924 => 11,  919 => 10,  910 => 9,  892 => 8,  880 => 755,  877 => 754,  874 => 753,  872 => 752,  867 => 750,  862 => 748,  857 => 746,  852 => 744,  847 => 742,  809 => 707,  804 => 705,  796 => 700,  791 => 698,  783 => 693,  778 => 691,  770 => 686,  765 => 684,  757 => 679,  752 => 677,  744 => 672,  739 => 670,  731 => 665,  726 => 663,  718 => 658,  713 => 656,  705 => 651,  700 => 649,  692 => 644,  687 => 642,  234 => 192,  130 => 91,  116 => 80,  84 => 51,  55 => 24,  53 => 23,  46 => 20,  44 => 9,  40 => 8,  31 => 1,);
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
    <div class=\"preloader d-flex align-items-center justify-content-center\">
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
    </div>

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
                                <ul>
                                    <li><a href=\"index.html\">Home</a></li>
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
                                    <li><a href=\"contact.html\">Contact</a></li>
                                </ul>

                                <!-- Login/Register -->
                                <div class=\"login-area\">
                                    <a href=\"#\">Login / Register</a>
                                </div>
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Treading Post Area Start ##### -->
    <div class=\"treading-post-area\" id=\"treadingPost\">
        <div class=\"close-icon\">
            <i class=\"fa fa-times\"></i>
        </div>

        <h4>Treading Post</h4>

        <!-- Single Blog Post -->
        <div class=\"single-blog-post style-1 d-flex flex-wrap mb-30\">
            <!-- Blog Thumbnail -->
            <div class=\"blog-thumbnail\">
                <img src=\"{{ asset('img/bg-img/9.jpg') }}\" alt=\"\">
            </div>
            <!-- Blog Content -->
            <div class=\"blog-content\">
                <a href=\"#\" class=\"post-tag\">The Best</a>
                <a href=\"#\" class=\"post-title\">Friend eggs with ham</a>
                <div class=\"post-meta\">
                    <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                    <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class=\"single-blog-post style-1 d-flex flex-wrap mb-30\">
            <!-- Blog Thumbnail -->
            <div class=\"blog-thumbnail\">
                <img src=\"img/bg-img/10.jpg\" alt=\"\">
            </div>
            <!-- Blog Content -->
            <div class=\"blog-content\">
                <a href=\"#\" class=\"post-tag\">The Best</a>
                <a href=\"#\" class=\"post-title\">Mushrooms with pork chop</a>
                <div class=\"post-meta\">
                    <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                    <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class=\"single-blog-post style-1 d-flex flex-wrap mb-30\">
            <!-- Blog Thumbnail -->
            <div class=\"blog-thumbnail\">
                <img src=\"img/bg-img/11.jpg\" alt=\"\">
            </div>
            <!-- Blog Content -->
            <div class=\"blog-content\">
                <a href=\"#\" class=\"post-tag\">The Best</a>
                <a href=\"#\" class=\"post-title\">Birthday cake with chocolate</a>
                <div class=\"post-meta\">
                    <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                    <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class=\"single-blog-post style-1 d-flex flex-wrap mb-30\">
            <!-- Blog Thumbnail -->
            <div class=\"blog-thumbnail\">
                <img src=\"img/bg-img/9.jpg\" alt=\"\">
            </div>
            <!-- Blog Content -->
            <div class=\"blog-content\">
                <a href=\"#\" class=\"post-tag\">The Best</a>
                <a href=\"#\" class=\"post-title\">Friend eggs with ham</a>
                <div class=\"post-meta\">
                    <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                    <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class=\"single-blog-post style-1 d-flex flex-wrap mb-30\">
            <!-- Blog Thumbnail -->
            <div class=\"blog-thumbnail\">
                <img src=\"img/bg-img/10.jpg\" alt=\"\">
            </div>
            <!-- Blog Content -->
            <div class=\"blog-content\">
                <a href=\"#\" class=\"post-tag\">The Best</a>
                <a href=\"#\" class=\"post-title\">Mushrooms with pork chop</a>
                <div class=\"post-meta\">
                    <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                    <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class=\"single-blog-post style-1 d-flex flex-wrap mb-30\">
            <!-- Blog Thumbnail -->
            <div class=\"blog-thumbnail\">
                <img src=\"img/bg-img/11.jpg\" alt=\"\">
            </div>
            <!-- Blog Content -->
            <div class=\"blog-content\">
                <a href=\"#\" class=\"post-tag\">The Best</a>
                <a href=\"#\" class=\"post-title\">Birthday cake with chocolate</a>
                <div class=\"post-meta\">
                    <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                    <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Treading Post Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class=\"hero-area\">
        <!-- Hero Post Slides -->
        <div class=\"hero-post-slides owl-carousel\">
            <!-- Single Slide -->
            <div class=\"single-slide\">
                <!-- Blog Thumbnail -->
                <div class=\"blog-thumbnail\">
                    <a href=\"#\"><img src=\"img/bg-img/1.jpg\" alt=\"\"></a>
                </div>

                <!-- Blog Content -->
                <div class=\"blog-content-bg\">
                    <div class=\"blog-content\">
                        <a href=\"#\" class=\"post-tag\">Healthy Food</a>
                        <a href=\"#\" class=\"post-title\">Chicken Salad</a>
                        <div class=\"post-meta\">
                            <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                            <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class=\"single-slide\">
                <!-- Blog Thumbnail -->
                <div class=\"blog-thumbnail\">
                    <a href=\"#\"><img src=\"img/bg-img/2.jpg\" alt=\"\"></a>
                </div>

                <!-- Blog Content -->
                <div class=\"blog-content-bg\">
                    <div class=\"blog-content\">
                        <a href=\"#\" class=\"post-tag\">Healthy Food</a>
                        <a href=\"#\" class=\"post-title\">Chicken Salad</a>
                        <div class=\"post-meta\">
                            <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                            <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class=\"single-slide\">
                <!-- Blog Thumbnail -->
                <div class=\"blog-thumbnail\">
                    <a href=\"#\"><img src=\"img/bg-img/3.jpg\" alt=\"\"></a>
                </div>

                <!-- Blog Content -->
                <div class=\"blog-content-bg\">
                    <div class=\"blog-content\">
                        <a href=\"#\" class=\"post-tag\">Healthy Food</a>
                        <a href=\"#\" class=\"post-title\">Chicken Salad</a>
                        <div class=\"post-meta\">
                            <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                            <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class=\"single-slide\">
                <!-- Blog Thumbnail -->
                <div class=\"blog-thumbnail\">
                    <a href=\"#\"><img src=\"img/bg-img/3.jpg\" alt=\"\"></a>
                </div>

                <!-- Blog Content -->
                <div class=\"blog-content-bg\">
                    <div class=\"blog-content\">
                        <a href=\"#\" class=\"post-tag\">Healthy Food</a>
                        <a href=\"#\" class=\"post-title\">Chicken Salad</a>
                        <div class=\"post-meta\">
                            <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                            <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Catagory Area Start ##### -->
    <div class=\"post-catagory section-padding-100-0 mb-70\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <!-- Single Post Catagory -->
                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"single-post-catagory mb-30\">
                        <img src=\"img/bg-img/4.jpg\" alt=\"\">
                        <!-- Content -->
                        <div class=\"catagory-content-bg\">
                            <div class=\"catagory-content\">
                                <a href=\"#\" class=\"post-tag\">The Best</a>
                                <a href=\"#\" class=\"post-title\">Healthy Food</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Post Catagory -->
                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"single-post-catagory mb-30\">
                        <img src=\"img/bg-img/5.jpg\" alt=\"\">
                        <!-- Content -->
                        <div class=\"catagory-content-bg\">
                            <div class=\"catagory-content\">
                                <a href=\"#\" class=\"post-tag\">The Best</a>
                                <a href=\"#\" class=\"post-title\">Organic Cuisine</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Post Catagory -->
                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"single-post-catagory mb-30\">
                        <img src=\"img/bg-img/6.jpg\" alt=\"\">
                        <!-- Content -->
                        <div class=\"catagory-content-bg\">
                            <div class=\"catagory-content\">
                                <a href=\"#\" class=\"post-tag\">The Best</a>
                                <a href=\"#\" class=\"post-title\">Vegetarian Food</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Catagory Area End ##### -->

    <!-- ##### Big Posts Area Start ##### -->
    <div class=\"big-posts-area mb-50\">
        <div class=\"container\">
            <!-- Single Big Post Area -->
            <div class=\"row align-items-center\">
                <div class=\"col-12 col-md-6\">
                    <div class=\"big-post-thumbnail mb-50\">
                        <img src=\"img/bg-img/7.jpg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-12 col-md-6\">
                    <div class=\"big-post-content text-center mb-50\">
                        <a href=\"#\" class=\"post-tag\">Healthy</a>
                        <a href=\"#\" class=\"post-title\">Friend eggs with ham</a>
                        <div class=\"post-meta\">
                            <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                            <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo vitae odio. Sed auctor tellus quis arcu tempus, egestas tincidunt augue pellentesque. Suspendisse vestibulum sem in eros maximus, pretium commodo turpis convallis. Aenean scelerisque orci quis urna tempus, vitae interdum velit aliquet.</p>
                        <a href=\"#\" class=\"btn bueno-btn\">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Single Big Post Area -->
            <div class=\"row align-items-center\">
                <div class=\"col-12 col-md-6\">
                    <div class=\"big-post-content text-center mb-50\">
                        <a href=\"#\" class=\"post-tag\">The Best</a>
                        <a href=\"#\" class=\"post-title\">Steak with boiled vegetables</a>
                        <div class=\"post-meta\">
                            <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                            <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo vitae odio. Sed auctor tellus quis arcu tempus, egestas tincidunt augue pellentesque. Suspendisse vestibulum sem in eros maximus, pretium commodo turpis convallis. Aenean scelerisque orci quis urna tempus, vitae interdum velit aliquet.</p>
                        <a href=\"#\" class=\"btn bueno-btn\">Read More</a>
                    </div>
                </div>
                <div class=\"col-12 col-md-6\">
                    <div class=\"big-post-thumbnail mb-50\">
                        <img src=\"img/bg-img/8.jpg\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Big Posts Area End ##### -->

    <!-- ##### Posts Area End ##### -->
    <div class=\"bueno-post-area mb-70\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <!-- Post Area -->
                <div class=\"col-12 col-lg-8 col-xl-9\">
                    <!-- Single Blog Post -->
                    <div class=\"single-blog-post style-1 d-flex flex-wrap mb-30\">
                        <!-- Blog Thumbnail -->
                        <div class=\"blog-thumbnail\">
                            <img src=\"img/bg-img/9.jpg\" alt=\"\">
                        </div>
                        <!-- Blog Content -->
                        <div class=\"blog-content\">
                            <a href=\"#\" class=\"post-tag\">The Best</a>
                            <a href=\"#\" class=\"post-title\">Friend eggs with ham</a>
                            <div class=\"post-meta\">
                                <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                                <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo vitae odio. Sed auctor tellus quis arcu tempus.</p>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class=\"single-blog-post style-1 d-flex flex-wrap mb-30\">
                        <!-- Blog Thumbnail -->
                        <div class=\"blog-thumbnail\">
                            <img src=\"img/bg-img/10.jpg\" alt=\"\">
                        </div>
                        <!-- Blog Content -->
                        <div class=\"blog-content\">
                            <a href=\"#\" class=\"post-tag\">The Best</a>
                            <a href=\"#\" class=\"post-title\">Mushrooms with pork chop</a>
                            <div class=\"post-meta\">
                                <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                                <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo vitae odio. Sed auctor tellus quis arcu tempus.</p>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class=\"single-blog-post style-1 d-flex flex-wrap mb-30\">
                        <!-- Blog Thumbnail -->
                        <div class=\"blog-thumbnail\">
                            <img src=\"img/bg-img/11.jpg\" alt=\"\">
                        </div>
                        <!-- Blog Content -->
                        <div class=\"blog-content\">
                            <a href=\"#\" class=\"post-tag\">The Best</a>
                            <a href=\"#\" class=\"post-title\">Birthday cake with chocolate</a>
                            <div class=\"post-meta\">
                                <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                                <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo vitae odio. Sed auctor tellus quis arcu tempus.</p>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Area -->
                <div class=\"col-12 col-sm-9 col-md-6 col-lg-4 col-xl-3\">
                    <div class=\"sidebar-area\">

                        <!-- Single Widget Area -->
                        <div class=\"single-widget-area add-widget mb-30\">
                            <img src=\"img/bg-img/add.png\" alt=\"\">
                        </div>

                        <!-- Single Widget Area -->
                        <div class=\"single-widget-area post-widget\">

                            <!-- Single Post Area -->
                            <div class=\"single-post-area d-flex\">
                                <!-- Blog Thumbnail -->
                                <div class=\"blog-thumbnail\">
                                    <img src=\"img/bg-img/12.jpg\" alt=\"\">
                                </div>
                                <!-- Blog Content -->
                                <div class=\"blog-content\">
                                    <a href=\"#\" class=\"post-title\">Friend eggs with ham</a>
                                    <div class=\"post-meta\">
                                        <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                                        <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Post Area -->
                            <div class=\"single-post-area d-flex mb-30\">
                                <!-- Blog Thumbnail -->
                                <div class=\"blog-thumbnail\">
                                    <img src=\"img/bg-img/13.jpg\" alt=\"\">
                                </div>
                                <!-- Blog Content -->
                                <div class=\"blog-content\">
                                    <a href=\"#\" class=\"post-title\">Burger with fries</a>
                                    <div class=\"post-meta\">
                                        <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                                        <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Post Area -->
                            <div class=\"single-post-area d-flex\">
                                <!-- Blog Thumbnail -->
                                <div class=\"blog-thumbnail\">
                                    <img src=\"img/bg-img/14.jpg\" alt=\"\">
                                </div>
                                <!-- Blog Content -->
                                <div class=\"blog-content\">
                                    <a href=\"#\" class=\"post-title\">Avocado &amp; Oisters</a>
                                    <div class=\"post-meta\">
                                        <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                                        <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Post Area -->
                            <div class=\"single-post-area d-flex\">
                                <!-- Blog Thumbnail -->
                                <div class=\"blog-thumbnail\">
                                    <img src=\"img/bg-img/15.jpg\" alt=\"\">
                                </div>
                                <!-- Blog Content -->
                                <div class=\"blog-content\">
                                    <a href=\"#\" class=\"post-title\">Tortilla prawns</a>
                                    <div class=\"post-meta\">
                                        <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                                        <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Post Area -->
                            <div class=\"single-post-area d-flex\">
                                <!-- Blog Thumbnail -->
                                <div class=\"blog-thumbnail\">
                                    <img src=\"img/bg-img/16.jpg\" alt=\"\">
                                </div>
                                <!-- Blog Content -->
                                <div class=\"blog-content\">
                                    <a href=\"#\" class=\"post-title\">Burger with fries</a>
                                    <div class=\"post-meta\">
                                        <a href=\"#\" class=\"post-date\">July 11, 2018</a>
                                        <a href=\"#\" class=\"post-author\">By Julia Stiles</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Posts Area End ##### -->

    <!-- ##### Instagram Area Start ##### -->
    <div class=\"instagram-feed-area d-flex flex-wrap\">
        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"{{ asset('img/bg-img/insta1.jpg') }}\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"{{ asset('img/bg-img/insta1.jpg') }}\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"{{ asset('img/bg-img/insta2.jpg') }}\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"{{ asset('img/bg-img/insta2.jpg') }}\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"{{ asset('img/bg-img/insta3.jpg') }}\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"{{ asset('img/bg-img/insta3.jpg') }}\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"{{ asset('img/bg-img/insta4.jpg') }}\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"{{ asset('img/bg-img/insta4.jpg') }}\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"{{ asset('img/bg-img/insta5.jpg') }}\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"{{ asset('img/bg-img/insta5.jpg') }}\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"{{ asset('img/bg-img/insta6.jpg') }}\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"{{ asset('img/bg-img/insta6.jpg') }}\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"{{ asset('img/bg-img/insta7.jpg') }}\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"{{ asset('img/bg-img/insta7.jpg') }}\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"{{ asset('img/bg-img/insta8.jpg') }}\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"{{ asset('img/bg-img/insta8.jpg') }}\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"{{ asset('img/bg-img/insta9.jpg') }}\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"{{ asset('img/bg-img/insta9.jpg') }}\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"{{ asset('img/bg-img/insta10.jpg') }}\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"{{ asset('img/bg-img/insta10.jpg') }}\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>
    </div>
    <!-- ##### Instagram Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class=\"footer-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-sm-5\">
                    <!-- Copywrite Text -->
                    <p class=\"copywrite-text\"> <a href=\"#\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
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

        {% block content %}{% endblock %}
        {% block footer %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\webculture\\app\\Resources\\views\\base.html.twig");
    }
}
