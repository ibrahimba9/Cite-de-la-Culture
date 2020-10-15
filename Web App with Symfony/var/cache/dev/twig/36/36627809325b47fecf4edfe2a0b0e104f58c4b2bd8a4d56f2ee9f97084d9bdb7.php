<?php

/* @CiteForum/Back/listeSignauxSujets.html.twig */
class __TwigTemplate_3b0b9150bd27f2b96fcc664c7e74e0653300879e4ea16f1022a50aa59448201d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@CiteForum/Back/baseBack.html.twig", "@CiteForum/Back/listeSignauxSujets.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'titrePage' => [$this, 'block_titrePage'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@CiteForum/Back/baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CiteForum/Back/listeSignauxSujets.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CiteForum/Back/listeSignauxSujets.html.twig"));

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

        echo "Liste des Sujets Signalés";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_titrePage($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Liste des Sujets Signalés";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    {<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("cssBack/forum.css"), "html", null, true);
        echo "\" />}

    <input type=\"text\" placeholder=\"Recherche...\" class=\"form-control\" id=\"myInput\"/> <br/>
    <table class=\"table table-bordered table-striped mb-none\" id=\"datatable-editable\">
        <thead>
        <tr>
            <th>Username de celui qui a signalé</th>
            <th>Titre du sujet signalé</th>
            <th>Auteur</th>
            <th>Cause du signal</th>
            <th>Date du signal</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody id=\"myTable\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["signaux"]) ? $context["signaux"] : $this->getContext($context, "signaux")));
        foreach ($context['_seq'] as $context["_key"] => $context["signal"]) {
            // line 24
            echo "            <tr class=\"gradeX\">
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["signal"], "idAbonne", []), "username", []), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["signal"], "idSujet", []), "titre", []), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["signal"], "idSujet", []), "idAbonne", []), "username", []), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["signal"], "description", []), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["signal"], "dateSignal", []), "d-m-Y"), "html", null, true);
            echo "</td>
                <td class=\"actions\">

                        <ul>
                            <li><a onclick=\"showDeleteSubjectSignaleModal(";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["signal"], "idSujet", []), "idSujet", []), "html", null, true);
            echo ")\" id=\"linkDelSuj\" href=\"#\" data-href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_delete_sujet_signale", ["id" => $this->getAttribute($this->getAttribute($context["signal"], "idSujet", []), "idSujet", [])]), "html", null, true);
            echo "\">Supprimer Sujet</a></li>
                            <li><a onclick=\"showDeleteSignalSubjectModal(";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["signal"], "id", []), "html", null, true);
            echo ")\" id=\"linkDelSigSub\" href=\"#\" data-href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_delete_signal_sujet", ["id" => $this->getAttribute($context["signal"], "id", [])]), "html", null, true);
            echo "\">Supprimer Signal</a></li>
                        </ul>

                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['signal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>
    <div style=\"margin-left: 85%;\">";
        // line 43
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["signaux"]) ? $context["signaux"] : $this->getContext($context, "signaux")));
        echo "</div>

    <div id=\"myModal\" class=\"modal\">

        <!-- Modal content -->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <span class=\"close\">&times;</span>
                <h2 id=\"hTitre\">Supprimer ce Sujet?</h2>
            </div>
            <div class=\"modal-body\">
                <h2 id=\"hContent\">Etes-vous sûr de vouloir supprimer ce Sujet du Forum?</h2>
            </div>
            <div class=\"modal-footer\">
                <table style=\"background-color: transparent;\">
                    <tr style=\"background-color: transparent;\">
                        <td>
                            <a id=\"linkConfirm\">Confirmer</a>
                        </td>
                        <td>
                            <a id=\"linkAnnuler\" href=\"#\">Annuler</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

    </div>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ForumBack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ForumBackDeleteModal.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@CiteForum/Back/listeSignauxSujets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 74,  194 => 73,  161 => 43,  157 => 41,  142 => 34,  136 => 33,  129 => 29,  125 => 28,  121 => 27,  117 => 26,  113 => 25,  110 => 24,  106 => 23,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends'@CiteForum/Back/baseBack.html.twig' %}

{% block title %}Liste des Sujets Signalés{% endblock %}

{% block titrePage %}Liste des Sujets Signalés{% endblock %}

{% block body %}
    {<link rel=\"stylesheet\" href=\"{{ asset('cssBack/forum.css') }}\" />}

    <input type=\"text\" placeholder=\"Recherche...\" class=\"form-control\" id=\"myInput\"/> <br/>
    <table class=\"table table-bordered table-striped mb-none\" id=\"datatable-editable\">
        <thead>
        <tr>
            <th>Username de celui qui a signalé</th>
            <th>Titre du sujet signalé</th>
            <th>Auteur</th>
            <th>Cause du signal</th>
            <th>Date du signal</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody id=\"myTable\">
        {% for signal in signaux %}
            <tr class=\"gradeX\">
                <td>{{ signal.idAbonne.username }}</td>
                <td>{{ signal.idSujet.titre }}</td>
                <td>{{ signal.idSujet.idAbonne.username }}</td>
                <td>{{ signal.description }}</td>
                <td>{{ signal.dateSignal|date(\"d-m-Y\") }}</td>
                <td class=\"actions\">

                        <ul>
                            <li><a onclick=\"showDeleteSubjectSignaleModal({{ signal.idSujet.idSujet }})\" id=\"linkDelSuj\" href=\"#\" data-href=\"{{ path('back_delete_sujet_signale', {'id' : signal.idSujet.idSujet}) }}\">Supprimer Sujet</a></li>
                            <li><a onclick=\"showDeleteSignalSubjectModal({{ signal.id }})\" id=\"linkDelSigSub\" href=\"#\" data-href=\"{{ path('back_delete_signal_sujet', {'id' : signal.id}) }}\">Supprimer Signal</a></li>
                        </ul>

                    </a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <div style=\"margin-left: 85%;\">{{ knp_pagination_render(signaux) }}</div>

    <div id=\"myModal\" class=\"modal\">

        <!-- Modal content -->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <span class=\"close\">&times;</span>
                <h2 id=\"hTitre\">Supprimer ce Sujet?</h2>
            </div>
            <div class=\"modal-body\">
                <h2 id=\"hContent\">Etes-vous sûr de vouloir supprimer ce Sujet du Forum?</h2>
            </div>
            <div class=\"modal-footer\">
                <table style=\"background-color: transparent;\">
                    <tr style=\"background-color: transparent;\">
                        <td>
                            <a id=\"linkConfirm\">Confirmer</a>
                        </td>
                        <td>
                            <a id=\"linkAnnuler\" href=\"#\">Annuler</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

    </div>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"{{ asset('js/ForumBack.js') }}\"></script>
    <script src=\"{{ asset('js/ForumBackDeleteModal.js') }}\"></script>
{% endblock %}", "@CiteForum/Back/listeSignauxSujets.html.twig", "C:\\wamp64\\www\\webculture\\src\\Cite\\ForumBundle\\Resources\\views\\Back\\listeSignauxSujets.html.twig");
    }
}
