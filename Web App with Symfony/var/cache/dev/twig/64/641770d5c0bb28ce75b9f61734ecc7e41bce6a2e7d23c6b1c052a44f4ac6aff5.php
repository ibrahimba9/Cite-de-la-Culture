<?php

/* @CiteUser/Forum/profilSujets.html.twig */
class __TwigTemplate_1871647ed01ca354245e9dc319c5cac4ee01ee3c22b38315f19bb3b84fe28239 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@CiteUser/Default/index.html.twig", "@CiteUser/Forum/profilSujets.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@CiteUser/Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CiteUser/Forum/profilSujets.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CiteUser/Forum/profilSujets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mes Sujets";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link  href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/forum.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div align=\"center\">
        <h4>Mes Sujets</h4>
        <table id=\"liste\">
            <tr>
                <th>
                    Thème
                </th>
                <th width=\"40%\">
                    Titre
                </th>
                <th>
                    Auteur
                </th>
                <th>
                    Nombre de Messages
                </th>
                <th>
                    Nombre de Participants
                </th>
                <th>
                    Nombre de Suivis
                </th>
                <th width=\"20%\">
                    Date de Création
                </th>
                <th>
                    Inviter
                </th>
                <th>
                    Liste des Invitations
                </th>
                <th>
                    Modifier
                </th>
                <th>
                    Supprimer
                </th>
            </tr>
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 52
            echo "                <tr>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "theme", []), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_sujet", ["id" => $this->getAttribute($context["s"], "idSujet", []), "titre" => $this->getAttribute($context["s"], "titre", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "titre", []), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "idAbonne", []), "username", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nbrMessages", []), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil_lister_participants_sujet", ["id" => $this->getAttribute($context["s"], "idSujet", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nbrParticipants", []), "html", null, true);
            echo "</a></td>
                    <td><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil_lister_abonnes_sujet", ["id" => $this->getAttribute($context["s"], "idSujet", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nbrSuivi", []), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["s"], "dateCreation", []), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil_forum_inviter", ["idSujet" => $this->getAttribute($context["s"], "idSujet", [])]), "html", null, true);
            echo "\">Inviter</a></td>
                    <td><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil_lister_invites", ["id" => $this->getAttribute($context["s"], "idSujet", [])]), "html", null, true);
            echo "\">Lister</a></td>
                    <td><a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil_forum_modifier", ["id" => $this->getAttribute($context["s"], "idSujet", [])]), "html", null, true);
            echo "\">Modifier</a></td>
                    <td><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil_forum_confirm_supprimer", ["id" => $this->getAttribute($context["s"], "idSujet", [])]), "html", null, true);
            echo "\">Supprimer</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
        </table>
        <div style=\"margin-left: 75%;\">";
        // line 68
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        echo "</div>
        <br/><br/>
        ";
        // line 70
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 71
            echo "            <a id=\"linkadd\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter_sujet");
            echo "\">Ajouter un Nouveau Sujet >></a>
        ";
        }
        // line 73
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@CiteUser/Forum/profilSujets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 73,  212 => 71,  210 => 70,  205 => 68,  201 => 66,  192 => 63,  188 => 62,  184 => 61,  180 => 60,  176 => 59,  170 => 58,  164 => 57,  160 => 56,  156 => 55,  150 => 54,  146 => 53,  143 => 52,  139 => 51,  95 => 11,  86 => 10,  74 => 7,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@CiteUser/Default/index.html.twig' %}

{% block title %}Mes Sujets{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link  href=\"{{ asset('css/forum.css') }}\" rel=\"stylesheet\"  />
{% endblock %}

{% block body %}
    {{ parent() }}

    <div align=\"center\">
        <h4>Mes Sujets</h4>
        <table id=\"liste\">
            <tr>
                <th>
                    Thème
                </th>
                <th width=\"40%\">
                    Titre
                </th>
                <th>
                    Auteur
                </th>
                <th>
                    Nombre de Messages
                </th>
                <th>
                    Nombre de Participants
                </th>
                <th>
                    Nombre de Suivis
                </th>
                <th width=\"20%\">
                    Date de Création
                </th>
                <th>
                    Inviter
                </th>
                <th>
                    Liste des Invitations
                </th>
                <th>
                    Modifier
                </th>
                <th>
                    Supprimer
                </th>
            </tr>
            {% for s in liste %}
                <tr>
                    <td>{{ s.theme }}</td>
                    <td><a href=\"{{ path('view_sujet', {'id' : s.idSujet, 'titre' : s.titre}) }}\">{{ s.titre }}</a></td>
                    <td>{{ s.idAbonne.username }}</td>
                    <td>{{ s.nbrMessages }}</td>
                    <td><a href=\"{{ path('profil_lister_participants_sujet',{'id':s.idSujet}) }}\">{{ s.nbrParticipants }}</a></td>
                    <td><a href=\"{{ path('profil_lister_abonnes_sujet', {'id' : s.idSujet}) }}\">{{ s.nbrSuivi }}</a></td>
                    <td>{{ s.dateCreation|date('Y-m-d') }}</td>
                    <td><a href=\"{{ path('profil_forum_inviter',{'idSujet':s.idSujet}) }}\">Inviter</a></td>
                    <td><a href=\"{{ path('profil_lister_invites',{'id':s.idSujet}) }}\">Lister</a></td>
                    <td><a href=\"{{ path('profil_forum_modifier',{ 'id' : s.idSujet }) }}\">Modifier</a></td>
                    <td><a href=\"{{ path('profil_forum_confirm_supprimer',{ 'id' : s.idSujet }) }}\">Supprimer</a></td>
                </tr>
            {% endfor %}

        </table>
        <div style=\"margin-left: 75%;\">{{ knp_pagination_render(liste) }}</div>
        <br/><br/>
        {% if is_granted('ROLE_USER') %}
            <a id=\"linkadd\" href=\"{{ path('ajouter_sujet') }}\">Ajouter un Nouveau Sujet >></a>
        {% endif %}
    </div>
{% endblock %}", "@CiteUser/Forum/profilSujets.html.twig", "C:\\wamp64\\www\\webculture\\src\\Cite\\UserBundle\\Resources\\views\\Forum\\profilSujets.html.twig");
    }
}
