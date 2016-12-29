<?php

/* fournisseur/index.html.twig */
class __TwigTemplate_9c50c5ff726e1d1f554efbab7c2de14d8cb689fab421c5c92aa2c95e79921ca1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/index.html.twig", 1);
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
        $__internal_7756a54c096911702fddf5f0e36b561c4b37f198ad93599e763fe01cd7b55371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7756a54c096911702fddf5f0e36b561c4b37f198ad93599e763fe01cd7b55371->enter($__internal_7756a54c096911702fddf5f0e36b561c4b37f198ad93599e763fe01cd7b55371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

        $__internal_de680ee5677fa3af24928e0ce729df6a1f5c07d8be8381f935be1ae25727405b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de680ee5677fa3af24928e0ce729df6a1f5c07d8be8381f935be1ae25727405b->enter($__internal_de680ee5677fa3af24928e0ce729df6a1f5c07d8be8381f935be1ae25727405b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7756a54c096911702fddf5f0e36b561c4b37f198ad93599e763fe01cd7b55371->leave($__internal_7756a54c096911702fddf5f0e36b561c4b37f198ad93599e763fe01cd7b55371_prof);

        
        $__internal_de680ee5677fa3af24928e0ce729df6a1f5c07d8be8381f935be1ae25727405b->leave($__internal_de680ee5677fa3af24928e0ce729df6a1f5c07d8be8381f935be1ae25727405b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a224f9d9ec9930bd9e35640a228e671826af8881785212616e349446303cd6f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a224f9d9ec9930bd9e35640a228e671826af8881785212616e349446303cd6f8->enter($__internal_a224f9d9ec9930bd9e35640a228e671826af8881785212616e349446303cd6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89ab73851b600b6bbc3e0b65ceb4107e88f8c459e12923f4412866bddf49da51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ab73851b600b6bbc3e0b65ceb4107e88f8c459e12923f4412866bddf49da51->enter($__internal_89ab73851b600b6bbc3e0b65ceb4107e88f8c459e12923f4412866bddf49da51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- Modal -->
<div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
               <h1> WARNING !</h1>
            </div>
            <div class=\"modal-body\">
                <h3>Are you sure you want to delete this Provider ?</h3>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Yes</button>
                <a data-dismiss=\"modal\" class=\"btn btn-default btn-ok\">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!--End Of Modal -->

<div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-handshake-o\"></i></span>
            <h5>All Providers</h5>
             <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_new");
        echo "\"><i class=\"fa fa-plus-circle\"></i></a></div>
          </div>
          <div class=\"widget-content nopadding\">
            <table class=\"table table-bordered data-table\">
        <thead>
            <tr>
                <th>Nomfourn</th>
                <th>Adressefourn</th>
                <th>Mailfourn</th>
                <th>Telfourn</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fournisseurs"]) ? $context["fournisseurs"] : $this->getContext($context, "fournisseurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["fournisseur"]) {
            // line 41
            echo "            <tr>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "nomfourn", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "adressefourn", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "mailfourn", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "telfourn", array()), "html", null, true);
            echo "</td>
                <td>
                            <a class=\"btn btn-warning\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_edit", array("id" => $this->getAttribute($context["fournisseur"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                            <!-- <button type=\"button\" data-href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_edit", array("id" => $this->getAttribute($context["fournisseur"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-warning\"> Edit </button>  -->
                            <button class=\"btn btn-danger\" data-href=\"/delete.php?id=54\" data-toggle=\"modal\" data-target=\"#confirm-delete\">
                Delete 
                </button>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fournisseur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
            </table>
          </div>
    </div>

";
        
        $__internal_89ab73851b600b6bbc3e0b65ceb4107e88f8c459e12923f4412866bddf49da51->leave($__internal_89ab73851b600b6bbc3e0b65ceb4107e88f8c459e12923f4412866bddf49da51_prof);

        
        $__internal_a224f9d9ec9930bd9e35640a228e671826af8881785212616e349446303cd6f8->leave($__internal_a224f9d9ec9930bd9e35640a228e671826af8881785212616e349446303cd6f8_prof);

    }

    public function getTemplateName()
    {
        return "fournisseur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 55,  118 => 48,  114 => 47,  109 => 45,  105 => 44,  101 => 43,  97 => 42,  94 => 41,  90 => 40,  73 => 26,  49 => 4,  40 => 3,  11 => 1,);
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
<!-- Modal -->
<div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
               <h1> WARNING !</h1>
            </div>
            <div class=\"modal-body\">
                <h3>Are you sure you want to delete this Provider ?</h3>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Yes</button>
                <a data-dismiss=\"modal\" class=\"btn btn-default btn-ok\">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!--End Of Modal -->

<div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-handshake-o\"></i></span>
            <h5>All Providers</h5>
             <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"{{ path('fournisseur_new') }}\"><i class=\"fa fa-plus-circle\"></i></a></div>
          </div>
          <div class=\"widget-content nopadding\">
            <table class=\"table table-bordered data-table\">
        <thead>
            <tr>
                <th>Nomfourn</th>
                <th>Adressefourn</th>
                <th>Mailfourn</th>
                <th>Telfourn</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for fournisseur in fournisseurs %}
            <tr>
                <td>{{ fournisseur.nomfourn }}</a></td>
                <td>{{ fournisseur.adressefourn }}</td>
                <td>{{ fournisseur.mailfourn }}</td>
                <td>{{ fournisseur.telfourn }}</td>
                <td>
                            <a class=\"btn btn-warning\" href=\"{{ path('fournisseur_edit', { 'id': fournisseur.id }) }}\">Edit</a>
                            <!-- <button type=\"button\" data-href=\"{{ path('fournisseur_edit', { 'id': fournisseur.id }) }}\"class=\"btn btn-warning\"> Edit </button>  -->
                            <button class=\"btn btn-danger\" data-href=\"/delete.php?id=54\" data-toggle=\"modal\" data-target=\"#confirm-delete\">
                Delete 
                </button>
                </td>
            </tr>
        {% endfor %}
        </tbody>
            </table>
          </div>
    </div>

{% endblock %}
", "fournisseur/index.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\fournisseur\\index.html.twig");
    }
}
