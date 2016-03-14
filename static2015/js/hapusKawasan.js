function yesAction() {
    makeModal('Konfirmasi Penghapusan', [{action:'yes1Action();',value:'Ya'}, {action:'noAction();',value:'Batal'}], 'Setelah data dihapus, maka harus melakukan proses <b>pendaftaran kembali mulai dari awal.</b>');
}

function yes1Action() {
    document.getElementById('hapusForm').submit();
}

function noAction() {}

var noUn = document.getElementById('nomorUjian').innerHTML;
$('#hapusBtn').click(function(e) {
    makeModal('Konfirmasi Penghapusan', [{action:'yesAction();',value:'Ya'}, {action:'noAction();',value:'Batal'}], 'Penghapusan data hanya jika terjadi <b>kesalahan penginputan</b>. Hapus data pendaftaran siswa ?');
});