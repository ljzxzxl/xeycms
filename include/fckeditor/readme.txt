�������վ��http://localhost/ictech/
һ������˵��:
ɾ������"_"��ͷ���ļ����ļ���
ɾ�����԰��г����ĺ�Ӣ�����������
ɾ��skinĿ¼�³�Ĭ��Ƥ��������ļ���
filemanager/browser/default/connectors/Ŀ¼�³�php������ļ�
filemanager/upload/Ŀ¼�³�php������ļ�


��������˵��:
��Fckeditor ��ı����ļ���������վ��Ŀ¼�ļ������/ictech/��
/fcktemplates.xml
/fckstyles.xml
/fckeditor_php5.php
/fckeditor_php4.php
/fckeditor.php
/fckeditor.js
/fckconfig.js
/editor/
fckeditor.php :
BasePathΪĬ��Fckeditor��Ŀ¼,Ҳ�����ڵ��õ�ʱ��ָ��.

����\fckconfig.js ����ʶ�����ã�

FCKConfig.AutoDetectLanguage	= false ; //61�� �ر��Զ�����ʶ��
FCKConfig.DefaultLanguage		= 'zh-cn' ; //62�� ѡ�� zh-cn

�ġ��ϴ����ã�
\editor\filemanager\browser\default\connectors\php\config.php:

$Config['Enabled'] = true ;// 30�� �Ƿ������ϴ�

$Config['UserFilesPath'] = '/ictech/userfiles/' ; //33�� Ĭ���ϴ�·�������Ը��ĵ���������Ӧ��Ŀ¼�½�������Ƶ�Ŀ¼��




�ġ��ϴ��ļ����������Ϊ 201447202465.jpg 
�޸�fckeditor/editor/filemanager/connectors/php/commands.php
   1.��һ����Ӻ��� [24��]
function GetRandID($prefix) {
    //��һ��:��ʼ������
      //microtime(); �Ǹ�����
     $seedstr =split(" ",microtime(),5);
     $seed =$seedstr[0]*10000;
   //�ڶ���:ʹ�����ӳ�ʼ�������������
     srand($seed);
   //������:����ָ����Χ�ڵ������
     $random =rand(1,10000);

     $filename = date("dHis", time()).$random.'.'.$prefix;

     return $filename;
}

2.[204��]Ӧ�ú���
    �ں���function FileUpload( $resourceType, $currentFolder, $sCommand ) �е�if ( isset( $Config['SecureImageUploads'] ) )[��204]����һ�����
     $sOriginalFileName = $sFileName = GetRandID($sExtension);

�������
    
�塢php�ļ�Ӧ�� ����
http://localhost/ictech/fadd.php   
<?php
include("fckeditor.php");
$sBasePath="/ictech/";//�༭������Ŀ¼
$oFCKeditor=new FCKeditor('fileinfo'); // ����һ��fckeditor����
$oFCKeditor->BasePath=$BasePath;
$oFCKeditor->Value=$fileinfo; // ���ñ���ʼֵ
$oFCKeditor->Create(); // �������з���������
?>