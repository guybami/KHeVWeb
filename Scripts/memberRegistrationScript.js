// Author: Guy Bami
// member registration script
var viewAllItemsCmd = "viewAllMemberRegistrations";
var editItemDetailsCmd = "editDetails";
var viewItemDetailsCmd = "viewDetails";
var addNewItemCmd = "addNewItem";
var insertNewItemCmd = "insertNewItem";
var cancelChangesCmd = "cancelChanges";
var saveChangesCmd = "saveChanges";

var errorContentDivId = "errorContentDiv";
var sitePathDivId = "sitePathDiv";
var resultsDivId = "resultsDiv";
var errorContentDivId = "errorContentDiv";
var successOverlayDivId = "successOverlayDiv";
var menuItemSectionTitleLabel = pageLangTexts.menuItemSectionTitleLabel == null ? "Membres" : pageLangTexts.menuItemSectionTitleLabel;
var subMenuItemSectionTitleLabel = pageLangTexts.subMenuItemSectionTitleLabel == null ? "Devenir Membre" : pageLangTexts.subMenuItemSectionTitleLabel;

var memberRegistrationFormContentDivId = "memberRegistrationFormContentDiv";
var memberRegistrationFormId = "memberRegistrationForm";
var jsonErrorMsg = "An error occured with json returned data";
var successImg = "../../Resources/Images/Buttons/success_icon.png";
var controllerUrl = "../../Controllers/MemberRegistrationController.php";
var postDataFormat = "json";
var postMethod = "POST";


$(function () {
    // display sitemap path
    displayCurrentPath(sitePathDivId, 2, [menuItemSectionTitleLabel, subMenuItemSectionTitleLabel], $(location).attr("href"));
    $("#" + memberRegistrationFormContentDivId).removeClass("hideContent");
    //register button click events
    $("#registerMemberBtn").on("click", function () {
        var memberRegistrationFormObject = $("#" + memberRegistrationFormId).serializeObject();
        console.log('memberRegistrationFormObject: ' + JSON.stringify(memberRegistrationFormObject));
        
        validateBeforeAddNewMemberRegistration();
    });

    $("#resetFieldsBtn").on("click", function () {
        setFormFieldValue("lastName", "");
        setFormFieldValue("name", "");
        setFormFieldValue("email", "");
        setFormFieldValue("phoneNumber", "");
        setFormFieldValue("zipCode", "");
        setFormFieldValue("city", "");
        setFormFieldValue("address", "");
        $("#agbCheckbox").removeAttr("checked");
        //setCbFormFieldValue("agbCheckbox", false);
    });

    $("#confirmPanelOkBtn").on("click", function () {
        // open home page
        location.href = webSiteRootURL;
    });

    // (onload)
    onLoadHandler();

});



function onLoadHandler() {
    //alert('On load event: ' + location.href);
    //  get url params
    var pageUrl = location.href;
    var searchParams = new URLSearchParams(pageUrl);
    var urlParams = getAllUrlParams(pageUrl);

    // Iterating the search parameters
    console.log('urlParams values: ' + JSON.stringify(urlParams));
     
    for (var [keyName, keyValue] of Object.entries(urlParams)) {
        if (keyName == "code") {
            console.log("code key found");
            if (keyValue.length == 50) {
                displayConfirmationPanel();
            }
        }
        console.log('keyName: ' + keyName + ' - value: ' + keyValue);  
    }
     
     
    
     

}

function goToHome() {
    location.href = webSiteRootURL;
}
 
 
function validateBeforeAddNewMemberRegistration() {

    var isFormInputsValid = $("#" + memberRegistrationFormId).valid();
    var isChecked = $("#agbCheckbox").is(':checked');
    $("#agbDiv").removeClass("has-error");
    if (isChecked == false) {
        $("#agbDiv").addClass("has-error");
        $("#agbCheckbox").parent().addClass("has-error");
        console.log("AGB not checked");
        //alert(pageLangTexts.acceptGCALabel);
        alert($("#acceptGCALabelDiv").html());
        return;
    }

    // list all input in form
    $('#' + memberRegistrationFormId + ' :input').each(
        function (index) {
            var input = $(this);
            if (input != null) {
                console.log('Type: ' + input.attr('type') + ', Name: ' + input.attr('name') + ', Value: ' + input.val());
            }
        }
    );

    if (isFormInputsValid) {
        addNewMemberRegistration();
    } else {
        console.log("Error:form input fields not valid");
    }
}

 

function addNewMemberRegistration() {

    var memberDetailsFormObject = $("#" + memberRegistrationFormId).serializeObject();
    // convert form to json object
    var itemToAdd = memberDetailsFormObject;
    itemToAdd = memberDetailsFormObject;
    console.log('json: ' + JSON.stringify(memberDetailsFormObject));
    var postParameters = {
        "formValues[]": JSON.stringify(memberDetailsFormObject),
        "userAction": insertNewItemCmd
    };
    var xhrArgs = {
        url: controllerUrl,
        postData: postParameters,
        handleAs: postMethod,
        method: postMethod,
        error: function (errorMsg) {
            logError({
                message: "Failed to add new item. Error: " + errorMsg
            });
        }
    };

    //get postback result
    function addNewMemberRegistrationCompleted(data) {

        debugMessageToConsole("addNewMemberRegistrationCompleted data : " + data, highLevel);
        // get json result
        var jsonData = null;
        jsonData = JSON.parse(data);
        // clear error message
        $("#" + errorContentDivId).html("");
        if (jsonData == null) {
            displayErrorContent(errorContentDivId, "addNewMemberRegistrationCompleted: " + jsonErrorMsg);
            return;
        } else if (jsonData.length == 1 && jsonData[0].jsonErrorMessage != null) {
            displayErrorContent(errorContentDivId, jsonData[0].jsonErrorMessage);
            return;
        }

        if (jsonData[0].insertedItemKey != null) {
            // add code
            var memberRegistrationObj = {
                memberId: jsonData[0].insertedItemKey,
                code: generateRandomCode(50),
                sentDate: dateToUSStr(new Date()),
                confirmationDate: null,
                receiverMail: $("#email").val()
            };
            postParameters = {
                "formValues[]": JSON.stringify(memberRegistrationObj),
                "userAction": insertNewItemCmd
            };
            xhrArgs.postData = postParameters;
            sendAsyncRequest(xhrArgs.url, xhrArgs.postData, xhrArgs.handleAs, xhrArgs.method,
                xhrArgs.error, addMemberRegistrationCodeCompleted);
            // display overlay message
            //showSuccessOverlay(successOverlayDivId, pageLangTexts.confirmationCreationLabel, successImg);
            console.log(' new member added: ' + jsonData[0].insertedItemKey);
            // replace form content with confirmation panel
            $('#confirmTextSpan').html(pageLangTexts.confirmationCreationLabel);
            var confirmDivContentHtml = $('#confirmDivContent').html();
            $("#" + memberRegistrationFormContentDivId).html(confirmDivContentHtml);
        }
    }

    function addMemberRegistrationCodeCompleted(data) {

        debugMessageToConsole("addMemberRegistrationCodeCompleted data : " + data, highLevel);
        // get json result
        var jsonData = JSON.parse(data);
        // clear error message
        $("#" + errorContentDivId).html("");
        if (jsonData == null) {
            displayErrorContent(errorContentDivId, "addMemberRegistrationCodeCompleted: " + jsonErrorMsg);
            return;
        } else if (jsonData.length == 1 && jsonData[0].jsonErrorMessage != null) {
            displayErrorContent(errorContentDivId, jsonData[0].jsonErrorMessage);
            return;
        }

        if (jsonData[0].insertedItemKey != null) {
            console.log(' new registration added: ' + jsonData[0].insertedItemKey);

        }
    }

    // send async xhr request to server
    var memberControllerUrl = "../../Controllers/MemberController.php";
    sendAsyncRequest(memberControllerUrl, xhrArgs.postData, xhrArgs.handleAs, xhrArgs.method,
        xhrArgs.error, addNewMemberRegistrationCompleted);

    function generateRandomCode(length) {
        var result = '';
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var charactersLength = characters.length;
        var counter = 0;
        while (counter < length) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
            counter += 1;
        }
        return result;
    }

}


function displayConfirmationPanel() {
    $("#" + memberRegistrationFormContentDivId).removeClass("hideContent");
    $('#confirmTextSpan').html(pageLangTexts.confirmRegistrationFromMailLabel);
    var confirmDivContentHtml = $('#confirmDivContent').html();
    $("#" + memberRegistrationFormContentDivId).html(confirmDivContentHtml);

}


function getAllUrlParams(url) {

    // get query string from url (optional) or window
    var queryString = url ? url.split('?')[1] : window.location.search.slice(1);

    // we'll store the parameters here
    var obj = {};

    // if query string exists
    if (queryString) {

        // stuff after # is not part of query string, so get rid of it
        queryString = queryString.split('#')[0];

        // split our query string into its component parts
        var arr = queryString.split('&');
        for (var i = 0; i < arr.length; i++) {
            // separate the keys and the values
            var a = arr[i].split('=');

            // set parameter name and value (use 'true' if empty)
            var paramName = a[0];
            var paramValue = typeof (a[1]) === 'undefined' ? true : a[1];

            // (optional) keep case consistent
            paramName = paramName.toLowerCase();
            if (typeof paramValue === 'string') paramValue = paramValue.toLowerCase();

            // if the paramName ends with square brackets, e.g. colors[] or colors[2]
            if (paramName.match(/\[(\d+)?\]$/)) {

                // create key if it doesn't exist
                var key = paramName.replace(/\[(\d+)?\]/, '');
                if (!obj[key]) obj[key] = [];

                // if it's an indexed array e.g. colors[2]
                if (paramName.match(/\[\d+\]$/)) {
                    // get the index value and add the entry at the appropriate position
                    var index = /\[(\d+)\]/.exec(paramName)[1];
                    obj[key][index] = paramValue;
                } else {
                    // otherwise add the value to the end of the array
                    obj[key].push(paramValue);
                }
            } else {
                // we're dealing with a string
                if (!obj[paramName]) {
                    // if it doesn't exist, create property
                    obj[paramName] = paramValue;
                } else if (obj[paramName] && typeof obj[paramName] === 'string') {
                    // if property does exist and it's a string, convert it to an array
                    obj[paramName] = [obj[paramName]];
                    obj[paramName].push(paramValue);
                } else {
                    // otherwise add the property
                    obj[paramName].push(paramValue);
                }
            }
        }
    }

    return obj;
}

