function enableSelects() {
    var selects = document.getElementsByTagName('select');
    for (var i = 0; i < selects.length; i++) {
        selects[i].disabled = false;
        var imgs = selects[i].parentNode.getElementsByTagName('img');
        for (var j = 0; j < imgs.length; j++) {
            imgs[j].style.visibility = 'hidden';
        }
    }
}

var statusValidasi = document.getElementById('statusValidasi');
var inputs = document.getElementsByTagName('input');

function changeStatusValidasiValue(val) {
    statusValidasi.innerHTML = val;
    if (val == '-')
        statusValidasi.className = '';
    else
        statusValidasi.className = 'bg-color-blueLight';
}

function changeStatusValidasi() {
    statusValidasi.innerHTML = '<img src="http://ppdbsurabaya.net/static2015/img/ajax-loader.gif" />';
    statusValidasi.className = '';

    var tamatan = null;
    var kk = null;

    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].name == 'tamatan') {
            if (inputs[i].type == 'radio') {
                if (inputs[i].checked) {
                    tamatan = inputs[i].value;
                }
            } else {
                tamatan = inputs[i].value;
            }
        }
        if (inputs[i].name == 'kk') {
            if (inputs[i].checked) {
                kk = inputs[i].value;
            }
        }
    }

    var statusValidasiValue = '-';

    if (tamatan == '1') {
        if (kk == '1') {
            statusValidasiValue = 'Dalam Kota';
        } else if (kk == '2') {
            statusValidasiValue = 'Rekomendasi Dalam Kota. Pagu yang tersedia adalah 1%.';
        }
    } else if (tamatan == '2') {
        if (kk == '1') {
            statusValidasiValue = 'Mutasi';
        } else if (kk == '2') {
            statusValidasiValue = 'Luar Kota. Pagu yang tersedia adalah 1%.';
        }
    }

    setTimeout(function() {
        changeStatusValidasiValue(statusValidasiValue);
    }, 500);
}

//changeStatusValidasi();

function errorBox(errors) {
    var errorsBox = document.getElementById('errorsBox');
    var parentNode = document.getElementById('pilihSekolahForm');
    if (errorsBox) {
        parentNode.removeChild(errorsBox);
    }
    var errorBox = document.createElement('div');
    errorBox.setAttribute('id', 'errorsBox');
    errorBox.className = 'notices';
    var errorHtml =
        '   <div class="red">' +
        '       <a href="#" class="close"></a>' +
        '       <div class="notice-header fg-color-yellow">Terjadi Kesalahan Validasi</div>';
    if (errors instanceof Array) {
        for (var i in errors) {
            errorHtml += ('<div class="notice-text">' + errors[i] + '</div>');
        }
    }
    errorHtml += '</div>';
    errorBox.innerHTML = errorHtml;
    parentNode.insertBefore(errorBox, parentNode.firstChild);
}

function benarAction() {
    confirmGoodbye = false;
    document.getElementById("formEvent").value = "onSubmit";
    document.getElementById("pilihSekolahForm").submit();
}

function salahAction() {
    var popupBackElement = document.getElementById("popupBackElement");
    var popupElement = document.getElementById("popupElement");
    if (popupBackElement) document.body.removeChild(popupBackElement);
    if (popupElement) document.body.removeChild(popupElement);
}

function onSubmit() {
    if (document.readyState !== 'complete')
        return;
    var radioJenisKelaminCount = 0, radioKkCount = 0, jenisKelamin = null, kk = null;
    var noKk, telepon;
    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].type === 'radio') {
            if (inputs[i].name === 'jenis_kelamin') {
                radioJenisKelaminCount++;
                if (inputs[i].checked) {
                    jenisKelamin = inputs[i].value;
                }
            }
        }
        if (inputs[i].name == 'no_kk') {
            noKk = inputs[i].value;
        }
        if (inputs[i].name == 'telepon') {
            telepon = inputs[i].value;
        }
    }
    var warga = '1';
    if (warga == '1')
        warga = 'Kota Surabaya';
    else
        warga = 'Luar Kota Surabaya';
    var errors = [];
    if (!noKk) {
        errors.push('Nomor KK harus diisi.');
    }
    if (!telepon) {
        errors.push('Nomor Telepon/HP harus diisi.');
    }
    if (radioJenisKelaminCount > 0 && jenisKelamin == null) {
        errors.push('Jenis Kelamin harus diisi.');
    }
    if (errors.length > 0) {
        errorBox(errors);
        return;
    }
    if (typeof jQuery == 'undefined') {
        nativePopup(
            //'Saya benar-benar warga <b>' + warga + '</b> dengan <b>Nomor KK ' + noKk + '</b>',
            'Apakah Anda yakin akan melanjutkan proses pendaftaran?',
            [{action:'benarAction();',value:'Yakin'}, {action:'salahAction();',value:'Tidak, Periksa Kembali'}]
        );
    } else {
        /*$.Dialog({
            'title'       : 'Konfirmasi',
            'content'     :
                //'Saya benar-benar warga <b>' + warga + '</b> dengan <b>Nomor KK ' + noKk + '</b>',
                'Apakah Anda yakin akan melanjutkan proses pendaftaran?',
            'draggable'   : true,
            'overlay'     : true,
            'closeButton' : false,
            'buttonsAlign': 'right',
            'position'    : {
                'zone'    : 'center',
                'offsetY' : '100px'
            },
            'buttons'     : {
                'Benar'     : {
                    'action': function(){
                        benarAction();
                    }
                },
                'Salah'     : {
                    'action': function(){}
                }
            }
        });*/
        makeModal('Konfirmasi', [{action:'benarAction();',value:'Yakin'}, {action:'salahAction();',value:'Tidak, Periksa Kembali'}], 'Apakah Anda yakin akan melanjutkan proses pendaftaran?');
    }
}
/*
window.onload = function() {
    var validator = new FormValidator(
        'pilihSekolahForm',
        [
            {
                name: 'no_kk',
                display: 'Nomor KK',
                rules: 'required'
            },
            {
                name: 'telepon',
                display: 'Telepon',
                rules: 'required'
            }
        ],
        function(errors, events) {
            if (errors.length <= 0)
                return;
            var errorsBox = document.getElementById('errorsBox');
            if (errorsBox != false) {
                errorsBox.parentNode.removeChild(errorsBox);
            }
            var pilihSekolahForm = document.getElementById('pilihSekolahForm');
            var errorString = '';
            for (var i in errors) {
                errorString += '<div class="notice-text">' + errors[i] + '</div>';
            }
            pilihSekolahForm.innerHTML =
                '<div id="errorsBox" class="notices">' +
                '   <div class="red">' +
                '       <a href="#" class="close"></a>' +
                '       <div class="notice-header fg-color-yellow">Terjadi Kesalahan Validasi</div>' +
                errorString +
                '   </div>' +
                '</div>' +
                pilihSekolahForm.innerHTML
            ;
        }
    );
    validator.setMessage('required', '%s harus diisi.');
    //*
    validator.setMessage('min_length', '%s harus berisi %s karakter.');
    validator.setMessage('max_length', '%s harus berisi %s karakter.');
    validator.setMessage('numeric', '%s harus berisi karakter angka.');
}
*/

var submitButton = document.getElementById('submitButton');

submitButton.onclick = function() {
    onSubmit();
}

function cekNik() {
    if (document.readyState !== 'complete')
        return;
    confirmGoodbye = false;
    document.getElementById('formEvent').value = 'onCekNik';
    document.getElementById('pilihSekolahForm').submit();
}

function onSuratChange() {
    if (document.readyState !== 'complete')
        return;
    confirmGoodbye = false;
    document.getElementById('formEvent').value = 'onSuratChange';
    document.getElementById('pilihSekolahForm').submit();
}