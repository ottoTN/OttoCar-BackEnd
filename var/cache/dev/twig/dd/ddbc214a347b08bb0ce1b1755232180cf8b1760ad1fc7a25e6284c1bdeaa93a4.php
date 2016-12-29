<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_4734e95caa41ad6c2e4528eb921a955ad68f6418ae0c9a5acc2a8bb3c001d11b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b453f0d829162a105555b02aeecfde24e7169824574b6248387e7a2d7dc0a43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b453f0d829162a105555b02aeecfde24e7169824574b6248387e7a2d7dc0a43->enter($__internal_9b453f0d829162a105555b02aeecfde24e7169824574b6248387e7a2d7dc0a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7cea425bc26faf0e632f3552aa892a178a8d46b8bd6a190cce0c5ef46fde0ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cea425bc26faf0e632f3552aa892a178a8d46b8bd6a190cce0c5ef46fde0ab9->enter($__internal_7cea425bc26faf0e632f3552aa892a178a8d46b8bd6a190cce0c5ef46fde0ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b453f0d829162a105555b02aeecfde24e7169824574b6248387e7a2d7dc0a43->leave($__internal_9b453f0d829162a105555b02aeecfde24e7169824574b6248387e7a2d7dc0a43_prof);

        
        $__internal_7cea425bc26faf0e632f3552aa892a178a8d46b8bd6a190cce0c5ef46fde0ab9->leave($__internal_7cea425bc26faf0e632f3552aa892a178a8d46b8bd6a190cce0c5ef46fde0ab9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_95e210d520cf654b0aa6a86d14102d1d24de66505c61a8cb5245063cb72dbe57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e210d520cf654b0aa6a86d14102d1d24de66505c61a8cb5245063cb72dbe57->enter($__internal_95e210d520cf654b0aa6a86d14102d1d24de66505c61a8cb5245063cb72dbe57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_335924d841b772d6e3244d45d0d76ad43588190fc4f747badbf52530c8d1cc4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_335924d841b772d6e3244d45d0d76ad43588190fc4f747badbf52530c8d1cc4b->enter($__internal_335924d841b772d6e3244d45d0d76ad43588190fc4f747badbf52530c8d1cc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_335924d841b772d6e3244d45d0d76ad43588190fc4f747badbf52530c8d1cc4b->leave($__internal_335924d841b772d6e3244d45d0d76ad43588190fc4f747badbf52530c8d1cc4b_prof);

        
        $__internal_95e210d520cf654b0aa6a86d14102d1d24de66505c61a8cb5245063cb72dbe57->leave($__internal_95e210d520cf654b0aa6a86d14102d1d24de66505c61a8cb5245063cb72dbe57_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
