
{{ '<script id="template-download" type="text/html">
   {% for (var i=0, files=o.files, l=files.length, file=files[0]; i<l; file=files[++i]) { %}
        <tr class="template-download fade">
            {% if (file.error) { %}
            <td class="name"><input type="checkbox" checked="checked" value="1" name="delete" style="display:none;"/>{%=file.name%}</td>
            <td class="size">{%=o.formatFileSize(file.size)%}</td>
            <td class="error"><span class="label important">Error</span> {%=fileUploadErrors[file.error] || file.error%}</td>
            {% } else { %}
            <td class="name">
                <input type="checkbox" checked="checked" value="1" name="delete" style="display:none;"/>
                {%=file.name%}
            </td>
            <td  colspan=""></td>
            {% } %}
            <td class="delete">
                <button class="btn gray_btn" data-type="{%=file.delete_type%}" data-url="{%=file.delete_url%}">x</button>
            </td>
        </tr>
    {%  } %}
</script>
<script id="template-upload" type="text/html">
    {% for (var i=0, files=o.files, l=files.length, file=files[0]; i<l; file=files[++i]) { %}
        <tr class="template-upload fade">
            <td class="name">{%=file.name%}</td>
            {% if (file.error) { %}
            <td class="error" ><span class="label important">Error</span> {%=fileUploadErrors[file.error] || file.error%}</td>
            {% } else if (o.files.valid && !i) { %}
            <td class="progress"><div class="progressbar"><div style="width:0%;"></div></div></td>
            <td class="start" style="display:none;">{% if (!o.options.autoUpload) { %}<button class="btn primary">Start</button>{% } %}</td>
            {% } else { %}
            <td colspan="2"></td>
            {% } %}
            <td class="cancel">{% if (!i) { %}<button class="btn gray_btn">x</button>{% } %}</td>
        </tr>
    {%  } %}
</script>' }}
