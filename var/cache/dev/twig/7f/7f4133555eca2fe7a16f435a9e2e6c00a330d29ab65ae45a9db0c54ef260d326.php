<?php

/* fournisseur/edit.html.twig */
class __TwigTemplate_d73340c33113b5aa2af1c704c5f10fcfba1751a372c16731a3f90ced44c225c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/edit.html.twig", 1);
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
        $__internal_110541c96c1b0029342a671cd273caa0fc508c3a1ba8a528c7c98c999874ed94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110541c96c1b0029342a671cd273caa0fc508c3a1ba8a528c7c98c999874ed94->enter($__internal_110541c96c1b0029342a671cd273caa0fc508c3a1ba8a528c7c98c999874ed94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/edit.html.twig"));

        $__internal_d93e54b7ab1869b7d8017ffa779bfc6a68de8ced6abfb6095914cb9d478ba937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93e54b7ab1869b7d8017ffa779bfc6a68de8ced6abfb6095914cb9d478ba937->enter($__internal_d93e54b7ab1869b7d8017ffa779bfc6a68de8ced6abfb6095914cb9d478ba937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_110541c96c1b0029342a671cd273caa0fc508c3a1ba8a528c7c98c999874ed94->leave($__internal_110541c96c1b0029342a671cd273caa0fc508c3a1ba8a528c7c98c999874ed94_prof);

        
        $__internal_d93e54b7ab1869b7d8017ffa779bfc6a68de8ced6abfb6095914cb9d478ba937->leave($__internal_d93e54b7ab1869b7d8017ffa779bfc6a68de8ced6abfb6095914cb9d478ba937_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_89a03dec5f0e5fe39e2d29e275f0dac543e06b85e816a57568843eb32af6d936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a03dec5f0e5fe39e2d29e275f0dac543e06b85e816a57568843eb32af6d936->enter($__internal_89a03dec5f0e5fe39e2d29e275f0dac543e06b85e816a57568843eb32af6d936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ad14be2b2a4453e47a55a7776872186c75808d1d8e4d80073bbcda4613bf88a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad14be2b2a4453e47a55a7776872186c75808d1d8e4d80073bbcda4613bf88a->enter($__internal_9ad14be2b2a4453e47a55a7776872186c75808d1d8e4d80073bbcda4613bf88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fournisseur edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_9ad14be2b2a4453e47a55a7776872186c75808d1d8e4d80073bbcda4613bf88a->leave($__internal_9ad14be2b2a4453e47a55a7776872186c75808d1d8e4d80073bbcda4613bf88a_prof);

        
        $__internal_89a03dec5f0e5fe39e2d29e275f0dac543e06b85e816a57568843eb32af6d936->leave($__internal_89a03dec5f0e5fe39e2d29e275f0dac543e06b85e816a57568843eb32af6d936_prof);

    }

    public function getTemplateName()
    {
        return "fournisseur/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Fournisseur edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('fournisseur_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "fournisseur/edit.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\fournisseur\\edit.html.twig");
    }
}
