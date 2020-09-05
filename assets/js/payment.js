if (!!window.performance && window.performance.navigation.type === 2) {
    // value 2 means "The page was accessed by navigating into the history"
    console.log('Reloading');
    window.location.reload();
     // reload whole page

}


function addname(){
    
    if(document.getElementById("contingent_radio").checked==false && document.getElementById("individual_radio").checked==false){
        alert("Please choose contingent or individual")
    }
    else{
        document.getElementById("payment_fdiv").style.display="none";
        document.getElementById("events").style.display="block";
        if(document.getElementById("individual_radio").checked==true){
            var select = document.getElementById("individual_select");
            var options = select.options;
            var index = options.selectedIndex;
            select = document.getElementById("individual_select_amount");
            var options = select.options;
            var amount = options[index].value;
            document.getElementById("amount").innerText="The Final Amount that has to be paid:"+amount;
        }
        else{
            var select = document.getElementById("contingent_select");
            var options = select.options;
            var index = options.selectedIndex;
            select = document.getElementById("contingent_select_amount");
            var options = select.options;
            var amount = options[index].value;
            document.getElementById("amount").innerText="The Final Amount that has to be paid:"+amount;
        }
        
    }
    
}

function previous2(){
    document.getElementById("payment_fdiv").style.display="block";
    document.getElementById("events").style.display="none";
}

    document.getElementById("contingent_radio").onclick = function(){
        console.log("yes");
        document.getElementById("individual_select").style.display="none";
        document.getElementById("contingent_select").style.display="block";
    }
    document.getElementById("individual_radio").onclick = function(){
        document.getElementById("individual_select").style.display="block";
        document.getElementById("contingent_select").style.display="none";
    }

function submitpayment(){
    if(document.getElementById("upload").value==''||document.getElementById("upload").value==null ||document.getElementById("upload").value==undefined){
        alert("Please upload the payment receipt screenshot");
    }
    else{
        document.getElementById("sub").click();
    }
}