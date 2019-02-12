function filter(bodyType) {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("filter").innerHTML = this.responseText;
    
        }else if(this.status == 404){
            console.log("Deze pagina bestaat niet!");
        }
    };

    xmlhttp.open("GET", "filter.php?bodyType=" + bodyType, true);
    xmlhttp.send();

    }

    function filterAll(car) {
        
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
    
                document.getElementById("filter").innerHTML = this.responseText;
        
            }else if(this.status == 404){
                console.log("Deze pagina bestaat niet!");
            }
        };
    
        xmlhttp.open("GET", "filterAll.php?car=" + car, true);
        xmlhttp.send();
    }