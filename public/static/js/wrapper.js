var passport=passport||window.passport||{};passport._modulePool=passport._modulePool||{},passport._define=passport._define||function(a,s){passport._modulePool[a]=s&&s()},passport._getModule=passport._getModule||function(a){return passport._modulePool[a]};var passport=window.passport||{};passport._load=passport._load||function(a,s,e){var t=document,n=t.createElement("SCRIPT");if(s){n.type="text/javascript",n.charset="UTF-8";var p=a.split("?")[0],r=Math.round(1e3*Math.random()),i=(new Date).getTime();n.readyState?n.onreadystatechange=function(){if("loaded"===n.readyState||"complete"===n.readyState){if(n.onreadystatechange=null,100===r){var a=(new Date).getTime()-i;(new Image).src=document.location.protocol+"//nsclick.baidu.com/v.gif?pid=111&type=1023&url="+encodeURIComponent(p)+"&time="+a}e&&e()}}:n.onload=function(){if(100===r){var a=(new Date).getTime()-i;(new Image).src=document.location.protocol+"//nsclick.baidu.com/v.gif?pid=111&type=1023&url="+encodeURIComponent(p)+"&time="+a}e&&e()},n.src=100===r?p+"?t="+Math.random():a,t.getElementsByTagName("head")[0].appendChild(n)}else n.type="text/javascript",n.charset="UTF-8",n.src=a,t.getElementsByTagName("head")[0].appendChild(n),n.readyState?n.onreadystatechange=function(){("loaded"===n.readyState||"complete"===n.readyState)&&(n.onreadystatechange=null,e&&e())}:n.onload=function(){e&&e()}},passport._use=passport._use||function(a,s,e){function t(){var a=passport._getModule(i);if(!a)throw new Error("load "+i+"module script error.");e&&e(a)}var n,p={"http:":"http://passport.bdimg.com","https:":"https://ss0.bdstatic.com/5LMZfyabBhJ3otebn9fN2DJv"};n=passport&&"https"===passport._protocol?"https:":window.location?window.location.protocol.toLowerCase():document.location.protocol.toLowerCase();var r=(p[n]||p["https:"])+s,i=a+".js",o=passport._getModule(i);o?e&&e(o):passport._load(r,!0,t)},passport.use=passport.use||function(a,s,e){var t=s&&s.tangram===!1?"":"_tangram";s&&s.protocol&&(passport._protocol=s.protocol),"reg"===a&&s&&s.regPhoneOnly&&(a="regPhone");var n="login"===a&&s&&s.loginVersion&&"v4"===s.loginVersion,p=n?"/passApi/js/loginv4_6fac1cc.js":"/passApi/js/login_214615a.js",r=n?"/passApi/js/loginv4_tangram_10943a1.js":"/passApi/js/login_tangram_8db96cc.js",i={login:p,login_tangram:r,smsloginEn:"/passApi/js/smsloginEn_597a183.js",smsloginEn_tangram:"/passApi/js/smsloginEn_tangram_41041d1.js",loginWLtoPC:"/passApi/js/loginWLtoPC_ce5f5ed.js",accConnect:"/passApi/js/accConnect_69ef8be.js",accConnect_tangram:"/passApi/js/accConnect_tangram_0cc21b0.js",accRealName:"/passApi/js/accRealName_85fbf4f.js",accRealName_tangram:"/passApi/js/accRealName_tangram_c42cfba.js",checkPhone:"/passApi/js/checkPhone_dd91ad4.js",checkPhone_tangram:"/passApi/js/checkPhone_tangram_c6b3c39.js",checkIDcard:"/passApi/js/checkIDcard_c4348da.js",checkIDcard_tangram:"/passApi/js/checkIDcard_tangram_bb718bb.js",travelComplete:"/passApi/js/travelComplete_dc25456.js",travelComplete_tangram:"/passApi/js/travelComplete_tangram_1bc8143.js",bindGuide:"/passApi/js/bindGuide_e466c3f.js",bindGuide_tangram:"/passApi/js/bindGuide_tangram_cafe085.js",accSetPwd:"/passApi/js/accSetPwd_416d5c5.js",accSetPwd_tangram:"/passApi/js/accSetPwd_tangram_67dd098.js",IDCertify:"/passApi/js/IDCertify_31797b5.js",IDCertify_tangram:"/passApi/js/IDCertify_tangram_0c19ef8.js",secondCardVerify:"/passApi/js/secondCardVerify_e371646.js",secondCardVerify_tangram:"/passApi/js/secondCardVerify_tangram_f9128bf.js",IDCertifyQrcode:"/passApi/js/IDCertifyQrcode_f77d56e.js",IDCertifyQrcode_tangram:"/passApi/js/IDCertifyQrcode_tangram_072248d.js",loadingApi:"/passApi/js/loadingApi_11a045c.js",loadingApi_tangram:"/passApi/js/loadingApi_tangram_bf877bb.js",loginWap:"/passApi/js/loginWap_f04d641.js",reg:"/passApi/js/reg_addf22f.js",reg_tangram:"/passApi/js/reg_tangram_b533f4c.js",regPhone:"/passApi/js/regPhone_ee04c81.js",regPhone_tangram:"/passApi/js/regPhone_tangram_7c9bce8.js",fillUserName:"/passApi/js/fillUserName_5f84b18.js",fillUserName_tangram:"/passApi/js/fillUserName_tangram_607114a.js",qrcode:"/passApi/js/qrcode_ce57dba.js",qrcode_tangram:"/passApi/js/qrcode_tangram_78c47a8.js",realUserTag:"/passApi/js/realUserTag_6b391f6.js",realUserTag_tangram:"/passApi/js/realUserTag_tangram_66c443c.js",bind:"/passApi/js/bind_fc542ef.js",bind_tangram:"/passApi/js/bind_tangram_1f22624.js",multiBind:"/passApi/js/multiBind_8569665.js",multiBind_tangram:"/passApi/js/multiBind_tangram_c93da92.js",multiUnbind:"/passApi/js/multiUnbind_c7b1e08.js",multiUnbind_tangram:"/passApi/js/multiUnbind_tangram_23e927d.js",changeUser:"/passApi/js/changeUser_65132b9.js",changeUser_tangram:"/passApi/js/changeUser_tangram_5cdc755.js",loginMultichoice:"/passApi/js/loginMultichoice_d8178ac.js",loginMultichoice_tangram:"/passApi/js/loginMultichoice_tangram_7af118d.js",confirmWidget:"/passApi/js/confirmWidget_9c3ea1e.js",confirmWidget_tangram:"/passApi/js/confirmWidget_tangram_2b947f3.js",uni_rebindGuide:"/passApi/js/uni_rebindGuide_a831354.js",uni_rebindGuide_tangram:"/passApi/js/uni_rebindGuide_tangram_24d63af.js",mkd:"/passApi/js/mkd_92421d6.js",mkd_tangram:"/passApi/js/mkd_tangram_eb9af36.js"},o=a+t;2===arguments.length&&(e=s),s&&s.tangramInst&&(passport.tangramInst=s.tangramInst),passport._use(o,i[o],e)};