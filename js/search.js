function searchDealer() {

    var category = document.getElementById('searchDealer').value;
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("searchResult").innerHTML = this.responseText;
    
        }else if(this.status == 404){
            console.log("Deze pagina bestaat niet!");
        }
    };

    xmlhttp.open("GET", "search.php?city=" + category, true);
    xmlhttp.send();

    }