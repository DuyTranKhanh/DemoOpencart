<?php

/* marketing/coupon_form.twig */
class __TwigTemplate_2786d5b807e97b04f79e11fb0920073827183fce39ae8f1cad0a508046975d1e extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-coupon\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>";
        // line 23
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-coupon\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>";
        // line 29
        if ((isset($context["coupon_id"]) ? $context["coupon_id"] : null)) {
            // line 30
            echo "            <li><a href=\"#tab-history\" data-toggle=\"tab\">";
            echo (isset($context["tab_history"]) ? $context["tab_history"] : null);
            echo "</a></li>";
        }
        // line 32
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 36
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"name\" value=\"";
        // line 38
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />";
        // line 39
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 40
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>";
        }
        // line 41
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-code\"><span data-toggle=\"tooltip\" title=\"";
        // line 44
        echo (isset($context["help_code"]) ? $context["help_code"] : null);
        echo "\">";
        echo (isset($context["entry_code"]) ? $context["entry_code"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"code\" value=\"";
        // line 46
        echo (isset($context["code"]) ? $context["code"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_code"]) ? $context["entry_code"] : null);
        echo "\" id=\"input-code\" class=\"form-control\" />";
        // line 47
        if ((isset($context["error_code"]) ? $context["error_code"] : null)) {
            // line 48
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_code"]) ? $context["error_code"] : null);
            echo "</div>";
        }
        // line 49
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-type\"><span data-toggle=\"tooltip\" title=\"";
        // line 52
        echo (isset($context["help_type"]) ? $context["help_type"] : null);
        echo "\">";
        echo (isset($context["entry_type"]) ? $context["entry_type"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"type\" id=\"input-type\" class=\"form-control\">";
        // line 56
        if (((isset($context["type"]) ? $context["type"] : null) == "P")) {
            // line 57
            echo "                    
                    <option value=\"P\" selected=\"selected\">";
            // line 58
            echo (isset($context["text_percent"]) ? $context["text_percent"] : null);
            echo "</option>";
        } else {
            // line 61
            echo "                    
                    <option value=\"P\">";
            // line 62
            echo (isset($context["text_percent"]) ? $context["text_percent"] : null);
            echo "</option>";
        }
        // line 65
        if (((isset($context["type"]) ? $context["type"] : null) == "F")) {
            // line 66
            echo "                    
                    <option value=\"F\" selected=\"selected\">";
            // line 67
            echo (isset($context["text_amount"]) ? $context["text_amount"] : null);
            echo "</option>";
        } else {
            // line 70
            echo "                    
                    <option value=\"F\">";
            // line 71
            echo (isset($context["text_amount"]) ? $context["text_amount"] : null);
            echo "</option>";
        }
        // line 74
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-discount\">";
        // line 79
        echo (isset($context["entry_discount"]) ? $context["entry_discount"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"discount\" value=\"";
        // line 81
        echo (isset($context["discount"]) ? $context["discount"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_discount"]) ? $context["entry_discount"] : null);
        echo "\" id=\"input-discount\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 85
        echo (isset($context["help_total"]) ? $context["help_total"] : null);
        echo "\">";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"total\" value=\"";
        // line 87
        echo (isset($context["total"]) ? $context["total"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "\" id=\"input-total\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 91
        echo (isset($context["help_logged"]) ? $context["help_logged"] : null);
        echo "\">";
        echo (isset($context["entry_logged"]) ? $context["entry_logged"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">";
        // line 93
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 94
            echo "                    <input type=\"radio\" name=\"logged\" value=\"1\" checked=\"checked\" />";
            // line 95
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 97
            echo "                    <input type=\"radio\" name=\"logged\" value=\"1\" />";
            // line 98
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 99
        echo " </label>
                  <label class=\"radio-inline\">";
        // line 100
        if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
            // line 101
            echo "                    <input type=\"radio\" name=\"logged\" value=\"0\" checked=\"checked\" />";
            // line 102
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 104
            echo "                    <input type=\"radio\" name=\"logged\" value=\"0\" />";
            // line 105
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 106
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 110
        echo (isset($context["entry_shipping"]) ? $context["entry_shipping"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">";
        // line 112
        if ((isset($context["shipping"]) ? $context["shipping"] : null)) {
            // line 113
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\" />";
            // line 114
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 116
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"1\" />";
            // line 117
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 118
        echo " </label>
                  <label class=\"radio-inline\">";
        // line 119
        if ( !(isset($context["shipping"]) ? $context["shipping"] : null)) {
            // line 120
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\" />";
            // line 121
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 123
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"0\" />";
            // line 124
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 125
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 129
        echo (isset($context["help_product"]) ? $context["help_product"] : null);
        echo "\">";
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 131
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                  <div id=\"coupon-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coupon_product"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_product"]) {
            // line 133
            echo "                    <div id=\"coupon-product";
            echo $this->getAttribute($context["coupon_product"], "product_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i>";
            echo $this->getAttribute($context["coupon_product"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"coupon_product[]\" value=\"";
            // line 134
            echo $this->getAttribute($context["coupon_product"], "product_id", array());
            echo "\" />
                    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo " </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 140
        echo (isset($context["help_category"]) ? $context["help_category"] : null);
        echo "\">";
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 142
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "\" id=\"input-category\" class=\"form-control\" />
                  <div id=\"coupon-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coupon_category"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_category"]) {
            // line 144
            echo "                    <div id=\"coupon-category";
            echo $this->getAttribute($context["coupon_category"], "category_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i>";
            echo $this->getAttribute($context["coupon_category"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"coupon_category[]\" value=\"";
            // line 145
            echo $this->getAttribute($context["coupon_category"], "category_id", array());
            echo "\" />
                    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo " </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-start\">";
        // line 151
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_start\" value=\"";
        // line 154
        echo (isset($context["date_start"]) ? $context["date_start"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-start\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-end\">";
        // line 161
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_end\" value=\"";
        // line 164
        echo (isset($context["date_end"]) ? $context["date_end"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-end\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-uses-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 171
        echo (isset($context["help_uses_total"]) ? $context["help_uses_total"] : null);
        echo "\">";
        echo (isset($context["entry_uses_total"]) ? $context["entry_uses_total"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"uses_total\" value=\"";
        // line 173
        echo (isset($context["uses_total"]) ? $context["uses_total"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_uses_total"]) ? $context["entry_uses_total"] : null);
        echo "\" id=\"input-uses-total\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-uses-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 177
        echo (isset($context["help_uses_customer"]) ? $context["help_uses_customer"] : null);
        echo "\">";
        echo (isset($context["entry_uses_customer"]) ? $context["entry_uses_customer"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"uses_customer\" value=\"";
        // line 179
        echo (isset($context["uses_customer"]) ? $context["uses_customer"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_uses_customer"]) ? $context["entry_uses_customer"] : null);
        echo "\" id=\"input-uses-customer\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 183
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">";
        // line 187
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 188
            echo "                    
                    <option value=\"1\" selected=\"selected\">";
            // line 189
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 190
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>";
        } else {
            // line 193
            echo "                    
                    <option value=\"1\">";
            // line 194
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 195
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>";
        }
        // line 198
        echo "                  
                  </select>
                </div>
              </div>
            </div>";
        // line 203
        if ((isset($context["coupon_id"]) ? $context["coupon_id"] : null)) {
            // line 204
            echo "            <div class=\"tab-pane\" id=\"tab-history\">
              <fieldset>
                <legend>";
            // line 206
            echo (isset($context["text_coupon"]) ? $context["text_coupon"] : null);
            echo "</legend>
                <div id=\"history\"></div>
              </fieldset>
            </div>";
        }
        // line 210
        echo " </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('input[name=\\'product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 219
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'product\\']').val('');
\t\t
\t\t\$('#coupon-product' + item['value']).remove();
\t\t
\t\t\$('#coupon-product').append('<div id=\"coupon-product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"coupon_product[]\" value=\"' + item['value'] + '\" /></div>');\t
\t}
});

\$('#coupon-product').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Category
\$('input[name=\\'category\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 248
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'category\\']').val('');
\t\t
\t\t\$('#coupon-category' + item['value']).remove();
\t\t
\t\t\$('#coupon-category').append('<div id=\"coupon-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"coupon_category[]\" value=\"' + item['value'] + '\" /></div>');
\t}\t
});

\$('#coupon-category').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script>";
        // line 273
        if ((isset($context["coupon_id"]) ? $context["coupon_id"] : null)) {
            echo " 
  <script type=\"text/javascript\"><!--
\$('#history').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();
\t
\t\$('#history').load(this.href);
});\t\t\t

\$('#history').load('index.php?route=marketing/coupon/history&user_token=";
            // line 281
            echo (isset($context["user_token"]) ? $context["user_token"] : null);
            echo "&coupon_id=";
            echo (isset($context["coupon_id"]) ? $context["coupon_id"] : null);
            echo "');
//--></script>";
        }
        // line 283
        echo " 
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 286
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});
//--></script></div>";
        // line 290
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "marketing/coupon_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  588 => 290,  582 => 286,  577 => 283,  570 => 281,  559 => 273,  532 => 248,  500 => 219,  489 => 210,  482 => 206,  478 => 204,  476 => 203,  470 => 198,  466 => 195,  462 => 194,  459 => 193,  455 => 190,  451 => 189,  448 => 188,  446 => 187,  441 => 183,  432 => 179,  425 => 177,  416 => 173,  409 => 171,  397 => 164,  391 => 161,  379 => 154,  373 => 151,  367 => 147,  359 => 145,  352 => 144,  348 => 143,  344 => 142,  337 => 140,  331 => 136,  323 => 134,  316 => 133,  312 => 132,  308 => 131,  301 => 129,  295 => 125,  292 => 124,  290 => 123,  287 => 121,  285 => 120,  283 => 119,  280 => 118,  277 => 117,  275 => 116,  272 => 114,  270 => 113,  268 => 112,  263 => 110,  257 => 106,  254 => 105,  252 => 104,  249 => 102,  247 => 101,  245 => 100,  242 => 99,  239 => 98,  237 => 97,  234 => 95,  232 => 94,  230 => 93,  223 => 91,  214 => 87,  207 => 85,  198 => 81,  193 => 79,  186 => 74,  182 => 71,  179 => 70,  175 => 67,  172 => 66,  170 => 65,  166 => 62,  163 => 61,  159 => 58,  156 => 57,  154 => 56,  147 => 52,  142 => 49,  137 => 48,  135 => 47,  130 => 46,  123 => 44,  118 => 41,  113 => 40,  111 => 39,  106 => 38,  101 => 36,  95 => 32,  90 => 30,  88 => 29,  85 => 28,  80 => 26,  74 => 23,  70 => 21,  63 => 17,  61 => 16,  56 => 13,  46 => 11,  42 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-coupon" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid"> {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-coupon" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             {% if coupon_id %}*/
/*             <li><a href="#tab-history" data-toggle="tab">{{ tab_history }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*                   {% if error_name %}*/
/*                   <div class="text-danger">{{ error_name }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-code"><span data-toggle="tooltip" title="{{ help_code }}">{{ entry_code }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="code" value="{{ code }}" placeholder="{{ entry_code }}" id="input-code" class="form-control" />*/
/*                   {% if error_code %}*/
/*                   <div class="text-danger">{{ error_code }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-type"><span data-toggle="tooltip" title="{{ help_type }}">{{ entry_type }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="type" id="input-type" class="form-control">*/
/*                     */
/*                     {% if type == 'P' %}*/
/*                     */
/*                     <option value="P" selected="selected">{{ text_percent }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="P">{{ text_percent }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% if type == 'F' %}*/
/*                     */
/*                     <option value="F" selected="selected">{{ text_amount }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="F">{{ text_amount }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-discount">{{ entry_discount }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="discount" value="{{ discount }}" placeholder="{{ entry_discount }}" id="input-discount" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-total"><span data-toggle="tooltip" title="{{ help_total }}">{{ entry_total }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="total" value="{{ total }}" placeholder="{{ entry_total }}" id="input-total" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_logged }}">{{ entry_logged }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <label class="radio-inline"> {% if logged %}*/
/*                     <input type="radio" name="logged" value="1" checked="checked" />*/
/*                     {{ text_yes }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="logged" value="1" />*/
/*                     {{ text_yes }}*/
/*                     {% endif %} </label>*/
/*                   <label class="radio-inline"> {% if not logged %}*/
/*                     <input type="radio" name="logged" value="0" checked="checked" />*/
/*                     {{ text_no }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="logged" value="0" />*/
/*                     {{ text_no }}*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{ entry_shipping }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <label class="radio-inline"> {% if shipping %}*/
/*                     <input type="radio" name="shipping" value="1" checked="checked" />*/
/*                     {{ text_yes }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="shipping" value="1" />*/
/*                     {{ text_yes }}*/
/*                     {% endif %} </label>*/
/*                   <label class="radio-inline"> {% if not shipping %}*/
/*                     <input type="radio" name="shipping" value="0" checked="checked" />*/
/*                     {{ text_no }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="shipping" value="0" />*/
/*                     {{ text_no }}*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-product"><span data-toggle="tooltip" title="{{ help_product }}">{{ entry_product }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="product" value="" placeholder="{{ entry_product }}" id="input-product" class="form-control" />*/
/*                   <div id="coupon-product" class="well well-sm" style="height: 150px; overflow: auto;"> {% for coupon_product in coupon_product %}*/
/*                     <div id="coupon-product{{ coupon_product.product_id }}"><i class="fa fa-minus-circle"></i> {{ coupon_product.name }}*/
/*                       <input type="hidden" name="coupon_product[]" value="{{ coupon_product.product_id }}" />*/
/*                     </div>*/
/*                     {% endfor %} </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-category"><span data-toggle="tooltip" title="{{ help_category }}">{{ entry_category }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="category" value="" placeholder="{{ entry_category }}" id="input-category" class="form-control" />*/
/*                   <div id="coupon-category" class="well well-sm" style="height: 150px; overflow: auto;"> {% for coupon_category in coupon_category %}*/
/*                     <div id="coupon-category{{ coupon_category.category_id }}"><i class="fa fa-minus-circle"></i> {{ coupon_category.name }}*/
/*                       <input type="hidden" name="coupon_category[]" value="{{ coupon_category.category_id }}" />*/
/*                     </div>*/
/*                     {% endfor %} </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-date-start">{{ entry_date_start }}</label>*/
/*                 <div class="col-sm-3">*/
/*                   <div class="input-group date">*/
/*                     <input type="text" name="date_start" value="{{ date_start }}" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" id="input-date-start" class="form-control" />*/
/*                     <span class="input-group-btn">*/
/*                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                     </span></div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-date-end">{{ entry_date_end }}</label>*/
/*                 <div class="col-sm-3">*/
/*                   <div class="input-group date">*/
/*                     <input type="text" name="date_end" value="{{ date_end }}" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" id="input-date-end" class="form-control" />*/
/*                     <span class="input-group-btn">*/
/*                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                     </span></div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-uses-total"><span data-toggle="tooltip" title="{{ help_uses_total }}">{{ entry_uses_total }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="uses_total" value="{{ uses_total }}" placeholder="{{ entry_uses_total }}" id="input-uses-total" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-uses-customer"><span data-toggle="tooltip" title="{{ help_uses_customer }}">{{ entry_uses_customer }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="uses_customer" value="{{ uses_customer }}" placeholder="{{ entry_uses_customer }}" id="input-uses-customer" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="status" id="input-status" class="form-control">*/
/*                     */
/*                     {% if status %}*/
/*                     */
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             {% if coupon_id %}*/
/*             <div class="tab-pane" id="tab-history">*/
/*               <fieldset>*/
/*                 <legend>{{ text_coupon }}</legend>*/
/*                 <div id="history"></div>*/
/*               </fieldset>*/
/*             </div>*/
/*             {% endif %} </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('input[name=\'product\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',			*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['product_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'product\']').val('');*/
/* 		*/
/* 		$('#coupon-product' + item['value']).remove();*/
/* 		*/
/* 		$('#coupon-product').append('<div id="coupon-product' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="coupon_product[]" value="' + item['value'] + '" /></div>');	*/
/* 	}*/
/* });*/
/* */
/* $('#coupon-product').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* */
/* // Category*/
/* $('input[name=\'category\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/category/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['category_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'category\']').val('');*/
/* 		*/
/* 		$('#coupon-category' + item['value']).remove();*/
/* 		*/
/* 		$('#coupon-category').append('<div id="coupon-category' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="coupon_category[]" value="' + item['value'] + '" /></div>');*/
/* 	}	*/
/* });*/
/* */
/* $('#coupon-category').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* //--></script> */
/*   {% if coupon_id %} */
/*   <script type="text/javascript"><!--*/
/* $('#history').delegate('.pagination a', 'click', function(e) {*/
/* 	e.preventDefault();*/
/* 	*/
/* 	$('#history').load(this.href);*/
/* });			*/
/* */
/* $('#history').load('index.php?route=marketing/coupon/history&user_token={{ user_token }}&coupon_id={{ coupon_id }}');*/
/* //--></script> */
/*   {% endif %} */
/*   <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* //--></script></div>*/
/* {{ footer }}*/
