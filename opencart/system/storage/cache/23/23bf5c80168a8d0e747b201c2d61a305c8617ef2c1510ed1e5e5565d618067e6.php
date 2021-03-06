<?php

/* extension/extension/payment.twig */
class __TwigTemplate_8796f621912c47937d2ed63fdeb38f3cbb2d512052fae92d470c49cd213e8d1c extends Twig_Template
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
        // line 1
        echo (isset($context["promotion"]) ? $context["promotion"] : null);
        echo "
<fieldset>";
        // line 3
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 4
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>";
        }
        // line 8
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 9
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i>";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>";
        }
        // line 13
        echo "  <legend>";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</legend>
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-left\">";
        // line 18
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
          <td></td>
          <td class=\"text-left\">";
        // line 20
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</td>
          <td class=\"text-right\">";
        // line 21
        echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
        echo "</td>
          <td class=\"text-right\">";
        // line 22
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
        </tr>
      </thead>
      <tbody>";
        // line 26
        if ((isset($context["extensions"]) ? $context["extensions"] : null)) {
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 28
                echo "            <tr>
              <td class=\"text-left\">";
                // line 29
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</td>
              <td class=\"text-center\">";
                // line 30
                echo $this->getAttribute($context["extension"], "link", array());
                echo "</td>
              <td class=\"text-left\">";
                // line 31
                echo $this->getAttribute($context["extension"], "status", array());
                echo "</td>
              <td class=\"text-right\">";
                // line 32
                echo $this->getAttribute($context["extension"], "sort_order", array());
                echo "</td>
              <td class=\"text-right\">";
                // line 33
                if ($this->getAttribute($context["extension"], "installed", array())) {
                    // line 34
                    echo "                  <a href=\"";
                    echo $this->getAttribute($context["extension"], "edit", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>";
                } else {
                    // line 36
                    echo "                  <button type=\"button\" class=\"btn btn-primary\" disabled=\"disabled\"><i class=\"fa fa-pencil\"></i></button>";
                }
                // line 38
                if ( !$this->getAttribute($context["extension"], "installed", array())) {
                    // line 39
                    echo "                  <a href=\"";
                    echo $this->getAttribute($context["extension"], "install", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_install"]) ? $context["button_install"] : null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a>";
                } else {
                    // line 41
                    echo "                  <a href=\"";
                    echo $this->getAttribute($context["extension"], "uninstall", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_uninstall"]) ? $context["button_uninstall"] : null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>";
                }
                // line 42
                echo "</td>
            </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 46
            echo "          <tr>
            <td class=\"text-center\" colspan=\"5\">";
            // line 47
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
          </tr>";
        }
        // line 50
        echo "      </tbody>
    </table>
  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "extension/extension/payment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 50,  133 => 47,  130 => 46,  122 => 42,  115 => 41,  108 => 39,  106 => 38,  103 => 36,  96 => 34,  94 => 33,  90 => 32,  86 => 31,  82 => 30,  78 => 29,  75 => 28,  71 => 27,  69 => 26,  63 => 22,  59 => 21,  55 => 20,  50 => 18,  41 => 13,  34 => 9,  32 => 8,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* {{ promotion }}*/
/* <fieldset>*/
/*   {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*   {% endif %}*/
/*   <legend>{{ heading_title }}</legend>*/
/*   <div class="table-responsive">*/
/*     <table class="table table-bordered table-hover">*/
/*       <thead>*/
/*         <tr>*/
/*           <td class="text-left">{{ column_name }}</td>*/
/*           <td></td>*/
/*           <td class="text-left">{{ column_status }}</td>*/
/*           <td class="text-right">{{ column_sort_order }}</td>*/
/*           <td class="text-right">{{ column_action }}</td>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         {% if extensions %}*/
/*           {% for extension in extensions %}*/
/*             <tr>*/
/*               <td class="text-left">{{ extension.name }}</td>*/
/*               <td class="text-center">{{ extension.link }}</td>*/
/*               <td class="text-left">{{ extension.status }}</td>*/
/*               <td class="text-right">{{ extension.sort_order }}</td>*/
/*               <td class="text-right">{% if extension.installed %}*/
/*                   <a href="{{ extension.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                 {% else %}*/
/*                   <button type="button" class="btn btn-primary" disabled="disabled"><i class="fa fa-pencil"></i></button>*/
/*                 {% endif %}*/
/*                 {% if not extension.installed %}*/
/*                   <a href="{{ extension.install }}" data-toggle="tooltip" title="{{ button_install }}" class="btn btn-success"><i class="fa fa-plus-circle"></i></a>*/
/*                 {% else %}*/
/*                   <a href="{{ extension.uninstall }}" data-toggle="tooltip" title="{{ button_uninstall }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>*/
/*                 {% endif %}</td>*/
/*             </tr>*/
/*           {% endfor %}*/
/*         {% else %}*/
/*           <tr>*/
/*             <td class="text-center" colspan="5">{{ text_no_results }}</td>*/
/*           </tr>*/
/*         {% endif %}*/
/*       </tbody>*/
/*     </table>*/
/*   </div>*/
/* </fieldset>*/
/* */
