var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec")
function countdown(yr,m,d, hh, mm, secc, selesai){
theyear=yr;themonth=m;theday=d;thehour=hh;themin=mm;thesec=secc;theinfo=selesai
var today=new Date(new Date()-jarak);
var todayy=today.getYear()
if (todayy < 1000)
todayy+=1900
var todaym=today.getMonth()
var todayd=today.getDate()
var todayh=today.getHours()
var todaymin=today.getMinutes()
var todaysec=today.getSeconds()
var todaystring=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec
futurestring=montharray[m-1]+" "+d+", "+yr+" "+hh+":"+mm+":"+secc
dd=Date.parse(futurestring)-Date.parse(todaystring)
dday=Math.floor(dd/(60*60*1000*24)*1)
dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1)
dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1)
dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1)
if(dday<0&&dhour<0&&dmin<0&&dsec<=1){
    var cd = document.getElementById('counterdown');
    if (cd!=null) cd.innerHTML = selesai;
    return
}
else{
    if(dday<1&&dhour<3){
        var bcd = document.getElementById('bgcounterdown');
        bcd.setAttribute("class", "span3 red fg-color-white padding5");
    }
    else if(dday<1){
        var bcd = document.getElementById('bgcounterdown');
        bcd.setAttribute("class", "span3 bg-color-orange fg-color-white padding5");
    }
    var cd = document.getElementById('counterdown');
    if (cd!=null) {
        cd.innerHTML = "<table cellpadding = \"0\" id=\"counttable\"><tr><td colspan=\"7\">Sisa Waktu</td></tr><tr><td>"+dday+" <span class=\"font-smallest\"><br>hari</span></td><td><blink>:</blink></td><td>"+dhour+" <span class=\"font-smallest\"><br>jam</span></td><td><blink>:</blink></td><td>"+dmin+" <span class=\"font-smallest\"><br>menit</span></td></tr></table>";
    }
    //if (cd!=null) cd.innerHTML = ""+dday+" hari, "+dhour+" jam, "+dmin+" menit, "+dsec+" detik";
} 
setTimeout("countdown(theyear,themonth,theday, thehour, themin, thesec, theinfo)",1000)
}