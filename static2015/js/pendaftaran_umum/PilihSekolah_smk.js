function onSekolahChange() {
    if (document.readyState !== 'complete')
        return;
    confirmGoodbye = false;
    document.getElementById('formEvent').value = 'onSekolahChange';
    document.getElementById('pilihSekolahForm').submit();
}

function onJurusanChange() {
    if (document.readyState !== 'complete')
        return;
    confirmGoodbye = false;
    document.getElementById('formEvent').value = 'onJurusanChange';
    document.getElementById('pilihSekolahForm').submit();
}

enableSelects();