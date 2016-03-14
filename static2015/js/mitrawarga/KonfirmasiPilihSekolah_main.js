function yesAction() {
    confirmGoodbye = false;
    document.getElementById('konfirmasiForm').innerHTML += '<input type="hidden" name="ya" value="Ya" />';
    document.getElementById('konfirmasiForm').submit();
}

function noAction() {
    var popupBackElement = document.getElementById("popupBackElement");
    var popupElement = document.getElementById("popupElement");
    if (popupBackElement) document.body.removeChild(popupBackElement);
    if (popupElement) document.body.removeChild(popupElement);        
}

function onSubmit() {
    if (document.readyState !== 'complete')
        return;
    if (typeof jQuery == 'undefined') {
        nativePopup(
            'Apabila anda klik tombol [Setuju], maka yang Anda isi sudah menjadi PERMANEN dimana data maupun pilihan sekolah sudah TIDAK DAPAT DIUBAH dengan ALASAN APAPUN.<br /><br />' +
            'Dengan ini saya menyatakan TIDAK AKAN MEMINTA PERUBAHAN DATA MAUPUN PILIHAN SEKOLAH DENGAN ALASAN APAPUN.',
            [{action:'yesAction();',value:'Setuju! Selesaikan Pendaftaran'}, {action:'noAction();',value:'Tidak, Periksa Kembali'}]
        );
    } else {
        /*$.Dialog({
            'title'       : 'Konfirmasi',
            'content'     :
                'Apabila anda klik tombol [Setuju], maka yang Anda isi sudah menjadi PERMANEN dimana data maupun pilihan sekolah sudah TIDAK DAPAT DIUBAH dengan ALASAN APAPUN.<br /><br />' +
            'Dengan ini saya menyatakan TIDAK AKAN MEMINTA PERUBAHAN DATA MAUPUN PILIHAN SEKOLAH DENGAN ALASAN APAPUN.',
            'draggable'   : true,
            'overlay'     : true,
            'closeButton' : false,
            'buttonsAlign': 'right',
            'position'    : {
                'zone'    : 'center',
                'offsetY' : '100px'
            },
            'buttons'     : {
                'Setuju! Selesaikan Pendaftaran'     : {
                    'action': function(){
                        confirmGoodbye = false;
                        document.getElementById('konfirmasiForm').innerHTML += '<input type="hidden" name="ya" value="Ya" />';
                        document.getElementById('konfirmasiForm').submit();
                    }
                },
                'Tidak, Periksa Kembali'     : {
                    'action': function(){}
                }
            }
        });*/
        makeModal('Konfirmasi', [{action:'yesAction();',value:'Setuju! Selesaikan Pendaftaran'}, {action:'noAction();',value:'Tidak, Periksa Kembali'}], 'Apabila anda klik tombol [Setuju], maka yang Anda isi sudah menjadi PERMANEN dimana data maupun pilihan sekolah sudah TIDAK DAPAT DIUBAH dengan ALASAN APAPUN.<br /><br />' +
            'Dengan ini saya menyatakan TIDAK AKAN MEMINTA PERUBAHAN DATA MAUPUN PILIHAN SEKOLAH DENGAN ALASAN APAPUN.');
    }
}

function onSubmit2() {
    if (document.readyState !== 'complete')
        return;
    if (typeof jQuery == 'undefined') {
        nativePopup(
            'Apabila anda klik tombol [Setuju], maka yang Anda isi sudah menjadi PERMANEN dimana data maupun pilihan sekolah sudah TIDAK DAPAT DIUBAH dengan ALASAN APAPUN.<br /><br />',
            [{action:'yesAction();',value:'Setuju! Selesaikan Pendaftaran'}, {action:'noAction();',value:'Tidak, Periksa Kembali'}]
        );
    } else {
        /*$.Dialog({
            'title'       : 'Konfirmasi',
            'content'     :
                'Apabila anda klik tombol [Setuju], maka yang Anda isi sudah menjadi PERMANEN dimana data maupun pilihan sekolah sudah TIDAK DAPAT DIUBAH dengan ALASAN APAPUN.<br /><br />' +
            'Dengan ini saya menyatakan TIDAK AKAN MEMINTA PERUBAHAN DATA MAUPUN PILIHAN SEKOLAH DENGAN ALASAN APAPUN.',
            'draggable'   : true,
            'overlay'     : true,
            'closeButton' : false,
            'buttonsAlign': 'right',
            'position'    : {
                'zone'    : 'center',
                'offsetY' : '100px'
            },
            'buttons'     : {
                'Setuju! Selesaikan Pendaftaran'     : {
                    'action': function(){
                        confirmGoodbye = false;
                        document.getElementById('konfirmasiForm').innerHTML += '<input type="hidden" name="ya" value="Ya" />';
                        document.getElementById('konfirmasiForm').submit();
                    }
                },
                'Tidak, Periksa Kembali'     : {
                    'action': function(){}
                }
            }
        });*/
        makeModal('Konfirmasi', [{action:'yesAction();',value:'Setuju! Selesaikan Pendaftaran'}, {action:'noAction();',value:'Tidak, Periksa Kembali'}], 'Apabila anda klik tombol [Setuju], maka yang Anda isi sudah menjadi PERMANEN dimana data maupun pilihan sekolah sudah TIDAK DAPAT DIUBAH dengan ALASAN APAPUN.<br /><br />');
    }
}