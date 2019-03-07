function filter(bodyType) {

    /*
    Je maakt hier een ajax post op de 'plain' javascript manier. jQuery heeft ook een paar manieren voor ajax posts te maken
    Een makkelijke vind ik zelf $.post() --> https://www.w3schools.com/jquery/ajax_post.asp
    */
    
    var xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            /*
            Als je toch jQuery gebruikt waarom zou je dan niet de response met jquery toevoegen? Zo dus:
            $("#filter").html(this.responseText);
            */
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
