<?php

/* @CiteForum/Front/afficherSujet.html.twig */
class __TwigTemplate_ce9b096602e69431b4f1536afbd88e04bca4d6ceb79612431aad405bf551640d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@CiteForum/Front/afficherSujet.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CiteForum/Front/afficherSujet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CiteForum/Front/afficherSujet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sujet: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sujet"]) ? $context["sujet"] : $this->getContext($context, "sujet")), "titre", []), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link  href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/forum.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
<!-- The Modal -->
<div id=\"myModal\" class=\"modal\">

    <!-- Modal content -->
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <span class=\"close\">&times;</span>
            <h2 id=\"hTitre\">Signaler Ce Sujet?</h2>
        </div>
        <div class=\"modal-body\">
            <h2 id=\"hContent\">Etes-vous sûr de bien vouloir signaler ce Sujet?</h2>
        </div>
        <div class=\"modal-footer\">
            <table style=\"background-color: transparent;\">
                <tr style=\"background-color: transparent;\">
                    <td>
                        <a id=\"linkSignaler\">Accepter</a>
                    </td>
                    <td>
                        <a id=\"linkAnnuler\" href=\"#\">Annuler</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</div>

    <div align=\"center\">
        <h1 id=\"titre\">FORUM</h1>
    </div>

    <div align=\"center\">
        <h2>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sujet"]) ? $context["sujet"] : $this->getContext($context, "sujet")), "titre", []), "html", null, true);
        echo " ~ ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sujet"]) ? $context["sujet"] : $this->getContext($context, "sujet")), "theme", []), "html", null, true);
        echo "</h2>
        ";
        // line 45
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 46
            echo "            ";
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []) != $this->getAttribute((isset($context["sujet"]) ? $context["sujet"] : $this->getContext($context, "sujet")), "idAbonne", []))) {
                // line 47
                echo "                <a id=\"linkSuivre\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suivre_sujet", ["id" => $this->getAttribute((isset($context["sujet"]) ? $context["sujet"] : $this->getContext($context, "sujet")), "idSujet", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                echo "</a>
                <a id=\"myBtn\" data-href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("signaler_sujet", ["id" => $this->getAttribute((isset($context["sujet"]) ? $context["sujet"] : $this->getContext($context, "sujet")), "idSujet", [])]), "html", null, true);
                echo "\" href=\"#\" onclick=\"showModal(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sujet"]) ? $context["sujet"] : $this->getContext($context, "sujet")), "idSujet", []), "html", null, true);
                echo ")\">Signaler</a>
            ";
            }
            // line 50
            echo "        ";
        }
        // line 51
        echo "    </div>
        <br/>
    <div id=\"formsujet\">
        <table  width=\"90%\" id=\"messagesList\" style=\"background-color: white; border-collapse: collapse;\">
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 56
            echo "                <tr style=\"padding:20px; border-bottom: solid 1px black;\">
                    <td style=\"padding:20px;background-color: white; border-right: none; border-left: none;\">
                        <table style=\"background-color: transparent\" width=\"100%\">
                            <tr style=\"background-color: transparent\">
                                <td><strong>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["msg"], "idAbonne", []), "username", []), "html", null, true);
            echo "</strong></td>
                            </tr>
                            <tr style=\"background-color: transparent; font-sizet: 5px\">
                                <td>Nombre de Messages: <strong>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["msg"], "idAbonne", []), "nbrMessages", []), "html", null, true);
            echo "</strong></td>
                            </tr>
                            <tr style=\"background-color: transparent\">
                                <td>Nombre de Likes: <strong>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["msg"], "idAbonne", []), "nbrLikes", []), "html", null, true);
            echo "</strong></td>
                            </tr>
                        </table>
                    </td>
                    <td width=\"850px\" style=\"padding:20px;background-color: white;border-right: none; border-left: none;\">
                        <table style=\"background-color: transparent\" width=\"100%\">
                            <tr >
                                <td><label style=\"margin-right: 0px; margin-left: 80%;\">Publié le: <strong>";
            // line 73
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["msg"], "datePublication", []), "Y-m-d", false), "html", null, true);
            echo "</strong></label></td>
                            </tr>
                            <tr style=\"background-color: transparent\">
                                <td>
                                    ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "texte", []), "html", null, true);
            echo "
                                </td>
                            </tr>
                            <tr style=\"background-color: transparent\">
                                <td>
                                    ";
            // line 82
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 83
                echo "                                        <table style=\"background-color: transparent\" border=\"0px\">
                                            <tr style=\"background-color: transparent\">
                                                <td>
                                                    ";
                // line 86
                if (($this->getAttribute($context["msg"], "like", []) == true)) {
                    // line 87
                    echo "                                                        <a id=\"lienLike\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vote_message", ["idmessage" => $this->getAttribute($context["msg"], "idMessage", []), "vote" => "like"]), "html", null, true);
                    echo "\">Like</a>(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "countLike", []), "html", null, true);
                    echo ")
                                                    ";
                } else {
                    // line 89
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vote_message", ["idmessage" => $this->getAttribute($context["msg"], "idMessage", []), "vote" => "like"]), "html", null, true);
                    echo "\">Like</a>(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "countLike", []), "html", null, true);
                    echo ")
                                                    ";
                }
                // line 91
                echo "                                                </td>
                                                <td>
                                                    ";
                // line 93
                if (($this->getAttribute($context["msg"], "dislike", []) == true)) {
                    // line 94
                    echo "                                                        <a id=\"lienDislike\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vote_message", ["idmessage" => $this->getAttribute($context["msg"], "idMessage", []), "vote" => "dislike"]), "html", null, true);
                    echo "\">Dislike</a>(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "countDislike", []), "html", null, true);
                    echo ")
                                                    ";
                } else {
                    // line 96
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vote_message", ["idmessage" => $this->getAttribute($context["msg"], "idMessage", []), "vote" => "dislike"]), "html", null, true);
                    echo "\">Dislike</a>(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "countDislike", []), "html", null, true);
                    echo ")
                                                    ";
                }
                // line 98
                echo "                                                </td>
                                                ";
                // line 99
                if (($this->getAttribute($context["msg"], "idAbonne", []) != $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []))) {
                    // line 100
                    echo "                                                    <td><a id=\"linkSignComm\" data-href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("signal_message", ["id" => $this->getAttribute($context["msg"], "idMessage", [])]), "html", null, true);
                    echo "\" href=\"#\" onclick=\"showModalComment(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "idMessage", []), "html", null, true);
                    echo ")\">Signaler</a></td>
                                                ";
                }
                // line 102
                echo "                                                ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []), "id", []) == $this->getAttribute($this->getAttribute($context["msg"], "idAbonne", []), "id", []))) {
                    // line 103
                    echo "                                                    <td><a id=\"linkDelete\" data-href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_message", ["id" => $this->getAttribute($context["msg"], "idMessage", [])]), "html", null, true);
                    echo "\" href=\"#\" onclick=\"showModalDelete(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "idMessage", []), "html", null, true);
                    echo ")\">Supprimer</a></td>
                                                ";
                }
                // line 105
                echo "                                            </tr>
                                        </table>
                                    ";
            }
            // line 108
            echo "                                </td>
                            </tr>
                        </table>


                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "        </table>
        <div style=\"margin-left: 85%;\">";
        // line 117
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        echo "</div>
    </div>

    ";
        // line 120
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 121
            echo "        <div id=\"formsujet\">
            ";
            // line 122
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
            ";
            // line 123
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "

            <div>
                <h2>Publier quelque chose:</h2><br/>
                ";
            // line 127
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "texte", []), 'widget', ["attr" => ["class" => "formpub"]]);
            echo " <br/>
                ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Publier", []), 'widget');
            echo "
            </div>

            ";
            // line 131
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
            ";
            // line 132
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
        </div>
    ";
        }
        // line 135
        echo "

    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/forum.js"), "html", null, true);
        echo "\">

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@CiteForum/Front/afficherSujet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 137,  347 => 135,  341 => 132,  337 => 131,  331 => 128,  327 => 127,  320 => 123,  316 => 122,  313 => 121,  311 => 120,  305 => 117,  302 => 116,  289 => 108,  284 => 105,  276 => 103,  273 => 102,  265 => 100,  263 => 99,  260 => 98,  252 => 96,  244 => 94,  242 => 93,  238 => 91,  230 => 89,  222 => 87,  220 => 86,  215 => 83,  213 => 82,  205 => 77,  198 => 73,  188 => 66,  182 => 63,  176 => 60,  170 => 56,  166 => 55,  160 => 51,  157 => 50,  150 => 48,  143 => 47,  140 => 46,  138 => 45,  132 => 44,  96 => 10,  87 => 9,  75 => 6,  70 => 5,  61 => 4,  42 => 2,  11 => 1,);
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
{% block title %}Sujet: {{ sujet.titre }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link  href=\"{{ asset('css/forum.css') }}\" rel=\"stylesheet\"  />
{% endblock %}

{% block body %}

<!-- The Modal -->
<div id=\"myModal\" class=\"modal\">

    <!-- Modal content -->
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <span class=\"close\">&times;</span>
            <h2 id=\"hTitre\">Signaler Ce Sujet?</h2>
        </div>
        <div class=\"modal-body\">
            <h2 id=\"hContent\">Etes-vous sûr de bien vouloir signaler ce Sujet?</h2>
        </div>
        <div class=\"modal-footer\">
            <table style=\"background-color: transparent;\">
                <tr style=\"background-color: transparent;\">
                    <td>
                        <a id=\"linkSignaler\">Accepter</a>
                    </td>
                    <td>
                        <a id=\"linkAnnuler\" href=\"#\">Annuler</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</div>

    <div align=\"center\">
        <h1 id=\"titre\">FORUM</h1>
    </div>

    <div align=\"center\">
        <h2>{{ sujet.titre }} ~ {{ sujet.theme }}</h2>
        {% if is_granted('ROLE_USER') %}
            {% if app.user != sujet.idAbonne %}
                <a id=\"linkSuivre\" href=\"{{ path('suivre_sujet',{ 'id' : sujet.idSujet }) }}\">{{ label }}</a>
                <a id=\"myBtn\" data-href=\"{{ path('signaler_sujet', {'id' : sujet.idSujet}) }}\" href=\"#\" onclick=\"showModal({{ sujet.idSujet }})\">Signaler</a>
            {% endif %}
        {% endif %}
    </div>
        <br/>
    <div id=\"formsujet\">
        <table  width=\"90%\" id=\"messagesList\" style=\"background-color: white; border-collapse: collapse;\">
            {% for msg in messages %}
                <tr style=\"padding:20px; border-bottom: solid 1px black;\">
                    <td style=\"padding:20px;background-color: white; border-right: none; border-left: none;\">
                        <table style=\"background-color: transparent\" width=\"100%\">
                            <tr style=\"background-color: transparent\">
                                <td><strong>{{ msg.idAbonne.username }}</strong></td>
                            </tr>
                            <tr style=\"background-color: transparent; font-sizet: 5px\">
                                <td>Nombre de Messages: <strong>{{ msg.idAbonne.nbrMessages }}</strong></td>
                            </tr>
                            <tr style=\"background-color: transparent\">
                                <td>Nombre de Likes: <strong>{{ msg.idAbonne.nbrLikes }}</strong></td>
                            </tr>
                        </table>
                    </td>
                    <td width=\"850px\" style=\"padding:20px;background-color: white;border-right: none; border-left: none;\">
                        <table style=\"background-color: transparent\" width=\"100%\">
                            <tr >
                                <td><label style=\"margin-right: 0px; margin-left: 80%;\">Publié le: <strong>{{ msg.datePublication|date('Y-m-d', false) }}</strong></label></td>
                            </tr>
                            <tr style=\"background-color: transparent\">
                                <td>
                                    {{ msg.texte }}
                                </td>
                            </tr>
                            <tr style=\"background-color: transparent\">
                                <td>
                                    {% if is_granted('ROLE_USER') %}
                                        <table style=\"background-color: transparent\" border=\"0px\">
                                            <tr style=\"background-color: transparent\">
                                                <td>
                                                    {% if msg.like == true %}
                                                        <a id=\"lienLike\" href=\"{{ path('vote_message', { 'idmessage': msg.idMessage, 'vote' : 'like' }) }}\">Like</a>({{ msg.countLike }})
                                                    {% else %}
                                                        <a href=\"{{ path('vote_message', { 'idmessage': msg.idMessage, 'vote' : 'like' }) }}\">Like</a>({{ msg.countLike }})
                                                    {% endif %}
                                                </td>
                                                <td>
                                                    {% if msg.dislike == true %}
                                                        <a id=\"lienDislike\" href=\"{{ path('vote_message', { 'idmessage': msg.idMessage, 'vote' : 'dislike' }) }}\">Dislike</a>({{ msg.countDislike }})
                                                    {% else %}
                                                        <a href=\"{{ path('vote_message', { 'idmessage': msg.idMessage, 'vote' : 'dislike' }) }}\">Dislike</a>({{ msg.countDislike }})
                                                    {% endif %}
                                                </td>
                                                {% if msg.idAbonne != app.user %}
                                                    <td><a id=\"linkSignComm\" data-href=\"{{ path('signal_message', {'id' : msg.idMessage}) }}\" href=\"#\" onclick=\"showModalComment({{ msg.idMessage }})\">Signaler</a></td>
                                                {% endif %}
                                                {% if app.user.id == msg.idAbonne.id %}
                                                    <td><a id=\"linkDelete\" data-href=\"{{ path('supprimer_message', { 'id' : msg.idMessage }) }}\" href=\"#\" onclick=\"showModalDelete({{ msg.idMessage }})\">Supprimer</a></td>
                                                {% endif %}
                                            </tr>
                                        </table>
                                    {% endif %}
                                </td>
                            </tr>
                        </table>


                    </td>
                </tr>
            {% endfor %}
        </table>
        <div style=\"margin-left: 85%;\">{{ knp_pagination_render(messages) }}</div>
    </div>

    {% if is_granted('ROLE_USER') %}
        <div id=\"formsujet\">
            {{ form_start(form )}}
            {{ form_errors(form) }}

            <div>
                <h2>Publier quelque chose:</h2><br/>
                {{ form_widget(form.texte, { 'attr': {'class':'formpub'} }) }} <br/>
                {{ form_widget(form.Publier) }}
            </div>

            {{ form_rest(form) }}
            {{ form_end(form) }}
        </div>
    {% endif %}


    <script src=\"{{ asset('js/forum.js') }}\">

    </script>

{% endblock %}", "@CiteForum/Front/afficherSujet.html.twig", "C:\\wamp64\\www\\webculture\\src\\Cite\\ForumBundle\\Resources\\views\\Front\\afficherSujet.html.twig");
    }
}
