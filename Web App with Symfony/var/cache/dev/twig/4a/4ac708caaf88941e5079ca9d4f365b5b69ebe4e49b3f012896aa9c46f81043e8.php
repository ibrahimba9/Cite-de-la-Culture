<?php

/* @CiteForum/Front/signalerCommentaire.html.twig */
class __TwigTemplate_453da7a626f9812bef092cd6982e654b968480575e8d5be1f18b4f3a9740fee3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@CiteForum/Front/signalerCommentaire.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CiteForum/Front/signalerCommentaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CiteForum/Front/signalerCommentaire.html.twig"));

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

        echo "Signaler un Commentaire";
        
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
        echo "    <div align=\"center\">
        <h1 id=\"titre\">Signaler un Commentaire!</h1>
    </div>

    <div id=\"formsujet\">
        <table>
            <tr>
                <td>Titre</td>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sujet"]) ? $context["sujet"] : $this->getContext($context, "sujet")), "titre", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Theme</td>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sujet"]) ? $context["sujet"] : $this->getContext($context, "sujet")), "theme", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Auteur du Sujet</td>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sujet"]) ? $context["sujet"] : $this->getContext($context, "sujet")), "idAbonne", []), "username", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Date de Création du Sujet</td>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["sujet"]) ? $context["sujet"] : $this->getContext($context, "sujet")), "dateCreation", []), "Y-m-d"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Message</td>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "texte", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Auteur du Commentaire</td>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "idAbonne", []), "username", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Date de Publication du Commentaire</td>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "datePublication", []), "Y-m-d"), "html", null, true);
        echo "</td>
            </tr>
            <tr>




            </tr>
        </table>
        <br/>
        ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => ""]]);
        echo "
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <table width=\"50%\">
            <tr>
                <td>Description</td>
                <td>";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", []), 'widget', ["attr" => ["class" => ""]]);
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Valider", []), 'widget', ["attr" => ["class" => ""]]);
        echo "</td>
                <td>";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Annuler", []), 'widget', ["attr" => ["class" => ""]]);
        echo "</td>
            </tr>
        </table>
        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@CiteForum/Front/signalerCommentaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 65,  187 => 64,  181 => 61,  177 => 60,  171 => 57,  164 => 53,  160 => 52,  147 => 42,  140 => 38,  133 => 34,  126 => 30,  119 => 26,  112 => 22,  105 => 18,  95 => 10,  86 => 9,  74 => 6,  69 => 5,  60 => 4,  42 => 2,  11 => 1,);
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
{% block title %}Signaler un Commentaire{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link  href=\"{{ asset('css/forum.css') }}\" rel=\"stylesheet\"  />
{% endblock %}

{% block body %}
    <div align=\"center\">
        <h1 id=\"titre\">Signaler un Commentaire!</h1>
    </div>

    <div id=\"formsujet\">
        <table>
            <tr>
                <td>Titre</td>
                <td>{{ sujet.titre }}</td>
            </tr>
            <tr>
                <td>Theme</td>
                <td>{{ sujet.theme }}</td>
            </tr>
            <tr>
                <td>Auteur du Sujet</td>
                <td>{{ sujet.idAbonne.username }}</td>
            </tr>
            <tr>
                <td>Date de Création du Sujet</td>
                <td>{{ sujet.dateCreation|date(\"Y-m-d\") }}</td>
            </tr>
            <tr>
                <td>Message</td>
                <td>{{ message.texte }}</td>
            </tr>
            <tr>
                <td>Auteur du Commentaire</td>
                <td>{{ message.idAbonne.username }}</td>
            </tr>
            <tr>
                <td>Date de Publication du Commentaire</td>
                <td>{{ message.datePublication|date(\"Y-m-d\") }}</td>
            </tr>
            <tr>




            </tr>
        </table>
        <br/>
        {{ form_start(form, { 'attr': {'class':''} } )}}
        {{ form_errors(form) }}
        <table width=\"50%\">
            <tr>
                <td>Description</td>
                <td>{{ form_widget(form.description, { 'attr' : { 'class' : '' } }) }}</td>
            </tr>
            <tr>
                <td>{{ form_widget(form.Valider, { 'attr' : { 'class' : '' } }) }}</td>
                <td>{{ form_widget(form.Annuler, { 'attr' : { 'class' : '' } }) }}</td>
            </tr>
        </table>
        {{ form_rest(form) }}
        {{ form_end(form) }}
    </div>
{% endblock %}", "@CiteForum/Front/signalerCommentaire.html.twig", "C:\\wamp64\\www\\webculture\\src\\Cite\\ForumBundle\\Resources\\views\\Front\\signalerCommentaire.html.twig");
    }
}
