<?php

/* esubpublicBundle:Includes:clean_box.html.twig */
class __TwigTemplate_3d9439de199ba622c1a7a486e95a2516 extends Twig_Template
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
        echo "<form id=\"fileupload\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clean"), "html", null, true);
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
\t<div class=\"row\">\t
\t\t<div class=\"fileupload-buttonbar delete_all\">
\t\t\t
\t\t\t<button type=\"button\" class=\"gray_btn btn-danger delete\">Clear</button>
\t\t\t<button type=\"button\" class=\"gray_btn download\">Download</button>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"span16\">
\t\t\t<table class=\"zebra-striped\"><tbody class=\"files\"></tbody></table>
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"fileupload-buttonbar\">
\t\t\t<!--\t\t\t\t\t<div class=\"progressbar fileupload-progressbar\"><div style=\"width:0%;\"></div></div>-->
\t\t\t<span class=\"gray_btn fileinput-button\">
\t\t\t\t<span>Add Files</span>
\t\t\t\t<input type=\"file\" name=\"files[]\" multiple>
\t\t\t</span>
\t\t\t<button type=\"submit\" class=\"gray_btn primary start\">Clean</button>
\t\t\t<!--\t\t\t\t\t<button type=\"reset\" class=\"btn info cancel\">Cancel upload</button>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn danger delete\">Delete selected</button>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"toggle\">-->
\t\t</div>
\t</div>
</form>\t\t

<script>
\tvar fileUploadErrors = {
\t\tmaxFileSize: 'File is too big',
\t\tminFileSize: 'File is too small',
\t\tacceptFileTypes: 'Filetype not allowed',
\t\tmaxNumberOfFiles: 'Max number of files exceeded',
\t\tuploadedBytes: 'Uploaded bytes exceed file size',
\t\temptyResult: 'Empty file upload result'
\t};
</script>

 ";
        // line 41
        $this->env->loadTemplate("esubpublicBundle:Includes:upload_template.html.php")->display($context);
        // line 42
        echo "
<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/js/jquery.ui.widget.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/js/load-image.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/js/tmpl.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap Modal and Image Gallery are not required, but included for the demo -->
<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/js/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/js/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/js/jquery.fileupload-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/js/application.js"), "html", null, true);
        echo "\"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE >= 8 -->
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/js/jquery.xdr-transport.js"), "html", null, true);
        echo "\"></script>
<!-- postMessage Transport support can be added with the following plugin -->
<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/js/jquery.postmessage-transport.js"), "html", null, true);
        echo "\"></script>

<div class=\"c_image shadwo_line\"></div>
<div class=\"white_overlay\">
\t<img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/images/159.gif"), "html", null, true);
        echo "\" />
</div>";
    }

    public function getTemplateName()
    {
        return "esubpublicBundle:Includes:clean_box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 58,  101 => 54,  96 => 52,  91 => 50,  87 => 49,  83 => 48,  79 => 47,  74 => 45,  70 => 44,  66 => 43,  63 => 42,  61 => 41,  17 => 1,);
    }
}
