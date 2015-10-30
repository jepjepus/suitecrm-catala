<?php

$mod_strings = array (
  'LBL_ALL_MODULES'=>'Tot',//rost fix
  'LBL_ASSIGNED_TO_ID' => 'ID Usuari Assignat',
  'LBL_ASSIGNED_TO_NAME' => 'Assignat a',
  'LBL_ID' => 'ID',
  'LBL_DATE_ENTERED' => 'Data de Creació',
  'LBL_DATE_MODIFIED' => 'Última Modificació',
  'LBL_MODIFIED' => 'Modificat Per',
  'LBL_MODIFIED_ID' => 'Modificat per Id',
  'LBL_MODIFIED_NAME' => 'Modificat per Nom',
  'LBL_CREATED' => 'Creat Per',
  'LBL_CREATED_ID' => 'Creat per Id',
  'LBL_DESCRIPTION' => 'Descripció',
  'LBL_DELETED' => 'Esborrat',
  'LBL_NONINHERITABLE' => 'No heretable',
  'LBL_LIST_NONINHERITABLE' => 'No heretable',
  'LBL_NAME' => 'Nom',
  'LBL_CREATED_USER' => 'Creat per Usuari',
  'LBL_MODIFIED_USER' => 'Modificat per Usuari',
  'LBL_LIST_FORM_TITLE' => 'Grups de Seguretat',
  'LBL_MODULE_NAME' => 'Administració de Grups de Seguretat',
  'LBL_MODULE_TITLE' => 'Administració de Grups de Seguretat',
  'LNK_NEW_RECORD' => 'Crear un grup de seguretat',
  'LNK_LIST' => 'Vista de Llista',
  'LBL_SEARCH_FORM_TITLE' => 'Cerca en administració de grups de seguretat',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Històrial',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activitats',
  'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Administració de Grups de Seguretat',
  'LBL_USERS' => 'Usuaris',
  'LBL_USERS_SUBPANEL_TITLE' => 'Usuaris',
  'LBL_ROLES_SUBPANEL_TITLE' => 'Rols',
  
  'LBL_CONFIGURE_SETTINGS' => 'Configurar',
  'LBL_ADDITIVE' => 'Privilegis agregats',
  'LBL_ADDITIVE_DESC' => "L'usuari té els majors privilegis de tots els rols i grups assignats a ell.",
  'LBL_STRICT_RIGHTS' => 'drets estrictes',
  'LBL_STRICT_RIGHTS_DESC' => "Si un usuari és membre de diversos grups s'utilitzen només els drets respectius del grup assignat al registre actual.",
  'LBL_USER_ROLE_PRECEDENCE' => 'Procedència del rol d\'usuari',
  'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Si qualsevol rol és assignat a l\'usuari directament, aquest tindrà precedència sobre qualsevol rol de grup.',
  'LBL_INHERIT_TITLE' => 'Normes d\'herència de grup',
  'LBL_INHERIT_CREATOR' => 'Hereda de l\'usuari que el va crear',
  'LBL_INHERIT_CREATOR_DESC' => 'El registre heretarà tots els grups assignats a l\'usuari que el va crear.',
  'LBL_INHERIT_PARENT' => 'Hereta del registre pare.',
  'LBL_INHERIT_PARENT_DESC' => 'Ex: Si un cas és creat per un contacte, el cas heretarà el/els grups associats amb el contacte.',
  'LBL_USER_POPUP' => 'Finestra de nou usuari de grup',
  'LBL_USER_POPUP_DESC' => 'Quan es crea un nou usuari, mostra una finestra de grups de seguretat per a assignar l\'usuari a grup(s).',
  'LBL_INHERIT_ASSIGNED' => 'Heretar d\'usuari assignat',
  'LBL_INHERIT_ASSIGNED_DESC' => 'El registre heretarà tots els grups de l\'usuari assignat al registre. D\'altres grups assignats al registre no seran eliminats.',
  'LBL_POPUP_SELECT' => 'utilitzar el creador de sel·lecció de grups',
  'LBL_POPUP_SELECT_DESC' => 'Quan un registre es crea per un usuari en més d\'un grup, es mostra un panell de selecció de grups a la pantalla de creació. En cas contrari hereta d\'aquest grup.',
  'LBL_FILTER_USER_LIST' => 'Filtrar la llista d\'usuaris',
  'LBL_FILTER_USER_LIST_DESC' => "Els usuaris no administradors només poden assignar els usuaris als mateixos grup(s)",  
  
  'LBL_DEFAULT_GROUP_TITLE' => 'Grup per defecte per a nous registres',
  'LBL_ADD_BUTTON_LABEL' => 'Afegir',
  'LBL_REMOVE_BUTTON_LABEL' => 'Treure',
  'LBL_GROUP' => 'Grup:',
  'LBL_MODULE' => 'Mòdul:',
  
  'LBL_MASS_ASSIGN' => 'Grups de seguretat: Assignació massiva',
  'LBL_ASSIGN' => 'Assignar',
  'LBL_REMOVE' => 'Treure',
  'LBL_ASSIGN_CONFIRM' => 'Està segur que vol agregar aquest grup de',
  'LBL_REMOVE_CONFIRM' => 'Està segur que vol eliminar aquest grup de',
  'LBL_CONFIRM_END' =>'registre(s) seleccionats?',
  
  'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'Grup de seguretat/Usuari',
  'LBL_USER_NAME' => 'Nom d\'Usuari',
  'LBL_SECURITYGROUP_NAME' => 'Nom del grup de seguretat',
  'LBL_LIST_USER_NONINHERITABLE' => 'No heretable',
  'LBL_HOMEPAGE_TITLE' => 'Missatges del grup',
  'LBL_TITLE' => 'Títol',
  'LBL_ROWS' => 'Files',
  'LBL_MAKE_POST' => 'Fer un Post',
  'LBL_POST' => 'Enviar',
  'LBL_SELECT_GROUP' => 'Seleccionar un grup',
  'LBL_SELECT_GROUP_ERROR' => 'Si us plau, seleccioni un grup i torni-ho a provar.',
  
  'LBL_HOOKUP_SELECT' => "Seleccioni un mòdul",
  'LBL_HOOKUP_CONFIRM_PART1' => "Està a punt d'afegir una relació entre els grups de seguretat i",
  'LBL_HOOKUP_CONFIRM_PART2' => ". Continuar?",
  
  'LBL_GROUP_SELECT' => 'Seleccionar els grups que han de tenir accés a aquest registre',
  'LBL_ERROR_DUPLICATE' => 'Degut a un possible duplicat detectat per SuiteCRM vostè haurà d\'agregar manualment els grups de seguretat del seu registre recient creat.',

  'LBL_INBOUND_EMAIL' => 'Compta de correu electrònic entrant',
  'LBL_INBOUND_EMAIL_DESC' => 'Només permetre l\'accés a una compta de correu electrònic si l\'usuari pertany a un grup que s\'assigna a la compta de correu.',
  'LBL_PRIMARY_GROUP' => 'Grup principal',

);
?>