<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1b927f866a44ce4d676b60680a4f27c3cdfc6f6b530c17dc21eb1d0c3aa1bca5 extends Twig_Template
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
        $__internal_a276be317602ab95fdffa598f19c5073429b8a72f29e05a7ebb911beeb1a9a63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a276be317602ab95fdffa598f19c5073429b8a72f29e05a7ebb911beeb1a9a63->enter($__internal_a276be317602ab95fdffa598f19c5073429b8a72f29e05a7ebb911beeb1a9a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3c0470cd3748c9520ff7bfbc36a00dbdc230077e6fc72e262fc137ccf12e888c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0470cd3748c9520ff7bfbc36a00dbdc230077e6fc72e262fc137ccf12e888c->enter($__internal_3c0470cd3748c9520ff7bfbc36a00dbdc230077e6fc72e262fc137ccf12e888c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a276be317602ab95fdffa598f19c5073429b8a72f29e05a7ebb911beeb1a9a63->leave($__internal_a276be317602ab95fdffa598f19c5073429b8a72f29e05a7ebb911beeb1a9a63_prof);

        
        $__internal_3c0470cd3748c9520ff7bfbc36a00dbdc230077e6fc72e262fc137ccf12e888c->leave($__internal_3c0470cd3748c9520ff7bfbc36a00dbdc230077e6fc72e262fc137ccf12e888c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d667bb3f26a63db46916feb6c8c6fa06ac3405f4277481f0889db7dc9ab7958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d667bb3f26a63db46916feb6c8c6fa06ac3405f4277481f0889db7dc9ab7958->enter($__internal_5d667bb3f26a63db46916feb6c8c6fa06ac3405f4277481f0889db7dc9ab7958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_93d78bf24b1b64bab86de9866a0d17a17e0181829c6e1b951c672c4398f65164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d78bf24b1b64bab86de9866a0d17a17e0181829c6e1b951c672c4398f65164->enter($__internal_93d78bf24b1b64bab86de9866a0d17a17e0181829c6e1b951c672c4398f65164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_93d78bf24b1b64bab86de9866a0d17a17e0181829c6e1b951c672c4398f65164->leave($__internal_93d78bf24b1b64bab86de9866a0d17a17e0181829c6e1b951c672c4398f65164_prof);

        
        $__internal_5d667bb3f26a63db46916feb6c8c6fa06ac3405f4277481f0889db7dc9ab7958->leave($__internal_5d667bb3f26a63db46916feb6c8c6fa06ac3405f4277481f0889db7dc9ab7958_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0ed1221d9d128ab46ace697d56b01f195bd2d9763050ceceb9fbf786b6963ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ed1221d9d128ab46ace697d56b01f195bd2d9763050ceceb9fbf786b6963ff->enter($__internal_e0ed1221d9d128ab46ace697d56b01f195bd2d9763050ceceb9fbf786b6963ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8b0a3fe0099c7a647ccf7cfb6ae1aba06a7433d19a852a5ba763f5852229ac08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b0a3fe0099c7a647ccf7cfb6ae1aba06a7433d19a852a5ba763f5852229ac08->enter($__internal_8b0a3fe0099c7a647ccf7cfb6ae1aba06a7433d19a852a5ba763f5852229ac08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8b0a3fe0099c7a647ccf7cfb6ae1aba06a7433d19a852a5ba763f5852229ac08->leave($__internal_8b0a3fe0099c7a647ccf7cfb6ae1aba06a7433d19a852a5ba763f5852229ac08_prof);

        
        $__internal_e0ed1221d9d128ab46ace697d56b01f195bd2d9763050ceceb9fbf786b6963ff->leave($__internal_e0ed1221d9d128ab46ace697d56b01f195bd2d9763050ceceb9fbf786b6963ff_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5846d2d1813014344760291eded9b513b7d26ea4de3c56ec200b0b126167dc99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5846d2d1813014344760291eded9b513b7d26ea4de3c56ec200b0b126167dc99->enter($__internal_5846d2d1813014344760291eded9b513b7d26ea4de3c56ec200b0b126167dc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c6a9b14eecfbf30a9db7521436203a1b492904710bce47a5fac07e76abe7fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6a9b14eecfbf30a9db7521436203a1b492904710bce47a5fac07e76abe7fe7->enter($__internal_0c6a9b14eecfbf30a9db7521436203a1b492904710bce47a5fac07e76abe7fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0c6a9b14eecfbf30a9db7521436203a1b492904710bce47a5fac07e76abe7fe7->leave($__internal_0c6a9b14eecfbf30a9db7521436203a1b492904710bce47a5fac07e76abe7fe7_prof);

        
        $__internal_5846d2d1813014344760291eded9b513b7d26ea4de3c56ec200b0b126167dc99->leave($__internal_5846d2d1813014344760291eded9b513b7d26ea4de3c56ec200b0b126167dc99_prof);

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
", "@Twig/Exception/exception_full.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
