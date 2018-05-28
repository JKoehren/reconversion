<?php

/* header.html.twig */
class __TwigTemplate_d97a17fc9546b9bdf4fce3ca12ee00efa79d14703f408b9f6c490cb2c1b1dc6b extends Twig_Template
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
        // line 2
        echo "<!DOCTYPE HTML>
<html>

<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " - Reconversion Pro</title>
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>

<body>
    <ul class=\"nav-bar\">
        <li>
           <a href=\"#\">Notre démarche</a> 
        </li>
        <li>
           <a href=\"#\">Les étapes</a> 
        </li>
        <li>
           <a href=\"#\">Témoignages</a> 
        </li>
        <li>
           <a href=\"#\">FAQ</a> 
        </li>
        <li>
           <a href=\"#\">Liens utiles</a> 
        </li>
        <li>
           <a href=\"#\">Contact</a> 
        </li>
        ";
        // line 32
        if ((array_key_exists("id", $context) && ($context["id"] ?? null))) {
            echo " 
        <li>
            ";
            // line 34
            if ((($context["title"] ?? null) == "Situation")) {
                // line 35
                echo "            <a href=\"../../deco\">Deconnexion</a> 
            ";
            } else {
                // line 37
                echo "           <a href=\"./deco\">Deconnexion</a> 
            ";
            }
            // line 39
            echo "        </li>
    </ul>
    <bloc>Bonjour ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute(($context["id"] ?? null), "name", array()), "html", null, true);
            echo "</bloc>
        ";
        } else {
            // line 43
            echo "        
    
        
        <li class=\"connect\">
            ";
            // line 47
            if ((($context["title"] ?? null) == "Inscription terminé")) {
                // line 48
                echo "                 <a class=\"btn\" href=\"../login\">Connexion</a>
            ";
            } else {
                // line 50
                echo "                <a class=\"btn\" href=\"./login\">Connexion</a> 
            ";
            }
            // line 52
            echo "        </li>
        
    </ul>
        ";
        }
        // line 56
        echo "    
    <div>
        ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        echo " ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "</body>
    
<footer>
    <div class=\"footer\">
        UPMC - Formation continue / KOEHREN & PAVELEK / 2018 <a href=\"#\">Mentions légales</a>
    </div>
</footer>

</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/global.css"), "html", null, true);
        echo "\" /> ";
    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
    }

    public function block_javascripts($context, array $blocks = array())
    {
        // line 59
        echo "    </div>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/app.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 60,  147 => 59,  140 => 58,  134 => 9,  131 => 8,  126 => 7,  114 => 62,  110 => 58,  106 => 56,  100 => 52,  96 => 50,  92 => 48,  90 => 47,  84 => 43,  79 => 41,  75 => 39,  71 => 37,  67 => 35,  65 => 34,  60 => 32,  36 => 10,  34 => 8,  30 => 7,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "header.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\reconversion\\app\\Resources\\views\\header.html.twig");
    }
}
