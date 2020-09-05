function onlyOne(checkbox) {
    var checkboxes = document.getElementsByClassName("form-check-input")
    for( c in checkboxes){
        if (checkboxes[c] !== checkbox) checkboxes[c].checked = false
    }
   
}
if (!!window.performance && window.performance.navigation.type === 2) {
    // value 2 means "The page was accessed by navigating into the history"
    console.log('Reloading');
    window.location.reload();
     // reload whole page

}

var names_list=[];
var name_occur={};
var selectDone=[];
var selectCur={};
var selectTotal = [];
let id_list=["powerplay","stockItUp","comicCatalysis","caseConundrum","theSnapTheory","doomAndDestiny","arthanomicsAssembly","marketingMaestros","policyPandemonium","journalisminJeopardy","tycoonsofTomorrow"];
let other_id=['Powerplay','StockItUp','ComicCatalysis','CaseConundrum','TheSnapTheory','DoomAndDestiny','ArthanomicsAssembly','MarketingMaestros','PolicyPandemonium','JournalisminJeopardy','TycoonsofTomorrow','hidden','hidden1']


function addmember1(){
    //update value of no_of_participants
    //remove all buttons
    var addbtn = document.getElementById("add");
    addbtn.remove();
    if(document.getElementById("hidden1").value>2){
        var rmvbtn = document.getElementById("remove");
        rmvbtn.remove();
    }
    var nxtbtn = document.getElementById("next");
    nxtbtn.remove();
    document.getElementById("hidden1").value++;
    //add rest of the fields
   
    var divv = document.getElementById("participants");
    
    var div = document.createElement("div");
    div.className="form-group name";
    //form.appendChild(divv);
    var label = document.createElement("label");
    label.innerText="Full Name"; 
    var span = document.createElement("span");
    span.className="imp";
    span.innerText=" *";
    label.appendChild(span);
    div.appendChild(label);
    var input = document.createElement("input");
    input.type="text";
    input.name="namein[]";
    input.className="form-control item";
    input.required=true;
    div.appendChild(input);
    divv.appendChild(div); 

    var div = document.createElement("div");
    div.className="form-group email";
    divv.appendChild(div);
    //form.appendChild(divv);
    var label = document.createElement("label");
    label.innerText="Email"; 
    var span = document.createElement("span");
    span.className="imp";
    span.innerText=" *";
    label.appendChild(span);
    div.appendChild(label);
    var input = document.createElement("input");
    input.className="form-control item";
    input.type="text";
    input.name="email[]";
    input.required=true;
    div.appendChild(input);

    var div = document.createElement("div");
    div.className="form-group phone";
    divv.appendChild(div);
    //form.appendChild(divv);
    var label = document.createElement("label");
    label.innerText="Phone"; 
    var span = document.createElement("span");
    span.className="imp";
    span.innerText=" *";
    label.appendChild(span);
    div.appendChild(label);
    var input = document.createElement("input");
    input.type="text";
    input.name="phone[]";
    input.className="form-control item";
    input.required=true;
    div.appendChild(input);
 
    //add buttons
    var div = document.createElement("div");
    div.className="form-group uploadiv";
    var label = document.createElement("label");
    label.innerText="Upload School/College ID proof "; 
    var span = document.createElement("span");
    span.className="imp";
    span.innerText=" *";
    label.appendChild(span);
    div.appendChild(label);
    label.style.marginBottom="0";
    var label2 = document.createElement("label");
    label2.innerText="(ID cards, Marksheet, Fee Receipt, etc)";
    label2.style.fontSize="13px";
    div.appendChild(label2);
    var input = document.createElement("input");
    input.className="btn-light btn-block border-primary";
    input.type="file";
    input.required=true;
    input.id="upload";
    input.name="uploadid[]";
    input.style="color: rgb(4,115,227);";
    input.onclick=uploadid;
    div.appendChild(input);
    divv.appendChild(div);
    //form.appendChild(div);
    
    if(document.getElementById("hidden1").value<=5){
        var addbtn = document.createElement("button");
        addbtn.className="btn btn-light btn-block border-primary";
        addbtn.onclick=addmember;
        addbtn.id="add";
        addbtn.style="color: rgb(4,115,227);";
        addbtn.textContent="Add Members";
        divv.appendChild(addbtn);
    }
    
    //form.appendChild(addbtn); 
    //form.appendChild(rmvbtn); 

   
    divv.appendChild(nxtbtn);
    //form.appendChild(nxtbtn);
}

function addmember(){
    //update value of no_of_participants
    //remove all buttons
    var addbtn = document.getElementById("add");
    addbtn.remove();
    if(document.getElementById("hidden1").value>2){
        var rmvbtn = document.getElementById("remove");
        rmvbtn.remove();
    }
    var nxtbtn = document.getElementById("next");
    nxtbtn.remove();
    document.getElementById("hidden1").value++;
    //add rest of the fields
   
    var divv = document.getElementById("participants");
    
    var div = document.createElement("div");
    div.className="form-group name";
    //form.appendChild(divv);
    var label = document.createElement("label");
    label.innerText="Full Name"; 
    var span = document.createElement("span");
    span.className="imp";
    span.innerText=" *";
    label.appendChild(span);
    div.appendChild(label);
    var input = document.createElement("input");
    input.type="text";
    input.name="namein[]";
    input.className="form-control item";
    input.required=true;
    div.appendChild(input);
    divv.appendChild(div); 

    var div = document.createElement("div");
    div.className="form-group email";
    divv.appendChild(div);
    //form.appendChild(divv);
    var label = document.createElement("label");
    label.innerText="Email"; 
    var span = document.createElement("span");
    span.className="imp";
    span.innerText=" *";
    label.appendChild(span);
    div.appendChild(label);
    var input = document.createElement("input");
    input.className="form-control item";
    input.type="text";
    input.name="email[]";
    input.required=true;
    div.appendChild(input);

    var div = document.createElement("div");
    div.className="form-group phone";
    divv.appendChild(div);
    //form.appendChild(divv);
    var label = document.createElement("label");
    label.innerText="Phone"; 
    var span = document.createElement("span");
    span.className="imp";
    span.innerText=" *";
    label.appendChild(span);
    div.appendChild(label);
    var input = document.createElement("input");
    input.type="text";
    input.name="phone[]";
    input.className="form-control item";
    input.required=true;
    div.appendChild(input);
 
    //add buttons
    var div = document.createElement("div");
    div.className="form-group uploadiv";
    var label = document.createElement("label");
    label.innerText="Upload School/College ID proof"; 
    var span = document.createElement("span");
    span.className="imp";
    span.innerText=" *";
    label.appendChild(span);
    div.appendChild(label);
    label.style.marginBottom="0";
    var label2 = document.createElement("label");
    label2.innerText="(ID cards, Marksheet, Fee Receipt, etc)";
    label2.style.fontSize="13px";
    div.appendChild(label2);
    var input = document.createElement("input");
    input.className="btn-light btn-block border-primary";
    input.type="file";
    input.required=true;
    input.id="upload";
    input.name="uploadid[]";
    input.style="color: rgb(4,115,227);";
    input.onclick=uploadid;
    div.appendChild(input);
    divv.appendChild(div);
    //form.appendChild(div);
    
    if(document.getElementById("hidden1").value<=3){
        var addbtn = document.createElement("button");
        addbtn.className="btn btn-light btn-block border-primary";
        addbtn.onclick=addmember;
        addbtn.id="add";
        addbtn.style="color: rgb(4,115,227);";
        addbtn.textContent="Add Members";
        divv.appendChild(addbtn);
    }
    
    //form.appendChild(addbtn); 
    var rmvbtn = document.createElement("button");
    rmvbtn.className="btn btn-light btn-block border-primary";
    rmvbtn.onclick=removemember;
    rmvbtn.id="remove";
    rmvbtn.style="color: rgb(4,115,227);";
    rmvbtn.textContent="Remove Members";
    divv.appendChild(rmvbtn);
    //form.appendChild(rmvbtn); 

   
    divv.appendChild(nxtbtn);
    //form.appendChild(nxtbtn); 
    addmember();
}

function removemember(){
   let name = document.getElementsByClassName("name");
   console.log(name);
   let email = document.getElementsByClassName("email");
   console.log(email);
   let phone = document.getElementsByClassName("phone");
   console.log(phone);
   let upload = document.getElementsByClassName("uploadiv");
   let len = name.length;

   name[len-1].remove();
   email[len-1].remove();
   phone[len-1].remove();
   upload[len-1].remove();
   name[len-2].remove();
   email[len-2].remove();
   phone[len-2].remove();
   upload[len-2].remove();

   document.getElementById("hidden1").value-=2;
   var rmvbtn = document.getElementById("remove");
    rmvbtn.remove();
    var divv = document.getElementById("participants");
    var nxtbtn = document.getElementById("next");
    nxtbtn.remove();
   var addbtn = document.createElement("button");
   addbtn.className="btn btn-light btn-block border-primary";
   addbtn.onclick=addmember;
   addbtn.id="add";
   addbtn.style="color: rgb(4,115,227);";
   addbtn.textContent="Add Members";
   divv.appendChild(addbtn); 
   
    divv.appendChild(nxtbtn);
   if(document.getElementById("hidden1").value==1){
       console.log("yes")
    var rmvbtn = document.getElementById("remove");
    rmvbtn.remove();
    var divv = document.getElementById("participants");
    var addbtn = document.createElement("button");
    addbtn.className="btn btn-light btn-block border-primary";
    addbtn.onclick=addmember;
    addbtn.id="add";
    addbtn.style="color: rgb(4,115,227);";
    addbtn.textContent="Add Members";
    divv.appendChild(addbtn); 
   }
   if(document.getElementById("hidden1").value==4){
    var rmvbtn = document.getElementById("remove");
    rmvbtn.remove();
    var nxtbtn = document.getElementById("next");
    nxtbtn.remove();
    var divv = document.getElementById("participants");
    var addbtn = document.createElement("button");
    addbtn.className="btn btn-light btn-block border-primary";
    addbtn.onclick=addmember;
    addbtn.id="add";
    addbtn.style="color: rgb(4,115,227);";
    addbtn.textContent="Add Member";
    divv.appendChild(addbtn); 

    var rmvbtn = document.createElement("button");
    rmvbtn.className="btn btn-light btn-block border-primary";
    rmvbtn.onclick=removemember;
    rmvbtn.id="remove";
    rmvbtn.style="color: rgb(4,115,227);";
    rmvbtn.textContent="Remove Members";
    divv.appendChild(rmvbtn);
    //form.appendChild(rmvbtn); 

    var nxtbtn = document.createElement("button");
    nxtbtn.className="btn btn-primary btn-block";
    nxtbtn.id="next";
    nxtbtn.type="button";
    nxtbtn.textContent="Next";
    nxtbtn.onclick=addnames;
    divv.appendChild(nxtbtn);
    //form.appendChild(nxtbtn); 
   }
   
}


function uploadid(){

}

function addnames(){
    let names = document.getElementsByName("namein[]");
    console.log(names);
    len = names.length;
    for(i=0; i<len; i++){
      names_list.push(names[i].value);
    }
    console.log(names_list);
    console.log( document.getElementById("hidden"));
    //document.getElementById("hidden").value=s;
    document.getElementById("participants").style="display:none";
    document.getElementById("events").style="display:block"; 
}

function displayevents(){
    for(i in names_list){
        name_occur[ names_list[i] ]=0;
    }
    console.log(name_occur);
    document.getElementById("events").style="display:none";
    document.getElementById("display_events").style="display:block";

    var divv = document.getElementById("display_events");
    console.log(document.getElementById("Powerplay").checked);

    if(document.getElementById("Powerplay").checked){

        var div = document.createElement("div");
        div.id="powerplay";
        div.className="form-group";
        divv.appendChild(div);
        var h4 = document.createElement("h4");
        h4.innerText="Powerplay"; 
        div.appendChild(h4);
        var h5 = document.createElement("h5");
        h5.innerText="Team 1"; 
        div.appendChild(h5);
        
        var label = document.createElement("label");
        label.innerText="Member"; 
        var span = document.createElement("span");
        span.className="imp";
        span.innerText=" *";
        label.appendChild(span);
        
        div.appendChild(label);
        var select = document.createElement("select");
        select.className="form-control item";
        select.required=true;
        select.id="powerplay"+"select"+"1";
        select.name="choice_powerplay[]";
        selectTotal.push("powerplay"+"select"+"1");
        select.addEventListener('change', function(){
            updateSelect("powerplay"+"select1");
        });
        var opt = document.createElement("option");
        opt.hidden=true;
        opt.selected=true;
        opt.value=true;
        opt.disabled=true;
        select.appendChild(opt);
        for(i in names_list){
            var opt = document.createElement("option");
            opt.id=names_list[i];
            opt.value= names_list[i];
            opt.innerHTML = names_list[i]; // whatever property it has
            // then append it to the select element
            select.appendChild(opt);
        }
        div.appendChild(select);
        var addbtn = document.createElement("button");
        addbtn.className="btn btn-light btn-block border-primary";
        addbtn.onclick=addteam;
        addbtn.style="color: rgb(4,115,227); margin-top:10px;";
        addbtn.textContent="Add Team";
        addbtn.addEventListener('click', function(){
            addteam("powerplay");
        });
        div.appendChild(addbtn); 
    }

    if(document.getElementById("StockItUp").checked){
       
        var div = document.createElement("div");
        div.id="stockItUp";
        div.className="form-group";
        divv.appendChild(div); 
        var br = document.createElement("br");
        div.appendChild(br);
        var h4 = document.createElement("h4");
        h4.innerText="Stock It Up"; 
        div.appendChild(h4);
        var h5 = document.createElement("h5");
        h5.innerText="Team 1"; 
        div.appendChild(h5);
        var label = document.createElement("label");
        label.innerText="Member"; 
        var span = document.createElement("span");
        span.className="imp";
        span.innerText=" *";
        label.appendChild(span);
        div.appendChild(label);
        var select = document.createElement("select");
        select.className="form-control item";
        select.id="stockItUp"+"select"+"1";
        select.name="choice_"+"stockItUp"+"[]";
        selectTotal.push("stockItUp"+"select"+"1");
        select.required=true;
        select.addEventListener('change', function(){
            updateSelect("stockItUp"+"select1");
        });
        var opt = document.createElement("option");
        opt.hidden=true;
        opt.selected=true;
        opt.value=true;
        opt.disabled=true;
        select.appendChild(opt);
        for(i in names_list){
            var opt = document.createElement("option");
            opt.id=names_list[i];
            opt.value= names_list[i];
            opt.innerHTML = names_list[i]; // whatever property it has
            // then append it to the select element
            select.appendChild(opt);
        }
        div.appendChild(select);
        var addbtn = document.createElement("button");
        addbtn.className="btn btn-light btn-block border-primary";
        addbtn.onclick=addteam;
        addbtn.style="color: rgb(4,115,227); margin-top:10px;";
        addbtn.textContent="Add Team";
        addbtn.addEventListener('click', function(){
            addteam("stockItUp");
        });
        div.appendChild(addbtn); 
       
    }

    if(document.getElementById("ComicCatalysis").checked){

        var div = document.createElement("div");
        div.id="comicCatalysis";
        div.className="form-group";
        divv.appendChild(div); 
        var br = document.createElement("br");
        div.appendChild(br);
        var h4 = document.createElement("h4");
        h4.innerText="Comic Catalysis"; 
        div.appendChild(h4);
        var h5 = document.createElement("h5");
        h5.innerText="Team 1"; 
        div.appendChild(h5);
        var label = document.createElement("label");
        label.innerText="Member"; 
        var span = document.createElement("span");
        span.className="imp";
        span.innerText=" *";
        label.appendChild(span);
        div.appendChild(label);
        var select = document.createElement("select");
        select.id="comicCatalysis"+"select"+"1";
        select.name="choice_"+"comicCatalysis"+"[]";
        selectTotal.push("comicCatalysis"+"select"+"1");
        select.className="form-control item";
        select.required=true;
        select.addEventListener('change', function(){
            updateSelect("comicCatalysis"+"select1");
        });
        var opt = document.createElement("option");
        opt.hidden=true;
        opt.selected=true;
        opt.value=true;
        opt.disabled=true;
        select.appendChild(opt);
        for(i in names_list){
            var opt = document.createElement("option");
            opt.id=names_list[i];
            opt.value= names_list[i];
            opt.innerHTML = names_list[i]; // whatever property it has
            // then append it to the select element
            select.appendChild(opt);
        }
        div.appendChild(select);
        var addbtn = document.createElement("button");
        addbtn.className="btn btn-light btn-block border-primary";
        addbtn.onclick=addteam;
        addbtn.style="color: rgb(4,115,227); margin-top:10px;";
        addbtn.textContent="Add Team";
        addbtn.addEventListener('click', function(){
            addteam("comicCatalysis");
        });
        div.appendChild(addbtn); 
    }

    if(document.getElementById("CaseConundrum").checked){
        var div = document.createElement("div");
        div.id="caseConundrum";
        div.className="form-group";
        divv.appendChild(div); 
        var br = document.createElement("br");
        div.appendChild(br);
        var h4 = document.createElement("h4");
        h4.innerText="Case Conundrum"; 
        div.appendChild(h4);
        var h5 = document.createElement("h5");
        h5.innerText="Team 1"; 
        div.appendChild(h5);
        var label = document.createElement("label");
        label.innerText="Member"; 
        var span = document.createElement("span");
        span.className="imp";
        span.innerText=" *";
        label.appendChild(span);
        div.appendChild(label);
        var select = document.createElement("select");
        select.id="caseConundrum"+"select"+"1";
        selectTotal.push("caseConundrum"+"select"+"1");
        select.name="choice_"+"caseConundrum"+"[]";
        select.className="form-control item";
        select.required=true;
        select.addEventListener('change', function(){
            updateSelect("caseConundrum"+"select1");
        });
        var opt = document.createElement("option");
        opt.hidden=true;
        opt.selected=true;
        opt.value=true;
        opt.disabled=true;
        select.appendChild(opt);
        for(i in names_list){
            var opt = document.createElement("option");
            opt.id=names_list[i];
            opt.value= names_list[i];
            opt.innerHTML = names_list[i]; // whatever property it has
            // then append it to the select element
            select.appendChild(opt);
        }
        div.appendChild(select);
        var addbtn = document.createElement("button");
        addbtn.className="btn btn-light btn-block border-primary";
        addbtn.onclick=addteam;
        addbtn.style="color: rgb(4,115,227); margin-top:10px;";
        addbtn.textContent="Add Team";
        addbtn.addEventListener('click', function(){
            addteam("caseConundrum");
        });
        div.appendChild(addbtn);
    }

    
    if(document.getElementById("TheSnapTheory").checked){

        var div = document.createElement("div");
        div.id="theSnapTheory";
        div.className="form-group";
        divv.appendChild(div); 
        var br = document.createElement("br");
        div.appendChild(br);
        var h4 = document.createElement("h4");
        h4.innerText="The Snap Theory"; 
        div.appendChild(h4);
        var h5 = document.createElement("h5");
        h5.innerText="Team 1"; 
        div.appendChild(h5);
        var label = document.createElement("label");
        label.innerText="Member"; 
        var span = document.createElement("span");
        span.className="imp";
        span.innerText=" *";
        label.appendChild(span);
        div.appendChild(label);
        var select = document.createElement("select");
        select.id="theSnapTheory"+"select"+"1";
        select.name="choice_"+"theSnapTheory"+"[]";
        selectTotal.push("theSnapTheory"+"select"+"1");
        select.className="form-control item";
        select.required=true;
        select.addEventListener('change', function(){
            updateSelect("theSnapTheory"+"select1");
        });
        var opt = document.createElement("option");
        opt.hidden=true;
        opt.selected=true;
        opt.value=true;
        opt.disabled=true;
        select.appendChild(opt);
        for(i in names_list){
            var opt = document.createElement("option");
            opt.id=names_list[i];
            opt.value= names_list[i];
            opt.innerHTML = names_list[i]; // whatever property it has
            // then append it to the select element
            select.appendChild(opt);
        }
        div.appendChild(select);
        var addbtn = document.createElement("button");
        addbtn.className="btn btn-light btn-block border-primary";
        addbtn.onclick=addteam;
        addbtn.style="color: rgb(4,115,227); margin-top:10px;";
        addbtn.textContent="Add Team";
        addbtn.addEventListener('click', function(){
            addteam("theSnapTheory");
        });
        div.appendChild(addbtn); 
    }
    if(document.getElementById("DoomAndDestiny").checked){
        var div = document.createElement("div");
        div.id="doomAndDestiny";
        div.className="form-group";
        divv.appendChild(div); 
        var br = document.createElement("br");
        div.appendChild(br);
        var h4 = document.createElement("h4");
        h4.innerText="Doom And Destiny"; 
        div.appendChild(h4);
        var h5 = document.createElement("h5");
        h5.innerText="Team 1"; 
        div.appendChild(h5);
        var label = document.createElement("label");
        label.innerText="PoC Member"; 
        var span = document.createElement("span");
        span.className="imp";
        span.innerText=" *";
        label.appendChild(span);
        div.appendChild(label);
        var select = document.createElement("select");
        select.id="doomAndDestiny"+"select"+"1";
        select.name="choice_"+"doomAndDestiny"+"[]";
        selectTotal.push("doomAndDestiny"+"select"+"1");
        select.addEventListener('change', function(){
            updateSelect("doomAndDestiny"+"select1");
        });
        select.className="form-control item";
        select.required=true;
        var opt = document.createElement("option");
        opt.hidden=true;
        opt.selected=true;
        opt.value=true;
        opt.disabled=true;
        select.appendChild(opt);
        for(i in names_list){
            var opt = document.createElement("option");
            opt.id=names_list[i];
            opt.value= names_list[i];
            opt.innerHTML = names_list[i]; // whatever property it has
            // then append it to the select element
            select.appendChild(opt);
        }
        div.appendChild(select);
        var label = document.createElement("label");
        label.innerText="Member"; 
        var span = document.createElement("span");
        span.className="imp";
        span.innerText=" *";
        label.appendChild(span);
        div.appendChild(label);
        var select = document.createElement("select");
        selectTotal.push("doomAndDestiny"+"select"+"2");
        select.id="doomAndDestiny"+"select"+"2";
        select.name="choice_"+"doomAndDestiny"+"[]";
        select.addEventListener('change', function(){
            updateSelect("doomAndDestiny"+"select2");
        });
        select.className="form-control item";
        select.required=true;
        var opt = document.createElement("option");
        opt.hidden=true;
        opt.selected=true;
        opt.value=true;
        opt.disabled=true;
        select.appendChild(opt);
        for(i in names_list){
            var opt = document.createElement("option");
            opt.id=names_list[i];
            opt.value= names_list[i];
            opt.innerHTML = names_list[i]; // whatever property it has
            // then append it to the select element
            select.appendChild(opt);
        }
        div.appendChild(select);
        var addbtn = document.createElement("button");
        addbtn.className="btn btn-light btn-block border-primary";
        addbtn.onclick=addteam;
        addbtn.style="color: rgb(4,115,227); margin-top:10px;";
        addbtn.textContent="Add Team";
        addbtn.addEventListener('click', function(){
            addteamtwo("doomAndDestiny");
        });
        div.appendChild(addbtn); 
    }
    if(document.getElementById("ArthanomicsAssembly").checked){
        var div = document.createElement("div");
        div.id="arthanomicsAssembly";
        div.className="form-group";
        divv.appendChild(div); 
        var br = document.createElement("br");
        div.appendChild(br);
        var h4 = document.createElement("h4");
        h4.innerText="Arthanomics Assembly"; 
        div.appendChild(h4);
        var h5 = document.createElement("h5");
        h5.innerText="Team 1"; 
        div.appendChild(h5);
        var label = document.createElement("label");
        label.innerText="PoC Member"; 
        var span = document.createElement("span");
        span.className="imp";
        span.innerText=" *";
        label.appendChild(span);
        div.appendChild(label);
        var select = document.createElement("select");
        select.id="arthanomicsAssembly"+"select"+"1";
        select.name="choice_"+"arthanomicsAssembly"+"[]";
        selectTotal.push("arthanomicsAssembly"+"select"+"1");
        select.addEventListener('change', function(){
            updateSelect("arthanomicsAssembly"+"select1");
        });
        select.className="form-control item";
        select.required=true;
        var opt = document.createElement("option");
        opt.hidden=true;
        opt.selected=true;
        opt.value=true;
        opt.disabled=true;
        select.appendChild(opt);
        for(i in names_list){
            var opt = document.createElement("option");
            opt.id=names_list[i];
            opt.value= names_list[i];
            opt.innerHTML = names_list[i]; // whatever property it has
            // then append it to the select element
            select.appendChild(opt);
        }
        div.appendChild(select);
        var label = document.createElement("label");
        label.innerText="Member"; 
        var span = document.createElement("span");
        span.className="imp";
        span.innerText=" *";
        label.appendChild(span);
        div.appendChild(label);
        var select = document.createElement("select");
        selectTotal.push("arthanomicsAssembly"+"select"+"2");
        select.id="arthanomicsAssembly"+"select"+"2";
        select.name="choice_"+"arthanomicsAssembly"+"[]";
        select.addEventListener('change', function(){
            updateSelect("arthanomicsAssembly"+"select2");
        });
        select.className="form-control item";
        select.required=true;
        var opt = document.createElement("option");
        opt.hidden=true;
        opt.selected=true;
        opt.value=true;
        opt.disabled=true;
        select.appendChild(opt);
        for(i in names_list){
            var opt = document.createElement("option");
            opt.id=names_list[i];
            opt.value= names_list[i];
            opt.innerHTML = names_list[i]; // whatever property it has
            // then append it to the select element
            select.appendChild(opt);
        }
        div.appendChild(select);
        var addbtn = document.createElement("button");
        addbtn.className="btn btn-light btn-block border-primary";
        addbtn.onclick=addteam;
        addbtn.style="color: rgb(4,115,227); margin-top:10px;";
        addbtn.textContent="Add Team";
        addbtn.addEventListener('click', function(){
            addteamtwo("arthanomicsAssembly");
        });
        div.appendChild(addbtn); 
    }
    if(document.getElementById("MarketingMaestros").checked){
        var div = document.createElement("div");
        div.id="marketingMaestros";
        div.className="form-group";
        divv.appendChild(div); 
        var br = document.createElement("br");
        div.appendChild(br);
        var h4 = document.createElement("h4");
        h4.innerText="Marketing Maestros"; 
        div.appendChild(h4);
        var h5 = document.createElement("h5");
        h5.innerText="Team 1"; 
        div.appendChild(h5);
        var label = document.createElement("label");
        label.innerText="PoC Member"; 
        var span = document.createElement("span");
        span.className="imp";
        span.innerText=" *";
        label.appendChild(span);
        div.appendChild(label);
        var select = document.createElement("select");
        select.id="marketingMaestros"+"select"+"1";
        select.name="choice_"+"marketingMaestros"+"[]";
        selectTotal.push("marketingMaestros"+"select"+"1");
        select.addEventListener('change', function(){
            updateSelect("marketingMaestros"+"select1");
        });
        select.className="form-control item";
        select.required=true;
        var opt = document.createElement("option");
        opt.hidden=true;
        opt.selected=true;
        opt.value=true;
        opt.disabled=true;
        select.appendChild(opt);
        for(i in names_list){
            var opt = document.createElement("option");
            opt.id=names_list[i];
            opt.value= names_list[i];
            opt.innerHTML = names_list[i]; // whatever property it has
            // then append it to the select element
            select.appendChild(opt);
        }
        div.appendChild(select);
        var label = document.createElement("label");
        label.innerText="Member"; 
        var span = document.createElement("span");
        span.className="imp";
        span.innerText=" *";
        label.appendChild(span);
        div.appendChild(label);
        var select = document.createElement("select");
        selectTotal.push("marketingMaestros"+"select"+"2");
        select.id="marketingMaestros"+"select"+"2";
        select.name="choice_"+"marketingMaestros"+"[]";
        select.addEventListener('change', function(){
            updateSelect("marketingMaestros"+"select2");
        });
        select.className="form-control item";
        select.required=true;
        var opt = document.createElement("option");
        opt.hidden=true;
        opt.selected=true;
        opt.value=true;
        opt.disabled=true;
        select.appendChild(opt);
        for(i in names_list){
            var opt = document.createElement("option");
            opt.id=names_list[i];
            opt.value= names_list[i];
            opt.innerHTML = names_list[i]; // whatever property it has
            // then append it to the select element
            select.appendChild(opt);
        }
        div.appendChild(select);
        var addbtn = document.createElement("button");
        addbtn.className="btn btn-light btn-block border-primary";
        addbtn.onclick=addteam;
        addbtn.style="color: rgb(4,115,227); margin-top:10px;";
        addbtn.textContent="Add Team";
        addbtn.addEventListener('click', function(){
            addteamtwo("marketingMaestros");
        });
        div.appendChild(addbtn); 
    }
    if(document.getElementById("PolicyPandemonium").checked){
        var div = document.createElement("div");
        div.id="policyPandemonium";
        div.className="form-group";
        divv.appendChild(div); 
        var br = document.createElement("br");
        div.appendChild(br);
        var h4 = document.createElement("h4");
        h4.innerText="Policy Pandemonium"; 
        div.appendChild(h4);
        var h5 = document.createElement("h5");
        h5.innerText="Team 1"; 
        div.appendChild(h5);
        var label = document.createElement("label");
        label.innerText="PoC Member"; 
        var span = document.createElement("span");
        span.className="imp";
        span.innerText=" *";
        label.appendChild(span);
        div.appendChild(label);
        var select = document.createElement("select");
        select.id="policyPandemonium"+"select"+"1";
        select.name="choice_"+"policyPandemonium"+"[]";
        selectTotal.push("policyPandemonium"+"select"+"1");
        select.addEventListener('change', function(){
            updateSelect("policyPandemonium"+"select1");
        });
        select.className="form-control item";
        select.required=true;
        var opt = document.createElement("option");
        opt.hidden=true;
        opt.selected=true;
        opt.value=true;
        opt.disabled=true;
        select.appendChild(opt);
        for(i in names_list){
            var opt = document.createElement("option");
            opt.id=names_list[i];
            opt.value= names_list[i];
            opt.innerHTML = names_list[i]; // whatever property it has
            // then append it to the select element
            select.appendChild(opt);
        }
        div.appendChild(select);
        var label = document.createElement("label");
        label.innerText="Member"; 
        var span = document.createElement("span");
        span.className="imp";
        span.innerText=" *";
        label.appendChild(span);
        div.appendChild(label);
        var select = document.createElement("select");
        select.id="policyPandemonium"+"select"+"2";
        select.name="choice_"+"policyPandemonium"+"[]";
        selectTotal.push("policyPandemonium"+"select"+"2");
        select.addEventListener('change', function(){
            updateSelect("policyPandemonium"+"select2");
        });
        select.className="form-control item";
        select.required=true;
        var opt = document.createElement("option");
        opt.hidden=true;
        opt.selected=true;
        opt.value=true;
        opt.disabled=true;
        select.appendChild(opt);
        for(i in names_list){
            var opt = document.createElement("option");
            opt.id=names_list[i];
            opt.value= names_list[i];
            opt.innerHTML = names_list[i]; // whatever property it has
            // then append it to the select element
            select.appendChild(opt);
        }
        div.appendChild(select);
        var addbtn = document.createElement("button");
        addbtn.className="btn btn-light btn-block border-primary";
        addbtn.onclick=addteam;
        addbtn.style="color: rgb(4,115,227); margin-top:10px;";
        addbtn.textContent="Add Team";
        addbtn.addEventListener('click', function(){
            addteamtwo("policyPandemonium");
        });
        div.appendChild(addbtn); 
    }

    if(document.getElementById("JournalisminJeopardy").checked){
        var div = document.createElement("div");
        div.id="journalisminJeopardy";
        div.className="form-group";
        divv.appendChild(div); 
        var br = document.createElement("br");
        div.appendChild(br);
        var h4 = document.createElement("h4");
        h4.innerText="Journalism in Jeopardy"; 
        div.appendChild(h4);
        var h5 = document.createElement("h5");
        h5.innerText="Team 1"; 
        div.appendChild(h5);
        var label = document.createElement("label");
        label.innerText="PoC Member"; 
        var span = document.createElement("span");
        span.className="imp";
        span.innerText=" *";
        label.appendChild(span);
        div.appendChild(label);
        var select = document.createElement("select");
        select.id="journalisminJeopardy"+"select"+"1";
        select.name="choice_"+"journalisminJeopardy"+"[]";
        selectTotal.push("journalisminJeopardy"+"select"+"1");
        select.addEventListener('change', function(){
            updateSelect("journalisminJeopardy"+"select1");
        });
        select.className="form-control item";
        select.required=true;
        var opt = document.createElement("option");
        opt.hidden=true;
        opt.selected=true;
        opt.value=true;
        opt.disabled=true;
        select.appendChild(opt);
        for(i in names_list){
            var opt = document.createElement("option");
            opt.id=names_list[i];
            opt.value= names_list[i];
            opt.innerHTML = names_list[i]; // whatever property it has
            // then append it to the select element
            select.appendChild(opt);
        }
        div.appendChild(select);
        var label = document.createElement("label");
        label.innerText="Member"; 
        var span = document.createElement("span");
        span.className="imp";
        span.innerText=" *";
        label.appendChild(span);
        div.appendChild(label);
        var select = document.createElement("select");
        select.id="journalisminJeopardy"+"select"+"2";
        select.name="choice_"+"journalisminJeopardy"+"[]";
        selectTotal.push("journalisminJeopardy"+"select"+"2");
        select.addEventListener('change', function(){
            updateSelect("journalisminJeopardy"+"select2");
        });
        select.className="form-control item";
        select.required=true;
        var opt = document.createElement("option");
        opt.hidden=true;
        opt.selected=true;
        opt.value=true;
        opt.disabled=true;
        select.appendChild(opt);
        for(i in names_list){
            var opt = document.createElement("option");
            opt.id=names_list[i];
            opt.value= names_list[i];
            opt.innerHTML = names_list[i]; // whatever property it has
            // then append it to the select element
            select.appendChild(opt);
        }
        div.appendChild(select);
        var addbtn = document.createElement("button");
        addbtn.className="btn btn-light btn-block border-primary";
        addbtn.onclick=addteam;
        addbtn.style="color: rgb(4,115,227); margin-top:10px;";
        addbtn.textContent="Add Team";
        addbtn.addEventListener('click', function(){
            addteamtwo("journalisminJeopardy");
        });
        div.appendChild(addbtn); 
    }
    if(document.getElementById("TycoonsofTomorrow").checked){
        var div = document.createElement("div");
        div.id="tycoonsofTomorrow";
        div.className="form-group";
        divv.appendChild(div); 
        var br = document.createElement("br");
        div.appendChild(br);
        var h4 = document.createElement("h4");
        h4.innerText="Tycoons of Tomorrow"; 
        div.appendChild(h4);
        var h5 = document.createElement("h5");
        h5.innerText="Team 1"; 
        div.appendChild(h5);
        var label = document.createElement("label");
        label.innerText="PoC Member"; 
        var span = document.createElement("span");
        span.className="imp";
        span.innerText=" *";
        label.appendChild(span);
        div.appendChild(label);
        var select = document.createElement("select");
        select.id="tycoonsofTomorrow"+"select"+"1";
        select.name="choice_"+"tycoonsofTomorrow"+"[]";
        selectTotal.push("tycoonsofTomorrow"+"select"+"1");
        select.addEventListener('change', function(){
            updateSelect("tycoonsofTomorrow"+"select1");
        });
        select.className="form-control item";
        select.required=true;
        var opt = document.createElement("option");
        opt.hidden=true;
        opt.selected=true;
        opt.value=true;
        opt.disabled=true;
        select.appendChild(opt);
        for(i in names_list){
            var opt = document.createElement("option");
            opt.id=names_list[i];
            opt.value= names_list[i];
            opt.innerHTML = names_list[i]; // whatever property it has
            // then append it to the select element
            select.appendChild(opt);
        }
        div.appendChild(select);
        var label = document.createElement("label");
        label.innerText="Member"; 
        var span = document.createElement("span");
        span.className="imp";
        span.innerText=" *";
        label.appendChild(span);
        div.appendChild(label);
        var select = document.createElement("select");
        select.id="tycoonsofTomorrow"+"select"+"2";
        selectTotal.push("tycoonsofTomorrow"+"select"+"2");
        select.name="choice_"+"tycoonsofTomorrow"+"[]";
        select.addEventListener('change', function(){
            updateSelect("tycoonsofTomorrow"+"select2");
        });
        select.className="form-control item";
        select.required=true;
        var opt = document.createElement("option");
        opt.hidden=true;
        opt.selected=true;
        opt.value=true;
        opt.disabled=true;
        select.appendChild(opt);
        for(i in names_list){
            var opt = document.createElement("option");
            opt.id=names_list[i];
            opt.value= names_list[i];
            opt.innerHTML = names_list[i]; // whatever property it has
            // then append it to the select element
            select.appendChild(opt);
        }
        div.appendChild(select);
        var addbtn = document.createElement("button");
        addbtn.className="btn btn-light btn-block border-primary";
        addbtn.onclick=addteam;
        addbtn.style="color: rgb(4,115,227); margin-top:10px;";
        addbtn.textContent="Add Team";
        addbtn.addEventListener('click', function(){
            addteamtwo("tycoonsofTomorrow");
        });
        div.appendChild(addbtn); 
    }

    var h5 = document.createElement("h5");
    h5.innerText="Payment"
    //divv.appendChild(h5);

    var label = document.createElement("label");
    var money = 150*(names_list.length);
    label.innerText="Amount to be paid: "+money;
    label.style="margin:0px;";
    //divv.appendChild(label);
    var label = document.createElement("label");
    label.innerText="Please make sure the amount calculated above matches the amount on your payment receipt";
    label.style="font-size:14px;";
    //divv.appendChild(label);
    
    var h6 = document.createElement("h6");
    h6.innerText="Which payment mode did you use?"
    //divv.appendChild(h6);

    var div = document.createElement("div");
    //div.className="form-group";
    var label = document.createElement("label");
    label.className="radio-inline";
    label.innerText="Paytm";
    label.style="margin-left:5px;";
    var input = document.createElement("input");
    input.type="radio";
    input.name="payment-type";
    input.value="paytm";
    input.style = "margin-right:5px;";
    //input.innerText="Paytm";
    label.appendChild(input);
    div.appendChild(label);
    var label = document.createElement("label");
    label.className="radio-inline";
    label.innerText="Google Pay";
    label.style="margin-left:5px;";
    var input = document.createElement("input");
    input.type="radio";
    input.name="payment-type";
    input.value="googlepay";
    input.style = "margin-right:5px;";
    label.appendChild(input);
    div.appendChild(label);
    
    var label = document.createElement("label");
    label.className="radio-inline";
    label.innerText="Other (for international participants only)";
    label.style="margin-left:5px;";
    var input = document.createElement("input");
    input.type="radio";
    input.name="payment-type";
    input.value="other";
    input.style = "margin-right:5px;";
    label.appendChild(input);
    div.appendChild(label);
    //divv.appendChild(div);

    var div = document.createElement("div");
    div.className="form-group uploadiv";
    var label = document.createElement("label");
    label.innerText="Upload the picture of your receipt"; 
    div.appendChild(label);
    var input = document.createElement("input");
    input.className="btn-light btn-block border-primary";
    input.type="file";
    input.required=true;
    input.id="upload";
    input.name="paymentpic";
    input.style="color: rgb(4,115,227);";
    input.onclick=uploadid;
    div.appendChild(input);
    //divv.appendChild(div);

    var div = document.createElement("div");
    div.style="display:flex; flex-direction:row;";

    var prevbtn = document.createElement("button");
    prevbtn.className= "btn btn-primary btn-block";
    prevbtn.id="prev3";
    prevbtn.type="button";
    prevbtn.style="margin-top:8px;margin-right:10px";
    prevbtn.onclick=previous3;
    prevbtn.textContent="Previous";

    var sbtbtn = document.createElement("button");
    sbtbtn.className="btn btn-primary btn-block";
    sbtbtn.id="next3";
    sbtbtn.type="button";
    sbtbtn.onclick=chck;
    sbtbtn.textContent="Submit";
    //sbtbtn.onclick=addnames;

    var sub = document.createElement("button");
    sub.className="btn btn-primary btn-block";
    sub.style="margin-top:10px;display:none;";
    sub.type="submit";
    sub.id="sub";
    sub.textContent="Next";
    divv.appendChild(sub);

    div.appendChild(prevbtn);
    div.appendChild(sbtbtn);
    divv.appendChild(div);
}

function addteam(id){
    var div = document.getElementById(id);
    console.log(div.children);
    if(id=="powerplay"){
        div.children[4].remove();
    }
    else{
        div.children[5].remove();
    }
    
    var h5 = document.createElement("h5");
    h5.innerText="Team 2"; 
    h5.style="margin-top:8px";
    div.appendChild(h5);
    var label = document.createElement("label");
    label.innerText="Member";
    var span = document.createElement("span");
    span.className="imp";
    span.innerText=" *";
    label.appendChild(span);
    div.appendChild(label);
    var select = document.createElement("select");
    select.id=id+"select"+"2";
    select.name="choice_"+id+"[]";
    select.addEventListener('change', function(){
        updateSelect(id+"select2");
    });
    selectTotal.push(id+"select"+"2");
    select.className="form-control item";
    select.required=true;
    var opt = document.createElement("option");
    opt.hidden=true;
    opt.selected=true;
    opt.value=true;
    opt.disabled=true;
    select.appendChild(opt);
    for(i in names_list){
        if(name_occur[names_list[i]]!=2){
            var opt = document.createElement("option");
            opt.id=names_list[i];
            opt.value= names_list[i];
            opt.innerHTML = names_list[i]; // whatever property it has
            // then append it to the select element
            select.appendChild(opt);
        }
        
    }
    div.appendChild(select);
    var rmvbtn = document.createElement("button");
    rmvbtn.className="btn btn-light btn-block border-primary";
    rmvbtn.id="remove";
    rmvbtn.style="color: rgb(4,115,227); margin-top:10px;";
    rmvbtn.textContent="Remove Team";
    rmvbtn.addEventListener('click', function(){
        rmvteam(id);
    });
    div.appendChild(rmvbtn);
    
}
function addteamtwo(id){
    var div = document.getElementById(id);
    console.log(div.children);
    if(id=="powerplay"){
        div.children[4].remove();
    }
    else{
        div.children[7].remove();
    }
    var h5 = document.createElement("h5");
    h5.innerText="Team 2"; 
    h5.style="margin-top:8px";
    div.appendChild(h5);
    var label = document.createElement("label");
    label.innerText="PoC Member"; 
    var span = document.createElement("span");
    span.className="imp";
    span.innerText=" *";
    label.appendChild(span);
    div.appendChild(label);
    var select = document.createElement("select");
    select.id=id+"select"+"3";
    select.addEventListener('change', function(){
        updateSelect(id+"select3");
    });
    selectTotal.push(id+"select"+"3");
    select.name="choice_"+id+"[]";
    select.className="form-control item";
    select.required=true;
    var opt = document.createElement("option");
    opt.hidden=true;
    opt.selected=true;
    opt.value=true;
    opt.disabled=true;
    select.appendChild(opt);
    for(i in names_list){
        if(name_occur[names_list[i]]!=2){
            var opt = document.createElement("option");
            opt.id=names_list[i];
            opt.value= names_list[i];
            opt.innerHTML = names_list[i]; // whatever property it has
            // then append it to the select element
            select.appendChild(opt);
        } 
        
    }
    div.appendChild(select);
    var label = document.createElement("label");
    label.innerText="Member"; 
    var span = document.createElement("span");
    span.className="imp";
    span.innerText=" *";
    label.appendChild(span);
    div.appendChild(label);
    var select = document.createElement("select");
    select.id=id+"select"+"4";
    select.addEventListener('change', function(){
        updateSelect(id+"select4");
    });
    selectTotal.push(id+"select"+"4");
    select.name="choice_"+id+"[]";
    select.className="form-control item";
    select.required=true;
    var opt = document.createElement("option");
    opt.hidden=true;
    opt.selected=true;
    opt.value=true;
    opt.disabled=true;
    select.appendChild(opt);
    for(i in names_list){
        if(name_occur[names_list[i]]!=2){
            var opt = document.createElement("option");
            opt.id=names_list[i];
            opt.value= names_list[i];
            opt.innerHTML = names_list[i]; // whatever property it has
            // then append it to the select element
            select.appendChild(opt);
        } 
    }
  

    div.appendChild(select);
    var rmvbtn = document.createElement("button");
    rmvbtn.className="btn btn-light btn-block border-primary";
    rmvbtn.id="remove";
    rmvbtn.style="color: rgb(4,115,227); margin-top:10px;";
    rmvbtn.textContent="Remove Team";
    rmvbtn.addEventListener('click', function(){
        rmvteamtwo(id);
    });
    div.appendChild(rmvbtn);
}
function rmvteam(id){
    var div = document.getElementById(id);
    console.log(div.children);
    var start=0;
    var end=0;
    

    if(id=="powerplay"){
        start=7;
        end=4;
    }
    else{
        start=8;
        end=5;
    }

    selectTotal.pop(id+"select2");
    console.log("select done in remove");
    console.log(selectDone);
    console.log(id);
    console.log(id+"select2");
    console.log(selectDone.includes(id+"select2"));
    if(selectDone.includes(id+"select2")){
        var select = document.getElementById(id+"select2");
        var val = select.options[select.selectedIndex].value;
        selectDone.pop(id+"select2");
        console.log("selectDone");
        console.log(selectDone);
        console.log(name_occur[val]);
        if(name_occur[val]==2){
            name_occur[val]-=1;
            console.log("name_occur");
            console.log(name_occur[val]);
            for(s in selectTotal){
                if(selectTotal[s]!=id+"select2"){
                    var select = document.getElementById(selectTotal[s]);
                    //console.log(selectTotal[s]);
                    if(select.options[val]==undefined){
                        var opt = document.createElement("option");
                        opt.id=val;
                        opt.value= val;
                        opt.innerHTML = val; // whatever property it has
                        // then append it to the select element
                        select.appendChild(opt);
                    }
                   
                }
            }
        }
        else if(name_occur[val]==1){
            name_occur[val]-=1;
        }
        
       

    }
    for(var i=start; i>=end; i--){
        div.children[i].remove();
    }
    var addbtn = document.createElement("button");
    addbtn.className="btn btn-light btn-block border-primary";
    addbtn.onclick=addteam;
    addbtn.style="color: rgb(4,115,227); margin-top:10px;";
    addbtn.textContent="Add Team";
    addbtn.addEventListener('click', function(){
        addteam(id);
    });
    div.appendChild(addbtn);
}
function rmvteamtwo(id){
    var div = document.getElementById(id);
    console.log(div.children);
    var start=0;
    var end=0;
    if(id=="powerplay"){
        start=7;
        end=4;
    }
    else{
        start=12;
        end=7;
    }
    selectTotal.pop(id+"select3");
    selectTotal.pop(id+"select4");
    if(selectDone.includes(id+"select3")){
        var select = document.getElementById(id+"select3");
        var val = select.options[select.selectedIndex].value;
        selectDone.pop(id+"select3");
        console.log("selectDone");
        console.log(selectDone);
        console.log(name_occur[val]);
        if(name_occur[val]==2){
            name_occur[val]-=1;
            console.log("name_occur");
            console.log(name_occur[val]);
            for(s in selectTotal){
                if(selectTotal[s]!=id+"select3"){
                    var select = document.getElementById(selectTotal[s]);
                    //console.log(selectTotal[s]);
                    if(select.options[val]==undefined){
                        var opt = document.createElement("option");
                        opt.id=val;
                        opt.value= val;
                        opt.innerHTML = val; // whatever property it has
                        // then append it to the select element
                        select.appendChild(opt);
                    }
                   
                }
            }
        }
        else if(name_occur[val]==1){
            name_occur[val]-=1;
        }
        
       

    }
    if(selectDone.includes(id+"select4")){
        var select = document.getElementById(id+"select4");
        var val = select.options[select.selectedIndex].value;
        selectDone.pop(id+"select4");
        console.log("selectDone");
        console.log(selectDone);
        console.log(name_occur[val]);
        if(name_occur[val]==2){
            name_occur[val]-=1;
            console.log("name_occur");
            console.log(name_occur[val]);
            for(s in selectTotal){
                if(selectTotal[s]!=id+"select4"){
                    var select = document.getElementById(selectTotal[s]);
                    //console.log(selectTotal[s]);
                    if(select.options[val]==undefined){
                        var opt = document.createElement("option");
                        opt.id=val;
                        opt.value= val;
                        opt.innerHTML = val; // whatever property it has
                        // then append it to the select element
                        select.appendChild(opt);
                    }
                   
                }
            }
        }
        else if(name_occur[val]==1){
            name_occur[val]-=1;
        }
        
       

    }
    for(var i=start; i>=end; i--){
        div.children[i].remove();
    }
    var addbtn = document.createElement("button");
    addbtn.className="btn btn-light btn-block border-primary";
    addbtn.onclick=addteam;
    addbtn.style="color: rgb(4,115,227); margin-top:10px;";
    addbtn.textContent="Add Team";
    addbtn.addEventListener('click', function(){
        addteamtwo(id);
    });
    div.appendChild(addbtn);
}

function updateSelect( id){
    console.log(id);
    if(selectDone.includes(id)){
        var key = selectCur[id];
        if(name_occur[key]==2){
            name_occur[key]-=1;
            console.log("select");
            console.log(selectTotal);
            for(s in selectTotal){
                if(selectTotal[s]!=id){
                    var select = document.getElementById(selectTotal[s]);
                    if(select.options[key]==undefined){
                        var opt = document.createElement("option");
                        opt.id=key;
                        opt.value= key;
                        opt.innerHTML = key; // whatever property it has
                        // then append it to the select element
                        select.appendChild(opt);
                    }
                   
                }
            }
        }
        else{
            name_occur[key]-=1;
        }
        
    }
    selectDone.push(id);
   
    var select = document.getElementById(id);
    console.log(select);
    var key = (select.options[select.selectedIndex].value);
    name_occur[key]+=1;
    selectCur[id]=key;
    console.log("name_occur"+name_occur);
    console.log("selectDone"+selectDone);
    console.log("selectCur"+selectCur);
    console.log("selectTotal"+selectTotal);
    if(name_occur[key]==2){
        for(l in selectTotal){
            if(!  selectDone.includes(selectTotal[l])){
                //console.log(names_list[l]);
                var select = document.getElementById(selectTotal[l]);
                select.options[key].remove();
            }
            else{
                var select = document.getElementById(selectTotal[l]);
                var val = (select.options[select.selectedIndex].value);
                if(key!=val){
                    select.options[key].remove();
                }
            }
        }

    }
    
}

document.getElementById("next").onclick = function() {
    var allAreFilled = false;
    var input = document.getElementsByTagName("input");
    console.log(input);
    var flag=true;
    for( i in input){
        if(!other_id.includes(input[i].id)){
            
            if(input[i].value==undefined){
                continue;
            }
            if(input[i].value.length==0 ){
                console.log(input[i]);
                console.log(input[i].value);
                flag=false;
            }
        }
    }
    if(flag==true){
        allAreFilled=true;
    }
    if (!allAreFilled) {
      alert('Fill all the fields');
    }
    else{
        addnames();
    }
  };

function previous2(){
    document.getElementById("participants").style="display:block";
    names_list=[];
    document.getElementById("events").style="display:none"; 
}

document.getElementById("next2").onclick = function() {
    var allAreFilled = false;
    var input = document.getElementsByTagName("input");
    console.log(input);
    var count=0;
    for( i in input){
        if(input[i].id!='hidden' || input[i]!='hidden1'){
            if(other_id.includes(input[i].id)){
                console.log(input[i]);
                if(input[i].checked==true){
                    count+=1;
                }
            }
        }
    }
    console.log(count);
    if(count>=1){
        allAreFilled=true;
    }
    if (!allAreFilled) {
      alert('Select one event');
    }
    else{
        displayevents()
    }
}

function chck() {
    var allAreFilled = false;
    var input = document.getElementsByTagName("select");
    
    var count=0;
    
    console.log("selectDone");
    console.log(selectDone);
    console.log("selectTotal");
    console.log(selectTotal);
    if(selectDone.length<selectTotal.length){

    }
    else{
        count+=1;
    }
    

    if(count>=1){
        allAreFilled=true
    }
    if (!allAreFilled) {
      alert('Fill all the fields');
    }
    else{
       var div = document.getElementById("display_events");
       var label = document.createElement("label");
       label.innerHTML="Submitting form...";
       label.className=("imp");
       label.style="margin-top:10px; margin-left:20px;"
       div.appendChild(label);
       document.getElementById("sub").click();
    }
  }

  function previous3(){
    document.getElementById("events").style="display:block";
    document.getElementById("display_events").innerHTML="";
    selectTotal=[];
    selectDone=[];
    document.getElementById("display_events").style="display:none";
}



