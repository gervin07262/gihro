$(document).ready(function() {
  $("#breakfast-full-cup").click(function(){
     $('#result-breakfast-full-cup').removeClass('hidden').siblings().addClass('hidden');
     $('#result-breakfast-cup').val('1');
  });
  $("#breakfast-medium-cup").click(function(){
    $('#result-breakfast-medium-cup').removeClass('hidden').siblings().addClass('hidden');
    $('#result-breakfast-cup').val('2');
  });
  $("#breakfast-empty-cup").click(function(){
    $('#result-breakfast-empty-cup').removeClass('hidden').siblings().addClass('hidden');
    $('#result-breakfast-cup').val('3');
  });
  $("#breakfast-face-happy").click(function(){
     $('#result-breakfast-face-happy').removeClass('hidden').siblings().addClass('hidden');
     $('#result-breakfast-face').val('1');
  });
  $("#breakfast-face-regular").click(function(){
    $('#result-breakfast-face-regular').removeClass('hidden').siblings().addClass('hidden');
    $('#result-breakfast-face').val('2');
  });
  $("#breakfast-face-sad").click(function(){
    $('#result-breakfast-face-sad').removeClass('hidden').siblings().addClass('hidden');
    $('#result-breakfast-face').val('3');
  });

  $("#lunch-full-dish").click(function(){
     $('#result-lunch-full-dish').removeClass('hidden').siblings().addClass('hidden');
     $('#result-lunch-dish').val('1');
  });
  $("#lunch-medium-dish").click(function(){
     $('#result-lunch-medium-dish').removeClass('hidden').siblings().addClass('hidden');
     $('#result-lunch-dish').val('2');
  });
  $("#lunch-empty-dish").click(function(){
     $('#result-lunch-empty-dish').removeClass('hidden').siblings().addClass('hidden');
     $('#result-lunch-dish').val('3');
  });
  $("#lunch-face-happy").click(function(){
     $('#result-lunch-face-happy').removeClass('hidden').siblings().addClass('hidden');
     $('#result-lunch-face').val('1');
  });
  $("#lunch-face-regular").click(function(){
    $('#result-lunch-face-regular').removeClass('hidden').siblings().addClass('hidden');
    $('#result-lunch-face').val('2');
  });
  $("#lunch-face-sad").click(function(){
    $('#result-lunch-face-sad').removeClass('hidden').siblings().addClass('hidden');
    $('#result-lunch-face').val('3');
  });

  $("#snack-full-cup").click(function(){
     $('#result-snack-full-cup').removeClass('hidden').siblings().addClass('hidden');
     $('#result-snack-cup').val('1');
  });
  $("#snack-medium-cup").click(function(){
    $('#result-snack-medium-cup').removeClass('hidden').siblings().addClass('hidden');
    $('#result-snack-cup').val('2');
  });
  $("#snack-empty-cup").click(function(){
    $('#result-snack-empty-cup').removeClass('hidden').siblings().addClass('hidden');
    $('#result-snack-cup').val('3');
  });
  $("#snack-face-happy").click(function(){
     $('#result-snack-face-happy').removeClass('hidden').siblings().addClass('hidden');
     $('#result-snack-face').val('1');
  });
  $("#snack-face-regular").click(function(){
    $('#result-snack-face-regular').removeClass('hidden').siblings().addClass('hidden');
    $('#result-snack-face').val('2');
  });
  $("#snack-face-sad").click(function(){
    $('#result-snack-face-sad').removeClass('hidden').siblings().addClass('hidden');
    $('#result-snack-face').val('3');
  });

  $("#nap-face-happy").click(function(){
     $('#result-nap-face-happy').removeClass('hidden').siblings().addClass('hidden');
     $('#result-nap-face').val('1');
  });
  $("#nap-face-sad").click(function(){
    $('#result-nap-face-sad').removeClass('hidden').siblings().addClass('hidden');
    $('#result-nap-face').val('3');
  });

});
