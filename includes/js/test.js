$(document).ready(function ($) {
    'use strict';

    $('a#refresh').on('click', function (e) {
        location.reload();
    });

    $('button#export-button').on('click', function (e) {
        e.preventDefault();

        $.ajax({
            method: "POST",
            url: '/dispatcher.php',
            data: {
                "process": "export"
            }
        })
            .done(function (response) {
                if(typeof response !== "undefined" || typeof response !== undefined) {
                    window.location.href = "includes/media/products.xml";
                }
            })
            .fail(function (response) {
                console.log(response);
                window.alert("Sikertelen exportálás!");
            });
    });

});

function backIndex() {
    window.location.replace("/index.php");
}