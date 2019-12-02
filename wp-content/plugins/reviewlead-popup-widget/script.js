function openReview() {
    console.log("Hello world!");
    $("#reviewLeadButton").removeClass("rl-showen");
    $("#reviewLeadButton").addClass("rl-hidden");
    $("#reviewLeadForm").removeClass("rl-hidden");
    $("#reviewLeadForm").addClass("rl-showen");
}

function closeReview() {
    $("#reviewLeadButton").removeClass("rl-hidden");
    $("#reviewLeadButton").addClass("rl-showen");
    $("#reviewLeadForm").removeClass("rl-showen");
    $("#reviewLeadForm").addClass("rl-hidden");

}

$("#reviewLeadButton").click(function(){
    openReview();
});

$("#rl-closeButton").click(function(){
    closeReview();
});

