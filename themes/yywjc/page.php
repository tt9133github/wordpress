<?php $data = get_data();?>
<?php get_header();?>
<?php $week = array(1=>'周一',2=>'周二',3=>'周三',4=>'周四',5=>'周五',6=>'周六',0=>'周日') ?>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/layer/layer.js"></script>
<script type="text/javascript">
	var BROWSER = {};
	var USERAGENT = navigator.userAgent.toLowerCase();
	browserVersion({'ie':'msie','edge':'edge','rv':'rv','firefox':'','chrome':'','opera':'','safari':'','mozilla':'','webkit':'','maxthon':'','qq':'qqbrowser','ie11':'trident'});
	if(BROWSER.ie11){
		BROWSER.ie=11;
		BROWSER.rv=11;
	}else{
		BROWSER.rv=0;
	}
	if(BROWSER.safari) {
		BROWSER.firefox = true;
	}
	BROWSER.opera = BROWSER.opera ? opera.version() : 0;
	HTMLNODE = document.getElementsByTagName('head')[0].parentNode;
	if(BROWSER.ie) {
		BROWSER.iemode = parseInt(typeof document.documentMode != 'undefined' ? document.documentMode : BROWSER.ie);
		HTMLNODE.className = 'ie_all ie' + BROWSER.iemode;
	}
	function browserVersion(types) {
		var other = 1;
		for(i in types) {
			var v = types[i] ? types[i] : i;
			if(USERAGENT.indexOf(v) != -1) {
				var re = new RegExp(v + '(\\/|\\s|:)([\\d\\.]+)', 'ig');
				var matches = re.exec(USERAGENT);
				var ver = matches != null ? matches[2] : 0;
				other = ver !== 0 && v != 'mozilla' ? 0 : other;
			}else {
				var ver = 0;
			}
			eval('BROWSER.' + i + '= ver');
		}
		BROWSER.other = other;
	}
</script>
<style>

	*{
		margin: 0;
		padding: 0;
	}
	ul,ul li{
		list-style:none ;
	}
	.tab-pane{
		margin: 40px 20px 20px;
	}
	table{
		border-collapse: collapse;
	}
	table th{
		width: 6.6%;
		text-align: center;
	}
	table tr td{
		min-height: 30px;
		padding: 5px 10px;
		font-size: 12px;
		color: #FFFFFF;
		border: 1px solid #808080;
	}
	table tr td.green{
	    background-color: #5CB85C;
		color: #FFFFFF;
		border: 1px solid #FFFFFF;
	}
	tbody tr:nth-child(even){
		background-color: #F2F2F2;
		color: #F2F2F2;
	}
	tbody tr:nth-child(even) td{
		color: #F2F2F2;
	}
	tbody tr td:nth-child(1){
		background-color: #fff;
		color: rgb(119, 119, 119);
		font-size: 18px;
	}
	.tab-pane{
		background: #fff;
		
	}
	.tab-pane,.tab-pane .tab1{
		overflow: hidden;
	}
	.tab-pane .tab1{
		/*margin: 20px;*/
		background-color: #d3d3d3;
	}
	.tab-pane .tab1 li{
		float: left;
		width: 33.33%;
		height: 40px;
		line-height: 40px;

		text-align: center;
	}
	.tab-pane .tab1 li.active{
		background-color: #fff;
	}
	.content>div{
		display: none;
	}
	.content>div.active{
		display: block;
	}
	.bottom-footer{
		float: right;
		margin-right: 10px;
	}
	.footer-button{
		margin: 25px 0 25px 20px;
		font-size: 16px;
		font-weight: 700;
		padding: 0px 60px;
		line-height: 60px;
		border-width: 2px;
		border-radius: 3px;
		transition: all .1s ease-out;
		border-color: #e77c80;
		background-color: #e77c80;
		color: #fff;
	}
   .tab-get{
      background-color: #e77c80;
        overflow: hidden;
        color: #fff;
    }
    .tab-get li{
        float: left;
        width: 33.33%;
        height: 40px;
        line-height: 40px;
        text-align: center;
        cursor: pointer;
        border-right: 1px solid #fff;
    }
	.main-navigation .menu-item{
		overflow:hidden;
	}
</style>
<script type="text/javascript">
	var ajaxurl = '<?php echo admin_url('admin-ajax.php')?>';
</script>
<style>
	body,h1,h2,h3,h4,h5,h6,hr,p,blockquote,dl,dt,dd,ul,ol,li,pre,form,fieldset,legend,button,input,textarea,th,td{margin:0;padding:0}
	html{color:#000;overflow-y:scoll;overflow:-moz-scrollbars-vertical}
	.p{position:absolute; border:1px dashed blue; width:0px; height:0px;left:0px; top:0px; overflow:hidden;}
	.retc{position:absolute; border:1px solid #CCCCCC; overflow:hidden; background:#EFEFEF}
</style>
<div class="tab-pane">
	<ul class="tab-get">
         <li class="active" onclick="to_time(<?php echo $data['zhouyi']-86400*7?>)">上一期</li>
         <li onclick="to_time('')">回到当前</li>
         <li onclick="to_time(<?php echo $data['zhouyi']+86400*7?>)">下一期</li>
     </ul>
	<ul class="tab1">
		<li class="active" data-oid="0301" data-did="001">赵竑彦</li>
		<li data-oid="0401" data-did="002">王素羽</li>
		<li data-oid="0201" data-did="003">祝慧慧</li>
	</ul>
	<div class="content" id="doctor-times">
		<div class="body-content1 active" data-oid="0301" data-did="001">
			<div class="tab-list">
				<table border="1">
					<thead>
					<th style="text-align: center"><?php echo date('Y',$data['zhouyi']);?>年</th>
					<?php for($i=$data['zhouyi'];$i<=$data['zhouri'];$i+=86400){ ?>
					<?php echo "<th>".date('m-d',$i)."<br>".$week[date('w',$i)]."</th>" ?>
					<?php }?>
					</thead>
					<tbody>
					<form action="<?php echo admin_url('admin-ajax.php')?>">
					    <input type="hidden" name="did" value="001">
						<input type="hidden" name="oid" value="0301">
						<input type="hidden" name="action" value="timesetting">
							
						<?php for($i=strtotime(date('Y-m-d',time()).' 8:00');$i<strtotime(date('Y-m-d',time()).' 18:00');$i+=60*30){ ?>
					    <?php echo '<tr><td>'.date('g:i',$i).'~'.date('g:i',$i+60*30).'</td>'?>
					    	
						<?php for($y=$data['zhouyi'];$y<=$data['zhouri'];$y+=86400){ ?>
                            <?php echo '<td id="z'.strtotime(date('Y-m-d',$y).' '.date('g:i',$i)).'"  '?>
							<?php if(isset($data['data']['001'][strtotime(date('Y-m-d',$y).' '.date('g:i',$i))]) && $data['data']['001'][strtotime(date('Y-m-d',$y).' '.date('g:i',$i))]['status']) echo 'class="green"'?>
							<?php echo '><input type="hidden"   name="arr['.strtotime(date('Y-m-d',$y).' '.date('g:i',$i)).']"'?>
							<?php if(isset($data['data']['001'][strtotime(date('Y-m-d',$y).' '.date('g:i',$i))]) && $data['data']['001'][strtotime(date('Y-m-d',$y).' '.date('g:i',$i))]['status']) echo 'value="1"'; else echo 'value="0"'?>
							<?php echo '>'.date('m-d',$y).'&nbsp;'.$week[date('w',$y)].'&nbsp;'.date('g:i',$i).'~'.date('g:i',$i+60*30).'</td>'?>
						<?php }?>
							
					    <?php echo '</tr>'?>
					<?php }?>
					</form>
					</tbody>
				</table>
			</div>
		</div>
		<div class="body-content1" data-oid="0401" data-did="002">
			<div class="tab-list">
				<table border="1">
					<thead>
					<th style="text-align: center"><?php echo date('Y',$data['zhouyi']);?>年</th>
					<?php for($i=$data['zhouyi'];$i<=$data['zhouri'];$i+=86400){ ?>
						<?php echo "<th>".date('m-d',$i)."<br>".$week[date('w',$i)]."</th>" ?>
					<?php }?>
					</thead>
					<tbody>
					<form action="<?php echo admin_url('admin-ajax.php')?>">
						<input type="hidden" name="did" value="002">
						<input type="hidden" name="oid" value="0401">
						<input type="hidden" name="action" value="timesetting">
						<?php for($i=strtotime(date('Y-m-d',time()).' 8:00');$i<strtotime(date('Y-m-d',time()).' 18:00');$i+=60*30){ ?>
							<?php echo '<tr><td>'.date('g:i',$i).'~'.date('g:i',$i+60*30).'</td>'?>
							<?php for($y=$data['zhouyi'];$y<=$data['zhouri'];$y+=86400){ ?>
								<?php echo '<td id="w'.strtotime(date('Y-m-d',$y).' '.date('g:i',$i)).'" '?>
								<?php if(isset($data['data']['002'][strtotime(date('Y-m-d',$y).' '.date('g:i',$i))]) && $data['data']['002'][strtotime(date('Y-m-d',$y).' '.date('g:i',$i))]['status']) echo 'class="green"'?>
								<?php echo '><input type="hidden"  name="arr['.strtotime(date('Y-m-d',$y).' '.date('g:i',$i)).']"'?>
								<?php if(isset($data['data']['002'][strtotime(date('Y-m-d',$y).' '.date('g:i',$i))]) && $data['data']['002'][strtotime(date('Y-m-d',$y).' '.date('g:i',$i))]['status']) echo 'value="1"'; else echo 'value="0"'?>
								<?php echo '>'.date('m-d',$y).'&nbsp;'.$week[date('w',$y)].'&nbsp;'.date('g:i',$i).'~'.date('g:i',$i+60*30).'</td>'?>
							<?php }?>
							<?php echo '</tr>'?>
						<?php }?>
					</form>
					</tbody>
				</table>
			</div>
		</div>
		<div class="body-content1" data-oid="0201" data-did="003">
			<div class="tab-list">
				<table border="1">
					<thead>
					<th style="text-align: center"><?php echo date('Y',$data['zhouyi']);?>年</th>
					<?php for($i=$data['zhouyi'];$i<=$data['zhouri'];$i+=86400){ ?>
						<?php echo "<th>".date('m-d',$i)."<br>".$week[date('w',$i)]."</th>" ?>
					<?php }?>
					</thead>
					<tbody>
					<form action="<?php echo admin_url('admin-ajax.php')?>">
						<input type="hidden" name="did" value="003">
						<input type="hidden" name="oid" value="0201">
						<input type="hidden" name="action" value="timesetting">
						<?php for($i=strtotime(date('Y-m-d',time()).' 8:00');$i<strtotime(date('Y-m-d',time()).' 18:00');$i+=60*30){ ?>
							<?php echo '<tr><td>'.date('g:i',$i).'~'.date('g:i',$i+60*30).'</td>'?>
							<?php for($y=$data['zhouyi'];$y<=$data['zhouri'];$y+=86400){ ?>
								<?php echo '<td id="zh'.strtotime(date('Y-m-d',$y).' '.date('g:i',$i)).'" '?>
								<?php if(isset($data['data']['003'][strtotime(date('Y-m-d',$y).' '.date('g:i',$i))]) && $data['data']['003'][strtotime(date('Y-m-d',$y).' '.date('g:i',$i))]['status']) echo 'class="green"'?>
								<?php echo '><input type="hidden"  name="arr['.strtotime(date('Y-m-d',$y).' '.date('g:i',$i)).']"'?>
								<?php if(isset($data['data']['003'][strtotime(date('Y-m-d',$y).' '.date('g:i',$i))]) && $data['data']['003'][strtotime(date('Y-m-d',$y).' '.date('g:i',$i))]['status']) echo 'value="1"'; else echo 'value="0"'?>
								<?php echo '>'.date('m-d',$y).'&nbsp;'.$week[date('w',$y)].'&nbsp;'.date('g:i',$i).'~'.date('g:i',$i+60*30).'</td>'?>
							<?php }?>
							<?php echo '</tr>'?>
						<?php }?>
					</form>
					</tbody>
				</table>
			</div>
		</div>

	</div>
	<div class="bottom-footer">
		<button type="button" class="footer-button" onclick="delete_all()">清空</button>
		<button type="button" class="footer-button footer-cavse" id="timesetting_button" onclick="timesetting()">保存</button>
	</div>
</div>

<script>
//	$(document).on('click','table tbody',function(e){
//		var current_time = <?php //echo $data['current_zhouyi']?>//;
//		var time = <?php //echo $data['zhouyi']?>//;
//		if(time<current_time){
//			layer.msg('当前选择的时间段不可编辑', {icon: 2,time: 2000});
//			return false ;
//		}
//		var tb=$(e.target).closest('tr').find('td:first');
//		//$(e.target).closest('tr').find('td:not(:first)').css({'background':'red'});
//		if(!(tb.is($(e.target)))) {
//			if($(e.target).hasClass('green')){
//				$(e.target).removeClass('green');
//				$(e.target).find('input').val(0);
//			}else{
//				$(e.target).addClass('green');
//				$(e.target).find('input').val(1);
//			}
//		}
//	});
	//tab切换
	$(document).on('click','.tab1 li',function(){
		var i=$(this).index();
		$('.tab1 li').eq(i).addClass('active').siblings().removeClass('active');
		$('.content>div').eq(i).addClass('active').siblings().removeClass('active');
	});
	function  timesetting(){
		$('#timesetting_button').attr("disabled", true);
		$('#timesetting_button').text('保存中……');
		var form = $('#doctor-times').find('div.active form');
		$.post(ajaxurl,$(form).serialize(),function(json){
			if(json.error){
				layer.msg(json.msg, {icon: 2,time: 2000});
				if(json.error==1){
					setTimeout(function(){
						layer.closeAll();
						window.wsocial_dialog_login_show();
					},2000);
				}
				$('#timesetting_button').attr("disabled", false);
				$('#timesetting_button').text('保存');
				return false;
			}else{
				layer.msg(json.msg, {icon: 1,time: 2000});
				$('#timesetting_button').attr("disabled", false);
				$('#timesetting_button').text('保存');
			}
		},'json');
	}
	function to_time(zhouyi){
		var url = window.location.href;
		if(/&zhouyi=/.test(url)){
			var u = url.split('&zhouyi=');
			if(zhouyi != ''){
				window.location.href = u[0]+'&zhouyi='+zhouyi;
			}else{
				window.location.href = u[0];
			}
		}else{
			if(zhouyi != ''){
				window.location.href = window.location.href+'&zhouyi='+zhouyi;
			}else{
				window.location.href = window.location.href;
			}
		}
	}
function delete_all(){
	did = $('.body-content1.active').data('did');
//				arr.push(evt.target.id);
	$('.body-content1[data-did="'+did+'"] td').each(function(){
		$(this).removeClass('green');
		$(this).find('input').val(0);
	});
}
</script>
<script type="text/javascript">
	_hotkey={};
	_hotkey.ctrl=0;
	var Mouses = {
		board:'#doctor-times',
		onmousemove:null,
		onmouseup:null,
		tach:null,
		onselectstart:1,
		position:{},
		icos:[],
		move_id:[]
	};

	$(document).ready(function(){
		Mouses.init();
		
	});
	Mouses.init = function(){
		var self = this;
		$(self.board+' td:not(:nth-child(1))').click(function(){
			if(self.mousedowndoing)return false;
			if(jQuery(this).hasClass('green')){
				jQuery(this).removeClass('green');
				jQuery(this).find('input').val(0);
			}else{
				jQuery(this).addClass('green');
				jQuery(this).find('input').val(1);
			}
		});
		$(self.board).on('mousedown',function(e){
			e=e?e:window.event;
			var tag = e.srcElement ? e.srcElement :e.target;
			if(/input|textarea/i.test(tag.tagName)){
				return true;
			}	
			if(e.button==2) return true;
			self.AttachEvent(e);
			dfire('mousedown');
			self.Mousedown(e?e:window.event);
		});
		jQuery(self.board).on('mouseup',function(e){
			e=e?e:window.event;
			var tag = e.srcElement ? e.srcElement :e.target;
			if(/input|textarea/i.test(tag.tagName)){
				return true;
			}
			dfire('mouseup');
			//dfire('touchend');		
			self.Mouseup(e?e:window.event);
			
			return true;
		});
		jQuery(document).on('keydown',function(event){
			event=event?event:window.event;
			var tag = event.srcElement ? event.srcElement :event.target;
			if(/input|textarea/i.test(tag.tagName)){
				return true;
			}
			var e;
			if (event.which !="") { e = event.which; }
			else if (event.charCode != "") { e = event.charCode; }
			else if (event.keyCode != "") { e = event.keyCode; }
			switch(e){
				case 17:
					_hotkey.ctrl=1;
				break;
			}
		});
		jQuery(document).on('keyup',function(event){
			event=event?event:window.event;
			var tag = event.srcElement ? event.srcElement :event.target;
			if(/input|textarea/i.test(tag.tagName)){
				return true;
			}
			var e;
			if (event.which !="") { e = event.which; }
			else if (event.charCode != "") { e = event.charCode; }
			else if (event.keyCode != "") { e = event.keyCode; }
			switch(e){
				case 17:
					_hotkey.ctrl=0;
				break;
			}
		
		 });
	};
	function dfire(e) {
		jQuery(document).trigger(e);
	}
	Mouses.Mouseup=function(e){
		var self = this;
		if(self.tach) self.DetachEvent(e);
		if(!self.mousedowndoing) {
		}else self.Moved(e);
	};
	Mouses.Duplicate=function(){
		var self = this;
		self.copy=document.createElement('div');
		if(BROWSER.ie){
			self.copy.style.cssText="position:absolute;left:0px;top:0px;width:0px;height:0px;filter:Alpha(opacity=20);opacity:0.2;z-index:10002;overflow:hidden;background:#000;border:1px solid #000;display: block;";
		}else{
			self.copy.style.cssText="position:absolute;left:0px;top:0px;width:0px;height:0px;filter:Alpha(opacity=0);opacity:0;z-index:10002;overflow:hidden;background:#000;border:1px solid #000;display: block;";
		}
//		if(jQuery(self.copy).length)return false;
		document.body.appendChild(self.copy);
	};
	Mouses.Mousedown = function(e){
		var self = this;
		self.mousedowndoing=false;
		var scrollTop = $(document).scrollTop(); 
		var scrollLeft = $(document).scrollLeft();
		if(e.type=='touchstart'){
			var XX=e.touches[0].clientX+scrollLeft;
			var YY=e.touches[0].clientY+scrollTop;
		}else{
			var XX=e.clientX+scrollLeft;
			var YY=e.clientY+scrollTop;
		}
		self.oldxx=XX;
		self.oldyy=YY;
		self.tl=XX;
		self.tt=YY;
		self.oldx=XX;
		self.oldy=YY;
		if(!self.tach) self.AttachEvent(e);
		
		if(e.type=='touchstart'){
			jQuery(self.board).on('touchmove',function(e){self.Move(e);return false});
		}else{
			document.onmousemove=function(e){self.Move(e?e:window.event);return false};
		}
	};
	Mouses.Moved=function(e){
		var self=this;
//		jQuery('#_blank').hide();
		if(self.tach)self.DetachEvent(e);
		var scrollTop = $(document).scrollTop(); 
		var scrollLeft = $(document).scrollLeft();
		if(e.type=='touchstart'){
			var XX=e.touches[0].clientX+scrollLeft;
			var YY=e.touches[0].clientY+scrollTop;
		}else{
			var XX=e.clientX+scrollLeft;
			var YY=e.clientY+scrollTop;
		}
//		if(BROWSER.ie){
//			if(XX>self.oldx && YY > self.oldy){
//				if(Math.abs(XX-self.oldxx)>20 || Math.abs(YY-self.oldyy)>20){
//					 self.oldxx=XX;
//					 self.oldyy=YY;
//					 self.setSelected(true);
//				}
//			}else{
//				if(Math.abs(XX-self.oldxx)>20 || Math.abs(YY-self.oldyy)>20){
//					 self.oldxx=XX;
//					 self.oldyy=YY;
//					 self.setSelected(true);
//				}
//			}
//		}
		jQuery(self.copy).remove();
	};
	Mouses.Move = function(e){
		var self = this;
		var scrollTop = $(document).scrollTop(); 
		var scrollLeft = $(document).scrollLeft();
		if(e.type=='touchstart'){
			var XX=e.touches[0].clientX+scrollLeft;
			var YY=e.touches[0].clientY+scrollTop;
		}else{
			var XX=e.clientX+scrollLeft;
			var YY=e.clientY+scrollTop;
		}
		if(!self.mousedowndoing && (Math.abs(self.oldx-XX)>5 || Math.abs(self.oldy-YY)>5)){
			self.PreMove(e);
		}
		if(!self.mousedowndoing) return;
		if(XX-self.oldx>0){
			self.copy.style.width=(XX-self.oldx)+"px";
		}else{
			self.copy.style.width=Math.abs(XX-self.oldx)+"px";
			self.copy.style.left=self.tl+(XX-self.oldx)+"px";
		}
		if(YY-self.oldy>0){
			self.copy.style.height=(YY-self.oldy)+"px";
		}else{
			self.copy.style.height=Math.abs(YY-self.oldy)+"px";
			self.copy.style.top=self.tt+(YY-self.oldy)+"px";
		}
//		if(!BROWSER.ie){
			if(XX>self.oldx && YY > self.oldy){
				if(Math.abs(XX-self.oldxx)>20 || Math.abs(YY-self.oldyy)>20){
					self.oldxx=XX;
					self.oldyy=YY;
					self.direction = true;
					self.setSelected(true);
				}
			}else{
				if(Math.abs(XX-self.oldxx)>20 || Math.abs(YY-self.oldyy)>20){
					self.oldxx=XX;
					self.oldyy=YY;
					self.direction = false;
					self.setSelected(true);
				}
			}
//		}
		
	};
	Mouses.PreMove = function (e) {
		var self = this;
		self.move_id = [];
		jQuery('#_blank').empty().show();
		if (self.move=="no") return;
		self.Duplicate();
		self.mousedowndoing=true;
		var p=jQuery(self.board).offset();
		self.copy.style.left=self.tl+'px';
		self.copy.style.top=self.tt+'px';
		//计算此容器内的所有ico的绝对位置，并且存入_filemanage.selectall.position中；
		jQuery(self.board).find('td').each(function(){
			var el=jQuery(this);
			var p=el.offset();
			var icoid=el.attr('id');
			if(icoid){
				self.position[icoid]={icoid:icoid,left:p.left,top:p.top,width:el.width(),height:el.height()};
			}
		});
		if(e.type=='touchmove'){
			jQuery(self.board).on('touchend',function(e){self.Moved(e);return true});
		}else{
			document.onmouseup=function(e){self.Moved(e?e:window.event);return false;};
		}
		
	};
	Mouses.setSelected=function(flag){
		var self = this;
		var p=jQuery(self.copy).offset();
		var icos=[];
		var copydata={left:p.left,top:p.top,width:jQuery(self.copy).width(),height:jQuery(self.copy).height()};
		for(var icoid in self.position){
			var data=self.position[icoid];
			var el=jQuery(self.board).find('td[id="'+icoid+'"]');
			if(self.checkInArea(copydata,data,flag)){
				if(jQuery.inArray(icoid,self.move_id) == -1){
					self.move_id.push(icoid);
				}
				self.SelectedStyle(self.board,icoid,true,true);
//			}else if(!self.direction && self.checkInArea(copydata,data,flag)){
//				self.SelectedStyle(self.board,icoid,false,true);
			}else{
				if(jQuery.inArray(icoid,self.move_id) > -1){

					self.move_id.splice(jQuery.inArray(icoid,self.move_id),1);
					el.removeClass('green');
					el.find('input').val(0);
				}
				
			}
//			else if(_hotkey.ctrl<1){
//				self.SelectedStyle(self.board,icoid,false,true);
//			}
		}
	};
	Mouses.SelectedStyle=function(container,rid,flag,multi){
		var self = this;
		var icos=self.icos;
		var el=jQuery(container).find('td[id="'+rid+'"]');
		if(flag){
			if(self.container=='') self.container=container;
			if(multi && self.container==container){
				if(jQuery.inArray(rid,self.icos)<0){
				 	self.icos.push(rid);
				}
			}else{
				jQuery(container).find('td[id="'+rid+'"]').removeClass('green');
				self.container=container;
				self.icos=[rid];
			}
			el.addClass('green');
			el.find('input').val(1);
//		}else if(!self.direction && !flag){
//			el.removeClass('green');
//			el.find('input').val(0);
		}else{
			var arr=[];
			if(self.container==container){
				for(var i in icos){
					if(icos[i]!=rid) arr.push(icos[i]);
				}
			}
			self.icos=arr;
			el.removeClass('green');
			el.find('input').val(0);
		}
	};
	Mouses.checkInArea=function(copydata,data,flag){
		var self = this;
		var rect={minx:0,miny:0,maxx:0,maxy:0};
		rect.minx=Math.max(data.left,copydata.left);
		rect.miny =Math.max(data.top,copydata.top) ;
		rect.maxx =Math.min(data.left+data.width,copydata.left+copydata.width) ;
		rect.maxy =Math.min(data.top+data.height,copydata.top+copydata.height) ;
		if(!flag){
			if(rect.minx>rect.maxx || rect.miny>rect.maxy){
				return false;
			}else{
				return true
			}
		}else{
			if(rect.minx>rect.maxx || rect.miny>rect.maxy){
				return false;
			}else{
				return true;
				var area=(rect.maxx-rect.minx)*(rect.maxy-rect.miny);
				var dataarea=data.width*data.height;
				if(dataarea==area) return true;
				else return false;
			}
		}
	};
	Mouses.DetachEvent = function () {
		var self = this;
		if(!self.tach) return;
		document.onmousemove=self.onmousemove;
		document.onmouseup=self.onmouseup;
		document.onselectstart=self.onselectstart;
		try{
			if(self.board.releaseCapture) self.board.releaseCapture();
		}catch(e){};
		self.tach=0;
	};
	Mouses.AttachEvent = function (e) {
		var self = this;
		if(self.tach) return
		self.onmousemove=document.onmousemove;
		self.onmouseup=document.onmouseup;
		self.onselectstart=document.onselectstart;
		try{
			document.onselectstart=function(){return false;}
			if(e.preventDefault) e.preventDefault();
			else{
				if(self.board.setCapture) self.board.setCapture();
			}
		}catch(e){};
		self.tach=1;
	};
</script>
<?php get_footer(); ?> 