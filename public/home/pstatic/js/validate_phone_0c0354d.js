$(document).ready(function(){var e=function(){this.monitorTime=60,this.sendCodeFlag=!1};e.prototype={init:function(){this.phoneNumForm=$("#J-phone-num"),this.codeForm=$("#J-validate-code"),this.getCodeBtn=$("#J-getcode"),this.confirmBtn=$("#J-confirm-btn"),this.phoneMsgWrap=$("#J-warning-msg-phone"),this.codeMsgWrap=$("#J-warning-msg-code"),this.sendCodeFlag=!1,this.bindEvents()},bindEvents:function(){var e=this;e.getCodeBtn.click(function(){if(!e.sendCodeFlag){var o=e.phoneNumForm.val();if(!e.checkPhoneNo(o))return void e.phoneMsgWrap.html("请输入正确手机号");e.phoneMsgWrap.html("&nbsp;");var t={phone:o};$.get("/uc/order/mvercode",t,function(o){0==o.errno?e.monitorButton():e.phoneMsgWrap.html(o.errmsg)},"json")}}),e.confirmBtn.click(function(){var o=e.phoneNumForm.val(),t=e.codeForm.val(),n={phone:o,code:t};return e.checkPhoneNo(o)?e.checkCode(t)?void $.get("/uc/order/mccode",n,function(o){0==o.errno?location.href="/uc/order/morders?orderStatus=all":e.codeMsgWrap.html(o.errmsg)},"json"):void e.codeMsgWrap.html("验证码错误，请重新输入"):void e.phoneMsgWrap.html("请输入正确手机号")})},monitorButton:function(){var e=this;e.sendCodeFlag=!0,this.timer=setTimeout(function(){60==e.monitorTime&&(e.getCodeBtn.html("重新获取("+e.monitorTime+")").addClass("btn-gray").removeClass("btn-pink"),e.getCodeBtn.attr("disabled",!0).removeAttr("href"),e.phoneNumForm.attr("readonly",!0).addClass("form-disabled"),e.confirmBtn.addClass("btn-pink").removeClass("btn-gray")),e.monitorTime>0?(e.getCodeBtn.html("重新获取("+e.monitorTime+")"),e.monitorTime--,e.monitorButton.call(e)):e.clearSendCode()},1e3)},clearSendCode:function(){this.getCodeBtn.html("重新获取").addClass("btn-pink").removeClass("btn-gray"),this.getCodeBtn.removeAttr("disabled").attr("href","javascript:;"),this.phoneNumForm.attr("readonly",!1).removeClass("form-disabled"),clearTimeout(this.timer),this.monitorTime=60,this.sendCodeFlag=!1},checkPhoneNo:function(e){var o=e.toString(),t=/^1\d{2,10}$/i;return 11==o.length&&t.test(o)?!0:!1},checkCode:function(e){var o=e.toString(),t=/^[0-9]\d{2,5}$/;return t.test(o)?!0:!1}};var o=new e;o.init()});