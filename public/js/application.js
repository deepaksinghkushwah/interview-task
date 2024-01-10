$(document).ready(function () {
    // create coupon
    $('#btnCreateCoupon').on('click', function () {
      let couponCode = $('#couponCode').val();
      $.ajax({
        url: '/curl/createCoupon',
        type: 'get',
        dataType: 'json',
        beforeSend: function(){
          $('#loader').show();
        },
        success: function (data) {
          //$('#couponResult').html(JSON.stringify(data));
          $('#couponCode').val(data.id);
          $('#loader').hide();
        }
      })
    });
  
    $('#btnRedeemCoupon').on('click', function () {
      $.ajax({
        url: '/curl/validateCoupon',
        data: { couponCode: $('#couponCode').val() },
        type: 'get',
        dataType: 'json',
        beforeSend: function(){
          $('#loader').show();
        },
        success: function (data) {
          if (data.code !== 'rest_no_route') {
            $('#balanceAmt').html(data.amount);
            $('#valid').html('Coupon id is valid');
            $('#error').hide().html('');
          } else {
            $('#error').html('Invalid coupon id');
          }
          $('#loader').hide();
        }
      });
    });
  });