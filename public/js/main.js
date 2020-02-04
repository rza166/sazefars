
//مربوط به اعتیار سنجی وارسال داده ها به جدول دیتابیس
function etebar() {
//   var esi=$('#codemeli').val();
// alert(esi);
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../etebar',
    data: {
         namefamil:$('#namefamil').val(),
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
    success:function(id){
      $('#error').html('<div class="alert alert-success">اطلاعات شما با موفقیت ثبت شد </div>')
      document.getElementById('reset').reset();


    },
    error: function(xhr) {
          var errors = xhr.responseJSON;

        var error=errors.errors;
        if(error['namefamil']){
          $('#namefamil').val('')
          $('#error').html('<div class="alert alert-danger ">' + error['namefamil'] +'</div>');
            }

        else if(error['codemeli']){
          $('#codemeli').val('')
          $('#error').html('<div class="alert alert-danger ">' + error['codemeli'] +'</div>');

        }
          else if(error['madrak']){
          $('#error').html('<div class="alert alert-danger">' + error['madrak'] +'</div>');
        }
        else if(error['reshteh']){
        $('#error').html('<div class="alert alert-danger">' + error['reshteh'] +'</div>');
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
//
// function edit(id) {
//   $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
//   $.ajax({
//     type:'post',
//     url:'../edit2',
//     data: {
//          id:id,
//          namefamil:$('#namefamil2').val(),
//          codemeli:$('#codemeli2').val(),
//          madrak:$('#madrak2').val(),
//          reshteh:$('#reshteh2').val(),
//          univercity:$('#univercity2').val(),
//          tavalod:$('#tavalod2').val(),
//          mobile:$('#mobile2').val(),
//          tel:$('#tel2').val(),
//          email:$('#email2').val(),
//          jensiyat:$('#jensiyat2:checked').val(),
//
//
//        },
//     success:function(data){
//       $('#editmodal').modal('show');
//
//     },
//     error: function(xhr) {
//
//         var errors = xhr.responseJSON;
//
//         var error=errors.errors;
//         if(error['codemeli']){
//            $('#codemeli').val('')
//            $('#error2').html('<div class="alert alert-danger ">' + error['codemeli'] +'</div>');
//
//          }
//            else if(error['madrak']){
//            $('#error2').html('<div class="alert alert-danger">' + error['madrak'] +'</div>');
//          }
//          else if(error['reshteh']){
//          $('#error').html('<div class="alert alert-danger">' + error['reshteh'] +'</div>');
//        }
//        else if(error['univercity']){
//        $('#error2').html('<div class="alert alert-danger">' + error['univercity'] +'</div>');
//      }
//      else if(error['tavalod']){
//      $('#error2').html('<div class="alert alert-danger">' + error['tavalod'] +'</div>');
//    }
//    else if(error['mobile']){
//    $('#error2').html('<div class="alert alert-danger">' + error['mobile'] +'</div>');
//     }
//   else if(error['tel']){
//   $('#error2').html('<div class="alert alert-danger">' + error['tel'] +'</div>');
//     }
//   else if(error['email']){
//   $('#error2').html('<div class="alert alert-danger">' + error['email'] +'</div>');
//   }
//            else if(error['jensiyat']){
//           $('#error2').html('<div class="alert alert-danger">' + error['jensiyat'] +'</div>');
//         }
//
//      }
//   });
// //   var esi=$('#codemeli').val();
// // alert(esi);
// }



function virayesh(id) {
   //   var esi=$('#namefamil2').val();
   // alert(esi);
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'/virayesh',
    data: {
         id:id,
         namefamil:$('#namefamil2').val(),
         codemeli:$('#codemeli2').val(),
         madrak:$('#madrak2').val(),
         reshteh:$('#reshteh2').val(),
         univercity:$('#univercity2').val(),
         tavalod:$('#tavalod2').val(),
         mobile:$('#mobile2').val(),
         tel:$('#tel2').val(),
         email:$('#email2').val(),
         jensiyat:$('#jensiyat2:checked').val(),

       },
    success:function(data){
      $('#error2').html('<div class="alert alert-success">ویرایش با موفقیت انجام شد </div>')
      // document.getElementById('reset').reset();
          // window.location.href = `/sabt/${id}`;

    },
    error: function(xhr) {
      scroll_form('virayesh')
     refresh()

        var errors = xhr.responseJSON;

        var error=errors.errors;
       if(error['codemeli2']){
          $('#codemeli').val('')
          $('#error2').html('<div class="alert alert-danger ">' + error['codemeli'] +'</div>');

        }
          else if(error['madrak']){
          $('#error2').html('<div class="alert alert-danger">' + error['madrak'] +'</div>');
        }
        else if(error['reshteh']){
        $('#error').html('<div class="alert alert-danger">' + error['reshteh'] +'</div>');
      }
      else if(error['univercity']){
      $('#error2').html('<div class="alert alert-danger">' + error['univercity'] +'</div>');
    }
    else if(error['tavalod']){
    $('#error2').html('<div class="alert alert-danger">' + error['tavalod'] +'</div>');
  }
  else if(error['mobile']){
  $('#error2').html('<div class="alert alert-danger">' + error['mobile'] +'</div>');
   }
else if(error['tel']){
$('#error2').html('<div class="alert alert-danger">' + error['tel'] +'</div>');
   }
else if(error['email']){
$('#error2').html('<div class="alert alert-danger">' + error['email'] +'</div>');
}
          else if(error['jensiyat']){
         $('#error2').html('<div class="alert alert-danger">' + error['jensiyat'] +'</div>');
       }

     }
  });
}

// مربوط به سرچ ویرایش
function searchmeli() {
// h=$('#search').val();
// alert(h)
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'/searchmeli',
    data:{
      codemeli:$('#search').val(),
    },
    success:function(id){
    window.location.href = `/sabt/${id}`;
  },
    error: function(xhr) {
        var errors = xhr.responseJSON;

        var error=errors.errors;
       if(error['codemeli2']){
          $('#error2').html('<div class="alert alert-danger ">' + error['codemeli2'] +'</div>');
        }
        else if(error['no_codmeli']){
           $('#error2').html('<div class="alert alert-danger ">' + error['no_codmeli'] +'</div>');
         }

      }

  });
}

// وارد کردن فقط بصورت عدد
function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}

$(document).ready(function() {
	$('#name').on('keypress', function(key) {
		if((key.charCode < 97 || key.charCode > 122) && (key.charCode < 65 || key.charCode > 90) && (key.charCode != 45)) {
			return false;
		}
	});
	$('#phone').on('keypress', function(key) {
        if(key.charCode < 48 || key.charCode > 57) {
			return false;
		}
    });
});
