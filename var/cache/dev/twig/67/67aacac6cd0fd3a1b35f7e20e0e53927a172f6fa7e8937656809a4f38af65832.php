<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_c51c2ffcaeee473953eb745ec4e4043a10f65b152fe35b5b79e04597848c9916 extends Twig_Template
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
        $__internal_ae48e8f53f345888dcfde6cc4f79ba79af27cdbe23f0c7de634a9a41d5e9d43d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae48e8f53f345888dcfde6cc4f79ba79af27cdbe23f0c7de634a9a41d5e9d43d->enter($__internal_ae48e8f53f345888dcfde6cc4f79ba79af27cdbe23f0c7de634a9a41d5e9d43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_63858226b5207f41bb0a7f6d4399079bafd8dacc35162bb9a523ce5c5f5aeab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63858226b5207f41bb0a7f6d4399079bafd8dacc35162bb9a523ce5c5f5aeab0->enter($__internal_63858226b5207f41bb0a7f6d4399079bafd8dacc35162bb9a523ce5c5f5aeab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ae48e8f53f345888dcfde6cc4f79ba79af27cdbe23f0c7de634a9a41d5e9d43d->leave($__internal_ae48e8f53f345888dcfde6cc4f79ba79af27cdbe23f0c7de634a9a41d5e9d43d_prof);

        
        $__internal_63858226b5207f41bb0a7f6d4399079bafd8dacc35162bb9a523ce5c5f5aeab0->leave($__internal_63858226b5207f41bb0a7f6d4399079bafd8dacc35162bb9a523ce5c5f5aeab0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
