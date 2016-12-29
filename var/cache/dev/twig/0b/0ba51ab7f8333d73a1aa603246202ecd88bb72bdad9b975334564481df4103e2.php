<?php

/* compte/new.html.twig */
class __TwigTemplate_2ff824124c9a655ebba3f0d52ee9813c765e5656d064d678887adb9aa561b788 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "compte/new.html.twig", 1);
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
        $__internal_0a94d17f409ab86d44a5a1a647d4150731d2169e0be87ded5a1fa36314ac41c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a94d17f409ab86d44a5a1a647d4150731d2169e0be87ded5a1fa36314ac41c4->enter($__internal_0a94d17f409ab86d44a5a1a647d4150731d2169e0be87ded5a1fa36314ac41c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/new.html.twig"));

        $__internal_bb4b2dfb57185d2e78869d6a05e094fde0b3b1372284a3ecaaf4165de86c097f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4b2dfb57185d2e78869d6a05e094fde0b3b1372284a3ecaaf4165de86c097f->enter($__internal_bb4b2dfb57185d2e78869d6a05e094fde0b3b1372284a3ecaaf4165de86c097f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a94d17f409ab86d44a5a1a647d4150731d2169e0be87ded5a1fa36314ac41c4->leave($__internal_0a94d17f409ab86d44a5a1a647d4150731d2169e0be87ded5a1fa36314ac41c4_prof);

        
        $__internal_bb4b2dfb57185d2e78869d6a05e094fde0b3b1372284a3ecaaf4165de86c097f->leave($__internal_bb4b2dfb57185d2e78869d6a05e094fde0b3b1372284a3ecaaf4165de86c097f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ee8d8d47d56fbc6f49b529292663e2be62691f88508521d999be864e62d7545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ee8d8d47d56fbc6f49b529292663e2be62691f88508521d999be864e62d7545->enter($__internal_8ee8d8d47d56fbc6f49b529292663e2be62691f88508521d999be864e62d7545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62dedf918195762211a4776fbfb9f07b037dd70e9b2ff1c71b197f4065f1cf94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62dedf918195762211a4776fbfb9f07b037dd70e9b2ff1c71b197f4065f1cf94->enter($__internal_62dedf918195762211a4776fbfb9f07b037dd70e9b2ff1c71b197f4065f1cf94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"row-fluid centre\">
        <div class=\"span10\">
            <div class=\"widget-box\">
                <div class=\"widget-title\"> <span class=\"icon\"> <i class=\"fa fa-file-o\"></i> </span>
                    <h5>New Client</h5>
                </div>
                <div class=\"widget-content nopadding\">
<br>
    <center>";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-success\" value=\"Create\" />
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<br>
            <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_index");
        echo "\">Back to the list</a>

    </center>
</div></div></div>
";
        
        $__internal_62dedf918195762211a4776fbfb9f07b037dd70e9b2ff1c71b197f4065f1cf94->leave($__internal_62dedf918195762211a4776fbfb9f07b037dd70e9b2ff1c71b197f4065f1cf94_prof);

        
        $__internal_8ee8d8d47d56fbc6f49b529292663e2be62691f88508521d999be864e62d7545->leave($__internal_8ee8d8d47d56fbc6f49b529292663e2be62691f88508521d999be864e62d7545_prof);

    }

    public function getTemplateName()
    {
        return "compte/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  68 => 15,  63 => 13,  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"row-fluid centre\">
        <div class=\"span10\">
            <div class=\"widget-box\">
                <div class=\"widget-title\"> <span class=\"icon\"> <i class=\"fa fa-file-o\"></i> </span>
                    <h5>New Client</h5>
                </div>
                <div class=\"widget-content nopadding\">
<br>
    <center>{{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" class=\"btn btn-success\" value=\"Create\" />
    {{ form_end(form) }}

<br>
            <a href=\"{{ path('compte_index') }}\">Back to the list</a>

    </center>
</div></div></div>
{% endblock %}
", "compte/new.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\compte\\new.html.twig");
    }
}
