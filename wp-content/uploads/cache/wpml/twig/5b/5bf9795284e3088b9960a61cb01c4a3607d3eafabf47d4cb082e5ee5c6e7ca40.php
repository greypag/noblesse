<?php

/* edit-base.twig */
class __TwigTemplate_dfdbdf26b7848f2bcb9c1d8d124590caa08da30020ffd494a75a99668d8339da extends Twig_Template
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
        echo "<div class=\"wcml-dialog hidden\" id=\"wcml-edit-base-slug-";
        echo twig_escape_filter($this->env, (isset($context["original_base"]) ? $context["original_base"] : null));
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["language"]) ? $context["language"] : null));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "label_name", array()), "html", null, true);
        echo "\">
    <form class=\"wcml-slug-dialog\" >

        <h3 class=\"wpml-header-original\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "orig", array()), "html", null, true);
        echo ":
\t\t\t\t<span class=\"wpml-title-flag\">
\t\t\t\t\t<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["orig_flag_url"]) ? $context["orig_flag_url"] : null), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["orig_display_name"]) ? $context["orig_display_name"] : null));
        echo "\"/>
\t\t\t\t</span>
            <strong>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["orig_display_name"]) ? $context["orig_display_name"] : null), "html", null, true);
        echo "</strong>
        </h3>

        <h3 class=\"wpml-header-translation\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "trnsl_to", array()), "html", null, true);
        echo ":
\t\t\t\t<span class=\"wpml-title-flag\">
\t\t\t\t\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["trnsl_flag_url"]) ? $context["trnsl_flag_url"] : null), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["trnsl_display_name"]) ? $context["trnsl_display_name"] : null));
        echo "\"/>
\t\t\t\t</span>
            <strong>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["trnsl_display_name"]) ? $context["trnsl_display_name"] : null), "html", null, true);
        echo "</strong>
        </h3>

        <div class=\"wpml-form-row\">
            <input readonly id=\"base-original\" class=\"original_value\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "original_base_value", array()), "html", null, true);
        echo "\"
                   type=\"text\">

            <input id=\"base-translation\"
                   class=\"translated_value\"
                   name=\"base_translation\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "translated_base_value", array()), "html", null, true);
        echo "\" type=\"text\"/>
        </div>

        <footer class=\"wpml-dialog-footer\">
            <input type=\"button\" class=\"cancel wcml-dialog-close-button wpml-dialog-close-button wcml_cancel_base alignleft\"
                   value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "cancel", array()));
        echo "\" />
            <input type=\"submit\" class=\"wcml-dialog-close-button wpml-dialog-close-button button-primary wcml_save_base alignright\"
                   value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "save", array()));
        echo "\" data-base=\"";
        echo twig_escape_filter($this->env, (isset($context["original_base"]) ? $context["original_base"] : null));
        echo "\" data-language=\"";
        echo twig_escape_filter($this->env, (isset($context["language"]) ? $context["language"] : null));
        echo "\"/>
        </footer>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "edit-base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 31,  83 => 29,  75 => 24,  67 => 19,  60 => 15,  53 => 13,  48 => 11,  42 => 8,  35 => 6,  30 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"wcml-dialog hidden\" id=\"wcml-edit-base-slug-{{ original_base|e }}-{{ language|e }}\" title=\"{{ data.label_name }}\">
    <form class=\"wcml-slug-dialog\" >

        <h3 class=\"wpml-header-original\">{{ strings.orig }}:
\t\t\t\t<span class=\"wpml-title-flag\">
\t\t\t\t\t<img src=\"{{ orig_flag_url }}\" alt=\"{{ orig_display_name|e }}\"/>
\t\t\t\t</span>
            <strong>{{ orig_display_name }}</strong>
        </h3>

        <h3 class=\"wpml-header-translation\">{{ strings.trnsl_to }}:
\t\t\t\t<span class=\"wpml-title-flag\">
\t\t\t\t\t<img src=\"{{ trnsl_flag_url }}\" alt=\"{{ trnsl_display_name|e }}\"/>
\t\t\t\t</span>
            <strong>{{ trnsl_display_name }}</strong>
        </h3>

        <div class=\"wpml-form-row\">
            <input readonly id=\"base-original\" class=\"original_value\" value=\"{{ data.original_base_value }}\"
                   type=\"text\">

            <input id=\"base-translation\"
                   class=\"translated_value\"
                   name=\"base_translation\" value=\"{{ data.translated_base_value }}\" type=\"text\"/>
        </div>

        <footer class=\"wpml-dialog-footer\">
            <input type=\"button\" class=\"cancel wcml-dialog-close-button wpml-dialog-close-button wcml_cancel_base alignleft\"
                   value=\"{{ strings.cancel|e }}\" />
            <input type=\"submit\" class=\"wcml-dialog-close-button wpml-dialog-close-button button-primary wcml_save_base alignright\"
                   value=\"{{ strings.save|e }}\" data-base=\"{{ original_base|e }}\" data-language=\"{{ language|e }}\"/>
        </footer>
    </form>
</div>", "edit-base.twig", "/var/www/html/noblesse/wp-content/plugins/woocommerce-multilingual/templates/store-urls/edit-base.twig");
    }
}
