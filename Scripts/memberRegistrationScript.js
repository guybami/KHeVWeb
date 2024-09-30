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
});


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
                confirmationDate: null
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








