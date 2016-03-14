document.getElementById('selesaiForm').onsubmit = function() {
    confirmGoodbye = false;
    return true;
}

var buktiCetakImg = document.getElementById('buktiCetakImg');

var cetakButton = document.getElementById('cetakButton');
if (cetakButton != null) {
    cetakButton.onclick = function() {
        if (buktiCetakImg == null)
            return;
        var popup = window.open(buktiCetakImg.src);
        popup.window.onload = function() {
            popup.print();
        }
    }
}

var downloadButton = document.getElementById('downloadButton');
if (downloadButton != null) {
    downloadButton.onclick = function() {
        window.open(buktiCetakImgSrc + '/1');
    }
}