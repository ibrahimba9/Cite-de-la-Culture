<?php

/* @CiteUser/Default/index.html.twig */
class __TwigTemplate_2670e5ee40a5587ac9abc2d6588db0de4a3691e1f596e079518faacf45d1043d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@CiteUser/Default/index.html.twig", 1);
        $this->blocks = [
            'barremenu' => [$this, 'block_barremenu'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CiteUser/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CiteUser/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_barremenu($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barremenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barremenu"));

        // line 4
        echo "
    <ul>
        <li><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cite_homepage");
        echo "\">Home</a></li>
        <li><a href=\"#\">Mon Profil</a></li>
        <li><a href=\"#\">Mes Clubs</a></li>
        <li><a href=\"\">Forum</a>
            <ul class=\"dropdown\">
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil_forum_sujets");
        echo "\">Mes Sujets</a></li>
                <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil_forum_suivi");
        echo "\">Mes Sujets Suivis</a></li>
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lister_invitations");
        echo "\">Invitations(";
        echo twig_escape_filter($this->env, (isset($context["nbrInvitations"]) ? $context["nbrInvitations"] : $this->getContext($context, "nbrInvitations")), "html", null, true);
        echo ")</a></li>
            </ul>
        </li>
        <li data-href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
        echo "\" id=\"ongletNotif\"><a href=\"#\" id=\"countNotif\" data-href=\"";
        echo twig_escape_filter($this->env, (isset($context["countNS"]) ? $context["countNS"] : $this->getContext($context, "countNS")), "html", null, true);
        echo "\">Notifications(";
        echo twig_escape_filter($this->env, (isset($context["countNS"]) ? $context["countNS"] : $this->getContext($context, "countNS")), "html", null, true);
        echo ")</a>

            <ul class=\"dropdown\"  style=\"width: auto\">
                <div style=\"overflow-y: scroll; height:400px;\" id=\"notifs\">
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifs"]) ? $context["notifs"] : $this->getContext($context, "notifs")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 21
            echo "                    ";
            if (($this->getAttribute($context["n"], "seen", []) == 0)) {
                // line 22
                echo "                        <div style=\"list-style-position:inside; border: 1px solid black;width: 400px;background-color: #24C2C7;\">
                            <li style=\"\">
                                <a onclick=\"decrement()\" class=\"linkUnseen\"  href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("see_notification", ["id" => $this->getAttribute($context["n"], "id", [])]), "html", null, true);
                echo "\" style=\"font-size: 15px;\"><u>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "title", []), "html", null, true);
                echo "</u></a>
                            </li>
                            <li>
                                <a>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "description", []), "html", null, true);
                echo "</a>
                            </li>
                        </div>
                    ";
            } else {
                // line 31
                echo "                        <div style=\"list-style-position:inside; border: 1px solid black;width: 400px\">
                            <li style=\"\">
                                <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("see_notification", ["id" => $this->getAttribute($context["n"], "id", [])]), "html", null, true);
                echo "\"><u>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "title", []), "html", null, true);
                echo "</u></a>
                            </li>
                            <li>
                                <a>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "description", []), "html", null, true);
                echo "</a>
                            </li>
                        </div>
                    ";
            }
            // line 40
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </div>
            </ul>

        </li>
    </ul>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "    <script
            src=\"https://code.jquery.com/jquery-3.4.0.slim.min.js\"
            integrity=\"sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=\"
            crossorigin=\"anonymous\">

    </script>
    ";
        // line 59
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('SBC\NotificationsBundle\Twig\NotificationsAssetsExtension')->renderAssets(), "html", null, true);
        echo "
    <script>
        /**
         * After calling notifications_assets() \"pusher\" is now available
         * and you can use it this way
         */

            // select the channel you want to listen to
        var channel = pusher.subscribe(\"notifications\");// notifications channel
        var count = \$('#countNotif').attr('data-href');
        var username = \$('#ongletNotif').attr(\"data-href\");
        channel.bind(\"my-event\", function(data) {
            console.log('from notifications channel', data);
            data.forEach(function(item){
                let li = '<div style=\"list-style-position:inside; border: 1px solid black;width: 400px; background-color: #24C2C7;\"><li><a onclick=\"decrement()\" class=\"linkUnseen\" href=\"forum/ConsulterNotificationNumber/'+item.number+'\"><u>'+ item.title +'</u></a>  </li> <li><a>'+ item.description +'</a></li></div>';

                var usernotif = String(item.username);
                var user = String(username);
                if(usernotif != user){
                    count = \$('#countNotif').attr('data-href');
                    count++;
                    \$('#notifs').prepend(li);
                    \$('#countNotif').text(\"Notifications(\"+count+\")\");
                    \$('#countNotif').attr('data-href', count);
                }

            });

        });


        
        function decrement() {
            var nbr = \$('#countNotif').attr('data-href');
            nbr--;
            \$('#countNotif').attr('data-href', nbr);
            \$('#countNotif').text(\"Notifications(\"+nbr+\")\");
        }
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@CiteUser/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 59,  167 => 52,  158 => 51,  141 => 42,  134 => 40,  127 => 36,  119 => 33,  115 => 31,  108 => 27,  100 => 24,  96 => 22,  93 => 21,  89 => 20,  78 => 16,  70 => 13,  66 => 12,  62 => 11,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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

{% block barremenu %}

    <ul>
        <li><a href=\"{{ path('cite_homepage') }}\">Home</a></li>
        <li><a href=\"#\">Mon Profil</a></li>
        <li><a href=\"#\">Mes Clubs</a></li>
        <li><a href=\"\">Forum</a>
            <ul class=\"dropdown\">
                <li><a href=\"{{ path('profil_forum_sujets') }}\">Mes Sujets</a></li>
                <li><a href=\"{{ path('profil_forum_suivi') }}\">Mes Sujets Suivis</a></li>
                <li><a href=\"{{ path('lister_invitations') }}\">Invitations({{ nbrInvitations }})</a></li>
            </ul>
        </li>
        <li data-href=\"{{ app.user.username }}\" id=\"ongletNotif\"><a href=\"#\" id=\"countNotif\" data-href=\"{{ countNS }}\">Notifications({{ countNS }})</a>

            <ul class=\"dropdown\"  style=\"width: auto\">
                <div style=\"overflow-y: scroll; height:400px;\" id=\"notifs\">
                {% for n in notifs %}
                    {% if n.seen == 0 %}
                        <div style=\"list-style-position:inside; border: 1px solid black;width: 400px;background-color: #24C2C7;\">
                            <li style=\"\">
                                <a onclick=\"decrement()\" class=\"linkUnseen\"  href=\"{{ path('see_notification', {'id' : n.id}) }}\" style=\"font-size: 15px;\"><u>{{ n.title }}</u></a>
                            </li>
                            <li>
                                <a>{{ n.description }}</a>
                            </li>
                        </div>
                    {% else %}
                        <div style=\"list-style-position:inside; border: 1px solid black;width: 400px\">
                            <li style=\"\">
                                <a href=\"{{ path('see_notification', {'id' : n.id}) }}\"><u>{{ n.title }}</u></a>
                            </li>
                            <li>
                                <a>{{ n.description }}</a>
                            </li>
                        </div>
                    {% endif %}

                {% endfor %}
                </div>
            </ul>

        </li>
    </ul>


{% endblock %}

{% block body %}
    <script
            src=\"https://code.jquery.com/jquery-3.4.0.slim.min.js\"
            integrity=\"sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=\"
            crossorigin=\"anonymous\">

    </script>
    {# Call NotificationsBundles's assets #}
    {{ notifications_assets() }}
    <script>
        /**
         * After calling notifications_assets() \"pusher\" is now available
         * and you can use it this way
         */

            // select the channel you want to listen to
        var channel = pusher.subscribe(\"notifications\");// notifications channel
        var count = \$('#countNotif').attr('data-href');
        var username = \$('#ongletNotif').attr(\"data-href\");
        channel.bind(\"my-event\", function(data) {
            console.log('from notifications channel', data);
            data.forEach(function(item){
                let li = '<div style=\"list-style-position:inside; border: 1px solid black;width: 400px; background-color: #24C2C7;\"><li><a onclick=\"decrement()\" class=\"linkUnseen\" href=\"forum/ConsulterNotificationNumber/'+item.number+'\"><u>'+ item.title +'</u></a>  </li> <li><a>'+ item.description +'</a></li></div>';

                var usernotif = String(item.username);
                var user = String(username);
                if(usernotif != user){
                    count = \$('#countNotif').attr('data-href');
                    count++;
                    \$('#notifs').prepend(li);
                    \$('#countNotif').text(\"Notifications(\"+count+\")\");
                    \$('#countNotif').attr('data-href', count);
                }

            });

        });


        
        function decrement() {
            var nbr = \$('#countNotif').attr('data-href');
            nbr--;
            \$('#countNotif').attr('data-href', nbr);
            \$('#countNotif').text(\"Notifications(\"+nbr+\")\");
        }
    </script>

{% endblock %}", "@CiteUser/Default/index.html.twig", "C:\\wamp64\\www\\webculture\\src\\Cite\\UserBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
