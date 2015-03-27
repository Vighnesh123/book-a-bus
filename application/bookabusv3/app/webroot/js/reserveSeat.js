function disableTakenSeats(seatIDs){
   // for (x in seatIDs){
        //$("#"+seatIDs[x]).attr("disabled", true);
        //console.log(seatIDs[x]);
        //print(seatIDs[x]);
  // }
 // alert(seatIDs);
 console.log("Potato2");
 $("#AA01").prop("disabled", true);
} 

console.log("Potato");
//$("AA01").attr("disabled", true);
$(".container").on('click',disableTakenSeats);
