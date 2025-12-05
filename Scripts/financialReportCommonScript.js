
function rescaleWindow() {
    var size = { width: $(window).width(), height: $(window).height() };
    // calculate size
    var offset = 20;
    var offsetBody = 80;
    $('#billModalDialog').css('height', size.height - offset);
    $('#billModalDialog .modal-body').css('height', size.height - (offset + offsetBody));
    $('#billModalDialog').css('top', 0);
}


function loadPeriodTextContent(selectedYear){
    // load period text
    var peridoText = "";
    var startDatePref = "01.01.";
    var endDatePref = "31.12.";

    var currentYear = new Date().getFullYear();
    if(selectedYear == currentYear){
        peridoText = periodTitleLabel  + startDatePref + selectedYear + " - " + dateToGermanStr(new Date());
    } else {
        peridoText = periodTitleLabel  + startDatePref + selectedYear + " - " + endDatePref + selectedYear;
    }
    $("#periodLabel").html(peridoText);
}


/**
 * Load period text content and dropdown list once
 */
function loadControlsContent(){
    var currentYear = new Date().getFullYear();
    loadPeriodTextContent(currentYear);
    // fill dropdown list of years
    var optText = currentYear;
    var optValue = currentYear;
    //console.log(" called loadControlsContent");
    for(var i = 0; i < numbYearsToDisplay; i++){ // get n last years
        if(i == 0){
            optText = currentYear;
            optValue = currentYear;
            $('#selectedYear').append(`<option selected value="${optValue}">${optText}</option>`);
        } else {
            optText = currentYear - i;
            optValue = currentYear - i;
            $('#selectedYear').append(`<option value="${optValue}">${optText}</option>`);
        } 
        
    }
}
