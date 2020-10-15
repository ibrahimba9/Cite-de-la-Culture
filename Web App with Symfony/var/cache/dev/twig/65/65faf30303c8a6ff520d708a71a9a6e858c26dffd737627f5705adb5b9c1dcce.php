<?php

/* @CiteForum/Default/index.html.twig */
class __TwigTemplate_f441bd8f3630edd126aa2ab132db2baa542111816739e1255128ffe146d41ed4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@CiteForum/Default/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CiteForum/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CiteForum/Default/index.html.twig"));

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

        echo "Forum";
        
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
        echo "    <div align=\"center\">
        <h1 id=\"titre\">FORUM</h1>
        <br/><br/>
        <button id=\"button\">Art</button>
        <button id=\"button\">Cinéma</button>
        <button id=\"button\">Culture</button>
        <button id=\"button\">Dance</button>
        <button id=\"button\">Exposition</button>
        <button id=\"button\">Litérature</button>
        <button id=\"button\">Musique</button>
        <button id=\"button\">Théâtre</button>
        <br/><br/><br/><br/>
    </div>


    <div align=\"center\">
        <h4>Sujets Récents</h4>
        ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <table style=\"border-color: transparent\">
            <tr>
                <td>";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "theme", []), 'widget', ["attr" => ["placeholder" => "Theme"]]);
        echo "</td>
                <td>";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", []), 'widget', ["attr" => ["placeholder" => "Titre"]]);
        echo "</td>
                <td>";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur", []), 'widget', ["attr" => ["placeholder" => "Auteur"]]);
        echo "</td>
                <td>";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Chercher", []), 'widget', ["attr" => ["class" => ""]]);
        echo "</td>
            </tr>
        </table>
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        <br/><br/>
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
                <th width=\"20%\">
                    Date de Création
                </th>
            </tr>
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 63
            echo "                <tr>
                    <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "theme", []), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_sujet", ["id" => $this->getAttribute($context["s"], "idSujet", []), "titre" => $this->getAttribute($context["s"], "titre", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "titre", []), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "idAbonne", []), "username", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nbrMessages", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nbrParticipants", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["s"], "dateCreation", []), "Y-m-d"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
        </table>
        <div align=\"center\" style=\"margin-left: 60%\">";
        // line 74
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        echo "</div>
        <br/><br/>
        ";
        // line 76
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 77
            echo "            <a id=\"linkadd\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter_sujet");
            echo "\">Ajouter un Nouveau Sujet >></a>
        ";
        }
        // line 79
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@CiteForum/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 79,  221 => 77,  219 => 76,  214 => 74,  210 => 72,  201 => 69,  197 => 68,  193 => 67,  189 => 66,  183 => 65,  179 => 64,  176 => 63,  172 => 62,  146 => 39,  142 => 38,  136 => 35,  132 => 34,  128 => 33,  124 => 32,  118 => 29,  114 => 28,  95 => 11,  86 => 10,  74 => 7,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %}Forum{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link  href=\"{{ asset('css/forum.css') }}\" rel=\"stylesheet\"  />
{% endblock %}

{% block body %}
    <div align=\"center\">
        <h1 id=\"titre\">FORUM</h1>
        <br/><br/>
        <button id=\"button\">Art</button>
        <button id=\"button\">Cinéma</button>
        <button id=\"button\">Culture</button>
        <button id=\"button\">Dance</button>
        <button id=\"button\">Exposition</button>
        <button id=\"button\">Litérature</button>
        <button id=\"button\">Musique</button>
        <button id=\"button\">Théâtre</button>
        <br/><br/><br/><br/>
    </div>


    <div align=\"center\">
        <h4>Sujets Récents</h4>
        {{ form_start(form) }}
        {{ form_errors(form) }}
        <table style=\"border-color: transparent\">
            <tr>
                <td>{{ form_widget(form.theme, { 'attr' : { 'placeholder' : 'Theme' } }) }}</td>
                <td>{{ form_widget(form.titre, { 'attr' : { 'placeholder' : 'Titre' } }) }}</td>
                <td>{{ form_widget(form.auteur, { 'attr' : { 'placeholder' : 'Auteur' } }) }}</td>
                <td>{{ form_widget(form.Chercher, { 'attr' : { 'class' : '' } }) }}</td>
            </tr>
        </table>
        {{ form_rest(form) }}
        {{ form_end(form) }}
        <br/><br/>
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
                <th width=\"20%\">
                    Date de Création
                </th>
            </tr>
            {% for s in liste %}
                <tr>
                    <td>{{ s.theme }}</td>
                    <td><a href=\"{{ path('view_sujet', {'id' : s.idSujet, 'titre' : s.titre}) }}\">{{ s.titre }}</a></td>
                    <td>{{ s.idAbonne.username }}</td>
                    <td>{{ s.nbrMessages }}</td>
                    <td>{{ s.nbrParticipants }}</td>
                    <td>{{ s.dateCreation|date('Y-m-d') }}</td>
                </tr>
            {% endfor %}

        </table>
        <div align=\"center\" style=\"margin-left: 60%\">{{ knp_pagination_render(liste) }}</div>
        <br/><br/>
        {% if is_granted('ROLE_USER') %}
            <a id=\"linkadd\" href=\"{{ path('ajouter_sujet') }}\">Ajouter un Nouveau Sujet >></a>
        {% endif %}
    </div>

{% endblock %}", "@CiteForum/Default/index.html.twig", "C:\\wamp64\\www\\webculture\\src\\Cite\\ForumBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
