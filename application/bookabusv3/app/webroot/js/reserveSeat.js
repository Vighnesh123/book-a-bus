function disableTakenSeats(seatIDs){
    $(document).on('ready', function(){
        for (x in seatIDs){
            $('#'+seatIDs[x]).attr('disabled', true);
        }
    });
}

function calculatePrice(price){
    var priceTotal = 0.00;
    price.toFixed(2);
    $(document).ready(function (){
        $('input:checkbox').on('change', function(){
            if($(this).prop('checked')){
                //alert(price);
                priceTotal += price;
            }else {
                priceTotal -=price;
            }
            $('#price').text(priceTotal.toFixed(2));
        });
    });
    
}
