var new_html = '<div style="position: fixed; bottom: 20px; right: 20px; background: url(modules/custom/my_custom_module/libraries/sample-embed-code/chat.png); width: 143px; height: 130px;"></div>';
var new_elem = document.createElement('div');
new_elem.innerHTML = new_html;
document.querySelector('body').appendChild(new_elem);
