const weekday = new Array(7);
weekday[0] =  "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturday";

const timeSlots = new Array(5);
timeSlots[0] = 3;
timeSlots[1] = 4;
timeSlots[2] = 5;
timeSlots[3] = 6;
timeSlots[4] = 7;

const d = new Date();

const select_id = ['heroSelectDay','selectDay'];

function validate(event){
    console.log(document.getElementsByName('hero_form')[0]);
    event.preventDefault();
}

function getDays(){
    for(j=0;j<select_id.length;j++){
        let id = select_id[j];
    for(i=0;i<weekday.length;i++){
        if(i >= d.getDay()){
            var f = `<option `+`value=`+`"`+weekday[i]+`">`+weekday[i]+`</option>`;
            document.getElementById(id).innerHTML += f;
        }
    }
}
console.log(d.getHours(),d.getMinutes(),d.getSeconds());
// ,(d.getTimezoneOffset()/60)

// console.log(d.getHours() < 12 ? 'AM' : 'PM');

    const tz = jstz.determine() || 'UTC';
    console.log(tz.name());

}

function getMatchedTimeSlots(date,id){

if(id === "heroSelectDay"){
    var targetId = "heroSelectTime";
}

else{
    var targetId = "selectTime";
}

document.getElementById(targetId).innerHTML = "<option selected default >Select a Time</option>";

    if( date === weekday[d.getDay()]){
        const time = (d.getHours() - 12) > 0 ? (d.getHours() -12) : (12 - d.getHours());
        
        for(i=0;i<timeSlots.length;i++){
            if( time < timeSlots[i]){
                var f = `<option `+`value=`+`"`+timeSlots[i]+`">`+timeSlots[i]+`</option>`;
            document.getElementById(targetId).innerHTML += f;
            }
        }
    }

    else {
        for(i=0;i<timeSlots.length;i++){
                var f = `<option `+`value=`+`"`+timeSlots[i]+`">`+timeSlots[i]+`</option>`;
            document.getElementById(targetId).innerHTML += f;
        }
    }
}

function getTimeSlots(id){

    const date = document.getElementById(id).value;
    getMatchedTimeSlots(date,id);
}