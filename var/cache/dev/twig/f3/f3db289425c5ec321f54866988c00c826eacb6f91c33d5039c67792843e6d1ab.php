<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_a8a856c1f7bcfc7299c31a2a0f9456889ae996687953dfa7f1c27883fe01317a extends Twig_Template
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
        $__internal_0bf0b756fec04f757622adab5e7ba154c698372a448cec99a26abbdd57d9fb65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bf0b756fec04f757622adab5e7ba154c698372a448cec99a26abbdd57d9fb65->enter($__internal_0bf0b756fec04f757622adab5e7ba154c698372a448cec99a26abbdd57d9fb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_7114f161f35568c6ef2fe054aee229111755ab4db604d46c08ad660ef7453cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7114f161f35568c6ef2fe054aee229111755ab4db604d46c08ad660ef7453cc5->enter($__internal_7114f161f35568c6ef2fe054aee229111755ab4db604d46c08ad660ef7453cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_0bf0b756fec04f757622adab5e7ba154c698372a448cec99a26abbdd57d9fb65->leave($__internal_0bf0b756fec04f757622adab5e7ba154c698372a448cec99a26abbdd57d9fb65_prof);

        
        $__internal_7114f161f35568c6ef2fe054aee229111755ab4db604d46c08ad660ef7453cc5->leave($__internal_7114f161f35568c6ef2fe054aee229111755ab4db604d46c08ad660ef7453cc5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
