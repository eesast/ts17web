<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>菜鸟教程(runoob.com)</title>
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/lib/jquery.js"></script>
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
<script>
$.validator.setDefaults({
    submitHandler: function() {
      alert("提交事件!");
    }
});

$().ready(function() {
	// 提交时验证表单
	var validator = $("#form1").validate({
		errorPlacement: function(error, element) {
			// Append error within linked label
			$( element )
				.closest( "form" )
					.find( "label[for='" + element.attr( "id" ) + "']" )
						.append( error );
		},
		errorElement: "span",
		messages: {
			user: {
				required: " (必需字段)",
				minlength: " (不能少于 3 个字母)"
			},
			password: {
				required: " (必需字段)",
				minlength: " (字母不能少于 5 个且不能大于 12 个)",
				maxlength: " (字母不能少于 5 个且不能大于 12 个)"
			}
		}
	});

	$(".cancel").click(function() {
		validator.resetForm();
	});
});
</script>
<style>
.error{
	color:red;
}
</style>
</head>
<body>
<form method="get" class="cmxform" id="form1" action="">
  <fieldset>
    <legend>登录框</legend>
    <p>
      <label for="user">用户名</label>
      <input id="user" name="user" required minlength="3">
    </p>
    <p>
      <label for="password">密码</label>
      <input id="password" type="password" maxlength="12" name="password" required minlength="5">
    </p>
    <p>
      <input class="submit" type="submit" value="Login">
    </p>
  </fieldset>
</form>
</body>
</html>
