<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_ec6010ab327a229f8273aa7241d89f9fb7300b5a677a71b31338074982f9e791 extends Twig_Template
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
        $__internal_0b601e27258882fd0c3612efeade2b21f50917a87265668658c543d36c23def3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b601e27258882fd0c3612efeade2b21f50917a87265668658c543d36c23def3->enter($__internal_0b601e27258882fd0c3612efeade2b21f50917a87265668658c543d36c23def3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_2d1420ed95f4019368e8033bb40c9dc6bd5167fe0c05ffeebd7624450a6a4905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d1420ed95f4019368e8033bb40c9dc6bd5167fe0c05ffeebd7624450a6a4905->enter($__internal_2d1420ed95f4019368e8033bb40c9dc6bd5167fe0c05ffeebd7624450a6a4905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_0b601e27258882fd0c3612efeade2b21f50917a87265668658c543d36c23def3->leave($__internal_0b601e27258882fd0c3612efeade2b21f50917a87265668658c543d36c23def3_prof);

        
        $__internal_2d1420ed95f4019368e8033bb40c9dc6bd5167fe0c05ffeebd7624450a6a4905->leave($__internal_2d1420ed95f4019368e8033bb40c9dc6bd5167fe0c05ffeebd7624450a6a4905_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
