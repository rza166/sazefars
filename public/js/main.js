function etebar() {
//   var esi=$('#codemeli').val();
// alert(esi);
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../etebar',
    data: {
         name:$('#name').val(),
         codemeli:$('#codemeli').val(),
         madrak:$('#madrak').val(),
         reshteh:$('#reshteh').val(),
         univercity:$('#univercity').val(),
         tavalod:$('#tavalod').val(),
         mobile:$('#mobile').val(),
         tel:$('#tel').val(),
         email:$('#email').val(),
         jensiyat:$('#jensiyat:checked').val(),

       },
    success:function(data){
      refresh()
      $('#error').html('<div class="alert alert-success"> ثبت با موفقیت انجام شد </div>')
      document.getElementById('reset').reset();
      // window.location.href = "/estekhdam/";

    },
    error: function(xhr) {
          var errors = xhr.responseJSON;

        var error=errors.errors;
        if(error['name']){
          $('#name').val('')
          $('#error').html('<div class="alert alert-danger ">' + error['codemeli'] +'</div>');
            }

        else if(error['codemeli']){
          $('#codemeli').val('')
          $('#error').html('<div class="alert alert-danger ">' + error['codemeli'] +'</div>');

        }
          else if(error['madrak']){
          $('#error').html('<div class="alert alert-danger">' + error['madrak'] +'</div>');
        }
        else if(error['reshte']){
        $('#error').html('<div class="alert alert-danger">' + error['reshte'] +'</div>');
      }
      else if(error['univercity']){
      $('#error').html('<div class="alert alert-danger">' + error['univercity'] +'</div>');
    }
    else if(error['tavalod']){
    $('#error').html('<div class="alert alert-danger">' + error['tavalod'] +'</div>');
  }
  else if(error['mobile']){
  $('#error').html('<div class="alert alert-danger">' + error['mobile'] +'</div>');
   }
else if(error['tel']){
$('#error').html('<div class="alert alert-danger">' + error['tel'] +'</div>');
   }
else if(error['email']){
$('#error').html('<div class="alert alert-danger">' + error['email'] +'</div>');
}
          else if(error['jensiyat']){
         $('#error').html('<div class="alert alert-danger">' + error['jensiyat'] +'</div>');
       }
     }
  });

}
