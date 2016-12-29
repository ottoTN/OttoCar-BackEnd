<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_85082faa5ece7bc432bac9943ee1308d0eaf5e4d9399d13eece93541984ed4c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ca60a943be5c72be83bbb364a8146bb588afb9d2724bcf1c0fd890408a6ae937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca60a943be5c72be83bbb364a8146bb588afb9d2724bcf1c0fd890408a6ae937->enter($__internal_ca60a943be5c72be83bbb364a8146bb588afb9d2724bcf1c0fd890408a6ae937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4b64d9bd3c946eb5217c31f78395b76ebac1d54d3d9758aa943fd04deaf4f0d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b64d9bd3c946eb5217c31f78395b76ebac1d54d3d9758aa943fd04deaf4f0d9->enter($__internal_4b64d9bd3c946eb5217c31f78395b76ebac1d54d3d9758aa943fd04deaf4f0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca60a943be5c72be83bbb364a8146bb588afb9d2724bcf1c0fd890408a6ae937->leave($__internal_ca60a943be5c72be83bbb364a8146bb588afb9d2724bcf1c0fd890408a6ae937_prof);

        
        $__internal_4b64d9bd3c946eb5217c31f78395b76ebac1d54d3d9758aa943fd04deaf4f0d9->leave($__internal_4b64d9bd3c946eb5217c31f78395b76ebac1d54d3d9758aa943fd04deaf4f0d9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fcae7edf28d6321bb6d7c9f471b36d169bccf7763e6d23091dafc1a84cb08143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcae7edf28d6321bb6d7c9f471b36d169bccf7763e6d23091dafc1a84cb08143->enter($__internal_fcae7edf28d6321bb6d7c9f471b36d169bccf7763e6d23091dafc1a84cb08143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_24d0ba024c3eef85ccba5df5be918e6cb2f9fd35f6dd12d1754a284abea6f53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d0ba024c3eef85ccba5df5be918e6cb2f9fd35f6dd12d1754a284abea6f53a->enter($__internal_24d0ba024c3eef85ccba5df5be918e6cb2f9fd35f6dd12d1754a284abea6f53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_24d0ba024c3eef85ccba5df5be918e6cb2f9fd35f6dd12d1754a284abea6f53a->leave($__internal_24d0ba024c3eef85ccba5df5be918e6cb2f9fd35f6dd12d1754a284abea6f53a_prof);

        
        $__internal_fcae7edf28d6321bb6d7c9f471b36d169bccf7763e6d23091dafc1a84cb08143->leave($__internal_fcae7edf28d6321bb6d7c9f471b36d169bccf7763e6d23091dafc1a84cb08143_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4f50cd4141cb99f7337e01fe05af857107d7b9760671ab25057dab5ae67c41d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f50cd4141cb99f7337e01fe05af857107d7b9760671ab25057dab5ae67c41d8->enter($__internal_4f50cd4141cb99f7337e01fe05af857107d7b9760671ab25057dab5ae67c41d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0d9ce8693d5bfbf65e2c1d2a040f5d6eeae204ce773106c4ba6eec78cd3cc911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9ce8693d5bfbf65e2c1d2a040f5d6eeae204ce773106c4ba6eec78cd3cc911->enter($__internal_0d9ce8693d5bfbf65e2c1d2a040f5d6eeae204ce773106c4ba6eec78cd3cc911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0d9ce8693d5bfbf65e2c1d2a040f5d6eeae204ce773106c4ba6eec78cd3cc911->leave($__internal_0d9ce8693d5bfbf65e2c1d2a040f5d6eeae204ce773106c4ba6eec78cd3cc911_prof);

        
        $__internal_4f50cd4141cb99f7337e01fe05af857107d7b9760671ab25057dab5ae67c41d8->leave($__internal_4f50cd4141cb99f7337e01fe05af857107d7b9760671ab25057dab5ae67c41d8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_65381419c7ef2db9ff91880e1327441063ae8f32e983ea96f22b6e7725de54e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65381419c7ef2db9ff91880e1327441063ae8f32e983ea96f22b6e7725de54e7->enter($__internal_65381419c7ef2db9ff91880e1327441063ae8f32e983ea96f22b6e7725de54e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ed31db68c5f817ff9aedbbf288efb4d4f75944a96555c9d840462aa8510c0873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed31db68c5f817ff9aedbbf288efb4d4f75944a96555c9d840462aa8510c0873->enter($__internal_ed31db68c5f817ff9aedbbf288efb4d4f75944a96555c9d840462aa8510c0873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ed31db68c5f817ff9aedbbf288efb4d4f75944a96555c9d840462aa8510c0873->leave($__internal_ed31db68c5f817ff9aedbbf288efb4d4f75944a96555c9d840462aa8510c0873_prof);

        
        $__internal_65381419c7ef2db9ff91880e1327441063ae8f32e983ea96f22b6e7725de54e7->leave($__internal_65381419c7ef2db9ff91880e1327441063ae8f32e983ea96f22b6e7725de54e7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
