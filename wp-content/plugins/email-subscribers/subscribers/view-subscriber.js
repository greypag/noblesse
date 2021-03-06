function _es_redirect()
{
	window.location = "admin.php?page=es-view-subscribers";
}

function _es_help()
{
	window.open("https://wordpress.org/plugins/email-subscribers/faq/");
}

function _es_addemail()
{
	if(document.form_addemail.es_email_mail.value=="")
	{
		alert(es_view_subscriber_notices.es_subscriber_email);
		document.form_addemail.es_email_mail.focus();
		return false;
	}
	else if(document.form_addemail.es_email_status.value=="" || document.form_addemail.es_email_status.value=="Select")
	{
		alert(es_view_subscriber_notices.es_subscriber_email_status);
		document.form_addemail.es_email_status.focus();
		return false;
	}
	else if( (document.form_addemail.es_email_group.value == "") && (document.form_addemail.es_email_group_txt.value == "") )
	{
		alert(es_view_subscriber_notices.es_subscriber_group);
		document.form_addemail.es_email_group.focus();
		return false;
	}
}

function _es_delete(id, query)
{
	if(confirm(es_view_subscriber_notices.es_subscriber_delete_record))
	{
		document.getElementById("searchquery").value = document.frm_es_display.searchquery.value;;
		document.getElementById("searchquery_cnt").value = document.frm_es_display.searchquery_cnt.value;
		document.getElementById("searchquery_group").value = document.frm_es_display.searchquery_group.value;
		document.getElementById("searchquery_sts").value = document.frm_es_display.searchquery_sts.value;
		document.getElementById("wp_create_nonce").value = document.frm_es_display.wp_create_nonce.value;
		document.frm_es_display.action="admin.php?page=es-view-subscribers&ac=del&did="+id;
		document.frm_es_display.submit();
	}
}

function _es_resend(id, query)
{	
	//document.frm_es_display.action="admin.php?page=es-view-subscribers&ac=resend&search="+query+"&did="+id;
	document.getElementById("searchquery").value = document.frm_es_display.searchquery.value;;
	document.getElementById("searchquery_cnt").value = document.frm_es_display.searchquery_cnt.value;
	document.getElementById("searchquery_group").value = document.frm_es_display.searchquery_group.value;
	document.getElementById("searchquery_sts").value = document.frm_es_display.searchquery_sts.value;
	document.getElementById("wp_create_nonce").value = document.frm_es_display.wp_create_nonce.value;
	document.frm_es_display.action="admin.php?page=es-view-subscribers&ac=resend&did="+id;
	document.frm_es_display.submit();
}

function _es_search_sub_action(alphabets)
{
	//var searchquery = document.frm_es_display.searchquery.value;
	//var cnt = document.frm_es_display.searchquery_cnt.value;
	//var group = document.frm_es_display.searchquery_group.value;
	//document.frm_es_display.frm_es_bulkaction.value = 'search_sts';
	//document.frm_es_display.action="admin.php?page=es-view-subscribers&search=" + searchquery + "&sts=" + sts + "&cnt=" + cnt + "&group=" + group;
	document.getElementById("frm_es_bulkaction").value = 'search_sts';
	document.getElementById("searchquery").value = alphabets;
	document.getElementById("searchquery_cnt").value = document.frm_es_display.searchquery_cnt.value;
	document.getElementById("searchquery_group").value = document.frm_es_display.searchquery_group.value;
	document.getElementById("searchquery_sts").value = document.frm_es_display.searchquery_sts.value;
	document.getElementById("wp_create_nonce").value = document.frm_es_display.wp_create_nonce.value;
	document.frm_es_display.action="admin.php?page=es-view-subscribers";
	document.frm_es_display.submit();
}

function _es_search_group_action(group)
{
	//var searchquery = document.frm_es_display.searchquery.value;
	//var sts = document.frm_es_display.searchquery_sts.value;
	//var cnt = document.frm_es_display.searchquery_cnt.value;
	//document.frm_es_display.frm_es_bulkaction.value = 'search_group';
	//document.frm_es_display.action="admin.php?page=es-view-subscribers&search=" + searchquery + "&sts=" + sts + "&cnt=" + cnt + "&group=" + group;
	document.getElementById("frm_es_bulkaction").value = 'search_group';
	document.getElementById("searchquery").value = document.frm_es_display.searchquery.value;
	document.getElementById("searchquery_cnt").value = document.frm_es_display.searchquery_cnt.value;
	document.getElementById("searchquery_group").value = group;
	document.getElementById("searchquery_sts").value = document.frm_es_display.searchquery_sts.value;
	document.getElementById("wp_create_nonce").value = document.frm_es_display.wp_create_nonce.value;
	document.frm_es_display.action="admin.php?page=es-view-subscribers";
	document.frm_es_display.submit();
}

function _es_search_sts_action(status)
{
	//var searchquery = document.frm_es_display.searchquery.value;
	//var cnt = document.frm_es_display.searchquery_cnt.value;
	//var group = document.frm_es_display.searchquery_group.value;
	//document.frm_es_display.frm_es_bulkaction.value = 'search_sts';
	//document.frm_es_display.action="admin.php?page=es-view-subscribers&search=" + searchquery + "&sts=" + sts + "&cnt=" + cnt + "&group=" + group;
	document.getElementById("frm_es_bulkaction").value = 'search_sts';
	document.getElementById("searchquery").value = document.frm_es_display.searchquery.value;
	document.getElementById("searchquery_cnt").value = document.frm_es_display.searchquery_cnt.value;
	document.getElementById("searchquery_group").value = document.frm_es_display.searchquery_group.value;
	document.getElementById("searchquery_sts").value = status;
	document.getElementById("wp_create_nonce").value = document.frm_es_display.wp_create_nonce.value;
	document.frm_es_display.action="admin.php?page=es-view-subscribers";
	document.frm_es_display.submit();
}

function _es_search_count_action(cnt)
{
	//var searchquery = document.frm_es_display.searchquery.value;
	//var sts = document.frm_es_display.searchquery_sts.value;
	//var group = document.frm_es_display.searchquery_group.value;
	//document.frm_es_display.frm_es_bulkaction.value = 'search_cnt';
	//document.frm_es_display.action="admin.php?page=es-view-subscribers&search=" + searchquery + "&sts=" + sts + "&cnt=" + cnt + "&group=" + group;
	document.getElementById("frm_es_bulkaction").value = 'search_cnt';
	document.getElementById("searchquery").value = document.frm_es_display.searchquery.value;
	document.getElementById("searchquery_cnt").value = cnt;
	document.getElementById("searchquery_group").value = document.frm_es_display.searchquery_group.value;
	document.getElementById("searchquery_sts").value = document.frm_es_display.searchquery_sts.value;
	document.getElementById("wp_create_nonce").value = document.frm_es_display.wp_create_nonce.value;
	document.frm_es_display.action="admin.php?page=es-view-subscribers";
	document.frm_es_display.submit();
}

function _es_bulkaction()
{
	if(document.frm_es_display.bulk_action.value=="")
	{
		alert(es_view_subscriber_notices.es_subscriber_bulk_action); 
		document.frm_es_display.bulk_action.focus();
		return false;
	}
	
	if(document.frm_es_display.bulk_action.value == "delete")
	{
		if(confirm(es_view_subscriber_notices.es_subscriber_delete_records))
		{
			if(confirm(es_view_subscriber_notices.es_subscriber_confirm_delete))
			{
				//var searchquery = document.frm_es_display.searchquery.value;
				//var sts = document.frm_es_display.searchquery_sts.value;
				//var cnt = document.frm_es_display.searchquery_cnt.value;
				//document.frm_es_display.frm_es_bulkaction.value = 'delete';
				//document.frm_es_display.action="admin.php?page=es-view-subscribers&bulkaction=delete&search=" + searchquery + "&sts=" + sts + "&cnt=" + cnt;
				document.getElementById("frm_es_bulkaction").value = 'delete';
				document.getElementById("searchquery").value = document.frm_es_display.searchquery.value;
				document.getElementById("searchquery_cnt").value = document.frm_es_display.searchquery_cnt.value;
				document.getElementById("searchquery_group").value = document.frm_es_display.searchquery_group.value;
				document.getElementById("searchquery_sts").value = document.frm_es_display.searchquery_sts.value;
				document.getElementById("wp_create_nonce").value = document.frm_es_display.wp_create_nonce.value;
				document.frm_es_display.action="admin.php?page=es-view-subscribers";
				document.frm_es_display.submit();
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
	else if(document.frm_es_display.bulk_action.value == "resend")
	{
		if(confirm(es_view_subscriber_notices.es_subscriber_resend_email))
		{
			//var searchquery = document.frm_es_display.searchquery.value;
			//var sts = document.frm_es_display.searchquery_sts.value;
			//var cnt = document.frm_es_display.searchquery_cnt.value;
			//document.frm_es_display.frm_es_bulkaction.value = 'resend';
			//document.frm_es_display.action="admin.php?page=es-view-subscribers&bulkaction=resend&search=" + searchquery + "&sts=" + sts + "&cnt=" + cnt;
			document.getElementById("frm_es_bulkaction").value = 'resend';
			document.getElementById("searchquery").value = document.frm_es_display.searchquery.value;
			document.getElementById("searchquery_cnt").value = document.frm_es_display.searchquery_cnt.value;
			document.getElementById("searchquery_group").value = document.frm_es_display.searchquery_group.value;
			document.getElementById("searchquery_sts").value = document.frm_es_display.searchquery_sts.value;
			document.getElementById("wp_create_nonce").value = document.frm_es_display.wp_create_nonce.value;
			document.frm_es_display.action="admin.php?page=es-view-subscribers";
			document.frm_es_display.submit();
		}
		else
		{
			return false;
		}
	}
	else if(document.frm_es_display.bulk_action.value == "groupupdate")
	{
		if(document.frm_es_display.es_email_group.value=="")
		{
			alert(es_view_subscriber_notices.es_subscriber_new_group);
			document.frm_es_display.es_email_group.focus();
			return false;
		}
	
		if(confirm(es_view_subscriber_notices.es_subscriber_group_update))
		{
			//var searchquery = document.frm_es_display.searchquery.value;
			//var sts = document.frm_es_display.searchquery_sts.value;
			//var cnt = document.frm_es_display.searchquery_cnt.value;
			//document.frm_es_display.frm_es_bulkaction.value = 'groupupdate';
			//document.frm_es_display.action="admin.php?page=es-view-subscribers&bulkaction=groupupdate&search=" + searchquery + "&sts=" + sts + "&cnt=" + cnt;
			document.getElementById("frm_es_bulkaction").value = 'groupupdate';
			document.getElementById("searchquery").value = document.frm_es_display.searchquery.value;
			document.getElementById("searchquery_cnt").value = document.frm_es_display.searchquery_cnt.value;
			document.getElementById("searchquery_group").value = document.frm_es_display.searchquery_group.value;
			document.getElementById("searchquery_sts").value = document.frm_es_display.searchquery_sts.value;
			document.getElementById("wp_create_nonce").value = document.frm_es_display.wp_create_nonce.value;
			document.frm_es_display.action="admin.php?page=es-view-subscribers";
			document.frm_es_display.submit();
		}
		else
		{
			return false;
		}
	}
}

function _es_action_visible(val)
{
	if(val == "groupupdate")
	{
		document.getElementById('es_email_group').disabled = false;
	}
	else
	{
		document.getElementById('es_email_group').disabled = true;
	}
}

function _es_exportcsv(url, option)
{
	if(confirm(es_view_subscriber_notices.es_subscriber_export))
	{
		document.frm_es_subscriberexport.action= url+"&option="+option;
		document.frm_es_subscriberexport.submit();
	}
}

function _es_importemail()
{
	var filename = document.getElementById('es_csv_name').value;
	var extension = filename.substr(filename.lastIndexOf('.')+1).toLowerCase();
	if(extension == 'csv') 
	{
        if(document.form_addemail.es_email_status.value=="" || document.form_addemail.es_email_status.value=="Select")
		{
			alert(es_view_subscriber_notices.es_subscriber_email_status);
			document.form_addemail.es_email_status.focus();
			return false;
		}
		else if( (document.form_addemail.es_email_group.value == "") && (document.form_addemail.es_email_group_txt.value == "") )
		{
			alert(es_view_subscriber_notices.es_subscriber_group);
			document.form_addemail.es_email_group.focus();
			return false;
		}
		else
		{
			return true;
		}
    } 
	else 
	{
		alert(es_view_subscriber_notices.es_subscriber_csv_file);  
		return false;
    }
}

function _es_checkall(FormName, FieldName, CheckValue)
{
	if(!document.forms[FormName])
		return;
	var objCheckBoxes = document.forms[FormName].elements[FieldName];
	if(!objCheckBoxes)
		return;
	var countCheckBoxes = objCheckBoxes.length;
	if(!countCheckBoxes)
		objCheckBoxes.checked = CheckValue;
	else
		// set the check value for all check boxes
		for(var i = 0; i < countCheckBoxes; i++)
			objCheckBoxes[i].checked = CheckValue;
}