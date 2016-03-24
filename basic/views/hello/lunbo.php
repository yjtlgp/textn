<html>
	 <meta charset='utf-8'/>
		 <body onload="db();">
			 <div>
				 <ul>
					 <li id='db'><img name='db' src="img/3.jpg" alt="无法显示！" style="width:380px;"/></li>
				 </ul>
			 </div>
		 </body>
</html>
<script src="js/jquery1-8-0.js"></script>
<script type="text/javascript">
	 var i = 1;
	 function db(){
		 document.db.src="img/"+i+".jpg";
		 i++;
		 if(i>8){
			 i=1;
		 }
		 var t = setTimeout('db()',2000);
	 }
</script>

