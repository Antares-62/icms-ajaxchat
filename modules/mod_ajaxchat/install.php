<?php
function info_module_mod_ajaxchat()
{
  $_module['title']        = '��������� ajaxchat';
  $_module['name']         = '��������� ajaxchat';
  $_module['description']  = '��������� ajaxchat';
  $_module['link']         = 'mod_ajaxchat';
  $_module['position']     = 'sidebar';
  $_module['author']       = 'NeoChapay';
  $_module['version']      = '1';
  return $_module;
}

function install_module_mod_ajaxchat()
{
  return true;
}

function upgrade_module_mod_ajaxchat()
{
  return true;
}
?>
