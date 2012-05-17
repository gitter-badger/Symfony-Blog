<?php

/* esubpublicBundle::layout.html.twig */
class __TwigTemplate_662ac19c6527e74b6c664963c2d5edda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <meta name=\"copyright\" content=\"Copyright esub 2011. All rights reserved\">
        <meta name=\"owner\" content=\"esub\">
        <meta name=\"publisher\" content=\"esub\">
        <meta name=\"author\" content=\"esub\">
        <meta name=\"language\" content=\"english\">
        <meta name=\"rating\" content=\"General\">
        <meta name=\"expires\" content=\"never\">
        <meta name=\"distribution\" content=\"Global\">
        <meta name=\"robots\" content=\"index,FOLLOW\">
        <meta name=\"revisit-after\" content=\"1 days\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta http-equiv=\"content-language\" content=\"ro\">
        <!-- FAVICON -->

        <link rel=\"shortcut icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
        <link rel=\"icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
        
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/css/master.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/css/bgs.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/css/fonts.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/css/jquery.fileupload-ui.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/css/bootstrap.css"), "html", null, true);
        echo "\" />
        <!--[if lt IE 7]>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/css/ie7.css"), "html", null, true);
        echo "\" />
        <![endif]-->
        
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/js/jquery-1.7.1.min.js"), "html", null, true);
        echo "\"></script>

    </head>
    <body>

        <div id=\"wrapper\">


            ";
        // line 40
        $this->displayBlock('content_header', $context, $blocks);
        // line 85
        echo "
            ";
        // line 86
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method")) {
            // line 87
            echo "                <div class=\"flash-message\">
                    <em>Notice</em>: ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 91
        echo "
            <div class=\"symfony-content\">
                ";
        // line 93
        $this->displayBlock('content', $context, $blocks);
        // line 95
        echo "            </div>

            ";
        // line 97
        if (array_key_exists("code", $context)) {
            // line 98
            echo "                <h2>Code behind this page</h2>
                <div class=\"symfony-content\">";
            // line 99
            echo $this->getContext($context, "code");
            echo "</div>
            ";
        }
        // line 101
        echo "        </div>
    </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 40
    public function block_content_header($context, array $blocks = array())
    {
        // line 41
        echo "                <div id=\"header\">
                    <div id=\"top_logo\">
                        <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home"), "html", null, true);
        echo "\" target=\"_self\"><span class=\"c_image c_logo\"></span></a>
                    </div>
                    <div id=\"searchbox\">
                        <div class=\"search_input\">
                            <form action=\"\">
                                <input type=\"text\" name=\"search\" value=\"Search\" />
                            </form>
                        </div>
                        <div class=\"search_icon\">
                            <span class=\"c_image search_icon\"></span>
                        </div>
                    </div>
                    
                    ";
        // line 56
        if (true) {
            // line 57
            echo "                        <div id=\"unloged_menu\">
                            <a href=\"javascript:void(0);\" id=\"login_btn\" box=\"login_box\">Login</a>
                            &nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href=\"javascript:void(0);\" id=\"signup_btn\" box=\"signup_box\">Signup</a>
                            &nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href=\"javascript:void(0);\" id=\"clean_btn\" box=\"clean_box\">Clean</a>
                        </div>
                    ";
        } else {
            // line 65
            echo "                        <div id=\"loged_menu\">
                            <span class=\"c_image user_icon\"></span>
                            <span class=\"username\">CagunA</span>
                            <span class=\"c_image down_arrow\"></span>
                        </div>
                    ";
        }
        // line 71
        echo "                    <div class=\"clear\"></div>
                    
                    <div id=\"login_box\" class=\"header_box\">
                        ";
        // line 74
        $this->env->loadTemplate("esubpublicBundle:Includes:login_box.html.twig")->display($context);
        // line 75
        echo "                    </div>
                    <div id=\"signup_box\" class=\"header_box\">
                        ";
        // line 77
        $this->env->loadTemplate("esubpublicBundle:Includes:signup_box.html.twig")->display($context);
        // line 78
        echo "                    </div>
                    <div id=\"clean_box\" class=\"header_box\">
                        ";
        // line 80
        $this->env->loadTemplate("esubpublicBundle:Includes:clean_box.html.twig")->display($context);
        // line 81
        echo "                    </div>
                </div>
                <div style=\"clear: both\"></div>
            ";
    }

    // line 93
    public function block_content($context, array $blocks = array())
    {
        // line 94
        echo "                ";
    }

    public function getTemplateName()
    {
        return "esubpublicBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 94,  209 => 93,  202 => 81,  200 => 80,  196 => 78,  194 => 77,  190 => 75,  188 => 74,  183 => 71,  175 => 65,  165 => 57,  163 => 56,  147 => 43,  143 => 41,  140 => 40,  134 => 4,  127 => 101,  122 => 99,  119 => 98,  117 => 97,  113 => 95,  111 => 93,  107 => 91,  101 => 88,  98 => 87,  96 => 86,  93 => 85,  91 => 40,  80 => 32,  74 => 29,  69 => 27,  65 => 26,  61 => 25,  57 => 24,  53 => 23,  48 => 21,  44 => 20,  25 => 4,  20 => 1,);
    }
}
