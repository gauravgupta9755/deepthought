
const country_name=document.getElementsByClassName("countryname");
const google_map=document.getElementsByClassName("googlemap");
const flag=document.getElementsByClassName("flag");
const lang=document.getElementsByClassName("lang");
const loc=document.getElementsByClassName("loc");
const cur=document.getElementsByClassName("cur");
const map_navigate=document.getElementsByClassName("map_navigate");
const input =document.getElementById("searchcountry");
const searchcountrybtn=document.getElementById("searchcountrybtn");
const date=document.getElementsByClassName("date");
const curtemp=document.getElementsByClassName("curtemp");
const mintemp=document.getElementsByClassName("mintemp");
const maxtemp=document.getElementsByClassName("maxtemp");
const weatherstatus=document.getElementsByClassName("weatherstatus");
const coatOfArms =document.getElementsByClassName("coatOfArms");


console.log(maxtemp);

// set current date------------------------------------------
for(let i=0;i<date.length;i++){
    const d1=new Date();
    date[i].innerHTML=`${d1.getDate()} | ${d1.getMonth()} | ${d1.getFullYear()}`
}






// search input-----------------------------


const featch_data=async ()=>{
    const v= input.value;

    const data=await fetch(`https://restcountries.com/v3.1/name/${v}`);
        const val= await data.json();
        console.log(val);
       for(let i=0;i<country_name.length;i++){
country_name[i].innerHTML=val[0].name.common
       }


        for(let i=0;i<flag.length;i++){
            if(flag[i].tagName=="H1"){
               
                flag[i].style.backgroundImage=`url(${val[0].flags.svg})`;
            }
            else{
                flag[i].setAttribute("src",val[0].flags.svg);
            }
        }

        for(let i=0;i<loc.length;i++){
        
            loc[i].innerHTML=`${val[0].latlng[0]}, ${val[0].latlng[1]}` ;
        }



        for(let i=0;i<lang.length;i++){
            const l=Object.values(val[0].languages);
            lang[i].innerHTML= l.toString();
        }

        for(let i=0;i<cur.length;i++){
            let c=Object.values(val[0].currencies);
           c=Object.values(c[0]);
            console.log(c.toString());
            cur[i].innerHTML=c.toString();
        }
        for(let i=0;i<google_map.length;i++){
            console.log(val[0].cca2.toLowerCase());
            google_map[i].setAttribute("src",`https://www.countryreports.org/cdn_image.htp?type=image&format=exW_1200&file=images/maps/en/${val[0].cca2.toLowerCase()}/${val[0].cca2.toLowerCase()}-area&ext=gif`);
        }

        for(let i=0;i<map_navigate.length;i++){
            map_navigate[i].setAttribute("href",val[0].maps.googleMaps);
        }

        // set temperature by lat and lng------------------------------

        const weatherData= await fetch(`https://api.openweathermap.org/data/2.5/weather?lat=${val[0].latlng[0]}&lon=${val[0].latlng[1]}&appid=11cbb19ccbb3cf74cb8e2e0619d865f3`);
        const weather_Data= await weatherData.json();
        console.log(weather_Data);
        for(let i=0;i<curtemp.length;i++){
            curtemp[i].innerHTML=(weather_Data.main.temp-273).toFixed(2);
        }
        for(let i=0;i<maxtemp.length;i++){
            maxtemp[i].innerHTML=(weather_Data.main.temp_max-273).toFixed(2);
        }
        for(let i=0;i<mintemp.length;i++){
            mintemp[i].innerHTML=(weather_Data.main.temp_min-273).toFixed(2);
        }
        for(let i=0;i<weatherstatus.length;i++){
            weatherstatus[i].innerHTML=weather_Data.weather[0].main;
        }

        for(let i=0;i<coatOfArms.length;i++){
            coatOfArms[i].setAttribute("src",val[0].coatOfArms.svg);
        }

}
searchcountrybtn.addEventListener("click",featch_data);
searchcountrybtn.click();
input.addEventListener("",featch_data);



// all country-------------------------

const  all_country=document.getElementsByClassName("all_country")[0];
all_country.style.display="none";
const allcountry=()=>{
    if(all_country.style.display=="none"){
        all_country.style.display="flex";
    }
    else{
        all_country.style.display="none";
    }
}
const all =document.getElementById("all");
const papular=document.getElementById("papular");

const all_data= async() =>{
    
    const data=await fetch("https://restcountries.com/v3.1/all");
     const val= await data.json();
    //  console.log(val);

     const value=[];
     for(let j=0;j<val.length;j++){
         value.push(val[j].name.common);
     }
     value.sort();
      
     let i=0;
    

   for(i;i<value.length/2;i++){
       const li=  document.createElement("li");
       li.addEventListener("click",allcountry);
       
       li.addEventListener("click",(e)=>{
        const v= e.target.innerHTML;
        console.log(v);
        input.value=v;
    });
    li.addEventListener("click",featch_data);
       li.innerHTML=value[i];
       all.appendChild(li);


   }
   for(i;i<value.length;i++){
    const li=  document.createElement("li");
  
    


    li.addEventListener("click",(e)=>{
        const v= e.target.innerHTML;
        console.log(v);
        input.value=v;
    });
    li.addEventListener("click",featch_data);
    li.addEventListener("click",allcountry);
    li.innerHTML=value[i];
    papular.appendChild(li);
   }

}
all_data();



// https://api.openweathermap.org/data/2.5/weather?lat=20&lon=77&appid=11cbb19ccbb3cf74cb8e2e0619d865f3



