<?PHP 
$CONFIGURATION=0;

// CODE NON PARAMETRABLE
global $DOCUMENTS_IMG_LOGO;
$DOC_STANDARD['IMG_LOGO']	= $DOCUMENTS_IMG_LOGO;

$DOC_STANDARD['AFF_REMISES']	= $AFF_REMISES;

$DOC_STANDARD['HAUTEUR_LINE_ARTICLE']			= 5;
$DOC_STANDARD['HAUTEUR_LINE_TAXE']				= 5;
$DOC_STANDARD['HAUTEUR_LINE_INFORMATION']	= 5;
$DOC_STANDARD['HAUTEUR_LINE_SOUSTOTAL']		= 5;
$DOC_STANDARD['HAUTEUR_LINE_DESCRIPTION']	= 5;
$DOC_STANDARD['HAUTEUR_LINE_VIDE']				= 1;

$DOC_STANDARD['HAUTEUR_AFTER_LINE_ARTICLE']			= 0;
$DOC_STANDARD['HAUTEUR_AFTER_LINE_TAXE']				= 0;
$DOC_STANDARD['HAUTEUR_AFTER_LINE_INFORMATION']	= 0;
$DOC_STANDARD['HAUTEUR_AFTER_LINE_SOUSTOTAL']		= 0;
$DOC_STANDARD['HAUTEUR_AFTER_LINE_DESCRIPTION']	= 0;

$DOC_STANDARD['ENTETE_COL_REF'] = "R�f�rence";
$DOC_STANDARD['ENTETE_COL_DES'] = "D�signation";
$DOC_STANDARD['ENTETE_COL_QTE'] = "Qt�";
$DOC_STANDARD['ENTETE_COL_PU']  = "PU ".$this->app_tarifs;
$DOC_STANDARD['ENTETE_COL_REM'] = "Rem.";
$DOC_STANDARD['ENTETE_COL_PT']  = "Montant";
$DOC_STANDARD['ENTETE_COL_TVA'] = "TVA";

$DOC_STANDARD['LARGEUR_COL_REF'] = 30;
$DOC_STANDARD['LARGEUR_COL_LIB'] = 75;
$DOC_STANDARD['LARGEUR_COL_QTE'] = 10;
$DOC_STANDARD['LARGEUR_COL_PRI'] = 20;
$DOC_STANDARD['LARGEUR_COL_REM'] = 15;
$DOC_STANDARD['LARGEUR_COL_TVA'] = 10;

// ***************************************************
// POSITION DES BLOCS
$DOC_STANDARD['MARGE_GAUCHE'] = 15;
$DOC_STANDARD['MARGE_HAUT']		= 15;

// CORPS DU DOCUMENT
$DOC_STANDARD['CORPS_HAUTEUR_DEPART']	= 100;
$DOC_STANDARD['CORPS_HAUTEUR_MAX']		= 130;

// PIEDS DE PAGE
$DOC_STANDARD['PIEDS_HAUTEUR_DEPART']	= 240;
$DOC_STANDARD['PIEDS_HAUTEUR_MAX']		= 32;

// ***************************************************
// TEXTES DE PIEDS DE PAGE
global $PIED_DE_PAGE_GAUCHE_0;
global $PIED_DE_PAGE_GAUCHE_1;
global $PIED_DE_PAGE_DROIT_0;
global $PIED_DE_PAGE_DROIT_1;
$DOC_STANDARD['PIEDS_GAUCHE'][0]	= $PIED_DE_PAGE_GAUCHE_0;
$DOC_STANDARD['PIEDS_GAUCHE'][1]	= $PIED_DE_PAGE_GAUCHE_1;
$DOC_STANDARD['PIEDS_DROIT'][0]	=  $PIED_DE_PAGE_DROIT_0;
$DOC_STANDARD['PIEDS_DROIT'][1]	= $PIED_DE_PAGE_DROIT_1;

//variable//type de champ(parametre)//lib�ll�//commentaire
// PARAMETRES MODIFIABLES
$DOC_STANDARD['TEXTE_CORPS_PIEDS'][0]="Le client d�clare commander dans le magasin de mani�re ferme et d�finitive les articles indiqu�s ci-dessus et reconnait avoir pris connaissance des CGV";//TXTE()// Texte entre corps et pied de page//ligne n�1
$DOC_STANDARD['TEXTE_CORPS_PIEDS'][1]="r�guli�rement affich�es en magasin et disponible sur le site internet, dont j'accepte les termes sans exception ni r�serve.";//TXTE()// Texte entre corps et pied de page//ligne n�2
$DOC_STANDARD['TEXTE_CORPS_PIEDS'][2]="";//TXTE()// Texte entre corps et pied de page//ligne n�3
// FIN PARAMETRES MODIFIABLES
// CONFIGURATION PAR DEFAUT
// Portion de code recopi�e dans la partie ��param�tres modifiables�� en cas de remise � 0 des param�tres.
/*
$DOC_STANDARD['TEXTE_CORPS_PIEDS'][0]	= "Le client d�clare commander dans le magasin de mani�re ferme et d�finitive les articles indiqu�s ci-dessus et reconnais avoir pris connaissance des CGV";//TXTE()// Texte entre corps et pied de page//ligne n�1
$DOC_STANDARD['TEXTE_CORPS_PIEDS'][1]	= "r�guli�rement affich�es en magasin et disponible sur le site internet, dont j'accepte les termes sans exception ni r�serve.";//TXTE()// Texte entre corps et pied de page//ligne n�2
$DOC_STANDARD['TEXTE_CORPS_PIEDS'][2]	= "";//TXTE()// Texte entre corps et pied de page//ligne n�3
*/
// FIN CONFIGURATION PAR DEFAUT
// INFORMATIONS SUR L�AUTEUR
/* 
*/
?>