function yesAction() {
    document.getElementById('validForm').submit();
}

function yes1Action() {
    document.getElementById('hapusForm').submit();
}

function noAction() {}

var noUn = document.getElementById('nomorUjian').innerHTML;
$('#validBtn').click(function(e) {
    /*$.Dialog({
        'title'      : 'Konfirmasi Validasi',
        'content'    : 'Dengan ini Anda menyatakan bahwa data peserta didik <br>dengan nomor ujian <b>'+noUn+ '</b> BENAR-BENAR VALID.',
        'draggable'  : true,
        'keepOpened' : true,
        'buttonsAlign': 'right',
        'position' : {
         'zone' : 'center',
         'offsetY' : '50px'
         },
        'buttons'    : {
            'Setuju'    : {
                'action': function() {
                    document.getElementById('validForm').submit();
                }
            },
            'Batal'    : {
                'action': function() {}
            }
        }
    });*/
    makeModal('Konfirmasi Validasi', [{action:'yesAction();',value:'Setuju'}, {action:'noAction();',value:'Batal'}], 'Dengan ini Anda menyatakan bahwa data peserta didik <br>dengan nomor ujian <b>' + noUn + '</b> BENAR-BENAR VALID.');
});
$('#hapusBtn').click(function(e) {
    /*$.Dialog({
        'title'      : 'Konfirmasi Penghapusan Data',
        'content'    : 'Anda yakin akan menghapus data peserta didik dengan nomor ujian <b>'+noUn+ '</b>?',
        'draggable'  : true,
        'keepOpened' : true,
        'buttonsAlign': 'right',
        'position' : {
         'zone' : 'center',
         'offsetY' : '50px'
         },
        'buttons'    : {
            'Yakin'    : {
                'action': function() {
                    document.getElementById('hapusForm').submit();
                }
            },
            'Batal'    : {
                'action': function() {}
            }
        }
    });*/
    makeModal('Konfirmasi Penghapusan Data', [{action:'yes1Action();',value:'Yakin'}, {action:'noAction();',value:'Batal'}], 'Anda yakin akan menghapus data peserta didik dengan nomor ujian <b>' + noUn + '</b>?');
});