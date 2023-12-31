<?php
/* Smarty version 4.3.1, created on 2023-10-06 17:37:10
  from 'C:\laragon\www\mtk\tkpisowifi\ui\ui\admin-login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651fd5469f8397_59587612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ace460660734b5e5aebb932fbc5044a96fd766bb' => 
    array (
      0 => 'C:\\laragon\\www\\mtk\\tkpisowifi\\ui\\ui\\admin-login.tpl',
      1 => 1694754792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651fd5469f8397_59587612 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['_L']->value['Login'];?>
</title>
    <link rel="shortcut icon" href="ui/ui/images/logo.png" type="image/x-icon" />

    <!-- Css/Less Stylesheets -->
    <link rel="stylesheet" href="ui/ui/styles/bootstrap.min.css">
    <link rel="stylesheet" href="ui/ui/styles/adminlte.min.css">


</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <b>Nux</b>Billing
        </div>
        <div class="login-box-body">
            <p class="login-box-msg"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sign_In_Admin'];?>
</p>
            <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
                <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

            <?php }?>
            <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
admin/post" method="post">
                <div class="form-group has-feedback">
                    <input type="text" required class="form-control" name="username" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" required class="form-control" name="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-flat"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Login'];?>
</button>
            </form>
        </div>
    </div>
    <?php echo '<script'; ?>
 src="ui/ui/scripts/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="ui/ui/scripts/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="ui/ui/scripts/adminlte.min.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
