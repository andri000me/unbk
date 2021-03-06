function makeModal(title, buttons, msg) {
  $('#myModal').modal('hide');
  $('#myModal').remove();
  var myModal = '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
  myModal += '<div class="modal-dialog">';
  myModal += '<div class="modal-content">';
  myModal += '<div class="modal-header">';
  myModal += '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
  myModal += '<h4 class="modal-title" id="myModalLabel">' + title + '</h4>';
  myModal += '</div>';
  myModal += '<div class="modal-body">';
  myModal += msg;
  myModal += '</div>';
  myModal += '<div class="modal-footer">';
  for (i in buttons) {
    if (buttons[i].value == 'Salah' || buttons[i].value == 'Tidak, Periksa Kembali' || buttons[i].value == 'Batal') {
      myModal += '<button type="button" class="btn btn-danger" data-dismiss="modal">' + buttons[i].value + '</button>';
    } else if (buttons[i].action == 'salahAction();') {
      myModal += '<button type="button" class="btn btn-primary" data-dismiss="modal">' + buttons[i].value + '</button>';
    } else {
      myModal += '<button type="button" class="btn btn-primary" onclick="' + buttons[i].action + '">' + buttons[i].value + '</button>';
    }
  }
  myModal += '</div></div></div></div>';
  $('body').append(myModal);
  $('#myModal').modal({show: 'true', backdrop: 'static'});
}