<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_5801d713aff1778a9118c7b57733f4115495e822591dbbf3d8ee8e3bfb4fd092 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", []), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", []), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 34
        echo "
<form action=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">





    ";
        // line 41
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 42
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 44
        echo "    ";
        // line 56
        echo "

    <div class=\"limiter\">
        <div class=\"container-login100\">
            <div class=\"wrap-login100 p-t-85 p-b-20\">
                <form class=\"login100-form validate-form\">
\t\t\t\t\t<span class=\"login100-form-title p-b-70\">
\t\t\t\t\t\tBienvenue à la Cité de la Culture
\t\t\t\t\t</span>
                    <span class=\"login100-form-avatar\">
\t\t\t\t\t\t<img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/images/person-icon.png"), "html", null, true);
        echo "\" alt=\"AVATAR\">
\t\t\t\t\t</span>

                    <div class=\"wrap-input100 validate-input m-t-85 m-b-35\" data-validate = \"Enter username\">
                        <input class=\"input100\" type=\"text\" id=\"username\" name=\"_username\" value=\" \" required=\"required\" autocomplete=\"username\" />

                        <span class=\"focus-input100\" data-placeholder=\"Username\"></span>
                    </div>

                    <div class=\"wrap-input100 validate-input m-b-50\" data-validate=\"Enter password\">
                        <input class=\"input100\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />

                        <span class=\"focus-input100\" data-placeholder=\"Password\"></span>
                    </div>

                    <div class=\"container-login100-form-btn\">
                        <input class=\"login100-form-btn\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Se Connecter\" />
                    </div>

                    <ul class=\"login-more p-t-190\">
                        <li class=\"m-b-8\">
\t\t\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\t\t\tForgot
\t\t\t\t\t\t\t</span>

                            <a href=\"#\" class=\"txt2\">
                                Username / Password?
                            </a>
                        </li>

                        <li>
\t\t\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\t\t\tDon’t have an account?
\t\t\t\t\t\t\t</span>

                            <a href=\"";
        // line 101
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

</form>

";
        // line 116
        $this->displayBlock('stylesheet', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 8
        echo "    <title>Login - Cité de la Culture</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--===============================================================================================-->
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/images/icons/favicon.ico"), "html", null, true);
        echo "\"/>
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/fonts/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/fonts/iconic/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/animate/animate.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/animsition/css/animsition.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/select2/select2.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/css/util.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/css/main.css"), "html", null, true);
        echo "\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 116
    public function block_stylesheet($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 117
        echo "    <!--===============================================================================================-->
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/animsition/js/animsition.min.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/daterangepicker/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/countdowntime/countdowntime.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 132,  265 => 130,  260 => 128,  256 => 127,  251 => 125,  246 => 123,  242 => 122,  237 => 120,  232 => 118,  229 => 117,  220 => 116,  207 => 31,  203 => 30,  198 => 28,  193 => 26,  188 => 24,  183 => 22,  178 => 20,  173 => 18,  168 => 16,  163 => 14,  158 => 12,  152 => 8,  143 => 7,  133 => 116,  115 => 101,  77 => 66,  65 => 56,  63 => 44,  57 => 42,  55 => 41,  46 => 35,  43 => 34,  41 => 7,  38 => 6,  32 => 4,  30 => 3,  27 => 2,);
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

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

{% block head %}
    <title>Login - Cité de la Culture</title>
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

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">





    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}
    {#
    <label for=\"username\">{{ 'security.login.username'|trans }}</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />

    <label for=\"password\">{{ 'security.login.password'|trans }}</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
    #}


    <div class=\"limiter\">
        <div class=\"container-login100\">
            <div class=\"wrap-login100 p-t-85 p-b-20\">
                <form class=\"login100-form validate-form\">
\t\t\t\t\t<span class=\"login100-form-title p-b-70\">
\t\t\t\t\t\tBienvenue à la Cité de la Culture
\t\t\t\t\t</span>
                    <span class=\"login100-form-avatar\">
\t\t\t\t\t\t<img src=\"{{ asset('login/images/person-icon.png') }}\" alt=\"AVATAR\">
\t\t\t\t\t</span>

                    <div class=\"wrap-input100 validate-input m-t-85 m-b-35\" data-validate = \"Enter username\">
                        <input class=\"input100\" type=\"text\" id=\"username\" name=\"_username\" value=\" \" required=\"required\" autocomplete=\"username\" />

                        <span class=\"focus-input100\" data-placeholder=\"Username\"></span>
                    </div>

                    <div class=\"wrap-input100 validate-input m-b-50\" data-validate=\"Enter password\">
                        <input class=\"input100\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />

                        <span class=\"focus-input100\" data-placeholder=\"Password\"></span>
                    </div>

                    <div class=\"container-login100-form-btn\">
                        <input class=\"login100-form-btn\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Se Connecter\" />
                    </div>

                    <ul class=\"login-more p-t-190\">
                        <li class=\"m-b-8\">
\t\t\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\t\t\tForgot
\t\t\t\t\t\t\t</span>

                            <a href=\"#\" class=\"txt2\">
                                Username / Password?
                            </a>
                        </li>

                        <li>
\t\t\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\t\t\tDon’t have an account?
\t\t\t\t\t\t\t</span>

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

</form>

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
{% endblock stylesheet %}", "@FOSUser/Security/login_content.html.twig", "C:\\wamp64\\www\\webculture\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login_content.html.twig");
    }
}
