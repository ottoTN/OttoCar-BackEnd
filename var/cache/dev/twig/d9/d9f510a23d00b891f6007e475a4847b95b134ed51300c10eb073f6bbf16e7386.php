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
        $__internal_db06aac482e63755a8f3943c70c765f590992d71174a8d4645d672bd610b6764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db06aac482e63755a8f3943c70c765f590992d71174a8d4645d672bd610b6764->enter($__internal_db06aac482e63755a8f3943c70c765f590992d71174a8d4645d672bd610b6764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_97d674063972dea6286ab1ddec9678e9b41d6125786966ce17292587b8aa20d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97d674063972dea6286ab1ddec9678e9b41d6125786966ce17292587b8aa20d6->enter($__internal_97d674063972dea6286ab1ddec9678e9b41d6125786966ce17292587b8aa20d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db06aac482e63755a8f3943c70c765f590992d71174a8d4645d672bd610b6764->leave($__internal_db06aac482e63755a8f3943c70c765f590992d71174a8d4645d672bd610b6764_prof);

        
        $__internal_97d674063972dea6286ab1ddec9678e9b41d6125786966ce17292587b8aa20d6->leave($__internal_97d674063972dea6286ab1ddec9678e9b41d6125786966ce17292587b8aa20d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f5d6e1f875213f1b93c5507579d86d669b2ad06a677017e4560deff00439c0f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d6e1f875213f1b93c5507579d86d669b2ad06a677017e4560deff00439c0f4->enter($__internal_f5d6e1f875213f1b93c5507579d86d669b2ad06a677017e4560deff00439c0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_96aed1c5cdefb5118851a16efc53f9042bf98a4fd4724d5ef1cadf3d96c5735c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96aed1c5cdefb5118851a16efc53f9042bf98a4fd4724d5ef1cadf3d96c5735c->enter($__internal_96aed1c5cdefb5118851a16efc53f9042bf98a4fd4724d5ef1cadf3d96c5735c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_96aed1c5cdefb5118851a16efc53f9042bf98a4fd4724d5ef1cadf3d96c5735c->leave($__internal_96aed1c5cdefb5118851a16efc53f9042bf98a4fd4724d5ef1cadf3d96c5735c_prof);

        
        $__internal_f5d6e1f875213f1b93c5507579d86d669b2ad06a677017e4560deff00439c0f4->leave($__internal_f5d6e1f875213f1b93c5507579d86d669b2ad06a677017e4560deff00439c0f4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_acd53a295580629de96f9f879fb309be88c57344b721e5c4d80a138769965723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd53a295580629de96f9f879fb309be88c57344b721e5c4d80a138769965723->enter($__internal_acd53a295580629de96f9f879fb309be88c57344b721e5c4d80a138769965723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f2e43842e5a5deb0129d4aaa60bcc2d548e24ed0bb014b8dc94ec54962caf9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f2e43842e5a5deb0129d4aaa60bcc2d548e24ed0bb014b8dc94ec54962caf9a->enter($__internal_6f2e43842e5a5deb0129d4aaa60bcc2d548e24ed0bb014b8dc94ec54962caf9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6f2e43842e5a5deb0129d4aaa60bcc2d548e24ed0bb014b8dc94ec54962caf9a->leave($__internal_6f2e43842e5a5deb0129d4aaa60bcc2d548e24ed0bb014b8dc94ec54962caf9a_prof);

        
        $__internal_acd53a295580629de96f9f879fb309be88c57344b721e5c4d80a138769965723->leave($__internal_acd53a295580629de96f9f879fb309be88c57344b721e5c4d80a138769965723_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_38591c4165d8b938cec62f773a4544debd584dfdbc9824eb6ad0f0c125f8c889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38591c4165d8b938cec62f773a4544debd584dfdbc9824eb6ad0f0c125f8c889->enter($__internal_38591c4165d8b938cec62f773a4544debd584dfdbc9824eb6ad0f0c125f8c889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_880edc4a80f3782a09bdce435c20197ffce60307e28ef448ea5a34b68ee77269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_880edc4a80f3782a09bdce435c20197ffce60307e28ef448ea5a34b68ee77269->enter($__internal_880edc4a80f3782a09bdce435c20197ffce60307e28ef448ea5a34b68ee77269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_880edc4a80f3782a09bdce435c20197ffce60307e28ef448ea5a34b68ee77269->leave($__internal_880edc4a80f3782a09bdce435c20197ffce60307e28ef448ea5a34b68ee77269_prof);

        
        $__internal_38591c4165d8b938cec62f773a4544debd584dfdbc9824eb6ad0f0c125f8c889->leave($__internal_38591c4165d8b938cec62f773a4544debd584dfdbc9824eb6ad0f0c125f8c889_prof);

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
