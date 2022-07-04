$(document).ready(function(){
    
    // INSERT

    $("#btnSacuvaj").click(function(){

        let velicine = $("input[name='velicine']:checked");
        let selectedVelicine = [];

        for(let velicina of velicine){
            selectedVelicine.push(velicina.value);
        }

        $.ajax({
            url: 'models/products-insert.php',
            method: 'POST',
            data: {
                naziv: $("#naziv").val(),
                opis: $("#opis").val(),
                cena: $("#cena").val(),
                kolicina: $("#kolicina").val(),
                kategorija: $("#kategorija").val(),
                velicine: selectedVelicine,
                send: true
            },
            success: function(data, status, xhr){
                console.warn("Statusni kod:");
                console.log(xhr.status);

                if(xhr.status == 201){
                    alert("Uspesno unet proizvod!");
                }

                // PONOVNI PRIKAZA PROIZVODA

                showProducts();
            },
            error: function(xhr, status, statusText){
                console.error('----> ERROR <----');
                console.log(xhr);
            }
        })
    });

    $("#txtPretraga").keyup(function(){
        let value = $(this).val();
        $.ajax({
            url: 'models/products-filter.php',
            method: 'POST',
            dataType: 'json',
            data: {
                value: value
            },
            success: function(data,status, xhr){
                console.warn(data);
                printProducts(data);
            },
            error: function(xhr, status, statusText){
                console.error('----> ERROR <----');
                console.log(xhr);
            }
        })
    });
});

function showProducts(){
    $.ajax({
        url: 'models/products.php',
        method: 'GET',
        dataType: 'json',
        success: function(data,status, xhr){
            console.warn(data);
            printProducts(data);
        },
        error: function(xhr, status, statusText){
            console.error('----> ERROR <----');
            console.log(xhr);
        }
    })
}

function printProducts(data){
    let html = "", rb = 1;
    for(let product of data){
        html += `<tr>
            <td>${ rb }</td>
            <td>${ product.name }</td>
            <td>${ product.price }</td>
            <td>${ product.quantity }</td>
            <td>${ product.categoryName }</td>
        </tr>`;
        rb++;
    }
    $("#proizvodi").html(html);
}

