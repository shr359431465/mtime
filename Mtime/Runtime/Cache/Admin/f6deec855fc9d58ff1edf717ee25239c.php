<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>添加影院</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/mtime/Public/Bootstrap/css/bootstrap.min.css">
		<script src="/mtime/Public/Bootstrap/js/jquery-1.11.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/bootstrap.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/holder.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/application.js"></script>
		
	</head>
	<body>
		
	<div class="container">
		<div class="panel panel-success">
			<div class="panel-heading">
				<p style="font-size:16px;">添加新影院<p>
			</div>
			<div class="panel-body">
				<form action="/mtime/index.php/Admin/Cinema/add" method="post" class="form-horizontal" enctype="multipart/form-data">
					<div class="form-group">
						<label for="chn" class="col-md-2">影院名称:</label>
						<div class="col-md-4">
							<input type="text" name="cinema_name" class="form-control" id="chn" value="" placeholder="请输入影院名称">
						</div>
					</div>
					<div class="form-group">
						<label for="enn" class="col-md-2">影院地址:</label>
						<div class="col-md-4">
							<input type="text" name="cinema_address" class="form-control" id="enn" value="" placeholder="请输入影院地址">
						</div>
					</div>
					<div class="form-group">
						<label for="mt" class="col-md-2">影院电话:</label>
						<div class="col-md-4">
							<input type="text" name="cinema_tel" class="form-control" id="mt" value="" placeholder="请输入影院电话">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">影院营业时间:</label>
						<div class="col-md-4">
							<input type="text" name="cinema_time" class="form-control"  value="" placeholder="格式8:00-10:00">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">影院LOGO:</label>
						<div class="col-md-4">
							<input type="file" name="cinema_logo" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="mc" class="col-md-2">影厅数量:</label>
						<div class="col-md-4">
							<input type="text" name="cinema_num" class="form-control" id="mc" value="" placeholder="请输入影厅数量">
						</div>
					</div>
					<div class="form-group">
						<label for="mcon" class="col-md-2">影院受喜爱度:</label>
						<div class="col-md-4">
							<input type="text" name="cinema_like" class="form-control" id="mcon" value="" placeholder="请输入影院受喜爱度（百分制）">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">是否有3D影厅:</label>
						<div class="col-md-1">
							<input type="radio" name="cinema_3d" value="1"><span style="padding-left:10px;">是</span>
						</div>
						<div class="col-md-1">
							<input type="radio" name="cinema_3d" value="0" checked><span style="padding-left:10px;">否</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">是否有VIP厅:</label>
						<div class="col-md-1">
							<input type="radio" name="cinema_vip" value="1"><span style="padding-left:10px;">是</span>
						</div>
						<div class="col-md-1">
							<input type="radio" name="cinema_vip" value="0" checked><span style="padding-left:10px;">否</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">电影是情侣座:</label>
						<div class="col-md-1">
							<input type="radio" name="cinema_qlz" value="1"><span style="padding-left:10px;">是</span>
						</div>
						<div class="col-md-1">
							<input type="radio" name="cinema_qlz" value="0" checked><span style="padding-left:10px;">否</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">影院是否免押金:</label>
						<div class="col-md-1">
							<input type="radio" name="cinema_myj" value="1"><span style="padding-left:10px;">是</span>
						</div>
						<div class="col-md-1">
							<input type="radio" name="cinema_myj" value="0" checked><span style="padding-left:10px;">否</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">影院是否可停车:</label>
						<div class="col-md-1">
							<input type="radio" name="cinema_stop" value="1"><span style="padding-left:10px;">是</span>
						</div>
						<div class="col-md-1">
							<input type="radio" name="cinema_stop" value="0" checked><span style="padding-left:10px;">否</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">影院是否有取票机:</label>
						<div class="col-md-1">
							<input type="radio" name="cinema_qpj" value="1"><span style="padding-left:10px;">是</span>
						</div>
						<div class="col-md-1">
							<input type="radio" name="cinema_qpj" value="0" checked><span style="padding-left:10px;">否</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">影院是否可刷卡:</label>
						<div class="col-md-1">
							<input type="radio" name="cinema_sk" value="1"><span style="padding-left:10px;">是</span>
						</div>
						<div class="col-md-1">
							<input type="radio" name="cinema_sk" value="0" checked><span style="padding-left:10px;">否</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">影院是否有wifi:</label>
						<div class="col-md-1">
							<input type="radio" name="cinema_wifi" value="1"><span style="padding-left:10px;">是</span>
						</div>
						<div class="col-md-1">
							<input type="radio" name="cinema_wifi" value="0" checked><span style="padding-left:10px;">否</span>
						</div>
					</div>					
					<div class="form-group">
						<div class="col-md-1 col-md-offset-2">
							<button type="submit" class="btn btn-info">添加</button>
						</div>
						<div class="col-md-1 col-md-offset-1">
							<button type="button" class="btn btn-danger" id="fh">返回</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

		
	</body>
		
	<script>
		$("#fh").click(function(){
			window.location.href="<?php echo U('movielist');?>";
		});
	</script>

</html>