var confirmGoodbye = true;

function goodbye(e) {
    if (confirmGoodbye) {
        if(!e) e = window.event;
        //e.cancelBubble is supported by IE - this will kill the bubbling process.
        e.cancelBubble = true;
        var msg = 'Data yang telah Anda masukkan mungkin tidak akan tersimpan.';
        e.returnValue = msg; //This is displayed on the dialog

        //e.stopPropagation works in Firefox.
        if (e.stopPropagation) {
            e.stopPropagation();
            e.preventDefault();
        }
        return msg;
    }
}

window.onbeforeunload=goodbye;