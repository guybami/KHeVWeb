
               

                /**
                *This script was auto generated.
                * Script to manage a  Tutorial model entity.
                * @author
                *     Guy Bami W.
                * Created changes: 08.04.2017 20:48:19
                */

                
 


        // global varaibles
        var tutorialsStore = null;
        var tutorialsGrid = null;
        var currentItemIndex = -1;
        var itemsArrayIds = new Array();
        var currentTutorialId = -1;


        // some tutorial actions commands
        var viewAllItemsCmd = "viewAllTutorials";
        var editItemDetailsCmd = "editDetails";
        var viewItemDetailsCmd = "viewDetails";
        var addNewItemCmd = "addNewItem";
        var insertNewItemCmd = "insertNewItem";
        var cancelChangesCmd = "cancelChanges";
        var saveChangesCmd = "saveChanges";

        // controls and page divs Ids
        var toolbarButtonsDivId = "toolbarButtonsDiv";
        var dataItemsGridId = "tutorialsGrid";
        var itemDetailsDivId = "tutorialDetailsDiv";
        var itemsGridDivId = "tutorialsGridDiv";
        var itemDetailsFormId = "tutorialDetailsForm";
        var tutorialDetailsFormId = "tutorialDetailsForm";
        var dataViewDivId = "dataViewDiv";
        var dataEditDivId = "dataEditDiv";
        var confirmDialogDivId = "confirmDialogDiv";
        var sectionTitleAndToolbarBtnDivId = "sectionTitleAndToolbarBtnDiv";
        var toolbarButtonsTableId = "toolbarButtonsTable";
        var dataViewHeaderId = "dataViewHeader";
        var errorContentDivId = "errorContentDiv";
        var sitePathDivId = "sitePathDiv";
        var resultsDivId = "resultsDiv";
        var errorContentDivId = "errorContentDiv";
        var successOverlayDivId = "successOverlayDiv";

        // toolbar button spans holders
        var spanAddNewItemBtnId = "spanAddNewItemBtn";
        var spanDeleteItemsBtnId = "spanDeleteItemsBtn";
 

        // toolbar buttons id
        var addNewItemBtnId = "addNewItemBtn";
        var deleteItemsBtnId = "deleteItemsBtn";

        // dialog buttons id
        var addNewItemBtnDialogId = "addNewItemBtnDialog";
        var editItemBtnDialogId = "editItemBtnDialog";
        var saveChangesBtnDialogId = "saveChangesBtnDialog";
        var cancelChangesBtnDialogId = "cancelChangesBtnDialog";
        var cancelAddItemBtnDialogId = "cancelAddItemBtnDialog";
        var closeEditBtnDialogId = "closeEditBtnDialog";
        var confirmItemsDeletionBtnDialogId = "confirmItemsDeletionBtnDialog";
        var moveUpBtnDialogId = "moveUpBtnDialog";
        var moveDownBtnDialogId = "moveDownBtnDialog";

        // dialog divs Id
        var addNewItemDialogContentId = "addNewItemDialogContent";
        var tutorialDetailsDialogId = "tutorialDetailsDialog";
        var viewItemDetailsDialogContentId = "viewItemDetailsDialogContent";
        var confirmDeletionDialogId = "confirmDeletionDialog";

        // dialog buttons spans holders
        var spanEditItemBtnDialogDialogId = "spanEditItemBtnDialogDialog";
        var spanCloseEditBtnDialogId = "spanCloseEditBtnDialog";
        var spanSaveChangesBtnDialogId = "spanSaveChangesBtnDialog";
        var spanCancelChangesBtnDialogId = "spanCancelChangesBtnDialog";

        var spanMoveUpBtnDialogId = "spanMoveUpDialogBtn";
        var spanMoveDownBtnDialogId = "spanMoveDownDialogBtn";

        // var used to hold page content elements
        var editItemDetailsFormContent = "";
        var viewItemDetailsFormContent = "";
        var viewItemDetailsFormContentDivId = "viewItemDetailsFormContentDiv";
        var viewItemDetailsDialogId = "viewItemDetailsDialog";

        var hideContentClass = "hideContent";

        // datagrid settings
        var gridDefaultPageSize = 30;
        var gridDefaultStyle = "width:100%;height:60em;";
        var jsonErrorMsg = "An error occured with json returned data";
        var successImg = "../../Resources/Images/Buttons/success_icon.png";
        var controllerUrl = "../../Controllers/TutorialController.php";
        var postDataFormat = "text";
        var postMethod = "POST";


        // flags used to check user role
        var readItemRight = true;
        var addNewItemRight = true;
        var deleteItemRight = true;
        var editItemRight = true;

        var menuItemSectionTitleLabel = "Administration";
        var subMenuItemSectionTitleLabel = "Tutorials";

        // load all dojo dependencies modules
        require(["dojo/parser",
             "dojo/dom",
             "dojo/Deferred",
            "dojo/dom-class",
            "dojo/dom-form",
            "dojo/dom-construct",
            "dojo/domReady!",
            "dojo/_base/array",
            "dojo/_base/lang",
            "dojo/date/locale",
            "dojo/store/Memory",
            // dojox 
            "dojox/grid/DataGrid",
            "dojox/form/PasswordValidator",
            "dojo/data/ItemFileWriteStore",
            "dojox/grid/EnhancedGrid",
            "dojox/grid/enhanced/plugins/IndirectSelection",
            "dojox/grid/enhanced/plugins/Pagination",
            "dojox/grid/enhanced/plugins/Filter",
            "dojox/grid/enhanced/plugins/Menu",
            "dojox/grid/_CheckBoxSelector",
            "dojox/grid/_RadioSelector",
            // dojit
            "dijit/form/Button",
            "dijit/form/Form",
            "dijit/form/Select",
            "dijit/form/ValidationTextBox",
            "dijit/form/NumberTextBox",
            "dijit/form/CheckBox",
            "dijit/form/DropDownButton"
        ]);



        /**
         * load method
         * @param {type} parser
         * @param {type} ready
         * @param {type} dom
         * @returns {none}
         */

        require(["dojo/parser", "dojo/ready"],
            function (parser, ready) {
                ready(function () {
                    try {
                        // save page contents div before parsing!!!
                        editItemDetailsFormContent = $("#editItemDetailsFormContentDiv").html();
                        viewItemDetailsFormContent = $("#viewItemDetailsFormContentDiv").html();
                        // now we can parse the postback content
                
                        var parsePageWidgets = function () {
                            //alert("size: " + customUserRolesManagerObject.userRolesData.length);
                            if (customUserRolesManagerObject != null && customUserRolesManagerObject.userRolesData.length > 0) {
                                var curmo = customUserRolesManagerObject; // short name
                                // load roles only once
                                curmo.entityType = curmo.entityTypesObject.Tutorial;
                                readItemRight = curmo.getAccessRightByEntityType(curmo.entityTypesObject.Tutorial, curmo.accessRightsObject.readRight);
                            }
                            if (readItemRight == true) {
                                // show and create toolbar buttons
                                $("#" + sectionTitleAndToolbarBtnDivId).removeClass(hideContentClass);
                                $("#" + toolbarButtonsDivId).removeClass(hideContentClass);
                                // display page section title
                                $("#" + dataViewHeaderId).removeClass(hideContentClass);
                                // display sitemap path
                                displayCurrentPath(sitePathDivId, 2, [menuItemSectionTitleLabel, subMenuItemSectionTitleLabel], $(location).attr("href"));
                                if (customUserRolesManagerObject != null) {
                                    setActiveMenuItem(customUserRolesManagerObject.mainMenuItemsObject.ADMINISTRATION.id);
                                }
                         
                                // display dojo data grid
                                generateTutorialsDataGrid(itemsGridDivId);
                            }
                            else {
                                // redirect to access denied page
                                $(window).attr("location", webSiteRootURL + "/Views/AccessDenied.php");
                            }

                            // init form validators
                            initFormValidators();
                            // register event clicks
                            registerButtonClickEvents();
                        }

                        // parse main menu and display page
                        parseMainMenu(parsePageWidgets);
                    }
                    catch (err) {
                        logError(err);
                    }
                });
            });

        
       

function setLabelFields(jsonData){


 $("#memberIdLabel").html(jsonData[0].memberId);
 $("#dateLabel").html(jsonData[0].date);
 $("#subjectLabel").html(jsonData[0].subject);
 $("#levelLabel").html(jsonData[0].level);
 $("#locationLabel").html(jsonData[0].location);
 $("#shedulesLabel").html(jsonData[0].shedules);
 $("#statusLabel").html(jsonData[0].status);

}
       

function setTextFields(jsonData){


setFormFieldValue("memberId", jsonData[0].memberId);
setFormFieldValue("date", jsonData[0].date);
setFormFieldValue("subject", jsonData[0].subject);
setFormFieldValue("level", jsonData[0].level);
setFormFieldValue("location", jsonData[0].location);
setFormFieldValue("shedules", jsonData[0].shedules);
setFormFieldValue("status", jsonData[0].status);

}
       

function settersMethodWithDefaultValues(){


setFormFieldValue("memberId", "29997");
setFormFieldValue("date", "2017-04-08");
setFormFieldValue("subject", "subject-a92c274");
setFormFieldValue("level", "level-1fee199");
setFormFieldValue("location", "location-1385974");
setFormFieldValue("shedules", "shedules-2e855f9");
setFormFieldValue("status", "Cancelled");

}

       /**
        * generate dynamic Tutorials datagrid
        * @param {string} targetDiv
        * @returns {none}
        */
        function generateTutorialsDataGrid(targetDiv) {
   
            var windowWidth = $(window).width() - 200;
 var memberIdColWidth = windowWidth * 0.14 + "px"; 
 var dateColWidth = windowWidth * 0.14 + "px"; 
 var subjectColWidth = windowWidth * 0.14 + "px"; 
 var levelColWidth = windowWidth * 0.14 + "px"; 
 var locationColWidth = windowWidth * 0.14 + "px"; 
 var shedulesColWidth = windowWidth * 0.14 + "px"; 
 var statusColWidth = "auto";  


     
            // manage user role
            var dataEditable = true;
            if (customUserRolesManagerObject != null && customUserRolesManagerObject.userRolesData.length > 0) {
                var curmo = customUserRolesManagerObject; // short name
                curmo.entityType = curmo.entityTypesObject.Tutorial;
                dataEditable = curmo.getAccessRightByEntityType(curmo.entityTypesObject.Tutorial, curmo.accessRightsObject.editRight);
            }

             var columsLayout = [
                 
                    {
                        name: pageLangTexts.memberIdColLabel == null ? "MemberId" : pageLangTexts.memberIdColLabel,
                        field: "memberId",
                        dataType: "number",
                        editable: dataEditable,
                        type: dojox.grid.cells._Widget,
                        width: memberIdColWidth,
                        widgetClass: dijit.form.NumberTextBox,
                        widgetProps: {}
                    }
                 
                    ,{
                        name: pageLangTexts.dateColLabel == null ? "Date" : pageLangTexts.dateColLabel,
                        field: "date",
                        dataType: "date",
                        editable: dataEditable,
                        type: dojox.grid.cells._Widget,
                        width: dateColWidth,
                        widgetClass: dijit.form.DateTextBox,
                        widgetProps: {}
                    } 
                 
                    ,{
                        name: pageLangTexts.subjectColLabel == null ? "Subject" : pageLangTexts.subjectColLabel,
                        field: "subject",
                        dataType: "string",
                        editable: dataEditable,
                        type: dojox.grid.cells._Widget,
                        width: subjectColWidth,
                        widgetClass: dijit.form.TextBox,
                        widgetProps: {}
                    } 
                 
                    ,{
                        name: pageLangTexts.levelColLabel == null ? "Level" : pageLangTexts.levelColLabel,
                        field: "level",
                        dataType: "string",
                        editable: dataEditable,
                        type: dojox.grid.cells._Widget,
                        width: levelColWidth,
                        widgetClass: dijit.form.TextBox,
                        widgetProps: {}
                    } 
                 
                    ,{
                        name: pageLangTexts.locationColLabel == null ? "Location" : pageLangTexts.locationColLabel,
                        field: "location",
                        dataType: "string",
                        editable: dataEditable,
                        type: dojox.grid.cells._Widget,
                        width: locationColWidth,
                        widgetClass: dijit.form.TextBox,
                        widgetProps: {}
                    } 
                 
                    ,{
                        name: pageLangTexts.shedulesColLabel == null ? "Shedules" : pageLangTexts.shedulesColLabel,
                        field: "shedules",
                        dataType: "string",
                        editable: dataEditable,
                        type: dojox.grid.cells._Widget,
                        width: shedulesColWidth,
                        widgetClass: dijit.form.TextBox,
                        widgetProps: {}
                    } 
                 
                    ,{
                        name: pageLangTexts.statusColLabel == null ? "Status" : pageLangTexts.statusColLabel,
                        field: "status",
                        dataType: "string",
                        editable: dataEditable,
                        type: dojox.grid.cells._Widget,
                        width: statusColWidth,
                        widgetClass: dijit.form.Select,
                        widgetProps: { options:[{ label:"Cancelled", value:"Cancelled"},{ label:"Active", value:"Active"}]}
                    } 
                 ]; 



            var postParameters = { userAction: "getAllItems" };
            var xhrArgs = {
                url: controllerUrl,
                postData: postParameters,
                handleAs: "text",
                method: postMethod,
                error: function (errorMsg) {
                    // hide loading img
                    hideLoadingTask(targetDiv);
                    displayErrorContent("errorContentDiv", "Failed to get all tutorials from server: " + errorMsg);
                    logError({ message: "Failed to get all tutorials from server: \n" + errorMsg });
                }
            };
            var oldCellValue = "";

            $("#" + itemDetailsDivId).html("");
            // display title
            $("#" + dataViewHeaderId).removeClass(hideContentClass);

            // display toolbar buttons and load data
            createToolbarBtns(viewAllItemsCmd);

            // show loading overlay
            showLoadingTask(targetDiv);
     
            // send async xhr request to server
            sendAsyncRequest(xhrArgs.url, xhrArgs.postData, xhrArgs.handleAs, xhrArgs.method,
                xhrArgs.error, fetchDataCompleted);


            //get postback result
            function fetchDataCompleted(data) {
                var jsonData = null;
        
                debugMessageToConsole("items json data: " + data, lowLevel);
                // hide loading img
                hideLoadingTask(targetDiv);
                jsonData = data;

                // clear messages
                $("#" + resultsDivId).html("");
                $("#" + errorContentDivId).html("");
                if (jsonData == null) {
                    displayErrorContent("errorContentDiv", "fetchDataCompleted: " + jsonErrorMsg);
                    return;
                }
                else if (jsonData.length == 1 && jsonData[0].jsonErrorMessage != null) {
                    displayErrorContent("" + errorContentDivId, jsonData[0].jsonErrorMessage);
                    return;
                }

                // set dimensions and div size
                var setAutoHeight = getDataGridAutoHeight(jsonData.length, gridDefaultPageSize);
                if (!setAutoHeight) {
                    $("#" + targetDiv).attr("style", gridDefaultStyle);
                }

                tutorialsStore = new dojo.data.ItemFileWriteStore({
                    data: {
                        identifier: "tutorialId",
                        items: jsonData
                    }
                });

                if (tutorialsStore != null) {
                    // save data store
                    tutorialsStore.save({
                        onComplete: function () { debugMessageToConsole("Done saving items store.", lowLevel); },
                        onError: function () { logError({ message: "Save failed items store." }); }
                    });
                    // custom sorting fields
                    tutorialsStore.comparatorMap = {};tutorialsStore.comparatorMap["memberId"] = compareStringIgnoreCase; tutorialsStore.comparatorMap["date"] = compareStringIgnoreCase; tutorialsStore.comparatorMap["subject"] = compareStringIgnoreCase; tutorialsStore.comparatorMap["level"] = compareStringIgnoreCase; tutorialsStore.comparatorMap["location"] = compareStringIgnoreCase; tutorialsStore.comparatorMap["shedules"] = compareStringIgnoreCase; tutorialsStore.comparatorMap["status"] = compareStringIgnoreCase;  



                    //destroy old controls
                    destroyWidget(dataItemsGridId);
                    // create datagrid
                    tutorialsGrid = new dojox.grid.EnhancedGrid({
                        id: dataItemsGridId,
                        store: tutorialsStore,
                        structure: columsLayout,
                        rowSelector: false,
                        autoWidth: false, //getGridAutoWidth(jsonData.length),
                        autoHeight: getDataGridAutoHeight(jsonData.length, gridDefaultPageSize),
                        loadingMessage: pageLangTexts.loadingMessageLabel == null ? "Loading data..." : pageLangTexts.loadingMessageLabel,
                        noDataMessage: pageLangTexts.noDataMessageLabel == null ? "No data found" : pageLangTexts.noDataMessageLabel,
                        errorMessage: pageLangTexts.errorMessageLabel == null ? "Error occured while loading..." : pageLangTexts.errorMessageLabel,
                        plugins: {
                            indirectSelection: {
                                headerSelector: true, width: "30px",
                                styles: "text-align: center;"
                            },
                            pagination: {
                                pageSizes: ["50", "100", "200", "All"],
                                description: true,
                                sizeSwitch: true,
                                pageStepper: true,
                                gotoButton: true,
                                defaultPageSize: gridDefaultPageSize,
                                //page step to be displayed
                                maxPageStep: 4,
                                //position of the pagination bar
                                position: "bottom"
                            },
                            filter: {
                                // Show the closeFilterbarButton at the filter bar
                                closeFilterbarButton: true,
                                // Set the maximum rule count to 10
                                ruleCount: 10,
                                // Set the name of the items
                                itemsName: "Tutorials"
                            }
                        }
                    });

                    // set sort index col
                    setSortColumnsIndexes(tutorialsGrid, 2, true);
                    // add events trigger
                    tutorialsGrid.on("SelectionChanged", reportSelection);
                    tutorialsGrid.on("StartEdit", gridStartEdit);
                    tutorialsGrid.on("ApplyCellEdit", gridApplyCellEdit);
                    tutorialsGrid.placeAt(targetDiv);
                    // parse datagrid
                    tutorialsGrid.startup();
                }

                // function to trigger grif row selection evt
                function reportSelection() {
                    var items = this.selection.getSelected();
                    if (items.length == 0)
                        $("#" + resultsDivId).html("");
                    else if (items.length == 1)
                        $("#" + resultsDivId).html(items.length + (pageLangTexts.oneSelectedItemLabel == null ? " Item selected" : pageLangTexts.oneSelectedItemLabel));
                    else if (items.length > 1)
                        $("#" + resultsDivId).html(items.length + (pageLangTexts.manySelectedItemsLabel == null ? "Items selected" : pageLangTexts.manySelectedItemsLabel));
                }

                function gridStartEdit(inCell, inRowIndex) {
                    var rowItem = this.getItem(inRowIndex);
                    oldCellValue = rowItem[inCell.field].toString();
                    debugMessageToConsole("oldCellValue : " + oldCellValue, highLevel);
                }

                function gridApplyCellEdit(inValue, inRowIndex, inFieldIndex) {
                    if (oldCellValue != null && inValue != oldCellValue) {
                        debugMessageToConsole("cell value changed on index col: " + inFieldIndex, lowLevel);
                        //debugMessageToConsole("cell new value: " + inValue, highLevel);
                        // get all row item
                        var rowItem = this.getItem(inRowIndex);
                        var obj = {};
                        var storeItem = rowItem;
                        obj["newFieldValue"] = inValue;
                        obj["fieldName"] = inFieldIndex;
                        obj["entityKeyId"] = storeItem["tutorialId"].toString();
                        var itemId = storeItem["tutorialId"].toString();
                        var jsonValues = dojo.toJson(obj);
                        debugMessageToConsole("jsonValues: " + jsonValues, highLevel);
                        submitInlineGridChanges(itemId, jsonValues);
                    }
                }
            }

        }



        function displayTutorialView(userAction) {

            var tutorialId = currentTutorialId;
            debugMessageToConsole("tutorialId:" + tutorialId, highLevel);
            debugMessageToConsole("userAction: " + userAction, highLevel);

            var windowHeight = $(window).height();
            var windowWidth = $(window).width();

            var postParameters = { "tutorialId": tutorialId, "userAction": userAction };
            var xhrArgs = {
                url: controllerUrl,
                postData: postParameters,
                handleAs: postDataFormat,
                method: postMethod,
                error: function (errorMsg) {
                    logError({ message: "Reponse failed to get tutorial details with error: " + errorMsg });
                }
            };

            //clear old style
            $("#" + itemsGridDivId).attr("style", "");

            // send async xhr request to server
            sendAsyncRequest(xhrArgs.url, xhrArgs.postData, xhrArgs.handleAs, xhrArgs.method,
                xhrArgs.error, fetchDataCompleted);

            //get postback result
            function fetchDataCompleted(data) {

                debugMessageToConsole("data : " + data, highLevel);
                // get json result
                var jsonData = data;
                // clear error message
                $("#" + errorContentDivId).html("");

                if (jsonData == null) {
                    displayErrorContent(errorContentDivId, "displayTutorialView: " + jsonErrorMsg);
                    return;
                }
                else if (jsonData.length == 1 && jsonData[0].jsonErrorMessage != null) {
                    displayErrorContent(errorContentDivId, jsonData[0].jsonErrorMessage);
                    return;
                }

                if (userAction == viewItemDetailsCmd) {
                    // callback method
                    var setFieldValuesCallback = function () {
                        viewItemDetailsFormContent = $("#" + viewItemDetailsFormContentDivId).html();
                        $("#" + viewItemDetailsDialogContentId).html(viewItemDetailsFormContent);
                        setLabelFields(jsonData);
                    };

                    // show buttons
                    $("#" + spanEditItemBtnDialogDialogId).removeClass(hideContentClass);
                    $("#" + spanCloseEditBtnDialogId).removeClass(hideContentClass);
                    //hide buttons
                    $("#" + spanSaveChangesBtnDialogId).addClass(hideContentClass);
                    $("#" +  spanCancelChangesBtnDialogId).addClass(hideContentClass);
            
                    setFieldValuesCallback();
                    // display view/edit dialog
                    showViewItemDetailsDialog();
                }
                else if (userAction == cancelChangesCmd) {
                    showLoadingTask(viewItemDetailsDialogContentId);
                    var setFieldValuesCallback = function () {
                        hideLoadingTask(viewItemDetailsDialogContentId);
                        viewItemDetailsFormContent = $("#" + viewItemDetailsFormContentDivId).html();
                        $("#" + viewItemDetailsDialogContentId).html(viewItemDetailsFormContent);
                        setLabelFields(jsonData);
                    };
                    // show buttons
                    $("#" +  spanEditItemBtnDialogDialogId).removeClass(hideContentClass);
                    $("#" +  spanCloseEditBtnDialogId).removeClass(hideContentClass);
                    //hide buttons
                    $("#" + spanSaveChangesBtnDialogId).addClass(hideContentClass);
                    $("#" +  spanCancelChangesBtnDialogId).addClass(hideContentClass);
                    setFieldValuesCallback();
                }
                else if (userAction == editItemDetailsCmd) {
            
                    var setFieldValuesCallback = function () {
                        //erase old edit form for adding item!! important
                        $("#" + addNewItemDialogContentId).html("");
                        // display edit form
                        $("#" + viewItemDetailsDialogContentId).html(editItemDetailsFormContent);
                        setTextFields(jsonData);
                    };
            
                    // show buttons
                    $("#" +  spanEditItemBtnDialogDialogId).addClass(hideContentClass);
                    $("#" +  spanCloseEditBtnDialogId).addClass(hideContentClass);
                    //hide buttons
                    $("#" + spanSaveChangesBtnDialogId).removeClass(hideContentClass);
                    $("#" +  spanCancelChangesBtnDialogId).removeClass(hideContentClass);
                    // parse content and then set field values
                    setFieldValuesCallback();
                }
            }
        }


 

        function viewTutorialDetails(tutorialId) {
            currentTutorialId = tutorialId;
            currentItemIndex = getCurrentItemIndex(tutorialId);
            displayTutorialView(viewItemDetailsCmd);
        }




        function createToolbarBtns(userAction) {

            // check user role
            if (customUserRolesManagerObject != null && customUserRolesManagerObject.userRolesData.length > 0) {
                var curmo = customUserRolesManagerObject; // short name
                if (!customUserRolesManagerObject.rolesLoaded) {
                    // load roles only once
                    curmo.entityType = curmo.entityTypesObject.Tutorial;
                    addNewItemRight = curmo.getAccessRightByEntityType(curmo.entityTypesObject.Tutorial, curmo.accessRightsObject.createRight);
                    editItemRight = curmo.getAccessRightByEntityType(curmo.entityTypesObject.Tutorial, curmo.accessRightsObject.editRight);
                    deleteItemRight = curmo.getAccessRightByEntityType(curmo.entityTypesObject.Tutorial, curmo.accessRightsObject.deleteRight);
                    customUserRolesManagerObject.rolesLoaded = true;
                }
            }
            // clear error message
            $("#" + errorContentDivId).html("");

            // first hide all buttons
            $("#" + spanAddNewItemBtnId).addClass(hideContentClass);
            $("#" + spanDeleteItemsBtnId).addClass(hideContentClass);

            if (userAction == viewAllItemsCmd) {
                // show addBtn and delete button
                if (addNewItemRight == true) {
                    $("#" + toolbarButtonsTableId).removeClass(hideContentClass);
                    $("#" + spanAddNewItemBtnId).removeClass(hideContentClass);
                }
                if (deleteItemRight == true) {
                    $("#" + toolbarButtonsTableId).removeClass(hideContentClass);
                    $("#" + spanDeleteItemsBtnId).removeClass(hideContentClass);
                }
            }

            if (addNewItemRight == true) {
                $("#" + spanAddNewItemBtnId).removeClass(hideContentClass);
            }
            if (deleteItemRight == true) {
                $("#" + spanDeleteItemsBtnId).removeClass(hideContentClass);
            }
        }


       /**
        * delete button event handler
        * @returns void
        */
        function deleteItemsBtnClick() {

            if (tutorialsGrid != null) {
                var items = tutorialsGrid.selection.getSelected();
                if (items.length > 0) {
                    confirmDeletionMessageBox();
                }
                else {
                    if (pageLangTexts.noItemSelectedLabel != null)
                        alert(pageLangTexts.noItemSelectedLabel);
                }
            }
        }


        /**
        * event fire on confirmation delete
        * @return
        */
        function onConfirmItemsDeletion() {

            if (tutorialsGrid != null) {
                var items = tutorialsGrid.selection.getSelected();
                if (items.length > 0) {
                    selectedIdsArray = new Array();
                    for (var i = 0; i < items.length; i++) {
                        itemId = tutorialsGrid.store.getValue(items[i], "tutorialId");
                        itemId = $.trim(itemId);
                        selectedIdsArray.push(itemId);
                    }
                    // close dialog
                    closeConfirmDeletionModalDialog();
                    // now delete items
                    deleteSeletedTutorials(selectedIdsArray);
                }
            }

        }

        function registerButtonClickEvents() {
            // toolbar buttons
            $("#" + addNewItemBtnId).click(function () {
                showAddItemDialog();
            });
            $("#" + deleteItemsBtnId).click(function () {
                deleteItemsBtnClick();
            });

            // dialog buttons
            $("#" + addNewItemBtnDialogId).click(function () {
                validateBeforeAddNewTutorial();
            });
            $("#" + editItemBtnDialogId).click(function () {
                displayTutorialView(editItemDetailsCmd);
            });

            $("#" + closeEditBtnDialogId).click(function () {
                closeViewItemDetailsDialog();
            });
            $("#" + saveChangesBtnDialogId).click(function () {
                saveTutorialChanges();
            });
            $("#" + cancelChangesBtnDialogId).click(function () {
                displayTutorialView(cancelChangesCmd);
            });
            $("#" + cancelAddItemBtnDialogId).click(function () {
            });
            $("#" + confirmItemsDeletionBtnDialogId).click(function () {
                onConfirmItemsDeletion();
            });
            $("#" + moveUpBtnDialogId).click(function () {
            });
            $("#" + moveDownBtnDialogId).click(function () {
            });
            // some menu items
        
            $("#printDataListMenuItem").click(function () {
                printDataList();
            });
            $("#exportDataListToCsvMenuItem").click(function () {
                exportDataListToCsv();
            });
        }

        function initFormValidators() {

            $("#" + tutorialDetailsFormId).validate({
                rules: {
                     
                },
                messages: {
                    
                },
                submitHandler: function (form) {
                     
                },
                invalidHandler: function (form, validator) {
                    alert(validator.numberOfInvalids());
                },
                highlight: function (element, errorClass, validClass) {
                     
                    $(element).closest(".form-group").addClass("has-error");
                },
                unhighlight: function (element, errorClass, validClass) {
                     
                    $(element).closest(".form-group").removeClass("has-error");
                }
            });

        }

        function validateBeforeAddNewTutorial() {

            var isFormInputsValid = $("#" + tutorialDetailsFormId).valid();
            if (isFormInputsValid) {
                // close dialog
                closeAddEditItemDialog();
                // add callback
                addNewTutorial();
            }
        }


        function showAddItemDialog() {

            if ($("#" + tutorialDetailsDialogId) != null) {
                // set content dialog
                $("#" + addNewItemDialogContentId).html(editItemDetailsFormContent);
                // set textfields values when Dojo parsing completed
                settersMethodWithDefaultValues();
                $("#" + tutorialDetailsDialogId).modal("show");
            }
        }


        function closeAddEditItemDialog() {
            if ($("#" + tutorialDetailsDialogId) != null) {
                $("#" + tutorialDetailsDialogId).modal("hide");
            }
        }

        function closeConfirmDeletionModalDialog() {
            if ($("#" + confirmDeletionDialogId) != null) {
                $("#" + confirmDeletionDialogId).modal("hide");
            }
        }




        function addNewTutorial() {

            var tutorialDetailsFormObject = $("#" + tutorialDetailsFormId).serializeObject();
            // convert form to json object
            var itemToAdd = tutorialDetailsFormObject;
            itemToAdd = tutorialDetailsFormObject;
            var postParameters = {
                "formValues[]": dojo.toJson(tutorialDetailsFormObject, true)
                , "userAction": insertNewItemCmd
            };
            var xhrArgs = {
                url: controllerUrl,
                postData: postParameters,
                handleAs: postDataFormat,
                method: postMethod,
                error: function (errorMsg) {
                    logError({ message: "Failed to add new item. Error: " + errorMsg });
                }
            };


            //get postback result
            function addNewTutorialCompleted(data) {

                debugMessageToConsole("addNewTutorialCompleted data : " + data, highLevel);
                // get json result
                var jsonData = data;
                // clear error message
                $("#" + errorContentDivId).html("");
                if (jsonData == null) {
                    displayErrorContent(errorContentDivId, "addNewTutorialCompleted: " + jsonErrorMsg);
                    return;
                }
                else if (jsonData.length == 1 && jsonData[0].jsonErrorMessage != null) {
                    displayErrorContent(errorContentDivId, jsonData[0].jsonErrorMessage);
                    return;
                }
                // display overlay message
                showSuccessOverlay(successOverlayDivId, pageLangTexts.confirmationCreationLabel, successImg);

                if (tutorialsStore != null && jsonData[0].insertedItemKey != null) {
                    itemToAdd.tutorialId = jsonData[0].insertedItemKey;
                    // redisplay data grid    
                    tutorialsStore.newItem(itemToAdd);
                }
            }

            // send async xhr request to server
            sendAsyncRequest(xhrArgs.url, xhrArgs.postData, xhrArgs.handleAs, xhrArgs.method,
                xhrArgs.error, addNewTutorialCompleted);

        }


        function submitInlineGridChanges(tutorialId, jsonValues) {

            var postParameters = {
                "tutorialId": tutorialId,
                "formValues[]": jsonValues,
                "updateMode": "inlineUpdate",
                "userAction": "updateItem",
            };
            var xhrArgs = {
                url: controllerUrl,
                postData: postParameters,
                handleAs: postDataFormat,
                method: postMethod,
                error: function (errorMsg) {
                    logError("Failed to update item from server: \n\n" + errorMsg);
                }
            }

            // send async xhr request to server
            sendAsyncRequest(xhrArgs.url, xhrArgs.postData, xhrArgs.handleAs, xhrArgs.method,
                xhrArgs.error, submitInlineDataCompleted);
            //get postback result
            function submitInlineDataCompleted(data) {

                var jsonData = data;
                $("#errorContentDiv").html("");
                if (jsonData == null) {
                    displayErrorContent("errorContentDiv", "submitInlineDataCompleted: " + jsonErrorMsg);
                    return;
                }
                else if (jsonData.length == 1 && jsonData[0].jsonErrorMessage != null) {
                    displayErrorContent("errorContentDiv", jsonData[0].jsonErrorMessage);
                    return;
                }
                // display overlay message
                showSuccessOverlay(successOverlayDivId, pageLangTexts.confirmationUpdateLabel, successImg);
            }
        }


        function deleteSeletedTutorials(tutorialIdsList) {
            var postParameters = {
                "selectedIds[]": tutorialIdsList,
                "userAction": "deleteItem"
            };
            var xhrArgs = {
                url: controllerUrl,
                postData: postParameters,
                handleAs: postDataFormat,
                method: postMethod,
                error: function (errorMsg) {
                    logError({ message: "Failed to delete items from server: \n\n" + errorMsg });
                }
            };

            // send async xhr request to server
            sendAsyncRequest(xhrArgs.url, xhrArgs.postData, xhrArgs.handleAs, xhrArgs.method,
                xhrArgs.error, deleteSeletedTutorialsCompleted);
            //get postback result
            function deleteSeletedTutorialsCompleted(data) {

                var jsonData = data;
                $("#" + errorContentDivId).html("");
                if (jsonData == null) {
                    displayErrorContent("errorContentDiv", "deleteSeletedTutorialsCompleted: " + jsonErrorMsg);
                    return;
                }
                else if (jsonData.length == 1 && jsonData[0].jsonErrorMessage != null) {
                    displayErrorContent(errorContentDivId, jsonData[0].jsonErrorMessage);
                    return;
                }
                // delete items in store
                var itemsToDelete = tutorialsGrid.selection.getSelected();
                $.each(itemsToDelete, function (index, item) {
                    if (item) {
                        tutorialsStore.deleteItem(item);
                    }
                });
                // save datastore
                tutorialsStore.save();
                // display overlay message
                showSuccessOverlay(successOverlayDivId, pageLangTexts.confirmationDeletionLabel, successImg);

                $("#" + resultsDivId).html("");
            }

        }


        function submitTutorialDetailsForm(tutorialId) {
            //check form validation
            //if (!tutorialDetailsForm.validate()) {
            //    return;
            //}
            // convert form to json object
            var tutorialDetailsFormObject = $("#" + tutorialDetailsFormId).serializeObject();
     
            // convert to json arry
            var jsonValues = dojo.toJson(tutorialDetailsFormObject);

            var postParameters = {
                "tutorialId": tutorialId,
                "formValues[]": jsonValues,
                "updateMode": "allFields",
                "userAction": "updateItem"
            };
            var xhrArgs = {
                url: controllerUrl,
                postData: postParameters,
                handleAs: postDataFormat,
                method: postMethod,
                error: function (errorMsg) {
                    logError({ message: "Failed to update item from server: \n\n" + errorMsg });
                }
            }

            // send async xhr request to server
            sendAsyncRequest(xhrArgs.url, xhrArgs.postData, xhrArgs.handleAs, xhrArgs.method,
                xhrArgs.error, submitTutorialDetailsCompleted);
            //get postback result
            function submitTutorialDetailsCompleted(data) {
                //debugMessageToConsole(" TutorialDetailsForm-postback: " + $.trim(data), highLevel);
                var jsonData = data;
                $("#" + errorContentDivId).html("");
                if (jsonData == null) {
                    displayErrorContent(errorContentDivId, "submitTutorialDetailsCompleted: " + jsonErrorMsg);
                    return;
                }
                else if (jsonData.length == 1 && jsonData[0].jsonErrorMessage != null) {
                    displayErrorContent(errorContentDivId, jsonData[0].jsonErrorMessage);
                    return;
                }

                // get item to update
                var itemToUpdate = tutorialsGrid.getItem(currentItemIndex); 

                

tutorialsStore.setValue(itemToUpdate, "memberId", tutorialDetailsFormObject.memberId);
tutorialsStore.setValue(itemToUpdate, "date", tutorialDetailsFormObject.date);
tutorialsStore.setValue(itemToUpdate, "subject", tutorialDetailsFormObject.subject);
tutorialsStore.setValue(itemToUpdate, "level", tutorialDetailsFormObject.level);
tutorialsStore.setValue(itemToUpdate, "location", tutorialDetailsFormObject.location);
tutorialsStore.setValue(itemToUpdate, "shedules", tutorialDetailsFormObject.shedules);
tutorialsStore.setValue(itemToUpdate, "status", tutorialDetailsFormObject.status);

                tutorialsStore.save();
        
                // display overlay message
                showSuccessOverlay(successOverlayDivId, pageLangTexts.confirmationUpdateLabel, successImg);
            }
        }


        function confirmDeletionMessageBox() {
            if ($("#" + confirmDeletionDialogId) != null) {
                $("#" + confirmDeletionDialogId).modal("show");
            }
        }
 

        function viewNextItemDetails() {
            currentItemIndex = getNextItemIndex();
            var tutorialId = itemsArrayIds[currentItemIndex];
            viewTutorialDetails(tutorialId);
        }

        function viewPrevousItemDetails() {
            currentItemIndex = getPreviousItemIndex();
            var tutorialId = itemsArrayIds[currentItemIndex];
            viewTutorialDetails(tutorialId);
        }

        function getCurrentItemIndex(value) {
            for (i = 0; i < itemsArrayIds.length; i++) {
                if (itemsArrayIds[i] == value)
                    return i;
            }
            return 0;
        }


        function getNextItemIndex() {
            if (currentItemIndex >= 0 && currentItemIndex < itemsArrayIds.length) {
                for (i = 0; i < itemsArrayIds.length; i++) {
                    if (itemsArrayIds[i] == itemsArrayIds[currentItemIndex]) {
                        if (i < itemsArrayIds.length - 1)
                            return i + 1;
                        else
                            return 0;
                    }
                }
            }
            return 0;
        }


        function getPreviousItemIndex() {
            if (currentItemIndex >= 0 && currentItemIndex < itemsArrayIds.length) {
                for (i = 0; i < itemsArrayIds.length; i++) {
                    if (itemsArrayIds[i] == itemsArrayIds[currentItemIndex]) {
                        if (i > 0)
                            return i - 1;   //gets the previous item
                        else
                            return itemsArrayIds.length - 1; // get the last item
                    }
                }
            }
            return 0;
        }


        function showAddNewItemDialog() {
            alert("not implemented");
        }

        function showViewItemDetailsDialog() {
            if ($("#" + viewItemDetailsDialogId) != null) {
                $("#" + viewItemDetailsDialogId).modal("show");
            }
        }


        function closeViewItemDetailsDialog() {
            if ($("#" + viewItemDetailsDialogId) != null) {
                $("#" + viewItemDetailsDialogId).modal("hide");
            }
        }

        function saveTutorialChanges() {
            submitTutorialDetailsForm(currentTutorialId);
            if ($("#" + viewItemDetailsDialogId) != null) {
                $("#" + viewItemDetailsDialogId).modal("hide");
            }
        }

        function shortDateField(data) {
            var strDate = strToShortDate(new String(data));
            debugMessageToConsole("shortDateFieldFormatter strDate: " + strDate, lowLevel);
            return dojo.date.locale.format(strDate, { formatLength: "short", selector: "date", timePattern: "HH:mm:ss" });
        }


        function printDataList() {
            alert("print data not yet implemented..");
        }


        function exportDataListToCsv() {
            alert("exportDataListToCsv not yet implemented..");
        }
         
	    