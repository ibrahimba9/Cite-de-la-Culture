<?php

/* @CiteForum/Back/mailBannissement.html.twig */
class __TwigTemplate_7638e9db386e4ceb26b68aa54ab698ff1e347e0e715d683440f15d6a5a8e2331 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CiteForum/Back/mailBannissement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CiteForum/Back/mailBannissement.html.twig"));

        // line 1
        echo "<h3>Bannissement du Forum!</h3>

Cher ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "! <br/>
Nous vous informons que vous avez été banni définitivement du Sujet \"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sujet"]) ? $context["sujet"] : $this->getContext($context, "sujet")), "titre", []), "html", null, true);
        echo "\" créé par ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sujet"]) ? $context["sujet"] : $this->getContext($context, "sujet")), "idAbonne", []), "username", []), "html", null, true);
        echo " le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "Y-m-d"), "html", null, true);
        echo ".
L'équipe de gestion du Forum a constaté que plusieurs participants à ce sujet ont signalé un message inappropré que vous avez publié récemment.<br/>
Merci pour votre compréhension.


<h4>NB: Cet e-mail est envoyé automatiquement.</h4>

<img style=\"width: 10%;height: 15%;\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/cdc.png"), "html", null, true);
        echo "\">";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@CiteForum/Back/mailBannissement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Bannissement du Forum!</h3>

Cher {{ name }}! <br/>
Nous vous informons que vous avez été banni définitivement du Sujet \"{{ sujet.titre }}\" créé par {{ sujet.idAbonne.username }} le {{ date|date(\"Y-m-d\") }}.
L'équipe de gestion du Forum a constaté que plusieurs participants à ce sujet ont signalé un message inappropré que vous avez publié récemment.<br/>
Merci pour votre compréhension.


<h4>NB: Cet e-mail est envoyé automatiquement.</h4>

<img style=\"width: 10%;height: 15%;\" src=\"{{ asset('images/cdc.png') }}\">", "@CiteForum/Back/mailBannissement.html.twig", "C:\\wamp64\\www\\webculture\\src\\Cite\\ForumBundle\\Resources\\views\\Back\\mailBannissement.html.twig");
    }
}
