<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.5.0/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="./js/main.js"></script>
</head>

<body>
  <div class="max-w-2xl mx-auto flex justify-center mt-10 p-3">
    <button class="btn" onclick="my_modal_1.showModal()">Open App</button>
    <dialog id="my_modal_1" class="modal">
      <div class="modal-box">
        <!-- top header-->
        <div class="flex justify-between items-center">
          <h3 class="font-bold text-lg">WC V3 API</h3>
          <span id="loader" style="display: none;" class="loading loading-lg loading-spinner text-primary"></span>
        </div>
        <!-- error code -->
        <div id="error" class="w-full text-red-500"></div>

        <button id="btnCreateCoupon" class="btn w-full my-3">Create Coupon</button>
        <div id="couponResult" class="overflow-hidden"></div>

        <!-- redeem button-->
        <div class="flex flex-col justify-center gap-3">
          <input type="text" class="p-3" name="couponCode" id="couponCode" placeholder="Coupon ID">
          <button class="btn" id="btnRedeemCoupon">Redeem</button>
        </div>

        <div class="my-3 flex justify-between">
          Balance: <span id="balanceAmt">0.00</span>
          <div id="valid" class="text-green-500"></div>
        </div>

        <div class="my-3 flex gap-3 items-end justify-between">
          <div class="flex flex-col gap-3">
            <div>Customer Number</div>
            <div><input type="text" name="" id="customerNumber" class="p-3"></div>
          </div>
          <div>
            <button class="btn">Apply Payment</button>
          </div>

        </div>
        <div class="modal-action">
          <form method="dialog">
            <!-- if there is a button in form, it will close the modal -->
            <button class="btn">Close</button>
          </form>
        </div>
      </div>
    </dialog>
  </div>


</body>

</html>