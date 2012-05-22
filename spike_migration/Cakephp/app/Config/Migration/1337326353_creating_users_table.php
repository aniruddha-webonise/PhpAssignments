<?php
class CreatingUsersTable extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(

            'create_table' => array(
                'users' => array(
                    'id' => array(
                        'type'    =>'integer',
                        'null'    => false,
                        'default' => NULL,
                        'length'  => 10,
                        'key'     => 'primary'),
                    'name' => array(
                        'type'    =>'string',
                        'null'    => false,
                        'default' => NULL),
                    'created' => array(
                        'type' => 'datetime'),
                    'modified' => array(
                        'type' => 'datetime'),

                    )
                ),
		),
		'down' => array(
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}
}
