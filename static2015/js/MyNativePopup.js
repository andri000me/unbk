function nativePopup(msg, buttons, title) {
    var popupBackElement = document.createElement('div');
    popupBackElement.setAttribute('id', 'popupBackElement');
    popupBackElement.style.cssText = 'width: 100%; height: 100%; position: fixed; z-index: 3000; -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)"; filter: alpha(opacity=50); left: 0px; top: 0px; background-color:#000000;';
    var popupElement = document.createElement('div');
    popupElement.setAttribute('id', 'popupElement');
    popupElement.style.cssText = 'top: 200px; left: 200px; z-index: 99999; position: fixed;';
    popupElement.className = 'dialog';
    if (typeof title === 'undefined') {
        title = 'Konfirmasi';
    }
    var popupHtml =
        '<div style="background-color: #fff;"><div style="cursor: move;" class="header">' + title + '</div><div class="content">' +
        msg +
        '</div>' +
        '<div class="action" id="dialogButtons">' +
        '    <div>';
    for (i in buttons) {
        popupHtml += '        <button type="button" onclick="' + buttons[i].action + '">' + buttons[i].value + '</button>';
    }
    popupHtml +=
        '    </div>' +
        '</div></div>';
    popupElement.innerHTML = popupHtml;
    document.body.appendChild(popupBackElement);
    document.body.appendChild(popupElement);
}