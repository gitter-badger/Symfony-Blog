<?php

/* esubpublicBundle:Includes:login_box.html.twig */
class __TwigTemplate_2476dcd9ffe84270b2bc3e3e5dd66deb extends Twig_Template
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
        echo "<?php echo form_open()?>
<?php echo form_input('username', set_value('username'), 'class=\"login_input\", required=\"required\" placeholder=\"Username\"')?>
<?php echo form_password('password', set_value('password'), 'class=\"login_input\", required=\"required\" placeholder=\"Password\"')?>
<?php echo form_submit('login', 'Login', 'class=\"login_submit gray_btn\"')?>
<?php echo form_close()?>
<div class=\"c_image shadwo_line\"></div>";
    }

    public function getTemplateName()
    {
        return "esubpublicBundle:Includes:login_box.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  17 => 1,  212 => 94,  209 => 93,  202 => 81,  200 => 80,  196 => 78,  194 => 77,  190 => 75,  188 => 74,  183 => 71,  175 => 65,  165 => 57,  163 => 56,  147 => 43,  143 => 41,  140 => 40,  134 => 4,  127 => 101,  122 => 99,  119 => 98,  117 => 97,  113 => 95,  111 => 93,  107 => 91,  101 => 88,  98 => 87,  96 => 86,  93 => 85,  91 => 40,  80 => 32,  74 => 29,  69 => 27,  65 => 26,  61 => 25,  57 => 24,  53 => 23,  48 => 21,  44 => 20,  25 => 4,  20 => 1,);
    }
}
