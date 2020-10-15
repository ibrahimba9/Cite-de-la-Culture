<?php

/* default/index.html.twig */
class __TwigTemplate_eb6b030bf2b3dff3bd229cdb5f7ff860580a4ab3ee6213c9b8514040cfdb1aca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- ##### Treading Post Area Start ##### -->
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
        // line 16
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
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta1.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta1.jpg"), "html", null, true);
        echo "\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta2.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta2.jpg"), "html", null, true);
        echo "\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta3.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta3.jpg"), "html", null, true);
        echo "\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta4.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta4.jpg"), "html", null, true);
        echo "\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta5.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta5.jpg"), "html", null, true);
        echo "\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta6.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta6.jpg"), "html", null, true);
        echo "\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"";
        // line 508
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta7.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta7.jpg"), "html", null, true);
        echo "\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"";
        // line 515
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta8.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta8.jpg"), "html", null, true);
        echo "\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta9.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"";
        // line 524
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta9.jpg"), "html", null, true);
        echo "\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>

        <!-- Single Instagram -->
        <div class=\"single-instagram\">
            <img src=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta10.jpg"), "html", null, true);
        echo "\" alt=\"\">
            <!-- Image Zoom -->
            <a href=\"";
        // line 531
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg-img/insta10.jpg"), "html", null, true);
        echo "\" class=\"img-zoom\" title=\"Instagram Image\">+</a>
        </div>
    </div>
    <!-- ##### Instagram Area End ##### -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  638 => 531,  633 => 529,  625 => 524,  620 => 522,  612 => 517,  607 => 515,  599 => 510,  594 => 508,  586 => 503,  581 => 501,  573 => 496,  568 => 494,  560 => 489,  555 => 487,  547 => 482,  542 => 480,  534 => 475,  529 => 473,  521 => 468,  516 => 466,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
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
{% endblock %}
", "default/index.html.twig", "C:\\wamp64\\www\\webculture\\app\\Resources\\views\\default\\index.html.twig");
    }
}
