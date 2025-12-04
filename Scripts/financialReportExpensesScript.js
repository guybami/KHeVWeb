// Author: Guy Bami 
// expenses script
var errorContentDivId = "errorContentDiv";
var sitePathDivId = "sitePathDiv";
var resultsDivId = "resultsDiv";
var errorContentDivId = "errorContentDiv";
var successOverlayDivId = "successOverlayDiv";
var menuItemSectionTitleLabel = pageLangTexts.menuItemSectionTitleLabel == null ? "Finances" : pageLangTexts.menuItemSectionTitleLabel;
var subMenuItemSectionTitleLabel = pageLangTexts.subMenuItemSectionTitleLabel == null ? "Bilan Des D&eacute;penses" : pageLangTexts.subMenuItemSectionTitleLabel;
var periodTitleLabel = pageLangTexts.periodTitleLabel == null ? "P&eacute;riode: " : pageLangTexts.periodTitleLabel;


var expensesArray = new Array();
var loaded = false;
var currentSlideIndex = 0;
var eventPhotosSlideList = new Array();

$(document).ready(function () {
    // display sitemap path
    displayCurrentPath(sitePathDivId, 2, [menuItemSectionTitleLabel, 
        subMenuItemSectionTitleLabel], $(location).attr("href"));
    // fetch data for current year
    var currentYear = new Date().getFullYear();
    loadControlsContent();
    fetchAndDisplayExpenses(currentYear);
    $(window).bind("resize", rescaleWindow);
    
});


 

function rescaleWindow() {
    var size = { width: $(window).width(), height: $(window).height() };
    // calculate size
    var offset = 20;
    var offsetBody = 80;
    $("#billModalDialog").css("height", size.height - offset);
    $("#billModalDialog .modal-body").css("height", size.height - (offset + offsetBody));
    $("#billModalDialog").css("top", 0);
}


function fetchAndDisplayExpenses(yearToFilter) {

    var controllerUrl = "../../Controllers/ExpenseController.php";
    var postDataFormat = "json";
    var postMethod = "POST";
    var postParameters = { "userAction": "getAllItems" };
    var xhrArgs = {
        url: controllerUrl,
        postData: postParameters,
        handleAs: postDataFormat,
        method: postMethod,
        error: function (errorMsg) {
            logError({
                message: "Reponse failed to get data with error: " + errorMsg
            });
        }
    };
    if(yearToFilter != null){
        loadPeriodTextContent(yearToFilter);
    }
    
    expensesArray = new Array();
    sendAjaxRequest(xhrArgs, fetchDataCompleted);

    //get postback result
    function fetchDataCompleted(data) {
        var jsonData = data;
        debugMessageToConsole("items json data: " + data, highLevel);
        for (var i = 0; i < jsonData.length; i++) {
            var transactionDate = stringToDate(jsonData[i].transactionDate, "yyyy-mm-dd", "-");
            var eventTitle = jsonData[i].eventTitle;
            var billDate = dateToGermanStr(transactionDate);  
            var billFileName = jsonData[i].billFileName;
            var amount = jsonData[i].amount;
            var title = jsonData[i].title;
            var year = transactionDate.getUTCFullYear();
            var expense = {
                ItemKey: i + 1,
                TransactionDate: billDate,
                Title: title,
                Amount: amount,
                EventTitle: eventTitle,
                BillFileName: billFileName,
                Year: year
            };
            if(yearToFilter != null && String(year) === String(yearToFilter)){
                expensesArray.push(expense);
            }
            else if(yearToFilter == null){
                expensesArray.push(expense);
            }
            
        }

        displayExpensesList(expensesArray, yearToFilter);
         
    }
}


function displayExpensesList(expensesDataArray, year) {
    var count = 0;
    var rowClass = "";
    var totalExpenses = 0;
    // clear old content
    $("#expensesListTable tbody").html("");
     
    // add header
    var rowData = '<tr   class="' + rowClass + '">'
                    + '<td class="toCenter memberNumberCol"></td>'
                    + '<td class="toLeft fieldDetailsTitle">&Eacute;v&egrave;nement</td>'
                    + '<td class="toLeft fieldDetailsTitle">Titre</td>'
                    + '<td class="toLeft fieldDetailsTitle">Montant (&#8364;)</td>'
                    + '<td class="toLeft fieldDetailsTitle">Date</td>'
                    + '<td class="toLeft fieldDetailsTitle">Facture</td>'
                + '</tr>';
        $("#expensesListTable tbody").append(rowData);
    $.each(expensesDataArray, function (index, expense) {
        index % 2 == 0 ? rowClass = "even rowPointer" : rowClass = "odd rowPointer";
        var rowData = '<tr data-role="' + expense.ItemKey + '" class="' + rowClass + '">'
                    + '<td class="toCenter memberNumberCol">' + expense.ItemKey + '.' + '</td>'
                    + '<td class="toLeft">' + expense.EventTitle + '</td>'
                    + '<td class="toLeft">' + expense.Title + '</td>'
                    + '<td class="toLeft">' + expense.Amount + '&#8364;</td>'
                    + '<td class="toLeft">' + expense.TransactionDate + '</td>'
                    + '<td class="toLeft ">' 
                            + '<a href="javascript:viewBillDialog(\'' + expense.BillFileName 
                            + '\', \'' +  expense.Title + '\')" class="linkDialogShow"><span id="eventPhotosLabel">Facture</span></a>'    
                       + '</td>'
                + '</tr>';
        $("#expensesListTable tbody").append(rowData);
        count++;
        var formattedAmount = expense.Amount.toString().replace(",", ".");
        //console.log(parseFloat(formattedAmount));
        totalExpenses += parseFloat(formattedAmount);
    });
    // display amount and replace '.' german locale
    totalExpenses = totalExpenses.toString().replace(".", ",");
    $("#totalExpenses").html(totalExpenses + "&#8364;");
    
    // display all
    $(".row").removeClass("hideContent");
}



function viewBillDialog(billFileName, title){
    
    var expenseBillDialogId = "billModalDialog";
    var content = "";
    if ($("#" + expenseBillDialogId) != null) {
        // set content dialog
        if(billFileName && billFileName.length > 0){
            //alert("name:" + billFileName);
            if(billFileName.toString().endsWith("pdf")){
                // for .pdf or .doc files
                content = '<object data="../../UploadedFiles/Images/Bills/Expenses/'+ billFileName +'" type="application/pdf" width="800" height="700"> '
                + ' <a href="../../UploadedFiles/Images/Bills/Expenses/'+ billFileName +'">Voir nos Status</a> </object>  ';
            }
            else{
                content = '<img src="../../UploadedFiles/Images/Bills/Expenses/'+ billFileName +'"   alt="facture..." /> ';
            }
        }
        // set dialog title
        $("#billDialogTitle").html("Facture - " + title);
        $("#billDialogContent").html(content);
        // show dialog
        $("#" + expenseBillDialogId).modal("show");
        rescaleWindow();
    }
    
}

function loadPeriodTextContent(selectedYear){
    // load period text
    var peridoText = "";
    var currentYear = new Date().getFullYear();
    if(selectedYear == currentYear){
        peridoText = periodTitleLabel  + "01.01." + selectedYear + " - " + dateToGermanStr(new Date());
    } else {
        peridoText = periodTitleLabel  + "01.01." + selectedYear + " - " + "31.12." + selectedYear;
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
    console.log("123" + " - loadControlsContent");
    for(var i = 0; i < 3; i++){ // get 3 last years
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



