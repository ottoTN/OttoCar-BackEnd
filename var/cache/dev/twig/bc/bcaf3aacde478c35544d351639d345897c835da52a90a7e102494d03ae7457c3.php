<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_091c0a34b86373eba6c1667dc656e632edf1455ca225102d8e41a98c2083e8b5 extends Twig_Template
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
        $__internal_20b2bf753854fd01fc047ca01a5fe85e38cdb42484ad21e418476f3a0ff4491c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20b2bf753854fd01fc047ca01a5fe85e38cdb42484ad21e418476f3a0ff4491c->enter($__internal_20b2bf753854fd01fc047ca01a5fe85e38cdb42484ad21e418476f3a0ff4491c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_80b7bac0ae959bcb65d57967fdc55500ed466ee7cfa09bf21e7962ac9d9f5f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b7bac0ae959bcb65d57967fdc55500ed466ee7cfa09bf21e7962ac9d9f5f44->enter($__internal_80b7bac0ae959bcb65d57967fdc55500ed466ee7cfa09bf21e7962ac9d9f5f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_20b2bf753854fd01fc047ca01a5fe85e38cdb42484ad21e418476f3a0ff4491c->leave($__internal_20b2bf753854fd01fc047ca01a5fe85e38cdb42484ad21e418476f3a0ff4491c_prof);

        
        $__internal_80b7bac0ae959bcb65d57967fdc55500ed466ee7cfa09bf21e7962ac9d9f5f44->leave($__internal_80b7bac0ae959bcb65d57967fdc55500ed466ee7cfa09bf21e7962ac9d9f5f44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
