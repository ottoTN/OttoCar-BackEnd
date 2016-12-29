<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5d5126ca9ee0f61bcf7d0b80cdb45b20c7bc94ec56bf76bcbaed8a3d2e228aa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc539523b2aa32f24090fb07cb85688e16cbf627b78416ebbf6189bce6b00c3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc539523b2aa32f24090fb07cb85688e16cbf627b78416ebbf6189bce6b00c3a->enter($__internal_fc539523b2aa32f24090fb07cb85688e16cbf627b78416ebbf6189bce6b00c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_503f54e53e0031a65c1adf5e2814bb0e627de04f26f7171f9be7d36cc0545611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503f54e53e0031a65c1adf5e2814bb0e627de04f26f7171f9be7d36cc0545611->enter($__internal_503f54e53e0031a65c1adf5e2814bb0e627de04f26f7171f9be7d36cc0545611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc539523b2aa32f24090fb07cb85688e16cbf627b78416ebbf6189bce6b00c3a->leave($__internal_fc539523b2aa32f24090fb07cb85688e16cbf627b78416ebbf6189bce6b00c3a_prof);

        
        $__internal_503f54e53e0031a65c1adf5e2814bb0e627de04f26f7171f9be7d36cc0545611->leave($__internal_503f54e53e0031a65c1adf5e2814bb0e627de04f26f7171f9be7d36cc0545611_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e0d13b78c8d5a570a44108dfcc7dd1c8d3ee6723c7415731a54539937a2c9676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d13b78c8d5a570a44108dfcc7dd1c8d3ee6723c7415731a54539937a2c9676->enter($__internal_e0d13b78c8d5a570a44108dfcc7dd1c8d3ee6723c7415731a54539937a2c9676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5821bb28ea8f79f41e1f5a0725168e7156ed3745d9c41965af0a08e068091039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5821bb28ea8f79f41e1f5a0725168e7156ed3745d9c41965af0a08e068091039->enter($__internal_5821bb28ea8f79f41e1f5a0725168e7156ed3745d9c41965af0a08e068091039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_5821bb28ea8f79f41e1f5a0725168e7156ed3745d9c41965af0a08e068091039->leave($__internal_5821bb28ea8f79f41e1f5a0725168e7156ed3745d9c41965af0a08e068091039_prof);

        
        $__internal_e0d13b78c8d5a570a44108dfcc7dd1c8d3ee6723c7415731a54539937a2c9676->leave($__internal_e0d13b78c8d5a570a44108dfcc7dd1c8d3ee6723c7415731a54539937a2c9676_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a455b559d2706f2518dbf91244b2a15042e89680b74a6037bbff4a214a2e7035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a455b559d2706f2518dbf91244b2a15042e89680b74a6037bbff4a214a2e7035->enter($__internal_a455b559d2706f2518dbf91244b2a15042e89680b74a6037bbff4a214a2e7035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fa2e8a738d518792fbaf4fc1c58f779d50823d680a1863c32187814cc3aed035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2e8a738d518792fbaf4fc1c58f779d50823d680a1863c32187814cc3aed035->enter($__internal_fa2e8a738d518792fbaf4fc1c58f779d50823d680a1863c32187814cc3aed035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fa2e8a738d518792fbaf4fc1c58f779d50823d680a1863c32187814cc3aed035->leave($__internal_fa2e8a738d518792fbaf4fc1c58f779d50823d680a1863c32187814cc3aed035_prof);

        
        $__internal_a455b559d2706f2518dbf91244b2a15042e89680b74a6037bbff4a214a2e7035->leave($__internal_a455b559d2706f2518dbf91244b2a15042e89680b74a6037bbff4a214a2e7035_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_462c1454e35f5c95f2cb8dbd1a550f04f1e0a483e265ee5a8ec4b52ed83755aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_462c1454e35f5c95f2cb8dbd1a550f04f1e0a483e265ee5a8ec4b52ed83755aa->enter($__internal_462c1454e35f5c95f2cb8dbd1a550f04f1e0a483e265ee5a8ec4b52ed83755aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a46c3cdff85ffd1b443f770e5e5c184679f98353119bac9c8e7d565a818f9903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46c3cdff85ffd1b443f770e5e5c184679f98353119bac9c8e7d565a818f9903->enter($__internal_a46c3cdff85ffd1b443f770e5e5c184679f98353119bac9c8e7d565a818f9903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a46c3cdff85ffd1b443f770e5e5c184679f98353119bac9c8e7d565a818f9903->leave($__internal_a46c3cdff85ffd1b443f770e5e5c184679f98353119bac9c8e7d565a818f9903_prof);

        
        $__internal_462c1454e35f5c95f2cb8dbd1a550f04f1e0a483e265ee5a8ec4b52ed83755aa->leave($__internal_462c1454e35f5c95f2cb8dbd1a550f04f1e0a483e265ee5a8ec4b52ed83755aa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
