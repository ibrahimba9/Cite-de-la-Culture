<?php

/* @CiteForum/Front/formSujet.html.twig */
class __TwigTemplate_2dcbf00319c5ae04b32ba867e1cc95657a420220700d3a4211571df67d8c4037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CiteForum/Front/formSujet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CiteForum/Front/formSujet.html.twig"));

        // line 1
        echo "
<div class=\"well animated wow fadeInRight\" data-wow-delay=\".5s\" align=\"center\">

    <h2>Ajouter un Nouveau Sujet</h2>
    <br/><br/>
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => ""]]);
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <table style=\"background-color: transparent; width: 50%\">
        <tr style=\"background-color: transparent;\">
            <td><h4>Choisir un Thème:</h4></td>
            <td>";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "theme", []), 'widget', ["attr" => ["class" => "selectTheme"]]);
        echo "</td>
        </tr>
        <tr style=\"background-color: transparent;\">
            <td><h4>Choisir un Titre:</h4></td>
            <td>";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", []), 'widget', ["attr" => ["class" => ""]]);
        echo "<br/></td>
        </tr>
    </table>
    <br/>
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valider", []), 'widget', ["attr" => ["class" => ""]]);
        echo "

    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@CiteForum/Front/formSujet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 23,  63 => 22,  58 => 20,  51 => 16,  44 => 12,  36 => 7,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"well animated wow fadeInRight\" data-wow-delay=\".5s\" align=\"center\">

    <h2>Ajouter un Nouveau Sujet</h2>
    <br/><br/>
    {{ form_start(form, { 'attr': {'class':''} } )}}
    {{ form_errors(form) }}

    <table style=\"background-color: transparent; width: 50%\">
        <tr style=\"background-color: transparent;\">
            <td><h4>Choisir un Thème:</h4></td>
            <td>{{ form_widget(form.theme, { 'attr' : { 'class' : 'selectTheme' } }) }}</td>
        </tr>
        <tr style=\"background-color: transparent;\">
            <td><h4>Choisir un Titre:</h4></td>
            <td>{{ form_widget(form.titre, { 'attr' : { 'class' : '' } }) }}<br/></td>
        </tr>
    </table>
    <br/>
    {{ form_widget(form.valider, { 'attr' : { 'class' : '' } }) }}

    {{ form_rest(form) }}
    {{ form_end(form) }}
</div>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
", "@CiteForum/Front/formSujet.html.twig", "C:\\wamp64\\www\\webculture\\src\\Cite\\ForumBundle\\Resources\\views\\Front\\formSujet.html.twig");
    }
}
