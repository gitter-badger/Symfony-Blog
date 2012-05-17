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
    {% } %}