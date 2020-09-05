

function tog(){
    if(document.getElementById("navcol-1").style.display=="none"){
        document.getElementById("navcol-1").style.display="block";
    }
    else{
        document.getElementById("navcol-1").style.display="none";
    }
    
}

document.addEventListener('DOMContentLoaded', function() {
    
    event_names = ["powerplay","stockitup","comiccatalysis","caseconundrum","thesnaptheory","doomanddestiny","arthanomicsassembly","marketingmaestros","policypandemonium","journalisminjeopardy","tycoonsoftomorrow"];
    event =[]
    for(var x =0; x<11; x++){

        if(document.getElementById(event_names[x])!=null || document.getElementById(event_names[x])!=undefined){
           event.push(event_names[x]+"eve")
        }
      
    }

    var options = document.getElementsByName("eve");
    let select = document.getElementById("event-name");
    //console.log(event)
    var flag=0;
    for( var x =0; x<11; x++){
       var option = document.getElementById(event_names[x]+"eve");
       //console.log(option)
        // if(event.includes(option.id)){
        //     if(flag==0){
        //         option.selected='selected';
        //         flag=1;
        //         var divs  = document.getElementsByClassName("day");

        //         for(div of divs){
        
        //             if(div.id==event_names[x]){
        //                 div.style.display="block";
        //             }
        //             else{
        //                 div.style.display="none";
        //             }
        //         }
        //     }
            
            
                
            
        // }
        // else{
        //     document.getElementById(event_names[x]+"eve").style.display="none";
        // }
    }
    
}, false);


function changeDiv(){
    
    let select = document.getElementById("event-name");
    
    var divs  = document.getElementsByClassName("day");
    
    var id = select.options[select.selectedIndex].value
    
    for(div of divs){
        
        if(div.id==id){
            div.style.display="block";
        }
        else{
            div.style.display="none";
        }
    }
}
