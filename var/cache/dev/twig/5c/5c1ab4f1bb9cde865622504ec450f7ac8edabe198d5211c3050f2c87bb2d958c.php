<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_e31e35c1033c366e980ae5483ba2dd667ee60427c94bfe3b6055135ca1da57c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1701449926871028ae822d1226dd55ee9661e422d04eb7e537065e9c418f9bb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1701449926871028ae822d1226dd55ee9661e422d04eb7e537065e9c418f9bb6->enter($__internal_1701449926871028ae822d1226dd55ee9661e422d04eb7e537065e9c418f9bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_64b549bd3c734190447774e65dda056a97b6b8f583a6d933ac2a417b40b70425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b549bd3c734190447774e65dda056a97b6b8f583a6d933ac2a417b40b70425->enter($__internal_64b549bd3c734190447774e65dda056a97b6b8f583a6d933ac2a417b40b70425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1701449926871028ae822d1226dd55ee9661e422d04eb7e537065e9c418f9bb6->leave($__internal_1701449926871028ae822d1226dd55ee9661e422d04eb7e537065e9c418f9bb6_prof);

        
        $__internal_64b549bd3c734190447774e65dda056a97b6b8f583a6d933ac2a417b40b70425->leave($__internal_64b549bd3c734190447774e65dda056a97b6b8f583a6d933ac2a417b40b70425_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
