<?php

/* @App/Form/fields.html.twig */
class __TwigTemplate_3d1bdfe2d782e98738152c98515a592f67fb3cfa4eddb54b859b0ab22fc0c6c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caad826e02fae2fc612841c1fa541b35a52da486d981b188e168ad3271b1d8c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caad826e02fae2fc612841c1fa541b35a52da486d981b188e168ad3271b1d8c2->enter($__internal_caad826e02fae2fc612841c1fa541b35a52da486d981b188e168ad3271b1d8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Form/fields.html.twig"));

        $__internal_fb72104bd27023dd03ddb7453dd45eca690e1278058e7a002ed929fa9ec4c129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb72104bd27023dd03ddb7453dd45eca690e1278058e7a002ed929fa9ec4c129->enter($__internal_fb72104bd27023dd03ddb7453dd45eca690e1278058e7a002ed929fa9ec4c129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 8
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 30
        $this->displayBlock('form_label', $context, $blocks);
        
        $__internal_caad826e02fae2fc612841c1fa541b35a52da486d981b188e168ad3271b1d8c2->leave($__internal_caad826e02fae2fc612841c1fa541b35a52da486d981b188e168ad3271b1d8c2_prof);

        
        $__internal_fb72104bd27023dd03ddb7453dd45eca690e1278058e7a002ed929fa9ec4c129->leave($__internal_fb72104bd27023dd03ddb7453dd45eca690e1278058e7a002ed929fa9ec4c129_prof);

    }

    // line 1
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_cb68de6dbd9b1c7595725cfd941597a47c6b6253c5dd4c9b342963412da97193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb68de6dbd9b1c7595725cfd941597a47c6b6253c5dd4c9b342963412da97193->enter($__internal_cb68de6dbd9b1c7595725cfd941597a47c6b6253c5dd4c9b342963412da97193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_80ae488d3ad90fa263a1cbd78312f9e5a2ab637a53ad2908f73a0d792990de19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ae488d3ad90fa263a1cbd78312f9e5a2ab637a53ad2908f73a0d792990de19->enter($__internal_80ae488d3ad90fa263a1cbd78312f9e5a2ab637a53ad2908f73a0d792990de19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 2
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 3
        echo "    <div class=\"col-sm-10\">
        <input type=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo " class=\"input-wrapper\"/>
    </div>
";
        
        $__internal_80ae488d3ad90fa263a1cbd78312f9e5a2ab637a53ad2908f73a0d792990de19->leave($__internal_80ae488d3ad90fa263a1cbd78312f9e5a2ab637a53ad2908f73a0d792990de19_prof);

        
        $__internal_cb68de6dbd9b1c7595725cfd941597a47c6b6253c5dd4c9b342963412da97193->leave($__internal_cb68de6dbd9b1c7595725cfd941597a47c6b6253c5dd4c9b342963412da97193_prof);

    }

    // line 8
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_0721f594c14bc682d3a0d38d6a779d253447e4560846ba58fb5c3f945dfd6481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0721f594c14bc682d3a0d38d6a779d253447e4560846ba58fb5c3f945dfd6481->enter($__internal_0721f594c14bc682d3a0d38d6a779d253447e4560846ba58fb5c3f945dfd6481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_43e9658e486efe9dd5d3ddfa7f70cb170cef3b73aa3751e351f33333b6b059b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e9658e486efe9dd5d3ddfa7f70cb170cef3b73aa3751e351f33333b6b059b4->enter($__internal_43e9658e486efe9dd5d3ddfa7f70cb170cef3b73aa3751e351f33333b6b059b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 9
        if ((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 10
            $context["required"] = false;
        }
        // line 12
        echo "<div>
        <select class=\"input-wrapper\"";
        // line 13
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 14
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 15
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 17
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 18
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 19
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 20
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 21
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 24
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 25
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 26
        echo "</select>
    </div>";
        
        $__internal_43e9658e486efe9dd5d3ddfa7f70cb170cef3b73aa3751e351f33333b6b059b4->leave($__internal_43e9658e486efe9dd5d3ddfa7f70cb170cef3b73aa3751e351f33333b6b059b4_prof);

        
        $__internal_0721f594c14bc682d3a0d38d6a779d253447e4560846ba58fb5c3f945dfd6481->leave($__internal_0721f594c14bc682d3a0d38d6a779d253447e4560846ba58fb5c3f945dfd6481_prof);

    }

    // line 30
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_3a9850a115b195540c47850e2bbddd2f8117d568faef44eb7c99c01538996ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a9850a115b195540c47850e2bbddd2f8117d568faef44eb7c99c01538996ceb->enter($__internal_3a9850a115b195540c47850e2bbddd2f8117d568faef44eb7c99c01538996ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_262113f40c575f103c33fafb3ff5270f3e90499f873ca2bd2423faab5e62ac8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262113f40c575f103c33fafb3ff5270f3e90499f873ca2bd2423faab5e62ac8b->enter($__internal_262113f40c575f103c33fafb3ff5270f3e90499f873ca2bd2423faab5e62ac8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 31
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 32
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 33
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 35
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 36
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 38
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 39
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 40
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 41
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 42
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 45
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 48
            echo "<label class=\"col-sm-2 control-label\"";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_262113f40c575f103c33fafb3ff5270f3e90499f873ca2bd2423faab5e62ac8b->leave($__internal_262113f40c575f103c33fafb3ff5270f3e90499f873ca2bd2423faab5e62ac8b_prof);

        
        $__internal_3a9850a115b195540c47850e2bbddd2f8117d568faef44eb7c99c01538996ceb->leave($__internal_3a9850a115b195540c47850e2bbddd2f8117d568faef44eb7c99c01538996ceb_prof);

    }

    public function getTemplateName()
    {
        return "@App/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  175 => 48,  171 => 45,  168 => 42,  167 => 41,  166 => 40,  164 => 39,  162 => 38,  159 => 36,  157 => 35,  154 => 33,  152 => 32,  150 => 31,  141 => 30,  130 => 26,  128 => 25,  126 => 24,  120 => 21,  118 => 20,  116 => 19,  114 => 18,  112 => 17,  103 => 15,  101 => 14,  95 => 13,  92 => 12,  89 => 10,  87 => 9,  78 => 8,  57 => 4,  54 => 3,  51 => 2,  42 => 1,  32 => 30,  30 => 8,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block form_widget_simple %}
    {% set type = type|default('text') %}
    <div class=\"col-sm-10\">
        <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %} class=\"input-wrapper\"/>
    </div>
{% endblock form_widget_simple %}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <div>
        <select class=\"input-wrapper\"{{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
            {%- if placeholder is not none -%}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
            {%- endif -%}
            {%- if preferred_choices|length > 0 -%}
                {% set options = preferred_choices %}
                {{- block('choice_widget_options') -}}
                {%- if choices|length > 0 and separator is not none -%}
                    <option disabled=\"disabled\">{{ separator }}</option>
                {%- endif -%}
            {%- endif -%}
            {%- set options = choices -%}
            {{- block('choice_widget_options') -}}
        </select>
    </div>
{%- endblock choice_widget_collapsed -%}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label class=\"col-sm-2 control-label\"{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}

{%- endblock form_label -%}", "@App/Form/fields.html.twig", "/home/julian/Julian_Symfony/EFI2/src/AppBundle/Resources/views/Form/fields.html.twig");
    }
}
