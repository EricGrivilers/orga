<?php
include('config.inc.php');
include(__lib__."init.inc.php");


require_once(__lib__."elements/job/clsJob.inc.php");
require_once(__lib__."elements/tent/clsTent.inc.php");
require_once(__lib__."elements/user/clsUser.inc.php");
require_once(__lib__."elements/planning/clsPlanning.inc.php");
require_once(__lib__."elements/dashboard/clsDashboard.inc.php");
require_once(__lib__."elements/client/clsClient.inc.php");
require_once(__lib__."elements/offre/clsOffre.inc.php");
require_once(__lib__."elements/invoice/clsInvoice.inc.php");





switch($_GET['action']) {
	default:
		die();
	break;
	
	case "getVat":
		$client=new Client;
		$client->name=$_GET['name'];
		echo $client->getVat();
	break;
	
	case "editTent":
		$tent=new Tent;
		$tent->tentId=$_GET['tentId'];
		echo $tent->editTent();
	break;
	
	
	
	case "saveTent":
		$tent=new Tent;
		$tent->datas=$_POST;
		$tent->saveTent();
	break;
	
	case "deleteTent":
		$tent=new Tent;
		$tent->tentId=$_GET['tentId'];
		$tent->deleteTent();
	break;
	
	case "filterTent":
		$tDate=explode("/",$_GET['fromDate']);
		$_GET['fromDate']=$tDate[2].'-'.$tDate[1].'-'.$tDate[0];
		$tDate=explode("/",$_GET['toDate']);
		$_GET['toDate']=$tDate[2].'-'.$tDate[1].'-'.$tDate[0];
		$tent=new Tent;
		$tent->tentId=$_GET['tentId'];
		$tent->fromDate=str_replace('--','',$_GET['fromDate']);
		$tent->toDate=str_replace('--','',$_GET['toDate']);
		echo $tent->display();
	break;
	
	case "editClient":
		$client=new Client;
		$client->clientId=$_GET['clientId'];
		echo $client->editClient();
	break;
	
	case "saveClient":
		$client=new Client;
		$client->datas=$_POST;
		$client->clientId=$_POST['clientId'];
		$client->saveClient();
	break;
	
	case "deleteClient":
		$client=new Client;
		$client->clientId=$_GET['clientId'];
		$client->deleteClient();
	break;
	
	case 'removeClientTents':
		$client=new Client;
		$client->clientId=$_GET['clientId'];
		echo $client->removeClientTents();
	break;
	
	case "getAFClient":
		$client=new Client;
		echo $client->getAFClient();
	break;
	
	
	
	case 'fillAFClient':
		$client=new Client;
		$client->clientId=$_GET['clientId'];
		echo $client->clientForm();
	break;
	
	case "fillAFAddress":
		$client=new Client;
		$client->clientId=$_GET['clientId'];
		echo $client->addressForm();
	break;
	
	
	
/*$invoice*/

	case "saveInvoice":
		$inv=new invoice;
		$inv->datas=$_POST;
		$inv->invoiceId=$_POST['invoiceId'];
		$inv->saveInvoice();
	break;
	
		
	case 'createInvoice':
		$inv=new invoice;
		$inv->jobId=$_GET['jobId'];
		$inv->sliceId=$_GET['sliceId'];
		$inv->createInvoice();
	break;
	
	case 'askInvoice':
		$inv=new invoice;
		$inv->jobId=$_GET['jobId'];
		$inv->slice=$_GET['slice'];
		$inv->askInvoice();
	break;
	
	

/*job*/
	case "editJob":
		$job=new Job;
		$job->jobId=$_GET['jobId'];
		echo $job->editJob();
	break;
	
	case "saveJob":
		$job=new Job;
		$job->datas=$_POST;
		$job->jobId=$_POST['jobId'];
		$job->saveJob();
	break;
	
	case "deleteJob":
		$job=new Job;
		$job->jobId=$_GET['jobId'];
		$job->deleteJob();
	break;
	
	case 'uncloseJob':
		$job=new Job;
		$job->jobId=$_GET['jobId'];
		$job->uncloseJob();
	break;

/*$offre*/

	case "editOffre":
		$offre=new Offre;
		$offre->offreId=$_GET['offreId'];
		echo $offre->editOffre();
	break;
	
	case "saveOffre":
		$offre=new Offre;
		//print_r($_POST);
		$offre->datas=$_POST;
		$offre->offreId=$_POST['offreId'];
		$offre->saveOffre();
	break;
	
	case "deleteOffre":
		$offre=new Offre;
		$offre->offreId=$_GET['offreId'];
		$offre->deleteOffre();
	break;
	
	case 'getOffreClient':
		$offre=new Offre;
		$offre->clientId=$_GET['clientId'];
		echo $offre->getOffreClient();
	break;
	
	case "getOffreAddress":
		$offre=new Offre;
		$offre->clientId=$_GET['clientId'];
		echo $offre->getOffreAddress();
	break;
	
	case 'createOffreFromClient':
		$offre=new Offre;
		$offre->clientId=$_GET['clientId'];
		echo $offre->newOffre();
	break;
	
	
/*user*/
	case "editUser":
		$user=new User;
		$user->userId=$_GET['userId'];
		echo $user->editUser();
	break;
	
	case "saveUser":
		$user=new User;
		$user->datas=$_POST;
		$user->saveUser();
	break;
	
	case "deleteUser":
		$user=new User;
		$user->userId=$_GET['userId'];
		$user->deleteUser();
	break;
	
	
	
	
	case 'chatMessage':
		$dashboard=new Dashboard;
		$dashboard->message=$_GET['message'];
		//$dashboard->content='';
		echo $dashboard->getChat();
		//echo $dashboard->content;
	break;
	
	
	case 'createPassword':
		$user=new User;
		$user->userId=$_GET['userId'];
		echo $user->createPassword();
		
	break;
	
	case 'uploadFile':
		$job=new Job;
		$job->jobId=$_GET['jobId'];
		$job->uploadFile();
	break;
	
	
	case "autoFillClients":
		$client=new Client;
		$client->clientType=$_GET['type'];
		$client->searchfor=$_GET['term'];
		$client->autoFillClients();
	break;
	

	
	case "getAgenda":
		
		$calendar=new planning;
		$calendar->userId=$_GET['userId'];
		//$calendar->getCalendar();
		$calendar->getDates();
	break;
	
	case 'exportPlanning':
		$calendar=new planning;
		$calendar->userId=$_GET['userId'];
		
		//$calendar->getCalendar();
		$calendar->exportPlanning();
	break;
	
	case "saveEvent":
		$calendar=new planning;
		$calendar->planningId=$_GET['planningId'];
		//$calendar->type=$_GET['type'];
		$calendar->estart=$_GET['start'];
		$calendar->eend=$_GET['end'];
		$calendar->savePlanning();
	break;
	
	case "getPlanningComments":
		$calendar=new planning;
		$calendar->jobId=$_GET['jobId'];
		
		$calendar->getPlanningComments();
	break;
	
	case 'savePlanningComments':
		$calendar=new planning;
		$calendar->jobId=$_GET['jobId'];
		
		$calendar->savePlanningComments();
	break;
	
	
	case 'deleteDocument':

		//	utils::deleteDocument($_POST['path']);	

		echo utils::deleteDocument($_POST['type'],$_POST['id'],$_POST['path']);	

	break;
	
	
	case 'createRappel':
		$inv=new invoice;
		$inv->invoiceId=$_GET['invoiceId'];
		$inv->rn=$_GET['rn'];
		$inv->createRappel();
	break;
	
	
	
}
?>