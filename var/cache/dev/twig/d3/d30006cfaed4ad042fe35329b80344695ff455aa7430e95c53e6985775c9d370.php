<?php

/* fiche/index.html.twig */
class __TwigTemplate_b2c9070181ed3e9bc7015807d6565b06e18aea7cbd357d9ac200e3b601bfc7e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fiche/index.html.twig", 1);
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
        $__internal_b2dd1bb9000ca972edf6c7dc1bc2f0ab4e42693f67c2e2acb46be3f4a48433d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2dd1bb9000ca972edf6c7dc1bc2f0ab4e42693f67c2e2acb46be3f4a48433d4->enter($__internal_b2dd1bb9000ca972edf6c7dc1bc2f0ab4e42693f67c2e2acb46be3f4a48433d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/index.html.twig"));

        $__internal_c2320c22f103e3815aec7208663d0c777b0fbef4922f5f63fb51994a6314733f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2320c22f103e3815aec7208663d0c777b0fbef4922f5f63fb51994a6314733f->enter($__internal_c2320c22f103e3815aec7208663d0c777b0fbef4922f5f63fb51994a6314733f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2dd1bb9000ca972edf6c7dc1bc2f0ab4e42693f67c2e2acb46be3f4a48433d4->leave($__internal_b2dd1bb9000ca972edf6c7dc1bc2f0ab4e42693f67c2e2acb46be3f4a48433d4_prof);

        
        $__internal_c2320c22f103e3815aec7208663d0c777b0fbef4922f5f63fb51994a6314733f->leave($__internal_c2320c22f103e3815aec7208663d0c777b0fbef4922f5f63fb51994a6314733f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_eddd2822a555822795eac219277e70fa631d03482f04de433af98d5b643dbf12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eddd2822a555822795eac219277e70fa631d03482f04de433af98d5b643dbf12->enter($__internal_eddd2822a555822795eac219277e70fa631d03482f04de433af98d5b643dbf12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42288f70ac195bfce23c0277cd6ef12decead15c6e6fe60900dfe0b67cb369fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42288f70ac195bfce23c0277cd6ef12decead15c6e6fe60900dfe0b67cb369fb->enter($__internal_42288f70ac195bfce23c0277cd6ef12decead15c6e6fe60900dfe0b67cb369fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "                                            <!-- RECEPTIONNIST -->
<!-- Modal -->
<div id=\"addFacture\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Bill</h4>
                </div>
                <div class=\"modal-body\">
                


                        <div class=\"row-fluid\">
      <div class=\"span12\">
        <div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"> <i class=\"icon-briefcase\"></i> </span>
            <h5 >Company Name</h5>
          </div>
          <div class=\"widget-content\">
            <div class=\"row-fluid\">
              <div class=\"span6\">
                <table class=\"\">
                  <tbody>
                    <tr>
                      <td><h4>Your Company Name</h4></td>
                    </tr>
                    <tr>
                      <td>Your Town</td>
                    </tr>
                    <tr>
                      <td>Your Region/State</td>
                    </tr>
                    <tr>
                      <td>Mobile Phone: +4530422244</td>
                    </tr>
                    <tr>
                      <td >me@company.com</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class=\"span6\">
                <table class=\"table table-bordered table-invoice\">
                  <tbody>
                    <tr>
                    <tr>
                      <td class=\"width30\">Invoice ID:</td>
                      <td class=\"width70\"><strong>TD-6546</strong></td>
                    </tr>
                    <tr>
                      <td>Issue Date:</td>
                      <td><strong>March 23, 2013</strong></td>
                    </tr>
                    <tr>
                      <td>Due Date:</td>
                      <td><strong>April 01, 2013</strong></td>
                    </tr>
                  <td class=\"width30\">Client Address:</td>
                    <td class=\"width70\"><strong>Cliente Company name.</strong> <br>
                      501 Mafia Street., washington, <br>
                      NYNC 3654 <br>
                      Contact No: 123 456-7890 <br>
                      Email: youremail@companyname.com </td>
                  </tr>
                    </tbody>
                  
                </table>
              </div>
            </div>
            <div class=\"row-fluid\">
              <div class=\"span12\">
                <table class=\"table table-bordered table-invoice-full\">
                  <thead>
                    <tr>
                      <th class=\"head0\">Type</th>
                      <th class=\"head1\">Desc</th>
                      <th class=\"head0 right\">Qty</th>
                      <th class=\"head1 right\">Price</th>
                      <th class=\"head0 right\">Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Firefox</td>
                      <td>Ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae</td>
                      <td class=\"right\">2</td>
                      <td class=\"right\">\$150</td>
                      <td class=\"right\"><strong>\$300</strong></td>
                    </tr>
                    <tr>
                      <td>Chrome Plugin</td>
                      <td>Tro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt u eos et accusamus et iusto odio dignissimos ducimus  deleniti atque</td>
                      <td class=\"right\">1</td>
                      <td class=\"right\">\$1,200</td>
                      <td class=\"right\"><strong>\$1,2000</strong></td>
                    </tr>
                    <tr>
                      <td>Safari App</td>
                      <td>Rro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt u expedita distinctio</td>
                      <td class=\"right\">2</td>
                      <td class=\"right\">\$850</td>
                      <td class=\"right\"><strong>\$1,700</strong></td>
                    </tr>
                    <tr>
                      <td>Opera App</td>
                      <td>Orro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut</td>
                      <td class=\"right\">3</td>
                      <td class=\"right\">\$850</td>
                      <td class=\"right\"><strong>\$2,550</strong></td>
                    </tr>
                    <tr>
                      <td>Netscape Template</td>
                      <td>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</td>
                      <td class=\"right\">5</td>
                      <td class=\"right\">\$50</td>
                      <td class=\"right\"><strong>\$250</strong></td>
                    </tr>
                  </tbody>
                </table>
                <table class=\"table table-bordered table-invoice-full\">
                  <tbody>
                    <tr>
                      <td class=\"msg-invoice\" width=\"85%\"><h4>Payment method: </h4>
                        <a href=\"#\" class=\"tip-bottom\" title=\"Wire Transfer\">Wire transfer</a> |  <a href=\"#\" class=\"tip-bottom\" title=\"Bank account\">Bank account #</a> |  <a href=\"#\" class=\"tip-bottom\" title=\"SWIFT code\">SWIFT code </a>|  <a href=\"#\" class=\"tip-bottom\" title=\"IBAN Billing address\">IBAN Billing address </a></td>
                      <td class=\"right\"><strong>Subtotal</strong> <br>
                        <strong>Tax (5%)</strong> <br>
                        <strong>Discount</strong></td>
                      <td class=\"right\"><strong>\$7,000 <br>
                        \$600 <br>
                        \$50</strong></td>
                    </tr>
                  </tbody>
                </table>
                <div class=\"pull-right\">
                  <h4><span>Amount Due:</span> \$7,650.00</h4>
                  <br>
                  <button id=\"payInvoice\" class=\"btn btn-primary btn-large pull-right\">Pay Invoice</button> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>


  </div>
</div>

    <div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-file-text-o\"></i></span>
            <h5>All Files</h5>
            <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_new");
        echo "\"><i class=\"fa fa-plus-circle\"></i></a></div>
          </div>
          <div class=\"widget-content nopadding\">
            <table class=\"table table-bordered data-table\">
        <thead>
            <tr>
                  <th>Date</th>
                  <th>Client</th>
                  <th>Worker</th>
                  <th>Problem Description</th>
                  <th>Diagnocis</th>
                  <th>Solution</th>
                  <th>Repair Type</th>
                  <th>Cost</th>
                  <th>Status</th>
                  <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiches"]) ? $context["fiches"] : $this->getContext($context, "fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 182
            echo "            <tr>
                <td><a href=\"";
            // line 183
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_show", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fiche"], "datefiche", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "Client", array()), "prenomprop", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "Emp", array()), "prenomemp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "prestation", array()), "html", null, true);
            echo " </td>
                <td>";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "diagfiche", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "solutionfiche", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "typereparation", array()), "html", null, true);
            echo "</td>
                <td><button type=\"button\" id=\"cost\" class=\"btn btn-link\" data-toggle=\"modal\" data-target=\"#addFacture\">0,00 TND</button></td>
                <td><!-- Rounded switch -->
                  <div id=\"invoiceStatus1\" >
                  <input type=\"checkbox\" disabled data-toggle=\"toggle\" data-on=\"Paid\" data-off=\"Unpaid\" data-onstyle=\"success\" data-width=\"50\" data-height=\"25\" /> 
                  </div>
                </td>
                <td>
                <a class=\"btn btn-warning\" href=\"";
            // line 197
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_edit", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                <button class=\"btn btn-danger\" data-href=\"/delete.php?id=54\" data-toggle=\"modal\" data-target=\"#confirm-delete\">
                Delete </button>
                    <!-- <ul>
                        <li>
                            <a href=\"";
            // line 202
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_show", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 205
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_edit", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul> -->
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "        </tbody>
 </table>
          </div>
    </div>


    <ul>
        <li>
            <a href=\"";
        // line 219
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_new");
        echo "\">Create a new fiche</a>
        </li>
    </ul>
";
        
        $__internal_42288f70ac195bfce23c0277cd6ef12decead15c6e6fe60900dfe0b67cb369fb->leave($__internal_42288f70ac195bfce23c0277cd6ef12decead15c6e6fe60900dfe0b67cb369fb_prof);

        
        $__internal_eddd2822a555822795eac219277e70fa631d03482f04de433af98d5b643dbf12->leave($__internal_eddd2822a555822795eac219277e70fa631d03482f04de433af98d5b643dbf12_prof);

    }

    public function getTemplateName()
    {
        return "fiche/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 219,  302 => 211,  290 => 205,  284 => 202,  276 => 197,  265 => 189,  261 => 188,  257 => 187,  253 => 186,  249 => 185,  245 => 184,  239 => 183,  236 => 182,  232 => 181,  210 => 162,  49 => 3,  40 => 2,  11 => 1,);
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
                                            <!-- RECEPTIONNIST -->
<!-- Modal -->
<div id=\"addFacture\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Bill</h4>
                </div>
                <div class=\"modal-body\">
                


                        <div class=\"row-fluid\">
      <div class=\"span12\">
        <div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"> <i class=\"icon-briefcase\"></i> </span>
            <h5 >Company Name</h5>
          </div>
          <div class=\"widget-content\">
            <div class=\"row-fluid\">
              <div class=\"span6\">
                <table class=\"\">
                  <tbody>
                    <tr>
                      <td><h4>Your Company Name</h4></td>
                    </tr>
                    <tr>
                      <td>Your Town</td>
                    </tr>
                    <tr>
                      <td>Your Region/State</td>
                    </tr>
                    <tr>
                      <td>Mobile Phone: +4530422244</td>
                    </tr>
                    <tr>
                      <td >me@company.com</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class=\"span6\">
                <table class=\"table table-bordered table-invoice\">
                  <tbody>
                    <tr>
                    <tr>
                      <td class=\"width30\">Invoice ID:</td>
                      <td class=\"width70\"><strong>TD-6546</strong></td>
                    </tr>
                    <tr>
                      <td>Issue Date:</td>
                      <td><strong>March 23, 2013</strong></td>
                    </tr>
                    <tr>
                      <td>Due Date:</td>
                      <td><strong>April 01, 2013</strong></td>
                    </tr>
                  <td class=\"width30\">Client Address:</td>
                    <td class=\"width70\"><strong>Cliente Company name.</strong> <br>
                      501 Mafia Street., washington, <br>
                      NYNC 3654 <br>
                      Contact No: 123 456-7890 <br>
                      Email: youremail@companyname.com </td>
                  </tr>
                    </tbody>
                  
                </table>
              </div>
            </div>
            <div class=\"row-fluid\">
              <div class=\"span12\">
                <table class=\"table table-bordered table-invoice-full\">
                  <thead>
                    <tr>
                      <th class=\"head0\">Type</th>
                      <th class=\"head1\">Desc</th>
                      <th class=\"head0 right\">Qty</th>
                      <th class=\"head1 right\">Price</th>
                      <th class=\"head0 right\">Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Firefox</td>
                      <td>Ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae</td>
                      <td class=\"right\">2</td>
                      <td class=\"right\">\$150</td>
                      <td class=\"right\"><strong>\$300</strong></td>
                    </tr>
                    <tr>
                      <td>Chrome Plugin</td>
                      <td>Tro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt u eos et accusamus et iusto odio dignissimos ducimus  deleniti atque</td>
                      <td class=\"right\">1</td>
                      <td class=\"right\">\$1,200</td>
                      <td class=\"right\"><strong>\$1,2000</strong></td>
                    </tr>
                    <tr>
                      <td>Safari App</td>
                      <td>Rro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt u expedita distinctio</td>
                      <td class=\"right\">2</td>
                      <td class=\"right\">\$850</td>
                      <td class=\"right\"><strong>\$1,700</strong></td>
                    </tr>
                    <tr>
                      <td>Opera App</td>
                      <td>Orro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut</td>
                      <td class=\"right\">3</td>
                      <td class=\"right\">\$850</td>
                      <td class=\"right\"><strong>\$2,550</strong></td>
                    </tr>
                    <tr>
                      <td>Netscape Template</td>
                      <td>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</td>
                      <td class=\"right\">5</td>
                      <td class=\"right\">\$50</td>
                      <td class=\"right\"><strong>\$250</strong></td>
                    </tr>
                  </tbody>
                </table>
                <table class=\"table table-bordered table-invoice-full\">
                  <tbody>
                    <tr>
                      <td class=\"msg-invoice\" width=\"85%\"><h4>Payment method: </h4>
                        <a href=\"#\" class=\"tip-bottom\" title=\"Wire Transfer\">Wire transfer</a> |  <a href=\"#\" class=\"tip-bottom\" title=\"Bank account\">Bank account #</a> |  <a href=\"#\" class=\"tip-bottom\" title=\"SWIFT code\">SWIFT code </a>|  <a href=\"#\" class=\"tip-bottom\" title=\"IBAN Billing address\">IBAN Billing address </a></td>
                      <td class=\"right\"><strong>Subtotal</strong> <br>
                        <strong>Tax (5%)</strong> <br>
                        <strong>Discount</strong></td>
                      <td class=\"right\"><strong>\$7,000 <br>
                        \$600 <br>
                        \$50</strong></td>
                    </tr>
                  </tbody>
                </table>
                <div class=\"pull-right\">
                  <h4><span>Amount Due:</span> \$7,650.00</h4>
                  <br>
                  <button id=\"payInvoice\" class=\"btn btn-primary btn-large pull-right\">Pay Invoice</button> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>


  </div>
</div>

    <div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-file-text-o\"></i></span>
            <h5>All Files</h5>
            <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"{{ path('fiche_new') }}\"><i class=\"fa fa-plus-circle\"></i></a></div>
          </div>
          <div class=\"widget-content nopadding\">
            <table class=\"table table-bordered data-table\">
        <thead>
            <tr>
                  <th>Date</th>
                  <th>Client</th>
                  <th>Worker</th>
                  <th>Problem Description</th>
                  <th>Diagnocis</th>
                  <th>Solution</th>
                  <th>Repair Type</th>
                  <th>Cost</th>
                  <th>Status</th>
                  <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for fiche in fiches %}
            <tr>
                <td><a href=\"{{ path('fiche_show', { 'id': fiche.id }) }}\">{{ fiche.datefiche|date('Y-m-d H:i:s') }}</a></td>
                <td>{{ fiche.Client.prenomprop }}</td>
                <td>{{ fiche.Emp.prenomemp }}</td>
                <td>{{ fiche.prestation }} </td>
                <td>{{ fiche.diagfiche }}</td>
                <td>{{ fiche.solutionfiche }}</td>
                <td>{{ fiche.typereparation }}</td>
                <td><button type=\"button\" id=\"cost\" class=\"btn btn-link\" data-toggle=\"modal\" data-target=\"#addFacture\">0,00 TND</button></td>
                <td><!-- Rounded switch -->
                  <div id=\"invoiceStatus1\" >
                  <input type=\"checkbox\" disabled data-toggle=\"toggle\" data-on=\"Paid\" data-off=\"Unpaid\" data-onstyle=\"success\" data-width=\"50\" data-height=\"25\" /> 
                  </div>
                </td>
                <td>
                <a class=\"btn btn-warning\" href=\"{{ path('fiche_edit', { 'id': fiche.id }) }}\">Edit</a>
                <button class=\"btn btn-danger\" data-href=\"/delete.php?id=54\" data-toggle=\"modal\" data-target=\"#confirm-delete\">
                Delete </button>
                    <!-- <ul>
                        <li>
                            <a href=\"{{ path('fiche_show', { 'id': fiche.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('fiche_edit', { 'id': fiche.id }) }}\">edit</a>
                        </li>
                    </ul> -->
                </td>
            </tr>
        {% endfor %}
        </tbody>
 </table>
          </div>
    </div>


    <ul>
        <li>
            <a href=\"{{ path('fiche_new') }}\">Create a new fiche</a>
        </li>
    </ul>
{% endblock %}
", "fiche/index.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\fiche\\index.html.twig");
    }
}
