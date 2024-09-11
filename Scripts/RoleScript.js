
               

                /**
                *This script was auto generated.
                * Script to manage a  Role model entity.
                * @author
                *     Guy Bami W.
                * Created changes: 08.04.2017 20:48:19
                */

                
 


        // global varaibles
        var rolesStore = null;
        var rolesGrid = null;
        var currentItemIndex = -1;
        var itemsArrayIds = new Array();
        var currentRoleId = -1;


        // some role actions commands
        var viewAllItemsCmd = "viewAllRoles";
        var editItemDetailsCmd = "editDetails";
        var viewItemDetailsCmd = "viewDetails";
        var addNewItemCmd = "addNewItem";
        var insertNewItemCmd = "insertNewItem";
        var cancelChangesCmd = "cancelChanges";
        var saveChangesCmd = "saveChanges";

        // controls and page divs Ids
        var toolbarButtonsDivId = "toolbarButtonsDiv";
        var dataItemsGridId = "rolesGrid";
        var itemDetailsDivId = "roleDetailsDiv";
        var itemsGridDivId = "rolesGridDiv";
        var itemDetailsFormId = "roleDetailsForm";
        var roleDetailsFormId = "roleDetailsForm";
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
        var roleDetailsDialogId = "roleDetailsDialog";
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
        var controllerUrl = "../../Controllers/RoleController.php";
        var postDataFormat = "text";
        var postMethod = "POST";


        // flags used to check user role
        var readItemRight = true;
        var addNewItemRight = true;
        var deleteItemRight = true;
        var editItemRight = true;

        var menuItemSectionTitleLabel = "Administration";
        var subMenuItemSectionTitleLabel = "Roles";

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
                                curmo.entityType = curmo.entityTypesObject.Role;
                                readItemRight = curmo.getAccessRightByEntityType(curmo.entityTypesObject.Role, curmo.accessRightsObject.readRight);
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
                                generateRolesDataGrid(itemsGridDivId);
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


 $("#nameLabel").html(jsonData[0].name);
 $("#descriptionLabel").html(jsonData[0].description);

}
       

function setTextFields(jsonData){


setFormFieldValue("name", jsonData[0].name);
setFormFieldValue("description", jsonData[0].description);

}
       

function settersMethodWithDefaultValues(){


setFormFieldValue("name", "name-c6c2c00");
setFormFieldValue("description", "description-a55ab25");

}

       /**
        * generate dynamic Roles datagrid
        * @param {string} targetDiv
        * @returns {none}
        */
        function generateRolesDataGrid(targetDiv) {
   
            var windowWidth = $(window).width() - 200;
 var nameColWidth = windowWidth * 0.50 + "px"; 
 var descriptionColWidth = "auto";  


     
            // manage user role
            var dataEditable = true;
            if (customUserRolesManagerObject != null && customUserRolesManagerObject.userRolesData.length > 0) {
                var curmo = customUserRolesManagerObject; // short name
                curmo.entityType = curmo.entityTypesObject.Role;
                dataEditable = curmo.getAccessRightByEntityType(curmo.entityTypesObject.Role, curmo.accessRightsObject.editRight);
            }

             var columsLayout = [
                 
                    {
                        name: pageLangTexts.nameColLabel == null ? "Name" : pageLangTexts.nameColLabel,
                        field: "name",
                        dataType: "string",
                        editable: dataEditable,
                        type: dojox.grid.cells._Widget,
                        width: nameColWidth,
                        widgetClass: dijit.form.TextBox,
                        widgetProps: {}
                    }
                 
                    ,{
                        name: pageLangTexts.descriptionColLabel == null ? "Description" : pageLangTexts.descriptionColLabel,
                        field: "description",
                        dataType: "string",
                        editable: dataEditable,
                        type: dojox.grid.cells._Widget,
                        width: descriptionColWidth,
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
                    displayErrorContent("errorContentDiv", "Failed to get all roles from server: " + errorMsg);
                    logError({ message: "Failed to get all roles from server: \n" + errorMsg });
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

                rolesStore = new dojo.data.ItemFileWriteStore({
                    data: {
                        identifier: "roleId",
                        items: jsonData
                    }
                });

                if (rolesStore != null) {
                    // save data store
                    rolesStore.save({
                        onComplete: function () { debugMessageToConsole("Done saving items store.", lowLevel); },
                        onError: function () { logError({ message: "Save failed items store." }); }
                    });
                    // custom sorting fields
                    rolesStore.comparatorMap = {};rolesStore.comparatorMap["name"] = compareStringIgnoreCase; rolesStore.comparatorMap["description"] = compareStringIgnoreCase;  



                    //destroy old controls
                    destroyWidget(dataItemsGridId);
                    // create datagrid
                    rolesGrid = new dojox.grid.EnhancedGrid({
                        id: dataItemsGridId,
                        store: rolesStore,
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
                                itemsName: "Roles"
                            }
                        }
                    });

                    // set sort index col
                    setSortColumnsIndexes(rolesGrid, 2, true);
                    // add events trigger
                    rolesGrid.on("SelectionChanged", reportSelection);
                    rolesGrid.on("StartEdit", gridStartEdit);
                    rolesGrid.on("ApplyCellEdit", gridApplyCellEdit);
                    rolesGrid.placeAt(targetDiv);
                    // parse datagrid
                    rolesGrid.startup();
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
                        obj["entityKeyId"] = storeItem["roleId"].toString();
                        var itemId = storeItem["roleId"].toString();
                        var jsonValues = dojo.toJson(obj);
                        debugMessageToConsole("jsonValues: " + jsonValues, highLevel);
                        submitInlineGridChanges(itemId, jsonValues);
                    }
                }
            }

        }



        function displayRoleView(userAction) {

            var roleId = currentRoleId;
            debugMessageToConsole("roleId:" + roleId, highLevel);
            debugMessageToConsole("userAction: " + userAction, highLevel);

            var windowHeight = $(window).height();
            var windowWidth = $(window).width();

            var postParameters = { "roleId": roleId, "userAction": userAction };
            var xhrArgs = {
                url: controllerUrl,
                postData: postParameters,
                handleAs: postDataFormat,
                method: postMethod,
                error: function (errorMsg) {
                    logError({ message: "Reponse failed to get role details with error: " + errorMsg });
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
                    displayErrorContent(errorContentDivId, "displayRoleView: " + jsonErrorMsg);
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


 

        function viewRoleDetails(roleId) {
            currentRoleId = roleId;
            currentItemIndex = getCurrentItemIndex(roleId);
            displayRoleView(viewItemDetailsCmd);
        }




        function createToolbarBtns(userAction) {

            // check user role
            if (customUserRolesManagerObject != null && customUserRolesManagerObject.userRolesData.length > 0) {
                var curmo = customUserRolesManagerObject; // short name
                if (!customUserRolesManagerObject.rolesLoaded) {
                    // load roles only once
                    curmo.entityType = curmo.entityTypesObject.Role;
                    addNewItemRight = curmo.getAccessRightByEntityType(curmo.entityTypesObject.Role, curmo.accessRightsObject.createRight);
                    editItemRight = curmo.getAccessRightByEntityType(curmo.entityTypesObject.Role, curmo.accessRightsObject.editRight);
                    deleteItemRight = curmo.getAccessRightByEntityType(curmo.entityTypesObject.Role, curmo.accessRightsObject.deleteRight);
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

            if (rolesGrid != null) {
                var items = rolesGrid.selection.getSelected();
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

            if (rolesGrid != null) {
                var items = rolesGrid.selection.getSelected();
                if (items.length > 0) {
                    selectedIdsArray = new Array();
                    for (var i = 0; i < items.length; i++) {
                        itemId = rolesGrid.store.getValue(items[i], "roleId");
                        itemId = $.trim(itemId);
                        selectedIdsArray.push(itemId);
                    }
                    // close dialog
                    closeConfirmDeletionModalDialog();
                    // now delete items
                    deleteSeletedRoles(selectedIdsArray);
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
                validateBeforeAddNewRole();
            });
            $("#" + editItemBtnDialogId).click(function () {
                displayRoleView(editItemDetailsCmd);
            });

            $("#" + closeEditBtnDialogId).click(function () {
                closeViewItemDetailsDialog();
            });
            $("#" + saveChangesBtnDialogId).click(function () {
                saveRoleChanges();
            });
            $("#" + cancelChangesBtnDialogId).click(function () {
                displayRoleView(cancelChangesCmd);
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

            $("#" + roleDetailsFormId).validate({
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

        function validateBeforeAddNewRole() {

            var isFormInputsValid = $("#" + roleDetailsFormId).valid();
            if (isFormInputsValid) {
                // close dialog
                closeAddEditItemDialog();
                // add callback
                addNewRole();
            }
        }


        function showAddItemDialog() {

            if ($("#" + roleDetailsDialogId) != null) {
                // set content dialog
                $("#" + addNewItemDialogContentId).html(editItemDetailsFormContent);
                // set textfields values when Dojo parsing completed
                settersMethodWithDefaultValues();
                $("#" + roleDetailsDialogId).modal("show");
            }
        }


        function closeAddEditItemDialog() {
            if ($("#" + roleDetailsDialogId) != null) {
                $("#" + roleDetailsDialogId).modal("hide");
            }
        }

        function closeConfirmDeletionModalDialog() {
            if ($("#" + confirmDeletionDialogId) != null) {
                $("#" + confirmDeletionDialogId).modal("hide");
            }
        }




        function addNewRole() {

            var roleDetailsFormObject = $("#" + roleDetailsFormId).serializeObject();
            // convert form to json object
            var itemToAdd = roleDetailsFormObject;
            itemToAdd = roleDetailsFormObject;
            var postParameters = {
                "formValues[]": dojo.toJson(roleDetailsFormObject, true)
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
            function addNewRoleCompleted(data) {

                debugMessageToConsole("addNewRoleCompleted data : " + data, highLevel);
                // get json result
                var jsonData = data;
                // clear error message
                $("#" + errorContentDivId).html("");
                if (jsonData == null) {
                    displayErrorContent(errorContentDivId, "addNewRoleCompleted: " + jsonErrorMsg);
                    return;
                }
                else if (jsonData.length == 1 && jsonData[0].jsonErrorMessage != null) {
                    displayErrorContent(errorContentDivId, jsonData[0].jsonErrorMessage);
                    return;
                }
                // display overlay message
                showSuccessOverlay(successOverlayDivId, pageLangTexts.confirmationCreationLabel, successImg);

                if (rolesStore != null && jsonData[0].insertedItemKey != null) {
                    itemToAdd.roleId = jsonData[0].insertedItemKey;
                    // redisplay data grid    
                    rolesStore.newItem(itemToAdd);
                }
            }

            // send async xhr request to server
            sendAsyncRequest(xhrArgs.url, xhrArgs.postData, xhrArgs.handleAs, xhrArgs.method,
                xhrArgs.error, addNewRoleCompleted);

        }


        function submitInlineGridChanges(roleId, jsonValues) {

            var postParameters = {
                "roleId": roleId,
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


        function deleteSeletedRoles(roleIdsList) {
            var postParameters = {
                "selectedIds[]": roleIdsList,
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
                xhrArgs.error, deleteSeletedRolesCompleted);
            //get postback result
            function deleteSeletedRolesCompleted(data) {

                var jsonData = data;
                $("#" + errorContentDivId).html("");
                if (jsonData == null) {
                    displayErrorContent("errorContentDiv", "deleteSeletedRolesCompleted: " + jsonErrorMsg);
                    return;
                }
                else if (jsonData.length == 1 && jsonData[0].jsonErrorMessage != null) {
                    displayErrorContent(errorContentDivId, jsonData[0].jsonErrorMessage);
                    return;
                }
                // delete items in store
                var itemsToDelete = rolesGrid.selection.getSelected();
                $.each(itemsToDelete, function (index, item) {
                    if (item) {
                        rolesStore.deleteItem(item);
                    }
                });
                // save datastore
                rolesStore.save();
                // display overlay message
                showSuccessOverlay(successOverlayDivId, pageLangTexts.confirmationDeletionLabel, successImg);

                $("#" + resultsDivId).html("");
            }

        }


        function submitRoleDetailsForm(roleId) {
            //check form validation
            //if (!roleDetailsForm.validate()) {
            //    return;
            //}
            // convert form to json object
            var roleDetailsFormObject = $("#" + roleDetailsFormId).serializeObject();
     
            // convert to json arry
            var jsonValues = dojo.toJson(roleDetailsFormObject);

            var postParameters = {
                "roleId": roleId,
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
                xhrArgs.error, submitRoleDetailsCompleted);
            //get postback result
            function submitRoleDetailsCompleted(data) {
                //debugMessageToConsole(" RoleDetailsForm-postback: " + $.trim(data), highLevel);
                var jsonData = data;
                $("#" + errorContentDivId).html("");
                if (jsonData == null) {
                    displayErrorContent(errorContentDivId, "submitRoleDetailsCompleted: " + jsonErrorMsg);
                    return;
                }
                else if (jsonData.length == 1 && jsonData[0].jsonErrorMessage != null) {
                    displayErrorContent(errorContentDivId, jsonData[0].jsonErrorMessage);
                    return;
                }

                // get item to update
                var itemToUpdate = rolesGrid.getItem(currentItemIndex); 

                

rolesStore.setValue(itemToUpdate, "name", roleDetailsFormObject.name);
rolesStore.setValue(itemToUpdate, "description", roleDetailsFormObject.description);

                rolesStore.save();
        
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
            var roleId = itemsArrayIds[currentItemIndex];
            viewRoleDetails(roleId);
        }

        function viewPrevousItemDetails() {
            currentItemIndex = getPreviousItemIndex();
            var roleId = itemsArrayIds[currentItemIndex];
            viewRoleDetails(roleId);
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

        function saveRoleChanges() {
            submitRoleDetailsForm(currentRoleId);
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
         
	    