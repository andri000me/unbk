function yesAction() {
    var popupBackElement = document.getElementById("popupBackElement");
    var popupElement = document.getElementById("popupElement");
    if (popupBackElement) document.body.removeChild(popupBackElement);
    if (popupElement) document.body.removeChild(popupElement);
    nativePopup(
        'Apabila anda klik tombol [Setuju], maka anda sudah menjadi PENDAFTAR PERMANEN dimana data maupun pilihan sekolah sudah TIDAK DAPAT DIUBAH dengan ALASAN APAPUN.<br /><br />' +
        'Dengan ini saya menyatakan TIDAK AKAN MEMINTA PERUBAHAN DATA MAUPUN PILIHAN SEKOLAH DENGAN ALASAN APAPUN.',
        [{action:'yes2Action();',value:'Setuju! Selesaikan Pendaftaran'}, {action:'noAction();',value:'Tidak, Periksa Kembali'}],
        'Konfirmasi Akhir untuk Simpan Permanen'
    );
}

function noAction() {
    var popupBackElement = document.getElementById("popupBackElement");
    var popupElement = document.getElementById("popupElement");
    if (popupBackElement) document.body.removeChild(popupBackElement);
    if (popupElement) document.body.removeChild(popupElement);        
}

function yes2Action() {
    confirmGoodbye = false;
    document.getElementById('konfirmasiForm').innerHTML += '<input type="hidden" name="ya" value="Ya" />';
    document.getElementById('konfirmasiForm').submit();
}

function yes1Action() {
    setTimeout(function() {
        makeModal('Konfirmasi Akhir untuk Simpan Permanen', [{action:'yes2Action();',value:'Setuju! Selesaikan Pendaftaran'}, {action:'noAction();',value:'Tidak, Periksa Kembali'}], 'Apabila anda klik tombol [Setuju], maka anda sudah menjadi PENDAFTAR PERMANEN dimana data maupun pilihan sekolah sudah TIDAK DAPAT DIUBAH dengan ALASAN APAPUN.<br /><br />' +'Dengan ini saya menyatakan TIDAK AKAN MEMINTA PERUBAHAN DATA MAUPUN PILIHAN SEKOLAH DENGAN ALASAN APAPUN.');
        }, 500);
}

function onSubmit() {
    if (document.readyState !== 'complete')
        return;
    if (typeof jQuery == 'undefined') {
        nativePopup(
            'Sudahkah Anda yakin dengan pilihan Anda? Jika Anda klik tombol [Sudah] maka pilihan akan dikunci dan sudah tidak dapat diubah kembali dengan alasan apapun.',
            [{action:'yesAction();',value:'Sudah, saya yakin dengan pilihan saya'}, {action:'noAction();',value:'Tidak, Periksa Kembali'}],
            'Konfirmasi Pilihan'
        );
    } else {
        /*$.Dialog({
            'title'       : 'Konfirmasi Pilihan',
            'content'     :
                'Sudahkah Anda yakin dengan pilihan Anda? Jika Anda klik tombol [Sudah] maka pilihan akan dikunci dan sudah tidak dapat diubah kembali dengan alasan apapun.',
            'draggable'   : true,
            'overlay'     : true,
            'closeButton' : false,
            'buttonsAlign': 'right',
            'position'    : {
                'zone'    : 'center',
                'offsetY' : '100px'
            },
            'buttons'     : {
                'Sudah, saya yakin dengan pilihan saya'     : {
                    'action': function(){
                        setTimeout(function() {
                            $.Dialog({
                                'title'       : 'Konfirmasi Akhir untuk Simpan Permanen',
                                'content'     :
                                    'Apabila anda klik tombol [Setuju], maka anda sudah menjadi PENDAFTAR PERMANEN dimana data maupun pilihan sekolah sudah TIDAK DAPAT DIUBAH dengan ALASAN APAPUN.<br /><br />' +
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
                            });
                        }, 500);
                    }
                },
                'Tidak, Periksa Kembali'     : {
                    'action': function(){}
                }
            }
        });*/
        makeModal('Konfirmasi Pilihan', [{action:'yes1Action();',value:'Sudah, saya yakin dengan pilihan saya'}, {action:'noAction();',value:'Tidak, Periksa Kembali'}], 'Sudahkah Anda yakin dengan pilihan Anda? Jika Anda klik tombol [Sudah] maka pilihan akan dikunci dan sudah tidak dapat diubah kembali dengan alasan apapun.');
    }
}