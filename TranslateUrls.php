<?php
	// test git 2
	define('USER_', 'op3');
	define('CROSS_PAGE_MESSAGE_', 'xu6');
	define('IS_MOBILE_', 'vk1');
	define('APP_CURRENT_VERSION_', '9');
	

	switch ($_SERVER['REQUEST_URI']) {
		
		case '/iv0':
			
			$requestPath = '/communities'.'/getUserC'.'ommunitiesList';

			
			$requestRule = (object)array(

				'requestName' => 'getUserCommunitiesList__',
				'permit' => 10,	//10
				'period' => 10,	//10
				'lockPeriod' => 60, //60
				'displayLockPeriod' => '2 minutes'
			);

			break;

		case '/vz2':
			
			$requestPath = '/communities'.'/createC'.'ommunity';

			$requestRule = (object)array(

				'requestName' => 'createCommunity__',
				'permit' => 2,
				'period' => 10,
				'lockPeriod' => 1200,
				'displayLockPeriod' => '30 minutes'
			);

			break;	
			
		case '/jz1':
			
			$requestPath = '/communities'.'/communityUs'.'ersSearch';

			$requestRule = (object)array(

				'requestName' => 'communityUsersSearch__',
				'permit' => 7,
				'period' => 10,
				'lockPeriod' => 60,
				'displayLockPeriod' => '2 minutes'
			);

			break;	

		case '/br0':
			
			$requestPath = '/communities'.'/invit'.'eUser';

			$requestRule = (object)array(

				'requestName' => 'inviteUser__',
				'permit' => 5,
				'period' => 10,
				'lockPeriod' => 60,
				'displayLockPeriod' => '2 minutes'
			);

			break;	

		case '/zw9':
			
			$requestPath = '/communities'.'/proceedPen'.'dingRequest';

			$requestRule = (object)array(

				'requestName' => 'proceedPendingRequest__',
				'permit' => 30,
				'period' => 20,
				'lockPeriod' => 60,
				'displayLockPeriod' => '2 minutes'
			);

			break;	

		case '/ix3':
			
			$requestPath = '/communities'.'/cancelInv'.'intation';

			$requestRule = (object)array(

				'requestName' => 'cancelInvintation__',
				'permit' => 30,
				'period' => 20,
				'lockPeriod' => 60,
				'displayLockPeriod' => '2 minutes'
			);

			break;	

		case '/rb8':
			
			$requestPath = '/communities'.'/deleteCom'.'munityUser';

			$requestRule = (object)array(

				'requestName' => 'deleteCommunityUser__',
				'permit' => 30,
				'period' => 20,
				'lockPeriod' => 60,
				'displayLockPeriod' => '2 minutes'
			);

			break;	
		
		case '/kb1':
			
			$requestPath = '/communities'.'/getComm'.'unityData';

			$requestRule = (object)array(

				'requestName' => 'getCommunityData__',
				'permit' => 25,
				'period' => 30,
				'lockPeriod' => 600,
				'displayLockPeriod' => '20 minutes'
			);

			break;

		case '/hm7':
			
			$requestPath = '/communities'.'/exitCo'.'mmunity';

			$requestRule = (object)array(

				'requestName' => 'exitCommunity__',
				'permit' => 25,
				'period' => 30,
				'lockPeriod' => 600,
				'displayLockPeriod' => '20 minutes'
			);

			break;
		
		case '/gx1':
			
			$requestPath = '/communities'.'/delet'.'eCommunity';

			$requestRule = (object)array(

				'requestName' => 'deleteCommunity__',
				'permit' => 25,
				'period' => 30,
				'lockPeriod' => 600,
				'displayLockPeriod' => '20 minutes'
			);

			break;

		case '/ju9':
			
			$requestPath = '/communities'.'/updateComm'.'unityTitle';

			$requestRule = (object)array(

				'requestName' => 'updateCommunityTitle__',
				'permit' => 40,
				'period' => 30,
				'lockPeriod' => 60,
				'displayLockPeriod' => '2 minutes'
			);

			break;	

		case '/pq3':
			
			$requestPath = '/communities'.'/updateCommu'.'nityDescription';

			$requestRule = (object)array(

				'requestName' => 'updateCommunityDescription__',
				'permit' => 40,
				'period' => 30,
				'lockPeriod' => 60,
				'displayLockPeriod' => '2 minutes'
			);

			break;	

		case '/hj2':
			
			$requestPath = '/communities'.'/sortUse'.'rCommunities';

			$requestRule = (object)array(

				'requestName' => 'sortUserCommunities__',
				'permit' => 10,
				'period' => 10,
				'lockPeriod' => 60,
				'displayLockPeriod' => '2 minutes'
			);

			break;	

		case '/xj1':
			
			$requestPath = '/rectangle'.'/cr'.'eate';

			$requestRule = (object)array(

				'requestName' => 'createRectange__',
				'permit' => 20,
				'period' => 20,
				'lockPeriod' => 60,
				'displayLockPeriod' => '2 minutes'
			);

			break;	

		case '/bv0':
			
			$requestPath = '/fant'.'/repla'.'ceFants';

			$requestRule = (object)array(

				'requestName' => 'replaceFants__',
				'permit' => 20,
				'period' => 20,
				'lockPeriod' => 60,
				'displayLockPeriod' => '2 minutes'
			);

			break;	
		
		case '/rn9':
			
			$requestPath = '/fant'.'/getI'.'tem';

			$requestRule = (object)array(

				'requestName' => 'getFantItem__',
				'permit' => 20,
				'period' => 20,
				'lockPeriod' => 300,
				'displayLockPeriod' => '10 minutes'
			);

			break;	

		case '/as7':
			
			$requestPath = '/fant'.'/sav'.'eItem';

			$requestRule = (object)array(

				'requestName' => 'saveFantItem__',
				'permit' => 10,
				'period' => 20,
				'lockPeriod' => 300,
				'displayLockPeriod' => '5 minutes'
			);

			break;	
			
		case '/wg5':
			
			$requestPath = '/fant'.'/dele'.'teItem';

			$requestRule = (object)array(

				'requestName' => 'deleteFantItem__',
				'permit' => 10,
				'period' => 20,
				'lockPeriod' => 300,
				'displayLockPeriod' => '10 minutes'
			);

			break;	

		case '/nd9':
			
			$requestPath = '/fant'.'/checkIns'.'taImage';

			$requestRule = (object)array(

				'requestName' => 'checkInstaImage__',
				'permit' => 5,
				'period' => 10,
				'lockPeriod' => 60,
				'displayLockPeriod' => '2 minutes'
			);

			break;	

		case '/ee4':
			
			$requestPath = '/login'.'/addN'.'ewUser';

			$requestRule = (object)array(

				'requestName' => 'addNewUser__',
				'permit' => 20,
				'period' => 20,
				'lockPeriod' => 60,
				'displayLockPeriod' => '2 minutes'
			);

			break;	
			
		case '/tl9':
			
			$requestPath = '/login'.'/fbL'.'ogin';

			$requestRule = (object)array(

				'requestName' => 'fbLogin__',
				'permit' => 20,
				'period' => 20,
				'lockPeriod' => 60,
				'displayLockPeriod' => '2 minutes'
			);

			break;	
			
		case '/sk8':
			
			$requestPath = '/login'.'/goog'.'leLogin';

			$requestRule = (object)array(

				'requestName' => 'googleLogin__',
				'permit' => 20,
				'period' => 20,
				'lockPeriod' => 60,
				'displayLockPeriod' => '2 minutes'
			);

			break;	
			
		case '/od3':
			
			$requestPath = '/ex' . 'it';

			$requestRule = (object)array(

				'requestName' => 'exit__',
				'permit' => 5,
				'period' => 10,
				'lockPeriod' => 60,
				'displayLockPeriod' => '2 minutes'
			);

			break;	
			
		case '/wk8':
			
			$requestPath = '/login'.'/forgotPa'.'sswordRequest';

			$requestRule = (object)array(

				'requestName' => 'forgotPasswordRequest__',
				'permit' => 1,
				'period' => 20,
				'lockPeriod' => 180,
				'displayLockPeriod' => '5 minutes'
			);


			break;	
			
		case '/fh0':
			
			$requestPath = '/login'.'/chang'.'ePasswordForm';

			$requestRule = (object)array(

				'requestName' => 'changePasswordForm__',
				'permit' => 1,
				'period' => 20,
				'lockPeriod' => 300,
				'displayLockPeriod' => '5 minutes'
			);

			break;	
			
		case '/pg5':
			
			$requestPath = '/login'.'/simple';

			$requestRule = (object)array(

				'requestName' => 'simpleLogin__',
				'permit' => 5,
				'period' => 20,
				'lockPeriod' => 180,
				'displayLockPeriod' => '5 minutes'
			);

			break;	
			
		case '/cx7':
			
			$requestPath = '/notifications'.'/getFre'.'shNumber';

			$requestRule = (object)array(

				'requestName' => 'getFreshNumberNotifications__',
				'permit' => 10,
				'period' => 10,
				'lockPeriod' => 60,
				'displayLockPeriod' => '2 minutes'
			);

			break;	
			
		case '/yi9':
			
			$requestPath = '/notifications'.'/getL'.'ist';

			$requestRule = (object)array(

				'requestName' => 'getListNotif__',
				'permit' => 5,
				'period' => 10,
				'lockPeriod' => 180,
				'displayLockPeriod' => '5 minutes'
			);

			break;										
		
		case '/mk1':
			
			$requestPath = '/notifications'.'/processNot'.'ification';

			$requestRule = (object)array(

				'requestName' => 'processNotification__',
				'permit' => 50,
				'period' => 30,
				'lockPeriod' => 180,
				'displayLockPeriod' => '2 minutes'
			);

			break;										
		
		case '/oy9':
			
			$requestPath = '/notifications'.'/acceptInvi'.'ntation';

			$requestRule = (object)array(

				'requestName' => 'acceptInvintation__',
				'permit' => 30,
				'period' => 30,
				'lockPeriod' => 300,
				'displayLockPeriod' => '5 minutes'
			);

			break;										
		
		case '/fd6':
			
			$requestPath = '/notifications'.'/rejectIn'.'vintation';

			$requestRule = (object)array(

				'requestName' => 'rejectInvintation__',
				'permit' => 30,
				'period' => 30,
				'lockPeriod' => 300,
				'displayLockPeriod' => '5 minutes'
			);

			break;										
		
		case '/ap0':
			
			$requestPath = '/login'.'/updateUserPr'.'ofileProperties';

			$requestRule = (object)array(

				'requestName' => 'updateUserProfileProperties__',
				'permit' => 50,
				'period' => 30,
				'lockPeriod' => 300,
				'displayLockPeriod' => '5 minutes'
			);

			break;										
		
		case '/zk1':
			
			$requestPath = '/tiles'.'/getT'.'ile';

			$requestRule = (object)array(

				'requestName' => 'getTile__',
				'permit' => 25,
				'period' => 5,
				'lockPeriod' => 60,
				'displayLockPeriod' => '2 minutes'
			);

			break;										
		
		case '/vg9':
			
			$requestPath = '/rectangle'.'/updateIte'.'mColor';

			$requestRule = (object)array(

				'requestName' => 'updateItemColor__',
				'permit' => 20,
				'period' => 20,
				'lockPeriod' => 60,
				'displayLockPeriod' => '2 minutes'
			);

			break;										
		
		case '/ya7':
			
			$requestPath = '/rectangle'.'/dele'.'teItem';

			$requestRule = (object)array(

				'requestName' => 'deleteItemRect__',
				'permit' => 25,
				'period' => 20,
				'lockPeriod' => 60,
				'displayLockPeriod' => '2 minutes'
			);

			break;										
		
		case '/xb9':
			
			$requestPath = '/rectangle'.'/get'.'Items';

			$requestRule = (object)array(

				'requestName' => 'getItemsRect__',
				'permit' => 10,
				'period' => 10,
				'lockPeriod' => 60,
				'displayLockPeriod' => '2 minutes'
			);

			break;	

		default:
			
			$requestPath = $_SERVER['REQUEST_URI'];

			$requestRule = false;

			break;
	}


?>