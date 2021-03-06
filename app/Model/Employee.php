<?php
App::uses('AppModel', 'Model');
/**
 * Employee Model
 *
 * @property Cementery $Cementery
 * @property Position $Position
 */
class Employee extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	public $actsAs=array(
		'Upload.Upload'=>array(
			'foto'=>array(
				'fields'=>array(
					'dir'=>'foto_dir'),
				'thumbnailMethod'=>'php',
				'thumbnailSizes'=>array(
					'vga'=>'640x480',
					'thumb'=>'250x250'
					),
				'deteteOnUpdate'=>true,
				'deleteFolderOnDelete'=>false
				),//fotoend
			'ine_frontal'=>array(
				'fields'=>array(
					'dir'=>'ine_frontal_dir'),
					'thumbnailMethod'=>'php',
					'thumbnailSizes'=>array(
						'vga'=>'640x480',
						'thumb'=>'250x250'
						),
					'deteteOnUpdate'=>true,
					'deleteFolderOnDelete'=>false
				),	//ife end
			'ine_trasera'=>array(
				'fields'=>array(
					'dir'=>'ine_trasera_dir'),
					'thumbnailMethod'=>'php',
					'thumbnailSizes'=>array(
						'vga'=>'640x480',
						'thumb'=>'250x250'
						),
					'deteteOnUpdate'=>true,
					'deleteFolderOnDelete'=>false
				),	//ife end			
			'dom'=>array(
				'fields'=>array(
					'dir'=>'dom_dir'),
					'thumbnailMethod'=>'php',
					'thumbnailSizes'=>array(
						'vga'=>'640x480',
						'thumb'=>'250x250'
						),
					'deteteOnUpdate'=>true,
					'deleteFolderOnDelete'=>false
				)//domend

			)

		);

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'addres' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'foto' => array(
        	'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Algo anda mal, intente nuevamente',
				'on' => 'create'
			),
	    	'isUnderPhpSizeLimit' => array(
	    		'rule' => 'isUnderPhpSizeLimit',
	        	'message' => 'Archivo excede el límite de tamaño de archivo de subida de PHP'
	        ),
		    'isValidMimeType' => array(
	    		'rule' => array('isValidMimeType', array('image/jpeg', 'image/png'), false),
        		'message' => 'La imagen no es jpg ni png',
	    	),
		    'isBelowMaxSize' => array(
	    		'rule' => array('isBelowMaxSize', 4048576),
        		'message' => 'El tamaño de imagen es demasiado grande'
	    	),
		    'isValidExtension' => array(
	    		'rule' => array('isValidExtension', array('jpg', 'png'), false),
        		'message' => 'La imagen no tiene la extension jpg o png'
	    	),
		     // 'checkUniqueName' => array(
       //           'rule' => array('checkUniqueName'),
       //           'message' => 'La imagen ya se encuentra registrada',
       //           'on' => 'update'
       //   	),
	    ),
		'ine_frontal' => array(
        	'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Algo anda mal, intente nuevamente',
				'on' => 'create'
			),
	    	'isUnderPhpSizeLimit' => array(
	    		'rule' => 'isUnderPhpSizeLimit',
	        	'message' => 'Archivo excede el límite de tamaño de archivo de subida'
	        ),
		    'isValidMimeType' => array(
	    		'rule' => array('isValidMimeType', array('image/jpeg', 'image/png'), false),
        		'message' => 'La imagen debe ser jpg o png',
	    	),
		    'isBelowMaxSize' => array(
	    		'rule' => array('isBelowMaxSize', 4048576),
        		'message' => 'El tamaño de imagen es demasiado grande'
	    	),
		    'isValidExtension' => array(
	    		'rule' => array('isValidExtension', array('jpg', 'png'), false),
        		'message' => 'La imagen no tiene la extension jpg o png'
	    	),
		     // 'checkUniqueName' => array(
       //           'rule' => array('checkUniqueName'),
       //           'message' => 'La imagen ya se encuentra registrada',
       //           'on' => 'update'
       //   	),
	    ),//fin ine frontal
		'ine_trasera' => array(
        	'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Algo anda mal, intente nuevamente',
				'on' => 'create'
			),
	    	'isUnderPhpSizeLimit' => array(
	    		'rule' => 'isUnderPhpSizeLimit',
	        	'message' => 'Archivo excede el límite de tamaño de archivo de subida'
	        ),
		    'isValidMimeType' => array(
	    		'rule' => array('isValidMimeType', array('image/jpeg', 'image/png'), false),
        		'message' => 'La imagen debe ser jpg o png',
	    	),
		    'isBelowMaxSize' => array(
	    		'rule' => array('isBelowMaxSize', 4048576),
        		'message' => 'El tamaño de imagen es demasiado grande'
	    	),
		    'isValidExtension' => array(
	    		'rule' => array('isValidExtension', array('jpg', 'png'), false),
        		'message' => 'La imagen no tiene la extension jpg o png'
	    	),
		     // 'checkUniqueName' => array(
       //           'rule' => array('checkUniqueName'),
       //           'message' => 'La imagen ya se encuentra registrada',
       //           'on' => 'update'
       //   	),
	    ),//fin ine trasera	    
		'dom' => array(
        	'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Algo anda mal, intente nuevamente',
				'on' => 'create'
			),
	    	'isUnderPhpSizeLimit' => array(
	    		'rule' => 'isUnderPhpSizeLimit',
	        	'message' => 'Archivo excede el límite de tamaño de archivo de subida'
	        ),
		    'isValidMimeType' => array(
	    		'rule' => array('isValidMimeType', array('image/jpeg', 'image/png'), false),
        		'message' => 'La imagen no es jpg ni png',
	    	),
		    'isBelowMaxSize' => array(
	    		'rule' => array('isBelowMaxSize', 4048576),
        		'message' => 'El tamaño de imagen es demasiado grande'
	    	),
		    'isValidExtension' => array(
	    		'rule' => array('isValidExtension', array('jpg', 'png'), false),
        		'message' => 'La imagen no tiene la extension jpg o png'
	    	),
		     // 'checkUniqueName' => array(
       //           'rule' => array('checkUniqueName'),
       //           'message' => 'La imagen ya se encuentra registrada',
       //           'on' => 'update'
       //   	),
	    ),	    	    
		'telephone' => array(
			'phone' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'numero_cobro' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Unicamente números',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'apoyo' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Cementery' => array(
			'className' => 'Cementery',
			'foreignKey' => 'cementery_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Position' => array(
			'className' => 'Position',
			'foreignKey' => 'position_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Syndicate'=>array(
			'className'=>'Syndicate',
			'foreignKey'=>'syndicate_id',
			'conditions'=>'',
			'fields'=>'',
			'order'=>''
			)
	);
	function checkUniqueName($data)
	{
	    $isUnique = $this->find('first', array('fields' => array('Employee.foto'), 'conditions' => array('Employee.foto' => $data['foto'])));
	    if(!empty($isUnique))
	    {
	        return false;
	    }
	    else
	    {
	        return true;
	    }
	}

}
