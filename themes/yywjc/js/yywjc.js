//患者管理
function patients_setting(){
    var patienthtml=$('.layer_form_info');
    var data = {'action':'get_patient_list'};
    $.post(ajaxurl,data,function(json){
        if(json.error){
            layer.msg(json.msg, {icon: 2,time: 2000});
             if(json.error==1){
                 setTimeout(function(){
                     layer.closeAll();
                     window.wsocial_dialog_login_show();
                 },2000);
             }
            return false;
        }else{
             var html = '';
            console.log(getJsonLength(json));
             if(getJsonLength(json)==0){
                    html += '<div class="radio-custom" data-pid="0" id="prompt-info" style="text-align: center"><h3>请先添加患者信息</h3></div>' ;
             }else{
                 for(var i in json){
                    html += '<div class="radio-custom" data-pid="'+json[i].pid+'"> <input type="radio" value="'+json[i].pid+'" name="pid" id="uname_'+json[i].pid+'" checked> <label for="uname_'+json[i].pid+'" class="control-label form2_label"> <strong>'+json[i].p_name+'</strong><span>'+json[i].gender+'&nbsp;&nbsp;'+json[i].age+'岁&nbsp;&nbsp;'+json[i].p_phone+'</span><br> <span style="padding-left:65px;">'+json[i].address+'</span> <a href="javascript:;" onclick="delete_patient(this,\''+json[i].pid+'\')"><i class="glyphicon glyphicon-trash"></i></a> </label> </div>';
                 }
             }
            $('#patient-list').html(html);
        }
        layer.open({
            type: 1,
            title:false,
            closeBtn: 1,
            shadeClose:1,
             area: ['800px', '510px'],
            content: patienthtml
        });
    },'json');
}
var ajaxing = 0 ;
function add_patient(form){
     if(ajaxing){
         layer.msg('请稍等', {icon: 2,time: 1000});
         return false;
     }
     if($('#p_name').val()==''){
         $('#p_name').focus();
         layer.msg('患者名称不得为空', {icon: 2, time: 2000});
         return false;
     }else if(get_strlength($('#p_name').val())>8){
         $('#p_name').focus();
         layer.msg('患者名称最多四个汉子或者8个字母/数字', {icon: 2, time: 3000});
         return false;
     }else if($('#age').val()==''){
         $('#age').focus();
         layer.msg('患者年龄不得为空', {icon: 2,time: 2000});
         return false;
     }else if(!/^.+\d$/.test($('#age').val())){
         $('#age').focus();
         layer.msg('患者年龄必须为正整数', {icon: 2,time: 2000});
         return false;
     }else if($('#p_phone').val()==''){
         $('#p_phone').focus();
         layer.msg('患者手机号不得为空', {icon: 2,time: 2000});
         return false;
     }else if(!/^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|18[0|1|2|3|5|6|7|8|9])\d{8}$/.test($('#p_phone').val())){
         $('#p_phone').focus();
         layer.msg('非法手机号', {icon: 2,time: 2000});
         return false;
     }else if($('#address').val()==''){
         $('#address').focus();
         layer.msg('患者地址不得为空', {icon: 2,time: 2000});
         return false;
     }
    ajaxing = 1 ;
    $.post(ajaxurl,$(form).serialize(),function(json){
               if(json.error){
                   if(json.error==3 || json.error==4){
                       $('#'+json.k).focus();
                   }
                   layer.msg(json.msg, {icon: 2,time: 2000});
                   if(json.error==1){
                       setTimeout(function(){
                           layer.closeAll();
                           window.wsocial_dialog_login_show();
                       },1500);
                   }
                   ajaxing  = 0;
                   return false;
               }else{
                   console.log(json.pid);
                   layer.msg(json.msg, {icon: 1,time: 2000});
                   $('#prompt-info').remove();
                   setTimeout(function(){
                       var html = '';
                       html += '<div class="radio-custom" data-pid="'+json.patient.pid+'"> <input type="radio" value="'+json.patient.pid+'" name="pid" id="uname_'+json.patient.pid+'" checked> <label for="uname_'+json.patient.pid+'" class="control-label form2_label"> <strong>'+json.patient.p_name+'</strong><span>'+json.patient.gender+'&nbsp;&nbsp;'+json.patient.age+'岁&nbsp;&nbsp;'+json.patient.p_phone+'</span><br> <span style="padding-left:65px;">'+json.patient.address+'</span> <a href="javascript:;" onclick="delete_patient(this,\''+json.patient.pid+'\')"><i class="glyphicon glyphicon-trash"></i></a></label> </div>';
                       $('#patient-list').prepend(html);
                       $('#p_name').val('');
                       $('#age').val('');
                       $('#p_phone').val('');
                       $('#address').val('');
                       ajaxing  = 0;
                   },1000);
               }

    },'json');
}
function delete_patient(obj,pid){
    if(!confirm('确定要删除该患者吗?')){
         return false ;
    }
    var data = {'action':'delete_patient','pid':pid};
    $.post(ajaxurl,data,function(json){
         if(json.error){
             layer.msg(json.msg, {icon: 2,time: 2000});
             if(json.error==1){
                 setTimeout(function(){
                     layer.closeAll();
                     window.wsocial_dialog_login_show();
                 },2000);
             }
              if(json.error==3){
                  setTimeout(function(){
                      $(obj).parent().parent().remove();
                  },2000)
              }
              return false;
         }else{
             layer.msg(json.msg, {icon: 1,time: 2000});
             setTimeout(function(){
                  $(obj).parent().parent().remove();
             },2000)
         }
    },'json')
}
function next_reserving(){
    $('#reserving-time').val('');
    var el = $('#patient-list');
    var pid = el.find('input[name="pid"]:checked').val();
    if(!pid){
        layer.msg('请先选择一个患者,再进行预约', {icon: 2,time: 3000});
        return false;
    }
    var data = {'action':'reserving_patient','pid':pid};
    $.post(ajaxurl,data,function(json){
        console.log(json);
        $('#reserve_number').val(json.rnum);
        var patient_html = '';
        var selected_patient_html = '';
        for (var i in json.patients){
            if(json.pid == json.patients[i].pid){
                selected_patient_html += '<input type="hidden" name="pid" value="'+json.patients[i].pid+'"> <strong>'+json.patients[i].p_name+'</strong><span>'+json.patients[i].gender+'&nbsp;&nbsp;'+json.patients[i].age+'岁&nbsp;&nbsp;'+json.patients[i].p_phone+'</span><br> <span style=\'padding-left:65px;\'>'+json.patients[i].address+'</span>';
            }else{
                patient_html += '<li onclick="select_patient_html(this)"> <input type="hidden" name="pid" value="'+json.patients[i].pid+'"> <strong>'+json.patients[i].p_name+'</strong><span>'+json.patients[i].gender+'&nbsp;&nbsp;'+json.patients[i].age+'岁&nbsp;&nbsp;'+json.patients[i].p_phone+'</span><br> <span style=\'padding-left:65px;\'>'+json.patients[i].address+'</span> </li>';
            }
        }
        $('#model-select-text').html(selected_patient_html);
        $('#select-patient').html(patient_html);

        var office_html = '<option value="0" selected="selected">请选择</option>';
        for (var i in json.offices){
            office_html += '<option  value="'+json.offices[i].officesID+'">'+json.offices[i].officesName+'</option>';
        }
        $('#select-office').html(office_html);

        var doctor_html = '<option data-oid="0" value="0" selected="selected">请选择</option>';
        var oid = $('#select-office').val();
        for (var i in json.doctors){
            for(var y in json.doctors[i]){
            doctor_html += '<option class="hide" ' ;
                doctor_html += 'data-oid="'+json.doctors[i][y].officesID+'" value="'+json.doctors[i][y].doctorID+'">'+json.doctors[i][y].doctorName+'</option>';
            }
        }
        $('#select-doctor').html(doctor_html);
    },'json');
    layer.closeAll();
    var reservehtml=$('.layer_form_information');
    layer.open({
        type: 1,
        title:false,
        closeBtn: 1,
        shadeClose:1,
        area: ['460px', '520px'],
        content: reservehtml
    });
}
function select_patient_html(obj){
      var p = '<li onclick="select_patient_html(this)">'+$('#model-select-text').html()+'</li>';
     $('#model-select-text').html($(obj).html());
     $(obj).remove();
     $('#select-patient').append(p);
}
function  office_change(obj){
       var oid = $(obj).val();
       console.log(oid);
       var x = 0 ;
       $('#select-doctor').find('option').each(function(){
           $(this).attr('selected',false);
          if($(this).data('oid') != oid){
              $(this).addClass('hide');
          }else{
              if(x==0)
              $(this).attr('selected',true);
              $(this).removeClass('hide');
              x++;
          }
       })
}

function  reserving_now(form){

    if(!$('#model-select-text').find('input[name="pid"]') || $('#model-select-text').find('input[name="pid"]').val()==0){
        layer.msg('请选择一名患者', {icon: 2,time: 2000});
        return false ;
    }
    if(!$('#reserve_number').val()){
        $('#reserve_number').focus();
        layer.msg('预约号错误', {icon: 2,time: 2000});
        return false ;
    }
    if($('#select-office').val()==0){
        $('#select-office').focus();
        layer.msg('请选择预约科室', {icon: 2,time: 2000});
        return false ;
    }
    if($('#select-doctor').val()==0){
        $('#select-doctor').focus();
        layer.msg('请选择预约医生', {icon: 2,time: 2000});
        return false ;
    }
    if($('#reserving-time').val()==''){
        $('#reserving-time').focus();
        layer.msg('请选择预约时间', {icon: 2,time: 2000});
        return false ;
    }
    $('#reserving_now_submit_button').val('预约中...');
    $('#reserving_now_submit_button').attr('disabled',true);
    $('#select-patient').find('input[name="pid"]').each(function(){
        $(this).attr('disabled',true);
    })
    $.post(ajaxurl,$(form).serialize(),function(json){
        if(json.error){
            layer.msg(json.msg, {icon: 2,time: 2000});
            if(json.error==1){
                setTimeout(function(){
                    layer.closeAll();
                    window.wsocial_dialog_login_show();
                },2000);
            }
            if(json.error==3){
                setTimeout(function(){
                    $('#model-select-text').html('');
                },1500)
            }
            $('#reserving_now_submit_button').val('预约');
            $('#reserving_now_submit_button').attr('disabled',false);
            return false;
        }else{
            layer.closeAll();
            layer.msg('预约成功', {icon: 1,time: 3000});
            $('#reserving_now_submit_button').val('预约');
            $('#reserving_now_submit_button').attr('disabled',false);
        }
    },'json')
}

// 点击预约
function login_button(j){
	jnum=j;
	var htmltext=$('.layer_form_div');
	layer.open({
	  	type: 1,
	  	title:false,
	  	closeBtn: 1,
	  	shadeClose:1,
	  	area: ['460px', '320px'],  
	  	content: htmltext
	});
	
}
// 结束
// 手机验证
function myFunction(){
	var reg = /^1[0-9]{10}$/; //验证规则，
	var phoneNum = $('#inputTel').val();//手机号码
	var flag = reg.test(phoneNum); //true

	if(flag){
		$('.layer_form>span').css('visibility','hidden');
		$('.inputY_button').css({'background': '#ffebee','color': '#e77c80'});
		//提交表单
		return true;
	}else{
		$('.inputY_button').css({'background': '#eee','color': '#bbb'});
		$('.layer_form span span').text('请输入正确手机号');
		$('.layer_form>span').css({'visibility':'visible','color':'#e77c80'});
		$('.layer_form>span .glyphicon').css('color','#e77c80');
		return false;
	}
}
// 结束
function list_table(){
	layer.closeAll();
	var htmltext1=$('.layer_form_info');
	layer.open({
	  	type: 1,
	  	title:false,
	  	closeBtn: 1,
	  	shadeClose:1,
	  	area: ['800px', '510px'], 
	  	content: htmltext1,
	});
}
// 登录成功
function loginTel(){

	if(myFunction()){
		if(jnum){
			layer.closeAll();
			layer.msg('登录成功', {icon: 1,time: 1000});
		}else{
			layer.closeAll();
			var htmltext1=$('.layer_form_info');
			layer.open({
			  	type: 1,
			  	title:false,
			  	closeBtn: 1,
			  	shadeClose:1,
			  	area: ['800px', '510px'], 
			  	content: htmltext1,
			});
		}
		
	}
}
// 结束
// 下一步
function nextInfo(){
	layer.closeAll();
	var htmltext2=$('.layer_form_information');
	layer.open({
	  	type: 1,
	  	title:false,
	  	closeBtn: 1,
	  	shadeClose:1,
	  	area: ['460px', '520px'], 
	  	content: htmltext2,

	});
}
// 结束
// 预约成功
function success(){
	layer.closeAll();
	layer.msg('预约成功', {icon: 1,time: 1000});
}
// 结束
// 删除
$('.glyphicon-trash').click(function(){
	layer.confirm('确定删除当前患者信息？', {
	  	btn: ['彻底删除'], //按钮
	  	btnAlign: 'c',
	  	title:false,

	}, function(){
	  	layer.msg('删除成功', {icon: 1,time: 1000});
	});
})
// 结束
// 发送验证码
$('.inputY_button').click(function(){
	$('.layer_form span span').text('验证码已发送');
	$('.layer_form span').css({'visibility':'visible','color':'#666'});
	$('.layer_form span .glyphicon').css('color','#81c784');
	return false;
})
// 结束

// 添加患者

// 结束




//$('.model-select-box li').click(function(){
//	var infoCont = $(this).html();
//	$('.model-select-text').html(infoCont);
//})
// 结束


// 预约列表
function get_reserve_list(){
    var data = {'action':'get_reserve_list'};
    $.post(ajaxurl,data,function(json){
        console.log(json);
          if(json.error){
              layer.msg(json.msg, {icon: 2,time: 2000});
              if(json.error==1){
                  setTimeout(function(){
                      layer.closeAll();
                      window.wsocial_dialog_login_show();
                  },2000);
              }
              return false;
          }else{
              var html = '';
              for(var i in json.list){
                  html += '<tr> <td width="220px">'+json.list[i].rtime+'</td> <td width="100px">'+json.list[i].p_name+'</td><td width="100px">'+json.list[i].rnum+'</td>  <td width="120px">'+json.list[i].oname+'</td> <td width="90px">'+json.list[i].dname+'</td> <td width="90px" onclick="delete_reserve(this,\''+json.list[i].id+'\',\''+json.list[i].rnum+'\')"><span class="delete_list">&times;</span></td> </tr>';
              }
              $('#reserve-list').html(html);
          }
    },'json')
	var htmltable=$('.layer_list');
	layer.open({
	  	type: 1,
	  	title:false,
	  	closeBtn: 1,
	  	shadeClose:1,
	  	area: ['700px', '500px'], 
	  	content: htmltable,
	});
}
// 结束
function delete_reserve(obj,id,rnum){
    if(!confirm('确定要删除该次预约？')){
       return false ;
    }
    var data = {'action':'delete_reserve','id':id,'rnum':rnum};
    $.post(ajaxurl,data,function(json){
          if(json.error){
              layer.msg(json.msg, {icon: 2,time: 2000});
              if(json.error==1){
                  setTimeout(function(){
                      layer.closeAll();
                      window.wsocial_dialog_login_show();
                  },2000);
              }
              return false;
          }else{
              layer.msg(json.msg, {icon: 1,time: 2000});
              setTimeout(function(){
                  $(obj).closest('tr').remove();
              },1000);
          }
    },'json')
}
function getJsonLength(jsonData) {
    var length = 0 ;
    for (var i in jsonData){
        length++;
    }
    return length;
}
function get_strlength (str)
{
    var len = 0;

    if (str.match(/[^ -~]/g) == null)
    {
        len = str.length;
    }
    else
    {
        len = str.length + str.match(/[^ -~]/g).length;
    }

    return len;
}

	