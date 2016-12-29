<?php

/* employe/new.html.twig */
class __TwigTemplate_c69a3a21a76fdadd1f1e5da59336910a7c2b44109ba7ceeb4d18a6881baf3c3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "employe/new.html.twig", 1);
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
        $__internal_4cb95a15149a2c694d7e1b4b65222b804da6d44759e902f210f47a135ad6eac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cb95a15149a2c694d7e1b4b65222b804da6d44759e902f210f47a135ad6eac1->enter($__internal_4cb95a15149a2c694d7e1b4b65222b804da6d44759e902f210f47a135ad6eac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employe/new.html.twig"));

        $__internal_39280208d3687ca3c421c371e3cfd63c03ff6dcd13c1a7e348f34b13262c09d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39280208d3687ca3c421c371e3cfd63c03ff6dcd13c1a7e348f34b13262c09d6->enter($__internal_39280208d3687ca3c421c371e3cfd63c03ff6dcd13c1a7e348f34b13262c09d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employe/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cb95a15149a2c694d7e1b4b65222b804da6d44759e902f210f47a135ad6eac1->leave($__internal_4cb95a15149a2c694d7e1b4b65222b804da6d44759e902f210f47a135ad6eac1_prof);

        
        $__internal_39280208d3687ca3c421c371e3cfd63c03ff6dcd13c1a7e348f34b13262c09d6->leave($__internal_39280208d3687ca3c421c371e3cfd63c03ff6dcd13c1a7e348f34b13262c09d6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f973ae2598d7579993f5d172fa2ed5c4c701ebb3bb090985f9e93d9591eca9fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f973ae2598d7579993f5d172fa2ed5c4c701ebb3bb090985f9e93d9591eca9fb->enter($__internal_f973ae2598d7579993f5d172fa2ed5c4c701ebb3bb090985f9e93d9591eca9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4b2f233176de786828c60926d8fc2867a11bd22377bd5aa908f01a618b96baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b2f233176de786828c60926d8fc2867a11bd22377bd5aa908f01a618b96baf->enter($__internal_f4b2f233176de786828c60926d8fc2867a11bd22377bd5aa908f01a618b96baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Employe creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("employe_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f4b2f233176de786828c60926d8fc2867a11bd22377bd5aa908f01a618b96baf->leave($__internal_f4b2f233176de786828c60926d8fc2867a11bd22377bd5aa908f01a618b96baf_prof);

        
        $__internal_f973ae2598d7579993f5d172fa2ed5c4c701ebb3bb090985f9e93d9591eca9fb->leave($__internal_f973ae2598d7579993f5d172fa2ed5c4c701ebb3bb090985f9e93d9591eca9fb_prof);

    }

    public function getTemplateName()
    {
        return "employe/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Employe creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('employe_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "employe/new.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\employe\\new.html.twig");
    }
}
