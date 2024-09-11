
               

                /**
                *This script was auto generated.
                * Script to manage a  Publication model entity.
                * @author
                *     Guy Bami W.
                * Created changes: 08.04.2017 20:48:18
                */

                
 


        // global varaibles
        var publicationsStore = null;
        var publicationsGrid = null;
        var currentItemIndex = -1;
        var itemsArrayIds = new Array();
        var currentPublicationId = -1;


        // some publication actions commands
        var viewAllItemsCmd = "viewAllPublications";
        var editItemDetailsCmd = "editDetails";
        var viewItemDetailsCmd = "viewDetails";
        var addNewItemCmd = "addNewItem";
        var insertNewItemCmd = "insertNewItem";
        var cancelChangesCmd = "cancelChanges";
        var saveChangesCmd = "saveChanges";

        // controls and page divs Ids
        var toolbarButtonsDivId = "toolbarButtonsDiv";
        var dataItemsGridId = "publicationsGrid";
        var itemDetailsDivId = "publicationDetailsDiv";
        var itemsGridDivId = "publicationsGridDiv";
        var itemDetailsFormId = "publicationDetailsForm";
        var publicationDetailsFormId = "publicationDetailsForm";
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
        var publicationDetailsDialogId = "publicationDetailsDialog";
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
        var controllerUrl = "../../Controllers/PublicationController.php";
        var postDataFormat = "text";
        var postMethod = "POST";


        // flags used to check user role
        var readItemRight = true;
        var addNewItemRight = true;
        var deleteItemRight = true;
        var editItemRight = true;

        var menuItemSectionTitleLabel = "Administration";
        var subMenuItemSectionTitleLabel = "Publications";

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
                                curmo.entityType = curmo.entityTypesObject.Publication;
                                readItemRight = curmo.getAccessRightByEntityType(curmo.entityTypesObject.Publication, curmo.accessRightsObject.readRight);
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
                                generatePublicationsDataGrid(itemsGridDivId);
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


 $("#userIdLabel").html(jsonData[0].userId);
 $("#categoryLabel").html(jsonData[0].category);
 $("#summaryLabel").html(jsonData[0].summary);
 $("#dateLabel").html(jsonData[0].date);

}
       

function setTextFields(jsonData){


setFormFieldValue("userId", jsonData[0].userId);
setFormFieldValue("category", jsonData[0].category);
setFormFieldValue("summary", jsonData[0].summary);
setFormFieldValue("date", jsonData[0].date);

}
       

function settersMethodWithDefaultValues(){


setFormFieldValue("userId", "31617");
setFormFieldValue("category", "Info");
setFormFieldValue("summary", "summary-eadd2c9");
setFormFieldValue("date", "2017-04-08");

}

       /**
        * generate dynamic Publications datagrid
        * @param {string} targetDiv
        * @returns {none}
        */
        function generatePublicationsDataGrid(targetDiv) {
   
            var windowWidth = $(window).width() - 200;
 var userIdColWidth = windowWidth * 0.25 + "px"; 
 var categoryColWidth = windowWidth * 0.25 + "px"; 
 var summaryColWidth = windowWidth * 0.25 + "px"; 
 var dateColWidth = "auto";  


     
            // manage user role
            var dataEditable = true;
            if (customUserRolesManagerObject != null && customUserRolesManagerObject.userRolesData.length > 0) {
                var curmo = customUserRolesManagerObject; // short name
                curmo.entityType = curmo.entityTypesObject.Publication;
                dataEditable = curmo.getAccessRightByEntityType(curmo.entityTypesObject.Publication, curmo.accessRightsObject.editRight);
            }

             var columsLayout = [
                 
                    {
                        name: pageLangTexts.userIdColLabel == null ? "UserId" : pageLangTexts.userIdColLabel,
                        field: "userId",
                        dataType: "number",
                        editable: dataEditable,
                        type: dojox.grid.cells._Widget,
                        width: userIdColWidth,
                        widgetClass: dijit.form.NumberTextBox,
                        widgetProps: {}
                    }
                 
                    ,{
                        name: pageLangTexts.categoryColLabel == null ? "Category" : pageLangTexts.categoryColLabel,
                        field: "category",
                        dataType: "string",
                        editable: dataEditable,
                        type: dojox.grid.cells._Widget,
                        width: categoryColWidth,
                        widgetClass: dijit.form.Select,
                        widgetProps: { options:[{ label:"Info", value:"Info"},{ label:"Concert", value:"Concert"},{ label:"Hiwi", value:"Hiwi"},{ label:"Mourning", value:"Mourning"}]}
                    } 
                 
                    ,{
                        name: pageLangTexts.summaryColLabel == null ? "Summary" : pageLangTexts.summaryColLabel,
                        field: "summary",
                        dataType: "string",
                        editable: dataEditable,
                        type: dojox.grid.cells._Widget,
                        width: summaryColWidth,
                        widgetClass: dijit.form.TextBox,
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
                    displayErrorContent("errorContentDiv", "Failed to get all publications from server: " + errorMsg);
                    logError({ message: "Failed to get all publications from server: \n" + errorMsg });
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

                publicationsStore = new dojo.data.ItemFileWriteStore({
                    data: {
                        identifier: "publicationId",
                        items: jsonData
                    }
                });

                if (publicationsStore != null) {
                    // save data store
                    publicationsStore.save({
                        onComplete: function () { debugMessageToConsole("Done saving items store.", lowLevel); },
                        onError: function () { logError({ message: "Save failed items store." }); }
                    });
                    // custom sorting fields
                    publicationsStore.comparatorMap = {};publicationsStore.comparatorMap["userId"] = compareStringIgnoreCase; publicationsStore.comparatorMap["category"] = compareStringIgnoreCase; publicationsStore.comparatorMap["summary"] = compareStringIgnoreCase; publicationsStore.comparatorMap["date"] = compareStringIgnoreCase;  



                    //destroy old controls
                    destroyWidget(dataItemsGridId);
                    // create datagrid
                    publicationsGrid = new dojox.grid.EnhancedGrid({
                        id: dataItemsGridId,
                        store: publicationsStore,
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
                                itemsName: "Publications"
                            }
                        }
                    });

                    // set sort index col
                    setSortColumnsIndexes(publicationsGrid, 2, true);
                    // add events trigger
                    publicationsGrid.on("SelectionChanged", reportSelection);
                    publicationsGrid.on("StartEdit", gridStartEdit);
                    publicationsGrid.on("ApplyCellEdit", gridApplyCellEdit);
                    publicationsGrid.placeAt(targetDiv);
                    // parse datagrid
                    publicationsGrid.startup();
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
                        obj["entityKeyId"] = storeItem["publicationId"].toString();
                        var itemId = storeItem["publicationId"].toString();
                        var jsonValues = dojo.toJson(obj);
                        debugMessageToConsole("jsonValues: " + jsonValues, highLevel);
                        submitInlineGridChanges(itemId, jsonValues);
                    }
                }
            }

        }



        function displayPublicationView(userAction) {

            var publicationId = currentPublicationId;
            debugMessageToConsole("publicationId:" + publicationId, highLevel);
            debugMessageToConsole("userAction: " + userAction, highLevel);

            var windowHeight = $(window).height();
            var windowWidth = $(window).width();

            var postParameters = { "publicationId": publicationId, "userAction": userAction };
            var xhrArgs = {
                url: controllerUrl,
                postData: postParameters,
                handleAs: postDataFormat,
                method: postMethod,
                error: function (errorMsg) {
                    logError({ message: "Reponse failed to get publication details with error: " + errorMsg });
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
                    displayErrorContent(errorContentDivId, "displayPublicationView: " + jsonErrorMsg);
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


 

        function viewPublicationDetails(publicationId) {
            currentPublicationId = publicationId;
            currentItemIndex = getCurrentItemIndex(publicationId);
            displayPublicationView(viewItemDetailsCmd);
        }




        function createToolbarBtns(userAction) {

            // check user role
            if (customUserRolesManagerObject != null && customUserRolesManagerObject.userRolesData.length > 0) {
                var curmo = customUserRolesManagerObject; // short name
                if (!customUserRolesManagerObject.rolesLoaded) {
                    // load roles only once
                    curmo.entityType = curmo.entityTypesObject.Publication;
                    addNewItemRight = curmo.getAccessRightByEntityType(curmo.entityTypesObject.Publication, curmo.accessRightsObject.createRight);
                    editItemRight = curmo.getAccessRightByEntityType(curmo.entityTypesObject.Publication, curmo.accessRightsObject.editRight);
                    deleteItemRight = curmo.getAccessRightByEntityType(curmo.entityTypesObject.Publication, curmo.accessRightsObject.deleteRight);
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

            if (publicationsGrid != null) {
                var items = publicationsGrid.selection.getSelected();
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

            if (publicationsGrid != null) {
                var items = publicationsGrid.selection.getSelected();
                if (items.length > 0) {
                    selectedIdsArray = new Array();
                    for (var i = 0; i < items.length; i++) {
                        itemId = publicationsGrid.store.getValue(items[i], "publicationId");
                        itemId = $.trim(itemId);
                        selectedIdsArray.push(itemId);
                    }
                    // close dialog
                    closeConfirmDeletionModalDialog();
                    // now delete items
                    deleteSeletedPublications(selectedIdsArray);
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
                validateBeforeAddNewPublication();
            });
            $("#" + editItemBtnDialogId).click(function () {
                displayPublicationView(editItemDetailsCmd);
            });

            $("#" + closeEditBtnDialogId).click(function () {
                closeViewItemDetailsDialog();
            });
            $("#" + saveChangesBtnDialogId).click(function () {
                savePublicationChanges();
            });
            $("#" + cancelChangesBtnDialogId).click(function () {
                displayPublicationView(cancelChangesCmd);
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

            $("#" + publicationDetailsFormId).validate({
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

        function validateBeforeAddNewPublication() {

            var isFormInputsValid = $("#" + publicationDetailsFormId).valid();
            if (isFormInputsValid) {
                // close dialog
                closeAddEditItemDialog();
                // add callback
                addNewPublication();
            }
        }


        function showAddItemDialog() {

            if ($("#" + publicationDetailsDialogId) != null) {
                // set content dialog
                $("#" + addNewItemDialogContentId).html(editItemDetailsFormContent);
                // set textfields values when Dojo parsing completed
                settersMethodWithDefaultValues();
                $("#" + publicationDetailsDialogId).modal("show");
            }
        }


        function closeAddEditItemDialog() {
            if ($("#" + publicationDetailsDialogId) != null) {
                $("#" + publicationDetailsDialogId).modal("hide");
            }
        }

        function closeConfirmDeletionModalDialog() {
            if ($("#" + confirmDeletionDialogId) != null) {
                $("#" + confirmDeletionDialogId).modal("hide");
            }
        }




        function addNewPublication() {

            var publicationDetailsFormObject = $("#" + publicationDetailsFormId).serializeObject();
            // convert form to json object
            var itemToAdd = publicationDetailsFormObject;
            itemToAdd = publicationDetailsFormObject;
            var postParameters = {
                "formValues[]": dojo.toJson(publicationDetailsFormObject, true)
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
            function addNewPublicationCompleted(data) {

                debugMessageToConsole("addNewPublicationCompleted data : " + data, highLevel);
                // get json result
                var jsonData = data;
                // clear error message
                $("#" + errorContentDivId).html("");
                if (jsonData == null) {
                    displayErrorContent(errorContentDivId, "addNewPublicationCompleted: " + jsonErrorMsg);
                    return;
                }
                else if (jsonData.length == 1 && jsonData[0].jsonErrorMessage != null) {
                    displayErrorContent(errorContentDivId, jsonData[0].jsonErrorMessage);
                    return;
                }
                // display overlay message
                showSuccessOverlay(successOverlayDivId, pageLangTexts.confirmationCreationLabel, successImg);

                if (publicationsStore != null && jsonData[0].insertedItemKey != null) {
                    itemToAdd.publicationId = jsonData[0].insertedItemKey;
                    // redisplay data grid    
                    publicationsStore.newItem(itemToAdd);
                }
            }

            // send async xhr request to server
            sendAsyncRequest(xhrArgs.url, xhrArgs.postData, xhrArgs.handleAs, xhrArgs.method,
                xhrArgs.error, addNewPublicationCompleted);

        }


        function submitInlineGridChanges(publicationId, jsonValues) {

            var postParameters = {
                "publicationId": publicationId,
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


        function deleteSeletedPublications(publicationIdsList) {
            var postParameters = {
                "selectedIds[]": publicationIdsList,
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
                xhrArgs.error, deleteSeletedPublicationsCompleted);
            //get postback result
            function deleteSeletedPublicationsCompleted(data) {

                var jsonData = data;
                $("#" + errorContentDivId).html("");
                if (jsonData == null) {
                    displayErrorContent("errorContentDiv", "deleteSeletedPublicationsCompleted: " + jsonErrorMsg);
                    return;
                }
                else if (jsonData.length == 1 && jsonData[0].jsonErrorMessage != null) {
                    displayErrorContent(errorContentDivId, jsonData[0].jsonErrorMessage);
                    return;
                }
                // delete items in store
                var itemsToDelete = publicationsGrid.selection.getSelected();
                $.each(itemsToDelete, function (index, item) {
                    if (item) {
                        publicationsStore.deleteItem(item);
                    }
                });
                // save datastore
                publicationsStore.save();
                // display overlay message
                showSuccessOverlay(successOverlayDivId, pageLangTexts.confirmationDeletionLabel, successImg);

                $("#" + resultsDivId).html("");
            }

        }


        function submitPublicationDetailsForm(publicationId) {
            //check form validation
            //if (!publicationDetailsForm.validate()) {
            //    return;
            //}
            // convert form to json object
            var publicationDetailsFormObject = $("#" + publicationDetailsFormId).serializeObject();
     
            // convert to json arry
            var jsonValues = dojo.toJson(publicationDetailsFormObject);

            var postParameters = {
                "publicationId": publicationId,
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
                xhrArgs.error, submitPublicationDetailsCompleted);
            //get postback result
            function submitPublicationDetailsCompleted(data) {
                //debugMessageToConsole(" PublicationDetailsForm-postback: " + $.trim(data), highLevel);
                var jsonData = data;
                $("#" + errorContentDivId).html("");
                if (jsonData == null) {
                    displayErrorContent(errorContentDivId, "submitPublicationDetailsCompleted: " + jsonErrorMsg);
                    return;
                }
                else if (jsonData.length == 1 && jsonData[0].jsonErrorMessage != null) {
                    displayErrorContent(errorContentDivId, jsonData[0].jsonErrorMessage);
                    return;
                }

                // get item to update
                var itemToUpdate = publicationsGrid.getItem(currentItemIndex); 

                

publicationsStore.setValue(itemToUpdate, "userId", publicationDetailsFormObject.userId);
publicationsStore.setValue(itemToUpdate, "category", publicationDetailsFormObject.category);
publicationsStore.setValue(itemToUpdate, "summary", publicationDetailsFormObject.summary);
publicationsStore.setValue(itemToUpdate, "date", publicationDetailsFormObject.date);

                publicationsStore.save();
        
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
            var publicationId = itemsArrayIds[currentItemIndex];
            viewPublicationDetails(publicationId);
        }

        function viewPrevousItemDetails() {
            currentItemIndex = getPreviousItemIndex();
            var publicationId = itemsArrayIds[currentItemIndex];
            viewPublicationDetails(publicationId);
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

        function savePublicationChanges() {
            submitPublicationDetailsForm(currentPublicationId);
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
         
	    