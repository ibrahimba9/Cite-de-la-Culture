<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_a51936c3777a04adeecea96c613047b758cd51d3eb1bec5d2a2a417de147577d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheet' => [$this, 'block_stylesheet'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', ["method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => ["class" => "fos_user_registration_register"]]);
        echo "
";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", []), 'row');
        echo "


    ";
        // line 43
        echo "
    <div class=\"limiter\">
        <div class=\"container-login100\">
            <div class=\"wrap-login100 p-t-85 p-b-20\">
                <form class=\"login100-form validate-form\">
                        <span class=\"login100-form-title p-b-70\">
                            Bienvenue à la Cité de la Culture
                        </span>
                    <span class=\"login100-form-avatar\">
                            <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/images/person-icon.png"), "html", null, true);
        echo "\" alt=\"AVATAR\">
                        </span>

                    <div class=\"wrap-input100 validate-input m-t-85 m-b-35\" data-validate = \"Enter email\">
                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["id" => "username", "class" => "input100", "name" => "_username", "required" => "required", "autocomplete" => "username"]]);
        echo "
                        <span class=\"focus-input100\" data-placeholder=\"Email\"></span>
                    </div>

                    <div class=\"wrap-input100 validate-input m-t-85 m-b-35\" data-validate = \"Enter username\">
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", []), 'widget', ["attr" => ["id" => "username", "class" => "input100", "name" => "_username", "required" => "required", "autocomplete" => "username"]]);
        echo "
                        <span class=\"focus-input100\" data-placeholder=\"Username\"></span>
                    </div>

                    <div class=\"wrap-input100 validate-input m-b-50\" data-validate=\"Enter password\">
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", []), "first", []), 'row', ["attr" => ["id" => "password", "class" => "input100", "name" => "_password", "required" => "required", "autocomplete" => "current-password"]]);
        echo "
                        <span class=\"focus-input100\" data-placeholder=\"Password\"></span>
                    </div>

                    <div class=\"wrap-input100 validate-input m-b-50\" data-validate=\"Confirm password\">
                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", []), "second", []), 'row', ["attr" => ["id" => "password", "class" => "input100", "name" => "_password", "required" => "required", "autocomplete" => "current-password"]]);
        echo "
                        <span class=\"focus-input100\" data-placeholder=\"Confirm Password\"></span>
                    </div>

                    <div class=\"container-login100-form-btn\">
                        <input class=\"login100-form-btn\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Valider\" />
                    </div>

                    <ul class=\"login-more p-t-190\">
                        <li class=\"m-b-8\">
                                <span class=\"txt1\">
                                    Forgot
                                </span>

                            <a href=\"#\" class=\"txt2\">
                                Username / Password?
                            </a>
                        </li>

                        <li>
                                <span class=\"txt1\">
                                    Don’t have an account?
                                </span>

                            <a href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"txt2\">
                                Sign up
                            </a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>


    <div id=\"dropDownSelect1\"></div>
";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
        // line 108
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


";
        // line 111
        $this->displayBlock('stylesheet', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <title>Créer un Compte - Cité de la Culture</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--===============================================================================================-->
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/images/icons/favicon.ico"), "html", null, true);
        echo "\"/>
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/fonts/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/fonts/iconic/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/animate/animate.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/animsition/css/animsition.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/select2/select2.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/css/util.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/css/main.css"), "html", null, true);
        echo "\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_stylesheet($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 112
        echo "    <!--===============================================================================================-->
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/animsition/js/animsition.min.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/daterangepicker/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/countdowntime/countdowntime.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 127,  271 => 125,  266 => 123,  262 => 122,  257 => 120,  252 => 118,  248 => 117,  243 => 115,  238 => 113,  235 => 112,  226 => 111,  213 => 27,  209 => 26,  204 => 24,  199 => 22,  194 => 20,  189 => 18,  184 => 16,  179 => 14,  174 => 12,  169 => 10,  164 => 8,  158 => 4,  149 => 3,  139 => 111,  133 => 108,  129 => 107,  114 => 95,  87 => 71,  79 => 66,  71 => 61,  63 => 56,  56 => 52,  45 => 43,  39 => 32,  35 => 31,  32 => 30,  30 => 3,  27 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% block head %}
    <title>Créer un Compte - Cité de la Culture</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--===============================================================================================-->
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('login/images/icons/favicon.ico') }}\"/>
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/vendor/bootstrap/css/bootstrap.min.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/fonts/iconic/css/material-design-iconic-font.min.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/vendor/animate/animate.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/vendor/css-hamburgers/hamburgers.min.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/vendor/animsition/css/animsition.min.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/vendor/select2/select2.min.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/vendor/daterangepicker/daterangepicker.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/css/util.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/css/main.css') }}\">

{% endblock head %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
{{ form_row(form._token) }}


    {#
    {{ form_widget(form.email, { 'attr': {'id':'username','class' : 'input100', 'name' : '_username', 'required' : 'required', 'autocomplete' : 'username'} }) }}
    {{ form_widget(form.username, { 'attr': {'id':'username','class' : 'input100', 'name' : '_username', 'required' : 'required', 'autocomplete' : 'username'} }) }}
    {{ form_widget(form.plainPassword, { 'attr': {'id':'password','class' : 'input100', 'name' : '_password', 'required' : 'required', 'autocomplete' : 'current-password'} }) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
    #}

    <div class=\"limiter\">
        <div class=\"container-login100\">
            <div class=\"wrap-login100 p-t-85 p-b-20\">
                <form class=\"login100-form validate-form\">
                        <span class=\"login100-form-title p-b-70\">
                            Bienvenue à la Cité de la Culture
                        </span>
                    <span class=\"login100-form-avatar\">
                            <img src=\"{{ asset('login/images/person-icon.png') }}\" alt=\"AVATAR\">
                        </span>

                    <div class=\"wrap-input100 validate-input m-t-85 m-b-35\" data-validate = \"Enter email\">
                        {{ form_widget(form.email, { 'attr': {'id':'username','class' : 'input100', 'name' : '_username', 'required' : 'required', 'autocomplete' : 'username'} }) }}
                        <span class=\"focus-input100\" data-placeholder=\"Email\"></span>
                    </div>

                    <div class=\"wrap-input100 validate-input m-t-85 m-b-35\" data-validate = \"Enter username\">
                        {{ form_widget(form.username, { 'attr': {'id':'username','class' : 'input100', 'name' : '_username', 'required' : 'required', 'autocomplete' : 'username'} }) }}
                        <span class=\"focus-input100\" data-placeholder=\"Username\"></span>
                    </div>

                    <div class=\"wrap-input100 validate-input m-b-50\" data-validate=\"Enter password\">
                        {{ form_row(form.plainPassword.first, { 'attr': {'id':'password','class' : 'input100', 'name' : '_password', 'required' : 'required', 'autocomplete' : 'current-password'} }) }}
                        <span class=\"focus-input100\" data-placeholder=\"Password\"></span>
                    </div>

                    <div class=\"wrap-input100 validate-input m-b-50\" data-validate=\"Confirm password\">
                        {{ form_row(form.plainPassword.second, { 'attr': {'id':'password','class' : 'input100', 'name' : '_password', 'required' : 'required', 'autocomplete' : 'current-password'} }) }}
                        <span class=\"focus-input100\" data-placeholder=\"Confirm Password\"></span>
                    </div>

                    <div class=\"container-login100-form-btn\">
                        <input class=\"login100-form-btn\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Valider\" />
                    </div>

                    <ul class=\"login-more p-t-190\">
                        <li class=\"m-b-8\">
                                <span class=\"txt1\">
                                    Forgot
                                </span>

                            <a href=\"#\" class=\"txt2\">
                                Username / Password?
                            </a>
                        </li>

                        <li>
                                <span class=\"txt1\">
                                    Don’t have an account?
                                </span>

                            <a href=\"{{ path('fos_user_registration_register') }}\" class=\"txt2\">
                                Sign up
                            </a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>


    <div id=\"dropDownSelect1\"></div>
{{ form_rest(form) }}
{{ form_end(form) }}


{% block stylesheet %}
    <!--===============================================================================================-->
    <script src=\"{{ asset('login/vendor/jquery/jquery-3.2.1.min.js') }}\"></script>
    <!--===============================================================================================-->
    <script src=\"{{ asset('login/vendor/animsition/js/animsition.min.js') }}\"></script>
    <!--===============================================================================================-->
    <script src=\"{{ asset('login/vendor/bootstrap/js/popper.js') }}\"></script>
    <script src=\"{{ asset('login/vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
    <!--===============================================================================================-->
    <script src=\"{{ asset('login/vendor/select2/select2.min.js') }}\"></script>
    <!--===============================================================================================-->
    <script src=\"{{ asset('login/vendor/daterangepicker/moment.min.js') }}\"></script>
    <script src=\"{{ asset('login/vendor/daterangepicker/daterangepicker.js') }}\"></script>
    <!--===============================================================================================-->
    <script src=\"{{ asset('login/vendor/countdowntime/countdowntime.js') }}\"></script>
    <!--===============================================================================================-->
    <script src=\"{{ asset('login/js/main.js') }}\"></script>
{% endblock stylesheet %}
{#, 'class' => 'input100', 'name' =>'_username', 'required' => 'required', 'autocomplete' => 'username'#}
{#, 'class' => 'input100', 'name' =>'_username', 'required' => 'required', 'autocomplete' => 'username'#}", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp64\\www\\webculture\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
