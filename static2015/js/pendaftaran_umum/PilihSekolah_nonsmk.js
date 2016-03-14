function onKecamatanChange() {
    if (document.readyState !== 'complete')
        return;
    confirmGoodbye = false;
    document.getElementById('formEvent').value = 'onKecamatanChange';
    document.getElementById('pilihSekolahForm').submit();
}

function onWilayahChange() {
    if (document.readyState !== 'complete')
        return;
    confirmGoodbye = false;
    document.getElementById('formEvent').value = 'onWilayahChange';
    document.getElementById('pilihSekolahForm').submit();
}

function onSubRayonChange() {
    if (document.readyState !== 'complete')
        return;
    confirmGoodbye = false;
    document.getElementById('formEvent').value = 'onSubRayonChange';
    document.getElementById('pilihSekolahForm').submit();
}

function onSekolahChange() {
    if (document.readyState !== 'complete')
        return;
    confirmGoodbye = false;
    document.getElementById('formEvent').value = 'onSekolahChange';
    document.getElementById('pilihSekolahForm').submit();
}

enableSelects();