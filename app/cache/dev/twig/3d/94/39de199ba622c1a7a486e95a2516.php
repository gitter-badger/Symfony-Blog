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
        echo "<form id=\"fileupload\" action=\"clean\" method=\"POST\" enctype=\"multipart/form-data\">
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

<script id=\"template-download\" type=\"text/html\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/js/download_template.js"), "html", null, true);
        echo "\" ></script>
<script id=\"template-upload\" type=\"text/html\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/js/upload_template.js"), "html", null, true);
        echo "\" ></script>

<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/js/jquery.ui.widget.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/js/load-image.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/js/tmpl.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap Modal and Image Gallery are not required, but included for the demo -->
<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/js/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/js/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/js/jquery.fileupload-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/js/application.js"), "html", null, true);
        echo "\"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE >= 8 -->
<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/js/jquery.xdr-transport.js"), "html", null, true);
        echo "\"></script>
<!-- postMessage Transport support can be added with the following plugin -->
<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/esubpublic/js/jquery.postmessage-transport.js"), "html", null, true);
        echo "\"></script>

<div class=\"c_image shadwo_line\"></div>
<div class=\"white_overlay\">
\t<img src=\"";
        // line 59
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
        return array (  110 => 59,  103 => 55,  89 => 50,  85 => 49,  81 => 48,  76 => 46,  72 => 45,  68 => 44,  63 => 42,  59 => 41,  17 => 1,  212 => 94,  209 => 93,  202 => 81,  200 => 80,  196 => 78,  194 => 77,  190 => 75,  188 => 74,  183 => 71,  175 => 65,  165 => 57,  163 => 56,  147 => 43,  143 => 41,  140 => 40,  134 => 4,  127 => 101,  122 => 99,  119 => 98,  117 => 97,  113 => 95,  111 => 93,  107 => 91,  101 => 88,  98 => 53,  96 => 86,  93 => 51,  91 => 40,  80 => 32,  74 => 29,  69 => 27,  65 => 26,  61 => 25,  57 => 24,  53 => 23,  48 => 21,  44 => 20,  25 => 4,  20 => 1,);
    }
}
