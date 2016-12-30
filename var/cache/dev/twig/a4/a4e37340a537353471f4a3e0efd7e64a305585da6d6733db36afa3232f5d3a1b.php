<?php

/* fiche/index-worker.html.twig */
class __TwigTemplate_0be04e4239eca87c204245e03f0d6e30071468b50a6422190bffd8e028c360d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fiche/index-worker.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_285ceeb18c18e5c263c5e53ac1c0dc88c155c4876cba4f02ce676018c396756e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_285ceeb18c18e5c263c5e53ac1c0dc88c155c4876cba4f02ce676018c396756e->enter($__internal_285ceeb18c18e5c263c5e53ac1c0dc88c155c4876cba4f02ce676018c396756e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/index-worker.html.twig"));

        $__internal_2349b458ce3bf98e01715eb91756aceb191deb24ff906075428d873e43573234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2349b458ce3bf98e01715eb91756aceb191deb24ff906075428d873e43573234->enter($__internal_2349b458ce3bf98e01715eb91756aceb191deb24ff906075428d873e43573234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/index-worker.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_285ceeb18c18e5c263c5e53ac1c0dc88c155c4876cba4f02ce676018c396756e->leave($__internal_285ceeb18c18e5c263c5e53ac1c0dc88c155c4876cba4f02ce676018c396756e_prof);

        
        $__internal_2349b458ce3bf98e01715eb91756aceb191deb24ff906075428d873e43573234->leave($__internal_2349b458ce3bf98e01715eb91756aceb191deb24ff906075428d873e43573234_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0ffae52480a6238e46a55372b1b2dea1cd26e8c71862b40024233389d9442ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ffae52480a6238e46a55372b1b2dea1cd26e8c71862b40024233389d9442ba->enter($__internal_c0ffae52480a6238e46a55372b1b2dea1cd26e8c71862b40024233389d9442ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f7e6b4d87e47dd37b08b0b8f6d9b56f3daddb032c7fa02486f303973e526656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7e6b4d87e47dd37b08b0b8f6d9b56f3daddb032c7fa02486f303973e526656->enter($__internal_3f7e6b4d87e47dd37b08b0b8f6d9b56f3daddb032c7fa02486f303973e526656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
  <div class=\"pull-right\">
      <input  type=\"checkbox\" checked data-toggle=\"toggle\" data-on=\"<i class='fa fa-thumbs-up'></i> Available\" data-off=\"<i class='fa fa-thumbs-down'></i> Busy\" data-onstyle=\"success\" data-offstyle=\"danger\" data-width=\"100\"> 
  </div>

    <div class=\"span12\">
        <div class=\"panel with-nav-tabs panel-primary\">
            <div class=\"panel-heading\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"#tab1primary\" data-toggle=\"tab\">Complete</a>
                    </li>
                    <li><a href=\"#tab2primary\" data-toggle=\"tab\">Show All</a>
                    </li>
                </ul>
            </div>
            <div class=\"panel-body\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane fade in active\" id=\"tab1primary\">
                        <div class=\"container-fluid\">
                        <div class=\"widget-box\">
                                        <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-file-text-o\"></i></span>
                                          <h5>All Files</h5>
                                        </div>
                                        <div class=\"widget-content nopadding\">
                                          <table class=\"table table-bordered data-table\">
        <thead>
            <tr>
                <th>Datefiche</th>
                <th>Prestation</th>
                <th>Client</th>
                <th>Emp</th>
                <th>Diagfiche</th>
                <th>Solutionfiche</th>
                <th>Typereparation</th>
                <th>Statutfiche</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiches"]) ? $context["fiches"] : $this->getContext($context, "fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 45
            echo "            <tr>
                <td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_show", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fiche"], "datefiche", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "prestation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "Client", array()), "prenomprop", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "Emp", array()), "prenomemp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "diagfiche", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "solutionfiche", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "typereparation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "statutfiche", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_show", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_edit", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        </tbody>
    </table>
     </div>
                                      </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"tab2primary\">
                        <div class=\"container-fluid\">
                        <div class=\"widget-box\">
                                <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-file-text-o\"></i></span>
                                  <h5>All Files</h5>
                                </div>
                                <div class=\"widget-content nopadding\">
                                  <table class=\"table table-bordered data-table\">
                                   <thead>
            <tr>
                <th>Datefiche</th>
                <th>Prestation</th>
                <th>Client</th>
                <th>Emp</th>
                <th>Diagfiche</th>
                <th>Solutionfiche</th>
                <th>Typereparation</th>
                <th>Statutfiche</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiches"]) ? $context["fiches"] : $this->getContext($context, "fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 97
            echo "            <tr>
                <td><a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_show", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fiche"], "datefiche", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "prestation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "Client", array()), "prenomprop", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "Emp", array()), "prenomemp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "diagfiche", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "solutionfiche", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "typereparation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "statutfiche", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_show", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_edit", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "        </tbody>
    </table>
     </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <ul>
        <li>
            <a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_new");
        echo "\">Create a new fiche</a>
        </li>
    </ul>
";
        
        $__internal_3f7e6b4d87e47dd37b08b0b8f6d9b56f3daddb032c7fa02486f303973e526656->leave($__internal_3f7e6b4d87e47dd37b08b0b8f6d9b56f3daddb032c7fa02486f303973e526656_prof);

        
        $__internal_c0ffae52480a6238e46a55372b1b2dea1cd26e8c71862b40024233389d9442ba->leave($__internal_c0ffae52480a6238e46a55372b1b2dea1cd26e8c71862b40024233389d9442ba_prof);

    }

    public function getTemplateName()
    {
        return "fiche/index-worker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 133,  254 => 119,  242 => 113,  236 => 110,  229 => 106,  225 => 105,  221 => 104,  217 => 103,  213 => 102,  209 => 101,  205 => 100,  201 => 99,  195 => 98,  192 => 97,  188 => 96,  157 => 67,  145 => 61,  139 => 58,  132 => 54,  128 => 53,  124 => 52,  120 => 51,  116 => 50,  112 => 49,  108 => 48,  104 => 47,  98 => 46,  95 => 45,  91 => 44,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
<div class=\"container\">
  <div class=\"pull-right\">
      <input  type=\"checkbox\" checked data-toggle=\"toggle\" data-on=\"<i class='fa fa-thumbs-up'></i> Available\" data-off=\"<i class='fa fa-thumbs-down'></i> Busy\" data-onstyle=\"success\" data-offstyle=\"danger\" data-width=\"100\"> 
  </div>

    <div class=\"span12\">
        <div class=\"panel with-nav-tabs panel-primary\">
            <div class=\"panel-heading\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"#tab1primary\" data-toggle=\"tab\">Complete</a>
                    </li>
                    <li><a href=\"#tab2primary\" data-toggle=\"tab\">Show All</a>
                    </li>
                </ul>
            </div>
            <div class=\"panel-body\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane fade in active\" id=\"tab1primary\">
                        <div class=\"container-fluid\">
                        <div class=\"widget-box\">
                                        <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-file-text-o\"></i></span>
                                          <h5>All Files</h5>
                                        </div>
                                        <div class=\"widget-content nopadding\">
                                          <table class=\"table table-bordered data-table\">
        <thead>
            <tr>
                <th>Datefiche</th>
                <th>Prestation</th>
                <th>Client</th>
                <th>Emp</th>
                <th>Diagfiche</th>
                <th>Solutionfiche</th>
                <th>Typereparation</th>
                <th>Statutfiche</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for fiche in fiches %}
            <tr>
                <td><a href=\"{{ path('fiche_show', { 'id': fiche.id }) }}\">{{ fiche.datefiche|date('Y-m-d H:i:s') }}</a></td>
                <td>{{ fiche.prestation }}</td>
                <td>{{ fiche.Client.prenomprop }}</td>
                <td>{{ fiche.Emp.prenomemp }}</td>
                <td>{{ fiche.diagfiche }}</td>
                <td>{{ fiche.solutionfiche }}</td>
                <td>{{ fiche.typereparation }}</td>
                <td>{{ fiche.statutfiche }}</td>
                <td>{{ fiche.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('fiche_show', { 'id': fiche.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('fiche_edit', { 'id': fiche.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
     </div>
                                      </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"tab2primary\">
                        <div class=\"container-fluid\">
                        <div class=\"widget-box\">
                                <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-file-text-o\"></i></span>
                                  <h5>All Files</h5>
                                </div>
                                <div class=\"widget-content nopadding\">
                                  <table class=\"table table-bordered data-table\">
                                   <thead>
            <tr>
                <th>Datefiche</th>
                <th>Prestation</th>
                <th>Client</th>
                <th>Emp</th>
                <th>Diagfiche</th>
                <th>Solutionfiche</th>
                <th>Typereparation</th>
                <th>Statutfiche</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for fiche in fiches %}
            <tr>
                <td><a href=\"{{ path('fiche_show', { 'id': fiche.id }) }}\">{{ fiche.datefiche|date('Y-m-d H:i:s') }}</a></td>
                <td>{{ fiche.prestation }}</td>
                <td>{{ fiche.Client.prenomprop }}</td>
                <td>{{ fiche.Emp.prenomemp }}</td>
                <td>{{ fiche.diagfiche }}</td>
                <td>{{ fiche.solutionfiche }}</td>
                <td>{{ fiche.typereparation }}</td>
                <td>{{ fiche.statutfiche }}</td>
                <td>{{ fiche.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('fiche_show', { 'id': fiche.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('fiche_edit', { 'id': fiche.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
     </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <ul>
        <li>
            <a href=\"{{ path('fiche_new') }}\">Create a new fiche</a>
        </li>
    </ul>
{% endblock %}
", "fiche/index-worker.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\fiche\\index-worker.html.twig");
    }
}
