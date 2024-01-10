$(document).ready(function () {
  // create coupon
  $('#btnCreateCoupon').on('click', function () {
    let couponCode = $('#couponCode').val();
    $.ajax({
      url: 'http://interview-task.local/create-coupon-wc.php',
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
      url: 'http://interview-task.local/validate-coupon-call.php',
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