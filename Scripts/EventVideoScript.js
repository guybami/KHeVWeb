
               

                /**
                *This script was auto generated.
                * Script to manage a  EventVideo model entity.
                * @author
                *     Guy Bami W.
                * Created changes: 08.04.2017 20:48:16
                */

                
 


        // global varaibles
        var eventvideosStore = null;
        var eventvideosGrid = null;
        var currentItemIndex = -1;
        var itemsArrayIds = new Array();
        var currentEventVideoId = -1;


        // some eventvideo actions commands
        var viewAllItemsCmd = "viewAllEventVideos";
        var editItemDetailsCmd = "editDetails";
        var viewItemDetailsCmd = "viewDetails";
        var addNewItemCmd = "addNewItem";
        var insertNewItemCmd = "insertNewItem";
        var cancelChangesCmd = "cancelChanges";
        var saveChangesCmd = "saveChanges";

        // controls and page divs Ids
        var toolbarButtonsDivId = "toolbarButtonsDiv";
        var dataItemsGridId = "eventvideosGrid";
        var itemDetailsDivId = "eventvideoDetailsDiv";
        var itemsGridDivId = "eventvideosGridDiv";
        var itemDetailsFormId = "eventvideoDetailsForm";
        var eventvideoDetailsFormId = "eventvideoDetailsForm";
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
        var eventvideoDetailsDialogId = "eventvideoDetailsDialog";
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
        var controllerUrl = "../../Controllers/EventVideoController.php";
        var postDataFormat = "text";
        var postMethod = "POST";


        // flags used to check user role
        var readItemRight = true;
        var addNewItemRight = true;
        var deleteItemRight = true;
        var editItemRight = true;

        var menuItemSectionTitleLabel = "Administration";
        var subMenuItemSectionTitleLabel = "EventVideos";

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
                                curmo.entityType = curmo.entityTypesObject.EventVideo;
                                readItemRight = curmo.getAccessRightByEntityType(curmo.entityTypesObject.EventVideo, curmo.accessRightsObject.readRight);
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
                                generateEventVideosDataGrid(itemsGridDivId);
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


 $("#eventIdLabel").html(jsonData[0].eventId);
 $("#fileFullNameLabel").html(jsonData[0].fileFullName);
 $("#titleLabel").html(jsonData[0].title);

}
       

function setTextFields(jsonData){


setFormFieldValue("eventId", jsonData[0].eventId);
setFormFieldValue("fileFullName", jsonData[0].fileFullName);
setFormFieldValue("title", jsonData[0].title);

}
       

function settersMethodWithDefaultValues(){


setFormFieldValue("eventId", "119508");
setFormFieldValue("fileFullName", "fileFullName-9fa04f8");
setFormFieldValue("title", "title-70efbf0");

}

       /**
        * generate dynamic EventVideos datagrid
        * @param {string} targetDiv
        * @returns {none}
        */
        function generateEventVideosDataGrid(targetDiv) {
   
            var windowWidth = $(window).width() - 200;
 var eventIdColWidth = windowWidth * 0.33 + "px"; 
 var fileFullNameColWidth = windowWidth * 0.33 + "px"; 
 var titleColWidth = "auto";  


     
            // manage user role
            var dataEditable = true;
            if (customUserRolesManagerObject != null && customUserRolesManagerObject.userRolesData.length > 0) {
                var curmo = customUserRolesManagerObject; // short name
                curmo.entityType = curmo.entityTypesObject.EventVideo;
                dataEditable = curmo.getAccessRightByEntityType(curmo.entityTypesObject.EventVideo, curmo.accessRightsObject.editRight);
            }

             var columsLayout = [
                 
                    {
                        name: pageLangTexts.eventIdColLabel == null ? "EventId" : pageLangTexts.eventIdColLabel,
                        field: "eventId",
                        dataType: "number",
                        editable: dataEditable,
                        type: dojox.grid.cells._Widget,
                        width: eventIdColWidth,
                        widgetClass: dijit.form.NumberTextBox,
                        widgetProps: {}
                    }
                 
                    ,{
                        name: pageLangTexts.fileFullNameColLabel == null ? "FileFullName" : pageLangTexts.fileFullNameColLabel,
                        field: "fileFullName",
                        dataType: "string",
                        editable: dataEditable,
                        type: dojox.grid.cells._Widget,
                        width: fileFullNameColWidth,
                        widgetClass: dijit.form.TextBox,
                        widgetProps: {}
                    } 
                 
                    ,{
                        name: pageLangTexts.titleColLabel == null ? "Title" : pageLangTexts.titleColLabel,
                        field: "title",
                        dataType: "string",
                        editable: dataEditable,
                        type: dojox.grid.cells._Widget,
                        width: titleColWidth,
                        widgetClass: dijit.form.TextBox,
                        widgetProps: {}
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
                    displayErrorContent("errorContentDiv", "Failed to get all eventvideos from server: " + errorMsg);
                    logError({ message: "Failed to get all eventvideos from server: \n" + errorMsg });
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

                eventvideosStore = new dojo.data.ItemFileWriteStore({
                    data: {
                        identifier: "eventvideoId",
                        items: jsonData
                    }
                });

                if (eventvideosStore != null) {
                    // save data store
                    eventvideosStore.save({
                        onComplete: function () { debugMessageToConsole("Done saving items store.", lowLevel); },
                        onError: function () { logError({ message: "Save failed items store." }); }
                    });
                    // custom sorting fields
                    eventvideosStore.comparatorMap = {};eventvideosStore.comparatorMap["eventId"] = compareStringIgnoreCase; eventvideosStore.comparatorMap["fileFullName"] = compareStringIgnoreCase; eventvideosStore.comparatorMap["title"] = compareStringIgnoreCase;  



                    //destroy old controls
                    destroyWidget(dataItemsGridId);
                    // create datagrid
                    eventvideosGrid = new dojox.grid.EnhancedGrid({
                        id: dataItemsGridId,
                        store: eventvideosStore,
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
                                itemsName: "EventVideos"
                            }
                        }
                    });

                    // set sort index col
                    setSortColumnsIndexes(eventvideosGrid, 2, true);
                    // add events trigger
                    eventvideosGrid.on("SelectionChanged", reportSelection);
                    eventvideosGrid.on("StartEdit", gridStartEdit);
                    eventvideosGrid.on("ApplyCellEdit", gridApplyCellEdit);
                    eventvideosGrid.placeAt(targetDiv);
                    // parse datagrid
                    eventvideosGrid.startup();
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
                        obj["entityKeyId"] = storeItem["eventvideoId"].toString();
                        var itemId = storeItem["eventvideoId"].toString();
                        var jsonValues = dojo.toJson(obj);
                        debugMessageToConsole("jsonValues: " + jsonValues, highLevel);
                        submitInlineGridChanges(itemId, jsonValues);
                    }
                }
            }

        }



        function displayEventVideoView(userAction) {

            var eventvideoId = currentEventVideoId;
            debugMessageToConsole("eventvideoId:" + eventvideoId, highLevel);
            debugMessageToConsole("userAction: " + userAction, highLevel);

            var windowHeight = $(window).height();
            var windowWidth = $(window).width();

            var postParameters = { "eventvideoId": eventvideoId, "userAction": userAction };
            var xhrArgs = {
                url: controllerUrl,
                postData: postParameters,
                handleAs: postDataFormat,
                method: postMethod,
                error: function (errorMsg) {
                    logError({ message: "Reponse failed to get eventvideo details with error: " + errorMsg });
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
                    displayErrorContent(errorContentDivId, "displayEventVideoView: " + jsonErrorMsg);
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


 

        function viewEventVideoDetails(eventvideoId) {
            currentEventVideoId = eventvideoId;
            currentItemIndex = getCurrentItemIndex(eventvideoId);
            displayEventVideoView(viewItemDetailsCmd);
        }




        function createToolbarBtns(userAction) {

            // check user role
            if (customUserRolesManagerObject != null && customUserRolesManagerObject.userRolesData.length > 0) {
                var curmo = customUserRolesManagerObject; // short name
                if (!customUserRolesManagerObject.rolesLoaded) {
                    // load roles only once
                    curmo.entityType = curmo.entityTypesObject.EventVideo;
                    addNewItemRight = curmo.getAccessRightByEntityType(curmo.entityTypesObject.EventVideo, curmo.accessRightsObject.createRight);
                    editItemRight = curmo.getAccessRightByEntityType(curmo.entityTypesObject.EventVideo, curmo.accessRightsObject.editRight);
                    deleteItemRight = curmo.getAccessRightByEntityType(curmo.entityTypesObject.EventVideo, curmo.accessRightsObject.deleteRight);
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

            if (eventvideosGrid != null) {
                var items = eventvideosGrid.selection.getSelected();
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

            if (eventvideosGrid != null) {
                var items = eventvideosGrid.selection.getSelected();
                if (items.length > 0) {
                    selectedIdsArray = new Array();
                    for (var i = 0; i < items.length; i++) {
                        itemId = eventvideosGrid.store.getValue(items[i], "eventvideoId");
                        itemId = $.trim(itemId);
                        selectedIdsArray.push(itemId);
                    }
                    // close dialog
                    closeConfirmDeletionModalDialog();
                    // now delete items
                    deleteSeletedEventVideos(selectedIdsArray);
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
                validateBeforeAddNewEventVideo();
            });
            $("#" + editItemBtnDialogId).click(function () {
                displayEventVideoView(editItemDetailsCmd);
            });

            $("#" + closeEditBtnDialogId).click(function () {
                closeViewItemDetailsDialog();
            });
            $("#" + saveChangesBtnDialogId).click(function () {
                saveEventVideoChanges();
            });
            $("#" + cancelChangesBtnDialogId).click(function () {
                displayEventVideoView(cancelChangesCmd);
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

            $("#" + eventvideoDetailsFormId).validate({
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

        function validateBeforeAddNewEventVideo() {

            var isFormInputsValid = $("#" + eventvideoDetailsFormId).valid();
            if (isFormInputsValid) {
                // close dialog
                closeAddEditItemDialog();
                // add callback
                addNewEventVideo();
            }
        }


        function showAddItemDialog() {

            if ($("#" + eventvideoDetailsDialogId) != null) {
                // set content dialog
                $("#" + addNewItemDialogContentId).html(editItemDetailsFormContent);
                // set textfields values when Dojo parsing completed
                settersMethodWithDefaultValues();
                $("#" + eventvideoDetailsDialogId).modal("show");
            }
        }


        function closeAddEditItemDialog() {
            if ($("#" + eventvideoDetailsDialogId) != null) {
                $("#" + eventvideoDetailsDialogId).modal("hide");
            }
        }

        function closeConfirmDeletionModalDialog() {
            if ($("#" + confirmDeletionDialogId) != null) {
                $("#" + confirmDeletionDialogId).modal("hide");
            }
        }




        function addNewEventVideo() {

            var eventvideoDetailsFormObject = $("#" + eventvideoDetailsFormId).serializeObject();
            // convert form to json object
            var itemToAdd = eventvideoDetailsFormObject;
            itemToAdd = eventvideoDetailsFormObject;
            var postParameters = {
                "formValues[]": dojo.toJson(eventvideoDetailsFormObject, true)
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
            function addNewEventVideoCompleted(data) {

                debugMessageToConsole("addNewEventVideoCompleted data : " + data, highLevel);
                // get json result
                var jsonData = data;
                // clear error message
                $("#" + errorContentDivId).html("");
                if (jsonData == null) {
                    displayErrorContent(errorContentDivId, "addNewEventVideoCompleted: " + jsonErrorMsg);
                    return;
                }
                else if (jsonData.length == 1 && jsonData[0].jsonErrorMessage != null) {
                    displayErrorContent(errorContentDivId, jsonData[0].jsonErrorMessage);
                    return;
                }
                // display overlay message
                showSuccessOverlay(successOverlayDivId, pageLangTexts.confirmationCreationLabel, successImg);

                if (eventvideosStore != null && jsonData[0].insertedItemKey != null) {
                    itemToAdd.eventvideoId = jsonData[0].insertedItemKey;
                    // redisplay data grid    
                    eventvideosStore.newItem(itemToAdd);
                }
            }

            // send async xhr request to server
            sendAsyncRequest(xhrArgs.url, xhrArgs.postData, xhrArgs.handleAs, xhrArgs.method,
                xhrArgs.error, addNewEventVideoCompleted);

        }


        function submitInlineGridChanges(eventvideoId, jsonValues) {

            var postParameters = {
                "eventvideoId": eventvideoId,
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


        function deleteSeletedEventVideos(eventvideoIdsList) {
            var postParameters = {
                "selectedIds[]": eventvideoIdsList,
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
                xhrArgs.error, deleteSeletedEventVideosCompleted);
            //get postback result
            function deleteSeletedEventVideosCompleted(data) {

                var jsonData = data;
                $("#" + errorContentDivId).html("");
                if (jsonData == null) {
                    displayErrorContent("errorContentDiv", "deleteSeletedEventVideosCompleted: " + jsonErrorMsg);
                    return;
                }
                else if (jsonData.length == 1 && jsonData[0].jsonErrorMessage != null) {
                    displayErrorContent(errorContentDivId, jsonData[0].jsonErrorMessage);
                    return;
                }
                // delete items in store
                var itemsToDelete = eventvideosGrid.selection.getSelected();
                $.each(itemsToDelete, function (index, item) {
                    if (item) {
                        eventvideosStore.deleteItem(item);
                    }
                });
                // save datastore
                eventvideosStore.save();
                // display overlay message
                showSuccessOverlay(successOverlayDivId, pageLangTexts.confirmationDeletionLabel, successImg);

                $("#" + resultsDivId).html("");
            }

        }


        function submitEventVideoDetailsForm(eventvideoId) {
            //check form validation
            //if (!eventvideoDetailsForm.validate()) {
            //    return;
            //}
            // convert form to json object
            var eventvideoDetailsFormObject = $("#" + eventvideoDetailsFormId).serializeObject();
     
            // convert to json arry
            var jsonValues = dojo.toJson(eventvideoDetailsFormObject);

            var postParameters = {
                "eventvideoId": eventvideoId,
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
                xhrArgs.error, submitEventVideoDetailsCompleted);
            //get postback result
            function submitEventVideoDetailsCompleted(data) {
                //debugMessageToConsole(" EventVideoDetailsForm-postback: " + $.trim(data), highLevel);
                var jsonData = data;
                $("#" + errorContentDivId).html("");
                if (jsonData == null) {
                    displayErrorContent(errorContentDivId, "submitEventVideoDetailsCompleted: " + jsonErrorMsg);
                    return;
                }
                else if (jsonData.length == 1 && jsonData[0].jsonErrorMessage != null) {
                    displayErrorContent(errorContentDivId, jsonData[0].jsonErrorMessage);
                    return;
                }

                // get item to update
                var itemToUpdate = eventvideosGrid.getItem(currentItemIndex); 

                

eventvideosStore.setValue(itemToUpdate, "eventId", eventvideoDetailsFormObject.eventId);
eventvideosStore.setValue(itemToUpdate, "fileFullName", eventvideoDetailsFormObject.fileFullName);
eventvideosStore.setValue(itemToUpdate, "title", eventvideoDetailsFormObject.title);

                eventvideosStore.save();
        
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
            var eventvideoId = itemsArrayIds[currentItemIndex];
            viewEventVideoDetails(eventvideoId);
        }

        function viewPrevousItemDetails() {
            currentItemIndex = getPreviousItemIndex();
            var eventvideoId = itemsArrayIds[currentItemIndex];
            viewEventVideoDetails(eventvideoId);
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

        function saveEventVideoChanges() {
            submitEventVideoDetailsForm(currentEventVideoId);
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
         
	    