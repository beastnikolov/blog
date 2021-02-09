function SubmitPost() {
    document.getElementById("postSubmitButt").submit();
}

function MakePurchase() {
    document.getElementById("purchaseButt").submit();
}

$(document).ready(function($) {
    $(".clickable-row").click(function() {
        console.log($(this).attr("href"));
        window.location.href = $(this).attr("href");
    });

    
});
