/**
 * Script to manage a  Income model entity.
 * @author
 *     Guy Bami W.
 * Created changes: 04.12.25  
 */

// global varaibles
var incomesStore = null;
var incomesGrid = null;
var currentItemIndex = -1;
var itemsArrayIds = new Array();
var currentIncomeId = -1;
 
 var controllerUrl = "../../Controllers/IncomeController.php";
var jsonErrorMsg = "An error occured with json returned data";
var chartContainerId = "chartContainer";
var incomesList = new Array();
var chartCaption = "Statistique Des Entr&eacute;es";
var emptyDataText = '<tr><td class="toCenter"><div>Aucune  Entr&eacute;e  trouv&eacute;e</div></td></tr>';


$(document).ready(function () {
    var currentDate = new Date();
    loadIncomesChart(currentDate.getUTCFullYear());
    $('#selectedYear').on('change', function() {
        //console.log('Selected: ' + $(this).val());
        var selectedYearVal = $(this).val();
        fetchAndDisplayIncomes(selectedYearVal);
        loadIncomesChart(selectedYearVal); 
    });
});


function loadIncomesChart(year){
    var controllerUrl = "../../Controllers/IncomeController.php";
    var postDataFormat = "json";
    var postMethod = "POST";
    var postParameters = { "userAction": "getAllIncomesByYear" };
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
     
    clearContentDivs();
    // reset list
    incomesList = new Array();
    // send request
    sendAjaxRequest(xhrArgs, fetchDataCompleted);
    
    function fetchDataCompleted(data){
        
        var jsonData = data;
        debugMessageToConsole('items json data: ' + data, lowLevel);
        // hide loading img
        if (jsonData.length == 1 && jsonData[0].jsonErrorMessage != null) {
            displayErrorContent('errorContentDiv', jsonData[0].jsonErrorMessage);
            return;
        }
        
        for(var i = 0; i < jsonData.length; i++){
            var income = {
                    "label": getFrenchMonthName(jsonData[i].currentMonth) + " " + jsonData[i].currentYear,
                    "value": jsonData[i].sumIncomes
                };
            if(year != null && String(year) === String(jsonData[i].currentYear)){
                incomesList.push(income);
            }
            else if(year == null){
                incomesList.push(income);
            }
        }
        if(incomesList.length == 0) {
            $("#incomesListTable tbody").html(emptyDataText);
            $("#chartContainer").html(emptyDataText);
            $("#chartStatDiv").addClass("hideContent");
            return;
        }

        //$(".row").removeClass("hideContent");
        // gantt data
        var chartJsonData = {
            "chart": {
                "caption": chartCaption,
                "subCaption": "Kameruner Heilbronn e.V.",
                "xAxisName": "Mois",
                //"yNumberSuffix": "M",
                //"numberSuffix": "M",
                "numberPrefix" : " ",
                "formatNumberScale": "0",
                "decimalSeparator": ",",
                "thousandSeparator": ".",
                "yFormatNumberScale": "1",
                "yAxisName": "Entrées Anuelles (Euro)",
                "labelFontColor": "0075c2",
                "labelFontSize": "13",
                "rotateValues": "0",
                "theme": "fint",
                "showLegend": "0",
                "showPercentValues": "1",
                "showPercentInToolTip": "0",
                "legendPosition": "bottom",
                "legendCaption": "Entrées session mandant ",
                "legendScrollBgColor": "#cccccc",
                "legendScrollBarColor": "#999999"
            },
            "data":  incomesList
        };
             
        // create gantt chart
        FusionCharts.ready(function () {
            var windowWidth = $(window).width() - 500;
            var ganttProjectsChart = new FusionCharts({
                "type": "column3d",
                "renderAt": chartContainerId,
                "width": windowWidth,
                "height": "600",
                "dataFormat": "json",
                "dataSource": chartJsonData
            });

            ganttProjectsChart.render();
        });
    }
}
    

function clearContentDivs(){
    $("#incomesListTable tbody").html("");
}












