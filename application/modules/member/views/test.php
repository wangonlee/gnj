
<html>

<head>
<!-- color-cord 
blue #311093
gray #F7F6D9
white #EEEDE2
gold #E7E586
-->
<title></title>
<meta http-equiv="content-type" content="text/html" charset="utf-8" />
<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"
	type="text/javascript">
</script>
<script type="text/javascript"
	src="/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE
			.init({
				// General options
				mode : "textareas",
				theme : "advanced",
				plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

				// Theme options
				theme_advanced_buttons1 : "preview,|,undo,redo,|,bold,italic,underline,strikethrough,|,forecolor,backcolor,|,justifyleft,justifycenter,justifyright,justifyfull,|,formatselect,fontselect,fontsizeselect,|,bullist,numlist,|,outdent,indent,blockquote,|,search",
				//theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
				//theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
				//theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
				theme_advanced_toolbar_location : "top",
				theme_advanced_toolbar_align : "center",
				theme_advanced_statusbar_location : "bottom",
				theme_advanced_resizing : true,

				// Skin options
				skin : "o2k7",
				skin_variant : "silver",

				// Example content CSS (should be your site CSS)
				content_css : "css/example.css",

				// Drop lists for link/image/media/template dialogs
				template_external_list_url : "js/template_list.js",
				external_link_list_url : "js/link_list.js",
				external_image_list_url : "js/image_list.js",
				media_external_list_url : "js/media_list.js",

				// Replace values for the template plugin
				template_replace_values : {
					username : "Some User",
					staffid : "991234"
				}
			});
</script>

<style>
body {
	background-color: black;
	display: block;
}

div {
	display: block;
}

#container,#pageHeader,#boundaryLine,#pageBody {
	padding: 5px;
	width: 1300px;
	margin: 0 auto;
}

#pageHeader {
	height: 40px;
	background-color: #311093;
}

#boundaryLine {
	height: 0.5px;
	background-color: #E7E586;
}

#pageBody {
	float: left;
	position: relative;
	height: 580px;
	background-color: #EEEDE2;
	position: relative;
}

#leftContents {
	float: left;
	position: relative;
	width: 823px;
	height: 570px;
	margin-left: 1px;
	background-color: white;
}

#midContents {
	float: left;
	position: relative;
	width: 20px;
	height: 570px;
	margin-left: 1px;
	padding: 0;
	background-color: #EEEDE2;
}

#rightContents {
	float: left;
	position: relative;
	width: 440px;
	height: 570px;
	margin-left: 1px;
	background-color: white;
}

#text_container {
	width: 100%;
	height: 100%;
	background-color : red;
}

#textTitle {
	width: 100%;
	height: 100%;
	
/* 	border-color:red; */
/* 	background-color: red; */
/* 	border: none; */
	/* -moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	padding: 25px;
	text-align: center;
	font: 20pt bold, "Vollkorn";
	color: #BBB;
	 */
}

#toggleBtn {
	position: absolute;
	top: 40%;
	width: 100%;
	height: 100px;
	top: 40%;
}

#rightContentsHeader {
	position: relative;
	height: 50px;
	margin: 0;
	padding: 0;
	background-color: #EEEDE2;
}

#rightContentsBody {
	position: relative;
	height: 520px;
	margin: 0;
	padding: 0;
}

.menuBtn {
	margin: 0;
	padding: 0;
	width: 100px;
	height: 50px;
	border-style: none;
	background-color: #EEEDE2;
	font-style: bold;
	font-size: 1.2em;
}

#imageBtn {
	background-color: white;
}

#movieBtn {
	
}

#etcBtn {
	
}
/* upload css */
#drop_zone {
	border: 2px dashed #BBB;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	padding: 25px;
	text-align: center;
	font: 20pt bold, "Vollkorn";
	color: #BBB;
	margin-top: 20px;
	background-color: green;
}

.thumb {
	height: 75px;
	width: auto;
	border: 1px solid #000;
	margin: 10px 5px 0 0;
	background-color: red;
}
</style>




<script type="text/javascript">
flag =  0;
$(document).ready(function(){
		$("#toggleBtn").click(function(){ 
		
		//if($("#rightContents").width() == 0){
			if(flag == 1){
		$("#container").css('width','1300px'); 
		$("#pageHeader").css('width','1300px');
		$("#boundaryLine").css('width','1300px');
		$("#pageBody").css('width','1300px');
		//$("#rightContents").css('width','24em');
		//$("#midContents").css('left','860px');
		$("#rightContents").show();
			//$("#toggleBtn").css('left','860px');
			//$("#imageBtn").show();
			//$("#movieBtn").show();
			//$("#etcBtn").show();
			flag=0;
		}else {
			flag=1;
			$("#container").css('width','845px'); 
			$("#pageHeader").css('width','845px');
			$("#boundaryLine").css('width','845px');
			$("#pageBody").css('width','845px');
			//alert($(document).width());
		//	var size = ( $(document).width() - $("#container").width() ) /2;
			//$("#rightContents").css('width','0em');
			//alert($("#pageBody").right());
	//		$("#midContents").css('right',$("#pageBody").width()+'px');
			$("#rightContents").hide();
		//$("#imageBtn").hide();
		//$("#movieBtn").hide();
		//$("#etcBtn").hide();
		}
	})
	$("#imageBtn").click(function(){
		$(this).css('background-color','white');
		$("#movieBtn").css('background-color','#EEEDE2');
		$("#etcBtn").css('background-color','#EEEDE2');
		
	})
	$("#movieBtn").click(function(){
		$(this).css('background-color','white');//#EEEDE2
		$("#imageBtn").css('background-color','#EEEDE2');
		$("#etcBtn").css('background-color','#EEEDE2');
		})
	$("#etcBtn").click(function(){
		$(this).css('background-color','white');//#EEEDE2
		$("imageBtn").css('background-color','#EEEDE2');
		$("#movieBtn").css('background-color','#EEEDE2');
		})
		/*		file upload		*/
		function handleFileSelect(evt) {
			evt.stopPropagation();
		    evt.preventDefault();

		    var files = evt.dataTransfer.files; // FileList object.

		    // files is a FileList of Fisudo /etc/init.d/apache2 restartle objects. List some properties.
		    var output = [];
		    for (var i = 0, f; f = files[i]; i++) {
		    	var reader = new FileReader();
		        // Closure to capture the file information.
		        reader.onload = (function(theFile) {
		          return function(e) {
		            // Render thumbnail.
		            var span = document.createElement('span');
		            span.innerHTML = ['<img class="thumb" src="', e.target.result,
		                              '" title="', escape(theFile.name), '"/>'].join('');
		            document.getElementById('list').insertBefore(span, null);

		            alert(escape(theFile.name));
		          };
		        })(f);
		        // Read in the image file as a data URL.
		        reader.readAsData;
		    }
		  }

		  function handleDragOver(evt) {
		    evt.stopPropagation();
		    evt.preventDefault();
		    evt.dataTransfer.dropEffect = 'copy'; // Explicitly show this is a copy.
		  }
		  // Setup the dnd listeners.
		  var dropZone = document.getElementById('drop_zone');
		  dropZone.addEventListener('dragover', handleDragOver, false);
		  dropZone.addEventListener('drop', handleFileSelect, false);
		





		});

		

</script>

</head>
<body>
	<div id="container">

		<div id="pageHeader"></div>
		<div id="boundaryLine"></div>
		<div id="pageBody">
			<div id="leftContents">
				<div id="text_container">
					<form method="post" action="somepage">
						<textarea id="textTitle" name="content"></textarea>
					</form>
				</div>
			</div>
			<div id="midContents">
				<input type="button" id="toggleBtn" value="+">
			</div>
			<div id="rightContents">
				<div id="rightContentsHeader">
					<input type="button" class="menuBtn" id="imageBtn" value="Image"> 
					<input type="button" class="menuBtn" id="movieBtn" value="Movie"> 
					<input	type="button" class="menuBtn" id="etcBtn" value="Etc">
				</div>
				<div id="rightContentsBody">

					<div id="drop_zone">Drop files here</div>
					<output id="list"></output>

				</div>
			</div>
		</div>
	</div>
</body>

</html>