<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Heilbronn Connection Group - Enregistrement</title>
    <script type="text/javascript"> dojoConfig = { parseOnLoad: true, async: true, isDebug:true, bindEncoding:"UTF-8", locale:"fr" }</script>
    <script src="./Lib/dojo/dojo.js" type="text/javascript"></script>
    <script type="text/javascript" src="./Scripts/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="./Scripts/commonScript.js"></script>
    <script type="text/javascript" src="./Scripts/loginUserAndRegistrationScript.js"></script>
    <script type="text/javascript">
		
      require(["dijit/form/Form", "dijit/form/Button", "dijit/form/ValidationTextBox", "dijit/form/TextBox",
      "dojox/form/PasswordValidator"]);
	  require(["dojo/domReady!"], function(){
		  showPostbackOverlay('loadingOverlay');
	  });

	  require(["dojo/ready", "dojo/parser"], 
		function(ready){
		  ready(function(){
			  hidePostbackOverlay();
			  $('#registrationTable').attr('class', 'fullWidth');
		  });
	  });
      function finishBtnClick(){
          window.location = "<?php  $values = preg_split('[/]', $_SERVER['SCRIPT_NAME']);  
				$url = (count($values) == 2) ? "http://" . $_SERVER['HTTP_HOST'] . "/" : "http://" . $_SERVER['HTTP_HOST'] . "/" . $values[1] . "/";  echo $url; ?>";
      }
    </script>

    <link rel="stylesheet" href="./Lib/dijit/themes/claro/claro.css" type="text/css" />
    <link rel="stylesheet" href="./Lib/dojox/grid/resources/claroGrid.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="./Resources/css/dojo_effect.css" />
    <link rel="stylesheet" type="text/css" href="./Resources/css/master.css" />
    <link rel="stylesheet" type="text/css" href="./Resources/css/common.css" />

  </head>
  <body class="claro">
	 <table class="fullWidth"  cellspacing="0" cellpadding="0">
		<tr>
			<td class="toLeft loginTableLargeColorTop">
				<table>
					<tr>
						<td class="toCenter">
							<img id="siteLogoImgLogin"  src="./Resources/images/siteLogo.png" class="logoMargin"/>
						<td>
						<td class="toLeft">
							<span class="titleRow marginTitleLogo">HEILBRONN CONNECTION GROUP</span>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<br />
	<div class="fullWidth"  id="loadingOverlay">
	</div>

    <table class="fullWidth hideContent" id="registrationTable">
      <tr>
        <td class="fullWidth" align="center">
          <div id="firstStepDiv">
            <table class="biggerWidth">
              <tr>
                <td>
                  <div class="formContent fullWidth">
                    <div data-dojo-type="dijit/form/Form" id="userDetailsForm" data-dojo-id="userDetailsForm"
                            encType="multipart/form-data">
                      <table class="fullWidth"  cellspacing="0" cellpadding="0">
                        <tr>
                          <td class="formTitleBar formBtnsBottomBorder panelTitle toLeft">
                            <label>Nouveau Utilisateur - Enregistrement</label>
                          </td>
                        </tr>
                        <tr>
                          <td align="center">
                            <div class="fieldDiv">
                              <fieldset class="fieldSet">
                                <legend class="fieldSetLegend">Informations Confidentielles</legend>
                                <table class="fullWidth"  cellspacing="5" cellpadding="5">
                                  <tr>
                                    <td class="toCenter hideContent" id="errorMsgCol" name="errorMsgCol" colspan="2">
                                      <label class="errorMsg" id="errorLabel" name="errorLabel"></label>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="toLeft createFormLabelCol">
                                      <label for="memberName">Login-Name:</label>
                                    </td>
                                    <td class="toLeft createFormInputCol">
                                      <input type="text"  required="true" id="userLoginName" name="userLoginName"
                                          data-dojo-type="dijit/form/ValidationTextBox"
                                           data-dojo-props="regExp:'[\\w]+', invalidMessage:'Login-name sans espaces!.'"  />
                                    </td>
                                  </tr>
                                </table>
                                <div data-dojo-type="dojox.form.PasswordValidator"
                                        id="userPassword" name="userPassword">
                                  <table  class="fullWidth"  cellspacing="5" cellpadding="5">
                                    <tr>
                                      <td class="toLeft createFormLabelCol">
                                        <label for="memberName">Mot De Passe:</label>
                                      </td>
                                      <td class="toLeft createFormInputCol">
                                        <input type="password" pwType="new" required="true"
                                            data-dojo-type="dijit/form/ValidationTextBox"/>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="toLeft createFormLabelCol">
                                        <label for="memberSurName">Confirmer Mot De Passe:</label>
                                      </td>
                                      <td class="toLeft createFormInputCol">
                                        <input type="password" required="true"  pwType="verify"
                                            data-dojo-type="dijit/form/ValidationTextBox"/>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                              </fieldset>
                            </div>
                            <div class="fieldDiv">
                              <fieldset class="fieldSet">
                                <legend class="fieldSetLegend">Informations Personnelles</legend>
                                <table  class="fullWidth"  cellspacing="5" cellpadding="5">
                                  <tr>
                                    <td class="toLeft">
                                      <label for="userName">Nom:</label>
                                    </td>
                                    <td class="toLeft createFormInputCol">
                                      <input type="text" id="userName" name="userName" required="true"
                                          data-dojo-type="dijit/form/ValidationTextBox"/>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="toLeft createFormLabelCol">
                                      <label for="userSurName">Prenom:</label>
                                    </td>
                                    <td class="toLeft createFormInputCol">
                                      <input type="text" id="userSurName" name="userSurName"  required="true"
                                          data-dojo-type="dijit/form/ValidationTextBox"/>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="toLeft createFormLabelCol">
                                      <label for="userSex">Sexe:</label>
                                    </td>
                                    <td class="toLeft createFormInputCol">
                                      <select name="userSex" id="userSex" data-dojo-type="dijit/form/Select">
                                        <option value="Male" selected="selected">Masculin</option>
                                        <option value="Female">Feminin</option>
                                      </select>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="toLeft createFormLabelCol">
                                      <label for="userPhone">Telephone:</label>
                                    </td>
                                    <td class="toLeft createFormInputCol">
                                      <input type="text" id="userPhone" name="userPhone"
                                        data-dojo-type="dijit/form/TextBox"/>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="toLeft createFormLabelCol">
                                      <label for="userEmail">Email:</label>
                                    </td>
                                    <td class="toLeft createFormInputCol">
                                      <input type="text" id="userEmail" name="userEmail" required="true"
                                        data-dojo-type="dijit/form/ValidationTextBox"/>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="toLeft createFormLabelCol">
                                      <label for="userAdress">Addresse actuelle:</label>
                                    </td>
                                    <td class="toLeft createFormInputCol">
                                      <input type="text" id="userAdress" name="userAdress"
                                        data-dojo-type="dijit/form/TextBox"/>
                                    </td>
                                  </tr>
                                </table>
                              </fieldset>
                            </div>
                            <table class="fullWidth"  cellspacing="0" cellpadding="0">
                              <tr>
                                <td  align="right">
                                  <table cellspacing="3">
                                    <tr>
                                      <td>
                                        <button data-dojo-type="dijit/form/Button" onclick="registerBtnClick();"
                                          id="registerBtn"  name="registerBtn">Enregistrer</button>
                                      </td>
                                      <td>
                                        <button data-dojo-type="dijit/form/Button" onclick="finishBtnClick();"
                                            id="cancelBtn"  name="cancelBtn">Annuler</button>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div id="confirmationStepDiv" class="hideContent">
            <div class="formContent biggerWidth">
              <table class="fullWidth"  cellspacing="0"  cellpadding="0">
                <tr>
                  <td class="formTitleBar formBtnsBottomBorder panelTitle">
                    <label>Nouveau Utilisateur - Enregistrement</label>
                  </td>
                </tr>
                <tr>
                  <td align="center">
                    <table class="fullWidth"  cellspacing="5" cellpadding="5">
                        <tr>
                          <td class="toCenter toBold">
                            <label>Enregistrement effectue avec Succes.</label>
                          </td>
                        </tr>
                        <tr>
                          <td class="toRight">
                            <button id="finishBtn" data-dojo-type="dijit/form/Button"
                                      onclick="finishBtnClick();">Termine</button>
                          </td>
                        </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </td>
      </tr>
    </table>
    
    <table cellpadding="5px" class="fullWidth">
      <tr>
        <td class="toRight  smallerMsg">
          <label>	Copyright &copy; 2011 - <?php echo date("Y"); ?> HCG Inc.</label>
        </td>
      </tr>
    </table>
  </body>
</html>
