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
// number of year to display
var numbYearsToDisplay = 3; 
var expensesArray = new Array();
 

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
        // display
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
    totalExpenses = totalExpenses.toFixed(2);
    totalExpenses = totalExpenses.toString().replace(".", ",");
    $("#totalExpenses").html(totalExpenses + "&#8364;");
    
    // display all data
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
                + ' <a href="../../UploadedFiles/Images/Bills/Expenses/'+ billFileName +'">Voir Facture</a> </object>  ';
            }
            else{
                content = '<img src="../../UploadedFiles/Images/Bills/Expenses/'+ billFileName +'"   alt="Facture..." /> ';
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

 