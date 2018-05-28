<?php

/* @Recon/User/mail.html.twig */
class __TwigTemplate_325590bd2e4eb7f3634bc3832b8b841ae14199b7c29bd3f28e9d19dd0ce80136 extends Twig_Template
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
        echo " 
<h1>Bienvenue chez Reconversion pro</h1> 
<h2>";
        // line 3
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</h2>
<br>
<div> 

<em>Un mail de confirmation vous à été envoyé. Merci de vérifier votre courrier indésirable.</em>


<br><br>
    
Voici le lien pour finaliser votre inscription :
    
<a href=\"http://localhost/reconversion/web/inscriptionsuite/";
        // line 14
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">http://localhost/reconversion/web/inscriptionsuite/";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "</a>
</div>
<br><br>

<strong>Reconversion Pro : UPMC - Formation continue / KOEHREN & PAVELEK / 2018</strong>";
    }

    public function getTemplateName()
    {
        return "@Recon/User/mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 14,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Recon/User/mail.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\reconversion\\src\\ReconBundle\\Resources\\views\\User\\mail.html.twig");
    }
}
