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
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/js/global.js"), "html", null, true);
        echo "\"></script>

    </head>
    <body>

        <div id=\"wrapper\">


            ";
        // line 41
        $this->displayBlock('content_header', $context, $blocks);
        // line 86
        echo "
            ";
        // line 87
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method")) {
            // line 88
            echo "                <div class=\"flash-message\">
                    <em>Notice</em>: ";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 92
        echo "
            <div class=\"symfony-content\">
                ";
        // line 94
        $this->displayBlock('content', $context, $blocks);
        // line 96
        echo "            </div>

            ";
        // line 98
        if (array_key_exists("code", $context)) {
            // line 99
            echo "                <h2>Code behind this page</h2>
                <div class=\"symfony-content\">";
            // line 100
            echo $this->getContext($context, "code");
            echo "</div>
            ";
        }
        // line 102
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

    // line 41
    public function block_content_header($context, array $blocks = array())
    {
        // line 42
        echo "                <div id=\"header\">
                    <div id=\"top_logo\">
                        <a href=\"";
        // line 44
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
        // line 57
        if (true) {
            // line 58
            echo "                        <div id=\"unloged_menu\">
                            <a href=\"javascript:void(0);\" id=\"login_btn\" box=\"login_box\">Login</a>
                            &nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href=\"javascript:void(0);\" id=\"signup_btn\" box=\"signup_box\">Signup</a>
                            &nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href=\"javascript:void(0);\" id=\"clean_btn\" box=\"clean_box\">Clean</a>
                        </div>
                    ";
        } else {
            // line 66
            echo "                        <div id=\"loged_menu\">
                            <span class=\"c_image user_icon\"></span>
                            <span class=\"username\">CagunA</span>
                            <span class=\"c_image down_arrow\"></span>
                        </div>
                    ";
        }
        // line 72
        echo "                    <div class=\"clear\"></div>
                    
                    <div id=\"login_box\" class=\"header_box\">
                        ";
        // line 75
        $this->env->loadTemplate("esubpublicBundle:Includes:login_box.html.twig")->display($context);
        // line 76
        echo "                    </div>
                    <div id=\"signup_box\" class=\"header_box\">
                        ";
        // line 78
        $this->env->loadTemplate("esubpublicBundle:Includes:signup_box.html.twig")->display($context);
        // line 79
        echo "                    </div>
                    <div id=\"clean_box\" class=\"header_box\">
                        ";
        // line 81
        $this->env->loadTemplate("esubpublicBundle:Includes:clean_box.html.twig")->display($context);
        // line 82
        echo "                    </div>
                </div>
                <div style=\"clear: both\"></div>
            ";
    }

    // line 94
    public function block_content($context, array $blocks = array())
    {
        // line 95
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
        return array (  216 => 95,  213 => 94,  206 => 82,  204 => 81,  200 => 79,  198 => 78,  194 => 76,  192 => 75,  187 => 72,  179 => 66,  169 => 58,  167 => 57,  151 => 44,  147 => 42,  144 => 41,  138 => 4,  131 => 102,  126 => 100,  123 => 99,  121 => 98,  117 => 96,  115 => 94,  111 => 92,  105 => 89,  102 => 88,  100 => 87,  97 => 86,  95 => 41,  84 => 33,  80 => 32,  74 => 29,  69 => 27,  65 => 26,  61 => 25,  57 => 24,  53 => 23,  48 => 21,  44 => 20,  25 => 4,  20 => 1,);
    }
}
