function disableTakenSeats(seatIDs){
    $(document).on('ready', function(){
        for (x in seatIDs){
            $("#"+seatIDs[x]).attr("disabled", true);
        }
    });
} 
