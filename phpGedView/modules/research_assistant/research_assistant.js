	function find_folder_id() {
 		form = document.autotask;
 		folderID=form.folder.options[form.folder.selectedIndex].value;
 		return folderID;
 	}


 	function search_selector(pid){
		frm = document.selector;

		var oXmlHttp = createXMLHttp();		
		oXmlHttp.open('get', 'module.php?mod=research_assistant&action=load_search_plugin&plugin='+ frm.cbosite.options[frm.cbosite.selectedIndex].value + '&pid='+pid, true);
		//-- set loading message
		inbox = document.getElementById('searchdiv');
		if (inbox) {
			inbox.style.width = inbox.offsetWidth + "px";
			inbox.style.height = inbox.offsetHeight + "px";
			inbox.innerHTML = "<p style=\"margin: 20px 20px 20px 20px\"><img src=\"images/loading.gif\" alt=\"\" title=\"\" /></p>";
		}
		oXmlHttp.onreadystatechange=function()
		{
  			if (oXmlHttp.readyState==4)
  			{
				inbox = document.getElementById('searchdiv');
   				inbox.innerHTML = oXmlHttp.responseText;
   				inbox.style.width = "auto";
				inbox.style.height = "auto";
   			}
  		};
  		oXmlHttp.send(null);
    }
	

	function editcomment(commentid, pid) {
  		window.open('editcomment.php?pid='+pid+'&ucommentid='+commentid, '', 'top=50,left=50,width=600,height=400,resizable=1,scrollbars=1');
  	}
	function confirm_prompt(text, commentid, pid) {
    	if (confirm(text)) {
      		window.location = 'individual.php?pid='+pid+'&action=delete_comment&uc_id='+commentid+'&tab=5';
    	}
    }