<?php

/* base.html.twig */
class __TwigTemplate_e8268477a4f631cefc46bf687ceb9cf34031a7e3d15a9861ad9baac911805acf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a47e7808ead648e7a9754f0f50e5413d0d10bd14a45e236b884632c96d50978e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a47e7808ead648e7a9754f0f50e5413d0d10bd14a45e236b884632c96d50978e->enter($__internal_a47e7808ead648e7a9754f0f50e5413d0d10bd14a45e236b884632c96d50978e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_aba192b3cbf26785a5d15cc0bd9915abbf28383e4defee643061385075d750aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba192b3cbf26785a5d15cc0bd9915abbf28383e4defee643061385075d750aa->enter($__internal_aba192b3cbf26785a5d15cc0bd9915abbf28383e4defee643061385075d750aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/uniform.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/select2.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/matrix-style.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/matrix-media.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datepicker.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap-wysihtml5.css"), "html", null, true);
        echo "\" />
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.gritter.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/widgets.min.css"), "html", null, true);
        echo "\"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
 <title>";
        // line 18
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "</head>
<body>




<!--Header-part-->
<div id=\"header\">
  <h1><a href=\"#\">OTTOCar</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id=\"user-nav\" class=\"navbar navbar-inverse\">
  <ul class=\"nav\">
    <li  class=\"dropdown\" id=\"profile-messages\" ><a title=\"\" href=\"#\" data-toggle=\"dropdown\" data-target=\"#profile-messages\" class=\"dropdown-toggle\"><i class=\"icon icon-user\"></i>  <span class=\"text\">Welcome User</span><b class=\"caret\"></b></a>
      <ul class=\"dropdown-menu\">
        <li><a href=\"#\"><i class=\"icon-user\"></i> My Profile</a></li>
        <li class=\"divider\"></li>
        <li class=\"divider\"></li>
        <li><a href=\"login.html\"><i class=\"icon-key\"></i> Log Out</a></li>
      </ul>
    </li>
    <li class=\"dropdown\" id=\"menu-messages\"><a href=\"#\" data-toggle=\"dropdown\" data-target=\"#menu-messages\" class=\"dropdown-toggle\"><i class=\"icon icon-envelope\"></i> <span class=\"text\">Notifications</span> <span class=\"label label-important\">5</span> <b class=\"caret\"></b></a>
      <ul class=\"dropdown-menu\">
           <div class= \"widget-notifications no-padding\" id=\"notif\">
              <div class=\"notifications-list\" id=\"main-navbar-notifications\">
                <div class=\"notification\">
                  <div class=\"notification-title text-success\">
                    File N°1151 
                  </div>
                  <div class=\"notification-description text-green\">
                    Problem - Car Repaired
                  </div>
                  <div class=\"notification-ago\">
                    Feb - June 2016
                  </div>
                  <div class=\"notification-icon\">
                    <i class=\"fa fa-check-square-o text-success\"></i></div>
                  </div>

                  <div class=\"notification\">
                  <div class=\"notification-title text-red\">
                    File N°1156
                  </div>
                  <div class=\"notification-description text-red\">
                    Problem Solved - Car Not Repaired
                  </div>
                  <div class=\"notification-ago\">
                    Jan - June 2016
                  </div>
                  <div class=\"notification-icon\">
                    <i class=\"fa fa-exclamation-circle text-red\"></i></div>
                  </div>
              </div>
      </ul>
    </li>
    <li class=\"\"><a title=\"\" href=\"login.html\"><i class=\"icon icon-share-alt\"></i> <span class=\"text\">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->


<!--main-container-part-->
<div id=\"content\">
<!--breadcrumbs-->
  <div id=\"content-header\">
    <div id=\"breadcrumb\"> <a href=\"index.html\" title=\"Go to Home\" class=\"tip-bottom\"><i class=\"icon-home\"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->

  <div class=\"container-fluid\">
  <!-- Put your code here--> 

 ";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "    
   
</div>
<!--Footer-part-->
<hr/>
<div class=\"row-fluid\">
  <div id=\"footer\" class=\"span12\"> 2013 &copy; Matrix Admin. Brought to you by <a href=\"http://themedesigner.in\">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->

<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.uniform.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/matrix.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/matrix.tables.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  \$(function(){

   // jQuery methods go here...
   /*alert(\"The paragraph was clicked.\");*/
   \$(\"#ficheLink\").click(function(){
    \$(this).hide();
        \$(\"#ficheOpt1\").fadeIn();
        \$(\"#ficheOpt1\").css(\"display\",\"block\");
        \$(\"#ficheOpt2\").fadeIn();
        \$(\"#ficheOpt2\").css(\"display\",\"block\");

      });

    \$(\"#compteLink\").click(function(){
    \$(this).hide();
        \$(\"#compteOpt1\").fadeIn();
        \$(\"#compteOpt1\").css(\"display\",\"block\");
        \$(\"#compteOpt2\").fadeIn();
        \$(\"#compteOpt2\").css(\"display\",\"block\");
        
      });


  function goPage (newURL) {
      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != \"\") {
      
          // if url is \"-\", it is this page -- reset the menu:
          if (newURL == \"-\" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}

});
</script>
";
        // line 163
        $this->displayBlock('javascripts', $context, $blocks);
        // line 164
        echo "</body>
</html>
";
        
        $__internal_a47e7808ead648e7a9754f0f50e5413d0d10bd14a45e236b884632c96d50978e->leave($__internal_a47e7808ead648e7a9754f0f50e5413d0d10bd14a45e236b884632c96d50978e_prof);

        
        $__internal_aba192b3cbf26785a5d15cc0bd9915abbf28383e4defee643061385075d750aa->leave($__internal_aba192b3cbf26785a5d15cc0bd9915abbf28383e4defee643061385075d750aa_prof);

    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        $__internal_4897a42f345d7dae6894caa449bd6be1b72a4556abf07beee21b63a3cd558a41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4897a42f345d7dae6894caa449bd6be1b72a4556abf07beee21b63a3cd558a41->enter($__internal_4897a42f345d7dae6894caa449bd6be1b72a4556abf07beee21b63a3cd558a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ba33a71780a115eaf7a99f00f3ddb5c0e3f0f1051372c2a71d29c59f9ba22572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba33a71780a115eaf7a99f00f3ddb5c0e3f0f1051372c2a71d29c59f9ba22572->enter($__internal_ba33a71780a115eaf7a99f00f3ddb5c0e3f0f1051372c2a71d29c59f9ba22572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ba33a71780a115eaf7a99f00f3ddb5c0e3f0f1051372c2a71d29c59f9ba22572->leave($__internal_ba33a71780a115eaf7a99f00f3ddb5c0e3f0f1051372c2a71d29c59f9ba22572_prof);

        
        $__internal_4897a42f345d7dae6894caa449bd6be1b72a4556abf07beee21b63a3cd558a41->leave($__internal_4897a42f345d7dae6894caa449bd6be1b72a4556abf07beee21b63a3cd558a41_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3536a1b7a09990909175588bcf5624c917964b1c9231d707cb3bf379d01f1025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3536a1b7a09990909175588bcf5624c917964b1c9231d707cb3bf379d01f1025->enter($__internal_3536a1b7a09990909175588bcf5624c917964b1c9231d707cb3bf379d01f1025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_defadc9f9f81f0379a3243383d240c845f55ded40bb3f0ac9b6a94336caed54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_defadc9f9f81f0379a3243383d240c845f55ded40bb3f0ac9b6a94336caed54a->enter($__internal_defadc9f9f81f0379a3243383d240c845f55ded40bb3f0ac9b6a94336caed54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_defadc9f9f81f0379a3243383d240c845f55ded40bb3f0ac9b6a94336caed54a->leave($__internal_defadc9f9f81f0379a3243383d240c845f55ded40bb3f0ac9b6a94336caed54a_prof);

        
        $__internal_3536a1b7a09990909175588bcf5624c917964b1c9231d707cb3bf379d01f1025->leave($__internal_3536a1b7a09990909175588bcf5624c917964b1c9231d707cb3bf379d01f1025_prof);

    }

    // line 97
    public function block_body($context, array $blocks = array())
    {
        $__internal_04a744e3765512c2c860571c9b992b16999b1a12e90ad5f5aed9aeb4f15ee906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04a744e3765512c2c860571c9b992b16999b1a12e90ad5f5aed9aeb4f15ee906->enter($__internal_04a744e3765512c2c860571c9b992b16999b1a12e90ad5f5aed9aeb4f15ee906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a67893d62430daf81eb97ce05bdd04a055d6f7bcbc83dad424d896963d9fdfdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67893d62430daf81eb97ce05bdd04a055d6f7bcbc83dad424d896963d9fdfdc->enter($__internal_a67893d62430daf81eb97ce05bdd04a055d6f7bcbc83dad424d896963d9fdfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a67893d62430daf81eb97ce05bdd04a055d6f7bcbc83dad424d896963d9fdfdc->leave($__internal_a67893d62430daf81eb97ce05bdd04a055d6f7bcbc83dad424d896963d9fdfdc_prof);

        
        $__internal_04a744e3765512c2c860571c9b992b16999b1a12e90ad5f5aed9aeb4f15ee906->leave($__internal_04a744e3765512c2c860571c9b992b16999b1a12e90ad5f5aed9aeb4f15ee906_prof);

    }

    // line 163
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_357edd4cc1536c6096d24e4ec21099bf63c69ebd0670a1bd88897193bd0df1f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357edd4cc1536c6096d24e4ec21099bf63c69ebd0670a1bd88897193bd0df1f0->enter($__internal_357edd4cc1536c6096d24e4ec21099bf63c69ebd0670a1bd88897193bd0df1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ba43d138c7c6fd8059d7a674d7676e2b4caf1c0cc7172d3fc17f47dee93e43c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba43d138c7c6fd8059d7a674d7676e2b4caf1c0cc7172d3fc17f47dee93e43c8->enter($__internal_ba43d138c7c6fd8059d7a674d7676e2b4caf1c0cc7172d3fc17f47dee93e43c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ba43d138c7c6fd8059d7a674d7676e2b4caf1c0cc7172d3fc17f47dee93e43c8->leave($__internal_ba43d138c7c6fd8059d7a674d7676e2b4caf1c0cc7172d3fc17f47dee93e43c8_prof);

        
        $__internal_357edd4cc1536c6096d24e4ec21099bf63c69ebd0670a1bd88897193bd0df1f0->leave($__internal_357edd4cc1536c6096d24e4ec21099bf63c69ebd0670a1bd88897193bd0df1f0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 163,  305 => 97,  288 => 19,  270 => 18,  258 => 164,  256 => 163,  204 => 114,  200 => 113,  196 => 112,  192 => 111,  188 => 110,  184 => 109,  180 => 108,  168 => 98,  166 => 97,  87 => 20,  85 => 19,  81 => 18,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css')}}\" />
<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-responsive.min.css')}}\" />
<link rel=\"stylesheet\" href=\"{{ asset('css/uniform.css')}}\" />
<link rel=\"stylesheet\" href=\"{{ asset('css/select2.css')}}\" />
<link rel=\"stylesheet\" href=\"{{ asset('css/matrix-style.css')}}\" />
<link rel=\"stylesheet\" href=\"{{ asset('css/matrix-media.css')}}\" />
<link rel=\"stylesheet\" href=\"{{ asset('css/datepicker.css')}}\" />
<link rel=\"stylesheet\" href=\"{{ asset('bootstrap-wysihtml5.css')}}\" />
<link href=\"{{ asset('font-awesome/css/font-awesome.css')}}\" rel=\"stylesheet\" />
<link rel=\"stylesheet\" href=\"{{ asset('css/jquery.gritter.css')}}\" />
<link rel=\"stylesheet\" href=\"{{ asset('css/widgets.min.css')}}\"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
 <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
</head>
<body>




<!--Header-part-->
<div id=\"header\">
  <h1><a href=\"#\">OTTOCar</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id=\"user-nav\" class=\"navbar navbar-inverse\">
  <ul class=\"nav\">
    <li  class=\"dropdown\" id=\"profile-messages\" ><a title=\"\" href=\"#\" data-toggle=\"dropdown\" data-target=\"#profile-messages\" class=\"dropdown-toggle\"><i class=\"icon icon-user\"></i>  <span class=\"text\">Welcome User</span><b class=\"caret\"></b></a>
      <ul class=\"dropdown-menu\">
        <li><a href=\"#\"><i class=\"icon-user\"></i> My Profile</a></li>
        <li class=\"divider\"></li>
        <li class=\"divider\"></li>
        <li><a href=\"login.html\"><i class=\"icon-key\"></i> Log Out</a></li>
      </ul>
    </li>
    <li class=\"dropdown\" id=\"menu-messages\"><a href=\"#\" data-toggle=\"dropdown\" data-target=\"#menu-messages\" class=\"dropdown-toggle\"><i class=\"icon icon-envelope\"></i> <span class=\"text\">Notifications</span> <span class=\"label label-important\">5</span> <b class=\"caret\"></b></a>
      <ul class=\"dropdown-menu\">
           <div class= \"widget-notifications no-padding\" id=\"notif\">
              <div class=\"notifications-list\" id=\"main-navbar-notifications\">
                <div class=\"notification\">
                  <div class=\"notification-title text-success\">
                    File N°1151 
                  </div>
                  <div class=\"notification-description text-green\">
                    Problem - Car Repaired
                  </div>
                  <div class=\"notification-ago\">
                    Feb - June 2016
                  </div>
                  <div class=\"notification-icon\">
                    <i class=\"fa fa-check-square-o text-success\"></i></div>
                  </div>

                  <div class=\"notification\">
                  <div class=\"notification-title text-red\">
                    File N°1156
                  </div>
                  <div class=\"notification-description text-red\">
                    Problem Solved - Car Not Repaired
                  </div>
                  <div class=\"notification-ago\">
                    Jan - June 2016
                  </div>
                  <div class=\"notification-icon\">
                    <i class=\"fa fa-exclamation-circle text-red\"></i></div>
                  </div>
              </div>
      </ul>
    </li>
    <li class=\"\"><a title=\"\" href=\"login.html\"><i class=\"icon icon-share-alt\"></i> <span class=\"text\">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->


<!--main-container-part-->
<div id=\"content\">
<!--breadcrumbs-->
  <div id=\"content-header\">
    <div id=\"breadcrumb\"> <a href=\"index.html\" title=\"Go to Home\" class=\"tip-bottom\"><i class=\"icon-home\"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->

  <div class=\"container-fluid\">
  <!-- Put your code here--> 

 {% block body %}{% endblock %}
    
   
</div>
<!--Footer-part-->
<hr/>
<div class=\"row-fluid\">
  <div id=\"footer\" class=\"span12\"> 2013 &copy; Matrix Admin. Brought to you by <a href=\"http://themedesigner.in\">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->

<script src=\"{{ asset('js/jquery.min.js')}}\"></script> 
<script src=\"{{ asset('js/bootstrap.min.js')}}\"></script> 
<script src=\"{{ asset('js/jquery.uniform.js')}}\"></script> 
<script src=\"{{ asset('js/select2.min.js')}}\"></script> 
<script src=\"{{ asset('js/jquery.dataTables.min.js')}}\"></script> 
<script src=\"{{ asset('js/matrix.js')}}\"></script> 
<script src=\"{{ asset('js/matrix.tables.js')}}\"></script>
<script type=\"text/javascript\">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  \$(function(){

   // jQuery methods go here...
   /*alert(\"The paragraph was clicked.\");*/
   \$(\"#ficheLink\").click(function(){
    \$(this).hide();
        \$(\"#ficheOpt1\").fadeIn();
        \$(\"#ficheOpt1\").css(\"display\",\"block\");
        \$(\"#ficheOpt2\").fadeIn();
        \$(\"#ficheOpt2\").css(\"display\",\"block\");

      });

    \$(\"#compteLink\").click(function(){
    \$(this).hide();
        \$(\"#compteOpt1\").fadeIn();
        \$(\"#compteOpt1\").css(\"display\",\"block\");
        \$(\"#compteOpt2\").fadeIn();
        \$(\"#compteOpt2\").css(\"display\",\"block\");
        
      });


  function goPage (newURL) {
      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != \"\") {
      
          // if url is \"-\", it is this page -- reset the menu:
          if (newURL == \"-\" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}

});
</script>
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\base.html.twig");
    }
}
