<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ae40a53c9350e934ad6da6364f0032659ffae36ee8784530a7a7cdbe618f78a5 extends Twig_Template
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
        $__internal_9dd5946a06e4c0aaded1ab6228be2587f114beb34c416075c7fe13116763a747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dd5946a06e4c0aaded1ab6228be2587f114beb34c416075c7fe13116763a747->enter($__internal_9dd5946a06e4c0aaded1ab6228be2587f114beb34c416075c7fe13116763a747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_79d9ce2f2d3600fb474fdcbc6c6413d73c496f921ce6299b189ef00bd2b55770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d9ce2f2d3600fb474fdcbc6c6413d73c496f921ce6299b189ef00bd2b55770->enter($__internal_79d9ce2f2d3600fb474fdcbc6c6413d73c496f921ce6299b189ef00bd2b55770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9dd5946a06e4c0aaded1ab6228be2587f114beb34c416075c7fe13116763a747->leave($__internal_9dd5946a06e4c0aaded1ab6228be2587f114beb34c416075c7fe13116763a747_prof);

        
        $__internal_79d9ce2f2d3600fb474fdcbc6c6413d73c496f921ce6299b189ef00bd2b55770->leave($__internal_79d9ce2f2d3600fb474fdcbc6c6413d73c496f921ce6299b189ef00bd2b55770_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
