/**
 * @license Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	config.language = 'en';
    	config.defaultLanguage = 'en';
	// Define changes to default configuration here.
	// For the complete reference:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	//config.plugins = 'dialogui,dialog,a11yhelp,basicstyles,blockquote,clipboard,panel,floatpanel,menu,contextmenu,resize,button,toolbar,elementspath,list,indent,enterkey,entities,popup,filebrowser,floatingspace,listblock,richcombo,format,htmlwriter,horizontalrule,image,fakeobjects,link,magicline,maximize,pastetext,pastefromword,removeformat,sourcearea,specialchar,menubutton,scayt,stylescombo,tab,table,tabletools,undo,wsc,panelbutton,colorbutton,colordialog,templates';
	//config.skin = 'moono';

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
		//{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		// On the basic preset, clipboard and undo is handled by keyboard.
		// Uncomment the following line to enable them on the toolbar as well.
		// { name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'forms' },
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align' ] },
		//{ name: 'links' },
		//{ name: 'insert' },
		//{ name: 'styles' },
		{ name: 'colors' },
		//{ name: 'tools' },
		//{ name: 'others' }
	];
	/*
	config.filebrowserBrowseUrl = '/_cms/page/browse';
	config.filebrowserImageBrowseUrl = '/_cms/document/browse';
	config.filebrowserImageBrowseLinkUrl = '/_cms/page/browse';

*/
	//Routing.generate('caravane_cms_admin_document_browse')
	
	/*config.filebrowserBrowseUrl = Routing.generate('caravane_cms_admin_document_browse');
	config.filebrowserImageBrowseUrl = Routing.generate('caravane_cms_admin_document_browse');
	config.filebrowserImageBrowseLinkUrl = Routing.generate('caravane_cms_admin_page_browse');
    config.filebrowserWindowWidth  = 800;
    config.filebrowserWindowHeight = 500;
    */
	// Remove some buttons, provided by the standard plugins, which we don't
	// need to have in the Standard(s) toolbar.
	config.removeButtons = 'Anchor,Underline,Strike,Subscript,Superscript';

	config.forcePasteAsPlainText = true;

	// Let's have it basic on dialogs as well.
	config.removeDialogTabs = 'link:advanced';




};
