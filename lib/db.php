<?php

Class DB {

	private $pdo = NULL;
	private $database;
	// if env = "debug", will print out detailed info, ( may make JSON responses invalid )
	public $env = "production";

	function __construct( $host, $database, $user, $password ) {
		$dsn = "mysql:host=" . $host . ";dbname=" . $database . ";charset=utf8";
		$opt = [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES => FALSE,
		];
		$this->pdo = new PDO($dsn, $user, $password, $opt);
		if ( defined( ENV ) )
			$this->env = ENV;
		$this->database = $database;
	}

	public function info( $message ) {
		if ( $this->env === "debug" ) {
			print_r( $message );
			echo "\n";
		}
	}

	public function getPropertyFromUrl( $url ) {
		$this->info( "getPropertyFromUrl" );

		$query = $this->pdo->prepare("
			SELECT *
			FROM `property-offers`
			WHERE `listing-url` = :url
			LIMIT 1
		");
		$query->execute([
			":url" => $url,
		]);
		return $query->fetch();
	}

	public function getAgentFromZip( $zip ) {
		$this->info( "getAgentFromZip" );

		$query = $this->pdo->prepare('
			SELECT agents.*, agent_licenses.license
			FROM agents
			LEFT OUTER JOIN agent_licenses
				ON agent_licenses.agent_id = agents.id
			INNER JOIN zipcodes
				ON zipcodes.state_code = agent_licenses.state
			WHERE zipcodes.zip = :zip
		');

		$query->execute([
			":zip" => $zip,
		]);

		return $query->fetch();
	}

	public function addBuyerOffer( $data ) {
		$this->info( "addBuyerOffer" );

		$query = $this->pdo->prepare('
			INSERT INTO buyer_offers (
				offer_id,
				file_id,
				buyer_first,
				buyer_last,
				buyer_email,
				buyer_phone,
				agent_first,
				agent_last,
				agent_email,
				agent_phone,
				purchase_price,
				earnest_money,
				payment_method,
				loan_amount,
				down_payment,
				close_of_escrow_date,
				seller_acceptance,
				appraisal,
				inspection,
				sale_of_another_property,
				as_is_sale,
				post_possession,
				other_terms,
				date_added
			) VALUES (
				:offer_id,
				:file_id,
				:buyer_first,
				:buyer_last,
				:buyer_email,
				:buyer_phone,
				:agent_first,
				:agent_last,
				:agent_email,
				:agent_phone,
				:purchase_price,
				:earnest_money,
				:payment_method,
				:loan_amount,
				:down_payment,
				:close_of_escrow_date,
				:seller_acceptance,
				:appraisal,
				:inspection,
				:sale_of_another_property,
				:as_is_sale,
				:post_possession,
				:other_terms,
				:date_added
			);
		');

		return $query->execute([
			":offer_id" => $data["offer_id"],
			":file_id" => $data["file_id"],
			":buyer_first" => $data["buyer_first"],
			":buyer_last" => $data["buyer_last"],
			":buyer_email" => $data["buyer_email"],
			":buyer_phone" => $data["buyer_phone"],
			":agent_first" => $data["agent_first"],
			":agent_last" => $data["agent_last"],
			":agent_email" => $data["agent_email"],
			":agent_phone" => $data["agent_phone"],
			":purchase_price" => $data["purchase_price"],
			":earnest_money" => $data["earnest_money"],
			":payment_method" => $data["payment_method"],
			":loan_amount" => $data["loan_amount"],
			":down_payment" => $data["down_payment"],
			":close_of_escrow_date" => $data["close_of_escrow_date"],
			":seller_acceptance" => $data["seller_acceptance"],
			":appraisal" => $data["appraisal"],
			":inspection" => $data["inspection"],
			":sale_of_another_property" => $data["sale_of_another_property"],
			":as_is_sale" => $data["as_is_sale"],
			":post_possession" => $data["post_possession"],
			":other_terms" => $data["other_terms"],
			":date_added" => $data["date_added"],
		]);
	}

	public function getAllPropertyData() {
		$this->info( "getAllPropertyData" );

		$query = $this->pdo->prepare( "SELECT * FROM `property-offers`" );

		$query->execute();

		return $query->fetchAll();
	}


	function getcontactprevnext($id) {

	
	$query = $this->pdo->prepare( "SELECT MIN(id) as idz FROM contacts WHERE id > :id	" );
	$query->execute([
		":id" => $id,
	]);

	$query1 = $this->pdo->prepare( "SELECT MAX(id) as idz FROM contacts WHERE id < :id	" );
	$query1->execute([
		":id" => $id,
	]);
	$nxtprev['next'] = $query->fetch();
	$nxtprev['pref'] = $query1->fetch();
	return $nxtprev;

	}

	function getcontactactivity($id) {

	
	$query = $this->pdo->prepare( "SELECT * FROM `activity` where user_id = :id order by id desc LIMIT 5 " );   //
	$query->execute([
		":id" => $id,
	]);

	
	return $query->fetchAll();

	}

	function getcontactfollowup($id) {

	
	$query = $this->pdo->prepare( "SELECT * FROM `followups` where contact_id = :id order by id desc LIMIT 5 " );   //
	$query->execute([
		":id" => $id,
	]);

	
	return $query->fetchAll();

	}





	public function getPropertyDataById( $id ) {
		$this->info( "getPropertyDataById" );

		$query = $this->pdo->prepare( "
			SELECT *
			FROM `property-offers`
			WHERE id = :id
			LIMIT 1
		" );

		$query->execute([
			":id" => $id,
		]);

		return $query->fetch();
	}

	public function getAllPropertyImages() {
		$this->info( "getAllPropertyImages" );

		$query = $this->pdo->prepare( "
			SELECT id
				`hero-image`,
				gallery_image_1,
				gallery_image_2,
				gallery_image_3,
				gallery_image_4,
				desc_image,
				amenities_image
			FROM `property-offers`
		");

		$query->execute();

		return $query->fetchAll();
	}

	public function updatePropertyText( $id, $key, $value ) {
		$this->info( "updatePropertyText" );

		$set = "`$key` = :value";

		$query = $this->pdo->prepare("
			UPDATE `property-offers`
			SET $set
			WHERE id = :id
			LIMIT 1
		");

		return $query->execute([
			":id" => $id,
			":value" => $value,
		]);
	}

	public function getNotes($contact_id){
		$query = $this->pdo->prepare("
			SELECT * from contact_notes where contact_id = :contact_id order by date desc
		");
		$query->execute([
			":contact_id" => $contact_id
		]);

		return $query->fetchAll();

	}

	public function getWorkflow( $user_id, $property_id ) {
		$this->info( "getWorkflow" );

		$query = $this->pdo->prepare( "
			SELECT *
			FROM workflows
			WHERE user_id = :user_id
				AND property_id = :property_id
			LIMIT 1
		" );

		$query->execute([
			":user_id" => $user_id,
			":property_id" => $property_id,
		]);

		return $query->fetch();
	}

	public function getMilestones( $workflow_id ) {
		$this->info( "getMilestones" );

		$query = $this->pdo->prepare( "
			SELECT *
			FROM milestones
			WHERE workflow_id = :workflow_id
			ORDER BY position ASC
		" );

		$query->execute([
			":workflow_id" => $workflow_id,
		]);

		return $query->fetchAll();
	}

	public function getMilestone( $milestone_id ) {
		$this->info( "getMilestone" );

		$query = $this->pdo->prepare( "
			SELECT *
			FROM milestones
			WHERE id = :milestone_id
			LIMIT 1
		" );

		$query->execute([
			":milestone_id" => $milestone_id,
		]);

		return $query->fetch();
	}

	public function getTasks( $milestone_id ) {
		$this->info( "getTasks" );

		$query = $this->pdo->prepare( "
			SELECT *
			FROM tasks
			WHERE milestone_id = :milestone_id
			ORDER BY position ASC
		" );

		$query->execute([
			":milestone_id" => $milestone_id,
		]);

		return $query->fetchAll();
	}

	public function getTask( $task_id ) {
		$this->info( "getTask" );

		$query = $this->pdo->prepare( "
			SELECT *
			FROM tasks
			WHERE id = :task_id
			LIMIT 1
		" );

		$query->execute([
			":task_id" => $task_id,
		]);

		return $query->fetch();
	}

	public function getWorkflowTemplate( $template_id ) {
		$this->info( "getWorkflowTemplate" );

		$query = $this->pdo->prepare( "
			SELECT *
			FROM workflow_templates
			WHERE id = :template_id
			LIMIT 1
		" );

		$query->execute([
			":template_id" => $template_id,
		]);

		return $query->fetch();
	}

	public function getWorkflowTemplates() {
		$this->info( "getWorkflowTemplates" );

		$query = $this->pdo->prepare( "
			SELECT *
			FROM workflow_templates
		" );

		$query->execute();

		return $query->fetchAll();
	}

	public function createWorkflow( $user_id, $property_id, $workflow_template_id, $status ) {
		$this->info( "createWorkflow" );

		$workflow_template = $this->getWorkflowTemplate( $workflow_template_id );

		$query = $this->pdo->prepare( "
			INSERT INTO workflows (
				user_id,
				property_id,
				name,
				status
			) VALUES (
				:user_id,
				:property_id,
				:name,
				:status
			)
		" );

		$result = $query->execute([
			":user_id" => $user_id,
			":property_id" => $property_id,
			":name" => $workflow_template["name"],
			":status" => $status,
		]);

		if ( $result )
			return $this->pdo->lastInsertId();
		else
			return FALSE;
	}

	public function getMilestoneTemplates( $workflow_template_id ) {
		$this->info( "getMilestoneTemplates" );

		$query = $this->pdo->prepare( "
			SELECT *
			FROM milestone_templates
			WHERE workflow_id = :workflow_template_id
			ORDER BY position ASC
		" );

		$query->execute([
			":workflow_template_id" => $workflow_template_id,
		]);

		return $query->fetchAll();
	}

	public function getMilestoneTemplate( $milestone_template_id ) {
		$this->info( "getMilestoneTemplate" );

		$query = $this->pdo->prepare( "
			SELECT *
			FROM milestone_templates
			WHERE id = :milestone_template_id
			LIMIT 1
		" );

		$query->execute([
			":milestone_template_id" => $milestone_template_id,
		]);

		return $query->fetch();
	}

	public function createMilestone( $milestone_template_id, $user_id, $workflow_id, $status = 0 ) {
		$this->info( "createMilestone" );

		$milestone_template = $this->getMilestoneTemplate( $milestone_template_id );

		$query = $this->pdo->prepare( "
			INSERT INTO milestones (
				name,
				workflow_id,
				position,
				status
			) VALUES (
				:name,
				:workflow_id,
				:position,
				:status
			)
		" );

		$result = $query->execute([
			":name" => $milestone_template["name"],
			":workflow_id" => $workflow_id,
			":position" => $milestone_template["position"],
			":status" => $status,
		]);

		if ( $result )
			return $this->pdo->lastInsertId();
		else
			return FALSE;
	}

	public function getTaskTemplates( $milestone_template_id ) {
		$this->info( "getTaskTemplates" );

		$query = $this->pdo->prepare( "
			SELECT *
			FROM task_templates
			WHERE milestone_id = :milestone_template_id
			ORDER BY position ASC
		" );

		$query->execute([
			":milestone_template_id" => $milestone_template_id,
		]);

		return $query->fetchAll();
	}

	public function getTaskTemplate( $task_template_id ) {
		$this->info( "getTaskTemplate" );

		if ( $task_template_id === "user" ) {

			$query = $this->pdo->prepare( "
				SELECT *
				FROM task_templates
				WHERE name = :task_template_id
				LIMIT 1
			" );
		} else {

			$query = $this->pdo->prepare( "
				SELECT *
				FROM task_templates
				WHERE id = :task_template_id
				LIMIT 1
			" );
		}

		$query->execute([
			":task_template_id" => $task_template_id,
		]);

		return $query->fetch();
	}

	public function createTask( $task_template_id, $milestone_id, $name = NULL, $description = NULL, $position = NULL, $due_date = NULL ) {
		$this->info( "createTask" );

		if ( $task_template_id !== NULL ) {
			$task_template = $this->getTaskTemplate( $task_template_id );
			$task_template["due_date"] = NULL;
		}
		else {
			$task_template = [
				"name" => $name,
				"description" => $description,
				"position" => $position,
				"due_date" => $due_date,
			];
		}

		$query = $this->pdo->prepare( "
			INSERT INTO tasks (
				milestone_id,
				name,
				description,
				position,
				due_date
			) VALUES (
				:milestone_id,
				:name,
				:description,
				:position,
				:due_date
			)
		" );

		$result = $query->execute([
			":milestone_id" => $milestone_id,
			":name" => $task_template["name"],
			":description" => $task_template["description"],
			":position" => $task_template["position"],
			":due_date" => $task_template["due_date"],
		]);

		if ( $result )
			return $this->pdo->lastInsertId();
		else
			return FALSE;
	}

	public function updateTask( $task_id, $status = NULL, $completion_date = NULL, $position = NULL, $description = NULL, $due_date = NULL, $name = NULL ) {
		$this->info( "updateTask" );

		$data = [
			":id" => $task_id,
		];

		$fields = [];

		if ( $status !== NULL ) {
			$fields[] = "status = :status";
			$data[ ":status" ] = $status;
		}
		if ( $completion_date !== NULL ) {
			$fields[] = "completion_date = :completion_date";
			$data[ ":completion_date" ] = $completion_date;
		}
		if ( $position !== NULL ) {
			$fields[] = "position = :position";
			$data[ ":position" ] = $position;
		}
		if ( $description !== NULL ) {
			$fields[] = "description = :description";
			$data[ ":description" ] = $description;
		}
		if ( $due_date !== NULL ) {
			$fields[] = "due_date = :due_date";
			$data[ ":due_date" ] = $due_date;
		}
		if ( $name !== NULL ) {
			$fields[] = "name = :name";
			$data[ ":name" ] = $name;
		}

		$field_string = implode( ", ", $fields );

		$sql = "
			UPDATE tasks
			SET $field_string
			WHERE id = :id
			LIMIT 1
		";

		if ( $this->env == "debug" ) {
			echo $sql;
		}

		$query = $this->pdo->prepare( $sql );

		$result = $query->execute( $data );

		if ( $this->env == "debug" ) {
			$query->debugDumpParams();
		}

		return $result;
	}

	public function deleteTask( $task_id ) {
		$this->info( "deleteTask" );

		$query = $this->pdo->prepare("
			DELETE FROM tasks
			WHERE id = :task_id
			LIMIT 1
		");

		return $query->execute([
			":task_id" => $task_id,
		]);
	}

	public function updateMilestone( $milestone_id, $status ) {
		$this->info( "updateMilestone" );

		$query = $this->pdo->prepare("
			UPDATE milestones
			SET status = :status
			WHERE id = :id
			LIMIT 1
		");

		return $query->execute([
			":id" => $milestone_id,
			":status" => $status,
		]);
	}

	public function updateWorkflow( $workflow_id, $status ) {
		$this->info( "updateWorkflow" );

		$query = $this->pdo->prepare("
			UPDATE workflows
			SET status = :status
			WHERE id = :id
			LIMIT 1
		");

		return $query->execute([
			":id" => $workflow_id,
			":status" => $status,
		]);
	}

	public function getMilestoneTemplateByName( $name ) {
		$this->info( "getMilestoneTemplateByName" );
		$query = $this->pdo->prepare( "
				SELECT *
				FROM task_templates
				WHERE name = :name
				LIMIT 1
			" );

		$query->execute([
			":name" => $name,
		]);

		return $query->fetch();
	}

    public function getContacts( $user_id ) {
		$this->info( "getContacts" );

		$query = $this->pdo->prepare( "
			SELECT *
			FROM contacts
			WHERE user_id = :user_id
		" );

		$query->execute([
			":user_id" => $user_id,
		]);

		return $query->fetchAll();
	}

	public function getContact( $id ) {
		$this->info( "getContact" );

		$query = $this->pdo->prepare( "
			SELECT *
			FROM contacts
			WHERE id = :id
			LIMIT 1
		" );

		$query->execute([
			":id" => $id,
		]);

		return $query->fetch();
	}

	public function getContactTemplate() {
		$this->info( "getContactTemplate" );

		// get column names from database
		$query = $this->pdo->prepare( "
			SELECT `COLUMN_NAME`
			FROM `INFORMATION_SCHEMA`.`COLUMNS`
			WHERE `TABLE_SCHEMA` = '" . $this->database . "'
				AND `TABLE_NAME` = 'contacts'
		" );
		$query->execute();
		$columns = $query->fetchAll();

		// make a blank array of them
		$template = [];
		foreach ( $columns as $column ) {
			$template[ $column["COLUMN_NAME"] ] = "";
		}

		return $template;
	}

	public function createContact( $data ) {
		$this->info( "createContact" );

		$query = $this->pdo->prepare( "
			INSERT INTO contacts (
				user_id,
				pipeline_status,
				transaction_type,
				contact_type,
				name_first,
				name_last,
				spouse_first,
				spouse_last,
				company,
				lead_source,
				mobile_phone,
				home_phone,
				business_phone,
				email,
				street,
				city,
				state,
				zip,
				notes
			) VALUES (
				:user_id,
				:pipeline_status,
				:transaction_type,
				:contact_type,
				:name_first,
				:name_last,
				:spouse_first,
				:spouse_last,
				:company,
				:lead_source,
				:mobile_phone,
				:home_phone,
				:business_phone,
				:email,
				:street,
				:city,
				:state,
				:zip,
				:notes
			)
		" );

		$result = $query->execute([
			":user_id" => $data["user_id"],
			":pipeline_status" => $data["pipeline_status"],
			":transaction_type" => $data["transaction_type"],
			":contact_type" => $data["contact_type"],
			":name_first" => $data["name_first"],
			":name_last" => $data["name_last"],
			":spouse_first" => $data["spouse_first"],
			":spouse_last" => $data["spouse_last"],
			":company" => $data["company"],
			":lead_source" => $data["lead_source"],
			":mobile_phone" => $data["mobile_phone"],
			":home_phone" => $data["home_phone"],
			":business_phone" => $data["business_phone"],
			":email" => $data["email"],
			":street" => $data["street"],
			":city" => $data["city"],
			":state" => $data["state"],
			":zip" => $data["zip"],
			":notes" => $data["notes"],
		]);

		if ( $result )
			return $this->pdo->lastInsertId();
		else
			return FALSE;
	}

	public function updateContact( $data ) {
		$this->info( "updateContact" );

		$query = $this->pdo->prepare( "
			UPDATE contacts
			SET pipeline_status = :pipeline_status,
				transaction_type = :transaction_type,
				contact_type = :contact_type,
				name_first = :name_first,
				name_last = :name_last,
				spouse_first = :spouse_first,
				spouse_last = :spouse_last,
				company = :company,
				lead_source = :lead_source,
				mobile_phone = :mobile_phone,
				home_phone = :home_phone,
				business_phone = :business_phone,
				email = :email,
				street = :street,
				city = :city,
				state = :state,
				zip = :zip,
				notes = :notes
			WHERE id = :id
				AND user_id = :user_id
			LIMIT 1
		" );

		return $query->execute([
			":id" => $data["id"],
			":user_id" => $data["user_id"],
			":pipeline_status" => $data["pipeline_status"],
			":transaction_type" => $data["transaction_type"],
			":contact_type" => $data["contact_type"],
			":name_first" => $data["name_first"],
			":name_last" => $data["name_last"],
			":spouse_first" => $data["spouse_first"],
			":spouse_last" => $data["spouse_last"],
			":company" => $data["company"],
			":lead_source" => $data["lead_source"],
			":mobile_phone" => $data["mobile_phone"],
			":home_phone" => $data["home_phone"],
			":business_phone" => $data["business_phone"],
			":email" => $data["email"],
			":street" => $data["street"],
			":city" => $data["city"],
			":state" => $data["state"],
			":zip" => $data["zip"],
			":notes" => $data["notes"],
		]);
	}

	public function deleteContact( $id, $user_id ) {
		$this->info( "deleteContact" );

		$query = $this->pdo->prepare("
			DELETE FROM contacts
			WHERE id = :id
				AND user_id = :user_id
			LIMIT 1
		");

		return $query->execute([
			":id" => $id,
			":user_id" => $user_id,
		]);
	}

	public function importContacts2($data){
		$query = $this->pdo->prepare('
			INSERT INTO contacts (user_id,street,city,state,zip,beneficiary_name,orig_mtg_bal,orig_date,sale_date,name_first,name_last,home_phone)
			VALUES(:user_id,:street,:city,:state,:zip,:beneficiary_name,:orig_mtg_bal,:orig_date,:sale_date,:name_first,:name_last,:home_phone);
		');
		return $query->execute([
			":user_id" => $data['user_id'],
			":street" => $data['street'],
			":city" => $data['city'],
			":state" => $data['state'],
			":zip" => $data['zip'],
			":beneficiary_name" => $data['beneficiary_name'],
			":orig_mtg_bal" => $data['orig_mtg_bal'],
			":orig_date" => $data['orig_date'],
			":sale_date" => $data['sale_date'],
			":name_first" => $data['name_first'],
			":name_last" => $data['name_last'],
			":home_phone" => $data['home_phone']
		]);
	}

	public function importContacts($data){
		$columns_arr = array();
		$placeholder_arr = array();
		$values_arr = array();
		$bind = array();
		foreach ($data as $key => $d){
			$columns_arr[] = $key;
			$placeholder_arr[] = ":$key";
			$bind[":$key"] = $d;
		}
		$columns = implode(',', $columns_arr);
		$placeholder = implode(',', $placeholder_arr);
		echo $queryString = "
			INSERT INTO contacts ($columns)
			VALUES($placeholder);
		";
		$query = $this->pdo->prepare($queryString);
		return $query->execute($bind);
	}

	public function addNote($data){
		$columns_arr = array();
		$placeholder_arr = array();
		$bind = array();
		foreach ($data as $key => $d){
			$columns_arr[] = $key;
			$placeholder_arr[] = ":$key";
			$bind[":$key"] = $d;
		}
		$columns = implode(',', $columns_arr);
		$placeholder = implode(',', $placeholder_arr);
		$queryString = "
			INSERT INTO contact_notes ($columns)
			VALUES($placeholder);
		";
		$query = $this->pdo->prepare($queryString);
		return $query->execute($bind);
	}

 	public function createActivity( $data ) {
		$this->info( "createActivity" );

		$query = $this->pdo->prepare( "
			INSERT INTO activity (
				user_id,
				activity_note,
				additional_notes,				
				created_at
			) VALUES (
				:user_id,
				:activity_note,				
				:additional_notes,
				:created_at
			)
		" );

		$result = $query->execute([
			":user_id" => $data["user_id"],
			":activity_note" => $data["activity_note"],
			":additional_notes" => $data["additional_notes"],			
			":created_at" => $data["created_at"],
		]);

		
		
		
		
		
		
		if ( $result )
			return $this->pdo->lastInsertId();
		else
			return FALSE;
	}

	public function createFollowup($data){
	
		print_r($data);

// 		$query = $this->pdo->prepare( "
// 			INSERT INTO `followups` (`followup_note`, `contact_id`, `followup_type`, `followup_time`, `reminder_type`, `before`, `followup_date`)
// VALUES (':followup_note', ':contact_id', ':followup_type', ':followup_time', ':reminder_type`', ':before', ':followup_date');
// 		" );

		$query = $this->pdo->prepare( "	INSERT INTO followups (`followup_note`,`contact_id`,`followup_type`,`followup_time`,`reminder_type`,`before`,`followup_date`) VALUES (:followup_note,:contact_id,:followup_type,:followup_time,:reminder_type,:before,:followup_date)");

		$result = $query->execute([
			":followup_note" => $data["followup_note"],
			":contact_id" => $data["contact_id"],
			":followup_type" => $data["followup_type"],			
			":followup_time" => $data["followup_time"],
			":reminder_type" => $data["reminder_type"],
			":before" => $data["before"],
			":followup_date" => $data["followup_date"],
		]);
		
		
		if ( $result )
			return true ;
		else
			return FALSE;
	}
	public function checkUser($email) {
		$query = $this->pdo->prepare( "
				SELECT *
				FROM users
				WHERE email = :email
				LIMIT 1
			" );

		$query->execute([
			":email" => $email,
		]);
		$data['row'] = $query->fetch();
		$data['count'] = $query->rowCount();

		return $data;
	}

	public function addFollowUp($data){
		$columns_arr = array();
		$placeholder_arr = array();
		$bind = array();
		foreach ($data as $key => $d){
			$columns_arr[] = $key;
			$placeholder_arr[] = ":$key";
			$bind[":$key"] = $d;
		}
		$columns = implode(',', $columns_arr);
		$placeholder = implode(',', $placeholder_arr);
		$queryString = "
			INSERT INTO followups ($columns)
			VALUES($placeholder);
		";
		$query = $this->pdo->prepare($queryString);
		return $query->execute($bind);
	}

	public function addData($data,$table){
		$columns_arr = array();
		$placeholder_arr = array();
		$bind = array();
		foreach ($data as $key => $d){
			$columns_arr[] = $key;
			$placeholder_arr[] = ":$key";
			$bind[":$key"] = $d;
		}
		$columns = implode(',', $columns_arr);
		$placeholder = implode(',', $placeholder_arr);
		$queryString = "
			INSERT INTO $table ($columns)
			VALUES($placeholder);
		";
		$query = $this->pdo->prepare($queryString);
		return $query->execute($bind);
	}

}
