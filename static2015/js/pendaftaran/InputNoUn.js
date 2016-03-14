function onSubmit() {
    if (document.readyState !== 'complete')
        return;
    confirmGoodbye = false;
    document.getElementById('formEvent').value = 'onSubmit';
    document.getElementById('inputNoUnForm').submit();
}