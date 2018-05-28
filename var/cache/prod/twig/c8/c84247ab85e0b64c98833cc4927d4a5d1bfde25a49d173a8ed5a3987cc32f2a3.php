<?php

/* ReconBundle:Default:index.html.twig */
class __TwigTemplate_b078b2703e825fbd1510d7b70eaa87972f736b914a0d1143f6a821774ab19dff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("header.html.twig", "ReconBundle:Default:index.html.twig", 2);
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
        echo "Accueil";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"first-bloc\">
    ";
        // line 7
        if ((array_key_exists("id", $context) && ($context["id"] ?? null))) {
            echo " 
        <a class=\"signup btn large-btn\" href=\"./situation/";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["id"] ?? null), "id", array()), "html", null, true);
            echo "/0\"><h3>Accedez à votre compte Reconversion</h3></a>
    ";
        } else {
            // line 10
            echo "    <p>votre métier se transforme</p>
    <p class=\"bold\">Devenez acteur de votre mobilité professionnelle</p>
    <a class=\"signup btn large-btn\" href=\"./inscription\">INSCRIVEZ-VOUS</a>
    ";
        }
        // line 14
        echo "</div>
<div class=\"wrap\">
        <h2>Avançons ensemble sur votre projet professionnel</h2>
        <div class=\"flex little-flex\">
            <p>Faire le point sur votre parcours</p>
            <p class=\"bottom-bar\">Définir le plan d’action</p>
            <p>Réussir votre transition professionnelle</p>
        </div>
</div>
<div class=\"testimony\">
    <div class=\"wrap\">
        <h2 class=\"bold\">Les témoignages</h2>
        <div class=\"items\">
            <div class=\"item\">
                <img src=\"http://www.edu.upmc.fr/fsm/i02/symfony3/projet_Reconversion/images/101.jpg\" alt=\"P.\">
                <p>\" Après le bac j’ai obtenu un BTS orienté vente et négociation. Je voulais rapidement travailler et gagner ma vie. J’ai trouvé une mission dans un labor... \"<span>Carole P.</span></p>
            </div>
            <div class=\"item\">
                <img src=\"http://www.edu.upmc.fr/fsm/i02/symfony3/projet_Reconversion/images/171.jpg\" alt=\"R.\">
                <p>\" Après une licence scientifique générale, je voulais intégrer la vie professionnelle. J’ai pensé que la visite médicale me conviendrait et pendant quel... \"<span>Vincent R.</span></p>
            </div>
        </div>
        <a class=\"btn large-btn\" href=\"#\">Tous les témoignages</a>
    </div>
</div>
<div class=\"contact\">
    <div class=\"wrap\">
        <h2>Poser votre question</h2>
        <input type=\"text\" placeholder=\"Votre email\" />
        <textarea placeholder=\"Votre message\"></textarea>
        <a class=\"btn\" href=\"#\">Envoyer</a>        
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ReconBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  51 => 10,  46 => 8,  42 => 7,  38 => 5,  35 => 4,  29 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ReconBundle:Default:index.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\reconversion\\src\\ReconBundle/Resources/views/Default/index.html.twig");
    }
}
