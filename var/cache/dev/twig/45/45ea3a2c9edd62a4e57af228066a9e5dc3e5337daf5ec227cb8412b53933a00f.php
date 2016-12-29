<?php

/* fournisseur/new.html.twig */
class __TwigTemplate_fdb5f1a758dc43c817db5690c757eef508d36bd6ade27051bbc9f85209b0c638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/new.html.twig", 1);
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
        $__internal_257a7569e621c78e46351841d8ab5667773665554e7a6fb8ec4afe656f651bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_257a7569e621c78e46351841d8ab5667773665554e7a6fb8ec4afe656f651bf1->enter($__internal_257a7569e621c78e46351841d8ab5667773665554e7a6fb8ec4afe656f651bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/new.html.twig"));

        $__internal_b4d7fcb16759e9a3b03e6d0f19d1f69a6a6393218cd49560ba7ebbed09a4c660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d7fcb16759e9a3b03e6d0f19d1f69a6a6393218cd49560ba7ebbed09a4c660->enter($__internal_b4d7fcb16759e9a3b03e6d0f19d1f69a6a6393218cd49560ba7ebbed09a4c660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_257a7569e621c78e46351841d8ab5667773665554e7a6fb8ec4afe656f651bf1->leave($__internal_257a7569e621c78e46351841d8ab5667773665554e7a6fb8ec4afe656f651bf1_prof);

        
        $__internal_b4d7fcb16759e9a3b03e6d0f19d1f69a6a6393218cd49560ba7ebbed09a4c660->leave($__internal_b4d7fcb16759e9a3b03e6d0f19d1f69a6a6393218cd49560ba7ebbed09a4c660_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_452fda184933363a04968c6eb05c95ce8e6239600e6a1a1598d1c462a8a5f38a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_452fda184933363a04968c6eb05c95ce8e6239600e6a1a1598d1c462a8a5f38a->enter($__internal_452fda184933363a04968c6eb05c95ce8e6239600e6a1a1598d1c462a8a5f38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_afcc931e2c2f501090e5454c6e58138ebc47544c8b2d33575b040ff17b949327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afcc931e2c2f501090e5454c6e58138ebc47544c8b2d33575b040ff17b949327->enter($__internal_afcc931e2c2f501090e5454c6e58138ebc47544c8b2d33575b040ff17b949327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fournisseur creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_afcc931e2c2f501090e5454c6e58138ebc47544c8b2d33575b040ff17b949327->leave($__internal_afcc931e2c2f501090e5454c6e58138ebc47544c8b2d33575b040ff17b949327_prof);

        
        $__internal_452fda184933363a04968c6eb05c95ce8e6239600e6a1a1598d1c462a8a5f38a->leave($__internal_452fda184933363a04968c6eb05c95ce8e6239600e6a1a1598d1c462a8a5f38a_prof);

    }

    public function getTemplateName()
    {
        return "fournisseur/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Fournisseur creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('fournisseur_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "fournisseur/new.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\fournisseur\\new.html.twig");
    }
}
