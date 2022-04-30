var wantDate = new Date('Dec 1 , 2022 00:00:00').getTime();
var interval = setInterval(()=>{
   var nowDate = new Date().getTime();
   var durationDate = wantDate - nowDate;

   var days   = Math.floor(durationDate / (1000*60*60*24));
   var hours  = Math.floor(durationDate % (1000*60*60*24)/(1000*60*60));
   var minutes= Math.floor(durationDate % (1000*60*60   )/(1000*60   ));
   var seconds= Math.floor(durationDate % (1000*60      )/(1000      ));

   document.getElementById('days').innerHTML = days       + "يوم"  ;
   document.getElementById('hours').innerHTML = hours     + "ساعة";
   document.getElementById('minutes').innerHTML = minutes + "دقيقة";
   document.getElementById('seconds').innerHTML = seconds + "ثانية" ;


   if(durationDate < 0){
      clearInterval(interval);
   }

},1000);



document.getElementById('btn-round').addEventListener('click',()=>{
   alert('I made it up so I could smak you in the face!'); 
   // element.style.display= 'flex';

});


var myModal = new bootstrap.Modal(document.getElementById('modal'),{
   keyboard: false
})