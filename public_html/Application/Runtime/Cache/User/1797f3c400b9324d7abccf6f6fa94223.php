<?php if (!defined('THINK_PATH')) exit();?><body>
	<?php if($intelapplydate['one']==1): ?><div id="div1" style="width:20px; height:20px; background:red;float:left;text-align:center;">1</div><?php else: ?><div id="div1" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">1</div><?php endif; ?>
	<?php if($intelapplydate['2']==2): ?><div id="div2" style="width:20px; height:20px; background:red;float:left;text-align:center;">2</div><?php else: ?><div id="div2" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">2</div><?php endif; ?>
	<?php if($intelapplydate['3']==3): ?><div id="div3" style="width:20px; height:20px; background:red;float:left;text-align:center;">3</div><?php else: ?><div id="div3" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">3</div><?php endif; ?>
	<?php if($intelapplydate['4']==4): ?><div id="div4" style="width:20px; height:20px; background:red;float:left;text-align:center;">4</div><?php else: ?><div id="div4" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">4</div><?php endif; ?>
	<div id="div5" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">5</div>
	<div id="div6" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">6</div>
	<div id="div7" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">7</div>
	<div id="div8" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">8</div>
	<div id="div9" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">9</div>
	<div id="div10" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">10</div>
	<div id="div11" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">11</div>
	<div id="div12" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">12</div>
	<div id="div13" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">13</div>
	<div id="div14" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">14</div>
	<div id="div15" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">15</div>
	<div id="div16" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">16</div>
	<div id="div17" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">17</div>
	<div id="div18" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">18</div>
	<div id="div19" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">19</div>
	<div id="div20" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">20</div>
	<div id="div21" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">21</div>
	<div id="div22" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">22</div>
	<div id="div23" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">23</div>
	<div id="div24" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">24</div>
	<div id="div25" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">25</div>
	<div id="div26" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">26</div>
	<div id="div27" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">27</div>
	<div id="div28" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">28</div>
	<div id="div29" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">29</div>
	<div id="div30" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">30</div>
	<div id="div31" style="width:20px; height:20px; background:#ccc;float:left;text-align:center;">31</div>
</body>
<script>
window.onload = function(){
    var obj = document.getElementById('div1');
    obj.onclick=function(){  
        window.location.href="http://yigong.igawk.cn/User/Index/dointelapplydate/uid/<?php echo ($_SESSION["uid"]); ?>/one/1";            
     }
 }
	var oDiv = document.getElementById('div1');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div2');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div3');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div4');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div5');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div6');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div7');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div8');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div9');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div10');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div11');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div12');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div13');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div14');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div15');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div16');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div17');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div18');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div19');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div20');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div21');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div22');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div23');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div24');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div25');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div26');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div27');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div28');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div29');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div30');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
	var oDiv = document.getElementById('div31');
	oDiv.onclick=function(){
		if(this.style.backgroundColor == 'red'){
			this.style.backgroundColor = '#ccc';
		}else{
			this.style.backgroundColor = 'red';
		}
	};
</script>