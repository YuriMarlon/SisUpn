<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head id="Head1">
        <title>..::MiMundo@UPN | Login::..</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <link rel="shortcut icon" href="WebLogin/assets/img/favicon.ico">
                <link rel="stylesheet" type="text/css" href="css/Window.Optima.css" media="screen">       
                    <!--Response Design-->
                    <link rel="stylesheet" href="css/bootstrap.css">
                        <link rel="stylesheet" href="css/bootstrap-responsive.css">
                            <link rel="stylesheet" href="css/custom2.css">
                                <!---->                
                                <link rel="stylesheet" type="text/css" href="css/jquery.alerts.css" media="screen">       
                                    <script src="js/ga.js"></script>
                                    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
                                    <script type="text/javascript" src="js/jquery.alerts.js"></script>
                                    <style type="text/css">                
                                        form{
                                            margin:0;
                                        }             
                                        .RadWindow_Optima td.rwWindowContent{
                                            background-color: #FFF;
                                        }
                                        .RadWindow_Optima .rwTopLeft,
                                        .RadWindow_Optima .rwTopRight,
                                        .RadWindow_Optima .rwTitlebar,
                                        .RadWindow_Optima .rwFooterLeft,
                                        .RadWindow_Optima .rwFooterRight,
                                        .RadWindow_Optima .rwFooterCenter,
                                        .RadWindow_Optima .rwTopResize,
                                        .RadWindow_Optima .rwStatusbar div,
                                        .RadWindow_Optima .rwStatusbar,
                                        .RadWindow_Optima .rwPopupButton,
                                        .RadWindow_Optima .rwPopupButton span,
                                        .RadWindow_Optima.rwMinimizedWindow .rwCorner {
                                            background-image: url("skin/optima/Window/WindowHorizontalSprites2.gif");
                                        }
                                        .RadWindow_Optima .rwBodyLeft,
                                        .RadWindow_Optima .rwBodyRight,
                                        .RadWindow_Optima .rwStatusbarRow .rwCorner {
                                            background-image: url("skin/optima/Window/WindowVerticalSprites2.gif");
                                        }               
                                        div.RadWindow_Optima .rwTitlebarControls em{
                                            color:#FFF;	
                                        }
                                    </style>       
                                    <script type="text/javascript">
                                        $(document).ready(function () {
                                            resizable();
                                        });
                                        $(window).resize(function () {
                                            resizable();
                                        });
                                        function resizable() {

                                            ///////////////////////////////////////////////////////////
                                            var altoNavegador = Math.round($(window).height());
                                            var anchoNavegador = Math.round($(window).width());
                                            ///////////////////////////////////////////////////////////

                                            if (anchoNavegador > 800) {

                                                var altoLogo1 = $("#logo1").height();
                                                var altoLogo2 = $("#logo2").height();
                                                var altologUPN = $("#logUPN").height();
                                                var altologUPN2 = $("#logUPN2").height();
                                                var margenTopLogo1 = Math.round(altoNavegador / 2) - (altoLogo1 - 30);
                                                var margenTopLogo2 = Math.round(altoNavegador / 2) - (altoLogo2 - 30);
                                                var margenToplogUPN = Math.round(altoNavegador / 2) - Math.round(altologUPN / 2);
                                                var margenToplogUPN2 = Math.round(altoNavegador / 2) - Math.round(altologUPN2 / 2);

                                                $(".cColumna1").css({height: altoNavegador + "px"});
                                                $(".cColumna2").css({height: altoNavegador + "px"});
                                                $("#logo1").css({marginTop: margenTopLogo1 + "px"});
                                                $("#logo2").css({marginTop: margenTopLogo2 + "px"});
                                                $("#logUPN").css({marginTop: margenToplogUPN + "px"});
                                                $("#logUPN2").css({marginTop: margenToplogUPN2 + "px"});

                                            } else if (anchoNavegador < 800) {
                                                var altoNavegador = altoNavegador - 150;
                                                $("#logo1").css({marginTop: 0 + "px"});
                                                $("#logo2").css({marginTop: 0 + "px"});
                                                $("#logUPN").css({marginTop: 0 + "px"});
                                                $("#logUPN2").css({marginTop: 0 + "px"});
                                                $(".cColumna1").css({height: 130 + "px"});
                                                $(".cColumna2").css({height: altoNavegador + "px"});
                                            }
                                        }

                                    </script>
                                    <link href="/WebLogin/WebResource.axd?d=46j8a-Tz2Yk3hsIU2swpzMYgt7KIxX2AtVyIPvrFLk-t1c41GIQf-Yq0zJ_HB3AZbuHRoPqaJauuRrCORTOrjsRwmXE_H6gb6zzmJTA2X2HVMLR_YCAIXoKPWgdwx3xaTnXUg-kDdkBWK9G2UWxySA2&amp;t=635924313042230592" type="text/css" rel="stylesheet" class="Telerik_stylesheet">
                                        <link href="/WebLogin/WebResource.axd?d=wSCtGV7BU_0d-e8SDd1LE3DnqesO6YHhwrLHNECGDZZhx-aAMc2ZT5Sdwywn2Uick9L2a8LakjbQxYgwV6IHG0jYUt6GRUU47l9AsNgbNHjY6yXdj7QPVTSUNe0BWZd04Gxq0AUd24CouE22zv5NvA2&amp;t=635924313042230592" type="text/css" rel="stylesheet" class="Telerik_stylesheet">
                                            </head>
                                            <body>
                                                <form method="post" action="php/login.php" onsubmit="javascript:return WebForm_OnSubmit();" id="form1">
                                                    <div class="aspNetHidden">
                                                        <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
                                                            <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
                                                                <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTMwMTA3MTUxMg9kFgICAw9kFgYCAw9kFgICAQ9kFgICAw9kFgJmD2QWAgINDxQrAANkFgIeC0N1cnJlbnRHdWlkBSQ3MzY0MjQyYy1iMmU4LTQwMzMtOGI2Mi1jMWVmMjZkMzM4NTYUKwADZGRkZAIHDw8WAh4XRW5hYmxlQWpheFNraW5SZW5kZXJpbmdoZGQCCQ8UKwADDxYCHwFoZGRkZBgDBR5fX0NvbnRyb2xzUmVxdWlyZVBvc3RCYWNrS2V5X18WAQUJcndNZW5zYWplBRJsb2dVUE4yJFJhZENhcHRjaGEPFCsAAgUkNzM2NDI0MmMtYjJlOC00MDMzLThiNjItYzFlZjI2ZDMzODU2BgAAAAAAAAAAZAUHbXZMb2dpbg8PZGZknyQkt9g1Jzje4ink2GZVJuoH81MJ9F248VZRTKRwPS0=">
                                                                    </div>
                                                                    <script type="text/javascript">
                                                                        //<![CDATA[
                                                                        var theForm = document.forms['form1'];
                                                                        if (!theForm) {
                                                                            theForm = document.form1;
                                                                        }
                                                                        function __doPostBack(eventTarget, eventArgument) {
                                                                            if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                                                                                theForm.__EVENTTARGET.value = eventTarget;
                                                                                theForm.__EVENTARGUMENT.value = eventArgument;
                                                                                theForm.submit();
                                                                            }
                                                                        }
                                                                        //]]>
                                                                    </script>
                                                                    <script src="/WebLogin/WebResource.axd?d=V_plbvSirl69z4W_Y2R61J7jAYIFd0lIZCVZyLjDKbxhjcFl-Xe3KAo2rk_JDA1DypaMsUQbLQQQkIkDjQ9gIG_h_V26UhvyWn43eQx06dY1&amp;t=635792847765829480" type="text/javascript"></script>
                                                                    <script src="/WebLogin/ScriptResource.axd?d=ZKfOE4endyNBAye0BVWSqZMOhgKgd3XB0B4_9KJKZ2FP5FPObS8pgBdE0L1ZGaK519A5UAKlcx8A0G4QuHmUjU7duhbkEEzAoIIe8iQJlaPu8EhzB4GNm0rU72Uf7FUpdMvZk6JrD157wAaobYMH1sjesXwdGXbSQ06GnqRxpwY1&amp;t=3f9850cf" type="text/javascript"></script>
                                                                    <script src="/WebLogin/ScriptResource.axd?d=EwqdOyOJpks4GzFx60vxBSTJQhCY2V8gOCRtpTI6NCHHk5USV7Sne0Kzy4nIAfHXwuAS6frf8F64u_wbZBqScmvTczfIDCdIkNvMY19_2ogyMcDOpGCCQ_-hc9jrr2mbYcolB9PgUmQLXinuXB3A0B9gcxZ523DnZwPwrr7LTVxsfloV90yIRRCGbkiHA2lX0&amp;t=72e85ccd" type="text/javascript"></script>
                                                                    <script src="/WebLogin/ScriptResource.axd?d=KrH2DYF_N-_K7xyRXTiYJa3Hi9hLp4tL7ksmT1GsHdaicBI1wZx8XnS2KMJha4Qr8PYAy56HDcXbcWUnbh21t5YMTcFo5V8sj0WD3qrshc26Va54dvo0heuRSsKWaNrB7c7TtgnaDu1eeafAVksrBSCtYelu6AlJv7_HB3UbMmjeLZhKtLMFNlGmEjC7V-lT0&amp;t=72e85ccd" type="text/javascript"></script>
                                                                    <script src="/WebLogin/ScriptResource.axd?d=m6oaF5rjRgLVJ9pBzjHO9dkKyfIevbX6TERyH7TuipcYa-CZIoH1kNFoXb7T9p1RIJXYoDkOTk9L8VgYUWsRGlaoS4KdRii8Hcmeb51Ni8NWAGWY5UKeCT1KCptYFhtXe2h5bxUVpojyGcXXANMzng2&amp;t=2ccc0dfe" type="text/javascript"></script>
                                                                    <script src="/WebLogin/ScriptResource.axd?d=87Ta476LWdSaBk0yEQg_2bQSCk3jJxfMQqv1PzdT5VQ1UdMGHmJnflTxEsKnBUEwTrQBtJfZC-DIdqD8pgiWnOYsygIIQmTCajBc3_GLQNNzi0Muzfx1_e_TkS8i-H_3GjgTyfLryVDt9F59xycqoA2&amp;t=2ccc0dfe" type="text/javascript"></script>
                                                                    <script src="/WebLogin/ScriptResource.axd?d=wvcHjlhagJwojFkGJEW3lGjCYw-DwU0jwqpebmqdC-i-AKnk8QETamgf6Xy3UCuMCD93hcbM8jov7u_BUyQA8ExpTV-JW3CJuSrz_2zLJ6MGAR3xiGmX7b5SwQ6wufijvIXHn4YEFDrsK7AC_NaCox68bb_b-YEs4jXEZddTZJo1&amp;t=2ccc0dfe" type="text/javascript"></script>
                                                                    <script src="/WebLogin/ScriptResource.axd?d=wjZYKZDx6wQuiDKYCO8E9igEGzwq6OkS9eR0R4xJiuuGzZz-MIkKjv3rQIqORBop0VMJTsNuU6zYjDP3O8aK8MIZ2XGp7wncmIZr0xNZYHl2cQAleQJPB11xruU9n6k1BgpfggK1XstPNbp5M36Efd2FBNhjiTPx95Ykloc_DyM1&amp;t=2ccc0dfe" type="text/javascript"></script>
                                                                    <script src="/WebLogin/ScriptResource.axd?d=Y8VzpqXZdiTLGYSViMkXiFQHbdUsjSOH6_UJUOgEld1Qf6eE9PhlyHzwaa6XhOr__lfUMFFnJtS3ma6NpNzp8ACzdqM7RRiYW_Hv76LIXwmGrTbZHmeWldO4FL9wWeVJa-7pdJsBtz3jml0N5ni_1g7kdmeLG6x3RkVGjSXQ99I1&amp;t=2ccc0dfe" type="text/javascript"></script>
                                                                    <script src="/WebLogin/ScriptResource.axd?d=FRS-Ndhh8cqX-KupZ4Dqq72LI1bQbbADt4ZZQMne7ypo__Vkl79-9dh5Ux2paabJBmvhHdbeLCeDOovsEW1X7GLt0UA4GrLCT_ruBivFjzeG3Uk_G1u78pzIgJJfu92G7AlCtqlIxRfKBrBViJYQxIqsB_hkARDoHdncMKeBRwc1&amp;t=2ccc0dfe" type="text/javascript"></script>
                                                                    <script src="/WebLogin/ScriptResource.axd?d=t8Mk7wkl_p9Wr8fhSroPlfS9dNq-6AfnV3FlB12dqRhBdtqCWAGUl-Btn8SOqGq4bkhv9kBdlpHcRbv8fW3Lolo9LSg2JUQ6Df5lhpqlW78TGXDDqrl5f5-iQkJN2AhIIDo6jl1JE6lBW6ophPkwGq9CWWNLfM2W9KLim_abYl63A__QZOZajhOdqRRE_d0N0&amp;t=2ccc0dfe" type="text/javascript"></script>
                                                                    <script src="/WebLogin/ScriptResource.axd?d=HFpSE7uz5eEG0aSxZylXOpho7hQrDjRf8s0siJiZDV-V9XHuws_BPiHEm4zuOf8gA55SvWstkrkLQJb7kfXQaYKYa4GEKfx8mYRu9wEQ14CuMwqxYAJo5NnCJDSF0gZwYxxjXdAXjYXmMpv4ItaXUMyo5so3xWlPjh3FFqekiVw1&amp;t=2ccc0dfe" type="text/javascript"></script>
                                                                    <script type="text/javascript">
                                                                        //<![CDATA[
                                                                        function WebForm_OnSubmit() {
                                                                            if (typeof (ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false)
                                                                                return false;
                                                                            return true;
                                                                        }
                                                                        //]]>
                                                                    </script>
                                                                    <div class="aspNetHidden">
                                                                        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="FDC65776">
                                                                            <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAbr0cEjxc61/1LupJttttFdn0vRpNZWc0x8hCbvEKMAZnOV0/eJk60BIB/E5imAOa8BB3hzfZjjRUcKoc1KZmollJLyA72v5uJsMjYJ35sO5rUCMyptjmacjzvdnRoEVT0NfJoA2pd+M+SL0xRaP05yg+uLMi/hD2klr0lqNsEPAg==">
                                                                                </div>
                                                                                <script type="text/javascript">
                                                                                    //<![CDATA[
                                                                                    Sys.WebForms.PageRequestManager._initialize('ScriptManager1', 'form1', ['tRadAjaxManager1SU', 'RadAjaxManager1SU'], [], [], 90, '');
                                                                                    //]]>
                                                                                </script>               
                                                                                <div class="cColumnas">
                                                                                    <div class="cColumna1" style="height: 368px;">                                   
                                                                                        <img id="logo1" src="imagenes/logomimundoupn.png" style="margin-top: 111px;">
                                                                                    </div>
                                                                                    <div class="cColumna2" style="height: 368px;">
                                                                                        <table id="logUPN" cellspacing="0" cellpadding="0" style="border-collapse: collapse; margin-top: 94px;">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="login-content">
                                                                                                            <div class="AspNet-Login-UserPanel">
                                                                                                                <span id="logUPN_Label1" class="textgreen">
                                                                                                                    <strong>Usuario</strong>
                                                                                                                </span>
                                                                                                                <input name="username" type="text" id="logUPN_UserName" class="textbox-small">
                                                                                                                    <span id="logUPN_UserNameRequired" title="El nombre de usuario es obligatorio." class="textred" style="visibility:hidden;">*</span>
                                                                                                            </div>
                                                                                                            <div class="AspNet-Login-PasswordPanel">
                                                                                                                <span id="logUPN_Label2" class="textgreen">
                                                                                                                    <strong>Contraseña</strong>
                                                                                                                </span>
                                                                                                                <input name="password" type="password" id="logUPN_Password" class="textbox-small">
                                                                                                                    <span id="logUPN_PasswordRequired" title="La contraseña es obligatoria." class="textred" style="visibility:hidden;">*</span>
                                                                                                            </div> 
                                                                                                            <div class="AspNet-Login-ChangePassword">
                                                                                                                <a id="logUPN_HyperLink2" href="./interfaz/estudiante/registro.php">Registrarse</a>
                                                                                                            </div> 
                                                                                                            <div class="AspNet-Login-ChangePassword">
                                                                                                                <a id="logUPN_HyperLink2" href="#">Restablecer Contraseña</a>
                                                                                                            </div>                                               
                                                                                                            <div class="AspNet-Login-SubmitPanel">
                                                                                                                <input type="submit" name="logUPN$LoginButton" value="Iniciar Sesión" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions( & quot; logUPN$LoginButton & quot; , & quot; & quot; , true, & quot; logUPN & quot; , & quot; & quot; , false, false))" id="logUPN_LoginButton" class="button-submit">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>

                                                                                <div id="copyright" style="position:fixed; bottom:0; text-align:center;width:100%; color:#FFF; padding:5px 0; background:#2C2C30">
                                                                                    ©Copyright 2014 MiMundoUPN.&nbsp;Universidad Privada del Norte.
                                                                                </div>
                                                                                <!-- 2010.3.1317.35 -->
                                                                                <div id="RadAjaxManager1SU" style="display: none;">
                                                                                    <span id="RadAjaxManager1" style="display:none;"></span>
                                                                                </div>
                                                                                <div id="RadAjaxLoadingPanel1" style="display:none;"></div>
                                                                                <div id="rwMensaje" style="display:none;">
                                                                                    <div id="rwMensaje_C">		
                                                                                        <br>
                                                                                            <div align="center">
                                                                                                <span id="rwMensaje_C_lblMensaje" style="color:#666666;">¿Desea que le enviemos su contraseña al siguiente <br>correo electrónico: @@@@@?.</span><br><br>                        
                                                                                                        </div> 
                                                                                                        <br>
                                                                                                            <p align="center">
                                                                                                                <input type="submit" name="rwMensaje$C$btnAcepto" value="Si" id="rwMensaje_C_btnAcepto" class="btn AceptarComunidad">&nbsp;
                                                                                                                    <input type="submit" name="rwMensaje$C$btnNoAcepto" value="No" id="rwMensaje_C_btnNoAcepto" class="btn Eliminar">
                                                                                                                        </p>                
                                                                                                                        </div>
                                                                                                                        <input id="rwMensaje_ClientState" name="rwMensaje_ClientState" type="hidden" autocomplete="off">
                                                                                                                            </div>      
                                                                                                                            <script type="text/javascript">
                                                                                                                                //<![CDATA[
                                                                                                                                var Page_Validators = new Array(document.getElementById("logUPN_UserNameRequired"), document.getElementById("logUPN_PasswordRequired"));
                                                                                                                                //]]>
                                                                                                                            </script>

                                                                                                                            <script type="text/javascript">
                                                                                                                                //<![CDATA[
                                                                                                                                var logUPN_UserNameRequired = document.all ? document.all["logUPN_UserNameRequired"] : document.getElementById("logUPN_UserNameRequired");
                                                                                                                                logUPN_UserNameRequired.controltovalidate = "logUPN_UserName";
                                                                                                                                logUPN_UserNameRequired.errormessage = "El nombre de usuario es obligatorio.";
                                                                                                                                logUPN_UserNameRequired.validationGroup = "logUPN";
                                                                                                                                logUPN_UserNameRequired.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
                                                                                                                                logUPN_UserNameRequired.initialvalue = "";
                                                                                                                                var logUPN_PasswordRequired = document.all ? document.all["logUPN_PasswordRequired"] : document.getElementById("logUPN_PasswordRequired");
                                                                                                                                logUPN_PasswordRequired.controltovalidate = "logUPN_Password";
                                                                                                                                logUPN_PasswordRequired.errormessage = "La contraseña es obligatoria.";
                                                                                                                                logUPN_PasswordRequired.validationGroup = "logUPN";
                                                                                                                                logUPN_PasswordRequired.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
                                                                                                                                logUPN_PasswordRequired.initialvalue = "";
                                                                                                                                //]]>
                                                                                                                            </script>
                                                                                                                            <script type="text/javascript">
                                                                                                                                //<![CDATA[
                                                                                                                                var Page_ValidationActive = false;
                                                                                                                                if (typeof (ValidatorOnLoad) == "function") {
                                                                                                                                    ValidatorOnLoad();
                                                                                                                                }
                                                                                                                                function ValidatorOnSubmit() {
                                                                                                                                    if (Page_ValidationActive) {
                                                                                                                                        return ValidatorCommonOnSubmit();
                                                                                                                                    } else {
                                                                                                                                        return true;
                                                                                                                                    }
                                                                                                                                }
                                                                                                                                document.getElementById('logUPN_UserNameRequired').dispose = function () {
                                                                                                                                    Array.remove(Page_Validators, document.getElementById('logUPN_UserNameRequired'));
                                                                                                                                }

                                                                                                                                document.getElementById('logUPN_PasswordRequired').dispose = function () {
                                                                                                                                    Array.remove(Page_Validators, document.getElementById('logUPN_PasswordRequired'));
                                                                                                                                }
                                                                                                                                Sys.Application.add_init(function () {
                                                                                                                                    $create(Telerik.Web.UI.RadAjaxManager, {"_updatePanels": "", "ajaxSettings": [{InitControlID: "RadAjaxManager1", UpdatedControls: [{ControlID: "", PanelID: ""}]}], "clientEvents": {OnRequestStart: "", OnResponseEnd: ""}, "defaultLoadingPanelID": "RadAjaxLoadingPanel1", "enableAJAX": true, "enableHistory": false, "links": [], "styles": [], "uniqueID": "RadAjaxManager1", "updatePanelsRenderMode": 0}, null, null, $get("RadAjaxManager1"));
                                                                                                                                });
                                                                                                                                Sys.Application.add_init(function () {
                                                                                                                                    $create(Telerik.Web.UI.RadAjaxLoadingPanel, {"initialDelayTime": 0, "isSticky": false, "minDisplayTime": 0, "skin": "", "transparency": 0, "uniqueID": "RadAjaxLoadingPanel1", "zIndex": 90000}, null, null, $get("RadAjaxLoadingPanel1"));
                                                                                                                                });
                                                                                                                                Sys.Application.add_init(function () {
                                                                                                                                    $create(Telerik.Web.UI.RadWindow, {"_dockMode": true, "behaviors": 0, "clientStateFieldID": "rwMensaje_ClientState", "formID": "form1", "height": "170px", "iconUrl": "", "minimizeIconUrl": "", "modal": true, "name": "rwMensaje", "skin": "Optima", "title": "Aviso de Seguridad", "visibleStatusbar": false, "width": "350px"}, null, null, $get("rwMensaje"));
                                                                                                                                });
                                                                                                                                //]]>
                                                                                                                            </script>
                                                                                                                            </form>       
                                                                                                                            <script type="text/javascript">
                                                                                                                                var _gaq = [['_setAccount', 'UA-8746154-5'], ['_setDomainName', 'upnorte.edu.pe'], ['_trackPageview']];
                                                                                                                                (function (d, t) {
                                                                                                                                    var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
                                                                                                                                    g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
                                                                                                                                    s.parentNode.insertBefore(g, s)
                                                                                                                                }(document, 'script'));
                                                                                                                            </script>   
                                                                                                                            </body>
                                                                                                                            </html>