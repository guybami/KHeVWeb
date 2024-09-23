// Author: Guy Bami 
// member registration script
var errorContentDivId = "errorContentDiv";
var sitePathDivId = "sitePathDiv";
var resultsDivId = "resultsDiv";
var errorContentDivId = "errorContentDiv";
var successOverlayDivId = "successOverlayDiv";
var menuItemSectionTitleLabel = pageLangTexts.menuItemSectionTitleLabel == null ? "Membres" : pageLangTexts.menuItemSectionTitleLabel;
var subMenuItemSectionTitleLabel = pageLangTexts.subMenuItemSectionTitleLabel == null ? "Devenir Membre" : pageLangTexts.subMenuItemSectionTitleLabel;

var memeberRegistrationFormContentDivId = "memeberRegistrationFormContentDiv";
var memberRegistrationFormId = "memberRegistrationForm";
var jsonErrorMsg = "An error occured with json returned data";
var successImg = "../../Resources/Images/Buttons/success_icon.png";
var controllerUrl = "../../Controllers/MemberController.php";
var postDataFormat = "text";
var postMethod = "POST";


$(function () {
    // display sitemap path

    displayCurrentPath(sitePathDivId, 2, [menuItemSectionTitleLabel, subMenuItemSectionTitleLabel], $(location).attr("href"));
    
    $("#memeberRegistrationFormContentDiv").removeClass("hideContent");
     

    //register button click events

    $("#registerMemberBtn").on("click", function () {

        var memberRegistrationFormObject = $("#" + memberRegistrationFormId).serializeObject();

        alert('memberRegistrationFormObject: ' + JSON.stringify(memberRegistrationFormObject));

    });

    $("#resetFieldsBtn").on("click", function () {
        //$("#filterAllBtn").button("toggle");
    });
 

});
 
 
 
function validateBeforeAddNewMember() {

    var isFormInputsValid = $("#" + memberRegistrationFormId).valid();
    if (isFormInputsValid) {
         
        // add callback
        addNewMember();
    }
}


function addNewMember() {

    var memberDetailsFormObject = $("#" + memeberRegistrationFormContentDivId).serializeObject();
    // convert form to json object
    var itemToAdd = memberDetailsFormObject;
    itemToAdd = memberDetailsFormObject;
    var postParameters = {
        "formValues[]": dojo.toJson(memberDetailsFormObject, true),
        "userAction": insertNewItemCmd
    };
    var xhrArgs = {
        url: controllerUrl,
        postData: postParameters,
        handleAs: postDataFormat,
        method: postMethod,
        error: function (errorMsg) {
            logError({
                message: "Failed to add new item. Error: " + errorMsg
            });
        }
    };

    //get postback result
    function addNewMemberCompleted(data) {

        debugMessageToConsole("addNewMemberCompleted data : " + data, highLevel);
        // get json result
        var jsonData = data;
        // clear error message
        $("#" + errorContentDivId).html("");
        if (jsonData == null) {
            displayErrorContent(errorContentDivId, "addNewMemberCompleted: " + jsonErrorMsg);
            return;
        } else if (jsonData.length == 1 && jsonData[0].jsonErrorMessage != null) {
            displayErrorContent(errorContentDivId, jsonData[0].jsonErrorMessage);
            return;
        }
        // display overlay message
        showSuccessOverlay(successOverlayDivId, pageLangTexts.confirmationCreationLabel, successImg);

        if (membersStore != null && jsonData[0].insertedItemKey != null) {
             
            alert(' new: ' + jsonData[0].insertedItemKey);
             
        }
    }

    // send async xhr request to server
    sendAsyncRequest(xhrArgs.url, xhrArgs.postData, xhrArgs.handleAs, xhrArgs.method,
        xhrArgs.error, addNewMemberCompleted);

}








