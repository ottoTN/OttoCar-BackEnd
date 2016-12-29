<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ea51695e51c9c103822928932811d72a8c9df87af0d9f2c66f9c990ff43da54a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5024e1e350268790f9e162ef065a693f6372481db5e9d36fdc1d754d889f018a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5024e1e350268790f9e162ef065a693f6372481db5e9d36fdc1d754d889f018a->enter($__internal_5024e1e350268790f9e162ef065a693f6372481db5e9d36fdc1d754d889f018a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ab11d489d2e78ceee42f8973becdc4a6ef38d40bc832ab66b58c167c8e41d1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab11d489d2e78ceee42f8973becdc4a6ef38d40bc832ab66b58c167c8e41d1c1->enter($__internal_ab11d489d2e78ceee42f8973becdc4a6ef38d40bc832ab66b58c167c8e41d1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5024e1e350268790f9e162ef065a693f6372481db5e9d36fdc1d754d889f018a->leave($__internal_5024e1e350268790f9e162ef065a693f6372481db5e9d36fdc1d754d889f018a_prof);

        
        $__internal_ab11d489d2e78ceee42f8973becdc4a6ef38d40bc832ab66b58c167c8e41d1c1->leave($__internal_ab11d489d2e78ceee42f8973becdc4a6ef38d40bc832ab66b58c167c8e41d1c1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f2f12d69c6ff05001d831cf0b4795d1c808aee0f4353df72604619ff76fe6cc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f12d69c6ff05001d831cf0b4795d1c808aee0f4353df72604619ff76fe6cc8->enter($__internal_f2f12d69c6ff05001d831cf0b4795d1c808aee0f4353df72604619ff76fe6cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_eae171f1ba0372b8197dd6eeeddb671214057f79797311700774eab01d19628c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae171f1ba0372b8197dd6eeeddb671214057f79797311700774eab01d19628c->enter($__internal_eae171f1ba0372b8197dd6eeeddb671214057f79797311700774eab01d19628c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eae171f1ba0372b8197dd6eeeddb671214057f79797311700774eab01d19628c->leave($__internal_eae171f1ba0372b8197dd6eeeddb671214057f79797311700774eab01d19628c_prof);

        
        $__internal_f2f12d69c6ff05001d831cf0b4795d1c808aee0f4353df72604619ff76fe6cc8->leave($__internal_f2f12d69c6ff05001d831cf0b4795d1c808aee0f4353df72604619ff76fe6cc8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3b8618b684b233382af93ea505cc78dca0faf6fe39911d3ce067779e931e0c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b8618b684b233382af93ea505cc78dca0faf6fe39911d3ce067779e931e0c34->enter($__internal_3b8618b684b233382af93ea505cc78dca0faf6fe39911d3ce067779e931e0c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_04b4f25e2ffc550fc8fe73d34991168aa4b6c0d4bcbeb1993ab2691bf41f9418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b4f25e2ffc550fc8fe73d34991168aa4b6c0d4bcbeb1993ab2691bf41f9418->enter($__internal_04b4f25e2ffc550fc8fe73d34991168aa4b6c0d4bcbeb1993ab2691bf41f9418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_04b4f25e2ffc550fc8fe73d34991168aa4b6c0d4bcbeb1993ab2691bf41f9418->leave($__internal_04b4f25e2ffc550fc8fe73d34991168aa4b6c0d4bcbeb1993ab2691bf41f9418_prof);

        
        $__internal_3b8618b684b233382af93ea505cc78dca0faf6fe39911d3ce067779e931e0c34->leave($__internal_3b8618b684b233382af93ea505cc78dca0faf6fe39911d3ce067779e931e0c34_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_571dd7ebc0945673326941ecb1411f7cbd668a2b7591c540383cf161243f4298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_571dd7ebc0945673326941ecb1411f7cbd668a2b7591c540383cf161243f4298->enter($__internal_571dd7ebc0945673326941ecb1411f7cbd668a2b7591c540383cf161243f4298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_79833826a5999d7d7a9430ae7e010a7c95d1398ed250526064e617fd92da936c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79833826a5999d7d7a9430ae7e010a7c95d1398ed250526064e617fd92da936c->enter($__internal_79833826a5999d7d7a9430ae7e010a7c95d1398ed250526064e617fd92da936c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_79833826a5999d7d7a9430ae7e010a7c95d1398ed250526064e617fd92da936c->leave($__internal_79833826a5999d7d7a9430ae7e010a7c95d1398ed250526064e617fd92da936c_prof);

        
        $__internal_571dd7ebc0945673326941ecb1411f7cbd668a2b7591c540383cf161243f4298->leave($__internal_571dd7ebc0945673326941ecb1411f7cbd668a2b7591c540383cf161243f4298_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
