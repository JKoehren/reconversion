<?php

/* @Recon/User/form.html.twig */
class __TwigTemplate_88a862ca2daec37b839972bcb656bd90f187a75a3760a572633b983dadfbcf73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("header.html.twig", "@Recon/User/form.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"wrap form\">
";
        // line 7
        if (($context["message"] ?? null)) {
            echo " 
<p>";
            // line 8
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p> 
";
        }
        // line 9
        echo " 
<div> 
";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo " 
</div>
<p class=\"contact\"><a href=\"../\" class=\"btn\">Retour à l'accueil</a></p>
</div>

";
    }

    public function getTemplateName()
    {
        return "@Recon/User/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  51 => 9,  46 => 8,  42 => 7,  38 => 5,  35 => 4,  29 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Recon/User/form.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\reconversion\\src\\ReconBundle\\Resources\\views\\User\\form.html.twig");
    }
}
